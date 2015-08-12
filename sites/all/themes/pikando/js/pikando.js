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