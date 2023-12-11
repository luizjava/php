<?php include '../Bd/ConectBD.php';
       include 'Header.html';
         
?>

<body>
                    
                 <?php include 'Menu.php';?>
                 
                  
                 <div id="page-wrapper" >
                 <div id="page-inner">
                     <div class="row">
                         <div class="col-md-12">
                          <h1>Meus dados </h1>   
                            
                            
                         </div>
                     </div>
                      <!-- /. ROW  -->
                      <hr />
                               
                   <?php 
      
            echo'<div class="row">';
                echo'  <div class="col-md-12">';
                   echo'   <div class="jumbotron">';
                         echo "<h3><b> Nome </b>: ".$_SESSION['nome']."</h3>";
                         echo "<h3><b> Usuário </b>: ".$_SESSION['usuario']."</h3>";
                         echo "<h3><b> Senha </b>: ".$_SESSION['senha']."</h3>";
                         echo "<h3><b> Código </b>: ".$_SESSION['ID']."</h3>";                          
                         echo "<h3><b> sexo </b>: ".$_SESSION['sexo']."</h3>";
                         echo "<h3><b> Data de Nascimento </b>: ".$_SESSION['nascimento']."</h3>";
                         echo "<h3><b> Endereço </b>: ".$_SESSION['endereco']."</h3>";
                         echo "<h3><b> Cidade </b>: ".$_SESSION['cidade']."</h3>";
                         echo "<h3><b> Estado </b>: ".$_SESSION['estado']."</h3>";
                         echo "<h3><b> CEP </b>: ".$_SESSION['cep']."</h3>";
                         echo "<h3><b> E-mail </b>: ".$_SESSION['email']."</h3>";
                         echo "<h3><b> Categoria </b>: ".$_SESSION['categoria']."</h3>";
                         echo "<h3><b> CPF/CNPJ </b>: ".$_SESSION['cpf_cnpj']."</h3>";
                          echo'     <a class="btn btn-primary btn-lg" role="button">Learn more</a>';
                      echo' </div>';
                echo'  </div>';
            echo'  </div>';
            
                     /*  echo' <div class="panel-heading">';
                           echo("<h5> TITULO : $array[1] </h5>") ;
                        echo'</div>';
                       echo' <div class="panel-footer">';
                         echo("<h5> CODIGO : $array[0] </h5>") ;
                       echo' </div>';
                        echo'<div class="panel-footer">';
                             echo "<h5>CIDADE : $array[2] ( $array[3] )</h5> ";
                       echo' </div>';
                                              
                        echo'<div class="panel-footer">';
                          
                        echo'</div> ';
                        echo'<div class="panel-body">';
                            echo "<h5>DESCRI&Ccedil;&Atilde;O :  $array[7] </h5>";
                        echo'</div>';
                                    
                        echo'<button type="submit" class="btn btn-primary">Cadastrar</button>';
                       */
               
            
          
  
   mysqli_close($conexao);

   include 'Footer.html';
           ?>
          
            
                        
             
               
                 
                 
           
      
