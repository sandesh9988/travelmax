<?php
get_header();
the_post();
?>
<main class="page__home">
    <section class="hero">
        <div class="container">
            <div class="hero__badge">
                <svg class="icon icon-percent">
                    <use xlink:href="#icon-percent"></use>
                </svg>
                <p>Offering <strong class="hero__badge-strong">20% discount</strong> on selected trips</p>
                <svg class="icon icon-rightarrow">
                    <use xlink:href="#icon-rightarrow"></use>
                </svg>
            </div>
            <div class="hero__heading">
                <h1 class="hero__title">Explore Beyond the <br><strong class="hero__heading-strong">Himalayas</strong></h1>

                <div class="hero__search">

                    <label>

                        <input class="hero__search-input" type="text" placeholder="Your Next Trip" name="search2">
                    </label>
                </div>

            </div>
        </div>

    </section>
    <section class="video-slide">
        <div class="video-slide__heading">
            <div class="video-slide__playbtn">
                <svg class="icon icon-play_icon">
                    <use xlink:href="#icon-play_icon"></use>
                </svg>
                <div class="video-slide__content">
                   <h3 class="video-slide__subtitle">Play Video</h3>
                   <p>2:53</p>
                
                </div>
            </div>
            <h2 class="video-slide__title">List Of Easy Trek For The First Timers'</h2>
        </div>
        
        <div class="video-slide__slider">
            <figure class="video-slide__media">
                <img src="<?php echo get_template_directory_uri() ?>/uploads/gifPreviewVideo.jpg"
                    alt="Image of a logo" />
            </figure>
            <figure class="video-slide__media">
                <img src="<?php echo get_template_directory_uri() ?>/uploads/gifPreviewVideo.jpg"
                    alt="Image of a logo" />
            </figure>
            <figure class="video-slide__media">
                <img src="<?php echo get_template_directory_uri() ?>/uploads/gifPreviewVideo.jpg"
                    alt="Image of a logo" />
            </figure>
        </div>

    </section>
    <section class="link-content">

    </section>
    <?php include 'modules/flex-content/flex-content.php'; ?>
</main>
<?php get_footer(); ?>