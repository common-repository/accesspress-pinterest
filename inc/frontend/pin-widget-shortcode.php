<?php defined('ABSPATH') or die("No script kiddies please!");
$atts_image = isset($atts['image_url']) ? esc_url($atts['image_url']) : 'https://www.pinterest.com/pin/434034482809764694/';
?>
<a data-pin-do="embedPin" href="<?php echo $atts_image; ?>"></a>