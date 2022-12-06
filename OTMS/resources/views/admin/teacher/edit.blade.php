@extends('admin.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header"><h1>This is Edit  Teachers Form</h1></div>
                        <div class="card-body">
                            <form action="{{route('teacher.update', ['id' => $teacher->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{$teacher->name}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" value="{{$teacher->email}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Phone</label>
                                    <div class="col-md-8">
                                        <input type="text" name="mobile" class="form-control" value="{{$teacher->mobile}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" name="address" class="form-control" value="{{$teacher->address}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" />
                                        <img src="{{asset($teacher->image)}}" class="py-2" alt="" height="130" width="160">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-8"></label>
                                    <div class="col-md-4">
                                        <input type="submit" name="updateTeacherBtn" class="btn btn-outline-primary btn-block" value="Update Teacher"/>
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
