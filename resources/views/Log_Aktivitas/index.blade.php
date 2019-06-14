@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Log Aktivitas</h1>
@stop

@section('content')
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Pengajaran</a></li>
              <li><a href="#tab_2" data-toggle="tab">Penelitian</a></li>
              <li><a href="#tab_3" data-toggle="tab">PKM</a></li>
              <li><a href="#tab_4" data-toggle="tab">Publikasi</a></li>
              <li><a href="#tab_5" data-toggle="tab">Lain-lain</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">

						<div class="card panel panel-info">
							<div class="card-header panel-heading">Pengajaran
								<a href="#" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
							</div>
							<div class="card-body panel-body">
								<ul class="timeline">

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								            10 Feb. 2014
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

								            <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

								            <div class="timeline-body">
								                ...
								                Content goes here
								            </div>

								            <div class="timeline-footer">
								                <a class="btn btn-primary btn-xs">...</a>
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    ...

								</ul>

							</div>
						</div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

              	<div class="card panel panel-info">
				<div class="card-header panel-heading">Penelitian
					<a href="#" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">
					<ul class="timeline">

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								            10 Feb. 2014
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

								            <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

								            <div class="timeline-body">
								                ...
								                Content goes here
								            </div>

								            <div class="timeline-footer">
								                <a class="btn btn-primary btn-xs">...</a>
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    ...

								</ul>
				</div>
				</div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <div class="card panel panel-info">
				<div class="card-header panel-heading">PKM
					<a href="#" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">
					<ul class="timeline">

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								            10 Feb. 2014
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

								            <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

								            <div class="timeline-body">
								                ...
								                Content goes here
								            </div>

								            <div class="timeline-footer">
								                <a class="btn btn-primary btn-xs">...</a>
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    ...

								</ul>
				</div>
				</div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <div class="card panel panel-info">
				<div class="card-header panel-heading">Publikasi
					<a href="#" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">
					<ul class="timeline">

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								            10 Feb. 2014
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

								            <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

								            <div class="timeline-body">
								                ...
								                Content goes here
								            </div>

								            <div class="timeline-footer">
								                <a class="btn btn-primary btn-xs">...</a>
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->

								    ...

								</ul>
				</div>
				</div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                <div class="card panel panel-info">
				<div class="card-header panel-heading">Lain-lain
					<a href="#" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">
					<ul class="timeline">

								    <!-- timeline time label -->
								    <li class="time-label">
								        <span class="bg-red">
								            10 Feb. 2014
								        </span>
								    </li>
								    <!-- /.timeline-label -->

								    <!-- timeline item -->
								    <li>
								        <!-- timeline icon -->
								        <i class="fa fa-envelope bg-blue"></i>
								        <div class="timeline-item">
								            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

								            <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

								            <div class="timeline-body">
								                ...
								                Content goes here
								            </div>

								            <div class="timeline-footer">
								                <a class="btn btn-primary btn-xs">...</a>
								            </div>
								        </div>
								    </li>
								    <!-- END timeline item -->
								    

								    ...

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
