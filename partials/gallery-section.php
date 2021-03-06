<section id="gallery" class="section section--light">
  <div class="container gallery">
    <h1 class="section__header">Gallery</h1>
    <div class="row list-unstyled gallery__list">
      <?php
        $galleries = getGalleries();
        foreach ($galleries as $gallery) {
          ?>
          <div class="gallery__item col-sm-6 col-md-4">
              <div class="gallery__teaser">
                  <?php echo wp_get_attachment_image($gallery->cover, 'large');?>
                  <strong><?php echo $gallery->title; ?></strong>
              </div>
              <div class="gallery__sub-gallery row">
                <?php
                foreach ($gallery->images as $image) {?>
                  <div class="gallery__image-container col-xs-6 col-sm-3 col-md-2">
                  <a class="fancybox" href="<?php echo get_field('image', $image->ID); ?>" data-fancybox-group="gallery-<?php echo $gallery->id ?>">
                    <?php echo wp_get_attachment_image($image->thumbnail, 'large');?>
                  </a>
                </div>
                <?php }?>
              </div>
          </div>
        <?php }
      ?>
    </div>
  </div>
</section>
