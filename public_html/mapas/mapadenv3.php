<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
           
    <h3> Dengue Virus Serotype 3: Data displayed by Country,<a href ="mapadenv3-subcontinent.php">Continent Subdivisions</a> and <a href ="mapadenv3-continent.php">Continent</a></h3>
   
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
				
				["<strong>Djibouti</strong>: 4 sequences <br><br>Genotype III: 4 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Djibouti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",11.825138,42.590275,4],
["<strong>Kenya</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Kenya\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.023559,37.906193,1],
["<strong>Tanzania</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Tanzania\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.369028,34.888821,1],
["<strong>Mozambique</strong>: 6 sequences <br><br>Genotype III: 6 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Mozambique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-18.665695,35.529564,6],
["<strong>Madagascar</strong>: 2 sequences <br><br>Genotype III: 2 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Madagascar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-18.766947,46.869106,2],
["<strong>Reunion</strong>: 3 sequences <br><br>Genotype III: 3 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Reunion\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.115141,55.536385,3],
["<strong>Comoros</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Comoros\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.875001,43.872219,1],
["<strong>Gabon</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Gabon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.803689,11.609444,1],
["<strong>South Africa</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=South Africa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-30.559483,22.937506,1],
["<strong>Senegal</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Senegal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,1],
["<strong>Mali</strong>: 7 sequences <br><br>Genotype III: 7 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Mali\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.570692,-3.996166,7],
["<strong>Cote de Ivoire</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Cote de Ivoire\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.539989,-5.547080,1],
["<strong>Togo</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Togo\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.619543,0.824782,1],
["<strong>Benin</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Benin\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.307690,2.315834,1],
["<strong>Ghana</strong>: 5 sequences <br><br>Genotype III: 5 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Ghana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.946527,-1.023194,5],
["<strong>Cape Verde</strong>: 2 sequences <br><br>Genotype III: 2 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Cape Verde\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.002083,-24.013197,2],
["<strong>Cuba</strong>: 27 sequences <br><br>Genotype III: 26 sequences <br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Cuba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.521757,-77.781166,27],
["<strong>Barbados</strong>: 8 sequences <br><br>Genotype III: 8 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Barbados\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.193887,-59.543198,8],
["<strong>Anguilla</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Anguilla\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220554,-63.068615,1],
["<strong>Antigua and Barbuda</strong>: 3 sequences <br><br>Genotype III: 3 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Antigua and Barbuda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.060816,-61.796429,3],
["<strong>Aruba</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Aruba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.521110,-69.968338,1],
["<strong>Grenada</strong>: 6 sequences <br><br>Genotype III: 6 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Grenada\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.262776,-61.604172,6],
["<strong>Martinique</strong>: 11 sequences <br><br>Genotype III: 11 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Martinique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.641528,-61.024174,11],
["<strong>Saint Martin</strong>: 6 sequences <br><br>Genotype III: 6 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Saint Martin\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.073099,-63.082199,6],
["<strong>Saint Lucia</strong>: 2 sequences <br><br>Genotype III: 2 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Saint Lucia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.909444,-60.978893,2],
["<strong>Dominica</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Dominica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.414999,-61.370975,1],
["<strong>Puerto Rico</strong>: 26 sequences <br><br>Genotype III: 23 sequences <br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Puerto Rico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220833,-66.590149,26],
["<strong>Trinidad and Tobago</strong>: 11 sequences <br><br>Genotype III: 11 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Trinidad and Tobago\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",10.691803,-61.222504,11],
["<strong>Saint Kitts and Nevis</strong>: 2 sequences <br><br>Genotype III: 2 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Saint Kitts and Nevis\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.357822,-62.782990,2],
["<strong>Jamaica</strong>: 3 sequences <br><br>Genotype III: 3 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Jamaica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.109581,-77.297508,3],
["<strong>Mexico</strong>: 28 sequences <br><br>Genotype III: 20 sequences <br>Genomic region not suitable for genotyping 8<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Mexico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,28],
["<strong>Belize</strong>: 3 sequences <br><br>Genotype III: 3 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Belize\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.189877,-88.497650,3],
["<strong>Guatemala</strong>: 16 sequences <br><br>Genotype III: 16 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Guatemala\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.783471,-90.230759,16],
["<strong>El Salvador</strong>: 4 sequences <br><br>Genotype III: 4 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=El Salvador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.794185,-88.896530,4],
["<strong>Honduras</strong>: 20 sequences <br><br>Genotype III: 20 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Honduras\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.199999,-86.241905,20],
["<strong>Nicaragua</strong>: 188 sequences <br><br>Genotype III: 188 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Nicaragua\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.865416,-85.207230,188],
["<strong>Costa Rica</strong>: 6 sequences <br><br>Genotype III: 5 sequences <br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Costa Rica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.748917,-83.753426,6],
["<strong>Panama</strong>: 4 sequences <br><br>Genotype III: 4 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Panama\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.537981,-80.782127,4],
["<strong>USA</strong>: 102 sequences <br><br>Genotype III: 101 sequences <br>Genotype V: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=USA\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.090240,-95.712891,102],
["<strong>Peru</strong>: 65 sequences <br><br>Genotype III: 64 sequences <br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Peru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.189967,-75.015152,65],
["<strong>Argentina</strong>: 8 sequences <br><br>Genotype III: 8 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Argentina\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-38.416096,-63.616673,8],
["<strong>Brazil</strong>: 374 sequences <br><br>Genotype I: 1 sequences <br>Genotype III: 192 sequences <br>Genotype V: 26 sequences <br>Genomic region not suitable for genotyping 155<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Brazil\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,374],
["<strong>Colombia</strong>: 148 sequences <br><br>Genotype III: 114 sequences <br>Genomic region not suitable for genotyping 34<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Colombia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.570868,-74.297333,148],
["<strong>Venezuela</strong>: 166 sequences <br><br>Genotype II: 1 sequences <br>Genotype III: 165 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Venezuela\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.423750,-66.589729,166],
["<strong>Bolivia</strong>: 2 sequences <br><br>Genotype III: 2 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Bolivia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.290154,-63.588654,2],
["<strong>Guyana</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Guyana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.860416,-58.930180,1],
["<strong>Ecuador</strong>: 5 sequences <br><br>Genotype III: 5 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Ecuador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-1.831239,-78.183403,5],
["<strong>French Guiana</strong>: 14 sequences <br><br>Genotype III: 3 sequences <br>Genomic region not suitable for genotyping 11<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=French Guiana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.933889,-53.125782,14],
["<strong>Paraguay</strong>: 31 sequences <br><br>Genotype III: 26 sequences <br>Genomic region not suitable for genotyping 5<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Paraguay\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-23.442503,-58.443832,31],
["<strong>Suriname</strong>: 5 sequences <br><br>Genotype III: 5 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Suriname\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.919305,-56.027782,5],
["<strong>Japan</strong>: 3 sequences <br><br>Genotype I: 1 sequences <br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Japan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",36.204823,138.252930,3],
["<strong>China</strong>: 196 sequences <br><br>Genotype I: 9 sequences <br>Genotype II: 138 sequences <br>Genotype III: 36 sequences <br>Genotype V: 4 sequences <br>Genomic region not suitable for genotyping 9<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=China\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.861660,104.195396,196],
["<strong>Taiwan</strong>: 663 sequences <br><br>Genotype I: 99 sequences <br>Genotype II: 509 sequences <br>Genotype III: 25 sequences <br>Genomic region not suitable for genotyping 30<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Taiwan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.697809,120.960518,663],
["<strong>Solomon Islands</strong>: 8 sequences <br><br>Genotype I: 8 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Solomon Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.645710,160.156189,8],
["<strong>Fiji</strong>: 14 sequences <br><br>Genotype I: 14 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Fiji\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,14],
["<strong>New Caledonia</strong>: 23 sequences <br><br>Genotype I: 23 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=New Caledonia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.904305,165.618042,23],
["<strong>Nauru</strong>: 3 sequences <br><br>Genotype I: 3 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Nauru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.522778,166.931503,3],
["<strong>India</strong>: 593 sequences <br><br>Genotype II: 1 sequences <br>Genotype III: 324 sequences <br>Genotype V: 1 sequences <br>Genomic region not suitable for genotyping 267<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=India\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,593],
["<strong>Pakistan</strong>: 74 sequences <br><br>Genotype III: 52 sequences <br>Genomic region not suitable for genotyping 22<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Pakistan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",30.375320,69.345116,74],
["<strong>Sri Lanka</strong>: 72 sequences <br><br>Genotype II: 1 sequences <br>Genotype III: 71 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Sri Lanka\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.873054,80.771790,72],
["<strong>Bangladesh</strong>: 45 sequences <br><br>Genotype I: 13 sequences <br>Genotype II: 32 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Bangladesh\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.684994,90.356331,45],
["<strong>Bhutan</strong>: 19 sequences <br><br>Genotype III: 19 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Bhutan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",27.514162,90.433601,19],
["<strong>Malaysia</strong>: 114 sequences <br><br>Genotype I: 37 sequences <br>Genotype II: 21 sequences <br>Genotype III: 35 sequences <br>Genotype V: 13 sequences <br>Genomic region not suitable for genotyping 8<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Malaysia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,114],
["<strong>Indonesia</strong>: 173 sequences <br><br>Genotype I: 163 sequences <br>Genotype II: 2 sequences <br>Genomic region not suitable for genotyping 8<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Indonesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.789275,113.921326,173],
["<strong>Philippines</strong>: 66 sequences <br><br>Genotype I: 46 sequences <br>Genotype II: 1 sequences <br>Genotype V: 5 sequences <br>Genomic region not suitable for genotyping 14<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Philippines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.879721,121.774017,66],
["<strong>Singapore</strong>: 194 sequences <br><br>Genotype I: 63 sequences <br>Genotype II: 10 sequences <br>Genotype III: 121 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Singapore\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.352083,103.819839,194],
["<strong>Thailand</strong>: 486 sequences <br><br>Genotype I: 6 sequences <br>Genotype II: 409 sequences <br>Genotype III: 34 sequences <br>Genomic region not suitable for genotyping 37<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Thailand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.870032,100.992538,486],
["<strong>Viet Nam</strong>: 104 sequences <br><br>Genotype I: 1 sequences <br>Genotype II: 81 sequences <br>Genotype III: 7 sequences <br>Genomic region not suitable for genotyping 15<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Viet Nam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.058324,108.277199,104],
["<strong>Myanmar</strong>: 6 sequences <br><br>Genotype II: 5 sequences <br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Myanmar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.913965,95.956223,6],
["<strong>East Timor</strong>: 33 sequences <br><br>Genotype I: 33 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=East Timor\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-8.874217,125.727539,33],
["<strong>Brunei</strong>: 1 sequences <br><br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Brunei\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.535277,114.727669,1],
["<strong>Cambodia</strong>: 74 sequences <br><br>Genotype II: 72 sequences <br>Genotype III: 2 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Cambodia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.565679,104.990959,74],
["<strong>Laos</strong>: 78 sequences <br><br>Genotype II: 73 sequences <br>Genotype III: 5 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Laos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.856270,102.495499,78],
["<strong>Saudi Arabia</strong>: 7 sequences <br><br>Genotype III: 7 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Saudi Arabia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,7],
["<strong>Yemen</strong>: 1 sequences <br><br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Yemen\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.552727,48.516388,1],
["<strong>Italy</strong>: 1 sequences <br><br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Italy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",41.871941,12.567380,1],
["<strong>Australia</strong>: 10 sequences <br><br>Genotype I: 5 sequences <br>Genotype II: 2 sequences <br>Genotype III: 1 sequences <br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Australia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,10],
["<strong>Papua New Guinea</strong>: 3 sequences <br><br>Genotype I: 3 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Papua New Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.314993,143.955551,3],
["<strong>Tonga</strong>: 1 sequences <br><br>Genotype I: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Tonga\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.178986,-175.198242,1],
["<strong>Wallis and Futuna</strong>: 6 sequences <br><br>Genotype I: 6 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Wallis and Futuna\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.768752,-177.156097,6],
["<strong>Cook Islands</strong>: 2 sequences <br><br>Genotype I: 2 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Cook Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.236736,-159.777664,2],
["<strong>Samoa</strong>: 6 sequences <br><br>Genotype I: 5 sequences <br>Genotype III: 1 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=Samoa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.759029,-172.104630,6],
["<strong>French Polynesia</strong>: 40 sequences <br><br>Genotype I: 34 sequences <br>Genotype III: 6 sequences <br><br><strong>Download - </strong>  <a href=\"denv3countrydownload.php?value=French Polynesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,40]

				
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