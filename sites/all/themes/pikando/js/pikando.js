(function ($) {
	$(document).ready(function() {
		$("#carrusel").cycle({
			fx: 'fade',
			slides: '> div.contenedor',
			auto_height: "4:3",
			swipe: true,
			timeout: 3000,
			speed:  2500,
			next: ('a.sig'),
			prev: ('a.ant')
		});

		$("div.centrar div.menu ul li").mouseover(function(){
			$(this).children("a").css("z-index", 120);
			$(this).children("a").css("box-shadow", "0 0 20px #000");
			$(this).children("a").animate({
				'width': 124,
				'height': 124,
				'top': -13,
				'left': -10,
				'padding': 5
			}, 200);

			$(this).children("a img").animate({
				'border-width': 5
			}, 150);
			$(this).children("h4").css('z-index', 120)
			$(this).children("h4").animate({
				'background-color': "#FFF",
				'color': '#000',
				'width': 134,
				'opacity': 0.8,
				'bottom': 37,
				'left': -10
			}, 200);
		});

		$("div.centrar div.menu ul li").mouseleave(function(){
			$(this).children("h4").css('z-index', 120)
			$(this).children("a").stop(true, false);
			$(this).children("a").prop("style", "");
			$(this).children("a img").stop(true, false);
			$(this).children("a img").prop("style", "");
			$(this).children("h4").stop(true, false);
			$(this).children("h4").prop("style", "");
		});
	});
})(jQuery);

function establecerMapa() {
	//setView([latitud, longitud], zoom) en el que se quiere iniciar
	var mapa = L.map('mapa').setView([2.5075512,-76.5495676], 13);

	var ggls = new L.Google('SATELLITE');
	var gglr = new L.Google('ROADMAP');
	var gglh = new L.Google('HYBRID');
	var gglt = new L.Google('TERRAIN');

	var baseMaps = {
		"Google Roadmap": gglr
	};
	//var baseMaps = {"Google Roadmap": gglr};

	L.control.scale().addTo(mapa);
	L.control.layers(baseMaps).addTo(mapa);

	//mapa.addLayer(gglr);
	mapa.addLayer(gglr);

	var marker = L.marker([2.517096, -76.543774]).addTo(mapa);
	marker.bindPopup("<img class='logoMar' src='http://localhost/pikando/sites/all/themes/pikando/img/pikando-fondo-blanco.png'' alt='Pikando' />").openPopup();
}
