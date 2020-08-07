@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">

<div class="col-md-8">    
@include('inc.messages')
</div>
</div>
    <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="main">                   
                    <h1> Scores </h1> 

                    <h2> Take care of your scores. <h2> 

                    <a href="/score" class="btn btn-success">Get Started <i class="fas fa-sign-in-alt"></i> </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

        
@endsection
