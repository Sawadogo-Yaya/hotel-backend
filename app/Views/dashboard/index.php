<?= $this->extend('partials/main') ?>

<?= $this->section('content') ?>
    <div class="breadcrumbs-area">
        <h3><?= $title ?></h3>
        <ul>
            <li><a href="<?= base_url('/') ?>">Accueil</a></li>
            <li>Dashboard</li>
        </ul>
    </div>

    <div class="row gutters-20">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green">
                            <i class="flaticon-bed text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Chambres</div>
                            <div class="item-number"><span><?= $stats['rooms'] ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-red">
                            <i class="flaticon-money text-red"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Revenus</div>
                            <div class="item-number">€<span><?= $stats['revenue'] ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gutters-20">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green">
                            <i class="flaticon-bed text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Chambres</div>
                            <div class="item-number"><span><?= $stats['rooms'] ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-red">
                            <i class="flaticon-money text-red"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Revenus</div>
                            <div class="item-number">€<span><?= $stats['revenue'] ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gutters-20">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green">
                            <i class="flaticon-bed text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Chambres</div>
                            <div class="item-number"><span><?= $stats['rooms'] ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-red">
                            <i class="flaticon-money text-red"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Revenus</div>
                            <div class="item-number">€<span><?= $stats['revenue'] ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>