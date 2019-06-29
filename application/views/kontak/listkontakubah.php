
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Ubah Kontak Pelanggan
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
                  <h4><i class="icon-reorder"></i>Ubah Data Kontak</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
                
                
                <form action="<?=base_url()?>kontak/listkontakprosesubah" role="form" method="post" class="form-horizontal">
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >Grup</label>
                    <div class="controls">
                       <select name="grup" class="span4 chosen" id="grup">
                         <option value="">--Pilih--</option>
                         <?php
                         
                         foreach($grup as $g){
                         ?>
                          <option <?php if ($list->GroupID == $g->ID) echo "selected";?> value="<?=$g->ID?>"><?=$g->Name?></option>
                         <?php
                         }
                         ?>
                       </select>
                      
                       <span class="help-inline"></span>
                       <input type="hidden" class="span8" value="<?=$list->ID?>" required name="ID"/>
                    </div>
                  </div> 

                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >Nama Pelanggan</label>

                    <div class="controls">
                       <input type="text" class="span8" value="<?=$list->Name?>" required name="namapelanggan" placeholder="Input Nama Pelanggan" />
                       <span class="help-inline"></span>
                    </div>
                  </div> 

                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >No Telepon</label>

                    <div class="controls">
                       <input type="number" class="span4" value="<?=$list->Number?>"  required name="notelp" placeholder="Input No Telepon" />
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


  


