@extends('layouts.master')
@section('title')
  Sign up
@endsection('title')
@section('content')
<div class='row'>
	
	<div class='col-md-4 col-md-offset-4'>
		<h1>Sing up</h1>
	
		<div class="alert alert-danger">
                @foreach($errors->all() as $error)
                   <p>{{$error}}</p>
                @endforeach
		</div><!-- alert danger -->
		
		<form action="{{ route('user.signup')}}" method="post">
		   <div class="form-group">
		   	  <label for="email" >E-Mail</label>
		   	  <input type="type" id="email"  name="email" class="form-control">
		   </div>
		    <div class="form-group">
		   	  <label for="password" >Password</label>
		   	  <input type="password" id="password"  name="password" class="form-control">
		   </div>
			<button class="btn btn-success" type="Submit">Sign up</button>
			{{ csrf_field() }}
		</form>
	</div><!-- offset 4 -->
</div>

@endsection