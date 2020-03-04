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
                <form action="{{route('users.store')}}" id="ackBtn" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Name</label>
                            <select name="seed" class="form-control">
                                <option value="maize">Maize</option>
                                <option value="Fertilizer">Fertilizer</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" placeholder="In Kg E.g 30kg">
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
    <script>

        $(document).on("click", "#ackBtn", function (e) {
            e.preventDefault();
            console.log(23);
            swal({
                title: "Are you sure?",
                text: "Are you sure you want to approve this payment",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "NO",
            }).then(result => {
                var id = $(this).val();
            $.ajax({
                type: 'POST',
                data: {'id': id},
                url: "{{url('payments/update_payment')}}/" + id,
                dataType: 'json',
                success: function (res) {
                    //console.log(res.data)

                    swal("Acknowledged!", "Payment has been acknowledged", "success");
                    window.location.href = "{{url('payments/uploaded_payment')}}";
                }
            });
        });

        });


    </script>

@endsection