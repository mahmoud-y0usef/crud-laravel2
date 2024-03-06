@extends('layout')
@section('title', 'Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br><br>
                <a href="{{ route('catigory.index') }}" class="btn btn-primary">Back</a>
                <br><br>
                <h1>Category</h1>
                <br>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{ $index->id }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $index->name }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $index->description }}</td>
                        </tr>
                        <tr>
                            <td>Active</td>
                            <td>
                                @if($index->is_active == 1)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>