<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Dengue Virus: Data displayed by Country, <a href ="mapdenvgeral-subcontinent.php">Continent Subdivisions</a> and <a href ="mapdenvgeral-continent.php">Continents</a></h2>
   
   
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
				
				["<strong>Seychelles</strong><br><br>Dengue Serotype 1: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Seychelles\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-4.679574,55.491978,3],
["<strong>Djibouti</strong><br><br>Dengue Serotype 2: 1<br>Dengue Serotype 3: 4<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Djibouti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",11.825138,42.590275,5],
["<strong>Kenya</strong><br><br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Kenya\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.023559,37.906193,1],
["<strong>Tanzania</strong><br><br>Dengue Serotype 2: 13<br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Tanzania\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.369028,34.888821,14],
["<strong>Uganda</strong><br><br>Dengue Serotype 2: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Uganda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.373333,32.290276,1],
["<strong>Mozambique</strong><br><br>Dengue Serotype 3: 6<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Mozambique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-18.665695,35.529564,6],
["<strong>Madagascar</strong><br><br>Dengue Serotype 3: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Madagascar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-18.766947,46.869106,2],
["<strong>Reunion</strong><br><br>Dengue Serotype 1: 9<br>Dengue Serotype 3: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Reunion\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.115141,55.536385,12],
["<strong>Comoros</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Comoros\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.875001,43.872219,2],
["<strong>Eritrea</strong><br><br>Dengue Serotype 1: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Eritrea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.179384,39.782333,1],
["<strong>Gabon</strong><br><br>Dengue Serotype 1: 2<br>Dengue Serotype 2: 8<br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Gabon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.803689,11.609444,11],
["<strong>Angola</strong><br><br>Dengue Serotype 1: 34<br>Dengue Serotype 4: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Angola\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.202692,17.873886,35],
["<strong>South Africa</strong><br><br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=South Africa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-30.559483,22.937506,1],
["<strong>Senegal</strong><br><br>Dengue Serotype 2: 6<br>Dengue Serotype 3: 1<br>Dengue Serotype 4: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Senegal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,8],
["<strong>Mali</strong><br><br>Dengue Serotype 1: 5<br>Dengue Serotype 2: 5<br>Dengue Serotype 3: 7<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Mali\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.570692,-3.996166,17],
["<strong>Guinea</strong><br><br>Dengue Serotype 2: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.537950,-13.677290,2],
["<strong>Cote de Ivoire</strong><br><br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Cote de Ivoire\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.539989,-5.547080,1],
["<strong>Burkina Faso</strong><br><br>Dengue Serotype 2: 10<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Burkina Faso\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.238333,-1.561593,10],
["<strong>Togo</strong><br><br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Togo\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.619543,0.824782,1],
["<strong>Benin</strong><br><br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Benin\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.307690,2.315834,1],
["<strong>Ghana</strong><br><br>Dengue Serotype 2: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Ghana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.946527,-1.023194,2],
["<strong>Nigeria</strong><br><br>Dengue Serotype 1: 2<br>Dengue Serotype 2: 4<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Nigeria\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.081999,8.675277,6],
["<strong>Cape Verde</strong><br><br>Dengue Serotype 2: 3<br>Dengue Serotype 3: 2<br>Dengue Serotype 4: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Cape Verde\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.002083,-24.013197,7],
["<strong>Cuba</strong><br><br>Dengue Serotype 2: 31<br>Dengue Serotype 3: 27<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Cuba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.521757,-77.781166,58],
["<strong>Guadeloupe</strong><br><br>Dengue Serotype 2: 2<br>Dengue Serotype 4: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Guadeloupe\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.995972,-62.067642,3],
["<strong>Saint Barthelemy</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 4: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Saint Barthelemy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.896179,-62.849781,2],
["<strong>Bahamas</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 2: 1<br>Dengue Serotype 4: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Bahamas\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",25.034281,-77.396278,5],
["<strong>Barbados</strong><br><br>Dengue Serotype 1: 5<br>Dengue Serotype 2: 3<br>Dengue Serotype 3: 8<br>Dengue Serotype 4: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Barbados\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.193887,-59.543198,19],
["<strong>Anguilla</strong><br><br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Anguilla\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220554,-63.068615,1],
["<strong>Antigua and Barbuda</strong><br><br>Dengue Serotype 3: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Antigua and Barbuda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.060816,-61.796429,3],
["<strong>Aruba</strong><br><br>Dengue Serotype 1: 3<br>Dengue Serotype 2: 1<br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Aruba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.521110,-69.968338,5],
["<strong>Grenada</strong><br><br>Dengue Serotype 1: 10<br>Dengue Serotype 2: 1<br>Dengue Serotype 3: 6<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Grenada\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.262776,-61.604172,17],
["<strong>Haiti</strong><br><br>Dengue Serotype 1: 8<br>Dengue Serotype 2: 2<br>Dengue Serotype 4: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Haiti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.971188,-72.285217,13],
["<strong>Martinique</strong><br><br>Dengue Serotype 1: 4<br>Dengue Serotype 2: 6<br>Dengue Serotype 3: 11<br>Dengue Serotype 4: 5<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Martinique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.641528,-61.024174,26],
["<strong>Netherlands Antilles</strong><br><br>Dengue Serotype 2: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Netherlands Antilles\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.226079,-69.060089,2],
["<strong>Montserrat</strong><br><br>Dengue Serotype 4: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Montserrat\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.742498,-62.187366,3],
["<strong>Saint Martin</strong><br><br>Dengue Serotype 3: 6<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Saint Martin\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.073099,-63.082199,6],
["<strong>Saint Lucia</strong><br><br>Dengue Serotype 2: 4<br>Dengue Serotype 3: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Saint Lucia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.909444,-60.978893,6],
["<strong>Dominica</strong><br><br>Dengue Serotype 2: 3<br>Dengue Serotype 3: 1<br>Dengue Serotype 4: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Dominica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.414999,-61.370975,6],
["<strong>Puerto Rico</strong><br><br>Dengue Serotype 1: 67<br>Dengue Serotype 2: 80<br>Dengue Serotype 3: 16<br>Dengue Serotype 4: 117<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Puerto Rico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220833,-66.590149,280],
["<strong>Dominican Republic</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 2: 8<br>Dengue Serotype 4: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Dominican Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,11],
["<strong>Trinidad and Tobago</strong><br><br>Dengue Serotype 1: 4<br>Dengue Serotype 2: 17<br>Dengue Serotype 3: 11<br>Dengue Serotype 4: 7<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Trinidad and Tobago\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",10.691803,-61.222504,39],
["<strong>Jamaica</strong><br><br>Dengue Serotype 1: 3<br>Dengue Serotype 2: 6<br>Dengue Serotype 3: 3<br>Dengue Serotype 4: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Jamaica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.109581,-77.297508,14],
["<strong>Mexico</strong><br><br>Dengue Serotype 1: 281<br>Dengue Serotype 2: 192<br>Dengue Serotype 3: 25<br>Dengue Serotype 4: 25<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Mexico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,523],
["<strong>Belize</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 2: 1<br>Dengue Serotype 3: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Belize\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.189877,-88.497650,5],
["<strong>Guatemala</strong><br><br>Dengue Serotype 2: 3<br>Dengue Serotype 3: 16<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Guatemala\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.783471,-90.230759,19],
["<strong>El Salvador</strong><br><br>Dengue Serotype 1: 4<br>Dengue Serotype 2: 3<br>Dengue Serotype 3: 3<br>Dengue Serotype 4: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=El Salvador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.794185,-88.896530,13],
["<strong>Honduras</strong><br><br>Dengue Serotype 1: 4<br>Dengue Serotype 2: 29<br>Dengue Serotype 3: 20<br>Dengue Serotype 4: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Honduras\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.199999,-86.241905,55],
["<strong>Nicaragua</strong><br><br>Dengue Serotype 1: 73<br>Dengue Serotype 2: 237<br>Dengue Serotype 3: 188<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Nicaragua\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.865416,-85.207230,498],
["<strong>Costa Rica</strong><br><br>Dengue Serotype 1: 27<br>Dengue Serotype 2: 17<br>Dengue Serotype 3: 6<br>Dengue Serotype 4: 11<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Costa Rica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.748917,-83.753426,61],
["<strong>Panama</strong><br><br>Dengue Serotype 3: 4<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Panama\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.537981,-80.782127,4],
["<strong>USA</strong><br><br>Dengue Serotype 1: 88<br>Dengue Serotype 2: 158<br>Dengue Serotype 3: 102<br>Dengue Serotype 4: 28<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=USA\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.090240,-95.712891,376],
["<strong>Peru</strong><br><br>Dengue Serotype 1: 10<br>Dengue Serotype 2: 74<br>Dengue Serotype 3: 65<br>Dengue Serotype 4: 27<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Peru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.189967,-75.015152,176],
["<strong>Argentina</strong><br><br>Dengue Serotype 1: 135<br>Dengue Serotype 2: 3<br>Dengue Serotype 3: 8<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Argentina\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-38.416096,-63.616673,146],
["<strong>Brazil</strong><br><br>Dengue Serotype 1: 300<br>Dengue Serotype 2: 243<br>Dengue Serotype 3: 367<br>Dengue Serotype 4: 581<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Brazil\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,1491],
["<strong>Chile</strong><br><br>Dengue Serotype 1: 2<br>Dengue Serotype 4: 4<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Chile\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-35.675148,-71.542969,6],
["<strong>Chile: Easter Island</strong><br><br>Dengue Serotype 1: 5<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Chile: Easter Island\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-27.112989,-109.349579,5],
["<strong>Colombia</strong><br><br>Dengue Serotype 1: 92<br>Dengue Serotype 2: 75<br>Dengue Serotype 3: 145<br>Dengue Serotype 4: 24<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Colombia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.570868,-74.297333,336],
["<strong>Venezuela</strong><br><br>Dengue Serotype 1: 89<br>Dengue Serotype 2: 117<br>Dengue Serotype 3: 166<br>Dengue Serotype 4: 63<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Venezuela\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.423750,-66.589729,435],
["<strong>Bolivia</strong><br><br>Dengue Serotype 2: 13<br>Dengue Serotype 3: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Bolivia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.290154,-63.588654,15],
["<strong>Guyana</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 2: 1<br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Guyana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.860416,-58.930180,3],
["<strong>Ecuador</strong><br><br>Dengue Serotype 2: 4<br>Dengue Serotype 3: 4<br>Dengue Serotype 4: 8<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Ecuador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-1.831239,-78.183403,16],
["<strong>French Guiana</strong><br><br>Dengue Serotype 1: 4<br>Dengue Serotype 2: 20<br>Dengue Serotype 3: 14<br>Dengue Serotype 4: 10<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=French Guiana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.933889,-53.125782,48],
["<strong>Paraguay</strong><br><br>Dengue Serotype 1: 23<br>Dengue Serotype 2: 13<br>Dengue Serotype 3: 31<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Paraguay\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-23.442503,-58.443832,67],
["<strong>Suriname</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 2: 13<br>Dengue Serotype 3: 2<br>Dengue Serotype 4: 7<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Suriname\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.919305,-56.027782,23],
["<strong>Japan</strong><br><br>Dengue Serotype 1: 14<br>Dengue Serotype 3: 2<br>Dengue Serotype 4: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Japan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",36.204823,138.252930,18],
["<strong>South Korea</strong><br><br>Dengue Serotype 1: 15<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=South Korea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.907757,127.766922,15],
["<strong>China</strong><br><br>Dengue Serotype 1: 771<br>Dengue Serotype 2: 353<br>Dengue Serotype 3: 183<br>Dengue Serotype 4: 51<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=China\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.861660,104.195396,1358],
["<strong>Taiwan</strong><br><br>Dengue Serotype 1: 56<br>Dengue Serotype 2: 69<br>Dengue Serotype 3: 539<br>Dengue Serotype 4: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Taiwan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.697809,120.960518,667],
["<strong>Solomon Islands</strong><br><br>Dengue Serotype 1: 3<br>Dengue Serotype 3: 2<br>Dengue Serotype 4: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Solomon Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.645710,160.156189,6],
["<strong>Vanuatu</strong><br><br>Dengue Serotype 1: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Vanuatu\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-15.376706,166.959152,1],
["<strong>Fiji</strong><br><br>Dengue Serotype 1: 11<br>Dengue Serotype 2: 9<br>Dengue Serotype 3: 11<br>Dengue Serotype 4: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Fiji\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,32],
["<strong>New Caledonia</strong><br><br>Dengue Serotype 1: 95<br>Dengue Serotype 2: 15<br>Dengue Serotype 3: 23<br>Dengue Serotype 4: 35<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=New Caledonia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.904305,165.618042,168],
["<strong>Guam</strong><br><br>Dengue Serotype 2: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Guam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.444304,144.793732,2],
["<strong>Nauru</strong><br><br>Dengue Serotype 1: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Nauru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.522778,166.931503,1],
["<strong>Palau</strong><br><br>Dengue Serotype 1: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Palau\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.514980,134.582520,2],
["<strong>Kiribati</strong><br><br>Dengue Serotype 1: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Kiribati\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-3.370417,-168.734039,2],
["<strong>Micronesia</strong><br><br>Dengue Serotype 1: 5<br>Dengue Serotype 2: 3<br>Dengue Serotype 4: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Micronesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,10],
["<strong>Marshall Island</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 4: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Marshall Island\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.089710,171.380264,3],
["<strong>India</strong><br><br>Dengue Serotype 1: 324<br>Dengue Serotype 2: 390<br>Dengue Serotype 3: 413<br>Dengue Serotype 4: 50<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=India\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,1177],
["<strong>Pakistan</strong><br><br>Dengue Serotype 1: 13<br>Dengue Serotype 2: 205<br>Dengue Serotype 3: 70<br>Dengue Serotype 4: 7<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Pakistan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",30.375320,69.345116,295],
["<strong>Sri Lanka</strong><br><br>Dengue Serotype 1: 33<br>Dengue Serotype 2: 11<br>Dengue Serotype 3: 50<br>Dengue Serotype 4: 10<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Sri Lanka\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.873054,80.771790,104],
["<strong>Iran</strong><br><br>Dengue Serotype 1: 2<br>Dengue Serotype 2: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Iran\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",32.427910,53.688046,3],
["<strong>Bangladesh</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 2: 9<br>Dengue Serotype 3: 32<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Bangladesh\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.684994,90.356331,42],
["<strong>Maldives</strong><br><br>Dengue Serotype 1: 5<br>Dengue Serotype 2: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Maldives\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.202778,73.220680,6],
["<strong>Bhutan</strong><br><br>Dengue Serotype 1: 33<br>Dengue Serotype 2: 2<br>Dengue Serotype 3: 19<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Bhutan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",27.514162,90.433601,54],
["<strong>Nepal</strong><br><br>Dengue Serotype 1: 11<br>Dengue Serotype 2: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Nepal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",28.394857,84.124008,12],
["<strong>Malaysia</strong><br><br>Dengue Serotype 1: 190<br>Dengue Serotype 2: 202<br>Dengue Serotype 3: 54<br>Dengue Serotype 4: 33<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Malaysia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,479],
["<strong>Indonesia</strong><br><br>Dengue Serotype 1: 326<br>Dengue Serotype 2: 227<br>Dengue Serotype 3: 144<br>Dengue Serotype 4: 76<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Indonesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.789275,113.921326,773],
["<strong>Philippines</strong><br><br>Dengue Serotype 1: 122<br>Dengue Serotype 2: 146<br>Dengue Serotype 3: 66<br>Dengue Serotype 4: 46<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Philippines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.879721,121.774017,380],
["<strong>Singapore</strong><br><br>Dengue Serotype 1: 249<br>Dengue Serotype 2: 603<br>Dengue Serotype 3: 191<br>Dengue Serotype 4: 57<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Singapore\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.352083,103.819839,1100],
["<strong>Thailand</strong><br><br>Dengue Serotype 1: 650<br>Dengue Serotype 2: 700<br>Dengue Serotype 3: 476<br>Dengue Serotype 4: 332<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Thailand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.870032,100.992538,2158],
["<strong>Viet Nam</strong><br><br>Dengue Serotype 1: 1182<br>Dengue Serotype 2: 456<br>Dengue Serotype 3: 103<br>Dengue Serotype 4: 129<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Viet Nam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.058324,108.277199,1870],
["<strong>Myanmar</strong><br><br>Dengue Serotype 1: 438<br>Dengue Serotype 2: 58<br>Dengue Serotype 3: 6<br>Dengue Serotype 4: 18<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Myanmar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.913965,95.956223,520],
["<strong>East Timor</strong><br><br>Dengue Serotype 1: 8<br>Dengue Serotype 2: 13<br>Dengue Serotype 3: 33<br>Dengue Serotype 4: 5<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=East Timor\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-8.874217,125.727539,59],
["<strong>Brunei</strong><br><br>Dengue Serotype 1: 2<br>Dengue Serotype 2: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Brunei\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.535277,114.727669,5],
["<strong>Cambodia</strong><br><br>Dengue Serotype 1: 119<br>Dengue Serotype 2: 59<br>Dengue Serotype 3: 74<br>Dengue Serotype 4: 21<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Cambodia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.565679,104.990959,273],
["<strong>Laos</strong><br><br>Dengue Serotype 1: 42<br>Dengue Serotype 2: 6<br>Dengue Serotype 3: 78<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Laos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.856270,102.495499,126],
["<strong>Saudi Arabia</strong><br><br>Dengue Serotype 1: 33<br>Dengue Serotype 2: 22<br>Dengue Serotype 3: 6<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Saudi Arabia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,61],
["<strong>Yemen</strong><br><br>Dengue Serotype 3: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Yemen\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.552727,48.516388,1],
["<strong>Croatia</strong><br><br>Dengue Serotype 1: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Croatia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",45.099998,15.200000,2],
["<strong>Italy</strong><br><br>Dengue Serotype 3: 1<br>Dengue Serotype 4: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Italy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",41.871941,12.567380,2],
["<strong>Portugal</strong><br><br>Dengue Serotype 1: 5<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Portugal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",39.399872,-8.224454,5],
["<strong>Australia</strong><br><br>Dengue Serotype 1: 10<br>Dengue Serotype 2: 31<br>Dengue Serotype 3: 10<br>Dengue Serotype 4: 6<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Australia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,57],
["<strong>Papua New Guinea</strong><br><br>Dengue Serotype 1: 7<br>Dengue Serotype 2: 12<br>Dengue Serotype 3: 3<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Papua New Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.314993,143.955551,22],
["<strong>Tonga</strong><br><br>Dengue Serotype 1: 2<br>Dengue Serotype 2: 14<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Tonga\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.178986,-175.198242,16],
["<strong>Wallis and Futuna</strong><br><br>Dengue Serotype 1: 1<br>Dengue Serotype 2: 5<br>Dengue Serotype 3: 6<br>Dengue Serotype 4: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Wallis and Futuna\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.768752,-177.156097,14],
["<strong>Cook Islands</strong><br><br>Dengue Serotype 1: 3<br>Dengue Serotype 2: 1<br>Dengue Serotype 3: 2<br>Dengue Serotype 4: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Cook Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.236736,-159.777664,7],
["<strong>Niue</strong><br><br>Dengue Serotype 1: 2<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Niue\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-19.054445,-169.867233,2],
["<strong>Samoa</strong><br><br>Dengue Serotype 1: 5<br>Dengue Serotype 2: 4<br>Dengue Serotype 3: 3<br>Dengue Serotype 4: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Samoa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.759029,-172.104630,13],
["<strong>Tuvalu</strong><br><br>Dengue Serotype 2: 1<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=Tuvalu\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-7.109535,177.649323,1],
["<strong>French Polynesia</strong><br><br>Dengue Serotype 1: 102<br>Dengue Serotype 2: 15<br>Dengue Serotype 3: 40<br>Dengue Serotype 4: 67<br><br><strong>Download - </strong>  <a href=\"denvtotalcountrydownload.php?value=French Polynesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,224],

				
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