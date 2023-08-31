<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Dengue Virus Serotype 2: Data displayed by Continent Subdivisions,<a href ="mapadenv2-continent.php">Continent</a> and <a href ="mapadenv2.php">Country</a></h3>
   
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
				
	["<strong>Caribbean</strong>: 186 sequences<br><br>Genotype I - American: 9<br>Genotype III - Southern Asian-American: 171<br>Genotype IV - Asian II: 5<br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Caribbean&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,186],
["<strong>Central America</strong>: 486 sequences<br><br>Genotype I - American: 19<br>Genotype II - Cosmopolitan: 1<br>Genotype III - Southern Asian-American: 392<br>Genomic region not suitable for genotyping: 74<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Central America&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,486],
["<strong>Eastern Africa</strong>: 29 sequences<br><br>Genotype II - Cosmopolitan: 19<br>Genomic region not suitable for genotyping: 10<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Africa&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.145,40.489674,29],
["<strong>Eastern Asia</strong>: 910 sequences<br><br>Genotype II - Cosmopolitan: 755<br>Genotype III - Southern Asian-American: 22<br>Genotype IV - Asian II: 6<br>Genotype V - Asian I: 91<br>Genomic region not suitable for genotyping: 28<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Eastern Asia&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.86166,104.195396,910],
["<strong>Melanesia</strong>: 30 sequences<br><br>Genotype I - American: 5<br>Genotype II - Cosmopolitan: 25<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Melanesia&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,30],
["<strong>Micronesian Region</strong>: 5 sequences<br><br>Genotype II - Cosmopolitan: 4<br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Micronesian Region&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,5],
["<strong>Middle Africa</strong>: 9 sequences<br><br>Genotype II - Cosmopolitan: 9<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Middle Africa&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,9],
["<strong>Northern America</strong>: 158 sequences<br><br>Genotype II - Cosmopolitan: 1<br>Genotype III - Southern Asian-American: 152<br>Genotype IV - Asian II: 4<br>Genotype VI - Sylvatic: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Northern America&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.09024,-95.712891,158],
["<strong>Oceania</strong>: 43 sequences<br><br>Genotype II - Cosmopolitan: 28<br>Genotype IV - Asian II: 3<br>Genotype V - Asian I: 5<br>Genotype VI - Sylvatic: 1<br>Genomic region not suitable for genotyping: 6<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Oceania&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,43],
["<strong>Polynesia</strong>: 53 sequences<br><br>Genotype I - American: 21<br>Genotype II - Cosmopolitan: 32<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Polynesia&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,53],
["<strong>South America</strong>: 630 sequences<br><br>Genotype I - American: 20<br>Genotype III - Southern Asian-American: 548<br>Genotype IV - Asian II: 2<br>Genotype V - Asian I: 1<br>Genomic region not suitable for genotyping: 59<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South America&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,630],
["<strong>South-Eastern Asia</strong>: 2595 sequences<br><br>Genotype I - American: 1<br>Genotype II - Cosmopolitan: 1208<br>Genotype III - Southern Asian-American: 123<br>Genotype IV - Asian II: 10<br>Genotype V - Asian I: 952<br>Genotype VI - Sylvatic: 3<br>Genomic region not suitable for genotyping: 298<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=South-Eastern Asia&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,2595],
["<strong>Southern Asia</strong>: 1045 sequences<br><br>Genotype I - American: 21<br>Genotype II - Cosmopolitan: 461<br>Genotype III - Southern Asian-American: 2<br>Genotype V - Asian I: 1<br>Genomic region not suitable for genotyping: 560<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Asia&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,1045],
["<strong>Southern Europe</strong>: 1 sequences<br><br>Genotype III - Southern Asian-American: 1<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Southern Europe&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",40.463669,-3.74922,1],
["<strong>Western Africa</strong>: 34 sequences<br><br>Genotype II - Cosmopolitan: 12<br>Genotype VI - Sylvatic: 16<br>Genomic region not suitable for genotyping: 6<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Africa&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,34],
["<strong>Western Asia</strong>: 41 sequences<br><br>Genotype II - Cosmopolitan: 28<br>Genomic region not suitable for genotyping: 13<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Asia&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,41],
["<strong>Western Europe</strong>: 2 sequences<br><br>Genotype II - Cosmopolitan: 2<br><br><strong>Download - </strong>  <a href=\"subcontinentdownload.php?value=Western Europe&virus=DENV-2\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",50.503887,4.469936,2]

		 
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