@extends('admin.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header"><h1>This is Edit  Category Form</h1></div>
                        <div class="card-body">
                            <form action="{{route('category.update', ['id' => $category->id])}} " method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control"  value="{{$category->name}}"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Category Description</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id=""  value="{{$category->description}}" name="description" cols="30" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" />
                                        <img src="{{asset($category->image)}}" class="py-2" alt="" height="130" width="160">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-8"></label>
                                    <div class="col-md-4">
                                        <input type="submit" name="addTeacherBtn" class="btn btn-outline-primary btn-block" value="Add New Category"/>
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
