<div class="row">
	<aside class="large-3 medium-3 small-12 columns">
		<ul class="side-nav">
			<li class='active'><?= Html::anchor('profile', 'Settings') ?></li>
			<li><?= Html::anchor('', 'Your pieces') ?></li>
		</ul>
	</aside>
		<div class="large-1 medium-1"></div>
	<div class="large-9 medium-9 small-12 columns" role="content">
		<?php echo Form::open(); ?>
			<fieldset>
				<legend>Name Settings</legend>
				<div class="row">
					<label class="large-6 medium-6 small-6 columns">First Name:
						<input type="text">
					</label>
					<label class="large-6 medium-6 small-6 columns">Last Name:
						<input type="text">
					</label>
					<div class="large-12 medium-12 small-12 columns">
						<button type="submit" class='button small show-for-medium-up'>Save Info</button>
						<button type="submit" class='button expand show-for-small-only'>Save Info</button>
					</div>
				</div>
			</fieldset>
		<?php echo Form::close(); ?>

		<?php echo Form::open(); ?>
			<fieldset>
				<legend>Email Settings</legend>
				<div class="row">
					<label class="large-12 medium-12 small-12 columns">Current Email:
						<input type="text" disabled value='<?= $auth_user->email ?>'>
					</label>
					<label class="large-12 medium-12 small-12 columns">Updated Email (if applicable):
						<input type="text">
					</label>
					<div class="large-12 medium-12 small-12 columns">
						<button type="submit" class='button small show-for-medium-up'>Save Info</button>
						<button type="submit" class='button expand show-for-small-only'>Save Info</button>
					</div>
				</div>
			</fieldset>
		<?php echo Form::close(); ?>
		<?php echo Form::open(array('enctype' => 'multipart/form-data','id' => 'imgForm')); ?>

			<fieldset>
				<legend>Avatar Settings</legend>
				<div class="row">
					<div class="large-6 medium-6 small-6 columns">
						<?= Form::file('post_img', array('id' => 'imgFile')); ?>

						<!-- <input id="imgFile" type="file" />  -->
						<!-- <div id='uploadedImg'></div><br> -->
					</div>

					<div class="large-6 medium-6 small-6 columns">
						<div id='uploadedImg'></div><br>
					</div>
					<div class="large-12 medium-12 small-12 columns">
						<button type="submit" class='button small show-for-medium-up'>Save Info</button>
						<button type="submit" class='button expand show-for-small-only'>Save Info</button>
					</div>
				</div>
			</fieldset>
		<?php echo Form::close(); ?>
	</div>
</div>