<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aboutus;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class aboutusController extends Controller
{
    public function index()
    {
        $items=Aboutus::all();
        return view('admin.aboutus.index',compact('items'));
    }

    public function create()  
    {
        return view('admin.aboutus.create');
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
        Aboutus::create($data);
        return redirect()->route('admin.aboutus');

    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);
}

    public function edit($id){
        $item=Aboutus::find($id);
        return view('admin.aboutus.edit',compact('item'));
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
        $item=Aboutus::find($id);
        $item->update($data);
        return redirect()->route('admin.aboutus');

    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

    }
    public function delete($id)
 {
    Aboutus::destroy($id);
  return redirect()->route('admin.aboutus')->with(['success'=>'تم الحذف بنجاح']);
  
 }

}

