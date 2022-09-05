<div class="content-header d-none d-md-block">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title br-0">Settings</h3>
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
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Profile Setting</h4>
                </div>
                <div class="box-body">
                    <form action="<?= base_url('settings/profile-edit');?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="photo-container text-center">
                                    <span class="photo-content">
                                        <img src="<?= $profile['photo'] ? base_url('uploads/admin/' . $profile['photo']) : base_url('assets/images/avatar/avatar1.png');?>" class="rounded-circle" width="120" height="120"/>
                                        <span class="photo-mask">
                                            <a class="photo-upload-btn">UPLOAD</a>
                                        </span>
                                    </span>
                                    <div class="d-none">
                                        <input type="file" name="photo"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-account"></i></span>
                                        </div>
                                        <input type="text" id="name" class="form-control" name="name" value="<?= $profile['name'];?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                        </div>
                                        <input type="email" id="email" class="form-control" name="email" value="<?= $profile['email'];?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-cellphone"></i></span>
                                        </div>
                                        <input type="text" id="phone" class="form-control" name="phone" value="<?= $profile['phone'] ? $profile['phone'] : '';?>"  data-inputmask="'mask':[ '(999) 999-9999']" data-mask/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-account-location"></i></span>
                                        </div>
                                        <select id="country" class="form-control" name="country" value="<?= $profile['country'];?>">
                                            <?php foreach ($countries as $country):?>
                                            <option value="<?= $country['code'];?>"><?= $country['name'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zipcode">Zip Code:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-account-location"></i></span>
                                        </div>
                                        <input type="text" id="zipcode" class="form-control" name="zipcode" value="<?= $profile['zipcode'];?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birthday">Birthday:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-calendar-clock"></i></span>
                                        </div>
                                        <input type="text" id="birthday" class="form-control" name="birthday" value="<?= $profile['birthday'] != '0000-00-00' ? $profile['birthday'] : '';?>" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary"><i class="fa fa-edit"></i> Update Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Security Setting</h4>
                </div>
                <div class="box-body">
                    <form action="<?= base_url('Settings/password-change');?>" method="POST">
                        <div class="form-group">
                            <label for="new_password">New Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="mdi mdi-lock-open"></i></span>
                                </div>
                                <input type="password" id="new_password" class="form-control" name="new_password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="mdi mdi-checkbox-marked-outline"></i></span>
                                </div>
                                <input type="password" id="confirm_password" class="form-control" name="confirm_password"/>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary"><i class="fa fa-edit"></i> Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Other Settings</h4>
                </div>
                <div class="box-body"></div>
            </div>
        </div>
    </div>
</section>