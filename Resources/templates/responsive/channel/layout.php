<?php
$this->layout('layout', [
    'bodyClass' => 'channel',
    'title' =>  $this->text('regular-channel').' '.$this->channel->name,
    'meta_description' => $this->channel->description
    ]);

$this->section('header-navbar-brand');

?>
    <a class="navbar-brand" href="<?= SITE_URL ?>"><img src="<?= $this->asset('img/goteo.svg') ?>" class="logo" alt="Goteo"></a>

<?php

$this->replace();

$this->section('content');

?>


    <?= $this->insert("channel/partials/owner_info") ?>

    <?= $this->supply('channel-header', $this->insert("channel/partials/join_action")) ?>

    <div class="projects-section">
        <div class="container-fluid">
            <div id="content">
                <?= $this->supply('channel-content') ?>
            </div>

        </div>
    </div>

    <?= $this->supply('channel-footer', $this->insert("channel/partials/summary_section")) ?>

<?php $this->replace() ?>
