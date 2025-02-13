@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{__('message.Dashboard')}}
              </div>
              <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                  <p>{{session('status')}} </p>
                </div>
                @endif
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
