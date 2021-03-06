@extends('admin.layout.master')

@section('content')


<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{route('admin.index')}}">الصفحة الرئيسية</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>تعديل سلايد</span>
        </li>
    </ul>
 
</div>


<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">تعديل سلايد</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('admin.slide.update',$item->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">العنوان</label>
                        <div class="col-md-9">
                            <input type="text" name="title" value="{{$item->title}}" class="form-control" placeholder="العنوان">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">المحتوى</label>
                        <div class="col-md-9">
                            <textarea name="content" class="form-control" placeholder="المحتوى">{{$item->content}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">الصورة</label>
                        <div class="col-md-9">
                            <input type="file" name="img" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">تابعة لصفحة </label>
                        <div class="col-md-9">
                            
                            <select name="page" class="form-control">
                                <option value="0" @if($item->page == 0) selected @endif>الرئيسية</option>
                                <option value="1" @if($item->page == 1) selected @endif>من نحن</option>
                                <option value="2" @if($item->page == 2) selected @endif>الخدمات</option>
                            </select>
                        </div>
                    </div>
                   
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">حفظ</button>
                            <a href="{{route('admin.slide')}}" class="btn default">الغاء</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection