@extends('admin.layout.app')
@section('page_name_1', 'Users')
@section('page_name_2', 'Users')
@section('page_action', 'View User')
@section('content')

    <div class="row">
<div class="col-md-12">

    <!-- Profile Image -->
    <div class="card card-primary card-outline">

        <div class="card-body box-profile">
            <div class="pull-right">
                <a href="{{route('sendpassword',$user->id)}}" class="btn btn-success btn-md"><b>Send Password</b></a>

                <a href="{{route('users.interview',$user->id)}}" class="btn btn-success btn-md"><b>Interview</b></a>
            </div>
            <div class="text-center">

                <img class="profile-user-img img-fluid img-circle"
                     src="{{asset('admin_asset/dist/img/user4-128x128.jpg')}}"
                     alt="User profile picture">
                <h3 class="profile-username ">{{$user->name}}</h3>
            </div>





<ul class="list-group list-group-unbordered mb-3">
   <li class="list-group-item">
       <b>Email</b> <a class="float-right">{{$user->email}}</a>
   </li>
   <li class="list-group-item">
       <b>Phone</b> <a class="float-right">{{$user->phone}}</a>
   </li>
    <li class="list-group-item">
        <b>Role</b> <a class="float-right">{{$user->role}}</a>
    </li>

   <li class="list-group-item">
       <b>Company</b> <a class="float-right">{{$user->company}}</a>
   </li>
    <li class="list-group-item">
        <b>Password Sent</b> <a class="float-right">{{$user->password_counter}}</a>
    </li>
    <li class="list-group-item">
        <b>Created At</b> <a class="float-right">{{$user->created_at}}</a>
    </li>
    <li class="list-group-item">
        <b>Description</b> <a class="float-right">{{$user->description}}</a>
    </li>
</ul>


</div>
<!-- /.card-body -->
</div>
<!-- /.card -->

<!-- About Me Box -->
{{--<div class="card card-primary">--}}
{{--<div class="card-header">--}}
{{--<h3 class="card-title">About Me</h3>--}}
{{--</div>--}}
{{--<!-- /.card-header -->--}}
{{--<div class="card-body">--}}
{{--<strong><i class="fas fa-book mr-1"></i> Education</strong>--}}

{{--<p class="text-muted">--}}
   {{--B.S. in Computer Science from the University of Tennessee at Knoxville--}}
{{--</p>--}}

{{--<hr>--}}

{{--<strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>--}}

{{--<p class="text-muted">Malibu, California</p>--}}

{{--<hr>--}}

{{--<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>--}}

{{--<p class="text-muted">--}}
   {{--<span class="tag tag-danger">UI Design</span>--}}
   {{--<span class="tag tag-success">Coding</span>--}}
   {{--<span class="tag tag-info">Javascript</span>--}}
   {{--<span class="tag tag-warning">PHP</span>--}}
   {{--<span class="tag tag-primary">Node.js</span>--}}
{{--</p>--}}

{{--<hr>--}}

{{--<strong><i class="far fa-file-alt mr-1"></i> Notes</strong>--}}

{{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>--}}
{{--</div>--}}
{{--<!-- /.card-body -->--}}
{{--</div>--}}
<!-- /.card -->
</div>
</div>

@endsection