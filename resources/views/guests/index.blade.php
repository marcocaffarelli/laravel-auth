@extends('layouts.app')

@section('content')
    <h1>HOME</h1>
    <main class="container py-4">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-2">
                    <ul class="list-unstyled">
                       <li><a href="{{route('posts.index')}}">BLOG</a></li>
    
                    </ul>
                </div>
                <main class="col-xs12 col-md-9 col-lg-10">
                    @yield('content')
                </main>
            </div>
        </main>
@endsection