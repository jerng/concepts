<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($user['User']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long'); ?></dt>
		<dd>
			<?php echo h($user['User']['long']); ?>
			&nbsp;
		</dd>
	</dl>

  <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php 
  echo urlencode($user['User']['lat'].','.$user['User']['long']);
  ?>&key=AIzaSyB8ZTCRX28uWdGA6V9_7ThkPZjYfNS5OJg&zoom=10"></iframe>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emotions'), array('controller' => 'emotions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emotion'), array('controller' => 'emotions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Emotions'); ?></h3>
	<?php if (!empty($user['Emotion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Emotion'] as $emotion): ?>
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
