<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faq;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class faqController extends Controller
{
    public function index()
    {
        $items=Faq::all();
        return view('admin.faq.index',compact('items'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store()
    {
        $val=Validator::make(request()->all(),[
            'title'=>'required',
            'content'=>'required',

        ]);
        if($val->passes()) {
        $data=request()->all();
        Faq::create($data);
        return redirect()->route('admin.faq');
    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

    }
    public function edit($id){
        $item=Faq::find($id);
        return view('admin.faq.edit',compact('item'));
    }
    public function update($id)
    {
        $val=Validator::make(request()->all(),[
            'title'=>'required',
            'content'=>'required',

        ]);
        if($val->passes()) {
        $data=request()->all();
        
        $item=Faq::find($id);
        $item->update($data);
        return redirect()->route('admin.faq');

    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

    }
    public function delete($id)
    {
     Faq::destroy($id);
     return redirect()->route('admin.faq')->with(['success'=>'تم الحذف بنجاح']);
     
    }
}