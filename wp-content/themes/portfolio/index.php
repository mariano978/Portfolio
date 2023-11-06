<?php get_header(); ?>

<section class="contenedor hero">
    <?php
    while (have_posts()) :
        the_post();

    ?>
        <div class="hero__presentacion">
            <?php
            the_title("<h1 class='text-center'>", "</h1>");
            the_content();
            ?>
        </div>
    <?php

        if (has_post_thumbnail()) {
            the_post_thumbnail("full", ["class" => "imagen-destacada"]);
        }
    endwhile; ?>
</section>

<section class="contenedor about-me"> 

</section>

<section class="contenedor contacto">
    <div class="contacto__formulario">
        <?php echo do_shortcode(get_field("contactform")); ?>
    </div>
</section>


<?php get_footer(); ?>