<div class="row sp-list-users">
	<?php foreach( $instance['items'] as $item ):?>
		<?php

			$image = wp_get_attachment_url( $item['avatar']);

			$user_classes = array( 'user' );
			if( isset( $item['description'] ) && $item['description'] ){
				array_push( $user_classes, 'has-layer3' );
			}

		?>
	<div class="<?php _e( implode( ' ', $user_classes ) );?>">
		<div class="layer1">
			<div class="user-avatar" style="background-image:url('<?php echo $image;?>');"></div>
		</div>
		<div class="layer2">
			<div class="user-name"><?php echo $item['name'];?></div>
			<div class="user-designation"><?php echo $item['designation'];?></div>
		</div>
		<?php if( isset( $item['description'] ) && $item['description'] ):?>
		<div class="layer3"><?php echo $item['description'];?></div>
		<?php endif;?>
	</div>
	<?php endforeach;?>
</div>
