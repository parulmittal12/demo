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
        </div>
        </center>
    </div>
        <div class="box">
            <ul class="directory-list">
                <li>Test Project
                    <ul>
                        <li>Assemblies
                            <ul>
                                <li>Assembly1
                                    <ul>
                                        <li>Components
                                            <ul>
                                                <li>Component1</li>
                                                <li>Component2</li>
                                                <li>Component3</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>Assembly2
                                    <ul>
                                        <li>Components
                                            <ul>
                                                <li>Component4</li>
                                                <li>Component5</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>Assembly3
                                    <ul>
                                        <li>Components
                                            <ul>
                                                <li>Component6</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Backgrounds
                            <ul>
                                <li>Cool Blue
                                    <ul>
                                        <li>Begie</li>
                                        <li>Aqua</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Material sets</li>
                       
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
