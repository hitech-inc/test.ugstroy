<!-- Boxable Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('boxable_id', 'Id постройки:') !!}
    {!! Form::text('boxable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Boxable Type Field -->
<input type="hidden" name="boxable_type" class="form-control" value="App\Models\Project">

<!-- Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('name', 'Name:') !!}
    <select name="name" class="form-control">
        <option value="block">Block</option>
        <option value="floor">Floor</option>
        <option value="plan" >Plan</option>
        <option value="flat">Flat</option>
    </select>
</div>

<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('boxes.index') !!}" class="btn btn-default">Cancel</a>
</div>
