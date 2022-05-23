@extends('layout.app')
@section('content')
    <h1>Accounts</h1>
    @if (count($accounts) >= 1)
        @oreach ($accounts as $account)
        <div class="well">
            <h3>{{$account->email}}</h3>
        @endforeach   
    @else
        <p>No accounts founds</p>
    @endif
@endsection