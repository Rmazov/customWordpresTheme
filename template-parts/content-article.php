


<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <h3 class="mb-3"><?php the_title();?></h3>
                    <img class="img-fluid w-100" src="<?php the_post_thumbnail_url();?>" style="height: 500px; object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                        <div class="mb-3">
                            <span class="px-1"></span>
                            <span><?php the_date();?></span>
                        </div>
                        <div>
                            <p><?php the_content();?></p>
                        </div>
                    </div>
                </div>
                <!-- News Detail End -->
            </div>
        </div>
    </div>
</div>

          
              
        