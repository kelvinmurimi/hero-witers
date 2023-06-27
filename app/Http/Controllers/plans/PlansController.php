<?php

namespace App\Http\Controllers\plans;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LucasDotVin\Soulbscription\Models\Plan;
use Mpesa;
class PlansController extends Controller
{
    //
    public function index(){
        $plans=Plan::orderBy('updated_at','desc')->get();
     return view('admin.subscriptions.index',[
        'plans'=>$plans,
     ]);
    }

   public function store(Request $request){
     // return $request->amount;
     
          $mpesa= new \Safaricom\Mpesa\Mpesa();
          $BusinessShortCode=174379;
          $LipaNaMpesaPasskey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
          $TransactionType="CustomerPayBillOnline";
          $Amount=$request->amount;
          $PartyA="254726582228";
          $PartyB=174379;
          $PhoneNumber="254726582228";
          $CallBackURL="https://simon.com";
          $AccountReference="hero writers Payment";
          $TransactionDesc="lipa Na M-PESA web development";
          $Remarks="Thank for paying!";
          
          $stkPushSimulation=$mpesa->STKPushSimulation(
              $BusinessShortCode,
              $LipaNaMpesaPasskey,
              $TransactionType,
              $Amount,
              $PartyA,
              $PartyB,
              $PhoneNumber,
              $CallBackURL,
              $AccountReference,
              $TransactionDesc,
              $Remarks
          );
  
          dd($stkPushSimulation);
      
   }
}
