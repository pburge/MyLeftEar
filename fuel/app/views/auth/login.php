<div class='row'>
	<div class='large-12 medium-12 small-12 columns'>
		<br>
		<!-- <div class="large-1 medium-1 small-2 columns"><p></p></div> -->
		<div class="large-5 medium-2 small-8 columns">
			<h4 class='text-center'>Login</h4>
			<!-- <div class="large-7 medium-6 small-12 columns"> -->
			<br>
			<?php echo Form::open(['id' => 'body_form']) ?>
				<div class="large-12 medium-10 small-11">
					<div class="row">
						<div class="large-4 small-4 columns">
							<label for="right-label" class="right inline">Username</label>
						</div>
						<div class="large-8 small-8 columns">
							<input type="text" name='username' class="form-control" placeholder="username" autofocus>
						</div>
					</div>
				</div>
				<div class="large-12 medium-10 small-11">
					<div class="row">
						<div class="large-4 small-4 columns">
							<label for="right-label" class="right inline">Password</label>
						</div>
						<div class="large-8 small-8 columns">
							<input type="password" name='password' class="form-control" placeholder="password">
							<small><a href="#">Forgot your password?</a></small>
							<br>
							<br>
							<input type='submit' class="button small" value='Click to login'>
						</div>
					</div>
				</div>
			<?php echo Form::close(); ?>
			<!-- </div> -->
		</div>
		<div class="large-1 medium-1 small-2 columns"><p></p></div>
		<div class="large-6 medium-2 small-8 columns">
			<h4 class='text-center'>Don't have an account? Sign up today!</h4>
			<!-- <h4 class='text-center'>Sign up today!</h4> -->
			<br>
			<?php echo Form::open(['id' => 'body_form']) ?>
				<div class="large-10 medium-10 small-11">
					<div class="row">
						<div class="large-4 small-4 columns">
							<label for="right-label" class="right inline">Username</label>
						</div>
						<div class="large-8 small-8 columns">
							<input name='email' type="email" class="form-control" placeholder="email">
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
							<small>I have read, and agree with, the 
								<a href="#">terms of service</a>.
								<br>
							</small>
							<input type='submit' class="button small show-for-medium-up" value='Register'>
							<input type='submit' class="button expand show-for-small-only" value='Register'>
						</div>
					</div>
				</div>
			<?php echo Form::close(); ?>
		</div>
		<div class="large-1 medium-1 small-1 columns"><p></p></div>
	</div>
</div>
