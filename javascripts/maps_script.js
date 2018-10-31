function initMap() {

	/*Variavel de localizações*/
	var locations = [
		['Empório do corpo', -21.767758, -48.164555],
		['Animalia Farma', -21.789611, -48.181146],
		['Expressa EcoPet', -21.790978, -48.172260],
		['Team Máximo', -21.794733, -48.174735],
		['Agua & Lar', -21.782182, -48.177422],
		['100% Jeans', -21.794066, -48.174100]
	];

	// Criando o mapa
	var map = new google.maps.Map(document.getElementById('map'), {
	  center: {lat: -21.782182, lng: -48.177422},
	  zoom: 13
	});
	
	// Setando as localizações
	for (i = 0; i < locations.length; i++) {  
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			title: locations[i][0],
			map: map
		});
		
	}		
	
}