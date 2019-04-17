
<?php
//session_id( 'mySessionId' );
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Elements</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
<link rel="shortcut icon" type="image/x-icon" href="https://d1o5lmfp4gliop.cloudfront.net/assets/favicon-271ae300988b62ece3b4cf66c01c3e7009bfb65839edd064f199b990d3f89c4f.ico" />

  <link rel="apple-touch-icon"                 href="/touch-icon-iphone.png">
  <link rel="apple-touch-icon" sizes="76x76"   href="/touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/touch-icon-ipad-retina.png">
  <link rel="stylesheet" media="all" href="https://d1o5lmfp4gliop.cloudfront.net/assets/application-bf750350668fb68c7d1d54d4caacdcf06ec5a21e849fb24fc3212b8b29cda425.css" />
  <script src="https://d1o5lmfp4gliop.cloudfront.net/assets/application-ad46a63ff8292fabd58fb815f242c430c3d7f4dbfdb933d05d137fa9d2ae07d5.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>
    var _rollbarConfig = {
      accessToken: "7292cc33ae3843d4bc12aa01e4d82436",
      captureUncaught: true,
      payload: {
        environment: "production"
      }
    };

    !function(r){function o(e){if(t[e])return t[e].exports;var n=t[e]={exports:{},id:e,loaded:!1};return r[e].call(n.exports,n,n.exports,o),n.loaded=!0,n.exports}var t={};return o.m=r,o.c=t,o.p="",o(0)}([function(r,o,t){"use strict";var e=t(1).Rollbar,n=t(2);_rollbarConfig.rollbarJsUrl=_rollbarConfig.rollbarJsUrl||"https://d37gvrvc0wt4s1.cloudfront.net/js/v1.8/rollbar.min.js";var a=e.init(window,_rollbarConfig),i=n(a,_rollbarConfig);a.loadFull(window,document,!_rollbarConfig.async,_rollbarConfig,i)},function(r,o){"use strict";function t(r){return function(){try{return r.apply(this,arguments)}catch(o){try{console.error("[Rollbar]: Internal error",o)}catch(t){}}}}function e(r,o,t){window._rollbarWrappedError&&(t[4]||(t[4]=window._rollbarWrappedError),t[5]||(t[5]=window._rollbarWrappedError._rollbarContext),window._rollbarWrappedError=null),r.uncaughtError.apply(r,t),o&&o.apply(window,t)}function n(r){var o=function(){var o=Array.prototype.slice.call(arguments,0);e(r,r._rollbarOldOnError,o)};return o.belongsToShim=!0,o}function a(r){this.shimId=++s,this.notifier=null,this.parentShim=r,this._rollbarOldOnError=null}function i(r){var o=a;return t(function(){if(this.notifier)return this.notifier[r].apply(this.notifier,arguments);var t=this,e="scope"===r;e&&(t=new o(this));var n=Array.prototype.slice.call(arguments,0),a={shim:t,method:r,args:n,ts:new Date};return window._rollbarShimQueue.push(a),e?t:void 0})}function l(r,o){if(o.hasOwnProperty&&o.hasOwnProperty("addEventListener")){var t=o.addEventListener;o.addEventListener=function(o,e,n){t.call(this,o,r.wrap(e),n)};var e=o.removeEventListener;o.removeEventListener=function(r,o,t){e.call(this,r,o&&o._wrapped?o._wrapped:o,t)}}}var s=0;a.init=function(r,o){var e=o.globalAlias||"Rollbar";if("object"==typeof r[e])return r[e];r._rollbarShimQueue=[],r._rollbarWrappedError=null,o=o||{};var i=new a;return t(function(){if(i.configure(o),o.captureUncaught){i._rollbarOldOnError=r.onerror,r.onerror=n(i);var t,a,s="EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(",");for(t=0;t<s.length;++t)a=s[t],r[a]&&r[a].prototype&&l(i,r[a].prototype)}return r[e]=i,i})()},a.prototype.loadFull=function(r,o,e,n,a){var i=function(){var o;if(void 0===r._rollbarPayloadQueue){var t,e,n,i;for(o=new Error("rollbar.js did not load");t=r._rollbarShimQueue.shift();)for(n=t.args,i=0;i<n.length;++i)if(e=n[i],"function"==typeof e){e(o);break}}"function"==typeof a&&a(o)},l=!1,s=o.createElement("script"),u=o.getElementsByTagName("script")[0],p=u.parentNode;s.crossOrigin="",s.src=n.rollbarJsUrl,s.async=!e,s.onload=s.onreadystatechange=t(function(){if(!(l||this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState)){s.onload=s.onreadystatechange=null;try{p.removeChild(s)}catch(r){}l=!0,i()}}),p.insertBefore(s,u)},a.prototype.wrap=function(r,o){try{var t;if(t="function"==typeof o?o:function(){return o||{}},"function"!=typeof r)return r;if(r._isWrap)return r;if(!r._wrapped){r._wrapped=function(){try{return r.apply(this,arguments)}catch(o){throw o._rollbarContext=t()||{},o._rollbarContext._wrappedSource=r.toString(),window._rollbarWrappedError=o,o}},r._wrapped._isWrap=!0;for(var e in r)r.hasOwnProperty(e)&&(r._wrapped[e]=r[e])}return r._wrapped}catch(n){return r}};for(var u="log,debug,info,warn,warning,error,critical,global,configure,scope,uncaughtError".split(","),p=0;p<u.length;++p)a.prototype[u[p]]=i(u[p]);r.exports={Rollbar:a,_rollbarWindowOnError:e}},function(r,o){"use strict";r.exports=function(r,o){return function(t){if(!t&&!window._rollbarInitialized){var e=window.RollbarNotifier,n=o||{},a=n.globalAlias||"Rollbar",i=window.Rollbar.init(n,r);i._processShimQueue(window._rollbarShimQueue||[]),window[a]=i,window._rollbarInitialized=!0,e.processPayloads()}}}}]);

  </script>


<style>
.buttonx {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2x {background-color: #ffb606;} 

</style>

<script type="text/javascript">
			function showMessage(){
				alert("Try log in as a Guest and access the home page");
			}
		</script>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Dashboard</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
					<li class="main_nav_item"><a href="news.php">home</a></li>
						<li class="main_nav_item"><a href="courses.php">Modules</a></li>
						<li class="main_nav_item"><a href="teachers.php">Lecturers</a></li>
						<li class="main_nav_item"><a href="elements.php">Dashboard</a></li>
						<li class="main_nav_item"><a href="shop.php">Ebooks</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<form id="search_form" class="search_form" method="post" action="news.php">
				<span class="label label-danger"><button id="contact_send_btn" name="form_logout" type="submit" class="buttonx button2x" value="Submit">Student Logout</button></span>
			</form>
			<?php
				//unset($_SESSION['PHPSESSID']);
				if ($_SERVER['REQUEST_METHOD'] === 'POST'){
					if(isset($_POST['form_logout'])){
						unset($_COOKIE["_usrLogged"]);
						setcookie("_usrLogged", $_SESSION["user_cookie"], time() - (86400 * 2), "/", "",false,true);
						session_unset();
						session_destroy();
						header('Location: index.php');
						exit();
					}
				}
				
			?>
			
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
				<li class="main_nav_item"><a href="news.php">home</a></li>
						<li class="main_nav_item"><a href="courses.php">Modules</a></li>
						<li class="main_nav_item"><a href="teachers.php">Lecturers</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				
			</div>

		</div>

	</div>
	
	<!-- Home -->

	

	<!-- Elements -->

	
<!-- Buttons -->
<div class="loaders">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title"></div>
					</div>
				</div>

				<div class="row elements_loaders_container">
					
					
					
					
				</div>

			</div>
		</div>
		

		<!-- Progress Bars and Accordions -->

		
		<div class="container cards mandatory">
        <div id="sql_injection"
     class="exercise-link active">

  <div class="exercise-label">
    SQL Injection
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/sql-injection/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/sql-injection/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/sql-injection/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/sql-injection/icon-animated.gif' });
      </script>


  </div>

</div>

        <div id="xss_stored"
     class="exercise-link active">

  <div class="exercise-label">
    Cross-site Scripting
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-stored/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-stored/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-stored/icon-animated.gif"
           data-loop="true"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-stored/icon-animated.gif' });
      </script>


  </div>

</div>
<!--
        <div id="command_execution"
     class="exercise-link active">

  <div class="exercise-label">
    Command Execution
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/command-execution/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/command-execution/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/command-execution/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/command-execution/icon-animated.gif' });
      </script>


  </div>

</div>
-->
<!--
        <div id="click_jacking"
     class="exercise-link active">

  <div class="exercise-label">
    Clickjacking
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/click-jacking/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/click-jacking/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/click-jacking/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/click-jacking/icon-animated.gif' });
      </script>


  </div>

</div>
-->
<!--
        <div id="csrf"
     class="exercise-link active">

  <div class="exercise-label">
    Cross-site Request Forgery
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/csrf/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/csrf/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/csrf/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/csrf/icon-animated.gif' });
      </script>


  </div>

</div>
-->
<!--
        <div id="directory_traversal"
     class="exercise-link active">

  <div class="exercise-label">
    Directory Traversal
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/directory-traversal/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/directory-traversal/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/directory-traversal/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/directory-traversal/icon-animated.gif' });
      </script>


  </div>

</div>
-->

        <div id="xss_reflected"
     class="exercise-link active">

  <div class="exercise-label">
    Reflected XSS
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-reflected/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-reflected/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-reflected/icon-animated.gif"
           data-loop="true"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-reflected/icon-animated.gif' });
      </script>


  </div>

</div>

       <!--
        <div id="xss_dom"
     class="exercise-link active">

  <div class="exercise-label">
    DOM-based XSS
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-dom/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-dom/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-dom/icon-animated.gif"
           data-loop="true"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xss-dom/icon-animated.gif' });
      </script>


  </div>

</div>
-->
<!--
        <div id="file_upload"
     class="exercise-link active">

  <div class="exercise-label">
    File Upload Vulnerabilities
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/file-upload/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/file-upload/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/file-upload/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/file-upload/icon-animated.gif' });
      </script>


  </div>

</div>
-->

        <div id="broken_access_control"
     class="exercise-link active">

  <div class="exercise-label">
    Broken Access Control
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/broken-access-control/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/broken-access-control/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/broken-access-control/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/broken-access-control/icon-animated.gif' });
      </script>


  </div>

</div>

<!--
        <div id="open_redirects"
     class="exercise-link active">

  <div class="exercise-label">
    Open Redirects
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/open-redirects/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/open-redirects/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/open-redirects/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/open-redirects/icon-animated.gif' });
      </script>


  </div>

</div>
-->
<!--
        <div id="unencrypted_communication"
     class="exercise-link active">

  <div class="exercise-label">
    Unencrypted Communication
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/unencrypted-communication/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/unencrypted-communication/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/unencrypted-communication/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/unencrypted-communication/icon-animated.gif' });
      </script>


  </div>

</div>
      -->  
<!--
        <div id="user_enumeration"
     class="exercise-link active">

  <div class="exercise-label">
    User Enumeration
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/user-enumeration/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/user-enumeration/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/user-enumeration/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/user-enumeration/icon-animated.gif' });
      </script>


  </div>

</div>
-->

        <div id="information_leakage"
     class="exercise-link active">

  <div class="exercise-label">
    Security Misconfiguration
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/information-leakage/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/information-leakage/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/information-leakage/icon-animated.gif"
           data-loop="true"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/information-leakage/icon-animated.gif' });
      </script>


  </div>

</div>

<!--
        <div id="password_mismanagement"
     class="exercise-link active">

  <div class="exercise-label">
    Password Mismanagement
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/password-mismanagement/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/password-mismanagement/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/password-mismanagement/icon-animated.gif"
           data-loop="true"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/password-mismanagement/icon-animated.gif' });
      </script>


  </div>

</div>
-->
  
        <div id="privilege_escalation"
     class="exercise-link active">

  <div class="exercise-label">
    Broken Authentication
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/privilege-escalation/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/privilege-escalation/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/privilege-escalation/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/privilege-escalation/icon-animated.gif' });
      </script>


  </div>

</div>

       
        
        <div id="weak_session"
     class="exercise-link active">

  <div class="exercise-label">
    Sensitive Data exposure
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/weak-session/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/weak-session/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/weak-session/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/weak-session/icon-animated.gif' });
      </script>


  </div>

</div>

 
        <div id="xml_bombs"
     class="exercise-link active">

  <div class="exercise-label">
    XML Bombs
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xml-bombs/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xml-bombs/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xml-bombs/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xml-bombs/icon-animated.gif' });
      </script>


  </div>

</div>

<!--
        <div id="session_fixation"
     class="exercise-link active">

  <div class="exercise-label">
    Session Fixation
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/session-fixation/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/session-fixation/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/session-fixation/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/session-fixation/icon-animated.gif' });
      </script>


  </div>

</div>
-->

  <!--
        <div id="xml_external_entities"
     class="exercise-link active">

  <div class="exercise-label">
    XML External Entities
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="black"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xml-external-entities/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xml-external-entities/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xml-external-entities/icon-animated.gif"
           data-loop="true"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/xml-external-entities/icon-animated.gif' });
      </script>


  </div>

</div>
-->
 <!--
        <div id="denial_of_service_attacks"
     class="exercise-link active">

  <div class="exercise-label">
    Denial of Service Attacks
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/denial-of-service-attacks/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/denial-of-service-attacks/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/denial-of-service-attacks/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/denial-of-service-attacks/icon-animated.gif' });
      </script>


  </div>

</div>
--> 
<!--
        <div id="email_spoofing"
     class="exercise-link active">

  <div class="exercise-label">
    Email Spoofing
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/email-spoofing/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/email-spoofing/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/email-spoofing/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/email-spoofing/icon-animated.gif' });
      </script>


  </div>

</div>
--> 
<!--
        <div id="malvertising"
     class="exercise-link active">

  <div class="exercise-label">
    Malvertising
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/malvertising/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/malvertising/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/malvertising/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/malvertising/icon-animated.gif' });
      </script>


  </div>

</div>
-->
 <!--
        <div id="lax_security_settings"
     class="exercise-link active">

  <div class="exercise-label">
    Known Vulnerabilities
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/lax-security-settings/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/lax-security-settings/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/lax-security-settings/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/lax-security-settings/icon-animated.gif' });
      </script>


  </div>

</div>
-->
 <!--
        <div id="toxic_dependencies"
     class="exercise-link active">

  <div class="exercise-label">
    Insufficient Monitoring
  </div>

  <div class="spacer">


      <div class="img animated-icon animation-trigger"
           data-color="white"
           data-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/toxic-dependencies/icon.gif"
           data-animating="false"
           data-animated-icon="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/toxic-dependencies/icon-animated.gif"
           data-animated-icon-next="https://d1o5lmfp4gliop.cloudfront.net/images/exercises/toxic-dependencies/icon-animated.gif"
           data-loop="false"></div>

      <script>
        $('<img />', { src: 'https://d1o5lmfp4gliop.cloudfront.net/images/exercises/toxic-dependencies/icon-animated.gif' });
      </script>


  </div>

</div>
-->
    </div>



</div>


  <div class="modal lesson-progress-modal" id="progress-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title vulnerability-name" id="modal-label">
            Exercise
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div id="vulnerability-description">

          </div>
          <div class="vulnerability-body row">
            <a id="exercise-progress" class="col">
              <div class="section-icon glyphicons glyphicons-blackboard"></div>
              <div class="section-label">Exercise</div>
              <div id="exercise-teaser" class="section-description">

              </div>
            </a>
            <a id="prevention-progress"  class="col">
              <div class="section-icon glyphicons glyphicons-shield"></div>
              <div class="section-label">Prevention</div>
              <div id="prevention-teaser" class="section-description">

              </div>
            </a>
           
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>

    var progress = {
        sql_injection : {"name":"sql_injection","title":"SQL Injection","exercise":{"steps":0,"max":14},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        xss_stored : {"name":"xss_stored","title":"Cross-site Scripting","exercise":{"steps":0,"max":8},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        command_execution : {"name":"command_execution","title":"Command Execution","exercise":{"steps":0,"max":11},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        click_jacking : {"name":"click_jacking","title":"Clickjacking","exercise":{"steps":0,"max":10},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        csrf : {"name":"csrf","title":"Cross-site Request Forgery","exercise":{"steps":0,"max":13},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        directory_traversal : {"name":"directory_traversal","title":"Directory Traversal","exercise":{"steps":0,"max":10},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        xss_reflected : {"name":"xss_reflected","title":"Reflected XSS","exercise":{"steps":0,"max":14},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        xss_dom : {"name":"xss_dom","title":"DOM-based XSS","exercise":{"steps":0,"max":9},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        file_upload : {"name":"file_upload","title":"File Upload Vulnerabilities","exercise":{"steps":0,"max":15},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        broken_access_control : {"name":"broken_access_control","title":"Broken Access Control","exercise":{"steps":0,"max":15},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        open_redirects : {"name":"open_redirects","title":"Open Redirects","exercise":{"steps":0,"max":13},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        unencrypted_communication : {"name":"unencrypted_communication","title":"Unencrypted Communication","exercise":{"steps":0,"max":15},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        user_enumeration : {"name":"user_enumeration","title":"User Enumeration","exercise":{"steps":0,"max":16},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        information_leakage : {"name":"information_leakage","title":"Information Leakage","exercise":{"steps":0,"max":18},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        password_mismanagement : {"name":"password_mismanagement","title":"Password Mismanagement","exercise":{"steps":0,"max":22},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        privilege_escalation : {"name":"privilege_escalation","title":"Privilege Escalation","exercise":{"steps":0,"max":14},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        session_fixation : {"name":"session_fixation","title":"Session Fixation","exercise":{"steps":0,"max":11},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        weak_session : {"name":"weak_session","title":"Weak Session IDs","exercise":{"steps":0,"max":9},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        xml_bombs : {"name":"xml_bombs","title":"XML Bombs","exercise":{"steps":0,"max":14},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        xml_external_entities : {"name":"xml_external_entities","title":"XML External Entities","exercise":{"steps":0,"max":17},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        denial_of_service_attacks : {"name":"denial_of_service_attacks","title":"Denial of Service Attacks","exercise":{"steps":0,"max":12},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        email_spoofing : {"name":"email_spoofing","title":"Email Spoofing","exercise":{"steps":0,"max":11},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        malvertising : {"name":"malvertising","title":"Malvertising","exercise":{"steps":0,"max":10},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":3},"complete":false},
        lax_security_settings : {"name":"lax_security_settings","title":"Lax Security Settings","exercise":{"steps":0,"max":11},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
        toxic_dependencies : {"name":"toxic_dependencies","title":"Toxic Dependencies","exercise":{"steps":0,"max":14},"prevention":{"steps":0,"max":1},"quiz":{"steps":0,"max":2},"complete":false},
    }

    var teasers      = {};
    var prevention   = {};
    var descriptions = {};
    var public       = {};
    var urls         = {};


    teasers["sql_injection"]      = "Hack our website using SQL Injection.";
    prevention["sql_injection"]   = "Learn how to protect against SQL Injection";
    descriptions["sql_injection"] = "If you are vulnerable to SQL Injection, attackers can run arbitrary commands against your database.";
    public["sql_injection"]       = true;
    urls["sql_injection"]         = { "exercise"   : "login.php",
                                    "prevention" : "sql.php",
                                    "quiz"       : "/quiz/sql-injection"}


    teasers["xss_stored"]      = "See how an attacker would make use of XSS."; 
    prevention["xss_stored"]   = "Learn how to protect against XSS";
    descriptions["xss_stored"] = "If your site allows users to add content, you need to be sure that attackers cannot inject malicious JavaScript. One method of doing this is called cross-site scripting (XSS).";
    public["xss_stored"]       = true;
    urls["xss_stored"]         = { "exercise"   : "news_post.php",
                                    "prevention" : "xss.php",
                                    "quiz"       : "/quiz/xss-stored"}


    teasers["command_execution"]      = "See how hackers make use of Command Execution.";
    prevention["command_execution"]   = "Learn how to protect against Command Execution";
    descriptions["command_execution"] = "Many web applications call operating system processes via the command line. If your application calls out to the OS, you need to be sure command strings are securely constructed.";
    public["command_execution"]       = true;
    urls["command_execution"]         = { "exercise"   : "/exercises/command-execution",
                                    "prevention" : "/prevention/command-execution",
                                    "quiz"       : "/quiz/command-execution"}


    teasers["click_jacking"]      = "See a Clickjacking attack in action.";
    prevention["click_jacking"]   = "Learn how to protect against Clickjacking";
    descriptions["click_jacking"] = "As an application author, you need to be sure your users aren&#39;t having their clicks stolen by attackers.";
    public["click_jacking"]       = true;
    urls["click_jacking"]         = { "exercise"   : "/exercises/click-jacking",
                                    "prevention" : "/prevention/click-jacking",
                                    "quiz"       : "/quiz/click-jacking"}


    teasers["csrf"]      = "See an example of a CSRF attack.";
    prevention["csrf"]   = "Learn how to protect against CSRF";
    descriptions["csrf"] = "If an attacker can forge HTTP requests to your site, they may be able to trick your users into triggering unintended actions.";
    public["csrf"]       = true;
    urls["csrf"]         = { "exercise"   : "/exercises/csrf",
                                    "prevention" : "/prevention/csrf",
                                    "quiz"       : "/quiz/csrf"}


    teasers["directory_traversal"]      = "See what can hackers can do with Directory Traversal.";
    prevention["directory_traversal"]   = "Learn how to protect against Directory Traversal";
    descriptions["directory_traversal"] = "You need to be sure URLs describing file paths are safely interpreted, lest a hacker try to get access to sensitive files on your server.";
    public["directory_traversal"]       = false;
    urls["directory_traversal"]         = { "exercise"   : "/exercises/directory-traversal",
                                    "prevention" : "/prevention/directory-traversal",
                                    "quiz"       : "/quiz/directory-traversal"}


    teasers["xss_reflected"]      = "See how an attacker would make use of XSS.";
    prevention["xss_reflected"]   = "Learn how to protect against XSS";
    descriptions["xss_reflected"] = "When building a website, you need to be sure you do not accidentally create a channel that allows malicious JavaScript to be bounced off your server - a &quot;reflected&quot; cross-site scripting attack.";
    public["xss_reflected"]       = false;
    urls["xss_reflected"]         = { "exercise"   : "teachers.php",
                                    "prevention" : "RefXss.php",
                                    "quiz"       : "/quiz/xss-reflected"}


    teasers["xss_dom"]      = "See how an attacker would make use of XSS.";
    prevention["xss_dom"]   = "Learn how to protect against XSS";
    descriptions["xss_dom"] = "Some cross-site scripting attacks don&#39;t require server vulnerabilities. If you make use of URI fragments in your site, you need to ensure they cannot be abused to inject malicious JavaScript.";
    public["xss_dom"]       = false;
    urls["xss_dom"]         = { "exercise"   : "/exercises/xss-dom",
                                    "prevention" : "/prevention/xss-dom",
                                    "quiz"       : "/quiz/xss-dom"}


    teasers["file_upload"]      = "See how hackers exploit File Upload Vulnerabilities.";
    prevention["file_upload"]   = "Learn how to secure your File Uploads";
    descriptions["file_upload"] = "File uploads should be treated with caution - they represent an easy way for an attacker to inject malicious code into your application.";
    public["file_upload"]       = false;
    urls["file_upload"]         = { "exercise"   : "/exercises/file-upload",
                                    "prevention" : "/prevention/file-upload",
                                    "quiz"       : "/quiz/file-upload"}


    teasers["broken_access_control"]      = "Learn how Broken Access Control might be making your site vulnerable.";
    prevention["broken_access_control"]   = "Learn how to correctly Implement Access Control";
    descriptions["broken_access_control"] = "All resources on your site need to have access control implemented, even if they aren&#39;t intended to be discoverable by a user. Relying on security through obscurity will lead to problems.";
    public["broken_access_control"]       = false;
    urls["broken_access_control"]         = { "exercise"   : "courses.php",
                                    "prevention" : "BrokAccess.php",
                                    "quiz"       : "/quiz/broken-access-control"}


    teasers["open_redirects"]      = "See how Open Redirects are used in phishing attacks.";
    prevention["open_redirects"]   = "Learn how to prevent Open Redirects";
    descriptions["open_redirects"] = "Most web-applications make use of redirects. If your site forwards to URLs supplied in a query string, you could be enabling phishing attacks.";
    public["open_redirects"]       = false;
    urls["open_redirects"]         = { "exercise"   : "/exercises/open-redirects",
                                    "prevention" : "/prevention/open-redirects",
                                    "quiz"       : "/quiz/open-redirects"}


    teasers["unencrypted_communication"]      = "See how a man-in-the-middle attacks works.";
    prevention["unencrypted_communication"]   = "Learn how to correctly implement Encrypted Communication";
    descriptions["unencrypted_communication"] = "Insufficient encryption can make you vulnerable to man-in-the-middle attacks. Be sure to use HTTPS whenever transmitting any type of sensitive information.";
    public["unencrypted_communication"]       = false;
    urls["unencrypted_communication"]         = { "exercise"   : "/exercises/unencrypted-communication",
                                    "prevention" : "/prevention/unencrypted-communication",
                                    "quiz"       : "/quiz/unencrypted-communication"}


    teasers["user_enumeration"]      = "See some common ways users are enumerated.";
    prevention["user_enumeration"]   = "Learn how to protect against User Enumeration";
    descriptions["user_enumeration"] = "If an attacker can abuse your authentication function to test whether a username exists on your site, it makes exploiting other vulnerabilities much easier.";
    public["user_enumeration"]       = false;
    urls["user_enumeration"]         = { "exercise"   : "/exercises/user-enumeration",
                                    "prevention" : "/prevention/user-enumeration",
                                    "quiz"       : "/quiz/user-enumeration"}


    teasers["information_leakage"]      = "See some ways you might be leaking information.";
    prevention["information_leakage"]   = "Learn how to stop leaking information";
    descriptions["information_leakage"] = "Revealing system information helps an attacker learn about your site, and gives them an idea how it might be attacked.";
    public["information_leakage"]       = false;
    urls["information_leakage"]         = { "exercise"   : "news.php",
                                    "prevention" : "infoLeakage.php",
                                    "quiz"       : "/quiz/information-leakage"}


    teasers["password_mismanagement"]      = "Learn the correct way to treat passwords.";
    prevention["password_mismanagement"]   = "Learn the Correct Way to Treat Passwords";
    descriptions["password_mismanagement"] = "Safe treatment of passwords is essential to a secure authentication system - yet many websites still get this wrong.";
    public["password_mismanagement"]       = false;
    urls["password_mismanagement"]         = { "exercise"   : "/exercises/password-mismanagement",
                                    "prevention" : "/prevention/password-mismanagement",
                                    "quiz"       : "/quiz/password-mismanagement"}


    teasers["privilege_escalation"]      = "Review the most common ways privilege escalation occurs.";
    prevention["privilege_escalation"]   = "Learn how to protect against Privilege Escalation";
    descriptions["privilege_escalation"] = "Privilege escalation occurs when an attacker exploits a vulnerability to impersonate another user or gain extra permissions.";
    public["privilege_escalation"]       = false;
    urls["privilege_escalation"]         = { "exercise"   : "profile.php?<?php echo htmlentities(session_name().'='.session_id()); ?>",
                                    "prevention" : "BrokenAuth.php",
                                    "quiz"       : "/quiz/privilege-escalation"}


    teasers["session_fixation"]      = "See a Session Fixation attack in action.";
    prevention["session_fixation"]   = "Learn how to protect against Session Fixation";
    descriptions["session_fixation"] = "Insecure treatment of session IDs can leave your users vulnerable to having their session hijacked.";
    public["session_fixation"]       = false;
    urls["session_fixation"]         = { "exercise"   : "/exercises/session-fixation",
                                    "prevention" : "/prevention/session-fixation",
                                    "quiz"       : "/quiz/session-fixation"}


    teasers["weak_session"]      = "See how Weak Session IDs can make you vulnerable.";
    prevention["weak_session"]   = "Learn how to secure your session IDs";
    descriptions["weak_session"] = "Guessable session IDs make your website vulnerable to session hijacking.";
    public["weak_session"]       = false;
    urls["weak_session"]         = { "exercise"   : "shop.php",
                                    "prevention" : "sensData.php",
                                    "quiz"       : "/quiz/weak-session"}


    teasers["xml_bombs"]      = "See a real-world example of an XML Bomb.";
    prevention["xml_bombs"]   = "Learn how to protect against XML Bombs";
    descriptions["xml_bombs"] = "XML documents can incorporate inline macros which are expanded at parse-time. Unsafe treatment of these macros can make your server vulnerable to attack from specially crafted XML files.";
    public["xml_bombs"]       = false;
    urls["xml_bombs"]         = { "exercise"   : "xxeattk.php",
                                    "prevention" : "xxe.php",
                                    "quiz"       : "/quiz/xml-bombs"}


    teasers["xml_external_entities"]      = "See how a hacker would make an XML External Entity attack.";
    prevention["xml_external_entities"]   = "Learn how to protect against XML External Entity attacks";
    descriptions["xml_external_entities"] = "XML files can incorporate inline references to other documents. Unsafe treatment of external references allows an attacker to probe your file system for sensitive information.";
    public["xml_external_entities"]       = false;
    urls["xml_external_entities"]         = { "exercise"   : "/exercises/xml-external-entities",
                                    "prevention" : "/prevention/xml-external-entities",
                                    "quiz"       : "/quiz/xml-external-entities"}


    teasers["denial_of_service_attacks"]      = "Are you vulnerable to Denial of Service Attacks?";
    prevention["denial_of_service_attacks"]   = "Learn how to mitigate Denial of Service Attacks";
    descriptions["denial_of_service_attacks"] = "Sometimes attackers don&#39;t need to hack your website, they just want to make it unavailable to others.";
    public["denial_of_service_attacks"]       = false;
    urls["denial_of_service_attacks"]         = { "exercise"   : "/exercises/denial-of-service-attacks",
                                    "prevention" : "/prevention/denial-of-service-attacks",
                                    "quiz"       : "/quiz/denial-of-service-attacks"}


    teasers["email_spoofing"]      = "Are you doing everything you can to protect your users against spoofed emails?";
    prevention["email_spoofing"]   = "Learn how to protect against Email Spoofing";
    descriptions["email_spoofing"] = "Email spoofing is the sending of email messages with a forged &#39;from&#39; address.";
    public["email_spoofing"]       = false;
    urls["email_spoofing"]         = { "exercise"   : "/exercises/email-spoofing",
                                    "prevention" : "/prevention/email-spoofing",
                                    "quiz"       : "/quiz/email-spoofing"}


    teasers["malvertising"]      = "Learn howMalvertising works.";
    prevention["malvertising"]   = "Learn how to protect against Malvertising";
    descriptions["malvertising"] = "Embedded adverts are the latest target for hackers.";
    public["malvertising"]       = false;
    urls["malvertising"]         = { "exercise"   : "/exercises/malvertising",
                                    "prevention" : "/prevention/malvertising",
                                    "quiz"       : "/quiz/malvertising"}


    teasers["lax_security_settings"]      = "Learn how systems are typically left unsecured.";
    prevention["lax_security_settings"]   = "Learn how to secure your configuration";
    descriptions["lax_security_settings"] = "Improper security settings are a common cause of vulnerabilities.";
    public["lax_security_settings"]       = false;
    urls["lax_security_settings"]         = { "exercise"   : "/exercises/lax-security-settings",
                                    "prevention" : "knownVul.php",
                                    "quiz"       : "/quiz/lax-security-settings"}


    teasers["toxic_dependencies"]      = "Are your Dependencies a security risk?";
    prevention["toxic_dependencies"]   = "Learn how manage your Dependencies securely";
    descriptions["toxic_dependencies"] = "Third-party libraries could be introducing vulnerabilities or malicious code into you system.";
    public["toxic_dependencies"]       = false;
    urls["toxic_dependencies"]         = { "exercise"   : "/exercises/toxic-dependencies",
                                    "prevention" : "/prevention/toxic-dependencies",
                                    "quiz"       : "/quiz/toxic-dependencies"}


    $(document).on('click', '.exercise-link', function() {
      var id            = $(this).attr('id')
      var vulnerability = progress[id];


      $(".vulnerability-name").text(vulnerability.title);

      $("#exercise-teaser").text(teasers[id]);
      $("#prevention-teaser").text(prevention[id]);
      $("#vulnerability-description").html(descriptions[id]);

      $("#exercise-progress").attr('href',   urls[id]['exercise']).attr('target','_self');
      $("#prevention-progress").attr('href', urls[id]['prevention']).attr('target','_self');
      $("#quiz-progress").attr('href',       urls[id]['quiz']).attr('target','_self');

      $("#exercise-progress").removeClass('complete incomplete').addClass(vulnerability['exercise']['steps'] == vulnerability['exercise']['max'] ? 'complete' : 'incomplete');
      $("#prevention-progress").addClass(vulnerability['prevention']['steps'] == vulnerability['prevention']['max'] ? 'complete' : 'incomplete');
      $("#quiz-progress").addClass(vulnerability['quiz']['steps'] == vulnerability['quiz']['max'] ? 'complete' : 'incomplete');

      $("#progress-modal").modal('show');
    });

  </script>




		
	
	</div>

	<!-- Footer -->
<?php 

  session_start();
  if((isset($_SESSION["user_cookie"]))&&(strtolower(trim($_COOKIE['_usrLogged'])) == trim($_SESSION["user_cookie"]))){
    //echo $_SESSION["user_name"];
  }else{
    $_SESSION["user_name"] = "GUEST";
  }

?>
<div class="card" style="width: 60rem;">
  <div class="card-body">
    <h5 class="card-title" style="font-size:2.25rem;">User: <?php echo $_SESSION["user_name"];?></h5>
    <h6 class="card-subtitle" style="color:#C88E00;background:#FFD266">Welcome User..</h6>
    <p class="card-text" style="color:#ffffff">Here lies all your Challenges and once you finish all the challenges or, if you feel to finish the Challenges to obtain the SCORE. Please click the Finish Button.</p>
      <button name="EndGame" id="EndGame" type="submit"  value="Submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Finish</button>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
    <div class="modal-content">
        <div class="modal-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606">
          <h5 class="modal-title" id="exampleModalLabel">Are You Sure - Leave and Obtain Score</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:#1a1a1a;color:white;">
          Do you really want to Finish The Game. If you click Finish. All your unsaved work will discard and you will obtain a score for the challenges you have solved.
        </div>
        <div id="CloseChanges" class="modal-footer">
           <form method="post" action="elements.php">
            <button id="RemoveItems" name="FinishMate" type="submit" value="Submit" class="btn btn-primary" style="background:#DC143C;border-color:#DC143C;margin-bottom:0px;">Yes, Please </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, I Don't</button>
          </form>
        </div>
    </div>
  </div>
</div>

<?php
    if(isset($_POST["FinishMate"])){
        function getCookie($valueIn){
          foreach($_COOKIE as  $key => $val)
            {
              if($key == $valueIn){
                return $val;
              }
            }
        } 
        //UpdateDB
        $userCookie = base64_decode($_COOKIE['_usrPlayName']);
        $userCookie = explode("-",$userCookie);
        $user = $userCookie[0];
        $regDate = (String)date("Y-m-d h:i:sa");
        $sqlUpdate = "UPDATE `challengerDetails` SET timeLeave= "."'$regDate'"." WHERE userName="."'$user'";
        //echo $sqlUpdate."";
        require("connect.php");
        if (mysqli_query($conn, $sqlUpdate)) {
          $conn->close();
        }

      unset($_COOKIE["_usrLogged"]);
      setcookie("_usrLogged", $_SESSION["user_cookie"], time() - (86400 * 2), "/", "",false,true);
      setcookie("_usrAgr", getCookie('_usrAgr'), time() - (86400 * 2), "/", "",false,true);
      //setcookie("_usrPlayName",getCookie('_usrPlayName'), time() - (86400 * 2), "/", "",false,true);
      setcookie("_reflexVUser", getCookie('_reflexVUser'), time() - (86400 * 2), "/", "",false,true);
      setcookie("_brokenAccessDC", getCookie('_brokenAccessDC'), time() - (86400 * 2), "/", "",false,true);
      setcookie("_gat", getCookie('_gat'), time() - (86400 * 2), "/", "",false,true);
      setcookie("_ga", getCookie('_ga'), time() - (86400 * 2), "/", "",false,true);
      setcookie("_gid", getCookie('_gid'), time() - (86400 * 2), "/", "",false,true);
      
      header('Location: DisplayScore.php');
      exit();   

    }
  

?>
<script type="text/javascript">
  $('#CloseChanges').on('click','#RemoveItems',function(e){
    localStorage.clear();
  });
</script>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/elements_custom.js"></script>

</body>
</html>