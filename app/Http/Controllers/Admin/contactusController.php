<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contactus;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class contactusController extends Controller
{
    public function index()
    {
        $items=Contactus::all();
        return view('admin.contactus.index',compact('items'));
    }

    
    public function delete($id)
    {
     Contactus::destroy($id);
     return redirect()->route('admin.contactus')->with(['success'=>'تم الحذف بنجاح']);
     
    }
}

