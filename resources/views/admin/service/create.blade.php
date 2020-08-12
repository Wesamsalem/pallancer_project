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
            <span>الخدمات</span>
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
                <span class="caption-subject font-dark sbold uppercase"> الخدمات</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('admin.service.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">العنوان</label>
                        <div class="col-md-9">
                            <input type="text" name="title" class="form-control" placeholder="العنوان">
                        </div>
                    </div>
                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"> نص مختصر</label>
                        <div class="col-md-9">
                            <textarea name="short_content" class="form-control" placeholder="نص مختصر"></textarea>                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">المحتوى</label>
                        <div class="col-md-9">
                            <textarea name="content" id="content" class="form-control" placeholder="المحتوى"></textarea>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label">الصورة</label>
                        <div class="col-md-9">
                            <input type="file" name="img" class="form-control">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label">شعار</label>
                        <div class="col-md-9">
                            <input type="file" name="logo" class="form-control">
                        </div>
                    </div>
                   
                   
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">حفظ</button>
                            <a href="{{route('admin.service')}}" class="btn default">الغاء</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@push('js')

    <script>
        CKEDITOR.replace( 'content' );
    </script>

@endpush