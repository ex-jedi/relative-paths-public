<?php include('perch/runtime.php'); ?>
<?php perch_layout('home-header'); ?><!-- Calls in template from perch\templates\layouts\home-header.php -->
<main id="main-content" class="homepage-main-content">
	<?php perch_blog_recent_posts(5); ?>
	<!-- <?php PerchUtil::output_debug(); ?> -->
</main>
<?php perch_layout('main-footer'); ?><!-- Calls in template from perch\templates\layouts\main-footer.php -->
