<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Dengue Virus: Data displayed by Continent Subdivisions, <a href ="mapdenvgeral-continent.php">Continent</a> and <a href ="mapdenvgeral.php">Country</a></h2>
   
   
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
				
				["Caribbean<br>Dengue Serotype 1: 114 sequences<br>Dengue Serotype 2: 186 sequences<br>Dengue Serotype 3: 108 sequences<br>Dengue Serotype 4: 156 sequences<br>Total number of sequences:564",18.735693,-70.162651,564],
["Central America<br>Dengue Serotype 1: 520 sequences<br>Dengue Serotype 2: 486 sequences<br>Dengue Serotype 3: 269 sequences<br>Dengue Serotype 4: 41 sequences<br>Total number of sequences:1316",23.634501,-102.552788,1316],
["Eastern Africa<br>Dengue Serotype 1: 14 sequences<br>Dengue Serotype 2: 29 sequences<br>Dengue Serotype 3: 18 sequences<br>Total number of sequences:61",9.145,40.489674,61],
["Eastern Asia<br>Dengue Serotype 1: 1362 sequences<br>Dengue Serotype 2: 910 sequences<br>Dengue Serotype 3: 862 sequences<br>Dengue Serotype 4: 162 sequences<br>Total number of sequences:3296",35.86166,104.195396,3296],
["Eastern Europe<br>Dengue Serotype 1: 2 sequences<br>Total number of sequences:2",45.099998,15.2,2],
["Melanesia<br>Dengue Serotype 1: 111 sequences<br>Dengue Serotype 2: 30 sequences<br>Dengue Serotype 3: 45 sequences<br>Dengue Serotype 4: 37 sequences<br>Total number of sequences:223",-16.578194,179.414413,223],
["Micronesian Region<br>Dengue Serotype 1: 11 sequences<br>Dengue Serotype 2: 5 sequences<br>Dengue Serotype 3: 3 sequences<br>Dengue Serotype 4: 4 sequences<br>Total number of sequences:23",7.425554,150.550812,23],
["Middle Africa<br>Dengue Serotype 1: 37 sequences<br>Dengue Serotype 2: 9 sequences<br>Dengue Serotype 3: 1 sequences<br>Dengue Serotype 4: 1 sequences<br>Total number of sequences:48",6.611111,20.939444,48],
["Northern America<br>Dengue Serotype 1: 117 sequences<br>Dengue Serotype 2: 158 sequences<br>Dengue Serotype 3: 102 sequences<br>Dengue Serotype 4: 28 sequences<br>Total number of sequences:405",37.09024,-95.712891,405],
["Oceania<br>Dengue Serotype 1: 19 sequences<br>Dengue Serotype 2: 43 sequences<br>Dengue Serotype 3: 13 sequences<br>Dengue Serotype 4: 6 sequences<br>Total number of sequences:81",-25.274399,133.775131,81],
["Polynesia<br>Dengue Serotype 1: 178 sequences<br>Dengue Serotype 2: 53 sequences<br>Dengue Serotype 3: 55 sequences<br>Dengue Serotype 4: 72 sequences<br>Total number of sequences:358",-17.679743,-149.406845,358],
["South America<br>Dengue Serotype 1: 772 sequences<br>Dengue Serotype 2: 630 sequences<br>Dengue Serotype 3: 819 sequences<br>Dengue Serotype 4: 739 sequences<br>Total number of sequences:2960",-14.235004,-51.925282,2960],
["South-Eastern Asia<br>Dengue Serotype 1: 5000 sequences<br>Dengue Serotype 2: 2595 sequences<br>Dengue Serotype 3: 1329 sequences<br>Dengue Serotype 4: 837 sequences<br>Total number of sequences:9761",4.210484,101.975769,9761],
["Southern Africa<br>Dengue Serotype 3: 1 sequences<br>Total number of sequences:1",-30.559483,22.937506,1],
["Southern Asia<br>Dengue Serotype 1: 656 sequences<br>Dengue Serotype 2: 1045 sequences<br>Dengue Serotype 3: 803 sequences<br>Dengue Serotype 4: 175 sequences<br>Total number of sequences:2679",20.593683,78.962883,2679],
["Southern Europe<br>Dengue Serotype 1: 5 sequences<br>Dengue Serotype 2: 1 sequences<br>Dengue Serotype 3: 1 sequences<br>Dengue Serotype 4: 1 sequences<br>Total number of sequences:8",40.463669,-3.74922,8],
["Western Africa<br>Dengue Serotype 1: 8 sequences<br>Dengue Serotype 2: 34 sequences<br>Dengue Serotype 3: 18 sequences<br>Dengue Serotype 4: 3 sequences<br>Total number of sequences:63",14.497401,-14.452362,63],
["Western Asia<br>Dengue Serotype 1: 34 sequences<br>Dengue Serotype 2: 41 sequences<br>Dengue Serotype 3: 8 sequences<br>Total number of sequences:83",23.885942,45.079163,83],
["Western Europe<br>Dengue Serotype 1: 2 sequences<br>Dengue Serotype 2: 2 sequences<br>Total number of sequences:4",50.503887,4.469936,4]

				
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