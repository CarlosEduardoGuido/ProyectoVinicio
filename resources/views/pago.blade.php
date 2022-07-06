@extends('layouts.app1')

@section('content')

<div class="container" style="margin-top: 10px">
    
       @if(session('status'))
        <div class="alert alert-success  alert-dismissible fade show" role="alert">{{session('status')}}</div>
        @endif
        <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-secondary btn-md">Regresar</button> 
                    </form>
    </div>
@endsection
