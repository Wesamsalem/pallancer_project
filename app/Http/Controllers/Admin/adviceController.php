<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Advice;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class adviceController extends Controller
{
    public function index()
    {
        $items=Advice::all();
        return view('admin.advice.index',compact('items'));
    }

    public function create(){
        return view('admin.advice.create');
    }

    public function store(){
        $val=Validator::make(request()->all(),[
            'title'=>'required',
            'content'=>'required',
            
            ]);

            if($val->passes()) {
        if (request()->hasFile('img')) {
            $image = request()->file('img');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);
        }
        if (request()->hasFile('img_cover')) {
            $image = request()->file('img_cover');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);
        }
        
        $data=request()->all();
        $data['img']=$img_name;
        $data['img_cover']=$img_name;
        $data['video']=$img_name;
        Advice::create($data);
        return redirect()->route('admin.advice');
    }

    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

    }
    public function edit($id){
        $item=Advice::find($id);
        return view('admin.advice.edit',compact('item'));
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
        if (request()->hasFile('img_cover')) {
            $image = request()->file('img_cover');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);
            $data['img_cover']=$img_name;
        }
        
        $item=Advice::find($id);
        $item->update($data);
        return redirect()->route('admin.advice');

}
$error=$val->errors()->first();
return redirect()->back()->with(['error'=>$error]);

}
public function delete($id)
{
 Advice::destroy($id);
 return redirect()->route('admin.advice')
 ->with(['success'=>'تم الحذف بنجاح']);
 
}
}       
       


