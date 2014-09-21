<div class="row">
	<aside class="large-3 medium-4 small-12 columns">
		<h5>Admin Management</h5>
		<ul class="side-nav">
			<li class='active'><?= Html::anchor('admin', 'Create a post') ?></li>
			<li><?= Html::anchor('admin/blog', 'Blog posts') ?></li>
			<li><?= Html::anchor('admin', 'Artist List') ?></li>
			<!-- <li><?= Html::anchor('admin', 'another function') ?></li> -->
		</ul>
	</aside>
 	<div class="large-1 medium-1"></div>
	<div class="large-8 medium-7 small-12 columns" role="content">
		<?= Form::open(array('action' => 'admin/preview', 'enctype' => 'multipart/form-data', 'method' => 'post')); ?>
			<div class="row">
				<div class="large-12 columns">

					<h3>Create a post:</h3>
					<br>
					<?= Form::label('Category'); ?>

					<?= Form::select('post_categories', 'none', array(
					   'site_news' 		=> 'Site News',
					   'featured_artist' 	=> 'Featured Artist',
					   'art_exhibits' 		=> 'Art Exhibits',
					   'random_stuff' 		=> 'Random Stuff',
					));?>
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
					<?= Form::file('post_img'); ?>
				</div>



			</div>

			<a href='#' type="submit" class='button expand show-for-small-only'>Preview Post</a>
			<button type="submit" class='button pull-right small show-for-medium-up'>Preview Post</button>

		<?= Form::close(); ?>
	</div>
 </div>