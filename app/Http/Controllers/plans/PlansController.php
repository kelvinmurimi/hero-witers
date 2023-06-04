<?php

namespace App\Http\Controllers\plans;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LucasDotVin\Soulbscription\Models\Plan;

class PlansController extends Controller
{
    //
    public function index(){
        $plans=Plan::orderBy('updated_at','desc')->get();
     return view('admin.subscriptions.index',[
        'plans'=>$plans,
     ]);
    }
}
