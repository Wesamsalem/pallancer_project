<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Branche;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class brancheController extends Controller
{
    public function index()
    {
        $items=Branche::all();
        return view('admin.branche.index',compact('items'));
    }

    public function create()
    {
        return view('admin.branche.create');
    }

    public function store()
    {
        $val=Validator::make(request()->all(),[
            'name'=>'required',
            'content'=>'required',

        ]);
        if($val->passes()) {
        $data=request()->all();
        Branche::create($data);
        return redirect()->route('admin.branche');
    }
    $error=$val->errors()->first();
    return redirect()->back()->with(['error'=>$error]);

    }
    public function edit($id){
        $item=Branche::find($id);
        return view('admin.branche.edit',compact('item'));
    }
    
    public function update($id)
    {
        $val=Validator::make(request()->all(),[
            'name'=>'required',
            'content'=>'required',

        ]);
        if($val->passes()) {
        $data=request()->all();

        $item=Branche::find($id);
        $item->update($data);
        return redirect()->route('admin.branche');

}
$error=$val->errors()->first();
return redirect()->back()->with(['error'=>$error]);

}
public function delete($id)
{
 Branche::destroy($id);
 return redirect()->route('admin.branche')->with(['success'=>'تم الحذف بنجاح']);
 
}
}
