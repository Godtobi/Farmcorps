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
                    <h3 class="card-title">Assign Farm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('assign-farmer')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <p>{{$request->quantity.' quantity of '.$request->crop.'is required'}}</p>
                        <p class="dangers text-danger"></p>
                        <div class="form-group">
                            <label>Farmers</label>
                            <select class="form-control pBtn" name="farmer">
                                <option value=""> Select Farmer</option>
                                @foreach($farmers as $farmer)
                                    <option value="{{$farmer->id}}">{{$farmer->name}}</option>
                                    @endforeach
                            </select>


                        </div>

                        <input name="id" value="{{$id}}" type="hidden">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quantity from selected farmer</label>
                            <input type="number" name="quantity"  class="form-control quantity" max="40" min="5" id="exampleInputEmail1" placeholder="Enter Quantity">
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


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
                <div class="card-header text-center">
                    <h3 class="card-title">Negotiate Farm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('agent-negotiate')}}" method="post">
                    @csrf
                    <div class="card-body">


                        <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="location"  class="form-control quantity" max="40" min="5" id="exampleInputEmail1" placeholder="Enter Location">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Available Quantity</label>
                            <input type="number" name="quantity"  class="form-control quantity"  id="exampleInputEmail1" placeholder="Enter Quantity">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Price per Ton (Naira)</label>
                            <input type="number" name="price_per_quantity"  class="form-control quantity"  min="0" id="exampleInputEmail1" placeholder="Enter Price">
                        </div>

                        <input name="order_id" value="{{$id}}" type="hidden">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Expected Delivery Date</label>
                            <input type="date" name="delivery_date"  class="form-control quantity" max="40" min="5" id="exampleInputEmail1" placeholder="Enter Quantity">
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

@section('scripts')
<script>
    $(document).on('change','.pBtn',function(){
        var id = $(this).val();
        console.log(id);
        $.ajax({
            type: 'POST',
            data: {'id': id},
            url: "{{url('/check-quantity')}}/" + id,
            dataType: 'json',
            success: function (res) {
                var data=res['farmer'];
                var quantity=res['quantity'];
                console.log(quantity);
                var output= quantity + " tons is available";
//                var output ="<p class='text-danger'>";
//                output+=data['quantity'] ;
//                output+=" tons is available.</p>";
                $(".dangers").empty();
                $(".dangers").append(output);
                console.log(data);
                $(".quantity").attr({
                    "max" : quantity,
                    "min" : 0
                })

            }

        })
    });
</script>
    @endsection