<?php include '../Bd/ConectBD.php'; 
session_start();
?>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Binary admin</a> 
        </div>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <?php  echo "".$_SESSION['nome']." ";?><a href="..\index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>   
       <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                </li>
            
                
                <li>
                    <a class="active-menu"  href="Index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                 <li>
                    <a  href="Nova_vaga.php"><i class="fa fa-desktop fa-3x"></i> Nova Vaga</a>
                </li>
                <li>
                    <a  href="Vagas_cadastradas.php"><i class="fa fa-table fa-3x"></i> Vagas Cadastradas</a>
                </li>
                       <li  >
                    <a   href="Meus_dados.php"><i class="fa fa-bar-chart-o fa-3x"></i> Seus Dados</a>
                </li>	
            
            </ul>
        </div>
    </nav>  
