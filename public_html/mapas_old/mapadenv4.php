<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Dengue Virus Serotype 4: Data displayed by Country, <a href ="mapadenv4-subcontinent.php">Continent Subdivisions</a> and <a href ="mapadenv4-continent.php">Continent</a></h3>
   
   
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
				
				["<strong>Angola</strong>:  1 sequences<br><br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Angola\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.202692,17.873886,1],
["<strong>Senegal</strong>:  1 sequences<br><br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Senegal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,1],
["<strong>Cape Verde</strong>:  2 sequences<br><br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Cape Verde\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.002083,-24.013197,2],
["<strong>Guadeloupe</strong>:  1 sequences<br><br>Genotype II: 1 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Guadeloupe\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.995972,-62.067642,1],
["<strong>Saint Barthelemy</strong>:  1 sequences<br><br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Saint Barthelemy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.896179,-62.849781,1],
["<strong>Bahamas</strong>:  3 sequences<br><br>Genotype II: 3 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Bahamas\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",25.034281,-77.396278,3],
["<strong>Barbados</strong>:  3 sequences<br><br>Genotype II: 3 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Barbados\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.193887,-59.543198,3],
["<strong>Haiti</strong>:  3 sequences<br><br>Genotype II: 3 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Haiti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.971188,-72.285217,3],
["<strong>Martinique</strong>:  5 sequences<br><br>Genotype II: 4 <br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Martinique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.641528,-61.024174,5],
["<strong>Montserrat</strong>:  3 sequences<br><br>Genotype II: 3 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Montserrat\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.742498,-62.187366,3],
["<strong>Dominica</strong>:  2 sequences<br><br>Genotype II: 2 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Dominica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.414999,-61.370975,2],
["<strong>Puerto Rico</strong>:  117 sequences<br><br>Genotype II: 113 <br>Genotype IV-Sylvatic: 1<br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Puerto Rico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220833,-66.590149,117],
["<strong>Dominican Republic</strong>:  2 sequences<br><br>Genotype II: 1 <br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Dominican Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,2],
["<strong>Trinidad and Tobago</strong>:  7 sequences<br><br>Genotype II: 7 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Trinidad and Tobago\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",10.691803,-61.222504,7],
["<strong>Jamaica</strong>:  2 sequences<br><br>Genotype II: 2 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Jamaica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.109581,-77.297508,2],
["<strong>Mexico</strong>:  25 sequences<br><br>Genotype II: 14 <br>Genomic region not suitable for genotyping 11<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Mexico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,25],
["<strong>El Salvador</strong>:  3 sequences<br><br>Genotype II: 3 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=El Salvador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.794185,-88.896530,3],
["<strong>Honduras</strong>:  2 sequences<br><br>Genotype II: 2 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Honduras\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.199999,-86.241905,2],
["<strong>Costa Rica</strong>:  11 sequences<br><br>Genotype II: 3 <br>Genomic region not suitable for genotyping 8<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Costa Rica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.748917,-83.753426,11],
["<strong>USA</strong>:  28 sequences<br><br>Genotype II: 28 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=USA\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.090240,-95.712891,28],
["<strong>Peru</strong>:  27 sequences<br><br>Genotype II: 26 <br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Peru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.189967,-75.015152,27],
["<strong>Brazil</strong>:  581 sequences<br><br>Genotype I: 3<br>Genotype II: 521 <br>Genomic region not suitable for genotyping 57<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Brazil\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,581],
["<strong>Chile</strong>:  4 sequences<br><br>Genomic region not suitable for genotyping 4<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Chile\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-35.675148,-71.542969,4],
["<strong>Colombia</strong>:  24 sequences<br><br>Genotype II: 24 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Colombia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.570868,-74.297333,24],
["<strong>Venezuela</strong>:  63 sequences<br><br>Genotype II: 60 <br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Venezuela\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.423750,-66.589729,63],
["<strong>Ecuador</strong>:  8 sequences<br><br>Genotype II: 8 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Ecuador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-1.831239,-78.183403,8],
["<strong>French Guiana</strong>:  10 sequences<br><br>Genotype II: 8 <br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=French Guiana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.933889,-53.125782,10],
["<strong>Suriname</strong>:  7 sequences<br><br>Genotype II: 7 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Suriname\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.919305,-56.027782,7],
["<strong>Japan</strong>:  2 sequences<br><br>Genotype II: 1 <br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Japan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",36.204823,138.252930,2],
["<strong>China</strong>:  51 sequences<br><br>Genotype I: 7<br>Genotype II: 21 <br>Genomic region not suitable for genotyping 23<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=China\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.861660,104.195396,51],
["<strong>Taiwan</strong>:  3 sequences<br><br>Genotype II: 3 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Taiwan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.697809,120.960518,3],
["<strong>Solomon Islands</strong>:  1 sequences<br><br>Genotype II: 1 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Solomon Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.645710,160.156189,1],
["<strong>Fiji</strong>:  1 sequences<br><br>Genotype II: 1 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Fiji\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,1],
["<strong>New Caledonia</strong>:  35 sequences<br><br>Genotype II: 35 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=New Caledonia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.904305,165.618042,35],
["<strong>Micronesia</strong>:  2 sequences<br><br>Genotype I: 1<br>Genotype II: 1 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Micronesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,2],
["<strong>Marshall Island</strong>:  2 sequences<br><br>Genotype II: 2 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Marshall Island\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.089710,171.380264,2],
["<strong>India</strong>:  50 sequences<br><br>Genotype I: 30<br>Genomic region not suitable for genotyping 20<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=India\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,50],
["<strong>Pakistan</strong>:  7 sequences<br><br>Genotype I: 6<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Pakistan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",30.375320,69.345116,7],
["<strong>Sri Lanka</strong>:  10 sequences<br><br>Genotype I: 2<br>Genotype II: 1 <br>Genomic region not suitable for genotyping 7<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Sri Lanka\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.873054,80.771790,10],
["<strong>Malaysia</strong>:  33 sequences<br><br>Genotype I: 1<br>Genotype II: 23 <br>Genotype IV-Sylvatic: 2<br>Genomic region not suitable for genotyping 7<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Malaysia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,33],
["<strong>Indonesia</strong>:  76 sequences<br><br>Genotype II: 72 <br>Genomic region not suitable for genotyping 4<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Indonesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.789275,113.921326,76],
["<strong>Philippines</strong>:  46 sequences<br><br>Genotype I: 16<br>Genotype II: 28 <br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Philippines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.879721,121.774017,46],
["<strong>Singapore</strong>:  57 sequences<br><br>Genotype I: 4<br>Genotype II: 43 <br>Genomic region not suitable for genotyping 10<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Singapore\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.352083,103.819839,57],
["<strong>Thailand</strong>:  332 sequences<br><br>Genotype I: 267<br>Genotype II: 10 <br>Genotype III: 10<br>Genomic region not suitable for genotyping 45<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Thailand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.870032,100.992538,332],
["<strong>Viet Nam</strong>:  129 sequences<br><br>Genotype I: 112<br>Genomic region not suitable for genotyping 17<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Viet Nam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.058324,108.277199,129],
["<strong>Myanmar</strong>:  18 sequences<br><br>Genotype I: 16<br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Myanmar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.913965,95.956223,18],
["<strong>East Timor</strong>:  5 sequences<br><br>Genotype II: 5 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=East Timor\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-8.874217,125.727539,5],
["<strong>Cambodia</strong>:  21 sequences<br><br>Genotype I: 21<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Cambodia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.565679,104.990959,21],
["<strong>Italy</strong>:  1 sequences<br><br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Italy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",41.871941,12.567380,1],
["<strong>Australia</strong>:  6 sequences<br><br>Genotype I: 1<br>Genotype II: 5 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Australia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,6],
["<strong>Wallis and Futuna</strong>:  2 sequences<br><br>Genotype II: 2 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Wallis and Futuna\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.768752,-177.156097,2],
["<strong>Cook Islands</strong>:  1 sequences<br><br>Genotype II: 1 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Cook Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.236736,-159.777664,1],
["<strong>Samoa</strong>:  1 sequences<br><br>Genotype II: 1 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=Samoa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.759029,-172.104630,1],
["<strong>French Polynesia</strong>:  67 sequences<br><br>Genotype II: 67 <br><br><strong>Download - </strong>  <a href=\"denv4countrydownload.php?value=French Polynesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,67]

				

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