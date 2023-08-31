<?php 
session_start();
require "Tema/cabecalho.php"; 
 
?>

<div id="content" class="site-content clearfix">
    

      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">
            
            <div class="row">
                      
             

       

        
			
			
	<!----------SEARCH FORM----------------------- -->		
             <div class="search container">
             <br><br>
<?php 


$map_virus = $_GET['virus'];
$map_cont = $_GET['value'];

if ($map_virus == "ALL") {
	$query = "select *, genotipos.vname,genotipos.genotype,species.id,species.nane,species.specie,geodata.continent,geodata.sub_continent,geodata.geolocator from sequencias inner join genotipos on sequencias.genotype = genotipos.code inner join species on sequencias.host = species.id inner join geodata on sequencias.geolocator=geodata.geolocator";
    $query = $query." where geodata.sub_continent like '%".$map_cont."%'";
}
else {
$query = "select *, genotipos.vname,genotipos.genotype,species.id,species.nane,species.specie,geodata.continent,geodata.sub_continent,geodata.geolocator from sequencias inner join genotipos on sequencias.genotype = genotipos.code inner join species on sequencias.host = species.id inner join geodata on sequencias.geolocator=geodata.geolocator";
$query = $query." where sequencias.serotype like '%".$map_virus."%'";
$query = $query." and  geodata.sub_continent like '%".$map_cont."%'"; 
}

                  
            
require "conexao_element.php";

if ($map_virus == "ALL")    {$virus = "Dengue, Zika and Chikungunya Viruses ";       $mapa ="mapatodos-subcontinent.php";}
if ($map_virus == "DENV")   {$virus = "Dengue Virus ";      $mapa ="mapadenvgeral-subcontinent.php";}	
if ($map_virus == "DENV-1") {$virus = "Dengue Serotype 1 "; $mapa ="mapadenv1-subcontinent.php";}
if ($map_virus == "DENV-2") {$virus = "Dengue Serotype 2 "; $mapa ="mapadenv2-subcontinent.php";}
if ($map_virus == "DENV-3") {$virus = "Dengue Serotype 3 "; $mapa ="mapadenv3-subcontinent.php";}
if ($map_virus == "DENV-4") {$virus = "Dengue Serotype 4 "; $mapa ="mapadenv4-subcontinent.php";}
if ($map_virus == "CHIKV")  {$virus = "Chikungunya Virus "; $mapa ="mapachikv-subcontinent.php";}
if ($map_virus == "ZIKV")   {$virus = "Zika Virus ";        $mapa ="mapazikv-subcontinent.php";}


                //  $dados = $_SESSION['teste'];
           
                  
                 
?>
        <div class="container">
        <div class="table-responsive"> 
<?php
	 $resultado2 = array();
  
		 if($num > 0){		
?>
          <h3>Results for <?php echo $virus; ?>in <?php echo $map_cont; ?></h3><hr>

            <form name ="print_data" method="post" action="test_print.php">
            <table id="data_table" class="table table-bordered table-responsive"cellspacing="0" width="100%">
              <thead>
                    <tr>
                         <th>Download</th>
                        <th>Accession</th>
                        <th>Virus</th>
                        <th>Genotype</th>
                        <th>Genomic Region</th>
						<th>Host</th>
                        <th>Country</th>
                        <th>Sampling Year</th>   
                        <th>Sequence Lenght</th>  
                        <th>Clinical Status</th>  
                        <th>Gender</th>  
                        <th>Age</th>  
                    </tr>
              </thead>
              <tbody>
               

                      
             
               <?php $variavel = 0; do{ ?>
                   
              

              

                <tr>
                    <td> <input type="checkbox" name ="campo[]" value="<?php echo $variavel; ?>" /></td>
                    <td><?php echo $resultado['locus']; ?> </td> 
                    <td><?php echo $resultado['vname'] ;?> </td> 
                    <td><?php echo $resultado['genotype'] ;?> </td> 
                    <td><?php echo $resultado['product'] ;?> </td> 
					<td><?php echo $resultado['nane'] ;?> </td> 
                    <td><?php echo $resultado['country']; ?> </td> 
                    <td><?php if($resultado['collectiondate']==0) $resultado['collectiondate']='N/A';
					          echo $resultado['collectiondate']; ?> </td> 
                    <td><?php echo $resultado['size'] ;?> </td>
                    <td><?php echo $resultado['clinic'] ;?> </td>
                    <td><?php echo $resultado['gender'];?> </td>
                    <td><?php if($resultado['age']==0) $resultado['age']='N/A';
					          echo $resultado['age'];?> </td>  

                </tr>
                <?php
                 array_push($resultado2, $resultado);
				 $variavel++;
              } while($resultado = $execute->fetch_assoc());
              $_SESSION['teste'] = $resultado2; 

         }else
            echo "<script>alert('Not Found! ');</script>"
                 
                 

            
  ?>

 
          
              </tbody>

            </table>
            
</div>
</div>


           
  <!----------------------------------DOWNLOAD-------------------------------------------------------------------->
            
       
   <h3 class="download text-center ">Download File : </h3>
      <div class="text-center">   
      <button class='btn btn-default ' type="submit">Excel</button>


        <span ><a  class='btn btn-default ' data-toggle="modal" data-target="#myModal">FASTA</a> </span> </div>

        <section class="modal fade" role="dialog" id="myModal">
          <section class="modal-dialog">
             <section class="modal-content">
                     <header class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h3 id="meuModel">Make your fasta file ! </h3>

                     </header>

                     <section class="model-body">
                      
                            <label class="checkbox-inline"><input type="checkbox" name="country" value="country">Country</label>
                            <label class="checkbox-inline"><input type="checkbox" name="date" value="date">Collectiondate</label>
							<label class="checkbox-inline"><input type="checkbox" name="host" value="host">Host</label>
                            <span><a href=""></a></span>      
                       
                     </section> 
                     <footer class="model-footer" >
                        <button  class='btn btn-primary bt_center' type="submit" formaction="fasta.php" >Download</button>
                        </form>
                       
                    </footer>
              </section>
            </section>
         </section>


      <a href="<?php echo $mapa;?>" class="btn btn-default">
          <span class="glyphicon glyphicon-chevron-left"></span> Return Map
        </a>

    
             </div> <!---search--->

         </div> <!---#row--->


      </div>    <!----#primary--->  

     </div><!-- #content -->

     <div></div>
        
  


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105985409-1', 'auto');
  ga('send', 'pageview');

</script>



<?php require "Tema/rodape.php"; ?>
