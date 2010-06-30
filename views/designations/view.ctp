<div class="designations view">
<h2><?php  __('Designation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $designation['Designation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $designation['Designation']['title']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Designation', true), array('action' => 'edit', $designation['Designation']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Designation', true), array('action' => 'delete', $designation['Designation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $designation['Designation']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Designations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Designation', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
