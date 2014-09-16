<div class="row">
	<aside class="large-3 medium-3 small-12 columns">
		<h5>Admin Management</h5>
		<ul class="side-nav">
			<li><?= Html::anchor('admin', 'Create a post') ?></li>
			<li class='active'><?= Html::anchor('admin/blog', 'Blog posts') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
			<li><?= Html::anchor('admin', 'another function') ?></li>
		</ul>
	</aside>

	<div class="large-9 medium-9 small-12 columns" role="content">

		<table>
			<thead>
				<tr>
					<th width="5" scope="column">ID</th>
					<th width="" scope="column">Post Title</th>
					<th width="500" scope="column">Post Body</th>
					<th scope="column">Edit or Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($posts as $post) :?>
					<? $limit_post = Str::truncate($post->body, 70); ?>
					<tr>
						<td scope="row"><?= Html::anchor($post->url(), $post->id)?></td>
						<td scope="row"><?= Html::anchor($post->url(), $post->title)?></td>
						<td scope="row"><?= Html::anchor($post->url(), $limit_post)?></td>
						<td scope="row">
							<?php echo Html::anchor($post->edit_url(), ' Edit', array('class' => 'button small fa fa-paragraph expand')); ?>
							<?php echo Html::anchor($post->delete_url(), ' Delete', array('class' => 'button small alert fa fa-trash-o'));?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>

</div>

<pre>
	<hr>
	<?// var_dump($posts)?>
</pre>