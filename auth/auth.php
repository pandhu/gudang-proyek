<?php // Load the settings from the central config file
require_once 'config.php';
// Load the CAS lib
require_once 'CAS.php';

// Enable debugging
phpCAS::setDebug();

// Initialize phpCAS
phpCAS::client(CAS_VERSION_2_0, 'sso.ui.ac.id/cas2', 443, '');

// For production use set the CA certificate that is the issuer of the cert
// on the CAS server and uncomment the line below
// phpCAS::setCasServerCACert($cas_server_ca_cert_path);

// For quick testing you can disable SSL validation of the CAS server.
// THIS SETTING IS NOT RECOMMENDED FOR PRODUCTION.
// VALIDATING THE CAS SERVER IS CRUCIAL TO THE SECURITY OF THE CAS PROTOCOL!
phpCAS::setNoCasServerValidation();

// force CAS authentication
phpCAS::forceAuthentication();

// at this step, the user has been authenticated by the CAS server
// and the user's login name can be read with phpCAS::getUser().
if (isset($_REQUEST['logout'])) {
  session_unset();
  phpCAS::logout();
}

$_SESSION['data'] = phpCAS::getAttributes(); // simpen data user ke session
$_SESSION['data']['username'] = phpCAS::getUser();
//var_dump($_SESSION['data']);
header("Location: http://localhost/gudang-proyek/developer/dashboard"); // redirect
?>