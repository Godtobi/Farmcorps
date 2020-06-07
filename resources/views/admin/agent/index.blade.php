@extends('admin.layout.app')
@section('page_name_1', 'Users')
@section('page_name_2', 'Users')
@section('page_action', 'view users')
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">


    <table data-toggle="data-table" class="table" cellspacing="0" width="100%">

        <thead>
        <tr>
            <th>Name</th>
            <th>Crop</th>
            <th>Maturity</th>
            <th>Action</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Crop</th>
            <th>Maturity</th>
            <th>Action</th>

        </tr>
        </tfoot>
        <tbody>

        @foreach($requests as $request)
            <tr>
                <td>{{$request->user->name}}</td>
                <td>{{$request->crop}}</td>
                <td>{{$request->maturity}}</td>
                <td>
                    <div class="row">
                        {{--<div class="col-md-4">--}}
                            {{--<a href="{{ route('users.edit', $user->id) }}">--}}
                                {{--<button   class="btn btn-primary btn-md"> Edit</button>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        <div class="col-md-4">
                            <a href="{{ route('view.request', $request->id) }}">
                                <button type="button"  class="btn btn-info btn-md viewer"> view</button>
                            </a>
                        </div>

                        {{--<div class="col-md-4">--}}
                            {{--<form method="post" action="{{route('users.destroy',$user->id)}}">--}}
                                {{--@method('delete')--}}
                                {{--@csrf--}}
                                {{--<button   onclick="return confirm('Are you sure?')"  type="submit" class="btn btn-danger btn-md"> Delete</button>--}}
                            {{--</form>--}}
                        {{--</div>--}}



                        {{--<a href="{{ route('users.edit', $user->id) }}" class='btn btn-default btn-xs'>--}}
                        {{--<i class="fa fa-users"></i>--}}
                        {{--</a>--}}



                    </div>


                </td>



            </tr>
        @endforeach

        @foreach($userFarm as $item)
            @php
                $user=\App\Models\User::find($item->user_id);
                    @endphp
            <td>{{$user->name}}</td>
            <td>{{'maize'}}</td>
            <td>{{'dry'}}</td>
            <td></td>
        @endforeach

        </tbody>
    </table>

    </div>
    </div>

@endsection