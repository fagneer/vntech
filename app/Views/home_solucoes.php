<?= $this->include('header') ?>

<link rel="stylesheet" href="includes/bootstrap/css/product.css">

  <section>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Nossas Soluções</h1>
        <p class="lead fw-normal">Conheça as nossas principais soluções para Automação de Postos e Comércio Varejista.</p>
        <a class="btn btn-outline-secondary" href="#" data-bs-toggle="modal" data-bs-target="#solucoesModal">Saiba mais</a>
      </div>
      <!--ACS Mobile-->
      <div >
        <img class="product-device shadow-sm d-none d-md-block" src="<?php echo base_url('includes/bootstrap/img/home/solucoes/banner-acs-mobile.svg'); ?>">
      </div> 
      <!--Tela desfocada-->
      <div>
        <img class="product-device product-device-2 d-none d-md-block" src="<?php echo base_url('includes/bootstrap/img/home/solucoes/banner-pdv-movel.svg'); ?>">
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <!--ACS Sintese-->
      <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">ACS Síntese</h2>
          <p class="lead">Sistema completo para automação de Postos de Combustível</p>
        </div>
        <div>
          <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="<?php echo base_url('includes/bootstrap/img/home/solucoes/acs-sintese.svg'); ?>">
        </div>
      </div>
      <!--ACS Mobile-->
      <div class="text-bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">ACS Mobile</h2>
          <p class="lead">Acompanhe o dia-a-dia do seu posto na palma da sua mão!</p>
        </div>
        <div>
          <img class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="<?php echo base_url('includes/bootstrap/img/home/solucoes/acs-mobile.svg'); ?>">
        </div>
      </div>

    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <!--ACS PDV Móvel-->
      <div class="text-bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">ACS PDV Móvel</h2>
          <p class="lead">Lance vendas direto da maquininha de cartão</p>
        </div>
        <div>
          <img class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="<?php echo base_url('includes/bootstrap/img/home/solucoes/acs-pdv-movel.svg'); ?>">
        </div>
      </div>

      <!-- GDoor Sistemas -->
      <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">GDoor Sistemas</h2>
          <p class="lead">Gerencie o seu negócio com rapidêz e eficiência.</p>
        </div>
        <div>
          <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="<?php echo base_url('includes/bootstrap/img/home/solucoes/gdoor-sistemas.svg'); ?>">
        </div>
      </div>      

    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      
      <!--Hiper Software-->
      <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Hiper Software</h2>
          <p class="lead">Sistema de automação para comercio varejista.</p>
        </div>
        <div>
          <img class="bg-light shadow-sm mx-auto" style="background-color: #6A4B9D; width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="<?php echo base_url('includes/bootstrap/img/home/solucoes/hiper-software.svg'); ?>">
        </div>
      </div>
      
      <!--Treinamento-->
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Treinamento</h2>
          <p class="lead">VN Tech Treinamento Operacional e Modular.</p>
        </div>
        <div>
          <img class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="<?php echo base_url('includes/bootstrap/img/home/solucoes/treinamento.svg'); ?>">
        </div>
      </div>

    </div>


    </div>
  </section>


<!-- Modal -->
<div class="modal fade" id="solucoesModal" tabindex="-1" aria-labelledby="solucoesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title" id="solucoesModalLabel">Nossas Soluções</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <!--Acordion Soluções-->
          <div class="accordion accordion-flush" id="accordionSolucoesExample">

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                  ACS Síntese
                </button>
              </h2>
              <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionSolucoesExample">
                <div class="accordion-body">
                  Sistema completo de automação para postos de combustíveis. <br>
                  <strong>Você pode gerenciar diversos setores do posto</strong>, desde o escritório, 
                  auxiliando nas diversas operações do cotidiano, tais como controle 
                  do estoque, financeiro, emissão de relatórios, documentos fiscais e 
                  geração de arquivos fiscais, passando pela venda, com a identificação do 
                  frentista que efetuou o abastecimento, emissão de documento fiscal e etc.
                  
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                  ACS Mobile
                </button>
              </h2>
              <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionSolucoesExample">
                <div class="accordion-body">
                  <strong>Leve seu posto no bolso!</strong><br>
                  Com <strong>ACS Mobile</strong> você pode verificar vários setores do seu posto e contar com um suporte ágil e eficiente pelo 
                  seu smartphone ou tablet.
                  </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                  ACS PDV Móvel
                </button>
              </h2>
              <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionSolucoesExample">
                <div class="accordion-body">
                Troque o computador, teclado, mouse e impressora por <strong>um único equipamento</strong> e
                 aumente a produtividade em seu posto de gasolina!
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                  GDoor Sistemas
                </button>
              </h2>
              <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionSolucoesExample">
                <div class="accordion-body">
                  <strong>Soluções completas para realizar vendas</strong>, emissão de cupons e notas, gestão financeira, 
                  controle de estoque e geração de arquivos fiscais. Seja um revendedor Gdoor e tenha todas 
                  as vantagens da parceria que aproxima.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                  Hiper Software
                </button>
              </h2>
              <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionSolucoesExample">
                <div class="accordion-body">
                O <strong>Hiper</strong> foi desenvolvido para auxiliar o micro e pequeno varejista a gerir melhor 
                o seu negócio. De mercados à lojas de roupas, o sistema é indicado para <strong>mais de 30
                 segmentos</strong>, como Mercados, Moda, Padarias, Caçados, Serviços, entre outros.
                </div>
              </div>
            </div>
            
            
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                  VN Tech Treinamento
                </button>
              </h2>
              <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionSolucoesExample">
                <div class="accordion-body">
                  <strong>A VN Tech se preocupa com você!</strong> <br>
                  Disponibilizamos para você <strong>Treinamento Operacional e Modular</strong> para utilização nos nossos sistemas.
                  Junto com um <strong>Suporte Técnico</strong> sempre pronto para te atender da melhor forma possível.
                </div>
              </div>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<?= $this->include('footer') ?>