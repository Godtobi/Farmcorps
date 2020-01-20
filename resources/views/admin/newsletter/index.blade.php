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

            <th>Email</th>
            <th>Action</th>

        </tr>
        </thead>
        <tfoot>
        <tr>

            <th>Email</th>
            <th>Action</th>


        </tr>
        </tfoot>
        <tbody>
        @foreach($emails as $mail)
            <tr>

                <td>{{$mail->email}}</td>


                <td>
                    <div class="row">
                        {{--<div class="col-md-4">--}}
                            {{--<a href="{{ route('farmers.edit', $farmer->id) }}">--}}
                                {{--<button   class="btn btn-primary btn-md"> Edit</button>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<a href="{{ route('farmers.show', $farmer->id) }}">--}}
                                {{--<button type="button" value="{{$user->id}}" class="btn btn-info btn-md viewer"> view</button>--}}
                            {{--</a>--}}
                        {{--</div>--}}

                        <div class="col-md-4">
                            <form method="post" >
                                @method('delete')
                                @csrf
                                <button   onclick="return confirm('Are you sure?')"  type="submit" class="btn btn-danger btn-md"> Delete</button>
                            </form>
                        </div>



                        {{--<a href="{{ route('users.edit', $user->id) }}" class='btn btn-default btn-xs'>--}}
                        {{--<i class="fa fa-users"></i>--}}
                        {{--</a>--}}



                    </div>


                </td>



            </tr>
        @endforeach

        </tbody>
    </table>

    </div>
    </div>

@endsection