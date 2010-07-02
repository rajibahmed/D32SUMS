<div class="departments view">
<h2><?php  __('Department');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $department['Department']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Faculty'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($department['Faculty']['name'], array('controller' => 'faculties', 'action' => 'view', $department['Faculty']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $department['Department']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Department', true), array('action' => 'edit', $department['Department']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Department', true), array('action' => 'delete', $department['Department']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $department['Department']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Departments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Department', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Faculties', true), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Faculty', true), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
	</ul>
</div>
