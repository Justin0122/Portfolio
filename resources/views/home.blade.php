@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="grid-container">
            @php
                $button = ['addproject', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'];
            @endphp
            @foreach ($button as $b)
                <a href="/{{ $b }}">

                    <div class="grid-item">
                        <div class="component">
                            <span><?php echo $b; ?></span><br>
                            <img src="img/<?php echo $b; ?>.png" alt="" width="300">
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
