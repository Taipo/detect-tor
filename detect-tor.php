<?php
  function detect_tor() {
    $req = reverse_ip( $_SERVER[ 'REMOTE_ADDR' ] ) . "." . $_SERVER[ 'SERVER_PORT' ] . "." . reverse_ip( $_SERVER[ 'SERVER_ADDR' ] ) . ".ip-port.exitlist.torproject.org.";
    $return_ip = gethostbyname( $req );
    return ( $return_ip == "127.0.0.2" ) ? true : false;
  }
  function reverse_ip( $ip ) {
    return implode( ".", array_reverse( explode( ".", $ip ) ) );
  }
?>
