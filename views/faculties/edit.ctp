<div class="faculties form">
<?php echo $form->create('Faculty');?>
	<fieldset>
 		<legend><?php __('Edit Faculty');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Faculty.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Faculty.id'))); ?></li>
		<li><?php echo $html->link(__('List Faculties', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Departments', true), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Department', true), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
