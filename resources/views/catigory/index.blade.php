
@extends('layout')

@section('title', 'Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br><br>
                <h1>Categories</h1>
                <br><br>
                <a href="categories/create" class="btn btn-primary">Add Category</a>
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                        @if(count($categories) === 0)
                            <tr>
                                <td colspan="5">No categories found</td>
                            </tr>
                        @else
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    @if($category->is_active == 1)
                                    <td>Yes</td>
                                    @else
                                    <td>No</td>
                                    @endif
                                    <td>
                                        <a href="{{ route('catigory.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('catigory.show', $category->id) }}" class="btn btn-info">View</a>
                                        <form style="display:inline-block" action="{{ route('catigory.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
