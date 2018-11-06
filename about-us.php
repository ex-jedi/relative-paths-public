<?php include('perch/runtime.php'); ?> <!-- Perch initialisation code -->
<?php perch_layout('main-header'); ?><!-- Calls in template from perch\templates\layouts\main-header.php -->
<main id="main-content" class="homepage-main-content">
	<article class="about-us-article">
		<?php perch_content('About Us Text'); ?>
		<div class="bio-div">
			<section class="bio-section ben-bio">
				<?php perch_content('Ben&#39;s Bio '); ?>
			</section>
			<section class="bio-section mark-bio">
				<?php perch_content('Mark&#39;s Bio'); ?>
			</section>
			<?php perch_content('Contact Form'); ?>
		</div>
	</article>
</main>
<?php perch_layout('main-footer'); ?><!-- Calls in template from perch\templates\layouts\main-footer.php -->
