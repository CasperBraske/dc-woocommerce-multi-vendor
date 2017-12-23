<?php
/**
 * The template for displaying vendor dashboard
 *
 * Override this template by copying it to yourtheme/dc-product-vendor/shortcode/vendor_dashboard.php
 *
 * @author 	WC Marketplace
 * @package 	WCMp/Templates
 * @version     2.3.0
 */
if (!defined('ABSPATH')) {
    // Exit if accessed directly
    exit;
}
global $WCMp;

do_action('before_wcmp_vendor_dashboard');

//wc_print_notices();
$WCMp->template->get_template('vendor-dashboard/dashboard-header.php');

do_action('wcmp_vendor_dashboard_navigation', array());
?>
<div id="page-wrapper" class="side-collapse-container">
    <div id="current-endpoint-title-wrapper" class="current-endpoint-title-wrapper">
        <div class="current-endpoint">
            <?php echo $WCMp->vendor_hooks->wcmp_create_vendor_dashboard_breadcrumbs($WCMp->endpoints->get_current_endpoint()); ?>
        </div>
    </div>
    <!-- /.row -->
    <div class="content-padding gray-bkg <?php echo $WCMp->endpoints->get_current_endpoint() ? $WCMp->endpoints->get_current_endpoint() : 'dashboard'; ?>">
        <div class="notice-wrapper">
            <?php wc_print_notices(); ?>
        </div>
        <div class="row">
            <?php do_action('wcmp_vendor_dashboard_content'); ?>
        </div>
    </div>
</div>

<?php
$WCMp->template->get_template('vendor-dashboard/dashboard-footer.php');

do_action('after_wcmp_vendor_dashboard');
