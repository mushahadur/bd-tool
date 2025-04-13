@extends('user.layouts.app')
@section('title')
    Home 
@endsection

@section('contain')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Total Services Used</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Successful</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Pending</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Canceled</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        {{-- User History --}}
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header card-info card-outline">
                  <h2 class="card-title text-bold">User History</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Service Type</th>
                        <th>Request Date</th>
                        <th>Status</th>
                        <th>Comments</th>
                        <th>Delivery Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>183</td>
                        <td>NID</td>
                        <td>11-7-2026</td>
                        <td><span class="tag tag-success">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        <td>11-7-2026</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <a href="#" class="btn btn-info pr-1"><i class="fas fa-edit"></i></a>
                              <a href="#" class="btn btn-danger pl-1"><i class="fas fa-trash"></i></a>
                            </div>
                          </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          {{-- Recharge History --}}
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header card-info card-outline">
                  <h2 class="card-title text-bold">Recharge History</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Mobile Number</th>
                        <th>Transection ID</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Invouce</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>183</td>
                        <td>01784526788</td>
                        <td>VV_11-ER-2026</td>
                        <td>11-02-2026</td>
                        <td>684 $</td>
                        <td><span class="tag tag-success">Approved</span></td>
                        <td>I_2143</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        <!-- Main row -->
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection