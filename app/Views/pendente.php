<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Esporte IFCE</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('../assets/dist/css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('../assets/dist/css/bootstrap.css');?>" rel="stylesheet">
    


        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('/assets/dist/js/form-validation.css');?>" rel="stylesheet">
    </head>
    <body class="alert-success">

    <div class="container mt-5 p-2 pt-4 col-lg-8 offset-lg-2">
        <main class="alert alert-light container">
            <div class="py-3 pt-5 text-center p-3">
                <img class="d-block mx-auto mb-4" src="<?php echo base_url('/assets/brand/bootstrap-logo.svg'); ?>" alt="" width="72" height="57">
                <h2 class="text-warning"><strong>Cadastro em análise.</strong></h2>
                <hr>
                
                <p class="lead text-warning">  Aguarde até que um ADM autorize a o seu cadastro.</p>

                <hr>

            </div>

            <a class="btn btn-outline-dark col-2 offset-10" href="<?php echo base_url('/logout'); ?>">Sair</a>
            
        </main>

        <footer class="my-5 pt-2 text-muted text-center text-small">
            <p class="mb-1">IFCE Campus Tauá</p>
            <p class="mb-1">&copy; 2022</p>
        </footer>
    </div>

    </body>
</html>
