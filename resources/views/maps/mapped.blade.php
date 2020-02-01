@extends('admin.layout.app')
@section('page_name_1', 'Map')
@section('page_name_2', 'Farm')
@section('page_action', 'Ipetu farm')
@section('content')

  <!-- Content Wrapper. Contains page content -->
 <div class="text-center">
   <button type="button" class="btn btn-primary btn-lg">
     Enter Contract
   </button>
 </div>
  <br>


  <div class="row">

    <div class="col-md-12">

      <div class="card card-success">
        <div class="card-header">
          <h5 class="card-title">Ipetutt Farmer</h5>

          <div class="card-tools">
            {{--<button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
              {{--<i class="fas fa-minus"></i>--}}
            {{--</button>--}}
            <div class="btn-group">
              <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-wrench"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a href="#" class="dropdown-item">More Details</a>
                <a href="#" class="dropdown-item">Message Farmer Agent</a>
                <a href="#" class="dropdown-item">Enter Contract</a>
                <a class="dropdown-divider"></a>
                <a href="#" class="dropdown-item">Separated link</a>
              </div>
            </div>

            <button onclick="location.href = {{\Illuminate\Support\Facades\URL::previous()}}"  type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              {{--<button type="button" class="btn btn-tool" data-card-widget="remove">--}}
                {{--<i class="fas fa-times"></i>--}}
              {{--</button>--}}
              {{--<p class="text-center">--}}
                {{--<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>--}}
              {{--</p>--}}

              <div style="width: 100%; height: 100%;">
                {!! Mapper::render() !!}
              </div>
              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
              <p class="text-center">
                <strong>Goal Completion</strong>
              </p>

              <div class="progress-group">
                Total Bags
                <span class="float-right"><b>160</b>/200</span>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-primary" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->

              <div class="progress-group">
                Nitrogen Content
                <span class="float-right"><b>310</b>/400</span>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-danger" style="width: 75%"></div>
                </div>
              </div>

              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Pesticide Content</span>
                <span class="float-right"><b>480</b>/800</span>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-success" style="width: 60%"></div>
                </div>
              </div>

              <!-- /.progress-group -->
              <div class="progress-group">
                Production stage
                <span class="float-right"><b>250</b>/500</span>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-warning" style="width: 50%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./card-body -->
        <div class="card-footer">
          <div class="row">
            <div class="col-sm-3 col-6">
              <div class="description-block border-right">
                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                <h5 class="description-header">$35,210.43</h5>
                <span class="description-text">TOTAL REVENUE</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-6">
              <div class="description-block border-right">
                <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                <h5 class="description-header">$10,390.90</h5>
                <span class="description-text">TOTAL COST</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-6">
              <div class="description-block border-right">
                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                <h5 class="description-header">$24,813.53</h5>
                <span class="description-text">TOTAL PROFIT</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-6">
              <div class="description-block">
                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                <h5 class="description-header">1200</h5>
                <span class="description-text">GOAL COMPLETIONS</span>
              </div>
              <!-- /.description-block -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>

@endsection
