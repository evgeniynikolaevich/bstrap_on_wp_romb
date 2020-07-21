<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <meta name="generator" content="Jekyll v4.0.1">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/build/js/script.js"></script>
    <title>Home</title>
    <?php
     wp_head();
    wp_enqueue_scripts();
    ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    </head>
      </html>
      <body>
      <div class="header-plus-first-block">
          <div class="container-fluid">
            <div class="row header-container">
                      <div class="col-md-1">
                          <img class="main-logo" src="<?php echo get_template_directory_uri(); ?>/assets/build/img/main-logo.png" />
                      </div>
                      <div class="col-md-4 offset-md-1">
                        <?php wp_nav_menu( [
                                   'theme_location'  => '',
                                   'menu'            => 'header_menu',
                                   'container'       => 'ul',
                                   'container_class' => 'header-container-menu',
                                   'container_id'    => '',
                                   'echo'            => true,
                                   'before'          => '',
                                   'after'           => '',
                                   'link_before'     => '',
                                   'depth'           => 0,
                                   'walker'          => '',
                                 ] );; ?>
                      </div>
                      <div class="col-md-2 offset-md-1">
                        <div class="some-phone">
                          <p>+7 980 336 26 06 </p>
                        </div>
                      </div>
                      <div class="col-md-1 ">
                          <div class="call-me">
                                <div class="callback">
                                    <a href="#" class="callback__button">Обратный звонок</a>
                                </div>
                          </div>
                    </div>
            </div>
        </div>
