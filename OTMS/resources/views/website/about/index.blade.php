@extends('website.master')
@section('title')
    About Us
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body shadow">
                        <h3>Our Mission</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate doloribus ducimus eos error eum, facere facilis hic impedit iusto laudantium magnam nobis porro rem saepe veritatis voluptate voluptates voluptatibus?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate doloribus ducimus eos error eum, facere facilis hic impedit iusto laudantium magnam nobis porro rem saepe veritatis voluptate voluptates voluptatibus?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body shadow">
                        <h3>Our Vission</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate doloribus ducimus eos error eum, facere facilis hic impedit iusto laudantium magnam nobis porro rem saepe veritatis voluptate voluptates voluptatibus?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate doloribus ducimus eos error eum, facere facilis hic impedit iusto laudantium magnam nobis porro rem saepe veritatis voluptate voluptates voluptatibus?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body shadow">
                        <h3>Our Instructor</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/in.jpeg" alt="">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instractor degignetion</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/in.jpeg" alt="">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instractor degignetion</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/in.jpeg" alt="">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instractor degignetion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
