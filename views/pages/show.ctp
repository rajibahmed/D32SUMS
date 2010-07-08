<?php $this->set('page_title',$page['Page']['title']) ?>
<?php foreach ($page['Navigation'] as $navigation): ?>
	<h2><?php echo $navigation['title'] ?></h2>
	<?php foreach ($navigation['Menus'] as $hyperlink): ?>
		<?php echo $html->link($hyperlink['title'],array(
			'controller'=>'pages',
			'action'=>'show', 
			$hyperlink['permalink']
		) )?>
	<?php endforeach ?>
<?php endforeach ?>