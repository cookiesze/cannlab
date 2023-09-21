@extends('layouts.frontend')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slideshows as $arr)
                <div class="carousel-item active">
                    <img src="{{ asset('assets/uploads/slideshow/' . $arr->cover) }}">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            @endforeach
        </div>
    </div>
    <section class="about-style2-area">
        <div class="container">
            <div class="row">
                <!--  Single Banner Area Start -->
                <div class="col-lg-4 col-md-4 mb-sm-30">
                    <div class="single-banner zoom">
                        <img src="{{ asset('assets/onsite/cannlab-shower.png') }}" alt="banner-img">
                    </div>
                </div>
                <!--  Single Banner Area End -->
                <!--  Single Banner Area Start -->
                <div class="col-lg-4 col-md-4 mb-sm-30">
                    <div class="single-banner zoom">
                        <img src="{{ asset('assets/onsite/cannlab-shampoo1.png') }}" alt="banner-img">
                    </div>
                </div>
                <!--  Single Banner Area End -->
                <!--  Single Banner Area Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner zoom">
                            <img src="{{ asset('assets/onsite/cannlab-shampoo2.png') }}"
                                alt="banner-img">
                        </a>
                    </div>
                </div>
                <!--  Single Banner Area End -->
            </div><br><br><br>
            <div class="row">
                <!--  Single Banner Area Start -->
                <div class="col-lg-3 col-md-3">
                    <div class="single-banner zoom">
                        <img src="{{ asset('assets/onsite/cannlab-butter1.png') }}" alt="banner-img">
                    </div>
                </div>
                <!--  Single Banner Area End -->
                <!--  Single Banner Area Start -->
                <div class="col-lg-3 col-md-3">
                    <div class="single-banner zoom">
                        <img src="{{ asset('assets/onsite/cannlab-butter2.png') }}" alt="banner-img">
                    </div>
                </div>
                <!--  Single Banner Area End -->
                <!--  Single Banner Area Start -->
                <div class="col-lg-3 col-md-3">
                    <div class="single-banner zoom">
                            <img src="{{ asset('assets/onsite/cannlab-lotion1.png') }}"
                                alt="banner-img">
                        </a>
                    </div>
                </div>
                <!--  Single Banner Area End -->
                                <!--  Single Banner Area Start -->
                <div class="col-lg-3 col-md-3">
                    <div class="single-banner zoom">
                            <img src="{{ asset('assets/onsite/cannlab-lotion2.png') }}"
                                alt="banner-img">
                        </a>
                    </div>
                </div>
                <!--  Single Banner Area End -->
            </div>
        </div>
    </section>

    <!--Start About Style2 Area-->
    <section class="about-style2-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title">
                        <p>About CANNLAB</p>
                        <div class="title">We Are <br>Cannlab<span> Product by Tvpool</span></div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-style2-text">
                        <div class="text">
                            <h1 style="color: #DAA520;" >มิติใหม่แห่งการบำรุง</h1>
                            <p style="font-size: 20px;">
                                ผลิตภัณฑ์ที่ให้ความสำคัญในการรักษาผิว และความสะอาด ที่คิดค้นมาเพื่อทุกสภาพผิว ไม่ว่าจะบำรุงหรือทำความสะอาด ให้ผิวกายดูอ่อนอุ่น และมีกลิ่นหอมที่มีออกมาจากผลไม้หรือสารสกัดต่าง ๆ
                            </p>
                        </div>
                        <!--
                        <div class="authorised-info">
                            <div class="signature">
                                <img src="{{ asset('/frontend/images/icon/signature.png') }}" alt="Signature">
                            </div>
                            <div class="name">
                                <h3thai>จ้าว จิ้น หยวี่</h3thai>
                                <p>Chairman & Founder</p>
                            </div>
                        </div>
                        -->
                        <div class="button">
                            <a class="btn-one" href="#">More About Us<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="about-style2-image-box">
                        <div class="pattern wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms"></div>
                        <div class="image" style="padding-top: 30px">
                            <img src="{{ asset('assets/onsite/cannlab.png') }}" alt="24plus Image">
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-xl-7">
                    <div class="about-style2-image-box">
                        <div class="pattern wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms"></div>
                        <div class="image" style="padding-top: 30px">
                            <img src="https://4.bp.blogspot.com/-XmWTWsyb2_s/W_PYzxDWEbI/AAAAAAAAADY/QufNt5VQzUkhdSwOCE8jA6eOsQeE1wRNACLcBGAs/s1600/%25E0%25B8%2588%25E0%25B9%2589%25E0%25B8%25B2%25E0%25B8%25A7-503x335.jpg" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="title">
                                    <h1>18 <span>Years Experience<br> in this Thailand</span></h1>
                                </div>
                                <div class="button">
                                    <a href="#"><span class="icon-back"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>
    <!--End About Style2 Area-->


    <!--Start slogan style2 area
    <section class="slogan-style2-area" style="background-image:url(/frontend/images/parallax-background/slogan-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title">
                            <h1>บริษัท จีโนลกรุ๊ป ซีที อิเล็คทริค ฟิเคชั่น จำกัด</h1><br>
                            <p style="font-size: 22px; coler: #fff;">มุ่งเน้นพัฒนาผลิตภัณฑ์ให้มีคุณภาพเป็นที่น่าเชื่อถือ
                                ด้วยสินค้าที่มีคุณภาพเพื่อความพึ่งพอใจของลูกค้า</p>
                        </div>
                        <div class="button">
                            <a class="btn-one call-us" href="#"><i class="icon-music"></i>034 496 686</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    End slogan style2 area-->
    <section class="latest-blog-area style2">
        <div class="container inner-content">
            <div class="container inner-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title float-left">
                            <p>24 Plus</p>
                            <div class="title">Products <span></span></div>
                        </div>
                        <div class="more-blog-button float-right">
                            <a class="btn-two" href="{{ url('/guest/product') }}">More Products<span
                                    class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <!--Start single product item-->
                        <div class="related-product">
                            <div class="row">
                                <!--Start single product item-->
                                @foreach ($product as $arr)
                                    <div class="col-md-4 mb-4">
                                        <a href=""></a>
                                        <div class="title-holder text-center">
                                            <img style="width:360px;"
                                                src="{{ asset('assets/uploads/products/images/' . $arr->image) }}"
                                                class="edit-image" alt="">
                                            <hr>
                                            <div class="static-content">
                                                <h3 class="title text-center"><a
                                                        href="{{ url('/guest/product/' . $arr->slug) }}">{{ $arr->name }}</a>
                                                </h3>
                                                <span><b>Code:</b> {{ $arr->product_code }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>


    <!--Start latest blog area style2-->
    <section class="latest-blog-area style2">
        <div class="container inner-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title float-left">
                        <p>News & Updates</p>
                        <div class="title">Latest From <span>Blog</span></div>
                    </div>
                    <div class="more-blog-button float-right">
                        <a class="btn-two" href="{{ url('/guest/post') }}">More News<span
                                class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Start single blog post-->
                @foreach ($post as $arr)
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-post style2 wow fadeInLeft animated" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="img-holder">
                                <img src="{{ asset('assets/uploads/news/cover/' . $arr->cover) }}"
                                    alt="{{ $arr->name }}">
                                <div class="overlay-title">
                                    <h3 class="blog-title"><a href="blog-single.html">{{ $arr->title }}</a></h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="text">
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li>By <a>Admin</a></li>
                                            <li>เผยแพร่เมื่อ <a>{{ $arr->created_at->diffForHumans() }}</a></li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <p>{{ $arr->small_description }}</p>
                                    <a class="btn-two" href="{{ url('/guest/show-post/' . $arr->slug) }}">Read More<span
                                            class="flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End single blog post-->
            </div>
        </div>
    </section>
    <!--End latest blog area style2-->

    <!--Start Brand area style2-->
    <section class="brand-area style2">
        <div class="container">
            <div class="sec-title">
                <p>Poolstar Brands</p>
                <div class="title">Products in <span>Poolstar Group</span></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul>
                        @foreach ($brand as $item)
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <a href="{{ $item->link }}" target="_blank"><img
                                        src="{{ asset('assets/uploads/brand/' . $item->cover) }}"
                                        alt="{{ $item->name }}"></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--End Brand area style2-->

    <!--Start Instagram Area
            <section class="instagram-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="instagram-title">
                                <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms"></div>
                                <h3>Looking for interior inspiration?<br> for your place.</h3>
                                <a class="btn-two" href="blog.html">Follous Us On Instagram<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <ul class="instagram-items clearfix">
                                <li>
                                    <div class="img-holder">
                                        <img src="images/resources/instagram-1.jpg" alt="Awesome Image">
                                        <div class="overlay-style-two"></div>
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="link-icon">
                                                    <a href="#"><span class="icon-instagram"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/resources/instagram-2.jpg" alt="Awesome Image">
                                        <div class="overlay-style-two"></div>
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="link-icon">
                                                    <a href="#"><span class="icon-instagram"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/resources/instagram-3.jpg" alt="Awesome Image">
                                        <div class="overlay-style-two"></div>
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="link-icon">
                                                    <a href="#"><span class="icon-instagram"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/resources/instagram-4.jpg" alt="Awesome Image">
                                        <div class="overlay-style-two"></div>
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="link-icon">
                                                    <a href="#"><span class="icon-instagram"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/resources/instagram-5.jpg" alt="Awesome Image">
                                        <div class="overlay-style-two"></div>
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="link-icon">
                                                    <a href="#"><span class="icon-instagram"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/resources/instagram-6.jpg" alt="Awesome Image">
                                        <div class="overlay-style-two"></div>
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="link-icon">
                                                    <a href="#"><span class="icon-instagram"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            End Instagram Area-->
@endsection
