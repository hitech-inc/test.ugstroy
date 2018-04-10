@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Project
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('backend.projects.show_fields')
                    <a href="{!! route('projects.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
        <div class="box">
            <h4>Alt изображения: <b>{{$alt}} </b></h4>
            <div class="row" style="height: 200px; width: 100%;">
                @foreach($photos as $photo)
                <div class="col-md-2">
                    <img src="/img{{$photo->path}}" alt="sss" style="width: 90%;">
                </div>
                <div class="col-md-1" style="padding: 3px; height: 100%;">
                    <a href="{!! route('photos.show', [$photo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('photos.edit', [$photo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::open(['route' => ['photos.destroy', $photo->id], 'method' => 'delete']) !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    {!! Form::close() !!}                       
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
