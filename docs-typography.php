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
      <div class="body-wrapper__inner">
        <div class="row align-items-center mb-30">
          <div class="col-lg-6 col-6">
            <h6 class="page-title">Typography</h6>
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
          <div class="card">
            <div class="card-body">
              <code>h1 tag font size - 36px</code>
              <h1>Heading here</h1>
              <code>h2 tag font size - 32px</code>
              <h2>Heading here</h2>
              <code>h3 tag font size - 22px</code>
              <h3>Heading here</h3>
              <code>h4 tag font size - 20px</code>
              <h4>Heading here</h4>
              <code>h5 tag font size - 18px</code>
              <h5>Heading here</h5>
              <code>h6 tag font size - 16px</code>
              <h6>Heading here</h6>
            </div>
          </div><!-- card end -->

          <div class="card mt-30">
            <div class="card-body">
              <code>p, li, span, a tag font size - 14px</code>
              <p>Paragraph is here</p>
            </div>
          </div><!-- card end -->

          <div class="card mt-30">
            <div class="card-body">
              <p class="docs__info mb-3"><i class="las la-info-circle"></i>If you want to change <b>font size</b> by add class</p>
              <code class="d-block">.f-size--100 </code>
              <p class="f-size--100">Paragraph is here</p>

              <code>.f-size--90 </code>
              <p class="f-size--90">Paragraph is here</p>

              <code>.f-size--72 </code>
              <p class="f-size--72">Paragraph is here</p>

              <code>.f-size--56 </code>
              <p class="f-size--56">Paragraph is here</p>

              <code>.f-size--48 </code>
              <p class="f-size--48">Paragraph is here</p>

              <code>.f-size--42 </code>
              <p class="f-size--42">Paragraph is here</p>

              <code>.f-size--28 </code>
              <p class="f-size--28 ">Paragraph is here</p>

              <code>.f-size--24 </code>
              <p class="f-size--24 ">Paragraph is here</p>

              <code>.text--small (12px)</code>
              <p class="text--small">Paragraph is here</p>

            </div>
          </div><!-- card end -->

        </div><!-- docs-wrapper end -->
      </div><!-- body-wrapper__inner end -->
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