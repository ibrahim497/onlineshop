@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 card_header_title">
                          <i class="fa fa-gg-circle"></i>View Banner Information
                    </div>
                    <div class="col-md-6 card_header_button">
                          <a href="{{url('admin/banner')}}" class="btn btn-sm btn-dark"><i class="fa fa-th"></i>All Banner</a>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <table class="table table-bordered table-striped custom_view_table">
                        <tr>
                          <td>Banner Title</td>
                          <td>:</td>
                          <td>{{$data->ban_title}}</td>
                        </tr>
                        <tr>
                          <td>Banner Subtitle</td>
                          <td>:</td>
                          <td>{{$data->ban_subtitle}}</td>
                        </tr>
                        <tr>
                          <td>Banner Button</td>
                          <td>:</td>
                          <td>{{$data->ban_button}}</td>
                        </tr>
                        <tr>
                          <td>Banner Button URL</td>
                          <td>:</td>
                          <td>{{$data->ban_url}}</td>
                        </tr>
                    </table>
                  </div>
                  <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-sm btn-info">Print</a>
                <a href="#" class="btn btn-sm btn-warning">Excel</a>
                <a href="#" class="btn btn-sm btn-primary">Print</a>
            </div>
        </div>
    </div>
</div>
@endsection
