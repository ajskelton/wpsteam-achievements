<?php 		

	echo $before_widget;
	echo $before_title . $title . $after_title;	

?>
<ul class="steam-achievements">
		<?php
			for( $i = 0; $i < $num_achievements; $i++ ):
		?>
		<li class="achievement <?php echo $achievement_width; ?>">
			<img src="<?php echo $achievements[$i]['iconClosed']?>" alt="<?php echo $achievements['name']?>">
		
		<?php if( $display_tooltip == '1'): ?>
		<div class="wpsteam-achievement-info">
			<p class="wpsteam-achievement-name">
				<?php echo $achievements[$i]['name'] ?>
			</p>
			<p class="wpsteam-achievement-description">
				<?php echo $achievements[$i]['description'] ?>
			</p>
		</div>
		<?php endif; ?>
	</li>
								
<?php endfor; ?>
</ul>


<?php
	echo $after_widget; 

?>