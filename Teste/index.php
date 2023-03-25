<!-- Post the form to the bank -->
<?php

    if(isset($_POST['submit'])){

        include_once('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, mensagem) 
        VALUES ('$nome', '$email','$telefone','$mensagem')");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Styles link -->
    <link rel="stylesheet" href="Styles/style.css">

    <!-- Boxicons link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- JavaScript link -->
    <script src="Script/script.js" defer></script>
</head>
<body>

    <!-- Header -->
    <header id="home">
        <i class='bx bx-menu' id="menu-icon"></i>
        <img src="Assets/logo.png" alt="" class="logo">
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="#us">Sobre Nós</a></li>
            <li><a href="#benefits">Benefícios</a></li>
            <li><a href="#questions">Perguntas</a></li>
            <li><a href="#contact">Dúvidas</a></li>
        </ul>
        <p>(48) 9 9999-9999</p>

    </header>

    <!-- Form -->
    <section style ='background: #aab4c1' class="up">
        <div class="headline">
            <h1>ELLOS DESIGN CRIAÇÃO DE SITES E MARKETING DIGITAL.</h1>
            <p>Há mais de 10 anos no mercado, a Ellos Design tem como um de seus pilares principais, o compromisso em gerar resultados de qualidade, de maneira prática e efetiva aos nossos clientes por todo o Brasil.</p>
        </div>
        <form action="index.php" method="POST" id="form">
            <h2>Tire sua Dúvida</h2>
            <input type="text" name="nome" id="input_nome" placeholder="NOME:" required>
            <input type="email" name="email" placeholder="EMAIL:" required>
            <input type="number" name="telefone" placeholder=" DDD + TELEFONE:" required>
            <input type="text"name="mensagem" placeholder="COMO PODEMOS AJUDAR?" required>
            <input type="submit" name="submit" id="submit" value="ENVIAR"></input>
        </form>
    </section>

    <!-- Who we are -->
    <section style ='background: #ffff' id="us" >
        <img src="Assets/ellos.jpg" alt="" class="ellos">
        <div class="us">
            <h1>Quem somos.</h1>
            <p>Trabalhamos com afinco na melhoria e desenvolvimento de estratégias de acordo com as necessidades e condições de cada cliente, por isso, estudamos e analisamos a fundo o mercado e o meio em que estão inseridos. Desenvolvemos soluções inovadoras, sites, lojas virtuais, marketing digital e google ads para empresas de todos os tamanhos e segmentos.</p>
        </div>
    </section>

    <!-- Types of services -->
    <div style ='background: #e5ecf3' id="benefits">
        <h1 class="title">Com este serviço você:</h1>
        <section class="benefits" >
            <div class="box">
                <div class="box-icon">
                <i class='bx bx-signal-5'></i>
                </div>
                <div class="text-box">
                    <h2>Visibilidade</h2>
                    <p>Maior visibilidade para a empresa na internet.</p>
                </div>
            
            </div>
            <div class="box">
                <div class="box-icon">
                    <i class='bx bxs-building-house'></i>
                </div>
                <div class="text-box">
                    <h2>Credibilidade</h2>
                    <p>O ambiente virtual está nas mãos dos potenciais consumidores por meio de smartphones, cada vez mais evoluídos.</p>
                </div>
            
            </div>
            <div class="box">
                <div class="box-icon">
                <i class='bx bx-user-check'></i>
                </div>
                <div class="text-box">
                    <h2>Feedback</h2>
                    <p>Meios de feedback para ter melhor retorno de compromisso com a empresa.</p>
                </div>
            
            </div>
            <div class="box">
                <div class="box-icon">
                <i class='bx bxs-message-dots'></i>
                </div>
                <div class="text-box">
                    <h2>Comunicação</h2>
                    <p>Facilidade de comunicação e localização da empresa..</p>
                </div>
            
            </div>
            <div class="box">
                <div class="box-icon">
                <i class='bx bxs-check-circle'></i>
                </div>
                <div class="text-box">
                    <h2>Resultados</h2>
                    <p>Potencializar os resultados das redes sociais da empresa.</p>
                </div>
            
            </div>
            <div class="box">
                <div class="box-icon">
                <i class='bx bxs-business'></i>
                </div>
                <div class="text-box">
                    <h2>Negócios</h2>
                    <p>Transmitir visibilidade ao negócio.</p>
                </div>

            </div>
        </section>
        <div class="center">
            <button name="button" class="button-service">SAIBA MAIS</button>
        </div>
       
    </div>

    <!-- Questions -->
    <div style ='background: #ffff' id="questions">
        <h1 class="title">Perguntas Frequentes</h1>
        <section class="questions">
            <div class="question">
                <div class="box">
                    <div class="text-questions">
                        <p>Qual é geralmente o prazo de entrega?</p>
                    </div>
                </div>
            </div>
            <div class="question">
                <div class="box">
                    <div class="text-questions">
                        <p>Como é feito o produto?</p>
                    </div>
                </div>
            </div>
            <div class="question">
                <div class="box">
                    <div class="text-questions">
                        <p>Qual a garantia do produto feito?</p>
                    </div>
                </div>
            </div>
            <div class="question">
                <div class="box">
                    <div class="text-questions">
                        <p>Quais tecnologias podem ser melhores usadas?</p>
                    </div>
                </div>
            </div>
            <div class="question">
                <div class="box">
                    <div class="text-questions">
                        <p>O domínio do site serão meus ou da empresa?</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Clear your doubts -->
    <section style ='background: #66717f' id="contact" class="contact-box">
        <div class="text-contact">
            <h1>Ficou com alguma dúvida?</h1>
            <p>Converse com a gente!</p>
        </div>
        <div class="contact">
            <p>Clique no botão abaixo para falar conosco! </p>
            <button name="button">Contate-nos</button>
            <p>Nossa equipe de especialistas vai te ajudar a encontrar a melhor solução para você.</p>
        </div>
    </section>

    <!-- Footer -->
    <section class="" style ='background: #39475a' id="footer" class="footer">
        <div class="footer-box">
             <div class="social-ellos">
                <img src="Assets/logo-footer.png" alt="">
                <div style ='display: grid'>
                   <h3>Ellos Design</h3>
                   <p>CNPJ 99.999.999 - 0009-99</p>
                </div>
            </div>
            <div class="social">
                <h3>Siga-nos</h3>
                <a href="https://br.linkedin.com/company/ellos-design" target="_blank"><i class='bx bxl-linkedin'></i></a>
                <a href="https://twitter.com/ellos_design" target="_blank"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/ellosdesignoficial/" target="_blank"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Institucional</h3>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Portfólio</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Política de privacidade</a></li>
        </div>
        <div class="footer-box">
            <h3>Nossos Serviços</h3>
            <li><a href="#">Criação de Sites</a></li>
            <li><a href="#">Loja Virtual</a></li>
            <li><a href="#">Marketing Digital</a></li>
            <li><a href="#">Google Ads</a></li>
        </div>
        <div class="footer-box">
            <h3>Forma de pagamento</h3>
            <div class="pagamento">
                <img src="Assets/master.png" alt="">
                <img src="Assets/visa.png" alt="">
                <img src="Assets/maestro.png" alt="">
                <img src="Assets/amex.png" alt="">
                <img src="Assets/pix.png" alt="">
                <img src="Assets/boleto.png" alt="">
            </div>
        </div>
    </section>

</body>
</html>