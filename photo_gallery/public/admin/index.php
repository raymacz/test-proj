<?php
//require_once '../../includes/functions.php';
require_once '../../includes/initialize.php';
//require_once '../../includes/session.php';
//global $Session;// added by rbtm
if (!$Session->is_logged_in()) {redirect_to("login.php"); }
?>
<?php // include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.'admin_header.php');
include_layout_template('admin_header.php');
?>
    <h2>Menu</h2>
    </div>
<?php include_layout_template('admin_footer.php'); ?>
