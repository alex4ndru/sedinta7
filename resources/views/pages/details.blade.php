@extends('master')

@section('content')
        <div>
            <form action="../songs/update" method="POST">
                <div>{{$song->title}}</div>
                <div><textarea name="lyrics">{{$song->lyrics}}</textarea></div>
                <div><input type="submit" value="Update"></div>
            </form>
        </div>
        <div style="font-size:30px"><a href="{{$song->slug}}/edit">Edit</a></div>
@stop

@section('footer')
	(C) Baietii aia destepti
@stop