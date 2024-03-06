@extends('layout')
@section('title', 'Add Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br><br>
                <a href="/" class="btn btn-primary">Back</a>
                <br><br>
                <h1>Add Category</h1>
                <form action="{{ route('catigory.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        @error('name')
                            <div style="color:red;"> {{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        @error('description')
                            <div style="color:red;"> {{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="is_active">Active</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        @error('is_active')
                            <div style="color:red;"> {{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection