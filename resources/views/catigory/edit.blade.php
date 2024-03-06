@extends('layout')
@section('title', 'Edit Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br><br>
                <a href="{{ route('catigory.index') }}" class="btn btn-primary">Back</a>
                <br><br>
                <h1>Edit Category</h1>
                <form action="{{ route('catigory.update', $index->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $index->name }}">
                        @error('name')
                            <div style="color:red;"> {{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $index->description }}</textarea>
                        @error('description')
                            <div style="color:red;"> {{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="is_active">Active</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" @if($index->is_active == 1) selected @endif>Yes</option>
                            <option value="0" @if($index->is_active == 0) selected @endif>No</option>
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