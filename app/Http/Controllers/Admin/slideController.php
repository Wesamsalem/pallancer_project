<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class slideController extends Controller
{
    public function index()
    {
        $items=Slide::all();
        return view('admin.slide.index',compact('items'));
    }

    public function create()  
    {
        return view('admin.slide.create');
    }

    public function store(){
        $val=Validator::make(request()->all(),[
            'title'=>'required',
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
        Slide::create($data);
        return redirect()->route('admin.slide');

    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);
}

    public function edit($id){
        $item=Slide::find($id);
        return view('admin.slide.edit',compact('item'));
    }

    public function update($id){
        $val=Validator::make(request()->all(),[
            'title'=>'required',
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
        $item=Slide::find($id);
        $item->update($data);
        return redirect()->route('admin.slide');

    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

    }
    public function delete($id)
 {
  Slide::destroy($id);
  return redirect()->route('admin.slide')->with(['success'=>'تم الحذف بنجاح']);
  
 }

}
