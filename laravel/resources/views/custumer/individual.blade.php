@extends('layouts.app')

@section('content')
<!-- =====  LODER  ===== -->
<div class="container">
    <div class="row ">
        <!-- =====  BANNER STRAT  ===== -->
        <div class="col-sm-12">
            <div class="breadcrumb ptb_20">
                <h1>Personal Page</h1>
                <ul>
                    <li><a href="{{url('')}}">Home</a></li>
                    <li class="active">Personal Page</li>
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
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <!-- =====  BREADCRUMB END===== -->
        @foreach($data as $dt)
        <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
            <div class="left_banner left-sidebar-widget mt_30 mb_40"> <a href="{{ route('custumer_ct.edit',$dt->id)}}"><img src="{{url('public/uploads',$dt->image)}}" alt="Left Banner" class="img-responsive" /></a> </div>
            <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" role="button">
                <div class="nav-responsive">
                    <ul class="nav  main-navigation collapse in">
                        <li><a href="{{ route('custumer_ct.edit',$dt->id)}}"><b>{{$dt->full_name}}</b></a></li>
                        <li><a href="{{ route('custumer_ct.edit',$dt->id)}}">Year_of_birth: <b>{{$dt->year_of_birth}}</b></a></li>
                        <li><a href="{{ route('custumer_ct.edit',$dt->id)}}">E_mail: <b>{{$dt->email}}</b></a></li>
                        <li><a href="{{ route('custumer_ct.edit',$dt->id)}}">Phone: <b>{{$dt->phone}}</b></a></li>
                        <li><a href="{{ route('custumer_ct.edit',$dt->id)}}">Job: <b>{{$dt->job}}</b></a></li>
                        <li><a href="{{ route('custumer_ct.edit',$dt->id)}}">Apartment number: <b>{{$dt->contact}}</b></a></li>
                        <li><a href="{{ route('custumer_ct.edit',$dt->id)}}">Address: <b>{{$dt->address}}</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
        @foreach($data as $dt)
        <div class=" col-sm-8 col-lg-9 mtb_20">
            <div class="row">
                <div class="three-col-blog text-left">
                    @foreach($dt->join_product as $pr)
                    <div class="blog-item col-md-6 mb_30">
                        <div class="post-format">
                            <div class="thumb post-img"><a href="single_blog.html"> <img src="{{url('public/uploads',$pr->image)}}" alt="OYEENok"></a></div>
                            <div class="post-type">
                                <a href="{{route('individual_ct.destroy',$pr->id)}}" class="btndelete">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>

                            </div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h3 class="mb_10"> <a>{{$pr->name}}</a> </h3>
                            <p>{{$pr->description}}</p>
                            <div class="details mtb_20">
                                <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>{{$pr->created_at->format('d-m-Y')}} </div>
                                <div class="more pull-right">
                                    <a>
                                        @if($pr->status)
                                        <span class="badge badge-danger">pending </span>
                                        @else
                                        <span class="badge badge-success">already sold </span>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
        <form action="" id="form-delete" method="POST">
            @csrf @method('DELETE')
        </form>
        <div class="pagination-nav text-center mtb_20">
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $('.btndelete').click(function(ev) {
        ev.preventDefault(); //ko cho load
        var href = $(this).attr('href'); // láy action của href từ thẻ a có class btndelete
        $('form#form-delete').attr('action', href); // láy cái href từ thẻ a gán vào action của form
        if (confirm('Bạn có chắc muốn xóa không?')) {
            $('form#form-delete').submit();
        }
    });
</script>
@stop