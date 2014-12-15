<?php
/**
 * Plugin Name:joshi
 * Plugin URI: http://webcodingplace.com/bootstrap-panels/
 * Description: add yopur own widget
 */
class joshi_widget extends WP_Widget {
	
	public function __construct() {
		$panel = array('classname' => 'joshi_Widget', 'description' => 'Displays an My widget!' );
		$this->WP_Widget('joshi_Widget', 'joshi widget', $widget_ops);
	}
	public function form( $instance ) {

		$image_url=$instance['image_url'];
		$title= $instance['title'];
		$textarea = $instance['textarea'];   
		?>
			<p>
				<label for="<?php echo $this->get_field_id('image_url'); ?>">Image URL: 
                	<input class="widefat" id="<?php echo $this->get_field_id('image_url'); ?>" name="<?php echo $this->get_field_name('image_url'); ?>" type="text" value="<?php echo attribute_escape($image_url); ?>" />
				</label>
			</p>
			 <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">Title: 
                	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>"<?php echo $title; ?> />
                </label>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('textarea'); ?>">Text: 
                <textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>" rows="7" cols="20" ><?php echo $textarea; ?></textarea>
                </label>
            </p>
        <?php
    }
	function update($new_instance, $old_instance) {
        return $new_instance;
    }
    function widget($args, $instance) { 
        extract( $args );
        $image_url = strip_tags($instance['image_url']);
        $title = strip_tags($instance['title']);
        $textarea = strip_tags($instance['textarea']);

        ?>

            <div class="panel panel-default">

                <span>
                    <img class="displayed" src="<?php echo $image_url; ?>" />
                </span> 

                <h4 class="title">
                    <?php echo $title; ?></a>
                </h4>

                <p>
                    <?php echo wpautop($textarea); ?>
                </p> 

            </div> 

        <?php
     }
     }
 add_action( 'widgets_init', create_function('', 'return register_widget("joshi_Widget");') );

 ?>