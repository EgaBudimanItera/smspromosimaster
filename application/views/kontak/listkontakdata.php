
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          List Kontak Pelanggan
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Kontak Pelanggan</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">                                                              
      
      <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Data</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
             <div><a href="<?=base_url()?>kontak/listkontaktambahform" class="btn btn-primary">Tambah Data</a></div>
             <br>
             <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>

              <table class="table table-striped table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    
                    <th class="hidden-phone">Nama Pelanggan</th>
                    <th class="hidden-phone">No Telepon</th>
                    <th class="hidden-phone">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                    $no = 1;
                    foreach ($list as $l) {
                  ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    
                    <td><?=$l->Name?></td>
                    <td><?=$l->Number?></td>
                    <td>
                      <a data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-xs btn-warning" href="<?=base_url()?>kontak/listkontakupdateform/<?=$l->ID?>">
                        <i class="icon-pencil"></i>                
                      </a>
                      <a data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm('yakin akan menghapus data ini?')" class="btn btn-xs btn-danger" href="<?=base_url()?>kontak/listkontakhapus/<?=$l->ID?>" >
                        <i class="icon-trash"></i>  
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
      </div>                  
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
  


