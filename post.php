<?php include('perch/runtime.php'); ?>
<?php perch_layout('blog-post-header'); ?><!-- Calls in template from perch\templates\layouts\main-header.php -->
<main id="main-content" class="blog-post-main">
	<article class="blog-post-article" itemscope itemtype="https://schema.org/BlogPosting" itemprop="blogPost">
	<?php perch_blog_post(perch_get('s')); ?>
	<section class="blog-categories-and-tags-section">
		<?php perch_blog_post_categories(perch_get('s')); ?>
		<?php perch_blog_post_tags(perch_get('s')); ?>
	</section>
</article>
</main>
<?php perch_layout('main-footer'); ?><!-- Calls in template from perch\templates\layouts\main-footer.php -->
