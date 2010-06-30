<?php echo $javascript->link('ckeditor/ckeditor',false) ?>
<div class="teachers form">
<?php echo $form->create('Teacher');?>
	<fieldset>
 		<legend><?php __('Add Teacher');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('contact');
		echo $form->input('information',array('class'=>'ckeditor'));
		echo $form->input('designation_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Teachers', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Designation', true), array('controller' => 'designations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
