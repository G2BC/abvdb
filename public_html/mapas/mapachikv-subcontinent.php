<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Chikungunya Virus: Data displayed by Continent Subdivisions, <a href ="mapachikv-continent.php">Continent</a> and <a href ="mapachikv.php">Country</a></h3>
   
   
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
				
				["<strong>Caribbean</strong>: 115 sequences<br><br>Asian: 113<br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Caribbean&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,115],
["<strong>Central America</strong>: 222 sequences<br><br>Asian: 222<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Central America&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,222],
["<strong>Eastern Africa</strong>: 74 sequences<br><br>East-Central-South-African: 74<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Africa&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.145,40.489674,74],
["<strong>Eastern Asia</strong>: 45 sequences<br><br>Asian: 8<br>East-Central-South-African: 37<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Asia&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.86166,104.195396,45],
["<strong>Melanesia</strong>: 2 sequences<br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Melanesia&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,2],
["<strong>Micronesian Region</strong>: 5 sequences<br><br>Asian: 5<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Micronesian Region&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,5],
["<strong>Middle Africa</strong>: 63 sequences<br><br>East-Central-South-African: 62<br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Middle Africa&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,63],
["<strong>Northern America</strong>: 139 sequences<br><br>Asian: 132<br>East-Central-South-African: 7<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Northern America&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.09024,-95.712891,139],
["<strong>Oceania</strong>: 7 sequences<br><br>East-Central-South-African: 7<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Oceania&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,7],
["<strong>Polynesia</strong>: 9 sequences<br><br>Asian: 9<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Polynesia&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,9],
["<strong>South America</strong>: 331 sequences<br><br>Asian: 126<br>East-Central-South-African: 130<br>Genomic region not suitable for genotyping: 75<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South America&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,331],
["<strong>South-Eastern Asia</strong>: 881 sequences<br><br>Asian: 237<br>East-Central-South-African: 621<br>Genomic region not suitable for genotyping: 23<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South-Eastern Asia&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,881],
["<strong>Southern Africa</strong>: 5 sequences<br><br>East-Central-South-African: 5<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Africa&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-30.559483,22.937506,5],
["<strong>Southern Asia</strong>: 1452 sequences<br><br>Asian: 24<br>East-Central-South-African: 1395<br>West African: 6<br>Genomic region not suitable for genotyping: 27<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Asia&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,1452],
["<strong>Southern Europe</strong>: 53 sequences<br><br>Asian: 3<br>East-Central-South-African: 24<br>Genomic region not suitable for genotyping: 26<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Europe&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",40.463669,-3.74922,53],
["<strong>Western Africa</strong>: 53 sequences<br><br>East-Central-South-African: 5<br>West African: 48<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Africa&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,53],
["<strong>Western Asia</strong>: 9 sequences<br><br>East-Central-South-African: 9<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Asia&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,9],
["<strong>Western Europe</strong>: 3 sequences<br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Europe&virus=CHIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",50.503887,4.469936,3]

				
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
			 if ( planes[i][3]  <30)
			                        L.marker([planes[i][1],planes[i][2]],{icon : blueIcon})
			                     	.bindPopup(planes[i][0])
				                   .addTo(map);
			else if (planes[i][3] >= 30 && planes[i][3] <= 150)	L.marker([planes[i][1],planes[i][2]],{icon : greenIcon})
				                                                .bindPopup(planes[i][0])
				                                                .addTo(map);
			else if (planes[i][3] >= 151 && planes[i][3] <= 300)	L.marker([planes[i][1],planes[i][2]],{icon : yellowIcon})
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