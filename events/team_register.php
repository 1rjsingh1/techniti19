
<!DOCTYPE html>
<html lang="en">

                        
                        <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Team Register</title>
                            <link rel="icon" type="image/ico" href="../../images/favlogo.ico">
                        
                            <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                            <link href="../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">
                            <link href="../../cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/css/mdb.min.css" rel="stylesheet">
                            <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                            <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
                            
                            <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/js/mdb.min.js"></script>
                            <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                            <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
                            <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
                            <link rel="stylesheet" type="text/css" href="../local.css" />
                            <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                            <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                        
                        </head>
                        <body>
                        
                            <div id="wrapper">
                                  <?php include('../../navbar.php'); ?>
          <div class="collapse navbar-collapse navbar-ex1-collapse" style="background: black;">
                <ul id="active" class="nav navbar-nav side-nav" style="background: black;">
                                           
                                            <li><a href="#EventDescription"><i class="fa fa-globe"></i> Event Description:</a></li>
                                            <li><a href="#Participation"><i class="fa fa-gamepad"></i>Participation:</a></li>
                                            <li><a href="#ImportantDates"><i class="fa fa-list-ol"></i>Important Dates:</a></li>
                                            <li><a href="#GeneralRules"><i class="fa fa-universal-access"></i>General Rules:</a></li>
                                            <li><a href="#PrizeDistribution"><i class="fa fa-vcard-o"></i> Prize Distribution:</a></li>
                                            <li><a href="#Organizers"><i class=" fa fa-clock-o"></i>Organizers:</a></li>
                                        </ul>
                                        
                                    </div>
                                </nav>
                        
                                
                
                                
                                                            
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog" style="width: 90%;max-width: 90%;">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" style="color: white;" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">
                                            <center> REGISTRATION </center>
                                        </h4>
                                      </div>
                                      <div class="modal-body">
                                            <form name="myForm" method="post" onsubmit="return register()" autocomplete>
                                                <div class="md-form">
                                                    <div class="row" style="margin-bottom: 40px;">
                                                        <div class="col-md-12">
                                                            <center>
                                                                <div class="googin loginBUTTON">
                                                                </div>
                                                                <div class="logon axisLOGIN" id="axisLOGIN" style="color: white;font-family: nexalight;" title="user">
                                                                    <div style="text-align: center;"><span class="nameid">NAME : </span><span class="clientName" id="clientName" title="name"></span></div>
                                                                    <div style="text-align: center;"><span class="nameid">techNITi19 ID : </span><span class="techNITi19id" id="techNITi19id" title="axis id"></span></div>
                                                                </div>
                                                                <div class="myRegistrations"></div>
                                                            </center>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row" style="margin-bottom: 40px;">
                                                        <div class="col-md-12">
                                                            <center>
                                                                <input type="text" name="teamName"  placeholder="Team Name" style="color: white;font-size: 17px;max-width: 40%;" id="inputValidationEx" class="form-control validate" required="true" />
                                                                <input type="text" name="eventName" value="ALGO-RHYTHM" hidden />
                                                            </center>
                                                        </div>
                                                    </div>
                        
                                         
                                                    
                                                    <br />
                            <div class="row">
                                <div class="col-md-3 flex-center">
                                    <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Team Leader</span>
                                </div>
                                
                                <div class="col-md-3">
                                  <input type="text"  name="name1" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" required />
                                </div>
                                <div class="col-md-3">
                                  <input type="text" name="id1" placeholder="techNITi19 ID" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" required />
                                </div>
                                <div class="col-md-3">
                                  <input type="email" name="email1" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" required />
                                </div>
                            </div>
                            <br />


                                                    <center>
                                                        <div>You can have team of 1.</div>
                                                    </center>
                                                    <br />
                                                    
                        
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <center>
                                                                <input type="submit" name="Submit" value="Submit" class="btn btn-warning" />
                        
                                                            </center>
                                                        </div>
                                                    </div>
                                                    <div style="visibility: hidden;">
                                                        <div class="row">
                                                            <div class="col-md-2 flex-center">
                                                                <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Member 2</span>
                        
                                                            </div>
                        
                                                            <div class="col-md-2">
                                                              <input type="text"  name="name2" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="id2" placeholder="techNITi19 ID" style="color:white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="email" name="email2" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="contact2" placeholder="Contact No." style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="college2" placeholder="College" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                        </div>
                        
                                                        <br />
                                                        <div class="row">
                                                            <div class="col-md-2 flex-center">
                                                                <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Member3</span>
                        
                                                            </div>
                        
                                                            <div class="col-md-2">
                                                              <input type="text"  name="name3" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="id3" placeholder="techNITi19 ID" style="color:white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="email" name="email3" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="contact3" placeholder="Contact No." style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="college3" placeholder="College" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                        
                                                            </div>
                                                        </div>
                                                    </div>
                        
                                                </div>
                                            </form>
                                      </div>
                                    </div>
                                </div>
                        
                        
                        
                        
                            </div>
                        
                        
                            <script type="text/javascript">
                                if (typeof(Storage) !== "undefined")
                                {
                                    sessionStorage.setItem("path", "events/construction_and_design/crepido.html");
                                    sessionStorage.setItem("formPath","../../form.html");
                                }
                            </script>
                        
                            <script src="../../www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
                            <script src="../../js/login.js" ></script>
                            <script src="../registration.js"></script>
                            <script src="../events.js"></script>
                        </body>
                        
                        <!-- Mirrored from www.axisvnit.org/events/construction_and_design/crepido.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2019 06:47:37 GMT -->
