<?php
	session_start();

    if( isset( $_SESSION[ 'username' ] ) ) {
        $username = $_SESSION[ 'username' ];
        $jb_login = TRUE;
    }
    else
        $jb_login = false;
?>