@extends('layouts.master')
@section('title')
  Sign in
@endsection('title')
@section('content')
<div class='row'>
	
	<div class='col-md-4 col-md-offset-4'>
		<h1>Sing in</h1>
	
		<div class="alert alert-danger">
                @foreach($errors->all() as $error)
                   <p>{{$error}}</p>
                @endforeach
		</div><!-- alert danger -->
		<h3>sign in</h3>
		<form action="{{ route('user.signin')}}" method="post">
		   <div class="form-group">
		   	  <label for="email" >E-Mail</label>
		   	  <input type="type" id="email"  name="email" class="form-control">
		   </div>
		    <div class="form-group">
		   	  <label for="password" >Password</label>
		   	  <input type="password" id="password"  name="password" class="form-control">
		   </div>
			<button class="btn btn-success" type="Submit">Sign in</button>
			{{ csrf_field() }}
		</form>
	</div><!-- offset 4 -->
</div>

@endsection