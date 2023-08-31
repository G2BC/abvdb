<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Zika Virus: Data displayed by Country,<a href ="mapazikv-subcontinent.php">Continent Subdivisions</a> and <a href ="mapazikv-continent.php">Continent</a></h3>
   
   
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

["<strong>Uganda</strong>: 14 sequences <br><br>African: 13<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Uganda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.373333,32.290276,14],
["<strong>Central African Republic</strong>: 5 sequences <br><br>African: 5<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Central African Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.611111,20.939444,5],
["<strong>Gabon</strong>: 2 sequences <br><br>African: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Gabon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.803689,11.609444,2],
["<strong>Senegal</strong>: 71 sequences <br><br>African: 53<br>Genomic region not suitable for genotyping 18<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Senegal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,71],
["<strong>Burkina Faso</strong>: 3 sequences <br><br>African: 2<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Burkina Faso\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.238333,-1.561593,3],
["<strong>Nigeria</strong>: 5 sequences <br><br>African: 5<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Nigeria\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.081999,8.675277,5],
["<strong>Cuba</strong>: 3 sequences <br><br>Asian: 3<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Cuba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.521757,-77.781166,3],
["<strong>Guadeloupe</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Guadeloupe\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.995972,-62.067642,1],
["<strong>Saint Barthelemy</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Saint Barthelemy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.896179,-62.849781,1],
["<strong>Haiti</strong>: 13 sequences <br><br>Asian: 13<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Haiti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.971188,-72.285217,13],
["<strong>Martinique</strong>: 3 sequences <br><br>Asian: 3<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Martinique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.641528,-61.024174,3],
["<strong>Puerto Rico</strong>: 10 sequences <br><br>Asian: 10<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Puerto Rico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220833,-66.590149,10],
["<strong>Dominican Republic</strong>: 40 sequences <br><br>Asian: 40<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Dominican Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,40],
["<strong>Jamaica</strong>: 5 sequences <br><br>Asian: 5<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Jamaica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.109581,-77.297508,5],
["<strong>Mexico</strong>: 26 sequences <br><br>Asian: 26<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Mexico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,26],
["<strong>Guatemala</strong>: 3 sequences <br><br>Asian: 3<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Guatemala\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.783471,-90.230759,3],
["<strong>El Salvador</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=El Salvador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.794185,-88.896530,1],
["<strong>Honduras</strong>: 24 sequences <br><br>Asian: 24<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Honduras\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.199999,-86.241905,24],
["<strong>Nicaragua</strong>: 20 sequences <br><br>Asian: 20<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Nicaragua\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.865416,-85.207230,20],
["<strong>Panama</strong>: 9 sequences <br><br>Asian: 9<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Panama\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",8.537981,-80.782127,9],
["<strong>USA</strong>: 63 sequences <br><br>Asian: 63<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=USA\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.090240,-95.712891,63],
["<strong>Peru</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Peru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.189967,-75.015152,2],
["<strong>Argentina</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Argentina\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-38.416096,-63.616673,2],
["<strong>Brazil</strong>: 209 sequences <br><br>African: 2<br>Asian: 206<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Brazil\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,209],
["<strong>Chile: Easter Island</strong>: 65 sequences <br><br>Asian: 65<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Chile: Easter Island\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-27.112989,-109.349579,65],
["<strong>Colombia</strong>: 60 sequences <br><br>Asian: 59<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Colombia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.570868,-74.297333,60],
["<strong>Venezuela</strong>: 3 sequences <br><br>Asian: 3<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Venezuela\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.423750,-66.589729,3],
["<strong>Guyana</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Guyana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.860416,-58.930180,1],
["<strong>Ecuador</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Ecuador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-1.831239,-78.183403,2],
["<strong>French Guiana</strong>: 9 sequences <br><br>Asian: 9<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=French Guiana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.933889,-53.125782,9],
["<strong>Suriname</strong>: 7 sequences <br><br>Asian: 7<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Suriname\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.919305,-56.027782,7],
["<strong>Japan</strong>: 5 sequences <br><br>Asian: 5<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Japan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",36.204823,138.252930,5],
["<strong>South Korea</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=South Korea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.907757,127.766922,2],
["<strong>China</strong>: 31 sequences <br><br>Asian: 31<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=China\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.861660,104.195396,31],
["<strong>Taiwan</strong>: 8 sequences <br><br>Asian: 8<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Taiwan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.697809,120.960518,8],
["<strong>Solomon Islands</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Solomon Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.645710,160.156189,2],
["<strong>Fiji</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Fiji\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,1],
["<strong>New Caledonia</strong>: 8 sequences <br><br>Asian: 4<br>Genomic region not suitable for genotyping 4<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=New Caledonia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.904305,165.618042,8],
["<strong>Micronesia</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Micronesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,1],
["<strong>India</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=India\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,2],
["<strong>Bangladesh</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Bangladesh\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.684994,90.356331,1],
["<strong>Malaysia</strong>: 14 sequences <br><br>Asian: 14<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Malaysia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,14],
["<strong>Indonesia</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Indonesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.789275,113.921326,2],
["<strong>Philippines</strong>: 6 sequences <br><br>Asian: 6<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Philippines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.879721,121.774017,6],
["<strong>Singapore</strong>: 120 sequences <br><br>Asian: 120<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Singapore\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.352083,103.819839,120],
["<strong>Thailand</strong>: 140 sequences <br><br>African: 2<br>Asian: 138<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Thailand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.870032,100.992538,140],
["<strong>Viet Nam</strong>: 8 sequences <br><br>Asian: 8<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Viet Nam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.058324,108.277199,8],
["<strong>Cambodia</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Cambodia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.565679,104.990959,2],
["<strong>Israel</strong>: 4 sequences <br><br>Asian: 4<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Israel\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",31.046053,34.851612,4],
["<strong>Spain</strong>: 9 sequences <br><br>Asian: 9<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Spain\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",40.463669,-3.749220,9],
["<strong>Italy</strong>: 11 sequences <br><br>Asian: 11<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Italy\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",41.871941,12.567380,11],
["<strong>Portugal</strong>: 2 sequences <br><br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Portugal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",39.399872,-8.224454,2],
["<strong>Australia</strong>: 1 sequences <br><br>Asian: 1<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Australia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,1],
["<strong>New Zealand</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=New Zealand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-40.900558,174.885971,2],
["<strong>Tonga</strong>: 2 sequences <br><br>Asian: 2<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Tonga\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.178986,-175.198242,2],
["<strong>Cook Islands</strong>: 8 sequences <br><br>Asian: 8<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Cook Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.236736,-159.777664,8],
["<strong>Samoa</strong>: 4 sequences <br><br>Asian: 4<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=Samoa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.759029,-172.104630,4],
["<strong>French Polynesia</strong>: 20 sequences <br><br>Asian: 17<br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"zikvcountrydownload.php?value=French Polynesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,20]
				
				
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
			 if ( planes[i][3]  < 20)
			                        L.marker([planes[i][1],planes[i][2]],{icon : blueIcon})
			                     	.bindPopup(planes[i][0])
				                   .addTo(map);
			else if (planes[i][3] >= 20 && planes[i][3] <= 40)	L.marker([planes[i][1],planes[i][2]],{icon : greenIcon})
				                                                .bindPopup(planes[i][0])
				                                                .addTo(map);
			else if (planes[i][3] >40 && planes[i][3] <= 80)	L.marker([planes[i][1],planes[i][2]],{icon : yellowIcon})
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
	  <div class="content-area primary col-md-12"> <!-- Legenda -->
	  <div class="panel panel-default text-center">
        <div class="panel-body"><img src="Tema/js/img_map/marker-icon-blue.png"style="width:15px;height:22px;"> Less than 20 sequences  <img src="Tema/js/img_map/marker-icon-green.png"style="width:15px;height:22px;"> Between 20 and 40 sequences 
		<img src="Tema/js/img_map/marker-icon-yellow.png"style="width:15px;height:22px;"> Between 41 and 80 sequences  <img src="Tema/js/img_map/marker-icon-red.png"style="width:15px;height:22px;"> More than 80 sequences</div>
        </div>
		</div>
     </div><!-- #primary -->
      
  
  </div><!-- #content -->
 
<?php require "./Tema/rodape.php"; ?>