<h1 class="az-pad">Каталог компаний</h1>
<div class="az-filter">
	<div class="az-col5 az-margin-top16">
		<div class="az-select">
			<select name="sel1" id="">
				<option value="0">Выберите тип компании</option>
				<option value="1">Тип компании1</option>
				<option value="2">Тип компании2</option>
			</select>
		</div>
	</div>
	<div class="az-col5 az-margin-top16">
		<div class="az-select">
			<select name="sel2" id="">
				<option value="0">Регион компании</option>
				<option value="1">Регион компании1</option>
				<option value="2">Регион компании2</option>
			</select>
		</div>
	</div>
	<div class="az-col6 az-margin-top16">
		<input type="text" placeholder="Поиск по названию" class="az-input">
	</div>
	<div class="az-col7 az-margin-top16">
		<a href="#" class="az-search">Поиск</a>
	</div>
	<div class="clearfix"></div>
</div>
<div id="az-map"></div>
<script type="text/javascript">
    // Создает обработчик события window.onLoad
    YMaps.jQuery(function () {
        // Создает экземпляр карты и привязывает его к созданному контейнеру
        var map = new YMaps.Map(YMaps.jQuery("#az-map")[0]);
            
        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
        map.setCenter(new YMaps.GeoPoint(37.64, 55.76), 10);
    })
</script>