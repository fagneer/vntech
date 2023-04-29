<?= $this->include('header') ?>

<style>
    .timeline{
        padding: 100px 0px;
      }

      .carousel{
        position: relative;
      }

      .carousel-indicators{
        top:50px;
        width: 75%;
        margin-left: 14%;
        position: static;
        margin-bottom: 40px;
      }

      .experience-slide-one{
        padding: 0px 50px;
      }

      .carousel-indicators button{
        text-indent: 0!important;
        background: 0 0;
        border: none;
        margin: 0!important;
        position: relative;
        width: 25%!important;
      }

      .carousel-indicators button:before{
        position: absolute;
        content: "";
        border-top: 1px solid #b53b3d;
        width: 100%;
        left: 0;
      }

      .carousel-indicators button h4{
        margin-top: -41px;
        position: absolute;
        left: 52%;
        transform: translate(-50%);
      }

      .carousel-indicators button svg{
        margin-top: -8px;
        text-align:center;
        position: absolute;
      }

      .carousel-indicators button.active svg{
        color: #b53b3d;
      }

      .carousel-indicators button.active h4{
        color: #b53b3d;
        font-size: 34px;
        position: absolute;
        text-align: center;
        margin-top: -49px;
      }

      .experience-slide-text h3{
        margin-bottom: 30px;
        font-size: 27px;
        color: #151B14;
      }

      .carousel-control-next, .carousel-control-prev{
        width: 2%;
        opacity: 0.8;
      }

      .carousel-control-next-icon svg, .carousel-control-prev-icon svg{
        font-size: 30px;
        color: #333;
      }

</style>


    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="<?php echo base_url('includes/bootstrap/img/home/empresa/capa.svg');?>" alt="..." /></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light text-center">Conheça a VN Tech!</h1>
                <p class="text-center">Aqui, você vai encontrar a nossa história, conquistas, missão, visão valores e um pouco sobre onosso empenho em sempre traser inovação e a melhor solução para o seu crescimento.</p>
                
            </div>
        </div>
        <!-- Call to Action-->
        <div class="alert alert-secondary my-5 py-4 text-center">
            <div class=""><p class=" m-0">Conheça mais sobre a nossa missão, visão e valores!</p></div>
        </div>
        <!-- Content Row-->
        <div class="row gx-4 gx-lg-5">
            <?php foreach($conceitos as $conceito): ?>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Missão</h2>
                        <p class="card-text"><?php echo $conceito['missao']; ?></p>
                    </div>
                    <div class="card-footer"><a class="btn btn-danger btn-sm disabled" href="#">Ver mais</a></div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Visão</h2>
                        <p class="card-text"><?php echo $conceito['visao']; ?></p>
                    </div>
                    <div class="card-footer"><a class="btn btn-danger btn-sm disabled" href="#">Ver mais</a></div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Valores</h2>
                        <p class="card-text"><?php echo $conceito['valores']; ?></p>
                    </div>
                    <div class="card-footer"><a class="btn btn-danger btn-sm disabled" href="#" >Ver mais</a></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- Call to Action-->
        <!-- <div class="alert alert-secondary my-5 py-4 text-center">
            <div class=""><p class=" m-0">Acompanhe a nossa trajetória e conquistas até aqui!</p></div>
        </div> -->
    </div>

    <!-- Linha do Tempo-->
    <!-- <section class="timeline">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                        <h4>2007</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                        <h4>2008</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                        <h4>2009</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
                        <h4>2010</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
                    </button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="experience-slide-one row h-100 align-items-center">
                            <div class="col-md-5">
                                <div class="experience-slide-img">
                                    <img src="<?php echo base_url('includes/bootstrap/img/home/empresa/timeline/1202202301.svg');?>" alt="" class="rounded img-fluid">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="experience-slide-text">
                                    <h3>Março, 2007</h3>
                                    <p class="mb-2">Em Março de 2007 inalgurava na cidade de Fortaleza a VN Tech, Sistema e Informática, 
                                    objetivando trazer automação de qualidade para o estado e região.</p>
                                    <p class="mb-2">Neste memso ano, a VN Tech fechou contrato com nossos primeiros clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="experience-slide-one row h-100 align-items-center">
                            <div class="col-md-5">
                                <div class="experience-slide-img">
                                    <img src="<?php echo base_url('includes/bootstrap/img/home/empresa/timeline/1202202301.svg');?>" alt="" class="rounded img-fluid">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="experience-slide-text">
                                    <h3>Janeiro, 2008</h3>
                                    <p class="mb-2">Em Março de 2007 inalgurava na cidade de Fortaleza a VN Tech, Sistema e Informática, 
                                    objetivando trazer automação de qualidade para o estado e região.</p>
                                    <p class="mb-2">Neste memso ano, a VN Tech fechou contrato com nossos primeiros clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="experience-slide-one row h-100 align-items-center">
                            <div class="col-md-5">
                                <div class="experience-slide-img">
                                    <img src="<?php echo base_url('includes/bootstrap/img/home/empresa/timeline/1202202301.svg');?>" alt="" class="rounded img-fluid">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="experience-slide-text">
                                    <h3>Novembro, 2009</h3>
                                    <p class="mb-2">Em Março de 2007 inalgurava na cidade de Fortaleza a VN Tech, Sistema e Informática, 
                                    objetivando trazer automação de qualidade para o estado e região.</p>
                                    <p class="mb-2">Neste memso ano, a VN Tech fechou contrato com nossos primeiros clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="experience-slide-one row h-100 align-items-center">
                            <div class="col-md-5">
                                <div class="experience-slide-img">
                                    <img src="<?php echo base_url('includes/bootstrap/img/home/empresa/timeline/1202202301.svg');?>" alt="" class="rounded img-fluid">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="experience-slide-text">
                                    <h3>Junho, 2010</h3>
                                    <p class="mb-2">Em Março de 2007 inalgurava na cidade de Fortaleza a VN Tech, Sistema e Informática, 
                                    objetivando trazer automação de qualidade para o estado e região.</p>
                                    <p class="mb-2">Neste memso ano, a VN Tech fechou contrato com nossos primeiros clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </span>
                    
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                    
                </button>
            </div>
        </div>
    </section>  -->

<?= $this->include('footer') ?>