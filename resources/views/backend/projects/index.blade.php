@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Projects</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('projects.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div>
            <form action="{{ route('filter') }}" method="get" style="width: 300px; display: flex;">
                <select name="category" id="category" class="form-control">
                    <option value="Построенные объекты">Построенные объекты</option>
                    <option value="Строящиеся объекты">Строящиеся объекты</option>
                </select>
                <input type="submit" value="Filter">
            </form>
        </div>
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('backend.projects.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

