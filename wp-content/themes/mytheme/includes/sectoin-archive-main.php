<?php 
    if( have_posts() ): while( have_posts() ):the_post(); ?>
    hey
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php the_title();?></h5>
                <p class="card-text"><?php the_content();?></p>
                <a href="<?php the_permalink();?>" class="btn  btn-success">Read more</a>
            </div>
    </div>
<?php endwhile; else: endif;?>