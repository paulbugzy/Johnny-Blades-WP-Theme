&lt;?php
get_header();
?&gt;

&lt;div id="content"&gt;
  &lt;main&gt;
    &lt;?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?&gt;
      &lt;article&gt;
        &lt;h2&gt;&lt;a href="&lt;?php the_permalink(); ?&gt;"&gt;&lt;?php the_title(); ?&gt;&lt;/a&gt;&lt;/h2&gt;
        &lt;div class="entry-content"&gt;
          &lt;?php the_content(); ?&gt;
        &lt;/div&gt;
      &lt;/article&gt;
    &lt;?php endwhile; else : ?&gt;
      &lt;p&gt;&lt;?php esc_html_e( 'Sorry, no posts matched your criteria.', 'barber-shop' ); ?&gt;&lt;/p&gt;
    &lt;?php endif; ?&gt;
  &lt;/main&gt;
  &lt;?php get_sidebar(); ?&gt;
&lt;/div&gt;

&lt;?php
get_footer();
?&gt;
