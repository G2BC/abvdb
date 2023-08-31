<?php
session_start();
require "Tema/cabecalho.php";
require "config.php";
?>

<div id="content" class="site-content clearfix">


      <div class="breadcrumbs"></div>
        <div class="content-area primary col-md-12 ">

            <div class="row">



       <div class = "container" id ="inicio">
            <br><br>
			<div class="well well-sm">
              <h3><center><strong>ABVdb</strong></center></h3>
            <h4><strong> Arthropode Borne Virus database - ABVdb</strong>, is a database containing phylogenetic, epidemiological and clinical data from arbovirus sequences,
			initially from <strong> Dengue </strong>, <strong>Zika</strong> and <strong>Chikungunya</strong> virus types. In the future, this project will be extended to include new arbovirus into the database.</h4>

		  </div>
		  </div>




	<!----------SEARCH FORM----------------------- -->
             <div class="search container">
			 <h3><strong>Select your search criteria:</strong></h3>
              <form method="post"  class="form-margin " name="form" name="">

            <h3>Sequence Information </h3>
            <hr>
                               <?php include_once("conexao.php");?>

                              <select style=" position: relative;" class="" name="virus" id="virus" required="required" title="This field should not be left blank.">
                              <option value="">Virus</option>
                              

                                     <?php

                                        $result_cat_post = "SELECT DISTINCT vname FROM genotipos";
                                        $resultado_cat_post = mysqli_query($conn, $result_cat_post);

                                        while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
                                          echo '<option value="'.$row_cat_post['vname'].'">'.$row_cat_post['vname'].'</option>';
                                        }
                                       ?>
                              </select>

                              <select style=" position: relative;" class="" name="genotype" id="genotype">

                                  <option value="">Genotype</option>
                                  <option value="">All</option>

                              </select>
                              <select style=" position: relative;" class="" name="product" id="product">
                                  <option value="">Genomic Regions</option>
                                  <option value="">All</option>

                              </select>

                              <select style=" position: relative;" class="" name="host" id="host">

                                   <option value="">Host</option>
                                    <option value="">All</option>
		                           <option value="Homo sapiens">Homo sapiens</option>
		                           <option value="mosquito">Mosquito</option>
		                           <option value="simian">Simian</option>
				                   <option value="N/A"> (N/A) Not Available</option>
                              </select>

		<br><br>

							  <p>Sample Collection Year: select one or a range:
							  <a href="#" data-toggle="modal" data-target="#modalyear"><span class="glyphicon glyphicon-question-sign"></span></a></p>

                              <select style=" position:realtive;" data-width="fit" name="minDate" id="minDate">
                                  <option value="">Initial</option>
                                  <option value="">All</option>

								  <?php

                                        $result_cat_post = "SELECT DISTINCT collectiondate FROM sequencias ORDER BY collectiondate";
                                        $resultado_cat_post = mysqli_query($conn, $result_cat_post);

                                        while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
										  if($row_cat_post['collectiondate']!= 0)	
                                          echo '<option value="'.$row_cat_post['collectiondate'].'">'.$row_cat_post['collectiondate'].'</option>';
                                        }
                                       ?>
                              </select>



                              <select style=" position: relative;" class="" name="maxDate" id="maxDate">
                                  <option value="">Last</option>
                                  <option value="">All</option>

                                <?php

                                        $result_cat_post = "SELECT DISTINCT collectiondate FROM sequencias ORDER BY collectiondate";
                                        $resultado_cat_post = mysqli_query($conn, $result_cat_post);

                                        while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
										  if($row_cat_post['collectiondate']!= 0)
                                          echo '<option value="'.$row_cat_post['collectiondate'].'">'.$row_cat_post['collectiondate'].'</option>';
                                        }
                                       ?>
                              </select>


           <h3>Geografic Information</h3>
            <hr>
                            <select style=" position: relative;" class="" name="continent" id="continent">
                                  <option value="">Continent</option>
                                  <option value="">All</option>

                                  <?php

                                        $result_cat_post = "SELECT DISTINCT continent FROM geodata";
                                        $resultado_cat_post = mysqli_query($conn, $result_cat_post);

                                        while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
                                          echo '<option value="'.$row_cat_post['continent'].'">'.$row_cat_post['continent'].'</option>';
                                        }
                                       ?>


                              </select>
                              <select style=" position: relative;" class="" name="sub_continent" id="sub_continent">
                                  <option value="">Continent Subdivisions</option>
                                  <option value="">All</option>

                              </select>
                            <select style=" position: relative;" class="" name="country" id="country">
                                  <option value="">Country</option>
                                  <option value="">All</option>

                              </select>




          <div id="Dclinic" style="display:inline;">
            <h3>Clinical Information</h3>
            <hr>
                          <select style=" position: relative;" class="" name="clinic" id="clinic">
                                  <option value="">Clinical Status</option>
                                  <option value="">All</option>

                          </select>
                          <select style=" position: relative;" class="" name="gender">
                                  <option value="">Gender</option>
                                  <option value="">All</option>

                                  <option value="F">F (Female)</option><option value="M">M (Male)</option><option value="N/A">N/A (Not Available)</option>

                          </select>
						  <br><br>
						  <p>Patient Age: select one or a range:
						  <a href="#" data-toggle="modal" data-target="#modalage"><span class="glyphicon glyphicon-question-sign"></span></a></p>
                         <select style=" position: relative;" class="" name="minAge" id="minAge">
                                  <option value="">Initial</option>
                                  <option value="">All</option>

                                  <?php

                                        $result_cat_post = "SELECT DISTINCT age FROM sequencias ORDER BY age";
                                        $resultado_cat_post = mysqli_query($conn, $result_cat_post);

                                        while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
										  if ($row_cat_post['age']!=0)
										 
                                          echo '<option value="'.$row_cat_post['age'].'">'.$row_cat_post['age'].'</option>';
                                        }
                                       ?>
					     </select>

						   <select style=" position: relative;" class="" name="maxAge" id="maxAge">
                                  <option value="">Last</option>
                                  <option value="">All</option>

                                  <?php

                                        $result_cat_post = "SELECT DISTINCT age FROM sequencias ORDER BY age";
                                        $resultado_cat_post = mysqli_query($conn, $result_cat_post);

                                        while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
											 if ($row_cat_post['age']!=0)
                                          echo '<option value="'.$row_cat_post['age'].'">'.$row_cat_post['age'].'</option>';
                                        }
                                       ?>
                              </select>
              </div>





               <input class="btn btn-default" type="submit" value="Search">

            </form>
            <br>
<?php



?>
            <?php



  if(isset($_POST['virus'])){

              $query = get();



	 $hostname_conexao = "db.painel-web.uneb.br";
    $database_conexao = "abvdb_geral";
    $username_conexao = "abvdb_user";
    $password_conexao = "Db@bbd7vpWAt@";

		$mysqli = new mysqli($hostname_conexao, $username_conexao, $password_conexao, $database_conexao);
		if ($mysqli->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

		$execute = $mysqli->query($query) or die($mysqli->error);
		$resultado = $execute->fetch_assoc();
		$num = $execute->num_rows;


                //  $dados = $_SESSION['teste'];



            ?>
            <div class="container">
            <div class="table-responsive">
            <?php
	 $resultado2 = array();

		 if($num > 0){ ?>


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
                    <td><?php if ($resultado['collectiondate']== 0)$resultado['collectiondate'] = 'N/A';
					          echo $resultado['collectiondate']; ?> </td>
                    <td><?php echo $resultado['size'] ;?> </td>
                    <td><?php echo $resultado['clinic'] ;?> </td>
                    <td><?php echo $resultado['gender'];?> </td>
                    <td><?php if ($resultado['age']==0)$resultado['age']='N/A';
					           echo $resultado['age'];?> </td>

                </tr>
                <?php
                 array_push($resultado2, $resultado);
				 $variavel++;
              } while($resultado = $execute->fetch_assoc());
               $_SESSION['teste'] = $resultado2;


                 ?>



              </tbody>

            </table>

</div>
</div>






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


       <?php      }else{
          $formulario = $_SESSION['form'];

          echo "<script>alert('Not Found! ');

          </script>";} } ?>


             </div> <!---search--->

         </div> <!---#row--->


      </div>    <!----#primary--->

     </div><!-- #content -->

     <div></div>


 <! </div><!-- #content -->
  <script type="text/javascript">
    $("#virus").on("change",function(){
        var virus = $("#virus").val();
        $.ajax({
            url:'campo1.php',
            type:'POST',
            data:{id:virus},
            beforeSend: function(){
              $("#genotype").html("Carregando...");
            },
            success:function(data){
              $("#genotype").html(data);
            },
            error:function(data){
                $("#genotype").html("Erro ao carregar.");
            }


        });


    });



	$("#virus").on("change",function(){
        var virus = $("#virus").val();
       $.ajax({
            url:'product.php',
            type:'POST',
            data:{ida:virus},
            beforeSend: function(){
              $("#product").html("Carregando...");
            },
            success:function(data){
              $("#product").html(data);
            },
            error:function(data){
                $("#product").html("Erro ao carregar.");
            }


        });
    });

    $("#virus").on("change",function(){
        var virus = $("#virus").val();
        $.ajax({
            url:'clinic.php',
            type:'POST',
            data:{idc:virus},
            beforeSend: function(){
              $("#clinic").html("Carregando...");
            },
            success:function(data){
              $("#clinic").html(data);
            },
            error:function(data){
                $("#clinic").html("Erro ao carregar.");
            }


        });
    });

     $("#continent").on("change",function(){
        var continent = $("#continent").val();
        $.ajax({
            url:'campo2.php',
            type:'POST',
            data:{id:continent},
            beforeSend: function(){
              $("#sub_continent").html("Carregando...");
            },
            success:function(data){
              $("#sub_continent").html(data);
            },
            error:function(data){
                $("#sub_continent").html("Erro ao carregar.");
            }


        });
    });


     $("#continent").on("change",function(){
        var continent = $("#continent").val();
       $.ajax({
            url:'campo3.php',
            type:'POST',
            data:{id:continent},
            beforeSend: function(){
              $("#country").html("Carregando...");
            },
            success:function(data){
              $("#country").html(data);
            },
            error:function(data){
                $("#country").html("Erro ao carregar.");
            }


        });
    });

	$("#sub_continent").on("change",function(){
        var sub_continent = $("#sub_continent").val();
       $.ajax({
            url:'campo4.php',
            type:'POST',
            data:{id:sub_continent},
            beforeSend: function(){
              $("#country").html("Carregando...");
            },
            success:function(data){
              $("#country").html(data);
            },
            error:function(data){
                $("#country").html("Erro ao carregar.");
            }


        });
    });

  $("#host").on("change",function(){
    var valor =   $("#host").val();

    if(valor != 'Homo sapiens')
      $('#Dclinic').hide();
    else
        $('#Dclinic').show();


  //do something
});





    </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105985409-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Modal -->
  <div class="modal fade" id="modalyear" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Collection year selection</h4>
        </div>
        <div class="modal-body">
          <p>
           to select a single year: mark the initial year, the last year or both</p>
        <p> to select a range: mark the initial year different from the last year, both will be included in the search range</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalage" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Patient Age selection</h4>
        </div>
        <div class="modal-body">
          <p>
               to selec of a single age: mark the initial age, the last age or both </p>
            <p> to select a range: mark the initial age different from last age, both will be included in the search range</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require "Tema/rodape.php"; ?>
