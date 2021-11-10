
@extends('layouts.app')


@section('content')
<div class="container">

    <a href="{{route('client.create')}}" class="btn btn-success">Add client</a>
    <a href="{{route('client.createclients')}}" class="btn btn-success">Add clients</a>
    <a href="{{route('client.createjavascript')}}" class="btn btn-success">Add clients javascript</a>

    <table class="table table-striped">

    <tr>
        <th> ID </th>
        <th>Name</th>
        <th> Surname </th>
        <th> Description </th>
    </tr>

    @foreach ($clients as $client)
    <tr>
        <td>{{$client->id}} </td>
        <td>{{$client->name}} </td>
        <td>{{$client->surname}} </td>
        <td>{{$client->description}} </td>
        </td>
    </tr>
    @endforeach

    </table>
</div>
@endsection
