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
						@foreach( $contacts as $contact )
						<tr>
							<td>
								Адрес
							</td>
							<td>
								{{$contact->address}}</td>
							</tr>
							<tr>
								<td>
									Телефон
								</td>
								<td>
									{{$contact->phone}}<br />
								</td>
							</tr>
							<tr>
								<td>
									E-mail
								</td>
								<td>
									<a href="index.html#">{{$contact->email}}</a>
								</td>
							</tr>
							@endforeach
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