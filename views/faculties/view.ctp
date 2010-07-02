<div class="faculties view">
<h2><?php  __('Faculty');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $faculty['Faculty']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $faculty['Faculty']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Faculty', true), array('action' => 'edit', $faculty['Faculty']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Faculty', true), array('action' => 'delete', $faculty['Faculty']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $faculty['Faculty']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Faculties', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Faculty', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Departments', true), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Department', true), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Departments');?></h3>
	<?php if (!empty($faculty['Department'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Faculty Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($faculty['Department'] as $department):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $department['id'];?></td>
			<td><?php echo $department['faculty_id'];?></td>
			<td><?php echo $department['name'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'departments', 'action' => 'view', $department['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'departments', 'action' => 'edit', $department['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'departments', 'action' => 'delete', $department['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $department['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Department', true), array('controller' => 'departments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
