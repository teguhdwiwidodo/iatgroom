<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $userdata->nama; ?></p>
                <!-- Status -->
                <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>
            <!-- Optionally, you can add icons to the links -->

            <li <?php if ($page == 'home') {
                echo 'class="active"';
            } ?>>
                <a href="<?php echo base_url('Home'); ?>">
                    <i class="fa fa-tachometer"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li <?php if ($page == 'ruangan') {
                echo 'class="active"';
            } ?>>
                <a href="<?php echo base_url('Booking'); ?>">
                    <i class="fa fa-home"></i>
                    <span>Reservasi</span>
                </a>
            </li>

            <li <?php if ($page == 'evidence') {
                echo 'class="active"';
            } ?>>
                <a href="<?php echo base_url('Evidence'); ?>">
                    <i class="fa fa-upload"></i>
                    <span>Evidence</span>
                </a>
            </li>

            <li <?php if ($page == 'history') {
                echo 'class="active"';
            } ?>>
                <a href="<?php echo base_url('History'); ?>">
                    <i class="fa fa-history"></i>
                    <span>History Pemesanan</span>
                </a>
            </li>

             <li <?php if ($page == 'pegawai') {
                echo 'class="active"';
            } ?>>
                <a href="<?php echo base_url('Pegawai'); ?>">
                    <i class="fa fa-user"></i>
                    <span>Data Pegawai</span>
                </a>
            </li>

            <li <?php if ($page == 'posisi') {
                echo 'class="active"';
            } ?>>
                <a href="<?php echo base_url('Posisi'); ?>">
                    <i class="fa fa-briefcase"></i>
                    <span>Data Posisi</span>
                </a>
            </li>

            <li <?php if ($page == 'kota') {
                echo 'class="active"';
            } ?>>
                <a href="<?php echo base_url('Kota'); ?>">
                    <i class="fa fa-location-arrow"></i>
                    <span>Data Kota</span>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>