<?= $this->include('header') ?>

<div class="container">

  <!--Conteúdo Login-->
  <div class="content login-content">

    <!--âncora para Cadastro-->
    <div class="data-login">
      <h2 class="title title-login">Bem Vindo</h2> <!--Conteúdo Login-->
      <p class="description">Já possui uma conta?</p> <!--Primeira descrição-->
      <p class="description">Acesse para ter acesso à todos os recursos</p> <!--Segunda descrição-->
      <button class="btn btn-primary"> Cadastre-se </button><!--Âncora-->
    </div>

    <!--Credenciais de acesso-->
    <div class="form-login">
      <h2 class="title">Login</h2>
      <p class="description">Faça login com a sua conta</p>
      <form action="" class="form">
        <input type="text" name="usuario" id="usuario" placeholder="Usuário">
        <input type="password" name="senha" id="senha" placeholder="Senha">
        <input class="btn btn-danger" type="submit" value="Login">
      </form>
    </div>

  </div>

  <!--Conteúdo Cadastro-->
  <div class="content cadastro-content">

    <!--âncora para Login-->
    <div class="data-cadastro">
      <h2 class="title">Bem Vindo de Volta</h2> <!--Conteúdo Login-->
      <p class="description">Já possui uma conta?</p> <!--Primeira descrição-->
      <p class="description">Acesse para ter acesso à todos os recursos</p> <!--Segunda descrição-->
      <button class="btn btn-outline-danger"> Login </button><!--Âncora-->
    </div>

    <!--Credenciais de acesso-->
    <div class="form-login">
      <h2 class="title">Cadastro</h2>
      <p class="description">Faça login com a sua conta</p>
      <form action="" class="form">
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
        <input type="email" name="email" id="email" placeholder="E-mail">
        <input type="text" name="usuario" id="usuario" placeholder="Usuário">
        <input type="password" name="senha" id="senha" placeholder="Senha">
        <input type="password" name="confirmasenha" id="confirmasenha" placeholder="Confirme a Senha">
        <input class="btn btn-danger" type="submit" value="Cadastrar">
      </form>
    </div>

  </div>

</div>

<?= $this->include('footer') ?>