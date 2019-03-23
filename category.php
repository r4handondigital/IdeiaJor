<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
       <header id="home" class="interna">
         
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <a href="<?php bloginfo('url'); ?>/"><img src="img/logo-ideia.png"></a>
                </div>
                <div class="col-md-2 text-right navicon">
                 <h1 class="titulo-principal">NOTÍCIAS</h1>
                <div style="display: none;"> <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a></div>
                </div>
              </div>
             
            </div>
          </section>
        </header>
        
        
        
        <section class="portfolio text-center section-padding" id="blog">
          <div class="container">
            <div class="row">
           
           
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


              <div class="navigation">
                 <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
              </div>

            </div>
          </div>
        </section>

<?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>