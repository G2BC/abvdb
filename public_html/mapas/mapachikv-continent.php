<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Chikungunya Virus: Data displayed by Continent, <a href ="mapachikv-subcontinent.php">Continent Subdivisions</a> and <a href ="mapachikv.php">Country</a></h3>
   
   
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
				
				["<strong>Africa</strong>: 195 sequences<br><br>East-Central-South-African: 146 sequences <br>West African: 48 sequences <br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=Africa&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,195],
["<strong>America</strong>: 807 sequences<br><br>Asian and Caribbean: 593 sequences <br>East-Central-South-African: 139 sequences <br>Genomic region not suitable for genotyping: 75<br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=America&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,807],
["<strong>Asia</strong>: 2394 sequences<br><br>Asian and Caribbean: 276 sequences <br>East-Central-South-African: 2062 sequences <br>West African: 6 sequences <br>Genomic region not suitable for genotyping: 50<br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=Asia&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.86166,104.195396,2394],
["<strong>Europe</strong>: 56 sequences<br><br>Asian and Caribbean: 3 sequences <br>East-Central-South-African: 27 sequences <br>Genomic region not suitable for genotyping: 26<br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=Europe&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",51.165691,10.451526,56],
["<strong>Oceania</strong>: 16 sequences<br><br>Asian and Caribbean: 9 sequences <br>East-Central-South-African: 7 sequences <br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=Oceania&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,16]

				
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
			else if (planes[i][3] >= 30 && planes[i][3] <= 150)	L.marker([planes[i][1],planes[i][2]],{icon : greenIcon})
				                                                .bindPopup(planes[i][0])
				                                                .addTo(map);
			else if (planes[i][3] >= 151 && planes[i][3] < 300)	L.marker([planes[i][1],planes[i][2]],{icon : yellowIcon})
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
        <div class="panel-body"><img src="Tema/js/img_map/marker-icon-blue.png"style="width:15px;height:22px;"> Less than 30 sequences  <img src="Tema/js/img_map/marker-icon-green.png"style="width:15px;height:22px;"> Between 30 and 150 sequences 
		<img src="Tema/js/img_map/marker-icon-yellow.png"style="width:15px;height:22px;"> Between 151 and 300 sequences  <img src="Tema/js/img_map/marker-icon-red.png"style="width:15px;height:22px;"> More than 300 sequences</div>
        </div>
	  </div> 
     </div><!-- #primary -->
      
  
  </div><!-- #content -->
 
<?php require "./Tema/rodape.php"; ?>