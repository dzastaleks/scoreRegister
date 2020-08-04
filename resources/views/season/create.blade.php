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
                <div class="card-header head-dash">Add Season <a href="/season" class="btn btn-secondary plus"><i class="fas fa-chevron-left"></i></a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('season.store')}}" method="post">
                        @csrf
                     <div class="form-group">
                         <label for="Season">Season Label:</label>
                        <input type="text" name="season_name" value="{{ old('season_name') }}" class="form-control" placeholder="2020/2021">
                        </div>
                      <div class="form-group">
                      <label for="startDate">Season Starts Date:</label>
                        <input type="date" name="season_start" value="{{ old('seasonStart') }}" class="form-control">
                      </div>
                      <div class="form-group">
                      <label for="endDate">Season Ends Date:</label>
                        <input type="date" name="season_end" value="{{ old('seasonEnd') }}" class="form-control">
                      </div>
                   
                    <button type="submit" class="btn btn-success"><i class="fas fa-database"></i> Save Season</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
