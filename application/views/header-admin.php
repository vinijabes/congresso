<?php 
$usuario = $_SESSION['usuario']; ?>
<!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Abrir/Esconder Menu"></div>
        </div>
        <!--logo start-->
        <a href="<?= base_url('Admin') ?>" class="logo"><b>Congresso: Pedagogia Histórico-crítica</b></a>
        <!--logo end-->


        <div class="top-menu">
         <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?= base_url('Admin/logout') ?>">Sair</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">

           <p class="centered"><a href="<?= base_url('Admin/profile') ?>"><img src="<?= base_url('assets/img/default.jpeg') ?>" class="img-circle" width="60"></a></p>
           <h5 class="centered"><?= $usuario->nome ?></h5>



           <li class="sub-menu">
            <a href="<?= base_url('Admin') ?>" >
              <i class="fa fa-home"></i>
              <span>Página Inicial</span>
            </a>
          </li>

          

          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-user"></i>
              <span>Participantes</span>
            </a>  
            <ul class="sub">
              <li><a  href="<?= base_url('Participante/listar_todos') ?>">Todos</a></li>
              <li><a  href="<?= base_url('Participante/listar_pagamento_analisar') ?>">Para Analisar o Pagamento</a></li>
             <!--  <li><a  href="<?= base_url('Participante/listar_trabalho_analisar') ?>">Para Analisar o Trabalho</a></li> -->
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-user"></i>
              <span>Parecerista</span>
            </a>  
            <ul class="sub">
              <li><a  href="<?= base_url('Parecerista/listar_todos') ?>">Todos</a></li>
              <li><a  href="<?= base_url('Parecerista/listar_analisar') ?>">Para Analisar</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-user"></i>
              <span>Trabalho</span>
            </a>  
            <ul class="sub">
              <li><a  href="<?= base_url('Trabalho/listar_todos') ?>">Todos</a></li>
              <li><a  href="<?= base_url('Trabalho/listar_para_validacao') ?>">Para Validação</a></li>
              <li><a  href="<?= base_url('Trabalho/listar_validados') ?>">Validados</a></li>
              <li><a  href="<?= base_url('Trabalho/listar_invalidos') ?>">Inválidos</a></li>
              <li><a  href="<?= base_url('Trabalho/listar_trabalhos_que_foram_enviados_para_pareceristas') ?>">Enviados p/ Parecerista</a></li>

            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-envelope"></i>
              <span>E-mail</span>
            </a>  
            <ul class="sub">
              <li><a  href="<?= base_url('Email/especifico/participante') ?>">P/ um Participante</a></li>
              <li><a  href="<?= base_url('Email/especifico/parecerista') ?>">P/ um Parecerista</a></li>
              <li><a  href="<?= base_url('Email/grupo') ?>">P/ um grupo de Part.</a></li>
              <li><a  href="<?= base_url('Email/pareceristas') ?>">P/ TODOS os pareceristas</a></li>
              
            </ul>
          </li>

       <!--    <li class="sub-menu">
            <a href="<?= base_url('Interesse') ?>" >
              <i class="fa fa-info"></i>
              <span>Interesse Nos Minicursos</span>
            </a>
          </li> -->

          <li class="sub-menu">
            <a href="<?= base_url('Admin/profile') ?>" >
              <i class="fa fa-file"></i>
              <span>Alterar Meus Dados</span>
            </a>
          </li>

          

          <li class="sub-menu">
            <a href="<?= base_url('Admin/logout') ?>" >
              <i class="fa fa-times"></i>
              <span>Sair</span>
            </a>
          </li>



        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->