<div class="pages index">
<h2><?php __('Pages');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('permalink');?></th>
	<th><?php echo $paginator->sort('body');?></th>
	<th><?php echo $paginator->sort('navigation_id');?></th>
	<th><?php echo $paginator->sort('publish');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($pages as $page):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $page['Page']['id']; ?>
		</td>
		<td>
			<?php echo $page['Page']['title']; ?>
		</td>
		<td>
			<?php echo $page['Page']['permalink']; ?>
		</td>
		<td>
			<?php echo $page['Page']['body']; ?>
		</td>
		<td>
			<?php echo $html->link($page['Navigation']['title'], array('controller' => 'navigations', 'action' => 'view', $page['Navigation']['id'])); ?>
		</td>
		<td>
			<?php echo $page['Page']['publish']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $page['Page']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $page['Page']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $page['Page']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $page['Page']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Page', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Navigations', true), array('controller' => 'navigations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Navigation', true), array('controller' => 'navigations', 'action' => 'add')); ?> </li>
	</ul>
</div>
