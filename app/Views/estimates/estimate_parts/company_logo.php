<?php
$estimate_logo = "estimate_logo";
if (!get_setting($estimate_logo)) {
    $estimate_logo = "invoice_logo";
}
?>

<img class="max-logo-size" src="<?php echo get_file_from_setting($estimate_logo, get_setting('only_file_path')); ?>" />