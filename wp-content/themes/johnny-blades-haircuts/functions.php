<?php

function handle_job_application_submission() {
  if ( isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_FILES['resume']) ) {
    $to = 'contact@johnnybladescuts.com';
    $subject = 'New Job Application from ' . sanitize_text_field($_POST['first_name']) . ' ' . sanitize_text_field($_POST['last_name']);
    $body = 'Name: ' . sanitize_text_field($_POST['first_name']) . ' ' . sanitize_text_field($_POST['last_name']) . "\n";
    $body .= 'Email: ' . sanitize_email($_POST['email']) . "\n";
    $body .= 'Phone: ' . sanitize_text_field($_POST['phone']) . "\n";
    $body .= 'Address: ' . sanitize_text_field($_POST['address']) . "\n";
    $body .= 'City: ' . sanitize_text_field($_POST['city']) . "\n";
    $body .= 'State: ' . sanitize_text_field($_POST['state']) . "\n";
    $body .= 'Zip: ' . sanitize_text_field($_POST['zip']) . "\n";
    $body .= 'Source: ' . sanitize_text_field($_POST['source']) . "\n";
    $body .= 'Other Source: ' . sanitize_text_field($_POST['other_source']) . "\n";
    $body .= 'Additional Information: ' . sanitize_textarea_field($_POST['additional_info']) . "\n";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    wp_mail($to, $subject, $body, $headers);

    wp_redirect(home_url('/thank-you'));
    exit;
  }
}

add_action('admin_post_nopriv_submit_job_application', 'handle_job_application_submission');
add_action('admin_post_submit_job_application', 'handle_job_application_submission');
