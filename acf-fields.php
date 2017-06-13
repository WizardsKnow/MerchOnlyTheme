<?php
	if( function_exists('acf_add_local_field_group') ) :

	acf_add_local_field_group(array (
		'key' => 'group_593df25716050',
		'title' => 'Theme Colors',
		'fields' => array (
			array (
				'key' => 'field_593df25cd1496',
				'label' => 'Primary Color',
				'name' => 'primary_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#888',
			),
			array (
				'key' => 'field_593df26bd1497',
				'label' => 'Secondary Color',
				'name' => 'secondary_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#000',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-theme-options',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array (
		'key' => 'group_593df7b76d57e',
		'title' => 'Header Height',
		'fields' => array (
			array (
				'key' => 'field_593df7c1cf5fb',
				'label' => 'Desktop Height',
				'name' => 'desktop_height',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 75,
				'placeholder' => '',
				'prepend' => '',
				'append' => 'px',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_593df7e7cf5fc',
				'label' => 'Mobile Height',
				'name' => 'mobile_height',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 75,
				'placeholder' => '',
				'prepend' => '',
				'append' => 'px',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-theme-options',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array (
		'key' => 'group_593df896d6d63',
		'title' => 'Logo',
		'fields' => array (
			array (
				'key' => 'field_593df89b2d061',
				'label' => 'Width',
				'name' => 'width',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 50,
				'placeholder' => '',
				'prepend' => '',
				'append' => 'px',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-theme-options',
				),
			),
		),
		'menu_order' => 2,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array (
		'key' => 'group_58d8094d9d251',
		'title' => 'Countdown Timer',
		'fields' => array (
			array (
				'key' => 'field_58d807f5bf9e2',
				'label' => 'Countdown',
				'name' => 'countdown',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => 'Active',
				'ui_off_text' => 'Inactive',
			),
			array (
				'key' => 'field_58d80827bf9e3',
				'label' => 'Countdown Message',
				'name' => 'countdown_message',
				'type' => 'text',
				'instructions' => 'Character Limit: 32',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_58d807f5bf9e2',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => 32,
			),
			array (
				'key' => 'field_58d8084abf9e4',
				'label' => 'Countdown ID',
				'name' => 'countdown_id',
				'type' => 'number',
				'instructions' => 'Make sure this matches the ID of your timer in Wow Countdowns.',
				'required' => 1,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_58d807f5bf9e2',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-theme-options',
				),
			),
		),
		'menu_order' => 3,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array (
		'key' => 'group_58dd55f402382',
		'title' => 'Social Media',
		'fields' => array (
			array (
				'key' => 'field_59372052f8746',
				'label' => 'Links',
				'name' => 'links',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array (
					array (
						'key' => 'field_5937206bf8747',
						'label' => 'Link',
						'name' => 'link',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array (
						'key' => 'field_59372081f8748',
						'label' => 'Icon',
						'name' => 'icon',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array (
							'facebook' => 'Facebook',
							'google-plus' => 'Google+',
							'instagram' => 'Instagram',
							'twitter' => 'Twitter',
							'youtube-play' => 'YouTube',
						),
						'default_value' => array (
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'return_format' => 'value',
						'placeholder' => '',
					),
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-theme-options',
				),
			),
		),
		'menu_order' => 4,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	endif;
?>