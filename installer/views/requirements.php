<?php if(count($errors) == 0): ?>
	<p><a href="<?php echo URL::to('step-2'); ?>">Next step</a></p>
<?php else: ?>
	<?php foreach($errors as $error): ?>
		<p><?php echo $error; ?></p>
	<?php endforeach; ?>
<?php endif; ?>