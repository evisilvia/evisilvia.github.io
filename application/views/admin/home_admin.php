<div class="be-content">
    <div class="page-head">
        <ol class="breadcrumb page-head-nav">
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-3">
            <div class="widget widget-tile">
                <div class="data-info">
                    <div class="desc text-center">Total Pendaftar</div>
                    <div class="value text-center"><span class=" mdi mdi-accounts"></span> <span data-toggle="counter" data-end="<?= $totals ?>" class="number">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">
            <div class="widget widget-tile">
                <div class="data-info">
                    <div class="desc text-center">Pendaftar Laki-Laki</div>
                    <div class="value text-center"><span class=" mdi mdi-accounts"></span> <span data-toggle="counter" data-end="<?= $totalL ?>" class="number">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">
            <div class="widget widget-tile">
                <div class="data-info">
                    <div class="desc text-center">Pendaftar Perempuan</div>
                    <div class="value text-center"><span class=" mdi mdi-accounts"></span> <span data-toggle="counter" data-end="<?= $totalP ?>" class="number">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">
            <div class="widget widget-tile">
                <div class="data-info">
                    <div class="desc text-center">Pendaftar Yang Lulus</div>
                    <div class="value text-center"><span class=" mdi mdi-accounts"></span> <span data-toggle="counter" data-end="<?= $totalS ?>" class="number">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-fullwidth be-loading">
                <div class="widget-head">
                    <div class="tools">
                        <div class="dropdown"><span data-toggle="dropdown" class="icon mdi mdi-more-vert visible-xs-inline-block dropdown-toggle"></span>

                        </div>
                    </div>
                    <div class="button-toolbar hidden-xs">

                    </div><span class="title">Jumlah Pendaftaran</span>
                </div>
                <div class="widget-chart-container">
                    <div class="widget-chart-info">
                        <ul class="chart-legend-horizontal">
                            <li><span data-color="main-chart-color1"></span> Pendaftar</li>
                            <li><span data-color="main-chart-color2"></span> Perempuan</li>
                            <li><span data-color="main-chart-color3"></span> Laki-Laki</li>
                        </ul>
                    </div>

                    <div class="widget-counter-group widget-counter-group-right" style="
    margin-top: -33px;
">
                        <div class="counter counter-big">
                            <div class="value"><?= $totals ?>%</div>
                            <div class="desc">Pendaftar</div>
                        </div>
                        <div class="counter counter-big">
                            <div class="value"><?= $totalP ?>%</div>
                            <div class="desc">Perempuan</div>
                        </div>
                        <div class="counter counter-big">
                            <div class="value"><?= $totalL ?>%</div>
                            <div class="desc">Laki-Laki</div>
                        </div>
                    </div>
                    <div id="main-chart" style="height: 260px;"></div>
                </div>
                <div class="be-spinner">
                    <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

</div>