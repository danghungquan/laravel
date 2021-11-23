@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Category details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Category-details</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <form action="{{route('category.update',$category->id)}}" method="POST">
        @csrf @method('PUT')
        <div class="col-md-6">
            <label class="mb-3 mr-5" for="name">Name:</label>
            <input class="form-control" type="name" name="name" placeholder="Name category... Address" required value="{{$category->name}}">
        </div>
        <label class="mb-3 mr-5" for="status">Status:</label>
        @if($category->status == 1)
        <div class="col-md-6">
            <input value="1" type="radio" class="btn-check" name="status" id="male" autocomplete="off" checked="checked">
            <label class="" for="male">Public</label>
        </div>
        <div class="col-md-6">
            <input value="0" type="radio" class="btn-check" name="status" id="female" autocomplete="off">
            <label class="" for="female">Private</label>
        </div>
        @else
        <div class="col-md-6">
            <input value="1" type="radio" class="btn-check" name="status" id="male" autocomplete="off">
            <label class="" for="male">Public</label>
        </div>
        <div class="col-md-6">
            <input value="0" type="radio" class="btn-check" name="status" id="female" autocomplete="off" checked="checked">
            <label class="" for="female">Private</label>
        </div>
        @endif
        <div class="col-md-6">
            <button class="btn btn-success">Update</button>
            <a href="{{route('category.index')}}" class="btn btn-default">Cancel</a>
        </div>
    </form>
</section>

@endsection
@section('css')

@endsection
@section('js')

@endsection