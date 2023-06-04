<?php

namespace App\Http\Controllers;
use App\Models\gig\Gig;
use Illuminate\Http\Request;

class GigsController extends Controller
{
    //m vc
    public function index(){

        $gigs=Gig::orderBy('updated_at','desc')->get();
        return view('admin.gigs.index',[
            'gigs'=>$gigs,
        ]);
    }
    public function create(){
         return "create";
    }
}
