<?php require "./Tema/cabecalho.php"; ?>


  <div id="content" class="site-content clearfix">

      
        <div class="content-area primary col-md-12 ">
            
            <div class="desc_comum">
			<br><br>
           <h2 class="entry-title"><strong>Arbovirusbd Database -How to Use</strong></h2>
           <p class="paragrafo">
           The main purpose of the Arbovirusbd database is to store arbovirus genomic sequences and to increase this data, with additional information obtained from clinical, epidemiological and geographic studies. It was developed through a partnership between Gonçalo Moniz Research Center / Oswaldo Cruz Foundation (Brazil), Bahia State University (Brazil), Rega Institute at Katholieke Universiteit Leuven (Belgium) and University of KwaZulu-Natal (South Africa).</p>
           <h3><strong>The Database Interface<strong></h3><hr>
		  <figure>
          <img class=" img-center " style="" src="Tema/images/tela21.png" alt="Generic placeholder image" width="700" height="700">
          </figure>
		  
         
	      <p class="paragrafo">The Arbovirusbd database home page displays an interface that contains multiple fields for refining database queries.</p>
          <p class="paragrafo">One or more fields can be selected. The user also may select multiple choices to make the search more efficient, to do that hold down the ctrl key.</p>
          <p class="paragrafo">Start the search by selecting one or more of the types of arboviruses available. if you select multiple virus types simultaneously, you will not see options for the fields: genotypes, genomic regions and clinical status.</p>
          <p class="paragrafo">The remaining unused fields will be ignored when searching the database, but their values will be presented in the final result.</p>
          <h3><strong>Example</strong></h3><hr>
		  <p class="paragrafo">Selecting a virus </p>
		  <figure>
		  <img class=" img-center " style="" src="Tema/images/tela11.png" alt="Generic placeholder image" width="700" height="700">
		  </figure>
		  <p class="paragrafo">Selecting a genotype </p>
		  <figure>
		  <img class=" img-center " style="" src="Tema/images/tela22.png" alt="Generic placeholder image" width="700" height="700">
		  </figure>
		  <p class="paragrafo">Selecting a genomic region</p>
		  <figure>
		  <img class=" img-center " style="" src="Tema/images/telaregion.png" alt="Generic placeholder image" width="700" height="700">
		  </figure>
		  
		  
		  <h3><strong>Database Fields Definitions<strong></h3><hr>
		  <p class="paragrafo"><strong>Virus</strong>: initially it is possible to choose between the following arboviruses: ZIKV, CHIKV, DENV-1, DENV-2, DENV-3, DENV-4.</p>
		  <p class="paragrafo"><strong>Genotype</strong>: shows all genotypes for each selected virus, obtained with the <a  href="http://bioafrica2.mrc.ac.za/rega-genotype/typingtool/aedesviruses/">Dengue, Zika & Chikungunya Viruses Typing Tool Version 1.0</a> .</p>
		  <p class="paragrafo"><strong>Genomic Region</strong>: shows all available genomic regions in the database for each virus type. Following the nomenclature  presented  in the Dengue, Zika & Chikungunya Viruses Typing Tool. </p>
		  <figure>
		  <img class=" img-center " style="" src="Tema/images/tela6.png" alt="Generic placeholder image" width="700" height="700">
		  </figure>
		  <p class="paragrafo"><strong>Sampling Host</strong>: in this field it is possible to select the host from the sequence, when this information is available. For exemple: homo sapiens, mosquito varieties etc.</p>
		  <p class="paragrafo"><strong>Sampling Collection Year</strong>: the collection year of the sequence or zero when it is not available</p>
		  <p class="paragrafo"><strong>Continent</strong>:  represents the registered continents in the database.</p>
		  <p class="paragrafo"><strong>SubContinent</strong>:  represents the registered subcontinents in the database.</p>
		  <p class="paragrafo"><strong>Sampling Country</strong>: represents the sampling country registered in the database.</p>
		  <p class="paragrafo"><strong>Clinical Status</strong>: shows clinical profile values of the host patient sequence or none in other cases.</p>
		  <p class="paragrafo"><strong>Gender</strong>: this field shows the values M for male, F for female, if the host is homo sapiens and none in other cases</p>
		  <p class="paragrafo"><strong>Age</strong>: shows the registered age of the patient, if the host is homo sapiens or 0 in other cases.</p>
		  <h3><strong>Data Presentation</strong></h3><hr>
          <p class="paragrafo">After choosing the search criteria, click the search buttom and the results will be shown in table format</p>
          <figure>
		  <img class=" img-center " style="" src="Tema/images/novatela.png" alt="Generic placeholder image" width="700" height="700">
		  </figure>
		  
		  
		  <h3><strong>Donwloads</strong></h3><hr> 
		  
          <p class="paragrafo"><strong>Excel</strong>: The search result will be available in standard spreadsheet format,
                           in this tool it is possible perform other file changes.</p>	
          <p class="paragrafo"><strong>Fasta</strong>: The sequences in FASTA format will begin with a single-line description, followed by lines of sequence data. The first line contains the character '>' and the accession genbank locator, it is possible to add optionally  the year and sampling country of each sequence.</p>		  
		  
		  <h3><strong>Sequences Global Distribution Maps</strong></h3><hr> 
		  <p class="paragrafo">In this page Clicking on the respective button, it is possible to choose geographic information for each virus.</p>
		  <figure>
		  <img class=" img-center " style="" src="Tema/images/mapa1.png" alt="Generic placeholder image" width="700" height="700">
		  </figure>
		  <p class="paragrafo">Shows the geographic distribution of each virus and an overview for all viruses and for Dengue. To access the information, click on the pin</p>
		  <figure>
		  <img class=" img-center " style="" src="Tema/images/mapa2.png" alt="Generic placeholder image" width="700" height="700">
		  </figure>
		  <p class="paragrafo">The maps that contain a download symbol in the popup, it is possible to download the data directly from the map</p>
		  <figure>
		  <img class=" img-center " style="" src="Tema/images/mapa3.png" alt="Generic placeholder image" width="700" height="700">
		  </figure>

      </div>   <!---#desc-comum-->   

     </div><!-- #primary -->
        
  
  </div><!-- #inicial -->

<?php require "./Tema/rodape.php"; ?>