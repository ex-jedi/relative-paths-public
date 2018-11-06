<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:800|Quicksand:400" rel="stylesheet">
	<link rel="stylesheet" href="/css/universal.css">
	<link rel="stylesheet" href="<?php perch_page_attribute('css', array('template' => 'bits.html')) ;?>">

	<!-- Perch Meta -->
	<?php
	$domain        = 'https://'.$_SERVER["HTTP_HOST"];
	$mainurl           = perch_page_url(array(
										    'hide-extensions'    => true,
										    'hide-default-doc'   => true,
										    'add-trailing-slash' => false,
										    'include-domain'     => true,
										), true);
	$mainsitename      = "Relative Paths Podcast";
	$pagetitlename = " - Relative Paths Podcast";
	$sharing_image = '/images/default_fb_image.jpg';

	PerchSystem::set_var('domain',$domain);
	PerchSystem::set_var('mainurl',$mainurl);
	PerchSystem::set_var('mainsitename',$mainsitename);
	PerchSystem::set_var('pagetitlename',$pagetitlename);
	PerchSystem::set_var('sharing_image',$sharing_image);

	perch_page_attributes(array(
		'template' => 'default.html'
	));
	?>
<!-- Google Analytics -->
<?php perch_content('Analytics'); ?>

<!-- cookie consent -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#edeff5",
      "text": "#838391"
    },
    "button": {
      "background": "#4b81e8"
    }
  },
  "content": {
    "link": "Privacy &amp; cookie policy",
    "href": "https://relativepaths.uk/privacy-policy"
  }
})});
</script>

</head>
	<body class="<?php perch_page_attribute('bodyClass', array('template' => 'bits.html' )); ?>">
		<div class="wrapper <?php perch_page_attribute('wrapperClass', array('template' => 'bits.html'));?>">
			<header class="main-header off-home-header">
			<a class="show-on-focus"  href="#main-content">Skip to main content</a>
				<div class="header-background-image-div">
					<?php perch_content('Header Background Image'); ?>
				</div>
				<nav class="main-nav rellax" data-rellax-speed="-5" id="vue-wrapper">
					<a href="/" class="nav-logo-link">
						<?php perch_content('Navigation Logo Image'); ?>
					</a>
					<?php perch_pages_navigation(array(
							'hide-extensions' => true,
					)); ?>
				</nav>
				<div class="header-inner rellax off-home-header-inner" data-rellax-speed="-5">
					<?php perch_content('Header Title'); ?>
					<div class="subscribe-bar">
						<div id="subscribe-bar-itunes" class="subscribe-div">
							<a id="ituneslink" href="https://itunes.apple.com/gb/podcast/relative-paths-web-development/id914858338?mt=2&amp;uo=4">
								<img class="subscribe-bar-image" src="/images/itunes-icon.svg" alt="Subscribe to the Relative Paths podcast on iTunes" />
						</a>
						</div>
						<div id="subscribe-bar-soundcloud" class="subscribe-div">
							<a id="soundcloud-link"  href="https://soundcloud.com/relativepaths">
								<img class="subscribe-bar-image" src="/images/soundcloud-icon.png" alt="Subscribe to the Relative Paths podcast on Soundcloud">
							</a>
						</div>
						<div id="subscribe-bar-stitcher" class="subscribe-div">
							<a href="https://www.stitcher.com/podcast/relative-paths" >
								<img class="subscribe-bar-image" src="/images/stitcher-icon.png" alt="Subscribe to the Relative Paths podcast on Stitcher"/>
						</a>
						</div>
						<div id="subscribe-bar-rss" class="subscribe-div">
							<a id="feedlink" href="http://relativepaths.uk/feeds/cast.xml"><img class="subscribe-bar-image" src="/images/rss-icon.png" alt="Subscribe to the Relative Paths podcast on RSS"  /></a>
						</div>
					</div> <!-- Subscribe bar -->
				</div>
			</header>
