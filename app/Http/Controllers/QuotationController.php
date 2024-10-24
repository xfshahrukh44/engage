<?php

namespace App\Http\Controllers;

use App\Inquiry;
use App\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class QuotationController extends Controller
{
    public function store (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required_without:phone',
            'phone' => 'required_without:email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $quotation = Quotation::create($request->all());

        $quotation->is_self = $request->has('is_self') && $request->get('is_self') == 'on' ? 'Yes' : 'No';
        $quotation->is_spouse = $request->has('is_spouse') && $request->get('is_spouse') == 'on' ? 'Yes' : 'No';
        $quotation->is_children = $request->has('is_children') && $request->get('is_children') == 'on' ? 'Yes' : 'No';
        $quotation->marital_status = $request->get('marital_status');
        $quotation->children = $request->get('children');
        $quotation->save();

        $html = '';
        $html .= "first name: ".$quotation->first_name."<br>";
        $html .= "last name: ".$quotation->last_name."<br>";
        $html .= "email: ".$quotation->email."<br>";
        $html .= "phone: ".$quotation->phone."<br>";
        $html .= "insurance type: ".$quotation->insurance_type."<br>";
        $html .= "time to call: ".$quotation->time_to_call."<br>";
        $html .= "type: ".$quotation->type."<br>";
        $html .= "household size: ".$quotation->household_size."<br>";
        $html .= "household income: ".$quotation->household_income."<br>";
        $html .= "gender: ".$quotation->gender."<br>";
        $html .= "dob: ".$quotation->dob."<br>";
        $html .= "address: ".$quotation->address."<br>";
        $html .= "marital status: ".$quotation->marital_status."<br>";
        $html .= "for self: ".$quotation->is_self."<br>";
        $html .= "for spouse: ".$quotation->is_spouse."<br>";
        $html .= "for children: ".$quotation->is_children."<br>";
        $html .= "children: ".$quotation->children."<br>";

        Mail::send([], [], function ($message) use ($html) {
            $message->to('info@engagehealthinsurance.org')
                ->subject('Quotation')
                ->setBody($html, 'text/html');
        });

        return redirect()->back()->with('success', 'Your request for quotation has been submitted!');
    }

    public function inquiryStore (Request $request)
    {
        $inquiry = Inquiry::create($request->all());

        $html = '';
        $html .= "fname: ".$inquiry->fname."<br>";
        $html .= "lname: ".$inquiry->lname."<br>";
        $html .= "email: ".$inquiry->email."<br>";
        $html .= "notes: ".$inquiry->notes."<br>";
        $html .= "phone: ".$inquiry->phone."<br>";
        $html .= "time: ".$inquiry->time."<br>";
        $html .= "date: ".$inquiry->date."<br>";
        $html .= "classes: ".$inquiry->classes."<br>";
        $html .= "form name: ".$inquiry->form_name."<br>";
        $html .= "address: ".$inquiry->address."<br>";
        $html .= "city: ".$inquiry->city."<br>";
        $html .= "zipcode: ".$inquiry->zipcode."<br>";
        $html .= "type of insurance: ".$inquiry->type_of_insurance."<br>";
        $html .= "suite: ".$inquiry->suite."<br>";

        Mail::send([], [], function ($message) use ($html) {
            $message->to('info@engagehealthinsurance.org')
                ->subject('Contact inquiry')
                ->setBody($html, 'text/html');
        });

        return redirect()->back()->with('success', 'Your contact inquiry has been submitted to administration!');
    }
}
