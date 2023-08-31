<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Dengue Virus Serotype 1: Data displayed by Continent Subdivisions,<a href ="mapadenv1-continent.php">Continent</a> and <a href ="mapadenv1.php">Country</a></h3>
   
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
				
		["<strong>Caribbean</strong>: 107 sequences<br><br>Genotype IV: 1<br>Genotype V: 103<br>Genomic region not suitable for genotyping: 3<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Caribbean&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,107],
["<strong>Central America</strong>: 390 sequences<br><br>Genotype IV: 1<br>Genotype V: 382<br>Genomic region not suitable for genotyping: 7<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Central America&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,390],
["<strong>Eastern Africa</strong>: 14 sequences<br><br>Genotype I: 1<br>Genotype III: 1<br>Genotype IV: 10<br>Genotype V: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Africa&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.145,40.489674,14],
["<strong>Eastern Asia</strong>: 856 sequences<br><br>Genotype I: 493<br>Genotype III: 250<br>Genotype IV: 70<br>Genotype V: 3<br>Genomic region not suitable for genotyping: 40<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Asia&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.86166,104.195396,856],
["<strong>Eastern Europe</strong>: 2 sequences<br><br>Genomic region not suitable for genotyping: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Europe&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",45.099998,15.2,2],
["<strong>Melanesia</strong>: 110 sequences<br><br>Genotype I: 32<br>Genotype IV: 70<br>Genomic region not suitable for genotyping: 8<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Melanesia&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,110],
["<strong>Micronesian Region</strong>: 11 sequences<br><br>Genotype I: 1<br>Genotype IV: 10<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Micronesian Region&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,11],
["<strong>Middle Africa</strong>: 36 sequences<br><br>Genotype III: 14<br>Genotype V: 2<br>Genomic region not suitable for genotyping: 20<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Middle Africa&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,36],
["<strong>Northern America</strong>: 88 sequences<br><br>Genotype I: 6<br>Genotype IV: 20<br>Genotype V: 60<br>Genomic region not suitable for genotyping: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Northern America&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.09024,-95.712891,88],
["<strong>Oceania</strong>: 17 sequences<br><br>Genotype I: 2<br>Genotype IV: 15<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Oceania&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,17],
["<strong>Polynesia</strong>: 115 sequences<br><br>Genotype I: 7<br>Genotype IV: 105<br>Genotype V: 1<br>Genomic region not suitable for genotyping: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Polynesia&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,115],
["<strong>South America</strong>: 662 sequences<br><br>Genotype IV: 1<br>Genotype V: 563<br>Genomic region not suitable for genotyping: 98<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South America&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,662],
["<strong>South-Eastern Asia</strong>: 3328 sequences<br><br>Genotype I: 2846<br>Genotype II: 7 <br>Genotype III: 67<br>Genotype IV: 255<br>Genotype V: 1<br>Genomic region not suitable for genotyping: 152<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South-Eastern Asia&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,3328],
["<strong>Southern Asia</strong>: 422 sequences<br><br>Genotype I: 30<br>Genotype III: 108<br>Genotype IV: 2<br>Genotype V: 13<br>Genomic region not suitable for genotyping: 269<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Asia&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,422],
["<strong>Southern Europe</strong>: 5 sequences<br><br>Genotype V: 1<br>Genomic region not suitable for genotyping: 4<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Europe&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",40.463669,-3.74922,5],
["<strong>Western Africa</strong>: 7 sequences<br><br>Genotype I: 5<br>Genotype V: 1<br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Africa&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,7],
["<strong>Western Asia</strong>: 33 sequences<br><br>Genotype I: 7<br>Genotype III: 3<br>Genomic region not suitable for genotyping: 23<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Asia&virus=DENV-1\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,33]

		
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