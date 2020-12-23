@extends('headerpage')
@section('content')

<section>
<!-- ======= Hero Section ======= -->
  <div id="shopify-section-1555071278158" class="shopify-section">
          <!--====================  hero slider area ====================-->
          <div class="hero-slider-area section-space common_class_slider" id="section-1555071278158">
            <!--=======  hero slider wrapper  =======-->
            <div class="hero-slider-wrapper">
              <div class="ht-slick-slider" data-slick-setting='{
                                                        "slidesToShow": 1,
                                                        "slidesToScroll": 1,
                                                        "arrows": true,
                                                        "dots": true,
                                                        "autoplay": true,
                                                        "autoplaySpeed": 5000,
                                                        "speed": 1000,
                                                        "fade": true,
                                                        "infinite": true,
                                                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                                        }' data-slick-responsive='[
                                                                                  {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                                                                                  {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
                                                                                  {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false} },
                                                                                  {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false} },
                                                                                  {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
                                                                                  {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                                                                  ]'>
                <!--=======  single slider item  =======-->
                <div class="single-slider-item">
                  <div class="hero-slider-item-wrapper hero-slider-item-wrapper--fullwidth--fixed-height  hero-slider-bg-4"
                    style="background-image: url({{asset('frontend/s/files/1/0265/8933/1530/files/home-2-slider-1.jpg')}})">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="hero-slider-content hero-slider-content--left-space text-center">
                            <p class="slider-title slider-title--big-light top_title">New Arrivals</p>
                            <p class="slider-title slider-title--big-light">Best Book Shop</p>
                            <p class="slider-title slider-title--small">Next generation LED lamp. A multi-function LED lamp
                              that is environmentally friendly and soft on the eyes.</p>
                            <a class="hero-slider-button" href="">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--=======  End of single slider item  =======-->
                <!--=======  single slider item  =======-->
                <div class="single-slider-item">
                  <div class="hero-slider-item-wrapper hero-slider-item-wrapper--fullwidth--fixed-height  hero-slider-bg-4"
                    style="background-image: url({{asset('frontend/s/files/1/0265/8933/1530/files/home-2-slider-3.jpg')}})">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="hero-slider-content hero-slider-content--left-space text_left">
                            <p class="slider-title slider-title--big-light top_title">New Arrivals</p>
                            <p class="slider-title slider-title--big-light">Latest Book</p>
                            <p class="slider-title slider-title--small">Next generation LED lamp. A multi-function LED lamp
                              that is environmentally friendly and soft on the eyes.</p>
                            <a class="hero-slider-button" href="">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--=======  End of single slider item  =======-->
                <!--=======  single slider item  =======-->
                <div class="single-slider-item">
                  <div class="hero-slider-item-wrapper hero-slider-item-wrapper--fullwidth--fixed-height  hero-slider-bg-4"
                    style="background-image: url({{asset('frontend/s/files/1/0265/8933/1530/files/home-2-slider-2.png')}})">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="hero-slider-content hero-slider-content--left-space text-right">
                            <p class="slider-title slider-title--big-light top_title">New Arrivals</p>
                            <p class="slider-title slider-title--big-light">Book Sale Shop</p>
                            <p class="slider-title slider-title--small">Next generation LED lamp. A multi-function LED lamp
                              that is environmentally friendly and soft on the eyes.</p>
                            <a class="hero-slider-button" href="">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--=======  End of single slider item  =======-->
              </div>
            </div>
            <!--=======  End of hero slider wrapper  =======-->
          </div>
          <!--====================  End of hero slider area  ====================-->


          <style data-shopify>
            .common_class_slider .hero-slider-item-wrapper--fullwidth--fixed-height {
              height: 750px;
            }

            @media only screen and (min-width: 992px) and (max-width: 1199px) {
              .common_class_slider .hero-slider-item-wrapper {
                height: 550px !important;
              }
            }

            @media only screen and (min-width: 768px) and (max-width: 991px) {
              .common_class_slider .hero-slider-item-wrapper {
                height: 500px !important;
              }
            }

            @media only screen and (max-width: 767px) {
              .common_class_slider .hero-slider-item-wrapper {
                height: 400px !important;
              }
            }

            @media only screen and (max-width: 479px) {
              .common_class_slider .hero-slider-item-wrapper {
                height: 350px !important;
              }
            }
          </style>

          <style data-shopify>
            #section-1555071278158 {}

            @media (min-width: 768px) and (max-width: 991px) {
              #section-1555071278158 {}
            }

            @media (max-width: 767px) {
              #section-1555071278158 {}
            }
          </style>
        </div>


  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        <div class="owl-carousel clients-carousel">
          <img src="{{asset('frontend/assets/img/clients/client-1.png')}}" alt="">
          <img src="{{asset('frontend/assets/img/clients/client-2.png')}}" alt="">
          <img src="{{asset('frontend/assets/img/clients/client-3.png')}}" alt="">
          <img src="{{asset('frontend/assets/img/clients/client-4.png')}}" alt="">
          <img src="{{asset('frontend/assets/img/clients/client-5.png')}}" alt="">
          <img src="{{asset('frontend/assets/img/clients/client-6.png')}}" alt="">
          <img src="{{asset('frontend/assets/img/clients/client-7.png')}}" alt="">
          <img src="{{asset('frontend/assets/img/clients/client-8.png')}}" alt="">
        </div>
      </div>
    </section> -->
    
    <!-- End Clients Section -->

    <!-- =======  product Section ======= -->
     <section id="clients" class="clients">
       <div id="shopify-section-1553488769816" class="shopify-section">

      <!--====================  single row slider tab ====================-->
          <div class="single-row-slider-tab-area section-space" id="section-1553488769816">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <!--=======  section title  =======-->
                  <div class="section-title-wrapper text-center section-space--half">
                    <h2 class="section-title">Our Products</h2>
                    <p class="section-subtitle">Mirum est notare quam littera gothica, quam nunc putamus parum claram
                      anteposuerit litterarum formas.</p>
                  </div>
                  <!--=======  End of section title  =======-->
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <!--=======  tab slider wrapper  =======-->
                  <div class="tab-slider-wrapper">
                    <!--=======  tab product navigation  =======-->
                    <div class="tab-product-navigation">
                      <div class="nav nav-tabs justify-content-center" id="nav-tab2" role="tablist">
                        <a class="nav-item nav-link active" data-toggle="tab"
                          href="#tab-1553488769816-0-adventure">Adventure</a>
                        <a class="nav-item nav-link " data-toggle="tab"
                          href="#tab-1553488769816-1-biographic">Biographic</a>
                        <a class="nav-item nav-link " data-toggle="tab" href="#tab-1553488769816-2-children">Children</a>
                        <a class="nav-item nav-link " data-toggle="tab" href="#tab-1553489083555-cook">Cook</a>
                      </div>
                    </div>
                    <!--=======  End of tab product navigation  =======-->
                    <!--=======  tab product content  =======-->
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="tab-1553488769816-0-adventure">
                        <div class="double-row-slider-wrapper ">
                          <div class="ht-slick-slider" data-slick-setting='{
                                                                    "slidesToShow": 4,
                                                                    "slidesToScroll": 1,
                                                                    "arrows": true,
                                                                    "autoplay": false,
                                                                    "autoplaySpeed": 5000,
                                                                    "speed": 1000,
                                                                    "infinite": false,
                                                                    "rows": 2,
                                                                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                                                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                                                    }' data-slick-responsive='[
                                                                                              {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                                                                              {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                                                                              {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                                                                              {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                              {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                              {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                                                                              ]'>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 31274265903178">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-33%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/13_e7b88aa7-024d-41d0-bc45-95161ac940e7_600x800_crop_center.png')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/19_f106bf3d-4c87-41c3-9b0c-93a238c3e102_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(31274265903178, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="test-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('test-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 1">Vendor 1</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="4374661791818"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Test
                                      Product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$20.00</span></span><span
                                      class="main-price discounted"><span class=money>$30.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444796907594">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-10%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/2_02626e15-b00d-4359-b0eb-1b1ce8f6fd8d_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/3_3a75d8cc-62e7-4263-84a6-baa031e0ccb4_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444796907594, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare"
                                      data-pid="10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing"
                                      title="" data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing')"><i
                                        class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 10">Vendor 10</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696556106"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">10. This is
                                      the large title for testing</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$19.00</span></span><span
                                      class="main-price discounted"><span class=money>$21.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444795662410">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-35%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/11_e272e529-4c81-454b-b9ff-99dcfba814f1_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/12_d89a0bc6-f635-4367-b445-acf8f26d48a3_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444795662410, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="8-countdown-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('8-countdown-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                  <div class="product-countdown" data-countdown="2022/05/24"></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 8">Vendor 8</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696457802"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">8. Countdown
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$39.00</span></span><span
                                      class="main-price discounted"><span class=money>$60.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444795629642">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/10_4c23f24d-1c97-4e19-be2c-3fef7d818273_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/11_5d31eaf6-bcfa-44e0-aedf-f5132b5c8360_600x800_crop_center.jpg')}}">
                                  </a>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 7">Vendor 7</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696392266"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">7. Sample
                                      affiliate product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444795334730">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-27%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/9_1018d4cc-1e64-4575-995d-1603e8df8b40_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/10_bf49c3cd-fade-4f88-9caa-725a72b1018a_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444795334730, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="6-variable-with-soldout-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('6-variable-with-soldout-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 6">Vendor 6</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696326730"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">6. Variable
                                      with soldout product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$55.00</span></span><span
                                      class="main-price discounted"><span class=money>$75.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444795269194">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/8_d10a44bc-e5d0-4a4d-a8ee-2892f61e6c7e_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444795269194, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="5-simple-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('5-simple-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 5">Vendor 5</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696293962"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">5. Simple
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$50.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444795007050">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-34%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/7_0703c71f-03e5-4502-b7cc-ce60c55e74de_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/8_4953a517-3945-478c-9e98-925e2b1000c0_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444795007050, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="4-soldout-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('4-soldout-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 4">Vendor 4</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696261194"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">4. Soldout
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$19.00</span></span><span
                                      class="main-price discounted"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444791173194">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-18%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/6_4e54246b-2ba3-43d7-a49d-2607a3343bcb_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/7_1ca2fdf8-fc98-4a00-b12d-caed2c0e7a08_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444791173194, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="3-variable-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('3-variable-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 3">Vendor 3</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696162890"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">3. Variable
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$70.00</span></span><span
                                      class="main-price discounted"><span class=money>$85.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444790091850">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/5_5ff6a8ff-7b4a-4a26-ab2b-3b29d31c6b3e_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/6_55a9c25a-9018-41ef-9a28-efe77f09ed9b_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444790091850, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="2-new-badge-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('2-new-badge-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 2">Vendor 2</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696064586"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">2. New badge
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$80.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444789272650">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-15%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/1_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/2_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444789272650, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="1-new-and-sale-badge-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('1-new-and-sale-badge-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 1">Vendor 1</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831695999050"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">1. New and
                                      sale badge product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$110.00</span></span><span
                                      class="main-price discounted"><span class=money>$130.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444789174346">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-11%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_b670640f-f610-463a-80d3-e7e9e0b7bfaa_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/5_76892c99-622f-4bbc-9f2d-0b3ae504950b_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444789174346, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare"
                                      data-pid="12-unique-content-for-each-product-on-the-product-tab" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('12-unique-content-for-each-product-on-the-product-tab')"><i
                                        class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 12">Vendor 12</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831695966282"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">12. Unique
                                      content for each</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$99.00</span></span><span
                                      class="main-price discounted"><span class=money>$111.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade " id="tab-1553488769816-1-biographic">
                        <div class="double-row-slider-wrapper ">
                          <div class="ht-slick-slider" data-slick-setting='{
                                                                    "slidesToShow": 4,
                                                                    "slidesToScroll": 1,
                                                                    "arrows": true,
                                                                    "autoplay": false,
                                                                    "autoplaySpeed": 5000,
                                                                    "speed": 1000,
                                                                    "infinite": false,
                                                                    "rows": 2,
                                                                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                                                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                                                    }' data-slick-responsive='[
                                                                                              {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                                                                              {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                                                                              {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                                                                              {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                              {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                              {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                                                                              ]'>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444797169738">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/3_41b460ae-c807-4052-9835-d03128b7b5fb_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_b155f66b-76de-44a2-a3e9-ca89308d9bc3_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444797169738, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="11-product-with-video" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('11-product-with-video')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 11">Vendor 11</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696588874"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">11. Product
                                      with video</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$39.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444789174346">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-11%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_b670640f-f610-463a-80d3-e7e9e0b7bfaa_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/5_76892c99-622f-4bbc-9f2d-0b3ae504950b_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444789174346, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare"
                                      data-pid="12-unique-content-for-each-product-on-the-product-tab" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('12-unique-content-for-each-product-on-the-product-tab')"><i
                                        class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 12">Vendor 12</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831695966282"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">12. Unique
                                      content for each</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$99.00</span></span><span
                                      class="main-price discounted"><span class=money>$111.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444806344778">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-18%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/5_6625026d-5104-4a7d-81ce-1cffde80b0c5_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/11_821fee10-fe85-46ad-9909-e1588fa3c1e5_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444806344778, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-text-for-title-1" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-text-for-title-1')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 3">Vendor 3</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697539146"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy text
                                      for title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$70.00</span></span><span
                                      class="main-price discounted"><span class=money>$85.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444811685962">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/7_24ecc48a-6b78-4b70-b0a8-573285c7865a_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/14_f4def08d-09fb-4e5b-ac4b-363cff0e01e0_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444811685962, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-product-name-4" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-product-name-4')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 9">Vendor 9</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831698325578"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$79.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444810801226">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/17_a166f71e-29a2-457a-8486-79b7b6032e27_600x800_crop_center.png')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/18_ec00e00e-1649-46a2-8aea-650a3af80c4f_600x800_crop_center.png')}}">
                                  </a>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 7">Vendor 7</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831698030666"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Demo product
                                      title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444810768458">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/9_fbf9d7e4-3534-44b6-9534-cc1ade7d0e9c_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/10_c9242bb3-b7c3-45df-b879-4b0d34b228eb_600x800_crop_center.jpg')}}">
                                  </a>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 7">Vendor 7</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697997898"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444809850954">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/16_c98ddf70-a00c-4fc0-b63a-201608278b9d_600x800_crop_center.png')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/17_6e5bdbce-d487-437d-97f4-10c5f46b2d23_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444809850954, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="demo-product-title-2" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('demo-product-title-2')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 5">Vendor 5</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697768522"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Demo product
                                      title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$50.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444809818186">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-34%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/3_87d5b153-ae39-4687-ab5c-674f7d049855_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_2563eafa-aad8-48d1-9bf7-6b36f7e29c32_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><button class="cart-disable">
                                      <span class="cart-text"><i class="ion-bag"></i></span>
                                    </button>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-product-name-2" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-product-name-2')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 4">Vendor 4</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697735754"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$19.00</span></span><span
                                      class="main-price discounted"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444800774218">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/15_dedf623c-3eaa-4875-b76d-2e77ae036736_600x800_crop_center.png')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/16_ba44d883-4e57-456d-82e9-d583194e08dd_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444800774218, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="demo-product-title-1" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('demo-product-title-1')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 2">Vendor 2</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697080394"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Demo product
                                      title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$80.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444799955018">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/2_321bba75-f76b-4cc0-9573-a1e758e504a5_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/19_ebc972f9-c949-4c4f-8feb-f1d30a089207_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444799955018, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-product-name-1" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-product-name-1')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 2">Vendor 2</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697014858"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$80.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444798971978">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/6_a52bb666-119f-4503-92e9-9b609ec826db_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/12_e8329c48-2e22-47a5-8df6-471f87623c91_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444798971978, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-text-for-title" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-text-for-title')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 11">Vendor 11</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696883786"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy text
                                      for title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$39.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444797988938">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-15%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/18_4cf5532c-6f3b-464c-98d0-4d9efc7766e8_600x800_crop_center.png')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/19_ccdb28ec-39a3-4e07-9f7b-b3bb667f9b1d_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444797988938, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-product-name" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-product-name')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 1">Vendor 1</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696785482"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$110.00</span></span><span
                                      class="main-price discounted"><span class=money>$130.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade " id="tab-1553488769816-2-children">
                        <div class="double-row-slider-wrapper ">
                          <div class="ht-slick-slider" data-slick-setting='{
                                                                    "slidesToShow": 4,
                                                                    "slidesToScroll": 1,
                                                                    "arrows": true,
                                                                    "autoplay": false,
                                                                    "autoplaySpeed": 5000,
                                                                    "speed": 1000,
                                                                    "infinite": false,
                                                                    "rows": 2,
                                                                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                                                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                                                    }' data-slick-responsive='[
                                                                                              {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                                                                              {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                                                                              {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                                                                              {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                              {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                              {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                                                                              ]'>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444811685962">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/7_24ecc48a-6b78-4b70-b0a8-573285c7865a_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/14_f4def08d-09fb-4e5b-ac4b-363cff0e01e0_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444811685962, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-product-name-4" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-product-name-4')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 9">Vendor 9</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831698325578"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$79.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444811489354">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_e5ce635c-e844-4074-839a-28bbaf40104a_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/9_23ccd7ab-b6f0-4fb7-b8b0-685e886f9f4b_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444811489354, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="product-dummy-title-4" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('product-dummy-title-4')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 9">Vendor 9</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831698260042"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Product
                                      dummy title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$79.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444810866762">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-35%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/11_e78b6d3a-f466-4046-9123-d32b89767b32_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/12_df6979a1-5977-4549-9bf7-484e7824570c_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444810866762, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="product-title-here-3" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('product-title-here-3')"><i class="ion-android-open"></i>
                                    </a></div>
                                  <div class="product-countdown" data-countdown="2019/05/24"></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 8">Vendor 8</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831698096202"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Product
                                      title here</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$39.00</span></span><span
                                      class="main-price discounted"><span class=money>$60.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444810768458">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/9_fbf9d7e4-3534-44b6-9534-cc1ade7d0e9c_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/10_c9242bb3-b7c3-45df-b879-4b0d34b228eb_600x800_crop_center.jpg')}}">
                                  </a>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 7">Vendor 7</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697997898"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444810506314">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-27%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/2_c911e0e7-10a4-495f-8776-df1750c1f7a1_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/3_12ff9f67-c24c-4c75-a9b4-f48050d0bb02_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444810506314, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="product-dummy-title-3" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('product-dummy-title-3')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 6">Vendor 6</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697965130"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Product
                                      dummy title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$55.00</span></span><span
                                      class="main-price discounted"><span class=money>$75.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444810145866">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-27%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_06fc098e-81d5-4f63-b12d-0600fffdbc4b_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/10_403beadd-0759-4d10-8cec-836a11debf3c_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444810145866, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-text-for-title-2" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-text-for-title-2')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 6">Vendor 6</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697866826"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy text
                                      for title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$55.00</span></span><span
                                      class="main-price discounted"><span class=money>$75.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444809883722">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/9_442f1def-5a3b-4925-9dc8-a78ac92416c9_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/10_422fa0f6-9d79-475d-9dd8-4be13f6c1e54_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444809883722, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="product-title-here-2" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('product-title-here-2')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 5">Vendor 5</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697834058"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Product
                                      title here</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$50.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444809785418">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-34%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/12_a74154fe-aeb4-40ec-b569-c4fd81388d73_600x800_crop_center.png')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/13_1c199da0-0414-438f-ab9e-8b29dcf59fdf_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><button class="cart-disable">
                                      <span class="cart-text"><i class="ion-bag"></i></span>
                                    </button>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="product-dummy-title-2" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('product-dummy-title-2')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 4">Vendor 4</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697702986"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Product
                                      dummy title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$19.00</span></span><span
                                      class="main-price discounted"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444806344778">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-18%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/5_6625026d-5104-4a7d-81ce-1cffde80b0c5_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/11_821fee10-fe85-46ad-9909-e1588fa3c1e5_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444806344778, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-text-for-title-1" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-text-for-title-1')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 3">Vendor 3</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697539146"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy text
                                      for title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$70.00</span></span><span
                                      class="main-price discounted"><span class=money>$85.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444801593418">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-18%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/16_17886d1d-ebdc-4408-9ff1-97907d0fa078_600x800_crop_center.png')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/17_69684277-9df2-41f7-a288-20c1b1d35e1e_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444801593418, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="product-title-here-1" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('product-title-here-1')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 3">Vendor 3</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697145930"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Product
                                      title here</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$70.00</span></span><span
                                      class="main-price discounted"><span class=money>$85.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444798971978">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/6_a52bb666-119f-4503-92e9-9b609ec826db_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/12_e8329c48-2e22-47a5-8df6-471f87623c91_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444798971978, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-text-for-title" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-text-for-title')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 11">Vendor 11</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696883786"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy text
                                      for title</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$39.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444798808138">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-10%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/3_59c8f6ff-4ff5-4337-87fb-68271c11892b_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/9_afc82a3a-2122-4e73-8b2a-545d989e21dc_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444798808138, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="product-title-here" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('product-title-here')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 10">Vendor 10</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696851018"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Product
                                      title here</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$19.00</span></span><span
                                      class="main-price discounted"><span class=money>$21.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade " id="tab-1553489083555-cook">
                        <div class="double-row-slider-wrapper ">
                          <div class="ht-slick-slider" data-slick-setting='{
                                                                    "slidesToShow": 4,
                                                                    "slidesToScroll": 1,
                                                                    "arrows": true,
                                                                    "autoplay": false,
                                                                    "autoplaySpeed": 5000,
                                                                    "speed": 1000,
                                                                    "infinite": false,
                                                                    "rows": 2,
                                                                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                                                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                                                    }' data-slick-responsive='[
                                                                                              {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                                                                              {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                                                                              {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                                                                              {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                              {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                              {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                                                                              ]'>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444811685962">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/7_24ecc48a-6b78-4b70-b0a8-573285c7865a_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/14_f4def08d-09fb-4e5b-ac4b-363cff0e01e0_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444811685962, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-product-name-4" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-product-name-4')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 9">Vendor 9</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831698325578"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$79.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444810768458">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/9_fbf9d7e4-3534-44b6-9534-cc1ade7d0e9c_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/10_c9242bb3-b7c3-45df-b879-4b0d34b228eb_600x800_crop_center.jpg')}}">
                                  </a>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 7">Vendor 7</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697997898"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444809818186">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-34%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/3_87d5b153-ae39-4687-ab5c-674f7d049855_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_2563eafa-aad8-48d1-9bf7-6b36f7e29c32_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><button class="cart-disable">
                                      <span class="cart-text"><i class="ion-bag"></i></span>
                                    </button>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-product-name-2" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-product-name-2')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 4">Vendor 4</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697735754"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$19.00</span></span><span
                                      class="main-price discounted"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444799955018">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/2_321bba75-f76b-4cc0-9573-a1e758e504a5_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/19_ebc972f9-c949-4c4f-8feb-f1d30a089207_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444799955018, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="dummy-product-name-1" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('dummy-product-name-1')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 2">Vendor 2</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831697014858"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy
                                      product name</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$80.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444797169738">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/3_41b460ae-c807-4052-9835-d03128b7b5fb_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_b155f66b-76de-44a2-a3e9-ca89308d9bc3_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444797169738, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="11-product-with-video" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('11-product-with-video')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 11">Vendor 11</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696588874"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">11. Product
                                      with video</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$39.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444796547146">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/14_34859b26-2edb-460e-867c-829bec90ac59_600x800_crop_center.png')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/15_fe712b4f-4476-4297-84a9-2e087a477c5f_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444796547146, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="9-without-shortcode-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('9-without-shortcode-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 9">Vendor 9</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696490570"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">9. Without
                                      shortcode product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$79.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444795662410">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-35%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/11_e272e529-4c81-454b-b9ff-99dcfba814f1_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/12_d89a0bc6-f635-4367-b445-acf8f26d48a3_600x800_crop_center.png')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444795662410, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="8-countdown-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('8-countdown-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                  <div class="product-countdown" data-countdown="2022/05/24"></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 8">Vendor 8</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696457802"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">8. Countdown
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$39.00</span></span><span
                                      class="main-price discounted"><span class=money>$60.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444795269194">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/8_d10a44bc-e5d0-4a4d-a8ee-2892f61e6c7e_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444795269194, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="5-simple-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('5-simple-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 5">Vendor 5</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696293962"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">5. Simple
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$50.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444795007050">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-34%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/7_0703c71f-03e5-4502-b7cc-ce60c55e74de_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/8_4953a517-3945-478c-9e98-925e2b1000c0_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444795007050, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="4-soldout-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('4-soldout-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 4">Vendor 4</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696261194"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">4. Soldout
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$19.00</span></span><span
                                      class="main-price discounted"><span class=money>$29.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444791173194">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-18%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/6_4e54246b-2ba3-43d7-a49d-2607a3343bcb_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/7_1ca2fdf8-fc98-4a00-b12d-caed2c0e7a08_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444791173194, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="3-variable-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('3-variable-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 3">Vendor 3</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696162890"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">3. Variable
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$70.00</span></span><span
                                      class="main-price discounted"><span class=money>$85.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444790091850">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/5_5ff6a8ff-7b4a-4a26-ab2b-3b29d31c6b3e_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/6_55a9c25a-9018-41ef-9a28-efe77f09ed9b_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444790091850, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="2-new-badge-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('2-new-badge-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 2">Vendor 2</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831696064586"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">2. New badge
                                      product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$80.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                            <div class="col">
                              <!--=======  single grid product  =======-->
                              <div class="single-grid-product 29444789272650">
                                <div class="single-grid-product__image">
                                  <div class="single-grid-product__label">
                                    <span class="sale-title sale">Sale</span>
                                    <span class="percent-count sale">-15%</span>
                                  </div>
                                  <a href="index.html">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/1_600x800_crop_center.jpg')}}">
                                    <img class="img-fluid popup_cart_image" alt=""
                                      src="{{asset('frontend/s/files/1/0265/8933/1530/products/2_600x800_crop_center.jpg')}}">
                                  </a>
                                  <div class="hover-icons"><a href="javascript:void(0);"
                                      onclick="Shopify.addItem(29444789272650, 1); return false;" class="">
                                      <span>
                                        <span class="cart-title"><i class="ion-bag"></i></span>
                                      </span>
                                    </a>
                                    <a class="wishlist" href="account/login.html" title="Wishlist">
                                      <i class="ion-heart"></i>
                                    </a>
                                    <a href="#" class="compare" data-pid="1-new-and-sale-badge-product" title=""
                                      data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                      class="action-plus" title="Quick View" data-toggle="modal"
                                      data-target="#quickViewModal" href="javascript:void(0);"
                                      onclick="quiqview('1-new-and-sale-badge-product')"><i class="ion-android-open"></i>
                                    </a></div>
                                </div>
                                <div class="single-grid-product__content">
                                  <div class="single-grid-product__category-rating">
                                    <span class="category"><a href="index.html" title="Vendor 1">Vendor 1</a></span>
                                    <div class="product-ratting rating">
                                      <span class="shopify-product-reviews-badge" data-id="3831695999050"></span>
                                    </div>
                                  </div>
                                  <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">1. New and
                                      sale badge product</a> </h3>
                                  <p class="single-grid-product__price">
                                    <span class="discounted-price"><span class=money>$110.00</span></span><span
                                      class="main-price discounted"><span class=money>$130.00</span></span></p>
                                </div>
                              </div>
                              <!--=======  End of single grid product  =======-->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--=======  End of tab product content  =======-->
                </div>
                <!--=======  End of tab slider wrapper  =======-->
              </div>
            </div>
          </div>
          <!--====================  End of single row slider tab  ====================-->
          <style data-shopify>
            #section-1553488769816 {}

            @media (min-width: 768px) and (max-width: 991px) {
              #section-1553488769816 {}
            }

            @media (max-width: 767px) {
              #section-1553488769816 {}
            }
          </style>
        </div>
    </section> 
    
    <!-- End  product Section -->

     <!-- ======= Design Section ======= -->
     <section  class="about section-bg">
      <div class="container" data-aos="fade-up">


      </div>
    </section>
    
    <!-- End Design Section -->

    <!-- ======= Book Section ======= -->
    <section id="clients" class="clients">

        <div class="category-area section-space" id="section-1553401870629">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <!--=======  category wrapper  =======-->
                  <div class="category-wrapper">
                    <div class="row row-10 masonry-category-layout">
                      <div class="col-lg-4 col-sm-6 grid-item">
                        <!--=======  single category item  =======-->
                        <div class="single-category-item">
                          <div class="single-category-item__image">
                            <a href="index.html">
                              <img src="
                                {{asset('frontend/s/files/1/0265/8933/1530/files/collection-1.png')}}" alt="Collection Images">
                            </a>
                          </div>
                          <div class="single-category-item__content">
                            <h3 class="title"> adventure ( 11 ) </h3>
                            <a href="index.html">Explore Now</a>
                          </div>
                        </div>
                        <!--=======  End of single category item  =======-->
                      </div>
                      <div class="col-lg-4 col-sm-6 grid-item">
                        <!--=======  single category item  =======-->
                        <div class="single-category-item">
                          <div class="single-category-item__image">
                            <a href="index.html">
                              <img src="
                                {{asset('frontend/s/files/1/0265/8933/1530/files/collection-2.png')}}" alt="Collection Images">
                            </a>
                          </div>
                          <div class="single-category-item__content">
                            <h3 class="title"> cook ( 12 ) </h3>
                            <a href="index.html">Explore Now</a>
                          </div>
                        </div>
                        <!--=======  End of single category item  =======-->
                      </div>
                      <div class="col-lg-4 col-sm-6 grid-item">
                        <!--=======  single category item  =======-->
                        <div class="single-category-item">
                          <div class="single-category-item__image">
                            <a href="index.html">
                              <img src="
                                {{asset('frontend/s/files/1/0265/8933/1530/files/collection-3.png')}}" alt="Collection Images">
                            </a>
                          </div>
                          <div class="single-category-item__content">
                            <h3 class="title"> children ( 12 ) </h3>
                            <a href="index.html">Explore Now</a>
                          </div>
                        </div>
                        <!--=======  End of single category item  =======-->
                      </div>
                    </div>
                  </div>
                  <!--=======  End of category wrapper  =======-->
                </div>
              </div>
            </div>
          </div>
      
    </section> 
    
    <!-- End Book Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <!-- <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Voluptatem dignissimos provident quasi</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->


    <!-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Counts Section -->

     

     <!--====================  testimonial area ====================-->
      <section id="testimonials" class="testimonials">
       <div class="testimonial-area section-space" id="section-1553408324860">
              <div class="container wide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="full-testimonial-wrapper testimonial-bg" style="background-image: url()">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12">
                            <!--=======  testimonial wrapper  =======-->
                            <div class="testimonial-wrapper section-space--inner">
                              <div class="ht-slick-slider" data-slick-setting='{
                                                                        "slidesToShow": 1,
                                                                        "slidesToScroll": 1,
                                                                        "autoplay": false,
                                                                        "autoplaySpeed": 5000,
                                                                        "speed": 1000,
                                                                        "infinite": true,
                                                                        "arrows": true,
                                                                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                                                                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                                                                        }' data-slick-responsive='[
                                                                                                  {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                                                                                                  {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
                                                                                                  {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false} },
                                                                                                  {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false} },
                                                                                                  {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
                                                                                                  {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                                                                                  ]'>
                                <div class="col-lg-8 offset-lg-2">
                                  <!--=======  single testimonial item  =======-->
                                  <div class="single-testimonial-item">
                                    <div class="single-testimonial-item__image">
                                      <img src="{{asset('frontend/s/files/1/0265/8933/1530/files/team-01_small.jpg')}}" alt="">
                                    </div>
                                    <div class="single-testimonial-item__content">
                                      <p class="testimonial-text"> Sed vel urna at dui iaculis gravida. Maecenas pretium,
                                        velit vitae placerat faucibus, velit quam facilisis elit, sit amet lacinia est est id
                                        ligula. Duis feugiat quam non justo faucibus, in gravida diam tempor. Nam viverra enim
                                        non ipsum ornare, condimentum blandit diam mattis. Maecenas gravida mol..</p>
                                      <img src="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/icon_testimonials.png')}}" alt="">
                                      <p class="testimonial-author">Gregory Milan</p>
                                    </div>
                                  </div>
                                  <!--=======  End of single testimonial item  =======-->
                                </div>
                                <div class="col-lg-8 offset-lg-2">
                                  <!--=======  single testimonial item  =======-->
                                  <div class="single-testimonial-item">
                                    <div class="single-testimonial-item__image">
                                      <img src="{{asset('frontend/s/files/1/0265/8933/1530/files/team-04_small.jpg')}}" alt="">
                                    </div>
                                    <div class="single-testimonial-item__content">
                                      <p class="testimonial-text"> Sed vel urna at dui iaculis gravida. Maecenas pretium,
                                        velit vitae placerat faucibus, velit quam facilisis elit, sit amet lacinia est est id
                                        ligula. Duis feugiat quam non justo faucibus, in gravida diam tempor. Nam viverra enim
                                        non ipsum ornare, condimentum blandit diam mattis. Maecenas gravida mol..</p>
                                      <img src="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/icon_testimonials.png')}}" alt="">
                                      <p class="testimonial-author">Gregory Cooper</p>
                                    </div>
                                  </div>
                                  <!--=======  End of single testimonial item  =======-->
                                </div>
                                <div class="col-lg-8 offset-lg-2">
                                  <!--=======  single testimonial item  =======-->
                                  <div class="single-testimonial-item">
                                    <div class="single-testimonial-item__image">
                                      <img src="{{asset('frontend/s/files/1/0265/8933/1530/files/team-03_small.jpg')}}"alt="">
                                    </div>
                                    <div class="single-testimonial-item__content">
                                      <p class="testimonial-text"> Sed vel urna at dui iaculis gravida. Maecenas pretium,
                                        velit vitae placerat faucibus, velit quam facilisis elit, sit amet lacinia est est id
                                        ligula. Duis feugiat quam non justo faucibus, in gravida diam tempor. Nam viverra enim
                                        non ipsum ornare, condimentum blandit diam mattis. Maecenas gravida mol..</p>
                                      <img src="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/icon_testimonials.png')}}" alt="">
                                      <p class="testimonial-author">Gregory Bannrge</p>
                                    </div>
                                  </div>
                                  <!--=======  End of single testimonial item  =======-->
                                </div>
                              </div>
                            </div>
                            <!--=======  End of testimonial wrapper  =======-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <style data-shopify>
                #section-1553408324860 {
                  background: rgba(0, 0, 0, 0) url("{{asset('frontend/s/files/1/0265/8933/1530/files/testimonial-bg.png')}}")no-repeat scroll center center / cover;
                }

                @media (min-width: 768px) and (max-width: 991px) {
                  #section-1553408324860 {}
                }

                @media (max-width: 767px) {
                  #section-1553408324860 {}
                }
              </style>
      </section>

      <!--====================  End of testimonial area  ============-->

      <!-- ======= Design Section ======= -->
     <section  class="about section-bg">
      <div class="container" data-aos="fade-up">


      </div>
    </section>
    
    <!-- End Design Section -->

    <!-- ======= Tabs Section ======= -->
    <!-- <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Science Books</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">Others Books</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{asset('frontend/assets/img/tabs-2.jpg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{asset('frontend/assets/img/tabs-4.jpg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Tabs Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-computer"></i>
              <h4><a href="#">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="#">Dolor Sitema</a></h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="icofont-image"></i>
              <h4><a href="#">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="icofont-settings"></i>
              <h4><a href="#">Nemo Enim</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="icofont-earth"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="icofont-tasks-alt"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

      <!--====================  double row slider ====================-->
          <section>
                  
                  <div class="double-row-slider-area section-space" id="section-1554281232847">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <!--=======  section title  =======-->
                          <div class="section-title-wrapper text-center section-space--half">
                            <h2 class="section-title">Latest Arrivals</h2>
                            <p class="section-subtitle">Mirum est notare quam littera gothica, quam nunc putamus parum claram
                              anteposuerit litterarum formas.</p>
                          </div>
                          <!--=======  End of section title  =======-->
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <!--=======  double row slider wrapper  =======-->
                          <div class="double-row-slider-wrapper product_row_one">
                            <div class="ht-slick-slider" data-slick-setting='{
                                                                      "slidesToShow": 4,
                                                                      "slidesToScroll": 1,
                                                                      "arrows": true,
                                                                      "autoplay": false,
                                                                      "autoplaySpeed": 5000,
                                                                      "speed": 1000,                                                                 
                                                                      "infinite": false,
                                                                      "rows": 1,
                                                                      "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                                                      "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                                                      }' data-slick-responsive='[
                                                                                                {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                                                                                {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                                                                                {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                                                                                {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                                {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                                                                                {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                                                                                ]'>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444797169738">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/3_41b460ae-c807-4052-9835-d03128b7b5fb_600x800_crop_center.jpg')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_b155f66b-76de-44a2-a3e9-ca89308d9bc3_600x800_crop_center.jpg')}}">
                                    </a>
                                    <div class="hover-icons"><a href="javascript:void(0);"
                                        onclick="Shopify.addItem(29444797169738, 1); return false;" class="">
                                        <span>
                                          <span class="cart-title"><i class="ion-bag"></i></span>
                                        </span>
                                      </a>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="11-product-with-video" title=""
                                        data-original-title="Compare"><i class="ion-android-options"></i></a><a class="action-plus"
                                        title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);" onclick="quiqview('11-product-with-video')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 11">Vendor 11</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831696588874"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">11. Product with
                                        video</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$39.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444789174346">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                      <span class="sale-title sale">Sale</span>
                                      <span class="percent-count sale">-11%</span>
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_b670640f-f610-463a-80d3-e7e9e0b7bfaa_600x800_crop_center.jpg')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/5_76892c99-622f-4bbc-9f2d-0b3ae504950b_600x800_crop_center.jpg')}}">
                                    </a>
                                    <div class="hover-icons"><a href="javascript:void(0);"
                                        onclick="Shopify.addItem(29444789174346, 1); return false;" class="">
                                        <span>
                                          <span class="cart-title"><i class="ion-bag"></i></span>
                                        </span>
                                      </a>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="12-unique-content-for-each-product-on-the-product-tab"
                                        title="" data-original-title="Compare"><i class="ion-android-options"></i></a><a
                                        class="action-plus" title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);"
                                        onclick="quiqview('12-unique-content-for-each-product-on-the-product-tab')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 12">Vendor 12</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831695966282"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">12. Unique content
                                        for each</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$99.00</span></span><span
                                        class="main-price discounted"><span class=money>$111.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444806344778">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                      <span class="sale-title sale">Sale</span>
                                      <span class="percent-count sale">-18%</span>
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/5_6625026d-5104-4a7d-81ce-1cffde80b0c5_600x800_crop_center.jpg')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/11_821fee10-fe85-46ad-9909-e1588fa3c1e5_600x800_crop_center.jpg')}}">
                                    </a>
                                    <div class="hover-icons"><a href="javascript:void(0);"
                                        onclick="Shopify.addItem(29444806344778, 1); return false;" class="">
                                        <span>
                                          <span class="cart-title"><i class="ion-bag"></i></span>
                                        </span>
                                      </a>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="dummy-text-for-title-1" title=""
                                        data-original-title="Compare"><i class="ion-android-options"></i></a><a class="action-plus"
                                        title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);" onclick="quiqview('dummy-text-for-title-1')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 3">Vendor 3</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831697539146"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy text for
                                        title</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$70.00</span></span><span
                                        class="main-price discounted"><span class=money>$85.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444811685962">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/7_24ecc48a-6b78-4b70-b0a8-573285c7865a_600x800_crop_center.jpg')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/14_f4def08d-09fb-4e5b-ac4b-363cff0e01e0_600x800_crop_center.png')}}">
                                    </a>
                                    <div class="hover-icons"><a href="javascript:void(0);"
                                        onclick="Shopify.addItem(29444811685962, 1); return false;" class="">
                                        <span>
                                          <span class="cart-title"><i class="ion-bag"></i></span>
                                        </span>
                                      </a>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="dummy-product-name-4" title=""
                                        data-original-title="Compare"><i class="ion-android-options"></i></a><a class="action-plus"
                                        title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);" onclick="quiqview('dummy-product-name-4')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 9">Vendor 9</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831698325578"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy product
                                        name</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$79.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444810801226">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/17_a166f71e-29a2-457a-8486-79b7b6032e27_600x800_crop_center.png')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/18_ec00e00e-1649-46a2-8aea-650a3af80c4f_600x800_crop_center.png')}}">
                                    </a>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 7">Vendor 7</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831698030666"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Demo product
                                        title</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$29.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444810768458">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/9_fbf9d7e4-3534-44b6-9534-cc1ade7d0e9c_600x800_crop_center.jpg')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/10_c9242bb3-b7c3-45df-b879-4b0d34b228eb_600x800_crop_center.jpg')}}">
                                    </a>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 7">Vendor 7</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831697997898"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy product
                                        name</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$29.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444809850954">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/16_c98ddf70-a00c-4fc0-b63a-201608278b9d_600x800_crop_center.png')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/17_6e5bdbce-d487-437d-97f4-10c5f46b2d23_600x800_crop_center.png')}}">
                                    </a>
                                    <div class="hover-icons"><a href="javascript:void(0);"
                                        onclick="Shopify.addItem(29444809850954, 1); return false;" class="">
                                        <span>
                                          <span class="cart-title"><i class="ion-bag"></i></span>
                                        </span>
                                      </a>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="demo-product-title-2" title=""
                                        data-original-title="Compare"><i class="ion-android-options"></i></a><a class="action-plus"
                                        title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);" onclick="quiqview('demo-product-title-2')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 5">Vendor 5</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831697768522"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Demo product
                                        title</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$50.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444809818186">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                      <span class="sale-title sale">Sale</span>
                                      <span class="percent-count sale">-34%</span>
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/3_87d5b153-ae39-4687-ab5c-674f7d049855_600x800_crop_center.jpg')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/4_2563eafa-aad8-48d1-9bf7-6b36f7e29c32_600x800_crop_center.jpg')}}">
                                    </a>
                                    <div class="hover-icons"><button class="cart-disable">
                                        <span class="cart-text"><i class="ion-bag"></i></span>
                                      </button>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="dummy-product-name-2" title=""
                                        data-original-title="Compare"><i class="ion-android-options"></i></a><a class="action-plus"
                                        title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);" onclick="quiqview('dummy-product-name-2')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 4">Vendor 4</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831697735754"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy product
                                        name</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$19.00</span></span><span
                                        class="main-price discounted"><span class=money>$29.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444800774218">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/15_dedf623c-3eaa-4875-b76d-2e77ae036736_600x800_crop_center.png')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/16_ba44d883-4e57-456d-82e9-d583194e08dd_600x800_crop_center.png')}}">
                                    </a>
                                    <div class="hover-icons"><a href="javascript:void(0);"
                                        onclick="Shopify.addItem(29444800774218, 1); return false;" class="">
                                        <span>
                                          <span class="cart-title"><i class="ion-bag"></i></span>
                                        </span>
                                      </a>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="demo-product-title-1" title=""
                                        data-original-title="Compare"><i class="ion-android-options"></i></a><a class="action-plus"
                                        title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);" onclick="quiqview('demo-product-title-1')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 2">Vendor 2</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831697080394"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Demo product
                                        title</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$80.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444799955018">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/2_321bba75-f76b-4cc0-9573-a1e758e504a5_600x800_crop_center.jpg')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/19_ebc972f9-c949-4c4f-8feb-f1d30a089207_600x800_crop_center.png')}}">
                                    </a>
                                    <div class="hover-icons"><a href="javascript:void(0);"
                                        onclick="Shopify.addItem(29444799955018, 1); return false;" class="">
                                        <span>
                                          <span class="cart-title"><i class="ion-bag"></i></span>
                                        </span>
                                      </a>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="dummy-product-name-1" title=""
                                        data-original-title="Compare"><i class="ion-android-options"></i></a><a class="action-plus"
                                        title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);" onclick="quiqview('dummy-product-name-1')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 2">Vendor 2</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831697014858"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy product
                                        name</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$80.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444798971978">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/6_a52bb666-119f-4503-92e9-9b609ec826db_600x800_crop_center.jpg')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/12_e8329c48-2e22-47a5-8df6-471f87623c91_600x800_crop_center.png')}}">
                                    </a>
                                    <div class="hover-icons"><a href="javascript:void(0);"
                                        onclick="Shopify.addItem(29444798971978, 1); return false;" class="">
                                        <span>
                                          <span class="cart-title"><i class="ion-bag"></i></span>
                                        </span>
                                      </a>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="dummy-text-for-title" title=""
                                        data-original-title="Compare"><i class="ion-android-options"></i></a><a class="action-plus"
                                        title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);" onclick="quiqview('dummy-text-for-title')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 11">Vendor 11</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831696883786"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy text for
                                        title</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$39.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                              <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product 29444797988938">
                                  <div class="single-grid-product__image">
                                    <div class="single-grid-product__label">
                                      <span class="sale-title sale">Sale</span>
                                      <span class="percent-count sale">-15%</span>
                                    </div>
                                    <a href="index.html">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/18_4cf5532c-6f3b-464c-98d0-4d9efc7766e8_600x800_crop_center.png')}}">
                                      <img class="img-fluid popup_cart_image" alt=""
                                        src="{{asset('frontend/s/files/1/0265/8933/1530/products/19_ccdb28ec-39a3-4e07-9f7b-b3bb667f9b1d_600x800_crop_center.png')}}">
                                    </a>
                                    <div class="hover-icons"><a href="javascript:void(0);"
                                        onclick="Shopify.addItem(29444797988938, 1); return false;" class="">
                                        <span>
                                          <span class="cart-title"><i class="ion-bag"></i></span>
                                        </span>
                                      </a>
                                      <a class="wishlist" href="account/login.html" title="Wishlist">
                                        <i class="ion-heart"></i>
                                      </a>
                                      <a href="#" class="compare" data-pid="dummy-product-name" title=""
                                        data-original-title="Compare"><i class="ion-android-options"></i></a><a class="action-plus"
                                        title="Quick View" data-toggle="modal" data-target="#quickViewModal"
                                        href="javascript:void(0);" onclick="quiqview('dummy-product-name')"><i
                                          class="ion-android-open"></i>
                                      </a></div>
                                  </div>
                                  <div class="single-grid-product__content">
                                    <div class="single-grid-product__category-rating">
                                      <span class="category"><a href="index.html" title="Vendor 1">Vendor 1</a></span>
                                      <div class="product-ratting rating">
                                        <span class="shopify-product-reviews-badge" data-id="3831696785482"></span>
                                      </div>
                                    </div>
                                    <h3 class="single-grid-product__title popup_cart_title"> <a href="index.html">Dummy product
                                        name</a> </h3>
                                    <p class="single-grid-product__price">
                                      <span class="discounted-price"><span class=money>$110.00</span></span><span
                                        class="main-price discounted"><span class=money>$130.00</span></span></p>
                                  </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                              </div>
                            </div>
                          </div>
                          <!--=======  End of double row slider wrapper  =======-->
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <style data-shopify>
                    #section-1554281232847 {}

                    @media (min-width: 768px) and (max-width: 991px) {
                      #section-1554281232847 {}
                    }

                    @media (max-width: 767px) {
                      #section-1554281232847 {}
                    }
                  </style>
          </section>

          <!--====================  End of double row slider  ====================-->

          <!-- ======= Portfolio Section ======= -->
          <!-- <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
              </div>

              <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                  </ul>
                </div>
              </div>

              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 1</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 3</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 2</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Card 2</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 2</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 3</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Card 1</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Card 3</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 3</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section> -->
          
          <!-- End Portfolio Section -->

          <!-- ======= Testimonials Section ======= -->
          <!-- <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
              <div class="section-title">
                <h2>Testimonials</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
              </div>

              <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>

                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>

                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>

                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>

                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat esse veniam culpa fore nisi cillum quid.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>

              </div>

            </div>
          </section> -->
          
          <!-- End Testimonials Section -->

          <!-- ======= Pricing Section ======= -->
          <!-- <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Pricing</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
              </div>

              <div class="row">

                <div class="col-lg-4 col-md-6">
                  <div class="box" data-aos="fade-up" data-aos-delay="100">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                      <li>Aida dere</li>
                      <li>Nec feugiat nisl</li>
                      <li>Nulla at volutpat dola</li>
                      <li class="na">Pharetra massa</li>
                      <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                  <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                    <h3>Business</h3>
                    <h4><sup>$</sup>19<span> / month</span></h4>
                    <ul>
                      <li>Aida dere</li>
                      <li>Nec feugiat nisl</li>
                      <li>Nulla at volutpat dola</li>
                      <li>Pharetra massa</li>
                      <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                  <div class="box" data-aos="fade-up" data-aos-delay="300">
                    <h3>Developer</h3>
                    <h4><sup>$</sup>29<span> / month</span></h4>
                    <ul>
                      <li>Aida dere</li>
                      <li>Nec feugiat nisl</li>
                      <li>Nulla at volutpat dola</li>
                      <li>Pharetra massa</li>
                      <li>Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section> -->
          
          <!-- End Pricing Section -->

          <!-- ======= Frequently Asked Questions Section ======= -->
          <!-- <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Frequently Asked Questions</h2>
              </div>

              <ul class="faq-list" data-aos="fade-up">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                  <div id="faq1" class="collapse" data-parent=".faq-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                  <div id="faq2" class="collapse" data-parent=".faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                  <div id="faq3" class="collapse" data-parent=".faq-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                  <div id="faq4" class="collapse" data-parent=".faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                  <div id="faq5" class="collapse" data-parent=".faq-list">
                    <p>
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                  <div id="faq6" class="collapse" data-parent=".faq-list">
                    <p>
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                  </div>
                </li>

              </ul>

            </div>
          </section> -->
          
          <!-- End Frequently Asked Questions Section -->

          <!-- ======= Team Section ======= -->
          <!-- <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
              </div>

              <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                      <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Walter White</h4>
                      <span>Chief Executive Officer</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                      <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Sarah Jhonson</h4>
                      <span>Product Manager</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                      <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>William Anderson</h4>
                      <span>CTO</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                      <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section> -->
          
          <!-- End Team Section -->

          <!-- ======= Design Section ======= -->
        <section  class="about section-bg">
            <div class="container" data-aos="fade-up">


            </div>
          </section>
          
          <!-- End Design Section -->

          

          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
              </div>

              <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@example.com<br>contact@example.com</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-lg-6">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                      </div>
                      <div class="col form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>

              </div>

            </div>
          </section><!-- End Contact Section -->

    </main>
    
    <!-- End #main -->

@endsection