<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class testimonialController extends Controller
{
    public function index()
    {
        $items=Testimonial::all();
        return view('admin.testimonial.index',compact('items'));
    }

    public function create(){
        return view('admin.testimonial.create');
    }

    public function store(){
        $val=Validator::make(request()->all(),[
            'name'=>'required',
            'content'=>'required',
            'img'=>'required',

        ]);
        if($val->passes()) {
        if (request()->hasFile('img')) {
            $image = request()->file('img');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);
        }
        $data=request()->all();
        $data['img']=$img_name;
        Testimonial::create($data);
        return redirect()->route('admin.testimonial');
    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

    }
    public function edit($id){
        $item=Testimonial::find($id);
        return view('admin.testimonial.edit',compact('item'));
    }

    public function update($id){
        $val=Validator::make(request()->all(),[
            'name'=>'required',
            'content'=>'required',

        ]);
        if($val->passes()) {
            $data=request()->all();
        if (request()->hasFile('img')) {
            $image = request()->file('img');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);
            $data['img']=$img_name;
        }
        $item=Testimonial::find($id);
        $item->update($data);
        return redirect()->route('admin.testimonial');

    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

    }
    public function delete($id)
    {
    Testimonial::destroy($id);
     return redirect()->route('admin.testimonial')->with(['success'=>'تم الحذف بنجاح']);
     
    }
   
}

