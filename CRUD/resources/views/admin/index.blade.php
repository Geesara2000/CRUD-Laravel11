@extends('layouts.content')

@section('main-content')

<div class="container">

    <h2>CRUD</h2>

    <div class="text-end mb-5">
        <a href="" class="btn btn-primary">Add</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-primary">
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Action</th>
            </thead>

            <tbody>
                @forelse ($users as $index => $row)
                    <tr>
                        <td>1</td>
                        <td>geesra</td>
                        <td>gee@gmail.com</td>
                        <td>Photo</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No User Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>






@endsection
