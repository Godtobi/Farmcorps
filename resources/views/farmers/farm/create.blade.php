@extends('admin.layout.app')
@section('page_name_1', 'Users')
@section('page_name_2', 'Users')
@section('page_action', 'Create User')
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
                <div class="card-header text-center">
                    <h3 class="card-title">Create User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('farm.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>


                        <div class="form-group">
                            <label >Phone</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Seeds Grown</label>
                            <select class="form-control" name="crop" required >
                                <option value="maize">Maize</option>
                                <option value="cassava">Cassava</option>
                                <option value="millet">Millet</option>
                                <option value="sorghum">Sorghum</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Seeds Grown</label>
                            <select class="form-control" name="type" required >
                                <option value="dry">dry</option>
                                <option value="wet">wet</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label >Quantity Available</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Enter Available Quantity">
                        </div>

                        <div class="form-group">
                            <label >State</label>
                            <input type="text" name="state" class="form-control" placeholder="State">
                        </div>

                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" name="image" class="form-control" placeholder="State">
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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