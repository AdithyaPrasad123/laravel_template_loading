@extends('index')
@section('content')
@if(Session::has('success'))
<p class="alert alert-primary text-dark">{{ Session::get('success') }}</p>
@endif
<form action="{{route('doregister')}}" method="POST" class=" mt-5 p-3 text-light">
    @csrf
    <input type="text" name="name" class="form-control" placeholder="Enter Name"><br>
    <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile"><br>
    <input type="email" name="email" class="form-control" placeholder="Enter Email"><br>

    <label for="">Gender:  </label>
    <input type="radio" name="gender" id="male" value="Male">
    <label for="">Male  </label>
    <input type="radio" name="gender" id="female" value="Female">
    <label for="">Female</label><br><br>

    <label for="">Qualification:  </label>
    <label for="sslc"><input type="checkbox" name="qualification[]" id="sslc" value="SSLC">SSLC</label>
    <label for="plustwo"><input type="checkbox" name="qualification[]" id="plustwo" value="+2">+2</label>    
    <label for="degree"><input type="checkbox" name="qualification[]" id="degree" value="Degree">Degree</label><br><br>

    <input type="text" name="place" class="form-control" placeholder="Enter Place"><br>

    <select name="district" id="district" class="form-control">
        <option value="Select District">Select District</option>
        <option value="Thiruvanadhapuram">Thiruvanadhapuram</option>
        <option value="Kollam">Kollam</option>
        <option value="Pathanamthitta">Pathanamthitta</option>
        <option value="Kozhikode">Kozhikode</option>
    </select><br>
    <input type="submit" class="btn btn-primary text-center" >
    
</form>
@endsection