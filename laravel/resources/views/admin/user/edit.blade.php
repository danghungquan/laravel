@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User-details</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <form action="{{route('user.update',$user->id)}}" method="POST">
        @csrf @method('PUT')

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                @if($custumer->count() < 1) <h3>No user information yet</h3>
                    <hr>
                    <a href="{{route('user.index')}}">
                        <div class="btn btn-default btn-lg btn-flat">
                            Cancel
                        </div>
                    </a>
                    @endif
                    @foreach($custumer as $ct)
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                            <div class="col-12">
                                <img src="{{url('public/uploads/',$ct->image)}}" class="product-image" alt="Product Image">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <h4>E-mail Login</h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <p>
                                    {{$user->email}}
                                </p>
                            </div>

                            <h4>Status</h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <select name="status" id="inputrole" class="form-control" required="required">
                                    @if($user->status == 1)
                                    <option selected="selected" value="1">Public</option>
                                    <option value="0">Private</option>
                                    @else
                                    <option value="1">Public</option>
                                    <option selected="selected" value="0">Private</option>
                                    @endif
                                </select>
                            </div>
                            <h4>Role</h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <select name="role" id="inputrole" class="form-control" required="required">
                                    @foreach($role as $r)
                                    @if($user->role == $r->id)
                                    <option selected="selected" value="{{$r->id}}">{{$r->name}}</option>
                                    @continue
                                    @endif
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input hidden name="status" value="{{($user->status == 1) ? 0 : 1}}">
                            <div class="mt-4">
                                <button class="btn btn-primary btn-lg btn-flat">
                                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                    Save
                                </button>
                                <a href="{{route('user.index')}}">
                                    <div class="btn btn-default btn-lg btn-flat">
                                        Cancel
                                    </div>
                                </a>
                            </div>

                            <div class="mt-4 product-share">
                                <div class="row mt-4">
                                    <nav class="w-100">
                                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">User information</a>
                                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Purchase time</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content p-3" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                            <h3 class="my-3">{{$ct->full_name}}</h3>
                                            <hr>
                                            <label class="mb-3 mr-5" for="year_of_birth">Year_of_birth:</label>{{$ct->year_of_birth}}
                                            <br>
                                            <label class="mb-3 mr-5" for="year_of_birth">Job:</label>{{$ct->job}}
                                            <br>
                                            <label class="mb-3 mr-5" for="year_of_birth">E-mail:</label>{{$ct->email}}
                                            <br>
                                            <label class="mb-3 mr-5" for="phone">Phone number:</label>{{$ct->phone}}
                                            <br>
                                            <label class="mb-3 mr-5" for="phone">Aartment number:</label>{{$ct->contact}}
                                            <br>
                                            <label class="mb-3 mr-5" for="phone">Address:</label>{{$ct->address}}
                                        </div>
                                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
            </div>
            <!-- /.card -->
    </form>
</section>

@endsection

@section('css')
@endsection

@section('js')
@endsection