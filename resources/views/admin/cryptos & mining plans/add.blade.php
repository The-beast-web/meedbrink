@extends('admin.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    @if ($name == "plan")
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Add Investment Plan</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Add a new investment plan.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.cmp.index') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
                                    <em class="icon ni ni-arrow-left"></em>
                                    <span>Back</span>
                                </a>
                                <a href="{{ route('admin.cmp.index') }}"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none">
                                    <em class="icon ni ni-arrow-left"></em>
                                </a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Investment Plan Info</h5>
                                </div>
                                <form action="{{ route('admin.cmp.add.process') }}" method="post">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name-1">Plan Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="name" class="form-control form-control-lg"
                                                        id="full-name-1" placeholder="Enter plan's name">
                                                </div>
                                                @error('name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Daily Interest</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="phone-no-1" name="daily_interest"
                                                        placeholder="Enter plan's daily interest percentage">
                                                </div>
                                                @error('daily_interest')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="pay-amount-1">Plan Term</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="tenure" class="form-control form-control-lg"
                                                        id="pay-amount-1" placeholder="Enter plan's term">
                                                </div>
                                                @error('tenure')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="pay-amount-1">Minimum Deposit</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="min_deposit" class="form-control form-control-lg"
                                                        id="pay-amount-1" placeholder="Enter plan's min deposit">
                                                </div>
                                                @error('min_deposit')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="pay-amount-1">Maximum Deposit</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="max_deposit" class="form-control form-control-lg"
                                                        id="pay-amount-1" placeholder="Enter plan's max deposit">
                                                </div>
                                                @error('max_deposit')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="pay-amount-1">Total Return</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="total_return" class="form-control form-control-lg"
                                                        id="pay-amount-1"
                                                        placeholder="Enter plan's total return percentage">
                                                </div>
                                                @error('tenure')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Create Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                    @else
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Add Cryptocurrency</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Add a new cryptocurrency</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="{{ route('admin.cmp.index') }}"
                                        class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
                                        <em class="icon ni ni-arrow-left"></em>
                                        <span>Back</span>
                                    </a>
                                    <a href="{{ route('admin.cmp.index') }}"
                                        class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none">
                                        <em class="icon ni ni-arrow-left"></em>
                                    </a>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="card-head">
                                        <h5 class="card-title">Cryptocurrency Info</h5>
                                    </div>
                                    <form action="{{ route('admin.cmp.add.crypto') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name-1">Crypto Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="name" class="form-control form-control-lg"
                                                            id="full-name-1" placeholder="Enter crypto's name">
                                                    </div>
                                                    @error('name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="email-address-1">Crypto Abbr</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="abbr" class="form-control form-control-lg"
                                                            id="email-address-1" placeholder="Enter crypto's abbr">
                                                    </div>
                                                    @error('abbr')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no-1">Crypto Value</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="value" class="form-control form-control-lg"
                                                            id="phone-no-1" placeholder="Enter crypto's value">
                                                    </div>
                                                    @error('value')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no-1">Crypto Address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="address" class="form-control form-control-lg"
                                                            id="phone-no-1" placeholder="Enter crypto's value">
                                                    </div>
                                                    @error('address')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="customFileLabel">Crypto Image</label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" name="img" class="form-control form-control-lg"
                                                                id="customFile">
                                                        </div>
                                                    </div>
                                                    @error('img')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Create
                                                        Crypto</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .nk-block -->  
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
