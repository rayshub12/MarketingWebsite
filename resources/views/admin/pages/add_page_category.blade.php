@extends('admin.layouts.adminLayout.admin_design')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Add Category</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Category</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Add Category</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="sub-title">Add Category Details</h4>
                                    <form enctype="multipart/form-data" method="post"
                                        action="{{ url('/admin/add-page-category') }}" name="add_property"
                                        id="add_property" novalidate="novalidate">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="category_title" id="page_title"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Short Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="category_name" id="category_name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Url</label>
                                            <div class="input-group col-sm-10">
                                                <span class="input-group-addon"
                                                    id="basic-addon2">http://Onlyitstuff.com/</span>
                                                <input type="text" name="category_url" id="page_url"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Page Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" id="description" cols="30" rows="20"
                                                    class="form-control" placeholder="Default textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="checkbox1"></label>
                                            <div class="col-sm-10">
                                                <div class="border-checkbox-section">
                                                    <div class="border-checkbox-group border-checkbox-group-primary">
                                                        <input class="border-checkbox" type="checkbox" id="featured"
                                                            name="featured">
                                                        <label class="border-checkbox-label"
                                                            for="featured">featured</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">status</label>
                                            <div class="col-sm-4">
                                                <input type="checkbox" class="js-small" checked name="status"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Basic Form Inputs card end -->
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">
        </div>
    </div>
    @endsection