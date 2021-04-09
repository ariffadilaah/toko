<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
    body{
        padding-top: 5rem;
    }
    .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
    }
    </style>
  </head>

  <body>

    <?= $this->include('navbar') ?>

    <main role="main" class="container">

      <?= $this->renderSection('content') ?>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('bootstrap-4.0.0/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?=base_url('jquery-3.5.1.min.js') ?>"></script>
  </body>
</html>
