<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        <header id="home">
          <nav>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <nav class="pull">
                    <ul class="top-nav">
                      
                      <li><a href="<?php bloginfo('url'); ?>/#responsive">A Ideia <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="<?php bloginfo('url'); ?>/#blog">Notícias <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="<?php bloginfo('url'); ?>/#portfolio">Serviços <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="<?php bloginfo('url'); ?>/#team">Portfólio <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="<?php bloginfo('url'); ?>/#contact">Clientes <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </nav>
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <a href="<?php bloginfo('url'); ?>"><img src="img/logo-ideia.png"></a>
                </div>
                <div class="col-md-2 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" ><span></span></a>
                </div>
              </div>
             
              <div class="row">
                <div class="col-md-12">
                  <h1 class="titulo-principal">
                    
                      Transformar sua <br> empresa em notícia:
                    
                   <span> esta é a nossa missão</span>
                  </h1>
                 <div class="mob"><img src="img/logo-10anos.png"></div>
                </div>
              </div>
            </div>
          </section>
        </header>
        
        
        <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="iphone">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    
                        <h1 class="arrow">A Ideia</h1>
                        <p>A oferta de serviços da Ideia Comunicação acompanha as tendências do mercado, que está cada vez mais exigente, com consumidores sofisticados e com comunicação presente em todos os lugares. Por isso, trabalhamos para transformar a comunicação em algo único e para auxiliar nossos clientes a obter excelência em suas atividades.</p>

                        <p>A Ideia Comunicação tem à frente as jornalistas Marina Lino e Mariana Pinto e atua no mercado potiguar desde 2009, oferecendo soluções completas de comunicação que auxiliam os clientes a ser ainda mais competitivos e a atingir seus objetivos de negócios mais rapidamente.</p>
                      
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
         <section class="portfolio text-center section-padding" id="blog">
          <div class="container">
            <div class="row">
           
                <h1 class="arrow">NOTÍCIAS</h1>
              
              <?php query_posts(array( 'showposts' => '1' )); ?>
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?php the_field('imagem_da_chamada'); ?>" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="<?php the_permalink(); ?>" class="expand"><i class="fa fa-search"></i><br>Confira</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?php echo strip_tags(get_the_title()); ?></h2>
                      <p><? $content = get_the_excerpt();
                                echo substr($content, 0, 150);
                                ?>...</p>
                    </div>

                    <?php endwhile; endif; ?> 
              <?php wp_reset_query(); ?>   


              <?php query_posts(array( 'showposts' => '1','offset' => '1' )); ?>

               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?php the_field('imagem_da_chamada'); ?>" alt="Portfolio Item" height="416">
                          <div class="overlay">
                            <a href="<?php the_permalink(); ?>" class="expand"><i class="fa fa-search"></i><br>Confira</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?php echo strip_tags(get_the_title()); ?></h2>
                      <p><? $content = get_the_excerpt();
                                echo substr($content, 0, 150);
                                ?>...</p>
                    </div>

                    <?php endwhile; endif; ?> 
              <?php wp_reset_query(); ?>   


               <?php query_posts(array( 'showposts' => '1','offset' => '2' )); ?>
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?php the_field('imagem_da_chamada'); ?>" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="<?php the_permalink(); ?>" class="expand"><i class="fa fa-search"></i><br>Confira</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?php echo strip_tags(get_the_title()); ?></h2>
                      <p><? $content = get_the_excerpt();
                                echo substr($content, 0, 150);
                                ?>...</p>
                    </div>

                    <?php endwhile; endif; ?> 
              <?php wp_reset_query(); ?>   



                   
                
            </div>

                 <div class="arrow text-center"><a class="learn-more-btn" href="<?php bloginfo('url'); ?>/topico/blog">Ver mais</a></div>
          </div>
        </section>

         <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <h1 class="arrow">SERVIÇOS</h1>
                <ul class="slides">
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="icon">
                      <i class="fa fa-file-text-o fa-2x"></i>
                    </div>
                    <h2>Assessoria de Imprensa</h2>
                    <p>Em total sintonia com os profissionais da imprensa nos mais variados segmentos, atuamos em contato direto com as redações antecipando as notícias dos clientes e atendendo a demanda da mídia. Nosso trabalho é transformar o cliente em fonte de informação de credibilidade, executando um plano de posicionamento perante a opinião pública, resultando em reconhecimento da marca e agregando valor à imagem do produto, evento ou serviço.</p>
                    </div>
                   

                    <div class="col-md-4 wp4 delay-05s">
                      <div class="icon">
                      <i class="fa fa-laptop fa-2x"></i>
                    </div>
                    <h2>Marketing de Conteúdo na Internet</h2>
                    <p>Atualizamos sites e blogs do cliente com notícias e textos diversos, além de produzir conteúdo para atualização e interação do cliente com o público por meio das mídias sociais, como Twitter, Facebook e Instagram.</p>
                    </div>

                    <div class="col-md-4 wp4 delay-1s">
                      <div class="icon">
                      <i class="fa fa-list-alt fa-2x"></i>
                    </div>
                    <h2>Produção Editorial</h2>
                    <p>Uma de nossas especialidades é a produção editorial. São publicações, como jornais, revistas, newsletters e boletins para públicos dirigidos. Para isso, contamos com uma equipe especializada em reportagem, edição, fotografia e design para garantir edições de alta qualidade e divulgar a sua empresa de acordo com os objetivos a serem atingidos.</p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-6 wp4">
                      <div class="icon">
                      <i class="fa fa-newspaper-o fa-2x"></i>
                    </div>
                    <h2>Clipping</h2>
                    <p>Diariamente, executamos o gerenciamento de informação e conteúdo jornalístico veiculado sobre o cliente nos meios de comunicação. Quando falamos em Assessoria de Comunicação, acompanhar esses dados é essencial para identificar quais as principais frentes de divulgação, os assuntos que a imprensa mais aborda e o espaço que o cliente ocupa na mídia, auxiliando a traçar estratégias de comunicação específicas de acordo com os objetivos a serem alcançados. Mensalmente, emitimos relatórios quantitativos e qualitativos, que avaliam a presença do cliente na mídia e os assuntos mais abordados naquele período.
</p>
                    </div>

                     <div class="col-md-6 wp4 delay-05s">
                      <div class="icon">
                      <i class="fa fa-line-chart fa-2x"></i>
                    </div>
                    <h2>Media Training e Consultoria em Crise</h2>
                    <p>Em tempos de propagação de informações em alta velocidade com o crescimento das redes sociais na internet, comunicar-se mal pode significar, em segundos, a perda de mercados e o dano de reputação muitas vezes irreversível. Realizamos o treinamento de executivos e porta-vozes para comunicar as informações de forma clara e de acordo com a estratégia que se quer alcançar. Acompanhamos entrevistas e orientamos nosso cliente de acordo com o planejamento estratégico previamente definido, para que o porta-voz relacione-se  com a sociedade e a opinião pública da forma mais adequada. Desenvolvemos também planos de gerenciamento de crise, atuando de acordo com cada situação.
</p>
                    </div>

                    
                  
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

       
      
       
       
        <section class="team text-center section-padding" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">PORTFÓLIO</h1>
              </div>
            </div>
            <div class="row">


            <?php query_posts(array( 'showposts' => '30', 'post_type' => 'portfolio' )); ?>
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <div class="coluna wp4">
                  <div class="overlay-effect effects clearfix">
                    <div class="img">
                      <img src="<?php the_field('imagem_portfolio'); ?>" >
                      <div class="overlay">
                        <a href="<?php the_field('link_do_issu'); ?>" target="_blank" class="expand"><i class="fa fa-search"></i><br>Saiba Mais</a>
                        <a class="close-overlay hidden">x</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; endif; ?> 
              <?php wp_reset_query(); ?>   

                
                </div><!--.row-->
            </div>
          </div>
        </section>
        
        <section class="text-center contact-wrap" id="contact">
          <a href="<?php bloginfo('url'); ?>#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
             <div class="row">
              <div class="col-md-12">
                <h1 class="arrow" style="margin-bottom: 0; padding:30px 0 0 0; ">CLIENTES</h1>
              </div>
            </div>

            <div class="row">
              <div class="owl-carousel owl-theme" style="margin:40px 0;">
                  
              <?php query_posts(array( 'showposts' => '60', 'post_type' => 'cliente' )); ?>
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  <div class="item"><img src="<?php the_field('logo_do_cliente'); ?>"></div>
                  <?php endwhile; endif; ?> 
              <?php wp_reset_query(); ?>   
              </div>
            </div><!--.row-->
           
           
          </div>
        </section>
<?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>