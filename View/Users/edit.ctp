<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('lat');
		echo $this->Form->input('long');
		echo $this->Form->input('Problem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>

  <script>
  
    alert('We\'re trying to locate you. \n\nLook near the top of browser window to allow this.')

    function showLocation(position) 
    {
      // more interesting data for the demo
      var fuzzLat = Math.random() - 0.5
      var fuzzLong = Math.random() - 0.5

      document.getElementById('UserLat').value = position.coords.latitude + fuzzLat
      document.getElementById('UserLong').value = position.coords.longitude + fuzzLong

    }
    
    function showError(error) 
    {
      switch(error.code) 
      {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            break;
      } 
    }
    
    var options  = 
    {
            enableHighAccuracy : true,
            timeout : Infinity,
            maximumAge : 0
    }

    navigator.geolocation.getCurrentPosition(showLocation,showError,options)
     
  </script>

