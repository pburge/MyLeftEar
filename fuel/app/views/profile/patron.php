<div class="row">
	<aside class="large-3 medium-4 small-12 columns">
		<h5>User Options</h5>
		<ul class="side-nav">
			<li><?= Html::anchor('profile', 'Name Settings') ?></li>
			<li class='active'><?= Html::anchor('profile/patron', 'Become a Patron') ?></li>
		</ul>
	</aside>
 	<div class="large-1 medium-1"></div>
	<div class="large-8 medium-7 small-12 columns" role="content">
		<form>
			<fieldset>
				<legend>Terms of Service</legend>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec auctor tortor, sed efficitur mauris. Nam sit amet erat id erat pretium dignissim. Nam laoreet odio eget lectus mattis imperdiet. Praesent et ligula sapien. Sed at purus quam. Vestibulum nec dapibus sem. In vestibulum finibus orci, sit amet consectetur diam porttitor sit amet. Nunc quis consequat ex.</p>

				<p>Quisque aliquet mauris at mi auctor, sed euismod arcu laoreet. Fusce rhoncus, mi a consectetur auctor, dui velit feugiat felis, nec laoreet purus enim varius est. Mauris feugiat eget nisl sed finibus. Donec arcu elit, pulvinar sed maximus vitae, venenatis vel felis. Proin ut vehicula justo. Nullam interdum vitae ante ac volutpat. Vestibulum mattis lacus ac tristique tincidunt. Nullam porttitor ligula at leo hendrerit finibus dapibus eget nibh.</p>

				<p>Fusce rutrum nibh massa, at porttitor risus fermentum sed. Ut dapibus gravida mattis. Maecenas lorem justo, fermentum eget porttitor in, dignissim in massa. Suspendisse commodo mauris vel tristique semper. Morbi hendrerit lobortis bibendum. Nunc id dolor vitae ex rutrum posuere. Integer ante elit, facilisis in ex at, mollis aliquet nisl. Pellentesque eget turpis nisi. Vestibulum eu lacus sed lectus convallis blandit eget non ligula. Fusce eleifend ante a justo molestie, et finibus dui interdum. Etiam ut nisl ut dolor fringilla sagittis. In non urna ut ex gravida varius. Nullam vehicula lorem nunc, eu scelerisque lectus volutpat vitae.</p>

				<p>Quisque ultrices elit non augue vehicula, rhoncus aliquet mi fermentum. Nam vel nisi sit amet nibh pretium tincidunt vitae nec felis. Phasellus eu euismod purus, sit amet aliquet ligula. Aliquam diam massa, iaculis sed nisl vitae, suscipit sagittis eros. Etiam commodo mauris ac eros ullamcorper convallis. Nulla auctor pulvinar tortor ut auctor. Proin ligula ante, ultricies id fermentum a, placerat vitae erat.</p>

				<p>Praesent aliquet neque nisl, at scelerisque nisl molestie ac. Morbi scelerisque lorem at lectus interdum, a cursus eros rhoncus. Proin at turpis nisl. Cras laoreet magna lorem, id dapibus justo interdum vitae. Nullam sed ante id turpis euismod consequat a eget erat. Maecenas pharetra pellentesque neque a cursus. Suspendisse dapibus rutrum lacus, nec interdum neque pharetra non.</p>

				<hr>

				<input name="tos" type="checkbox"><label for="tos">I agree to the terms of service and wish to become a patron.</label>
				<br><br>
				<button type="submit" class='button small show-for-medium-up'>Continue</button>
			</fieldset>

		</form>
	</div>
 </div>
 <br>
 <br>
 <br>
 <br>
 <hr> <pre><?= var_export($auth_user); ?></pre>
