@extends('template.master')

@section('title', 'Home | Yuki')

@section('alert')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Alert Testing
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@stop

@section('content')
    {{-- Latest Update --}}
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
                                    <img src="https://img.mostraveller.com/uploads/images/comics/68720/thumbnail.png" class="card-img-top" alt="...">
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

    <hr>

    <div class="row">
        {{-- Discord Iframe --}}
        {{-- Can Be Changed For Advertisement --}}
        <div class="col-md-3">
            <iframe src="https://discord.com/widget?id=601735728853942272&theme=dark" width="300" height="500px" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>

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
                                    <img src="https://img.mostraveller.com/uploads/images/comics/68720/thumbnail.png" class="card-img-top" alt="...">
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

    <hr>


@stop

@section('css')

@stop

@section('js')

@stop