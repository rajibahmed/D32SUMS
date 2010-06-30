<div class="teachers form">
<?php echo $form->create('Teacher');?>
	<fieldset>
 		<legend><?php __('Edit Teacher');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('contact');
		echo $form->input('contact_id');
		echo $form->input('information');
		echo $form->input('designation_id');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Teacher.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Teacher.id'))); ?></li>
		<li><?php echo $html->link(__('List Teachers', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Designation', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
