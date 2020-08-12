<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class blogController extends Controller
{
    public function index()
    {
        $items=Blog::all();
        return view('admin.blog.index',compact('items'));
    }

    public function create(){
        return view('admin.blog.create');
    }

    public function store(){
        $val=Validator::make(request()->all(),[
            'title'=>'required',
            'content'=>'required',
            'short_content'=>'required',
            ]);

            if($val->passes()) {
        if (request()->hasFile('img')) {
            $image = request()->file('img');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);
        }
        if (request()->hasFile('video')) {
            $image = request()->file('video');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);

        }
        $data=request()->all();
        $data['img']=$img_name;
        $data['video']=$img_name;
        Blog::create($data);
        return redirect()->route('admin.blog');
    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

    }
    public function edit($id){
        $item=Blog::find($id);
        return view('admin.blog.edit',compact('item'));
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
        if (request()->hasFile('video')) {
            $image = request()->file('video');
            $img_name = time().'_'.random_int(1111,9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/img/');
            $image->move($destinationPath, $img_name);
            $data['video']=$img_name;

        }
        $item=Blog::find($id);
        $item->update($data);
        return redirect()->route('admin.blog');

}
$error=$val->errors()->first();
return redirect()->back()->with(['error'=>$error]);

}
public function delete($id)
{
 Blog::destroy($id);
 return redirect()->route('admin.blog')->with(['success'=>'تم الحذف بنجاح']);
 
}
}

