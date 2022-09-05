            </div>
            <footer class="main-footer">
                <div class="pull-right d-none d-sm-inline-block">
                    <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">FAQ</a>
                        </li>
                    </ul>
                </div> &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
            </footer>
            <div class="control-sidebar-bg"></div>
        </div>
        <script>var baseUrl = "<?= base_url('/');?>";</script>
        <!-- jQuery 3 -->
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js';?>"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/jquery-ui/jquery-ui.js';?>"></script>
        <!-- popper -->
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/popper/dist/popper.min.js';?>"></script>
        <!-- Bootstrap 4.0-->
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/bootstrap/dist/js/bootstrap.js';?>"></script>	
        <!-- Slimscroll -->
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/jquery-slimscroll/jquery.slimscroll.js';?>"></script>
        <!-- FastClick -->
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/fastclick/lib/fastclick.js';?>"></script>
        <!-- Sparkline -->
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js';?>"></script>
        <!-- apexcharts -->
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/apexcharts-bundle/irregular-data-series.js';?>"></script>
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/apexcharts-bundle/dist/apexcharts.js';?>"></script>
        <!-- FLOT CHARTS -->
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/Flot/jquery.flot.js';?>"></script>
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/Flot/jquery.flot.resize.js';?>"></script>
        <script src="<?= ASSETS_URL . '/scripts/global/jquery.loading.min.js';?>"></script>
        <script src="<?= ASSETS_URL . '/plugins/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js';?>"></script>
        <!-- AIUI Admin App -->
        <script src="<?= ASSETS_URL . '/scripts/global/template.js';?>"></script>
        <?php foreach ($scripts as $script): ?>
            <script src="<?= ASSETS_URL . '/' . $script;?>"></script>
        <?php endforeach; ?>
        <?php if ($this->session->flashdata("error")):?>
        <script>
            $.toast({
                heading: "Warning",
                text: "<?= $this->session->flashdata("error");?>",
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'error',
                hideAfter: 3000,
                stack: 6
            });
        </script>
        <?php endif;?>
    </body>
</html>