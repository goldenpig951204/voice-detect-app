<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">		
	  <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image">
          <img src="<?= $this->session->userdata("photo") ? base_url('uploads/admin/' . $this->session->userdata("photo")) : ASSETS_URL . '/images/avatar/avatar1.png';?>" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p><?= $this->session->userdata("name"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control border-0 bg-transparent" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat bg-transparent"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?= base_url('dashboard'); ?>">
            <i class="mdi mdi-view-dashboard"></i> <span>Dashboard</span>
          </a>			
        </li>
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-account-multiple"></i>
            <span>Profiles</span>
            <span class="pull-right-container">
              <i class="ti-plus pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('profiles'); ?>"><i class="mdi mdi-resize-bottom-right"></i>List</a></li>
            <li><a href="<?= base_url('profiles/loggings'); ?>"><i class="mdi mdi-resize-bottom-right"></i>Loggings</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-widgets"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <i class="ti-plus pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('transactions'); ?>"><i class="mdi mdi-resize-bottom-right"></i>List</a></li>
            <li><a href="<?= base_url('transactions/loggings'); ?>"><i class="mdi mdi-resize-bottom-right"></i>Loggings</a></li>
          </ul>
        </li>
        <li>
          <a href="<?= base_url('tickets');?>">
            <i class="mdi mdi-email-variant"></i> <span>tickets</span>
            <span class="pull-right-container">
              <small class="badge pull-right badge-warning">12</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">