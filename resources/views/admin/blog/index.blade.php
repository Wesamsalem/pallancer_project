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
            <span>مدونة</span>
        </li>
    </ul>
 
</div>
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">مدونة</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="{{route('admin.blog.create')}}" id="sample_editable_1_new" class="btn sbold green"> اضافة
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> العنوان </th>
                            <th> نص مختصر </th>
                            <th> المحتوى </th>
                            <th> الصورة </th>
                            <th> فيديو </th>
                            <th> عمليات </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            
                        <tr class="odd gradeX">
                        <td>{{$loop->iteration}}</td>
                            <td> {{$item->title}} </td>
                            <td> {!!$item->short_content!!} </td>
                            <td> {!!$item->content!!} </td> 
                            <td> <img src="{{url('/upload/img/'.$item->img)}}" width="50" height="50"/> </td>                
                            <td> <img src="{{url('/upload/img/'.$item->video)}}" width="50" height="50"/> </td>                
                            <td> <a href="{{route('admin.blog.edit',$item->id)}}" id="sample_editable_1_new" class="btn sbold yellow"> تعديل
                                <a class="btn sbold red" data-toggle="modal" data-target="#confirm-delete{{$item->id}}" >حذف</a>
                            </td>                                       
                        
                            </tr>
                        <div id="confirm-delete{{$item->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">حذف</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>هل تريد بالتأكيد الحذف</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                                        <a class="btn btn-danger btn-ok" href="{{route('admin.blog.delete',$item->id)}}">حذف</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>


@endsection