@extends('website.master')
@section('title')
    Best Online Training System in Bangladesh
@endsection

@section('body')

    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="1700">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/') }}website/img/laravel.jpg" alt="" height="500" width="100%">
                <div class="carousel-caption">
                    <h3 class="text-dark">PHP With Laravel Framework</h3>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ea sapiente totam voluptatibus. Amet deserunt dolorem, dolorum facere fugit harum ipsam nostrum obcaecati optio possimus quasi quos, sit ut velit?</p>
                    <a class="btn btn-dark px-5" href="">Read More..</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}website/img/h2.jpg" alt="" height="500" width="100%">
                <div class="carousel-caption">
                    <h3 class="text-dark">Responsive web Design</h3>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ea sapiente totam voluptatibus. Amet deserunt dolorem, dolorum facere fugit harum ipsam nostrum obcaecati optio possimus quasi quos, sit ut velit?</p>
                    <a class="btn btn-dark px-5" href="">Read More..</a>\
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}website/img/h3.gif" alt="" height="500" width="100%">
                <div class="carousel-caption">
                    <h3 class="text-dark">Profetional Desital Marketing</h3>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ea sapiente totam voluptatibus. Amet deserunt dolorem, dolorum facere fugit harum ipsam nostrum obcaecati optio possimus quasi quos, sit ut velit?</p>
                    <a class="btn btn-dark px-5" href="">Read More..</a>
                </div>
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


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
                            <a href="{{route('training.detail')}}" class="btn btn-outline-success">Read More</a>
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
                            <a href="{{route('training.detail')}}" class="btn btn-outline-success">Read More</a>
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
                            <a href="{{route('training.detail')}}" class="btn btn-outline-success">Read More</a>
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
