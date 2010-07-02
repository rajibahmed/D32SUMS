<div class="navigations form">
<?php echo $form->create('Navigation');?>
	<fieldset>
 		<legend><?php __('Add Navigation');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('visible');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Navigations', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Pages', true), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Page', true), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
