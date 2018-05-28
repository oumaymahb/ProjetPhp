<?php
 include_once'../../controllers/ContactController.php';
  $conta=new ContactController();
  $contact=$conta->getAllContact();
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/amaretti/pages-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2016 19:16:47 GMT -->
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
            <div class="page-title"><span>Profile</span></div><a href="#" class="am-toggle-left-sidebar navbar-toggle collapsed"><span class="icon-bar"><span></span><span></span><span></span></span></a><a href="index-2.html" class="navbar-brand"></a>
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
        
            <ul class="nav navbar-nav navbar-right am-icons-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-comment"></span></a>
                <ul class="dropdown-menu am-messages">
                  <li>
                    <div class="title">Messages<span class="badge">3</span></div>
                    <div class="list">
                      <div class="am-scroller nano">
                        <div class="content nano-content">
                          <ul>
                          <?php foreach($contact as $d)
                              {
                                  ?>
                              
                            <li class="active"><a href="#">
                                <div class="logo"><img src="assets/img/avatar2.jpg"></div>
                                <div class="user-content"><span class="date"><?php echo $d['date_c'] ?></span>
                                <span class="name"><?php echo $d['email'] ?></span>
                                <span class="text-content"><?php echo $d['message'] ?></span>
                                </div></a></li>
                              <?php } ?>
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
                  <li class="active"><a href="">Products</a>
                </li>
                 <li ><a href="ajoutProduitView.php">Add a product</a>
                </li>
                <li ><a href="ModifierProduitView.php">Update/Delete a product</a>
                </li>
                <li class="active"><a href="">Categories</a>
                </li>
                 <li ><a href="ajoutCategorieView.php">Add a Category</a>
                </li>
                 <li ><a href="ModifierCategorieView.php">Update/Delete a Category</a>
                 </li>
                <li class="active"><a href="">Orders</a>
                </li>
            
              </ul>
            </li>
       
     
                  <li class="parent"><a href="#"><i class="icon s7-mail"></i><span>Email</span></a>
              <ul class="sub-menu">
                <li><a href="email-inbox.php">Inbox</a>
                </li>
                <li><a href="email-read.php">Email Detail</a>
                </li>
                <li><a href="emaiil-compose.php">Email Compose</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-note2"></i><span>Pages</span></a>
              <ul class="sub-menu">
              
                <li><a href="page_profil.php">Profile</a>
                </li>
                <li><a href="page_calendrier.php">Calendar</a>
                </li>
    
              </ul>
            </li>
              </div>
      </div>
      <div class="am-content">
        <div class="main-content">
          <div class="user-profile">
            <div class="user-display">
              <div class="photo"><img src="assets/img/profile.jpg"></div>
              <div class="bottom">
                <div class="user-avatar"><span class="status"></span><img src="assets/img/avatar.jpg"></div>
                <div class="user-info">
                  <h4>Samantha Amaretti</h4><span>I am a web developer and designer based in Montreal - Canada, I like read books, good music and nature.</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="info-block panel panel-default">
                  <div class="panel-heading">
                    <h4>About me</h4>
                  </div>
                  <div class="panel-body"><span class="description">I am a web developer and designer based in Montreal - Canada, I like read books, good music and nature.</span>
                    <table class="no-border no-strip skills">
                      <tbody class="no-border-x no-border-y">
                        <tr>
                          <td class="item">Ocupation:<span class="icon s7-portfolio"></span></td>
                          <td>Developer and designer</td>
                        </tr>
                        <tr>
                          <td class="item">Birthday:<span class="icon s7-gift"></span></td>
                          <td>16 September 1989</td>
                        </tr>
                        <tr>
                          <td class="item">Mobile:<span class="icon s7-phone"></span></td>
                          <td>(999) 999-9999</td>
                        </tr>
                        <tr>
                          <td class="item">Location:<span class="icon s7-map-marker"></span></td>
                          <td>Montreal, Canada</td>
                        </tr>
                        <tr>
                          <td class="item">Website:<span class="icon s7-global"></span></td>
                          <td>www.website.com</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                                <div class="widget widget-fullwidth widget-small">
                                  <div class="widget-head">
                                    <div class="tools"><span class="value">58Mb</span></div><span class="title">Development Activity</span>
                                  </div>
                                  <div class="chart-container">
                                    <div id="linechart-mini1" style="height: 150px;"></div>
                                  </div>
                                  <table class="table table-striped table-fw-widget table-hover">
                                    <thead>
                                      <tr>
                                        <th>Operating System</th>
                                        <th class="number">Users</th>
                                        <th class="number">Rebound</th>
                                      </tr>
                                    </thead>
                                    <tbody class="no-border-x">
                                      <tr>
                                        <td>Windows</td>
                                        <td class="number">186</td>
                                        <td class="number">51%</td>
                                      </tr>
                                      <tr>
                                        <td>Mac OS</td>
                                        <td class="number">145</td>
                                        <td class="number">64%</td>
                                      </tr>
                                      <tr>
                                        <td>Linux</td>
                                        <td class="number">89</td>
                                        <td class="number">38%</td>
                                      </tr>
                                      <tr>
                                        <td>Android</td>
                                        <td class="number">67</td>
                                        <td class="number">57%</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
								bottom .user-avatar {
    position: absolute;
    left: 46px;
    top: -30px;
}
              </div>
              <div class="col-md-4 col-sm-6">
                                <div class="widget widget-fullwidth widget-small">
                                  <div class="widget-head">
                                    <div class="tools"><span class="value">124</span></div><span class="title">Project Issues</span>
                                  </div>
                                  <div class="chart-container">
                                    <div id="barchart-mini1" style="height: 150px;"></div>
                                  </div>
                                  <table class="table table-striped table-fw-widget table-hover">
                                    <thead>
                                      <tr>
                                        <th>Operating System</th>
                                        <th class="number">Users</th>
                                        <th class="number">Rebound</th>
                                      </tr>
                                    </thead>
                                    <tbody class="no-border-x">
                                      <tr>
                                        <td>Windows</td>
                                        <td class="number">186</td>
                                        <td class="number">51%</td>
                                      </tr>
                                      <tr>
                                        <td>Mac OS</td>
                                        <td class="number">145</td>
                                        <td class="number">64%</td>
                                      </tr>
                                      <tr>
                                        <td>Linux</td>
                                        <td class="number">89</td>
                                        <td class="number">38%</td>
                                      </tr>
                                      <tr>
                                        <td>Android</td>
                                        <td class="number">67</td>
                                        <td class="number">57%</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="widget widget-calendar">
                  <div class="cal-container">
                    <div class="cal-notes"><span class="day">Thursday</span><span class="date">September 24</span><span class="title">Notes<span class="icon s7-plus"></span></span>
                      <ul>
                        <li><span class="hour">14h</span><span class="event-name">Meeting with investors</span></li>
                        <li><span class="hour">8h</span><span class="event-name">Dentist date</span></li>
                      </ul>
                    </div>
                    <div class="cal-calendar">
                      <div class="ui-datepicker"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                                <div class="widget widget-fullwidth widget-small">
                                  <div class="widget-head">
                                    <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div><span class="title">Latest Commits</span>
                                  </div>
                                  <div class="table-container">
                                    <table class="table table-striped table-fw-widget table-hover">
                                      <thead>
                                        <tr>
                                          <th width="32%">User</th>
                                          <th width="45%">Commit</th>
                                          <th>Date</th>
                                        </tr>
                                      </thead>
                                      <tbody class="no-border-x">
                                        <tr>
                                          <td class="user-avatar"> <img src="assets/img/avatar4.jpg">Claire Sassu</td>
                                          <td>Initial commit</td>
                                          <td>Aug 6, 2015</td>
                                        </tr>
                                        <tr>
                                          <td class="user-avatar"> <img src="assets/img/avatar3.jpg">Joel King</td>
                                          <td>Main structure markup</td>
                                          <td>Jul 28, 2015</td>
                                        </tr>
                                        <tr>
                                          <td class="user-avatar"> <img src="assets/img/avatar7.jpg">Maggie Jackson</td>
                                          <td>Left sidebar adjusments</td>
                                          <td>Jul 15, 2015</td>
                                        </tr>
                                        <tr>
                                          <td class="user-avatar"> <img src="assets/img/avatar6.jpg">Mike Bolthort</td>
                                          <td>Topbar dropdown style</td>
                                          <td>Jun 30, 2015</td>
                                        </tr>
                                        <tr>
                                          <td class="user-avatar"> <img src="assets/img/avatar8.jpg">Jhon Voltemar</td>
                                          <td>Footer html structure</td>
                                          <td>Jun 23, 2015</td>
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
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.pageProfile();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	App.livePreview();
      });
      
    </script>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
      
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
          </div><a href="pages-profiled976.html?theme=default"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div style="background: #7F64B5;" class="color"></div>
            <div style="background: #65CEEC;" class="color"></div>
            <div style="background: #ffdc7a;" class="color"></div>
            <div style="background: #45D8C2;" class="color"></div>
            <div style="background: #e0e0e0;" class="color"></div>
            <div class="name"> Twilight</div>
          </div><a href="pages-profile056d.html?theme=twilight"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div style="background: #4e91ff;" class="color"></div>
            <div style="background: #f55244;" class="color"></div>
            <div style="background: #FBBF22;" class="color"></div>
            <div style="background: #49AD70;" class="color"></div>
            <div style="background: #DFDFDF;" class="color"></div>
            <div class="name"> Google</div>
          </div><a href="pages-profile421b.html?theme=google"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div style="background: #f7c954;" class="color"></div>
            <div style="background: #88ca92;" class="color"></div>
            <div style="background: #7fcff5;" class="color"></div>
            <div style="background: #8B8CCC;" class="color"></div>
            <div style="background: #CCCCCC;" class="color"></div>
            <div class="name"> Sunrise</div>
          </div><a href="pages-profilea494.html?theme=sunrise"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div style="background: #6bc3b0;" class="color"></div>
            <div style="background: #FFE088;" class="color"></div>
            <div style="background: #bda5d7;" class="color"></div>
            <div style="background: #FF7FA0;" class="color"></div>
            <div style="background: #dfdfdf;" class="color"></div>
            <div class="name">Cake</div>
          </div><a href="pages-profilee2f8.html?theme=cake"></a>
        </div>
      </div>
    </div>
  </body>

<!-- Mirrored from foxythemes.net/preview/products/amaretti/pages-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2016 19:16:50 GMT -->
</html>
