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
                <div class="card-header head-dash">Latest Scores <a href="/score/create" class="btn btn-success plus"><strong>+</strong></a></div>

                <div class="card-body">
                 
                 
                    
            <score-component></score-component>
                     
                </div></div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
        
@endsection