@extends('frontend.layouts.master')

@section('content')
<div class="slider staticSlider" style="overflow: hidden;">
  <ul>
    <li >
      <div class="slider_title">
        <center style="margin: 0 auto; max-width: 1360px; padding: 0px 20px;">
         {!! $text->text !!}</center>
      </div>
      <video id="video" style="width: 100%;" autoplay="autoplay" muted loop controls="">
        <source src="/videos/video.mp4" type="video/mp4">
        <!-- <source src="/videos/video.webm" type="video/webm"> -->
      </video>
    </li>
  </ul>
  <div class="slider_pager"></div>
    <a href="index.html#" class="prev_slide"></a>
    <a href="index.html#" class="next_slide"></a>
</div>
<section id="content">
  <div class="center">
    <div class="grid">
      <ul class="clear">
        <li data-form="" ">
          <div class="grid_block">
            <div class="text_panel">
              <div class="h3">О компании</div>
              <p> {!! $textAbout->text !!}</p>
              <a href="/about" class="more_span more_info"><span>Подробнее</span></a>
            </div>
          </div>
        </li>
        <li data-form="" class="">
          <div class="grid_block">
            <div class="product product_info">
              <div class="product_img" style="height: inherit;">
                <img src="/img/galleries/big/{{ App\Models\Backend\Gallery::getGallery() }}" alt="" style="height: inherit;" />
              </div>
              <div class="product_title">Фотогалерея</div>
              <a href="/galleries" class="product_link">
                <span class="more_span"><span>Подробнее</span></span>
              </a>
            </div>
          </div>
        </li>
        <li data-form="" class="smaller" style="width: 40%">
          <div class="grid_block">
            <div class="info_block">
              <div class="info_title">Контакты</div>
              <div class="sliding_text">
                <div class="sliding_text_front">
                  <div class="info_text">Казахстан, ЮКО,Сайрамский р-н, пос.Аксукент, Карабулакское шоссе 18А</div>
                  <div class="info_text">+7777 777 77 77<br/>+7777 777 77 77 (Факс)<br /><a href="#">example@test.example</a></div>
                </div>
                <div class="sliding_text_back">
                  <div class="info_text">Казахстан, ЮКО,Сайрамский р-н, пос.Аксукент, Карабулакское шоссе 18А</div>
                  <div class="info_text">+7777 777 77 77<br/>+7777 777 77 77 (Факс)<br /><a href="#">example@test.example</a></div>
                </div>
              </div>
              <a href="#" class="more_span more_info"><span>Подробнее</span></a>
            </div>
          </div>
        </li>
        <li data-form="" class="" style="width: 60%">
          <div class="grid_block">
            <div class="product product_info">
              <div class="product_img">
                <img src="/img/products/{{ App\Models\Category::getProduct() }}" alt="" />
              </div>
              <div class="product_title">Продукция</div>
              <a href="#" class="product_link">
                <span class="more_span"><span>Подробнее</span></span>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>  
</section>
@endsection