@extends('layouts.global')

@section('title') Lihat user @endsection

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-body">
			<b>Nama:</b> <br/>
			{{$user->name}}
			<br><br>
		
			@if($user->avatar)
			<img src="{{asset('storage/'. $user->avatar)}}" width="128px"/>
			@else
			No avatar
			@endif

			<br>
			<br>
			<b>Username:</b><br>
			{{$user->email}}

			<br>
			<br>
			<b>Nomer telfon</b> <br>
			{{$user->phone}}

			<br>
			<br>
			<b>Alamat</b> <br>
			{{$user->address}}
			
			<br>
			<br>
			<b>Roles:</b> <br>
			@foreach (json_decode($user->roles) as $role)
			&middot; {{$role}} <br>
			@endforeach
			</div>
		</div>
</div>
@endsection	