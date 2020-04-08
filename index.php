<?php
session_start();
require_once "login/function.php";
?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Font-->
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">

  <title>MecInfo | Página Inicial</title>
  <style>
    a,
    a:hover:a:visited,
    a:focus {
      background-color: black;
      text-decoration: none;
    }

    a {
      color: aliceblue;
      text-decoration: none;
      background-color: transparent;
      -webkit-text-decoration-skip: objects;
    }

    a:hover {
      color: #007bff;
      text-decoration: none;
      background-color: transparent;
      -webkit-text-decoration-skip: objects;
    }

    p {
      margin-top: 7px;
    }

    .bg-dark {
      background: black !important;
    }

    body {
      padding-top: 5.2rem;
      color: aliceblue;
      font-family: 'Source Code Pro', monospace;
      background-image: url("img/fundo.jpg");
    }

    footer {
      background-color: black;
    }

    .fundo {
      background-repeat: no-repeat;
      background-size: 100%;
    }

    .parallax {
      padding: 30px;
      color: black;
      min-height: 10rem;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      border: 1px white !important;
    }

    .display-1 {
      font-size: 4rem;
      font-weight: 500;
      color: #f8f9fa;
      text-decoration: none;
      text-shadow: 2px 3px 3px #4a0044;
    }

    @media only screen and (max-width: 845px) {
      .display-1 {
        font-size: 2.5rem;
        text-shadow: 1px 3px 0px #4a0044;
      }

      .processador {
        font-size: 2.1rem;
      }
    }

    .btn-link {
      text-decoration: none !important;
    }

    .jh1 {
      border-bottom-style: double;
      border-color: #9657b1;
      font-size: 5.5rem;
      font-weight: 300;
      line-height: 1.2;
      border-width: thin;
      color: #17609e;
      font-family: 'Amatic SC', cursive;
    }

    .lead {
      color: #8dcaff;
      font-size: 2.5rem;
      font-family: 'Amatic SC', cursive;
    }

    hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid blue;
    }

    .card,
    .list-group-item {
      background-image: url("img/fundo2.jpg");
    }
  </style>
</head>

<body>
  <!-- Nav bar -->
  <?php require_once 'navbar.php' ?>

  <!-- Carroussel-->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
      <div class="carousel-item active" >
        <img class="d-block w-100" src="img/pc.jpg" alt="Primeiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/pc2.jpg" alt="Segundo Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/pc3.jpg" alt="Terceiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/pc4.jpg" alt="Terceiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/pc5.jpg" alt="Terceiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/pc6.jpg" alt="Terceiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/pc7.jpg" alt="Terceiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/pc8.jpg" alt="Terceiro Slide">
      </div>
    </div>
  </div>

  <!--Jumbotron-->
  <div class="jumbotron jumbotron-fluid bg-dark" style="margin:auto;">
    <div class="container text-center">
      <h1 class="display-4 jh1">Os melhores custos-benefícios da semana!</h1>
      <p class="lead">Os melhores preços para você montar o seu computador!</p>
    </div>
  </div>

  <!--Cards/Parallax-->
  <div class="accordion text-center" id="accordionExample">
    <div class="card ">
      <div class="card-header parallax " id="headingOne" style="background-image: url(img/processador.jpg);">
        <h5 class="mb-0">
          <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h1 class="display-1 processador">Processadores</h1>
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="img/i3.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h2 class="card-title">Intel Core i3-9100F Quad-Core 3.6GHz (4.2GHz Turbo) 6MB Cache LGA1151, BX80684I39100F</h2>
              
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <h4>Soquete</h4>
                FCLGA1151<br><br>
                <h4>Número de núcleos
                  4<br><br>
                  <h4>Threads</h4>
                  4<br><br>
                  <h4>Frequência</h4>
                  3,60 GHz<br><br>
                  <h4>Frequência turbo max</h4>
                  4,20 GHz<br><br>
              </li>
              <li class="list-group-item">
                Vendedor - Pichau</li>
            </ul>
            <div class="card-body">
              <a href="https://www.pichau.com.br/processador-intel-core-i3-9100-quad-core-3-6ghz-4-2ghz-turbo-6mb-cache-lga1151-bx80684i39100f" class="card-link" target="blank">Link do Produto</a>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" src="img/i5.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h2 class="card-title">Intel Core i5-9400F Hexa-Core 2.9GHz (4.1GHz Turbo) 9MB Cache LGA1151 BX80684I59400F</h2>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <h4>Soquete</h4>
                FCLGA1151<br><br>
                <h4>Número de núcleos
                  6<br><br>
                  <h4>Threads</h4>
                  6<br><br>
                  <h4>Frequência</h4>
                  2,90 GHz<br><br>
                  <h4>Frequência turbo max</h4>
                  4,10 GHz<br><br>
              </li>
              <li class="list-group-item">
                Vendedor - Pichau</li>
            </ul>
            <div class="card-body">
              <a href="https://www.pichau.com.br/processador-intel-core-i5-9400f-hexa-core-2-9ghz-4-1ghz-turbo-9mb-cache-lga1151-bx80684i59400f" class="card-link" target="blank">Link do Produto</a>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" src="img/i7.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h2 class="card-title">Intel Core i7-9700KF Octa-Core 3.6GHz (4.9GHz Turbo) 12MB Cache LGA1151 BX80684I79700KF</h2>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <h4>Soquete</h4>
                FCLGA1151<br><br>
                <h4>Número de núcleos
                  8<br><br>
                  <h4>Threads</h4>
                  8<br><br>
                  <h4>Frequência</h4>
                  3,60 GHz<br><br>
                  <h4>Frequência turbo max</h4>
                  4,90 GHz<br><br>
              </li>
              <li class="list-group-item">
                Vendedor - Pichau</li>
            </ul>
            <div class="card-body">
              <a href="https://www.pichau.com.br/processador-intel-core-i5-9600kf-hexa-core-3-7ghz-4-6ghz-turbo-9mb-cache-lga1151-bx80684i59600kf" class="card-link" target="blank">Link do Produto</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header parallax" id="headingTwo" style="background-image: url(img/placamae.jpg);">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h1 class="display-1"> Placa Mãe</h1>
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-deck">

            <div class="card">
              <img class="card-img-top" src="img/pm1.png" alt="Imagem de capa do card">
              <div class="card-body">
                <h2 class="card-title">Gigabyte H310M S2P 2.0 DDR4 Socket LGA1151 Chipset Intel H310</h2>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h4>Modelo</h4>
                  H310M S2P 2.0 DDR4
                  <br><br>
                  <h4>CPU</h4>
                  Suporte para 9 e 8ª Geração Intel ® Núcleo ™ processadores i9 / Intel ® Core i7 ™ / Intel ® Core i5 ™ / Intel ® Core i3 ™ / Intel ® Pentium ® processadores / Intel ® Celeron ® processadores no pacote LGA1151 ( Visite o site da GIGABYTE para obter o suporte mais recente à CPU
                  Cache L3 varia de acordo com a CPU<br><br>
                  <h4>Chipset</h4>
                  Intel ® Express Chipset H310<br><br>
                  <h4>Gráficos</h4>
                  Processador gráfico integrado Intel® HD Graphics suporta:<br>
                  1 x Porta D-Sub, suportando uma resolução máxima de 1920x1200 @ 60 Hz <br>
                  1 x Porta DVI-D, suportando uma resolução máxima de 1920x1200 @ 60 Hz <br>
                  1 x Porta HDMI, suportando uma resolução máxima de 4096x2160 @ 30 Hz<br><br>
                  <h4>Interface de Armazenamento</h4>
                  1 x Conector M.2 (soquete 3, tecla M, tipo 2242/2260/2280 SATA e suporte SSD PCIe x2)
                  4 x Conectores SATA de 6 Gb / s<br><br>
                </li>
                <li class="list-group-item">
                  Vendedor - Pichau</li>
              </ul>
              <div class="card-body">
                <a href="https://www.pichau.com.br/placa-mae-gigabyte-h310m-s2p-2-0-ddr4-socket-lga1151-chipset-intel-h310" class="card-link" target="blank">Link do Produto</a>
              </div>
            </div>

            <div class="card">
              <img class="card-img-top" src="img/pm2.png" alt="Imagem de capa do card">
              <div class="card-body">
                <h2 class="card-title">Gigabyte Z370M AORUS Gaming Chipset Z370 Intel LGA 1151 mATX DDR4</h2>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h4>Modelo</h4>
                  Z370M AORUS Gaming
                  <br><br>
                  <h4>CPU</h4>
                  Suporte à 8ª Geração de processadores Intel Core i7, i5, i3 do pacote LGA1151<br><br>
                  <h4>Chipset</h4>
                  Intel® Z370 Express<br><br>
                  <h4>Memória</h4>
                  4 x DDR4 DIMM de até 64GB DDR4 4000(O.C.) / 3866(O.C.) / 3800(O.C.) / 3733(O.C.) / 3666(O.C.) / 3600(O.C.) / 3466(O.C.) / 3400(O.C.) / 3333(O.C.) / 3300(O.C.) / 3200(O.C.) / 3000(O.C.) / 2800(O.C.) / 2666 / 2400 / 2133 MHz<br><br>
                </li>
                <h4>Interface de Armazenamento</h4>
                1 x M.2 connector (Socket 3, M key, type 2242/2260/2280/22110 SATA and PCIe x4/x2 SSD support) (M2A_32G)<br>
                1 x M.2 connector (Socket 3, M key, type 2242/2260/2280 PCIe x4/x2 SSD support) (M2Q_32G)<br>
                6 x SATA 6Gb/s connectors<br><br>
                </li>
                <li class="list-group-item">
                  Vendedor - Terabytes</li>
              </ul>
              <div class="card-body">
                <a href="https://www.terabyteshop.com.br/produto/8429/placa-mae-gigabyte-aorus-z370m-aorus-gaming-ddr4-lga-1151" class="card-link" target="blank">Link do Produto</a>
              </div>
            </div>

            <div class="card">
              <img class="card-img-top" src="img/pm3.png" alt="Imagem de capa do card">
              <div class="card-body">
                <h2 class="card-title">Gigabyte Z390 Gaming X DDR4 Socket LGA1151 Chipset Intel Z390</h2>
             </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h4>Modelo</h4>
                  Z390-GAMING-X
                  <br><br>
                  <h4>CPU</h4>
                  Suporte para Intel 9000 processadores e 8ª geração Intel ® processadores Core ™ i7 / Intel ® Core i5 ™ / Intel ® Core i3 ™ / Intel ® Pentium ® processadores / Intel ® Celeron ® processadores no pacote LGA1151
                  Cache L3 varia com o CPU<br><br>
                  <h4>Chipset</h4>
                  Intel ® Express Chipset Z390<br><br>
                  <h4>Gráficos</h4>
                  Processador gráfico integrado Intel® HD Graphics suporta:<br>
                  1 x Porta HDMI, suportando uma resolução máxima de 4096x2160 @ 30 Hz<br>
                  Memória compartilhada máxima de 1 GB<br><br>
                  <h4>Interface de Armazenamento</h4>
                  Chipset:
                  1 x Conector M.2 (soquete 3, tecla M, tipo 2242/2260/2280/22110 SATA e suporte SSD PCIe x4 / x2) (M2A)<br>
                  Conector M.2 1 x (soquete 3, chave H, tipo 2242/2260/2280 SATA e suporte PCIe x4 / x2 SSD, preparado para Intel ® SSD híbrido) (M2M)<br>
                  6 x Conectores SATA de 6 Gb / s<br>
                  Suporte para RAID 0, RAID 1, RAID 5 e RAID 10<br>
                  Intel ® Optane ™ Memória Pronto<br><br>
                </li>
                <li class="list-group-item">
                  Vendedor - Pichau</li>
              </ul>
              <div class="card-body">
                <a href="https://www.pichau.com.br/placa-mae-gigabyte-z390-gaming-x-ddr4-socket-lga1151-chipset-intel-z390" class="card-link" target="blank">Link do Produto</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header parallax" id="headingThree" style="background-image: url(img/memoria.jpg);">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h1 class="display-1">Memória</h1>
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="img/mem.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Corsair Vengeance LPX 4GB 2400MHz DDR4 CMK4GX4M1D2400C14 </h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Modelo</h4>
                    CMK4GX4M1D2400C14
                    <br><br>
                    <h4>TIPO</h4>
                    DDR4<br><br>
                    <h4>Tamanho</h4>
                    4GB<br><br>
                    <h4>velocidade</h4>
                    2400MHz<br><br>
                    <h4>Cor</h4>
                    Chipset:<br>
                    Preta
                    <br><br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Terabyte</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.terabyteshop.com.br/produto/8931/memoria-ddr4-corsair-vengeance-lpx-cmk4gx4m1d2400c14-4gb-2400mhz" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="img/mem.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Corsair Vengeance LPX 8GB 2400MHz DDR4 CMK8GX4M1A2400C16</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Modelo</h4>
                    CMK8GX4M1A2400C16
                    <br><br>
                    <h4>TIPO</h4>
                    DDR4<br><br>
                    <h4>Tamanho</h4>
                    8GB<br><br>
                    <h4>velocidade</h4>
                    2400MHz<br><br>
                    <h4>Cor</h4>
                    Chipset:<br>
                    Preta
                    <br><br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Terabyte</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.kabum.com.br/cgi-local/site/produtos/descricao_ofertas.cgi?codigo=84471" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="img/mem.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Corsair Vengeance LPX 16GB 2400Mhz DDR4 CMK16GX4M1A2400C14</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Modelo</h4>
                    CMK16GX4M1A2400C14
                    <br><br>
                    <h4>TIPO</h4>
                    DDR4<br><br>
                    <h4>Tamanho</h4>
                    16GB Kit (1 x 16GB)<br><br>
                    <h4>velocidade</h4>
                    2133MHz<br><br>
                    <h4>Cor</h4>
                    Chipset:<br>
                    Preta
                    <br><br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Terabyte</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.terabyteshop.com.br/produto/6646/memoria-ddr4-corsair-vengeance-lpx-cmk16gx4m1a2400c14-16gb-2400mhz" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header parallax" id="headingFour" style="background-image: url(img/placavideo.jpg);">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <h1 class="display-1">Placa de Vídeo</h1>
              </button>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="img/rx550.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Sapphire AMD Pulse RX 550 4G G5 640SP 4GB GDDR5 11268-15-20G</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4>
                    Sapphire<br><br>
                    <h4>Modelo</h4>
                    11268-15-20G
                    <br><br>
                    <h4>Processador</h4>
                    512<br><br>
                    <h4>Frequência da Memória</h4>
                    1750 MHz<br><br>
                    <h4>Suporte BIOS</h4>
                    UEFI BIOS<br><br>
                    <h4>Monitores Suportados</h4>
                    3<br><br>
                    <h4>Conectores</h4>
                    1 x DVI-D<br>
                    1 x HDMI<br>
                    1 x DisplayPort<br><br>
                    <h4>Formato</h4>
                    158mm x 112mm x 28mm<br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Kabum</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.kabum.com.br/cgi-local/site/produtos/descricao_ofertas.cgi?codigo=104003" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="img/rx580.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Asus Dual Radeon RX 580 OC 8GB GDDR5 256-bit DUAL-RX580-O8G</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4><br>
                    Asus<br><br>
                    <h4>Modelo</h4><br>
                    DUAL-RX580-O8GG
                    <br><br>
                    <h4>Processador</h4>
                    2304<br><br>
                    <h4>Frequência da Memória</h4>
                    8 Gbps<br><br>
                    <h4>Memória</h4>
                    8GB, 256bit, GDDR5<br><br>
                    <h4>Conectores</h4>
                    1 x DVI<br>
                    2 x HDMI<br>
                    2 x DisplayPort<br><br>
                    <h4>Formato</h4>
                    24.2cm x 12.89cm x3.8cm<br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Pichau</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.pichau.com.br/placa-de-video-asus-dual-radeon-rx-580-oc-8gb-gddr5-256-bit-dual-rx580-o8g" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="img/rtx2070.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Gigabyte Geforce RTX 2070 Winforce 2x 8GB GDDR6 256Bit</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4><br>
                    Gigabyte<br><br>
                    <h4>Modelo</h4>
                    RTX 2070 - GV-N2070WF2-8GD
                    <br><br>
                    <h4>Processador</h4>
                    TU106<br><br>
                    <h4>Frequência da Memória</h4>
                    14000MHz<br><br>
                    <h4>Memória</h4>
                    8GB GDDR6<br><br>
                    <h4>Conectores</h4>
                    DisplayPort 1.4 *3<br>
                    HDMI 2.0b *1<br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Terabyte</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.terabyteshop.com.br/produto/11761/placa-de-video-gigabyte-geforce-rtx-2070-winforce-2x-8gb-gddr6-256bit-gv-n2070wf2-8gd" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header parallax" id="headingFive" style="background-image: url(img/fonte.jpg);">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <h1 class="display-1">Fontes</h1>
              </button>
            </h5>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="img/500w.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">EVGA 500W 80 Plus White PFC Ativo 100-W1-0500-KR - BOX</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4>
                    EVGA<br><br>
                    <h4>Modelo</h4>
                    100-W1-500-KR
                    <br><br>
                    <h4>Tipo</h4>
                    ATX12V / EPS12V<br><br>
                    <h4>PFC</h4>
                    Ativo<br><br>
                    <h4>Modular</h4>
                    Não<br><br>
                    <h4>MTFB</h4>
                    100,000 horas<br><br>
                    <h4>Entrada</h4>
                    100V-240V / 50-60Hz<br><br>
                    <h4>Saída</h4>
                    +3.3V-24A / +5V-20A / +12V-40A / -12V-0.3A / +5Vsb-3A<br><br>
                    <h4>Conectores</h4>
                    1 x 24 Pin ATX<br>
                    1 x 4+4 Pin EPS12V<br>
                    2 x 6+2 Pin PCI-E<br>
                    6 x SATA<br>
                    3 x Molex<br>
                    1 x FDD
                  </li>
                  <li class="list-group-item">
                    Vendedor - Pichau</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.pichau.com.br/fonte-evga-500w-80-plus-white-pfc-ativo-100-w1-0500-kr-box" class="card-link" target="blank"> Link do Produto</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="img/750w.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Corsair CX750 80 Plus Bronze PFC Ativo 750W CP-9020123-WW</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4>
                    Corsair<br><br>
                    <h4>Modelo</h4>
                    CP-9020123-WW
                    <br><br>
                    <h4>Tipo de Cabo</h4>
                    Sleeved<br><br>
                    <h4>Plug Tipo</h4>
                    WW<br><br>
                    <h4>Compatibilidade</h4>
                    Suporta padrões ATX12V 2.4 / 2.3 / 2.2 / 2.01 e EPS12V 2.92<br><br>
                    <h4>MTFB</h4>
                    100,000 horas<br><br>
                    <h4>Conectores</h4>
                    1 x Conector ATX<br>
                    1 x Conector EPS<br>
                    1 x Conector Floppy<br>
                    8 x Conector 4-Pin<br>
                    4 x Conector PCIe<br>
                    8 x Conector SATA
                  </li>
                  <li class="list-group-item">
                    Vendedor - Pichau</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.pichau.com.br/fonte-corsair-cx750-80-plus-bronze-pfc-ativo-750w-cp-9020123-ww" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>
              
              <div class="card">
                <img class="card-img-top" src="img/bg009.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Corsair 1000W 80 Plus Platinum Modular PFC Ativo HX1000 CP9020139WW</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4><br>
                    Corsair<br><br>
                    <h4>Modelo</h4><br>
                    CP-9020139-WW
                    <br><br>
                    <h4>Certificação</h4>
                    80 Plus Platinum<br><br>
                    <h4>Potência</h4>
                    1000 Watts<br><br>
                    <h4>Dimensões</h4>
                    150mm x 86mm x 180mm<br><br>
                    <h4>Modular</h4>
                    Sim<br><br>
                    <h4>Conectores</h4>
                    1 x ATX<br>
                    2 x EPS<br>
                    1 x Floppy<br>
                    8 x 4 Pinos<br>
                    8 x PCIe<br>
                    16 x SATA<br>

                  </li>
                  <li class="list-group-item">
                    Vendedor - Terabyte</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.terabyteshop.com.br/produto/8537/fonte-corsair-hx1000-cp-9020139-ww-1000w-80-plus-platinum-pfc-ativo-modular" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header parallax" id="headingSix" style="background-image: url(img/gabinete.jpg);">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <h1 class="display-1">Gabinetes</h1>
              </button>
            </h5>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="img/bg009.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title"> Gabinete BlueCase Mid Tower Black LED RGB BG-009</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4>
                    Bluecase<br><br><br>
                    <h4>Modelo</h4>
                    BG-009<br><br>
                    <h4>Peso</h4>
                    4860 gramas (bruto com embalagem)<br><br>
                    <h4>Refrigeração</h4>
                    Frontal: 2x de 140 mm ou 2x de 120 mm<br>
                    Topo: 1x de 120 mm<br>
                    Traseira: 1x de 120 mm<br><br>
                    <h4>Especificações</h4>
                    Compatível com placa mãe ATX e Micro ATX<br>
                    Chapa SPCC com 0,5mm de espessura<br>
                    2 baias internas de 3,5"<br>
                    7 slots de expansão<br>
                    USB 3.0<br>
                    USB 2.0<br>
                    1 entrada para audio (P2)<br>
                    1 entrada para microfone (P2)<br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Lojas Americanas</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.americanas.com.br/produto/40613954/gabinete-2-baias-bluecase-gamer-sem-fonte-bg-009?WT.srch=1&acc=e789ea56094489dffd798f86ff51c7a9&epar=bp_pl_00_go_pc_gamer&gclid=EAIaIQobChMIyeT9juCg5QIVSwSRCh1VoQB8EAYYAiABEgLBcvD_BwE&i=59f7f66deec3dfb1f8a76610&o=5b6a2a69ebb19ac62c9715b2&opn=YSMESP&sellerId=8339569000198" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="img/c22.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Thermaltake Versa C22 RGB Mid Tower Black  CA-1G9-00M1WN-00</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4>
                    Thermaltake<br><br><br>
                    <h4>Modelo</h4>
                    CA-1G9-00M1WN-00<br><br>
                    <h4>Peso</h4>
                    6905 gramas (bruto com embalagem)<br><br>
                    <h4>Refrigeração</h4>
                    Traseira (escape): 120 x 120 x 25 mm - ventilador (1000rpm, 16dBA)<br><br>
                    <h4>Especificações</h4>
                    Tipo: Torre média<br>
                    Dimensão: 538 x 198 x 490 mm<br>
                    Painel lateral: Janela transparente<br>
                    Cor: Exterior e Interior: Preto<br>
                    Material: SPCC<br>
                    1x USB 3.0<br>
                    1x USB 2.0<br>
                    1x Áudio HD<br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Terabyte</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.terabyteshop.com.br/produto/7128/gabinete-thermaltake-versa-c22-rgb-ca-1g9-00m1wn-00-black-mid-tower" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="img/h500p.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">Cooler Master MasterCase H500P Mesh Mid Tower Gun Metal MCM-H500P-MGNN-S10			</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4>
                    Cooler Master<br><br>
                    <h4>Modelo</h4>
                    MCM-H500P-MGNN-S00
                    <br><br>
                    <h4>Materiais</h4>
                    Alumínio, Aço, Plástico, Vidro Temperado<br><br>
                    <h4>Limitações</h4>
                    CPU 190mm<br>
                    GPU 412mm<br><br>
                    <h4>Ventoinhas Inclusas</h4>
                    Frontal: 2 x 200 x 25mm RGB, 800RPM<br>
                    Traseira: 1 x 140 x 25mm, 1200RPM<br><br>
                    <h4>Especificações</h4>
                    Tipo: Torre média<br>
                    Dimensão: 538 x 198 x 490 mm<br>
                    Painel lateral: Janela transparente<br>
                    Cor: Exterior e Interior: Preto<br>
                    Material: SPCC<br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Terabyte</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.terabyteshop.com.br/produto/11909/gabinete-gamer-cooler-master-mastercase-h500p-mesh-mid-tower-com-3-fans-vidro-temperado-gun-metal-s-fonte-mcm-h500p-wgnn-s10" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header parallax" id="headingSeven" style="background-image: url(img/hd.jpg);">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <h1 class="display-1">Armazenamento</h1>
              </button>
            </h5>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="img/hd1tb.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">HD Seagate BarraCuda 1TB 3.5´ SATA - ST1000DM010</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4>
                    Seagate<br><br>
                    <h4>Modelo</h4>
                    MST1000DM010
                    <br><br>
                    <h4>Interface</h4>
                    SATA 6Gb/s<br><br>
                    <h4>Performance</h4>
                    Taxas de transferência SATA suportadas (Gb / s): 6.0/3.0/1.5<br>
                    Taxa média de dados, leitura/gravação: 156<br>
                    Máx. Taxa de dados, leitura/gravação OD: 210<br>
                    Cache: 64 MB<br><br>
                    <h4>Dimensões</h4>
                    alt.19.99mm x larg.101.85mm x prof.146.99mm<br><br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - kabum</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.kabum.com.br/cgi-local/site/produtos/descricao_ofertas.cgi?codigo=84108" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="img/ssd480gb.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">SSD Kingston A400 480GB SA400S37/480G</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4>
                    Kingston<br><br>
                    <h4>Modelo</h4>
                    SA400S37/480G
                    <br><br>
                    <h4>Interface</h4>
                    SATA Rev. 3.0 (6Gb/s) — compatível com a versão anterior SATA Rev. 2.0 (3Gb/s)<br><br>
                    <h4>Performance</h4>
                    até 500MB/s para leitura e 450MB/s para gravação<br>
                    Temperatura de armazenamento: -40 °C a 85 °C<br>
                    Temperatura de operação: 0 °C a 70 °C<br>
                    Vibração quando em operação: 2,17G pico (7 – 800 Hz)<br>
                    Vibração quando não está em operação: 20G pico (10 – 2000 Hz)<br>
                    Expectativa de vida útil: 1 milhão de horas MTB<br><br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Terabyte</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.terabyteshop.com.br/produto/7444/ssd-kingston-a400-480gb-sa400s37480g-sata-iii-leitura-500mbs-gravacao-450mbs" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="img/ssd1tb.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h2 class="card-title">SSD WD Blue 1TB Sata III 6GB/s WDS100T2B0A</h2>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4>Marca</h4>
                    Western Digital<br><br>
                    <h4>Modelo</h4>
                    WDS100T2B0A
                    <br><br>
                    <h4>Interface</h4>
                    SATA III 6Gb/s<br><br>
                    <h4>Performance</h4>
                    Form Factor: 2.5" (7mm)<br>
                    Resistência: 400 TBW<br>
                    Cerfiticações: FCC, UL, TUV, KC, BSMI, VCCI, Morocco<br><br><br>
                    <h4>Dimensões</h4>
                    69.85 x 100.2 x 7 mm<br><br>
                  </li>
                  <li class="list-group-item">
                    Vendedor - Pichau</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.pichau.com.br/ssd-wd-blue-1t-sata-6gb-s-wds100t2b0a" class="card-link" target="blank">Link do Produto</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<!-- Footer -->
<?php require_once 'footer.php' ?>

</html>