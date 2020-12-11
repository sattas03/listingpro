<?php
$plan_id = listing_get_metabox_by_ID('Plan_id', get_the_ID());
if (!empty($plan_id)) {
    $plan_id = $plan_id;
} else {
    $plan_id = 'none';
}
$metabox = get_post_meta($post->ID, 'lp_' . strtolower(THEMENAME) . '_options', true);

$contact_show = get_post_meta($plan_id, 'contact_show', true);
$map_show = get_post_meta($plan_id, 'map_show', true);
$video_show = get_post_meta($plan_id, 'video_show', true);
$gallery_show = get_post_meta($plan_id, 'gallery_show', true);
$tagline_show = get_post_meta($plan_id, 'listingproc_tagline', true);
$location_show = get_post_meta($plan_id, 'listingproc_location', true);
$website_show = get_post_meta($plan_id, 'listingproc_website', true);
$social_show = get_post_meta($plan_id, 'listingproc_social', true);
$faqs_show = get_post_meta($plan_id, 'listingproc_faq', true);
$price_show = get_post_meta($plan_id, 'listingproc_price', true);
$tags_show = get_post_meta($plan_id, 'listingproc_tag_key', true);
$hours_show = get_post_meta($plan_id, 'listingproc_bhours', true);

if ($plan_id == "none") {
    $contact_show = 'true';
    $map_show = 'true';
    $video_show = 'true';
    $gallery_show = 'true';
    $tagline_show = 'true';
    $location_show = 'true';
    $website_show = 'true';
    $social_show = 'true';
    $faqs_show = 'true';
    $price_show = 'true';
    $tags_show = 'true';
    $hours_show = 'true';
}

?>
<div class="container">
    <div class="lp-listing-detail-page-content" id="detail5-content">
        <div class="row">
            <div class="pull-left lp-left-title">
                <h2><?php echo esc_html__('Overview', 'listingpro'); ?></h2>
            </div>
            <div class="col-md-12 lp-right-content-box">                                <?php $website = listing_get_metabox('website');
                $facebook = listing_get_metabox('facebook');
                $twitter = listing_get_metabox('twitter');
                $linkedin = listing_get_metabox('linkedin');
                $youtube = listing_get_metabox('youtube');
                $instagram = listing_get_metabox('instagram'); ?>
                <div class="clearfix padding-bottom-40 ">                                    <?php echo listing_all_extra_fields($post->ID); ?>                                                                    <?php if (!empty($website) || $social_show == "true" || !empty($facebook) || !empty($twitter) || !empty($linkedin) || !empty($youtube) || !empty($instagram)) { ?>
                        <div class="lp-social-box">
                            <ul>                                            <?php if (!empty($website)) {
                                    if ($website_show == "true") { ?>
                                        <li class="clearfix">
                                            <div class="pull-left lp-first-pull-left"><img
                                                        src="data:image/png;base64,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">
                                                <strong><?php echo esc_html__('Website', 'listingpro'); ?></strong>
                                            </div>
                                            <div class="pull-left"><a data-lpID="<?php echo $post->ID; ?>"
                                                                      href="<?php echo esc_url($website); ?>"
                                                                      target="_blank" rel="nofollow">
                                                    <span><?php echo esc_url($website); ?></span> </a></div>
                                        </li>                                            <?php } ?><?php } ?>                                            <?php if ($social_show == "true") {
                                    if (empty($facebook) && empty($twitter) && empty($linkedin) && empty($youtube) && empty($instagram)) {
                                    } else { ?>
                                        <li class="clearfix">
                                            <div class="pull-left lp-first-pull-left"><img
                                                        src="data:image/png;base64,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">
                                                <strong><?php echo esc_html__('Follow Social', 'listingpro'); ?></strong>
                                            </div>
                                            <div class="pull-left">                                                            <?php if (!empty($facebook)) { ?>
                                                    <a href="<?php echo esc_url($facebook); ?>" class="margin-left-20"
                                                       target="_blank"> <i class="fa fa-facebook"></i>
                                                    </a>                                                                                                                    <?php } ?>                                                        <?php if (!empty($twitter)) { ?>
                                                    <a href="<?php echo esc_url($twitter); ?>" class="padding-left-0"
                                                       target="_blank"> <i class="fa fa-twitter"></i>
                                                    </a>                                                                                                                    <?php } ?>                                                        <?php if (!empty($linkedin)) { ?>
                                                    <a href="<?php echo esc_url($linkedin); ?>" class="padding-left-0"
                                                       target="_blank"> <i class="fa fa-linkedin"></i>
                                                    </a>                                                                                                                    <?php } ?>                                                                                                                <?php if (!empty($youtube)) { ?>
                                                    <a href="<?php echo esc_url($youtube); ?>#" class="padding-left-0"
                                                       target="_blank"> <i class="fa fa-youtube"></i>
                                                    </a>                                                                                                                    <?php } ?>                                                        <?php if (!empty($instagram)) { ?>
                                                    <a href="<?php echo esc_url($instagram); ?>#" class="padding-left-0"
                                                       target="_blank"> <i class="fa fa-instagram"></i>
                                                    </a>                                                                                                                    <?php } ?>
                                            </div>
                                        </li>                                            <?php } ?><?php } ?>
                            </ul>
                        </div>                                    <?php } ?>
                </div> <?php $listingContent = get_the_content($post->ID);
                if ($listingContent !== "") { ?>
                    <div class="post-row">
                        <div class="">

                            <h3><?php echo esc_html__('About', 'listingpro'); ?></h3>

                        </div>
                        <div class="post-detail-content">

                            <?php the_content(); ?>                                            </div>
                    </div>                                <?php } ?>                            </div>
        </div>
    </div>
</div>
