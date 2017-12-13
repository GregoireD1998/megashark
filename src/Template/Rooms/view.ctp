<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-8 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-9 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
    
        <table>
        <thead>
        <tr>
            <th scope="col">Lun</th>
            <th scope="col">Mar</th>
            <th scope="col">Mer</th>
            <th scope="col">Jeu</th>
            <th scope="col">Vend</th>
            <th scope="col">Sam</th>
            <th scope="col">Dim</th>
        </tr>
        </thead>    
    
   <?php for($i=1;$i<=7;$i++){?>
   <td>
    <table>
        <?php foreach ($showtimes as $showtime): 
        
        $test = ($showtime->start)->format('N');
        if ($test==$i){?>
          <tr>
            <td>Nom = <?= h($showtime->movie->name ) ?><br>
            Heure déb = <?= h($showtime->start->format('H:i')) ?><br>
            Heure fin = <?= h($showtime->end->format('H:i')) ?><br>
            Durée = <?= h($showtime->movie->duration ) ?> min<br>
          </tr>
        <?php }?>
        <?php endforeach;  ?>
    </table>
    </td> 
    <?php } ?>
     </td>
    </table>
        
        
        
    </div>
