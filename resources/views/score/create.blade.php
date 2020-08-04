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
                <div class="card-header head-dash">Add New Score <a href="/score" class="btn btn-secondary plus"><i class="fas fa-chevron-left"></i></a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('score.store')}}" method="post">
                        @csrf
                     <div class="form-group">
                         <label for="Season">Season:</label>
                        <select name="season" class="form-control">
                            <option value=""></option>
                            @foreach ($seasons as $season)
                                <option value="{{$season->id}}">{{$season->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Host">Host</label>
                                    <select name="host" class="form-control">
                                        <option value=""></option>
                                        @foreach ($clubs as $club)
                                            <option value="{{$club->id}}">{{$club->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Guest">Guest</label>
                                    <select name="guest" class="form-control">
                                        <option value=""></option>
                                        @foreach ($clubs as $club)
                                            <option value="{{$club->id}}">{{$club->name}}</option>
                                  @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Host Score">Host Score</label>
                                    <input type="number" name="host_score" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Guest score">Guest Score</label>
                                    <input type="number" name="guest_score" class="form-control">
                                </div>
                            </div>
                        </div>
                       
                        
                      <div class="form-group">
                      <label for="Played Date">Match Played Date:</label>
                        <input type="date" name="played_date" value="{{ old('played_date') }}" class="form-control">
                      </div>
                   
                    <button type="submit" class="btn btn-success"><i class="fas fa-database"></i> Save Match </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
