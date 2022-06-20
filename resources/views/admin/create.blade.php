@include('layouts.nav')
@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Basic Input</h4>
    </div>
    <div class="card-block">
        <div class="card-body">
            <fieldset class="form-group">
                <input type="text" class="form-control" id="basicInput" >
            </fieldset>
        </div>
    </div>
</div>
@endsection