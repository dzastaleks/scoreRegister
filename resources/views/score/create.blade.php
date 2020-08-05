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
                <div class="card-header head-dash">Add New Score <a href="/score" class="btn btn-secondary plus"><i class="fas fa-chevron-left"></i></a></div>

                <div class="card-body">
                 
                 
                    
            <club-component></club-component>
                     
                </div></div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
        
@endsection
