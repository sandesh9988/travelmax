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
                <h1 class="hero__title">Explore Beyond the <br><strong class="hero__heading-strong">Himalayas</strong>
                </h1>

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
        <div class="container">
            <div class="link-content__heading">
                <h2 class="link-content__title">Our values above everything</h2>
            </div>
            <div class="link-content__description">
                <div class="link-content__left">
                    <p>We are not a regular travel agency; We’re here to understand your needs, consult you a better
                        travel experience and create a lifetime relation with you.</p>
                    <p>We proudly say that we are one of those few, who love to put ourselves under the list of
                        “Different People do Things Differently”, just like you try to create a lasting impression upon
                        your clients, who will remember how much hard you have worked work for them to give a satisfying
                        service in the remotest regions of Nepal.</p>
                    <ul class="link-content__list">
                        <li><a href="#">More About Us</a></li>
                        <li><a href="#">Why TMG?</a></li>
                        <li><a href="#">Meet Our Team</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="link-content__right">
                    <p>We aspire to be the world’s most trustable and progressive travel management company.</p>
                    <h3 class="link-content__right-subtitle">— John shrestha, Founder</h3>
                </div>
            </div>

        </div>
    </section>
    <section class="image-slider">
        <div class="container">
            <div class="image-slider__heading">
                <h2 class="image-slider__title">Explore <strong class="image-slider__strong">Nepal with us</strong></h2>
                <p>Nepal is as old as the hills, and so are its Himalayas that were formed billions of years ago, and
                    this is where the trekking trails lie.

                </p>
            </div>
        </div>
    </section>
    <?php include 'modules/flex-content/flex-content.php'; ?>
</main>
<?php get_footer(); ?>