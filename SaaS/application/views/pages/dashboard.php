<div class="content-header d-none d-md-block">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title br-0">Dashboard</h3>
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
                <div class="d-md-flex ml-10 d-none">
                    <div class="chart-text mr-10">
                        <h6 class="mb-0"><small>LAST YEAR</small></h6>
                        <h4 class="mt-0 text-danger">$22,754</h4>
                    </div>
                    <div class="spark-chart">
                        <div id="lastyear"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-full">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="box">
                        <div class="box-header with-border">
                        <h4 class="box-title">Overview</h4>
                        <ul class="box-controls pull-right">
                            <li class="dropdown">
                            <a data-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                            </div>
                            </li>
                        </ul>
                        </div>
                        <div class="box-body">
                        <div id="chart-overview"></div>
                        </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Audience</h4>
                        <div class="box-controls pull-right">
                            <button class="btn btn-outline btn-xs mx-10">Week</button>
                            <button class="btn btn-outline btn-xs">Month</button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="d-md-flex d-block align-items-center justify-content-between">
                            <div>
                                <label>Users</label>
                                <h2 class="mt-0">15,125</h2>
                            </div>
                            <div>
                                <label>Bounce Rate</label>
                                <h2 class="mt-0">25.50%</h2>
                            </div>
                            <div>
                                <label>Page Views</label>
                                <h2 class="mt-0">75,951</h2>
                            </div>
                            <div>
                                <label>Sessions</label>
                                <h2 class="mt-0">14,125</h2>
                            </div>
                        </div>
                        <div>
                            <div id="flotChart" class="flot-chart h-350"></div>
                        </div>
                    </div>
                </div>
            </div>				
            <div class="col-lg-4 col-12">
                <div class="box">
                    <div class="box-body">
                        <h2>$424652</h2>
                        <p>Sales</p>
                    </div>
                    <div class="box-body p-0">
                        <div id="spark1"></div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header with-border">
                    <h4 class="box-title">Data Managed</h4>
                    <ul class="box-controls pull-right">
                        <li class="dropdown">
                        <a data-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                            <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                        </div>
                        </li>
                    </ul>
                    </div>
                
                <div class="box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h1 class="mb-0 mt-5">7,485</h1>
                            <p>Ext. Records</p>                                
                        </div>
                        <div>
                            <div id="barchart4"></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <tbody>
                                <tr>
                                    <th><i class="mdi mdi-circle text-success"></i></th>
                                    <td><i class="fa fa-facebook-square text-facebook"></i></td>
                                    <td><span>548</span></td>
                                    <td>55% <i class="mdi mdi-arrow-up"></i></td>
                                </tr>
                                <tr>
                                    <th><i class="mdi mdi-circle text-info"></i></th>
                                    <td><i class="fa fa-twitter-square text-twitter"></i></td>
                                    <td><span>845</span></td>
                                    <td>25% <i class="mdi mdi-arrow-up"></i></td>
                                </tr>
                                <tr>
                                    <th><i class="mdi mdi-circle text-warning"></i></th>
                                    <td><i class="fa fa-instagram text-instagram"></i></td>
                                    <td><span>425</span></td>
                                    <td>18% <i class="mdi mdi-arrow-down"></i></td>
                                </tr>
                                <tr>
                                    <th><i class="mdi mdi-circle text-danger"></i></th>
                                    <td><i class="fa fa-google-plus-square text-google"></i></td>
                                    <td><span>624</span></td>
                                    <td>30% <i class="mdi mdi-arrow-up"></i></td>
                                </tr>
                                <tr>
                                    <th><i class="mdi mdi-circle"></i></th>
                                    <td><i class="fa fa-pinterest-square text-pinterest"></i></td>
                                    <td><span>412</span></td>
                                    <td>15% <i class="mdi mdi-arrow-down"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                <div class="box bg-img box-inverse pull-up" style="background-image: url(../images/gallery/full/10.jpg);" data-overlay="7">				
                    <div class="box-header with-border">
                        <h4 class="box-title">Latest</h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="#"></a></li>
                            <li><a class="box-btn-fullscreen" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="box-body mt-20">
                        <span class="badge" data-overlay="5">New</span>
                        <h2 class="font-weight-200 mb-0">Contrary to popular belief</h2>
                        <p>There are many variations of passages</p>
                        <ul class="flexbox flex-justified mt-20">
                            <li>
                                <p class="font-size-20 text-success mb-0 font-weight-300"> <i class="fa fa-caret-up text-success"></i> +1.92% 
                                    <small class="font-size-12">41,425.81</small></p>
                                <p> QWDR</p>
                            </li>

                            <li>
                                <p class="font-size-20 text-danger mb-0 font-weight-300"> <i class="fa fa-caret-down text-danger"></i> -0.92% 
                                    <small class="font-size-12">54,425.81</small></p>
                                <p> WSDF</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Income</h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="#"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                            <li><a class="box-btn" href="#"> <i class="ti-reload"></i></a></li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-dark">
                                <h3>$21,150,542</h3>
                                <p class="font-size-12 mb-0">Total Income</p>
                            </div>
                            <div>
                                <span class="badge badge-lg badge-dark">Monthly</span><br>
                                <p class="mt-10 mb-0"><span class="font-size-12">90%</span> <span class="font-size-16 text-info"><i class="ti-arrow-up"></i></span></p>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Orders</h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="#"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                            <li><a class="box-btn" href="#"> <i class="ti-reload"></i></a></li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-dark">
                                <h3>50,542</h3>
                                <p class="font-size-12 mb-0">New Orders</p>
                            </div>
                            <div>
                                <span class="badge badge-lg badge-success">Annual</span><br>
                                <p class="mt-10 mb-0"><span class="font-size-12">30%</span> <span class="font-size-16 text-success"><i class="ti-arrow-up"></i></span></p>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Vistits</h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="#"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                            <li><a class="box-btn" href="#"> <i class="ti-reload"></i></a></li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-dark">
                                <h3>150,542,2</h3>
                                <p class="font-size-12 mb-0">Site Vistits Tday</p>
                            </div>
                            <div>
                                <span class="badge badge-lg badge-danger">Today</span><br>
                                <p class="mt-10 mb-0"><span class="font-size-12">44%</span> <span class="font-size-16 text-primary"><i class="ti-arrow-up"></i></span></p>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">User Activity</h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="#"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                            <li><a class="box-btn" href="#"> <i class="ti-reload"></i></a></li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-dark">
                                <h3>30,542</h3>
                                <p class="font-size-12 mb-0">In first month</p>
                            </div>
                            <div>
                                <span class="badge badge-lg badge-warning">Low Value</span><br>
                                <p class="mt-10 mb-0"><span class="font-size-12">35%</span> <span class="font-size-16 text-warning"><i class="ti-arrow-up"></i></span></p>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">By Users</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive">
                        <table class="table">
                        <tbody>
                            <tr>
                                <td><i class="fa fa-chrome mr-2 text-danger font-size-16"></i>Chrome</td>
                                <td>5126<small class="text-muted">(59%)</small></td>
                                <td>55.55%</td><td>458<small class="text-muted">(84%)</small></td>
                            </tr>								
                            <tr>
                                <td><i class="fa fa-firefox mr-2 text-blue font-size-16"></i>Firefox</td>
                                <td>1124<small class="text-muted">(36%)</small></td>
                                <td>21.77%</td><td>189<small class="text-muted">(45%)</small></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-internet-explorer mr-2 text-warning font-size-16"></i>Internet-Explorer</td>
                                <td>2015<small class="text-muted">(28%)</small></td><td>31.87%</td>
                                <td>875<small class="text-muted">(82%)</small></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-opera mr-2 text-danger font-size-16"></i>Opera</td>
                                <td>1842<small class="text-muted">(29%)</small></td><td>34.55%</td>
                                <td>428<small class="text-muted">(58%)</small></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-safari mr-2 text-info font-size-16"></i>Safari</td>
                                <td>3512<small class="text-muted">(37%)</small></td>
                                <td>41%</td><td>399<small class="text-muted">(94%)</small></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Task Report</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive">
                        <table class="table">
                        <tbody><tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Progress</th>
                            <th>Deadline</th>
                            <th style="width: 40px">Label</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                            </td>
                            <td>Apr 12, 2017</td>
                            <td><span class="badge bg-danger ">55%</span></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                            </td>
                            <td>Apr 12, 2017</td>
                            <td><span class="badge bg-yellow">70%</span></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                            <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                            </td>
                            <td>Apr 12, 2017</td>
                            <td><span class="badge bg-light-blue">30%</span></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Fix and squish bugs</td>
                            <td>
                            <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                            </div>
                            </td>
                            <td>Apr 12, 2017</td>
                            <td><span class="badge bg-success">90%</span></td>
                        </tr>
                            </tbody></table>
                    </div>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
        </div>
    </div>      
</section>