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
            <ul class="directory-list" id="directory">
                @foreach($parentEntries as $val)
                    <li style="cursor:pointer" id="{{ $val->entry_id }}" onclick="showDetails(this)">{{ $val->name }} 
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        function showDetails($el){
            const Id = $el.id;
            $.ajax({
               type:'GET',
               url:'/api/getStructure/'+Id,
               success:function(data) {
                  console.log(data.data.details);
                  var cont = document.getElementById('directory');
                  var ui = document.getElementById(Id);
                  var ul = document.createElement('ul');
                 

                    for (i = 0; i <= data.data.details.length - 1; i++) {
                        var li = document.createElement('li');
                      
                        li.innerHTML = data.data.details[i][0].name;      
                        li.setAttribute('style', 'display: block;cursor:pointer');  
                        li.setAttribute('id',data.data.details[i][0].entry_id);  
                        li.setAttribute('onclick','showDetails(this)'); 
                        ul.appendChild(li);
                        console.log(ui);
                    
                    }
                    ui.appendChild(ul);     
                    cont.appendChild(ul); 
               }
            });
        }
    </script>
@endpush
