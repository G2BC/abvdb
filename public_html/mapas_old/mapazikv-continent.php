<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Zika Virus: Data displayed by Continent, <a href ="mapazikv-subcontinent.php">Continent Subdivisions</a> and <a href ="mapazikv.php">Country</a></h2>
   
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
				
		["<strong>Africa</strong>: 96 sequences<br><br>African: 63 sequences <br>Divergent West African Cluster: 13 sequences <br>Genomic region not suitable for genotyping: 20<br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=Africa&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,96],
["<strong>America</strong>: 511 sequences<br><br>African: 3 sequences <br>Asian: 506 sequences <br>Genomic region not suitable for genotyping: 2<br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=America&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,511],
["<strong>Asia</strong>: 211 sequences<br><br>Asian: 207 sequences <br>Genomic region not suitable for genotyping: 4<br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=Asia&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.86166,104.195396,211],
["<strong>Europe</strong>: 21 sequences<br><br>Asian: 19 sequences <br>Genomic region not suitable for genotyping: 2<br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=Europe&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",51.165691,10.451526,21],
["<strong>Oceania</strong>: 31 sequences<br><br>Asian: 28 sequences <br>Genomic region not suitable for genotyping: 3<br><br><strong>Download - </strong>  <a href=\"continentdownload.php?value=Oceania&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,31]

		 
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
			else if (planes[i][3] >= 30 && planes[i][3] < 100)	L.marker([planes[i][1],planes[i][2]],{icon : greenIcon})
				                                                .bindPopup(planes[i][0])
				                                                .addTo(map);
			else if (planes[i][3] >= 100 && planes[i][3] < 200)	L.marker([planes[i][1],planes[i][2]],{icon : yellowIcon})
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
        <div class="panel-body"><img src="Tema/js/img_map/marker-icon-blue.png"style="width:15px;height:22px;"> Less than 30 sequences  <img src="Tema/js/img_map/marker-icon-green.png"style="width:15px;height:22px;"> Between 31 and 100 sequences 
		<img src="Tema/js/img_map/marker-icon-yellow.png"style="width:15px;height:22px;"> Between 101 and 200 sequences  <img src="Tema/js/img_map/marker-icon-red.png"style="width:15px;height:22px;"> More than 200 sequences</div>
        </div>
     </div><!-- #primary -->
      
  
  </div><!-- #content -->
 
<?php require "./Tema/rodape.php"; ?>