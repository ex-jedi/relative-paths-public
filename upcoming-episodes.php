<?php include('perch/runtime.php'); ?> <!-- Perch initialisation code -->
<?php perch_layout('main-header'); ?><!-- Calls in template from perch\templates\layouts\main-header.php -->
<main id="main-content" class="upcoming-episodes-main-content">
	<article class="upcoming-episodes-article">
		<?php perch_content('Upcoming Episodes'); ?>
	</article>
</main>
<?php perch_layout('main-footer'); ?><!-- Calls in template from perch\templates\layouts\main-footer.php -->
