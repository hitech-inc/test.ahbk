@extends('frontend.layouts.master')

@section('content')
<style>
    div.center div.text > p {
        /*margin-left: 0;
        margin-right: 0 ;*/
        padding-right: 0;
    }
</style>
<div class="slider staticSlider" style="overflow: hidden;">
    <ul>
        <li style="background-image: url('/img/backgrounds/{{ $background->img  }}');">
         <div class="slider_title">
            <center style="margin: 0 auto; max-width: 1360px; padding: 0px 20px;">
            продукция компании «АХБК»                                                            </center>
        </div>
    </li>

</ul>
<div class="slider_pager"></div>
<a href="index.html#" class="prev_slide"></a>
<a href="index.html#" class="next_slide"></a>
</div>
<section id="content">
	<div class="center">
        <div class="breadcrumbs">
           <ul class="clear">
            <li><a href="/" title="Главная">Главная</a></li><li><span>Продукция</span></li>        </ul>
        </div>
        <div class="text" style="padding: 15px;">
            {!! $textProd->text !!}
        </div>
        <div class="grid">
          <ul class="clear">
            @foreach( $categories as $category )
            <li data-form="" class="">
                <div class="grid_block">
                  <div class="product">
                     <div class="product_img">
                        <img class="product_img" src="/img/products/{{ $category->img }}" alt="" />
                    </div>
                    <div class="product_title">{{ $category->title }}</div>
                    <a href="{{ url('products/' . $category->slug) }}" class="product_link">
                        <span class="mask"></span>
                        <span class="product_text">{!! $category->text !!}</span>
                        <span class="more_span"><span>Подробнее</span></span>
                    </a>
                </div>
            </div>
        </li>
        @endforeach
        <!-- <li data-form="" class="">
    <div class="grid_block">
		            <div class="product">
    			<div class="product_img">
                    <img class="product_img" src="/upload/iblock/ec5/ec5a120546a388e6e936ebcce5c35aca.jpg" alt="" />
                </div>
    			<div class="product_title">Lorem ipsum</div>
    			<a href="magnity/index.html" class="product_link">
    				<span class="mask"></span>
    				<span class="product_text">Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>adipisicing elit <br>adipisicing elit</span>
    				<span class="more_span"><span>Подробнее</span></span>
    			</a>
    		</div>
        	</div>
</li>
        <li data-form="" class="">
    <div class="grid_block">
		            <div class="product">
    			<div class="product_img">
                    <img class="product_img" src="/upload/iblock/ed4/ed4de8e0f002ed46d5d54df09ba1ff00.jpg" alt="" />
                </div>
    			<div class="product_title">Lorem ipsum</div>
    			<a href="metallodetektory/index.html" class="product_link">
    				<span class="mask"></span>
    				<span class="product_text">Lorem ipsum <br>Lorem ipsum dolor sit amet, consectetur </span>
    				<span class="more_span"><span>Подробнее</span></span>
    			</a>
    		</div>
        	</div>
</li>
        <li data-form="" class="">
    <div class="grid_block">
		            <div class="product">
    			<div class="product_img">
                    <img class="product_img" src="/upload/iblock/e0a/e0ab9cf3f77de59b550d6a9afcdc3d10.jpg" alt="" />
                </div>
    			<div class="product_title">Lorem ipsum dolor sit amet, consectetur </div>
    			<a href="kupit/index.html" class="product_link">
    				<span class="mask"></span>
    				<span class="product_text">Lorem ipsum dolor sit amet, consectetur <br> Lorem ipsum dolor sit amet, consectetur </span>
    				<span class="more_span"><span>Подробнее</span></span>
    			</a>
    		</div>
        	</div>
        </li> -->
    </ul>
</div>        <div class="callback" style="height: 270px;">
	<div class="callback_cover callback_panel">
		<div class="valign_middle clear">
			<div class="callback_title">
                заявка отправлена
            </div>
            <p>
                Свяжемся с вами в ближайшее время
            </p>
        </div>
        <a href="index.html#" class="close_button close_cover"></a>
    </div>
    <div class="callback_form callback_panel">
      <div class="valign_middle">
         <form method="post" action="#" id="callbak_form" data-req="PHONE">
            <input type="hidden" name="HEAD" value="Заявка со страницы продукции"/>
            <table>
               <tr>
                  <td>
                     <input required type="text" name="NAME" placeholder="Ф.И.О."/>
                 </td>
                 <td>
                     <input required type="text" name="COMPANY" placeholder="Организация" class="text_input" />
                 </td>
                 <td>
                     <input required type="text" name="PHONE" placeholder="Телефон" class="phone_input" />
                 </td>
                 <td>
                     <input required type="text" name="EMAIL" placeholder="E-mail" class="email_input" />
                 </td>
             </tr>
         </tbody>
     </table><br>
     <table>
        <tbody>
          <tr>
              <td width="63%">
                 <textarea rows="2" cols="1" name="TEXTAREA" placeholder="Сообщение" class="text_input"></textarea>
             </td>
             <td>
                 <button class="button w_100_pс">
                    <span class="black_button">	

                        Свяжитесь со мной
                        <span class="gray_cover">

                            Свяжитесь со мной
                        </span>
                    </span>
                </button>
            </td>
        </tr>
    </table>
</form>
<script type="text/javascript">
    $(document).ready(function(){
       $("#callbak_form").submit(function(){
          formSubmit();
          return false;
      });
   });
</script>
<br><center><p><input name="a" value="Даю согласие на обработку своих персональных данных" checked="" type="checkbox">&nbsp;Даю <a href="../soglashenie-ob-obrabotke-personalnykh-dannykh.php.html" target="_blank" style="color:#104E8B;text-decoration:underline;">согласие на обработку</a> своих персональных данных</p></center>
</div>
</div><!-- callback_form -->
<div class="callback_intro visible callback_panel">
  <div class="valign_middle clear">
     <a class="button w_240 callback_button">
        <span class="black_button">	

            Оставить заявку
            <span class="red_cover">

                Оставить заявку
            </span>
        </span>
    </a>
    <div class="callback_title">

        Позвоните
    +7 (777) 777-77-77</div>
    <p>

      или оставьте заявку и наш консультант свяжется с вами

  </p>
</div>

</div>
</div><!-- center --> <!-- content -->
</section>
@endsection