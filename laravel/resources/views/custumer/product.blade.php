@extends('layouts.app')

@section('content')
<!-- =====  LODER  ===== -->
<div class="container">
    <div class="row ">
        <!-- =====  BANNER STRAT  ===== -->
        <div class="col-sm-12">
            <div class="breadcrumb ptb_20">
                <h1>Your Sales</h1>
                <ul>
                    <li><a href="{{url('')}}">Home</a></li>
                    <li class="active">Your Sales</li>
                </ul>
            </div>
        </div>
        <!-- =====  BREADCRUMB END===== -->
        <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
            <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" role="button">
                <div class="nav-responsive">
                    <div class="heading-part">
                        <h2 class="main_title">Personal photo</h2>
                    </div>
                    @foreach($data as $cat)
                    <div class="left_banner left-sidebar-widget mt_30 mb_40">
                        <a href="#"><img src="{{url('public/uploads/',$cat->image)}}" alt="Left Banner" class="img-responsive" /></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-8 col-lg-9 mtb_20 ">
            <div class="form-body">
                <div class="row">
                    <div class="form-holder">
                        <div class="form-content">
                            <div class="form-items">
                                <h3 class="text-center">Register your sales</h3>
                                <p>Seller Information.</p>
                                <hr>
                                <div class="col-md-3">
                                    <label class="mb-3 mr-5" for="first_name">First Name:</label>
                                    <input readonly class="form-control" type="text" name="first_name" placeholder="first Name..." required value="{{$cat->first_name}}">
                                </div>
                                <div class="col-md-3">
                                    <label class="mb-3 mr-5" for="last_name">Last Name:</label>
                                    <input readonly class="form-control" type="text" name="last_name" placeholder="last Name..." required value="{{$cat->last_name}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3 mr-5" for="full_name">Full Name:</label>
                                    <input readonly class="form-control" type="text" name="full_name" placeholder="Full Name..." required value="{{$cat->full_name}}">
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <label class="mb-3 mr-5" for="gender">Gender: </label>
                                        <br>
                                        @if($cat->sex == 1)
                                        <input readonly value="1" type="radio" class="btn-check" name="sex" id="male" autocomplete="off" checked="checked" required>
                                        <label class="" for="male">Male</label>
                                        @else
                                        <input readonly value="0" type="radio" class="btn-check" name="sex" id="female" autocomplete="off" checked="checked" required>
                                        <label class="" for="female">Female</label>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label class="mb-3 mr-5" for="year_of_birth">Year_of_birth:</label>
                                        <input readonly class="form-control" type="text" name="year_of_birth" placeholder="year_of_birth..." required value="{{$cat->year_of_birth}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-3 mr-5" for="job">Job:</label>
                                        <input readonly class="form-control" type="text" name="job" placeholder="Job..." required value="{{$cat->job}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3 mr-5" for="email">E-mail:</label>
                                    <input readonly class="form-control" type="email" name="email" placeholder="E-mail Address" required value="{{$cat->email}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3 mr-5" for="phone">Phone number:</label>
                                    <input readonly class="form-control" type="text" name="phone" placeholder="Phone number..." required value="{{$cat->phone}}">
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-3 mr-5" for="contact">Apartment number:</label>
                                    <input readonly class="form-control" type="text" name="contact" placeholder="Apartment number..." required value="{{$cat->contact}}">
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-3 mr-5" for="address">Address:</label>
                                    <input readonly class="form-control" type="text" name="address" placeholder="Address..." required value="{{$cat->address}}">
                                </div>
                                <div class="text-center">
                                    ------------>>>><<<<----------- </div>
                                        <p>We will contact you with this information.</p>
                                        <hr>
                                        <br>
                                        <div class="form-button mt-3">
                                            <a href="{{ route('custumer_ct.edit',$cat->id)}}" type="" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('product_ct.create')}}" id="submit" type="submit" class="btn btn-primary">Next</a>
                                        </div>
                                        @endforeach()


                                        @if ($data->count() == 0)
                                        <form class="requires-validation" method="POST" action="{{route('custumer_ct.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="left_banner left-sidebar-widget mt_30 mb_40">
                                                <img src="{{url('public/imageS/tm5.jpg')}}" alt="Left Banner" class="img-responsive" />
                                                <input type="file" name="file_upload" id="input" class="form-control"></input>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-lg-9 mtb_20 ">
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-holder">
                                        <div class="form-content">
                                            <div class="form-items">
                                                <h3 class="text-center">Register your sales</h3>
                                                <p>Seller Information.</p>
                                                <hr>
                                                <div class="col-md-3">
                                                    <label class="mb-3 mr-5" for="first_name">First Name:</label>
                                                    <input class="form-control" type="text" name="first_name" placeholder="first Name..." required value="">
                                                    @error('first_name')
                                                    <span style="color:red">{{$message}}</span><br>
                                                    @enderror
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="mb-3 mr-5" for="last_name">Last Name:</label>
                                                    <input class="form-control" type="text" name="last_name" placeholder="last Name..." required value="">
                                                    @error('last_name')
                                                    <span style="color:red">{{$message}}</span><br>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mb-3 mr-5" for="full_name">Full Name:</label>
                                                    <input class="form-control" type="text" name="full_name" placeholder="Full Name..." required value="">
                                                    @error('full_name')
                                                    <span style="color:red">{{$message}}</span><br>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                        <label class="mb-3 mr-5" for="gender">Gender: </label>
                                                        <br>
                                                        <input value="1" type="radio" class="btn-check" name="sex" id="male" autocomplete="off" checked="checked" required>
                                                        <label class="" for="male">Male</label>
                                                        <input value="0" type="radio" class="btn-check" name="sex" id="female" autocomplete="off" required>
                                                        <label class="" for="female">Female</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="mb-3 mr-5" for="year_of_birth">Year_of_birth:</label>
                                                        <input class="form-control" type="text" name="year_of_birth" placeholder="year_of_birth..." required value="">
                                                        @error('year_of_birth')
                                                        <span style="color:red">{{$message}}</span><br>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="mb-3 mr-5" for="job">Job:</label>
                                                        <input class="form-control" type="text" name="job" placeholder="Job..." required value="">
                                                        @error('job')
                                                        <span style="color:red">{{$message}}</span><br>
                                                        @enderror
                                                    </div>
                                                    <input hidden name="user_id" value="{{Auth::user()->id}}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mb-3 mr-5" for="email">E-mail:</label>
                                                    <input readonly class="form-control" type="email" name="email" placeholder="E-mail Address" required value="{{Auth::user()->email}}">
                                                    @error('email')
                                                    <span style="color:red">{{$message}}</span><br>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mb-3 mr-5" for="phone">Phone number:</label>
                                                    <input class="form-control" type="text" name="phone" placeholder="Phone number..." required value="">
                                                    @error('phone')
                                                    <span style="color:red">{{$message}}</span><br>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="mb-3 mr-5" for="contact">Apartment number:</label>
                                                    <input class="form-control" type="text" name="contact" placeholder="Apartment number..." required value="">
                                                    @error('contact')
                                                    <span style="color:red">{{$message}}</span><br>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="mb-3 mr-5" for="address">Address:</label>
                                                    <input class="form-control" type="text" name="address" placeholder="Address..." required value="">
                                                    @error('address')
                                                    <span style="color:red">{{$message}}</span><br>
                                                    @enderror
                                                </div>
                                                <div class="text-center">
                                                    ------------>>>><<<<----------- </div>
                                                        <p>We will contact you with this information.</p>
                                                        <hr>
                                                        <br>
                                                        <div class="form-button mt-3">
                                                            <button type="submit" class="btn btn-primary">Add</button>
                                                            <a id="submit" href="{{route('home')}}" class="btn btn-primary">Cancel</a>
                                                        </div>
                                                        </form>
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Blog  -->
                    <!-- End Blog   -->
                    <!-- =====  CONTAINER END  ===== -->
                    @endsection
                    @section('css')
                    <style>

                    </style>

                    @endsection

                    @section('js')
                    <script>
                        (function() {
                            'use strict'
                            const forms = document.querySelectorAll('.requires-validation')
                            Array.from(forms)
                                .forEach(function(form) {
                                    form.addEventListener('submit', function(event) {
                                        if (!form.checkValidity()) {
                                            event.preventDefault()
                                            event.stopPropagation()
                                        }

                                        form.classList.add('was-validated')
                                    }, false)
                                })
                        })()
                    </script>
                    @endsection