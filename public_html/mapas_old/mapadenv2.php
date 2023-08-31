<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
            <h3> Dengue Virus Serotype 2: Data displayed by Country, <a href ="mapadenv2-subcontinent.php">Continent Subdivisions</a> and <a href ="mapadenv2-continent.php">Continent</a></h2>
   
   
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
				
["<strong>Djibouti</strong>:  1 sequences<br><br>Genotype II - Cosmopolitan: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Djibouti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",11.825138,42.590275,1],
["<strong>Tanzania</strong>:  13 sequences<br><br>Genotype II - Cosmopolitan: 13<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Tanzania\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.369028,34.888821,13],
["<strong>Uganda</strong>:  1 sequences<br><br>Genotype II - Cosmopolitan: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Uganda\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.373333,32.290276,1],
["<strong>Gabon</strong>:  8 sequences<br><br>Genotype II - Cosmopolitan: 8<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Gabon\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.803689,11.609444,8],
["<strong>Senegal</strong>:  6 sequences<br><br>Genotype VI - Sylvatic: 6<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Senegal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.497401,-14.452362,6],
["<strong>Mali</strong>:  5 sequences<br><br>Genotype II - Cosmopolitan: 5<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Mali\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.570692,-3.996166,5],
["<strong>Guinea</strong>:  2 sequences<br><br>Genotype VI - Sylvatic: 2<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.537950,-13.677290,2],
["<strong>Burkina Faso</strong>:  10 sequences<br><br>Genotype II - Cosmopolitan: 6<br>Genotype VI - Sylvatic: 4<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Burkina Faso\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.238333,-1.561593,10],
["<strong>Ghana</strong>:  2 sequences<br><br>Genotype II - Cosmopolitan: 1<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Ghana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.946527,-1.023194,2],
["<strong>Nigeria</strong>:  4 sequences<br><br>Genotype VI - Sylvatic: 4<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Nigeria\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.081999,8.675277,4],
["<strong>Cape Verde</strong>:  3 sequences<br><br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Cape Verde\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.002083,-24.013197,3],
["<strong>Cuba</strong>:  31 sequences<br><br>Genotype III - Southern Asian-American: 26<br>Genotype IV - Asian II: 5<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Cuba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.521757,-77.781166,31],
["<strong>Guadeloupe</strong>:  2 sequences<br><br>Genotype III - Southern Asian-American: 2<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Guadeloupe\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",16.995972,-62.067642,2],
["<strong>Bahamas</strong>:  1 sequences<br><br>Genotype III - Southern Asian-American: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Bahamas\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",25.034281,-77.396278,1],
["<strong>Barbados</strong>:  3 sequences<br><br>Genotype III - Southern Asian-American: 3<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Barbados\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.193887,-59.543198,3],
["<strong>Aruba</strong>:  1 sequences<br><br>Genotype III - Southern Asian-American: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Aruba\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.521110,-69.968338,1],
["<strong>Grenada</strong>:  1 sequences<br><br>Genotype III - Southern Asian-American: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Grenada\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.262776,-61.604172,1],
["<strong>Haiti</strong>:  2 sequences<br><br>Genotype III - Southern Asian-American: 2<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Haiti\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.971188,-72.285217,2],
["<strong>Martinique</strong>:  6 sequences<br><br>Genotype III - Southern Asian-American: 6<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Martinique\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.641528,-61.024174,6],
["<strong>Netherlands Antilles</strong>:  2 sequences<br><br>Genotype III - Southern Asian-American: 2<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Netherlands Antilles\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.226079,-69.060089,2],
["<strong>Saint Lucia</strong>:  4 sequences<br><br>Genotype III - Southern Asian-American: 4<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Saint Lucia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.909444,-60.978893,4],
["<strong>Dominica</strong>:  3 sequences<br><br>Genotype III - Southern Asian-American: 3<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Dominica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.414999,-61.370975,3],
["<strong>Puerto Rico</strong>:  80 sequences<br><br>Genotype I - American: 7<br>Genotype III - Southern Asian-American: 73<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Puerto Rico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.220833,-66.590149,80],
["<strong>Dominican Republic</strong>:  8 sequences<br><br>Genotype III - Southern Asian-American: 7<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Dominican Republic\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.735693,-70.162651,8],
["<strong>Trinidad and Tobago</strong>:  17 sequences<br><br>Genotype I - American: 2<br>Genotype III - Southern Asian-American: 15<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Trinidad and Tobago\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",10.691803,-61.222504,17],
["<strong>Jamaica</strong>:  6 sequences<br><br>Genotype III - Southern Asian-American: 6<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Jamaica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",18.109581,-77.297508,6],
["<strong>Mexico</strong>:  192 sequences<br><br>Genotype I - American: 13<br>Genotype II - Cosmopolitan: 1<br>Genotype III - Southern Asian-American: 117<br>Genomic region not suitable for genotyping 61<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Mexico\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.634501,-102.552788,192],
["<strong>Belize</strong>:  1 sequences<br><br>Genotype III - Southern Asian-American: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Belize\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",17.189877,-88.497650,1],
["<strong>Guatemala</strong>:  3 sequences<br><br>Genotype III - Southern Asian-American: 3<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Guatemala\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.783471,-90.230759,3],
["<strong>El Salvador</strong>:  3 sequences<br><br>Genotype I - American: 1<br>Genotype III - Southern Asian-American: 2<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=El Salvador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.794185,-88.896530,3],
["<strong>Honduras</strong>:  29 sequences<br><br>Genotype I - American: 5<br>Genotype III - Southern Asian-American: 23<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Honduras\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.199999,-86.241905,29],
["<strong>Nicaragua</strong>:  237 sequences<br><br>Genotype III - Southern Asian-American: 237<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Nicaragua\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.865416,-85.207230,237],
["<strong>Costa Rica</strong>:  17 sequences<br><br>Genotype III - Southern Asian-American: 5<br>Genomic region not suitable for genotyping 12<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Costa Rica\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",9.748917,-83.753426,17],
["<strong>USA</strong>:  158 sequences<br><br>Genotype II - Cosmopolitan: 1<br>Genotype III - Southern Asian-American: 152<br>Genotype IV - Asian II: 4<br>Genotype VI - Sylvatic: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=USA\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",37.090240,-95.712891,158],
["<strong>Peru</strong>:  74 sequences<br><br>Genotype I - American: 10<br>Genotype III - Southern Asian-American: 60<br>Genomic region not suitable for genotyping 4<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Peru\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-9.189967,-75.015152,74],
["<strong>Argentina</strong>:  3 sequences<br><br>Genotype I - American: 3<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Argentina\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-38.416096,-63.616673,3],
["<strong>Brazil</strong>:  243 sequences<br><br>Genotype I - American: 2<br>Genotype III - Southern Asian-American: 199<br>Genotype IV - Asian II: 1<br>Genomic region not suitable for genotyping 41<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Brazil\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-14.235004,-51.925282,243],
["<strong>Colombia</strong>:  75 sequences<br><br>Genotype I - American: 2<br>Genotype III - Southern Asian-American: 71<br>Genotype IV - Asian II: 1<br>Genotype V - Asian I: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Colombia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.570868,-74.297333,75],
["<strong>Venezuela</strong>:  117 sequences<br><br>Genotype I - American: 3<br>Genotype III - Southern Asian-American: 114<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Venezuela\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",6.423750,-66.589729,117],
["<strong>Bolivia</strong>:  13 sequences<br><br>Genotype III - Southern Asian-American: 13<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Bolivia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.290154,-63.588654,13],
["<strong>Guyana</strong>:  1 sequences<br><br>Genotype III - Southern Asian-American: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Guyana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.860416,-58.930180,1],
["<strong>Ecuador</strong>:  4 sequences<br><br>Genotype III - Southern Asian-American: 4<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Ecuador\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-1.831239,-78.183403,4],
["<strong>French Guiana</strong>:  20 sequences<br><br>Genotype III - Southern Asian-American: 15<br>Genomic region not suitable for genotyping 5<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=French Guiana\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.933889,-53.125782,20],
["<strong>Paraguay</strong>:  13 sequences<br><br>Genotype III - Southern Asian-American: 12<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Paraguay\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-23.442503,-58.443832,13],
["<strong>Suriname</strong>:  13 sequences<br><br>Genotype III - Southern Asian-American: 13<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Suriname\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.919305,-56.027782,13],
["<strong>China</strong>:  353 sequences<br><br>Genotype II - Cosmopolitan: 270<br>Genotype III - Southern Asian-American: 21<br>Genotype IV - Asian II: 3<br>Genotype V - Asian I: 36<br>Genomic region not suitable for genotyping 15<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=China\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",35.861660,104.195396,353],
["<strong>Taiwan</strong>:  69 sequences<br><br>Genotype II - Cosmopolitan: 51<br>Genotype III - Southern Asian-American: 1<br>Genotype IV - Asian II: 3<br>Genotype V - Asian I: 5<br>Genomic region not suitable for genotyping 9<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Taiwan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.697809,120.960518,69],
["<strong>Fiji</strong>:  9 sequences<br><br>Genotype I - American: 3<br>Genotype II - Cosmopolitan: 6<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Fiji\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-16.578194,179.414413,9],
["<strong>New Caledonia</strong>:  15 sequences<br><br>Genotype I - American: 2<br>Genotype II - Cosmopolitan: 13<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=New Caledonia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-20.904305,165.618042,15],
["<strong>Guam</strong>:  2 sequences<br><br>Genotype II - Cosmopolitan: 1<br>Genomic region not suitable for genotyping 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Guam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",13.444304,144.793732,2],
["<strong>Micronesia</strong>:  3 sequences<br><br>Genotype II - Cosmopolitan: 3<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Micronesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.425554,150.550812,3],
["<strong>India</strong>:  390 sequences<br><br>Genotype I - American: 20<br>Genotype II - Cosmopolitan: 147<br>Genomic region not suitable for genotyping 223<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=India\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",20.593683,78.962883,390],
["<strong>Pakistan</strong>:  205 sequences<br><br>Genotype II - Cosmopolitan: 94<br>Genomic region not suitable for genotyping 111<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Pakistan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",30.375320,69.345116,205],
["<strong>Sri Lanka</strong>:  11 sequences<br><br>Genotype II - Cosmopolitan: 8<br>Genomic region not suitable for genotyping 3<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Sri Lanka\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",7.873054,80.771790,11],
["<strong>Iran</strong>:  1 sequences<br><br>Genotype II - Cosmopolitan: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Iran\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",32.427910,53.688046,1],
["<strong>Bangladesh</strong>:  9 sequences<br><br>Genotype II - Cosmopolitan: 9<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Bangladesh\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.684994,90.356331,9],
["<strong>Maldives</strong>:  1 sequences<br><br>Genotype II - Cosmopolitan: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Maldives\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",3.202778,73.220680,1],
["<strong>Bhutan</strong>:  2 sequences<br><br>Genotype II - Cosmopolitan: 2<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Bhutan\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",27.514162,90.433601,2],
["<strong>Nepal</strong>:  1 sequences<br><br>Genotype II - Cosmopolitan: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Nepal\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",28.394857,84.124008,1],
["<strong>Malaysia</strong>:  202 sequences<br><br>Genotype II - Cosmopolitan: 184<br>Genotype III - Southern Asian-American: 1<br>Genotype V - Asian I: 9<br>Genotype VI - Sylvatic: 3<br>Genomic region not suitable for genotyping 5<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Malaysia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.210484,101.975769,202],
["<strong>Indonesia</strong>:  227 sequences<br><br>Genotype I - American: 1<br>Genotype II - Cosmopolitan: 223<br>Genotype IV - Asian II: 1<br>Genomic region not suitable for genotyping 2<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Indonesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-0.789275,113.921326,227],
["<strong>Philippines</strong>:  146 sequences<br><br>Genotype II - Cosmopolitan: 105<br>Genotype IV - Asian II: 9<br>Genomic region not suitable for genotyping 32<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Philippines\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.879721,121.774017,146],
["<strong>Singapore</strong>:  603 sequences<br><br>Genotype II - Cosmopolitan: 591<br>Genotype V - Asian I: 3<br>Genomic region not suitable for genotyping 9<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Singapore\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",1.352083,103.819839,603],
["<strong>Thailand</strong>:  700 sequences<br><br>Genotype II - Cosmopolitan: 6<br>Genotype III - Southern Asian-American: 10<br>Genotype V - Asian I: 490<br>Genomic region not suitable for genotyping 194<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Thailand\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",15.870032,100.992538,700],
["<strong>Viet Nam</strong>:  456 sequences<br><br>Genotype II - Cosmopolitan: 6<br>Genotype III - Southern Asian-American: 102<br>Genotype V - Asian I: 336<br>Genomic region not suitable for genotyping 12<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Viet Nam\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",14.058324,108.277199,456],
["<strong>Myanmar</strong>:  58 sequences<br><br>Genotype III - Southern Asian-American: 1<br>Genotype V - Asian I: 57<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Myanmar\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",21.913965,95.956223,58],
["<strong>East Timor</strong>:  13 sequences<br><br>Genotype II - Cosmopolitan: 13<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=East Timor\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-8.874217,125.727539,13],
["<strong>Brunei</strong>:  3 sequences<br><br>Genotype II - Cosmopolitan: 3<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Brunei\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",4.535277,114.727669,3],
["<strong>Cambodia</strong>:  59 sequences<br><br>Genotype III - Southern Asian-American: 9<br>Genotype V - Asian I: 50<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Cambodia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",12.565679,104.990959,59],
["<strong>Laos</strong>:  6 sequences<br><br>Genotype V - Asian I: 6<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Laos\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",19.856270,102.495499,6],
["<strong>Saudi Arabia</strong>:  22 sequences<br><br>Genotype II - Cosmopolitan: 10<br>Genomic region not suitable for genotyping 12<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Saudi Arabia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",23.885942,45.079163,22],
["<strong>Australia</strong>:  31 sequences<br><br>Genotype II - Cosmopolitan: 19<br>Genotype V - Asian I: 5<br>Genotype VI - Sylvatic: 1<br>Genomic region not suitable for genotyping 6<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Australia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-25.274399,133.775131,31],
["<strong>Papua New Guinea</strong>:  12 sequences<br><br>Genotype II - Cosmopolitan: 9<br>Genotype IV - Asian II: 3<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Papua New Guinea\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-6.314993,143.955551,12],
["<strong>Tonga</strong>:  14 sequences<br><br>Genotype I - American: 14<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Tonga\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.178986,-175.198242,14],
["<strong>Wallis and Futuna</strong>:  5 sequences<br><br>Genotype II - Cosmopolitan: 5<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Wallis and Futuna\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.768752,-177.156097,5],
["<strong>Cook Islands</strong>:  1 sequences<br><br>Genotype II - Cosmopolitan: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Cook Islands\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-21.236736,-159.777664,1],
["<strong>Samoa</strong>:  4 sequences<br><br>Genotype I - American: 4<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Samoa\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-13.759029,-172.104630,4],
["<strong>Tuvalu</strong>:  1 sequences<br><br>Genotype II - Cosmopolitan: 1<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=Tuvalu\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-7.109535,177.649323,1],
["<strong>French Polynesia</strong>:  15 sequences<br><br>Genotype I - American: 3<br>Genotype II - Cosmopolitan: 12<br><br><strong>Download - </strong>  <a href=\"denv2countrydownload.php?value=French Polynesia\"><span class=\"glyphicon glyphicon-download\"></span></a><br>",-17.679743,-149.406845,15]

				
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