<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $showtimes
 */
?>
<nav class="large-2 medium-1 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Showtimes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="showtimes view large-10 medium-8 columns content">
<?php 
    echo $this->Form->create();
    echo $this->Form->control('room_id', ['options' => $rooms]);
    echo $this->Form->button(__('Go'));
    echo $this->Form->end(); 
    ?>
        <table>
        
        <thead>
        <tr>
            <th scope="col">Monday</th>
            <th scope="col">Tuesday</th>
            <th scope="col">Wednesday</th>
            <th scope="col">Thursday</th>
            <th scope="col">Friday</th>
            <th scope="col">Saturday</th>
            <th scope="col">Sunday</th>
        </tr>
        </thead>
        
        <?php for($i=1;$i<=7;$i++){?>
   <td>
    <table>
        <?php foreach ($showtimes as $showtime): 
        
        $test = ($showtime->start)->format('N');
        if ($test==$i){?>
          <tr>
            <td><?= h($showtime->movie->name ) ?><br>
            Start : <?= h($showtime->start->format("H:i") ) ?><br>
            End : <?= h($showtime->end->format("H:i") ) ?><br>
          </tr>
        <?php }?>
        <?php endforeach;  ?>
    </table>
    </td> 
    <?php } ?>
    
   
    </td>
</table>

        
</table>
</div>