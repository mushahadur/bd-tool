@extends('user.layouts.app')
@section('title')
BKash Info
@endsection

@section('contain')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">BKash Info</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">BKash Info</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12">
              <!-- general form elements -->
              <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">BKash Info অর্ডার করুন।</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Type:</label>
                        <select class="form-control">
                          <option>Select</option>
                          <option>BKash Number</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">বিকাশ নাম্বারঃ</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0174154745">
                      </div>
                    </div>
                    
                    <div class="form-group px-3">
                      <label>BKash Info সম্পর্কে বিস্তারিত লিখুনঃ(যদি কিছু বলার থাকে)</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Pay Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
          </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
<!-- /.content -->
@endsection