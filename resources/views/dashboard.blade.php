@extends('layout_admin.master_admin')

@section('good')
	<h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">{{ Auth::user()->name }}</span></h1>
@endsection
