<div class="row">
	<div class="large-12 columns">
		<div class='large-1 medium-1 small-2 columns'><p></p></div>
		<div class="large-4 medium-5 small-10 columns">
			<br>
			<h3 class=''>Register for free today!</h3>
			<ul class='text-left no-bullet'>
				<li>Place holder stuff.</li>
				<li>Place holder stuff.</li>
				<li>Place holder stuff.</li>
				<li>Place holder stuff.</li>
				<li>Place holder stuff.</li>
				<li>Place holder stuff.</li>
			</ul>
		</div>

		<div class="large-7 medium-6 small-12 columns">
			<br>
			<?php echo Form::open(['id' => 'body_form']) ?>
			<br>
				<div class="large-10 medium-10 small-11">
					<div class="row">
						<div class="large-4 small-4 columns">
							<label for="right-label" class="right inline">Username</label>
						</div>
						<div class="large-8 small-8 columns">
							<input name='email' type="email" class="form-control" placeholder="email" autofocus>
						</div>
					</div>
				</div>
				<div class="large-10 medium-10 small-11">
					<div class="row">
						<div class="large-4 small-4 columns">
							<label for="right-label" class="right inline">Email</label>
						</div>
						<div class="large-8 small-8 columns">
							<input name='username' type="text" class="form-control" placeholder="username">
						</div>
					</div>
				</div>
				<div class="large-10 medium-10 small-11">
					<div class="row">
						<div class="large-4 small-4 columns">
							<label for="right-label" class="right inline">Password</label>
						</div>
						<div class="large-8 small-8 columns">
							<input name='password' type="password" class="form-control" placeholder="password">
							<input id="checkbox1" type="checkbox">
							<small class='small-1'>By marking the checkbox, you agree to the 
								<a href="#">terms of service</a>.
								<br>
								<br>
								<br>
							</small>
							<input type='submit' class="button show-for-medium-up" value='Register'>
							<input type='submit' class="button expand show-for-small-only" value='Register'>
						</div>
					</div>
				</div>
			<?php echo Form::close(); ?>
		</div>
	</div>
</div>

