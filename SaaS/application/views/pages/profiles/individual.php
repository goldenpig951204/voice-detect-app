<div class="content-header d-none d-md-block">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title br-0">Invidiual</h3>
        </div>
        <div class="right-title">
            <div class="d-flex mt-10 justify-content-end">
                <div class="d-md-flex mr-20 ml-10 d-none">
                    <div class="chart-text mr-10">
                        <h6 class="mb-0"><small>THIS MONTH</small></h6>
                        <h4 class="mt-0 text-primary">$12,125</h4>
                    </div>
                    <div class="spark-chart">
                        <div id="thismonth"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h4 class="mb-0"><?= $profile['name'];?></h4>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover display nowrap margin-top-100 w-p100" id="profile_loggings_table">
                    <thead>
                        <tr>
                            <th width="30">No</th>
                            <th>Event</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $idx = 0;
                            foreach ($loggings as $logging):
                                $idx++;?>
                                <tr>
                                    <td><?= $idx;?></td>
                                    <td><?= $logging['type'];?></td>
                                    <td><?= $logging['date'];?></td>
                                </tr>
                        <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Event</th>
                            <th>Date</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>