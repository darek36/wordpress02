<?php
get_header();


    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            echo '<h1 class="page_title_w">'.get_the_title().'</h1>';
            echo '<p class="main_content">'.get_the_excerpt().'</p>';
        } 
    } 



get_footer();


