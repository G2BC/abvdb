<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
           
			<h3> Dengue, Zika and Chikungunya Viruses : Data displayed by Country, <a href ="mapatodos-subcontinent.php">Continent Subdivisions</a> and <a href ="mapatodos-continent.php">Continent</a></h3>
   
   
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
				
				["<strong>Mayotte</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Mayotte\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-12.827500,45.166245,2],
["<strong>Mauritius</strong><br>15- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Mauritius\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.348404,57.552151,15],
["<strong>Seychelles</strong><br>8- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Seychelles\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-4.679574,55.491978,8],
["<strong>Djibouti</strong><br>5- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Djibouti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",11.825138,42.590275,5],
["<strong>Kenya</strong><br>36- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Kenya\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.023559,37.906193,36],
["<strong>Tanzania</strong><br>17- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Tanzania\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.369028,34.888821,17],
["<strong>Uganda</strong><br>17- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Uganda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.373333,32.290276,17],
["<strong>Mozambique</strong><br>6- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Mozambique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-18.665695,35.529564,6],
["<strong>Madagascar</strong><br>4- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Madagascar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-18.766947,46.869106,4],
["<strong>Reunion</strong><br>30- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Reunion\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.115141,55.536385,30],
["<strong>Comoros</strong><br>8- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Comoros\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.875001,43.872219,8],
["<strong>Eritrea</strong><br>1- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Eritrea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.179384,39.782333,1],
["<strong>Central African Republic</strong><br>40- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Central African Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,40],
["<strong>Cameroon</strong><br>4- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Cameroon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.369722,12.354722,4],
["<strong>Gabon</strong><br>22- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Gabon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.803689,11.609444,22],
["<strong>Congo - Brazzaville</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Congo - Brazzaville\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.228021,15.827659,2],
["<strong>Democratic Republic of the Congo</strong><br>11- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Democratic Republic of the Congo\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-4.038333,21.758663,11],
["<strong>Angola</strong><br>39- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Angola\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.202692,17.873886,39],
["<strong>South Africa</strong><br>6- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=South Africa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-30.559483,22.937506,6],
["<strong>Senegal</strong><br>126- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Senegal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,126],
["<strong>Mali</strong><br>17- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Mali\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.570692,-3.996166,17],
["<strong>Guinea</strong><br>7- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.537950,-13.677290,7],
["<strong>Cote de Ivoire</strong><br>1- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Cote de Ivoire\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.539989,-5.547080,1],
["<strong>Burkina Faso</strong><br>13- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Burkina Faso\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.238333,-1.561593,13],
["<strong>Togo</strong><br>1- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Togo\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.619543,0.824782,1],
["<strong>Benin</strong><br>1- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Benin\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.307690,2.315834,1],
["<strong>Ghana</strong><br>9- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Ghana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.946527,-1.023194,9],
["<strong>Nigeria</strong><br>13- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Nigeria\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.081999,8.675277,13],
["<strong>Cape Verde</strong><br>7- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Cape Verde\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.002083,-24.013197,7],
["<strong>Cuba</strong><br>63- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Cuba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.521757,-77.781166,63],
["<strong>Guadeloupe</strong><br>13- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Guadeloupe\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.995972,-62.067642,13],
["<strong>Saint Barthelemy</strong><br>4- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Saint Barthelemy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.896179,-62.849781,4],
["<strong>Bahamas</strong><br>6- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Bahamas\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",25.034281,-77.396278,6],
["<strong>Barbados</strong><br>21- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Barbados\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.193887,-59.543198,21],
["<strong>Anguilla</strong><br>3- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Anguilla\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220554,-63.068615,3],
["<strong>Antigua and Barbuda</strong><br>4- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Antigua and Barbuda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.060816,-61.796429,4],
["<strong>British Virgin Islands</strong><br>5- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=British Virgin Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.426929,-64.620789,5],
["<strong>Aruba</strong><br>13- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Aruba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.521110,-69.968338,13],
["<strong>Cayman Islands</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Cayman Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.513468,-80.566956,2],
["<strong>Grenada</strong><br>22- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Grenada\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.262776,-61.604172,22],
["<strong>Haiti</strong><br>44- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Haiti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.971188,-72.285217,44],
["<strong>Martinique</strong><br>41- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Martinique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.641528,-61.024174,41],
["<strong>Netherlands Antilles</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Netherlands Antilles\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.226079,-69.060089,2],
["<strong>Turks and Caicos</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Turks and Caicos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.799765,-72.168159,2],
["<strong>Montserrat</strong><br>5- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Montserrat\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.742498,-62.187366,5],
["<strong>Saint Martin</strong><br>8- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Saint Martin\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.073099,-63.082199,8],
["<strong>Saint Lucia</strong><br>14- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Saint Lucia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.909444,-60.978893,14],
["<strong>Dominica</strong><br>15- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Dominica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.414999,-61.370975,15],
["<strong>Saint Vincent and the Grenadines</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Saint Vincent and the Grenadines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.158720,-61.224751,2],
["<strong>Puerto Rico</strong><br>316- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Puerto Rico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220833,-66.590149,316],
["<strong>Dominican Republic</strong><br>72- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Dominican Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,72],
["<strong>Trinidad and Tobago</strong><br>52- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Trinidad and Tobago\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",10.691803,-61.222504,52],
["<strong>Saint Kitts and Nevis</strong><br>3- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Saint Kitts and Nevis\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.357822,-62.782990,3],
["<strong>Jamaica</strong><br>23- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Jamaica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.109581,-77.297508,23],
["<strong>Mexico</strong><br>644- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Mexico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,644],
["<strong>Belize</strong><br>8- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Belize\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.189877,-88.497650,8],
["<strong>Guatemala</strong><br>30- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Guatemala\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.783471,-90.230759,30],
["<strong>El Salvador</strong><br>21- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=El Salvador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.794185,-88.896530,21],
["<strong>Honduras</strong><br>81- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Honduras\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.199999,-86.241905,81],
["<strong>Nicaragua</strong><br>667- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Nicaragua\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.865416,-85.207230,667],
["<strong>Costa Rica</strong><br>61- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Costa Rica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.748917,-83.753426,61],
["<strong>Panama</strong><br>109- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Panama\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.537981,-80.782127,109],
["<strong>USA</strong><br>607- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=USA\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.090240,-95.712891,607],
["<strong>Peru</strong><br>178- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Peru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.189967,-75.015152,178],
["<strong>Argentina</strong><br>148- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Argentina\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-38.416096,-63.616673,148],
["<strong>Brazil</strong><br>2003- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Brazil\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,2003],
["<strong>Chile</strong><br>6- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Chile\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-35.675148,-71.542969,6],
["<strong>Chile: Easter Island</strong><br>70- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Chile: Easter Island\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-27.112989,-109.349579,70],
["<strong>Colombia</strong><br>505- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Colombia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.570868,-74.297333,505],
["<strong>Venezuela</strong><br>453- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Venezuela\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.423750,-66.589729,453],
["<strong>Bolivia</strong><br>15- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Bolivia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.290154,-63.588654,15],
["<strong>Guyana</strong><br>9- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Guyana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.860416,-58.930180,9],
["<strong>Ecuador</strong><br>25- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Ecuador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-1.831239,-78.183403,25],
["<strong>French Guiana</strong><br>59- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=French Guiana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.933889,-53.125782,59],
["<strong>Paraguay</strong><br>67- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Paraguay\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-23.442503,-58.443832,67],
["<strong>Suriname</strong><br>42- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Suriname\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.919305,-56.027782,42],
["<strong>Uruguay</strong><br>57- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Uruguay\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-32.522778,-55.765835,57],
["<strong>Curacao</strong><br>14- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Curacao\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.169570,-68.990021,14],
["<strong>Japan</strong><br>47- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Japan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",36.204823,138.252930,47],
["<strong>South Korea</strong><br>23- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=South Korea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.907757,127.766922,23],
["<strong>China</strong><br>1880- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=China\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.861660,104.195396,1880],
["<strong>Hong Kong</strong><br>4- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Hong Kong\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",22.396427,114.109497,4],
["<strong>Taiwan</strong><br>1434- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Taiwan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.697809,120.960518,1434],
["<strong>Solomon Islands</strong><br>14- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Solomon Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.645710,160.156189,14],
["<strong>Vanuatu</strong><br>1- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Vanuatu\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-15.376706,166.959152,1],
["<strong>Fiji</strong><br>42- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Fiji\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,42],
["<strong>New Caledonia</strong><br>179- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=New Caledonia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.904305,165.618042,179],
["<strong>Guam</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Guam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.444304,144.793732,2],
["<strong>Nauru</strong><br>4- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Nauru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.522778,166.931503,4],
["<strong>Palau</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Palau\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.514980,134.582520,2],
["<strong>Kiribati</strong><br>3- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Kiribati\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-3.370417,-168.734039,3],
["<strong>Micronesia</strong><br>15- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Micronesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,15],
["<strong>Marshall Island</strong><br>3- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Marshall Island\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.089710,171.380264,3],
["<strong>India</strong><br>3311- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=India\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,3311],
["<strong>Pakistan</strong><br>326- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Pakistan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",30.375320,69.345116,326],
["<strong>Sri Lanka</strong><br>218- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Sri Lanka\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.873054,80.771790,218],
["<strong>Iran</strong><br>4- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Iran\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",32.427910,53.688046,4],
["<strong>Bangladesh</strong><br>195- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Bangladesh\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.684994,90.356331,195],
["<strong>Maldives</strong><br>6- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Maldives\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.202778,73.220680,6],
["<strong>Bhutan</strong><br>60- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Bhutan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",27.514162,90.433601,60],
["<strong>Nepal</strong><br>14- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Nepal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",28.394857,84.124008,14],
["<strong>Malaysia</strong><br>857- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Malaysia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,857],
["<strong>Indonesia</strong><br>996- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Indonesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.789275,113.921326,996],
["<strong>Philippines</strong><br>469- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Philippines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.879721,121.774017,469],
["<strong>Singapore</strong><br>2798- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Singapore\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.352083,103.819839,2798],
["<strong>Thailand</strong><br>2714- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Thailand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.870032,100.992538,2714],
["<strong>Viet Nam</strong><br>1981- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Viet Nam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.058324,108.277199,1981],
["<strong>Myanmar</strong><br>534- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Myanmar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.913965,95.956223,534],
["<strong>East Timor</strong><br>60- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=East Timor\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-8.874217,125.727539,60],
["<strong>Brunei</strong><br>8- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Brunei\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.535277,114.727669,8],
["<strong>Cambodia</strong><br>283- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Cambodia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.565679,104.990959,283],
["<strong>Laos</strong><br>234- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Laos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.856270,102.495499,234],
["<strong>Saudi Arabia</strong><br>82- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Saudi Arabia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,82],
["<strong>Yemen</strong><br>10- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Yemen\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.552727,48.516388,10],
["<strong>Israel</strong><br>4- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Israel\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",31.046053,34.851612,4],
["<strong>Croatia</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Croatia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",45.099998,15.200000,2],
["<strong>Spain</strong><br>10- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Spain\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",40.463669,-3.749220,10],
["<strong>Italy</strong><br>66- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Italy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",41.871941,12.567380,66],
["<strong>Portugal</strong><br>7- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Portugal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",39.399872,-8.224454,7],
["<strong>France</strong><br>7- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=France\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",46.227638,2.213749,7],
["<strong>Australia</strong><br>63- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Australia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,63],
["<strong>New Zealand</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=New Zealand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-40.900558,174.885971,2],
["<strong>Papua New Guinea</strong><br>26- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Papua New Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.314993,143.955551,26],
["<strong>Tonga</strong><br>22- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Tonga\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.178986,-175.198242,22],
["<strong>Wallis and Futuna</strong><br>14- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Wallis and Futuna\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.768752,-177.156097,14],
["<strong>Cook Islands</strong><br>16- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Cook Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.236736,-159.777664,16],
["<strong>Niue</strong><br>2- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Niue\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-19.054445,-169.867233,2],
["<strong>Samoa</strong><br>32- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Samoa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.759029,-172.104630,32],
["<strong>Tuvalu</strong><br>4- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=Tuvalu\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-7.109535,177.649323,4],
["<strong>French Polynesia</strong><br>311- virus sequences <br><br><strong>Download - </strong>  <a href=\"allcountrydownload.php?value=French Polynesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,311]


				
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