<?php include('perch/runtime.php'); ?>
<?php
    $domain = 'https://'. $_SERVER['HTTP_HOST'];
    PerchSystem::set_var('domain',$domain);

    header('Content-Type: application/rss+xml');

    echo '<?xml version="1.0"?>';
?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>Web Design and Development | Relative Paths Podcast</title>
        <link><?php echo PerchUtil::html($domain) ?>/</link>
        <description>This is a podcast about web design, web development, music, and that kind of thing.</description>
        <atom:link href="<?php echo PerchUtil::html($domain) ?>/feed" rel="self" type="application/rss+xml" />
        <?php
        perch_blog_custom([
            'template'=>'blog/rss_post.html',
            'count'=>10,
            'sort'=>'postDateTime',
            'sort-order'=>'DESC'
        ]);
        ?>
    </channel>
</rss>