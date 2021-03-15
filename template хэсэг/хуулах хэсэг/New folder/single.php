<?php get_header(); ?> 
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-9">
            <div class="page-content">
                <?php  while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
				<div class="share">
				<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="iW6KaWMV"></script>

<div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
				</div>
                <?php the_content(); ?>
                <?php endwhile; ?>

				<div class="comment">
				<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="7YTscU6B"></script>

<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="" data-numposts="5"></div>
				</div>

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
