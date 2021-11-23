@extends('layouts.app')

@section('content')
<!-- =====  LODER  ===== -->
<div class="container">
    <div class="row ">
        <!-- =====  BANNER STRAT  ===== -->
        <div class="col-sm-12">
            <div class="breadcrumb ptb_20">
                <h1>Register to sell products</h1>
                <ul>
                    <li><a href="{{url('')}}">Home</a></li>
                    <li class="active">Your Sales</li>
                </ul>
            </div>
        </div>
        <!-- =====  BREADCRUMB END===== -->
        <form action="{{route('product_ct.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
                <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" role="button">
                    <div class="nav-responsive">
                        <div class="heading-part">
                            <h2 class="main_title">Product image</h2>
                        </div>
                        <div class="left_banner left-sidebar-widget mt_30 mb_40">
                            <a href="#"><img src="{{url('public/images/tm5.jpg')}}" alt="Left Banner" class="img-responsive" /></a>
                            <input type="file" name="file_upload" id="input" class="form-control"></input>
                        </div>
                        @error('file_upload')
                        <span style="color:red">{{$message}}</span><br>
                        @enderror
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
                                    <p>product information.</p>
                                    <hr>
                                    <div class="col-md-12">
                                        <label class="mb-3 mr-5" for="name">Name product:</label>
                                        <input class="form-control" type="text" name="name" placeholder="Name product..." value="">
                                        @error('name')
                                        <span style="color:red">{{$message}}</span><br>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-3 mr-5" for="exampleFormControlSelect1">Category:</label>
                                        <select name="category_id" class="form-control form-control-lg" id="exampleFormControlSelect1">
                                            <option value="">Selective...</option>
                                            @foreach($data_category as $dt)
                                            <option value="{{$dt->id}}">{{$dt->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span style="color:red">{{$message}}</span><br>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <label class="mb-3 mr-5" for="quantity">Quantity:</label>
                                        @foreach($ct_id as $id)
                                        <input hidden name="custumer_id" value="{{$id->id}}">
                                        @endforeach
                                        <input class="form-control" type="number" name="quantity" placeholder="quantity..." value="1">
                                        @error('quantity')
                                        <span style="color:red">{{$message}}</span><br>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-3 mr-5" for="description">Description:</label>
                                        <textarea class="form-control" type="" name="description" placeholder="Description..." value=""></textarea>
                                        @error('description')
                                        <span style="color:red">{{$message}}</span><br>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12 text-center">
                                            <label class="mb-3 mr-5" for="gender">
                                                <br>
                                                <h3> Shipping method </h3>
                                            </label>
                                            <br>
                                            <div class="col-md-6 text-center">
                                                <input readonly value="1" type="radio" class="btn-check" name="method_sell" id="male" autocomplete="off" checked="checked">
                                                <br><label class="" for="male">Send goods to the company yourself</label>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <input readonly value="0" type="radio" class="btn-check" name="method_sell" id="female" autocomplete="off">
                                                <br><label class="" for="female">The company's side comes to pick it up</label>
                                            </div>
                                            @error('method_sell')
                                            <span style="color:red">{{$message}}</span><br>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mb-3 mr-5 col-md-12" for="day_1">First desired time:</label>
                                            <div class="col-md-3">
                                                since:
                                                <input class="form-control" type="date" min="08:00" max="14:00" name="from_day_1" value="">
                                                @error('from_day_1')
                                                <span style="color:red">{{$message}}</span><br>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                to date:
                                                <input class="form-control" type="date" min="14:00" max="20:00" name="day_1" value="">
                                                @error('day_1')
                                                <span style="color:red">{{$message}}</span><br>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                time from:
                                                <input class="form-control" type="time" min="08:00" max="14:00" name="from_time_1" value="08:00">
                                                @error('from_time_1')
                                                <span style="color:red">{{$message}}</span><br>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                come:
                                                <input class="form-control" type="time" min="14:00" max="20:00" name="time_1" value="">
                                                @error('time_1')
                                                <span style="color:red">{{$message}}</span><br>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="text-center col-md-12">
                                            <br>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mb-3 mr-5 col-md-12" for="day_2">Second desired time:</label>
                                            <div class="col-md-3">
                                                since:
                                                <input class="form-control" type="date" name="from_day_2" value="">
                                            </div>
                                            <div class="col-md-3">
                                                to date:
                                                <input class="form-control" type="date" name="day_2" value="">
                                            </div>
                                            <div class="col-md-3">
                                                time from:
                                                <input class="form-control" type="time" name="from_time_2" value="">
                                            </div>
                                            <div class="col-md-3">
                                                come:
                                                <input class="form-control" type="time" name="time_2" value="">
                                            </div>
                                        </div>
                                        <div class=" col-md-12">
                                            <hr>
                                            <br>
                                            <div class="form-button mt-3">
                                                <a href="{{ route('product_ct.index')}}" type="" class="btn btn-primary">Back</a>
                                                <button id="submit" type="submit" class="btn btn-primary">Register to sell</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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