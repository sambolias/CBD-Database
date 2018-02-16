<?php

/*
 * Include all routes here.
 * Format:
 *     Router::route( $endpoint, $controller );
 */

Router::route( 'test', 'test.php' );
Router::route( 'signup', 'signup.php' );
Router::route( 'user_model_test', 'umt.php' );
Router::route( 'show_members', 'show_members.php' );
Router::route( 'create_event', 'create_event.php' );

?>
