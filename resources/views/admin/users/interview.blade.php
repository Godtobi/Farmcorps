@extends('admin.layout.app')
@section('page_name_1', 'Users')
@section('page_name_2', 'Users')
@section('page_action', 'Interview')
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
                <div class="card-header text-center">
                    <h3 class="card-title">Interview</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('interview.save',$id)}}" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label >Company </label>
                            <input type="text" value="{{$user->company}}" name="company" class="form-control"  placeholder="Enter Company Name" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Who are you</label>
                            <select class="form-control"  name="role" required>
                                <option value="food_company">Food Company</option>
                                <option value="agro_dealer">Agro Dealer</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Seed Use</label>
                            <select name="seed" class="form-control"  required>
                                <option value="Maize">Maize</option>
                                <option value="Sorghum">Sorghum</option>
                                <option value="Others">Others</option>
                            </select>

                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label >None Description</label>--}}
                            {{--<textarea class="form-control" name="none_description">Briefly describe yourself and how you think we can halp you</textarea>--}}
                        {{--</div>--}}

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