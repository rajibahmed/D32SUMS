<?php echo $javascript->link('ckeditor/ckeditor',false) ?>
<div class="pages form">
<?php echo $form->create('Page');?>
	<fieldset>
 		<legend><?php __('Add Page');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('permalink');
		echo $form->input('body',array('class'=>'ckeditor'));
		echo $form->input('navigation_id');
		echo $form->input('publish');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Pages', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Navigations', true), array('controller' => 'navigations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Navigation', true), array('controller' => 'navigations', 'action' => 'add')); ?> </li>
	</ul>
</div>
