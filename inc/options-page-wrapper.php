<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>Steam Achievements Plugin</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">

					<?php if( !isset( $wpsteamname ) || $wpsteamname == '' ): ?>

					<div class="postbox">
					
						<h3><span>Let's Get Started!</span></h3>
						<div>
							
							<form name="wpsteamname_form" method="post" action="">							

							<input type="hidden" name="wpsteamname_form_submitted" value="Y">

							<table class="form-table">
								<tr>
									<td>
										<label for="wpsteamname">Steam Profile Name</label>
									</td>
									<td>
										<input name="wpsteamname" id="wpsteamname" type="text" value="" class="regular-text" />
									</td>
									<td>
										<label for="wpsteamname">Enter your unique URL you selected for your steam account.</label>
									</td>
								</tr>								
							</table>

							<p>
								<input class="button-primary" type="submit" name="steamname_submit" value="Save" /> 
							</p>

							</form>

						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->

					<?php else: ?>

					<!-- <pre><code><?php var_dump($wpsteam_tf2_xml); ?></code></pre> -->

					<div class="postbox">
					
						<h3><span>Most Recent Badges</span></h3>
						<div class="inside clearfix">

							<!-- This uses the GetPlayerAchievements API -->
							<p>
								You have completed # Team Fortress 2 Achievements.
							</p>
							<ul class="steam-achievements">

							<?php 
								foreach($achievements as $achievement) {
							?>
								<li>
									<img src="<?php echo $achievement['iconClosed']?>" alt="<?php echo $achievement['name']?>">
									<p><?php echo $achievement['name'] ?></p>
								</li>
								
							<?php } ?>
							</ul> <!-- end .steam-achievements -->
						</div> <!-- end .inside clearfix -->
					</div> <!-- end .postbox -->

					<?php endif; ?>

				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<?php if( isset( $wpsteamname ) && $wpsteamname != '' ): ?>

					<div class="postbox">
					
						<h3><span><?php echo $wpsteamname ?></span></h3>
						<div class="inside">
							
							<p><img width="100%" class="steam-gravatar" src="<?php echo $plugin_url . '/images/steam_gravatar.jpg'; ?>" alt="Lunch Meats Gravatar"></p>

							<ul class="steam-total-achievements">							

									<li>Achievements: <strong>#</strong></li>
									<li>Percentage Bar</li>

							</ul>

							<form name="wpsteamname_form" method="post" action="">							

							<input type="hidden" name="wpsteamname_form_submitted" value="Y">

							<p>
								<label for="wpsteamname">Steam URL Name</label>
							</p>
							<p>
								<input name="wpsteamname" id="wpsteamname" type="text" value="<?php echo $wpsteamname; ?>" />
								<input class="button-primary" type="submit" name="wpsteamname_usename_submit" value="Update" /> 
							</p>

							</form>

						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
					<?php endif; ?>

				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->