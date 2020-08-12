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
            <span>تعديل</span>
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
                <span class="caption-subject font-dark sbold uppercase"> تعديل</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('admin.branche.update',$item->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">الاسم</label>
                        <div class="col-md-9">
                            <input type="string" name="name"value="{{$item->name}}" class="form-control" placeholder="الاسم">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">المحتوى</label>
                        <div class="col-md-9">
                            <textarea name="content" id="content" class="form-control" placeholder="المحتوى">{{$item->content}}</textarea>
                        </div>
                    </div>
                   
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">حفظ</button>
                            <a href="{{route('admin.branche')}}" class="btn default">الغاء</a>
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