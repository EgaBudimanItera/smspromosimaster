
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Ubah Grup Kontak
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">List Kontak</a><span class="divider">&nbsp;</span></li>
          <li><a href="#">Ubah Kontak</a><span class="divider-last">&nbsp;</span></li>
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
                  <h4><i class="icon-reorder"></i>Ubah Data Grup Kontak</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
                
                
                <form action="<?=base_url()?>kontak/grupkontakprosesubah" role="form" method="post" class="form-horizontal">
                  

                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >Nama Grup</label>

                    <div class="controls">
                       <input type="text" class="span8" value="<?=$list->Name?>" required name="name" placeholder="Input Nama Grup" />
                       <input type="hidden" class="span8" value="<?=$list->ID?>" required name="ID" placeholder="Input Nama Grup" />
                       <span class="help-inline"></span>
                    </div>
                  </div> 

                  
                  
                  
                  
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Ubah Data</button>
                    <button type="reset" class="btn btn-warning"><i class="icon-remove"></i>Reset</button>
                  </div>
                </form>
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


  


