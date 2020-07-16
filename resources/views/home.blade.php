@extends('layouts.app')

@include('layouts.nav')

@section('content')
<div class="container">
    @include('layouts.navigation')
    <div class="container">
        <h1>Phone List</h1>

        <table id="customers">
            <th>Phone Number</th>
            <th>Message</th>
            <th>Message Sent</th>
            <th>Updated At</th>

            @foreach($phonebook as $phone)
                <tr>
                    <td> {{ $phone->phonenumber }}</td>
                    <td> {{ $phone->message}}</td>
                    <td> {{ $phone->created_at }}</td>
                    <td> {{ $phone->updated_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
