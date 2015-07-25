<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_admin/header_layout'); ?>
<div class="container">
    <?php echo $views_content; ?>
</div>
<?php $this->load->view('_admin/footer_layout'); ?>