@extends('layouts.base')
@section('title', 'Umlabs - Home')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">
@endsection

@section('bannercontent')

@endsection

@section('maincontent')
    <div class="container intro">
        <div class="row">
            <div class="col-md-7">
                <div class="intro-text">
                    <p class="text-muted" style="font-size: 1.2em; margin-bottom: 0;">Hello</p>
                    <h2>I'm <strong>Umer |</strong></h2>
                    <h2>a <strong>Cybersecurity Specialist |</strong></h2>
                    <p>
                        I'm an aspiring Cybersecurity Student, always looking to improve myself and learn new things.
                    </p>
                    <p>
                        Come browse my page and take a look at my projects!
                    </p>
                    <div class="buttons mt-auto">
                        <button type="button" class="btn btn-primary">Learn More</button>
                        <button type="button" class="btn btn-outline-primary">Projects</button>
                    </div>

                </div>
            </div>

            <div class="col-md-5 d-flex justify-content-center mt-4 mt-md-0">
                <img id="rounded-image" src="{{ asset('assets/images/intro-image.png') }}" alt="Umer's Image">
            </div>
        </div>
    </div>

    <section id="Projects">
        <div class="container">
            <h2 class="title">Important Projects</h2>
            <hr>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
    </section>
    <section id="About">
        <div class="container">
            <h2 class="title-2">About Me</h2>
            <hr>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('assets/js/welcome.js') }}"></script>
@endsection
