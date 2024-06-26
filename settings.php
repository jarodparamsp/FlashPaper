<?php
	defined('_DIRECT_ACCESS_CHECK') or exit();

	$settings = [
		'site_title' => 'Paratech MSP | One-time Encryption',
		'return_full_url' => true,
		'base_url' => '', # https://mydomain.com/flashpaper
		'max_secret_length' => 3000,
		'announcement' => '',
		'prune' => [
			'enabled' => true,
			'min_days' => 365,
			'max_days' => 730
		],
		'messages' => [
			'error_secret_too_long' => 'Input length too long',

			'submit_secret_header' => 'Create A Self-Destructing Message',
			'submit_secret_subheader' => '',
			'submit_secret_button' => 'Encrypt Message',

			'view_code_header' => 'One-Time Encrypted URL',
			'view_code_subheader' => 'Share this URL via email, chat, or another messaging service. It will be destroyed once it has been viewed.',

			'confirm_view_secret_header' => 'View this Message?',
			'confirm_view_secret_button' => 'View Message',

			'view_secret_header' => 'One-Time Encrypted Message',
			'view_secret_subheader' => 'This message has been destroyed',
		]
	];
?>
