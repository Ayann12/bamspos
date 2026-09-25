@extends('Layouts.app')
@section('content_title', 'Dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            Wellcome to BamsPos System, <strong class="capitalize">{{ auth()->user()->name }}</strong>
        </div>

    </div>
@endsection
