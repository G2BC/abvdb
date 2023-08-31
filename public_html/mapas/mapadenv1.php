<?php require "./Tema/cabecalho.php"; ?>
 
	

  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Dengue Virus Serotype 1: Data displayed by Country, <a href ="mapadenv1-subcontinent.php">Continent Subdivisions</a> and <a href ="mapadenv1-continent.php">Continent</a></h3>
   
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
		
		["<strong>Seychelles</strong>: 3 sequences <br><br>Genotype IV: 3<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Seychelles\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-4.679574,55.491978,3],
["<strong>Reunion</strong>: 9 sequences <br><br>Genotype IV: 7<br>Genotype V: 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Reunion\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.115141,55.536385,9],
["<strong>Comoros</strong>: 1 sequences <br><br>Genotype III: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Comoros\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.875001,43.872219,1],
["<strong>Eritrea</strong>: 1 sequences <br><br>Genotype I: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Eritrea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.179384,39.782333,1],
["<strong>Gabon</strong>: 3 sequences <br><br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Gabon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.803689,11.609444,3],
["<strong>Angola</strong>: 34 sequences <br><br>Genotype III: 14<br>Genotype V: 2<br>Genomic region not suitable for genotyping 18<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Angola\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.202692,17.873886,34],
["<strong>Mali</strong>: 5 sequences <br><br>Genotype I: 5<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Mali\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.570692,-3.996166,5],
["<strong>Guinea</strong>: 1 sequences <br><br>Genotype I: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.537950,-13.677290,1],
["<strong>Nigeria</strong>: 2 sequences <br><br>Genotype V: 1<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Nigeria\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.081999,8.675277,2],
["<strong>Saint Barthelemy</strong>: 1 sequences <br><br>Genotype V: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Saint Barthelemy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.896179,-62.849781,1],
["<strong>Bahamas</strong>: 1 sequences <br><br>Genotype V: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Bahamas\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",25.034281,-77.396278,1],
["<strong>Barbados</strong>: 5 sequences <br><br>Genotype V: 5<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Barbados\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.193887,-59.543198,5],
["<strong>Aruba</strong>: 3 sequences <br><br>Genotype IV: 1<br>Genotype V: 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Aruba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.521110,-69.968338,3],
["<strong>Grenada</strong>: 10 sequences <br><br>Genotype V: 10<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Grenada\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.262776,-61.604172,10],
["<strong>Haiti</strong>: 9 sequences <br><br>Genotype V: 8<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Haiti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.971188,-72.285217,9],
["<strong>Martinique</strong>: 4 sequences <br><br>Genotype V: 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Martinique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.641528,-61.024174,4],
["<strong>Dominica</strong>: 3 sequences <br><br>Genotype V: 3<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Dominica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.414999,-61.370975,3],
["<strong>Puerto Rico</strong>: 69 sequences <br><br>Genotype V: 68<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Puerto Rico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220833,-66.590149,69],
["<strong>Dominican Republic</strong>: 2 sequences <br><br>Genotype V: 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Dominican Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,2],
["<strong>Trinidad and Tobago</strong>: 4 sequences <br><br>Genotype V: 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Trinidad and Tobago\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",10.691803,-61.222504,4],
["<strong>Jamaica</strong>: 3 sequences <br><br>Genotype V: 2<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Jamaica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.109581,-77.297508,3],
["<strong>Mexico</strong>: 315 sequences <br><br>Genotype I: 1<br>Genotype IV: 1<br>Genotype V: 305<br>Genomic region not suitable for genotyping 8<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Mexico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,315],
["<strong>Belize</strong>: 4 sequences <br><br>Genotype V: 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Belize\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.189877,-88.497650,4],
["<strong>El Salvador</strong>: 4 sequences <br><br>Genotype V: 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=El Salvador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.794185,-88.896530,4],
["<strong>Honduras</strong>: 4 sequences <br><br>Genotype V: 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Honduras\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.199999,-86.241905,4],
["<strong>Nicaragua</strong>: 73 sequences <br><br>Genotype V: 73<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Nicaragua\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.865416,-85.207230,73],
["<strong>Costa Rica</strong>: 27 sequences <br><br>Genotype V: 25<br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Costa Rica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.748917,-83.753426,27],
["<strong>Panama</strong>: 93 sequences <br><br>Genotype V: 93<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Panama\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.537981,-80.782127,93],
["<strong>USA</strong>: 117 sequences <br><br>Genotype I: 27<br>Genotype IV: 28<br>Genotype V: 60<br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=USA\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.090240,-95.712891,117],
["<strong>Peru</strong>: 10 sequences <br><br>Genotype V: 5<br>Genomic region not suitable for genotyping 5<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Peru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.189967,-75.015152,10],
["<strong>Argentina</strong>: 135 sequences <br><br>Genotype V: 130<br>Genomic region not suitable for genotyping 5<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Argentina\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-38.416096,-63.616673,135],
["<strong>Brazil</strong>: 346 sequences <br><br>Genotype V: 266<br>Genomic region not suitable for genotyping 80<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Brazil\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,346],
["<strong>Chile</strong>: 2 sequences <br><br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Chile\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-35.675148,-71.542969,2],
["<strong>Chile: Easter Island</strong>: 5 sequences <br><br>Genotype IV: 1<br>Genomic region not suitable for genotyping 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Chile: Easter Island\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-27.112989,-109.349579,5],
["<strong>Colombia</strong>: 93 sequences <br><br>Genotype V: 90<br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Colombia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.570868,-74.297333,93],
["<strong>Venezuela</strong>: 90 sequences <br><br>Genotype V: 90<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Venezuela\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.423750,-66.589729,90],
["<strong>Guyana</strong>: 1 sequences <br><br>Genotype V: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Guyana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.860416,-58.930180,1],
["<strong>Ecuador</strong>: 5 sequences <br><br>Genotype V: 5<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Ecuador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-1.831239,-78.183403,5],
["<strong>French Guiana</strong>: 5 sequences <br><br>Genotype V: 3<br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=French Guiana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.933889,-53.125782,5],
["<strong>Paraguay</strong>: 23 sequences <br><br>Genotype V: 18<br>Genomic region not suitable for genotyping 5<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Paraguay\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-23.442503,-58.443832,23],
["<strong>Suriname</strong>: 1 sequences <br><br>Genotype V: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Suriname\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.919305,-56.027782,1],
["<strong>Uruguay</strong>: 56 sequences <br><br>Genotype V: 28<br>Genomic region not suitable for genotyping 28<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Uruguay\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-32.522778,-55.765835,56],
["<strong>Japan</strong>: 34 sequences <br><br>Genotype I: 30<br>Genotype IV: 1<br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Japan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",36.204823,138.252930,34],
["<strong>South Korea</strong>: 15 sequences <br><br>Genotype I: 9<br>Genotype III: 2<br>Genotype IV: 3<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=South Korea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.907757,127.766922,15],
["<strong>China</strong>: 957 sequences <br><br>Genotype I: 561<br>Genotype III: 301<br>Genotype IV: 66<br>Genotype V: 2<br>Genomic region not suitable for genotyping 27<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=China\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.861660,104.195396,957],
["<strong>Taiwan</strong>: 356 sequences <br><br>Genotype I: 256<br>Genotype III: 33<br>Genotype IV: 53<br>Genotype V: 2<br>Genomic region not suitable for genotyping 12<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Taiwan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.697809,120.960518,356],
["<strong>Solomon Islands</strong>: 3 sequences <br><br>Genotype IV: 3<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Solomon Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.645710,160.156189,3],
["<strong>Vanuatu</strong>: 1 sequences <br><br>Genotype IV: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Vanuatu\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-15.376706,166.959152,1],
["<strong>Fiji</strong>: 11 sequences <br><br>Genotype IV: 11<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Fiji\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,11],
["<strong>New Caledonia</strong>: 96 sequences <br><br>Genotype I: 33<br>Genotype IV: 55<br>Genomic region not suitable for genotyping 8<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=New Caledonia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.904305,165.618042,96],
["<strong>Nauru</strong>: 1 sequences <br><br>Genotype IV: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Nauru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.522778,166.931503,1],
["<strong>Palau</strong>: 2 sequences <br><br>Genotype IV: 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Palau\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.514980,134.582520,2],
["<strong>Kiribati</strong>: 2 sequences <br><br>Genotype IV: 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Kiribati\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-3.370417,-168.734039,2],
["<strong>Micronesia</strong>: 5 sequences <br><br>Genotype I: 1<br>Genotype IV: 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Micronesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,5],
["<strong>Marshall Island</strong>: 1 sequences <br><br>Genotype IV: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Marshall Island\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.089710,171.380264,1],
["<strong>India</strong>: 544 sequences <br><br>Genotype I: 88<br>Genotype III: 89<br>Genotype V: 10<br>Genomic region not suitable for genotyping 357<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=India\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,544],
["<strong>Pakistan</strong>: 14 sequences <br><br>Genotype III: 6<br>Genotype V: 3<br>Genomic region not suitable for genotyping 5<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Pakistan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",30.375320,69.345116,14],
["<strong>Sri Lanka</strong>: 33 sequences <br><br>Genotype I: 24<br>Genotype III: 6<br>Genotype IV: 2<br>Genotype V: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Sri Lanka\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.873054,80.771790,33],
["<strong>Iran</strong>: 3 sequences <br><br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Iran\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",32.427910,53.688046,3],
["<strong>Bangladesh</strong>: 13 sequences <br><br>Genotype III: 11<br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Bangladesh\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.684994,90.356331,13],
["<strong>Maldives</strong>: 5 sequences <br><br>Genotype I: 1<br>Genomic region not suitable for genotyping 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Maldives\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.202778,73.220680,5],
["<strong>Bhutan</strong>: 33 sequences <br><br>Genotype III: 33<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Bhutan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",27.514162,90.433601,33],
["<strong>Nepal</strong>: 11 sequences <br><br>Genomic region not suitable for genotyping 11<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Nepal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",28.394857,84.124008,11],
["<strong>Malaysia</strong>: 257 sequences <br><br>Genotype I: 160<br>Genotype III: 21<br>Genotype IV: 5<br>Genomic region not suitable for genotyping 71<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Malaysia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,257],
["<strong>Indonesia</strong>: 356 sequences <br><br>Genotype I: 230<br>Genotype II: 2<br>Genotype III: 1<br>Genotype IV: 119<br>Genomic region not suitable for genotyping 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Indonesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.789275,113.921326,356],
["<strong>Philippines</strong>: 123 sequences <br><br>Genotype IV: 121<br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Philippines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.879721,121.774017,123],
["<strong>Singapore</strong>: 1715 sequences <br><br>Genotype I: 378<br>Genotype III: 1291<br>Genotype IV: 8<br>Genotype V: 1<br>Genomic region not suitable for genotyping 37<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Singapore\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.352083,103.819839,1715],
["<strong>Thailand</strong>: 665 sequences <br><br>Genotype I: 604<br>Genotype II: 5<br>Genotype III: 6<br>Genotype IV: 2<br>Genomic region not suitable for genotyping 48<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Thailand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.870032,100.992538,665],
["<strong>Viet Nam</strong>: 1220 sequences <br><br>Genotype I: 1204<br>Genomic region not suitable for genotyping 16<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Viet Nam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.058324,108.277199,1220],
["<strong>Myanmar</strong>: 440 sequences <br><br>Genotype I: 432<br>Genotype III: 8<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Myanmar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.913965,95.956223,440],
["<strong>East Timor</strong>: 8 sequences <br><br>Genotype IV: 8<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=East Timor\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-8.874217,125.727539,8],
["<strong>Brunei</strong>: 3 sequences <br><br>Genotype I: 1<br>Genotype III: 1<br>Genotype IV: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Brunei\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.535277,114.727669,3],
["<strong>Cambodia</strong>: 119 sequences <br><br>Genotype I: 116<br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Cambodia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.565679,104.990959,119],
["<strong>Laos</strong>: 94 sequences <br><br>Genotype I: 94<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Laos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.856270,102.495499,94],
["<strong>Saudi Arabia</strong>: 34 sequences <br><br>Genotype I: 8<br>Genotype III: 3<br>Genomic region not suitable for genotyping 23<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Saudi Arabia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,34],
["<strong>Croatia</strong>: 2 sequences <br><br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Croatia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",45.099998,15.200000,2],
["<strong>Portugal</strong>: 5 sequences <br><br>Genotype V: 1<br>Genomic region not suitable for genotyping 4<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Portugal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",39.399872,-8.224454,5],
["<strong>France</strong>: 2 sequences <br><br>Genotype V: 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=France\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",46.227638,2.213749,2],
["<strong>Australia</strong>: 12 sequences <br><br>Genotype I: 1<br>Genotype IV: 11<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Australia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,12],
["<strong>Papua New Guinea</strong>: 7 sequences <br><br>Genotype I: 1<br>Genotype IV: 6<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Papua New Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.314993,143.955551,7],
["<strong>Tonga</strong>: 2 sequences <br><br>Genotype IV: 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Tonga\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.178986,-175.198242,2],
["<strong>Wallis and Futuna</strong>: 1 sequences <br><br>Genotype IV: 1<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Wallis and Futuna\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.768752,-177.156097,1],
["<strong>Cook Islands</strong>: 4 sequences <br><br>Genotype I: 1<br>Genotype IV: 3<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Cook Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.236736,-159.777664,4],
["<strong>Niue</strong>: 2 sequences <br><br>Genotype IV: 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Niue\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-19.054445,-169.867233,2],
["<strong>Samoa</strong>: 5 sequences <br><br>Genotype IV: 5<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=Samoa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.759029,-172.104630,5],
["<strong>French Polynesia</strong>: 164 sequences <br><br>Genotype I: 7<br>Genotype IV: 154<br>Genotype V: 1<br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv1countrydownload.php?value=French Polynesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,164]

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

</div>
 
<!-----------------------------------------------------------------------------------------------------------------------------> 
<?php require "./Tema/rodape.php"; ?>