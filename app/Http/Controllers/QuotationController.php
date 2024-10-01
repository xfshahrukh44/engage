<?php

namespace App\Http\Controllers;

use App\Inquiry;
use App\Quotation;
use Illuminate\Http\Request;
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

        return redirect()->back()->with('success', 'Your request for quotation has been submitted!');
    }

    public function inquiryStore (Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'first_name' => 'required',
//            'last_name' => 'required',
//            'email' => 'required_without:phone',
//            'phone' => 'required_without:email',
//        ]);
//
//        if ($validator->fails()) {
//            return redirect()->back()->with('error', $validator->errors()->first());
//        }

//        dd($request->all());
        Inquiry::create($request->all());

        return redirect()->back()->with('success', 'Your contact inquiry has been submitted to administration!');
    }
}
