@extends('layout.layout')

@section('content')
    <!-- Open Account Start -->
    <section class="openaccount openaccount-section noheadtitle">
        <div class="container">

            <!-- Open Account Area -->
            <div class="openaccount-wrapper openliveacc">
                <div class="openaccount-wrapper-row">

                    <!-- Welcome -->
                    <div class="openaccount-welcomecol">
                        <div class="welcomearea welcomeopendemoacc">
                            <div class="welcomeimg">
                                <img src="/assets/img/section/openaccount_welcome_opendemo_img.svg" alt="" width="324" height="378" />
                            </div>
                            <div class="sitecontent-desc contentsoft">
                                <h2>Open Demo Account</h2>
                                <p><strong>Welcome!</strong> Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="welcomebtn">
                                <a class="btn btn-lg rounded-pill btn-secondary JsWelcomeBtn" href="javascript:void(0)" title="Open Demo Account" rel="bookmark" data-function="opendemoaccount">Open Demo Account</a>
                            </div>
                        </div>
                        <div class="welcomearea welcomeopenliveacc">
                            <div class="welcomeimg">
                                <img src="/assets/img/section/openaccount_welcome_openlive_img.svg" alt="" width="481" height="431" />
                            </div>
                            <div class="sitecontent-desc contentsoft">
                                <h2>Open Live Account</h2>
                                <p><strong>Welcome!</strong> Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="welcomebtn">
                                <a class="btn btn-lg rounded-pill btn-secondary JsWelcomeBtn" href="javascript:void(0)" title="Open Live Account" rel="bookmark" data-function="openliveaccount">Open Live Account</a>
                            </div>
                        </div>
                    </div>
                    <!-- Welcome -->

                    <!-- Form -->
                    <div class="openaccount-formcol">
                        <div class="formboxarea formopendemoacc">
                            <div class="sitecontent-desc">
                                <h2>Open Demo Account</h2>
                                <p><strong>Welcome!</strong> Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="alertarea">
                                <div class="alert alert-sweet alert-warning alert-dismissible fade show d-none" role="alert">
                                    <div class="alert-flex">
                                        <div class="alert-icon">
                                            <div class="animation-alert-icons">
                                                <div class="alert-icons alert-icons-warning">
                                                    <div class="alert-icons-warning-body"></div>
                                                    <div class="alert-icons-warning-dot"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert-desc">
                                            <h6 class="alert-heading">Warning!</h6>
                                            <p>Aww yeah, you successfully read this important alert message.</p>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="formarea">
                                <form class="siteformui" action="" autocomplete="off" novalidate>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter First Name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Last Name" />
                                    </div>
                                    <div class="form-group">
                                        <label>E-Mail</label>
                                        <input type="email" class="form-control" placeholder="Enter E-Mail" />
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="Enter Phone" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" />
                                    </div>
                                    <div class="form-group">
                                        <label>Re-Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Re-Password" />
                                    </div>
                                    <div class="form-row formbottom">
                                        <div class="col-lg">
                                            <div class="recaptcha-area">
                                                <div class="recaptcha-check">
                                                    <div class="g-recaptcha" data-theme="dark" data-sitekey="6LewOKAUAAAAAMDO2yohWeyDcjFAHfcuEqK2mIp4"></div>
                                                </div>
                                                <label>I'm Not Robot</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-auto">
                                            <button type="button" class="btn btn-lg rounded-pill btn-info">Open Demo Account</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="formboxarea formopenliveacc">
                            <div class="sitecontent-desc">
                                <h2>Open Live Account</h2>
                                <p><strong>Welcome!</strong> Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="alertarea">
                                <div class="alert alert-sweet alert-warning alert-dismissible fade show d-none" role="alert">
                                    <div class="alert-flex">
                                        <div class="alert-icon">
                                            <div class="animation-alert-icons">
                                                <div class="alert-icons alert-icons-warning">
                                                    <div class="alert-icons-warning-body"></div>
                                                    <div class="alert-icons-warning-dot"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert-desc">
                                            <h6 class="alert-heading">Warning!</h6>
                                            <p>Aww yeah, you successfully read this important alert message.</p>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="formarea">
                                <form class="siteformui" action="" autocomplete="off" novalidate>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter First Name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Last Name" />
                                    </div>
                                    <div class="form-group">
                                        <label>E-Mail</label>
                                        <input type="email" class="form-control" placeholder="Enter E-Mail" />
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="Enter Phone" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" />
                                    </div>
                                    <div class="form-group">
                                        <label>Re-Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Re-Password" />
                                    </div>
                                    <div class="form-row formbottom">
                                        <div class="col-lg">
                                            <div class="recaptcha-area">
                                                <div class="recaptcha-check">
                                                    <div class="g-recaptcha" data-theme="dark" data-sitekey="6LewOKAUAAAAAMDO2yohWeyDcjFAHfcuEqK2mIp4"></div>
                                                </div>
                                                <label>I'm Not Robot</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-auto">
                                            <button type="button" class="btn btn-lg rounded-pill btn-info">Open Live Account</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->

                </div>
            </div>
            <!-- Open Account Area -->

        </div>
    </section>
    <!-- Open Account End -->

    <x-common-platforms/>
    <x-common-about-us/>
@endsection
