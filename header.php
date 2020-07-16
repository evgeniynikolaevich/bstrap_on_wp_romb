<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Home</title>
    <?php
     wp_head();
    wp_enqueue_scripts();
    ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    </head>
      </html>
      <body>
      <div class="container-fluid">
        <div class="row header-container">
          <div class="col-md-1 mr-4 block">
              <img class="main-logo" src="<?php echo get_template_directory_uri(); ?>/assets/build/img/main-logo.png" />
          </div>
          <div class="col-md-4 block">
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
                       'link_after'      => '',
                       'depth'           => 0,
                       'walker'          => '',
                     ] );; ?>
          </div>
          <div class="col-md-2">
            <div class="some-phone">
              <p>+7 980 336 26 06 </p>
            </div>
          </div>
          <div class="col-md-2">
            <div class="callback-but">
              
            </div>
          </div>
          </div>
        </div>

      </body>
