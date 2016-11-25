<?PHP
session_start();


if(isset($_COOKIE) && count($_COOKIE) >0 ){
	print_r($_COOKIE);
}
if(isset($_SESSION) && count($_SESSION) >0){
	print_r($_SESSION);

}


include_once( dirname(__FILE__).'\login_frm.php');
?>