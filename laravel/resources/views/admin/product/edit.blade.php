@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Product details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Product-details</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <form action="{{route('product.update',$data->id)}}" method="POST">
        @csrf @method('PUT')
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review{{$data->name}}</h3>
                        <div class="col-12">
                            <img src="{{url('public/uploads/',$data->image)}}" class="product-image" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{$data->name}}</h3>
                        <p>
                            {{$data->description}}
                        </p>
                        <hr>
                        <h4>Selling method</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <p>
                                @if($data->method_sell == 1)
                                The company will come to pick up based on the customer's time
                                @else
                                Customers send themselves to the company
                                @endif
                            </p>
                        </div>
                        <h4>Category</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <p>
                                {{$data->join_category->name}}
                            </p>
                        </div>
                        <h4>Status</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            @if($data->status == 0)
                            <span class="badge badge-danger">No processing</span>
                            @else
                            <span class="badge badge-success">Already bought</span>
                            @endif
                        </div>
                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
                                Quantity
                            </h2>
                            <h4 class="mt-0">
                                <small>Ex Tax: {{$data->quantity}}</small>
                            </h4>
                        </div>

                        <input hidden name="status" value="{{($data->status == 1) ? 0 : 1}}">
                        <div class="mt-4">
                            @if($data->status == 0)
                            <button class="btn btn-primary btn-lg btn-flat">
                                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                Purchase
                            </button>

                            @else
                            <button class="btn btn-danger btn-lg btn-flat">
                                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                Purchase
                            </button>
                            @endif
                            <a href="{{route('product.index')}}">
                                <div class="btn btn-default btn-lg btn-flat">
                                    Cancel
                                </div>
                            </a>
                        </div>

                        <div class="mt-4 product-share">
                            <a href="#" class="text-gray">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                            <a href="#" class="text-gray">
                                <i class="fab fa-twitter-square fa-2x"></i>
                            </a>
                            <a href="#" class="text-gray">
                                <i class="fas fa-envelope-square fa-2x"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Product seller</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Purchase time</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                            <label class="mb-3 mr-5" for="full_name">Full Name:</label>{{$data->join_custumer->full_name}}
                            <br>
                            <label class="mb-3 mr-5" for="gender">Gender: </label>
                            @if($data->sex == 1)
                            Male
                            @else
                            Female
                            @endif
                            <br>
                            <label class="mb-3 mr-5" for="year_of_birth">Year_of_birth:</label>{{$data->join_custumer->year_of_birth}}
                            <br>
                            <label class="mb-3 mr-5" for="year_of_birth">Job:</label>{{$data->join_custumer->job}}
                            <br>
                            <label class="mb-3 mr-5" for="year_of_birth">E-mail:</label>{{$data->join_custumer->email}}
                            <br>
                            <label class="mb-3 mr-5" for="phone">Phone number:</label>{{$data->join_custumer->phone}}
                            <br>
                            <label class="mb-3 mr-5" for="phone">Aartment number:</label>{{$data->join_custumer->contact}}
                            <br>
                            <label class="mb-3 mr-5" for="phone">Address:</label>{{$data->join_custumer->address}}
                        </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                            <b class="mb-3 mr-5" for="phone">First desired time:</b><br>
                            <b> From: </b> {{$data->from_time_1}} <b> Come: </b> {{$data->time_1}}<br>
                            <b> From: </b> {{$data->from_day_1}} <b> Come: </b> {{$data->day_1}}<br><br>
                            <b class="mb-3 mr-5" for="phone">Second desired time:</b><br>
                            <b> From: </b> {{$data->from_time_2}} <b> Come: </b> {{$data->time_2}}<br>
                            <b> From: </b> {{$data->from_day_2}} <b> Come: </b> {{$data->day_2}}
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </form>
</section>



@endsection
@section('css')

@endsection
@section('js')

@endsection