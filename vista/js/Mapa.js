let map = L.map("map").setView([11.2255673778992, -74.18677023235227], 20);

//Agregar tilelAyer mapa base desde openstreetmap
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

var cantidaddocentes = 1,
  cantidadbicis = 2,
  cantidadpibe = 3,
  cantidadhemi = 4,
  cantidaddestapada = 1,
  cantidadbloque3 = 2;

function info(variable, nombre, cantidad) {
  variable.bindPopup(nombre + " <br>cantidad: " + cantidad).openPopup();
}

var parqueaderodestapada = L.marker([11.224269, -74.187528]).addTo(map);
info(parqueaderodestapada, "parqueadero destapada", cantidaddestapada);
var parqueaderohemi = L.marker([11.226825, -74.187356]).addTo(map);
      info(parqueaderohemi, "parqueadero hemiciclo", cantidadhemi);
      var parqueaderoBicis = L.marker([11.226088, -74.188035]).addTo(map);
      info(parqueaderoBicis, "parqueadero bicicletas ", cantidadbicis);
      var parqueaderodocentes = L.marker([
        11.22639437377533, -74.18541817570676,
      ]).addTo(map);
      info(parqueaderodocentes, "parqueadero docentes", cantidaddocentes);
      var parqueaderopibe = L.marker([11.227119, -74.186611]).addTo(map);
      info(parqueaderopibe, "parqueadero pibe", cantidadpibe);
      var parqueaderoBloque3 = L.marker([
        11.226490299538192, -74.18716140471305,
      ]).addTo(map);
      info(parqueaderoBloque3, "parqueadero bloque 3", cantidadbloque3);

function mostrar() {
  var selectElement = document.querySelector("#mostrar");

  var output = selectElement.value;

  if (output == "Parqueaderohemiciclo") {  
    cantidadhemi -= 1;
    if (cantidadhemi==0) { 
    
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      L.marker([11.226825, -74.187356], { icon: markred }).addTo(map);
      map.removeLayer(parqueaderohemi);
    }
    console.log(cantidadhemi);
  } else if (output == "Parqueaderodestapada") {
    cantidaddestapada -= 1;
    if (cantidaddestapada == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      L.marker([11.224269, -74.187528], { icon: markred }).addTo(map);
      map.removeLayer(parqueaderodestapada);
    } 
    
    console.log(cantidaddestapada);
  } else if (output == "ParqueaderoBicis") {
    cantidadbicis -= 1;
    if (cantidadbicis == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      L.marker([11.226088, -74.188035], { icon: markred }).addTo(map);
      map.removeLayer(parqueaderoBicis);
    }
    
    console.log(cantidadbicis);
  } else if (output == "ParqueaderoDocentes") {
    cantidaddocentes -= 1;
    if (cantidaddocentes == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      L.marker([11.22639437377533, -74.18541817570676], { icon: markred }).addTo(
        map
      );
      map.removeLayer(parqueaderodocentes);
    } 
    console.log(cantidaddocentes);
  } else if (output == "Parqueaderopibe") {
    cantidadpibe -= 1;
    if (cantidadpibe == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      L.marker([11.227119, -74.186611], { icon: markred }).addTo(map);
      map.removeLayer(parqueaderopibe);
    }
    
    console.log(cantidadpibe);
  } else if (output == "ParqueaderoBloque3") {
    cantidadbloque3 -= 1;
    if (cantidadbloque3 == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      L.marker([11.226490299538192, -74.18716140471305], { icon: markred }).addTo(
        map
      );
      map.removeLayer(parqueaderoBloque3);
    } 
    console.log(cantidadbloque3);
  }
}








