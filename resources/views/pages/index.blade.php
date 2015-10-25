@extends('master')

@section('content')
	@foreach ($songs as $value)
		<a href="songs/{{$value->slug}}">{{$value->title}}</a>
	@endforeach
@stop

@section('footer')
	(C) Baietii aia destepti
@stop