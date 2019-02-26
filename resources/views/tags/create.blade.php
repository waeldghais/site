@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Tags</div>

                <div class="card-body">
                    @if(count($errors)>0)

                    <ul class="navbar-nav mr-auto">
                        @foreach($errors->all() as $error)
      <li class="nav-item active">
        {{ $errors}}
      </li>
      @endforeach
    </ul>
@endif
  <form  action="{{route('tag.store')}}" methode='GET'enctype="multipart/form-data">
    {{ csrf_field() }}

  <div class="form-group"  >
    <label for="tag">name</label>
    <input type="text" class="form-control" name="tag"  placeholder="Enter tag name">
  </div>
 
 
  <button type="submit" class="btn btn-primary">save</button>
</form>
            </div>
        </div>
    </div>
</div>
@endsection