<div class="row">
	<aside class="large-3 medium-4 small-12 columns">
		<h5>User Options</h5>
		<ul class="side-nav">
			<li><?= Html::anchor($auth_user->profile_url(), 'Name Settings') ?></li>
			<li class='active'><?= Html::anchor($auth_user->profile_email(), 'Email Settings') ?></li>
			<li><a href="#">Become a Patron</a></li>
		</ul>
	</aside>
 	<div class="large-1 medium-1"></div>
	<div class="large-8 medium-7 small-12 columns" role="content">
		<form>
			<fieldset>
				<legend>Email Settings</legend>
				<div class="row">
					<label class="large-12 medium-12 small-12 columns">Current Email:
						<input type="text" disabled>
					</label>
					<label class="large-12 medium-12 small-12 columns">Updated Email:
						<input type="text">
					</label>
				</div>
			</fieldset>
		</form>
		<button type="submit" class='button small show-for-medium-up'>Save Info</button>
		<button type="submit" class='button expand show-for-small-only'>Save Info</button>
	</div>
 </div>
 <br>
 <br>
 <br>
 <br>
<!-- <hr> <pre><?= var_export($profile_user); ?></pre> -->
