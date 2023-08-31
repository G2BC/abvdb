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
				["Mayotte: 2 sequencias <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Mayotte\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-12.827500,45.166245,2],
["Mauritius: 15 sequencias <br><br>East-Central-South-African: 15<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Mauritius\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.348404,57.552151,15],
["Seychelles: 5 sequencias <br><br>East-Central-South-African: 5<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Seychelles\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-4.679574,55.491978,5],
["Kenya: 21 sequencias <br><br>East-Central-South-African: 21<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Kenya\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.023559,37.906193,21],
["Tanzania: 3 sequencias <br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Tanzania\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.369028,34.888821,3],
["Uganda: 2 sequencias <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Uganda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.373333,32.290276,2],
["Madagascar: 2 sequencias <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Madagascar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-18.766947,46.869106,2],
["Reunion: 18 sequencias <br><br>East-Central-South-African: 18<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Reunion\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.115141,55.536385,18],
["Comoros: 6 sequencias <br><br>East-Central-South-African: 6<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Comoros\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.875001,43.872219,6],
["Central African Republic: 35 sequencias <br><br>East-Central-South-African: 35<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Central African Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,35],
["Cameroon: 4 sequencias <br><br>East-Central-South-African: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Cameroon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.369722,12.354722,4],
["Gabon: 8 sequencias <br><br>East-Central-South-African: 8<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Gabon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.803689,11.609444,8],
["Congo - Brazzaville: 2 sequencias <br><br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Congo - Brazzaville\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.228021,15.827659,2],
["Democratic Republic of the Congo: 11 sequencias <br><br>East-Central-South-African: 11<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Democratic Republic of the Congo\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-4.038333,21.758663,11],
["Angola: 3 sequencias <br><br>East-Central-South-African: 2<br>Could not assign: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Angola\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-11.202692,17.873886,3],
["South Africa: 5 sequencias <br><br>East-Central-South-African: 5<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=South Africa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-30.559483,22.937506,5],
["Senegal: 47 sequencias <br><br>East-Central-South-African: 1<br>West African: 46<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Senegal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,47],
["Guinea: 4 sequencias <br><br>East-Central-South-African: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.537950,-13.677290,4],
["Nigeria: 2 sequencias <br><br>West African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Nigeria\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.081999,8.675277,2],
["Cuba: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Cuba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.521757,-77.781166,2],
["Guadeloupe: 9 sequencias <br><br>Asian and Caribbean: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Guadeloupe\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.995972,-62.067642,9],
["Saint Barthelemy: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Barthelemy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.896179,-62.849781,1],
["Bahamas: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Bahamas\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",25.034281,-77.396278,1],
["Barbados: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Barbados\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.193887,-59.543198,2],
["Anguilla: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Anguilla\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220554,-63.068615,2],
["Antigua and Barbuda: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Antigua and Barbuda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.060816,-61.796429,1],
["British Virgin Islands: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=British Virgin Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.426929,-64.620789,1],
["Aruba: 8 sequencias <br><br>Asian and Caribbean: 8<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Aruba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.521110,-69.968338,8],
["Cayman Islands: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Cayman Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.513468,-80.566956,2],
["Grenada: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Grenada\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.262776,-61.604172,2],
["Haiti: 16 sequencias <br><br>Asian and Caribbean: 14<br>East-Central-South-African: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Haiti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.971188,-72.285217,16],
["Martinique: 12 sequencias <br><br>Asian and Caribbean: 12<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Martinique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.641528,-61.024174,12],
["Turks and Caicos: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Turks and Caicos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.799765,-72.168159,2],
["Montserrat: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Montserrat\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.742498,-62.187366,2],
["Saint Martin: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Martin\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.073099,-63.082199,2],
["Saint Lucia: 4 sequencias <br><br>Asian and Caribbean: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Lucia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.909444,-60.978893,4],
["Dominica: 3 sequencias <br><br>Asian and Caribbean: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Dominica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.414999,-61.370975,3],
["Saint Vincent and the Grenadines: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Vincent and the Grenadines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.158720,-61.224751,1],
["Puerto Rico: 7 sequencias <br><br>Asian and Caribbean: 7<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Puerto Rico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220833,-66.590149,7],
["Dominican Republic: 19 sequencias <br><br>Asian and Caribbean: 19<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Dominican Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,19],
["Trinidad and Tobago: 11 sequencias <br><br>Asian and Caribbean: 11<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Trinidad and Tobago\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",10.691803,-61.222504,11],
["Saint Kitts and Nevis: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Saint Kitts and Nevis\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.357822,-62.782990,1],
["Jamaica: 4 sequencias <br><br>Asian and Caribbean: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Jamaica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.109581,-77.297508,4],
["Mexico: 55 sequencias <br><br>Asian and Caribbean: 55<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Mexico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,55],
["Guatemala: 8 sequencias <br><br>Asian and Caribbean: 8<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Guatemala\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.783471,-90.230759,8],
["El Salvador: 5 sequencias <br><br>Asian and Caribbean: 5<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=El Salvador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.794185,-88.896530,5],
["Honduras: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Honduras\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.199999,-86.241905,2],
["Nicaragua: 149 sequencias <br><br>Asian and Caribbean: 149<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Nicaragua\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.865416,-85.207230,149],
["Panama: 3 sequencias <br><br>Asian and Caribbean: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Panama\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.537981,-80.782127,3],
["USA: 139 sequencias <br><br>Asian and Caribbean: 132<br>East-Central-South-African: 7<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=USA\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.090240,-95.712891,139],
["Brazil: 235 sequencias <br><br>Asian and Caribbean: 40<br>East-Central-South-African: 130<br>Could not assign: 65<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Brazil\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,235],
["Colombia: 63 sequencias <br><br>Asian and Caribbean: 54<br>Could not assign: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Colombia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.570868,-74.297333,63],
["Venezuela: 9 sequencias <br><br>Asian and Caribbean: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Venezuela\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.423750,-66.589729,9],
["Guyana: 5 sequencias <br><br>Asian and Caribbean: 5<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Guyana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.860416,-58.930180,5],
["Ecuador: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Ecuador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-1.831239,-78.183403,1],
["French Guiana: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=French Guiana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.933889,-53.125782,1],
["Suriname: 3 sequencias <br><br>Asian and Caribbean: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Suriname\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.919305,-56.027782,3],
["Curacao: 14 sequencias <br><br>Asian and Caribbean: 13<br>Could not assign: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Curacao\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.169570,-68.990021,14],
["Japan: 1 sequencias <br><br>East-Central-South-African: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Japan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",36.204823,138.252930,1],
["South Korea: 6 sequencias <br><br>Asian and Caribbean: 5<br>East-Central-South-African: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=South Korea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.907757,127.766922,6],
["China: 34 sequencias <br><br>Asian and Caribbean: 3<br>East-Central-South-African: 31<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=China\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.861660,104.195396,34],
["Hong Kong: 4 sequencias <br><br>East-Central-South-African: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Hong Kong\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",22.396427,114.109497,4],
["New Caledonia: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=New Caledonia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.904305,165.618042,2],
["Kiribati: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Kiribati\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-3.370417,-168.734039,1],
["Micronesia: 4 sequencias <br><br>Asian and Caribbean: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Micronesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,4],
["India: 1321 sequencias <br><br>Asian and Caribbean: 24<br>East-Central-South-African: 1264<br>West African: 6<br>Could not assign: 27<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=India\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,1321],
["Pakistan: 23 sequencias <br><br>East-Central-South-African: 23<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Pakistan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",30.375320,69.345116,23],
["Sri Lanka: 73 sequencias <br><br>East-Central-South-African: 73<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Sri Lanka\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.873054,80.771790,73],
["Bangladesh: 29 sequencias <br><br>East-Central-South-African: 29<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Bangladesh\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.684994,90.356331,29],
["Bhutan: 6 sequencias <br><br>East-Central-South-African: 6<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Bhutan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",27.514162,90.433601,6],
["Malaysia: 159 sequencias <br><br>Asian and Caribbean: 40<br>East-Central-South-African: 119<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Malaysia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,159],
["Indonesia: 138 sequencias <br><br>Asian and Caribbean: 122<br>East-Central-South-African: 10<br>Could not assign: 6<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Indonesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.789275,113.921326,138],
["Philippines: 57 sequencias <br><br>Asian and Caribbean: 54<br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Philippines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.879721,121.774017,57],
["Singapore: 104 sequencias <br><br>Asian and Caribbean: 3<br>East-Central-South-African: 101<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Singapore\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.352083,103.819839,104],
["Thailand: 342 sequencias <br><br>Asian and Caribbean: 17<br>East-Central-South-African: 308<br>Could not assign: 17<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Thailand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.870032,100.992538,342],
["Viet Nam: 7 sequencias <br><br>East-Central-South-African: 7<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Viet Nam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.058324,108.277199,7],
["Myanmar: 9 sequencias <br><br>East-Central-South-African: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Myanmar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.913965,95.956223,9],
["East Timor: 1 sequencias <br><br>Asian and Caribbean: 1<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=East Timor\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-8.874217,125.727539,1],
["Cambodia: 8 sequencias <br><br>East-Central-South-African: 8<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Cambodia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.565679,104.990959,8],
["Laos: 56 sequencias <br><br>East-Central-South-African: 56<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Laos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.856270,102.495499,56],
["Yemen: 9 sequencias <br><br>East-Central-South-African: 9<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Yemen\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.552727,48.516388,9],
["Italy: 53 sequencias <br><br>Asian and Caribbean: 3<br>East-Central-South-African: 24<br>Could not assign: 26<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Italy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",41.871941,12.567380,53],
["France: 3 sequencias <br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=France\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",46.227638,2.213749,3],
["Australia: 3 sequencias <br><br>East-Central-South-African: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Australia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,3],
["Papua New Guinea: 4 sequencias <br><br>East-Central-South-African: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Papua New Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.314993,143.955551,4],
["Tonga: 3 sequencias <br><br>Asian and Caribbean: 3<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Tonga\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.178986,-175.198242,3],
["Samoa: 2 sequencias <br><br>Asian and Caribbean: 2<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=Samoa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.759029,-172.104630,2],
["French Polynesia: 4 sequencias <br><br>Asian and Caribbean: 4<br><br><strong>Download - </strong>  <a href=\"chikvcountrydownload.php?value=French Polynesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,4]

				
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