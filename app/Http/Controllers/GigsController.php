<?php

namespace App\Http\Controllers;

use App\Models\gig\Gig;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\GigFormRequest;
use App\Http\Requests\GigsFormRequest;

class GigsController extends Controller
{
    //m vc
    public function index(){

        $gigs=Gig::orderBy('updated_at','desc')->get();
        return view('admin.gigs.index',[
            'gigs'=>$gigs,
        ]);
    }
    //create gig
    public function create(){
         return view('admin.gigs.create');
    }
    //store gig
    public function store(GigsFormRequest $request ){
      //$request->validated();
       // dd("bb");
     $user_id = Auth::user()->id;

      $gig_title = $request->gig_title;
        $slug=Str::slug($request->gig_title,'-');
        Gig::create([
            'gig_title'=>$gig_title,
            'gig_slug'=>$slug,
            'gig_body'=>$request->gig_body,
            'user_id'=>$user_id,
        ]);
        return redirect(route('gigs.index'))->with('success',"Gig Created Successfully");
    }
    //edit gig
    public function edit($id){
        $gig=Gig::findOrfail($id);
        return view('admin.gigs.edit',[
            'gig'=>$gig,
        ]);
    }
    //update gig
    public function update(GigFormRequest $request,$id ){
        $request->validated();
        $gig_title = $request->gig_title;
        $slug=Str::slug($request->gig_title,'-');
        $gig=Gig::findOrfail($id);
        $gig->update([
            'gig_title'=>$gig_title,
            'gig_slug'=>$slug,
            'gig_body'=>$request->gig_body,
        ]);
        return redirect(route('gigs.index'))->with('success',"Gig Updated Successfully");
    }
    //delete gig
    public function destroy($id){
        $gig=Gig::findOrfail($id);
        $gig->delete();
        return redirect(route('gigs.index'))->with('danger',"Gig deleted Successfully");
    }
    
}
