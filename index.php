<?php
include('api.php');
?>
<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>JpDevs - Consulta CNPJ (Open-Source)</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">JpDevs</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Consulta de CNPJ</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://github.com/JpDevs/Consulta-CNPJ">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
               <font color="red"><h4>JpDevs</h4></font>
                <h2>Consultar CNPJ</h2>
                <p class="lead">Insira abaixo o CNPJ a ser consultado</p>
                <form method="post" action="" name="cnpj">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">CNPJ:</span>
                        </div>
                        <input type="tel" <?php if(isset($input)) { echo 'value="'.$input.'"'; } ?> required name="cnpj" class="form-control"></input> </div>
                        <center><button name="enviar" type="submit" class="btn btn-success">Consultar</button></center>
                        </form>
                       <?php if(isset($row) && $row['status'] == 'OK') { ?>
                            <br>
                            <h4>Informações do CNPJ: <?php echo $input; ?></h4>
                        <b>Razão Social: </b> <span><?php echo $row['nome']; ?></span>
                        <br>
                        <b>Nome Fantasia: </b> <span><?php echo $row['fantasia']; ?></span>
                        <br>
                        <b>Atividade Principal: </b> <span><?php echo $row['atividade_principal'][0]['text']; ?> - <?php echo $row['atividade_principal'][0]['code']; ?></span>
                        <br>
                        <b>Data da Abertura: </b> <span><?php echo $row['abertura']; ?></span>
                        <br>
                        <b>Porte: </b> <span><?php echo $row['porte']; ?></span><br>
                        <b>Natureza Jurídica: </b> 
                        <span><?php echo $row['natureza_juridica']; ?></span><br>
                        <b>Capital Social: </b> <span>R$ <?php echo number_format($row['capital_social'], 2, ',', '.'); ?></span><br>
                        <b>Situação: </b><span><?php echo $row['situacao']; ?></span>
                        <br><br>
                        <h4>Contatos:</h4>
                        <b>Email: </b> <span><?php echo $row['email']; ?></span><br>
                        <b>Telefone: </b><span><?php echo $row['telefone']; ?></span><br>
                        <br><h4>Localidade:</h4>
                        <b>Logradouro: </b><span><?php echo $row['logradouro']; ?></span><br>
                        <b>Complemento: </b><span><?php echo $row['complemento']; ?></span><br>
                        <b>Número: </b><span><?php echo $row['numero']; ?></span><br>
                        <b>Bairro: </b><span><?php echo $row['bairro']; ?></span><br>
                        <b>CEP: </b><span><?php echo $row['cep']; ?></span></span><br>
                        <b>Município: </b><span><?php echo $row['municipio']; ?></span><br>
                        <b>Estado: </b><span><?php echo $row['uf']; ?></span>
                        
                        <?php }  else { ?>
                            <br><br>
                           <font color="red"><b>ERRO:</b></font><span> <?php echo $row['message']; ?></span>
                            <?php } ?>
            </div>
            
        </div>
        
           <br><br>
        <footer class="text-center text-lg-start bg-light text-muted">

            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © Consultador CNPJ (Open-Source.) Desenvolvido por JpDevs - Licença MIT.
                <a class="text-reset fw-bold" href="https://jpdevs.com.br">jpdevs.com.br</a>
              </div>
    
        </footer>
    </div>
    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
