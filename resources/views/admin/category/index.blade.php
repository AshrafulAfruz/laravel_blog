@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Category Lists</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item active">Category Lists</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Category Lists</h3>
                  <a href="{{ route('category.create')}}" class="btn btn-primary float-right">Create Category</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th style="width: 10px">CatID</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th style="width: 40px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $cnt = 1;
                      @endphp
                      @foreach ($categories as $category)
                      <tr>
                        <td>{{$cnt++}}.</td>
                        <td>{{'#'.$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                          <a href="{{ route('category.edit',$category->id)}}"><i class="fa fa-edit btn btn-sm btn-info"></i></a>
                        </td>
                        
                      </tr>
                      @endforeach
    
                    </tbody>
                  </table>
                  
                </div>
                <div class="card-footer clearfix">
                  {{ $categories->links() }}
                </div>
                
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    
@endsection