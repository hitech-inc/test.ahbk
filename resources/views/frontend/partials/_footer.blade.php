<div class="center">
    <div class="footer_navs clear">
      <div class="footer_nav">
        <div class="nav_title">О компании</div>
        <ul>

            <li>
                <a href="/about/technical-equipment">Техническое оснащение</a>
            </li>

            <li>
                <a href="/about/certificates">Сертификаты</a>
            </li>

        </ul></div>                       
        <div class="footer_nav">
            <div class="nav_title">Продукция</div>    
            <ul>
                @foreach (App\Models\Category::getCategories() as $category)
                @if($loop->index < 4)
                <li>
                    <a href="{{ url('/products/' . $category['category']->slug) }}">{{$category['category']->title}}</a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>                       
        <div class="footer_nav">
          <div class="nav_title"></div>
          <ul>
            <ul></ul>
            <br>
            @foreach( App\Models\Category::getCategories() as $category )
            @if( $loop->index > 3 )
            <li>
              <a href="{{ url('/products/' . $category['category']->slug) }}">{{ $category['category']->title }}</a>
            </li> 
            @endif
            @endforeach
          </ul>
        </div>                        
        <div class="footer_nav">
                <div class="nav_title">Контакты</div>
                <ul>
                  <li>

                    <a style="color: #999999">Казахстан, ЮКО,Сайрамский р-н, пос.Аксукент, Карабулакское шоссе 18А</a>
                </li>                        <li>

                    <a style="color: #999999">+7 702 500 66 05</a>
                </li>                        <li>

                    <a style="color: #999999">KalmenovaD@ahbk.kz</a>
                </li>
            </div>      
          </div>
            <div class="footer clear">
                <div style="text-align:center;">
                    <!-- <a href="#">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a> -->
                </div>
                <br>
<!-- <div style="text-align:center;">
<a href="#">СОГЛАШЕНИЕ ОБ ОБРАБОТКЕ ПЕРСОНАЛЬНЫХ ДАННЫХ</a>
</div> -->
<div class="footer_logo">
    <a href="/"><img src="" alt="">Logo</a>
</div>
<div class="copyright">
    © 2018 AHBK.kz
</div>
<div class="developer">
    Разработано в  – <a target="_blank" href="">Hitech</a>
</div>
</div>
</div>
    <!-- center -->