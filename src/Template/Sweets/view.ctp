<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sweet'), ['action' => 'edit', $sweet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sweet'), ['action' => 'delete', $sweet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sweet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sweets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sweet'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sweets view large-9 medium-8 columns content">
        <div class="row">
            <h4><?= __('shop name') ?></h4>
            <?= h($sweet->name) ?>
        </div>
    <div class="row">
        <h4><?= __('place') ?></h4>
        <?= $this->Text->autoParagraph(h($sweet->body)); ?>
    </div>
    <div class="row">
        <h4><?= __('image') ?></h4>
        <?= $this->HTML->image(h($sweet->image)); ?>
    </div>
</div>
