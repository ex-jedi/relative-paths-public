<?php include('perch/runtime.php'); ?> <!-- Perch initialisation code -->
<?php perch_layout('main-header'); ?><!-- Calls in template from perch\templates\layouts\main-header.php -->
<main id="main-content" class="sponsor-us-main-content">
	<article class="sponsor-us-article">
		<?php perch_content('Sponsor Us Text'); ?>
		<?php perch_content('Sponsor Us Contact Form'); ?>
	</article>
</main>
<?php perch_layout('main-footer'); ?><!-- Calls in template from perch\templates\layouts\main-footer.php -->
