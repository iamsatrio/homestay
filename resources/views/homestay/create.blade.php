@extends('homestay.app')
@section('content')
    <form action="{{route('homestay.store')}}" method="POST">
        {{csrf_field()}}
        <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="name" placeholder="name"/>
                    </td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="phone" placeholder="phone" maxlength="12"/>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="address" placeholder="address"/>
                    </td>
                </tr>
        </table>
        <input type="submit" value="Save">
    </form>
@endsection