<?
?>

<div class="row">
	<aside class="large-3 medium-4 small-12 columns">
		<h5>Admin Management</h5>
		<ul class="side-nav">
			<li class='active'><?= Html::anchor('admin', 'Blog Functions') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
		</ul>
	</aside>
 	<div class="large-1 medium-1"></div>
	<div class="large-8 medium-7 small-12 columns" role="content">
		<?= Form::open(array('action' => '', 'enctype' => 'multipart/form-data', 'method' => 'post')); ?>
			<div class="row">
				<div class="large-12 columns">

					<h3>Add a new post</h3>
					<br>
					<label>Category
						<select>
							<option value="Site News">Site News</option>
							<option value="Featured Artist">Featured Artist</option>
							<option value="Art Exhibits">Art Exhibits</option>
							<option value="Random Stuff">Random Stuff</option>
						</select>
					</label>
				</div>
			</div>

			<div class="row">
				<div class ='large-12 medium-12 small-12 columns'>
					<?= Form::label('Post Title'); ?>
					<?= Form::input('post_title', ''); ?>
				</div>

				<div class ='large-12 medium-12 small-12 columns'>
					<?= Form::label('Body'); ?>
					<?= Form::textarea('post_body','',array('rows' => 5, 'cols' => 6)); ?>

<!-- 					<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
					<div class="fileUpload button small">
					    <span>Upload</span>
					    <input id="uploadBtn" type="file" class="upload" />
					</div> -->

					<?= Form::file('post_img'); ?>
				</div>



			</div>

			<a href='#' type="submit" class='button expand show-for-small-only'>Preview Post</a>
			<button type="submit" class='button pull-right small show-for-medium-up'>Preview Post</button>

		<?= Form::close(); ?>


		<!-- <form enctype="multipart/form-data">
			<fieldset>
				<legend>Create a new blog post:</legend>

				<div class="row">
					<div class="large-12 columns">
						<label>Category
							<select>
								<option value="Site News">Site News</option>
								<option value="Featured Artist">Featured Artist</option>
								<option value="Art Exhibits">Art Exhibits</option>
								<option value="Random Stuff">Random Stuff</option>
							</select>
						</label>
					</div>
				</div>

				<div class="row">
					<label class="large-12 medium-12 small-12 columns">Title:
						<input type="text">
					</label>
					<label class="large-12 medium-12 small-12 columns">Body:
						<textarea cols='6' rows='5'></textarea>
					</label>
				</div>



				<a href='#' type="submit" class='button expand show-for-small-only'>Preview Post</a>
				<button type="submit" class='button pull-right small show-for-medium-up'>Preview Post</button>

			</fieldset>
		</form> -->
	</div>
 </div>
 <br>
 <br>
 <br>
 <br>
 <hr> <pre><?= var_export($admin); ?></pre>
