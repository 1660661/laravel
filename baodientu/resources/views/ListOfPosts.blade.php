@extends('layout.main')
@section('title')
| Chuyen Muc
@endsection
@section('content')
<!-- ##### Blog Area Start ##### -->
<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post mb-30">
                    @foreach($baiviet as $bv)
                        <div class="post-thumb">
                            <a href= "/baodientu/baiviet/{{$bv->id}}"><img src="{{ URL::asset($bv->Anh) }}" alt=""></a>
                        </div>
                        <div class="post-data">
                        
                            <a href= "/baodientu/baiviet/{{$bv->id}}" class="post-catagory">{{$bv->TenChuyenMucCon}}</a>
                            <a href= "/baodientu/baiviet/{{$bv->id}}" class="post-title">
                                <h6>{{$bv->TieuDe}}</h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author">{{$bv->NgayDuyet}}</p>
                                <p class="post-excerp">{{$bv->NoiDungTomTat}}</p>
                                <!-- Post Like & Post Comment -->
                                <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                    <!-- Tags -->
                                    <div class="newspaper-tags d-flex">
                                        <span>Tags:</span>
                                        <ul class="d-flex">
                                        
                                        </ul>
                                    </div>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="/img/core-img/like.png" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="/img/core-img/chat.png" alt="">
                                            <span>{{$bv->LuotXem}}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->
@endsection()
            