<?php
/**
 * Plugin Name: Bootstrap Panels
 * Plugin URI: http://webcodingplace.com/bootstrap-panels/
 * Description: A simple way to create bootstrap panels in non-bootstrap sites .
 * Version: 1.6.3
 * Author: Rameez
 * Author URI: http://webcodingplace.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

class nm_bspanels extends WP_Widget {

	function __construct() {
		$param = array(
			'description' 	=> 	'Creates bootstrap panels',
			'name'			=>	'Bootstrap Panels'
		);

		parent::__construct('nm_panels','',$param);
		
		add_shortcode('bspanel',array($this,'panel_in_page'));
	}
	
	
	public function form($instance) {
		extract($instance);
	
	?>
	
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">Panel Heading: </label>
		<input class="widefat"
			id="<?php echo $this->get_field_id('title'); ?>"
			name="<?php echo $this->get_field_name('title'); ?>"
			value="<?php if (isset($title)) echo esc_attr($title); ?>"
		/>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id('content'); ?>">Panel Content: </label>
		<textarea class="widefat"
			rows="5"
			id="<?php echo $this->get_field_id('content'); ?>"
			name="<?php echo $this->get_field_name('content'); ?>"><?php if (isset($content)) echo esc_attr($content); 
		?></textarea>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id('color'); ?>">Panel Color: </label>
		<select class="widefat" id="<?php echo $this->get_field_id('color'); ?>" name="<?php echo $this->get_field_name('color'); ?>">
			<option value="default"<?php if($color == 'default'){echo 'selected';} ?>>Default</option>
			<option value="primary" <?php if($color == 'primary'){echo 'selected';} ?>>Blue</option>
			<option value="success" <?php if($color == 'success'){echo 'selected';} ?>>Light Green</option>
			<option value="warning"<?php if($color == 'warning'){echo 'selected';} ?>>Light Gold</option>
			<option value="info"<?php if($color == 'info'){echo 'selected';} ?>>Light Blue</option>
			<option value="danger"<?php if($color == 'danger'){echo 'selected';} ?>>Light Pink</option>
		</select>
	</p>
	<?php

	}

	public function widget($args, $instance) {
	
		extract($args);
		extract($instance);
	?>
	<style>
	<?php 
		include_once('panels-style.php');
	?>
	</style>
		<div class="panel panel-<?php echo $color; ?>">
		  <div class="panel-heading">
		    <h3 class="panel-title"><?php echo $title; ?></h3>
		  </div>
		  <div class="panel-body">
		    <?php echo $content; ?>
		  </div>
		</div>

	<?php
	}
	
	public function panel_in_page($atts, $contents){
	?>
	<style><?php include_once('panels-style.php'); ?></style>
	<?php
		if(!isset($atts['title'])) { $atts['title'] = 'Set heading by writing title in shortcode';}
		return '<div class="panel panel-'. $atts['type'] .'">
		  <div class="panel-heading">
		    <h3 class="panel-title">'. $atts['title'] . '</h3>
		  </div>
		  <div class="panel-body">
		    '. $contents .'
		  </div>
		</div>';	
	}
	
}

add_action ('widgets_init','nm_register_bspanels');

function nm_register_bspanels(){
	register_widget('nm_bspanels');
}
 ?>