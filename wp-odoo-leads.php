<?php
/**
 * Plugin Name: WP Odoo Leads
 * Description: It will connect your WordPress form with your Odoo ERP and create a lead on it.
 * Version: 1.0
 * Author: Cedric Staces
 * Author URI: https://staces.be/
 * Requires PHP: 8.0
 */

require_once(__DIR__.'/inc/odoo-connexion.php');

function wp_odoo_leads_admin_init(){
    $url = "";
    $db = "";
    $username = "";
    $password = "";

    new OdooConnexion($url, $db, $username, $password);
}
add_action('admin_init', 'wp_odoo_leads_admin_init');
