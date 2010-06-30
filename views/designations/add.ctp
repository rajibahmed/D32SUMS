<div class="designations form">
<?php echo $form->create('Designation');?>
	<fieldset>
 		<legend><?php __('Add Designation');?></legend>
	<?php
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Designations', true), array('action' => 'index'));?></li>
	</ul>
</div>
