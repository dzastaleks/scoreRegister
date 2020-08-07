@extends('layouts.app')

@section('content')
<div id="app">
<div class="container">
<div class="row justify-content-center">

<div class="col-md-8">    
@include('inc.messages')
</div>
</div>
    <div class="row justify-content-center">
                <div class="col-md-8">
            <div class="card">
                <div class="card-header head-dash">Rankings List</div>

                <div class="card-body">
                 
                 
                    
                    <ranking-component></ranking-component>
                     
                </div></div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
        
@endsection
