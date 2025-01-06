<?php
/**
 * Template Name: Careers
 */

get_header(); ?>

<main role="main">
  <section id="careers">
    <h2>Careers at Johnny Blades</h2>
    <p>Join our team and be part of a dynamic and passionate group of professionals.</p>
    <form id="job-application-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="action" value="submit_job_application">
      <label for="first-name">First Name *</label>
      <input type="text" id="first-name" name="first_name" required>
      
      <label for="last-name">Last Name *</label>
      <input type="text" id="last-name" name="last_name" required>
      
      <label for="email">Email *</label>
      <input type="email" id="email" name="email" required>
      
      <label for="phone">Phone *</label>
      <input type="tel" id="phone" name="phone" required>
      
      <label for="address">Address *</label>
      <input type="text" id="address" name="address" required>
      
      <label for="city">City</label>
      <input type="text" id="city" name="city">
      
      <label for="state">State</label>
      <select id="state" name="state">
        <option value="Alabama">Alabama</option>
        <!-- Add other states here -->
      </select>
      
      <label for="zip">Zip Code</label>
      <input type="text" id="zip" name="zip">
      
      <label for="source">How did you find out about this position?</label>
      <select id="source" name="source">
        <option value="Current Employee">Current Employee</option>
        <option value="Career Fair">Career Fair</option>
        <option value="Newspaper Ad">Newspaper Ad</option>
        <option value="Radio/TV AD">Radio/TV AD</option>
        <option value="Search Engine">Search Engine</option>
        <option value="Social Media">Social Media</option>
        <option value="Craigslist">Craigslist</option>
        <option value="Other">Other</option>
      </select>
      
      <label for="other-source">If other</label>
      <input type="text" id="other-source" name="other_source">
      
      <label for="resume">Upload your resume *</label>
      <input type="file" id="resume" name="resume" required>
      
      <label for="cover-letter">Upload a cover letter</label>
      <input type="file" id="cover-letter" name="cover_letter">
      
      <label for="additional-info">Additional Information</label>
      <textarea id="additional-info" name="additional_info"></textarea>
      
      <button type="submit" class="button">Submit</button>
    </form>
  </section>
</main>

<?php get_footer(); ?>
