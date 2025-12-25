<!doctype html>
<html class="no-js" lang="fr">
<head>
    <?= $this->include('partials/head') ?>
</head>
<body>
<div id="wrapper" class="wrapper bg-ash">
    <?= $this->include('partials/header') ?>
    <div class="dashboard-page-one">
        <?= $this->include('partials/sidebar') ?>
        <div class="dashboard-content-one">
            <?= $this->renderSection('content') ?>

            <?= $this->include('partials/footer') ?>
        </div>
    </div>
</div>
<?= $this->include('partials/scripts') ?>
</body>
</html>