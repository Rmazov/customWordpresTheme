<?php /* Template Name: Blog */ ?>
<?php
// Get the theme directory URI
$theme_dir = get_template_directory_uri();
?>

<?php
get_header( );

?>

<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => 10
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) :
    // advance the post pointer to the second post
    $query->the_post();
  
endif;
?>
 


<section class="bg-image-valparaiso"  style="background-image: url('http://swtripsmedellin.website/wp-content/uploads/2023/04/horsespeak-scaled.jpg')" id="inicio">

<div class="container">
  
     </div>
</section>

<section id="blog" class="py-5">
  <div class="container">
    <h2 class="text-center mb-5">Latest Posts</h2>
    <div class="row">
      <div class="col-md-4 col-12 custom-col">
        <div class="card mb-4">
        <img class="d-block w-100" src="<?php the_post_thumbnail_url(  );?>" alt="Imagen 1">
          <div class="card-body">
            <h5 class="card-title"><a class="h2 m-0 text-black font-weight-bold" href="<?php the_permalink();?>"><?php the_title(  )?></a></h5>
            <p class="card-text"><?php the_date( );?></p>
                 <a href="<?php the_permalink();?>" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <?php $query->the_post();?>
      <div class="col-md-4 col-12 custom-col">
        <div class="card mb-4">
        <img class="d-block w-100" src="<?php the_post_thumbnail_url(  );?>" alt="Imagen 1">
          <div class="card-body">
            <h5 class="card-title"><a class="h2 m-0 text-black font-weight-bold" href="<?php the_permalink();?>"><?php the_title(  )?></a></h5>
            <p class="card-text"><?php the_date( );?></p>
                 <a href="<?php the_permalink();?>" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <?php $query->the_post();?>
      <div class="col-md-4 col-12 custom-col">
        <div class="card mb-4">
        <img class="d-block w-100" src="<?php the_post_thumbnail_url(  );?>" alt="Imagen 1">
          <div class="card-body">
            <h5 class="card-title"><a class="h2 m-0 text-black font-weight-bold" href="<?php the_permalink();?>"><?php the_title(  )?></a></h5>
            <p class="card-text"><?php the_date( );?></p>
                 <a href="<?php the_permalink();?>" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer( );

?>
