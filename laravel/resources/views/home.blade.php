@extends('layouts.app')

@section('content')
<div class="container banner mt_20">
    <div class="main-banner owl-carousel">
        <div class="item"><a href="#"><img src="{{url('public')}}/images/main_banner1.jpg" alt="Main Banner" class="img-responsive" /></a></div>
        <div class="item"><a href="#"><img src="{{url('public')}}/images/main_banner2.jpg" alt="Main Banner" class="img-responsive" /></a></div>
    </div>
</div>
<!-- =====  BANNER END  ===== -->
<!-- =====  CONTAINER START  ===== -->
<div class="container">
    <!-- =====  SUB BANNER  STRAT ===== -->
    <div class="row">
        <div class="cms_banner mt_10">
            <div class="col-xs-4 mt_10">
                <div id="subbanner1" class="sub-hover">
                    <div class="sub-img"><a href="#"><img src="{{url('public')}}/images/sub1.jpg" alt="Sub Banner1" class="img-responsive"></a></div>
                    <div class="bannertext text-center">
                        <button class="btn mb_10 cms_btn">View product</button>
                        <h2>Hats & collapse</h2>
                        <p class="mt_10">Wide veriety of sizes,colors</p>
                    </div>
                </div>
                <div id="subbanner2" class="sub-hover mt_20">
                    <div class="sub-img"><a href="#"><img src="{{url('public')}}/images/sub2.jpg" alt="Sub Banner2" class="img-responsive"></a></div>
                    <div class="bannertext text-center">
                        <button class="btn mb_10 cms_btn">View product</button>
                        <h2>Buy Scarfs</h2>
                        <p class="mt_10">Shop collection of designer</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 mt_10">
                <div id="subbanner3" class="sub-hover">
                    <div class="sub-img"> <a href="#"><img src="{{url('public')}}/images/sub3.jpg" alt="Sub Banner3" class="img-responsive"></a></div>
                </div>
            </div>
            <div class="col-xs-4 mt_10">
                <div id="subbanner4" class="sub-hover">
                    <div class="sub-img"><a href="#"><img src="{{url('public')}}/images/sub4.jpg" alt="Sub Banner4" class="img-responsive"></a></div>
                    <div class="bannertext text-center">
                        <button class="btn mb_10 cms_btn">View product</button>
                        <h2>Handbags</h2>
                        <p class="mt_10">Bags for men & women only</p>
                    </div>
                </div>
                <div id="subbanner5" class="sub-hover mt_20">
                    <div class="sub-img"><a href="#"><img src="{{url('public')}}/images/sub5.jpg" alt="Sub Banner5" class="img-responsive"></a></div>
                    <div class="bannertext text-center">
                        <button class="btn mb_10 cms_btn">View product</button>
                        <h2>Footware</h2>
                        <p class="mt_10">Over 400 luxury designers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====  SUB BANNER END  ===== -->
    <div class="row ">
        <div class="col-sm-12 mtb_10">
            <!-- =====  PRODUCT TAB  ===== -->
            <div id="product-tab" class="mt_50">
                <div class="heading-part mb_10 ">
                    <h2 class="main_title">Fashion Items</h2>
                </div>
                <ul class="nav text-right">
                    <li class="active"> <a href="#nArrivals" data-toggle="tab">New Arrivals</a> </li>
                    <li><a href="#Bestsellers" data-toggle="tab">Bestsellers</a> </li>
                    <li><a href="#Featured" data-toggle="tab">Featured</a> </li>
                </ul>
                <div class="tab-content clearfix box">
                    <div class="tab-pane active" id="nArrivals">
                        <div class="nArrivals owl-carousel">
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product9-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product9-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Bestsellers">
                        <div class="Bestsellers owl-carousel">
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Featured">
                        <div class="Featured owl-carousel">
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =====  PRODUCT TAB  END ===== -->
            <!-- =====  SUB BANNER  STRAT ===== -->
            <div class="row">
                <div class="cms_banner mt_50">
                    <div class="col-sm-12 mt_10">
                        <div id="subbanner3" class="sub-hover">
                            <div class="sub-img"> <a href="#"><img src="{{url('public')}}/images/sub6.jpg" alt="Sub Banner3" class="img-responsive"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =====  SUB BANNER END  ===== -->
            <!-- =====  PRODUCT TAB  ===== -->
            <div id="product-tab" class="mt_50">
                <div class="heading-part mb_10 ">
                    <h2 class="main_title">Fashion Items</h2>
                </div>
                <div class="tab-content clearfix box">
                    <div class="tab-pane active" id="nArrivals">
                        <div class="tab-pane" id="Featured">
                            <div class="Featured owl-carousel">
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{url('public')}}/images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{url('public')}}/images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =====  PRODUCT TAB  END ===== -->
            <!-- =====  Blog ===== -->
            <div id="Blog" class="mt_50">
                <div class="heading-part mb_10 ">
                    <h2 class="main_title">Latest News</h2>
                </div>
                <div class="blog-contain box">
                    <div class="blog owl-carousel ">
                        <div class="item">
                            <div class="box-holder">
                                <div class="thumb post-img"><a href="#"> <img src="{{url('public')}}/images/blog/blog_img_01.jpg" alt="OYEENok"> </a>
                                    <div class="date-time text-center">
                                        <div class="day"> 11</div>
                                        <div class="month">Aug</div>
                                    </div>
                                    <div class="post-image-hover"> </div>
                                    <div class="post-info">
                                        <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                                        <div class="view-blog">
                                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-holder">
                                <div class="thumb post-img"><a href="#"> <img src="{{url('public')}}/images/blog/blog_img_02.jpg" alt="OYEENok"> </a>
                                    <div class="date-time text-center">
                                        <div class="day"> 11</div>
                                        <div class="month">Aug</div>
                                    </div>
                                    <div class="post-image-hover"> </div>
                                    <div class="post-info">
                                        <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                                        <div class="view-blog">
                                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-holder">
                                <div class="thumb post-img"><a href="#"> <img src="{{url('public')}}/images/blog/blog_img_01.jpg" alt="OYEENok"> </a>
                                    <div class="date-time text-center">
                                        <div class="day"> 11</div>
                                        <div class="month">Aug</div>
                                    </div>
                                    <div class="post-image-hover"> </div>
                                    <div class="post-info">
                                        <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                                        <div class="view-blog">
                                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-holder">
                                <div class="thumb post-img"><a href="#"> <img src="{{url('public')}}/images/blog/blog_img_02.jpg" alt="OYEENok"> </a>
                                    <div class="date-time text-center">
                                        <div class="day"> 11</div>
                                        <div class="month">Aug</div>
                                    </div>
                                    <div class="post-image-hover"> </div>
                                    <div class="post-info">
                                        <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                                        <div class="view-blog">
                                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =====  Blog end ===== -->
            </div>
        </div>
    </div>
    <div id="brand_carouse" class="ptb_50 text-center">
        <div class="type-01">
            <div class="row">
                <div class="col-sm-12">
                    <div class="brand owl-carousel ptb_20">
                        <div class="item text-center"> <a href="#"><img src="{{url('public')}}/images/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{url('public')}}/images/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{url('public')}}/images/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{url('public')}}/images/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{url('public')}}/images/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{url('public')}}/images/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{url('public')}}/images/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{url('public')}}/images/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{url('public')}}/images/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletters mb_50">
        <div class="row">
            <div class="col-sm-6">
                <div class="news-head pull-left">
                    <h2>SIGN UP FOR NEWSLETTER</h2>
                    <div class="new-desc">Be the First to know about our Fresh Arrivals and much more!</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="news-form pull-right">
                    <form onsubmit="return validatemail();" method="post">
                        <div class="form-group required">
                            <input name="email" id="email" placeholder="Enter Your Email" class="form-control input-lg" required="" type="email">
                            <button type="submit" class="btn btn-default btn-lg">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====  CONTAINER END  ===== -->
@endsection