
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R-TIST</title>
    <link rel="icon" type="image/ico" href="../../../images/favlogo.ico">

    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>

    <script type="text/javascript" src="../../../cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/js/mdb.min.js"></script>
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../local.css" />
    <script type="text/javascript" src="../../../cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../../../maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>

    <div id="wrapper" >
          <?php include('../../../navbar.php'); ?>
          <div class="collapse navbar-collapse navbar-ex1-collapse" style="background: black;">
                <ul id="active" class="nav navbar-nav side-nav" style="background: black;">

                    <li><a href="#Problem"><i class="fa fa-globe"></i> Event description</a></li>
                    
                    <li><a href="#generalrules"><i class="fa fa-universal-access"></i>General Rules</a></li>
                    <li><a href="#team"><i class="fa fa-gamepad"></i>Team Specification</a></li>
                    <li><a href="#judge"><i class="fa fa-gamepad">Judgement Criteria </i>
</a></li>

                    <li><a href="#prize"><i class=" fa fa-clock-o"></i> Prize Money</a></li>

                    <li><a href="numberRoute.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Rule Book</a></li>
                    <li><a href="#contact"><i class="fa fa-phone"></i> Contacts</a></li>
                </ul>

            </div>
        <div id="page-wrapper">
           <div class="row">
                <div class="col-md-12">
                    <div class="eventHeading" style="text-align: center;">Numbery Route</div>

                    <!-- <div id="RegisterContainer">
                      <a class="semi-transparent-button" onclick="checkIfLogin()" id="semi-transparent-button" >REGISTER </a>
                    </div> -->
                </div>
            </div>

            <br/>

            <div class="row" id="Problem">
                <div class="col-md-12">
                    <div class="panel panel-primary" style="border: black" >
                        <div class="panel-heading" style="background: black;">
                            <h3 class="panel-title"><i class="fa fa-rss"></i>Event description</h3>
                        </div>
                        <div class="panel-body">
                            <section class="feed-item">

                                <div class="feed-item-body">
                                    <div class="text eventInfo" >

                                    <p>In Numbery route the team of participants has to Build a autonomous line follower robot which should also 
                                    be able to count the no. of boxes placed parallel along the route and also to count the 
                                    number of boxes of same height.</p>

                                    <p>Boxes of three different Heights will be placed Randomly along the route ,the bot has
                                         to count the no. of boxes  of each type while following the line .</p>
                                    <p>The bot should be autonomous i.e. it should it controlled via wired or wireless medium .</p>
                                    <p>All this data along with the time of journey should be 
                                        displayed on the LCD screen embedded into the bot.</p>
                                    <p>Numbery Route will contain only one round .  </p>
                                   <center> <img src="number_route.png">  </center>
                                    </div>
                                    </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>

                <div class="row" id="generalrules">
                <div class="col-md-12">
                    <div class="panel panel-primary" style="border: black" >
                        <div class="panel-heading" style="background: black;">
                            <h3 class="panel-title"><i class="fa fa-rss"></i> General Rules </h3>
                        </div>
                        <div class="panel-body">
                            <section class="feed-item">

                                <div class="feed-item-body">
                                    <div class="text eventInfo">
                                   <li>Bot will be given only three chances  to be replaced if it misses the track </li>
                                   <li>It should display the number of blocks of each height .</li>
                                   <li>It should the display the travel time .</li>
                                   <li>Bot would have to follow a black line on a white Background</li>

                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>


            <br />

            <div class="row" id="team">
                    <div class="col-md-12">
                        <div class="panel panel-primary" style="border: black" >
                            <div class="panel-heading" style="background: black;">
                                <h3 class="panel-title"><i class="fa fa-rss"></i>Team Specification</h3>
                            </div>
                            <div class="panel-body">
                                <section class="feed-item">
    
                                    <div class="feed-item-body">
                                        <div class="text eventInfo">
                                                    <li>Bot Specification : 30cm  x 25 cm  (maximum)</li>
                                                    <li>Track Specifications :  3m x 4cm </li>
                                                    <li>Width of black line to be followed :  4 cm</li>
                                                    <li>Distance between boxes : 10 cm – 40 cm</li>
                                                    <li>Height of Boxes  :
                                                       <ol>
                                                            <li>30 cm</li>
                                                            <li>25 cm</li>
                                                            <li>10 cm</li>
                                                       </ol> 
                                                    </li>
                                            
                                        </div>
                                    </div>
                                </section>
    
                            </div>
                        </div>
                    </div>
                </div>    
                
                <div class="row" id="judge">
                        <div class="col-md-12">
                            <div class="panel panel-primary" style="border: black" >
                                <div class="panel-heading" style="background: black;">
                                    <h3 class="panel-title"><i class="fa fa-rss"></i>Judgement Criteria</h3>
                                </div>
                                <div class="panel-body">
                                    <section class="feed-item">
        
                                        <div class="feed-item-body">
                                            <div class="text eventInfo">
                                                    <li> Bot must follow the line. </li>
                                                    <li> The number of blocks of each type must be counted. </li>
                                                    <li> Priority will be given to the bot who will count  the details correctly time correctly. </li>
                                                    <li> If the bots in competition completes all above criteria then time of completion will be taken in consideration.  </li>
                                                    <li> In Situations of any Dispute/Tie  the final decision of the organizers will be valid .</li>	
                                                     
                                                
 <h3 style="color:red;display:inline; font-weight:bolder;">Note:</h3>
 <a style="color:white; text-decoration:underline;"
  href="numberRoute.pdf">Click here</a> to view rule book.
                                                
                                                </div>
                                        </div>
                                    </section>
        
                                </div>
                            </div>
                        </div>
                    </div>


        

           <div class="row" id="prize">
                <div class="col-md-12">
                    <div class="panel panel-primary" style="border: black" >
                        <div class="panel-heading" style="background: black;">
                            <h3 class="panel-title"><i class="fa fa-rss"></i> Prize Money</h3>
                        </div>
                        <div class="panel-body">
                            <section class="feed-item">

                                <div class="feed-item-body">
                                    <div class="text eventInfo">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>


            <div id="RegisterContainer">
                <a class="semi-transparent-button" href="../team_register.php?id=45" style="display: flex; justify-content: center" id="semi-transparent-button" >REGISTER HERE</a>
              </div>




            <div class="row" id="contact">
                <div class="col-md-12">
                    <div class="panel panel-primary" style="border: black" >
                        <div class="panel-heading" style="background: black;">
                            <h3 class="panel-title"><i class="fa fa-rss"></i> Contacts</h3>
                        </div>
                        <div class="panel-body">
                            <section class="feed-item">

                                <div class="feed-item-body">
                                    <div class="text eventInfo">
                                        <center>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-12 contactDetails">
                                                        <div class="Name">
                                                                Shubham Yadav
                                                        </div>
                                                        <div class="Number">
                                                            +91-8437641024                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-sm-12 contactDetails">
                                                        <div class="Name">
                                                                Prasad Jadhav
                                                        </div>
                                                        <div class="Number">
                                                            +91-9175929323
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>





    <script type="text/javascript">
        if (typeof(Storage) !== "undefined")
        {
            sessionStorage.setItem("path", "events/construction_and_design/crepido.html");
            sessionStorage.setItem("formPath","../../../form.html");
        }
    </script>

    <script src="../../../www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
    <script src="../../../js/login.js" ></script>
    <script src="../../registration.js"></script>
    <script src="../../events.js"></script>
</body>

<!-- Mirrored from www.axisvnit.org/events/construction_and_design/crepido.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2019 06:47:37 GMT -->
</html>
