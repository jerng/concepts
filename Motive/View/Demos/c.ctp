<div id="demo">
  <div>
    <h3>You're not alone.</h3>
    <h3>Cheer up Dave. </h3>
    <h3>A few people feel the same way.</h3>
    <hr>

    <?php 
      
      foreach ($emotions as $emotion)
      {
        $problems = '';
        foreach ($emotion['Problem'] as $problem)
        {
          $problems .= ( $problem['name'] .'; ');
        }

        echo
          '<div class="profile"><h2>'
        . $emotion['User']['name']
        . '</h2>'


        . '<iframe width="320" height="240" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?origin='
        . urlencode ('3.12424,101.674')
        . '&destination='
        . urlencode
          (
            $emotion['User']['lat'] . ',' . $emotion['User']['long']
          )
        . '&key=AIzaSyB8ZTCRX28uWdGA6V9_7ThkPZjYfNS5OJg"></iframe>'


        . $emotion['Emotion']['text']
        . '<br><br><b><i>Possible problem definitions:</i></b> '
        . $problems 
        . '</div>';
      }

    ?>

    <div class="actions">
      <?php echo $this->Html->link('Proceed',array('controller'=>'demos','action'=>'c')); ?>
    </div>
  </div>

  <div>
    <h3>You may have found a cohort.</h3>
    <h3>Would you like to reach out to the others?</h3>
    <hr>

    <br>
    <br>
    <h4>Let's go!</h4>

    <div class="profile">
      <ul>
        <li>
          <?php echo $this->Html->link('Let\'s chat OFFLINE','#'); ?>
          - because we aren't even sure if we want the same thing.<span>(Go to the meet-up planner page.)</span>
        </li>
        <li>
          <?php echo $this->Html->link('Let\'s chat ONLINE','#'); ?>
        - because we're just really far away, or just lazy.<span>(Go to the online chatroom.)</span>
        </li>
        <li>
          Screw the chit chat. Let's
          <?php echo $this->Html->link('start a project right now',array('controller'=>'demos','action'=>'d')); ?>
          since I already know all these people.
        </li>
      </ul>
    </div>

    <br>
    <br>
    <h4>Nooo... hold on!</h4>

    <div class="profile">
      <ul>
        <li> Let them know I'm interested, but 
          <?php echo $this->Html->link('only if they ask first','#'); ?>. <span>(Help the user, any way you can.)</span>
        </li>
        <li> 
          <?php echo $this->Html->link('Hide my emotion right now.','#'); ?>
          - I really don't want these people to know about me.<span>(Always have a backdoor.)</span>
        </li>
      </ul>
    </div>

  </div>
</div>
