<?php
include_once'../../controllers/ProduitController.php';
 include_once'../../controllers/ContactController.php';
  $conta=new ContactController();
  $contact=$conta->getAllContact();
 $p=new ProduitController();
       $catselect=$p->getAllProduit();
         if(isset($_POST['Delete2'])&& !empty($_POST['ch']))
       {
           $chk= implode(",",$ch);
         echo "<script>alert('".$chk."');</script>";
        
            if($p->deleteProduits($chk))
          echo "<script>alert('Products deleted with success');window.location.href='ModifierProduitView.php';</script>";
           else
                echo "<script>alert('Products not deleted');window.location.href='ModifierProduitView.php';</script>";
               
           
       }
       else
           if(isset($_GET['action'])=='delete')
       {
           $id=$_GET['id'];
           if($p->deleteProduit($id))
          echo "<script>alert('Product deleted with success');window.location.href='ModifierProduitView.php';</script>";
           else
                echo "<script>alert('Productnot deleted');window.location.href='ModifierProduitView.php';</script>";
               
       }
   
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/amaretti/tables-datatables.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2016 19:16:34 GMT -->
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
    <link rel="stylesheet" type="text/css" href="assets/lib/theme-switcher/theme-switcher.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/css/dataTables.bootstrap.min.css"/><link type="text/css" href="assets/css/style.css" rel="stylesheet">  </head>

<body>
    <div class="am-wrapper">
      <nav class="navbar navbar-default navbar-fixed-top am-top-header">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="page-title"><span>Data Tables</span></div><a href="#" class="am-toggle-left-sidebar navbar-toggle collapsed"><span class="icon-bar"><span></span><span></span><span></span></span></a><a href="index-2.html" class="navbar-brand"></a>
          </div><a href="#" class="am-toggle-right-sidebar"><span class="icon s7-menu2"></span></a><a href="#" data-toggle="collapse" data-target="#am-navbar-collapse" class="am-toggle-top-header-menu collapsed"><span class="icon s7-angle-down"></span></a>
          <div id="am-navbar-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right am-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.jpg"><span class="user-name">Samantha Amaretti</span><span class="angle-down s7-angle-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#"> <span class="icon s7-user"></span>My profile</a></li>
                  <li><a href="#"> <span class="icon s7-config"></span>Settings</a></li>
                  <li><a href="#"> <span class="icon s7-help1"></span>Help</a></li>
                  <li><a href="/PhpProject/views/Public/index.php"> <span class="icon s7-power"></span>Sign Out</a></li>
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
                              
                            <li class="active"><a href="ContactViewer.php?id=<?=$d['id_contact']?>">
                                <div class="logo"><img src="assets/img/avatar2.jpg"></div>
                                 <div class="user-content"><span class="date"> </span>
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
                    <div class="title">Notifications<span class="badge"></span></div>
                    <div class="list">
                      <div class="am-scroller nano">
                        <div class="content nano-content">
                            <ul>
                               <?php
                        
                             foreach($catselect as $d ){
                                  if(($d['stock_produit']<10) &&($d['stock_produit']>0))
                                 { ?>
                      
                             <li><a href="#">
                            <div class="logo"><span class="icon s7-gleam"></span></div>
                            <div class="user-content"><span class="circle"></span>
                            <span class="name"><b><?php echo $d['libelle_produit'] ?></b></span>
                            <span class="text-content"> This product Will be out of stock !</span></div></a></li>
                     
                                            <?php
                                 } 
                                 if($d['stock_produit']==0)
                                 {?>
                                       <li><a href="#">
                            <div class="logo"><span class="icon s7-gleam"></span></div>
                            <div class="user-content"><span class="circle"></span>
                            <span class="name"><b><?php echo $d['libelle_produit'] ?></b></span>
                            <span class="name"> This product is out of stock !</span></div></a></li>  
                                <?php
                                }
                                 }
                                        ?>
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
        <div class="page-head">
          <h2>Data Tables</h2>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Tables</li>
          </ol>
        </div>
        <div class="main-content">
          <div class="row">
            <div class="col-sm-12">
              <div class="widget widget-fullwidth widget-small">
                <div class="widget-head">
                
                  <div class="title">All Products</div>
                </div>
             
                <table id="table1" class="table table-striped table-hover table-fw-widget">
                  <thead>
                    <tr>
                      <th hidden>Id product</th>
                      <th style="width:2500px"><b> Name</b></th>
                      <th style="width:250px"><b> Price</b></th>
                      <th style="width:250px"><b> Stock</b></th>
                      <th style="width:250px"><b> Disponibility</b></th>
                       <th style="width:3500px"><b> Description</b></th>
                        <th style="width:250px"><b> Category</b></th>
                         <th style="width:250px"><b> Image</b></th>
                         <th hidden></th>
                         <th hidden style="width:2000px"></th>
                            <th hidden></th>
                    </tr>
                    
                  </thead>
                  <tbody>
                  
                           <?php
                       
                             foreach($catselect as $d ){
                                            ?>
                        <tr class="gradeA odd">
                        <td hidden> <?php echo $d['id_produit']?></td>
                         <td> <?php echo $d['libelle_produit']?></td>
                         <td> <?php echo $d['prix_produit']?></td>
                          <td> <?php echo $d['stock_produit']?></td>
                           <td> <?php echo $d['dispo']?></td>
                            <td> <?php echo $d['description_produit']?></td>
                             <td> <?php echo $d['id_cat']?></td>
                             <td><input type="image"  width="50px" src="<?php echo $d['image']?>"/></td>
                             <td><input type="checkbox" name="ch[]" value="<?php echo $d['id_produit']?>"/></td>
                             <td><a href="ModifierProduitForm.php?id=<?=$d['id_produit']?>"><input type="submit" name="Update" value="Update" onclick="update($d['id_produit'])"/>
                             <td><a href="ModifierProduitView.php?action=delete&id=<?=$d['id_produit']?>"><input type="submit" name="Delete" value="Delete"/>
                                </tr>
                                
                                            <?php
                                        }
                                        ?>
                                 <tr class="gradeA odd">
                        <td hidden> </td>
                         <td> </td>
                         <td> </td>
                          <td></td>
                           <td> </td>
                            <td> </td>
                             <td></td>
                             <td></td>
                               <td><a href="ModifierProduitView.php?action2=deleteAll&id=<?=$d['id_produit']?>"/><input type="submit" name="Delete2" value="Delete"/>
                     
                                   </tr>
                 
                  </tbody>
                </table>
                  
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="widget widget-fullwidth widget-small">
           
             
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="widget widget-fullwidth widget-small">
            
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
    <script src="assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
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
     
  </body>

<!-- Mirrored from foxythemes.net/preview/products/amaretti/tables-datatables.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2016 19:16:38 GMT -->
</html>

