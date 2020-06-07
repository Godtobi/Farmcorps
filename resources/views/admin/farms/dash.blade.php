@extends('admin.layout.app')
@section('page_name_1', 'Forms')
@section('page_name_2', 'NewsLetter')
@section('page_action', 'view subscription')
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">


    <table data-toggle="data-table" class="table" cellspacing="0" width="100%">

        <thead>
        <tr>

            <th>Location</th>
            <th>Quantity (ton)</th>
            <th>Price per ton</th>
            <th>Expected Delivery Date</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        </thead>
        <tfoot>
        <tr>

            <th>Location</th>
            <th>Quantity (ton)</th>
            <th>Price per ton</th>
            <th>Expected Delivery Date</th>
            <th>Status</th>
            <th>Action</th>


        </tr>
        </tfoot>
        <tbody>
        @foreach($negotiations as $item)
            <tr>

                <td>{{$item->location}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price_per_quantity}}</td>
                <td>{{$item->delivery_date}}</td>
                @if($item->status)
                    <td>Accepted</td>
                @else
                    <td>Pending</td>
                @endif

                <td>
                    <div class="row">


                        <div class="col-md-4">
                            @if(!$item->status)
                                <a href="{{route('confirm-negotiation',$item->id)}}"  type="submit" class="btn btn-primary btn-md"> Confirm</a>
                                @endif
                        </div>
                    </div>


                </td>



            </tr>
        @endforeach

        </tbody>
    </table>

    </div>
    </div>

@endsection