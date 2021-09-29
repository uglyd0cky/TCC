<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location: login.php');
}
include_once 'conexao.php';
$sql = $conexao->prepare("SELECT * FROM loja.usuario where email = ?");
$sql->bindParam(1, $_SESSION['email']);

$result = $sql->execute();
$user  = $sql->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html>
 <head>
    <title>MyTeams / Perfil</title>
    <link rel="stylesheet" href="css/projeto.css?v=<?php echo time(); ?>">
    <link rel="sortcut icon" href="imagens/logo.jpeg" type="image/x-icon" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="js/JQuery3.3.1.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.maskMoney.js" type="text/javascript"></script>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="js/scriptdiv.js" defer></script>
  </head>
<body>
<header>
    <nav class="menuprincipal">
      <div class="navbar" id="navbar">
        <div class="logo"><a href="projeto.php">MyTeams</a></div>
        <div class="nav-links pre-ender">
          <ul class="links">
            <li><a href="#" class="home2">Home</a></li>
            <li><a href="#" class="home2">Sobre Nós</a></li>
          </ul>
        </div>

        <div class="nav-links ender">

            <ul class="links">
                <li>
                    <i class='bx bx-user-circle'></i>
                    <ul class="perfilsubmenu submenuprincipal">
                        <li><a href="#">Login</li></a>
                        <li><a href="#">Perfil</li></a>
                    </ul>
                </li>
                <li>
                    <i class='bx bx-cart' ></i>
                </li>
            </ul>
        

            <div class="search-box">
                <i class='bx bx-search' ></i>
                <div class="input-box pesquisar">
                    <input type="text" placeholder="O que procura?">
                </div>
            </div>
        </div>
      </div>
    </nav>
  </header>
  <nav class="submenu" id="submenu">
    <div class="navbar">
      <div class="nav-links">
        <ul class="links">
          <li>
            <a href="#" class="home2">Assinaturas</a>
            <i class='bx bx-up-arrow-alt arrow assinaturasarrow' ></i>
            <ul class="perfilsubmenu submenuprincipal">
                <li><a href="#">Netflix</li></a>
                <li><a href="#">Disney+</li></a>
              </ul>
          </li>
          <li>
            <a href="#" class="home2">Skins e itens</a>
            <i class='bx bx-up-arrow-alt arrow skinsitensarrow' ></i>
            <ul class="perfilsubmenu submenuprincipal">
                <li><a href="#">Netflix</li></a>
                <li><a href="#">Disney+</li></a>
              </ul>
          </li>
          <li>
            <a href="#" class="home2">Contas</a>
            <i class='bx bx-up-arrow-alt arrow contasarrow' ></i>
            <ul class="perfilsubmenu submenuprincipal">
                <li><a href="#">Netflix</li></a>
                <li><a href="#">Disney+</li></a>
              </ul>
          </li>
          <li>
            <a href="#" class="home2">Jogos</a>
            <i class='bx bx-up-arrow-alt arrow jogosarrow' ></i>
            <ul class="perfilsubmenu submenuprincipal">
                <li><a href="#">Netflix</li></a>
                <li><a href="#">Disney+</li></a>
              </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <div class="sidebar" id="sidebar">
        <div>
          <i class='bx bx-menu' id="btn"></i>
        </div>
          <ul>
            <hr>
            <li id="action-dados" style="cursor:pointer">
              <a>
              <i class='bx bxs-user'></i>
              <span class="links-name">Dados</span>
              </a>
              <span class="tooltip" >Dados</span>
            </li>
            <li id="action-compras" style="cursor:pointer">
              <a>
              <i class='bx bxs-basket'></i>
              <span class="links-name">Compras</span>
              </a>
              <span class="tooltip">Compras</span>
            </li>
            <li  id="action-vendas" style="cursor:pointer">
              <a>
              <i class='bx bxs-shopping-bag'></i>
              <span class="links-name">Vendas</span>
              </a>
              <span class="tooltip">Vendas</span>
            </li>
            <li id="action-anuncios" style="cursor:pointer">
              <a>
              <i class='bx bxs-store-alt'></i>
              <span class="links-name">Anuncie aqui</span>
              </a>
              <span class="tooltip">Anuncie aqui</span>
            </li>
            <li>
              <a href="logout.php">
              <i class='bx bxs-door-open'></i>
              <span class="links-name">Sair</span>
              </a>
              <span class="tooltip">Sair</span>
            </li>
          </ul>
      </div>

      <nav class="dadospessoais" id="dadospessoais">
        <div class="container">
          <div class="titulodados">Dados</div>
            <form>
              <div class="user-detalhes">
                <div class="textinput">
                  <span class="detalhe">Nome</span>
                  <label class="dados"> <?php echo $user["nome"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Sobrenome</span>
                  <label class="dados"> <?php echo $user["sobrenome"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Email:</span>
                  <label  class="dados"> <?php echo $user["email"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">CPF:</span>
                  <label  class="dados">  <?php echo $user["cpf"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Telefone:</span>
                  <label  class="dados">  <?php echo $user["telefone"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Data de nascimento:</span>
                  <label  class="dados">  <?php echo $user["dtnascimento"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Sexo:</span>
                  <label  class="dados">  <?php echo $user["sexo"]; ?></label>
                </div>
              </div>
            </form>
            <div class="titulodados">Endereço</div>
              <div class="endereco">
                <div class="subtituloendereco">Endereço Principal</div>
                <div>
                    <label>Bauru, SP</label>
                </div>
                <div>
                    <label>Rua: Alfredo Ruiz</label>
                </div>
                <div>
                    <label>Numero: 10-70</label>
                </div>
                <div>
                    <label>CEP: 17014-350</label>
                </div>
                <div>
                    <label>Bairro: Vila Mesquita</label>
                </div>
                <div class="edit">
                  <a href="#"><div>EDITAR</div></a>
                </div>
              </div>
        </div>
      </nav>
      <nav class="compras" id="compras">
        <div class="titulo-compras"><i class='bx bxs-basket' ></i>Minhas compras</div>
        <div class="compras-section">
          <div class="numero-pedido">
            <span>Número do pedido</span>
            <span>#355387</span>
          </div>
          <div class="status">
            <span>Status</span>
            <span class="status-aprov">Aprovado</span>
          </div>
          <div class="data">
            <span>Data</span>
            <span>12/01/2021</span>
          </div>
          <div class="pagamento">
            <span>Pagamento</span>
            <span>Boleto</span>
          </div>
          <div class="nf-e">
            <span>NF-E</span>
            <span><i class='bx bxs-notepad' ></i></span>
          </div>
        </div>
        <div class="compras-section">
          <div class="numero-pedido">
            <span>Número do pedido</span>
            <span>#355387</span>
          </div>
          <div class="status">
            <span>Status</span>
            <span class="status-aprov">Aprovado</span>
          </div>
          <div class="data">
            <span>Data</span>
            <span>12/01/2021</span>
          </div>
          <div class="pagamento">
            <span>Pagamento</span>
            <span>Boleto</span>
          </div>
          <div class="nf-e">
            <span>NF-E</span>
            <span><i class='bx bxs-notepad' ></i></span>
          </div>
        </div>
        <div class="compras-section">
          <div class="numero-pedido">
            <span>Número do pedido</span>
            <span>#355387</span>
          </div>
          <div class="status">
            <span>Status</span>
            <span class="status-aprov">Aprovado</span>
          </div>
          <div class="data">
            <span>Data</span>
            <span>12/01/2021</span>
          </div>
          <div class="pagamento">
            <span>Pagamento</span>
            <span>Boleto</span>
          </div>
          <div class="nf-e">
            <span>NF-E</span>
            <span><i class='bx bxs-notepad' ></i></span>
          </div>
        </div>
        <div class="compras-section">
          <div class="numero-pedido">
            <span>Número do pedido</span>
            <span>#355387</span>
          </div>
          <div class="status">
            <span>Status</span>
            <span class="status-recused">Recusado</span>
          </div>
          <div class="data">
            <span>Data</span>
            <span>12/01/2021</span>
          </div>
          <div class="pagamento">
            <span>Pagamento</span>
            <span>Boleto</span>
          </div>
          <div class="nf-e">
            <span>NF-E</span>
            <span><i class='bx bxs-notepad' ></i></span>
          </div>
        </div>
      </nav>
      <nav class="vendas" id="vendas">
        <div class="titulo-vendas"><i class='bx bxs-shopping-bag' ></i>Minha vendas</div>
        <div class="vendas-section">
          <div class="numero-venda">
              <span>Número da venda</span>
              <span>#355387</span>
            </div>
            <div class="status">
              <span>Status</span>
              <span class="status-pendente">Pendente</span>
            </div>
            <div class="data">
              <span>Data</span>
              <span>12/01/2021</span>
            </div>
            <div class="pagamento">
              <span>Pagamento</span>
              <span>Boleto</span>
            </div>
            <div class="comprador">
              <span>Comprador</span>
              <span><i class='bx bxs-user'></i></span>
            </div>
          </div>
          <div class="vendas-section">
          <div class="numero-venda">
              <span>Número da venda</span>
              <span>#355387</span>
            </div>
            <div class="status">
              <span>Status</span>
              <span class="status-pendente">Pendente</span>
            </div>
            <div class="data">
              <span>Data</span>
              <span>12/01/2021</span>
            </div>
            <div class="pagamento">
              <span>Pagamento</span>
              <span>Boleto</span>
            </div>
            <div class="comprador">
              <span>Comprador</span>
              <span><i class='bx bxs-user'></i></span>
            </div>
          </div>
        </div>
      </nav>

      <nav class="anuncios" id="anuncios">
        <div class="anuncios-box">
          <div class="tituloanucio">Anuncie Aqui</div>
          <form id="anunciar" name="anunciar" enctype="multipart/form-data">
            <div class="anuncio-box-sub">
              <div class="nomeanuncio">
                <p>Título do anúncio</p>
                <input type="text" id="nome" name="nome" placeholder="Titulo do anúncio" required>
              </div>
              <div class="tipoanuncio">
                <p>Tipo</p>
                  <select id="tipo" name="tipo" form="anunciar" required>
                    <option value="" disabled selected>Escolha a sua opção</option>
                    <option value="conta"><span>Conta</span></option>
                    <option value="assinatura"><span>Assinatura</span></option>
                    <option value="skin"><span>Skin</span></option>
                    <option value="itens"><span>Itens</span></option>
                  </select> 
              </div>
              <div class="precoanuncio">
                <p>Preço</p>
                <input type="text" id="preco" name="preco"  placeholder="R$ 0,00" required>
              </div>
              <div class="fotoanuncio">
                <p class="p">Foto do anuncio</p>
                <input type="file" name="arquivo" id="arquivo" class="arquivo">
                <input type="text" name="file" id="file" class="file" placeholder="Arquivo" readonly="readonly">
                <input type="button" class="btn" value="SELECIONAR">
              </div>
              <div class="descricaoanuncio" required>
                <p>Descrição</p>
                <textarea name="descricao" id="text" maxlength="350" placeholder="Fale um pouco mais sobre o produto"></textarea>
              </div>
              <div class="btn-anunciar">
                <input type="submit" value="Anunciar">
              </div>
            </div>
          </form>
        </div>
      </nav>


  <footer style="margin-top: 45px;">
    <div class="social">
      <a href="a" class="ftfooter"><img src="imagens/facebook.png" width="50" height="50"></a>
      <a href="a" class="ftfooter"><img src="imagens/instagram.png" width="50" height="52"></a>
      <a href="a" class="ftfooter"><img src="imagens/twitter.png" width="50" height="50"></a>
    </div>
    <div class="elementfooter">
      <a href="a" class="textfooter">Suporte</a>
      <a href="a" class="textfooter">Sobre</a>
      <a href="a" class="textfooter">Termos de uso</a>
      <a href="a" class="textfooter">Política de Privacidade</a>
    </div>
    <div class="creditos">
      <p class="textfooter">© Desenvolvido por Matheus, Pedro e Rafael</p>
    </div>
</footer>
  <script>
    let navheight = document.getElementById("navbar").offsetHeight;
    let subheight = document.getElementById("submenu").offsetHeight;
    let firstheight = navheight + subheight;

    let sideMenu = document.getElementById("sidebar");
    sideMenu.style.top = firstheight;
    console.log(navheight)
    console.log(subheight)
    console.log(firstheight);

    var lastScroll = 0;

    document.addEventListener('scroll', () => {
    let st = window.pageYOffset || document.documentElement.scrollTop;
    if(st > lastScroll) {
        navheight = document.getElementById("navbar").clientHeight;
        subheight = document.getElementById("submenu").clientHeight;
        sec = firstheight-(navheight + subheight);

        sideMenu.style.top = sec;

    }else{

        sideMenu.style.top = firstheight;
    }

    })

    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
      sidebar.classList.toggle("o")
    }
    $("#preco").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: true});

    textarea=document.getElementById('user_post_textarea');
    function len(){
    t_v=textarea.value;
    if(t_v.length>180){
      long_post_container.innerHTML=long_post;
      post_button.className=post_button.className.replace('post_it_regular','post_it_disabled');
      post_button.disabled=true;
    }
    else{
      long_post_container.innerHTML="";
      post_button.className=post_button.className.replace('post_it_disabled','post_it_regular');
      post_button.disabled=false;
    }
    if(t_v.length>186){
          t_v=t_v.substring(0,186);
      }
}
  </script>
   <script src="js/scriptajax.js"></script>
  <script src="js/scriptmenu.js"></script>
</body>
</html>