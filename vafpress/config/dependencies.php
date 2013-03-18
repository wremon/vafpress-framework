<?php

return array(

	////////////////////////////////////////////////
	// Scripts and Styles Dependencies Definition //
	////////////////////////////////////////////////

	/**
	 * jQuery UI Theme
	 */
	'jqui_theme' => ($jqui_theme = 'smoothness'),

	/**
	 * Scripts.
	 */
	'scripts' => array(
		'always' => array('jquery', 'prefixfree-js', 'scrollspy-js', 'tipsy-js', 'jquery-typing'),
		'paths' => array(
			'jquery' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery-1.8.3.min.js',
				'deps'     => array(),
				'ver'      => '1.8.3'
			),
			'colorpicker-js' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/colorpicker.js',
				'deps'     => array('jquery'),
				'ver'      => false
			),
			'tipsy-js' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.tipsy.js',
				'deps'     => array('jquery'),
				'ver'      => '1.0.0a'
			),
			'chosen-jquery' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/chosen.jquery.min.js',
				'deps'     => array('jquery'),
				'ver'      => '0.9.11'
			),
			'prefixfree-js' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/prefixfree.min.js',
				'deps'     => array(),
				'ver'      => '1.0.7'
			),
			'scrollspy-js' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery-scrollspy.js',
				'deps'     => array('jquery'),
				'ver'      => false
			),
			'jquery-ui-core' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.core.js',
				'deps'     => array(),
				'ver'      => '1.9.2'
			),
			'jquery-ui-widget' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.widget.js',
				'deps'     => array(),
				'ver'      => '1.9.2'
			),
			'jquery-ui-mouse' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.mouse.js',
				'deps'     => array('jquery-ui-widget'),
				'ver'      => '1.9.2'
			),
			'jquery-ui-slider' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.slider.js',
				'deps'     => array('jquery', 'jquery-ui-core', 'jquery-ui-widget', 'jquery-ui-mouse'),
				'ver'      => '1.9.2'
			),
			'jquery-ui-datepicker' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.datepicker.js',
				'deps'     => array('jquery', 'jquery-ui-core', 'jquery-ui-widget'),
				'ver'      => '1.9.2'
			),
			'jquery-typing' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.typing-0.2.0.min.js',
				'deps'     => array('jquery'),
				'ver'      => '0.2'
			),
			'ace-editor' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/ace/ace.js',
				'deps'     => array(),
				'ver'      => '1.0.0'
			),
			'shared-js' => array(
				'path'     => VP_PUBLIC_URL . '/js/shared.js',
				'deps'     => array(),
				'ver'      => '1.1',
			),
			'jquery-chosen-sortable' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery-chosen-sortable.js',
				'deps'     => array('jquery', 'jquery-ui-sortable', 'chosen-jquery'),
				'ver'      => '1.0.0',
			),
		),
	),

	/**
	 * Styles.
	 */
	'styles' => array(
		'always' => array('tipsy-css', 'font-awesome'),
		'paths' => array(
			array(
				'name' => 'colorpicker-css',
				'path' => VP_PUBLIC_URL . '/css/vendor/colorpicker.css',
				'deps' => array()
			),
			array(
				'name' => 'tipsy-css',
				'path' => VP_PUBLIC_URL . '/css/vendor/tipsy.css',
				'deps' => array()
			),
			array(
				'name' => 'chosen-css',
				'path' => VP_PUBLIC_URL . '/css/vendor/chosen.css',
				'deps' => array()
			),
			array(
				'name' => 'jqui',
				'path' => VP_PUBLIC_URL . '/css/vendor/jqueryui/themes/' . $jqui_theme . '/jquery-ui-1.9.2.custom.min.css',
				'deps' => array()
			),
			array(
				'name' => 'font-awesome',
				'path' => VP_PUBLIC_URL . '/css/vendor/font-awesome.min.css',
				'deps' => array()
			),
		),
	),

	/**
	 * Rules for dynamic loading of dependencies, load only what needed.
	 */
	'rules'   => array(
		'color'       => array( 'js' => array('colorpicker-js'), 'css' => array('colorpicker-css') ),
		'select'      => array( 'js' => array('chosen-jquery'), 'css' => array('chosen-css') ),
		'multiselect' => array( 'js' => array('chosen-jquery'), 'css' => array('chosen-css') ),
		'slider'      => array( 'js' => array('jquery-ui-slider'), 'css' => array('jqui') ),
		'date'        => array( 'js' => array('jquery-ui-datepicker'), 'css' => array('jqui') ),
		'codeeditor'  => array( 'js' => array('ace-editor'), 'css' => array() ),
		'sorter'      => array( 'js' => array('jquery-chosen-sortable'), 'css' => array('chosen-css', 'jqui') ),
	)

);

/**
 * EOF
 */