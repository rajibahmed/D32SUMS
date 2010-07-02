<div class="pages form">
<?php echo $form->create('Page');?>
	<fieldset>
 		<legend><?php __('Edit Page');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Page.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Page.id'))); ?></li>
		<li><?php echo $html->link(__('List Pages', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Navigations', true), array('controller' => 'navigations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Navigation', true), array('controller' => 'navigations', 'action' => 'add')); ?> </li>
	</ul>
</div>
