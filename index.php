<?php  get_header();     ?>


<h1>hello</h1>
<div >
<?php
  if(have_posts()):
  while(have_posts()): the_post();?>
<h2><?php   the_title();   ?></h2>
<small class="post-categories"><?php the_time('Y/m/d');  ?>  in <?php the_category(); ?> </small>
<?php the_post_thumbnail(array(200,200)); ?>
<p><?php the_content();   ?></p>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>




</div>
<?php endwhile;   ?>
<?php endif;?>
 

  </div>
  
  <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo("template_directory");?>/img/image.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo("template_directory");?>/img/image2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo("template_directory");?>/img/image3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php  get_footer()  ;   ?>