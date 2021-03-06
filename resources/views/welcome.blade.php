<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio Ítalo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="../css/app.css" rel="stylesheet">
</head>
<body class="">
    <!-- Header -->
    <header id="header">
        <div class="header container-a">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><span>L</span>ION <span>D</span>EV</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="#hero" data-after="Home">Início</a></li>
                        <li><a href="#services" data-after="Service">Serviços</a></li>
                        <li><a href="#projects" data-after="Projects">Projetos</a></li>
                        <li><a href="#about" data-after="About">Sobre</a></li>
                        <li><a href="#contact" data-after="Contact">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Hero Section  -->
    <section id="hero">
        <div class="hero container-a">
            <div>
                <h1>Olá, <span></span></h1>
                <h1>Meu Nome é <span></span></h1>
                <h1>Ítalo <span></span></h1>
                <a href="#projects" type="button" class="cta">Portfólio</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section  -->

    <!-- Services Section -->
    <section id="services">
        <div class="services container-a">
            <div class="service-top">
                <h1 class="section-title">Serv<span>i</span>ços</h1>
                <p>O Lion Dev é uma empresa de criação de sites institucionais com a finalidade de
                    registrar a marca de sua empresa no mundo digital. Tenha o encanto de seus clientes
                    por sua prestação de serviço através de um clique.</p>
            </div>
            <div class="service-bottom">
                {{--WEB DESIGN--}}
                <div class="service-item">
                    <div class="icon">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/web.png" alt=""/>
                    </div>
                    <h2>Web Design</h2>
                    <p>Nosso trabalho é garantir que seu site seja atrativo aos olhos de seus clientes,
                    por isso temos como foco a garantia de lhes oferecer um bom design gráfico.</p>
                </div>
                {{--DOMAIN--}}
                <div class="service-item">
                    <div class="icon">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/domain.png" alt=""/>
                    </div>
                    <h2>Domínio</h2>
                    <p>Escolha o domínio de seu site para que seus clientes através dele acessem sua página e conheça mais sobre a sua
                        empresa e os serviços prestados.</p>
                </div>
                {{--SEO--}}
                <div class="service-item">
                    <div class="icon">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/google-web-search.png" alt=""/>
                    </div>
                    <h2>SEO</h2>
                    <p>Usamos estratégias de otimização (SEO) para que seu site venha estar entre os primeiros resultados de busca nos
                        maiores navegadores da internet.</p>
                </div>
                {{--SERVER--}}
                <div class="service-item">
                    <div class="icon">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/stack.png" alt=""/>
                    </div>
                    <h2>Servidor</h2>
                    <p>Seu site é hospedado em um servidor, possibilitando seus clientes visitar sua página a qualquer momento
                        e em qualquer lugar onde haja internet.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Projects Section -->
    <section id="projects">
        <div class="projects container-a">
            <div class="projects-header">
                <h1 class="section-title">Projetos <span>Recentes</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-info">
                        <h1>Arte e Reforma</h1>
                        <h2><a href="https://arteereforma.com/" target="_blank">arteereforma.com</a></h2>
                        <p>O projeto Arte e Reforma é um site institucional com intuito de apresentar
                        a empresa e seus serviços prestados.</p>
                    </div>
                    <div class="project-img">
                        <img class="img" src="{{ asset('images/portfolio-1.png') }}" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>D-BOARD</h1>
                        <h2>dboard.com.br</h2>
                        <p>O projeto D-BOARD é um site de Dashboard administrativo desenvolvido para aprendizagem de novas tecnologias como VueJS, TailwindCSS, gráfico e componentes visuais.</p>
                    </div>
                    <div class="project-img">
                        <img class="img" src="{{ asset('images/portfolio-2.png') }}" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Landing</h1>
                        <h2>landing.com.br</h2>
                        <p>O projeto Landing é site de viagens fake desenvolvido para aprendizagem de novas tecnologias, como por exemplo tailwindcss e boas práticas de layouts.</p>
                    </div>
                    <div class="project-img">
                        <img class="img" src="{{ asset('images/portfolio-3.png') }}" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Beauty Salon</h1>
                        <h2>beautysalon.com.br</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
                            rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
                            harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img class="img" src="{{ asset('images/portfolio-4.png') }}" alt="img">
                    </div>
                </div>
                {{--<div class="project-item">
                    <div class="project-info">
                        <h1>Project 5</h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
                            rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
                            harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img class="img" src="{{ asset('images/img-1.png') }}" alt="img">
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

    <!-- About Section -->
    <section id="about">
        <div class="about container-a">
            <div class="col-left">
                <div class="about-img">
                    <img class="img" src="{{ asset('images/img-2.png') }}" alt="img">
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">Sobre <span>mim</span></h1>
                <h2>Front End Developer</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque
                    repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt
                    exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni!
                    Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt
                    reprehenderit libero enim!</p>
                <a href="#" class="cta">Download Resumo</a>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact container-a">
            <div>
                <h1 class="section-title">Dados para <span>contato</span></h1>
            </div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/phone.png" alt=""/>
                    </div>
                    <div class="contact-info">
                        <h1>Telefone</h1>
                        <h2>+55 11 98411-1337</h2>
                        <h2>+55 11 98143-0938</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/new-post.png" alt=""/>
                    </div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>liondevelopeer@gmail.com</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/map-marker.png" alt=""/>
                    </div>
                    <div class="contact-info">
                        <h1>Endereço</h1>
                        <h2>Estr. M'boi mirim 6554 - SP - São Paulo</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Footer -->
    <section id="footer">
        <div class="footer container-a">
            <div class="brand">
                <h1><span>L</span>ion <span>D</span>ev</h1>
            </div>
            <h2>Sua Solução Web Completa</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="#">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" alt=""/>
                    </a>
                </div>
                <div class="social-item">
                    <a href="#">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" alt=""/>
                    </a>
                </div>
                <div class="social-item">
                    <a href="#">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/twitter.png" alt=""/>
                    </a>
                </div>
                <div class="social-item">
                    <a href="#">
                        <img class="img" src="https://img.icons8.com/bubbles/100/000000/behance.png" alt=""/>
                    </a>
                </div>
            </div>
            <p>Copyright © 2021 Lion Dev. All rights reserved</p>
        </div>
    </section>
    <!-- End Footer -->

    <script src="../js/app.js"></script>
    <script src="https://widzap.com/cdn/1/src.min.js"></script>

    <section>
        <!-- WidZap -->
        <script>
            let options = {
                whatsapp: "5511984111337",
                position: "right",
                type: 1,
                title: "👋 Olá! Tudo bem? Fale conosco pelo WhatsApp!",
                text: "Nossa equipe está esperando seu contato. Inicie uma conversa abaixo.",
                primary: "#56cbab",
                secondary: "#00d2b5",
                title_color: "#000000",
                text_color: "#606060"
            };
            iniWidZap();
        </script>
        <!-- End WidZap -->
    </section>
</body>
</html>
