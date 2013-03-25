<?php
$stories = new WP_Query('category_name=ireland');
$stories = $stories->posts;
$page_id = 5; ?>
<!doctype html>
<html>
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>
<body>
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<h2><?php bloginfo( 'description' ); ?></h2>

<?php get_page( $page_id );
$page_data = get_page( $page_id );
?>
<h3><?echo $page_data->post_title;?></h3>
<p><?echo $page_data->post_content;?></p>
<?php foreach($stories as $story): ?>
<div class="story">
<?php echo $story->post_content ?>
</div>
<?php endforeach ?>
<?php the_meta(); ?>
</div>
</body>
</html>