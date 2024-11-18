<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HireQuest</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
  <header>
    <div class="barra navbar">
      <div class="logus">
        <img src="../img/logo.svg" alt="logo">
        <h1>HireQuest</h1>
      </div>
      <nav>
        <ul>
          <li><a href="#">Currículo</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Simulado</a></li>
          <li><a href="#">Sobre nós</a></li>
          <div class="user">
            <li><a href="#">Perfil</a></li>
            <img src="../img/perfil.svg" id="user_avatar" alt="Avatar">
          </div>
        </ul>
      </nav>
    </div>

    <nav class="menu-lateral">
        <div id="sidebar_content">
            <div class="user1">
                <img src="../img/perfil.svg" id="user_avatar" alt="Avatar">
    
                <p id="user_infos">
                    <span class="item-description">
                        Fulano de Tal
                    </span>
                    <span class="item-description">
                        Lorem Ipsum
                    </span>
                </p>
            </div>
    
            <!-- ARRUMAAARR -->

            <ul id="side_items">
                <li class="side-item active">
                    <a href="#">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            Dashboard
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-user"></i>
                        <span class="item-description">
                            Usuários
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Notificações
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Produtos
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-image"></i>
                        <span class="item-description">
                            Imagens
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-description">
                            Configurações
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-description">
                    Logout
                </span>
            </button>
        </div>
     </nav>
  </header>
  
  <main>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="../img/teste1.webp" alt="Foto 01"></div>
        <div class="swiper-slide"><img src="../img/teste2.webp" alt="Foto 02"></div>
        <div class="swiper-slide"><img src="../img/teste3.webp" alt="Foto 03"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </main>

  <section>
    <div class="quadredos">
      <div class="todes">
        <h2>Simulados</h2>
        <a href="https://www.mercadolivre.com.br/">
          <img src="../img/simulado.svg" alt="Simulados">
        </a>
      </div>
      <div class="todes">
        <h2>Currículo</h2>
        <a href="https://www.mercadolivre.com.br/">
          <img src="../img/curriculo.svg" alt="Currículo">
        </a>
      </div>
      <div class="todes">
        <h2>Marketing</h2>
        <a href="https://www.mercadolivre.com.br/">
          <img src="../img/marketing.svg" alt="Marketing">
        </a>
      </div>
    </div>
  </section>

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="../js/script.js"></script>
</div>
</body>
</html>
