<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    <select name="category" id="category" class="form-control">
        @if($project->category == "Построенные объекты")
        <option value="Построенные объекты" {{$selected = 'selected'}}>Построенные объекты</option>
        @endif
        @if($project->category == "Строящиеся объекты")
        <option value="Строящиеся объекты"  {{$selected = 'selected'}}>Строящиеся объекты</option>
        @endif
    </select>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area', 'Area:') !!}
    {!! Form::text('area', null, ['class' => 'form-control']) !!}
</div>

<!-- Finish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('finish', 'Finish:') !!}
    {!! Form::text('finish', null, ['class' => 'form-control']) !!}
</div>

<!-- Lat Field -->
<div class="form-group col-sm-3">
    {!! Form::label('lat', 'Широта:') !!}
    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Lng Field -->
<div class="form-group col-sm-3">
    {!! Form::label('lng', 'Долгота:') !!}
    {!! Form::text('lng', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-3">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('projects.index') !!}" class="btn btn-default">Cancel</a>
</div>
