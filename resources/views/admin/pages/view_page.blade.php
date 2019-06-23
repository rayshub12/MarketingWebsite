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
                                    <h4>Add Page</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Add Page</a>
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
                                    <h4 class="sub-title">Add Page Details</h4>
                                    <form enctype="multipart/form-data" method="post" action="{{ url('/admin/add-new-page') }}" name="add_property" id="add_property" novalidate="novalidate">
                                     {{ csrf_field() }}    
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Page Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="page_title" id="page_title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Url</label>
                                        <div class="input-group col-sm-10">
                                            <span class="input-group-addon" id="basic-addon2">http://Onlyitstuff.com/</span>
                                            <input type="text" name="page_url" id="page_url" class="form-control">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="Property Type">Page Category</label>
                                            <div class="col-sm-4">
                                                <select name="page_category" class="form-control">
                                                    <option value="1">Select One Value Only</option>
                                                    <option value="2">Type 2</option>
                                                    <option value="3">Type 3</option>
                                                </select>
                                            </div>
                                            <label class="col-sm-2 col-form-label" for="Property Type">Page Category</label>
                                            <div class="col-sm-4">
                                                <select name="select" class="form-control">
                                                    <option value="1">Select One Value Only</option>
                                                    <option value="2">Type 2</option>
                                                    <option value="3">Type 3</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Page Contents</label>
                                            <div class="col-sm-10">
                                                <ul class="nav nav-tabs md-tabs " role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#home7" role="tab" aria-expanded="false"><i class="icofont icofont-home"></i>Description</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#profile7" role="tab" aria-expanded="false"><i class="icofont icofont-ui-user "></i>Table Of Contents</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#messages7" role="tab" aria-expanded="false"><i class="icofont icofont-ui-message"></i>Methodology</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">
                                                    <div class="tab-pane active" id="home7" role="tabpanel" aria-expanded="true">
                                                    <textarea name="description" id="description" cols="30" rows="20" class="form-control"
                                                                placeholder="Default textarea"></textarea>
                                                    </div>
                                                    <div class="tab-pane" id="profile7" role="tabpanel" aria-expanded="false">
                                                    <textarea name="table_contents" id="table_contents" cols="30" rows="20" class="form-control"
                                                                placeholder="Default textarea"></textarea>
                                                    </div>
                                                    <div class="tab-pane" id="messages7" role="tabpanel" aria-expanded="false">
                                                    <textarea name="methodology" id="methodology" cols="30" rows="20" class="form-control"
                                                                placeholder="Default textarea"></textarea>
                                                    </div>
                                                </div>
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