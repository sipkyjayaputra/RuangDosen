@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Log Aktivitas</h1>
@stop

@section('content')
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_0" data-toggle="tab">Semua</a></li>
              <li><a href="#tab_1" data-toggle="tab">Pengajaran</a></li>
              <li><a href="#tab_2" data-toggle="tab">Penelitian</a></li>
              <li><a href="#tab_3" data-toggle="tab">PKM</a></li>
              <li><a href="#tab_4" data-toggle="tab">Publikasi</a></li>
              <li><a href="#tab_5" data-toggle="tab">Lain-lain</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_0">

						<div class="card panel panel-info">
							<div class="card-header panel-heading">Timeline Umum
							</div>
							<div class="card-body panel-body">
								<ul class="timeline">
								@foreach($aktivitass as $aktivitas)
								<?php if($aktivitas->user_id == $user_id){ ?>

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								        	{{\Carbon\Carbon::parse($aktivitas->updated_at)->diffForHumans()}}
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i><?php echo " ".(substr($aktivitas->updated_at, 11,15)); ?></span>
								            <?php
								            switch($aktivitas->kategori_id){
								            	case 0 : $ktg = "Umum"; break;
								            	case 1 : $ktg = "Pengajaran"; break;
								            	case 2 : $ktg = "Penelitian"; break;
								            	case 3 : $ktg = "PKM"; break;
								            	case 4 : $ktg = "Publikasi"; break;
								            	case 5 : $ktg = "Lain-lain"; break;
								            }
								            ?>
								            <h3 class="timeline-header"><?php echo $ktg ?></h3>

								            <div class="timeline-body">
								                {{$aktivitas->Keterangan}}
								            </div>  

								            <div class="timeline-footer">
								                <!--<a class="btn btn-primary btn-xs">...</a> -->
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    

								
								<?php } ?>
								@endforeach
								</ul>
							</div>
						</div>

              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_1">

						<div class="card panel panel-info">
							<div class="card-header panel-heading">Timeline Pengajaran
							</div>
							<div class="card-body panel-body">
								<ul class="timeline">
								@foreach($aktivitass as $aktivitas)
								<?php if($aktivitas->user_id == $user_id && $aktivitas->kategori_id == 1){ ?>

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								        	{{\Carbon\Carbon::parse($aktivitas->updated_at)->diffForHumans()}}
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i><?php echo (substr($aktivitas->updated_at, 11,15)); ?></span>
								            <?php
								            switch($aktivitas->kategori_id){
								            	case 0 : $ktg = "Umum"; break;
								            	case 1 : $ktg = "Pengajaran"; break;
								            	case 2 : $ktg = "Penelitian"; break;
								            	case 3 : $ktg = "PKM"; break;
								            	case 4 : $ktg = "Publikasi"; break;
								            	case 5 : $ktg = "Lain-lain"; break;
								            }
								            ?>
								            <h3 class="timeline-header"><?php echo $ktg ?></h3>

								            <div class="timeline-body">
								                {{$aktivitas->Keterangan}}
								            </div>  

								            <div class="timeline-footer">
								                <!--<a class="btn btn-primary btn-xs">...</a> -->
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    

								<?php } ?>
								@endforeach
								</ul>

							</div>
						</div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

              	<div class="card panel panel-info">
				<div class="card-header panel-heading">Timeline Penelitian
				</div>
				<div class="card-body panel-body">
								<ul class="timeline">
								@foreach($aktivitass as $aktivitas)
								<?php if($aktivitas->user_id == $user_id && $aktivitas->kategori_id == 2){ ?>

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								        	{{\Carbon\Carbon::parse($aktivitas->updated_at)->diffForHumans()}}
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i><?php echo (substr($aktivitas->updated_at, 11,15)); ?></span>
								            <?php
								            switch($aktivitas->kategori_id){
								            	case 0 : $ktg = "Umum"; break;
								            	case 1 : $ktg = "Pengajaran"; break;
								            	case 2 : $ktg = "Penelitian"; break;
								            	case 3 : $ktg = "PKM"; break;
								            	case 4 : $ktg = "Publikasi"; break;
								            	case 5 : $ktg = "Lain-lain"; break;
								            }
								            ?>
								            <h3 class="timeline-header"><?php echo $ktg ?></h3>

								            <div class="timeline-body">
								                {{$aktivitas->Keterangan}}
								            </div>  

								            <div class="timeline-footer">
								                <!--<a class="btn btn-primary btn-xs">...</a> -->
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    

								<?php } ?>
								@endforeach
								</ul>
				</div>
				</div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <div class="card panel panel-info">
				<div class="card-header panel-heading">Timeline PKM
				</div>
				<div class="card-body panel-body">
								<ul class="timeline">
								@foreach($aktivitass as $aktivitas)
								<?php if($aktivitas->user_id == $user_id && $aktivitas->kategori_id == 3){ ?>

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								        	{{\Carbon\Carbon::parse($aktivitas->updated_at)->diffForHumans()}}
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i><?php echo (substr($aktivitas->created_at, 11,15)); ?></span>
								            <?php
								            switch($aktivitas->kategori_id){
								            	case 0 : $ktg = "Umum"; break;
								            	case 1 : $ktg = "Pengajaran"; break;
								            	case 2 : $ktg = "Penelitian"; break;
								            	case 3 : $ktg = "PKM"; break;
								            	case 4 : $ktg = "Publikasi"; break;
								            	case 5 : $ktg = "Lain-lain"; break;
								            }
								            ?>
								            <h3 class="timeline-header"><?php echo $ktg ?></h3>

								            <div class="timeline-body">
								                {{$aktivitas->Keterangan}}
								            </div>  

								            <div class="timeline-footer">
								                <!--<a class="btn btn-primary btn-xs">...</a> -->
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    

								<?php } ?>
								@endforeach
								</ul>
				</div>
				</div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <div class="card panel panel-info">
				<div class="card-header panel-heading">Timeline Publikasi
				</div>
				<div class="card-body panel-body">
								<ul class="timeline">
								@foreach($aktivitass as $aktivitas)
								<?php if($aktivitas->user_id == $user_id && $aktivitas->kategori_id == 4){ ?>

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								        	{{\Carbon\Carbon::parse($aktivitas->updated_at)->diffForHumans()}}
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i><?php echo (substr($aktivitas->updated_at, 11,15)); ?></span>
								            <?php
								            switch($aktivitas->kategori_id){
								            	case 0 : $ktg = "Umum"; break;
								            	case 1 : $ktg = "Pengajaran"; break;
								            	case 2 : $ktg = "Penelitian"; break;
								            	case 3 : $ktg = "PKM"; break;
								            	case 4 : $ktg = "Publikasi"; break;
								            	case 5 : $ktg = "Lain-lain"; break;
								            }
								            ?>
								            <h3 class="timeline-header"><?php echo $ktg ?></h3>

								            <div class="timeline-body">
								                {{$aktivitas->Keterangan}}
								            </div>  

								            <div class="timeline-footer">
								                <!--<a class="btn btn-primary btn-xs">...</a> -->
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    

								<?php } ?>
								@endforeach
								</ul>
				</div>
				</div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                <div class="card panel panel-info">
				<div class="card-header panel-heading">Timeline Lain-lain
				</div>
				<div class="card-body panel-body">
								<ul class="timeline">
								@foreach($aktivitass as $aktivitas)
								<?php if($aktivitas->user_id == $user_id && $aktivitas->kategori_id == 5){ ?>

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								        	{{\Carbon\Carbon::parse($aktivitas->updated_at)->diffForHumans()}}
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i><?php echo (substr($aktivitas->updated_at, 11,15)); ?></span>
								            <?php
								            switch($aktivitas->kategori_id){
								            	case 0 : $ktg = "Umum"; break;
								            	case 1 : $ktg = "Pengajaran"; break;
								            	case 2 : $ktg = "Penelitian"; break;
								            	case 3 : $ktg = "PKM"; break;
								            	case 4 : $ktg = "Publikasi"; break;
								            	case 5 : $ktg = "Lain-lain"; break;
								            }
								            ?>
								            <h3 class="timeline-header"><?php echo $ktg ?></h3>

								            <div class="timeline-body">
								                {{$aktivitas->Keterangan}}
								            </div> 

								            <div class="timeline-footer">
								                <!--<a class="btn btn-primary btn-xs">...</a> -->
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    

								<?php } ?>
								@endforeach
								</ul>
				</div>
				</div>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>


@stop
