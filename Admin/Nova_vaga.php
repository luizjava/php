<?php include "Header.html"?>

<body>

<?php include "Menu.php"  ?>
   

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                   <h2> Cadastro de vagas</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                            
                                <form action="Cadastro_vaga.php" method="POST">
                                 <div class="col-md-6">
                                      <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Título</label>
                                            <input type="text" name="Titulo" class="form-control" id="inputSuccess">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Número de Vagas</label>
                                            <input type="text" name="Numero_vagas" class="form-control" id="inputWarning">
                                        </div>
                                         <div class="form-group">
                                            <label>Contratação</label>
                                            <select name="Contratacao" class="form-control">
                                                <option value="">Selecione</option>
                                                <option value='CLT'>CLT</option>
                                                <option value='Freelancer'>Freelancer</option>
                                                <option value='Temporário'>Temporário</option>
                                            </select>
                                        </div>
                                     <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Faixa Salarial</label>
                                            <input type="text" name="Faixa_salarial" class="form-control" id="inputSuccess">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Cidade</label>
                                            <input type="text" name="Cidade" class="form-control" id="inputError">
                                        </div>
                                         <div class="form-group">
                                            <label>Estado</label>
                                            <select name="Estado" class="form-control">
                                                <option value="">Seleciona</option>
                                                <option value='RS'>Rio Grande do Sul(RS)</option>
                                                <option value='SC'>Santa Catarina(SC)</option>
                                                <option value='PR'>Paraná(PR)</option>
                                            </select>
                                        </div>
                                    <br />
                                 </div>       
                                  <div class="col-md-6">
                                     <div class="form-group">
                                            <label>Descrição</label>
                                            <textarea name="Descricao" class="form-control" rows="3"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Requisitos</label>
                                            <textarea name="Requisitos" class="form-control" rows="3"></textarea>
                                        </div>
                                         
                                         <div class="form-group">
                                            <label>Desejavel</label>
                                            <textarea name="Desejavel" class="form-control" rows="3"></textarea>
                                        </div>
                                       <button type="submit" class="btn btn-primary">Cadastrar</button>
                                   </div>    
                                 
                                 </form>  
                                
                                     
                               
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
   <?php include "Footer.html" ?>