<?php include '../Bd/ConectBD.php';
      include 'Header.html';
      include 'Menu.php';
?>

   
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12"> <h2>Vagas Cadastradas </h2> </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 
                 <?php
                 
                 $codigo_usuario = $_SESSION['ID'];
                 $query = "select * from vagas where ID_usuario = '".$codigo_usuario."'";
                 $sql = mysqli_query($conexao,$query);


$result = mysqli_num_rows($sql);
//echo $result;
if($result > 0){
      
  
    $i=1;
   while($i<=$result){
        
      $array = mysqli_fetch_row($sql);
      
      
      
      
            echo'<div class="row">';
                echo'  <div class="col-md-12">';
                   echo'   <div class="jumbotron">';
                       echo("<h2> TITULO : $array[1] </h2>");
                       echo "<h4> CÓDIGO :".$array[0]."</h4>"; 
                       echo ("<h4>CIDADE : $array[2] - $array[3] </h4>") ;
                         echo "<h4>DESCRI&Ccedil;&Atilde;O :  $array[7] </h4>";
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
               
            
          
       
     $i= $i+1;
    
        }
   }else{
    echo '<br><h1>.....Nenhum registro encontrado.....</h1><br>';
   
}
   mysqli_close($conexao);
   
   include 'Footer.html';
           ?>
        
 
