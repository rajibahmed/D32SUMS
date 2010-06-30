<div class="teachers view">
<h2><?php  __('Teacher');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contact'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['contact']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contact Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['contact_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Information'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['information']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Designation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($teacher['Designation']['name'], array('controller' => 'teachers', 'action' => 'view', $teacher['Designation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Teacher', true), array('action' => 'edit', $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Teacher', true), array('action' => 'delete', $teacher['Teacher']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Teachers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Teacher', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Designation', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Contacts');?></h3>
	<?php if (!empty($teacher['Contact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Teacher Id'); ?></th>
		<th><?php __('IM'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($teacher['Contact'] as $contact):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $contact['id'];?></td>
			<td><?php echo $contact['teacher_id'];?></td>
			<td><?php echo $contact['IM'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
