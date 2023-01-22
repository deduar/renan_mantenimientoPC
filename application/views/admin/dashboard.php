<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php //if ($this->backend_lib->verGrafico()): ?>
    <section class="content-header">
        <h1>
        Dashboard
        <small>Panel de Control </small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $cantUsuarios;?></h3>

                        <p>Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?php echo base_url();?>administrador/usuarios" class="small-box-footer">Ver Usuarios <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
<?php //endif?>
</div>
        