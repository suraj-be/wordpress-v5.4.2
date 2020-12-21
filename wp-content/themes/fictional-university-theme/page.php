<?php
get_header();
while (have_posts()) {
  the_post(); ?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <!-- This banner image will also be updated at a later section -->
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>LATER WE WILL WORK WITH CUSTOM POST TYPE</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">

    <?php
    /* $get_parent_page_id - Check whether the current page is a child page or not */
    $get_parent_page_id = wp_get_post_parent_id(get_the_ID());
    if ($get_parent_page_id) { ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($get_parent_page_id) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($get_parent_page_id) ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>
    <?php } ?>

    <?php
    $get_sub_pages = get_pages([
      'child_of' => get_the_ID()
    ]);
    /* display the section, if the current page is a child page or if the parent page has child pages */
    if ($get_parent_page_id | $get_sub_pages) { ?>
      <div class="page-links">
        <?php $get_parent_page_id ? $fic_page_id = $get_parent_page_id : $fic_page_id = get_the_ID(); ?>
        <h2 class="page-links__title">
          <a href="<?php echo get_permalink($fic_page_id) ?>"><?php echo get_the_title($fic_page_id); ?></a>
        </h2>
        <ul class="min-list">
          <?php
          wp_list_pages([
            'title_li' => NULL,
            'child_of' => $fic_page_id,
            'sort_column' => 'menu_order'
          ]); ?>
        </ul>
      </div>
    <?php } ?>

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>

<?php }
get_footer(); ?>