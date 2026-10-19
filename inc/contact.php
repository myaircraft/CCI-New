<?php
/**
 * Contact form handler for the Info Page "contact" block. Posts to admin-post.php, checks a nonce and a
 * honeypot field, and emails the sales address. While the site asks search engines not to index it
 * (a staging copy), messages go to the site admin instead, so test submissions never reach the company.
 */

if (!defined('ABSPATH')) exit;

function cc_contact_redirect($status, $code = '1') {
    $back = wp_get_referer() ?: home_url('/contact-us/');
    $back = remove_query_arg(['sent', 'error'], $back);
    wp_safe_redirect(add_query_arg($status, $code, $back) . '#contact-form');
    exit;
}

function cc_handle_contact() {
    $nonce = isset($_POST['cc_contact_nonce']) ? sanitize_text_field(wp_unslash($_POST['cc_contact_nonce'])) : '';
    if (!wp_verify_nonce($nonce, 'cc_contact')) cc_contact_redirect('error', '1');
    if (!empty($_POST['cc_website'])) cc_contact_redirect('sent'); // honeypot filled: pretend success

    $ts = (int) ($_POST['cc_ts'] ?? 0);
    if ($ts && time() - $ts < 3) cc_contact_redirect('error', '4'); // submitted faster than a person can type

    $name    = sanitize_text_field(wp_unslash($_POST['cc_name'] ?? ''));
    $email   = sanitize_email(wp_unslash($_POST['cc_email'] ?? ''));
    $phone   = sanitize_text_field(wp_unslash($_POST['cc_phone'] ?? ''));
    $company = sanitize_text_field(wp_unslash($_POST['cc_company'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['cc_message'] ?? ''));
    if ($name === '' || !is_email($email) || $message === '') cc_contact_redirect('error', '2');

    $to = get_option('blog_public') ? cc_content('company.email') : get_option('admin_email');
    $to = apply_filters('cc_contact_recipient', $to);
    $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nCompany: {$company}\n\n{$message}\n";
    $headers = ['Reply-To: ' . $name . ' <' . $email . '>'];
    $sent = wp_mail($to, 'Website inquiry from ' . $name, $body, $headers);
    $sent ? cc_contact_redirect('sent') : cc_contact_redirect('error', '3');
}
add_action('admin_post_nopriv_cc_contact', 'cc_handle_contact');
add_action('admin_post_cc_contact', 'cc_handle_contact');
