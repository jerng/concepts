<div class="problems view">
<h2><?php echo __('Problem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($problem['Problem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($problem['Problem']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Problem'), array('action' => 'edit', $problem['Problem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Problem'), array('action' => 'delete', $problem['Problem']['id']), array(), __('Are you sure you want to delete # %s?', $problem['Problem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emotions'), array('controller' => 'emotions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emotion'), array('controller' => 'emotions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Emotions'); ?></h3>
	<?php if (!empty($problem['Emotion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($problem['Emotion'] as $emotion): ?>
		<tr>
			<td><?php echo $emotion['id']; ?></td>
			<td><?php echo $emotion['user_id']; ?></td>
			<td><?php echo $emotion['text']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emotions', 'action' => 'view', $emotion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emotions', 'action' => 'edit', $emotion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emotions', 'action' => 'delete', $emotion['id']), array(), __('Are you sure you want to delete # %s?', $emotion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Emotion'), array('controller' => 'emotions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
