<?


?>

<div class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="small-1 columns"><p></p></div>
			<div class="small-10 columns" style='background-color:'>
				<div class='signInWrapper'>
					<div class='signInContent'>
						<div class="signInBox">
							<h2 class='signInHeader'>Register free today!</h2>
							<ul class='signInText'>
								<li>Place holder stuff...</li>
								<li>Place holder stuff.</li>
								<li>Place holder stuff.</li>
								<li>Place holder stuff.</li>
								<li>Place holder stuff.</li>
								<li>Place holder stuff.</li>
							</ul>
						</div>
						<div class="signInBox" style="border-right:none;"> <!-- to "close" the box, this needs to be here. -->
							<br>
							<?= Form::open(['id' => 'body_form']) ?>
								<input name='email' type="email" class="form-control" placeholder="email" autofocus>
								<input name='username' type="text" class="form-control" placeholder="username">
								<input name='password' type="password" class="form-control" placeholder="password">
								<input type='submit' class="button expand" value='Register'>
								<div class="row">
									<div class="small-12 columns">
										<input id="checkbox1" type="checkbox">
										<small>By marking the checkbox, you agree to the 
											<a href="#">terms of service</a>.
										</small>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="small-1 columns"><p></p></div>
		</div>
	</div>
</div>