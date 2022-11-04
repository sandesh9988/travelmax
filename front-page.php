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
                <p>Offering <strong>20% discount<strong> on selected trips</p>
                <svg class="icon icon-rightarrow">
                    <use xlink:href="#icon-rightarrow"></use>
                </svg>
            </div>
            <div class="hero__heading">
                <h2 class="hero__title">Explore Beyond the <strong>Himalayas</strong></h2>
                <div class="hero__search">
                    <svg class="icon icon-search">
                        <use xlink:href="#icon-search"></use>
                    </svg>
                    <input type="text" placeholder="Your Next Trip" name="search2">
                </div>

            </div>
        </div>

    </section>
    <?php include 'modules/flex-content/flex-content.php'; ?>
</main>
<?php get_footer(); ?>