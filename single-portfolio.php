<?php get_header(); ?>
<h1>Single Portfolio</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<h2>titre : <a href="<?php the_field('field_5b923737c6543'); ?>"><?php the_field('field_5b9236ebc6542'); ?></a></h2>

<?php 

$images = get_field('field_5b923794c6547');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>