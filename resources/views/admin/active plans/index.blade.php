@extends('admin.layout.master')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Active Plans</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total 937 invoices.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- card-tools -->
                                    <div class="card-search search-wrap" data-search="search">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Quick search by order id">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div><!-- card-search -->
                                </div><!-- .card-title-group -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <table class="table table-orders">
                                    <thead class="tb-odr-head">
                                        <tr class="tb-odr-item">
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">Order ID</span>
                                                <span class="tb-odr-date d-none d-md-inline-block">Date</span>
                                            </th>
                                            <th class="tb-odr-amount">
                                                <span class="tb-odr-total">Amount</span>
                                                <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                                            </th>
                                            <th class="tb-odr-action">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="html/invoice-details.html">#746F5K2</a></span>
                                                <span class="tb-odr-date">23 Jan 2019, 10:45pm</span>
                                            </td>
                                            <td class="tb-odr-amount">
                                                <span class="tb-odr-total">
                                                    <span class="amount">$2300.00</span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-success">Complete</span>
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="{{ route('admin.active-plan.detail') }}" class="btn btn-dim btn-sm btn-primary">View</a>
                                                </div>
                                                <a href="html/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                        </tr><!-- .tb-odr-item -->
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="html/invoice-details.html">#546H74W</a></span>
                                                <span class="tb-odr-date">12 Jan 2020, 10:45pm</span>
                                            </td>
                                            <td class="tb-odr-amount">
                                                <span class="tb-odr-total">
                                                    <span class="amount">$120.00</span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-warning">Pending</span>
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="html/invoice-print.html" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    <a href="html/invoice-details.html" class="btn btn-dim btn-sm btn-primary">View</a>
                                                </div>
                                                <a href="html/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                        </tr><!-- .tb-odr-item -->
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="html/invoice-details.html">#87X6A44</a></span>
                                                <span class="tb-odr-date">26 Dec 2019, 12:15 pm</span>
                                            </td>
                                            <td class="tb-odr-amount">
                                                <span class="tb-odr-total">
                                                    <span class="amount">$560.00</span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-success">Complete</span>
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="html/invoice-print.html" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    <a href="html/invoice-details.html" class="btn btn-dim btn-sm btn-primary">View</a>
                                                </div>
                                                <a href="html/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                        </tr><!-- .tb-odr-item -->
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="html/invoice-details.html">#986G531</a></span>
                                                <span class="tb-odr-date">21 Jan 2019, 6 :12 am</span>
                                            </td>
                                            <td class="tb-odr-amount">
                                                <span class="tb-odr-total">
                                                    <span class="amount">$3654.00</span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-danger">Cancelled</span>
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="html/invoice-print.html" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    <a href="html/invoice-details.html" class="btn btn-dim btn-sm btn-primary">View</a>
                                                </div>
                                                <a href="html/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                        </tr><!-- .tb-odr-item -->
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="html/invoice-details.html">#326T4M9</a></span>
                                                <span class="tb-odr-date">21 Jan 2019, 6 :12 am</span>
                                            </td>
                                            <td class="tb-odr-amount">
                                                <span class="tb-odr-total">
                                                    <span class="amount">$200.00</span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-success">Complete</span>
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="html/invoice-print.html" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    <a href="html/invoice-details.html" class="btn btn-dim btn-sm btn-primary">View</a>
                                                </div>
                                                <a href="html/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                        </tr><!-- .tb-odr-item -->
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="html/invoice-details.html">#746F5K2</a></span>
                                                <span class="tb-odr-date">23 Jan 2019, 10:45pm</span>
                                            </td>
                                            <td class="tb-odr-amount">
                                                <span class="tb-odr-total">
                                                    <span class="amount">$2300.00</span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-success">Complete</span>
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="html/invoice-print.html" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    <a href="html/invoice-details.html" class="btn btn-dim btn-sm btn-primary">View</a>
                                                </div>
                                                <a href="html/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                        </tr><!-- .tb-odr-item -->
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="html/invoice-details.html">#546H74W</a></span>
                                                <span class="tb-odr-date">12 Jan 2020, 10:45pm</span>
                                            </td>
                                            <td class="tb-odr-amount">
                                                <span class="tb-odr-total">
                                                    <span class="amount">$120.00</span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-warning">Pending</span>
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="html/invoice-print.html" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    <a href="html/invoice-details.html" class="btn btn-dim btn-sm btn-primary">View</a>
                                                </div>
                                                <a href="html/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                        </tr><!-- .tb-odr-item -->
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="html/invoice-details.html">#87X6A44</a></span>
                                                <span class="tb-odr-date">26 Dec 2019, 12:15 pm</span>
                                            </td>
                                            <td class="tb-odr-amount">
                                                <span class="tb-odr-total">
                                                    <span class="amount">$560.00</span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-success">Complete</span>
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="html/invoice-print.html" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    <a href="html/invoice-details.html" class="btn btn-dim btn-sm btn-primary">View</a>
                                                </div>
                                                <a href="html/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                        </tr><!-- .tb-odr-item -->
                                    </tbody>
                                </table>
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul><!-- .pagination -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection