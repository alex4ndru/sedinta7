@extends('master')

@section('content')
        <div style="font-size:30px;font-family:arial">Edit lyrics for 
            <span style="text-transform:uppercase;font-weight:bold">{{$song->title}}</span></div>
        <div style="font-size:25px;font-family:arial;padding:10px;">
            
            {!!Form::model($song, ['url'=>'songs/'.$song->slug, 'method'=>'PATCH'])!!}
            <div>{!!Form::label($song->title,null,['class'=>'form-control'])!!}</div>
            <div>{!!Form::textarea('lyrics',null,['class'=>'form-control'])!!}</div>
            <div>{!!Form::submit('updateSong')!!}</div>
        </div>
@stop

@section('footer')
	(C) Baietii aia destepti
@stop

