<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Branche;
use App\Service;
use App\Testimonial;
use App\Advice;
use App\Blog;
use App\Aboutus;
use App\Faq;
use Illuminate\Support\Facades\Validator;
use App\Contactus;
use App\Booking;
use Illuminate\Support\Facades\Redirect;




class indexcontroller extends Controller
{
    //
    public function index(){
        $slides=Slide::where('page','0')->get();
        $branches=Branche::all();
        $services=Service::limit(7)->get();
        $testimonials=Testimonial::limit(7)->get();
        $advices=Advice::limit(7)->get();

        return view('front.index',compact('slides','branches','services','testimonials','advices'));
    }

    public function services(){
        $slide=Slide::where('page','2')->first();
        $services=Service::all();
        $branches=Branche::all();
        return view('front.services',compact('slide','services','branches'));
    }
    public function blogs(){
    $blogs=Blog::all();
    $branches=Branche::all();
    return view('front.blogs',compact('blogs','branches'));
}
public function advices(){
    $advices=Advice::all();
    $branches=Branche::all();
    return view('front.advices',compact('advices','branches'));
}
public function contactus(){
    $branches=Branche::all();

    return view('front.contactus', compact('branches'));

}



public function contactus_store(){
    $val=Validator::make(request()->all(),[
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'content'=>'required',
        'title'=>'required',


    ]);
    if($val->passes()) {
    $data=request()->all();
    Contactus::create($data);
    return redirect()->back()->with(['message'=>'تم الاضافة بنجاح','alert-type'=>'success']);
}
$error=$val->errors()->first();
return redirect()->back()->with(['message'=>$error,'alert-type'=>'error']);

}



public function branches(){
    $branches=Branche::all();

    return view('front.branches', compact('branches'));

}

public function aboutus(){
    $slides=Slide::where('page','1')->get();
    $aboutus=Aboutus::where('tec','0')->get();
    $tecs=Aboutus::where('tec','1')->get();
    $faqs=Faq::all();
    $branches=Branche::all();
    return view('front.aboutus', compact('aboutus','slides','tecs','faqs','branches'));

}


public function service($id){
    $item=Service::find($id);
    $branches=Branche::all();
    return view('front.service',compact('item','branches'));
}


public function blog($id){
    $item=Blog::find($id);
    $branches=Branche::all();
    return view('front.blog',compact('item','branches'));
}

public function advice($id){
    $item=Advice::find($id);
    $branches=Branche::all();
    return view('front.advice',compact('item','branches'));
}

public function booking_store()
    {
        $val=Validator::make(request()->all(),[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'branche_id'=>'required',


        ]);
        if($val->passes()) {
        $data=request()->all();
        Booking::create($data);
        return redirect()->back()->with(['message'=>'تم الاضافة بنجاح','alert-type'=>'success']);
    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['message'=>$error,'alert-type'=>'error']);

    }
}
