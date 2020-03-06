@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="form" method="POST" action="{{route('links.create')}}">
              @csrf
              <div class="form-group">
                <label> {{__('message.link')}}</label>
                <input type="text" name="link" class="form-control">
                <div class="form-group">
                  <button type="submit" class="btn btn-success">{{__('message.add')}}</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
