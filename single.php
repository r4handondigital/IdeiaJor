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
        
        
        
         <section class="intro section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <h1 class="arrow int"><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span><?php echo strip_tags(get_the_title()); ?></h1>

                <div class="conteu">
                <?php the_content(); ?> 
                </div>
                 <?php endwhile; endif; ?> 
          <?php wp_reset_query(); ?> 
              </div>
            </div>
            <div class="arrow text-center"><a class="learn-more-btn" href="<?php bloginfo('url'); ?>/topico/blog">Ir para listagem</a></div>
          </div>
        </section>

<?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>