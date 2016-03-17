$(document).ready(function(){
	$( ".extintores" ).click(function() {
	  	$( "a.menu-extintores" ).click();
	});
	$( ".productos" ).click(function() {
	  	$( "a.menu-productos" ).click();
	});
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e){
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center);
	});
});