<?php
if( have_posts() ): 
    while( have_posts()): the_post();?>
    
     <?php the_title();?>
     
    <?php the_excerpt();?> 
    <a href="<?php the_permalink();?>" class="btn  btn-success">Read more</a> <br/>

<?php endwhile; 
    else: 
endif;?>