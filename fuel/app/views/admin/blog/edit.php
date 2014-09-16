<div class="row">
	<aside class="large-3 medium-3 small-12 columns">
		<h5>Admin Management</h5>
		<ul class="side-nav">
			<li><?= Html::anchor('admin', 'Create a post') ?></li>
			<li><?= Html::anchor('admin/blog', 'Blog posts') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
		</ul>
	</aside>
	<div class="small-9 columns" role="content">
		<?= Form::open(array('enctype' => 'multipart/form-data', 'method' => 'post')); ?>
			<div class="row">
				<div class="large-12 columns">

					<h3>Editting post:</h3>
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
					<?= Form::input('post_title', $post->title); ?>
				</div>
				<div class ='large-12 medium-12 small-12 columns'>
					<?= Form::label('Body'); ?>
					<?= Form::textarea('post_body',$post->body,array('rows' => 5, 'cols' => 6)); ?>
					<?= Form::file('post_img'); ?>
				</div>
			</div>
			<div class="row">
				<div class ='large-12 medium-12 small-12 columns'>
					<ul class="inline-list">
					<br>
					<!-- <a href='#' type="submit" class='button expand show-for-small-only'>Update Post</a> -->
						<li><button type="submit" class='button small success show-for-medium-up'>Update Post</button></li>
						<li><?= Html::anchor('admin/blog', 'Cancel edit', array('class' => 'button small show-for-medium-up'));?></li>
					</ul>
				</div>
			</div>

		<?= Form::close(); ?>
	</div>
</div>