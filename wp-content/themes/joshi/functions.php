<?php
register_sidebar(array(
	'name' => 'header',
	'class' => 'panel-heading',
	'description' => 'the panel widget',
	'before_widget' => '<div class="panel-heading">',
	'after_widget' => '</div>',
	
	));
?>
<?php
class panel_Widget extends WP_Widget {
	public function __construct() {
		$panel = array('classname' => 'panel_Widget', 'description' => 'Displays an My widget!' );
		$this->WP_Widget('panel_Widget', 'panel widget', $widget_ops);
	}
	public function form( $instance ) {
		$textarea = $instance['textarea'];   
		?>
			<p>
				<label for="<?php echo $this->get_field_id('textarea'); ?>">Text: 
				<textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" 
     			name="<?php echo $this->get_field_name('textarea'); ?>" rows="7" cols="20" type="textarea" 
     			value="<?php echo attribute_escape($textarea); ?>"><?php echo $textarea ?> </textarea>
				</label>
			</p>
		<?php

	}
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['textarea'] = $new_instance['textarea'];
		return $instance;
	}
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
		$text = empty($instance['textarea']) ? '' : $instance['textarea'];
		echo (isset($before_widget)?$before_widget:'');
		if (!empty($textarea))
		echo wpautop($textarea);
		echo (isset($after_widget)?$after_widget:'');
	}
}
add_action( 'widgets_init', create_function('', 'return register_widget("panel_Widget");') );
?>

