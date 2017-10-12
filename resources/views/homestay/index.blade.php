@extends('homestay.app')
@section('content')
    <form method="get" action="{{route('homestay.create')}}">
        <button>Insert Homestay</button>
    </form>
    <table border="1">
        <thead align="center">
        <td>Name</td>
        <td>Phone</td>
        <td>Address</td>
        <td colspan="3">Action</td>
        </thead>
        <tbody>
        {{--{{dd($datas)}}--}}
        @foreach($datas as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>
                    <a href="{{route('homestay.show',['homestay'=>$data->id])}}">Show</a>
                </td>
                <td>
                    <a href="{{route('homestay.edit',['homestay'=>$data->id])}}">Edit</a>
                </td>
                <td>
                    {{--<a href="{{route('homestay.d',['homestay'=>$data->id])}}">Delete</a>--}}
                    <form action="{{route('homestay.destroy',['homestay'=>$data->id])}}" method="post"
                          onsubmit="return confirm('Do you really want to delete this record?');">

                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <button>Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection