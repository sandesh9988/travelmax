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
                    alt="Image of a trekking " />
            </figure>
            <figure class="video-slide__media">
                <img src="<?php echo get_template_directory_uri() ?>/uploads/gifPreviewVideo.jpg"
                    alt="Image of a trekking" />
            </figure>
            <figure class="video-slide__media">
                <img src="<?php echo get_template_directory_uri() ?>/uploads/gifPreviewVideo.jpg"
                    alt="Image of a trekking" />
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
        <div class="image-slider__heading">
            <h2 class="image-slider__title">Explore <strong class="image-slider__strong">Nepal with us</strong></h2>
            <p>Nepal is as old as the hills, and so are its Himalayas that were formed billions of years ago, and
                this is where the trekking trails lie.

            </p>
        </div>

        <div class="image-slider__mid">
            <div class="image-slider__span">

            </div>
            <div class="image-slider__rightarrow">
                <svg class="icon icon-lArrow">
                    <use xlink:href="#icon-lArrow"></use>
                </svg>
            </div>
            <div class="image-slider__leftarrow">
                <svg class="icon icon-rArrow">
                    <use xlink:href="#icon-rArrow"></use>
                </svg>

            </div>
            <div class="image-slider__sliders">

                <figure class="image-slider__media">
                    <img src="<?php echo get_template_directory_uri() ?>/uploads/imgslider1.jpg"
                        alt="Image of a trekking" />
                    <div class="image-slider__content">
                        <h5>USD 1500</h5>
                        <h3 class="image-slider__subtitle">Everest Base Camp Trek Via Gokyo Lakes</h3>
                        <h4>12 Days, Setrenuous</h4>
                    </div>
                </figure>
                <figure class="image-slider__media">
                    <img src="<?php echo get_template_directory_uri() ?>/uploads/imgslider2.jpg"
                        alt="Image of a trekking" />
                    <div class="image-slider__content">
                        <h5 image-slider__content>USD 1500</h5>
                        <h3 class="image-slider__subtitle">Everest Base Camp Trek </h3>
                        <h4>12 Days, Setrenuous</h4>
                    </div>
                </figure>
                <figure class="image-slider__media">
                    <img src="<?php echo get_template_directory_uri() ?>/uploads/imgslider3.jpg"
                        alt="Image of a trekking" />
                    <div class="image-slider__content">
                        <h5>USD 1500</h5>
                        <h3 class="image-slider__subtitle">Annapurna Base Camp Trek</h3>
                        <h4>12 Days, Setrenuous</h4>
                    </div>
                </figure>
                <figure class="image-slider__media">
                    <img src="<?php echo get_template_directory_uri() ?>/uploads/imgslider1.jpg"
                        alt="Image of a trekking" />
                    <div class="image-slider__content">
                        <h5>USD 1500</h5>
                        <h3 class="image-slider__subtitle">Everest Base Camp Trek Via Gokyo Lakes</h3>
                        <h4>12 Days, Setrenuous</h4>
                    </div>
                </figure>
                <figure class="image-slider__media">
                    <img src="<?php echo get_template_directory_uri() ?>/uploads/imgslider2.jpg"
                        alt="Image of a trekking" />
                    <div class="image-slider__content">
                        <h5>USD 1500</h5>
                        <h3 class="image-slider__subtitle">Everest Base Camp Trek</h3>
                        <h4>12 Days, Setrenuous</h4>
                    </div>
                </figure>
            </div>
        </div>

    </section>
    <section class="post">
        <div class="container">
            <div class="post__heading">
                <h2 class="post__title">
                    Our values venenatis magna <strong>everything</strong>
                </h2>
            </div>
            <div class="post__description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet justo at justo tempus semper
                </p>
                <div class="post__link">
                    <a href="#">View all trips</a>
                    <svg class="icon icon-longarrow">
                        <use xlink:href="#icon-longarrow"></use>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="media">
        <span class="media__span "></span>
        <span class="media__span media__span--right"></span>
        <span class="media__span media__span--down"></span>
        <span class="media__span media__span--leftdown"></span>
        <div class="media__heading">
            <h2 class="media__title">Stories from the himalaya</h2>
        </div>


    </section>
    <section class="banner">
        <div class="container">
            <div class="banner__content">
                <div class="banner__left">
                    <h2 class="banner__title">Travel <strong>Photography</strong> at it's <strong>best</strong></h2>
                    <p>Nepal is as old as the hills, and so are its Himalayas that were formed billions of years ago,
                        and this is where the trekking trails lie.</p>

                </div>
                <div class="banner__right">
                    <figure class="banner__media ">
                        <img src="<?php echo get_template_directory_uri() ?>/uploads/banner1.jpg"
                            alt="Image of a beautiful destinations" />
                            <h3 class="banner__subtitle">Nepal Adventure</h3>
                            
                    </figure>
                    <figure class="banner__media ">
                        
                        <img src="<?php echo get_template_directory_uri() ?>/uploads/banner2.jpg"
                            alt="Image of a beautiful destinations" />
                            <h3 class="banner__subtitle">Lower Dolpa Trek</h3>
                    </figure>
                    <figure class="banner__media">
                        <img src="<?php echo get_template_directory_uri() ?>/uploads/banner3.jpg"
                            alt="Image of a beautiful destinations" />
                            <h3 class="banner__subtitle">Sightseeing Kathmandu</h3>
                    </figure>

                </div>
            </div>
        </div>
    </section>
<section>354</section>

   
    <?php include 'modules/flex-content/flex-content.php'; ?>
</main>
<?php get_footer(); ?>