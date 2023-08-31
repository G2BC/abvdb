<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Zika Virus: Data displayed by Continent Subdivisions,<a href ="mapazikv-continent.php">Continent</a> and <a href ="mapazikv.php">Country</a></h3>
   
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
				
		["<strong>Caribbean</strong>: 76 sequences<br><br>Asian: 76<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Caribbean&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,76],
["<strong>Central America</strong>: 83 sequences<br><br>Asian: 83<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Central America&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,83],
["<strong>Eastern Africa</strong>: 14 sequences<br><br>African: 13<br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Africa&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.145,40.489674,14],
["<strong>Eastern Asia</strong>: 46 sequences<br><br>Asian: 46<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Asia&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.86166,104.195396,46],
["<strong>Melanesia</strong>: 11 sequences<br><br>Asian: 7<br>Genomic region not suitable for genotyping: 4<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Melanesia&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,11],
["<strong>Micronesian Region</strong>: 1 sequences<br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Micronesian Region&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,1],
["<strong>Middle Africa</strong>: 7 sequences<br><br>African: 7<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Middle Africa&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,7],
["<strong>Northern America</strong>: 63 sequences<br><br>Asian: 63<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Northern America&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.09024,-95.712891,63],
["<strong>Oceania</strong>: 3 sequences<br><br>Asian: 3<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Oceania&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,3],
["<strong>Polynesia</strong>: 34 sequences<br><br>Asian: 31<br>Genomic region not suitable for genotyping: 3<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Polynesia&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,34],
["<strong>South America</strong>: 360 sequences<br><br>African: 2<br>Asian: 356<br>Genomic region not suitable for genotyping: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South America&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,360],
["<strong>South-Eastern Asia</strong>: 292 sequences<br><br>African: 2<br>Asian: 290<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South-Eastern Asia&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,292],
["<strong>Southern Asia</strong>: 3 sequences<br><br>Asian: 3<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Asia&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,3],
["<strong>Southern Europe</strong>: 22 sequences<br><br>Asian: 20<br>Genomic region not suitable for genotyping: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Europe&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",40.463669,-3.74922,22],
["<strong>Western Africa</strong>: 79 sequences<br><br>African: 60<br>Genomic region not suitable for genotyping: 19<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Africa&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,79],
["<strong>Western Asia</strong>: 4 sequences<br><br>Asian: 4<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Asia&virus=ZIKV\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,4]

		 
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