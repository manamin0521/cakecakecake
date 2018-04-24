<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sweet'), ['action' => 'edit', $sweet->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sweet'), ['action' => 'delete', $sweet->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $sweet->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Sweets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sweet'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sweets view large-9 medium-8 columns content">
    <h3><?= h($sweet->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NAME') ?></th>
            <td><?= h($sweet->NAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($sweet->ID) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('BODY') ?></h4>
        <?= $this->Text->autoParagraph(h($sweet->BODY)); ?>
    </div>
    <div class="row">
        <h4><?= __('IMAGE') ?></h4>
        <?= $this->Text->autoParagraph(h($sweet->IMAGE)); ?>
    </div>
</div>
