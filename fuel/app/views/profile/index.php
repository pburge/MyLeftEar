<div class="row">
	<aside class="large-3 medium-4 small-12 columns">
		<h5>User Options</h5>
		<ul class="side-nav">
			<li class='active'><?= Html::anchor('profile', 'Name Settings') ?></li>
			<li><?= Html::anchor('profile/patron', 'Become a Patron') ?></li>
		</ul>
	</aside>
		<div class="large-1 medium-1"></div>
	<div class="large-8 medium-7 small-12 columns" role="content">
		<form>
			<fieldset>
				<legend>Name Settings</legend>
				<div class="row">
					<div class="large-6 columns">
						<label>Preferred prefix:</label>
						<input name="checkbox1" type="checkbox"><label for="checkbox1">Mr.</label>
						<input name="checkbox1" type="checkbox"><label for="checkbox1">Ms.</label>
						<input name="checkbox1" type="checkbox"><label for="checkbox1">Mrs.</label>
					</div>
				</div>
				<div class="row">
					<label class="large-6 medium-6 small-6 columns">First Name:
						<input type="text">
					</label>
					<label class="large-6 medium-6 small-6 columns">Last Name:
						<input type="text">
					</label>
				</div>
			</fieldset>
			<fieldset>
				<legend>Email Settings</legend>
				<div class="row">
					<label class="large-12 medium-12 small-12 columns">Current Email:
						<input type="text" disabled value='<?= $auth_user->email ?>'>
					</label>
					<label class="large-12 medium-12 small-12 columns">Updated Email (if applicable):
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

<!-- <hr> <pre><?= var_export($auth_user); ?></pre> -->
