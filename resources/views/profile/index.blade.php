@extends('base')

@section('main')

<div class="col-sm-12">  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Profile</h1>    
    <div>
        <a style="margin: 19px;" href="{{ route('profile.create')}}" class="btn btn-primary">New Input</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Gender</td>
          <td>Kota</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($profile as $profile)
        <tr>
            <td>{{$profile->id}}</td>
            <td>{{$profile->firstname}} {{$profile->lastname}}</td>
            <td>{{$profile->gender}}</td>
            <td>{{$profile->kota}}</td>
            <td>
                <a href="{{ route('profile.edit',$profile->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('profile.destroy', $profile->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection