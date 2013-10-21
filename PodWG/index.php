<?php
require_once('libs/functions.php');

$options = get_options();
$tree = get_tree("data", $base_url);
$homepage_url = homepage_url($tree);
$docs_url = docs_url($tree);

// Redirect to docs, if there is no homepage
if ($homepage && $homepage_url !== '/') {
	header('Location: '.$homepage_url);
}

?>
<?php if ($homepage) { ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title><?php echo $options['title']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $options['tagline'];?>" />
	<meta name="author" content="<?php echo $options['title']; ?>">
	

	<?php if ($options['colors']) { ?>
	<link rel="icon" href="<?php echo $base_url ?>/img/favicon.png" type="image/x-icon">
	<?php } else { ?>
	<link rel="icon" href="<?php echo $base_url ?>/img/favicon-<?php echo $options['theme'];?>.png" type="image/x-icon">
	<?php } ?>
	<!-- Mobile -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<? //PodWG Styles ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_url ?>/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_url ?>/css/foundation.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_url ?>/css/fish.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_url ?>/css/flex.css" />
 <style>
	.site-title a,
	.site-description {
			color: #1e73be;
	}
	body.custom-background { background-color: #ffffff; }
	div.box-content { width: 100%; }
	div.box-content ul li { 
		list-style:square;
		margin-left: 17px;
	}
	div#topcontrol,
	a.flex-prev,
	a.flex-next { display:none!important;}
 </style>

	<!-- hightlight.js -->
	<script src="<?php echo $base_url ?>/js/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

	<!-- Navigation -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script src="<?php echo $base_url ?>/js/custom.js"></script>
	
	<!--Scroll to Top-->
	<script type="text/javascript" src="<?php echo $base_url ?>/js/control.js"></script>
	
	<!--Slider-->
	<script type="text/javascript" src="<?php echo $base_url ?>/js/nizr.js"></script>
	<script type="text/javascript" src="<?php echo $base_url ?>/js/jquery.flex.js"></script>
 	<script type="text/javascript" src="<?php echo $base_url ?>/js/jquery.custom.js"></script>
 	 	<script type="text/javascript" src="<?php echo $base_url ?>/js/selectnav.js"></script>
 	 	<script type="text/javascript" src="<?php echo $base_url ?>/js/fish.js"></script>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="home blog logged-in admin-bar custom-background customize-support">


<div id="header_container">
	<div class="row">	
		<div class="three columns">
			<div id="logo2"><a href="<?php echo $base_url ?>" title="PodWG">PodWG</a></div>
		</div>
		<div class="nine columns" id="menu_container">
 			<div class="menu-header2">
 				<ul id="nav" class="menu sf-js-enabled sf-shadow">
 					<li id="menu-item-625" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-625"><a href="<?php echo $base_url ?>">Home</a></li>
					<?php if ($options['button_1_link']) { ?>
					<li id="menu-item-1" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-624"><a href="<?php echo $options['button_1_link']; ?>"><?php echo $options['button_1_name']; ?></a></li>
					<?php } ?>
					<?php if ($options['button_2_link']) { ?>
					<li id="menu-item-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-624"><a href="<?php echo $options['button_2_link']; ?>"><?php echo $options['button_2_name']; ?></a></li>
					<?php } ?>
					<?php if ($options['button_3_link']) { ?>
					<li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-624"><a href="<?php echo $options['button_3_link']; ?>"><?php echo $options['button_3_name']; ?></a></li>
					<?php } ?>
					<?php if ($options['button_4_link']) { ?>
					<li id="menu-item-4" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-624"><a href="<?php echo $options['button_4_link']; ?>"><?php echo $options['button_4_name']; ?></a></li>
					<?php } ?>
					<?php if ($options['button_5_link']) { ?>
					<li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-624"><a href="<?php echo $options['button_5_link']; ?>"><?php echo $options['button_5_name']; ?></a></li>
					<?php } ?>
				</ul>
				<select class="selectnav" id="selectnav1">
					<option value="">- Navigation -</option>
					<option value="<?php echo $base_url ?>" selected="">Home</option>
					
					<?php if ($options['button_1_link']) { ?>
					<option value="<?php echo $options['button_1_link']; ?>"><?php echo $options['button_1_name']; ?></option>
					<?php } ?>
		    		<?php if ($options['button_2_link']) { ?>
					<option value="<?php echo $options['button_2_link']; ?>"><?php echo $options['button_2_name']; ?></option>
					<?php } ?>
		   			<?php if ($options['button_3_link']) { ?>
					<option value="<?php echo $options['button_3_link']; ?>"><?php echo $options['button_3_name']; ?></option>
					<?php } ?>
					<?php if ($options['button_4_link']) { ?>
					<option value="<?php echo $options['button_4_link']; ?>"><?php echo $options['button_4_name']; ?></option>
					<?php } ?>
					<?php if ($options['button_5_link']) { ?>
					<option value="<?php echo $options['button_5_link']; ?>"><?php echo $options['button_5_name']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>	
</div>

<div id="slider_container">
	<div class="row">
		<div class="four columns">
			<br><br>
			<h1>Willkommen</h1>
			<p><b>Für Podcasthörer und Podcaster</b><br><br>Die PodWG bietet allen Podcastern ein Zimmer um ihren Podcast ohne viel Aufwand über ein TeamSpeak3 oder im WG-Keller über ein Mumble zu produzieren.
			<br><br>Auch die Podcasthörer sind gerne in unserer großen Wohnküche und im gemütlichen Wohnzimmer willkommen.<br><br></p>
			<?php if ($options['email']) { echo '<a class="button large" href="mailto://' .$options['email']. '">Caster-Zimmer beziehen</a>'; } ?>
		</div>	
		<div class="eight columns">
			<div class="flex-container">
				<!--slideshow-->
				<div class="flexslider">
	 				<ul class="slides">
						<li><a href="<?php echo $base_url . '/'. $options['button_1_link']; ?>"><img src="<?php echo $base_url ?>/img/slide1.png" /></a>
						 <p class="flex-caption">PodWG: Deine TeamSpeak und Mumble Community für dein Podcast<p>
			 			</li>
						<li><a href="<?php echo $base_url . '/'. $options['button_2_link']; ?>"><img src="<?php echo $base_url ?>/img/slide2.png" /></a>
						<p class="flex-caption">Hole dir jetzt dein eigenes Zimmer, nur hier in der PodWG</p>
						</li>
					</ul>
				</div>
				<!--slideshow end-->
			</div>
			<!--flex container end-->
			<div class="clear"></div>	
		</div>
	</div>
</div>

<div class="row" id="box_container">
	<!--podwg1-->	
	<div class="three columns">
		<div class="title-box">								
			<div class="title-head">	
				<h1><img style="width: 35px !important; margin-bottom: -8px;" src="<?php echo $base_url ?>/img/box1.png"> CLIENTS</h1>
			</div>
		</div>		
		<div class="box-content">
			<hr>
Lade dir hier einen Client herunter und probier es einfach aus:
<br>
<br>
<b>TeamSpeak3 Client</b>: <br>
<ul>
<li><a href="http://teamspeak.com/?page=downloads" target="_blank">Hier Download</a></li>
</ul>

<b>Mumble Client</b>: <br> 
<ul>
<li>
<a href="http://mumble.sourceforge.net/" target="_blank">Hier Download</a>
</li>
</ul>		</div>
	</div>
	
	
<!--podwg2-->	
<div class="three columns">
		<div class="title-box">								
			<div class="title-head">	
				<h1><img style="width: 35px !important; margin-bottom: -8px;" src="<?php echo $base_url ?>/img/box2.png"> Tutorial</h1>
			</div>
		</div>		
		<div class="box-content">
			<hr>
Wie du am einfachsten mit der Audiosoftware zurecht kommst, findest du in kleinen Tutorials die auch uns geholfen haben: <br>
<br>
<ul>
<li>
<a href="https://www.youtube.com/watch?v=32aWjeyR4ag" target="_blank"><b>TeamSpeak 3</b> - Tutorial</a>
</li>
</ul>

<ul>
<li>
<a href="https://www.youtube.com/watch?v=KhX4UAPlv6w" target="_blank"><b>Mumble</b> - Tutorial</a>
</li>
</ul>
</div>
</div>			
	
	
<!--podwg3-->	
<div class="three columns">
	<div class="title-box">								
		<div class="title-head">	
			<h1><img style="width: 35px !important; margin-bottom: -8px;" src="<?php echo $base_url ?>/img/box3.png"> SERVER</h1>
		</div>
	</div>		
	<div class="box-content">
<hr>
Du findest den Weg zu uns über folgende Adressen: 
<br>
<br>
<?php if ($options['teamspeakip']) { ?><p><b>TeamSpeak: </b> <br>  <?php echo $options['teamspeakip']. ' </p>'; } ?>
<?php if ($options['mumbleip']) { ?><p> <b>Mumble: </b> <br>  <?php echo $options['mumbleip']. ' </p>'; } ?>
	</div>
</div>
	
	
<!--podwg4-->	
<div class="three columns">
	<div class="title-box">	
	<?php if ($options['flattr']) { ?>						
		<div class="title-head">	
			<h1><img style="width: 35px !important; margin-bottom: -8px;" src="<?php echo $base_url ?>/img/box4.png"> FLATTR</h1>
		</div>
	</div>		
	
	<div class="box-content">
		<hr>Du kannst uns unterstützen mit einer kleinen <a target="_blank" href="http://flattr.com">Flatter</a> Spende. Damit kann die PodWG ihre Server auch weiterhin am Leben erhalten.
		<br>
		<center>
			<div class="read-more" id="read-more">
				<a id="read-more" href="<?php echo $options['flattr']; ?>" target="_blank"><img id="read-more" src="<?php echo $base_url ?>/img/flattrbotton.png" alt="Flattr - PodWG"></a>
			</div>
		</center>
	<?php } ?>
	</div>
</div>
			
	<div class="clear"></div>
	<br><br>
	</div>
</div>
<!--end//------------------>
</div>
<!--footer-->
<div id="footer-info">
	<div class="row">		
		<div class="twelve columns">					
			<div id="copyright">Copyright <?php echo '&copy; '.date('Y'); ?> <a href="http://podwg.de">PodWG.de by </a><a href="http://podunion.com/podcaster/raiden/2925/sven-hock-raiden">Raiden</a><br>
			<small style="font-size:10px;">Design &amp; Developed for PodWG by <a href="http://podunion.com/podcaster/michaelmccouman/6214/michael-mccouman-jr">Michael McCouman jr.</a></small>
			</div>
			
			<div class="scroll-top" id="top"><a href="#top" title="scroll to top">↑</a></div>
					
		</div>	
	</div>		
</div>
<?php } else { 
######################################################################################################
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title><?php echo $options['title']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $options['tagline'];?>" />
	<meta name="author" content="<?php echo $options['title']; ?>">
	<?php if ($options['colors']) { ?>
	<link rel="icon" href="<?php echo $base_url ?>/img/favicon.png" type="image/x-icon">
	<?php } else { ?>
	<link rel="icon" href="<?php echo $base_url ?>/img/favicon-<?php echo $options['theme'];?>.png" type="image/x-icon">
	<?php } ?>
	<!-- Mobile -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>

	<!-- LESS -->
	<?php if ($options['colors']) { ?>
		<style type="text/less">
			<?php foreach($options['colors'] as $k => $v) { ?>
		    @<?php echo $k;?>: <?php echo $v;?>;
		    <?php } ?>
		    @import "<?php echo $base_url ?>/less/import/daux-base.less";
		</style>
		<script src="<?php echo $base_url ?>/js/less.min.js"></script>
	<?php } else { ?>
		<link rel="stylesheet" href="<?php echo $base_url ?>/css/daux-<?php echo $options['theme'];?>.css">
	<?php } ?>

	<!-- hightlight.js -->
	<script src="<?php echo $base_url ?>/js/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

	<!-- Navigation -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script src="<?php echo $base_url ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo $base_url ?>/js/custom.js"></script>
	
	<!--Video-->
	<script type="text/javascript" src="<?php echo $base_url ?>/js/jquery.jplayer.min.js"></script>
	<link href="skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				m4v: "<?php echo $base_url ?>/img/TS3-Video.mp4",
				poster: "<?php echo $base_url ?>/img/slide2.png"
			});
		},

		swfPath: "js",
		supplied: "m4v",
		size: {
			width: "640px",
			height: "360px",
			cssClass: "jp-video-360p"
		},
		smoothPlayBar: true,
		keyEnabled: true
	});
});
//]]>
</script>
	
	
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
		
		<div class="container-fluid fluid-height wrapper">
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<a style="color:#fff;" class="brand pull-left" href="<?php echo $base_url ?>/"><?php echo $options['title']; ?></a>
				</div>
			</div>

			<div class="row-fluid columns content">
				<div class="left-column article-tree span3">
					<!-- For Mobile -->
					<div class="responsive-collapse">
						<button type="button" class="btn btn-sidebar" data-toggle="collapse" data-target="#sub-nav-collapse">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>
					</div>
					<div id="sub-nav-collapse" class="collapse in">
						<!-- Navigation -->
						<?php echo build_nav($tree); ?>

						<?php if ($options['links']) { ?>
							<div class="well well-sidebar">
								<!-- Links -->
								<?php foreach($options['links'] as $name => $url) { ?>
									<a href="<?php echo $url;?>" target="_blank"><?php echo $name;?></a><br>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="right-column content-area span9">
					<div class="content-page">
						<article>
							<?php echo load_page($tree); ?>
						</article>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

<?php if ($options['google_analytics']) { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $options['google_analytics'];?>', '<?php echo $_SERVER['HTTP_HOST'];?>');
  ga('send', 'pageview');

</script>
<?php } ?>
<?php if ($options['piwik_analytics']) { ?>
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://<?php echo $options['piwik_analytics'];?>/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "1"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<?php } ?>
</body>
</html>
