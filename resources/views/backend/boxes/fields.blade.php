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
    {!! Form::select('name', ['block' => 'Block', 'floor' => 'Floor', 'plan' => 'Plan' , 'flat' => 'Flat'], null, ['class' => 'form-control']) !!}
</div>

<!-- Tutorial Block -->
<style>
    .ret *{
        font-size: 0.8em;
        margin: 0px;
        padding: 1px;
    }
</style>
<div class="form-group col-sm-4 ret">
    <p><b style="font-size: 1em;">Краткий справочник</b></p>
    <p>Поле <b>name</b></p>
    <p>Если вы выбрали имя <b>block :</b></p>
    <p>a class="blockButton" data-show="Id окна выбора этажа который нужно показать" data-hide="Id окна выбора блока который нужно скрыть" data-block="Номер блока"</a></p>
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
