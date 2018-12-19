<?php
require_once( "common/config.php" );
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Chat Dashboard</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="a34/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="a34/images/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!--[if !IE]> -->
    <link rel="stylesheet" href="554/css/style.combined.css">
    <!-- <![endif]-->

    <!--[if IE]>
    <link rel="stylesheet" href="554/css/bootstrap.style.css">
    <link rel="stylesheet" href="554/css/theme.style.css">
    <link rel="stylesheet" href="554/css/style.css">
    <![endif]-->
    <script src="a34/js/swfobject.js" crossorigin="anonymous"></script>
    <script src="a34/js/tracekit.js" crossorigin="anonymous"></script>

    <script src="554/js/base.js" crossorigin="anonymous"></script>
    <script src="554/js/framework.js" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2jF_QtI3z-3Lq61DFiIjIHK5PpfcC4Bg"
            type="text/javascript"></script>

    <script type="text/javascript">
		var SHOW_WIZARD;
		var ORIGIN = window.location.protocol + '//' + window.location.host;
		var PATH = window.location.pathname;
		var BASEPATH = ORIGIN + (PATH.substr(-1) === '/' ? PATH.substr(0, PATH.length - 1) : PATH);
		var GLOBAL_STATIC_URL = "https://static-a.tawk.to/v2/a34";
		var GLOBAL_TAWK_URL = "https://tawk.to";
		var GLOBAL_EMBED_SERVER_URL = "https://embed.tawk.to";
		var GLOBAL_SOCKET_SERVER = "localhost:7000/";
		var GLOBAL_SOCKET_SERVER_URL = "/tawt/api";
		var GLOBAL_AWS_LG_URL = "https://s3.amazonaws.com/tawk-to-logos";
		var GLOBAL_AWS_BN_URL = "https://s3.amazonaws.com/tawk-to-banners";
		var GLOBAL_AWS_PI_URL = "https://s3.amazonaws.com/tawk-to-pi";
		var LOCALE = "en";
		var LOGERROR = "yes";
		var UI_VERSION = "554";
		var SESSION_KEY = "5ab5b608af31bc0e82f0fc69";
		var SOCKET_PROTOCOL = "ws";
		var TAWK_ID = "c1420a17b549584c5ffea04ac924555cc70085cc";
		var GLOBAL_MAPS_API_KEY = "AIzaSyBF9Wy4ggFhEBlSDuM3RpnAdZr1RtPivwU";
		var GLOBAL_UPLOAD_URL = "https://upload.tawk.to";
		var GLOBAL_FILE_STORAGE_URL = "https://tawk.link";
		var GLOBAL_TICKETS_DOMAIN = "@tickets.tawk.to";
		var STRIPE_KEY = "pk_live_bjaLjJ7U3qufQCMiEZuRtbHu";
		var ACC_CREATED_ON = "Thu Jan 18 2018 03:19:26 GMT+0000 (UTC)";
		var WEBRTC_LINK = 'https://video.tawk.to';


		showdown.extension('targetBlank', function () {
			return [{
				type: 'output',
				regex: '<a(.*?)>',
				replace: function (match, content) {
					return content.indexOf('mailto:') !== -1 ? '<a' + content + '>' : '<a target="_blank"' + content + '>';
				}
			}];
		});

		var markdownConverter = new showdown.Converter({
			tables: true,
			simplifiedAutoLink: true,
			simpleLineBreaks: true,
			extensions: ['targetBlank']
		});

		(function ($) {
			var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

			$.fn.attrchange = function (callback) {
				if (MutationObserver) {
					var options = {
						subtree: false,
						attributes: true
					};

					var observer = new MutationObserver(function (mutations) {
						mutations.forEach(function (e) {
							callback.call(e.target, e.attributeName);
						});
					});

					return this.each(function () {
						observer.observe(this, options);
					});

				}
			}
		})(jQuery);
    </script>

    <!--[if lte IE 8]>
    <script type="text/javascript">
        window.location.href = "/unsupported";
    </script>
    <![endif]-->

    <script type="text/javascript">
		if (!Modernizr.cookies
		) {
			window.location.href = "/unsupported";
		}

		window.FlashCanvasOptions = {
			swfPath: "a34/js/"
		};

		Modernizr.load([
			{
				test: Modernizr.canvas,
				nope: [
					'a34/js/flashcanvas.js'
				]
			},
			{
				test: Modernizr.filereader,
				nope: 'a34/js/jquery.FileReader.js'
			},
			{
				test: Modernizr.usermedia,
				nope: 'a34/js/jquery.webcam.as3.js'
			}
		]);
    </script>

    <script src="554/locale/en.js" crossorigin="anonymous"></script>
    <script src="554/js/plugin.js"></script>
    <!--    <script src="554/js/app.min.js" crossorigin="anonymous"></script>-->
    <script src="554/js/module.js" crossorigin="anonymous"></script>
    <script src="554/js/Ember.js" crossorigin="anonymous"></script>
    <script src="554/js/HandlebarsTemplates.js" crossorigin="anonymous"></script>
    <script src="554/js/TawkEngine.js" crossorigin="anonymous"></script>
    <script src="554/js/TawkSocket.js" crossorigin="anonymous"></script>
    <script src="554/js/utils.js" crossorigin="anonymous"></script>
    <script src="554/js/Handlebars.js" crossorigin="anonymous"></script>
    <script src="554/js/DesktopConnector.js" crossorigin="anonymous"></script>
    <script src="554/js/Main.js" crossorigin="anonymous"></script>
    <script src="554/js/SocketConnector.js" crossorigin="anonymous"></script>
    <script src="554/js/AudioPlayer.js" crossorigin="anonymous"></script>
    <script src="554/js/FileUploadHandler.js" crossorigin="anonymous"></script>
    <script src="554/js/TagAgent.js" crossorigin="anonymous"></script>
    <script src="554/js/Tawk.js" crossorigin="anonymous"></script>
    <script src="554/js/NotificationController.js" crossorigin="anonymous"></script>
    <script src="554/js/Tawk1.js" crossorigin="anonymous"></script>
    <script src="554/js/ConversationProcess.js" crossorigin="anonymous"></script>
    <script src="554/js/Tawk2.js" crossorigin="anonymous"></script>
</head>
<body class="fixed-header fixed-ribbon smart-style-4 en">
<div id="back-top" class="hidden">
    <button type="button" class="btn btn-circle bg-color-blueDark txt-color-white" title="Back to top">
        <i class="fa fa-gear fa-arrow-up"></i>
    </button>
</div>
<div id="fixed-notification-container">
</div>
</body>
</html>
