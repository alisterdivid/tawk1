<?php
require_once( "../common/config.php" );
//header('Access-Control-Allow-Credentials:true');
$sk = $_GET['sk'];
if ( ! isset( $_GET['sid'] ) ) {
	$_SESSION['currentStep'] = 0;
}
if ( isset( $_REQUEST['__t'] ) && ( $_REQUEST['__t'] != null ) ) {
	if ( $_SESSION['request_step'] != $_REQUEST['__t'] ) {
		$_SESSION['currentStep'] ++;
		$_SESSION['request_step'] = $_REQUEST['__t'];
	}
}

if ( $_SESSION['currentStep'] == 1 ) {
	$data = file_get_contents("sid.txt");
	header( 'Content-Type: text/plain' );
	echo $data;
	die();
} elseif ( $_SESSION['currentStep'] == 2 ) {
	$data = file_get_contents("ready.txt");
	header( 'Content-Type: text/plain' );
	echo $data;
	die();
} elseif ( $_SESSION['currentStep'] == 3 ) {
	echo 'ok';
	header( 'Content-Type: text/html' );
	die();
} elseif ( $_SESSION['currentStep'] == 4 ) {
	$data = file_get_contents("initData.txt");
	header( 'Content-Type: text/plain' );
	echo $data;
	die();
} elseif ( $_SESSION['currentStep'] == 5 ) {
	echo 'ok';
	header( 'Content-Type: text/html' );
	die();
} elseif ( $_SESSION['currentStep'] == 6 ) {
	$data = file_get_contents("1829.txt");
	header( 'Content-Type: text/plain' );
	echo $data;
	die();
} elseif ( $_SESSION['currentStep'] == 7 ) {
	echo 'ok';
	header( 'Content-Type: text/html' );
	die();
}