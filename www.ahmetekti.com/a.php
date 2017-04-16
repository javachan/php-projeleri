<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package University
 */
?>
</div>
</div>

<div id="footer">
    <div id="socialize">
        <?php if (get_theme_mod( 'googleplus_account' )) : ?>
            <a class="socialicon googleplusicon" href="<?php echo esc_url(get_theme_mod( 'googleplus_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'instagram_account' )) : ?>
            <a class="socialicon instagramicon" href="<?php echo esc_url(get_theme_mod( 'instagram_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'tumblr_account' )) : ?>
            <a class="socialicon tumblricon" href="<?php echo esc_url(get_theme_mod( 'tumblr_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'youtube_account' )) : ?>
            <a class="socialicon youtubeicon" href="<?php echo esc_url(get_theme_mod( 'youtube_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'vimeo_account' )) : ?>
            <a class="socialicon vimeoicon" href="<?php echo esc_url(get_theme_mod( 'vimeo_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'flickr_account' )) : ?>
            <a class="socialicon flickricon" href="<?php echo esc_url(get_theme_mod( 'flickr_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'pinterest_account' )) : ?>
            <a class="socialicon pinteresticon" href="<?php echo esc_url(get_theme_mod( 'pinterest_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'dribble_account' )) : ?>
            <a class="socialicon dribbleicon" href="<?php echo esc_url(get_theme_mod( 'dribble_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'linkedin_account' )) : ?>
            <a class="socialicon linkedinicon" href="<?php echo esc_url(get_theme_mod( 'linkedin_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'facebook_account' )) : ?>
            <a class="socialicon facebookicon" href="<?php echo esc_url(get_theme_mod( 'facebook_account')); ?>" target="blank"></a>
        <?php endif ?>
        <?php if (get_theme_mod( 'twitter_account' )) : ?>
            <a class="socialicon twittericon" href="<?php echo esc_url(get_theme_mod( 'twitter_account')); ?>" target="blank"></a>
        <?php endif ?>
    </div>
    <div id="copyinfo"> <a target="_blank" href="<?php echo esc_url( esc_attr__( 'http://ahmetekti.com/', 'university' ) ); ?>"><?php printf( esc_attr__( 'Hazırlayan:  %s', 'Ahmet EKTİ' ), 'Ahmet EKTİ' ); ?></a> </div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body></html>