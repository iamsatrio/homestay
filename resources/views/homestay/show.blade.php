@extends('homestay.app')
@section('content')
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>
                    <input type="text" name="name" placeholder="name" value="{{$homestay->name}}" readonly/>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td>
                    <input type="text" name="phone" placeholder="phone" maxlength="12" value="{{$homestay->phone}}" readonly/>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td>
                    <input type="text" name="address" placeholder="address" value="{{$homestay->address}}" readonly/>
                </td>
            </tr>
        </table>
        <button onclick="back()"> Back </button>
        <script>
            function back() {
                window.history.back();
            }
        </script>
@endsection