<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Dengue Virus Serotype 3: Data displayed by Continent Subdivisions,<a href ="mapadenv3-continent.php">Continent</a> and <a href ="mapadenv3.php">Country</a></h3>
   
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
				
		 ["<strong>Caribbean</strong>: 108 sequences<br><br>Genotype III: 104<br>Genomic region not suitable for genotyping: 4<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Caribbean&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,108],
["<strong>Central America</strong>: 269 sequences<br><br>Genotype III: 260<br>Genomic region not suitable for genotyping: 9<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Central America&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,269],
["<strong>Eastern Africa</strong>: 18 sequences<br><br>Genotype III: 18<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Africa&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.145,40.489674,18],
["<strong>Eastern Asia</strong>: 862 sequences<br><br>Genotype I: 109<br>Genotype II: 647<br>Genotype III: 61<br>Genotype V: 4<br>Genomic region not suitable for genotyping: 41<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Asia&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.86166,104.195396,862],
["<strong>Melanesia</strong>: 45 sequences<br><br>Genotype I: 45<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Melanesia&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,45],
["<strong>Micronesian Region</strong>: 3 sequences<br><br>Genotype I: 3<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Micronesian Region&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,3],
["<strong>Middle Africa</strong>: 1 sequences<br><br>Genotype III: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Middle Africa&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,1],
["<strong>Northern America</strong>: 102 sequences<br><br>Genotype III: 101<br>Genotype V: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Northern America&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.09024,-95.712891,102],
["<strong>Oceania</strong>: 13 sequences<br><br>Genotype I: 8<br>Genotype II: 2<br>Genotype III: 1<br>Genomic region not suitable for genotyping: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Oceania&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,13],
["<strong>Polynesia</strong>: 55 sequences<br><br>Genotype I: 48<br>Genotype III: 7<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Polynesia&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,55],
["<strong>South America</strong>: 819 sequences<br><br>Genotype I: 1<br>Genotype II: 1<br>Genotype III: 585<br>Genotype V: 26<br>Genomic region not suitable for genotyping: 206<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South America&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,819],
["<strong>South-Eastern Asia</strong>: 1329 sequences<br><br>Genotype I: 349<br>Genotype II: 674<br>Genotype III: 205<br>Genotype V: 18<br>Genomic region not suitable for genotyping: 82<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South-Eastern Asia&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,1329],
["<strong>Southern Africa</strong>: 1 sequences<br><br>Genotype III: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Africa&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-30.559483,22.937506,1],
["<strong>Southern Asia</strong>: 803 sequences<br><br>Genotype I: 13<br>Genotype II: 34<br>Genotype III: 466<br>Genotype V: 1<br>Genomic region not suitable for genotyping: 289<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Asia&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,803],
["<strong>Southern Europe</strong>: 1 sequences<br><br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Europe&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",40.463669,-3.74922,1],
["<strong>Western Africa</strong>: 18 sequences<br><br>Genotype III: 18<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Africa&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,18],
["<strong>Western Asia</strong>: 8 sequences<br><br>Genotype III: 8<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Asia&virus=DENV-3\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,8]

		 
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