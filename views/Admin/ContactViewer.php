<?php 

 include_once'../../controllers/ContactController.php';
  $conta=new ContactController();

  $id=$_GET['id'];
  echo $id;
  $contact=$conta->getContacttsById($id);
  
  if( isset($_POST['mail']) && isset($_POST['object']) && isset($_POST['reponse']))
  {
      $email=$_POST['mail'];
      echo $email;
      $obj=$_POST['object'];
      $msg=$_POST['reponse'];
      
      
      if($conta->sendEmailToClient($email, $obj, $msg))
              
        echo "<script>alert('Mail Sended');</script>"; 
   else
        echo  "<script>alert('Error!Mail not sended!!');</script>";
  }
      

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from foxythemes.net/preview/products/amaretti/pages-blank-header.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2016 19:16:40 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Amaretti</title>
        <link rel="stylesheet" type="text/css" href="assets/lib/stroke-7/style.css"/>
        <link rel="stylesheet" type="text/css" href="assets/lib/jquery.nanoscroller/css/nanoscroller.css"/><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="assets/lib/theme-switcher/theme-switcher.min.css"/><link type="text/css" href="assets/css/style.css" rel="stylesheet">  </head>
    <body>
        <div class="am-wrapper">
            <nav class="navbar navbar-default navbar-fixed-top am-top-header">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="page-title"><span>Blank Page</span></div><a href="#" class="am-toggle-left-sidebar navbar-toggle collapsed"><span class="icon-bar"><span></span><span></span><span></span></span></a><a href="index-2.html" class="navbar-brand"></a>
                    </div><a href="#" class="am-toggle-right-sidebar"><span class="icon s7-menu2"></span></a><a href="#" data-toggle="collapse" data-target="#am-navbar-collapse" class="am-toggle-top-header-menu collapsed"><span class="icon s7-angle-down"></span></a>
                    <div id="am-navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right am-user-nav">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.jpg"><span class="user-name">Samantha Amaretti</span><span class="angle-down s7-angle-down"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#"> <span class="icon s7-user"></span>My profile</a></li>
                                    <li><a href="#"> <span class="icon s7-config"></span>Settings</a></li>
                                    <li><a href="#"> <span class="icon s7-help1"></span>Help</a></li>
                                    <li><a href="#"> <span class="icon s7-power"></span>Sign Out</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav am-nav-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">Services <span class="angle-down s7-angle-down"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">UI Consulting</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">Database Management</a></li>
                                    <li><a href="#">Seo Improvement</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right am-icons-nav">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-comment"></span></a>
                                <ul class="dropdown-menu am-messages">
                                    <li>
                                        <div class="title">Messages<span class="badge">3</span></div>
                                        <div class="list">
                                            <div class="am-scroller nano">
                                                <div class="content nano-content">
                                                    <ul>
                                                        <li class="active"><a href="#">
                                                                <div class="logo"><img src="assets/img/avatar2.jpg"></div>
                                                                <div class="user-content"><span class="date">April 25</span><span class="name">Jessica Caruso</span><span class="text-content">Request you to be a part of the same so that we can work...</span></div></a></li>
                                                        <li><a href="#">
                                                                <div class="logo"><img src="assets/img/avatar3.jpg"></div>
                                                                <div class="user-content"><span class="date">March 18</span><span class="name">Joel King</span><span class="text-content"> We wish to extend the building.</span></div></a></li>
                                                        <li><a href="#">
                                                                <div class="logo"><img src="assets/img/avatar4.jpg"></div>
                                                                <div class="user-content"><span class="date">January 3</span><span class="name">Claire Sassu</span><span class="text-content"> We the ladies of a block are wiling to join together to set up a catering...</span></div></a></li>
                                                        <li><a href="#">
                                                                <div class="logo"><img src="assets/img/avatar5.jpg"></div>
                                                                <div class="user-content"><span class="date">January 2</span><span class="name">Emily Carter</span><span class="text-content"> Request you to be a part of the same so that we can work...</span></div></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer"> <a href="#">View all messages</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-bell"></span><span class="indicator"></span></a>
                                <ul class="dropdown-menu am-notifications">
                                    <li>
                                        <div class="title">Notifications<span class="badge">3</span></div>
                                        <div class="list">
                                            <div class="am-scroller nano">
                                                <div class="content nano-content">
                                                    <ul>
                                                        <li class="active"><a href="#">
                                                                <div class="logo"><span class="icon s7-pin"></span></div>
                                                                <div class="user-content"><span class="circle"></span><span class="name">Jessica Caruso</span><span class="text-content"> accepted your invitation to join the team.</span><span class="date">2 min ago</span></div></a></li>
                                                        <li><a href="#">
                                                                <div class="logo"><span class="icon s7-add-user"></span></div>
                                                                <div class="user-content"><span class="name">Joel King</span><span class="text-content"> is now following you</span><span class="date">2 days ago</span></div></a></li>
                                                        <li><a href="#">
                                                                <div class="logo"><span class="icon s7-gleam"></span></div>
                                                                <div class="user-content"><span class="name">Claire Sassu</span><span class="text-content"> is watching your main repository</span><span class="date">2 days ago</span></div></a></li>
                                                        <li><a href="#">
                                                                <div class="logo"><span class="icon s7-add-user"></span></div>
                                                                <div class="user-content"><span class="name">Emily Carter</span><span class="text-content"> is now following you</span><span class="date">5 days ago</span></div></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer"> <a href="#">View all notifications</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-share"></span></a>
                                <ul class="dropdown-menu am-connections">
                                    <li>
                                        <div class="title">Connections</div>
                                        <div class="list">
                                            <div class="content">
                                                <ul>
                                                    <li>
                                                        <div class="logo"><img src="assets/img/github.png"></div>
                                                        <div class="field"><span>GitHub</span>
                                                            <div class="pull-right">
                                                                <div class="switch-button switch-button-sm">
                                                                    <input type="checkbox" checked="" name="check1" id="switch1"><span>
                                                                        <label for="switch1"></label></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="logo"><img src="assets/img/bitbucket.png"></div>
                                                        <div class="field"><span>Bitbucket</span>
                                                            <div class="pull-right">
                                                                <div class="switch-button switch-button-sm">
                                                                    <input type="checkbox" name="check2" id="switch2"><span>
                                                                        <label for="switch2"></label></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="logo"><img src="assets/img/slack.png"></div>
                                                        <div class="field"><span>Slack</span>
                                                            <div class="pull-right">
                                                                <div class="switch-button switch-button-sm">
                                                                    <input type="checkbox" checked="" name="check3" id="switch3"><span>
                                                                        <label for="switch3"></label></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="logo"><img src="assets/img/dribbble.png"></div>
                                                        <div class="field"><span>Dribbble</span>
                                                            <div class="pull-right">
                                                                <div class="switch-button switch-button-sm">
                                                                    <input type="checkbox" name="check4" id="switch4"><span>
                                                                        <label for="switch4"> </label></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="footer"> <a href="#">View all connections</a></div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="am-left-sidebar">
                <div class="content">
                    <div class="am-logo"></div>
                    <ul class="sidebar-elements">
                        <li class="parent"><a href="#"><i class="icon s7-monitor"></i><span>Dashboard</span></a>
                            <ul class="sub-menu">
                                <li><a href="index-2.html">Version 1</a>
                                </li>
                                <li><a href="dashboard2.html">Version 2</a>
                                </li>
                                <li><a href="dashboard3.html"><span class="label label-primary pull-right">New</span>Version 3</a>
                                </li>
                                <li><a href="dashboard4.html"><span class="label label-primary pull-right">New</span>Version 4</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon s7-diamond"></i><span>UI Elements</span></a>
                            <ul class="sub-menu">
                                <li><a href="ui-general.html">General</a>
                                </li>
                                <li><a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li><a href="ui-panels.html">Panels</a>
                                </li>
                                <li><a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li><a href="ui-modals.html">Modals</a>
                                </li>
                                <li><a href="ui-notifications.html">Notifications</a>
                                </li>
                                <li><a href="ui-icons.html">Icons</a>
                                </li>
                                <li><a href="ui-grid.html">Grid</a>
                                </li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                                </li>
                                <li><a href="ui-chat.html"><span class="label label-primary pull-right">New</span>Chat Component</a>
                                </li>
                                <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                                </li>
                                <li><a href="ui-typography.html"><span class="label label-primary pull-right">New</span>Typography</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon s7-graph"></i><span>Charts</span></a>
                            <ul class="sub-menu">
                                <li><a href="charts-flot.html">Flot</a>
                                </li>
                                <li><a href="charts-morris.html">Morris.js</a>
                                </li>
                                <li><a href="charts-sparkline.html">Sparklines</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon s7-ribbon"></i><span>Forms</span></a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Elements</a>
                                </li>
                                <li><a href="form-validation.html">Validation</a>
                                </li>
                                <li><a href="form-spinner.html"><span class="label label-primary pull-right">New</span>Spinner</a>
                                </li>
                                <li><a href="form-wizard.html">Wizard</a>
                                </li>
                                <li><a href="form-masks.html">Input Masks</a>
                                </li>
                                <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                                </li>
                                <li><a href="form-upload.html">Multi Upload</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon s7-box2"></i><span>Tables</span></a>
                            <ul class="sub-menu">
                                <li><a href="tables-general.html">General</a>
                                </li>
                                <li><a href="tables-datatables.html">Data Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon s7-note2"></i><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="pages-blank.html">Blank Page</a>
                                </li>
                                <li class="active"><a href="pages-blank-header.html">Blank Page Header</a>
                                </li>
                                <li><a href="pages-login.html">Login</a>
                                </li>
                                <li><a href="pages-404.html">404 Page</a>
                                </li>
                                <li><a href="pages-sign-up.html">Sign Up</a>
                                </li>
                                <li><a href="pages-forgot-password.html">Forgot Password</a>
                                </li>
                                <li><a href="pages-profile.html">Profile</a>
                                </li>
                                <li><a href="pages-calendar.html">Calendar</a>
                                </li>
                                <li><a href="pages-gallery.html">Gallery</a>
                                </li>
                                <li><a href="pages-pricing-tables.html"><span class="label label-primary pull-right">New</span>Pricing Tables</a>
                                </li>
                                <li><a href="pages-timeline.html"><span class="label label-primary pull-right">New</span>Timeline</a>
                                </li>
                                <li><a href="pages-timeline2.html"><span class="label label-primary pull-right">New</span>Timeline v2</a>
                                </li>
                                <li><a href="pages-invoice.html"><span class="label label-primary pull-right">New</span>Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon s7-mail"></i><span>Email</span></a>
                            <ul class="sub-menu">
                                <li><a href="email-inbox.html">Inbox</a>
                                </li>
                                <li><a href="email-read.html">Email Detail</a>
                                </li>
                                <li><a href="email-compose.html">Email Compose</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon s7-browser"></i><span>Layouts</span></a>
                            <ul class="sub-menu">
                                <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                                </li>
                                <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                                </li>
                                <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                                </li>
                                <li><a href="layouts-white-header.html">White Header</a>
                                </li>
                                <li><a href="layouts-sticky-footer.html"><span class="label label-primary pull-right">New</span>Sticky Footer</a>
                                </li>
                                <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                                </li>
                                <li><a href="layouts-left-sidebar-click.html"><span class="label label-primary pull-right">New</span>Open left sidebar on click</a>
                                </li>
                                <li><a href="pages-blank-aside.html">Page Aside</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon s7-map-marker"></i><span>Maps</span></a>
                            <ul class="sub-menu">
                                <li><a href="maps-google.html">Google Maps</a>
                                </li>
                                <li><a href="maps-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--Sidebar bottom content-->
                </div>
            </div>
            <div class="am-content">
                <div class="page-head">
                    <h2>Blank Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Blank Page Header</li>
                    </ol>
                </div>
                         <div class="main-content">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Contacts</h3>
                </div>
                <div class="panel-body">
                    <form action="ContactViewer.php?id=<?=$contact['id_contact']?>" class="form-horizontal group-border-dashed" method="POST" enctype="multipart/form-data">
                   
        
                                      <div class="form-group">
                      <label class="col-sm-3 control-label">Client Email</label>
                      <div class="col-sm-6">
                        <input type="text" required="yes"  class="form-control" name="mail" value="<?php echo $contact['email'] ?>">
                      </div>
                    </div>
              
                   
                                      <div class="form-group">
                      <label class="col-sm-3 control-label">Subject</label>
                      <div class="col-sm-6">
                        <input type="text" required="yes" placeholder="object" class="form-control" name="sub" disabled value="<?php echo $contact['sujet'] ?>">
                      </div>
                    </div>
                 
                             <div class="form-group">
                      <label class="col-sm-3 control-label">Client Message</label>
                      <div class="col-sm-6">
                          <textarea required="yes" class="form-control" name="msg" disabled=""><?php echo $contact['message'] ?></textarea>
                      </div>
                    </div>
               
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Object</label>
                      <div class="col-sm-6">
                        <input type="text" required="yes" placeholder="object" class="form-control" name="object" >
                      </div>
                    </div>
                 
                             <div class="form-group">
                      <label class="col-sm-3 control-label">Response</label>
                      <div class="col-sm-6">
                        <textarea required="yes" class="form-control" name="reponse"></textarea>
                      </div>
                    </div>
                 
                    <div class="form-group">
                        
                        
                           <center>This message will be send as an email to the client.<br><br><br><input type="submit" class="btn btn-space btn-primary" name="send" value="Send">
                        <button class="btn btn-space btn-default" name="cancel">Cancel</button>
                        
                   </center>
                    </div>
                       
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
            <nav class="am-right-sidebar">
                <div class="sb-content">
                    <div class="user-info"><img src="assets/img/avatar.jpg"><span class="name">Samantha Amaretti<span class="status"></span></span><span class="position">Art Director</span></div>
                    <div class="tab-navigation">
                        <ul role="tablist" class="nav nav-tabs nav-justified">
                            <li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab"> <span class="icon s7-smile"></span></a></li>
                            <li role="presentation"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab"> <span class="icon s7-chat"></span></a></li>
                            <li role="presentation"><a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab"> <span class="icon s7-help2"></span></a></li>
                            <li role="presentation"><a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab"> <span class="icon s7-ticket"></span></a></li>
                        </ul>
                    </div>
                    <div class="tab-panel">
                        <div class="tab-content">
                            <div id="tab1" role="tabpanel" class="tab-pane announcement active am-scroller nano">
                                <div class="nano-content">
                                    <div class="content">
                                        <h2>Announcement</h2>
                                        <ul>
                                            <li>
                                                <div class="icon"><span class="icon s7-sun"></span></div>
                                                <div class="content"><a href="#">Happy Day</a><span>Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</span></div>
                                            </li>
                                            <li>
                                                <div class="icon"><span class="icon s7-gift"></span></div>
                                                <div class="content"><a href="#">Congratulations Developers</a><span>Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</span></div>
                                            </li>
                                            <li>
                                                <div class="icon"><span class="icon s7-star"></span></div>
                                                <div class="content"><a href="#">High Score</a><span>Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="search">
                                    <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
                                </div>
                            </div>
                            <div id="tab2" role="tabpanel" class="tab-pane chat">
                                <div class="chat-contacts">
                                    <div class="chat-sections">
                                        <div class="am-scroller nano">
                                            <div class="content nano-content">
                                                <h2>Recent</h2>
                                                <div class="recent">
                                                    <div class="user"><a href="#"><img src="assets/img/avatar4.jpg">
                                                            <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                                                    <div class="user"><a href="#"><img src="assets/img/avatar7.jpg">
                                                            <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                                                    <div class="user"><a href="#"><img src="assets/img/avatar3.jpg">
                                                            <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                                                </div>
                                                <h2>Contacts</h2>
                                                <div class="contact">
                                                    <div class="user"><a href="#"><img src="assets/img/avatar6.jpg">
                                                            <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                                                    <div class="user"><a href="#"><img src="assets/img/avatar7.jpg">
                                                            <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                                                    <div class="user"><a href="#"><img src="assets/img/avatar8.jpg">
                                                            <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search">
                                        <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
                                    </div>
                                </div>
                                <div class="chat-window">
                                    <div class="title">
                                        <div class="user"><img src="assets/img/avatar7.jpg">
                                            <h2>Maggie jackson</h2><span>Active 1h ago</span>
                                        </div><span class="icon return s7-angle-left"></span>
                                    </div>
                                    <div class="chat-messages">
                                        <div class="am-scroller nano">
                                            <div class="content nano-content">
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
                                        <div class="input-wrapper"><span class="photo s7-camera"></span>
                                            <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg s7-paper-plane"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" role="tabpanel" class="tab-pane faqs am-scroller nano">
                                <div class="nano-content">
                                    <div class="content">
                                        <h2>FAQs</h2>
                                        <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group accordion">
                                            <div class="panel">
                                                <div role="tab" class="panel-heading">
                                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq1" aria-expanded="true" aria-controls="collapseOne">
                                                            <div class="icon"><span class="s7-angle-down"></span></div><span class="title">Under Error 352</span></a></h4>
                                                </div>
                                                <div id="faq1" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div role="tab" class="panel-heading">
                                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq2" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                                                            <div class="icon"><span class="s7-angle-down"></span></div><span class="title">Failure platform</span></a></h4>
                                                </div>
                                                <div id="faq2" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                                                    <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div role="tab" class="panel-heading">
                                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq3" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                                                            <div class="icon"><span class="s7-angle-down"></span></div><span class="title">Error 404</span></a></h4>
                                                </div>
                                                <div id="faq3" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                                                    <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div role="tab" class="panel-heading">
                                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq4" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                                                            <div class="icon"><span class="s7-angle-down"></span></div><span class="title">New workstation</span></a></h4>
                                                </div>
                                                <div id="faq4" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                                                    <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search">
                                    <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
                                </div>
                            </div>
                            <div id="tab4" role="tabpanel" class="tab-pane ticket am-scroller nano">
                                <div class="nano-content">
                                    <div class="content">
                                        <h2>New Ticket</h2>
                                        <form>
                                            <div class="form-group send-ticket">
                                                <input type="text" placeholder="Title" class="form-control">
                                            </div>
                                            <div class="form-group send-ticket">
                                                <textarea rows="3" placeholder="Write Here..." class="form-control"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg">Create Ticket</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
        <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/lib/theme-switcher/theme-switcher.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                //initialize the javascript
                App.init();
            });

        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                App.livePreview();
            });

        </script>
        <script type="text/javascript">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-68396117-1', 'auto');
            ga('send', 'pageview');


        </script>
        <div class="ft_theme_switcher ocult">
            <div class="toggle"><i class="icon s7-settings"></i></div>
            <div class="desc">
                <h3>Theme Switcher</h3>
                <p>Select a color scheme. You can create your own color theme with less files.</p>
            </div>
            <div class="style_list">
                <div class="style">
                    <div class="colors">
                        <div style="background: #EF6262;" class="color"></div>
                        <div style="background: #95d9f0;" class="color"></div>
                        <div style="background: #ffdc7a;" class="color"></div>
                        <div style="background: #7a98bf;" class="color"></div>
                        <div style="background: #cccccc;" class="color"></div>
                        <div class="name"> Default</div>
                    </div><a href="pages-blank-headerd976.html?theme=default"></a>
                </div>
                <div class="style">
                    <div class="colors">
                        <div style="background: #7F64B5;" class="color"></div>
                        <div style="background: #65CEEC;" class="color"></div>
                        <div style="background: #ffdc7a;" class="color"></div>
                        <div style="background: #45D8C2;" class="color"></div>
                        <div style="background: #e0e0e0;" class="color"></div>
                        <div class="name"> Twilight</div>
                    </div><a href="pages-blank-header056d.html?theme=twilight"></a>
                </div>
                <div class="style">
                    <div class="colors">
                        <div style="background: #4e91ff;" class="color"></div>
                        <div style="background: #f55244;" class="color"></div>
                        <div style="background: #FBBF22;" class="color"></div>
                        <div style="background: #49AD70;" class="color"></div>
                        <div style="background: #DFDFDF;" class="color"></div>
                        <div class="name"> Google</div>
                    </div><a href="pages-blank-header421b.html?theme=google"></a>
                </div>
                <div class="style">
                    <div class="colors">
                        <div style="background: #f7c954;" class="color"></div>
                        <div style="background: #88ca92;" class="color"></div>
                        <div style="background: #7fcff5;" class="color"></div>
                        <div style="background: #8B8CCC;" class="color"></div>
                        <div style="background: #CCCCCC;" class="color"></div>
                        <div class="name"> Sunrise</div>
                    </div><a href="pages-blank-headera494.html?theme=sunrise"></a>
                </div>
                <div class="style">
                    <div class="colors">
                        <div style="background: #6bc3b0;" class="color"></div>
                        <div style="background: #FFE088;" class="color"></div>
                        <div style="background: #bda5d7;" class="color"></div>
                        <div style="background: #FF7FA0;" class="color"></div>
                        <div style="background: #dfdfdf;" class="color"></div>
                        <div class="name">Cake</div>
                    </div><a href="pages-blank-headere2f8.html?theme=cake"></a>
                </div>
            </div>
        </div>
    </body>

    <!-- Mirrored from foxythemes.net/preview/products/amaretti/pages-blank-header.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2016 19:16:41 GMT -->
</html>
