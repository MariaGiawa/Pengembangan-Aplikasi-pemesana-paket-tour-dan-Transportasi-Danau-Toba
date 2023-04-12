@extends('Layout\App')
@section('main')
    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Category</a>
                    </li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">

            <div class="row">
                <aside class="col-lg-3">
                    <p>
                        <a class="btn_map" data-bs-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                    </p>

                    <div class="box_style_cat">
                        <ul id="cat_nav">
                            <li><a href="#" id="active"><i class="icon_set_3_restaurant-10"></i>All restaurants <span>(141)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_3_restaurant-1"></i>Pizza / Italian <span>(20)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_3_restaurant-2"></i>Fast Food <span>(16)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_3_restaurant-3"></i>Japanese <span>(12)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_3_restaurant-4"></i>Chinese <span>(11)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_3_restaurant-5"></i>International <span>(20)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_3_restaurant-8"></i>Coffe bar <span>(08)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_3_restaurant-7"></i>Fish <span>(08)</span></a>
                            </li>
                        </ul>
                    </div>
                    <!--End filters col-->
                    <div class="box_style_2">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>Need <span>Help?</span></h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </aside>
                <!--End aside -->
                <div class="col-lg-9">
                    <div id="tools">
                        <div class="row justify-content-between">
                            <div class="col-md-3 col-sm-4">
                                <div class="styled-select-filters">
                                    <select name="sort_price" id="sort_price">
                                        <option value="" selected>Sort by price</option>
                                        <option value="lower">Lowest price</option>
                                        <option value="higher">Highest price</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4 d-none d-sm-block text-end">
                                <a href="all_restaurants_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="#" class="bt_filters"><i class="icon-list"></i></a>
                            </div>

                        </div>
                    </div>
                    <!--/tools -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                    @foreach ($restaurants as $restaurant )
                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 position-relative">
                                <div class="ribbon_3 popular"><span>Popular</span>
                                </div>
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                @foreach ($restaurant->images as $image)
                                <div class="img_list">
                                    <a href="{{ route('restaurant.details', ['id' => $restaurant->id]) }}"><img src="{{ asset('storage/restaurant/' . $image->images) }}" alt="Image">
                                        <div class="short_info"><i class="icon_set_3_restaurant-2"></i> Fast food</div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tour_list_desc">
                                    <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small>
                                    </div>
                                    <h3><strong>{{$restaurant->nama_restaurant}}</strong> restaurant</h3>
                                    <h5><strong>{{$restaurant->lokasi}}</strong></h5>
                                    <p>{{$restaurant->description}}</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="price_list">
                                    <div><sup>$</sup>{{$restaurant->harga}}<span class="normal_price_list">$99</span><small>*Per person</small>
                                    <a href="{{ route('restaurant.details', ['id' => $restaurant->id]) }}" class="btn_1">Details</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <!--End strip -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- end pagination-->

                </div>
                <!-- End col lg-9 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->
    @endsection

   