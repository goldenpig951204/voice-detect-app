<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Profile Loggings</h1>
            </div> 
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('/');?>">Home</a>
                    </li> 
                    <li class="breadcrumb-item active">Profile Loggings</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Profile Logging List</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered" id="profile_logging_table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Profile</th>
                            <th>Event</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</section>