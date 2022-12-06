@extends('teacher.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header"><h1>This is Add  Course Form</h1></div>
                        <div class="card-body">
                            <form action="{{route('course.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Course Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" placeholder="Enter Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Course Category</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="category_id" id="">
                                        <option> -- Category Name -- </option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Course Objective</label>
                                    <div class="col-md-8">
                                        <textarea  class="form-control" id="" name="objective" cols="30" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Course Description</label>
                                    <div class="col-md-8">
                                        <textarea  class="form-control" id="" name="description" cols="30" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Course Description</label>
                                    <div class="col-lg-10">
                                        <div class="summernote">Hello Summernote</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Starting Date</label>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control" name="starting_date" class="form-control"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Course Fee</label>
                                    <div class="col-md-8">
                                        <input type="text" name="fee" class="form-control" placeholder="Enter Course Fee" />
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
                                        <input type="submit" name="addTeacherBtn" class="btn btn-outline-primary btn-block" value="Add New Course"/>
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
