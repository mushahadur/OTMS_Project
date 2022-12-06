@extends('teacher.master')

@section('body')
    <section>
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"> <h4 class="card-title text-center">All Category Info</h4></div>
                        <div class="card-body">
                            <p class="card-title-desc text-success text-center"> {{Session::get('message')}}
                            </p>
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Category Name</th>
                                    <th>Category Desription</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($categorys as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td><img src="{{asset($category->image)}}" alt="" height="100" width="120"></td>
                                    <td>
                                        <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-outline-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-outline-danger">
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

