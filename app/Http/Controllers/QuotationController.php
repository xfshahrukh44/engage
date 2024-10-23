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
        $html .= "first name: ".$quotation->first_name."\n";
        $html .= "last name: ".$quotation->last_name."\n";
        $html .= "email: ".$quotation->email."\n";
        $html .= "phone: ".$quotation->phone."\n";
        $html .= "insurance type: ".$quotation->insurance_type."\n";
        $html .= "time to call: ".$quotation->time_to_call."\n";
        $html .= "type: ".$quotation->type."\n";
        $html .= "household size: ".$quotation->household_size."\n";
        $html .= "household income: ".$quotation->household_income."\n";
        $html .= "gender: ".$quotation->gender."\n";
        $html .= "dob: ".$quotation->dob."\n";
        $html .= "address: ".$quotation->address."\n";
        $html .= "marital status: ".$quotation->marital_status."\n";
        $html .= "for self: ".$quotation->is_self."\n";
        $html .= "for spouse: ".$quotation->is_spouse."\n";
        $html .= "for children: ".$quotation->is_children."\n";
        $html .= "children: ".$quotation->children."\n";

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
        $html .= "fname: ".$inquiry->fname."\n";
        $html .= "lname: ".$inquiry->lname."\n";
        $html .= "email: ".$inquiry->email."\n";
        $html .= "notes: ".$inquiry->notes."\n";
        $html .= "phone: ".$inquiry->phone."\n";
        $html .= "time: ".$inquiry->time."\n";
        $html .= "date: ".$inquiry->date."\n";
        $html .= "classes: ".$inquiry->classes."\n";
        $html .= "form name: ".$inquiry->form_name."\n";
        $html .= "address: ".$inquiry->address."\n";
        $html .= "city: ".$inquiry->city."\n";
        $html .= "zipcode: ".$inquiry->zipcode."\n";
        $html .= "type of insurance: ".$inquiry->type_of_insurance."\n";
        $html .= "suite: ".$inquiry->suite."\n";

        Mail::send([], [], function ($message) use ($html) {
            $message->to('info@engagehealthinsurance.org')
                ->subject('Contact inquiry')
                ->setBody($html, 'text/html');
        });

        return redirect()->back()->with('success', 'Your contact inquiry has been submitted to administration!');
    }
}
