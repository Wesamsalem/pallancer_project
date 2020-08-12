<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class serviceController extends Controller
{
    public function index()
    {
        $items=Service::all();
        return view('admin.service.index',compact('items'));
    }

    public function create(){
        return view('admin.service.create');
    }

    public function store(){
        $val=Validator::make(request()->all(),[
            'title'=>'required',
            'content'=>'required',
            'img'=>'required',
            'short_content'=>'required',
            'logo'=>'required',
            ]);

            if($val->passes()) {

        if (request()->hasFile('img')) {
            $image = request()->file('img');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);
        }
        if (request()->hasFile('logo')) {
            $image = request()->file('logo');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);

        }
        $data=request()->all();
        $data['logo']=$img_name;
        $data['img']=$img_name;
        Service::create($data);
        return redirect()->route('admin.service');
    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

}
public function edit($id){
    $item=Service::find($id);
    return view('admin.service.edit',compact('item'));
}
public function update($id){
    $val=Validator::make(request()->all(),[
        'title'=>'required',
        'content'=>'required',
            'short_content'=>'required',
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
    if (request()->hasFile('logo')) {
        $image = request()->file('logo');
        $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/upload/img/');
        $image->move($destinationPath, $img_name);
        $data['logo']=$img_name;

    }
   
    $item=Service::find($id);
        $item->update($data);
        return redirect()->route('admin.service');
}    
$error=$val->errors()->first();
return redirect()->back()->with(['error'=>$error]);

}
public function delete($id)
{
 Service::destroy($id);
 return redirect()->route('admin.service')->with(['success'=>'تم الحذف بنجاح']);
 
}
}
