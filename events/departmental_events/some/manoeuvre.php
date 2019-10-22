<?php
        include('../conn.php');

  ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manoeuvre</title>
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

    <div id="wrapper">
          <?php include('../../../navbar.php'); ?>
          <div class="collapse navbar-collapse navbar-ex1-collapse" style="background: black;">
                <ul id="active" class="nav navbar-nav side-nav" style="background: black;">

                    <li><a href="#Problem"><i class="fa fa-globe"></i> Event description</a></li>
                    <li><a href="#storyline"><i class="fa fa-gamepad"></i>Team Specification</a></li>
                    <li><a href="#rules"><i class="fa fa-list-ol"></i> Round 1</a></li>
                    <li><a href="#testingofbridge"><i class="fa fa-universal-access"></i>Round 2</a></li>

                    <li><a href="#writtentest"><i class=" fa fa-clock-o"></i> Prize Money</a></li>

                    <li><a href="https://drive.google.com/open?id=1POzBQlr8ZkTrQYVbcCpzurIfOTm-0mAE" target="_blank"><i class="fa fa-file-pdf-o"></i> Rule Book</a></li>
                    <li><a href="#contact"><i class="fa fa-phone"></i> Contacts</a></li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper">
           <div class="row">
                <div class="col-md-12">
                    <div class="eventHeading" style="text-align: center;">MANOEUVRE</div>

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
                                       Focusing on every move you make, every pick and every place as accurate as
possible, “MANOEUVRE”, around the obstacle, with elegance.
Pave the path of your own victory, literally. Its all about mastering our controls
to move the bot as you wish it to.
So fabricate a bot that can pick, place and move all while having a bumpy ride
on an off road track.
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
                <div class="row" id="storyline">
                <div class="col-md-12">
                    <div class="panel panel-primary" style="border: black" >
                        <div class="panel-heading" style="background: black;">
                            <h3 class="panel-title"><i class="fa fa-rss"></i> Team Specification </h3>
                        </div>
                        <div class="panel-body">
                            <section class="feed-item">

                                <div class="feed-item-body">
                                    <div class="text eventInfo">
                                     A team may contain maximum of 4 members, no minimum limit
                                    (A team may consist of members from different colleges too).

                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>


            <br />
            <div class="row" id="rules">

                <div class="col-md-12">
                    <div class="panel panel-primary" style="border: black">
                        <div class="panel-heading" style="background: black;">
                            <h3 class="panel-title"><i class="fa fa-rss"></i> Round 1</h3>
                        </div>
                        <div class="panel-body">
                            <section class="feed-item">

                                <div class="feed-item-body">
                                    <div class="text eventInfo"">
                                       <p><b><u> Technical Inspection</u></b> (T.I.)



                                       <li>  In this round, the bot made by the participants will be subjected to a thorough technical inspection.</li>
                                        <li> This isn’t a judging parameter; hence no points are awarded for this round. Bots not meeting the displayed specifications will be disqualified immediately and the participating team wouldn’t proceed to next round(s).</li>

                                        <p><b><u> Dimensions & Fabrication of Robot</u></b></p>
                                        <li>The dimensions of the bot should be less than or equal to 30cm X 20cm X
30cm (lxbxh) failing which the team will be disqualified from the
competition. The bot arm can, however, extend once the run starts. An
error of (+5%/-5%) is Permitted.</li>
<li>The dimensions of the remote are not included in the size constraint of the
bot.</li>
<li>The bot must be controlled manually.<b>(Please ensure that the legth of the
arm on closing should be at least 15cms.Maximum distance on
stretching is left for the participating teams)</b></li>
<li>Teams can use both wired as well as wireless control mechanisms. In case
of wired bots, the length of wire should be such that the wire remains slack
at any instant of time. In case of wireless bots frequency should be
changeable, prefer at-least 2 changeable frequencies, unable to change your
frequency may lead to disqualification.</li>
<li>The Bot must have an on-board power supply in any case.</li>
<li>The power supply should be electric and should not exceed 24V DC
potential difference between any two points during the complete run.</li>
<li>Participants are not supposed to use any readymade Lego components or
readymade grippingmechanism. However, the participants are allowed to
use readymade gear assemblies.</li>
<li>Irrespective of the mechanism used, only one person will be allowed to
control the bot.</li>
<li>Failing to meet any of the above specifications will lead to immediate
disqualification.</li>


                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="testingofbridge">
             <div class="col-md-12">
                    <div class="panel panel-primary" style="border: black" >
                        <div class="panel-heading" style="background: black;">
                            <h3 class="panel-title"><i class="fa fa-rss"></i> Round 2</h3>
                        </div>
                        <div class="panel-body">
                            <section class="feed-item">

                                <div class="feed-item-body">
                                    <div class="text eventInfo">
                                        <p><b><u>Gameplay</u></b></p>

                                    <li>Bridge model will be loaded till failure. The maximum deflection at the point of yielding and The load at that moment will be used to evaluate the structure.The bot will be required to cross a track filled with obstacle and cavities in
minimum amount of time.</li>
                                    <li>The cavities will have to be fill before furthur progression of the bot.
                                    </li>
                                    <li>The track wiil be an off-road one.
                                    </li>
                                    <li>The blocks needed to fill the cavities will be provided on site.</li>
                                    <li>The points will be provided based on the type of hurdle crossed, but points
to fill cavities will be same for all the cavities.</li>
<li>In case a bot gets stuck on an obstacle, it will be allowed to skip the
obstacle by human intervention, although a specified penalty will be
applied on the bot.</li>
<li>The bot will not be allowed to slide the blocks against the ground except
for some fine adjustments.</li>
<li>Maximum time of 10 minutes will be given to each team.</li>
<p><b><u>General Rules</u></b></p>
<li>Bot that don’t clear the technical inspection will not be allowed to proceed
into the gameplay.</li>
<li>Only one team member is allowed to handle the bot. No other team
member is allowed to enter the arena.</li>
<li>Any kind of damage done to the arena or blocks by the bot will lead to its
disqualification.</li>
<li>In case of any discrepencies, the decision of the judges will be ultimate
and any furthur arguements will not be entertained.</li>
<li>The organizers reserve the right to change any or all the rules as they
deem fit. In case a change is made it will be notified to the registered team
through mail.</li>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>


           <div class="row" id="judgingandscoring">
                <div class="col-md-12">
                    <div class="panel panel-primary" style="border: black" >
                        <div class="panel-heading" style="background: black;">
                            <h3 class="panel-title"><i class="fa fa-rss"></i> Prize Money</h3>
                        </div>
                        <div class="panel-body">
                            <section class="feed-item">
                                <div class="icon pull-left">

                                </div>
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
                <a class="semi-transparent-button" href="../team_register.php?id=27" style="display: flex; justify-content: center" id="semi-transparent-button" >REGISTER HERE</a>
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
                                                    <div class="col-md-4 col-lg-4 col-sm-12 contactDetails">
                                                        <div class="Name">
                                                            Harvindra Singh Dhaka
                                                        </div>
                                                        <div class="Number">
                                                            +91-872958885
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-sm-12 contactDetails">
                                                        <div class="Name">
                                                            Manik Gupta
                                                        </div>
                                                        <div class="Number">
                                                            +91-7696015509
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-sm-12 contactDetails">
                                                        <div class="Name">
                                                            Devansh Kumar
                                                        </div>
                                                        <div class="Number">
                                                            +91-7087231287
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
                                        <input type="text" name="eventName" value="CREPIDO" hidden />
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

                            <div class="row">
                                <div class="col-md-3 flex-center">
                                    <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Member 2</span>
                                </div>
                                <div class="col-md-3">
                                  <input type="text"  name="name2" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate"/>
                                </div>
                                <div class="col-md-3">
                                  <input type="text" name="id2" placeholder="techNITi19 ID" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate"/>
                                </div>
                                <div class="col-md-3">
                                  <input type="email" name="email2" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                                </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-md-3 flex-center">
                                    <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Member 3</span>
                                </div>
                                <div class="col-md-3">
                                  <input type="text"  name="name3" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                                </div>
                                <div class="col-md-3">
                                  <input type="text" name="id3" placeholder="techNITi19 ID" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                                </div>
                                <div class="col-md-3">
                                  <input type="email" name="email3" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                                </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-md-3 flex-center">
                                    <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Member 4</span>
                                </div>

                                <div class="col-md-3">
                                  <input type="text"  name="name4" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                                </div>
                                <div class="col-md-3">
                                  <input type="text" name="id4" placeholder="techNITi19 ID" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                                </div>
                                <div class="col-md-3">
                                  <input type="email" name="email4" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />
                                </div>
                            </div>
                            <br/>


                            <center>
                                <div>You can have team of 4 or less.</div>
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
                                        <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Member 5</span>

                                    </div>

                                    <div class="col-md-2">
                                      <input type="text"  name="name5" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                    </div>
                                    <div class="col-md-2">
                                      <input type="text" name="id5" placeholder="techNITi19 ID" style="color:white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                    </div>
                                    <div class="col-md-2">
                                      <input type="email" name="email5" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                    </div>
                                    <div class="col-md-2">
                                      <input type="text" name="contact5" placeholder="Contact No." style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                    </div>
                                    <div class="col-md-2">
                                      <input type="text" name="college5" placeholder="College" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                    </div>
                                </div>

                                <br />
                                <div class="row">
                                    <div class="col-md-2 flex-center">
                                        <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Member6</span>

                                    </div>

                                    <div class="col-md-2">
                                      <input type="text"  name="name6" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                    </div>
                                    <div class="col-md-2">
                                      <input type="text" name="id6" placeholder="techNITi19 ID" style="color:white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                    </div>
                                    <div class="col-md-2">
                                      <input type="email" name="email6" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                    </div>
                                    <div class="col-md-2">
                                      <input type="text" name="contact6" placeholder="Contact No." style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                    </div>
                                    <div class="col-md-2">
                                      <input type="text" name="college6" placeholder="College" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

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
