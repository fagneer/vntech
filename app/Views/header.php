<!doctype html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fágner Gomes">
    <meta name="co-author" content="Danilo Dias">
    <meta name="description" content="Projeto de site e sistema da VN Tech. Contato do desenvolvimento: fagner.networking@gmail.com">

    <title>VN Tech, Automação, Consultoria e Software</title>

    <link rel='icon' type='image/svg' href='<?php echo base_url('includes/bootstrap/brand/icone.svg'); ?>'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="<?php echo base_url('includes/bootstrap/css/navbar-offcanvas.css');?>" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2rem;
        overflow-y: hidden;
        display: flex;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        margin-top: -0.2rem;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .menu-logo {
        width: 75px;
        margin-left: 1rem
      }

      .nav-submenu {
        font-size: 0.9rem;
        padding-right: 1px;
        color: grey;
      }

      .nav-submenu:hover {
        color: #D44B4D;
      }

      .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
        .gradient-form {
        height: 100vh !important;
        }
        }
        @media (min-width: 769px) {
        .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
        }
      }

      .cards-wrapper{
        display: flex;
      }

      .btn-style{
        position: absolute;
        top: 0;
        margin-left: 320px;
      }

    </style>

  </head>

  <body>

  <main>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
      <img src="/includes/bootstrap/brand/vntech_logo.png" class="navbar-brand menu-logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">VN Tech</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-begin flex-grow-1 pe-3">
            <?php foreach($menu as $item):                  ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page"  href="<?php echo base_url($item['link']); ?>"><?php echo $item['nome']; ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
            <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        </div>
      </div>
    </div>
  </nav>

  <div class="nav-scroller bg-body shadow-sm" style="margin-top: 4.55rem">
      <nav class="nav" aria-label="Secondary navigation">
        <?php foreach($submenu as $subitem): ?>
          <a class="nav-link nav-submenu text-decoration-none" aria-current="page" <?php echo  "href='".base_url($subitem['link'])."' data-bs-toggle='modal' data-bs-target='#".$subitem['link']."Modal'"; ?>><?php echo $subitem['nome']; ?></a>
        <?php endforeach; ?>
      </nav>
  </div>

</main>



