<?= $this->include('header') ?>


<link rel="stylesheet" href="includes/bootstrap/css/pricing.css">

<!-- Page Content-->
<div class="container px-4 px-lg-5">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7">
              <?= $this->include('utilities/svg-contatos') ?>
            </div>
            <div class="col-lg-5">
                <h1 class="font-weight-light text-uppercase"><b>Contate-nos!</b></h1>
                <p>Tem alguma dúvida, deseja realizar um treinamento ou quer falar sobre como está o seu cadastro 
                  conosco? O seu contato é muito importante para nós. Utilize um dos meios de comunicação abaixou 
                  o entre em contato pelo chat no canto inferior direito. 
                </p>
            </div>
        </div>
        
        <!-- Call to Action-->
        <div class="alert alert-secondary my-5 py-4 text-center">
            <div class=""><p class=" m-0">A VN Tech sempre perto de você.</p></div>
        </div>
    </div>

<section class="container mt-4">

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-dark">
          <div class="card-header py-3  text-bg-dark border-dark">
            <h4 class="my-0 fw-normal">Suporte</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title"><small class="text-muted fw-light"> Operacional/Técnico </small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Suporte</li>
              <li>Dúvidas</li>
              <li>Re-instalação</li>
              <li>Manutenção</li>
            </ul>
            <a class="w-100 btn btn-lg btn-dark" href="https://wa.me/5588997046546?text=Olá, Gostaria de um Suporte Técnico">Contate-nos</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-dark">
          <div class="card-header py-3  text-bg-dark border-dark">
            <h4 class="my-0 fw-normal">Administrativo</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title"><small class="text-muted fw-light"> Administrativo/Financeiro</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Boletos</li>
              <li>Registro</li>
              <li>Pagamentos</li>
              <li>Agendamentos</li>
            </ul>
            <a class="w-100 btn btn-lg btn-dark" href="https://wa.me/5588997046546?text=Olá, Gostaria de um atendimento Financeiro/Administrativo">Contate-nos</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-dark">
          <div class="card-header py-3 text-bg-dark border-dark">
            <h4 class="my-0 fw-normal">Comercial</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title"><small class="text-muted fw-light">Contato/Vendas</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Softwares</li>
              <li>Automação</li>
              <li>Orçamentos</li>
              <li>Contratação de Serviços</li>
            </ul>
            <a  class="w-100 btn btn-lg btn-dark" href="https://wa.me/5588997046546?text=Olá, Gostaria de um Contato Comercial">Contate-nos</a>
          </div>
        </div>
      </div>
    </div>

</section>


<?= $this->include('footer') ?>