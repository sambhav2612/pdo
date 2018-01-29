<?php
header("Content-type: text/css; charset: UTF-8");

$font_family = "'Zilla Slab', sans-serif";

$label_display = "block";
$label_margin = "5px 0";

$table_border_collapse = "collapse";
$table_border_spacing = "0";

$td_padding = "5px";
$td_border_bottom = "1px solid #aaa";

$a_text_decoration = "none";
?>

body {
	font-family: <?php echo $font_family; ?>;
}

label {
	display: <?php echo $label_display; ?>;
	margin: <?php echo $label_margin; ?>;
}

table {
	border-collapse: <?php echo $table_border_collapse; ?>;
	border-spacing: <?php echo $table_border_spacing; ?>;
}

td, th {
	padding: <?php echo $td_padding; ?>;
	border-bottom: <?php echo $td_border_bottom; ?>;
}

a, 
a:hover, 
a:before, 
a:after {
	text-decoration: <?php echo $a_text_decoration; ?>;
}
