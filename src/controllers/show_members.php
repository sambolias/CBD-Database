<?php

require_once( DP_PLUGIN_DIR . 'models/user.php' );

$members = User::query_all();

DanceParty::render_view_with_template( 'show_members.php', array('members' => $members) );

?>
