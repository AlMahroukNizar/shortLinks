@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form class="form" action="{{ route("links.search")}}" method="Post">
            @csrf
            <div class="search-form">
            <input name="slug" class="form-control">
          </div>
            <button class="btn btn-primary"> Rechercher</button>
        </form>
        </div>
    </div>
</div>
@endsection
