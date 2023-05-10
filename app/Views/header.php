<!doctype html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fágner Gomes">
    <meta name="co-author" content="Danilo Dias">
    <meta name="description" content="Projeto de site e sistema da VN Tech. Contato do desenvolvimento: fagner.networking@gmail.com">

    <title>AutoLearn | Suporte </title>

    <link rel='icon' type='image/svg' href='<?php echo base_url('includes/bootstrap/brand/icone.svg'); ?>'>
    
    <style>

      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap');

      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body{
        font-family: 'Open Sans', sans-serif;
      }

      .container{
        display: flex;
        justify-content:center;
        align-items: center;
        height: 100vh;
        background-color: #777;
      }

      .content{
        border-radius: 15px;
        background-color: white;
        height: 50%;
        width: 80%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
      }

      .content::before{
        content:"";
        position: absolute;
        background-color: #58af9b;
        height: 100%;
        width: 40%
      }

      .login-content{
        display: flex;
      }

      .form{
        display: flex;
        flex-direction: column;
      }

      .cadastro-content{
        position: absolute;
        display: none;
      }

      .data-login{
        text-align: center;
        flex: 1 0 auto;
        z-index: 10
      }

      .form-login{
        text-align: center;
        flex: 2 0 auto;
      }

      .title{
        font-size: 20px;
        font-weight: bold;
        text-transform: capitalize;
      }

      .title-login{
        
        color: #fff;
      }

      .description{
        font-size: 14px;
        font-weight: 300;
        color: white;
        line-height: 30px;
      }

      .btn{
        border-radius: 15px;
        text-transform: uppercase;
        color: #fff;
        font-size: 10px;
        padding: 10px 50px;
        cursor: pointer;
        font-weight: bold;
      }

      .btn-primary{
        background-color: transparent;
        border: 1px solid #fff;
      }

      .btn-primary:hover{
        background-color: #fff;
        color: #58af9b;
      }

    </style>

  </head>

  <body>




