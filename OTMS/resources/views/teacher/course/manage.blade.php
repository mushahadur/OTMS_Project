@extends('teacher.master')

@section('body')
    <section>
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"> <h4 class="card-title text-center">All Course Info</h4></div>
                        <div class="card-body">
                            <p class="card-title-desc text-success text-center"> {{Session::get('message')}}
                            </p>
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Course Title</th> 
                                    <th>Course Category</th>
                                    <th>Course Objective</th>
                                    <th>Course Description</th>
                                    <th>Starting Date</th>
                                    <th>Course Fee</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->category->name }}</td>
                                    <td>{{ $course->objective }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>{{ $course->starting_date }}</td>
                                    <td>{{ $course->fee }}</td>
                                    <td><img src="{{asset($course->image)}}" alt="" height="100" width="120"></td>

                                    <td>
                                        <a href="{{route('course.edit', ['id' => $course->id])}}" class="btn btn-outline-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('course.delete', ['id' => $course->id])}}" class="btn btn-outline-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div>
    </section>

@endsection

