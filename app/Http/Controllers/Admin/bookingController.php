<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;


class bookingController extends Controller
{
    public function index()
    {
        $items = Booking::all();
        return view('admin.booking.index',compact('items'));
    }
    public function delete($id)
    {
     Booking::destroy($id);
     return redirect()->route('admin.booking')->with(['success'=>'تم الحذف بنجاح']);
     
    }
}
