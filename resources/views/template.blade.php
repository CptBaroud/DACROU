@extends('layout')

@section('content')
    <section class="hero-wrap" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row description align-items-center justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="text">
                        <h2>DACROU</h2>
                        <h4 class="mb-5">A Counter Strike Global Offensive Team</h4>
                        <p class="mb-3">LVL 3 FACEIT LUL</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section" id="buttons">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="heading-section">Buttons <br>
                        <small>Pick your style</small>
                    </h2>
                </div>
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary">Default</button>
                    <button type="button" class="btn btn-primary btn-round">Round</button>
                    <button type="button" class="btn btn-primary btn-round">
                        <i class="ion-ios-heart"></i> With Icon
                    </button>
                    <button type="button" class="btn btn-primary btn-fab btn-round">
                        <i class="ion-ios-heart"></i>
                    </button>
                    <button type="button" class="btn btn-link">Simple</button>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="heading-section">
                        <small>Pick your size</small>
                    </h2>
                </div>
                <div class="col-md-12 mb-3">
                    <button type="button" class="btn btn-primary btn-sm">Small Size</button>
                    <button type="button" class="btn btn-primary">Regular Size</button>
                    <button type="button" class="btn btn-primary btn-lg">Large Size</button>
                </div>
                <div class="col-md-12">
                    <button type="button" class="btn btn-outline-primary btn-sm">Small Size</button>
                    <button type="button" class="btn btn-outline-primary">Regular Size</button>
                    <button type="button" class="btn btn-outline-primary btn-lg">Large Size</button>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="heading-section">
                        <small>Pick your color</small>
                    </h2>
                </div>
                <div class="col-md-12 mb-3">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>
                </div>
                <div class="col-md-12">
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-light">Light</button>
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="heading-section">
                        <small>Links</small>
                    </h2>
                </div>
                <div class="col-md-12 mb-2">
                    <a href="#" class="btn btn-primary btn-link" role="button">Primary link</a>
                    <a href="#" class="btn btn-secondary btn-link" role="button">Secondary link</a>
                    <a href="#" class="btn btn-success btn-link" role="button">Success link</a>
                    <a href="#" class="btn btn-danger btn-link" role="button">Danger link</a>
                    <a href="#" class="btn btn-warning btn-link" role="button">Warning link</a>
                    <a href="#" class="btn btn-info btn-link" role="button">Info link</a>
                    <a href="#" class="btn btn-dark btn-link" role="button">Dark link</a>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="heading-section">
                        <small>Buttons with Dropdown</small>
                    </h2>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="heading-section">
                        <small>Block Level Buttons</small>
                    </h2>
                </div>
                <div class="col-md-4 mb-2">
                    <button type="button" class="btn btn-warning btn-lg btn-block">Block Level info</button>
                    <button type="button" class="btn btn-info btn-lg btn-block">Block Level Success</button>
                </div>
            </div>
        </div>
    </section>

    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section" id="inputs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section mb-4">Inputs</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group has-default">
                        <input type="text" class="form-control" placeholder="Default">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-success">
                        <input type="text" class="form-control" id="exampleInput2" placeholder="Success" required>
                        <span class="icon success">
                <i class="ion-ios-checkmark"></i>
              </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-danger">
                        <input type="text" class="form-control" id="exampleInput3" placeholder="Error Input" required>
                        <span class="icon clear">
                <i class="ion-ios-close"></i>
              </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control border-right-0" placeholder="With Ionicons Icons">
                            <div class="input-group-prepend">
                  <span class="input-group-text border-left-0 rounded-right">
                    <i class="ion-logo-ionic"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section" id="checkRadios">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="heading-section mb-4">Checkboxes</h2>
                    <div class="form-check">
                        <label class="custom-control fill-checkbox">
                            <input type="checkbox" class="fill-control-input">
                            <span class="fill-control-indicator"></span>
                            <span class="fill-control-description">Unchecked</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="custom-control fill-checkbox">
                            <input type="checkbox" class="fill-control-input" checked>
                            <span class="fill-control-indicator"></span>
                            <span class="fill-control-description">Checked</span>
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="custom-control fill-checkbox">
                            <input type="checkbox" class="fill-control-input" disabled>
                            <span class="fill-control-indicator"></span>
                            <span class="fill-control-description">Disabled Unchecked</span>
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="custom-control fill-checkbox">
                            <input type="checkbox" class="fill-control-input" checked disabled>
                            <span class="fill-control-indicator"></span>
                            <span class="fill-control-description">Disabled Checked</span>
                        </label>
                    </div>
                </div>

                <div class="col-md-4">
                    <h2 class="heading-section mb-4">Radio Buttons</h2>
                    <div class="form-radio">
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio-input">
                                <span class="checkmark"></span>
                                <span class="fill-control-description">Radio is off</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-radio">
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio-input" checked>
                                <span class="checkmark"></span>
                                <span class="fill-control-description">Radio is on</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-radio disabled">
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio-input" disabled>
                                <span class="checkmark"></span>
                                <span class="fill-control-description">Disabled Radio is off</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-radio disabled">
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio-input" disabled>
                                <span class="checkmark disabled"></span>
                                <span class="fill-control-description">Disabled radio is on</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <h2 class="heading-section mb-4">Toggle Buttons</h2>
                    <div class="toggle-button-cover">
                        <div class="button-cover d-flex align-items-center">
                            <div class="button r" id="button-1">
                                <input type="checkbox" class="checkbox">
                                <div class="knobs"></div>
                                <div class="layer"></div>
                            </div>
                            <div class="ml-2"><span class="ios-switch-control-description">Toggle is on</span></div>
                        </div>
                    </div>
                    <div class="toggle-button-cover">
                        <div class="button-cover d-flex align-items-center">
                            <div class="button r" id="button-10">
                                <input type="checkbox" class="checkbox" checked>
                                <div class="knobs">
                                    <span>ON</span>
                                </div>
                                <div class="layer"></div>
                            </div>
                            <div class="ml-2"><span class="ios-switch-control-description">Toggle is Off</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="heading-section mb-4">Sliders</h2>
                    <div id="slider-2" class="no-uicustom mb-4"></div>
                    <div id="slider" class="no-uicustom"></div>
                </div>
                <div class="col-lg-6">
                    <h2 class="heading-section mb-4">Badges</h2>
                    <span class="badge badge-pill badge-primary p-2 px-3">Primary</span>
                    <span class="badge badge-pill badge-info p-2 px-3">Info</span>
                    <span class="badge badge-pill badge-success p-2 px-3">Success</span>
                    <span class="badge badge-pill badge-warning p-2 px-3">Warning</span>
                    <span class="badge badge-pill badge-danger p-2 px-3">Danger</span>
                    <span class="badge badge-pill badge-rose p-2 px-3">Rose</span>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="heading-section mb-4">Progress <br>
                        <small>Progress Bar</small>
                    </h2>
                    <div class="progress mb-4" style="height: 20px;">
                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            <span>40% Complete</span>
                        </div>
                    </div>
                    <div class="progress mb-4" style="height: 20px;">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                    <div class="progress mb-4" style="height: 20px;">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                    <div class="progress mb-4" style="height: 20px;">
                        <div class="progress-bar progress-bar-striped bg-success" style="width: 35%">
                            <span class="sr-only">35% Complete (success)</span>
                        </div>
                        <div class="progress-bar progress-bar-striped bg-warning" style="width: 20%">
                            <span class="sr-only">20% Complete (warning)</span>
                        </div>
                        <div class="progress-bar bg-danger" style="width: 30%">
                            <span class="sr-only">30% Complete (danger)</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 progress-circle">
                    <h2 class="heading-section mb-4"><br>
                        <small>Progress Circle</small>
                    </h2>
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-4 ftco-animate">
                            <div class="">

                                <!-- Progress bar 1 -->
                                <div class="progress mx-auto" data-value='90'>
					          <span class="progress-left">
		                  <span class="progress-bar border-primary"></span>
					          </span>
                                    <span class="progress-right">
		                  <span class="progress-bar border-primary"></span>
					          </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h5">90<sup class="small">%</sup></div>
                                    </div>
                                </div>
                                <!-- END -->
                            </div>
                        </div>

                        <div class="col-md-4 mb-md-0 mb-4 ftco-animate">
                            <div class="">

                                <!-- Progress bar 1 -->
                                <div class="progress mx-auto" data-value='80'>
					          <span class="progress-left">
		                  <span class="progress-bar border-primary"></span>
					          </span>
                                    <span class="progress-right">
		                  <span class="progress-bar border-primary"></span>
					          </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h5">80<sup class="small">%</sup></div>
                                    </div>
                                </div>
                                <!-- END -->
                            </div>
                        </div>

                        <div class="col-md-4 mb-md-0 mb-4 ftco-animate">
                            <div class="">

                                <!-- Progress bar 1 -->
                                <div class="progress mx-auto" data-value='75'>
					          <span class="progress-left">
		                  <span class="progress-bar border-primary"></span>
					          </span>
                                    <span class="progress-right">
		                  <span class="progress-bar border-primary"></span>
					          </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h5">75<sup class="small">%</sup></div>
                                    </div>
                                </div>
                                <!-- END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section mb-5">Paginations</h2>
                    <div class="pagination pagination-1 mb-4">
                        <a href="#">&laquo;</a>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">&raquo;</a>
                    </div>
                    <div class="pagination pagination-2">
                        <a href="#" class="pageitem">Previous</a>
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">7</a>
                        <a href="#" class="pageitem">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="navigations">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section mb-4">Navigations</h2>
                </div>
            </div>
        </div>
        <div class="px-0 bg-primary navbar-wrap mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar px-0 navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">Primary Color</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="oi oi-menu"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample03">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item d-flex active">
                                        <a class="nav-link d-flex align-items-center" href="#">Discover <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a class="nav-link d-flex align-items-center" href="#">Profile</a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a class="nav-link d-flex align-items-center" href="#">Settings</a>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-white btn-round my-2 my-sm-0" type="submit"><i class="ion-ios-search"></i></button>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-0 bg-info navbar-wrap mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar px-0 navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">Info Color</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="oi oi-menu"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample05">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item d-flex active">
                                        <a class="nav-link d-flex align-items-center" href="#">Discover</a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a class="nav-link d-flex align-items-center" href="#">Profile</a>
                                    </li>
                                    <li class="nav-item d-flex dropdown">
                                        <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Settings
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a href="#" class="nav-link d-flex align-items-center icon"><i class="ion-logo-facebook"></i><span class="d-lg-none ml-2">Facebook</span></a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a href="#" class="nav-link d-flex align-items-center icon"><i class="ion-logo-twitter"></i><span class="d-lg-none ml-2">Twitter</span></a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a href="#" class="nav-link d-flex align-items-center icon"><i class="ion-logo-instagram"><span class="d-lg-none ml-2">Instagram</span></i></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-0 bg-warning navbar-wrap mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar px-0 navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">Danger Color</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="oi oi-menu"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample06">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item d-flex active">
                                        <a href="#" class="nav-link d-flex align-items-center icon"><i class="ion-ios-compass"></i><span class="d-lg-none ml-2">Discover</span></a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a href="#" class="nav-link d-flex align-items-center icon"><i class="ion-ios-contact"></i><span class="d-lg-none ml-2">Profile</span></a>
                                    </li>
                                    <li class="dropdown nav-item d-flex">
                                        <a href="#" class="dropdown-toggle nav-link d-flex align-items-center icon" data-toggle="dropdown">
                                            <i class="ion-ios-settings"></i>
                                            <span class="d-lg-none ml-2">Settings</span>
                                            <b class="caret"></b>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <h6 class="dropdown-header">Dropdown header</h6>
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">Separated link</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">One more separated link</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-transparent px-md-0 img pb-md-5 navbar-wrap bg-transparent" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row pt-md-4 pb-md-5">
                    <div class="col-md-12">
                        <nav class="navbar px-0 navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">Transparent</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="oi oi-menu"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample09">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item d-flex active">
                                        <a class="nav-link d-flex align-items-center" href="#">Discover <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a class="nav-link d-flex align-items-center" href="#">Profile</a>
                                    </li>
                                    <li class="nav-item d-flex dropdown">
                                        <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Settings
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section ftco-section-2" id="navigationTabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-md-0">
                    <h2 class="heading-section mb-3">Navigation Pills <br>
                        <small>Navigation with Sidebar</small>
                    </h2>
                    <div class="row no-gutters tabulation">
                        <div class="col-md-4">
                            <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                <li class="nav-item text-left">
                                    <a class="nav-link active py-3" data-toggle="tab" href="#home"><span class="ion-ios-home mr-2"></span> Home</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-3" data-toggle="tab" href="#menu1"><span class="ion-ios-person mr-2"></span> Profile</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-3" data-toggle="tab" href="#menu2"><span class="ion-ios-mail mr-2"></span> Messages</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content rounded">
                                <div class="tab-pane container p-4 active" id="home">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                                <div class="tab-pane container p-4 fade" id="menu1">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                                <div class="tab-pane container p-4 fade" id="menu2">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-md-0">
                    <h2 class="heading-section mb-3"> <br>
                        <small>with icons</small>
                    </h2>
                    <div class="tabulation-2">
                        <ul class="nav nav-pills nav-fill d-md-flex d-block">
                            <li class="nav-item">
                                <a class="nav-link py-3" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Home</a>
                            </li>
                            <li class="nav-item px-lg-2">
                                <a class="nav-link active py-3" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-3" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Messages</a>
                            </li>
                        </ul>
                        <div class="tab-content rounded mt-2">
                            <div class="tab-pane container p-4 active" id="home1">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                            <div class="tab-pane container p-4 fade" id="home2">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                            <div class="tab-pane container p-4 fade" id="home3">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section" id="notifications">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section mb-4">Notifications</h2>
                    <div class="alert alert-info">
                        <div class="container">
                            <div class="d-flex">
                                <div class="alert-icon">
                                    <i class="ion-ios-information-circle-outline"></i>
                                </div>
                                <p class="mb-0 ml-2"><b>Info alert:</b> You&apos;ve got some friends nearby, stop looking at your phone and find them...</p>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="alert alert-success">
                        <div class="container">
                            <div class="d-flex">
                                <div class="alert-icon">
                                    <i class="ion-ios-checkmark-circle"></i>
                                </div>
                                <p class="mb-0 ml-2"><b>Success Alert:</b> Yuhuuu! You&apos;ve got your $11.99 album from The Weeknd</p>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="alert alert-warning">
                        <div class="container">
                            <div class="d-flex">
                                <div class="alert-icon">
                                    <i class="ion-ios-warning"></i>
                                </div>
                                <p class="mb-0 ml-2"><b>Warning Alert:</b> Hey, it looks like you still have the &quot;copyright &#xA9; 2015&quot; in your footer. Please update it!</p>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="alert alert-danger">
                        <div class="container">
                            <div class="d-flex">
                                <div class="alert-icon">
                                    <i class="ion-ios-information-circle-outline"></i>
                                </div>
                                <p class="mb-0 ml-2"><b>Error Alert:</b> Damn man! You screwed up the server this time. You should find a good excuse for your Boss...</p>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section" id="typography">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section mb-4">Typography</h2>
                    <div class="typo">
                        <h1>
                            <span class="typo-note">Header 1</span>Thinking in textures </h1>
                    </div>
                    <div class="typo">
                        <h2>
                            <span class="typo-note">Header 2</span>Thinking in textures</h2>
                    </div>
                    <div class="typo">
                        <h3>
                            <span class="typo-note">Header 3</span>Thinking in textures</h3>
                    </div>
                    <div class="typo">
                        <h4>
                            <span class="typo-note">Header 4</span>Thinking in textures</h4>
                    </div>
                    <div class="typo">
                        <h5>
                            <span class="typo-note">Header 5</span>Thinking in textures</h5>
                    </div>
                    <div class="typo">
                        <h6>
                            <span class="typo-note">Header 6</span>Thinking in textures</h6>
                    </div>
                    <div class="typo">
                        <p>
                            <span class="typo-note">Paragraph</span>
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                    </div>
                    <div class="typo">
                        <span class="typo-note">Quote</span>
                        <div class="blockquote">
                            <p>
                                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                            </p>
                            <small>
                                &mdash; Jason Hodson, Web Designer
                            </small>
                        </div>
                    </div>
                    <div class="typo">
                        <span class="typo-note">Muted Text</span>
                        <p class="text-muted">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                        </p>
                    </div>
                    <div class="typo">
                        <span class="typo-note">Primary Text</span>
                        <p class="text-primary">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typo">
                        <span class="typo-note">Info Text</span>
                        <p class="text-info">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typo">
                        <span class="typo-note">Success Text</span>
                        <p class="text-success">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typo">
                        <span class="typo-note">Warning Text</span>
                        <p class="text-warning">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                        </p>
                    </div>
                    <div class="typo">
                        <span class="typo-note">Danger Text</span>
                        <p class="text-danger">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typo">
                        <h2>
                            <span class="typo-note">Small Tag</span>
                            Header with small subtitle
                            <br>
                            <small>Use &quot;small&quot; tag for the headers</small>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section" id="images">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section mb-4">Images</h2>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h2 class="heading-section mb-4">
                                <small>Rounded Image</small>
                            </h2>
                            <div class="image-wrap">
                                <img src="images/image-1.jpg" alt="Round Image" class="rounded img-fluid image image-2">
                                <div class="text">
                                    <div class="img"></div>
                                    <span class="position">Clyde Ford</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <h2 class="heading-section mb-4">
                                <small>Circle Image</small>
                            </h2>
                            <div class="image-wrap">
                                <img src="images/image-2.jpg" alt="Circle Image" class="rounded-circle img-fluid image">
                                <div class="text">
                                    <div class="img" ></div>
                                    <span class="position">Clyde Ford</span>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 text-center">
                            <h2 class="heading-section mb-4">
                                <small>Circle Raised</small>
                            </h2>
                            <div class="image-wrap">
                                <img src="images/image-3.jpg" alt="Thumbnail Image" class="img-raised rounded-circle thumbnail img-fluid image">
                                <div class="text">
                                    <div class="img" ></div>
                                    <span class="position">Clyde Ford</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section ftco-section-2" id="javascriptsComponents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section mb-4">Javascripts Components</h2>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="w-100 mb-4">
                                <h2 class="heading-section">
                                    <small>Modals</small>
                                </h2>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Launch demo modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-info">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100">
                                <h2 class="heading-section">
                                    <small>Datetimepickers</small>
                                </h2>
                                <div class="w-100">
                                    <form action="" method="post" class="datepickers">
                                        <div class="form-group">
                                            <!-- <label class="label-control" for="id_start_datetime">Datetime picker</label> -->
                                            <div class="input-group date" id="id_0">
                                                <input type="text" value="10/01/2019 05:32:00 PM" class="form-control" required/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="w-100 mb-4">
                                <h2 class="heading-section">
                                    <small>Popovers</small>
                                </h2>
                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="top" data-content="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.">
                                    On top
                                </button>

                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="right" data-content="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.">
                                    On right
                                </button>

                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.">
                                    On bottom
                                </button>

                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.">
                                    On left
                                </button>
                            </div>

                            <div class="w-100">
                                <h2 class="heading-section">
                                    <small>Tooltip</small>
                                </h2>
                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                    On top
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                                    On right
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                                    On bottom
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                                    On left
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="heading-section mb-4">
                        <small>Accordion</small>
                    </h2>
                    <div id="accordion" class="myaccordion w-100 text-center">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapse Menu 1
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body text-left">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapse Menu 2
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body text-left">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section ftco-section-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <h2 class="heading-section mb-4 pb-md-3">
                        Completed with examples
                    </h2>
                    <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful kit.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <section class="ftco-section ftco-section-2 section-signup page-header img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="card card-login py-4">
                        <form class="form-login" method="" action="">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Card Login</h4>
                                <div class="social-line">
                                    <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                                        <i class="ion-logo-facebook"></i>
                                    </a>
                                    <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                                        <i class="ion-logo-twitter"></i>
                                    </a>
                                    <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                                        <i class="ion-logo-googleplus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body pb-4 pt-2">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="ion-ios-contact"></i>
                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="ion-ios-lock"></i>
                      </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password...">
                                </div>
                                <div class="form-check d-flex justify-content-center">
                                    <label class="custom-control fill-checkbox mb-0 d-inline-block">
                                        <input type="checkbox" class="fill-control-input">
                                        <span class="fill-control-indicator"></span>
                                        <span class="fill-control-description">I Agree to the terms and conditions.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="footer text-center mb-2">
                                <a href="#" class="btn btn-primary btn-round px-5">Get Started</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <!-- loader -->
@endsection

