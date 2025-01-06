<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<main role="main">
  <section id="contact">
    <h2>Contact Us</h2>
    <p>Contact us at any time to answer any questions.</p>
    <address>
      3833/5 W Lawrence Ave Chicago, Illinois<br>
      <a href="mailto:info@johnnybladeshaircut.com">info@johnnybladeshaircut.com</a><br>
      <a href="tel:+17732678383">+1 773-267-8383</a>
    </address>
    <h3>Working Hours</h3>
    <p>Mon-Fri 10:00AM – 08:00PM<br>
    Sat 09:00AM – 07:00PM<br>
    Sun 10:00AM – 05:00PM</p>
  </section>

  <section id="map">
    <h2>Find Us</h2>
    <div id="google-map"></div>
    <form id="directions-form">
      <label for="user-address">Enter your address:</label>
      <input type="text" id="user-address" name="user-address" required>
      <button type="submit">Send Me Directions</button>
    </form>
  </section>
</main>

<?php get_footer(); ?>
