@extends('website.master')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h1 class="text-center border">This is Category Page</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="px-5">
        <div class="container py-5">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center border-0">
                        <h3>Recent Published Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/laravel.jpg" alt="">
                        <div class="card-body">
                            <h4>Php With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10 March 2022</p>
                            <hr/>
                            <a href="" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/laravel.jpg" alt="">
                        <div class="card-body">
                            <h4>Php With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10 March 2022</p>
                            <hr/>
                            <a href="" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/laravel.jpg" alt="">
                        <div class="card-body">
                            <h4>Php With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10 March 2022</p>
                            <hr/>
                            <a href="" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-5">
        <div class="container">
            <div class="row bg-light">
                <div class="col">
                    <div class="card card-body text-center border-0">
                        <h3>Popular Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/h3.gif" alt="">
                        <div class="card-body">
                            <h4>Php With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10 March 2022</p>
                            <hr/>
                            <a href="" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/h3.gif" alt="">
                        <div class="card-body">
                            <h4>Php With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10 March 2022</p>
                            <hr/>
                            <a href="" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/h3.gif" alt="">
                        <div class="card-body">
                            <h4>Php With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10 March 2022</p>
                            <hr/>
                            <a href="" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
