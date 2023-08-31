<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
           
			<h3> Dengue, Zika and Chikungunya Viruses : Data displayed by Continent Subdivisions, <a href ="mapatodos-continent.php">Continent</a> and <a href ="mapatodos.php">Country</a></h3>
   
   
              <div class="entry-content">                  
                  <div id="map" style="width:100%; height: 500px"></div>
				  

                  <script src="./Tema/js/leaflet.js"></script>
                  <link rel="stylesheet" href="./Tema/css/leaflet.css"/>
                  <script src="./Tema/js/leaflet-color-markers.js"></script>
				 <script>
  /*-------------- Declaração de Icones---------------------*/
 
var LeafIcon = L.Icon.extend({
		options: {
			shadowUrl: 'Tema/js/img_map/marker-shadow.png',
			iconSize:     [12, 20],
			shadowSize:   [20, 20],
			iconAnchor:   [12, 20],
			shadowAnchor: [12, 20],
			popupAnchor:  [1, -20]
		}
	});

	var greenIcon = new LeafIcon({iconUrl: 'Tema/js/img_map/marker-icon-green.png'});
    var redIcon = new LeafIcon({iconUrl: 'Tema/js/img_map/marker-icon-red.png'});
	var blueIcon = new LeafIcon({iconUrl: 'Tema/js/img_map/marker-icon-blue.png'});
	var yellowIcon = new LeafIcon({iconUrl: 'Tema/js/img_map/marker-icon-yellow.png'});

/*-------------------------Fim Icones------------------------*/
				var planes = [
				
				["Caribbean<br>695- virus sequences",18.735693,-70.162651,695],
["Central America<br>1467- virus sequences",23.634501,-102.552788,1467],
["Eastern Africa<br>115- virus sequences",9.145,40.489674,115],
["Eastern Asia<br>2135- virus sequences",35.86166,104.195396,2135],
["Eastern Europe<br>2- virus sequences",45.099998,15.2,2],
["Melanesia<br>219- virus sequences",-16.578194,179.414413,219],
["Micronesian Region<br>25- virus sequences",7.425554,150.550812,25],
["Middle Africa<br>79- virus sequences",6.611111,20.939444,79],
["Northern America<br>614- virus sequences",37.09024,-95.712891,614],
["Oceania<br>88- virus sequences",-25.274399,133.775131,88],
["Polynesia<br>311- virus sequences",-17.679743,-149.406845,311],
["South America<br>3224- virus sequences",-14.235004,-51.925282,3224],
["South-Eastern Asia<br>8619- virus sequences",4.210484,101.975769,8619],
["Southern Africa<br>6- virus sequences",-30.559483,22.937506,6],
["Southern Asia<br>3001- virus sequences",20.593683,78.962883,3001],
["Southern Europe<br>48- virus sequences",40.463669,-3.74922,48],
["Western Africa<br>186- virus sequences",14.497401,-14.452362,186],
["Western Asia<br>75- virus sequences",23.885942,45.079163,75],
["Western Europe<br>3- virus sequences",50.503887,4.469936,3]


				
				];   /*    ultima linha da matriz sem , */

      var map = L.map('map').setView([ 13.5136600,  2.1098000], 2);
          mapLink = 
         '<a href="http://openstreetmap.org">OpenStreetMap</a>';
      
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; ' + mapLink,
            maxZoom: 18,
            }).addTo(map);
	

         for (var i = 0; i < planes.length; i++) {
			 if ( planes[i][3]  < 30)
			                        L.marker([planes[i][1],planes[i][2]],{icon : blueIcon})
			                     	.bindPopup(planes[i][0])
				                   .addTo(map);
			else if (planes[i][3] >= 30 && planes[i][3] < 200)	L.marker([planes[i][1],planes[i][2]],{icon : greenIcon})
				                                                .bindPopup(planes[i][0])
				                                                .addTo(map);
			else if (planes[i][3] >= 200 && planes[i][3] < 500)	L.marker([planes[i][1],planes[i][2]],{icon : yellowIcon})
				                                                .bindPopup(planes[i][0])
				                                                .addTo(map);
            else 	L.marker([planes[i][1],planes[i][2]],{icon : redIcon})
				                                                .bindPopup(planes[i][0])
				                                                .addTo(map);																
		}

                       
                       
                  </script>
              </div><!-- .entry-content -->

            </div>

      </div>      
<div class="content-area primary col-md-12"> <!-- Legenda -->
	  <div class="panel panel-default text-center">
        <div class="panel-body"><img src="Tema/js/img_map/marker-icon-blue.png"style="width:15px;height:22px;"> Less than 30 sequences  <img src="Tema/js/img_map/marker-icon-green.png"style="width:15px;height:22px;"> Between 30 and 199 sequences 
		<img src="Tema/js/img_map/marker-icon-yellow.png"style="width:15px;height:22px;"> Between 200 and 499 sequences  <img src="Tema/js/img_map/marker-icon-red.png"style="width:15px;height:22px;"> More than 500 sequences</div>
        </div>
	  </div> 
     </div><!-- #primary -->
      
  
  </div><!-- #content -->
 
<?php require "./Tema/rodape.php"; ?>