<!DOCTYPE html>
<html>
  <head>
    <base href="<?php bloginfo('template_url'); ?>/" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Ideia Comunicação tem à frente as jornalistas Marina Lino e Mariana Pinto e atua no mercado potiguar desde 2009, oferecendo soluções completas de comunicação que auxiliam os clientes a ser ainda mais competitivos e a atingir seus objetivos de negócios mais rapidamente."><!--Descrição do conteúdo-->
    <meta name="keywords" content="Assessoria de Imprensa,Clipping,Media Training e Gerenciamento de Crise,Produção Editorial,Conteúdo para sites e mídias sociais, natal, rn">
    <title>IDEIA COMUNICAÇÃO</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="OwlCarousel2/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="OwlCarousel2/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="OwlCarousel2/dist/assets/owl.theme.green.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6686348-20', 'auto');
  ga('send', 'pageview');

</script>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <meta property="og:title" content="<?php the_title(); ?>"/>
            <meta property="og:type" content="blog"/>
            <meta property="og:description" content="<? $content = get_the_excerpt();
                                echo substr($content, 0, 150);
                                ?>..."/>
            <meta property="og:url" content="<?php the_permalink(); ?>"/>
 <?php endwhile; endif; ?> 
              <?php wp_reset_query(); ?>   
        <?php wp_head() ?>
      </head>
      <body id="top">
        
 
