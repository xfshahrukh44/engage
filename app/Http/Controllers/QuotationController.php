<?php

namespace App\Http\Controllers;

use App\Inquiry;
use App\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class QuotationController extends Controller
{
    public function store(Request $request)
    {
        try {
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
            $html .= "First name: " . $quotation->first_name . "<br>";
            $html .= "Last name: " . $quotation->last_name . "<br>";
            $html .= "Email: " . $quotation->email . "<br>";
            $html .= "Phone: " . $quotation->phone . "<br>";
            $html .= "Insurance type: " . $quotation->insurance_type . "<br>";
            $html .= "Time to call: " . $quotation->time_to_call . "<br>";
            $html .= "Type: " . $quotation->type . "<br>";
            $html .= "Household size: " . $quotation->household_size . "<br>";
            $html .= "Household income: " . $quotation->household_income . "<br>";
            $html .= "Gender: " . $quotation->gender . "<br>";
            $html .= "Date of birth: " . $quotation->dob . "<br>";
            $html .= "Address: " . $quotation->address . "<br>";
            $html .= "Marital status: " . $quotation->marital_status . "<br>";
            $html .= "For self: " . $quotation->is_self . "<br>";
            $html .= "For spouse: " . $quotation->is_spouse . "<br>";
            $html .= "For children: " . $quotation->is_children . "<br>";
            $html .= "Children: " . $quotation->children . "<br>";
    
           Mail::html($html, function ($message) {
                $message->to('info@engagehealthinsurance.org')
                    ->subject('Engage | Get a Quote');
            });

    
            return redirect()->back()->with('success', 'Your request for quotation has been submitted!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }


    public function inquiryStore (Request $request)
    {
        $inquiry = Inquiry::create($request->all());

        $html = '';
        $html .= "First name: ".$inquiry->fname."<br>";
        $html .= "Last name: ".$inquiry->lname."<br>";
        $html .= "Email: ".$inquiry->email."<br>";
        $html .= "Notes: ".$inquiry->notes."<br>";
        $html .= "Phone: ".$inquiry->phone."<br>";
        $html .= "Time: ".$inquiry->time."<br>";
        $html .= "Date: ".$inquiry->date."<br>";
        $html .= "Classes: ".$inquiry->classes."<br>";
        $html .= "Form name: ".$inquiry->form_name."<br>";
        $html .= "Address: ".$inquiry->address."<br>";
        $html .= "City: ".$inquiry->city."<br>";
        $html .= "Zipcode: ".$inquiry->zipcode."<br>";
        $html .= "Type of insurance: ".$inquiry->type_of_insurance."<br>";
        $html .= "Suite: ".$inquiry->suite."<br>";

        // Mail::send([], [], function ($message) use ($html) {
        //     $message->to('info@engagehealthinsurance.org')
        //         ->subject('Engage | Contact inquiry')
        //         ->setBody($html, 'text/html');
        // });
        
        Mail::html($html, function ($message) {
            $message->to('info@engagehealthinsurance.org')
                ->subject('Engage | Contact inquiry');
        });

        return redirect()->back()->with('success', 'Your contact inquiry has been submitted to administration!');
    }
}
