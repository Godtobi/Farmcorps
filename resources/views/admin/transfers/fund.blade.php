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
                    <h3 class="card-title">Donate</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('payment.store')}}" id="ackBtn" method="post">
                    @csrf
                    <div class="card-body">

                       <input name="email" value="{{$user->email}}" type="hidden">
                        <input name="currency" value="NGN" type="hidden">
                        <input name="redirect_url" type="hidden" value="http://127.0.0.1:8000/payment">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Amount</label>
                            <input type="number" name="amount" class="form-control" id="exampleInputEmail1" placeholder="In Naira E.g 10,000 Naira">
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label >Phone</label>--}}
                            {{--<input type="tel" name="phone" class="form-control" placeholder="Enter Phone">--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label >Company </label>--}}
                            {{--<input type="text" name="company" class="form-control"  placeholder="Enter Company Name" >--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="exampleInputEmail1">Role</label>--}}
                            {{--<select class="form-control" name="role" required >--}}
                                {{--<option value="1">Admin</option>--}}
                                {{--<option value="2">Food Company</option>--}}
                                {{--<option value="3">Agro Dealer</option>--}}
                                {{--<option value="3">Farmer</option>--}}
                            {{--</select>--}}

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

@section('scripts')


@endsection