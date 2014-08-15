<?

?>

<div class='row'>
	<div class='small-12 columns'>

		<div class="small-2 columns"><p></p></div>
		<div class="small-8 columns">
			<h1 class='text-center'>Login</h1>
			<br>
			<?= Form::open(['id' => 'body_form']) ?>
				<input type="text" name='username' class="form-control" placeholder="username" autofocus>
				<input type="password" name='password' class="form-control" placeholder="password">
				<input type='submit' class="button expand" value='Click to login'>
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
		<div class="small-2 columns"><p></p></div>

	</div>
</div>
