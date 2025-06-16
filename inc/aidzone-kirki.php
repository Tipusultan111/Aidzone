<?php
new \Kirki\Panel(
	'aidzone_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Aidzone Options', 'aidzone' ),
		'description' => esc_html__( 'Aidzone theme options', 'aidzone' ),
	]
);


function header_info_section () {
	new \Kirki\Section(
		'header_section_id',
		[
			'title'       => esc_html__( 'Aidzone Header', 'aidzone' ),
			'description' => esc_html__( 'This header is from Aidzone theme', 'aidzone' ),
			'panel'       => 'aidzone_panel_id',
			'priority'    => 160,
		]
	);
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'top_hader_switch',
			'label'       => esc_html__( 'Top Header Switch', 'aidzone' ),
			'description' => esc_html__( 'Top header on/off switch', 'aidzone' ),
			'section'     => 'header_section_id',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'aidzone' ),
				'off' => esc_html__( 'Disable', 'aidzone' ),
			],
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'address_text',
			'label'    => esc_html__( 'Address Text', 'aidzone' ),
			'section'  => 'header_section_id',
			'default'  => esc_html__( 'The queens walk, TSV 3456', 'aidzone' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'address_url',
			'label'    => esc_html__( 'Address URL', 'aidzone' ),
			'section'  => 'header_section_id',
			'default'  => esc_html__( '#', 'aidzone' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'email_address',
			'label'    => esc_html__( 'Email Address', 'aidzone' ),
			'section'  => 'header_section_id',
			'default'  => esc_html__( 'needhelp@mail.com', 'aidzone' ),
			'priority' => 10,
		]
	);
}
header_info_section ();

// social
function header_social_section () {
	new \Kirki\Section(
		'header_social',
		[
			'title'       => esc_html__( 'Header Social', 'aidzone' ),
			'description' => esc_html__( 'Link your social midea account here', 'aidzone' ),
			'panel'       => 'aidzone_panel_id',
			'priority'    => 160,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'fb_id',
			'label'    => esc_html__( 'Facebook', 'aidzone' ),
			'section'  => 'header_social',
			'default'  => esc_html__( '#', 'aidzone' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'ins_id',
			'label'    => esc_html__( 'Instagram', 'aidzone' ),
			'section'  => 'header_social',
			'default'  => esc_html__( '#', 'aidzone' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'tw_id',
			'label'    => esc_html__( 'Twitter', 'aidzone' ),
			'section'  => 'header_social',
			'default'  => esc_html__( '#', 'aidzone' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'pin_id',
			'label'    => esc_html__( 'Pinterest', 'aidzone' ),
			'section'  => 'header_social',
			'default'  => esc_html__( '#', 'aidzone' ),
			'priority' => 10,
		]
	);
}
header_social_section ();
// logo
function header_logo_section () {
	new \Kirki\Section(
		'header_logo_section',
		[
			'title'       => esc_html__( 'Header Logo', 'aidzone' ),
			'description' => esc_html__( 'Upload your logo here', 'aidzone' ),
			'panel'       => 'aidzone_panel_id',
			'priority'    => 160,
		]
	);
	new \Kirki\Field\Image(
		[
			'settings'    => 'logo_url',
			'label'       => esc_html__( 'Logo URL', 'aidzone' ),
			'description' => esc_html__( 'Your logo', 'aidzone' ),
			'section'     => 'header_logo_section',
			'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
		]
	);
	new \Kirki\Field\Image(
		[
			'settings'    => 'search_logo',
			'label'       => esc_html__( 'Search Logo', 'aidzone' ),
			'description' => esc_html__( 'Upload your search logo', 'aidzone' ),
			'section'     => 'header_logo_section',
			'default'     => get_template_directory_uri().'/assets/img/logo/logo-white.png',
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'header_btn_text',
			'label'    => esc_html__( 'Button Text', 'aidzone' ),
			'section'  => 'header_logo_section',
			'default'  => esc_html__( 'Explore More', 'aidzone' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'header_btn_url',
			'label'    => esc_html__( 'Button URL', 'aidzone' ),
			'section'  => 'header_logo_section',
			'default'  => esc_html__( '#', 'aidzone' ),
			'priority' => 10,
		]
	);
	
}
header_logo_section ();