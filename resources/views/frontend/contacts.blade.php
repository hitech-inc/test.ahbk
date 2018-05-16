@extends('frontend.layouts.master')

@section('content')
<script type="text/javascript">
	ymaps.ready(init);
	var myMap, 
	myPlacemark;

	var longitude, latitude;

	longitude = {{ App\Models\Backend\Contact::getCoords()['longitude'] }};
	latitude = {{ App\Models\Backend\Contact::getCoords()['latitude'] }}; 

	function init(){ 
		myMap = new ymaps.Map("map", {
			center: [longitude, latitude],
			zoom: 17
		}); 

		myPlacemark = new ymaps.Placemark([longitude, latitude], {
			hintContent: 'Шымкент, Аксукент!',
			balloonContent: 'Южно - Казахстанская область'
		});

		myMap.geoObjects.add(myPlacemark);
	}
</script>
<section id="content">
	<div class="center">
		<div class="breadcrumbs">
			<ul class="clear">
				<li><a href="/" title="Главная">Главная</a></li><li><span>Контакты</span></li>        
			</ul>
		</div>
<!-- <style>
.contact_map.active > ymaps{
    height: 377px!important;
}
</style> -->
<div class="contact_list">
	<ul class="clear">

		<li style="width: 100%">
			<div class="contact_info" style="height: auto">
				<div class="product_title">
					АХБК   
				</div>
				<div class="contact_image">
					<!-- <img src="http://www.antarn.ru.images.1c-bitrix-cdn.ru/upload/iblock/d67/d6786076ca9d7bf984c97c40f34585ed.jpg?1425040250137594" alt="" /> -->
					<div id="map" style="width: 100%; height: 400px"></div>
				</div>
				<div class="contact_table">
					<table>
						<tr>
							<td colspan="2" style="text-align:center;">Отдел продаж в Шымкенте</td>
						</tr>
							<tr>
								<td>Адрес</td>
								<td>Казахстан, ЮКО, Сайрамский р-н, пос.Аксукент, Карабулакское шоссе 18А</td>
							</tr>
							<tr>
								<td>
									Телефон
								</td>
								<td>
									+7 702 500 66 05 Дана
								</td>
							</tr>
							<tr>
								<td>
									E-mail
								</td>
								<td>
									KalmenovaD@ahbk.kz
								</td>
							</tr>
						<tr>
							<td colspan="2" style="text-align:center;">Отдел продаж в Алматы</td>
						</tr>
							<tr>
								<td>
									Телефон
								</td>
								<td>
									+7 777 241 17 54 Светлана Ивановна
								</td>
							</tr>
							<tr>
								<td>
									E-mail
								</td>
								<td>
									 info@ahbk.kz
								</td>
							</tr>
						<tr>
						</table>
					</div>
					@include('frontend.partials._callback')
		</li>
	</ul>
</div><!-- contact_list -->
	<!-- <div class="contact_map_block">
			<div class="contact_map" id="map0"></div>
			<div class="contact_map" id="map1"></div>
			<a class="close_button"></a>
		</div> -->
	</section>
	@endsection