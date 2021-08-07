@extends('layouts.admin')
@section('title', 'Tổng quan | Admin - Graphics Tablet')
@section('content')
    <div class="section-admin container-fluid">
        <div class="row admin text-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <h4 class="text-left text-uppercase"><b>Đơn hàng</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="col-xs-3 mar-bot-15 text-left">
                                    <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">10,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 78%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Sản phẩm</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">5,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Doanh thu</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$70,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-blue"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Người dùng</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">100,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-purple"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>Thống kê sản phẩm bán ra</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-grey active">
                                                <input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                            <label class="btn btn-grey">
                                                <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline cus-product-sl-rp">
                            <li>
                                <h5><i class="fa fa-circle" style="color: #24caa1;"></i>Bags</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #00b5c2;"></i>Shoes</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #ff7f5a;"></i>Jewelery</h5>
                            </li>
                        </ul>
                        <div id="morris-area-chart" style="height: 356px;"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30">
                        <h3 class="box-title">Tổng lượt truy cập</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success">8659</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-10">
                        <h3 class="box-title">Tổng số lượt truy cập trang</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple">7469</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-10">
                        <h3 class="box-title">Khách truy cập duy nhất</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info">6011</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs">
                        <h3 class="box-title">Tỷ lệ thoát</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash4"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="text-danger">18%</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="traffic-analysis-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% last month</small> Lưu lượng truy cập trang web</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Tổng</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Tháng</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Ngày</h6>
                                <b>5.50%</b></div>
                        </div>
                        <div id="sparkline8"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner res-mg-t-30">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> 18% last month</small> Lưu lượng truy cập trang web</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Tổng</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Tháng</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Ngày</h6>
                                <b>5.50%</b></div>
                        </div>
                        <div id="sparkline9"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner res-mg-t-30">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% last month</small> Lưu lượng truy cập trang web</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Tổng</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Tháng</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Ngày</h6>
                                <b>5.50%</b></div>
                        </div>
                        <div id="sparkline10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>Thống kê đơn hàng</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <a href="#" class="btn btn-dark-blue btn-circle active tip-top" data-toggle="tooltip" title="Upload">
                                                <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                            </a>
                                        <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip" title="Refresh">
                                                <i class="fa fa-reply" aria-hidden="true"></i>
                                            </a>
                                        <a href="#" class="btn btn-blue-grey btn-circle active tip-top" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline cus-product-sl-rp">
                            <li>
                                <h5><i class="fa fa-circle" style="color: #24caa1;"></i>Bags</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #888;"></i>Shoes</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #ff7f5a;"></i>Jewelery</h5>
                            </li>
                        </ul>
                        <div id="extra-area-chart"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="analytics-rounded mg-b-10 res-mg-t-30">
                        <div class="analytics-rounded-content">
                            <h5>Phần trăm phân phối</h5>
                            <h2><span class="counter">60</span>/20</h2>
                            <div class="text-center">
                                <div id="sparkline51"></div>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-rounded">
                        <div class="analytics-rounded-content">
                            <h5>Phần trăm phân chia</h5>
                            <h2><span class="counter">150</span>/<span class="counter">54</span></h2>
                            <div class="text-center">
                                <div id="sparkline52"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
