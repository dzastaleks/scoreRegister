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
                <div class="card-header head-dash">Seasons<a href="/season/create" class="btn btn-success plus"><strong>+</strong></a></div>

                <div class="card-body">
                    <div>
            <table class="table table-responsive table-hover season-table w-100 d-block d-md-table">
                    <thead>
                        <tr>
                        <th scope="col">Season Name</th>
                        <th scope="col">Season Starts</th>
                        <th scope="col">Season Ends</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>

                        

                    </tr>

                    </thead>
                    <tbody>
                        @foreach($seasons as $season)
                    <tr>
                        <td>
                        {{ $season->name }}
                        </td>
                        <td>
                        {{ date('d.m.Y', strtotime($season->season_start)) }}
                        </td>
                        <td>
                            {{ date('d.m.Y', strtotime($season->season_end)) }}

                        </td>
                        
                        <td>    
                        <a href="/season/{{$season->id}}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                        </td>
                        <td>
                        <form action="{{route('season.destroy',[$season->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                            
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Season?');"><i class="fas fa-trash-alt"></i></button>
                                </form>
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
</div>
@endsection
