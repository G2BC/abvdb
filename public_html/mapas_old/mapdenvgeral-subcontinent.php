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
				
				["Caribbean<br>Dengue Serotype 1: 107 sequences<br>Dengue Serotype 2: 167 sequences<br>Dengue Serotype 3: 96 sequences<br>Dengue Serotype 4: 149 sequences<br>Total number of sequences:519",18.735693,-70.162651,519],
["Central America<br>Dengue Serotype 1: 390 sequences<br>Dengue Serotype 2: 482 sequences<br>Dengue Serotype 3: 265 sequences<br>Dengue Serotype 4: 41 sequences<br>Total number of sequences:1178",23.634501,-102.552788,1178],
["Eastern Africa<br>Dengue Serotype 1: 14 sequences<br>Dengue Serotype 2: 15 sequences<br>Dengue Serotype 3: 18 sequences<br>Total number of sequences:47",9.145,40.489674,47],
["Eastern Asia<br>Dengue Serotype 1: 856 sequences<br>Dengue Serotype 2: 422 sequences<br>Dengue Serotype 3: 724 sequences<br>Dengue Serotype 4: 56 sequences<br>Total number of sequences:2058",35.86166,104.195396,2058],
["Eastern Europe<br>Dengue Serotype 1: 2 sequences<br>Total number of sequences:2",45.099998,15.2,2],
["Melanesia<br>Dengue Serotype 1: 110 sequences<br>Dengue Serotype 2: 24 sequences<br>Dengue Serotype 3: 36 sequences<br>Dengue Serotype 4: 37 sequences<br>Total number of sequences:207",-16.578194,179.414413,207],
["Micronesian Region<br>Dengue Serotype 1: 11 sequences<br>Dengue Serotype 2: 5 sequences<br>Dengue Serotype 4: 4 sequences<br>Total number of sequences:20",7.425554,150.550812,20],
["Middle Africa<br>Dengue Serotype 1: 36 sequences<br>Dengue Serotype 2: 8 sequences<br>Dengue Serotype 3: 1 sequences<br>Dengue Serotype 4: 1 sequences<br>Total number of sequences:46",6.611111,20.939444,46],
["Northern America<br>Dengue Serotype 1: 88 sequences<br>Dengue Serotype 2: 158 sequences<br>Dengue Serotype 3: 102 sequences<br>Dengue Serotype 4: 28 sequences<br>Total number of sequences:376",37.09024,-95.712891,376],
["Oceania<br>Dengue Serotype 1: 17 sequences<br>Dengue Serotype 2: 43 sequences<br>Dengue Serotype 3: 13 sequences<br>Dengue Serotype 4: 6 sequences<br>Total number of sequences:79",-25.274399,133.775131,79],
["Polynesia<br>Dengue Serotype 1: 115 sequences<br>Dengue Serotype 2: 40 sequences<br>Dengue Serotype 3: 51 sequences<br>Dengue Serotype 4: 71 sequences<br>Total number of sequences:277",-17.679743,-149.406845,277],
["South America<br>Dengue Serotype 1: 662 sequences<br>Dengue Serotype 2: 576 sequences<br>Dengue Serotype 3: 805 sequences<br>Dengue Serotype 4: 724 sequences<br>Total number of sequences:2767",-14.235004,-51.925282,2767],
["South-Eastern Asia<br>Dengue Serotype 1: 3328 sequences<br>Dengue Serotype 2: 2473 sequences<br>Dengue Serotype 3: 1225 sequences<br>Dengue Serotype 4: 717 sequences<br>Total number of sequences:7743",4.210484,101.975769,7743],
["Southern Africa<br>Dengue Serotype 3: 1 sequences<br>Total number of sequences:1",-30.559483,22.937506,1],
["Southern Asia<br>Dengue Serotype 1: 422 sequences<br>Dengue Serotype 2: 620 sequences<br>Dengue Serotype 3: 584 sequences<br>Dengue Serotype 4: 67 sequences<br>Total number of sequences:1693",20.593683,78.962883,1693],
["Southern Europe<br>Dengue Serotype 1: 5 sequences<br>Dengue Serotype 3: 1 sequences<br>Dengue Serotype 4: 1 sequences<br>Total number of sequences:7",40.463669,-3.74922,7],
["Western Africa<br>Dengue Serotype 1: 7 sequences<br>Dengue Serotype 2: 32 sequences<br>Dengue Serotype 3: 13 sequences<br>Dengue Serotype 4: 3 sequences<br>Total number of sequences:55",14.497401,-14.452362,55],
["Western Asia<br>Dengue Serotype 1: 33 sequences<br>Dengue Serotype 2: 22 sequences<br>Dengue Serotype 3: 7 sequences<br>Total number of sequences:62",23.885942,45.079163,62]

				
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