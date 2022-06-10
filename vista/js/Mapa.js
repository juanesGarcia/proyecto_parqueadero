let map = L.map("map").setView([11.2255673778992, -74.18677023235227], 20);

//Agregar tilelAyer mapa base desde openstreetmap
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

var cantidaddocentes = 1,
  cantidadbicis = 2,
  cantidadpibe = 3,
  cantidadhemi = [0,1,2,3],
  cantidaddestapada = 1,
  cantidadbloque3 = 5,i=cantidadhemi.length-1,parqueaderoh;
  
var parqueaderodestapada = L.marker([11.224269, -74.187528]).addTo(map);

var parqueaderohemi = L.marker([11.226825, -74.187356]).addTo(map); 
var parqueaderoBicis = L.marker([11.226088, -74.188035]).addTo(map);
var parqueaderodocentes = L.marker([11.22639437377533, -74.18541817570676]).addTo(map);
var parqueaderopibe = L.marker([11.227119, -74.186611]).addTo(map);

var parqueaderoBloque3 = L.marker([11.226490299538192, -74.18716140471305]).addTo(map);
info(parqueaderoBloque3, "parqueadero bloque 3", cantidadbloque3);


function info(variable, nombre, cantidad) {
  variable.bindPopup(nombre + " <br>cantidad: " + cantidad).openPopup();
}

function mostrar() {
  var selectElement = document.querySelector("#mostrar");
 
  var output = selectElement.value;
  
  if (output == "Parqueaderohemiciclo") { 
    i--;
  info(parqueaderohemi, "parqueadero hemiciclo",cantidadhemi[i]); 
    if (cantidadhemi[i]==0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      hemi = L.marker([11.226825, -74.187356], { icon: markred }).addTo(map);
      map.removeLayer(parqueaderohemi);
    }
        
    
   
    console.log(cantidadhemi[i]);
  } else if (output == "Parqueaderodestapada") {
    cantidaddestapada -= 1;
    info(parqueaderodestapada, "parqueadero destapada", cantidaddestapada);
    if (cantidaddestapada == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      des=L.marker([11.224269, -74.187528], { icon: markred }).addTo(map);
      map.removeLayer(parqueaderodestapada);
    }

    console.log(cantidaddestapada);
  } else if (output == "ParqueaderoBicis") {
    cantidadbicis -= 1;
    info(parqueaderoBicis, "parqueadero bicicletas ", cantidadbicis);
    if (cantidadbicis == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      b=L.marker([11.226088, -74.188035], { icon: markred }).addTo(map);
      map.removeLayer(parqueaderoBicis);
    }

    console.log(cantidadbicis);
  } else if (output == "ParqueaderoDocentes") {
    cantidaddocentes -= 1;
   info(parqueaderodocentes, "parqueadero docentes", cantidaddocentes);
    if (cantidaddocentes == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      doc=L.marker([11.22639437377533, -74.18541817570676], { icon: markred }).addTo(map);
      map.removeLayer(parqueaderodocentes);
    }
    console.log(cantidaddocentes);
  } else if (output == "Parqueaderopibe") {
    cantidadpibe -= 1;
    info(parqueaderopibe, "parqueadero pibe", cantidadpibe);
    if (cantidadpibe == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      pi=L.marker([11.227119, -74.186611], { icon: markred }).addTo(map);
      map.removeLayer(parqueaderopibe);
    }

    console.log(cantidadpibe);
  } else if (output == "ParqueaderoBloque3") {
    cantidadbloque3-=1;
    info(parqueaderoBloque3, "parqueadero bloque 3", cantidadbloque3);
    if (cantidadbloque3 == 0) {
      var markred = new L.Icon({
        iconUrl: "image/marcador-rojo.png",
        iconSize: [50, 50],
        iconAnchor: [25, 50],
      });
      blo=L.marker([11.226490299538192, -74.18716140471305], {
        icon: markred,
      }).addTo(map);
      map.removeLayer(parqueaderoBloque3);
    }
    console.log(cantidadbloque3);
  }
}








function librar() {
  var selectElement = document.querySelector("#mostrar");

  var output = selectElement.value;

  if (output == "Parqueaderohemiciclo") {

    if(cantidadhemi[i]==0){
      map.removeLayer(hemi);
       h =L.marker([11.226825, -74.187356]).addTo(map);
        info(h, "parqueadero hemiciclo",cantidadhemi[i+1]);
    }else{
        info(h, "parqueadero hemiciclo",cantidadhemi[i+1]);
    }
  i++;   
    console.log(cantidadhemi[i]);
  }else if (output == "Parqueaderodestapada") {
    if(cantidaddestapada==0){
      map.removeLayer(des);
       d =L.marker([11.224269, -74.187528]).addTo(map);
        info(d, "parqueadero destapada",cantidaddestapada+1);
    }else{
        info(d, "parqueadero destapada",cantidaddestapada+1);
    }
     cantidaddestapada+=1;   
    console.log(cantidaddestapada);
  } else if (output == "ParqueaderoBicis") {
    if(cantidadbicis==0){
      map.removeLayer(b);
       bi =L.marker([11.226088, -74.188035]).addTo(map);
        info(bi, "parqueadero bicicletas",cantidadbicis+1);
    }else{
        info(bi,"parqueadero bicicletas",cantidadbicis+1);
    }
     cantidadbicis+=1;   

    console.log(cantidadbicis);
  } else if (output == "ParqueaderoDocentes") {
    if(cantidaddocentes==0){
      map.removeLayer(doc);
       d =L.marker([11.22639437377533, -74.18541817570676]).addTo(map);
        info(d, "parqueadero docentes",cantidaddocentes+1);
    }else{
        info(d,"parqueadero  docentes",cantidaddocentes+1);
    }
     cantidaddocentes+=1;   
    console.log(cantidaddocentes);
  } else if (output == "Parqueaderopibe") {
    
    if(cantidadpibe==0){
      map.removeLayer(pi);
       pibe =L.marker([11.227119, -74.186611]).addTo(map);
        info(pibe, "parqueadero pibe",cantidadpibe+1);
    }else{
        info(pibe,"parqueadero pibe",cantidadpibe+1);
    }
     cantidadpibe+=1;  

    console.log(cantidadpibe);
  } else if (output == "ParqueaderoBloque3") {
 
    if(cantidadbloque3==0){
      map.removeLayer(blo);
       bloq =L.marker([ 11.226490299538192, -74.18716140471305]).addTo(map);
        info(bloq, "parqueadero bloque 3",cantidadbloque3+1);
    }else{
        info(bloq,"parqueadero bloque 3",cantidadbloque3+1);
    }
     cantidadbloque3+=1;  
    console.log(cantidadbloque3);
  }

}