@extends('layout.main')
@section('title')
| Home
@endsection
@section('content')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Tin Nổi Bật</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                            @foreach($baiviet5 as $bv)
                                <li><a href="/baodientu/baiviet/{{$bv->id}}">{{$bv->TieuDe}}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>Tin Trong Ngày</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                       
                            @foreach($baiviet6 as $bv)
                                <li><a href="/baodientu/baiviet/{{$bv->id}}">{{$bv->TieuDe}}</a></li>
                            @endforeach
                 
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="hero-add">
                        <a href="https://cuocchientromnhua.wechoice.vn/"><img src="{{ URL::asset('/public/img/tromnhua.JPG') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->
    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                
            <div class="col-12 col-md-6 col-lg-8">
                <div class="row">

                    <!-- Single Featured Post -->
                    <div class="col-12 col-lg-7">
                      @foreach($baiviet as $bv)
                        <div class="single-blog-post featured-post">
                            <div class="post-thumb">
                                <a href= "/baodientu/baiviet/{{$bv->id}}"><img src="{{ URL::asset($bv->Anh) }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href= "/baodientu/baiviet/{{$bv->id}}" class="post-catagory">{{$bv->TenChuyenMucCon}}</a>
                                <a href= "/baodientu/baiviet/{{$bv->id}}" class="post-title">
                                    <h6>{{$bv->TieuDe}}</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author"> <a href="#">{{$bv->NgayDuyet}}</a></p>
                                    <p class="post-excerp">{{$bv->NoiDungTomTat}} </p>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="{{ URL::asset('public/img/core-img/like.png') }}" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="{{ URL::asset('public/img/img/core-img/mascara.png') }}" alt="">
                                            <span>{{$bv->LuotXem}}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach
                    </div>


                    <div class="col-12 col-lg-5">
                        <!-- Single Featured Post -->
                    @foreach($baiviet2 as $bv)

                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href= "/baodientu/baiviet/{{$bv->id}}"><img src="{{ URL::asset($bv->Anh) }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href= "/baodientu/baiviet/{{$bv->id}}" class="post-catagory">{{$bv->TenChuyenMucCon}}</a>
                                <div class="post-meta">
                                    <a href= "/baodientu/baiviet/{{$bv->id}}" class="post-title">
                                        <h6>{{$bv->TieuDe}}</h6>
                                    </a>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="{{ URL::asset('public/img/core-img/like.png') }}" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="{{ URL::asset('public/img/img/core-img/mascara.png') }}" alt="">
                                            <span>{{$bv->LuotXem}}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>

                <div class="col-12 col-lg-4">
                @foreach($baiviet3 as $bv)
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="/baodientu/baiviet/{{$bv->id}}"><img src="{{ URL::asset($bv->Anh) }}" alt="" style="width:80px;height:60px;"></a>
                        </div>
                        <div class="post-data">
                            <a href="/baodientu/baiviet/{{$bv->id}}" class="post-catagory">{{$bv->TenChuyenMucCon}}</a>
                            <div class="post-meta">
                                <a href="/baodientu/baiviet/{{$bv->id}}" class="post-title">
                                    <h6>{{$bv->TieuDe}}</h6>
                                </a>
                                <p class="post-date"><span>{{$bv->NgayDuyet}}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="section-heading">
                <h6>Top chuyên mục</h6>
            </div>

            <div class="row">

                <!-- Single Post -->
                @foreach($baiviet4 as $bv)
                <div class="col-12 col-md-4">
                    <div class="single-blog-post style-3">
                        <div class="post-thumb">
                            <a href="/baodientu/baiviet/{{$bv->id}}"><img src="{{ URL::asset($bv->Anh) }}" alt="" style="width:320px;height:233px;"></a>
                        </div>
                        <div class="post-data">
                            <a href="/baodientu/baiviet/{{$bv->id}}" class="post-catagory">{{$bv->TenChuyenMucCon}}</a>
                            <a href="/baodientu/baiviet/{{$bv->id}}" class="post-title">
                                <h6 style="width:350px;height:90px;">{{$bv->TieuDe}}</h6>
                            </a>
                            <div class="post-meta d-flex align-items-center">
                                <a href="#" class="post-like"><img src="/img/core-img/like.png" alt="">
                                    <span>392</span></a>
                                <a href="#" class="post-comment"><img src="/img/core-img/mascara.png" alt="">
                                    <span>{{$bv->LuotXem}}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- ##### Video Post Area Start ##### -->
                <div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Single Video Post -->
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-video-post">
                                    <img src="{{ URL::asset('/public/img/bg-img/video1.jpg')}}" alt="">
                                    <!-- Video Button -->
                                    <div class="videobtn">
                                        <a href=" https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i
                                                class="fa fa-play" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Video Post -->
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-video-post">
                                    <img src="{{ URL::asset('/public/img/bg-img/video2.jpg')}}" alt="">
                                    <!-- Video Button -->
                                    <div class="videobtn">
                                        <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i
                                                class="fa fa-play" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Video Post -->
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-video-post">
                                    <img src="{{ URL::asset('/public//img/bg-img/video3.jpg')}}" alt="">
                                    <!-- Video Button -->
                                    <div class="videobtn">
                                        <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i
                                                class="fa fa-play" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ##### Video Post Area End ##### -->
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->
@endsection()