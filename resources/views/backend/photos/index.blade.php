@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Gallery</h1>
        <div class="clearfix"></div>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
{{Form::open(['route' => 'upload', 'files' => true])}}

                    Выберите изображение:
                    <input type="file" name="file" id="file">
                    <input type="submit" value="Загрузить">

{{ csrf_field() }}
{{Form::close()}}



            </div>
        </div>

            <div class="row" style="height: 200px; width: 100%;">
            @foreach($photos as $photo)

                 <div class="col-md-1" style="padding: 3px; height: 100%;">
                    <img src="img/{{$photo->path}}" alt="fff" style="width:100%;">
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
 <script>

    </script>

    <script>


    </script>
@endsection
