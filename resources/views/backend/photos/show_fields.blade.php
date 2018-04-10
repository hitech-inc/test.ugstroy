<!-- Id Field -->
<div class="col-md-8">
    <div class="form-group">
        {!! Form::label('id', 'Id:') !!}
        <p>{!! $photo->id !!}</p>
    </div>

    <!-- Path Field -->
    <div class="form-group">
        {!! Form::label('path', 'Path:') !!}
        <p>{!! $photo->path !!}</p>
    </div>

    <!-- Alt Field -->
    <div class="form-group">
        {!! Form::label('alt', 'Alt:') !!}
        <p>{!! $photo->alt !!}</p>
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{!! $photo->created_at !!}</p>
    </div>

    <!-- Updated At Field -->
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{!! $photo->updated_at !!}</p>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
    <img src="\img\{{$photo->path}}" alt="sss" style="width:100%;">
</div>
</div>
