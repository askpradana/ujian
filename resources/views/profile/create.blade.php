@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a profile</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('profile.store') }}">
          @csrf
          <div class="form-group">    
              <label for="firstname">First Name:</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>          
          <div class="form-group">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>           
          <div class="form-group">
              <label for="gender">Gender: </label><br>
              <input type='radio' id='L' name='gender' value='L'>
              <label for='L'>Laki - laki</label><br>
              <input type='radio' id='P' name='gender' value='P'>
              <label for='P'>Perempuan</label><br>
          </div>        
          <div>
              <label for='kota'>Kota : </label>
              <select name='kota' id='kota'>
                <option value='Tangerang'>Tangerang</option>
                <option value='Jakarta'>Jakarta</option>
                <option value='Bogor'>Bogor</option>
                <option value='Bekasi'>Bekasi</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add profile</button>
      </form>
  </div>
</div>
</div>
@endsection