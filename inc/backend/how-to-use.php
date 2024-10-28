<h2 class="apsp-title"><?php _e('Documentation', 'accesspress-pinterest' ) ?></h2>
<p><?php _e('Please go to the following link for the documentation of a plugin', 'accesspress-pinterest' ) ?></p>
<p><a href='https://accesspressthemes.com/documentation/accesspress-pinterest/' target="_blank">View Documentation</a></p>

<h2 class="apsp-title"><?php _e('Pinterest pin it hover Help', 'accesspress-pinterest' ) ?></h2>
<p><?php _e('You can disable the pinterest image hover effect for each images by adding these attributes to images.', 'accesspress-pinterest' ) ?> </p>
<p><?php _e('1) data-pin-no-hover="true"', 'accesspress-pinterest' ) ?></p>
<p><?php _e('2) nopin="nopin"', 'accesspress-pinterest' ) ?></p>
<h4><?php _e('Example:', 'accesspress-pinterest' ) ?> </h4>
<ul class="ul-disc">
    <li>&#60;img src="http://site-url/Penguins-300x225.jpg" alt="Penguins" data-pin-no-hover="true" /></li>
    <li>&#60;img src="http://site-url/Penguins-300x225.jpg" alt="Penguins" nopin="nopin" /></li>
</ul>

<h2 class="apsp-title"><?php _e('Shortcode Help', 'accesspress-pinterest' ) ?></h2>
<h3 class="apsp-sub-title"><?php _e('Follow Button', 'accesspress-pinterest' ) ?></h3>
<p><?php _e('Use the shortcode', 'accesspress-pinterest' ) ?> <code>[apsp-follow-button]</code><?php _e(' to display the Pinterest Follow Button within your content.', 'accesspress-pinterest' ) ?></p>
<p><?php _e('Use the function ', 'accesspress-pinterest' ) ?><code>&lt;?php echo do_shortcode('[apsp-follow-button]'); ?&gt;</code>
    <?php _e('to display within template or theme files.', 'accesspress-pinterest' ) ?></p>

<h4><?php _e('Available Attributes:' , 'accesspress-pinterest' ) ?></h4>
<table class="widefat importers" cellspacing="0" border="1">
    <thead>
        <tr>
            <th><?php _e('Attribute', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Description', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Default', 'accesspress-pinterest' ) ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php _e('name', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Pinterest username', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('pinterest', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td><?php _e('button_label', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Button label', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Follow Pinterest', 'accesspress-pinterest' ) ?></td>
        </tr>
    </tbody>
</table>

<h4><?php _e('Example:' , 'accesspress-pinterest' ) ?></h4>
<ul class="ul-disc">
    <li><code>[apsp-follow-button name='pinterest' button_label='Follow Pinterest']</code></li>
</ul>

<h3 class="apsp-sub-title"><?php _e('Pin Image Button', 'accesspress-pinterest' ) ?></h3>
<p><?php _e('Use the shortcode' , 'accesspress-pinterest' ) ?><code>[apsp-pin-image]</code><?php _e(' to display the Pinterest pin image within your content.', 'accesspress-pinterest' ) ?></p>
<p><?php _e('Use the function' , 'accesspress-pinterest' ) ?><code>&lt;?php echo do_shortcode('[apsp-pin-image]'); ?&gt;</code>
    <?php _e('to display within template or theme files.', 'accesspress-pinterest' ) ?></p>

<h4><?php _e('Available Attributes:', 'accesspress-pinterest' ) ?> </h4>
<table class="widefat importers" cellspacing="0" border="1">
    <thead>
        <tr>
            <th><?php _e('Attribute', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Description', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Default', 'accesspress-pinterest' ) ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php _e('image_url', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the pinterest image url here.', 'accesspress-pinterest' ) ?></td>
            <td>https://www.pinterest.com/pin/434034482809764694/</td>
        </tr>
    </tbody>
</table>

<h4><?php _e('Example: ', 'accesspress-pinterest' ) ?></h4>
<ul class="ul-disc">
    <li><code>[apsp-pin-image image_url='https://www.pinterest.com/pin/434034482809764694/']</code></li>
</ul>

<h3 class="apsp-sub-title"><?php _e('Profile Widget', 'accesspress-pinterest' ) ?></h3>
<p><?php _e('Use the shortcode', 'accesspress-pinterest' ) ?> <code>[apsp-profile-widget]</code> <?php _e('to display the Pinterest pin image within your content.', 'accesspress-pinterest' ) ?></p>
<p><?php _e('Use the function ', 'accesspress-pinterest' ) ?><code>&lt;?php echo do_shortcode('[apsp-profile-widget]'); ?&gt;</code>
    <?php _e('to display within template or theme files.', 'accesspress-pinterest' ) ?></p>

<h4><?php _e('Available Attributes: ', 'accesspress-pinterest' ) ?></h4>
<table class="widefat importers" cellspacing="0" border="1">
    <thead>
        <tr>
            <th><?php _e('Attribute', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Description', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Default', 'accesspress-pinterest' ) ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php _e('profile', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the pinterest profile name.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('pinterest', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td><?php _e('custom_size', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the widget sizes(square, sidebar, header, custom)', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('square', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td colspan="4"><strong><?php _e('The following options will take effect only when size is set to custom, otherwise they will be ignored.', 'accesspress-pinterest' ) ?></strong></td>
        </tr>
        <tr>
            <td><?php _e('image_width', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the image width here. Any number greater than 60.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('92', 'accesspress-pinterest' ) ?></td>
        </tr>

        <tr>
            <td><?php _e('board_height', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the widget height here. Any number greater than 60.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('172', 'accesspress-pinterest' ) ?></td>
        </tr>

        <tr>
            <td><?php _e('board_width', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the widget width here. Any number greater than 130.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('auto', 'accesspress-pinterest' ) ?></td>
        </tr>

    </tbody>
</table>

<h4><?php _e('Example:', 'accesspress-pinterest' ) ?> </h4>
<ul class="ul-disc">
    <li><code>[apsp-profile-widget profile="pinterest" custom_size='custom' image_width="100" board_height="540" board_width="800"]</code></li>
</ul>

<h3 class="apsp-sub-title"><?php _e('Board Widget', 'accesspress-pinterest' ) ?></h3>
<p><?php _e('Use the shortcode', 'accesspress-pinterest' ) ?><code>[apsp-board-widget]</code> <?php _e('to display the Pinterest pin image within your content.', 'accesspress-pinterest' ) ?></p>
<p><?php _e('Use the function ', 'accesspress-pinterest' ) ?><code>&lt;?php echo do_shortcode('[apsp-board-widget]'); ?&gt;</code>
    <?php _e('to display within template or theme files.', 'accesspress-pinterest' ) ?></p>

<h4><?php _e('Available Attributes:', 'accesspress-pinterest' ) ?> </h4>
<table class="widefat importers" cellspacing="0" border="1">
    <thead>
        <tr>
            <th><?php _e('Attribute', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Description', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Default', 'accesspress-pinterest' ) ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php _e('board_url', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the pinterest board url.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('pinterest', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td><?php _e('custom_size', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the widget sizes(square, sidebar, header, custom)', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('square', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td colspan="4"><strong><?php _e('The following options will take effect only when size is set to custom, otherwise they will be ignored.', 'accesspress-pinterest' ) ?></strong></td>
        </tr>
        <tr>
            <td><?php _e('image_width', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the image width here. Any number greater than 60.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('92', 'accesspress-pinterest' ) ?></td>
        </tr>

        <tr>
            <td><?php _e('board_height', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the widget height here. Any number greater than 60.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('172', 'accesspress-pinterest' ) ?></td>
        </tr>

        <tr>
            <td><?php _e('board_width', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the widget width here. Any number greater than 130.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('auto', 'accesspress-pinterest' ) ?></td>
        </tr>

    </tbody>
</table>

<h4><?php _e('Example:', 'accesspress-pinterest' ) ?> </h4>
<ul class="ul-disc">
    <li><code>[apsp-board-widget board_url="http://www.pinterest.com/pinterest/chefs-at-home" custom_size='custom' image_width="100" board_height="540" board_width="800"]</code></li>
</ul>

<h3 class="apsp-sub-title"><?php _e('Latest Pins Widget', 'accesspress-pinterest' ) ?></h3>
<p><?php _e('Use the shortcode', 'accesspress-pinterest' ) ?> <code>[apsp-latest-pins]</code> <?php _e('to display the latest Pinterest pin images within your widget.', 'accesspress-pinterest' ) ?></p>
<p><?php _e('Use the function', 'accesspress-pinterest' ) ?> <code>&lt;?php echo do_shortcode('[apsp-latest-pins]'); ?&gt;</code>
    <?php _e('to display within template or theme files.', 'accesspress-pinterest' ) ?></p>

<h4><?php _e('Available Attributes:', 'accesspress-pinterest' ) ?> </h4>
<table class="widefat importers" cellspacing="0" border="1">
    <thead>
        <tr>
            <th><?php _e('Attribute', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Description', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Default', 'accesspress-pinterest' ) ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php _e('feed_url', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the pinterest url.', 'accesspress-pinterest' ) ?></td>
            <td>https://www.pinterest.com/pinterest</td>
        </tr>
        <tr>
            <td><?php _e('specific_board', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the specific board name here if you want to display for specific board.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Default: none', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td><?php _e('feed_count', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('You can specify the feed counts from here.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('1', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td><?php _e('caption', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('You can enable or disable the image caption from here.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('No', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td><?php _e('show_pinterest_link', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('You can enable or disable the pinterest link from here.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('No', 'accesspress-pinterest' ) ?></td>
        </tr>
    </tbody>
</table>

<h4><?php _e('Example: ', 'accesspress-pinterest' ) ?></h4>
<ul class="ul-disc">
    <li><code>[apsp-latest-pins feed_url='https://www.pinterest.com/pinterest' specific_board='breakfast-favorites' feed_count='5' caption='1' show_pinterest_link='yes']</code></li>
</ul>

<h3 class="apsp-sub-title"><?php _e('Save button', 'accesspress-pinterest' ) ?></h3>
<p><?php _e('Use the shortcode', 'accesspress-pinterest' ) ?> <code>[apsp_save_button]</code> <?php _e('to display the save button to posts/pages.', 'accesspress-pinterest' ) ?></p>
<p><?php _e('Use the function ', 'accesspress-pinterest' ) ?><code>&lt;?php echo do_shortcode('[apsp_save_button]'); ?&gt;</code>
    <?php _e('to display within template or theme files.', 'accesspress-pinterest' ) ?></p>

<h4><?php _e('Available Attributes:', 'accesspress-pinterest' ) ?> </h4>
<table class="widefat importers" cellspacing="0" border="1">
    <thead>
        <tr>
            <th><?php _e('Attribute', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Description', 'accesspress-pinterest' ) ?></th>
            <th><?php _e('Default', 'accesspress-pinterest' ) ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php _e('type', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the save button type(one-image, any-image).', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('default: any-image', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td><?php _e('shape', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the shape of the save button(round, rectangle).', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Default: rectangle', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td><?php _e('size', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the size of the save button(small, large).', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Default: large', 'accesspress-pinterest' ) ?></td>
        </tr>

        <tr>
            <td><?php _e('save_url', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the url where you want to link the save button.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Note: This parameter is required only for type:one-image', 'accesspress-pinterest' ) ?></td>
        </tr>
        <tr>
            <td><?php _e('save_image', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the url of the image where the pin will appear.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Note: This parameter is required only for type:one-image', 'accesspress-pinterest' ) ?></td>
        </tr>

        <tr>
            <td><?php _e('image_description', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the description of the image or link which will describe it.', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Note: This parameter is required only for type:one-image', 'accesspress-pinterest' ) ?></td>
        </tr>

        <tr>
            <td><?php _e('count_position', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Please enter the position of the save button count(above, beside).', 'accesspress-pinterest' ) ?></td>
            <td><?php _e('Note: This parameter is required only for type:one-image', 'accesspress-pinterest' ) ?></td>
        </tr>
    </tbody>
</table>

<h4><?php _e('Example: ', 'accesspress-pinterest' ) ?></h4>
<ul class="ul-disc">
    <li>1. <code>[apsp_save_button type='one-image' shape='rectangle' size='small' save_url='https://www.flickr.com/photos/kentbrew/6851755809' save_image='https://farm8.staticflickr.com/7027/6851755809_df5b2051c9_z.jpg' image_description='Next stop: Pinterest']</code></li>
    <li>2. <code>[apsp_save_button type='any-image' shape='rectangle' size='large']</code></li>
</ul>

<h3 class="apsp-sub-title"><?php _e('Pinterest share button', 'accesspress-pinterest' ) ?></h3>
<p><?php _e('Use the shortcode ', 'accesspress-pinterest' ) ?><code>[apsp_share]</code> <?php _e('to display the Pinterest share button.', 'accesspress-pinterest' ) ?></p>
<p><?php _e('Use the function ', 'accesspress-pinterest' ) ?><code>&lt;?php echo do_shortcode('[apsp_share]'); ?&gt;</code>
    <?php _e('to display within template or theme files.', 'accesspress-pinterest' ) ?></p>
