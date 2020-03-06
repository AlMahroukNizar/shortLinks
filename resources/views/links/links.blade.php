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
                  <p>{{session('status')}}</p>
                </div>
                @endif
              
                <p>
                  <a href="{{route('links.create')}}" class="btn btn-success">{{__('message.add')}}</a
                </p>

                <table class="table">
                  <thead>
                    <tr>
                      <th>{{__('message.flink')}}</th>
                      <th>{{__('message.slink')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($links as $link)
                  <tr>
                   <td>{{$link->fulllink}}</td>
                   <td>
                     <a href="{{route('links.redirect', $link->shortlink)}}" target="_blank">{{route('links.redirect', $link->shortlink)}}</a>
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
