<div class="navigations view">
<h2><?php  __('Navigation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $navigation['Navigation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $navigation['Navigation']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visible'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $navigation['Navigation']['visible']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Navigation', true), array('action' => 'edit', $navigation['Navigation']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Navigation', true), array('action' => 'delete', $navigation['Navigation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $navigation['Navigation']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Navigations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Navigation', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Pages', true), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Page', true), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Pages');?></h3>
	<?php if (!empty($navigation['Page'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Permalink'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Navigation Id'); ?></th>
		<th><?php __('Publish'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($navigation['Page'] as $page):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $page['id'];?></td>
			<td><?php echo $page['title'];?></td>
			<td><?php echo $page['permalink'];?></td>
			<td><?php echo $page['body'];?></td>
			<td><?php echo $page['navigation_id'];?></td>
			<td><?php echo $page['publish'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'pages', 'action' => 'view', $page['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'pages', 'action' => 'edit', $page['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'pages', 'action' => 'delete', $page['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $page['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Page', true), array('controller' => 'pages', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
