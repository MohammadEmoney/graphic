@extends('layouts.theme')

@section('content')
    <main class="contentM">
        <div class="main-slider">
            <div class="main-slider-container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/theme/assets/images/slider/2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/theme/assets/images/slider/1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/theme/assets/images/slider/3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/theme/assets/images/slider/4.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/theme/assets/images/slider/5.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--    End Main Slider ---------------------->

        <!--slider-amazing----------------------------->
        <section class="section-slider amazing-section mb-3 mt-4" style="background: rgb(239, 57, 78);">
            <div class="container-amazing">
                <div class="container-main">
                    <div>
                        <div class="col-lg-3 display-md-none pull-right">
                            <div class="amazing-product text-center mt-5">
                                <a href="#">
                                    <img src="/theme/assets/images/amazing/amazing.png" alt="amazing">
                                </a>
                                <a href="#" class="view-all-amazing-btn">
                                    مشاهده همه
                                    <i class="uil uil-angle-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12 pull-left">
                            <div class="section-slider-content">
                                <div class="section-slider-product slider-amazing mt-3">
                                    <div class="widget widget-product card" style="margin:0;">
                                        <header class="card-header card-header-amazing">
                                            <span class="title-one">پیشنهاد شگفت انگیز</span>
                                            <a class="card-title pull-left">مشاهده همه</a>
                                        </header>
                                        <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                                    <div class="owl-item active"
                                                        style="width: 309.083px; margin-left: 10px;">
                                                        <div class="item">
                                                            <a href="#">
                                                                <img src="/theme/assets/images/product-slider-2/Knife.jpg"
                                                                    class="img-fluid" alt="img-slider">
                                                            </a>
                                                            <h2 class="post-title">
                                                                <a href="#">
                                                                    تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز
                                                                    82
                                                                    اینچ
                                                                </a>
                                                            </h2>
                                                            <div class="price">
                                                                <div class="discount-item">
                                                                    <span>۳۲٪</span>
                                                                </div>
                                                                <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                                <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                            </div>
                                                            <div class="product-box-timer">
                                                                <span class="fa fa-clock-o"></span>
                                                                <div class="countdown countdown-style-3 h4"
                                                                    data-date-time="10/10/2025 24:00"
                                                                    data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item active"
                                                        style="width: 309.083px; margin-left: 10px;">
                                                        <div class="item">
                                                            <a href="#">
                                                                <img src="/theme/assets/images/product-slider-2/phone.jpg"
                                                                    class="img-fluid" alt="img-slider">
                                                            </a>
                                                            <h2 class="post-title">
                                                                <a href="#">
                                                                    تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز
                                                                    82
                                                                    اینچ
                                                                </a>
                                                            </h2>
                                                            <div class="price">
                                                                <div class="discount-item">
                                                                    <span>۳۲٪</span>
                                                                </div>
                                                                <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                                <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                            </div>
                                                            <div class="product-box-timer">
                                                                <span class="fa fa-clock-o"></span>
                                                                <div class="countdown countdown-style-3 h4"
                                                                    data-date-time="10/10/2025 24:00"
                                                                    data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item active"
                                                        style="width: 309.083px; margin-left: 10px;">
                                                        <div class="item">
                                                            <a href="#">
                                                                <img src="/theme/assets/images/product-slider-2/tishert.jpg"
                                                                    class="img-fluid" alt="img-slider">
                                                            </a>
                                                            <h2 class="post-title">
                                                                <a href="#">
                                                                    تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز
                                                                    82
                                                                    اینچ
                                                                </a>
                                                            </h2>
                                                            <div class="price">
                                                                <div class="discount-item">
                                                                    <span>۳۲٪</span>
                                                                </div>
                                                                <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                                <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                            </div>
                                                            <div class="product-box-timer">
                                                                <span class="fa fa-clock-o"></span>
                                                                <div class="countdown countdown-style-3 h4"
                                                                    data-date-time="10/10/2025 24:00"
                                                                    data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item active"
                                                        style="width: 309.083px; margin-left: 10px;">
                                                        <div class="item">
                                                            <a href="#">
                                                                <img src="/theme/assets/images/product-slider-2/headphone.jpg"
                                                                    class="img-fluid" alt="img-slider">
                                                            </a>
                                                            <h2 class="post-title">
                                                                <a href="#">
                                                                    تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز
                                                                    82
                                                                    اینچ
                                                                </a>
                                                            </h2>
                                                            <div class="price">
                                                                <div class="discount-item">
                                                                    <span>۳۲٪</span>
                                                                </div>
                                                                <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                                <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                            </div>
                                                            <div class="product-box-timer">
                                                                <span class="fa fa-clock-o"></span>
                                                                <div class="countdown countdown-style-3 h4"
                                                                    data-date-time="10/10/2025 24:00"
                                                                    data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                                        <div class="item">
                                                            <a href="#">
                                                                <img src="/theme/assets/images/product-slider-2/power-bank.jpg"
                                                                    class="img-fluid" alt="img-slider">
                                                            </a>
                                                            <h2 class="post-title">
                                                                <a href="#">
                                                                    تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز
                                                                    82
                                                                    اینچ
                                                                </a>
                                                            </h2>
                                                            <div class="price">
                                                                <div class="discount-item">
                                                                    <span>۲۱٪</span>
                                                                </div>
                                                                <del><span>۱۵۹,۰۰۰<span>تومان</span></span></del>
                                                                <ins><span>۱۳۹,۰۰۰<span>تومان</span></span></ins>
                                                            </div>
                                                            <div class="product-box-timer">
                                                                <span class="fa fa-clock-o"></span>
                                                                <div class="countdown countdown-style-3 h4"
                                                                    data-date-time="10/10/2025 24:00"
                                                                    data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                                        <div class="item">
                                                            <a href="#">
                                                                <img src="/theme/assets/images/product-slider-2/clock.jpg"
                                                                    class="img-fluid" alt="img-slider">
                                                            </a>
                                                            <h2 class="post-title">
                                                                <a href="#">
                                                                    تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز
                                                                    82
                                                                    اینچ
                                                                </a>
                                                            </h2>
                                                            <div class="price">
                                                                <div class="discount-item">
                                                                    <span>۲۶٪</span>
                                                                </div>
                                                                <del><span>۱,۵۵۸,۷۰۰<span>تومان</span></span></del>
                                                                <ins><span>۱,۱۴۹,۰۰۰ <span>تومان</span></span></ins>
                                                            </div>
                                                            <div class="product-box-timer">
                                                                <span class="fa fa-clock-o"></span>
                                                                <div class="countdown countdown-style-3 h4"
                                                                    data-date-time="10/10/2025 24:00"
                                                                    data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                                        <div class="item">
                                                            <a href="#">
                                                                <img src="/theme/assets/images/product-slider-2/backpack.jpg"
                                                                    class="img-fluid" alt="img-slider">
                                                            </a>
                                                            <h2 class="post-title">
                                                                <a href="#">
                                                                    تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز
                                                                    82
                                                                    اینچ
                                                                </a>
                                                            </h2>
                                                            <div class="price">
                                                                <div class="discount-item">
                                                                    <span>۶۷٪</span>
                                                                </div>
                                                                <del><span>۸۱۹,۰۰۰<span>تومان</span></span></del>
                                                                <ins><span>۲۶۹,۹۰۰<span>تومان</span></span></ins>
                                                            </div>
                                                            <div class="product-box-timer">
                                                                <span class="fa fa-clock-o"></span>
                                                                <div class="countdown countdown-style-3 h4"
                                                                    data-date-time="10/10/2025 24:00"
                                                                    data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--slider-amazing--------------------->
        <!--        category------------------->
        <div class="container">
            <!--   adplacement -------------------->
            <div class="row">
                <div class="adplacement">
                    <div class="col-6 col-lg-3">
                        <a href="#" class="item-adplacement">
                            <img src="/theme/assets/images/post-adplacement/1000012860.jpg" title="صوتی و تصویری"
                                alt="adplacement">
                        </a>
                    </div>

                    <div class="col-6 col-lg-3">
                        <a href="#" class="item-adplacement">
                            <img src="/theme/assets/images/post-adplacement/1000012872.jpg" title="شوینده ظروف"
                                alt="adplacement">
                        </a>
                    </div>

                    <div class="col-6 col-lg-3">
                        <a href="#" class="item-adplacement">
                            <img src="/theme/assets/images/post-adplacement/1000013192.jpg" title="افس" alt="adplacement">
                        </a>
                    </div>

                    <div class="col-6 col-lg-3">
                        <a href="#" class="item-adplacement">
                            <img src="/theme/assets/images/post-adplacement/1000012909.jpg" title="مراقبت پوست و مو"
                                alt="adplacement">
                        </a>
                    </div>
                </div>
            </div>
            <!--   adplacement -------------------->
            <div class="promotion-categories-container mt-4 mb-4">
                <h5 class="promotion-categories-title">دسته‌بندی‌های دیجی‌استور</h5>
                <div class="category-container">
                    <div class="promotion-categories">
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/digital.png" alt="promotion-categories">
                            <div class="promotion-category-name">کالای دیجیتال</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/Tool.png" alt="promotion-categories">
                            <div class="promotion-category-name">خودرو، ابزار و اداری</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/clothing.png" alt="promotion-categories">
                            <div class="promotion-category-name">مد و پوشاک</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/supermarket.png" alt="promotion-categories">
                            <div class="promotion-category-name">کالای سوپرمارکتی</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/toy.png" alt="promotion-categories">
                            <div class="promotion-category-name">اسباب بازی، کودک و نوزاد</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/native.png" alt="promotion-categories">
                            <div class="promotion-category-name">محصولات بومی و محلی</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/Health.png" alt="promotion-categories">
                            <div class="promotion-category-name">زیبایی و سلامت</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/kitchen.png" alt="promotion-categories">
                            <div class="promotion-category-name">خانه و آشپزخانه</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/stationery.png" alt="promotion-categories">
                            <div class="promotion-category-name">کتاب، لوازم تحریر و هنر</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="/theme/assets/images/category/Sport.png" alt="promotion-categories">
                            <div class="promotion-category-name">ورزش و سفر</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">برندهای ویژه</span>
                </header>
                <div class="product-carousel brand-product owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/brand/1000005582.png" class="img-fluid" alt="brand">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/brand/1000006973.png" class="img-fluid" alt="brand">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/brand/1076.png" class="img-fluid" alt="brand">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/brand/1078.png" class="img-fluid" alt="brand">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/brand/1080.png" class="img-fluid" alt="brand">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/brand/1086.png" class="img-fluid" alt="brand">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/brand/2315.png" class="img-fluid" alt="brand">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   slider-product-------------------->
        <div class="container">
            <!--   adplacement -------------------->
            <div class="row">
                <div class="adplacement">
                    <div class="col-lg-6 col-xs-12">
                        <a href="#" class="item-adplacement">
                            <img src="/theme/assets/images/post-adplacement/1000013199.jpg" title="صوتی و تصویری"
                                alt="adplacement">
                        </a>
                    </div>

                    <div class="col-lg-6 col-xs-12">
                        <a href="#" class="item-adplacement">
                            <img src="/theme/assets/images/post-adplacement/1000012919.jpg" title="شوینده ظروف"
                                alt="adplacement">
                        </a>
                    </div>
                </div>
            </div>
            <!--   adplacement -------------------->
            <div class="promotion-categories-container mt-4 mb-4">
                <h5 class="promotion-categories-title">پیشنهاد دیجی‌استور</h5>
                <div class="category-container category-proposal">
                    <div class="promotion-categories">
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/phone.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">کیف و کاور گوشی</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/car.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">سایر لوازم خودرو</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/headset.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">هدفون</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/Bag.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">کالای سوپرمارکتی</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/bed-set.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">اسباب بازی</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/bed.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">محصولات بومی و محلی</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/car-broadcast.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">زیبایی و سلامت</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/clothing.png" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">خانه و آشپزخانه</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/construction.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">کتاب، لوازم تحریر و هنر</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/Dress.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">ورزش و سفر</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/figure.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">ورزش و سفر</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/spare-parts.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">ورزش و سفر</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/pencil-case.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">ورزش و سفر</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/techniques.jpg" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">ورزش و سفر</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/native.png" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">ورزش و سفر</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <div class="img-category">
                                <img src="/theme/assets/images/category/kitchen.png" alt="promotion-categories">
                            </div>
                            <div class="promotion-category-name">ورزش و سفر</div>
                        </a>
                    </div>
                </div>
            </div>
            <!--   slider-product-------------->
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">کفش</span>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/rzai.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            کفش ورزشی مردانه مدل rzai
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del>
                                            <span>70,000
                                                <span>تومان</span>
                                            </span>
                                        </del>
                                        <ins>
                                            <span>65,000
                                                <span>تومان</span>
                                            </span>
                                        </ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/d.r.j.e.27.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            کفش مخصوص دویدن مردانه مدل 27ِ.D.r.j.e
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del>
                                            <span>109,000
                                                <span>تومان</span>
                                            </span>
                                        </del>
                                        <ins>
                                            <span>89,000
                                                <span>تومان</span>
                                            </span>
                                        </ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/adiza001.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            کفش مخصوص پیاده روی مردانه کد adiza001
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del>
                                            <span>90,000
                                                <span>تومان</span>
                                            </span>
                                        </del>
                                        <ins>
                                            <span>85,000
                                                <span>تومان</span>
                                            </span>
                                        </ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/arshi-ad.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            کفش مخصوص دویدن مردانه مدل arshi-ad
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del>
                                            <span>140,000
                                                <span>تومان</span>
                                            </span>
                                        </del>
                                        <ins>
                                            <span>137,000
                                                <span>تومان</span>
                                            </span>
                                        </ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/jor-me-se.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            کفش مخصوص پیاده روی مردانه کد jor-me-se 001
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del>
                                            <span>150,000
                                                <span>تومان</span>
                                            </span>
                                        </del>
                                        <ins>
                                            <span>89,000
                                                <span>تومان</span>
                                            </span>
                                        </ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/270c.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            کفش مخصوص پیاده روی مردانه کد 270C
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del>
                                            <span>170,000
                                                <span>تومان</span>
                                            </span>
                                        </del>
                                        <ins>
                                            <span>166,000
                                                <span>تومان</span>
                                            </span>
                                        </ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/um.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            کفش مخصوص پیاده روی مردانه کد UM
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del>4
                                            <span>198,000
                                                <span>تومان</span>
                                            </span>
                                        </del>
                                        <ins>
                                            <span>138,000
                                                <span>تومان</span>
                                            </span>
                                        </ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--   slider-product-------------------->
        </div>

        <!--   adplacement -------------------->
        <div class="adplacement">
            <div class="col-6 col-lg-3">
                <a href="#" class="item-adplacement">
                    <img src="/theme/assets/images/post-adplacement/1000009159.jpg" title="صوتی و تصویری" alt="adplacement">
                </a>
            </div>

            <div class="col-6 col-lg-3">
                <a href="#" class="item-adplacement">
                    <img src="/theme/assets/images/post-adplacement/1000010064.jpg" title="شوینده ظروف" alt="adplacement">
                </a>
            </div>

            <div class="col-6 col-lg-3">
                <a href="#" class="item-adplacement">
                    <img src="/theme/assets/images/post-adplacement/1000005397.jpg" title="افس" alt="adplacement">
                </a>
            </div>

            <div class="col-6 col-lg-3">
                <a href="#" class="item-adplacement">
                    <img src="/theme/assets/images/post-adplacement/1000005393.jpg" title="مراقبت پوست و مو" alt="adplacement">
                </a>
            </div>
        </div>
        <!--   adplacement -------------------->
        <div class="col-12">
            <div class="promotion-categories-container mt-4 mb-4">
                <h5 class="promotion-categories-title">پرفروش‌ترین کالاها</h5>
                <div class="category-container mt-4">
                    <div class="promotion-categories row">
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 mb-3">
                            <!-- start of product-card -->
                            <div class="product-card product-card-horizontal">
                                <div class="product-thumbnail">
                                    <a href="#">
                                        <img src="/theme/assets/images/category/galaxy-a14.webp" alt="ProductCard">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <a href="#">
                                        <h5>
                                            گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت
                                            - ویتنام
                                        </h5>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   slider-product-------------------->
        <div class="container">
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">ساعت عقربه ای زنانه</span>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/clock1.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/clock2.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/clock3.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/clock4.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/clock5.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/clock6.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/theme/assets/images/product-slider-2/clock7.jpg" class="img-fluid"
                                            alt="img-slider">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit"
                                                    title="علاقه مندی">
                                                    <i class="mdi mdi-heart"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit" title="مقایسه">
                                                    <i class="mdi mdi-compare"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit"
                                                    title="سبد خرید">
                                                    <i class="mdi mdi-shopping"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   slider-product-------------------->
    </main>
@endsection
