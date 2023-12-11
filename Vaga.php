<?php include 'Bd/ConectBD.php';
      include 'cabecalho.html';
      
?>

   
<div class="center_content">                  
                 
                 <?php
                $cod_vaga= $_GET['vaga']; 
                 
                
                 $query = "select * from vagas where ID_vaga = '".$cod_vaga."'";
                
                 $sql = mysqli_query($conexao,$query);
                


$result = mysqli_num_rows($sql);

//echo $result;
if($result > 0){
    
    for($i=0;$i<$result;$i++){
        
         
       $array = mysqli_fetch_row($sql);
               $cod_vaga = $array[0];
 
                
                 echo '<p class="welcome">';
               
                // echo ('<input type="hiden" name="vaga" value="'.$titulo.'"/>');   
                 echo " TITULO : $array[1]<br>";
                 echo "Cidade : $array[2] <br>";
                 echo "Estado : $array[3] )<br>";
                 echo "Contratação :  $array[4] <br>";
                 echo "Faixa Salarial:  $array[5] <br>";
                 echo "Número de Vagas :  $array[6] <br>";
                 echo "Descri&ccedil;&atilde;o :  $array[7] <br>";
                 echo "Requisitos :  $array[8]<br>";
                 echo "Desejavel : $array[9]<br>";
                 echo "ID usu : $array[10]<br>";
                 echo ('<a href="index.php"> Voltar </a>');   

     }
   }else{
    echo '<br><h1>.....Nenhum registro encontrado.....</h1><br>';
   
}
   //mysqli_close($conexao);
   $query2 = "select * from slogin_users where ID = '".$array[10]."'";
   $sql2 = mysqli_query($conexao,$query2);
   $result2 = mysqli_num_rows($sql2);

   if($result2 > 0){
    
      for($i=0;$i<$result2;$i++){
          
           
         $array2 = mysqli_fetch_row($sql2);
                 $cod_vaga = $array2[0];
   
                  
                   echo '<p class="welcome">';
                            
                   echo "Whatsapp :  $array2[7] <br>";
                   echo "E-mail :  $array2[11] <br>";
                    
       }
     }else{
      echo '<br><h1>.....Nenhum registro encontrado.....</h1><br>';
     
  }
     mysqli_close($conexao);

   ?>
</div>   
 <?php  include 'Rodape.html';?>
          

 
