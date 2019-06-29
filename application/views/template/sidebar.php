<?php
  $hakakses=$this->session->userdata('userHakakses');
?>  
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			
			<!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li class="<?php if($link=='' ||$link=="beranda"){echo'active';}?>">
                    <a href="<?=base_url()?>beranda" class="">
                        <span class="icon-box"> <i class="icon-home"></i></span> Dashboard
                        
                    </a>
                </li>
                <li class="<?php if($link=="singlesms"){echo'active';}?>">
                    <a href="<?=base_url()?>sms/single" class="">
                        <span class="icon-box"> <i class="icon-book"></i></span> Single SMS
                        
                    </a>
                </li>
                <li class="<?php if($link=="broadcastsms"){echo'active';}?>">
                    <a href="<?=base_url()?>sms/broadcast" class="">
                        <span class="icon-box"> <i class="icon-desktop"></i></span> Broadcast SMS
                        
                    </a>
                </li>
                <li class="<?php if($link=="autoreply"){echo'active';}?>">
                    <a href="<?=base_url()?>sms/autoreply" class="">
                        <span class="icon-box"> <i class="icon-suitcase"></i></span> Autoreply SMS
                        
                    </a>
                </li>

                <li class="<?php if($link=="grupkontak"){echo'active';}?>">
                    <a href="<?=base_url()?>kontak/grupkontak" class="">
                        <span class="icon-box"> <i class="icon-th"></i></span> Grup Kontak
                        
                    </a>
                </li>
                <li class="<?php if($link=="listkontak"){echo'active';}?>">
                    <a href="<?=base_url()?>kontak/listkontak" class="">
                        <span class="icon-box"> <i class="icon-user"></i></span> List Kontak
                        
                    </a>
                </li>
                
                <li class="<?php if($link=="inbox"){echo'active';}?>">
                    <a href="<?=base_url()?>sms/inbox" class="">
                        <span class="icon-box"> <i class="icon-list"></i></span> Inbox
                        
                    </a>
                </li>
                <li class="<?php if($link=="sentitem"){echo'active';}?>">
                    <a href="<?=base_url()?>sms/sentitem" class="">
                        <span class="icon-box"> <i class="icon-list-alt"></i></span> Sent Item
                        
                    </a>
                </li>
                <li class="<?php if($link=="outbox"){echo'active';}?>">
                    <a href="<?=base_url()?>sms/outbox" class="">
                        <span class="icon-box"> <i class="icon-tasks"></i></span> Inbox
                        
                    </a>
                </li>
                <!-- 
                
                <li class="has-sub <?php if($link=='inbox'||$link=='outbox'||$link=='sentitem'){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-tasks"></i></span> Detail SMS
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($link=='inbox'){echo'active';}?>"><a href="<?=base_url()?>sms/inbox">Inbox</a></li>
                        <li class="<?php if($link=='sentitem'){echo'active';}?>"><a href="<?=base_url()?>sms/sentitem">Sent Item</a></li>
                        <li class="<?php if($link=='outbox'){echo'active';}?>"><a href="<?=base_url()?>sms/outbox">Outbox</a></li>
                    </ul>
                </li>-->
                <!-- <li class="has-sub <?php if($link=="lapinbox"||$link=="lapsentitem"){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-tasks"></i></span> Laporan
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($link=="lapinbox"){echo'active';}?>"><a href="<?=base_url()?>laporan/inbox">Inbox </a></li>
                        <li class="<?php if($link=="lapsentitem"){echo'active';}?>"><a href="<?=base_url()?>laporan/sentitem">Inbox </a></li>
                       
                    </ul>
                </li>  -->
            </ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->