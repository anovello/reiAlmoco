<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->config['base_url'].'public/assets/sweetalert/dist/sweetalert.css' ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->config['base_url'].'public/assets/css/styles.css' ?>">

    <title>Rei do Almoço</title>
  </head>
  <body>

    <ul class="nav justify-content-center"> 
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo $this->config->config['base_url']?>home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $this->config->config['base_url']?>user/create">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $this->config->config['base_url']?>ranking">Ranking</a>
      </li>
      
    </ul>

    <?php
      $this->load->view($page); 
    ?>

    <script>
      var url = "<?php echo $this->config->config['base_url'] ?>";
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script src="<?php echo $this->config->config['base_url'].'public/assets/sweetalert/dist/sweetalert.min.js'?>"></script>

    <script src="<?php echo $this->config->config['base_url']?>public/assets/js/main.js"></script>
  </body>
</html>