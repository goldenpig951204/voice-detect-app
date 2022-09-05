<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Setting</h1>
            </div> 
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('/');?>">Home</a>
                    </li> 
                    <li class="breadcrumb-item active">Setting</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Profile Setting</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" action="<?= base_url('setting/update-setting');?>" enctype="multipart/form-data" method="POST">
                            <div class="text-center">
                                <span class="image-preview">
                                    <img src="<?= $this->session->userdata('photo') ? base_url('uploads/users/' . $this->session->userdata('photo')) : base_url('assets/images/avatar.png');?>" width="100" height="100"/>
                                    <span class="mask">
                                        <a class="text-light upload_btn" href="javascript:void(0)">UPLOAD PHOTO</a>
                                    </span>
                                </span>
                            </div>
                            <div class="d-none">
                                <input type="file" name="photo"/>
                            </div>
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" class="form-control" value="<?= $this->session->userdata("name");?>"/>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" value="<?= $this->session->userdata("email");?>"/>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Change Password</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" action="<?= base_url('setting/change-password');?>" method="POST">
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="new_password" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <input type="password" name="confirm_password" class="form-control"/>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary"><i class="fa fa-edit"></i> Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>