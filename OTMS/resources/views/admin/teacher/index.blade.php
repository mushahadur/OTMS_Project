@extends('admin.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header"><h1>This is Add  Teachers Form</h1></div>
                        <div class="card-body">
                            <form action="{{route('teacher.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Phone</label>
                                    <div class="col-md-8">
                                        <input type="text" name="mobile" class="form-control" placeholder="Enter Phone" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" name="address" class="form-control" placeholder="Enter Address" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-8"></label>
                                    <div class="col-md-4">
                                        <input type="submit" name="addTeacherBtn" class="btn btn-outline-primary btn-block" value="Add Teacher"/>
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
