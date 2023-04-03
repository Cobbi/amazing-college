<?php get_header(); ?>
<?php
   while(have_posts()){
    the_post();
   }
?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('./images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Learn how the school of your dreams got started.</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
   <?php 
    if(wp_get_post_parent_id(get_the_ID())) {?>
      <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('/about-us') ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
   <?php };
   ?>
    
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo site_url('/about-us'); ?>">About Us</a></h2>
      <ul class="min-list">
        <li class="current_page_item"><a href="<?php echo site_url('/about-us/our-history'); ?>">Our History</a></li>
        <li><a href="<?php echo site_url('/about-us/our-goal'); ?>">Our Goals</a></li>
      </ul>
    </div>

    <div class="generic-content">
      <p><?php the_content(); ?></p>
    </div>

  </div>

  <div class="page-section page-section--beige">
    <div class="container container--narrow generic-content">
      <p><?php the_content(); ?></p>
    </div>
  </div>

  <div class="page-section page-section--white">

   <div class="container container--narrow">
      <h2 class="headline headline--medium">Biology Professors:</h2>

      <ul class="professor-cards">
       <li class="professor-card__list-item">
       <a href="#" class="professor-card">
           <img class="professor-card__image" src="images/barksalot.jpg">
           <span class="professor-card__name">Dr. Barksalot</span>
         </a>
       </li>
       <li class="professor-card__list-item">
       <a href="#" class="professor-card">
           <img class="professor-card__image" src="images/meowsalot.jpg">
           <span class="professor-card__name">Dr. Meowsalot</span>
         </a>
       </li>
     </ul>
     <hr class="section-break">

    <div class="row group generic-content">

      <div class="one-third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>

      <div class="one-third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>

      <div class="one-third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>
    </div>

  </div>

</div>
<?php get_footer(); ?>