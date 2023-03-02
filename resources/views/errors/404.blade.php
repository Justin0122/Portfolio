@extends('layouts.app')
@section('content')
    <div class="container page-404">
        <p>HTTP: <span>404</span></p>
        <code><span>this_page</span>.<em>not_found</em> = true;</code>
        <code><span>if</span> (<b>you_spelt_it_wrong</b>) {<span>try_again()</span>;}</code>
        <code><span>else if (<b>I_screwed_up</b>)</span> {<em>alert</em>(<i>"I'm really sorry about that."</i>);
            <span>window</span>.<em>location</em> = home;}</code>
        <center><a href="{{ url('/') }}" class="">Home</a></center>
    </div>
@endsection
