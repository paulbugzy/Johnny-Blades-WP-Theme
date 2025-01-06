<?php
/**
 * Template Name: Barbers & Services
 */

get_header(); ?>

<main role="main">
  <section id="welcome">
    <h1>Welcome to Johnny Blades</h1>
    <p>Johnny Blades Haircut started back in 2011 offering some of the best haircuts in the area. We always cared about our customer and making them want to look their best, in order to feel their best. We’ve spent decades learning our craft to ensure that you get the best service in the Albany Park area.</p>
    <p>We believe cutting hair is one of the oldest forms of art and we’re very passionate about it. At Johnny Blades Haircut, we look to bring you the newest and latest trends. Our newly remodeled shop is equipped with the best staff, best equipment, and overall atmosphere.</p>
    <p>We look forward to serving you and giving you a positive experience that you will always remember.</p>
  </section>

  <section id="barbers-stylists">
    <h2>Meet Our Barbers & Stylists</h2>
    <ul>
      <li><strong>John</strong>: Tuesday (Open till Close), Saturday (Open till Close), Sunday & Monday (Open till Close)</li>
      <li><strong>George</strong>: Mon-Fri 10AM - 7PM, Saturday 9AM - 6PM, Sunday Off</li>
      <li><strong>Steve</strong>: Mon - Fri 10AM - 8PM, Tuesday Off, Saturday 9AM - 7PM, Sunday 10AM - 5PM</li>
      <li><strong>Mathew</strong>: Mon- Wed 10AM-8PM, Friday- Sat 10AM-6PM, Sunday- 10AM-5PM</li>
      <li><strong>Michael</strong>: Mon - Wed 10AM - 8PM, Thursday- OFF, Friday 10AM - 8PM, Saturday 9AM - 7PM, Sunday- OFF</li>
      <li><strong>Dalia</strong>: Mon - Tue 10AM - 8PM, Wed & Sun Off, Friday 10AM - 8PM, Saturday 9AM - 7PM</li>
      <li><strong>Sam</strong>: Mon & Wed Off, Tuesday 10AM - 8PM, Thur - Fri 10AM - 8PM, Saturday 9AM - 7PM, Sunday 10AM - 5PM</li>
      <li><strong>Nina</strong>: Mon/Tue & Thur Off, Wednesday 11AM - 7PM, Friday 11AM - 7PM, Saturday 10AM - 7PM, Sunday 10AM - 6PM</li>
    </ul>
  </section>

  <section id="services">
    <h2>Amazing Services</h2>
    <p>Check out all the different services our expert staff can offer.</p>
    <ul>
      <li>Classic Haircut</li>
      <li>Highlights</li>
      <li>Beard & Shaving</li>
      <li>Eyebrow Threading & Wax</li>
      <li>Hair Color</li>
      <li>Hair Cut & Beard</li>
      <li>Kids & Seniors Haircut</li>
      <li>Facial</li>
    </ul>
    <a href="<?php echo esc_url( home_url( '/schedule-an-appointment' ) ); ?>" class="button">Book an Appointment</a>
  </section>

  <section id="testimonials">
    <h2>What Our Customers Say</h2>
    <blockquote>"Johnny Blades Haircuts is the best in town! The staff is friendly and the service is top-notch." - Jane Doe</blockquote>
    <blockquote>"I always leave feeling great. Highly recommend!" - John Smith</blockquote>
  </section>

  <section id="working-hours">
    <h2>Working Hours</h2>
    <p>Mon 10:00AM – 08:00PM<br>
    Tue 10:00AM – 08:00PM<br>
    Wed 10:00AM – 08:00PM<br>
    Thu 10:00AM – 08:00PM<br>
    Fri 10:00AM – 08:00PM<br>
    Sat 09:00AM – 07:00PM<br>
    Sun 10:00AM – 05:00PM</p>
  </section>
</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Johnny Blades Haircuts",
  "description": "Offering the best haircuts in Albany Park since 2011.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "3833/5 W Lawrence Ave",
    "addressLocality": "Chicago",
    "addressRegion": "IL",
    "postalCode": "60625",
    "addressCountry": "US"
  },
  "telephone": "+17732678383",
  "openingHours": [
    "Mo-Fr 10:00-20:00",
    "Sa 09:00-19:00",
    "Su 10:00-17:00"
  ],
  "image": "https://example.com/logo.png",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "41.9681",
    "longitude": "-87.7195"
  },
  "sameAs": [
    "https://www.facebook.com/johnnybladeshaircuts",
    "https://www.instagram.com/johnnybladeshaircuts",
    "https://twitter.com/johnnybladeshaircuts"
  ]
}
</script>

<?php get_footer(); ?>
