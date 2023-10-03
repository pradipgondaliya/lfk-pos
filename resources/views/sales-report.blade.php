<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <title>Sales Report | LFK POS</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

</head>
<body>
    
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="dashboard.html" class="logo">
<img src="assets/img/logo.png" alt="">
</a>
<a href="dashboard.html" class="logo-small">
<img src="assets/img/logo-small.png" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">

<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="#">
<div class="searchinputs">
<input type="text" placeholder="Search Here ...">
<div class="search-addon">
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</div>
</div>
<a class="btn" id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a>
</form>
</div>
</li>


<li class="nav-item dropdown has-arrow flag-nav">
<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
<img src="assets/img/flags/singapore.png" alt="" height="20">
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/china.png" alt="" height="16"> China
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/fr.png" alt="" height="16"> France
</a>

</div>
</li>


<li class="nav-item dropdown">
<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<img src="assets/img/icons/notification-bing.svg" alt="img"> <span class="badge rounded-pill">4</span>
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
<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Titles Goes here</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
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
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Task name Changed</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
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
<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">LFK POS System</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
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
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">New Task 2</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
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
<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
<span class="status online"></span></span>
<div class="profilesets">
<h6>John Doe</h6>
<h5>Admin</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My Profile</a>
<a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="signin.html"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="generalsettings.html">Settings</a>
<a class="dropdown-item" href="signin.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
  <div id="sidebar-menu" class="sidebar-menu">
  <ul>
  <li class="active">
  <a href="index.html"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
  </li>
  <li class="submenu">
  <a href="javascript:void(0);"><img src="assets/img/icons/cash.svg" alt="img"><span> Order</span> <span class="menu-arrow"></span></a>
  <ul>
  <li><a href="#">Order Pro Forma (PS)</a></li>
  <li><a href="#">Orders</a></li>
  <li><a href="#">Sessions</a></li>
  <li><a href="#">Payments</a></li>
  <li><a href="#">Customers</a></li>
  </ul>
  </li>
  <li class="submenu">
  <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Products</span> <span class="menu-arrow"></span></a>
  <ul>
  <li><a href="#">Proucts</a></li>
  <li><a href="#">Proucts Variants</a></li>
  <li><a href="#">Discount & Loyalty</a></li>
  <li><a href="#">Gift Card & e-Wallet</a></li>
  </ul>
  </li>
  <li class="submenu">
  <a href="javascript:void(0);"><img src="assets/img/icons/edit.svg" alt="img"><span> Reporting</span> <span class="menu-arrow"></span></a>
  <ul>
  <li><a href="#">Orders</a></li>
  <li><a href="#">Sales Details</a></li>
  <li><a href="#">Sessions Report</a></li>
  </ul>
  </li>
  <li class="submenu">
  <a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span> Configuration</span> <span class="menu-arrow"></span></a>
  <ul>
  <li><a href="#">Settings</a></li>
  <li><a href="#">Payment Methods</a></li>
  <li><a href="#">Coins & Bills</a></li>
  <li><a href="#">Point of Sale</a></li>
  </ul>
  </li>
  <li class="submenu">
  <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Products</span> <span class="menu-arrow"></span></a>
  <ul>
  <li><a href="#">POS Product Category</a></li>
   <li><a href="#">Attributes</a></li>
  </ul>
  </li>
  
  <li class="">
  <a href="javascript:void(0);"><img src="assets/img/icons/log-out.svg" alt="img"><span> Logout</span> </a>
  
  </li>
  </ul>
  </div>
  </div>
  </div>

<div class="page-wrapper">
<div class="content">
    <h4>Sales Report</h4>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-solid">
                    <li class="nav-item"><a class="nav-link active" href="#solid-tab1" data-bs-toggle="tab">Daily</a></li>
                    <li class="nav-item"><a class="nav-link" href="#solid-tab2" data-bs-toggle="tab">Weekly</a></li>
                    <li class="nav-item"><a class="nav-link" href="#solid-tab3" data-bs-toggle="tab">Monthly</a></li>
                    </ul>
                    <div class="tab-content mt-3">
                    <div class="tab-pane show active" id="solid-tab1">
                   <div class="overflow-table" style="overflow: auto;">
                    <table class="table table-bordered display" style="overflow: auto;">
                        <thead>
                          <tr>
                            <th>SL NO.</th>
                            <th>Receipt NO.</th>
                            <th>Total Amount</th>
                            <th>Date & Time</th>
                            <th>Payment Mode</th> 
                              
                                      
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                           <td>01</td>
                           <td>#0032565</td>
                           <td>1600</td>
                           <td>22/09/2023</td>
                           <td>Cash</td>
                            
                            
                            
                          </tr>
                       
                        </tbody>
                      </table>
                   </div>
                    </div>
                    <div class="tab-pane" id="solid-tab2">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="">Select Week</label>
                                    <input type="text" class="form-control datepicker">
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered display" style="overflow: auto;">
                            <thead>
                              <tr>
                                <th>SL NO.</th>
                                <th>Receipt NO.</th>
                                <th>Total Amount</th>
                                <th>Date & Time</th>
                                <th>Payment Mode</th> 
                                  
                                          
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                               <td>01</td>
                               <td>#0032565</td>
                               <td>1600</td>
                               <td>22/09/2023</td>
                               <td>Cash</td>
                                
                                
                                
                              </tr>
                           
                            </tbody>
                          </table>
                    </div>
                    <div class="tab-pane" id="solid-tab3">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="">Select Month</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">January</option>
                                        <option value="">February</option>
                                        <option value="">March</option>
                                        <option value="">April</option>
                                        <option value="">May</option>
                                        <option value="">June</option>
                                        <option value="">July</option>
                                        <option value="">August</option>
                                        <option value="">September</option>
                                        <option value="">October</option>
                                        <option value="">November</option>
                                        <option value="">December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered display" style="overflow: auto;">
                            <thead>
                              <tr>
                                <th>SL NO.</th>
                                <th>Receipt NO.</th>
                                <th>Total Amount</th>
                                <th>Date & Time</th>
                                <th>Payment Mode</th> 
                                  
                                          
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                               <td>01</td>
                               <td>#0032565</td>
                               <td>1600</td>
                               <td>22/09/2023</td>
                               <td>Cash</td>
                                
                                
                                
                              </tr>
                           
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

<!-- this is add customer-->

<!-- The Modal -->

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>

<script>
    (function($, window, document, undefined) {
  var pluginName = "editable",
    defaults = {
      keyboard: true,
      dblclick: true,
      button: true,
      buttonSelector: ".edit",
      maintainWidth: true,
      dropdowns: {},
      edit: function() {},
      save: function() {},
      cancel: function() {}
    };

  function editable(element, options) {
    this.element = element;
    this.options = $.extend({}, defaults, options);

    this._defaults = defaults;
    this._name = pluginName;

    this.init();
  }

  editable.prototype = {
    init: function() {
      this.editing = false;

      if (this.options.dblclick) {
        $(this.element)
          .css('cursor', 'pointer')
          .bind('dblclick', this.toggle.bind(this));
      }

      if (this.options.button) {
        $(this.options.buttonSelector, this.element)
          .bind('click', this.toggle.bind(this));
      }
    },

    toggle: function(e) {
      e.preventDefault();

      this.editing = !this.editing;

      if (this.editing) {
        this.edit();
      } else {
        this.save();
      }
    },

    edit: function() {
      var instance = this,
        values = {};

      $('td[data-field]', this.element).each(function() {
        var input,
          field = $(this).data('field'),
          value = $(this).text(),
          width = $(this).width();

        values[field] = value;

        $(this).empty();

        if (instance.options.maintainWidth) {
          $(this).width(width);
        }

        if (field in instance.options.dropdowns) {
          input = $('<select></select>');

          for (var i = 0; i < instance.options.dropdowns[field].length; i++) {
            $('<option></option>')
              .text(instance.options.dropdowns[field][i])
              .appendTo(input);
          };

          input.val(value)
            .data('old-value', value)
            .dblclick(instance._captureEvent);
        } else {
          input = $('<input type="text" />')
            .val(value)
            .data('old-value', value)
            .dblclick(instance._captureEvent);
        }

        input.appendTo(this);

        if (instance.options.keyboard) {
          input.keydown(instance._captureKey.bind(instance));
        }
      });

      this.options.edit.bind(this.element)(values);
    },

    save: function() {
      var instance = this,
        values = {};

      $('td[data-field]', this.element).each(function() {
        var value = $(':input', this).val();

        values[$(this).data('field')] = value;

        $(this).empty()
          .text(value);
      });

      this.options.save.bind(this.element)(values);
    },

    cancel: function() {
      var instance = this,
        values = {};

      $('td[data-field]', this.element).each(function() {
        var value = $(':input', this).data('old-value');

        values[$(this).data('field')] = value;

        $(this).empty()
          .text(value);
      });

      this.options.cancel.bind(this.element)(values);
    },

    _captureEvent: function(e) {
      e.stopPropagation();
    },

    _captureKey: function(e) {
      if (e.which === 13) {
        this.editing = false;
        this.save();
      } else if (e.which === 27) {
        this.editing = false;
        this.cancel();
      }
    }
  };

  $.fn[pluginName] = function(options) {
    return this.each(function() {
      if (!$.data(this, "plugin_" + pluginName)) {
        $.data(this, "plugin_" + pluginName,
          new editable(this, options));
      }
    });
  };

})(jQuery, window, document);

editTable();

//custome editable starts
function editTable(){
  
  $(function() {
  var pickers = {};

  $('table tr').editable({
    dropdowns: {
      sex: ['Male', 'Female']
    },
    edit: function(values) {
      $(".edit i", this)
        .removeClass('fa-pencil')
        .addClass('fa-save')
        .attr('title', 'Save');

      pickers[this] = new Pikaday({
        field: $("td[data-field=birthday] input", this)[0],
        format: 'MMM D, YYYY'
      });
    },
    save: function(values) {
      $(".edit i", this)
        .removeClass('fa-save')
        .addClass('fa-pencil')
        .attr('title', 'Edit');

      if (this in pickers) {
        pickers[this].destroy();
        delete pickers[this];
      }
    },
    cancel: function(values) {
      $(".edit i", this)
        .removeClass('fa-save')
        .addClass('fa-pencil')
        .attr('title', 'Edit');

      if (this in pickers) {
        pickers[this].destroy();
        delete pickers[this];
      }
    }
  });
});
  
}

$(".add-row").click(function(){
  $("#editableTable").find("tbody tr:first").before("<tr><td data-field='name'></td><td data-field='name'></td><td data-field='name'></td><td data-field='name'></td><td><a class='button button-small edit' title='Edit'><i class='fa fa-pencil'></i></a> <a class='button button-small' title='Delete'><i class='fa fa-trash'></i></a></td></tr>");   
  editTable();  
  setTimeout(function(){   
    $("#editableTable").find("tbody tr:first td:last a[title='Edit']").click(); 
  }, 200); 
  
  setTimeout(function(){ 
    $("#editableTable").find("tbody tr:first td:first input[type='text']").focus();
      }, 300); 
  
   $("#editableTable").find("a[title='Delete']").unbind('click').click(function(e){
        $(this).closest("tr").remove();
    });
   
});

function myFunction() {
    
}

$("#editableTable").find("a[title='Delete']").click(function(e){  
  var x;
    if (confirm("Are you sure you want to delete entire row?") == true) {
        $(this).closest("tr").remove();
    } else {
        
    }     
});

</script>
<script>
   $(document).ready(function() {
  $('table.display').DataTable();
} );
</script>
<script>
    $(".datepicker").datepicker({
        dateFormat: 'dd/mm/yy',
        minDate: 0,
        maxDate: 7
    });

</script>

</body>
</html>