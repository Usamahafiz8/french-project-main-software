<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Step1;
use App\Models\Step2;
use App\Models\Step3;
use App\Models\Step4;
use App\Models\Step4Detail;
use App\Models\Step5;
use App\Models\Step6;
use App\Models\Step6Detail;
use App\Models\Step7;
use App\Models\Step8;
use App\Models\Step8Detail;
use App\Models\Step9;
use App\Models\Step10;
use App\Models\Step10Detail;
use App\Models\Step11;
use App\Models\Step11Detail;
use App\Models\Step12;
use App\Models\Step13;
use App\Models\Step13Detail;
use App\Models\Step14;
use App\Models\Step15;
use PDF;
use Auth;
class generatePDFController extends Controller
{

    public function getPDFdata(Request $request, $id) {
        $auditor_id = Auth::id();
        $auditor_data = User::find($auditor_id);
        $customer_data = Customer::find($id);
        
        $step1_data = Step1::where('customer_id', $id)->first();
        $step2_data = Step2::where('customer_id', $id)->first();
        $step3_data = Step3::where('customer_id', $id)->first();
        $step4_data = Step4::where('customer_id', $id)->first();

        $step5_data = Step5::where('customer_id', $id)->first();
        $step6_data = Step6::where('customer_id', $id)->first();
        $step7_data = Step7::where('customer_id', $id)->first();
        $step8_data = Step8::where('customer_id', $id)->first();
        $step9_data = Step9::where('customer_id', $id)->first();
        $step10_data = Step10::where('customer_id', $id)->first();
        $step11_data = Step11::where('customer_id', $id)->first();
        $step12_data = Step12::where('customer_id', $id)->first();
        $step13_data = Step13::where('customer_id', $id)->first();
        $step14_data = Step14::where('customer_id', $id)->first();
        $step15_data = Step15::where('customer_id', $id)->first();
        $step4_dtl_data = Step4Detail::where('customer_id', $id)->get();
        $step6_dtl_data = Step6Detail::where('customer_id', $id)->get();
        $step8_dtl_data = Step8Detail::where('customer_id', $id)->get();
        $step10_dtl_data = Step10Detail::where('customer_id', $id)->get();
        $step11_dtl_data = Step11Detail::where('customer_id', $id)->get();
        $step13_dtl_data = Step13Detail::where('customer_id', $id)->get();
        
        // $pdf = PDF::loadView('formPDF', compact('customer_data', 'auditor_data', 'step1_data'));
        // $pdf->set_option('isRemoteEnabled', true);        
        // return $pdf->download('formPDF.pdf');   
        $pdf = PDF::loadView('formPDF', compact('customer_data', 'auditor_data', 'step1_data', 'step2_data', 'step3_data','step4_data', 'step5_data', 'step6_data','step7_data', 'step8_data', 'step9_data','step10_data','step11_data','step12_data', 'step13_data', 'step14_data','step15_data','step4_dtl_data','step6_dtl_data','step8_dtl_data','step10_dtl_data','step11_dtl_data','step13_dtl_data'));
        $pdf->set_option('isRemoteEnabled', true);        
        $pdf->set_option('setIsHtml5ParserEnabled', true);        
        $pdf->set_option('setTempDir', 'temp');        
        return $pdf->download('formPDF.pdf');   
    }
}
