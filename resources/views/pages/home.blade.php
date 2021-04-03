@extends('template.master')

@section('title', 'Home')

@section('alert')
    <div class="callout-primary">
        <h4>Alert</h4>
        Alert Testing
    </div>
@stop

@section('content')
    {{-- Latest Update / Top Row--}}
    <div class="row">
        <div class="col-md-12">
            <h4>Latest Update</h4>
            <div class="card">
                <div class="card-body">
                    {{-- Card per Title --}}
                    {{-- Max 6 Card Column --}}
                    {{-- Only 1 Row --}}
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center">
                            <a href="#" style="text-decoration: none; color: black;">
                                <div class="card" style="width: 12rem;">
                                    <img class="lazy" src="https://img.mostraveller.com/uploads/images/comics/68720/thumbnail.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <figure class="text-center">
                                            <blockquote class="blockquote">
                                                <h5 class="card-title">Title</h5>
                                            </blockquote>
                                            <figcaption>
                                                Chapter Number
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- // Latest Update / Top Row --}}

    <hr>

    {{-- Middle Row --}}
    <div class="row">
        {{-- Discord Iframe --}}
        {{-- Can Be Changed For Advertisement --}}
        <div class="col-md-3">

        </div>
        {{-- // Discord Iframe --}}

        {{-- New Release --}}
        <div class="col-md-9">
            <h4>New Release</h4>
            <div class="card">
                <div class="card-body">
                    {{-- Card per Title --}}
                    {{-- Max 4 Card Column Per Row --}}
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center" style="padding-bottom: 10px">
                            <a href="#" style="text-decoration: none; color: black;">
                                <div class="card" style="width: 12rem;">
                                    <img class="lazy" src="https://img.mostraveller.com/uploads/images/comics/68720/thumbnail.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <figure class="text-center">
                                            <blockquote class="blockquote">
                                                <h5 class="card-title">Title</h5>
                                            </blockquote>
                                            <figcaption>
                                                Chapter Number
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- // New Release --}}
    </div>
    {{-- // Middle Row --}}

    <hr>

    {{-- Popular Release --}}
    <div class="row">
        <h4>Popular Release</h4>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- Max 6 Card Column per Row --}}
                    {{-- No Max Row --}}
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center" style="padding-bottom: 10px">
                            <a href="#" style="text-decoration: none; color: black;">
                                <div class="card" style="width: 12rem;">
                                    <img class="lazy" src="https://img.mostraveller.com/uploads/images/comics/68720/thumbnail.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <figure class="text-center">
                                            <blockquote class="blockquote">
                                                <h5 class="card-title">Title</h5>
                                            </blockquote>
                                            <figcaption>
                                                Chapter Number
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </a>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- // Popular Release --}}

    <hr>

    {{-- About Website --}}
    <div class="alert alert-light" role="alert">
        <h4 class="alert-heading" style="font-family: 'Comfortaa', sans-serif;">Yuki</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    {{-- // About Website --}}
    
    <hr>


@stop

@section('css')

@stop

@section('js')

@stop