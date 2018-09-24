<?php
	  session_start();
	  require_once "google/vendor/autoload.php";
	  $gclient = new google_client();
	  $gclient->setClientId("440944623607-ad6v10uojupm9nhsqdi178najqllhv94.apps.googleusercontent.com");
	  $gclient->setClientSecret("HBN0zqo_JCi8eVb74we92nS7");
	  $gclient->setApplicationName("SAN login");
	  $gclient->setRedirecturi("http://localhost:8080/php/cms/index.php/g-callback.php");
	  $gclient->setRedirecturi("http://localhost:8080/php/cms/menu.php/g-callback.php");
	  $gclient->setRedirecturi("http://localhost:8080/php/cms/post.php/g-callback.php");
	  $gclint->addScope(scope_or_scopes:"https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>