<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="robots" content="">
  <title>LFK | POS</title>

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/animate.css">

  <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

  <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="assets/css/style.css">


  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css"
    rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/pos.css">
  <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>

  <div id="global-loader">
    <div class="whirly-loader"></div>
  </div>
  <div class="main-wrappers">
    <div class="header" style="box-shadow: none; border-bottom: 1px solid rgb(245, 248, 250);">
      <div class="header-left border-0 ">
        <a href="dashboard.html" class="logo">
          <img src="assets/img/logo.png" alt="" class="img-fluid" style="height: 50px;">
        </a>
        <a href="dashboard.html" class="logo-small">
          <img src="assets/img/logo-small.png" alt="">
        </a>
      </div>
      <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow flag-nav">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
            <img src="assets/img/flags/singapore.png" alt="" height="20">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="javascript:void(0);" class="dropdown-item">
              <img src="assets/img/flags/china.png" alt="" height="16"> China </a>
            <a href="javascript:void(0);" class="dropdown-item">
              <img src="assets/img/flags/fr.png" alt="" height="16"> France </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
            <img src="assets/img/icons/notification-bing.svg" alt="img">
            <span class="badge rounded-pill">4</span>
          </a>
          <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
              <span class="notification-title">Notifications</span>
              <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
            </div>
            <div class="noti-content">
              <ul class="notification-list">
                <li class="notification-message">
                  <a href="activities.html">
                    <div class="media d-flex">
                      <span class="avatar flex-shrink-0">
                        <img alt="" src="assets/img/profiles/avatar-02.jpg">
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">John Doe</span> added new task <span class="noti-title">Titles Goes
                            here</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">4 mins ago</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="activities.html">
                    <div class="media d-flex">
                      <span class="avatar flex-shrink-0">
                        <img alt="" src="assets/img/profiles/avatar-03.jpg">
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Tarah Shropshire</span> changed the task name <span
                            class="noti-title">Task name Changed</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">6 mins ago</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="activities.html">
                    <div class="media d-flex">
                      <span class="avatar flex-shrink-0">
                        <img alt="" src="assets/img/profiles/avatar-06.jpg">
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic
                            Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span
                            class="noti-title">LFK POS System</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">8 mins ago</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="activities.html">
                    <div class="media d-flex">
                      <span class="avatar flex-shrink-0">
                        <img alt="" src="assets/img/profiles/avatar-13.jpg">
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">New
                            Task 2</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">2 days ago</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="topnav-dropdown-footer">
              <a href="activities.html">View all Notifications</a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown has-arrow main-drop">
          <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
            <span class="user-img">
              <img src="assets/img/profiles/avator1.jpg" alt="">
              <span class="status online"></span>
            </span>
          </a>
          <div class="dropdown-menu menu-drop-user">
            <div class="profilename">
              <div class="profileset">
                <span class="user-img">
                  <img src="assets/img/profiles/avator1.jpg" alt="">
                  <span class="status online"></span>
                </span>
                <div class="profilesets">
                  <h6>John Doe</h6>
                  <h5>Admin</h5>
                </div>
              </div>
              <hr class="m-0">
              <a class="dropdown-item" href="profile.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-user me-2">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg> My Profile </a>
              <a class="dropdown-item" href="generalsettings.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-settings me-2">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                  </path>
                </svg>Settings </a>
              <hr class="m-0">
              <a class="dropdown-item logout pb-0" href="signin.html">
                <img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout </a>
            </div>
          </div>
        </li>
      </ul>
      <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="profile.html">My Profile</a>
          <a class="dropdown-item" href="generalsettings.html">Settings</a>
          <a class="dropdown-item" href="signin.html">Logout</a>
        </div>
      </div>
    </div>
    <div class="page-wrapper ms-0">
      <div class="content" style="padding: 10px 0;">
        <div class="container-fluid pos">
          <div class="pos-content">
            <div class="window">
              <div class="subwindow">
                <div class="subwindow-container">
                  <div class="subwindow-container-fix screens">
                    <div class="ticket-screen screen">
                      <div class="screen-full-width">
                        <div class="rightpane pane-border">
                          <div class="controls">
                            <div class="buttons">
                              <button class="discard">
                                <a href="pos.html">
                                  <span class="search-icon">
                                    <i class="fa fa-angle-double-left"></i>
                                  </span> Back </a>
                              </button>
                              <button class="highlight">
                                <a href="pos.html" class="text-white">New Order <a></a>
                              </button>
                            </div>
                            <div class="col-md-8">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Product Here..." aria-label="" aria-describedby="">
                             <button class="input-group-text" id="">Search</button>
                            </div>
                    </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                                <div class="row">
                                   
                                </div>
                                <table class="table table-bordered display" id="editableTable">
                                    <thead>
                                      <tr>
                                        <th>Date</th>
                                        <th>Receipt Number</th>
                                        <th>Customer </th>
                                        <th>Cashier</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr data-id="1">
                                        <td data-field=""></td>
                                        <td data-field=""> </td>
                                        <td data-field=""></td>
                                        <td data-field=""></td>
                                        <td data-field=""></td>
                                        <td data-field="" > <span class="badge bg-success">Paid</span></td>
                                        
                                      
                                      </tr>
                                   
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                        </div>
                        <div class="leftpane">
                          <div class="order-container">
                            <div class="order-scroller touch-scrollable">
                              <div class="order">
                                <div class="order-empty">
                                  <i class="fa fa-shopping-cart" role="img" aria-label="Shopping cart"
                                    title="Shopping cart"></i>
                                  <h1>Select an order</h1>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pads">
                            <div class="control-buttons">
                              <div class="control-button">
                                <i class="fa fa-file-pdf-o"></i>
                                <span></span>
                                <span>Invoice</span>
                              </div>
                              <div class="control-button">
                                <i class="fa fa-print"></i>
                                <span></span>
                                <span><a href="receipt.html">Print Receipt</a></span>
                              </div>
                            </div>
                            <div class="subpads">
                              <div class="actionpad">
                                <button class="button set-partner">
                                  <a href="customer.html">
                                    <i class="fa fa-user" role="img" aria-label="Customer" title="Customer"></i>
                                    Customer </a>
                                </button>
                                <button class="button pay validation pay-order-button">
                                  <div class="pay-circle">
                                    <i class="fa fa-chevron-right" role="img" aria-label="Pay" title="Pay"></i>
                                  </div> Refund
                                </button>
                              </div>
                              <div class="numpad">
                                <button class="input-button number-char">1</button>
                                <button class="input-button number-char">2</button>
                                <button class="input-button number-char">3</button>
                                <button class="mode-button">Qty</button>
                                <button class="input-button number-char">4</button>
                                <button class="input-button number-char">5</button>
                                <button class="input-button number-char">6</button>
                                <button class="mode-button disabled-mode" disabled="">% Disc</button>
                                <button class="input-button number-char">7</button>
                                <button class="input-button number-char">8</button>
                                <button class="input-button number-char">9</button>
                                <button class="mode-button disabled-mode" disabled="">Price</button>
                                <button class="input-button numpad-minus disabled-mode">+/-</button>
                                <button class="input-button number-char">0</button>
                                <button class="input-button number-char">.</button>
                                <button class="input-button numpad-backspace">
                                  <img style="pointer-events: none;" src="assets/img/backspace.png" width="24"
                                    height="21" alt="Backspace">
                                </button>
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
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="calculator" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Define Quantity</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="calculator-set">
              <div class="calculatortotal">
                <h4>0</h4>
              </div>
              <ul>
                <li>
                  <a href="javascript:void(0);">1</a>
                </li>
                <li>
                  <a href="javascript:void(0);">2</a>
                </li>
                <li>
                  <a href="javascript:void(0);">3</a>
                </li>
                <li>
                  <a href="javascript:void(0);">4</a>
                </li>
                <li>
                  <a href="javascript:void(0);">5</a>
                </li>
                <li>
                  <a href="javascript:void(0);">6</a>
                </li>
                <li>
                  <a href="javascript:void(0);">7</a>
                </li>
                <li>
                  <a href="javascript:void(0);">8</a>
                </li>
                <li>
                  <a href="javascript:void(0);">9</a>
                </li>
                <li>
                  <a href="javascript:void(0);" class="btn btn-closes">
                    <img src="assets/img/icons/close-circle.svg" alt="img">
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">0</a>
                </li>
                <li>
                  <a href="javascript:void(0);" class="btn btn-reverse">
                    <img src="assets/img/icons/reverse.svg" alt="img">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="holdsales" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hold order</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="hold-order">
              <h2>4500.00</h2>
            </div>
            <div class="form-group">
              <label>Order Reference</label>
              <input type="text">
            </div>
            <div class="para-set">
              <p>The current order will be set on hold. You can retreive this order from the pending order button.
                Providing a reference to it might help you to identify the order more quickly. </p>
            </div>
            <div class="col-lg-12">
              <a class="btn btn-submit me-2">Submit</a>
              <a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Order</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Product Price</label>
                  <input type="text" value="20">
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Product Price</label>
                  <select class="select">
                    <option>Exclusive</option>
                    <option>Inclusive</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label> Tax</label>
                  <div class="input-group">
                    <input type="text">
                    <a class="scanner-set input-group-text"> % </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Discount Type</label>
                  <select class="select">
                    <option>Fixed</option>
                    <option>Percentage</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Discount</label>
                  <input type="text" value="20">
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Sales Unit</label>
                  <select class="select">
                    <option>Kilogram</option>
                    <option>Grams</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <a class="btn btn-submit me-2">Submit</a>
              <a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="create" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Customer Name</label>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Country</label>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>City</label>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text">
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <a class="btn btn-submit me-2">Submit</a>
              <a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Order Deletion</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="delete-order">
              <img src="assets/img/icons/close-circle1.svg" alt="img">
            </div>
            <div class="para-set text-center">
              <p>The current order will be deleted as no payment has been <br> made so far. </p>
            </div>
            <div class="col-lg-12 text-center">
              <a class="btn btn-danger me-2">Yes</a>
              <a class="btn btn-cancel" data-bs-dismiss="modal">No</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="recents" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Recent Transactions</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="tabs-sets">
              <ul class="nav nav-tabs" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="purchase-tab" data-bs-toggle="tab" data-bs-target="#purchase"
                    type="button" aria-controls="purchase" aria-selected="true" role="tab">Purchase</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button"
                    aria-controls="payment" aria-selected="false" role="tab">Payment</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="return-tab" data-bs-toggle="tab" data-bs-target="#return" type="button"
                    aria-controls="return" aria-selected="false" role="tab">Return</button>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="purchase" role="tabpanel" aria-labelledby="purchase-tab">
                  <div class="table-top">
                    <div class="wordset">
                      <ul>
                        <li>
                          <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
                            <img src="assets/img/icons/pdf.svg" alt="img">
                          </a>
                        </li>
                        <li>
                          <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel">
                            <img src="assets/img/icons/excel.svg" alt="img">
                          </a>
                        </li>
                        <li>
                          <a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
                            <img src="assets/img/icons/printer.svg" alt="img">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table datanew">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Reference</th>
                          <th>Customer</th>
                          <th>Amount </th>
                          <th class="text-end">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>INV/SL0101</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>INV/SL0101</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>INV/SL0101</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>INV/SL0101</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>INV/SL0101</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>INV/SL0101</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>INV/SL0101</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="payment" role="tabpanel">
                  <div class="table-top">
                    <div class="search-set">
                      <div class="search-input">
                        <a class="btn btn-searchset">
                          <img src="assets/img/icons/search-white.svg" alt="img">
                        </a>
                      </div>
                    </div>
                    <div class="wordset">
                      <ul>
                        <li>
                          <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
                            <img src="assets/img/icons/pdf.svg" alt="img">
                          </a>
                        </li>
                        <li>
                          <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel">
                            <img src="assets/img/icons/excel.svg" alt="img">
                          </a>
                        </li>
                        <li>
                          <a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
                            <img src="assets/img/icons/printer.svg" alt="img">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table datanew">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Reference</th>
                          <th>Customer</th>
                          <th>Amount </th>
                          <th class="text-end">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>0101</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>0102</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>0103</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>0104</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>0105</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>0106</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>0107</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                              <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="return" role="tabpanel">
                  <div class="table-top">
                    <div class="search-set">
                      <div class="search-input">
                        <a class="btn btn-searchset">
                          <img src="assets/img/icons/search-white.svg" alt="img">
                        </a>
                      </div>
                    </div>
                    <div class="wordset">
                      <ul>
                        <li>
                          <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
                            <img src="assets/img/icons/pdf.svg" alt="img">
                          </a>
                        </li>
                        <li>
                          <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel">
                            <img src="assets/img/icons/excel.svg" alt="img">
                          </a>
                        </li>
                        <li>
                          <a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
                            <img src="assets/img/icons/printer.svg" alt="img">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table datanew">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Reference</th>
                          <th>Customer</th>
                          <th>Amount </th>
                          <th class="text-end">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>0101</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="javascript:void(0);">
                              <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);"><img
                                src="assets/img/icons/delete.svg" alt="img"></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2022-03-07 </td>
                          <td>0102</td>
                          <td>Walk-in Customer</td>
                          <td>$ 1500.00</td>
                          <td><a class="me-3" href="javascript:void(0);"><img
                                src="assets/img/icons/eye.svg" alt="img"></a><a class="me-3"
                              href="javascript:void(0);"><img src="assets/img/icons/edit.svg"
                                alt="img"></a><a class="me-3 confirm-text"
                              href="javascript:void(0);"><img src="assets/img/icons/delete.svg"
                                alt="img"></a></td>
                        </tr><tr><td>2022-03-07 </td><td>0103</td><td>Walk-in
                            Customer</td><td>$ 1500.00</td><td><a class="me-3"
                              href="javascript:void(0);"><img src="assets/img/icons/eye.svg"
                                alt="img"></a><a class="me-3" href="javascript:void(0);"><img
                                src="assets/img/icons/edit.svg" alt="img"></a><a
                              class="me-3 confirm-text" href="javascript:void(0);"><img
                                src="assets/img/icons/delete.svg" alt="img"></a></td></tr>
                        <tr><td>2022-03-07 </td><td>0104</td><td>Walk-in Customer
                          </td><td>$ 1500.00</td><td><a class="me-3"
                              href="javascript:void(0);"><img src="assets/img/icons/eye.svg"
                                alt="img"></a><a class="me-3" href="javascript:void(0);"><img
                                src="assets/img/icons/edit.svg" alt="img"></a><a
                              class="me-3 confirm-text" href="javascript:void(0);"><img
                                src="assets/img/icons/delete.svg" alt="img"></a></td></tr>
                        <tr><td>2022-03-07 </td><td>0105</td><td>Walk-in Customer
                          </td><td>$ 1500.00</td><td><a class="me-3"
                              href="javascript:void(0);"><img src="assets/img/icons/eye.svg"
                                alt="img"></a><a class="me-3" href="javascript:void(0);"><img
                                src="assets/img/icons/edit.svg" alt="img"></a><a
                              class="me-3 confirm-text" href="javascript:void(0);"><img
                                src="assets/img/icons/delete.svg" alt="img"></a></td></tr>
                        <tr><td>2022-03-07 </td><td>0106</td><td>Walk-in Customer
                          </td><td>$ 1500.00</td><td><a class="me-3"
                              href="javascript:void(0);"><img src="assets/img/icons/eye.svg"
                                alt="img"></a><a class="me-3" href="javascript:void(0);"><img
                                src="assets/img/icons/edit.svg" alt="img"></a><a
                              class="me-3 confirm-text" href="javascript:void(0);"><img
                                src="assets/img/icons/delete.svg" alt="img"></a></td></tr>
                        <tr><td>2022-03-07 </td><td>0107</td><td>Walk-in Customer
                          </td><td>$ 1500.00</td><td><a class="me-3"
                              href="javascript:void(0);"><img src="assets/img/icons/eye.svg"
                                alt="img"></a><a class="me-3" href="javascript:void(0);"><img
                                src="assets/img/icons/edit.svg" alt="img"></a><a
                              class="me-3 confirm-text" href="javascript:void(0);"><img
                                src="assets/img/icons/delete.svg" alt="img"></a></td></tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/plugins/select2/js/custom-select.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>



    <script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script>
      $(document).ready(function() {
        $('.numpad .mode-button').click(function() {
          $(this).addClass('selected-mode').siblings().removeClass('selected-mode');
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        const filter = $('.filter');
        const optionsList = $('.options li');
        const selectedValue = $('#selected-value');


        filter.click(function () {
          filter.toggleClass('active');
        });

        $(document).on('click', '.options li', function () {
          selectedValue.text($(this).text());
          filter.removeClass('active');
        });


        $(window).click(function (event) {
          if (!filter.is(event.target) && filter.has(event.target).length === 0) {
            filter.removeClass('active');
          }
        });
      });
    </script>










</body>

</html>