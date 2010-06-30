<div class="designations form">
<?php echo $form->create('Designation');?>
	<fieldset>
 		<legend><?php __('Edit Designation');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Designation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Designation.id'))); ?></li>
		<li><?php echo $html->link(__('List Designations', true), array('action' => 'index'));?></li>
	</ul>
</div>
