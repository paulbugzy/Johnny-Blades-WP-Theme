<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<main role="main">
  <section id="services">
    <h2>Our Services</h2>
    <p>Experience the best haircuts in town with Johnny Blades Haircuts.</p>
  </section>

  <section id="reviews">
    <h2>Customer Reviews</h2>
    <p>See what our customers have to say about us.</p>
    <!-- Add review snippets here -->
  </section>

  <section id="cta">
    <h2>Schedule an Appointment</h2>
    <a href="<?php echo esc_url( home_url( '/schedule-an-appointment' ) ); ?>" class="button">Book Now</a>
  </section>
</main>

<?php get_footer(); ?>
