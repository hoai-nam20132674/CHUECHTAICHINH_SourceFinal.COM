@extends('front-end.layout.default')

@section('head')
    <title>Video Review Sản Phẩm Cuongluxury</title>
    <meta name="description" content="Video Review Sản Phẩm Cuongluxury" />
    <meta name="keywords" content="" />
    <meta name="DC.title" content="CuongLuxury" />
    <meta property="og:type" name="ogtype" content="Website" />
    <meta property="og:title" name="ogtitle" content="Video Review Sản Phẩm Cuongluxury" />
    <meta property="og:description" name="ogdescription" content="Video Review Sản Phẩm Cuongluxury" />
    <meta property="og:url" name="ogurl" content="https://cuongluxury.vn/videos" />
    <meta property="og:image" name="ogimage" content="" />
    <meta property="og:image:alt" name="og:image:alt" content="Cuong Luxury" />
    <meta property="og:sitename" content="https://cuongluxury.vn/" />
    <link rel="canonical" href="https://cuongluxury.vn/videos" />
    <style type="text/css">
        
    </style>
@endsection


@section('content')
    <section class="bread-crumb a-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-head margin-top-0">
                       Video Review Sản Phẩm
                    </div>
                    <ul class="breadcrumb" itemscope="">
                        <li class="home">
                            <a itemprop="url" href="/"><span itemprop="title">Trang chủ</span></a>
                           
                        </li>
                        <li ><span><i class='fa fa-angle-right'></i> </span><strong itemprop='title'><a itemprop='url' href='videos' title='Video Review Sản Phẩm Cuongluxury'>Video Review Sản Phẩm Cuongluxury</a></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="container" itemscope="" itemtype="http://schema.org/Blog">
        <meta itemprop='name' content='Chuyên mục tin tức'><meta itemprop='description' content=''>
        <div class="row">
            <!-- <section class="right-content col-md-12 list-blog-page"> -->
                
                <!-- <section class="list-blogs blog-main "> -->
                    
                        
                                @foreach($videos as $item)
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                  <div class="item">
                                      <div class="video-items">
                                          <div class="video-thumb">
                                              <a href="{{$item->href}}" data-fancybox="" data-width="640" data-height="360" title="{{$item->title}}">
                                                  <img class="image-video" src="{{asset('uploads/images/videos/'.$item->avata)}}" alt="{{$item->title}}" />
                                              </a>
                                              <a href="{{$item->href}}" data-fancybox="" data-width="640" data-height="360" title="" class="i-play"></a>
                                          </div>
                                          <div class="video-desc">
                                                <span>{!! \Illuminate\Support\Str::words($item->content,30,'...')  !!}</span>
                                               
                                          </div>
                                      </div>
                                  </div>
                                  
                                </div>
                               @endforeach
                            
                            @php
                                $items = $videos;
                            @endphp
                            <div class="d_page">
                                @if($items->currentPage() != 1)
                                    
                                    <a href="{{$items->url($items->currentPage()-1)}}"><</a>
                                @else
                                    <b href="{{$items->url($items->currentPage()-1)}}"><</b>
                                @endif
                                @for($i =1; $i<=$items->lastPage();$i++)
                                    @if($request->page == $i)
                                        
                                        <b>{{$i}}</b>
                                    @else
                                        <a href="{{$items->url($i)}}">{{$i}}</a>
                                    @endif
                                @endfor
                                
                                @if( $items->currentPage() != $items->lastPage())
                                    <a href="{{$items->url($items->currentPage()+1)}}">></a>
                                @else
                                    <b href="{{$items->url($items->currentPage()+1)}}">></b>
                                @endif

                            </div>
                    
                <!-- </section> -->
            <!-- </section> -->
        </div>
    </div>

@endsection

@section('js')
    

@endsection