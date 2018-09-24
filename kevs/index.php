<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/img/logo-fav.png">
  <title>Quintron</title>
  <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
  <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
  <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
  <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>

</head>
<body>
  <div class="be-wrapper be-fixed-sidebar">
    <nav class="navbar navbar-expand fixed-top be-top-header">
      <div class="container-fluid" style="background-color: #5789db;">
        <div class="be-navbar-header"><a style="padding: 20px; font-size: 16px; color: #fff;" class="" href="index-2.html">Quintron Data Tracker</a>
        </div>
        <div class="be-right-navbar">
          <ul class="nav navbar-nav float-right be-user-nav">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
              <div class="dropdown-menu" role="menu">     
                <div class="user-info">
                  <div class="user-name">John Doe</div>
                  <div class="user-position online">Available</div>
                </div><a class="dropdown-item" href="pages-profile.html"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="#"><span class="icon mdi mdi-settings"></span>Settings</a><a class="dropdown-item" href="pages-login.html"><span class="icon mdi mdi-power"></span>Logout</a>
              </div>
            </li>
          </ul>
          <!-- <div class="page-title"><span>Dashboard</span></div> -->
          <ul class="nav navbar-nav float-right be-icons-nav">
            <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
              <ul class="dropdown-menu be-notifications">
                <li>
                  <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                  <div class="list">
                    <div class="be-scroller-notifications">
                      <div class="content">
                        <ul>
                          <li class="notification notification-unread"><a href="#">
                            <div class="image"><img src="assets/img/avatar2.png" alt="Avatar"></div>
                            <div class="notification-info">
                              <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                            </div></a></li>
                            <li class="notification"><a href="#">
                              <div class="image"><img src="assets/img/avatar3.png" alt="Avatar"></div>
                              <div class="notification-info">
                                <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                              </div></a></li>
                              <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar4.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                                <li class="notification"><a href="#">
                                  <div class="image"><img src="assets/img/avatar5.png" alt="Avatar"></div>
                                  <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="footer"> <a href="#">View all notifications</a></div>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
                      <ul class="dropdown-menu be-connections">
                        <li>
                          <div class="list">
                            <div class="content">
                              <div class="row">
                                <div class="col"><a class="connection-item" href="#"><img src="assets/img/github.png" alt="Github"><span>GitHub</span></a></div>
                                <div class="col"><a class="connection-item" href="#"><img src="assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                                <div class="col"><a class="connection-item" href="#"><img src="assets/img/slack.png" alt="Slack"><span>Slack</span></a></div>
                              </div>
                              <div class="row">
                                <div class="col"><a class="connection-item" href="#"><img src="assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                                <div class="col"><a class="connection-item" href="#"><img src="assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                                <div class="col"><a class="connection-item" href="#"><img src="assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                              </div>
                            </div>
                          </div>
                          <div class="footer"> <a href="#">More</a></div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <div class="be-left-sidebar">
              <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#" style="333333">Dashboard</a>
                <div class="left-sidebar-wrapper" style="background-color: #333333;"><a class="left-sidebar-toggle" href="#">Dashboard</a>
                  <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                      <div class="left-sidebar-content">
                        <ul class="sidebar-elements">
                          <p style="font-size: 32px; font-family: 'Segoe UI Light'; padding: 20px 20px 40px 20px; color: #fff;">Get Started</p>

                          <li class="active menu-custom" ><a href="index-2.html" class="menu-custom-a"><i class="icon mdi mdi-hourglass menu-custom-icon" s></i><span class="menu-custom-text">New Test</span></a>
                          </li>

                          <li class="active menu-custom" ><a href="#newpatient" class="menu-custom-a"><i class="icon mdi mdi-account-add menu-custom-icon" s></i><span class="menu-custom-text">New Patient</span></a>
                          </li>

                          <div class="menu-break">
                          </div>

                          <li class="active menu-custom" ><a href="index-2.html" class="menu-custom-a-blue"><i class="icon mdi mdi-file menu-custom-icon" s></i><span class="menu-custom-text">View Reports</span></a>
                          </li>

                          <li class="active menu-custom" ><a href="index-2.html" class="menu-custom-a-blue"><i class="icon mdi mdi-folder-person menu-custom-icon" s></i><span class="menu-custom-text">View Patients</span></a>
                          </li>

                          <li class="active menu-custom" ><a href="index-2.html" class="menu-custom-a-blue"><i class="icon mdi mdi-view-dashboard menu-custom-icon" s></i><span class="menu-custom-text">Query Data</span></a>
                          </li>

                          <div class="menu-break">
                          </div>

                          <li class="active menu-custom-2" ><a href="index-2.html" class="menu-custom-a-gray"><i class="icon mdi menu-custom-icon" s></i><span class="menu-custom-text">Recents</span></a>
                          </li>

                          <li class="active menu-custom-2" ><a href="index-2.html" class="menu-custom-a-gray"><i class="icon menu-custom-icon" s></i><span class="menu-custom-text">System Configurations</span></a>
                          </li>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="be-content">
            <div class="main-content container-fluid">
              <div class="col-12 col-lg-12">
                <div class="tab-container">
                  <ul class="nav nav-tabs nav-tabs-classic" role="tablist">
                    <li class="nav-item acc-width"><a class="nav-link acc-text active" href="#classic_home" data-toggle="tab" role="tab">Home</a></li>
                    <li class="nav-item acc-width"><a class="nav-link acc-text" href="#classic_profile" data-toggle="tab" role="tab">Reports</a></li>
                    <li class="nav-item acc-width"><a class="nav-link acc-text" href="#newpatient" data-toggle="tab" role="tab">Patients</a></li>
                    <li class="nav-item acc-width"><a class="nav-link acc-text" href="#queries" data-toggle="tab" role="tab">Queries</a></li>
                    <li class="nav-item acc-width"><a class="nav-link acc-text" href="#inprogress" data-toggle="tab" role="tab">In Progress</a></li>
                    <li class="nav-item acc-width"><a class="nav-link acc-text" href="#btdata" data-toggle="tab" role="tab">BT Data</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="classic_home" role="tabpanel">
                      <div class="user-profile">
                        <div class="row">
                          <div class="col-lg-5">
                            <div class="user-display">
                              <div class="user-display-bg"><img src="assets/img/user-profile-display.png" alt="Profile Background"></div>
                              <div class="user-display-bottom">
                                <div class="user-display-avatar"><img src="assets/img/avatar-150.png" alt="Avatar"></div>
                                <div class="user-display-info">
                                  <div class="name">John Doe</div>
                                  <div class="nick"><span class="mdi mdi-account"></span> Maste Administrator</div>
                                </div>
                              </div>
                            </div>
                            <div class="user-info-list card">
                              <div class="card-header card-header-divider">My Settings</div>
                              <div class="card-body">
                                <table class="no-border no-strip skills">
                                  <tbody class="no-border-x no-border-y">
                                    <tr>
                                      <td class="icon"><span class="mdi mdi-case"></span></td>
                                      <td class="item">Company Information<span class="icon s7-portfolio"></span></td>
                                      <td>Lorem Ipsum dolor sit ament dolor sit amet dolor sit ament dolor sit amet dolor sit ament dolor sit amet dolor sit ament dolor sit amet.</td>
                                    </tr>
                                    <tr>
                                      <td class="icon"><span class="mdi mdi-cake"></span></td>
                                      <td class="item">Privacy Mode<span class="icon s7-gift"></span></td>
                                      <td>ON</td>
                                    </tr>
                                    <tr>
                                      <td class="icon"><span class="mdi mdi-smartphone-android"></span></td>
                                      <td class="item">Bluetooth Connection<span class="icon s7-phone"></span></td>
                                      <td>ON</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="widget widget-fullwidth widget-small">
                              <div class="widget-head pb-6">
                                <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div>
                                <div class="title">In Progress Tests</div>
                              </div>
                              <div class="widget-chart-container">
                                <table class="table table-striped table-hover">
                                  <thead>
                                    <tr>
                                      <th style="width:37%;">User</th>
                                      <th style="width:36%;">Commit</th>
                                      <th>Date</th>
                                      <th class="actions"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="user-avatar"> <img src="assets/img/avatar6.png" alt="Avatar">Penelope Thornton</td>
                                      <td>Initial commit</td>
                                      <td>Aug 6, 2015</td>
                                      <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                      <td class="user-avatar"> <img src="assets/img/avatar4.png" alt="Avatar">Benji Harper</td>
                                      <td>Main structure markup</td>
                                      <td>Jul 28, 2015</td>
                                      <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                      <td class="user-avatar"> <img src="assets/img/avatar5.png" alt="Avatar">Justine Myranda</td>
                                      <td>Left sidebar adjusments</td>
                                      <td>Jul 15, 2015</td>
                                      <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                      <td class="user-avatar"> <img src="assets/img/avatar3.png" alt="Avatar">Sherwood Clifford</td>
                                      <td>Topbar dropdown style</td>
                                      <td>Jun 30, 2015</td>
                                      <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                      <td class="user-avatar"> <img src="assets/img/avatar.png" alt="Avatar">Kristopher Donny</td>
                                      <td>Left sidebar adjusments</td>
                                      <td>Jul 15, 2015</td>
                                      <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                      <td class="user-avatar"> <img src="assets/img/avatar3.png" alt="Avatar">Sherwood Clifford</td>
                                      <td>Topbar dropdown style</td>
                                      <td>Jun 30, 2015</td>
                                      <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                      <td class="user-avatar"> <img src="assets/img/avatar2.png" alt="Avatar">Adeline Shepherd</td>
                                      <td>Topbar dropdown style</td>
                                      <td>Jun 30, 2015</td>
                                      <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                    </tr>

                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="card">
                              <div class="card-header card-header-divider">Reports<span class="card-subtitle">This is the user current progress widget</span></div>
                              <div class="card-body">
                                <div class="row user-progress">
                                  <div class="col-10"><span class="title">XRAY</span>
                                    <div class="progress">
                                      <div class="progress-bar bg-primary" style="width: 78%;"></div>
                                    </div>
                                  </div>
                                  <div class="col-2 pl-0 pl-sm-3"><span class="value">78%</span></div>
                                </div>
                                <div class="row user-progress">
                                  <div class="col-10"><span class="title">Radiology</span>
                                    <div class="progress">
                                      <div class="progress-bar bg-primary" style="width: 57%;"></div>
                                    </div>
                                  </div>
                                  <div class="col-2 pl-0 pl-sm-3"><span class="value">57%</span></div>
                                </div>
                                <div class="row user-progress">
                                  <div class="col-10"><span class="title">ECG</span>
                                    <div class="progress">
                                      <div class="progress-bar bg-primary" style="width: 45%;"></div>
                                    </div>
                                  </div>
                                  <div class="col-2 pl-0 pl-sm-3"><span class="value">45%</span></div>
                                </div>
                                <div class="row user-progress">
                                  <div class="col-10"><span class="title">Urine</span>
                                    <div class="progress">
                                      <div class="progress-bar bg-danger" style="width: 36%;"></div>
                                    </div>
                                  </div>
                                  <div class="col-2 pl-0 pl-sm-3"><span class="value">36%</span></div>
                                </div>
                                <div class="row user-progress">
                                  <div class="col-10"><span class="title">Blood Count</span>
                                    <div class="progress">
                                      <div class="progress-bar bg-danger" style="width: 30%;"></div>
                                    </div>
                                  </div>
                                  <div class="col-2 pl-0 pl-sm-3"><span class="value">30%</span></div>
                                </div>
                                <div class="row user-progress">
                                  <div class="col-10"><span class="title">Sperm count</span>
                                    <div class="progress">
                                      <div class="progress-bar bg-danger" style="width: 21%;"></div>
                                    </div>
                                  </div>
                                  <div class="col-2 pl-0 pl-sm-3"><span class="value">21%</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="card">
                              <div class="card-header card-header-divider">Saved Queries<span class="card-subtitle">This is a custom timeline widget</span></div>
                              <div class="card-body">
                                <ul class="user-timeline">
                                  <li class="latest">
                                    <div class="user-timeline-date">Just Now</div>
                                    <div class="user-timeline-title">Create New Page</div>
                                    <div class="user-timeline-description">Quisque sed est felis. Vestibulum lectus nulla, maximus in eros non, tristique consectetur lorem. Nulla molestie sem quis imperdiet facilisis</div>
                                  </li>
                                  <li>
                                    <div class="user-timeline-date">Today - 15:35</div>
                                    <div class="user-timeline-title">Back Up Theme</div>
                                    <div class="user-timeline-description">Quisque sed est felis. Vestibulum lectus nulla, maximus in eros non, tristique consectetur lorem. Nulla molestie sem quis imperdiet facilisis</div>
                                  </li>
                                  <li>
                                    <div class="user-timeline-date">Yesterday - 10:41</div>
                                    <div class="user-timeline-title">Changes In The Structure</div>
                                    <div class="user-timeline-description">Quisque sed est felis. Vestibulum lectus nulla, maximus in eros non, tristique consectetur lorem. Nulla molestie sem quis imperdiet facilisis</div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- DASHBOARD -->
                    <div class="tab-pane" id="classic_profile" role="tabpanel">

                      <div class="row">
                        <!-- Button trigger modal -->
                        

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body form">
                                <div class="form-group">
                                  <label>Patient ID</label>
                                  <input class="form-control" type="email" placeholder="1012589">
                                </div>
                                <div class="form-group">
                                  <label>Last Name</label>
                                  <input class="form-control" type="text" placeholder="Doe">
                                </div>
                                <div class="form-group">
                                  <label>First Name</label>
                                  <input class="form-control" type="text" placeholder="John">
                                </div>
                                <div class="form-group">
                                  <label>Gender</label>
                                  <select class="form-control">
                                      <option value="1" selected="">Male</option>
                                      <option value="2">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label>Date of Birth</label>
                                  <input class="form-control" type="date" placeholder="John Doe">
                                </div>
                                <div class="form-group">
                                  <label>Ethnicity</label>
                                  <select class="form-control">
                                      <option value="1" selected="">Asian</option>
                                      <option value="2">Black/American</option>
                                      <option value="2">American Indian</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                  <label>Weight</label>
                                  <input class="form-control" type="text" placeholder="John Doe" style="width: 48%">
                                  <select class="form-control" style="width: 48%;">
                                      <option value="1" selected="">Kg(s)</option>
                                      <option value="1" selected="">Llb(s)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                  <label>Nurse / Technician</label>
                                  <input class="form-control" type="text" placeholder="Nurse">
                                </div>

                                <div class="form-group">
                                  <label>Referring Physician</label>
                                  <input class="form-control" type="text" placeholder="John Doe">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <button type="button" class="btn btn-primary mb-20" data-toggle="modal" data-target="#exampleModal">
                          <i class="mdi mdi-accounts-add btn-lg"></i>&nbsp; Add new patient
                        </button>
                          <div class="widget widget-fullwidth widget-small">
                            <div class="widget-chart-container">
                              <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th style="width:37%;">Test Date</th>
                                    <th style="width:36%;">Test Type</th>
                                    <th>Patient ID</th>
                                    <th class="actions"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="user-avatar">February 10, 2018</td>
                                    <td>Initial commit</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">February 10, 2018</td>
                                    <td>Main structure markup</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">February 10, 2018</td>
                                    <td>Initial commit</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">February 10, 2018</td>
                                    <td>Left sidebar adjusments</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">February 10, 2018</td>
                                    <td>Topbar dropdown style</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">February 10, 2018</td>
                                    <td>Initial commit</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">March 11, 2014</td>
                                    <td>Left sidebar adjusments</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">December 25, 2017</td>
                                    <td>Initial commit</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>

                                    <td class="user-avatar">August 5, 2013</td>
                                    <td>Topbar dropdown style</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">January 15, 2015</td>
                                    <td>Initial commit</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">January 15, 2015</td>
                                    <td>Topbar dropdown style</td>
                                    <td>ID000001258</td>
                                    <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div style="padding-bottom: 10px;">
                            <button class="btn btn-primary btn-lg" style="width: 45%;"><span class="mdi mdi-file"></span>&nbsp; &nbsp; Generate Reports</button>
                            <button class="btn btn-success btn-lg" style="width: 45%;">Reopen</button>
                          </div>
                        <div class="user-info-list card">
                          <div class="card-header card-header-divider">My Settings</div>
                          <div class="card-body">
                            <table class="no-border no-strip skills">
                              <tbody class="no-border-x no-border-y">
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">First Name<span class="icon s7-portfolio"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Last Name<span class="icon s7-gift"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Parent ID<span class="icon s7-phone"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Gender<span class="icon s7-phone"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">DOB<span class="icon s7-phone"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Ethnicity<span class="icon s7-phone"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Weight at Allocation<span class="icon s7-phone"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Nurse/Technician<span class="icon s7-phone"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Reffering Physician<span class="icon s7-phone"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Samples Collected<span class="icon s7-phone"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Samples Analyzed<span class="icon s7-phone"></span></td>
                                  <td>Sample Data only</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>

                    <!-- NEW PATIENT -->
                    <div class="tab-pane" id="newpatient" role="tabpanel">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="user-info-list card">
                            <div class="card-header card-header-divider">New Patient</div>
                            <div class="card-body">
                              <table class="no-border no-strip skills">
                                <tbody class="no-border-x no-border-y">
                                  <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item">First Name<span class="icon s7-portfolio"></span></td>
                                    <td><input class="form-control" id="inputEmail2" type="text" placeholder="Fist Name"></td>
                                  </tr>
                                  <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item">Last Name<span class="icon s7-gift"></span></td>
                                    <td><input class="form-control" id="inputEmail2" type="text" placeholder="Last Name"></td>
                                  </tr>
                                  <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item">Parent ID<span class="icon s7-phone"></span></td>
                                    <td><input class="form-control" id="inputEmail2" type="text" placeholder="Parent ID"></td>
                                  </tr>
                                  <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item">Gender<span class="icon s7-phone"></span></td>
                                    <td>
                                      <select class="form-control">
                                        <option value="1" selected="">Male</option>
                                        <option value="2">Female</option>
                                      </select>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item">Date of Birth<span class="icon s7-phone"></span></td>
                                    <td><input class="form-control" id="inputEmail2" type="date" placeholder="Date of Birth"></td>
                                  </tr>
                                  <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item">Ethnicity<span class="icon s7-phone"></span></td>
                                    <td><select class="form-control">
                                      <option value="1" selected="">Asian</option>
                                      <option value="2">Black/American</option>
                                      <option value="2">American Indian</option>
                                    </select></td>
                                  </tr>
                                  <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item">Weight at Allocation<span class="icon s7-phone"></span></td>
                                    <td><input class="form-control" id="inputEmail2" type="text" placeholder="Weight at Allocation"></td>
                                  </tr>
                                  <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item">Nurse/Technician<span class="icon s7-phone"></span></td>
                                    <td><input class="form-control " id="inputEmail2" type="text" placeholder="Nurse/Technician"> 
                                      <button href="#" style="display: inline-block;" class="btn btn-success btn-sm"><i class="mdi mdi-plus-square"></i>&nbsp;Add new record..</button>
                                    </td>

                                  </tr>
                                  <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item">Reffering Physician<span class="icon s7-phone"></span></td>
                                    <td><input class="form-control " id="inputEmail2" type="text" placeholder="Reffering Physician">
                                      <button href="#" style="display: inline-block;" class="btn btn-success btn-sm"><i class="mdi mdi-plus-square"></i>&nbsp;Add new record..</button></td>
                                    </tr>
                                    <tr>
                                      <td class="icon"><span class="mdi mdi-account"></span></td>
                                      <td class="item">Samples Collected<span class="icon s7-phone"></span></td>
                                      <td><input class="form-control" id="inputEmail2" type="text" placeholder="Samples Collected"></td>
                                    </tr>
                                    <tr>
                                      <td class="icon"><span class="mdi mdi-account"></span></td>
                                      <td class="item">Samples Analyzed<span class="icon s7-phone"></span></td>
                                      <td><input class="form-control" id="inputEmail2" type="text" placeholder="Samples Analyzed "></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div style="padding-bottom: 10px; padding-top: 15px;">
                                  <button class="btn btn-primary btn-lg" style="width: 45%;">Save</button>
                                  <button class="btn btn-danger btn-lg" style="width: 45%;">Cancel</button>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="widget widget-fullwidth widget-small">
                            <div class="widget-chart-container">
                              <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Patient ID</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <!-- BT DATA -->

                    <div class="tab-pane" id="btdata" role="tabpanel">
                      <div class="row">
                        <div class="col-lg-12">
                        <h2 class="page-head-title" style="margin-top: 20px;">Sample Result Queue</h2>
                        <hr>
                        <!-- <div style="margin-bottom: 15px;">
                          <button class="btn btn-danger"><i class="mdi mdi-delete"></i>&nbsp; Delete</button>
                          <button class="btn btn-warning"><i class="mdi mdi-stop"></i>&nbsp; Clear Queue</button>
                        </div> -->
                          <div class="widget widget-fullwidth widget-small">
                            <div class="widget-chart-container">
                              <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Patient ID</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                    <td><button class="btn btn-danger"><i class="mdi mdi-delete"></i>&nbsp; Delete</button>
                                        <button class="btn btn-warning"><i class="mdi mdi-stop"></i>&nbsp; Clear Queue</button></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                    <td><button class="btn btn-danger"><i class="mdi mdi-delete"></i>&nbsp; Delete</button>
                                        <button class="btn btn-warning"><i class="mdi mdi-stop"></i>&nbsp; Clear Queue</button></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                    <td><button class="btn btn-danger"><i class="mdi mdi-delete"></i>&nbsp; Delete</button>
                                        <button class="btn btn-warning"><i class="mdi mdi-stop"></i>&nbsp; Clear Queue</button></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                    <td><button class="btn btn-danger"><i class="mdi mdi-delete"></i>&nbsp; Delete</button>
                                        <button class="btn btn-warning"><i class="mdi mdi-stop"></i>&nbsp; Clear Queue</button></td>
                                  </tr>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>

                    <!-- QUERIES -->
                    <div class="tab-pane" id="queries" role="tabpanel">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="widget widget-fullwidth widget-small">
                            <div class="widget-chart-container">
                              <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Patient ID</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="user-info-list card">
                          <div class="card-header card-header-divider">New Patient</div>
                          <div class="card-body">
                            <table class="no-border no-strip skills">
                              <tbody class="no-border-x no-border-y">
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">First Name<span class="icon s7-portfolio"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Fist Name"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Last Name<span class="icon s7-gift"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Last Name"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Parent ID<span class="icon s7-phone"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Parent ID"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Gender<span class="icon s7-phone"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Gender"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">DOB<span class="icon s7-phone"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="DOB"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Ethnicity<span class="icon s7-phone"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Ethnicity"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Weight at Allocation<span class="icon s7-phone"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Weight at Allocation"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Nurse/Technician<span class="icon s7-phone"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Nurse/Technician"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Reffering Physician<span class="icon s7-phone"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Reffering Physician"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Samples Collected<span class="icon s7-phone"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Samples Collected"></td>
                                </tr>
                                <tr>
                                  <td class="icon"><span class="mdi mdi-account"></span></td>
                                  <td class="item">Samples Analyzed<span class="icon s7-phone"></span></td>
                                  <td><input class="form-control" id="inputEmail2" type="text" placeholder="Samples Analyzed "></td>
                                </tr>
                              </tbody>
                            </table>
                            <div style="padding-bottom: 10px; padding-top: 15px;">
                            <button class="btn btn-primary btn-lg" style="width: 45%;">Save</button>
                            <button class="btn btn-warning btn-lg" style="width: 45%;">Cancel</button>
                          </div>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>

                    <!-- IN PROGRESS -->
                    <div class="tab-pane" id="inprogress" role="tabpanel">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="widget widget-fullwidth widget-small">
                            <div class="widget-chart-container">
                              <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Patient ID</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                    <td><button class="btn btn-primary">View</button></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                    <td><button class="btn btn-primary">View</button></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                    <td><button class="btn btn-primary">View</button></td>
                                  </tr>
                                  <tr>
                                    <td class="user-avatar">Doe</td>
                                    <td>John Kennedy</td>
                                    <td>ID000001258</td>
                                    <td>Male</td>
                                    <td>DOB</td>
                                    <td><button class="btn btn-primary">View</button></td>
                                  </tr>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-lg-12">
                          <h2 class="page-head-title" style="margin-top: 20px;">Fructose Malabsorptions &nbsp;<button class="btn btn-success" style=""><span class="mdi mdi-border-color"></span>&nbsp;Edit</button></h2>
                          <p style="font-size: 14px; margin-bottom: 30px;">John Swagger Doe</p>
                          <hr>
                          <div class="row">
                            <div class="col-md-12 mb-20">
                              <p style="display: inline-block;">Insert: &nbsp; &nbsp;</p>
                              <button class="btn btn-primary btn-md">OVR</button>
                              <button class="btn btn-warning btn-md">MAX</button>
                              <button class="btn btn-danger btn-md">TOO HIGH</button>
                              <button class="btn btn-default btn-md">SKIP</button>
                            </div>
                          </div>
                          <div class="widget widget-fullwidth widget-small">
                            <div class="widget-chart-container">
                              <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Interval</th>
                                    <th>Time</th>
                                    <th>ppm H2</th>
                                    <th>ppm CH4</th>
                                    <th>H2+CH4</th>
                                    <th>%cO2</th>
                                    <th>Corrections</th>
                                    <th>Symptoms</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                  </tr>
                                  <tr>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                  </tr>
                                  <tr>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                  </tr>
                                  <tr>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                  </tr>
                                  <tr>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                  </tr>
                                  <tr>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                    <td><input type="" name="" class="form-control"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div style="margin-bottom: 20px;" class="text-right">
                            <button class="btn btn-success btn btn-lg" style="width: 35%;">Finalize</button>
                            <button class="btn btn-primary btn btn-lg">Save</button>
                            <button class="btn btn-danger btn btn-lg">Cancel</button>
                          </div>
                        </div>
                      </div>
                      <hr>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="card card-full-primary">
                              <div class="card-header">Pre Test Notes</div>
                              <div class="card-body">
                                <p> Quisque gravida aliquam diam at cursus, quisque laoreet ac lectus a rhoncusac tempus odio. </p>
                                <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="card card-full-success">
                              <div class="card-header">Pre Test Symptoms</div>
                              <div class="card-body">
                                <p> Quisque gravida aliquam diam at cursus, quisque laoreet ac lectus a rhoncusac tempus odio. </p>
                                <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
                              </div>
                            </div>
                          </div>
                        <div class="col-lg-6">
                          <div class="card card-contrast">
                            <div class="card-header card-header-contrast card-header-featured">In Test Notes</div>
                            <div class="card-body">
                              <textarea rows="7" style="width: 100%;"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="card card-contrast">
                            <div class="card-header card-header-contrast card-header-featured">Diagnosis Recommendations</div>
                            <div class="card-body">
                              <textarea rows="7" style="width: 100%;"></textarea>
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
          <nav class="be-right-sidebar">
            <div class="sb-content">
              <div class="tab-navigation">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
                </ul>
              </div>
              <div class="tab-panel">
                <div class="tab-content">
                  <div class="tab-pane tab-chat active" id="tab1" role="tabpanel">
                    <div class="chat-contacts">
                      <div class="chat-sections">
                        <div class="be-scroller-chat">
                          <div class="content">
                            <h2>Recent</h2>
                            <div class="contact-list contact-list-recent">
                              <div class="user"><a href="#"><img src="assets/img/avatar1.png" alt="Avatar">
                                <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                                <div class="user"><a href="#"><img src="assets/img/avatar2.png" alt="Avatar">
                                  <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                                  <div class="user"><a href="#"><img src="assets/img/avatar3.png" alt="Avatar">
                                    <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                                  </div>
                                  <h2>Contacts</h2>
                                  <div class="contact-list">
                                    <div class="user"><a href="#"><img src="assets/img/avatar4.png" alt="Avatar">
                                      <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                                      <div class="user"><a href="#"><img src="assets/img/avatar5.png" alt="Avatar">
                                        <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                                        <div class="user"><a href="#"><img src="assets/img/avatar6.png" alt="Avatar">
                                          <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="bottom-input">
                                    <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                                  </div>
                                </div>
                                <div class="chat-window">
                                  <div class="title">
                                    <div class="user"><img src="assets/img/avatar2.png" alt="Avatar">
                                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                                    </div><span class="icon return mdi mdi-chevron-left"></span>
                                  </div>
                                  <div class="chat-messages">
                                    <div class="be-scroller-messages">
                                      <div class="content">
                                        <ul>
                                          <li class="friend">
                                            <div class="msg">Hello</div>
                                          </li>
                                          <li class="self">
                                            <div class="msg">Hi, how are you?</div>
                                          </li>
                                          <li class="friend">
                                            <div class="msg">Good, I'll need support with my pc</div>
                                          </li>
                                          <li class="self">
                                            <div class="msg">Sure, just tell me what is going on with your computer?</div>
                                          </li>
                                          <li class="friend">
                                            <div class="msg">I don't know it just turns off suddenly</div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="chat-input">
                                    <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                                      <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane tab-todo" id="tab2" role="tabpanel">
                                <div class="todo-container">
                                  <div class="todo-wrapper">
                                    <div class="be-scroller-todo">
                                      <div class="todo-content"><span class="category-title">Today</span>
                                        <ul class="todo-list">
                                          <li>
                                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                              <input class="custom-control-input" type="checkbox" checked=""><span class="custom-control-label">Initialize the project</span>
                                            </label>
                                          </li>
                                          <li>
                                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Create the main structure							</span>
                                            </label>
                                          </li>
                                          <li>
                                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Updates changes to GitHub							</span>
                                            </label>
                                          </li>
                                        </ul><span class="category-title">Tomorrow</span>
                                        <ul class="todo-list">
                                          <li>
                                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Initialize the project							</span>
                                            </label>
                                          </li>
                                          <li>
                                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Create the main structure							</span>
                                            </label>
                                          </li>
                                          <li>
                                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Updates changes to GitHub							</span>
                                            </label>
                                          </li>
                                          <li>
                                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!							</span>
                                            </label>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="bottom-input">
                                    <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane tab-settings" id="tab3" role="tabpanel">
                                <div class="settings-wrapper">
                                  <div class="be-scroller-settings"><span class="category-title">General</span>
                                    <ul class="settings-list">
                                      <li>
                                        <div class="switch-button switch-button-sm">
                                          <input type="checkbox" checked="" name="st1" id="st1"><span>
                                            <label for="st1"></label></span>
                                          </div><span class="name">Available</span>
                                        </li>
                                        <li>
                                          <div class="switch-button switch-button-sm">
                                            <input type="checkbox" checked="" name="st2" id="st2"><span>
                                              <label for="st2"></label></span>
                                            </div><span class="name">Enable notifications</span>
                                          </li>
                                          <li>
                                            <div class="switch-button switch-button-sm">
                                              <input type="checkbox" checked="" name="st3" id="st3"><span>
                                                <label for="st3"></label></span>
                                              </div><span class="name">Login with Facebook</span>
                                            </li>
                                          </ul><span class="category-title">Notifications</span>
                                          <ul class="settings-list">
                                            <li>
                                              <div class="switch-button switch-button-sm">
                                                <input type="checkbox" name="st4" id="st4"><span>
                                                  <label for="st4"></label></span>
                                                </div><span class="name">Email notifications</span>
                                              </li>
                                              <li>
                                                <div class="switch-button switch-button-sm">
                                                  <input type="checkbox" checked="" name="st5" id="st5"><span>
                                                    <label for="st5"></label></span>
                                                  </div><span class="name">Project updates</span>
                                                </li>
                                                <li>
                                                  <div class="switch-button switch-button-sm">
                                                    <input type="checkbox" checked="" name="st6" id="st6"><span>
                                                      <label for="st6"></label></span>
                                                    </div><span class="name">New comments</span>
                                                  </li>
                                                  <li>
                                                    <div class="switch-button switch-button-sm">
                                                      <input type="checkbox" name="st7" id="st7"><span>
                                                        <label for="st7"></label></span>
                                                      </div><span class="name">Chat messages</span>
                                                    </li>
                                                  </ul><span class="category-title">Workflow</span>
                                                  <ul class="settings-list">
                                                    <li>
                                                      <div class="switch-button switch-button-sm">
                                                        <input type="checkbox" name="st8" id="st8"><span>
                                                          <label for="st8"></label></span>
                                                        </div><span class="name">Deploy on commit</span>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </nav>
                                    </div>
                                    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
                                    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
                                    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                                    <script src="assets/js/app.js" type="text/javascript"></script>
                                    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
                                    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
                                    <script src="assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
                                    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
                                    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
                                    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
                                    <script src="assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
                                    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
                                    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
                                    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
                                    <script src="assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
                                    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
                                    <script type="text/javascript">
                                      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dashboard();

      });
    </script>
  </body>

  </html>