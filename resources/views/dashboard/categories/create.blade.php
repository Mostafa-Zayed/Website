@extends('dashboard.layouts.app')

@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Add Category</h1>
        <div class="col-12 col-md-12">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="settings-form" action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name :</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status :</label>
                    <select class="form-select" aria-label="Default select example" id="status" name="status">
                        <option value="1" selected>Active</option>
                        <option value="2">Not Active</option>
                    </select>
                </div>
                <br>
                <div class="mb-3">
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <button type="submit" class="btn app-btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>
@endsection