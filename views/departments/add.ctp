<div class="departments form">
<?php echo $form->create('Department');?>
	<fieldset>
 		<legend><?php __('Add Department');?></legend>
	<?php
		echo $form->input('faculty_id');
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Departments', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Faculties', true), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Faculty', true), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
	</ul>
</div>
