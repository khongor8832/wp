<?php get_header(); ?>
<?php get_header(); ?> 
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-9">
            <div class="page-content">

                <?php  while ( have_posts() ) : the_post(); $i++; ?>
            
				
				<div class="row cat">
//Дутуу 20.58 

				</div>
                <?php endwhile; ?>

            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="fb-root">
            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="sLhzSnZ7"></script>


<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 


<?php get_footer(); ?>
