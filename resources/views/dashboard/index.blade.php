@extends('layouts.dashboard')

@section('title', 'Dashboard Laundry')
@section('content')
<div class="container-fluid">

<div class="row">
    <div class="col-md-12">

        <h2 class="page-title">Dashboard</h2>
        
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-primary text-light">
                                <div class="stat-panel text-center">
                                    <div class="stat-panel-number h1 ">24</div>
                                    <div class="stat-panel-title text-uppercase">New Users</div>
                                </div>
                            </div>
                            <a href="#" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-success text-light">
                                <div class="stat-panel text-center">
                                    <div class="stat-panel-number h1 ">8</div>
                                    <div class="stat-panel-title text-uppercase">Support Tickets</div>
                                </div>
                            </div>
                            <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-info text-light">
                                <div class="stat-panel text-center">
                                    <div class="stat-panel-number h1 ">58</div>
                                    <div class="stat-panel-title text-uppercase">New Orders</div>
                                </div>
                            </div>
                            <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-warning text-light">
                                <div class="stat-panel text-center">
                                    <div class="stat-panel-number h1 ">18</div>
                                    <div class="stat-panel-title text-uppercase">New Comments</div>
                                </div>
                            </div>
                            <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Sales Report</div>
                    <div class="panel-body">
                        <div class="chart">
                            <canvas id="dashReport" height="310" width="600"></canvas>
                        </div>
                        <div id="legendDiv"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Recent Oreders</div>
                    <div class="panel-body">
                        <div class="alert alert-dismissible alert-success">
                            <button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
                            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Pie Chart</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="chart-dot-list">
                                    <li class="a1">date 1</li>
                                    <li class="a2">data 2</li>
                                    <li class="a3">data 3</li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <div class="chart chart-doughnut">
                                    <canvas id="chart-area3" width="1200" height="900" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Doughnut</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="chart-dot-list">
                                    <li class="a1">date 1</li>
                                    <li class="a2">data 2</li>
                                    <li class="a3">data 3</li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <div class="chart chart-doughnut">
                                    <canvas id="chart-area4" width="1200" height="900" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection