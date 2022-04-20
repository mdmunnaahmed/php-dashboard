<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Template</title>
  <!-- site favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <!-- bootstrap toggle css -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap-toggle.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">
  <!-- custom select box css -->
  <link rel="stylesheet" href="assets/css/vendor/nice-select.css">
  <!-- code preview css -->
  <link rel="stylesheet" href="assets/css/vendor/prism.css">
  <!-- select 2 css -->
  <link rel="stylesheet" href="assets/css/vendor/select2.min.css">
  <!-- data table css -->
  <link rel="stylesheet" href="assets/css/vendor/datatables.min.css">
  <!-- jvectormap css -->
  <link rel="stylesheet" href="assets/css/vendor/jquery-jvectormap-2.0.5.css">
  <!-- datepicker css -->
  <link rel="stylesheet" href="assets/css/vendor/datepicker.min.css">
  <!-- timepicky for time picker css -->
  <link rel="stylesheet" href="assets/css/vendor/jquery-timepicky.css">
  <!-- bootstrap-clockpicker css -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap-clockpicker.min.css">
  <!-- bootstrap-pincode css -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap-pincode-input.css">

  <!-- dashdoard main css -->
  <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
  <!-- page-wrapper start -->
  <div class="page-wrapper default-version">
    <!-- sidebar start -->
    <div class="sidebar capsule--rounded bg_img overlay--dark" data-background="assets/images/sidebar/2.jpg">
      <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
      <div class="sidebar__inner">
        <div class="sidebar__logo">
          <a href="index.html" class="sidebar__main-logo"><img src="assets/images/logo2.png" alt="image"></a>
          <a href="index.html" class="sidebar__logo-shape"><img src="assets/images/logo-shape.png" alt="image"></a>
          <button type="button" class="navbar__expand"></button>
        </div>
        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
          <ul class="sidebar__menu">
            <li class="sidebar-menu-item sidebar-dropdown">
              <a href="#0" class="side-menu--open">
                <i class="menu-icon lab la-buffer"></i>
                <span class="menu-title">Dashboard</span>
                <span class="menu-badge pill bg--primary ms-auto">2</span>
              </a>
              <div class="sidebar-submenu sidebar-submenu__open">
                <ul>
                  <li class="sidebar-menu-item active">
                    <a href="index.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Defualt version</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="index.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Dark version</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar__menu-header">Apps</li>
            <li class="sidebar-menu-item">
              <a href="invoice.html">
                <i class="menu-icon las la-file-invoice-dollar"></i>
                <span class="menu-title">Invoice</span>
              </a>
            </li>

            <li class="sidebar__menu-header">Pages</li>
            <li class="sidebar-menu-item active">
              <a href="card.html">
                <i class="menu-icon las la-photo-video"></i>
                <span class="menu-title">Medias</span>
              </a>
            </li>
            <li class="sidebar-menu-item sidebar-dropdown">
              <a href="#0">
                <i class="menu-icon las la-file-alt"></i>
                <span class="menu-title">Pages</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li class="sidebar-menu-item">
                    <a href="login.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Sign in</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="registration.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Sign Up</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="forget-password.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Reset pass</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="pricing.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Pricing</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="profile.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Profile</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-menu-item">
              <a href="profile.html">
                <i class="menu-icon las la-user"></i>
                <span class="menu-title">User</span>
              </a>
            </li>
            <li class="sidebar__menu-header">User Interface</li>
            <li class="sidebar-menu-item">
              <a href="card.html">
                <i class="menu-icon las la-credit-card"></i>
                <span class="menu-title">Cards</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a href="widget.html">
                <i class="menu-icon las la-window-maximize"></i>
                <span class="menu-title">Widgets</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a href="alerts.html">
                <i class="menu-icon las la-window-maximize"></i>
                <span class="menu-title">Alerts</span>
              </a>
            </li>
            <li class="sidebar-menu-item sidebar-dropdown">
              <a href="#0">
                <i class="menu-icon las la-stream"></i>
                <span class="menu-title">Components</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li class="sidebar-menu-item">
                    <a href="button.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="modal.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Modals</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar__menu-header">Table & Forms</li>
            <li class="sidebar-menu-item">
              <a href="table.html">
                <i class="menu-icon las la-border-none"></i>
                <span class="menu-title">Basic Table</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a href="data-table.html">
                <i class="menu-icon las la-border-all"></i>
                <span class="menu-title">Data Table</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a href="form-input.html">
                <i class="menu-icon las la-align-center"></i>
                <span class="menu-title">Forms</span>
              </a>
            </li>
            <li class="sidebar__menu-header">Chart</li>
            <li class="sidebar-menu-item">
              <a href="chart.html">
                <i class="menu-icon las la-chart-line"></i>
                <span class="menu-title">Chart</span>
              </a>
            </li>
            <li class="sidebar__menu-header">Misc</li>
            <li class="sidebar-menu-item sidebar-dropdown">
              <a href="#0">
                <i class="menu-icon las la-file-medical-alt"></i>
                <span class="menu-title">Documentation</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li class="sidebar-menu-item">
                    <a href="docs-sidebar.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Sidebar</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="docs-bg-color.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Bg color</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="docs-overlay.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Overlay</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="docs-text-color.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Text color</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="docs-outline.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Border color</span>
                    </a>
                  </li>
                  <li class="sidebar-menu-item">
                    <a href="docs-typography.html">
                      <i class="menu-icon las la-dot-circle"></i>
                      <span class="menu-title">Typography</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-menu-item">
              <a href="ticket-submit.html">
                <i class="menu-icon las la-life-ring"></i>
                <span class="menu-title">Support</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- sidebar end -->
    <!-- navbar-wrapper start -->
    <nav class="navbar-wrapper">
      <form class="navbar-search">
        <button type="submit" class="navbar-search__btn">
          <i class="las la-search"></i>
        </button>
        <input type="search" name="navbar-search__field" id="navbar-search__field" placeholder="Search your products">
        <button type="button" class="navbar-search__close"><i class="las la-times"></i></button>
      </form>

      <div class="navbar__left">
        <button class="res-sidebar-open-btn"><i class="las la-bars"></i></button>
        <button type="button" class="fullscreen-btn">
          <i class="fullscreen-open las la-compress" onclick="openFullscreen();"></i>
          <i class="fullscreen-close las la-compress-arrows-alt" onclick="closeFullscreen();"></i>
        </button>
      </div>
      <div class="navbar__right">
        <ul class="navbar__action-list">
          <li>
            <button type="button" class="navbar-search__btn-open">
              <i class="las la-search"></i>
            </button>
          </li>
          <li class="dropdown">
            <button type="button" class="danger--layer" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
              <i class="las la-comments text--danger"></i>
              <span class="pulse--danger"></span>
            </button>
            <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
              <div class="dropdown-menu__header">
                <span class="caption">Meassage</span>
                <p>You have 6 unread messages</p>
              </div>
              <div class="dropdown-menu__body">
                <a href="#0" class="dropdown-menu__item">
                  <div class="message-notifi">
                    <div class="message-notifi__left"><img src="assets/images/user/1.jpg" alt="image"></div>
                    <div class="message-notifi__right">
                      <span class="name">Marmi Sargi</span>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quo, eligendi id harum facilis est!</p>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- message-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="message-notifi">
                    <div class="message-notifi__left"><img src="assets/images/user/1.jpg" alt="image"></div>
                    <div class="message-notifi__right">
                      <span class="name">Marmi Sargi</span>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quo, eligendi id harum facilis est!</p>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- message-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="message-notifi">
                    <div class="message-notifi__left"><img src="assets/images/user/1.jpg" alt="image"></div>
                    <div class="message-notifi__right">
                      <span class="name">Marmi Sargi</span>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quo, eligendi id harum facilis est!</p>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- message-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="message-notifi">
                    <div class="message-notifi__left"><img src="assets/images/user/1.jpg" alt="image"></div>
                    <div class="message-notifi__right">
                      <span class="name">Marmi Sargi</span>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quo, eligendi id harum facilis est!</p>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- message-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="message-notifi">
                    <div class="message-notifi__left"><img src="assets/images/user/1.jpg" alt="image"></div>
                    <div class="message-notifi__right">
                      <span class="name">Marmi Sargi</span>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quo, eligendi id harum facilis est!</p>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- message-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="message-notifi">
                    <div class="message-notifi__left"><img src="assets/images/user/1.jpg" alt="image"></div>
                    <div class="message-notifi__right">
                      <span class="name">Marmi Sargi</span>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quo, eligendi id harum facilis est!</p>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- message-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="message-notifi">
                    <div class="message-notifi__left"><img src="assets/images/user/1.jpg" alt="image"></div>
                    <div class="message-notifi__right">
                      <span class="name">Marmi Sargi</span>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quo, eligendi id harum facilis est!</p>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- message-notifi end -->
                </a>
              </div>
              <div class="dropdown-menu__footer">
                <a href="#0" class="view-all-message">View all message</a>
              </div>
            </div>
          </li>
          <li class="dropdown">
            <button type="button" class="primary--layer" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
              <i class="las la-bell text--primary"></i>
              <span class="pulse--primary"></span>
            </button>
            <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
              <div class="dropdown-menu__header">
                <span class="caption">Notification</span>
                <p>You have 6 notification</p>
              </div>
              <div class="dropdown-menu__body">
                <a href="#0" class="dropdown-menu__item">
                  <div class="navbar-notifi">
                    <div class="navbar-notifi__left bg--green b-radius--rounded"><i class="las la-exclamation-circle"></i></div>
                    <div class="navbar-notifi__right">
                      <h6 class="notifi__title">New mail from fahaddevs</h6>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- navbar-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="navbar-notifi">
                    <div class="navbar-notifi__left bg--danger b-radius--rounded"><i class="las la-exclamation-circle"></i></div>
                    <div class="navbar-notifi__right">
                      <h6 class="notifi__title">New mail from fahaddevs</h6>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- navbar-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="navbar-notifi">
                    <div class="navbar-notifi__left bg--green b-radius--rounded"><i class="las la-exclamation-circle"></i></div>
                    <div class="navbar-notifi__right">
                      <h6 class="notifi__title">New mail from fahaddevs</h6>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- navbar-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="navbar-notifi">
                    <div class="navbar-notifi__left bg--danger b-radius--rounded"><i class="las la-exclamation-circle"></i></div>
                    <div class="navbar-notifi__right">
                      <h6 class="notifi__title">New mail from fahaddevs</h6>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- navbar-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="navbar-notifi">
                    <div class="navbar-notifi__left bg--green b-radius--rounded"><i class="las la-exclamation-circle"></i></div>
                    <div class="navbar-notifi__right">
                      <h6 class="notifi__title">New mail from fahaddevs</h6>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- navbar-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="navbar-notifi">
                    <div class="navbar-notifi__left bg--danger b-radius--rounded"><i class="las la-exclamation-circle"></i></div>
                    <div class="navbar-notifi__right">
                      <h6 class="notifi__title">New mail from fahaddevs</h6>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- navbar-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="navbar-notifi">
                    <div class="navbar-notifi__left bg--green b-radius--rounded"><i class="las la-exclamation-circle"></i></div>
                    <div class="navbar-notifi__right">
                      <h6 class="notifi__title">New mail from fahaddevs</h6>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- navbar-notifi end -->
                </a>
                <a href="#0" class="dropdown-menu__item">
                  <div class="navbar-notifi">
                    <div class="navbar-notifi__left bg--green b-radius--rounded"><i class="las la-exclamation-circle"></i></div>
                    <div class="navbar-notifi__right">
                      <h6 class="notifi__title">New mail from fahaddevs</h6>
                      <span class="time">April 15, 03:00 PM</span>
                    </div>
                  </div><!-- navbar-notifi end -->
                </a>
              </div>
              <div class="dropdown-menu__footer">
                <a href="#0" class="view-all-message">View all notification</a>
              </div>
            </div>
          </li>
          <!-- <li>
        
      </li> -->
          <li class="dropdown">
            <button type="button" class="" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
              <span class="navbar-user">
                <span class="navbar-user__thumb"><img src="assets/images/user/1.jpg" alt="image"></span>
                <span class="navbar-user__info">
                  <span class="navbar-user__name">fahaddevs</span>
                  <!-- <span class="navbar-user__desig">admin</span> -->
                </span>
                <span class="icon"><i class="las la-chevron-circle-down"></i></span>
              </span>
            </button>
            <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
              <a href="#0" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                <i class="dropdown-menu__icon las la-user-circle"></i>
                <span class="dropdown-menu__caption">Profile</span>
              </a>
              <a href="#0" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                <i class="dropdown-menu__icon las la-user-plus"></i>
                <span class="dropdown-menu__caption">Settings</span>
              </a>
              <a href="#0" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                <i class="dropdown-menu__icon las la-cog"></i>
                <span class="dropdown-menu__caption">Edit profile</span>
              </a>
              <a href="#0" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                <i class="dropdown-menu__icon las la-tasks"></i>
                <span class="dropdown-menu__caption">Tasks</span>
              </a>
              <a href="#0" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                <i class="dropdown-menu__icon las la-sms"></i>
                <span class="dropdown-menu__caption">Messages</span>
              </a>
              <a href="#0" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                <i class="dropdown-menu__icon las la-bell"></i>
                <span class="dropdown-menu__caption">Notifications</span>
              </a>
              <a href="#0" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                <span class="dropdown-menu__caption">Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar-wrapper end -->
    <div class="body-wrapper">

      <div class="row align-items-center mb-30">
        <div class="col-lg-6 col-6">
          <h6 class="page-title">Background color</h6>
          <nav aria-label="breadcrumb" class="d-inline-block ml-md-4">
            <ol class="breadcrumb page-breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
              <li class="breadcrumb-item">documentation</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-6 text-end">
          <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">New</a>
          <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">Filters</a>
        </div>
      </div>

      <div class="docs-wrapper">
        <h5 class="mb-30">Solid Background color with name</h5>
        <div class="row mb-none-15">

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--primary">
              <code class="text--white">.bg--primary</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--secondary">
              <code class="text--white">.bg--secondary</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--danger">
              <code class="text--white">.bg--danger</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--warning">
              <code class="text--white">.bg--warning</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--info">
              <code class="text--white">.bg--info</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--dark">
              <code class="text--white">.bg--dark</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--white">
              <code class="text--black">.bg--white</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--black">
              <code class="text--white">.bg--black</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--gray">
              <code class="text--white">.bg--gray</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--red">
              <code class="text--white">.bg--red</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--pink">
              <code class="text--white">.bg--pink</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--purple">
              <code class="text--white">.bg--purple</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--deep-purple">
              <code class="text--white">.bg--deep-purple</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--indigo">
              <code class="text--white">.bg--indigo</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--blue">
              <code class="text--white">.bg--blue</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--light-blue">
              <code class="text--white">.bg--light-blue</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--cyan">
              <code class="text--white">.bg--cyan</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--teal">
              <code class="text--white">.bg--teal</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--green">
              <code class="text--white">.bg--green</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--lime">
              <code class="text--white">.bg--lime</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--yellow">
              <code class="text--dark">.bg--yellow</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--amber">
              <code class="text--white">.bg--amber</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--orange">
              <code class="text--white">.bg--orange</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--brown">
              <code class="text--white">.bg--brown</code>
            </div>
          </div>

        </div><!-- row end -->

        <h5 class="mb-30 mt-50">Solid Background color list without name</h5>
        <div class="row">

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--1">
              <code class="text--white">.bg--1</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--2">
              <code class="text--white">.bg--2</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--3">
              <code class="text--white">.bg--3</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--4">
              <code class="text--white">.bg--4</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--5">
              <code class="text--white">.bg--5</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--6">
              <code class="text--white">.bg--6</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--7">
              <code class="text--white">.bg--7</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--8">
              <code class="text--white">.bg--8</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--9">
              <code class="text--white">.bg--9</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--10">
              <code class="text--white">.bg--10</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--11">
              <code class="text--white">.bg--11</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--12">
              <code class="text--white">.bg--12</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--13">
              <code class="text--white">.bg--13</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--14">
              <code class="text--white">.bg--14</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--15">
              <code class="text--white">.bg--15</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--16">
              <code class="text--white">.bg--16</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--17">
              <code class="text--white">.bg--17</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--18">
              <code class="text--white">.bg--18</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--19">
              <code class="text--white">.bg--19</code>
            </div>
          </div>

          <div class="col-lg-3 mb-15">
            <div class="p-3 bg--20">
              <code class="text--white">.bg--20</code>
            </div>
          </div>

        </div><!-- row end -->

        <h5 class="mb-30 mt-50">Gradient background color list</h5>
        <div class="row">

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-1">
              <code class="text--white">.bg--gradi-1</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-2">
              <code class="text--white">.bg--gradi-2</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-3">
              <code class="text--white">.bg--gradi-3</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-4">
              <code class="text--white">.bg--gradi-4</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-5">
              <code class="text--white">.bg--gradi-5</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-6">
              <code class="text--white">.bg--gradi-6</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-7">
              <code class="text--white">.bg--gradi-7</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-8">
              <code class="text--white">.bg--gradi-8</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-9">
              <code class="text--white">.bg--gradi-9</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-10">
              <code class="text--white">.bg--gradi-10</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-11">
              <code class="text--white">.bg--gradi-11</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-12">
              <code class="text--white">.bg--gradi-12</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-13">
              <code class="text--white">.bg--gradi-13</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-14">
              <code class="text--white">.bg--gradi-14</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-15">
              <code class="text--white">.bg--gradi-15</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-16">
              <code class="text--white">.bg--gradi-16</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-17">
              <code class="text--white">.bg--gradi-17</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-18">
              <code class="text--white">.bg--gradi-18</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-19">
              <code class="text--white">.bg--gradi-19</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-20">
              <code class="text--white">.bg--gradi-20</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-21">
              <code class="text--white">.bg--gradi-21</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-22">
              <code class="text--white">.bg--gradi-22</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-23">
              <code class="text--white">.bg--gradi-23</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-24">
              <code class="text--white">.bg--gradi-24</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-25">
              <code class="text--white">.bg--gradi-25</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-26">
              <code class="text--white">.bg--gradi-26</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-27">
              <code class="text--white">.bg--gradi-27</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-28">
              <code class="text--white">.bg--gradi-28</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-29">
              <code class="text--white">.bg--gradi-29</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-30">
              <code class="text--white">.bg--gradi-30</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-31">
              <code class="text--white">.bg--gradi-31</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-32">
              <code class="text--white">.bg--gradi-32</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-33">
              <code class="text--white">.bg--gradi-33</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-34">
              <code class="text--white">.bg--gradi-34</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-35">
              <code class="text--white">.bg--gradi-35</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-36">
              <code class="text--white">.bg--gradi-36</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-37">
              <code class="text--white">.bg--gradi-37</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-38">
              <code class="text--white">.bg--gradi-38</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-39">
              <code class="text--white">.bg--gradi-39</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-40">
              <code class="text--white">.bg--gradi-40</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-41">
              <code class="text--white">.bg--gradi-41</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-42">
              <code class="text--white">.bg--gradi-42</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-43">
              <code class="text--white">.bg--gradi-43</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-44">
              <code class="text--white">.bg--gradi-44</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-45">
              <code class="text--white">.bg--gradi-45</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-46">
              <code class="text--white">.bg--gradi-46</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-47">
              <code class="text--white">.bg--gradi-47</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-48">
              <code class="text--white">.bg--gradi-48</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-49">
              <code class="text--white">.bg--gradi-49</code>
            </div>
          </div>

          <div class="col-lg-4 mb-15">
            <div class="py-5 px-3 bg--gradi-50">
              <code class="text--white">.bg--gradi-50</code>
            </div>
          </div>

        </div><!-- row end -->
      </div><!-- docs-wrapper end -->

    </div><!-- body-wrapper end -->
  </div>
  <!-- page-wrapper end -->
  <!-- jQuery library -->
  <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <!-- bootstrap-toggle js -->
  <script src="assets/js/vendor/bootstrap-toggle.min.js"></script>
  <!-- slimscroll js for custom scrollbar -->
  <script src="assets/js/vendor/jquery.slimscroll.min.js"></script>
  <!-- custom select box js -->
  <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
  <!-- code preview js -->
  <script src="assets/js/vendor/prism.js"></script>
  <!-- seldct 2 js -->
  <script src="assets/js/vendor/select2.min.js"></script>
  <!-- data-table js -->
  <script src="assets/js/vendor/datatables.min.js"></script>
  <!-- main js -->
  <script src="assets/js/app.js"></script>
</body>

</html>