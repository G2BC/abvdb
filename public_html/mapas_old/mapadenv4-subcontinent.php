<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Dengue Virus Serotype 4: Data displayed by Continent Subdivisions,<a href ="mapadenv4-continent.php">Continent</a> and <a href ="mapadenv4.php">Country</a></h3>
   
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
				
		 ["<strong>Caribbean</strong>: 149 sequences<br><br>Genotype II: 142<br>Genotype IV-Sylvatic: 1<br>Genomic region not suitable for genotyping: 6<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Caribbean&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,149],
["<strong>Central America</strong>: 41 sequences<br><br>Genotype II: 22<br>Genomic region not suitable for genotyping: 19<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Central America&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,41],
["<strong>Eastern Asia</strong>: 56 sequences<br><br>Genotype I: 7<br>Genotype II: 25<br>Genomic region not suitable for genotyping: 24<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Asia&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.86166,104.195396,56],
["<strong>Melanesia</strong>: 37 sequences<br><br>Genotype II: 37<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Melanesia&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,37],
["<strong>Micronesian Region</strong>: 4 sequences<br><br>Genotype I: 1<br>Genotype II: 3<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Micronesian Region&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,4],
["<strong>Middle Africa</strong>: 1 sequences<br><br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Middle Africa&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,1],
["<strong>Northern America</strong>: 28 sequences<br><br>Genotype II: 28<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Northern America&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.09024,-95.712891,28],
["<strong>Oceania</strong>: 6 sequences<br><br>Genotype I: 1<br>Genotype II: 5<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Oceania&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,6],
["<strong>Polynesia</strong>: 71 sequences<br><br>Genotype II: 71<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Polynesia&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,71],
["<strong>South America</strong>: 724 sequences<br><br>Genotype I: 3<br>Genotype II: 654<br>Genomic region not suitable for genotyping: 67<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South America&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,724],
["<strong>South-Eastern Asia</strong>: 717 sequences<br><br>Genotype I: 437<br>Genotype II: 181<br>Genotype III: 10<br>Genotype IV-Sylvatic: 2<br>Genomic region not suitable for genotyping: 87<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South-Eastern Asia&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,717],
["<strong>Southern Asia</strong>: 67 sequences<br><br>Genotype I: 38<br>Genotype II: 1<br>Genomic region not suitable for genotyping: 28<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Asia&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,67],
["<strong>Southern Europe</strong>: 1 sequences<br><br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Europe&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",40.463669,-3.74922,1],
["<strong>Western Africa</strong>: 3 sequences<br><br>Genomic region not suitable for genotyping: 3<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Africa&virus=DENV-4\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,3]

		 
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