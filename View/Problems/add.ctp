<div class="problems form">
<?php echo $this->Form->create('Problem'); ?>
	<fieldset>
		<legend><?php echo __('Add Problem'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Emotion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Problems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Emotions'), array('controller' => 'emotions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emotion'), array('controller' => 'emotions', 'action' => 'add')); ?> </li>
	</ul>
</div>
