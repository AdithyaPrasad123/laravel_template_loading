@extends('index')
@section('content')
@if(Session::has('success'))
<p class="alert alert-dark">{{ Session::get('success') }}</p>
@endif
<form action="{{route('update',$row->id)}}" method="POST" class="bg-dark mt-5 p-3">
    @csrf
    <input type="text" name="name" class="form-control" value="{{$row->name}}"><br>
    <input type="number" name="mobile" class="form-control" value="{{$row->mobile}}"><br>
    <input type="email" name="email" class="form-control" value="{{$row->email}}"><br>

     <label for="">Gender:</label>
    <input type="radio" name="gender" id="male" value="Male">
    <label for="">Male</label>
    <input type="radio" name="gender" id="female" value="Female">
    <label for="">Female</label><br><br>

    <label for="">Qualification:</label>
    <input type="checkbox" name="qualification[]" id="sslc" value="SSLC">
    <label for="">SSLC</label>
    <input type="checkbox" name="qualification[]" id="plustwo" value="+2">
    <label for="">+2</label>
    <input type="checkbox" name="qualification[]" id="degree" value="Degree">
    <label for="">Degree</label><br><br>
    
    <input type="text" name="place" class="form-control" value="{{$row->place}}"><br>

    <select name="district" id="district" class="form-control">
        <option value="Select District">Select District</option>
        <option value="Thiruvanadhapuram">Thiruvanadhapuram</option>
        <option value="Kollam">Kollam</option>
        <option value="Pathanamthitta">Pathanamthitta</option>
        <option value="Kozhikode">Kozhikode</option>
    </select><br>
    <input type="submit" class="btn btn-primary">
    
</form>
@endsection