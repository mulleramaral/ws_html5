<?php
require './app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso Work Series - HTML5 do Jeito Certo!</title>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">        
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/boot.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css"/>
        
        <link rel="shortcut icon" href="img/favicon.png">

    </head>
    <body>
        <header class="container bg-gray">
            <div class="content">
                <h1 class="main_logo fl-left fontzero">
                    <a title="Home" href="<?= HOME; ?>" class="radius">
                        Curso Work Series - HTML5 do Jeito Certo!
                    </a>
                </h1>

                <ul class="main_nav fl-rigth">
                     <?php require REQUIRE_PATH . '/inc/main_nav.php';?>
                </ul>
                <div class="clear"></div>
            </div>
        </header>

        <!--CONTEUDO-->
        <!--bloco de video-->
        <article class="container">
            <div class="content">
                <header class="sectiontitle">
                    <h1>Conheça o curso WS HTML5!</h1>
                    <p class="tagline">Veja o que o tutor do curso <mark>Robson V. leite</mark> tem a dizer!</p>
                </header>

                <video class="video video-large main_video" src="<?= HOME ?>/uploads/midias/Kira comendo feno.mp4" controls width="400"></video>

                <aside class="al-center">
                    <h1>Pronto para <a class="btn btn-yellow radius" title="Comprar Curso WS HTML5 Agora!" target="_blank" href="http://www.upinside.com.br/curso/curso-html5">Comprar o WS HTML5</a> e Aprender de Verdade?</h1>
                </aside>

                <div class="clear"></div>
            </div>

            <footer class="bg-bluelight">
                <section class="content main_videos" style="padding-bottom:  10px">
                    <h1>Veja Algumas Aulas do Curso WS HTML5!</h1>

                    <article class="box box-small">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="<?= INCLUDE_PATH ?>/img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1 class="box_video_title">Entenda o HTML5</h1>
                    </article>
                    
                    <article class="box box-small">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="<?= INCLUDE_PATH ?>/img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1 class="box_video_title">Entenda o HTML5</h1>
                    </article>
                    
                    <article class="box box-small">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="<?= INCLUDE_PATH ?>/img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1 class="box_video_title">Entenda o HTML5</h1>
                    </article>
                      
                    <article class="box box-small last">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="<?= INCLUDE_PATH ?>/img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1 class="box_video_title">Entenda o HTML5</h1>
                    </article>
                                        
                    <div class="clear"></div>
                </section>
            </footer>            
        </article>

        <!--seção relacional-->
        <section class="container bg-orange">
            <!--seção de titulo-->
            <div class="content">
                <div class="sectiontitle sectiontitle-nomargin">
                    <h1>Conheça as tecnologias apresentadas:</h1>
                    <p class="tagline">O Curso WS HTML5 apresenta técnicas com foco em produção e otimização de conteúdo para internet!</p>
                </div>
                <div class="clear"></div>
            </div>
            
            <!--seção de artigos-->
            <div class="container bg-body">
                <div class="content" style="padding-bottom: 10px">
                    <article class="main_tec_item_box box box-small al-center radius">
                        <img src="<?= INCLUDE_PATH ?>/img/tec_semantic.png" alt="HTML5 Semântico" title="Módulo de HTML5 Semântico">
                        <h1>HTML5 Semântico:</h1>
                        <p class="tagline">Aprenda a produzir conteúdo de qualidade. Otimizando cada bloco tanto para usuários quanto para robôs de busca!</p>
                    </article>
                    
                    <article class="main_tec_item_box box box-small al-center radius">
                        <img src="<?= INCLUDE_PATH ?>/img/tec_drycss.png" alt="CSS produtivo com OOCSS" title="Módulo de CSS produtivo com OOCSS">
                        <h1>CSS produtivo com OOCSS:</h1>
                        <p class="tagline">Conheça as técnicas de produção do modelo OOCSS, construindo um ambiente padrozinado e de agil desenvolvimento!</p>
                    </article>
                                        
                    <article class="main_tec_item_box box box-small al-center radius">
                        <img src="<?= INCLUDE_PATH ?>/img/tec_forms.png" alt="Formulários com HTML5" title="Módulo de Formulários com HTML5">
                        <h1>Formulários com HTML5:</h1>
                        <p class="tagline">Conheça e aprenda a utilizar toda tecnologia dos novos elementos de formulário do HTML5</p>
                    </article>
                    
                    <article class="main_tec_item_box box box-small al-center last radius">
                        <img src="<?= INCLUDE_PATH ?>/img/tec_midia.png" alt="Áudio e Vídeo na Web" title="Módulo de Áudio e Vídeo na Web">
                        <h1>Áudio e Vídeo na Web:</h1>
                        <p class="tagline">Nunca foi tão facil incorporar e controlar mídias na internet.Aprenda a fazer isso de forma fácil!</p>
                    </article>
                    
                    <div class="box-line"></div>
                    <article class="main_tec_item_box box box-small al-center radius">
                        <img src="<?= INCLUDE_PATH ?>/img/tec_geo.png" alt="Geolocation e HTML5 Storage" title="Módulo de Geolocation e HTML5 Storage">
                        <h1>Geolocation e HTML5 Storage:</h1>
                        <p class="tagline">Aprenda a utilizar a tecnologia de localização do HTML5. E Ainda armazene dados de navegação apenas com HTML!</p>
                    </article>
                    
                    <article class="main_tec_item_box box box-small al-center radius">
                        <img src="<?= INCLUDE_PATH ?>/img/tec_microdados.png" alt="Distribuição com Micro Dados" title="Módulo de Distribuição com Micro Dados">
                        <h1>Distribuição com Micro Dados:</h1>
                        <p class="tagline">Aprenda a utilizar o vocabulário dos micro dados para distribuir conteúdo otimizado de forma extrema!</p>
                    </article>
                    <div class="clear"></div>
                </div>
            </div>
        </section>
        
        <!--seção tematica-->
        <section class="container bg-bluelight">
            <div class="content">
                <div class="sectiontitle">
                    <h1 class="shorticon shorticon-config ds-inlineblock">Ficha Técnica:</h1>
                    <p class="tagline">Saiba mais sobre o contéudo do curso WS HTML5!</p>
                </div>
                <article class="main_info box box-small"><h1>Tempo em Aula: <b>23hrs</b></h1></article>
                <article class="main_info box box-small"><h1>Certificado de : <b>230hrs</b></h1></article>
                <article class="main_info box box-small"><h1>Módulos: <b>8</b></h1></article>
                <article class="main_info box box-small last"><h1>Vídeo Aulas: <b>50</b></h1></article>
                <div class="clear"></div>
            </div>
        </section>
        
        <!--retomada e conversão-->
        <article class="container bg-blue">
            <div class="content content-page al-center">
                <header class="sectiontitle">
                    <h1>Faça Parte da Turma WS HTML5, Matricule-se!</h1>
                    <p class="tagline">Comece Agora Mesmo. O Curso é <mark>100% em Vídeo Aulas</mark>,<mark>Online e On Demand</mark>!</p>
                    <a class="btn btn-green btn-big radius al-center" title="Quero Me Matricular no Curso WS HTML5 Agora!" href="#">Comprar Curso WS HTML</a>
                </header>
                
                <footer>
                    <div class="main_chamada al-center">
                        Você estuda quando e onde quiser na melhor plataforma EAD. Com Suporte diretamente com o tutor, e todo material disponivel para download!
                    </div>
                </footer>
                
                <div class="clear"></div>
            </div>
        </article>
        
        <!--content visual-->
        <div class="container">
            <div class="content content-page al-center fontsize2 fontlight">
                UpInside Treinamentos. Os melhores e mais completos cursos de desenvolvimento WEB e TI do mercado.
                <div class="clear"></div>
            </div>
        </div>
        <!--CONTEUDO-->

        <footer class="container bg-light">
            <section class="main_footer content">
                <h1 class="fontzero">Sobre a UpInside Treinamentos</h1>

                <nav class="box box-medium">
                    <h1 class="title fontbold">Mais sobre o WS HTML5:</h1>
                    <ul>
                        <li><a class="shorticon shorticon-section" title="Assita o vídeo de apresentação com Robson V. Leite" href="#apresentacao">Assista o Vídeo</a></li>
                        <li><a class="shorticon shorticon-section" title="Veja as tecnologias que você vai aprender!" href="#tecnologias">Você vai Aprender</a></li>
                        <li><a class="shorticon shorticon-section" title="Mais informações na ficha técnica do curso!" href="#fichatecnica">Ficha Técnica</a></li>
                    </ul>
                </nav>

                <article class="box box-medium">
                    <h1 class="title fontbold">UpInside nas redes sociais:</h1>
                    <ul>
                        <li><a class="shorticon shorticon-facebook" target="_blank" rel="nofollow" title="UpInside Treinamentos no Facebook" href="http://www.facebook.com/upinside">Facebook</a></li>
                        <li><a class="shorticon shorticon-google" target="_blank" rel="nofollow" title="UpInside Treinamentos no Google Plus" href="http://plus.google.com/+upinside">Google+</a></li>
                        <li><a class="shorticon shorticon-twitter" target="_blank" rel="nofollow" title="UpInside Treinamentos no Twitter" href="http://www.twitter.com/UpInsideBr">Twitter</a></li>
                    </ul>
                </article>


                <article class="main_ead box box-medium last">
                    <h1 class="fontzero">Plataforma UpInside</h1>

                    <p class="shorticon shorticon-config"><b>Plataforma EAD:</b> <a title="Plataforma EAD da UpInside" href="http://www.upisnide.com.br">www.upinside.com.br</a></p>
                    <p class="shorticon shorticon-mail"><b>E-mail:</b> <a title="Envie um e-mail" href="mailto:cursos@upinside.com.br">cursos@upinside.com.br</a></p>
                    <hr>
                    <p>&copy; <?= date('Y'); ?> - UpInside Treinamentos, Todos Os Direitos Reservados!</p>
                </article>

                <div class="clear"></div>
            </section>            
        </footer>
    </body>
</html>
