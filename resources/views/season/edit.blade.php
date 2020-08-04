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
                <div class="card-header head-dash">Edit Season <a href="/season" class="btn btn-secondary plus"><i class="fas fa-chevron-left"></i></a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('season.update',[$season->id])}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                     <div class="form-group">
                         <label for="Season">Season Label:</label>
                        <input type="text" name="season_name" value="{{ $season->name }}" class="form-control" placeholder="2020/2021">
                        </div>
                      <div class="form-group">
                      <label for="startDate">Season Starts Date:</label>
                        <input type="date" name="season_start" value="{{ $season->season_start  }}" class="form-control">
                      </div>
                      <div class="form-group">
                      <label for="endDate">Season Ends Date:</label>
                        <input type="date" name="season_end" value="{{ $season->season_end  }}" class="form-control">
                      </div>
                   
                    <button type="submit" class="btn btn-success"><i class="fas fa-database"></i> Update Season</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
