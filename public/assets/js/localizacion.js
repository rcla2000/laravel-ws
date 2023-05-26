var ubicacionUsuario;

const clave = "AIzaSyCAqjCXrK4eR4aJZn5VmjeZDFtSy01Na88";

function obtenerCoordenadasUbicacion(position) {
  var pos = {
    lat: position.coords.latitude,
    lng: position.coords.longitude,
  };

  return pos;
}

function geocodeLatLng(latlng) {
  fetch(
    "https://maps.googleapis.com/maps/api/geocode/json?latlng=" +
      latlng.lat +
      "," +
      latlng.lng +
      "&key=" +
      clave
  )
    .then((res) => res.json())

    .then((data) => {
      if (data.results) {
         console.log(data.results[2].formatted_address)
      }
    });
}

function initMap() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      function (position) {
        ubicacionUsuario = obtenerCoordenadasUbicacion(position);
        geocodeLatLng(ubicacionUsuario);
      },

      function () {
        console.log("Permiso denegado");
      }
    );
  } else {
    console.log("El navegador no soporta la geolocalizacion");
  }
}