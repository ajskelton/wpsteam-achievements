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
								</tr>
								<tr>
									<td colspan='2'>
										<label for="wpsteamname">Enter your unique URL you selected for your steam account, or your 64bit Steam ID.<br />Example: Lunch_Meat or 76561197963973896</label>
									</td>
								</tr>
								<tr>
									<td>
										<input class="button-primary" type="submit" name="steamname_submit" value="Save" /> 
									</td>
								</tr>								
							</table>

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
								You have completed <?php echo $achievement_count; ?> Team Fortress 2 Achievements.
							</p>
							<ul class="backend-wpsteam-achievements">

							<?php 
								foreach($achievements as $achievement) {
							?>
								<li>
									<img src="<?php echo $achievement['iconClosed']?>" alt="<?php echo $achievement['name']?>">
									<h3><?php echo $achievement['name']; ?></h3>
									<p><?php echo $achievement['description']; ?></p>
									<p class="backend-wpsteam-unlocked">Unlocked<br><?php echo date( 'F jS, Y',$achievement['unlockTimestamp']); ?></p>
								</li>
								<div class="wpsteam-achievement-info">
									<p class="wpsteam-achievement-name">
										<?php echo $achievements[$i]['name'] ?>
									</p>
									<p class="wpsteam-achievement-description">
										<?php echo $achievements[$i]['description'] ?>
									</p>
								</div>
								
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
					
						<h3><span><?php echo $wpsteam_profile['steamID']; ?></span></h3>
						<div class="inside">
							
							<p><img width="100%" class="steam-gravatar" src="<?php echo $wpsteam_profile['avatarFull']; ?>" alt="<?php echo $wpsteam_profile['steamID'] . 's Avatar' ?>"></p>

							<ul class="steam-total-achievements">							

									<li>Achievements: <strong><?php echo $achievement_count; ?></strong></li>
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