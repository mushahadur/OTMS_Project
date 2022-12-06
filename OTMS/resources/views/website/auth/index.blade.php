@extends('website.master')
@section('title')
    Login
@endsection
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row bg-danger">
                <div class="col-md-6 mx-auto">
                    <h1 class="text-center ">This is  Page</h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h2 class="text-center">Login Form</h2></div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">

                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Login" name="email">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h2 class="text-center">Registration Form</h2></div>
                        <div class="card-body">
                            <form action="">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">

                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Registration" name="email">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


