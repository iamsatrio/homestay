@extends('homestay.app')
@section('content')
    <form action="{{route('homestay.update',['homestay'=>$homestay->id])}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT"/>
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>
                    <input type="text" name="name" placeholder="name" value="{{$homestay->name}}"/>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td>
                    <input type="text" name="phone" placeholder="phone" maxlength="12" value="{{$homestay->phone}}"/>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td>
                    <input type="text" name="address" placeholder="address" value="{{$homestay->address}}"/>
                </td>
            </tr>
        </table>
        <input type="submit" value="Save">
    </form>
@endsection