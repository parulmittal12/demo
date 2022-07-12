@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h2>Directory List</h2>
    <div class="row">
        <center>
        <div class="col-6">
            <a href="{{ url('/') }}" class="btn btn-xs btn-info pull-right">Collapsable Functionality</a>
        </div> <br>
        <div class="col-6">
            <a href="{{ url('/index') }}" class="btn btn-xs btn-info pull-right">Through Database</a>
        </div> <br>
        <div class="col-6">
            <a href="{{ url('/ajax') }}" class="btn btn-xs btn-info pull-right">Through Ajax</a>
        </div>
        </center>
    </div>
        <div class="box">
            <ul class="directory-list">
                @foreach($parentEntries as $val)
                    <li>{{ $val->name }} 
                        @if(count($val->parentRel))
                            @include('manageChild',['childs' => $val->parentRel])
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
