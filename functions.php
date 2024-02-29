<?php
  add_action( 'wp_enqueue_scripts', 'add_styles' );
  function add_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() . "/assets/main.css" );
  } 

  function echo_arg($args, $arg, $default = "% not set"){
    echo $args[$arg] ?? str_replace("%", $arg, $default);
  }

  require_once(__DIR__ . '/includes/BenefitsPostTypeClass.php');
  $benefitsPostType = new BenefitsPostTypeClass();
  $benefitsPostType->add_actions();

  function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
  }
?>