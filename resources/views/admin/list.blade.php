@include('layouts.nav')
@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Tables</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Admin</a>
                </li>
                <li class="breadcrumb-item active">Tables
                </li>
                </ol>
            </div>
            </div>
        </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->

        <!-- Bordered table start -->
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Admin table</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <p class="card-text">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Adress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">4</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Bordered table end -->
        </div>
    </div>
@endsection