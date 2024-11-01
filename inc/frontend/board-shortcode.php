<?php defined('ABSPATH') or die("No script kiddies please!");
$board_url      = isset($board_attr['board_url']) ? esc_url($board_attr['board_url']) : 'http://www.pinterest.com/pinterest/pin-pets/';
$custom_size    = isset($board_attr['custom_size']) ? esc_attr($board_attr['custom_size']) : 'square';

switch ($custom_size) {
    case 'square':
        $image_width = '80';
        $board_height = '320';
        $board_width = '400';
        break;

    case 'sidebar':
        $image_width = '60';
        $board_height = '800';
        $board_width = '150';
        break;

    case 'header':
        $image_width = '115';
        $board_height = '120';
        $board_width = '900';
        break;

    case 'custom':
        $image_width = isset($board_attr['image_width']) ? esc_attr($board_attr['image_width']) : '80';
        $board_height = isset($board_attr['board_height']) ? esc_attr($board_attr['board_height']) : '320';
        $board_width = isset($board_attr['board_width']) ? esc_attr($board_attr['board_width']) : '400';
        break;

    default:
        $image_width = isset($board_attr['image_width']) ? esc_attr($board_attr['image_width']) : '80';
        $board_height = isset($board_attr['board_height']) ? esc_attr($board_attr['board_height']) : '320';
        $board_width = isset($board_attr['board_width']) ? esc_attr($board_attr['board_width']) : '400';
        break;
}
?>
<a data-pin-do="embedBoard" href="<?php echo $board_url; ?>" data-pin-scale-width="<?php echo $image_width; ?>" data-pin-scale-height="<?php echo $board_height; ?>" data-pin-board-width="<?php echo $board_width; ?>"></a>