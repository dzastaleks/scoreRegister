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
            <div class="card">
                <div class="card-header head-dash">Rankings</div>

                <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Club Name</th>
                        <th scope="col">Points</th>
                    </tr>

                    </thead>
                    <tbody>
                        @foreach($clubs as $club)
                    <tr>
                        <td>
                        {{ $club->name }}
                        </td>
                        <td>
                            {{ $club->points }}

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
