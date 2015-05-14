@extends('insangel')
@section('body')
    <div id="main">
        @yield('sidebar')
        <div id="body">
            <div id="body_text">
                @section('content')
                    {{--Content--}}
                @show
            </div>
        </div>
    </div>
@stop