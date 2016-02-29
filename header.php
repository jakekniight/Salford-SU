<!doctype html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Salford Students' Union</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
           <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



        <?php  wp_head(); ?>
    </head>
<?php

	if( is_front_page() ):
	$salfordSU_classes = array('salfordSU-class', 'my-class'); else :
	$salfordSU_classes = array('no-salfordSU-class');
	endif;
	?>

    <body <?php  body_class( $salfordSU_classes ); ?>>
        <?php  wp_nav_menu(array('theme_location' =>'primary')); ?>
  <img src="<?php  header_image(); ?>" height="<?php  echo get_custom_header() ->height; ?>" width="
  <?php  echo get_custom_header() -> width; ?>" alt="" />
