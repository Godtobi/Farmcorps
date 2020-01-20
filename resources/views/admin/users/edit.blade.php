@extends('admin.layout.app')
@section('page_name_1', 'Users')
@section('page_name_2', 'Users')
@section('page_action', 'Update User')
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
                <div class="card-header text-center">
                    <h3 class="card-title">Update User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('users.update',$id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="card-body">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" value="{{$user->email}}"  name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label >Phone</label>
                            <input type="tel" name="phone" value="{{$user->phone}}" class="form-control" placeholder="Enter Phone">
                        </div>

                        <div class="form-group">
                            <label >Company </label>
                            <input type="text" value="{{$user->company}}" name="company" class="form-control"  placeholder="Enter Company Name" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <select class="form-control" name="role" required >
                                <option value="1">Admin</option>
                                <option value="2">Food Company</option>
                                <option value="3">Agro Dealer</option>
                                <option value="5">Farmer</option>
                            </select>

                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
    </div>


@endsection