@extends('index')
@section('content')
@if(Session::has('success'))
<p class="alert alert-primary text-dark">{{ Session::get('success') }}</p>
@endif
<table class="table table-dark table-hover mt-5 p-3">
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Qualification</th>
        <th>Place</th>
        <th>District</th>
        <th colspan="2" class="text-center">Action</th>
    </tr>
    @foreach($data as $datas)
    <tr>
        <td>{{ $datas -> name }}</td>
        <td>{{ $datas -> mobile }}</td>
        <td>{{ $datas -> email }}</td>
        <td>{{ $datas -> gender }}</td>

        <td>
    @foreach(explode(', ', $datas->qualification) as $value)
        {{ $value }}
    @endforeach
</td>




        <td>{{ $datas -> place }}</td>
        <td>{{ $datas -> district }}</td>
        <td><a href="{{route('edit',$datas->id)}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{route('delete',$datas->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
</table>
@endsection