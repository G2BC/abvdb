<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Chikungunya Virus: Data displayed by Country, <a href ="mapachikv-subcontinent.php">Continent Subdivisions</a> and <a href ="mapachikv-continent.php">Continent</a></h3>
   
   
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
				
				["<strong>Mayotte</strong>: 2 sequences <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Mayotte\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-12.827500,45.166245,2],
["<strong>Mauritius</strong>: 15 sequences <br><br>East-Central-South-African: 15<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Mauritius\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.348404,57.552151,15],
["<strong>Seychelles</strong>: 5 sequences <br><br>East-Central-South-African: 5<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Seychelles\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-4.679574,55.491978,5],
["<strong>Kenya</strong>: 2 sequences <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Kenya\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.023559,37.906193,2],
["<strong>Tanzania</strong>: 3 sequences <br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Tanzania\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.369028,34.888821,3],
["<strong>Uganda</strong>: 2 sequences <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Uganda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.373333,32.290276,2],
["<strong>Madagascar</strong>: 2 sequences <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Madagascar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-18.766947,46.869106,2],
["<strong>Reunion</strong>: 17 sequences <br><br>East-Central-South-African: 17<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Reunion\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.115141,55.536385,17],
["<strong>Comoros</strong>: 6 sequences <br><br>East-Central-South-African: 6<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Comoros\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.875001,43.872219,6],
["<strong>Central African Republic</strong>: 2 sequences <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Central African Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,2],
["<strong>Cameroon</strong>: 4 sequences <br><br>East-Central-South-African: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Cameroon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.369722,12.354722,4],
["<strong>Gabon</strong>: 8 sequences <br><br>East-Central-South-African: 8<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Gabon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.803689,11.609444,8],
["<strong>Congo - Brazzaville</strong>: 2 sequences <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Congo - Brazzaville\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.228021,15.827659,2],
["<strong>Democratic Republic of the Congo</strong>: 11 sequences <br><br>East-Central-South-African: 11<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Democratic Republic of the Congo\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-4.038333,21.758663,11],
["<strong>Angola</strong>: 2 sequences <br><br>East-Central-South-African: 1<br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Angola\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.202692,17.873886,2],
["<strong>South Africa</strong>: 5 sequences <br><br>East-Central-South-African: 5<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=South Africa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-30.559483,22.937506,5],
["<strong>Senegal</strong>: 47 sequences <br><br>East-Central-South-African: 1<br>West African: 46<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Senegal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,47],
["<strong>Guinea</strong>: 4 sequences <br><br>East-Central-South-African: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.537950,-13.677290,4],
["<strong>Nigeria</strong>: 2 sequences <br><br>West African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Nigeria\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.081999,8.675277,2],
["<strong>Cuba</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Cuba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.521757,-77.781166,1],
["<strong>Guadeloupe</strong>: 9 sequences <br><br>Asian: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Guadeloupe\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.995972,-62.067642,9],
["<strong>Saint Barthelemy</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Barthelemy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.896179,-62.849781,1],
["<strong>Bahamas</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Bahamas\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",25.034281,-77.396278,1],
["<strong>Barbados</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Barbados\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.193887,-59.543198,2],
["<strong>Anguilla</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Anguilla\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220554,-63.068615,2],
["<strong>Antigua and Barbuda</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Antigua and Barbuda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.060816,-61.796429,1],
["<strong>British Virgin Islands</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=British Virgin Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.426929,-64.620789,1],
["<strong>Cayman Islands</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Cayman Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.513468,-80.566956,2],
["<strong>Grenada</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Grenada\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.262776,-61.604172,2],
["<strong>Haiti</strong>: 14 sequences <br><br>Asian: 14<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Haiti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.971188,-72.285217,14],
["<strong>Martinique</strong>: 12 sequences <br><br>Asian: 12<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Martinique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.641528,-61.024174,12],
["<strong>Turks and Caicos</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Turks and Caicos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.799765,-72.168159,2],
["<strong>Montserrat</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Montserrat\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.742498,-62.187366,2],
["<strong>Saint Martin</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Martin\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.073099,-63.082199,1],
["<strong>Saint Lucia</strong>: 4 sequences <br><br>Asian: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Lucia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.909444,-60.978893,4],
["<strong>Dominica</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Dominica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.414999,-61.370975,2],
["<strong>Saint Vincent and the Grenadines</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Vincent and the Grenadines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.158720,-61.224751,1],
["<strong>Puerto Rico</strong>: 7 sequences <br><br>Asian: 7<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Puerto Rico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220833,-66.590149,7],
["<strong>Dominican Republic</strong>: 19 sequences <br><br>Asian: 19<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Dominican Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,19],
["<strong>Trinidad and Tobago</strong>: 11 sequences <br><br>Asian: 11<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Trinidad and Tobago\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",10.691803,-61.222504,11],
["<strong>Saint Kitts and Nevis</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Kitts and Nevis\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.357822,-62.782990,1],
["<strong>Jamaica</strong>: 4 sequences <br><br>Asian: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Jamaica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.109581,-77.297508,4],
["<strong>Mexico</strong>: 41 sequences <br><br>Asian: 41<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Mexico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,41],
["<strong>Guatemala</strong>: 8 sequences <br><br>Asian: 8<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Guatemala\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.783471,-90.230759,8],
["<strong>El Salvador</strong>: 5 sequences <br><br>Asian: 5<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=El Salvador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.794185,-88.896530,5],
["<strong>Honduras</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Honduras\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.199999,-86.241905,2],
["<strong>Nicaragua</strong>: 149 sequences <br><br>Asian: 149<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Nicaragua\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.865416,-85.207230,149],
["<strong>Panama</strong>: 3 sequences <br><br>Asian: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Panama\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.537981,-80.782127,3],
["<strong>USA</strong>: 172 sequences <br><br>Asian: 132<br>East-Central-South-African: 40<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=USA\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.090240,-95.712891,172],
["<strong>Brazil</strong>: 75 sequences <br><br>Asian: 21<br>East-Central-South-African: 54<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Brazil\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,75],
["<strong>Colombia</strong>: 60 sequences <br><br>Asian: 51<br>Genomic region not suitable for genotyping: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Colombia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.570868,-74.297333,60],
["<strong>Venezuela</strong>: 9 sequences <br><br>Asian: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Venezuela\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.423750,-66.589729,9],
["<strong>Guyana</strong>: 5 sequences <br><br>Asian: 5<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Guyana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.860416,-58.930180,5],
["<strong>Ecuador</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Ecuador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-1.831239,-78.183403,1],
["<strong>French Guiana</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=French Guiana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.933889,-53.125782,1],
["<strong>Suriname</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Suriname\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.919305,-56.027782,2],
["<strong>Curacao</strong>: 14 sequences <br><br>Asian: 13<br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Curacao\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.169570,-68.990021,14],
["<strong>South Korea</strong>: 1 sequences <br><br>East-Central-South-African: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=South Korea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.907757,127.766922,1],
["<strong>China</strong>: 31 sequences <br><br>Asian: 2<br>East-Central-South-African: 29<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=China\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.861660,104.195396,31],
["<strong>Hong Kong</strong>: 2 sequences <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Hong Kong\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",22.396427,114.109497,2],
["<strong>New Caledonia</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=New Caledonia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.904305,165.618042,2],
["<strong>Micronesia</strong>: 4 sequences <br><br>Asian: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Micronesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,4],
["<strong>India</strong>: 1224 sequences <br><br>Asian: 23<br>East-Central-South-African: 1193<br>West African: 6<br>Genomic region not suitable for genotyping: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=India\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,1224],
["<strong>Sri Lanka</strong>: 73 sequences <br><br>East-Central-South-African: 73<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Sri Lanka\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.873054,80.771790,73],
["<strong>Bangladesh</strong>: 3 sequences <br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Bangladesh\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.684994,90.356331,3],
["<strong>Bhutan</strong>: 6 sequences <br><br>East-Central-South-African: 6<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Bhutan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",27.514162,90.433601,6],
["<strong>Malaysia</strong>: 146 sequences <br><br>Asian: 34<br>East-Central-South-African: 112<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Malaysia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,146],
["<strong>Indonesia</strong>: 121 sequences <br><br>Asian: 105<br>East-Central-South-African: 10<br>Genomic region not suitable for genotyping: 6<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Indonesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.789275,113.921326,121],
["<strong>Philippines</strong>: 54 sequences <br><br>Asian: 51<br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Philippines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.879721,121.774017,54],
["<strong>Singapore</strong>: 103 sequences <br><br>Asian: 2<br>East-Central-South-African: 101<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Singapore\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.352083,103.819839,103],
["<strong>Thailand</strong>: 272 sequences <br><br>Asian: 16<br>East-Central-South-African: 255<br>Genomic region not suitable for genotyping: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Thailand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.870032,100.992538,272],
["<strong>Viet Nam</strong>: 7 sequences <br><br>East-Central-South-African: 7<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Viet Nam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.058324,108.277199,7],
["<strong>Myanmar</strong>: 9 sequences <br><br>East-Central-South-African: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Myanmar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.913965,95.956223,9],
["<strong>East Timor</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=East Timor\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-8.874217,125.727539,1],
["<strong>Cambodia</strong>: 8 sequences <br><br>East-Central-South-African: 8<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Cambodia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.565679,104.990959,8],
["<strong>Laos</strong>: 3 sequences <br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Laos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.856270,102.495499,3],
["<strong>Yemen</strong>: 9 sequences <br><br>East-Central-South-African: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Yemen\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.552727,48.516388,9],
["<strong>Italy</strong>: 20 sequences <br><br>Asian: 3<br>East-Central-South-African: 17<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Italy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",41.871941,12.567380,20],
["<strong>France</strong>: 3 sequences <br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=France\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",46.227638,2.213749,3],
["<strong>Australia</strong>: 3 sequences <br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Australia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,3],
["<strong>Papua New Guinea</strong>: 3 sequences <br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Papua New Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.314993,143.955551,3],
["<strong>Tonga</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Tonga\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.178986,-175.198242,2],
["<strong>Samoa</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Samoa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.759029,-172.104630,1],
["<strong>French Polynesia</strong>: 3 sequences <br><br>Asian: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=French Polynesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,3]

				
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
			else if (planes[i][3] >= 30 && planes[i][3] <= 150)	L.marker([planes[i][1],planes[i][2]],{icon : greenIcon})
				                                                .bindPopup(planes[i][0])
				                                                .addTo(map);
			else if (planes[i][3] >= 151 && planes[i][3] < 300)	L.marker([planes[i][1],planes[i][2]],{icon : yellowIcon})
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
        <div class="panel-body"><img src="Tema/js/img_map/marker-icon-blue.png"style="width:15px;height:22px;"> Less than 30 sequences  <img src="Tema/js/img_map/marker-icon-green.png"style="width:15px;height:22px;"> Between 31 and 150 sequences 
		<img src="Tema/js/img_map/marker-icon-yellow.png"style="width:15px;height:22px;"> Between 151 and 300 sequences  <img src="Tema/js/img_map/marker-icon-red.png"style="width:15px;height:22px;"> More than 300 sequences</div>
        </div>
	  </div> 
     </div><!-- #primary -->
      
  
  </div><!-- #content -->
 
<?php require "./Tema/rodape.php"; ?>