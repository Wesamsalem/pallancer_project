@if(session('error'))
<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>{{session('error')}}!</strong>
</div>

@elseif(session('success'))

<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>{{session('success')}}!</strong>
</div>
@endif