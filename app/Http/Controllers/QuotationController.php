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

        Quotation::create($request->all());

        return redirect()->back()->with('success', 'Your quotation has been submitted!');
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
