<?php
// Register ACF Fields
if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array (
        'key' => 'group_5683294846afd',
        'title' => 'Defaults',
        'fields' => array (
            array (
                'key' => 'field_5683294d29566',
                'label' => 'Default Featured Image',
                'name' => 'mtm_default_featured_image',
                'type' => 'image',
                'instructions' => 'Optional: Set a default featured image for all posts without one',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_56a16a776c2b8',
                'label' => 'Social Accounts',
                'name' => 'mtm_default_social_accounts',
                'type' => 'repeater',
                'instructions' => 'Optional: Add all your social networks here. Type the name of the social network and the URL of your profile.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_56a16aaa6c2b9',
                'min' => '',
                'max' => '',
                'layout' => 'block',
                'button_label' => 'Add Social Network',
                'sub_fields' => array (
                    array (
                        'key' => 'field_56a16aaa6c2b9',
                        'label' => 'Social Network Name',
                        'name' => 'mtm_default_social_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => 40,
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => 'Twitter',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_56a16ff56c2ba',
                        'label' => 'Social Network URL',
                        'name' => 'mtm_default_social_url',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => 60,
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => 'http://twitter.com/marktimemedia',
                    ),
                ),
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-defaults',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
    acf_add_local_field_group(array (
        'key' => 'group_55fb003aad8b7',
        'title' => 'Footer Settings',
        'fields' => array (
            array (
                'key' => 'field_55fb00432e091',
                'label' => 'Footer Logo',
                'name' => 'mtm_footer_logo',
                'type' => 'image',
                'instructions' => 'Upload an image to be used as your footer logo. If none is selected, this field will be ignored in the layout.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_55fb007f2e092',
                'label' => 'Copyright Text',
                'name' => 'mtm_copyright_text',
                'type' => 'text',
                'instructions' => 'Text that will show up next to the copyright year. If none is entered, this field will be ignored in the layout.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_55fb01cfad6bf',
                'label' => 'Additional Text',
                'name' => 'mtm_additional_text',
                'type' => 'wysiwyg',
                'instructions' => 'Additional text, such as an address, contact info, or disclaimer. If none is entered, this field will be ignored in the layout.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 1,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-footer',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
    acf_add_local_field_group(array (
        'key' => 'group_55fafefc457dc',
        'title' => 'Header Settings',
        'fields' => array (
            array (
                'key' => 'field_55faff1263314',
                'label' => 'Header Logo',
                'name' => 'mtm_header_logo',
                'type' => 'image',
                'instructions' => 'Upload or select an image to be used as the header logo. If none is selected, the site name will be used instead.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_55faff1263314b',
                'label' => 'Mobile Logo',
                'name' => 'mtm_mobile_logo',
                'type' => 'image',
                'instructions' => 'Upload or select an image to be used as the mobile logo, which will replace the header logo on small screens. If none is selected, the original header logo (or site name) will be used.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_56a171cab07fa',
                'label' => 'Header Text',
                'name' => 'mtm_header_text',
                'type' => 'wysiwyg',
                'instructions' => 'Extra text, like a phone number, address, or other information to show in the header. If none is entered, this field will be ignored in the layout.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-header',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
    // acf_add_local_field_group(array (
    // 	'key' => 'group_5993acca39c49',
    // 	'title' => 'Emails',
    // 	'fields' => array (
    // 		array (
    // 			'key' => 'field_5993ade79b4fc',
    // 			'label' => 'Default Email',
    // 			'name' => 'mtm_default_email',
    // 			'type' => 'email',
    // 			'instructions' => 'The email address that will show up on WordPress-generated emails (defaults to wordpress@your-domain.com)',
    // 			'required' => 0,
    // 			'conditional_logic' => 0,
    // 			'wrapper' => array (
    // 				'width' => '',
    // 				'class' => '',
    // 				'id' => '',
    // 			),
    // 			'default_value' => '',
    // 			'placeholder' => '',
    // 			'prepend' => '',
    // 			'append' => '',
    // 		),
    // 		array (
    // 			'key' => 'field_5993adf79b4fd',
    // 			'label' => 'Default "From" Name',
    // 			'name' => 'mtm_default_from_name',
    // 			'type' => 'text',
    // 			'instructions' => 'The "From" name that will show up on WordPress-generated emails (defaults to WordPress)',
    // 			'required' => 0,
    // 			'conditional_logic' => 0,
    // 			'wrapper' => array (
    // 				'width' => '',
    // 				'class' => '',
    // 				'id' => '',
    // 			),
    // 			'default_value' => '',
    // 			'placeholder' => '',
    // 			'prepend' => '',
    // 			'append' => '',
    // 			'maxlength' => '',
    // 		),
    // 	),
    // 	'location' => array (
    // 		array (
    // 			array (
    // 				'param' => 'options_page',
    // 				'operator' => '==',
    // 				'value' => 'acf-options-emails',
    // 			),
    // 		),
    // 	),
    // 	'menu_order' => 0,
    // 	'position' => 'normal',
    // 	'style' => 'seamless',
    // 	'label_placement' => 'top',
    // 	'instruction_placement' => 'label',
    // 	'hide_on_screen' => '',
    // 	'active' => 1,
    // 	'description' => '',
    // ));
    endif;