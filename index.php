<?php
require_once("connect_db_remodeled.php");
$id = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- search static content-->
    <script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>

    <link rel="stylesheet" type="text/css" href="design/styleSheet.css">
    <link rel="manifest" href="./manifest.webmanifest">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script>
        // function openNav() {
        //     document.getElementById("mySidebar").style.width = "250px";
        //     document.getElementById("main").style.marginLeft = "250px";
        // }

        // function closeNav() {
        //     document.getElementById("mySidebar").style.width = "0";
        //     document.getElementById("main").style.marginLeft = "0";
        // }
        function openNav() {

            if (document.getElementById("mySidebar").style.width == "300px" || document.getElementById("mySidebar").style.width == "0px") {
                document.getElementById("overlay").style.display = "block";
                document.getElementById("mySidebar").style.width = "300px";
                document.getElementById("mySidebar").classList.toggle('active');
                // document.getElementById("main1").style.marginLeft = "0";
            } else {
                document.getElementById("mySidebar").style.width = "0px";
                // document.getElementById("main1").style.marginLeft = "200px";
            }
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("mySidebar").style.width = "0";
            // document.getElementById("main1").style.marginLeft = "0";
        }

        //ADd smooth scroll to 
        $(document).ready(function () {

            let loginOpened = false;
            let openAgain = false;

            $("#myForm").hide();
            $("#result_div").hide();
            // Add smooth scrolling to all links in navbar 
            $(".ul li a").on('click', function (event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            // $(function() {
            //     $("input").on("input.highlight", function() {
            //         // Determine specified search term
            //         var searchTerm = $(this).val();
            //         // Highlight search term inside a specific context
            //         $("#mainContent").unmark().mark(searchTerm);
            //     }).trigger("input.highlight").focus();
              //  });
              
            
              $("#openLogin").on('click', function(e) {
                console.log("on click");
                loginOpened = true;
                $("#myForm").show();
                
              });
              $("#mainContent").not("#myForm").click(function(e) {
                console.log("inside maincontent");  
                if(!loginOpened)
                  {
                    console.log("clicked");
                    $("#myForm").hide();
                  }
                  loginOpened = false;
                });
              $("#closeLogin").on('click', function(e) {
                //console.log("on click");
                $("#myForm").hide();
              });
              $("#search_term").on('input', function(e) {
                console.log("on click");
                loginOpened = true;
                $("#result_div").show();
                
              });

              $("#mainContent").not("#result_div").click(function(e) {
                console.log("inside maincontent");  
                if(!loginOpened)
                  {
                    console.log("clicked");
                    $("#result_div").hide();
                  }
                  loginOpened = false;
                });
     //ass slidein animation
                $(window).scroll(function () {
                    $(".slideanim").each(function () {
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
   
                        });
   
       
     
        // // Get the modal
        // var modal = document.getElementById('myForm');

        // // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        // if (event.target == modal) {
        //     $echo (event.target)
        //     modal.style.display = "none";
        // }
        // }
       
   

    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    }
   
    </script>

    <script src="./index.js"></script>

</head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function do_search()
{
 var search_term=$("#search_term").val();
 $.ajax
 ({
  type:'post',
  url:'module_home.php',
  data:{
   search:"search",
   search_term:search_term
  },
  success:function(response) 
  {
   document.getElementById("result_div").innerHTML=response;
  }
 });
 
 return false;
}
</script>
<style>
    .h1Green {
        color: white;
        border: 5px solid #33c733;
        background-color: #33c733;
    }

    .h1purple {
        color: white;
        border: 5px solid #7b45c1;
        background-color: #7b45c1;
    }

    .h1orange {
        color: white;
        border: 5px solid #d25134;
        background-color: #d25134;
    }

    .h1blue {
        color: white;
        border: 5px solid #5391de;
        background-color: #5391de;
    }

    .h1red {
        color: white;
        border: 5px solid #8c2323;
        background-color: #8c2323;
    }

    .h1lightBlue {
        color: white;
        border: 5px solid #61c7de;
        background-color: #61c7de;
    }

    .h1pink {
        color: white;
        border: 5px solid #d021ca;
        background-color: #d021ca;
    }

    .h1navyBlue {
        color: white;
        border: 5px solid #13086b;
        background-color: #13086b;
    }

    mark {
        background: orange;
        color: black;
    }

        /* Media Queries: Tablet Landscape */
        @media screen and (max-width: 1060px) {
        #primary { width:67%; }
        #secondary { width:30%; margin-left:3%;}  
    }

    /* Media Queries: Tabled Portrait */
    @media screen and (max-width: 768px) {
        #primary { width:100%; }
        #secondary { width:100%; margin:0; border:none; }
    }

    @media (min-width: 640px) { body {font-size:1rem;} } 
    @media (min-width:960px) { body {font-size:1.2rem;} } 
    @media (min-width:1100px) { body {font-size:1.5rem;} } 

    img { max-width: 100%; height: auto; }

    html { font-size:100%; }

    .imgDimensions {
        text-align: center;
    }

    .collapse li a {
        padding-left: 5px;
    }

    .mainList {
        font-size: 24px !important;
    }

    ul.collapse a {
        font-size: 20px !important;
    }

    .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
    color: rgb(22, 113, 197);
    /* color: rgb(22, 113, 197);
} */
}


.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
    

#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 padding-right:180px;
 width:600px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#585858;
}
#wrapper h1 p
{
 font-size:18px;
}
.section {
    font-size: 16px;
    margin-top: 25px;
    text-align: justify;
}

.add-button {
    position: absolute;
    top: 120px;
    right: 2px;
    /* color: cadetblue; */
    color: whitesmoke;
    z-index: 4;
    border-radius: 17px;
    margin: 10px;
    background-color: #121315;
    border-color: #f5f5f5;
}

#search_box input[type="text"]
{
 /* border: 1px solid grey; */
 border-radius: 12px;
 /* height: 40px;
 width: 480px; */
 /* margin-left : 10px; */
 /* padding: 2px 23px 12px 30px; */
 outline: 0;
 background-color: #f5f5f5;
 position: fixed;
}
#search_box input[type="submit"]
{
 width:120px;
 height:40px;
 background-color:#585858;
 color:white;
 border:none;
 position: fixed;
}
    #result_div
{
 width:100%; 
 height:auto;
 max-height : 400px;
 margin-top: 100px;
 /* margin-left: 10px; */
 font-size:12px;
 background-color:white;
 color:white;
 border:none;
 overflow: scroll;
 position: fixed;
}
#result_div li
{ 
 margin-bottom:20px;
 list-style-type:none;
}
#result_div li a
{
 text-decoration:none;
 display:block;
 text-align:left;
}
#result_div li a .title
{
 font-weight:bold;
 font-size:18px;
 color:#5882FA;
}
#result_div li a .desc
{
 color:#6E6E6E;
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

/* Add some margins for each label */
.form-inline label {
  margin: 5px 10px 5px 0;
}

/* Style the input fields */
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

/* Style the submit button */
.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
}

.form-inline button:hover {
  background-color: royalblue;
}

/* Add responsiveness - display the form controls vertically instead of horizontally on screens that are less than 800px wide */
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}

.open-button {
  font-size: 20px;
  color: white;
  top: 5px;
}


/* The popup form - hidden by default */

.form-popup {
    position: fixed;
    padding: 10px;
    z-index: 500;
    right: 12px;
    color: black;
    background: white;
    margin-top: 100px;
    border: 1px solid;
    box-shadow: 1px 1px 14px rgb(22, 113, 197);
    border-radius: 8px;
}


/* Add styles to the form container */

.form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
    /* color: rgb(22, 113, 197); */
    /* color: rgb(22, 113, 197);
} */
}


/* Full-width input fields */

.form-container input[type=text],
.form-container input[type=password] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 22px 0;
    border: none;
    /* background: #f1f1f1;
    color: rgb(40, 137, 228); */
}


/* When the inputs get focus, do something */

.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}


/* Set a style for the submit/login button */

.form-container .btn {
    background-color: #04aa49;
    color: white;
    border: none;
    cursor: pointer;
    width: fit-content;
    opacity: 0.8;
}


/* Add a red background color to the cancel button */

.form-container .cancel {
    background-color: red;
    width: fit-content;
}


/* Add some hover effects to buttons */

.form-container .btn:hover,
.open-button:hover {
    opacity: 1;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.fixednav {
    width: 100vw;
    background: black;
    position: fixed;
    top: 100;
    z-index: 5;
}

.topnav {
  overflow: hidden;
  background-color: #fffff;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}



</style>

<body>
    

    <div class="searchContentOfCHKD">
        <div id="mySidebar" class="sidebar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
            <div id="introduction">
                <a href="#intro" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i> Introduction </a>
                <ul class="collapse " id="intro" style="margin-left: 20px;">
                    <li id="1" class="link">
                        <a href="#dedication" class='tab ' id='Topic1.1'>Dedication</a>
                    </li>

                    <li id="2" class="link">
                        <a href="#IntroTraumaProgram" class='tab ' id='Topic1.2'>Introduction and Program Mission</a>
                    </li>
                    <li id="3" class="link">
                        <a href="#traumaOrgChart" class='tab' id='Topic1.3'>Trauma Organizational Chart</a>
                    </li>
                    <li id="4" class="link">
                        <a href="#Consultant" class='tab' id='Topic1.4'>Consultant Contact Information</a>
                    </li>
                    <li id="5" class="link">
                        <a href="#surgeryTraumaEmergency" class='tab' id='Topic1.5'>Surgery/Trauma/Emergency Medical
                            Phone Numbers</a>
                    </li>
                </ul>
            </div>
            <div id="#traumaActivations">
                <a href="#trauma" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i> Trauma Activations
                </a>
                <ul class="collapse " id="trauma">
                    <li id="t2.1" class="link">
                        <a href="#topic2_1" class='tab ' id='Topic 2.1'>CHKD Trauma Triage Criteria</a>
                    </li>
                    <li id="t2.2" class="link">
                        <a href="#topic2_1" class='tab ' id='Topic 2.2'>Trauma Admission Protocol</a>
                    </li>
                    <li id="t2.3" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.3'>Patient Access Technician - ED</a>
                    </li>
                    <li id="t2.4" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.4'>CHKD Transfer Center - Kid Comm</a>
                    </li>
                    <li id="t2.5" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.5'>Activation of the Trauma System from Scene by
                            EMS</a>
                    </li>
                    <li id="t2.14" class="link">
                        <a href="#topic2_14" class='tab' id='Topic 2.14'>Special Consideration - Transporting Adult and Pediatric Trauma Patients</a>
                    </li>
                    <li id="t2.6" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.6'>Activation of the Trauma System Walk-In
                            Patients</a>
                    </li>
                    <li id="t2.7" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.7'>Trauma Team Activation Pathway</a>
                    </li>
                    <li id="t2.8" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.8'>Trauma/Medical Resuscitation Pre-Arrival
                            Checklist</a>
                    </li>
                    <li id="t2.9" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.9'>Pre-Arrival/Debrief Documentation</a>
                    </li>
                    <li id="t2.10" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.10'>Trauma Team Positioning</a>
                    </li>
                    <li id="t2.11" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.11'>Trauma Roles</a>
                    </li>
                    <li id="t2.12" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.12'>Pediatric Surgery Response</a>
                    </li>
                    <li id="t2.13" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.13'>Trauma Alert Response</a>
                    </li>

                </ul>
            </div>
            <div id="#primarySurvey">
                <a href="#primarySurveyAlgo" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i> Primary Survey Algorithms </a>
                <ul class="collapse " id="primarySurveyAlgo">
                    <li id="t3.9" class="link">
                        <a href="#topic3_9" class='tab ' id='Topic3.9'>Intubation Maintenance for Trauma and Codes in the
                        Emergency Department</a>
                    </li>
                    <li id="t3.1" class="link">
                        <a href="#topic3_1" class='tab ' id='Topic3.1'>Rapid Sequence Induction</a>
                    </li>
                    <li id="t3.8" class="link">
                        <a href="#topic3_8" class='tab ' id='Topic3.1'>Trauma Airway Managment</a>
                    </li>
                    <li id="3.2" class="link">
                        <a href="#topic3_2" class='tab ' id='Topic3.2'>Difficult Airway Management</a>
                    </li>
                    <li id="3.3" class="link">
                        <a href="#topic3_3" class='tab' id='Topic3.3'>Emergency Department Trauma Guideline for IV
                            Access</a>
                    </li>
                    <li id="3.4" class="link">
                        <a href="#topic3_4" class='tab' id='Topic3.4'>Broselow Tape</a>
                    </li>
                    <li id="3.5" class="link">
                        <a href="#topic3_5" class='tab' id='Topic3.5'>Resuscitative/ED Thoracotomy (EDT)</a>
                    </li>
                    <li id="3.6" class="link">
                        <a href="#topic3_6" class='tab' id='Topic3.6'>Hypothermia</a>
                    </li>
                </ul>
            </div>
            <div id="#nueroTrauma">
                <a href="#neuro" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Neurological/Spine
                    Trauma </a>
                <ul class="collapse " id="neuro">
                    <li id="t4.1" class="link">
                        <a href="#topic4_1" class='tab ' id='Topic4.1'>Pediatric and Adult Glasgow Coma Score (GCS)</a>
                    </li>
                    <li id="4.2" class="link">
                        <a href="#topic4_3" class='tab ' id='Topic4.2'>Traumatic Brain Injury</a>
                    </li>
                    <li id="4.3" class="link">
                        <a href="#topic4_3" class='tab' id='Topic4.3'>Post Stabilization Algorithm for Pediatric
                            Traumatic Brain
                            Injury</a>
                    </li>
                    <li id="4.4" class="link">
                        <a href="#topic4_4" class='tab' id='Topic4.4'>Isolated Mild Head Injury</a>
                    </li>
                    <li id="4.5" class="link">
                        <a href="#topic4_5" class='tab' id='Topic4.4'>Mild Head Injury with Post-Traumatic Seizures</a>
                    </li>
                    <li id="4.6" class="link">
                        <a href="#topic4_6" class='tab' id='Topic4.4'>Headache/Persistent Vomiting After Mild Closed
                            Head
                            Trauma</a>
                    </li>
                    <li id="4.7" class="link">
                        <a href="#topic4_7" class='tab' id='Topic4.4'>Cervical Spine Injury & Clearance</a>
                    </li>
                    <li id="4.8" class="link">
                        <a href="#topic4_8" class='tab' id='Topic4.4'>Thoracic/Lumbar/Sacral Spine Injury &
                            Clearance</a>
                    </li>
                    <li id="4.9" class="link">
                        <a href="#topic4_9" class='tab' id='Topic4.4'>Guidelines for Inpatient Care of Child with Spinal
                            Cord
                            Injury</a>
                    </li>
                    <li id="4.10" class="link">
                        <a href="#topic4_10" class='tab' id='Topic4.4'>Cervical Collar Sizing Guide</a>
                    </li>
                    <li id="4.11" class="link">
                        <a href="#topic4_11" class='tab' id='Topic4.4'>Standard Neurological Classification of Spinal
                            Cord
                            Injury</a>
                    </li>

                </ul>
            </div>
            <div id="#penetratingTrauma">
                <a href="#penetrating" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i> Penetrating
                    Trauma </a>
                <ul class="collapse " id="penetrating">
                    <li id="t5.1" class="link">
                        <a href="#topic5_1" class='tab ' id='Topic5.1'>Penetrating Cardiac Injury</a>
                    </li>
                    <li id="5.2" class="link">
                        <a href="#topic5_2" class='tab ' id='Topic5.2'>Penetrating Chest Trauma</a>
                    </li>
                    <li id="5.3" class="link">
                        <a href="#topic5_3" class='tab' id='Topic5.3'>Penetrating Neck Trauma</a>
                    </li>
                    <li id="5.4" class="link">
                        <a href="#topic5_4" class='tab' id='Topic5.4'>Transmediastinal Gunshot Wounds</a>
                    </li>
                    <li id="5.5" class="link">
                        <a href="#topic5_5" class='tab' id='Topic5.5'>Truncal Stab Wounds</a>
                    </li>
                    <li id="5.6" class="link">
                        <a href="#topic5_6" class='tab' id='Topic5.6'>Abdominal Stab Wounds</a>
                    </li>
                </ul>
            </div>
            <div id="#bluntTrauma">
                <a href="#blunt" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Blunt Trauma </a>
                <ul class="collapse " id="blunt">
                    <li id="t6.1" class="link">
                        <a href="#topic6_1" class='tab ' id='Topic6.1'>Blunt Cerebrovascular Injuries (BCVI)</a>
                    </li>
                    <li id="6.2" class="link">
                        <a href="#topic6_2" class='tab ' id='Topic6.2'>Blunt Aortic Injuries (BAI)</a>
                    </li>
                    <li id="6.3" class="link">
                        <a href="#topic6_3" class='tab' id='Topic6.3'>Blunt Cardiac Injuries (BCI)</a>
                    </li>
                    <li id="6.4" class="link">
                        <a href="#topic6_4" class='tab' id='Topic6.4'>Blunt Chest Trauma</a>
                    </li>
                    <li id="6.5" class="link">
                        <a href="#topic6_5" class='tab' id='Topic6.5'>Blunt Liver & Splenic Injury</a>
                    </li>
                    <li id="6.6" class="link">
                        <a href="#topic6_6" class='tab' id='Topic6.6'>Pancreatic Injury</a>
                    </li>
                    <li id="6.7" class="link">
                        <a href="#topic6_7" class='tab' id='Topic6.6'>Renal Trauma</a>
                    </li>
                    <li id="6.8" class="link">
                        <a href="#topic6_8" class='tab' id='Topic6.6'>Blunt Bowel & Mesenteric Injury</a>
                    </li>
                    <li id="6.9" class="link">
                        <a href="#topic6_9" class='tab' id='Topic6.6'>Blunt Abdominal Injury (Level 1 and 2)</a>
                    </li>
                    <li id="6.10" class="link">
                        <a href="#topic6_10" class='tab' id='Topic6.6'>Rectal Injury</a>
                    </li>
                    <li id="6.11" class="link">
                        <a href="#topic6_11" class='tab' id='Topic6.6'>Unstable Pelvic Fractures</a>
                    </li>
                </ul>
            </div>
            <div id="#otherIssues">
                <a href="#other" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Other Issues </a>
                <ul class="collapse " id="other">
                    <li id="t7.1" class="link">
                        <a href="#topic7_1" class='tab' id='Topic7.1'>Pediatric Peripheral Vascular Trauma</a>
                    </li>
                    <li id="7.2" class="link">
                        <a href="#topic7_2" class='tab' id='Topic7.2'>Extremity Compartment Syndrome</a>
                    </li>
                    <li id="7.3" class="link">
                        <a href="#topic7_3" class='tab' id='Topic7.3'>Mangled Extremity</a>
                    </li>
                    <li id="7.4" class="link">
                        <a href="#topic7_4" class='tab' id='Topic7.4'>Pediatric Trauma Score</a>
                    </li>
                    <!-- <li id="7.5" class="link">
                        <a href="#topic7_5" class='tab' id='Topic7.5'>Injury Severity Scoring</a>
                    </li> -->
                    <li id="7.6" class="link">
                        <a href="#topic7_6" class='tab' id='Topic7.6'>Organ Grading Scale</a>
                    </li>
                </ul>
            </div>
            <div id="#burnssection">
                <a href="#burns" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Burns </a>
                <ul class="collapse " id="burns">
                    <li id="t8.1" class="link">
                        <a href="#topic8_1" class='tab ' id='Topic8.1'>Burn Evaluation</a>
                    </li>
                    <li id="8.2" class="link">
                        <a href="#topic8_2" class='tab ' id='Topic8.2'>Transfer to Shriners</a>
                    </li>
                    <li id="8.3" class="link">
                        <a href="#topic8_3" class='tab' id='Topic8.3'>Electrical Injury</a>
                    </li>
                    <li id="8.4" class="link">
                        <a href="#topic8_4" class='tab' id='Topic8.4'>Inhalation Injury</a>
                    </li>
                    <li id="8.5" class="link">
                        <a href="#topic8_5" class='tab' id='Topic8.5'>Burn Care Power Plan</a>
                    </li>
                    <!-- <li id="8.6" class="link">
                        <a href="#topic8_6" class='tab' id='Topic8.6'>Acute Burn Wound Care</a>
                    </li> -->
                </ul>
            </div>
            <div id="#specialissues">
                <a href="#splissues" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Special Issues
                </a>
                <ul class="collapse " id="splissues">
                    <li id="t10.1" class="link">
                        <a href="#topic10_1" class='tab ' id='Topic10.1'>PICU Care & Collaboration</a>
                    </li>
                    <li id="10.2" class="link">
                        <a href="#topic10_2" class='tab ' id='Topic10.2'>Acute Care Phase</a>
                    </li>
                    <li id="10.3" class="link">
                        <a href="#topic10_3" class='tab' id='Topic10.3'>I-Stat Use Critical Trauma (IO)</a>
                    </li>
                    <li id="10.4" class="link">
                        <a href="#topic10_4" class='tab' id='Topic10.4'>CT Contrast Infusion via Intraosseous Line</a>
                    </li>
                    <li id="10.5" class="link">
                        <a href="#topic10_5" class='tab' id='Topic10.5'>Protocol for Inpatient Radiology Procedures Under Anesthesia</a>
                    </li>
                    <li id="10.6" class="link">
                        <a href="#topic10_6" class='tab' id='Topic10.6'>SNGH Registration Process for CHKD Patients Going to SNGH for Radiology</a>
                    </li>
                    <!-- <li id="10.7" class="link">
                        <a href="#topic10_7" class='tab' id='Topic10.6'>Guide to Arranging Emergent Angioembolization for CHKD Patients at SNGH</a>
                    </li> -->
                    <li id="10.7" class="link">
                        <a href="#topic10_7" class='tab' id='Topic10.7'>Guide to Arranging Emergent Angioembolization for CHKD Patients at SNGH</a>
                    </li>
                    <li id="10.8" class="link">
                        <a href="#topic10_8" class='tab' id='Topic10.8'>Trauma Transfers from SNGH Protocol</a>
                    </li>
                    <li id="10.9" class="link">
                        <a href="#topic10_9" class='tab' id='Topic10.9'>Pregnant Trauma Patient Guidelines</a>
                    </li>
                    <li id="10.10" class="link">
                        <a href="#topic10_10" class='tab' id='Topic10.10'>Helmet Removal Process</a>
                    </li>
                    <li id="10.11" class="link">
                        <a href="#topic10_11" class='tab' id='Topic10.11'>DVT Prophylaxis</a>
                    </li>
                    <li id="10.12" class="link">
                        <a href="#topic10_12" class='tab' id='Topic10.12'>Massive Transfusion Protocol</a>
                    </li>
                    <li id="10.13" class="link">
                        <a href="#topic10_13" class='tab' id='Topic10.13'>Family Presence in the Trauma Bay</a>
                    </li>
                    <li id="10.14" class="link">
                        <a href="#topic10_14" class='tab' id='Topic10.14'>Pain Management and Palliative Care</a>
                    </li>
                    <li id="10.15" class="link">
                        <a href="#topic10_15" class='tab' id='Topic10.15'>Social Work Referrals</a>
                    </li>
                    <li id="10.16" class="link">
                        <a href="#topic10_16" class='tab' id='Topic10.16'>Child Abuse and Neglect</a>
                    </li>
                    <li id="10.17" class="link">
                        <a href="#topic10_17" class='tab' id='Topic10.17'>Commercial Sexual Exploitation of Children
</a>
                    </li>
                    <li id="10.18" class="link">
                        <a href="#topic10_18" class='tab' id='Topic10.18'>Pediatric Rehab Referrals</a>
                    </li>
                    <li id="10.19" class="link">
                        <a href="#topic10_19" class='tab' id='Topic10.19'>Chain of Evidence Procedure</a>
                    </li>
                    <li id="10.20" class="link">
                        <a href="#topic10_20" class='tab' id='Topic10.20'>Disaster Management Plan</a>
                    </li>
                    <li id="10.21" class="link">
                        <a href="#topic10_21" class='tab' id='Topic10.21'>Facility Lock Down Procedure</a>
                    </li>
                </ul>
            </div>
        </div>
         

        <div id="mainContent" class="content">
            <div id="overlay" class = "container-fluid" onclick="closeNav()">
            
                
            </div>
            
            
            <!-- nav bar -->
            <!-- <div class="container-fluid fixedNav">
                
                <button class="container-fluid openbtn" onclick="openNav()"><i class="fa fa-bars"></i>
                </button>
                
                     
            </div> -->

            <div class="topnav fixedNav">
                <button class="container-fluid openbtn" onclick="openNav()"><i class="fa fa-bars"></i>
                
            </button>
    

                <div class="search-container">
                    <form method="post" action="module_home" onsubmit="return do_search();">
                        <input type="text" placeholder="Search.." name="search" id="search_term"  onkeyup="do_search();">
                    <!-- <button type="submit">Submit</button> -->
                    </form>
                </div>
            </div> 

            <div class="container-fluid search-container" id="result_div">
            </div>
           
            <div class="container-fluid" style="width: auto;
            height: 100vh;
            background-image: url(./images/Cover.png);
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #2f6cbf;">
            
                <div class="container-fluid">
                <br>
                <br>
                    <button class="container-fluid add-button"> Add to Desktop</button>
                    
                </div>
                <br>
                <br>
                
                
                
                    
                    
                    
              
               
            </div>
            
        

        
    

        <br>
        <br>

       

            <div class="container-fluid section" id="dedication">

            
                
                
                    <h2>A Dedication to Michele Lombardo</h2>
                    <p>Michele was special. Once you met her, you couldn't imagine a time without her. She had that
                        unique ability to make you feel better about yourself. You liked who you were when you were with
                        her. You missed her when she wasn't around. </p>
                    <p>
                        Her husband Joe posted an entry on face book for her birthday, October 23. When I read it I
                        didn't think that I could do better at describing how Michele affected everyone who came in
                        contact with her and how she approached life. With his permission I am going to share some of
                        what was posted. </p>
                    <p> "When confronted with metastatic breast cancer she persevered, choosing to go out on her terms
                        and leaving it all on the field. Rather than be weighed down by sadness, anger, or self-pity,
                        her thoughts and actions remained selfless and positive. She was far less concerned about
                        herself than of how her illness and premature passing would impact everyone else." </p>
                    <p> "Not one to brag Michele rarely 'talked the talk' although she most definitely 'walked the walk'
                        in every facet of her life. The 'Four Foot Surgeon' raised the bar higher than many of us can
                        reach, but that doesn't mean we should not aspire to do the same. Her compassion, love,
                        ingenuity, strength, humility and humor will forever be a part of each of us." </p>
                    <p>"Akin to how she met everyone with a smile and how she always demurred any deference by refusing
                        to drop the 'doctor card' (or for that matter, the 'cancer card') to garner any sort of
                        accommodation, I challenge us all to live by Michele's ideals and example."
                        Joe went on to implore us to not mourn for the loss of Michele but to celebrate her life. Enjoy
                        music, laughter, food and good friends. For those of us who know Michele well, she had eclectic
                        taste in music, an impeccable sense of humor, gourmet sensibilities, and anybody who knew her
                        could call her friend. </p>
                    <p>
                        "Please, on October 23 and every day, make it count. Be sure to lend a hand to someone in need,
                        give to a favorite charity, share your favorite Michele-related story and celebrate who she was,
                        all that she did, and all that she continues to represent."
                        To my very good friend Michele - I miss you every day and without your help this manual would
                        not exist.</p>
                    <p>
                        ~ Dr. Ann Kuhn
                    </p>


                </div>
                <div class="container-fluid section" id="IntroTraumaProgram">
                    <h2>Introduction and Trauma Program Mission</h2>
                    <p>
                        The CHKD trauma program serves the children of Hampton
                        Roads, Virginia's Eastern Shore and Northeastern North Carolina.
                        As a specialized pediatric medical center, CHKD provides a multi-
                        disciplinary approach to care for injured children for all ranges of
                        acuity and injuries. The commitment to provide care to traumatically
                        injured children and their families extends from the frontline
                        providers to the board of directors. CHKD is currently seeking
                        trauma center verification from the Virginia Department of Health
                        which will allow for pediatric specialists from ED, surgery, ICU and all
                        subspecialties to care for patients directly from the field. The trauma
                        service is staffed by board-certified pediatric surgeons and their
                        support team of physician assistants, nurse practitioners, residents,
                        interns and office staff.
                    </p>
                    <p>
                        The trauma program is led by a board-certified pediatric surgeon who
                        completed a fellowship in trauma. The program is co-managed by
                        a pediatric emergency physician and employs a full-time RN trauma
                        program manager, RN trauma registrar and RN clinical practice
                        educator specialist.
                    </p>
                    <p> The program director chairs the hospital multi-disciplinary trauma PI
                        committee which includes representatives from all the major surgical
                        specialties and services including administration and nursing. The
                        trauma PI committee provides oversight for systems, patient care,
                        quality, policies and procedures to ensure the optimum care of any
                        injured patient is achieved.
                    </p>
                    <p>
                        Trauma is a surgical disease that requires the need for multiple
                        specialty services which CHKD is uniquely qualified to provide. The
                        purpose of this manual is to document established guidelines that
                        ensure an organized and systematic approach to care.</p>
                    <br><br><br>
                    <div class="alignCenter">
                        <h3> Children's Hospital of The King's Daughters</h3>
                        <h4>601 Children's Lane, Norfolk, VA 23507</h4>
                        <h4>PHONE: 757-668-7703 | FAX: 757-668-8860</h4>

                    </div>
                    <hr>
                    <div class="alignCenter">
                        <p style="color:#2f6cbf">CHKD.org/Trauma</p>
                    </div>

                </div>
                <div class="container-fluid section" id="traumaOrgChart">
                    <h2>Trauma Organizational Chart</h2>
                    <div style="text-align: center;"><img src="./images/orgchart_1.png" alt="Trauma Org Chart" width="800"
                            height="800"></div>
                </div>
                <div class="container-fluid section" id="Consultant">
                    <p>
                    <h2>Consultant Contact Information</h2>
                    <p> For most CHKD specialists, the consultant can be reached through
                        Doctors Direct at extension 8-9999. The exceptions are noted below.
                        In the case of an exception, please see the following page in this
                        trauma manual for contact information for these physicians. This page
                        is for quick reference only.</p>
                    <ul>
                        <li>
                            <p> Child Abuse Team:</p>
                            <p>See Protocol</p>
                        </li>
                        <li>
                            <p>Interventional Radiology at SNGH:</p>
                            <p>See Protocol</p>
                        </li>
                        <li>
                            <p>Rehabilitation Services:</p>
                            <p>See Protocol</p>
                        </li>
                        <li>
                            Obstetrics at SNGH:
                            See Protocol
                        </li>
                        <li>
                            Oral-Maxillofacial Surgery at SNGH:
                            Doctor’s Line 388-4000
                        </li>
                        <li>
                            Orthopedics at SNGH:
                            Doctor’s Line 388-4000
                        </li>
                        <li>
                            Vascular at SNGH:
                            Doctor’s Line 388-4000
                        </li>
                        <li>
                            Facial Fractures - Plastic Surgery
                        </li>
                        <li>Mandibular Fractures/Dental Surgeries - OMFS
                        </li>
                    </ul>

                    </p>
                </div>
                <div class="container-fluid section" id="surgeryTraumaEmergency">
                    <p>
                    <h2>Phone Numbers - Surgery/Trauma/Emergency Medicine</h2>
                    <!-- <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Surgery</th>
                                    <th scope="col">Pager #</th>
                                    <th scope="col">Office #</th>
                                    <th scope="col">Simon #</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ann Kuhn, MD</td>
                                    <td>882-6904</td>
                                    <td>8-7558</td>
                                    <td>1697</td>
                                </tr>
                                <tr>
                                    <td>Frazier W. Frantz, MD</td>
                                    <td> 475-0600</td>
                                    <td>8-9856</td>
                                    <td>1123</td>
                                </tr>
                                <tr>
                                    <td>Michael Goretsky, MD</td>
                                    <td>475-3056</td>
                                    <td>8-9363</td>
                                    <td>1100</td>
                                </tr>
                                <tr>
                                    <td>Stephanie Kapfer, MD (weekend)</td>
                                    <td> 475-3098</td>
                                    <td></td>
                                    <td>6208</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <div style="text-align: center;"><img src="./images/introduction_1.png" alt="Trauma Org Chart" width="800"
                        height="800"></div>
                    <div style="text-align: center;"><img src="./images/introduction_2.jpg" alt="Trauma Org Chart" width="800"
                        height="800"></div>
                    </p>
                </div>
                <div class="container-fluid section" id="traumaActivations">
                    <p>
                    <h1 class="h1Green">Trauma Activations</h2>
                        </p>
                </div>
                <div class="container-fluid section" id="topic2_1">
                    <p>
                    <h2>CHKD Trauma Triage Criteria</h2>
                    <!-- <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Level I</th>
                                <th scope="col">Level II</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="page" title="Page 15">
                                        <div class="section">
                                            <div class="layoutArea">
                                                <div class="column">
                                                    <p>&nbsp;</p>
                                                    <div class="page" title="Page 15">
                                                        <div class="section">
                                                            <div class="layoutArea">
                                                                <div class="column">
                                                                    <p style="text-align: center;"><strong>Vitals and
                                                                            consciousness</strong></p>
                                                                    <ul>
                                                                        <li>
                                                                            GCS&le;8
                                                                        </li>
                                                                        <li>
                                                                            SBP&lt;90
                                                                        </li>
                                                                        <li>
                                                                            Signs of poor perfusion, VS outside age
                                                                            specific guidelines
                                                                        </li>
                                                                        <li>
                                                                            <p>Intubated / need emergent airway</p>
                                                                            <p style="text-align: center;">
                                                                                <strong>Anatomy of injury</strong></p>
                                                                        </li>
                                                                        <li>
                                                                            All penetrating injuries to head, neck,
                                                                            torso and extremities proximal to elbow
                                                                            and knee
                                                                        </li>
                                                                        <li>
                                                                            <p>Flail Chest</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>&ge;2 proximal long bone fractures
                                                                                (femur, humerus)</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Crushed, degloved or mangled extremity
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Amputation proximal to wrist and ankle
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Paralysis - spinal cord injury with
                                                                                neurologic deficit</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Burns &ge; 25% TBSA</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="page" title="Page 15">
                                        <div class="section">
                                            <div class="layoutArea">
                                                <div class="column">
                                                    <div class="page" title="Page 15">
                                                        <div class="section">
                                                            <div class="layoutArea">
                                                                <div class="column">
                                                                    <p style="text-align: center;"><strong>Vitals and
                                                                            consciousness</strong></p>
                                                                    <ul>
                                                                        <li>
                                                                            <p>GCS13or14</p>
                                                                            <p style="text-align: center;">
                                                                                <strong>Falls</strong></p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Children &gt; 10 ft. or 2-3 x height of
                                                                                child</p>
                                                                            <p style="text-align: center;">
                                                                                <strong>High-risk auto crash</strong>
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Intrusion: &gt; 12 in. occupant site;
                                                                                &gt; 18 in. in any site</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Rollover</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Ejection (partial or complete) from
                                                                                automobile</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Death in same passenger compartment</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Vehicle automatic crash notification data
                                                                                consistent</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Auto vs. pedestrian / bicyclist thrown,
                                                                                run over<br /> or with significant
                                                                                (&gt;10 mph) impact</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Motorcycle crash &gt; 20 mph with high
                                                                                risk injury</p>
                                                                            <p style="text-align: center;">
                                                                                <strong>Others</strong></p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Burns &gt; 10%, &lt;25% TBSA</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Thermal injury with inhalation</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>GSW extremity - distal</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Pelvic fractures</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Open or depressed skull fracture</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>


                        </tbody>
                    </table> -->
                    <div style="text-align: center;"><img src="./images/activations_1.jpg" alt="Trauma Org Chart" width="800"
                            height="800"></div>
                    </p>
                </div>
                <div class="container-fluid section" id="topic2_2">
                    <p>
                    <h2>Trauma Admission Protocol</h2>

                    </p>
                    <div class="page" title="Page 16">
                        <div class="section">
                            <div class="layoutArea">
                                <div class="column">
                                    <p>In order to facilitate patient care and to eliminate potential misunderstandings
                                        between various services caring for trauma patients, the Trauma PI Committee has
                                        established the following guideline regarding admission to and transfer of
                                        trauma patients between services:</p>
                                    <ul>
                                        <li>
                                            <p>Patients with a mechanism for potential multiple system injuries should
                                                be evaluated by the Trauma Service.</p>
                                        </li>
                                        <li>
                                            <p>Patients with multiple system injuries, hemodynamic instability, or
                                                spinal cord injuries will be admitted to the trauma service.</p>
                                        </li>
                                        <li>
                                            <p>Patients with isolated orthopedic or neurosurgical injuries requiring
                                                PICU care will be admitted to the Trauma Service.</p>
                                        </li>
                                        <li>
                                            <p>Admission to the Trauma Service is appropriate if an ongoing evaluation
                                                for occult injuries is in progress.</p>
                                        </li>
                                        <li>
                                            <p>Patients with single system injuries, without a mechanism for multiple
                                                system injury shall be directly admitted to the appropriate service.</p>
                                        </li>
                                        <li>
                                            <p>Pre-existing medical conditions do not necessarily constitute reasons to
                                                remain on the Trauma Service with a single system injury.</p>
                                        </li>
                                        <li>
                                            <p>Once suspected occult injuries have been ruled out and the patient with
                                                single system injuries is stable, the patient may be transferred from
                                                the Trauma Service to the<br /> appropriate service.</p>
                                        </li>
                                        <li>
                                            <p>Trauma Service will complete a tertiary survey for all trauma patients
                                                within:</p>
                                            <p>- 24 hours once admitted to the general care units<br /> - 72 hours once
                                                admitted to the PICU and repeat when sedation is weaned</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid section" id="topic2_3">
                    <p>
                    <h2>Trauma Registration Protocol- ED</h2>
                    </p>
                    <div class="page" title="Page 17">
                        <div class="section">
                            <div class="section">
                                <div class="layoutArea">
                                    <div class="column">
                                        <ol>
                                            <li>
                                                <p>The CHKD communication center will activate the trauma team via the
                                                    hospital paging system.</p>
                                            </li>
                                            <li>
                                                <p>Walk-in patients or trauma patients whose status changes in the ED,
                                                    the ED physician will instruct the PAT to send a level 1 or level 2
                                                    trauma alert.</p>
                                            </li>
                                            <li>
                                                <p>The PAT will call the operator and ask them to place an overhead
                                                    announcement AND a level 1 or level 2 trauma team page.</p>
                                            </li>
                                            <li>
                                                <p>PAT will remove the trauma chart from the red folder (located inside
                                                    the trauma binder) or drawer at PAT desk.</p>
                                            </li>
                                            <li>
                                                <p>If the patient has an existing MRN in the CHKD system, quick register
                                                    the patient by using the legal name listed on the transfer
                                                    documents. The referring facility can fax any demographic
                                                    information to the ED fax machine.</p>
                                            </li>
                                            <li>
                                                <p>Any patient whose identity cannot be verified within 10 minutes of
                                                    estimated patient arrival time will be assigned a trauma number.</p>
                                                <ol style="list-style-type: lower-alpha;">
                                                    <li>
                                                        <p>Remove a trauma number from the trauma binder.</p>
                                                    </li>
                                                    <li>
                                                        <p>Enter the trauma number manually into the MRN field in</p>
                                                        <p>Eclipsys (Example - TPXXXXXX)</p>
                                                    </li>
                                                    <li>
                                                        <p>The complaint is TRAUMA (not mechanism of injury).</p>
                                                    </li>
                                                    <li>
                                                        <p>If PT date of birth is unknown, enter 01/01/1901 in the date
                                                            of birth field.</p>
                                                    </li>
                                                    <li>
                                                        <p>Enter patient gender and age once available</p>
                                                        <p><strong>*Note:</strong> Certain lab results are age/gender
                                                            dependent so enter information ASAP</p>
                                                    </li>
                                                    <li>
                                                        <p>If the patient presents from a referring facility and has a
                                                            trauma number, list the referring facility trauma number in
                                                            the complaint field. This number can be used to identify the
                                                            patient if further information is needed from the referring
                                                            facility (Example - TRAUMA TP 12345).</p>
                                                    </li>
                                                    <li>
                                                        <p>Update all required fields of the trauma log.</p>
                                                    </li>
                                                    <li>
                                                        <p> Once the DOB has
                                                            been verified, update the information in Eclipsys.
                                                            Re-sticker all chart
                                                            documents and armband with the updated information.<br />
                                                        </p>
                                                        <p><strong>*Note:</strong>
                                                            If there are no trauma numbers in the trauma binder use the
                                                            trauma name
                                                            convention TP with the Eclipsys generated MRN.
                                                        </p>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <p>Prepare two white Eclipsys armbands (ED/Inpatient and OR) with blue
                                                    TRAUMA clasps and one blood bank bracelet.</p>
                                                <p><strong>*Note: When using a CHKD trauma number for a patient who
                                                        presents
                                                        from a referring facility, do not remove the referring facility
                                                        bracelet.</strong></p>
                                            </li>
                                            <li>
                                                <p>Hand the armbands to the ED clinical staff to apply to the patient.
                                                </p>
                                            </li>
                                            <li>
                                                <p>Place stickers on the packet. Hand off packet, armbands, stickers,
                                                    and
                                                    blood bank bracelet to the Documentation RN.<br />
                                                    <strong>*Note:</strong> The blood bank bracelet/number should remain
                                                    with the patient to be used on the floor if needed.</p>
                                            </li>
                                            <li>Assist with notification of consultants.</li>
                                            <li>Place patient gender and age into system.
                                                <p>**Patient name change cannot occur within the first 72
                                                    hrs of a trauma patient presenting to the ED. The legal name can be
                                                    placed in
                                                    the other name field upon verification for those&nbsp; &nbsp; &nbsp;
                                                    &nbsp;
                                                    &nbsp; &nbsp; &nbsp;initially deemed &ldquo;unidentified.&rdquo; A
                                                    merge of the
                                                    medical record may occur after 72 hrs.</p>
                                            </li>
                                        </ol>
                                        <p> *Note: Patient name change cannot occur within the first 72 hrs of a trauma patient presenting to the
                                            ED. The legal name can be placed in the other name field upon verification for those initially deemed
                                            “unidentified.” A merge of the medical record may occur after 72 hrs.</p>
                                    </div>
                                </div>
                                <div class="layoutArea">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid section" id="topic2_4">
                    <p>
                    <h2>CHKD Transfer Center - Kid Comm</h2>
                    </p>
                    <div class="page" title="Page 19">
                        <div class="section">
                            <div class="section">
                                <div class="layoutArea">
                                    <div class="column">
                                        <p>The Trauma Alert System is a mechanism by which notification of an incoming
                                            trauma patient activates a series of protocols that ensure hospital-wide
                                            preparedness for the evaluation and care of that patient and his/her family.
                                            All calls from referring hospitals regarding trauma and transport must be
                                            routed through the CHKD Transfer Center Kid Comm (@ 668-8000) which is a
                                            system-wide communication network, staffed 24/7 by a trained communication
                                            specialist.</p>
                                        <p>Operationally, this system has a multi-person conference capability, enabling
                                            an incoming call to be simultaneously received by multiple members of the
                                            trauma team. In addition, the communication specialist commands a trauma
                                            paging system, which allows individual or group calls to members of the
                                            entire Trauma Team. This allows immediate</p>
                                        <p>and interference-free access to key trauma personnel. Electronic data and
                                            audio taped records are made of all communications. Audiotapes are saved for
                                            a period of 30 days. When indicated, trauma calls are reviewed both from the
                                            tape and the electronic dispatch log.</p>
                                        <p><strong>Trauma Transfer Protocol</strong></p>
                                        <p>All trauma transfers from referring hospitals will be accepted by the<br />
                                            ED Attending or Trauma Surgeon. Any subspecialty consultation can occur
                                            after acceptance of the patient. Request to receive burn patients and
                                            patients 15&gt; will be evaluated on a case-by-case basis and, when
                                            appropriate, diverted to an adult trauma center.</p>
                                        <p>The Kid Comm Communication Specialist will phone conference in the CHKD ED
                                            attending and the referring facility MD. For Level 1 trauma patients, the
                                            conference call will also include the trauma Surgeon on call. The Kid Comm
                                            Communication Specialist will remain on the call to record patient
                                            information into FirstNet.</p>
                                    </div>
                                </div>
                                <div class="layoutArea">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                    <div class="page" title="Page 20">
                        <div class="section">
                            <div class="layoutArea">&nbsp;</div>
                            <div class="layoutArea">
                                <div class="column">
                                    <p>The ED Attending will ensure that a trauma alert is initiated for those patients
                                        that fit the Trauma Alert Protocol and will notify the ED Charge RN of the
                                        transfer and current patient status. The following information should be
                                        obtained from the referring facility at the time of initial contact:</p>
                                    <p>1. Patient name<br /> 2. Patient age<br /> 3. Patient weight<br /> 4. Patient
                                        gender<br /> 5. Mechanism of injury<br /> 6. Injuries sustained or suspected 7.
                                        Approximate time of injury</p>
                                    <p>8. Initial vital signs/current vital signs<br /> 9. Method of
                                        immobilization<br /> 10. IV access and fluid status<br /> 11. Administration of
                                        blood or blood products<br /> 12. Medications administered</p>
                                    <p>13. Results of lab/radiology studies<br /> 14. Allergies and significant medical
                                        history<br /> 15. Referring MD name and phone number</p>
                                    <p>The Trauma Surgeon/ED Attending should:</p>
                                    <p>1. Assist the referring physician in establishing safe and appropriate means of
                                        transportation.</p>
                                    <p>2. When medically necessary, request for the CHKD Transport Team or other
                                        appropriate transport mechanism (e.g. Nightingale, other flight program) shall
                                        be made.</p>
                                    <p>3. Provide recommendations for further stabilization prior to and during
                                        transport to include:</p>
                                    <ol>
                                        <li>
                                            <p>Cervical spine control</p>
                                        </li>
                                        <li>
                                            <p>Appropriate airway control</p>
                                        </li>
                                        <li>
                                            <p>Fluid administration</p>
                                        </li>
                                        <li>
                                            <p>Consideration of continuous monitoring of ETCO2</p>
                                        </li>
                                        <li>
                                            <p>Stabilization of fractures or other clinically indicated</p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid section" id="topic2_5">
                    <p>
                    <h2>Activation of the Trauma System from Scene by EMS</h2>
                    </p>
                    <div class="column">
                        <p>All calls for transport of the severely injured child directly from the scene
                            must be made to the CHKD Transfer Center Kid Comm at (757) 668-8000 or via radio
                            communications (HEAR radio system, 800 MHz system). This includes calls from the
                            following sources:</p>
                        <ol>
                            <li>
                                <p>Ground EMS units</p>
                            </li>
                            <li>
                                <p>Helicopter transports</p>
                            </li>
                        </ol>
                        <p>Upon receiving a call for a trauma patient, the Communication Specialist will:
                        </p>
                        <ol>
                            <li>
                                <p>Immediately contact the ED Attending and phone or radio conference the
                                    physician into the call.</p>
                            </li>
                            <li>
                                <p>Obtain and document the following information during the call:</p>
                                <ul>
                                    <li>Call time</li>
                                    <li>EMS unit</li>
                                    <li>Patient gender </li>
                                    <li>Patient age</li>
                                    <li>Chief complaint </li>
                                    <li>Vital signs</li>
                                    <li>Care rendered</li>
                                    <li>ETA</li>
                                </ul>

                            </li>
                            <li>
                                <p>Receive activation level from ED Attending</p>
                            </li>
                            <li>
                                <p>If ED Attending not available, the Communication Specialist will</p>
                                <p>assign the activation level.</p>
                            </li>
                            <li>
                                <p>Activate the Trauma Team via AMCOM with appropriate trauma</p>
                                <p>level (Level 1 or 2).</p>
                            </li>
                            <li>
                                <p>Follow Trauma Team Activation Process Algorithm.</p>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="container-fluid section" id="topic2_14">
                    <p>
                    <h2>Special Consideration: Transporting Adult and PediatricTrauma Patients</h2>
                    </p>
                    <p>SNGH and CHKD Trauma Directors have agreed to the following protocol for situations which involve both adult and pediatric patients who are related, most likely a child/parent relationship</p>
                    <div>
                            <p>In the event a patient arrives to the CHKD emergency department via private vehicle/walk-in, the
                            following process will occur:</p>
                            <ol>
                                <li>
                                    Initial field triage performed by EMS
                                    <ul>
                                        <li> Both adult and child are determined to be trauma patients </li>
                                        <ul>
                                            <li>Transport of adult to SNGH Trauma Center</li>
                                            <li>Transport of child to CHKD Trauma Center</li>
                                            <li>Requires separate transportation/ambulance</li>
                                        </ul>

                                    </ul>
                                    <ul>
                                        <li> Criteria as serious trauma patient, but may have some injuries and requests to remain with their child; </li>
                                        <ul>
                                            <li>Transport child to CHKD Trauma Center</li>
                                            <li>Transport adult, with the child, to CHKD for assessment as any adult who may present to the ED</li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <li> Adult/parent is determined to be trauma patient but child does not meet criteria as serious trauma patient;</li>
                                        <ul>
                                            <li>Transport adult to SNGH Trauma Center.</li>
                                            <li>Transport child, with adult, to SNGH for assessment.</li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <li> Both adult and child are determined to be trauma patients, but neither are serious AND unable or unwilling to be separated. </li>
                                        <ul>
                                            <li>Transport adult and child to either SNGH or CHKD based on which patient has more serious injuries</li>
                                        </ul>
                                    </ul>
                                </li>
                                <li>
                                    Secondary triage at hospital.
                                    <ul>
                                        <li>Adult patient who presents to CHKD and is assessed to be a trauma patient or needing inpatient treatment, will be transferred to SNGH.</li>
                                        <li>Pediatric patient who presents to SNGH and is assessed to be a trauma patient or needing inpatient treatment, will be transferred to CHKD.</li>
                                        <li>In both situations, the transfer centers of each institution will be utilized to facilitate an efficient and expedited transfer from ED to ED.</li>
                                    </ul>
                                </li>
                            </ol>
                    </div>
                </div>
                <div class="container-fluid section" id="topic2_6">
                    <p>
                    <h2>Activation of the Trauma System Walk-In Patients</h2>
                    </p>
                    <div>
                        <p>In the event a patient arrives to the CHKD emergency department via private vehicle/walk-in,
                            the following process will occur:</p>
                        <ol>
                            <li>
                                <p>Patient will be immediately placed in a trauma resuscitation room.</p>
                            </li>
                            <li>
                                <p>The ED Attending and ED Charge RN will be notified.</p>
                            </li>
                            <li>
                                <p>ED Attending assigns the trauma level and notifies Patient Access Tech of patient
                                    arrival.</p>
                            </li>
                            <li>
                                <p>Patient Access Tech will call the hospital operator to place the overhead trauma
                                    announcement and also send a trauma page alert to the trauma team.</p>
                            </li>
                            <li>
                                <p>Patient Access Tech registers the patient utilizing appropriate trauma number
                                    designation.</p>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="container-fluid section" id="topic2_7">
                    <p>
                    <h2>Trauma Team Activation Process
                    </h2>
                    </p>
                    <div class="imgDimensions"><img src="./images/activ_process_1.png" alt="activ_processt" width="800"
                            height="800"></div>
                </div>
                <div class="container-fluid section" id="topic2_8">
                    <p>
                    <h2>Trauma/Medical Resuscitation Pre-Arrival Checklist
                    </h2>
                    </p>
                    <div class="imgDimensions"><img src="./images/prechecklist_1.png" alt="Pre arrival Checklist"
                            width="800" height="800"></div>
                </div>
                <div class="container-fluid section" id="topic2_9">
                    <p>
                    <h2>Pre-Arrival/Debrief Documentation
                    </h2>
                    </p>
                    <div class="imgDimensions"><img src="./images/prearrival_1.png" alt="Pre arrival Checklist"
                            width="800" height="800"></div>
                </div>
                <div class="container-fluid section" id="topic2_10">
                    <p>
                    <h2>CHKD Trauma Team Positioning
                    </h2>
                    </p>
                    <div class="imgDimensions"> <img src="./images/traumaTeam.png" alt="Girl in a jacket" width="800"
                            height="900"></div>
                </div>
                <div class="container-fluid section" id="topic2_11">
                    <p>
                    <h2>Trauma Roles
                    </h2>
                    </p>
                    <div class="imgDimensions"><img src="./images/surgeon_1.png" alt="burns chart" width="1200"
                            height="1400"></div>
                    <div class="imgDimensions"><img src="./images/surgeon_2.png" alt="burns chart" width="1200"
                            height="1400"></div>
                    <div class="imgDimensions"><img src="./images/surgeon_3.png" alt="burns chart" width="1200"
                            height="1400"></div>
                    <div class="imgDimensions"><img src="./images/surgeon_4.png" alt="burns chart" width="1200"
                            height="1400"></div>
                    <div class="imgDimensions"><img src="./images/surgeon_5.png" alt="burns chart" width="1200"
                            height="600"></div>

                </div>
                <div class="container-fluid section" id="topic2_12">
                    <p>
                    <h2>Pediatric Response to Trauma Activations
                    </h2>
                    </p>
                    <div>
                        <div>
                            <p><strong>Pediatric Trauma Surgeon</strong> will respond to the ED within 15 minutes for
                                all Level 1 trauma activations.</p>
                        </div>
                        <div>
                            <p><strong>Senior Surgical Resident/MLP</strong> will respond to the ED within 15 minutes
                                for all Level 1 trauma activations.</p>
                            <ul>
                                <li>
                                    Will badge swipe upon arrival in the trauma bay
                                </li>
                                <li>
                                    Will announce to the documenting RN your name and role
                                    on arrival
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p><strong>Neurosurgery</strong> will respond to the ED within 30 minutes of notification
                                for the following:</p>
                            <ul>
                                <li>Significant penetrating injury to head</li>
                                <li>Acute intracranial hematoma with >4mm midline shift</li>
                                <li>Obvious, severe open cranial injury</li>
                                <li>Comatose patient with unilateral fixed, dilated pupil</li>
                                <li>Patient with traumatic intracranial or spinal injury needing
                                    emergent operative management</li>
                                <li>Will badge swipe upon arrival in the trauma bay</li>
                                <li>Will announce to the documenting RN your name and role
                                    on arrival</li>
                            </ul>
                        </div>
                        <div>
                            <p><strong>Orthopedic Surgery</strong> will respond to the ED within 30 minutes of
                                notification for the following:</p>
                            <ul>
                                <li> Fractured or dislocated extremity without a pulse</li>
                                <li>Any dislocation that could not be reduced</li>
                                <li>Will badge swipe upon arrival in the trauma bay</li>
                                <li>Will announce to the documenting RN your name and role on arrival</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid section" id="topic2_13">
                    <p>
                    <h2>Trauma Alert Response
                    </h2>
                    </p>
                    <div>
                        <h3>Trauma Alert Level 1 Response
                        </h3>
                        <p>
                            All trauma patients arriving by EMS or in transfer who meet the designated physiologic
                            criteria for a Level 1 response will be initiated. Following personnel will be notified via
                            the AMCOM paging system:</p>
                        <ul>
                            <li>Surgical Attending</li>
                            <li>ED Attending</li>
                            <li>Anesthesia</li>
                            <li>Surgical Resident/Nurse Practitioner</li>
                            <li>ED Charge RN</li>
                            <li>Nursing Administrative Supervisor</li>
                            <li>OR Charge RN</li>
                            <li>PICU Attending</li>
                            <li>Diagnostic Radiology and CT</li>
                            <li>Respiratory Therapy</li>
                            <li>Blood Bank</li>
                            <li>Social Work</li>
                            <li>Chaplain</li>
                            <li>Trauma Program Manager</li>
                            <li>PACU Charge RN</li>
                            <li>Pharmacy</li>
                            <li>Security</li>
                            <li>Child Life</li>
                            <li>ED PAT</li>
                            <li>ED Trauma RN</li>
                            <li>ED Trauma Tech</li>
                            <li>Communications Center</li>
                        </ul>
                        <p>Following trauma team members must be in the ED trauma room prior to the patient’s arrival:
                        </p>
                        <li>Surgical Attending (≤ 15 min of patient arrival)</li>
                        <li>ED Attending</li>
                        <li>PICU Attending</li>
                        <li>Anesthesia</li>
                        <li>Surgical Resident/Nurse Practitioner</li>
                        <li>Senior ED Resident</li>
                        <li>Lead RN</li>
                        <li>Med RN</li>
                        <li>Secondary RN</li>
                        <li>Lead ED Tech</li>
                        <li>Secondary ED Tech</li>
                        <li>Respiratory Therapy</li>
                        <li>All other team members are to remain outside the trauma
                            room until needed</li>
                        <h3>Trauma Alert Level 2 Response</h3>
                        <p>For those trauma patients who do not meet the physiologic criteria requiring a Level 1
                            response but may still have significant potential injuries, a Level 2 response will be
                            initiated.</p>
                        <p>Following personnel will be notified via the AMCOM paging system:</p>
                        <ul>
                            <li>Surgical Attending</li>
                            <li>ED Attending</li>
                            <li>Surgical Resident/Nurse Practitioner</li>
                            <li>ED Charge RN</li>
                            <li>ED Charge RN</li>
                            <li>Diagnostic Radiology/CT</li>
                            <li>Respiratory Therapy</li>
                            <li>Social Work</li>
                            <li>Chaplain</li>
                            <li>Trauma Program Manager</li>
                            <li>Security</li>
                            <li>Child Life</li>
                            <li>ED PAT</li>
                            <li>ED Trauma RN</li>
                            <li>ED Trauma Tech</li>
                            <li>Communications Center</li>
                        </ul>
                        <p>Following trauma team members must be in the ED trauma room prior to the patient’s arrival:
                        </p>
                        <ul>
                            <li>
                                ED Attending
                            </li>
                            <li>Surgical Resident/Nurse Practitioner (&le; 15 min of patient arrival)</li>
                            <li>Senior ED Resident</li>
                            <li>Lead RN</li>
                            <li>Secondary RN</li>
                            <li>Lead ED Tech</li>
                            <li>Secondary ED Tech</li>
                            <li>Respiratory Therapy</li>
                            <li>All other team members are to remain outside the trauma
                                room until needed</li>

                        </ul>
                        <p>
                            * Level 2 trauma will be managed by the ED Attending and will not generally require the
                            presence of the Trauma Surgeon unless specifically requested by the ED Attending.</p>
                    </div>
                </div>
                <div class="container-fluid section" id="primarySurveyAlgo">
                    <p>
                    <h1 class="h1orange">Primary Survey Algorithms</h2>
                        </p>
                </div>
              
                <div class="container-fluid section" id="topic3_9">
                    <p>
                    <h2>Intubation Maintenance for Trauma and Codes in the
                        Emergency Department</h2>
                    <p>
                    <p>
                        <strong>
                            Any child arriving intubated into the Emergency Department will maintain sedated with the following medications:
                        </strong>
                    </p>
                    <div class="imgDimensions"><img src="./images/primary_1.jpg" alt="burns chart" width="1200"
                    height="1400">
                    </div>
                <div class="container-fluid section" id="topic3_1">
                    <p>
                    <h2>Rapid Sequence Medication Guideline</h2>
                    <p>
                        <strong>
                            <u>Trauma, no CHI, &nbsp;NO hypotension&nbsp;</u>
                        </strong>
                    </p>
                    <p>
                        <strong>Sedative: &nbsp; &nbsp; &nbsp;KETAMINE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp;2&nbsp; &nbsp; &nbsp;mg/kg&nbsp; &nbsp; IV &nbsp; load&nbsp;</strong></p>
                    <p>
                        <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ETOMIDATE
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0.3 &nbsp;mg/kg &nbsp; &nbsp;IV &nbsp;
                            load&nbsp;</strong></p>
                    <p>
                        <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PROPOFOL
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2 &nbsp; &nbsp; mg/kg &nbsp; &nbsp;IV
                            &nbsp; load&nbsp;</strong></p>
                    <p>
                        <strong>Paralytic: &nbsp; &nbsp; ROCURONIUM &nbsp; &nbsp; &nbsp; &nbsp; 1-1.2
                            &nbsp;mg/kg&nbsp;</strong></p>
                    <p>
                        <strong><u>Trauma, CHI or other increased ICP, NO hypotension&nbsp;</u></strong></p>
                    <p>
                        <strong>Sedative: &nbsp; &nbsp; &nbsp;ETOMIDATE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp;0.3&nbsp; &nbsp; &nbsp;mg/kg&nbsp; &nbsp; IV &nbsp; load&nbsp;</strong></p>
                    <p>
                        <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PROPOFOL
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2&nbsp; &nbsp; &nbsp; &nbsp;
                            mg/kg &nbsp; &nbsp;IV &nbsp; load&nbsp;</strong></p>
                    <p>
                        <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            KETAMINE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2&nbsp; &nbsp;
                            &nbsp; &nbsp; mg/kg &nbsp; &nbsp;IV &nbsp; load&nbsp;</strong></p>
                    <p>
                        <strong>Paralytic: &nbsp; &nbsp; ROCURONIUM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1-1.2
                            &nbsp;mg/kg&nbsp;</strong></p>
                    <p>
                        <strong><u>Status Asthmaticus&nbsp;</u></strong></p>
                    <p>
                        <strong>Sedative: &nbsp; &nbsp; &nbsp;KETAMINE &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; 2 &nbsp; &nbsp; &nbsp; &nbsp;mg/kg &nbsp; &nbsp;IV &nbsp; load&nbsp;</strong>
                    </p>
                    <p>
                        <strong>Paralytic: &nbsp; &nbsp; ROCURONIUM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1-1.2
                            &nbsp;mg/kg&nbsp;</strong></p>
                    <p>
                        <strong><u>Hypotension&nbsp;</u></strong></p>
                    <p>
                        <strong>Sedative: &nbsp; &nbsp; &nbsp;ETOMIDATE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp;0.3&nbsp; &nbsp; &nbsp;mg/kg&nbsp; &nbsp; IV &nbsp; load&nbsp;</strong></p>
                    <p>
                        <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            KETAMINE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2&nbsp; &nbsp;
                            &nbsp; &nbsp; mg/kg &nbsp; &nbsp;IV &nbsp; load&nbsp;</strong></p>
                    <p>
                        <strong>Paralytic: &nbsp; &nbsp; ROCURONIUM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1-1.2
                            &nbsp;mg/kg&nbsp;
                        </strong>
                    </p>
                    <p>
                        <strong><u>Post-intubation&nbsp;</u></strong></p>
                    <p>
                        <strong>Midazolam &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0.1&nbsp; &nbsp;
                            &nbsp;mg/kg
                        </strong>
                    </p>
                    <p>
                        <strong>Vecuronium &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0.1 &nbsp; &nbsp; mg/kg
                        </strong>
                    </p>
                    <p>
                        <strong>Propofol &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 100
                            &nbsp; &nbsp;mcg/kg/min
                        </strong>
                    </p>
                    <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pediatric
                            Endotracheal Tube Size</strong></p>
                    <table border="1" style="margin-right: calc(70%); width: 30%;">
                        <thead>
                            <tr>
                                <th style="width: 35.1759%;">Age</th>
                                <th style="width: 31.4573%;">Size</th>
                                <th style="width: 32.8643%;">Depth</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 35.1759%;">Preterm</td>
                                <td style="width: 31.4573%;">2.5</td>
                                <td style="width: 32.8643%;">6-8</td>
                            </tr>
                            <tr>
                                <td style="width: 35.1759%;">Term</td>
                                <td style="width: 31.4573%;">3.0</td>
                                <td style="width: 32.8643%;">9-10</td>
                            </tr>
                            <tr>
                                <td style="width: 35.1759%;">6 months</td>
                                <td style="width: 31.4573%;">3-3.5</td>
                                <td style="width: 32.8643%;">10</td>
                            </tr>
                            <tr>
                                <td style="width: 35.1759%;">1-2 years</td>
                                <td style="width: 31.4573%;">4.0</td>
                                <td style="width: 32.8643%;">10-11</td>
                            </tr>
                            <tr>
                                <td style="width: 35.1759%;">3-4 years</td>
                                <td style="width: 31.4573%;">4.5</td>
                                <td style="width: 32.8643%;">12-13</td>
                            </tr>
                            <tr>
                                <td style="width: 35.1759%;">5-6 years</td>
                                <td style="width: 31.4573%;">5.0</td>
                                <td style="width: 32.8643%;">14-15</td>
                            </tr>
                            <tr>
                                <td style="width: 35.1759%;">10 years</td>
                                <td style="width: 31.4573%;">6.0</td>
                                <td style="width: 32.8643%;">16-17</td>
                            </tr>
                        </tbody>
                    </table>

                    <p>Guidelines for Tube Sizes</p>
                    <ul>
                        <li>1 x ETT = (age/4) + 4 (formula for uncuffed tubes)</li>
                        <li>2 x ETT = NG/ OG/ foley size</li>
                        <li>3 x ETT = depth of ETT insertion</li>
                        <li>4 x ETT = chest tube size (max, e.g. hemothorax)</li>
                    </ul>
                    <p>Example: 4-year-old child would get intubated with a 5-0 ETT inserted
                        to depth of 15 cm (3x ETT), a 10Fr NG/OG/foley (2x ETT), and a 20Fr chest
                        tube (4x ETT).Example: 4-year-old child would get intubated with a 5-0 ETT inserted
                        ` to depth of 15 cm (3x ETT), a 10Fr NG/OG/foley (2x ETT), and a 20Fr chest
                        tube (4x ETT).</p>
                    <p>Remember that you can use cuffed tubes in any child except neonates
                        but the formula needs to be adjusted as follows: cuffed endotracheal
                        tube ID (mm) = (age/4) + 3.5</p>
                    <p>Reference: Mimi Lu, MD; UMEM educational pearls posted 4/22/11
                    </p>
                    <p>For neonates and small infants, use uncuffed ETT. If there is a large air
                        leak, and difficulty oxygenating because of the air leak, then intubate
                        with cuffed ETT, and slowly inflate.</p>
                </div>

                <div class="container-fluid section" id="topic3_8">

                    <h2>Trauma Airway Managment</h2>
                    <strong>
                        Level I Trauma Activations
                    </strong>
                    <p>
                        The following will respond to the Trauma Bay for airway management/assistance:
                    </p>
                    <ol>
                            <li>
                              <u>Anesthesiologist</u>
                              <ul>
                                <li>
                                    Mon - Fri: Arranged by the anesthesia board runner or on call anesthesiologist.
                                </li>
                                <li>
                                    b. Nights/weekends: On call anesthesiologist.
                                </li>
                              </ul>
                            </li>
                            <li>
                              <u>Pediatric lntensivist</u>
                              <ul>
                                <li>
                                    Functions in the Anesthesia role as the primary airway attending if Anesthesia is
                                    unavailable (e.g. ongoing case in the OR or Radiology).
                                </li>
                                <li>
                                    When the Anesthesiologist is present in the trauma bay, the pediatric intensivist
                                    will be released from this responsibility.
                                </li>
                              </ul>
                            </li>
                            <li>
                              <u>Pediatric EM Attending</u>
                              <ul>
                                <li>
                                    Serves as primary airway attending when the pediatric trauma surgeon is
                                    in attendance as team leader and when neither an anesthesiologist nor a
                                    pediatric intensivist are available.
                                </li>
                              </ul>
                            </li>
                            <li>
                                It is at the discretion of the assigned primary airway attending to determine if a pediatric
                                emergency medicine fellow, second or third year emergency medicine resident may manage
                                the patient's airway &/or intubate.
                            </li>
                            <li>
                                In a situation where the assigned primary airway attending is not comfortable delegating
                                the intubation to a pediatric emergency medicine fellow or EM resident, the assigned
                                attending will proceed with the intubation.
                            </li>
                            <li>
                                 While not an exhaustive list, situations in which the assigned airway attending may elect to not
                                 delegate the intubation to another include:
                              <ul>
                                <li>
                                    Known difficult airway.
                                </li>
                                <li>
                                    Hx of intrinsic laryngotracheal pathology/abnormal airway.
                                </li>
                                <li>
                                    Concern for head injury with physiology suggestive of increased cranial
                                    pressure.
                                </li>
                                <li>
                                    Hemodynamically unstable.
                                </li>
                                <li>
                                    High concern for cervical spinal cord injury.
                                </li>
                                <li>
                                    Airway with significant blood or concern for occluding foreign body.
                                </li>
                              </ul>
                            </li>
                    </ol> 
                    <p>
                        Note: These guidelines should be followed in the same manner for Level II trauma patients who have
                        been upgraded to a Level I.
                    </p>       
                </div>
                <div class="container-fluid section" id="topic3_2">

                    <h2>Difficult Airway Algorithm</h2>
                    <div class="imgDimensions"><img src="./images/algorithm.jpg" alt="burns chart" width="500"
                            height="700"></div>
                </div>
                <div class="container-fluid section" id="topic3_3">
                    <h2>Emergency Department Trauma Guideline for IV Access</h2>
                    <div class="imgDimensions"><img src="./images/traumaguideline.jpg" alt="burns chart" width="800"
                            height="800"></div>
                </div>
                <div class="container-fluid section" id="topic3_4">
                    <h2>Broselow Tape</h2>
                    <div class="imgDimensions"><img src="./images/broselow.jpg" alt="burns chart" width="800"
                            height="800"></div>
                </div>
                <div class="container-fluid section" id="topic3_5">
                    <h2>Resuscitative/ED Thoracotomy (EDT)</h2>
                    <p>Resuscitative/ED thoracotomy (EDT) is intended to address traumatic
                        arrest with a mechanical intervention. PALS/ATLS algorithms DO
                        NOT apply to traumatic arrest, as chest compressions are dependent
                        on venous return and may increase existing cardiothoracic trauma.
                        Furthermore, inotropes/vasopressors can lead to cardiogenic shock
                        because they can cause profound myocardial hypoxia and dysfunction.
                        Causes of traumatic arrest and interventions:</p>
                    <table>
                        <tr>
                            <td>Hypoxia</td>
                            <td>Intubation, 100% oxygen</td>
                        </tr>
                        <tr>
                            <td>Tension pneumothorax</td>
                            <td>Chest tube(s)</td>
                        </tr>
                        <tr>
                            <td>Hypovolemia/Hemorrhage</td>
                            <td>Chest tube(s) hemorrhage control +/- EDT</td>
                        </tr>
                        <tr>
                            <td>Cardiac tamponade</td>
                            <td>EDT</td>
                        </tr>
                    </table>
                    <p>Key factors that influence the result of EDT include mechanism of injury,
                        location of major injury, and signs of life. Overall survival is 7.4%, with
                        8.8% of penetrating trauma patients surviving as opposed to 1.4% in
                        blunt trauma. Of those that do survive, normal neurologic function is
                        best in penetrating trauma patients, with 92.4% having normal function.</p>
                    <div class="imgDimensions"><img src="./images/thoracotomy.jpg" alt="burns chart" width="800"
                            height="800"></div>
                    <p>* Vital Signs: Palpable pulse or obtainable BP</p>
                    <p>**Signs of life: pupillary activity, respiratory effort, or narrow complex QRS</p>
                    <p>A patient undergoing EDT must have an endotracheal tube in place
                        via RSI (or with ketamine/opiate combination) as well as an orogastrictube.</p>
                    <p>Personal and team safety is of utmost importance with EDT. Only the
                        surgeon’s hands should be in the field and PPE is mandatory. Team
                        members need to inform the OR that the patient will be directly
                        transferred if the patient has return of vital signs.</p>
                </div>
                <div class="container-fluid section" id="topic3_6">
                    <h2>Hypothermia</h2>
                    <p>1. Hypothermia Protocol</p>
                    <p style="margin-left: 20px;">The severity and treatment of hypothermia depends on core body
                        temperature, cardiac rhythm and associated injuries. Moderate, severe or extreme hypothermia
                        (&lt;32&deg; C, or 90&deg; F) by rectal or vesical thermistor bladder catheter, and confirmed
                        esophageally (core temperature); or any hypothermia with cardiac arrest should prompt activation
                        of hypothermia protocol:</p>
                    <ul style="list-style-type: disc;">
                        <li style="margin-left: 20px;">Notify Trauma Team</li>
                        <li style="margin-left: 20px;">ED Physician notifies OR desk to activate bypass protocol:
                            operating room set-up, Cardiac Anesthesiologist, perfusion team and Cardiac/Bypass Surgeon
                            if necessary</li>
                    </ul>
                    <p>2. Definitions of Hypothermia</p>
                    <p style="margin-left: 60px;">&nbsp;Mild &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; 32 - 35&deg; C &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 90 - 95&deg; F&nbsp;</p>
                    <p style="margin-left: 60px;">&nbsp;Moderate &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;28 - 32&deg; C
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;82 - 90&deg; F&nbsp;</p>
                    <p style="margin-left: 60px;">&nbsp;Severe &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;25
                        - 28&deg; C &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 77 - 82&deg; F Extreme &lt;25&deg;
                        C &lt;77&deg; F</p>
                    <p>3. Core Rewarming</p>
                    <p style="margin-left: 20px;">&nbsp; &nbsp; &nbsp; a. Indications</p>
                    <ul style="list-style-type: disc;">
                        <li style="margin-left: 60px;">Moderate hypothermia (28 -32&deg; C) with any perfusing cardiac
                            rhythm</li>
                        <li style="margin-left: 60px;">Severe hypothermia (25 -28&deg; C) with stable cardiac rhythm*
                        </li>
                    </ul>
                    <p>* Bradycardia alone does not constitute an unstable cardiac rhythm in hypothermic patients.</p>
                    <p style="margin-left: 20px;">&nbsp; &nbsp; &nbsp; b. Initial Management</p>
                    <ul>
                        <li style="margin-left: 60px;">CBC, serum glucose+ electrolytes+ BUN/Crea+ Ammonia, PT/PTT,
                            Fibrinogen, ABG, T&amp;C for 2 U of PRBC&nbsp;</li>
                        <li style="margin-left: 60px;">Temperature monitoring by esophageal and bladder thermometers
                        </li>
                        <li style="margin-left: 60px;">Ambient temperature at 32&deg; C (90&deg; F)</li>
                        <li style="margin-left: 60px;">Contact rewarming (Bair Hugger&reg;)&nbsp;</li>
                        <li style="margin-left: 60px;">Warmed humidified oxygen by mask (40&deg; C) or ET tube (40
                            -50&deg; C)</li>
                        <li style="margin-left: 60px;">Intravenous fluids: 40&deg; C by Level I re-warmer</li>
                        <li style="margin-left: 60px;">Nasogastric tube; lavage with NS at 40&deg; C&nbsp;</li>
                        <li style="margin-left: 60px;">Bladder catheter; lavage with NS at 40&deg; C&nbsp;</li>
                        <li style="margin-left: 60px;">Allow dwell times of 5-10 minutes to maximize heat exchange
                            during lavage</li>
                        <li style="margin-left: 60px;">If rewarming &lt; I&deg; C/15 minutes: add (choice and order at
                            discretion of ED/Trauma Team) - Peritoneal lavage with NS at 40&deg; C - Bilateral tube
                            thoracostomy and pleural lavage with NS at 40&deg; C</li>
                    </ul>
                    <p>4. Cardiopulmonary Bypass Rewarming</p>
                    <p style="margin-left: 40px;">&nbsp; &nbsp; &nbsp; a. Indications</p>
                    <ul style="list-style-type: disc;">
                        <li style="margin-left: 80px;">Moderate (28 -32&deg; C) or severe (25 -28&deg; C) hypothermia,
                            with cardiac arrest or unstable cardiac rhythm</li>
                        <li style="margin-left: 80px;">Extreme hypothermia (&lt; 25&deg; C)</li>
                        <li style="margin-left: 80px;">Moderate or severe hypothermia, managed with core rewarming, who
                            develops cardiac arrest or who remains hypothermic and fails to regain stable cardiac
                            rhythm* and adequate perfusion after 30 minutes of core rewarming.</li>
                    </ul>
                    <p style="margin-left: 20px;"><br></p>
                    <p style="margin-left: 40px;">&nbsp; &nbsp; &nbsp; b. Exclusion from Cardiopulmonary Bypass</p>
                    <ul style="list-style-type: disc;">
                        <li style="margin-left: 80px;">Only at the discretion of the Trauma Team and Bypass Team, such
                            as:</li>
                    </ul>
                    <p style="margin-left: 80px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; - Severe injury not compatible with life&nbsp;</p>
                    <p style="margin-left: 80px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; - Immobile frozen body&nbsp;</p>
                    <p>* Bradycardia alone does not constitute an unstable cardiac rhythm in hypothermic patients.</p>
                    <p style="margin-left: 40px;">&nbsp; &nbsp; &nbsp; c. Initial Management</p>
                    <ul style="list-style-type: disc;">
                        <li style="margin-left: 80px;">The treatment of choice in these select patients is cardiac
                            bypass.</li>
                        <li style="margin-left: 80px;">&nbsp;CPR</li>
                        <li style="margin-left: 80px;">&nbsp;Do not delay bypass to attempt core rewarming in ED&nbsp;
                        </li>
                        <li style="margin-left: 80px;">&nbsp;ED rewarming continues until OR is ready for patient&nbsp;
                        </li>
                        <li style="margin-left: 80px;">&nbsp;Full volume resuscitation&nbsp;</li>
                        <li style="margin-left: 80px;">&nbsp;CBC, serum glucose+ electrolytes+ BUN/Crea+ Ammonia,
                            PT/PTT, Fibrinogen, ABG, T&amp;C for 2 U of PRBC&nbsp;</li>
                        <li style="margin-left: 80px;">&nbsp;Nasogastric tube, bladder catheter&nbsp;</li>
                        <li style="margin-left: 80px;">&nbsp;Arterial line&nbsp;</li>
                        <li style="margin-left: 80px;">&nbsp;Temperature monitoring by esophageal and bladder
                            thermometers&nbsp;</li>
                        <li style="margin-left: 80px;">&nbsp;Transfer to OR/bypass ASAP&nbsp;</li>
                        <li style="margin-left: 80px;">Full systemic anticoagulation to maintain activated clotting time
                            at 450-480 sec, unless absolute contraindication (severe associated trauma) - at discretion
                            of the bypass team&nbsp;</li>
                        <li style="margin-left: 80px;">&nbsp;Intravenous antibiotics: e.g., Cefazolin&nbsp;</li>
                        <li style="margin-left: 80px;">Patient &lt; 20 kg: consider immediate median sternotomy and
                            central (atrial-aortic) bypass&nbsp;</li>
                        <li style="margin-left: 80px;">&nbsp;Patient &gt; 20 kg: Cannulation of femoral artery and vein
                            - cannulas appropriate for patient size&nbsp;</li>
                        <li style="margin-left: 80px;">&nbsp;Median sternotomy and atrial-aortic bypass if inadequate
                            rewarming or flow, cardiac arrest, or at discretion of Bypass Team&nbsp;</li>
                        <li style="margin-left: 80px;">Rewarming rate: 0.5-1.0&deg; C/minute</li>
                    </ul>
                    <p style="margin-left: 40px;">&nbsp; &nbsp; &nbsp; d. Bypass termination when:</p>
                    <ul style="list-style-type: disc;">
                        <li style="margin-left: 80px;">Core temp &gt; 37&deg; C and spontaneous-stable cardiac rhythm
                            and weanable to mechanical respirator&nbsp;</li>
                        <li style="margin-left: 80px;">Severe injury incompatible with life (pronounce dead)&nbsp;</li>
                        <li style="margin-left: 80px;">Failure to wean from bypass (pronounce dead)</li>
                    </ul>

                </div>
                <div class="container-fluid section" id="neuro">
                    <p>
                    <h1 class="h1navyBlue">Neurological/Spine Trauma</h2>
                        </p>
                </div>
                <div class="container-fluid section" id="topic4_5">
                        <p>
                        <h2>Mild Head Injury (GCS 14-15) (CT Normal)</h2>
                        </p>
                        <div class="imgDimensions">
                            <img src='./images/topic4_5.png'>
                        </div>
                        <div class="imgDimensions">
                            <img src='./images/topic4_5_1.png'>
                        </div>
                    </div>
                    <div class="container-fluid section" id="topic4_6">
                        <p>
                        <h2>Headache and Persistent Vomiting* after Mild Closed HeadTrauma (GCS ≥ 14)</h2>
                        </p>
                        <div class="imgDimensions">
                            <img src='./images/topic4_6.png'>
                        </div>
                    </div>
                    <div class="container-fluid section" id="topic4_7">
                        <p>
                        <h2>Algorithm for Cervical Spine Clearance</h2>
                        </p>
                        <div class="imgDimensions">
                            <img src='./images/topic4_7.png'>
                        </div>
                    </div>
                    <div class="container-fluid section" id="topic4_8">
                        <p>
                        <h2>Guidelines for Cervical Spine Clearance</h2>
                        </p>
                        <p>All patients sustaining actual or suspected injury to the cervical spine are fully and correctly immobilized prior to or upon arrival to the ED.<br />These patients include:<br />&nbsp; 1. Any trauma patient with an altered mental status<br />&nbsp; 2. All patients with symptoms consistent with spinal cord injury, including:<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; History of transient paresthesias, dysesthesias, shooting pains or subjective extremity paralysis<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; Complaints of neck pain or discomfort or presence ofmuscle spasms, limited range of motion or tenderness over the spine<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; Presence of sensory-motor deficits<br />&nbsp; 3. Patients in whom the mechanism of injury is likely to have resulted in significant trauma to the spine, including:<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; Child struck by a motor vehicle<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; Driver/passenger involved in MVC, including motorcycle and ATV collisions<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; All falls greater than 10 feet<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; Diving injuries<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; All vehicle crashes (sled, bicycle, skateboard) where the patient was thrown (not fell) from the vehicle<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; Other mechanisms raising a high index of suspicion<br />All patients will remain immobilized in full C-Spine precautions until their cervical spine is cleared both radiographically and clinically.<br />&nbsp; &nbsp;1. Radiographic clearance requires:<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; Standard 3 views (lateral, AP, and odontoid).<br />&nbsp; &nbsp; &nbsp; &bull; If lower cervical spine visualization is inadequate on the lateral x-ray, may try swimmer&rsquo;s view. If still inadequate, consider CT through the poorly visualized level(s).<br />&nbsp; &nbsp; &nbsp; &nbsp; &bull; Attending Radiologist, Emergency Department Physician, Trauma Surgeon or Neurosurgeon reading of films as negative and documented in the medical record</p>
                        <p>1. Clinical clearance requires:<br />&nbsp; &nbsp; &nbsp;&bull; Radiographic clearance prior to conducting clinical exam.<br />&nbsp; &nbsp; &nbsp;&bull; No residual neurological deficits<br />&nbsp; &nbsp; &nbsp;&bull; An awake patient with no distracting injury and symptoms not masked by pain medications.<br />&nbsp; &nbsp; &nbsp;&bull; Clinical examination of the patient by a senior level resident, attending, or credentialed physician extender from the emergency department, trauma service or&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  neurosurgery resulting in no tenderness with palpation of the cervical spine and full active range of motion.<br />&nbsp; &nbsp; &nbsp;&bull; An order written in Cerner to discontinue the cervical collar<br />2. If the C-Spine cannot be cleared due to radiographic or clinical findings:<br />&nbsp; &nbsp; &nbsp;&bull; All patients who have not been both radiographically and clinically cleared remain in a hard cervical ASPEN collar.<br />&nbsp; &nbsp; &nbsp;&bull; For patients with radiographic clearance who have persistent tenderness on palpation or with active range of motion, consider performing a CT prior to discharge. Note:<br />&nbsp; &nbsp; &nbsp; &nbsp;patients with significant pain should be seen by Trauma.<br />&nbsp; &nbsp; &nbsp;&bull; If the CT is normal, then an option is to have the patient receive active (patient controlled) flexion/extension X-rays&nbsp; &nbsp; prior to discharge. If no instability, they are discharged<br />&nbsp; &nbsp; &nbsp; &nbsp;home with the cervical collar in place and directed to follow up with the Trauma service as an outpatient in 2 weeks.<br />&nbsp; &nbsp; &nbsp;&bull; If inadequate flexion/ extension views (limited range of motion), repeat flexion/extension films should be considered before clinic at the 2 week visit.<br />&nbsp; &nbsp; &nbsp;&bull; Neurosurgery is consulted for all children with radiographic C-Spine injury and for all children with neurologic deficits on exam. This service will be responsible for clearing the C-&nbsp;   &nbsp;Spine.</p>
                        <p>&nbsp; &nbsp; &nbsp;&bull; Patients who cannot be clinically evaluated due to intubation, severe head injury, etc., undergo a three view C-Spine series and/ or CT of the C-Spine as clinically feasible<br />&nbsp; &nbsp; &nbsp; &nbsp;(i.e. patient stability) though still remain in an ASPEN collar.<br />&nbsp; &nbsp; &nbsp;&bull; Removal of the cervical collar in the intubated patient requires additional tests to evaluate potential injury. These tests as well as the timing of the imaging will be determined<br />&nbsp; &nbsp; &nbsp; &nbsp;by the neurosurgical service. These additional tests may include: further C-Spine films, MRI including STIR images performed as soon as possible (preferably within 72 hours),<br />&nbsp; &nbsp; &nbsp; &nbsp;CT, and/or SSEP&rsquo;s (Somatosensory evoked potential) with flexion extension films under fluoroscopy. Patients with severe head injury will be followed by the neurosurgical<br />&nbsp; &nbsp; &nbsp; &nbsp;service for clearance of the C-Spine.</p>
                    </div>
                    <div class="container-fluid section" id="topic4_9">
                        <p>
                        <h2>Guidelines for Thoracic and Lumbar Spine Clearance</h2>
                        </p>
                        <p>All patients sustaining actual or suspected injury to the thoracic/ lumbar spine (TLS) are maintained in TLS precautions (flat, log roll only) upon arrival to the ED. The spine/long board is to be removed in the Trauma Bay and TLS precautions continued. These precautions should be maintained until the child is cleared clinically (no tenderness on exam in a fully awake child with no distracting injuries and receiving no pain medication to mask symptoms) with or without radiographical clearance. The following patients require careful consideration of the need for TLS X-rays:<br />&nbsp; 1. Patients sustaining a high impact injury such as high-speed MVC, fall from 20 feet or more, etc.<br />&nbsp; 2. Patients with a known cervical spine injury (unless this was a result of direct trauma to the neck)<br />&nbsp; 3. All patients with significant injury above and below the TLS spine (e.g. severe head injury and femur fracture)<br />&nbsp; 4. Patients restrained with lap-belt only or with a seat-belt sign<br />&nbsp; 5. Patients with complaints of &ldquo;back&rdquo; pain<br />&nbsp; 6. Patients who are unable to be evaluated clinically due to intubation, severe head injury, etc. <br />Radiographic Clearance Requires:<br />&nbsp; 1. AP/lateral radiographs of the thoracic and lumbar spine<br />Special Circumstances<br />&nbsp; 1. Orthopedic surgery is consulted for all children with known thoracic and lumbar spinal injury and all children with neurologic deficits on exam. This service will be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;responsible for clearing the spine.</p>
            
                    </div>
                    <div class="container-fluid section" id="topic4_10">
                        <p>
                        <h2>Guidelines for Inpatient Care of the Child with a Spinal Cord Injury</h2>
                        </p>
                        <p>* If age 15 years or older, or if &lt; 15 years with positive family history of thrombosis<br />* Remobilization: progressive return to semi/upright positioning to avoid orthostatic symptoms due to CV deconditioning and impaired autonomic responses; accomplished by use of reverse Trendelenburg, HOB elevation, chair sitting - twice daily, 20-30 minutes<br />** Autonomic dysreflexia: Triggered by distended bladder, constipation, skin lesion, positioning. Symptoms BP, bradycardia, hypertension, pounding headache, flushing/sweating, chills, visual changes, nasal congestion. Relieve cause; elevate HOB 90 degrees, place legs in dependent position a Start Colace as soon as able to take clear liquids. Plan for daily evacuation at same time every day; upright positioning. When taking diet, begin fiber, senna and bisacodyl suppository as appropriate. Use manual stimulation as needed with suppository.</p>
                        <div class="imgDimensions">
                            <img src='./images/topic4_10_3.png'>
                        </div>
                        <div class="imgDimensions">
                            <img src='./images/topic4_10_2.png'>
                        </div>
                    </div>
                    <div class="container-fluid section" id="topic4_11">
                        <p>
                        <h2>Cervical Collar Sizing Guide</h2>
                        </p>
                        <div class="imgDimensions">
                            <img src='./images/topic4_11.png'>
                        </div>
                        <div class="imgDimensions">
                            <img src='./images/topic4_11_1.png'>
                        </div>
                    </div>
                    <div class="container-fluid section" id="topic4_12">
                        <p>
                        <h2>Standard Neurological Classification of Spinal Cord Injury</h2>
                        </p>
                        <div class="imgDimensions">
                            <img src='./images/topic4_12.png'>
                        </div>
                    </div>
                <div class="container-fluid section" id="penetratingTrauma">
                        <p>
                        <h1 class="h1pink">Penetrating Trauma</h2>
                            </p>
                    </div>
                <div class="container-fluid section" id="topic5_1">
                        <p>
                            <h2>
                                Penetrating Cardiac Injury
                            </h2>
                        </p>
                        <div>
                            <p>
                                Clinical signs of pericardial tamponade in penetrating cardiac injuries
                                are the exception, rather than the rule. Signs are hypotension, JVD,
                                muffled heart tones or pulsus paradoxus.
                            </p>
                        </div>
                        <div>
                            <p>
                                Pericardiocentesis is unreliable in the acute setting of trauma with a
                                20% false positive and 20% false negative rate. The most sensitive test
                                for post-traumatic tamponade is (subxiphoid) pericardial window. This
                                requires general anesthesia in the operating room. In patients who
                                do not require general anesthesia for surgery following penetrating
                                trauma, the best non-invasive test for cardiac or pericardial injury is two
                                dimensional echocardiography. This test is both sensitive and specific
                                in the patients without hemothorax (100%/89%), yet is less accurate in
                                the setting of hemothorax (56%/93%).
                            </p>
                        </div>
                        <div>
                            <p>
                                Penetrating cardiac injuries can occur without entrance or exit wounds
                                in the "box"     - injuries to the heart can occur from a transmediastinal
                                gunshot wound. A small retrospective study on gunshot wounds reveal
                                that 40% of these patients present in extremis with decreased blood
                                pressure and require emergency operation, with 1/3 of these patients
                                having cardiac injury. Approximately 60% of these patients present in
                                stable condition, but anywhere from 20-50% of these patients have
                                injuries to the heart, mediastinal vessels, bronchus or esophagus that
                                will present in a delayed fashion.
                            </p>
                        </div>
                        <div>
                    <div class="container-fluid section" id="topic5_2">
                        <div class="imgDimensions">
                            <img src="./images/trauma_1.png" alt="burns chart" width="800" height="800">
                        </div>
                            <p>
                                Evaluation of these injuries requires workup to include echo/pericardial
                                window, angiogram, bronchoscopy and esophagoscopy I barium
                                swallow.
                            </p>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <p><b>Borders of the box are:</b> the suprasternal notch,
                                    the nipples, the costal
                                    margin.</p>
                                </li>
                                <li>
                                    <b>Wounds that produce cardiac injuries:</b> wounds that
                                    produce cardiac injuries
                                </li>
                            </ul>
                        </div>
                </div>
                <div class="container-fluid section" id="topic5_2">
                    <p>
                        <h2>
                            Penetrating Chest Trauma
                        </h2>
                    </p>
                        <div class="imgDimensions">
                                <img src="./images/trauma_2.png" alt="burns chart" width="800" height="800">
                        </div>
                        <div>
                            <p>
                                * Non-availability of 2-D Echo warrants consideration of pericardial window.
                            </p>
                            <p>
                                ** A negative 2-D is only 60% sensitive in the presence of a pneumo/hemothorax
                            </p>
                            <p>
                                Clinical suspicion of cardiac injury despite initially (-) echo should prompt a repeat echo or pericardial window. 
                            </p>
                        </div>
                </div>
                <div class="container-fluid section" id="topic5_3">
                    <p>
                        <h2>
                            Penetrating Neck Trauma
                        </h2>
                    </p>
                    <div>
                        <p>
                            The goal of this management guideline is to encourage timely
                            exploration in symptomatic patients and to obtain appropriate
                            diagnostic studies in asymptomatic patients. The critical maneuver
                            in the management of these patients is the physical examination, as
                            all decisions are made based on physical findings. There are several
                            principles to bear in mind: 
                        </p>
                    </div>
                    <div>
                        <ul>
                            <ol>
                                1. Attending presence is required for GSW to the neck.
                            </ol>
                            <ol>
                                2. Attending notification is required for SW to the neck.
                            </ol>
                            <ol>
                                3. Penetrating neck wounds should not be probed.
                            </ol>
                            <ol>
                                4. An adequate surgical exploration involves visualizing
                                   the wound tract, exploring the carotid sheath, and fully
                                   mobilizing the trachea and esophagus if there are signs of
                                   aerodigestive injury or if the trajectory of the wound is in
                                   proximity of these structures.
                            </ol>
                        </ul>
                    </div>
                    <div>
                        <p>
                            Physical Examination- "Positive" Findings
                        </p>
                        <p>
                            <b>Vascular Exam:</b>
                            <ul>
                                <li>
                                    <p>
                                        Active Bleeding
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Hypotension 
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Large or expanding Hematoma 
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Pulse Deficits - Carotid, Brachial/Radial Bruit
                                    </p>
                                </li>
                            </ul>
                        </p>
                    </div>
                    <div>
                        <p>
                            <b>Aerodigestive Exam:</b>
                            <ul>
                                <li>
                                    <p>
                                        Hemoptysis/Hematemesis 
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Air Bubbling 
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Subcutaneous Emphysema 
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Hoarseness 
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Dysphagia 
                                    </p>
                                </li>
                            </ul>
                        </p>
                    </div>
                    <div>
                        <p>
                            Localizing Signs: pupils, limbs, CN's
                        </p>
                        <ul>
                            <li>
                                <p>
                                    CN's:
                                    <li>
                                        <p>
                                            Facial
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Glossopharyngeal -midline position of soft palate
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Recurrent Laryngeal - hoarseness, ineffective cough
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Accessory - shoulder lift
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Hypoglossal -midline position of tongue
                                        </p>
                                    </li>   
                                </p>
                            </li>
                        </ul>    
                    </div>
                    <div>
                        <p>
                            Horner's Syndrome - myosis, ptosis
                        </p>
                    </div>
                    <div>
                        <p>
                            Brachial Plexus:
                        </p>
                        <ul>
                            <li>
                                Median - fist
                            </li>
                            <li>
                                Radial - wrist extension 
                            </li>
                            <li>
                                Ulnar - abduction/adduction of fingers 
                            </li>
                            <li>
                                Musculocutaneous - forearm flexion
                            </li>
                            <li>
                                Axillary - arm abduction
                            </li>
                        </ul>
                    </div>
                    <div class="imgDimensions">
                            <img src="./images/trauma_3.png" alt="burns chart" width="800" height="800">
                    </div>
                    <div>
                        <p>
                            * If GSW, transcervical or high risk trajectory, get arteriography/esophagoscopy/
                            esophagography
                        </p>
                        <p>
                            3 anatomic regions:
                            <ul>
                                Zone I - between clavicle and cricoid cartilage
                            </ul>
                            <ul>
                                Zone II - between cricoid cartilage and angle of mandible
                            </ul>
                            <ul>
                                Zone II - between cricoid cartilage and angle of mandible
                            </ul>
                        </p>
                    </div>
                    <div class="container-fluid section" id="topic5_4">
                        <p>
                            <h2>
                                Transmediastinal Gunshot Wounds (TMGSW)
                            </h2>
                        </p>
                        <p>
                            Transmediastinal trajectory of a bullet should be considered in the
                            following situations: 
                        </p>
                        <ol>
                            <li>
                                1. Entry and exit wounds on opposite side of the thorax
                            </li>
                            <li>
                                2. Single entry wound with X-ray demonstrating a missile on
                                opposite side of the thoracic cavity or in close proximity to
                                the mediastinum
                            </li>
                            <li>
                                3. Multiple gunshot wounds to thorax
                            </li>
                        </ol>
                        <p>
                            There is little controversy regarding the management of unstable
                            patients - they should have emergent thorocotomy. However, stable
                            patients could harbor occult injuries to critical mediastinal structures
                            (heart, great vessels, trachea, esophagus). Consequently, patients have
                            routinely been submitted to a battery of invasive diagnostic tests:
                            echocardiography or subxiphoid pericardial window, arch aortography,
                            bronchoscopy, esophagoscopy and/or esophagography. The latter two
                            have been employed together in order to improve upon the sensitivity
                            of each individual test. This array of tests can be expensive and time
                            consuming, as only a small percentage of hemodynamically stable,
                            asymptomatic patients have clinically significant injuries.
                        </p>
                        <p>
                            Helical CT of the chest has proven useful in demonstrating the trajectory
                            of missiles in the thorax. In the setting of a potential TMGSW, a CT scan
                            may confirm a trajectory remote from the mediastinum, obviating
                            further testing. On the other hand, proven transmediastinal trajectory
                            mandates further evaluation. However, rather than performing all of the
                            aforementioned tests, the investigations may be tailored to the specific
                            clinical scenario. 
                        </p>
                        <p>
                            Trajectory near the pericardium warrants echocardiography or
                            pericardial window. If CT suggests aortic injury, or if the trajectory is
                            superior to the arch, arteriography remains the gold standard (TEE
                            cannot be considered reliable enough). Bronchoscopy is indicated for
                            pneumomediastinum, respiratory distress or bronchopleural fistula/
                            massive air leak. Esophagoscopy has been reported to have 100%
                            sensitivity for thoracic esophageal injuries. In an awake, asymptomatic
                            patient, barium esophagography is easier to obtain and may be
                            adequate by itself. The cervical esophagus most difficult to reliably
                            evaluate, and so both studies are warranted.
                        </p>
                    </div>
                    <div class="container-fluid section" id="topic5_5">
                        <p>
                            <h2>Truncal Stab Wounds </h2>
                        </p>
                        <p>
                            The purpose of this algorithm is to guide the management of patients
                            with stab wounds to the anterior abdomen, thoracoabdominal area back
                            and flank.
                        </p>
                        <p>
                            <b>Back/Flank stab wounds</b> are defined as those between the tips of the
                            scapulae and posterior iliac crests, posterior to the mid-axillary line.
                            Physical examination alone is unreliable in this group, and DPL is
                            unable to evaluate the retroperitoneum. Triple contrast (oral, rectal, and
                            intravenous) CT has a sensitivity of 89-100% and a specificity of 98-100%
                            in diagnosing intra-abdominal and retroperitoneal injuries.
                        </p>
                        <p>
                            <b>Thoracoabdominal stab wounds</b> are defined as those between a
                            circumferential line connecting the nipples and tips of the scapulae
                            superiorly, and the costal margins inferiorly. Occult diaphragmatic
                            injury is problematic in this patient group. Radiological evaluation (US/
                            CT/MRI) may miss small tears, so laparoscopy/thoracoscopy remains
                            investigation of choice if suspicion is high.
                        </p>
                        <p>
                            <b>Anterior abdominal stab wounds</b> are defined as those anterior to
                            the mid-axillary line, from the xiphoid process to the pubic symphysis.
                            Although optimal management of stable patients with AASW is debated,
                            we have adopted a protocol of serial clinical assessments to determine
                            the need for laparotomy.
                        </p>
                        <p>
                            Stab wounds may fall into more than one defined region, thus a
                            combined work-up may be required. For these type of wounds, or in the
                            setting of multiple stab wounds, exploration may be indicated. 
                        </p>
                    </div>
                    </div>
                <div class="container-fluid section" id="topic5_6">
                    <p>
                        <h2>
                            Abdominal Stab Wound
                        </h2>
                    </p>
                    <div class="imgDimensions">
                            <img src="./images/trauma_4.png" alt="burns chart" width="800" height="800">
                    </div>
                </div>
    
                </div>
                <div class="container-fluid section" id="bluntTrauma">
                    <p>
                    <h1 class="h1lightBlue">Blunt Trauma</h2>
                    </p>
                </div>
                <div class="container-fluid section" id="topic6_1">
                    <div>
                        <p><strong>Blunt Cerebrovascular Injuries (BCVI)</strong></p>
                        <p>Blunt cerebrovascular (BCVI) have historically been considered rare, yet
                            potentially devastating events.</p>
                        <p>The fundamental mechanisms of internal carotid artery (ICA) injury
                            include:</p>
                        <ul>
                            <li>cervical hyperextension/hyperflexion with rotation, stretching the ICA over the lateral
                                articular processes of CI -C3</li>
                            <li>direct cervical trauma</li>
                            <li>intraoral trauma</li>
                            <li>basilar skull fracture involving the carotid canal</li>
                            </li>
                        </ul>
                        <p>A latent period between the time of injury and the appearance of cerebral
                            ischemia is characteristic of BCVI, and relates to the pathophysiology
                            (i.e., platelet plug formation and subsequent embolization or occlusion).
                            23-50% of patients first develop signs or symptoms > 12 hours after the
                            traumatic event. This has led to the adoption of screening protocols in
                            many institutions. Screening has dramatically increased the recognized
                            incidence of BCVI, but benefit in terms of stroke reduction has not
                            been proven. Existing data does indicate that anticoagulation improves
                            neurologic outcomes among symptomatic patients, and may prevent
                            stroke in asymptomatic patients.</p>
                        <p>Arteriography is the gold standard for diagnosis. CTA will be used for
                            screening asymptomatic patients. Any abnormality will be further
                            investigated with 4-vessel cerebral ateriography.</p>
                        <p><strong>Signs and symptoms of BCVI</strong></p>
                        <ul>
                            <li>Hemorrhage-from mouth, nose, ears of potential arterial
                                origin.</li>
                            <li>Large or expanding cervical hematoma (consider surgery).</li>
                            <li>Cervical bruit</li>
                            <li>Evidence of cerebral infarction on CT scan.</li>
                            <li>Unexplained or CT incongruous central or lateralizing
                                neurologic deficit, transient ischemic attack, or Horner's
                                syndrome.</li>
                        </ul>
                        <div>
                            <p><strong>Risk factors for BCVI</strong></p>
                            <ul>
                                <li>"High risk" associated injuries: GCS &le; 6, petrous bone fracture, diffuse axonal
                                    brain injury, Lefort II or III fracture, and cervical spine injury.</li>
                                <li>Mechanism compatible with severe cervical hyperextension/rotation or hyperflexion,
                                    particularly if associated with complex facial fractures.</li>
                                <li>Diffuse axonal injury of the brain.</li>
                                <li>Near-hanging, seat belt abrasion, or other soft tissue injury of the anterior neck
                                    resulting in significant cervical swelling.</li>
                                <li>Basilar skull fracture involving the carotid canal.</li>
                                <li>Cervical vertebral body fracture or distraction injury.</li>
                            </ul>
                        </div>
                        <div>
                            <p><strong>Treatment strategies and treatment-related outcomes by injury
                                    grade are as follows:</strong></p>
                            <p><span style="text-decoration: underline"><strong>Grade I: </strong> Intimal Irregularity:
                                    Dissection/Hematoma with &lt;25%
                                    Stenosis:</span> I: Intimal Irregularity: Dissection/Hematoma with &lt;25%
                                Stenosis:</span> 7% stroke rate, 57% heal, 8% progress on follow-up
                                arteriogram. No significant difference in healing or progression
                                whether treated with heparin, anti-platelet therapy or untreated. Use
                                anti-platelet therapy (ASA 325mg qd) unless there is absolutely NO
                                contraindication to heparin.</p>
                            <p><span style="text-decoration: underline"><strong>Grade II: </strong> lntraluminal
                                    Thrombus: Intimal Flap: Dissection/Hematoma with >25% Stenosis:</span> I: Intimal
                                Irregularity: Dissection/Hematoma with &lt;25%
                                Stenosis:</span> 26% stroke rate, 8% heal, 43% progress on follow-
                                up arteriogram. Consider repair, may be complicated by extension to
                                base of skull. Anticoagulation with heparin recommended. Consider
                                stenting for dissections that threaten to occlude lumen.</p>
                            <p><span style="text-decoration: underline"><strong>Grade III: </strong> Pseudo-aneurysm:
                                    26% stroke rate. Rare healing with
                                    anticoagulation, although it may prevent strokes. Repair if surgically
                                    accessible. Consider endovascular therapy for inaccessible lesions, but
                                    wait several days for injury to stabilize.</p>
                            <p><span style="text-decoration: underline"><strong>Grade IV: </strong>Occlusion:</span>35%
                                stroke rate (50% in ICA). Rare re-canalization
                                with anticoagulation, but it may prevent stroke (all strokes were in
                                untreated patients). Consider repair, but it may be complicated by
                                extension to base of skull.</p>
                            <p><span style="text-decoration: underline"><strong>Grade V:
                                    </strong>Transection::</span>100% stroke rate, mortality. Endovascular therapy
                                may be the only useful intervention.</p>
                            <p>Therapy should be individualized. Anticoagulation should be held
                                until there is no presumed risk of intracranial or other life-threatening
                                hemorrhage. Anti-platelet therapy may be a reasonable alternative to
                                systemic heparin. Drugs of choice are heparin (no bolus; 15 U/kg/hr to
                                target PTT 40-50 sec) or anti-platelet therapy (clopidogrel 75 mg qd or
                                aspirin 325 mg qd). Anticoagulation should be administered following
                                stenting. Follow-up arteriography is performed within 7-10 days to
                                evaluate efficacy of the initial therapy and plan further interventions.</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid section" id="topic6_2">
                    <h2>Blunt Aortic Injury (BAI)</h2>
                    <div>
                        <p>BAI is the second most common cause of death in blunt trauma,
                            following head injury. Deceleration forces (e.g., high speed MVCs, falls
                            from heights) cause tearing of the aorta at points of fixation: ligamentum
                            arteriosum (80-85%), diaphragmatic hiatus (10-15%), and ascending
                            aorta ( 5-10% ). 85% of fatalities occur at the accident scene. Of the
                            remainder, 25% occur within 24 hours and another 25% within one week. </p>
                        <p>The A-P CXR is a reasonable screening test for BAI. Findings suggestive of
                            BAI (including widened mediastinum, indistinct aortic knob, depression
                            of left main stem bronchus, deviation of NG tube, opacification of
                            aortopulmonary window, widening of paratracheal/ paraspinous stripes,
                            apical capping, scapular fracture or 1st/2nd rib fracture) should prompt
                            chest CT. If suspicion of BAI is low, a widened mediastinum may be
                            further investigated by upright CXR. However, if suspicion of BAI is high,
                            as in situations where there has been a severe deceleration mechanism,
                            chest CT is indicated regardless of CXR findings as the initial CXR may be
                            interpreted as "normal" in up to 7% of patients with BAI. Helical chest CT
                            is a sensitive test for BAI, and its specificity approaches 100%. Suspicious
                            findings warrant arteriography (the gold standard). If CT is diagnostic
                            of BAI, the decision to proceed to aortography vs. thoracotomy is the
                            thoracic surgeon’s preference. </p>
                        <p>Once BAI is diagnosed or strongly suspected , antihypertensive therapy
                            should be instituted to prevent aortic rupture. Esmolol is preferred
                            initially. A loading dose of 0.5ug/kg over 30 sec is followed by infusion of
                            50 ug/kg/min (increasing up to 300 ug/kg/min as needed.) If necessary,
                            nitroprusside (2-5 ug/kg/min) may be added.</p>
                        <p>Multisystem injuries (90%) and brain injuries (50%) are commonly
                            associated with BAI, and management must be prioritize. Use of beta
                            blockers may not be an acceptable option in patients with closed
                            head injuries as decreasing systematic arterial pressure would impact
                            cerebral perfusion pressures. Severe brain injury, blunt cardiac injury, or
                            pulmonary injury may be prohibitive risks to early repair. Nonoperative
                            management (i.e. antihypertensive and other supportive therapy)
                            should be considered, with potential delayed repair.</p>
                        <div class="imgDimensions"><img src="./images/blunt_1.jpg" alt="blunt chart" width="800"
                                height="800"></div>
                    </div>
                </div>
                <div class="container-fluid section" id="topic6_3">
                    <h2>Blunt Cardiac Injury (BCI)</h2>
                    <p>Blunt cardiac injury (BCI) is a common cause of scene death.</p>
                    <p>The goal of this algorithm is not to identify all patients with a BCI; the
                        diagnosis itself is of secondary importance. Rather, the goal is to identify
                        the patients at risk for complications (dysrhythmia, cardiogenic shock, or
                        structural injury) which may require treatment. BCI should be suspected
                        in individuals who sustain major chest trauma. </p>
                    <p>The initial evaluation should include an ECG as part of the secondary
                        survey. Patients with shock from any cause, ischemic changes on ECG or
                        significant dysrhythmia are admitted to the ICU. Nonspecific ECG findings
                        are rarely associated with significant BCI; patients may be discharged
                        after 24 hours of cardiac monitoring if no new symptoms occur.</p>
                    <p>Patients with significant blunt chest trauma being admitted for
                        associated injuries should have cardiac monitoring for 24 hours. While
                        many patients will require admission for associated injuries, a subset
                        of patients may not require admission. These patients can be safely
                        discharged from the ED if the ECG at presentation and at 8 hours are
                        normal, and if a Troponin I level at 8 hours is less than 1.5 ng/mL.</p>
                </div>
                <div class="container-fluid section" id="topic6_4">
                    <h2>Blunt Chest Trauma</h2>
                    <div class="imgDimensions"><img src="./images/blunt_2.jpg" alt="blunt chart" width="800"
                            height="800"></div>
                    *Ischemic changes: ST elevation, depression, or T wave inversion in ≥ leads
                    dysrhythmia: new atrial fib, new LBBB/RBBB, frequent PVC's/PAC's, heart block
                    **Echocardiogram may be obtained in selected patients in this group with
                    refractory shock, new murmur, clinical suspicion of pericardial effusion
                    tamponade.
                    ***Anything other than normal sinus rhythm
                </div>
                <div class="container-fluid section" id="topic6_5">
                    <h2>Blunt Liver and Spleen Injury</h2>
                    <p>In 2012, a pediatric trauma consortium, ATOMAC, developed a practice
                        management guideline for blunt liver and spleen injury now used at
                        many United States pediatric trauma centers. It was developed over a
                        two year period involving a critical appraisal of the literature, bracketing
                        the ranges of expert opinions and refining the algorithm through clinical
                        use. Instructions accompany the 3 algorithms to standardize its use
                        during hospitalization and at discharge.</p>
                    <p>suspected Liver or Spleen Injury</p>
                    <div class="imgDimensions"><img src="./images/blunt_3.jpg" alt="blunt chart" width="800"
                            height="800"></div>
                    <p><strong>Standardized Discharge Instructions:</strong></p>
                    <p>No ibuprofen, naproxen, or other drug store pain medications. </p>
                    <p>Acetaminophen (Tylenol) is okay for use.</p>
                    <p>May go back to school when off narcotic pain meds.</p>
                    <p>Restricted activity for injury grade +2 (in weeks)</p>
                    <ul>
                        <li>No sports</li>
                        <li>No rough play</li>
                        <li>No activities with wheels</li>
                        <li>No activities where both feet leave the ground at the same
                            time</li>
                        <li>Trauma service will provide medical permission for early
                            class change for students at risk of re-injury between
                            classes.</li>
                    </ul>
                    <p><strong>Return to ED for:</strong></p>
                    <ul>
                        <li>increasing pain</li>
                        <li>paleness</li>
                        <li>dizziness</li>
                        <li>shortness of breath</li>
                        <li>vomiting</li>
                        <li>worsening shoulder pain</li>
                        <li>intestinal bleeding</li>
                        <li>black tarry stools</li>
                    </ul>
                    <p><strong>Call office for:</strong></p>
                    <ul>
                        <li>Yellow eyes/jaundice</li>
                    </ul>
                    <p><strong>Follow-up:</strong></p>
                    <p><i>Grade 1-2 injury:</i> Phone call follow-up at 2 weeks and again at 60 days
                        after injury.</p>
                    <p><i>Grade 3-5 injury:</i> Office visit at 2 weeks. Phone call at 60 days after
                        injury.</p>
                    <p>No routine follow-up imaging is required.</p>
                </div>

                <p><strong>Pancreatic Injury</strong></p>
                <p>The pancreas is the 4th most commonly injured abdominal solid organ but pancreatic injury represents only 0.3% of all pediatric trauma and 0.6% of significant abdominal trauma. Mortality rate for pancreatic trauma is about 5% and major complications to include ARDS, wound infection, pneumonia and sepsis affects 1 in 4 children with pancreatic trauma. The American Association for Surgery in Trauma has the following grading scale for pancreatic trauma:</p>
                <div class="imgDimensions">
                            <img src="./images/blunt_5.jpg" alt="burns chart" width="800" height="800">
                    </div>
                    <div class="imgDimensions">
                            <img src="./images/blunt_6.jpg" alt="burns chart" width="800" height="800">
                    </div>
                <p>According to the National Trauma Bank Database, injuries are evenly divided between the head, body, and tail. The management of pancreatic trauma remains controversial in the pediatric population and there is no consensus regarding operative vs. non-operative management.</p>
                <p>Non operative management increases risk of pseudocyst formation. Main duct injury increases the risk of pseudocyst formation. Ductal anatomy can be defined with ERCP/MRCP. There is no data to show that stenting helps relieve back pressure or promotes drainage. The Pediatric Trauma Society has created a proposed algorithm stating nonoperative management is acceptable for most pediatric patients including grade IV and V proximal injuries. This is based on evidence that observing most injuries has few adverse consequences and symptomatic pseudocysts that developed after injury could be percutaneously drained or they resolved spontaneously without intervention. Operative options for Grade IV and V proximal injuries are morbid and have adverse long term consequences therefore non-operative management is preferred. Grade III, however, is still controversial. The flow diagram from the Pediatric Trauma Society featured on the next page is to assist decisions made for patients with pancreatic injuries.</p>
                <div class="imgDimensions">
                            <img src="./images/blunt_4.jpg" alt="burns chart" width="800" height="800">
                    </div>
                <div>
                    <h2><strong>Renal Trauma</strong></h2>
                <div>
                <p>Ten percent of patients with blunt abdominal trauma are found to have a urogenital injury. Renal parenchymal injuries are the most common. Of these injuries 75-90% may be classified as minor (Grade I-III) and require no intervention.</p>
                <p><strong>Evaluation:</strong></p>
                <p>Urine from the first post injury void should be evaluated on all patients with blunt abdominal trauma. Most patients with major renal trauma present with gross hematuria or hypotension, only 0.8 - 1.2% of major renal injuries have neither.</p>
                <p>Microscopic hematuria (Greater than 5 RBC/HPF): Rarely associated with significant renal system injury. Patients require observation and repeat UA later in the ER or hospital to demonstrate resolution, in order to rule out other sources of hematuria such as malignancy. Children with significant microscopic hematuria (Greater than 50 RBC/HPF) should undergo abdominal/pelvic CT with cystogram as their risk for significant renal injury is higher than in adults.</p>
                <p>Gross hematuria: Patients require abdominal/pelvic CT with cystogram if hemo-dynamically stable. A retrograde urethrogram should be performed if there is blood at the meatus.</p>
                <p>Blunt vs. penetrating: Blunt injury and stab wounds may be worked up in a similar fashion. Gunshot injuries often skip CT scan staging and require exploration because of hypotension, massive injury and delayed complications secondary to blast effect.</p>
                <div class="imgDimensions">
                            <img src="./images/blunt_8.jpg" alt="burns chart" width="800" height="800">
                    </div>
                <p><strong>Management:</strong></p>
                <p>Patients with a major renal injury may be candidates for nonoperative management under these conditions: Stable hemodynamics, urine extravasation contained within Gerota's fascia, and no ongoing bleeding. Patients should be monitored for the first 24–48 hrs. Bed rest should continue for 24 hours after the cessation of hematuria.</p>
                <p>Other therapeutic interventions includ</p>
                <p>Angio-embolization: A two-unit transfusion limit (blood loss thought to be related to renal injury) will be set as a threshold to consider angiogram for embolization. Bleeding may manifest as expanding hematoma or persistent hematuria.</p>
                <p>Double J Stent: Patients with evidence of urinary extravasation on initial CT scan may warrant stenting. Plan re-evaluation with CT scan 48 hours post injury. Any patient with persistent urinary extravasation on repeat CT scan requires stenting. Less than 10% of patients require surgery for failure of stents to control urine extravasation.</p>
                <p>Percutaneous drainage: Urinoma and abscess may be a complication of non-operative management. Both may be treated with percutaneous drainage.</p>
                <p>Operative salvage: Patients taken to the operating room for hypotension before adequate staging of potential renal injuries may warrant exploration if there is a strong suspicion for renal injury. Otherwise, postoperative staging CT is recommended. Intra-op IVP has been used to assess contralateral kidney function yet less than 1% of patients with a palpable contralateral kidney have a non-functioning kidney. The “one-shot IVP” is not warranted.</p>
                <p>Intra-op considerations: Assess urinary extravasation by injection of methylene blue. Goals are debridement, homeostasis, watertight closure of the collecting system, reapproximation of the parenchyma, and drainage of the retroperitoneum. Often omentum is used to wrap the kidney after repair.</p>
                <p>Revascularization: Revascularization has been employed for traumatic renal artery occlusion. Salvage in this situation is rarely successful and should not be undertaken in the acutely injured patient. Fewer complications are seen if non-operative management is undertaken. However, the patient must be monitored for the development of renovascular hypertension.</p>
                <div>
                            <h2>Blunt Bowel & Mesenteric Injury</h2>
                <div>
                <p>Blunt injury to the bowel or mesentery (BBMl) is uncommon and can be difficult to diagnose.</p>
                <p>CT scanning is the best noninvasive test for diagnosing BBMl. Oral contrast does not need to be routinely administered as it delays the evaluation and does not add to the specificity or sensitivity of the test. CT findings that suggest BBMI include free fluid in the absence of solid organ injury, bowel wall thickening, mesenteric fat streaking, mesenteric hematoma, pneumoperitoneum and extravasation of IV or oral contrast.</p>
                <p>The findings of pneumoperitoneum or constrast extravasation mandate laparotomy. The other findings are suggestive but not specific for BBMI. Two or more of the above findings mandate laparotomy. A single finding should prompt further evaluation.</p>
                <p>Options for further evaluation include serial physical exams or repeat CT scan. Physical exam has been shown to have variable results in predicting a need for operation. Thus it should be supplemented by serial WBC and a delayed CT scan.</p>
                <p>A low threshold for exploration should be used when the clinical picture is not improving.</p>
                <div class="imgDimensions">
                            <img src="./images/blunt_9.jpg" alt="burns chart" width="800" height="800">
                    </div>
                <div class="imgDimensions">
                            <img src="./images/blunt_1.jpg" alt="burns chart" width="800" height="800">
                    </div> 
                <div>
                    <h2>Rectal Injury</h2>  
                </div>
                <p>Rectal injuries should be classified as either intraperitoneal or extraperitoneal. Injuries to the anterior and lateral surfaces of the upper two-thirds of the rectum are classified as intraperitoneal (serosalized), and those of the posterior surface as extraperitoneal (no serosa). Injuries to the lower one-third are extraperitoneal. Rectal injury needs to be ruled out in all transpelvic gunshot wounds and other penetrating pelvic injuries. Diagnostic modalities should include a digital rectal exam looking for gross blood, and a proctosigmoidoscopy.</p>          
                <p>Intraperitoneal rectal injuries should be primarily repaired with or without fecal diversion. Easily visualized injuries with minimal dissection should be primarily repaired. Fecal diversion can be undertaken if injury is more complex or difficult to visualize.</p>           
                <p>Distal rectal washout and presacral drainage, mainstay therapy for high-velocity rectal injuries, has not shown any advantage in the management of civilian type rectal injuries and may be omitted. Broad-spectrum antibiotics covering gram negative bacteria and anaerobes should be given. Finally, genitourinary tract injuries are among the most common injuries associated with rectal trauma. Hematuria should raise the level of suspicion and prompt further workup.</p>
                <p>Healing of rectal wounds may occur in up to 75% of patients 10 days after injury. Same admission colostomy closure may be considered in patients with low grade or penetrating injuries. Healing should be demonstrated with a contrast enema to exclude stricture or fistula formation.</p>
                <div>
                            <h2>Unstable Pelvic Fractures</h2>
                </div>
                <p>Hemodynamically compromised patients with pelvic fractures present a complex challenge to trauma surgeons.</p>
                <p>Hemodynamically stable patients should undergo CT scanning of the abdomen and pelvis to detect occult injuries or contrast extravasation. The finding of contrast extravasation in the pelvis is highly suggestive of significant arterial bleeding that may require angiography and embolization. Ongoing transfusion requirements also constitute an indication for arteriography.</p>
                <p>The initial approach to hemodynamically compromised patients must be aggressive. Crystalloid resuscitation and transfusion of packed red blood cells should be instituted immediately: empiric administration of fresh frozen plasma (I: I) and platelets (5:5) may help prevent coagulopathy. Reduction of the pelvic volume is critical, and is achieved by prompt wrapping of the pelvis, and taping of the knees and ankles. The orthopedic surgery attending is instrumental in determining whether application of an external fixation device and what device is appropriate.</p>
                <p>Identification of alternative sites of bleeding is central to the triage of these patients. Physical examination, chest x-ray, and ultrasonography will identify significant extrapelvic hemorrhage, allowing timely intervention. If ultrasonography is equivocal, supraumbilical DPL should be performed, and the patient taken to the OR if the aspirate is grossly positive.</p>
                <p>Patients who do not recover with mechanical pelvic stabilization, transfusion, and treatment of associated injuries have a high likelihood of harboring pelvic arterial hemorrhage. They should undergo prompt arteriography either in the operating room or the radiography suite. For this reason, vascular/interventional radiology should be alerted early in the course of these patients.</p>
                <div class="imgDimensions">
                            <img src="./images/blunt.jpg" alt="burns chart" width="800" height="800">
                    </div> 
                <div class="container-fluid section" id="otherIssues">
                    <p>
                    <h1 class="h1purple">Other Issues</h2>
                        </p>
                </div>
                <div class="container-fluid section" id="topic7_1">
                    <p>
                    <h2>Pediatric Peripheral Vascular Trauma</h2>
                    </p>
                    <div class="imgDimensions">
                        <img src='./images/1.png'>
                        <img src='./images/2.png' style="margin-left: 9.3px;">
                    </div>
                </div>
                <div class="container-fluid section" id="topic7_2">
                    <p>
                    <h2>Extremity compartment syndrome</h2>
                    </p>
                    <div class="imgDimensions">
                        <img src='./images/3.png'>
                    </div>
                </div>
                <div class="container-fluid section" id="topic7_3">
                    <p>
                    <h2>Mangled Extremity</h2>
                    </p>
                    <p>Severe extremity injuries with significant damage to more than one tissue component (integument=
                        skin+ subcutaneous tissue, muscles, bone, nerves and vasculature) are often called mangled
                        extremities. They typically require arterial repair to restore limb viability. Unlike a pure
                        vascular injury, however (such as a knife or gunshot wound), the prognosis for restoration of
                        function is poor. Particularly for mangled lower extremities, amputation must be seriously
                        considered as a better alternative to attempted limb salvage, especially when risk of systemic
                        complications is high or when the salvaged limb will be less functional than a
                        prosthesis.<br />Several surgical services must become involved immediately in the care of a
                        patient with a mangled extremity. Attending surgeons from the Trauma Service, the Orthopaedic
                        Service and, as required on an individual basis, Vascular and Plastic Surgery are essential
                        during evaluation, decision making, and treatment. If the mangled extremity is ischemic, every
                        effort must be made to expedite immediate operative intervention -nonviable limbs rarely benefit
                        from arteriography in the Radiology Department, although an OR arteriogram may be
                        valuable.<br />It is essential that the Trauma Attending be directly involved in the care of
                        these patients, to have a direct dialogue with attending surgeons of other disciplines and to
                        maintain the perspective of the entire patient. Time is of the essence! Unless adequately
                        perfused, nerve and muscle become progressively unsalvageable after 4 to 6 hours.</p>
                </div>
                <div class="container-fluid section" id="topic7_4">
                    <p>
                    <h2>Pediatric Trauma Score</h2>
                    </p>
                    <table class='table table-bordered' style="width: 506.6px; height: 100px;">
                        <tbody>
                            <tr style="height: 40px;">
                                <td style="width: 190px; height: 40px;">Weight</td>
                                <td style="width: 254px; height: 40px;">&gt; 20 kg<br />1-20 kg<br />&lt; 20 kg</td>
                                <td style="width: 100.6px; height: 40px;">2<br />1<br />-1</td>
                            </tr>
                            <tr style="height: 40px;">
                                <td style="width: 190px; height: 40px;">Airway</td>
                                <td style="width: 254px; height: 40px;">Normal<br />Maintained<br />Intubated</td>
                                <td style="width: 100.6px; height: 40px;">2<br />1<br />-1</td>
                            </tr>
                            <tr style="height: 40px;">
                                <td style="width: 190px; height: 40px;">Systolic<br />BP</td>
                                <td style="width: 254px; height: 40px;">&gt; 90 mmHg<br />50-90 mmHg<br />&lt; 50 mmHg
                                </td>
                                <td style="width: 100.6px; height: 40px;">2<br />1<br />-1</td>
                            </tr>
                            <tr style="height: 40px;">
                                <td style="width: 190px; height: 40px;">CNS</td>
                                <td style="width: 254px; height: 40px;">Awake<br />Obtunded<br />Coma</td>
                                <td style="width: 100.6px; height: 40px;">2<br />1<br />-1</td>
                            </tr>
                            <tr style="height: 40px;">
                                <td style="width: 190px; height: 40px;">Open<br />Wound</td>
                                <td style="width: 254px; height: 40px;">None<br />Minor<br />Major</td>
                                <td style="width: 100.6px; height: 40px;">2<br />1<br />-1</td>
                            </tr>
                            <tr style="height: 40px;">
                                <td style="width: 190px; height: 40px;">Skeletal<br />Trauma</td>
                                <td style="width: 254px; height: 40px;">No fractures<br />1 to 49<br />Open wounds or
                                    multiple</td>
                                <td style="width: 100.6px; height: 40px;">2<br />1<br />-1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="container-fluid section" id="topic7_5">
                    <p>
                    <h2>Injury Severity Scoring</h2>
                    </p>
                    <p style="text-align:justify;">The Injury Severity Scoring and New Injury Severity Scoring is a
                        process by which complex and variable patient data is reduce to a
                        single number and is intended to accurately represent the patients’
                        degree of critical illness. It is an anatomic scoring system that provides
                        an overall score for patients with multiple injuries. The Abbreviated
                        Injury Scale is an anatomical scoring system that provides a reasonably
                        accurate ranking of the severity of injury from 1 being minor to 6 being
                        non-survivable. Organ Grading Scales were developed to provide
                        a common nomenclature by which physicians may describe injuries
                        sustained and their severity. Revised Trauma Score is a physiological
                        scoring system with high inter-rater reliability and demonstrated
                        accuracy in predicting death. We currently collect AIS/ISS/NISS. For
                        more information on these scoring systems, access the trauma library
                        under Trauma Scoring Systems for more resources.</p>
                </div>
                <div class="container-fluid section" id="topic7_6">
                    <p>
                    <h2>Organ Grading Scale</h2>
                    </p>
                    <div class="imgDimensions">
                        <img src='./images/4.png'>
                    </div>
                    <div class="imgDimensions">
                        <img src='./images/5.png'>
                    </div>
                    <div class="imgDimensions">
                        <img src='./images/6.png'>
                    </div>
                    <div class="imgDimensions">
                        <img src='./images/7.png'>
                    </div>
                    <div class="imgDimensions">
                        <img src='./images/8.png'>
                    </div>
                    <div class="imgDimensions">
                        <img src='./images/9.png'>
                    </div>
                    <div class="imgDimensions">
                        <img src='./images/10.png'>
                    </div>
                </div>
                <div class="container-fluid section" id="Burns">
                    <p>
                    <h1 class="h1red">Burns</h2>
                    </p>
                </div>

                <div class="container-fluid section" id="topic8_1">
                    <h2>Burn Evaluation </h2>
                    <div>
                        <p>Extent of Burn</p>
                        <ul>
                            <li>Rule of 9's: appropriate for initial, rough approximation, but lacks
                                sensitivity for anatomic proportionality in infants, children and adults. The body is
                                divided into zones of 9% or multiples of 9. </li>
                            <li>Rule of Palms:helpful for irregular, noncontiguous burns. Palm and
                                fingers of the hand represent 1% TBSA. </li>
                            
                        </ul>
                        <p>Lund Browder Diagrams: </p>
                        <p>&ensp; &ensp; &ensp; Burn Surface Area Calculation (Lund-Browder)</p>
                        <div style="display:flex;">
                            <input style="width: 10%;" type="text" class="form-control" readonly> 
                            <p style="margin-left: 5px;">2nd degree +</p> 
                            <input style="width: 10%;" type="text"
                                class="form-control" readonly> <p style="margin-left: 5px;">3rd degree = </p>
                                 <input style="width: 10%;" type="text" class="form-control"
                                readonly><p style="margin-left: 5px;"> % TBSA Burn </p></div>
                        <div class="imgDimensions"><img src="./images/burns_1.png" alt="burns chart" width="800"
                                height="800"></div>

                        <p><b>Fluid Resuscitation for all burns ≥ 20% TBSA</b></p>
                        <p>
                            <u>Step 1</u>: Total LR given within 24 hours of burns -<br>
                            &ensp; &ensp; &ensp; &ensp;  &ensp; &ensp;3mL x kg x % burn<br>
                            &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;4mL x kg x % burn (HV electrical burns)<br>
                            ** D5LR MIVF should run concurrently in patients < 30kg
                            <u>Step 2</u>Infusion Rate (time starts from initial burn event)<br>
                            &ensp; &ensp; &ensp; &ensp;  &ensp; &ensp;3mL x kg x % burn<br>
                            &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;4mL x kg x % burn (HV electrical burns)<br>
                            <b><u>UOP Goal</u>:  0.5 - 1.0 ml/kg/hr</b>
                            &ensp; &ensp; &ensp; &ensp;  &ensp; &ensp;*Increase /Decrease LR by 10% to maintain UOP goal<br>
                            &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;*Use Vasopressor for hypotension, NO FLUID BOLUS<br>
                            <img src="./images/burns_2.png" alt="Rule of nines" width="800" height="800">
                        </p>
                        
                    </div>
                    
                            <!-- <h2>Burn Evaluation</h2> -->
                            <p>Depth of Burn</p>
                            <ul>
                                <li>Superficial/First degree: not calculated in TBSA%.</li>
                                <li>Partial thickness/Dermal/Second degree.</li>
                                <li>Superficial: wet, red, painful, tender. </li>
                                <li>Deep: mottled pink/white, moderately tender, may not blanch, delayed capillary refill</li>
                                <li>Full thickness/Third degree.</li>
                                <li>White, brown, or black.</li>
                                <li>Do not blanch, waxy, decreased sensation or insensate.</li>
                            </ul>
                    
                        <!-- <div>
                            <p>The Cincinnati hospital specializes in burns and long-term burn rehabilitative
                                cases associated with pediatric burn injuries.</p>
                            <div class="imgDimensions"><img src="./images/burns_2.jpg" alt="Referral criteria chart"
                                    width="800" height="800"></div>
                        </div> -->
                        <p>Time and Temperature Relationship to Severe Burns</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" colSpan = "2">Water Temp</th>
                                    <th scope="col">Time for 3 degree burn to occur</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center">155 F</td>
                                    <td style="text-align:center">68 C</td>
                                    <td style="text-align:center">1 second</td> 
                                </tr>
                                <tr>
                                    <td style="text-align:center">148 F</td>
                                    <td style="text-align:center">64 C</td>
                                    <td style="text-align:center">2 seconds</td> 
                                </tr>
                                <tr>
                                    <td style="text-align:center">140 F</td>
                                    <td style="text-align:center">60 C</td>
                                    <td style="text-align:center">5 seconds</td> 
                                </tr>
                                <tr>
                                    <td style="text-align:center">133 F</td>
                                    <td style="text-align:center">56 C</td>
                                    <td style="text-align:center">15 seconds</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">127 F</td>
                                    <td style="text-align:center">52 C</td>
                                    <td style="text-align:center">1 minute</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">124 F</td>
                                    <td style="text-align:center">51 C</td>
                                    <td style="text-align:center">3 minutes</td> 
                                </tr>
                                <tr>
                                    <td style="text-align:center">120 F</td>
                                    <td style="text-align:center">48 C</td>
                                    <td style="text-align:center">5 minutes</td> 
                                </tr>
                                <tr>
                                    <td style="text-align:center">100 F</td>
                                    <td style="text-align:center">37 C</td>
                                    <td style="text-align:center">Safe temp for bathing</td> 
                                </tr>
                                
                            </tbody>
                        </table>
                        <p>Burn Admission Criteria </p>
                        <ul>
                                <li>>5% TBSA.</li>
                                <li>Any burn involving a child less than 2 years old./li>
                                <li>Any full thickness injury. </li>
                                <li>Suspected abuse.</li>
                                <li>Burns involving face, perineum, hands, feet, genitalia, major joints</li>
                                <li>Burns from high voltage sources (electrical, lightning).</li>
                                <li>Chemical burns.</li>
                                <li>Inhalation injury.</li>
                                <li>Associated blunt or penetrating trauma.</li>
                                <li>Circumferential burns</li>
                            </ul>

                    </div>
                    <div class="container-fluid section" id="topic8_2">
                    <h2>Transfer to Shriners </h2>
                    <div>
                        <!-- <p>Shriners Hospital for Children-Cincinnati
                            Recommendations - Care of Thermal Burns
                            &ge; 20% Total Body Surface Area</p> -->
                        <div class="imgDimensions"><img src="./images/burns_3.png" alt="shriners hospital" width="800"
                                height="800"></div>
                    </div>
                    <div>
                        <!-- <h3>Schedule an Appointment</h3>
                        <p>There are three easy ways to schedule an appointment:</p>
                        <ol>
                            <li> Complete this form and <strong>fax</strong> to: 513-872-6143</li>
                            <li><strong>CALL:</strong> 513-872-6122</li>
                            <li>Complete this form and <strong>mail</strong> with Attention to: Outpatient Department,
                                ML 130 </li>
                        </ol> -->
                        <div class="imgDimensions"><img src="./images/burns_4.png" alt="schedule patient info"
                                width="800" height="800"></div>
                    </div>
                </div>
                <div class="container-fluid section" id="topic8_3">
                    <h2>Electrical Injury </h2>
                    <div>
                        <div class="imgDimensions"><img src="./images/burns_5.png" alt="electrical injury" width="800"
                                height="800"></div>
                    </div>
                    <div>
                        <!-- <div class="imgDimensions"><img src="./images/burns_6.jpg" alt="class of evidence" width="800" height="800"></div> -->
                    </div>
                </div>
                <div class="container-fluid section" id="topic8_4">
                    <h2>Inhalation Injury </h2>
                    <div>
                        <p><strong>Guidelines for Management of Patients with Inhalation Injury</strong></p>
                        <p>Look for the following clues to inhalation injury:</p>
                        <ul>
                            <li>Increased respiratory rate</li>
                            <li>Hoarseness</li>
                            <li>Burned in enclosed space</li>
                            <li>Altered mental status</li>
                            <li>Head and neck burns</li>
                            <li>Singed nasal hairs</li>
                            <li>Inflamed oral mucosa</li>
                            <li>Carbonaceous sputum</li>
                        </ul>
                        <p>Indications for intubation:</p>
                        <ul>
                            <li>Compromised upper airway patency</li>
                            <li>Need for ventilatory support as manifested by poor gas
                                exchange or increased work of breathing</li>
                            <li>Compromised mental status</li>
                            <li>Correlating the history and clinical findings comprise the
                                most practical approach to determining the need
                                for intubation</li>
                        </ul>
                        <p>Important considerations regarding the pediatric airway:</p>
                        <ul>
                            <li>Remember that the larynx is more cephalad</li>
                            <li>Children deteriorate faster than adults in terms of upper
                                airway edema and alveolar-capillary. Once an airway is
                                established, it is critically important to secure the airway
                                well, especially in patients with facial burns, to avoid
                                unintentional extubation</li>
                            <li>Repeated intubation attempts may cause edema/
                                obstruction</li>
                            <li>Experience in pediatric intubation is needed</li>
                        </ul>
                        <p>Carbon monoxide (CO) toxicity:</p>
                        <ul>
                            <li>CO is a byproduct of combustion that displaces O2 from the
                                Hgb molecule</li>
                            <li>It has 250X the affinity of O2 for Hgb, therefore shifting the
                                Hgb-O2 curve to left</li>
                            <li>It impairs O2 unloading at tissue level</li>
                            <li>It also causes a switch to anaerobic metabolism with severe
                                metabolic acidosis</li>
                            <li>Suspect CO toxicity with persistent metabolic acidosis
                                despite adequate volume resuscitation</li>
                            <li>The PaO2 may be normal since the amount of O2 dissolved
                                in arterial plasma is normal</li>
                            <li>The O2 sat (measured O2 saturation of Hgb) may be normal
                                as read by the standard pulse oximeter (which cannot
                                differentiate hemoglobin saturated with oxygen from
                                hemoglobin saturated with CO)</li>
                        </ul>
                        <p>Therapy of CO Toxicity:</p>
                        <ul>
                            <li>All patients with inhalation injury should be treated with
                                100% O2</li>
                            <li>This lowers T1/2 of CO to 30 min (whereas it would be 2-3 h
                                in room air)</li>
                            <li>Treat all major burns with 100% O2 until CO toxicity is ruled
                                out or CO level returns to normal</li>
                            <li>Hyperbaric Oxygen (HBO) Therapy (2-3 atm) leads to even
                                more rapid displacement of CO</li>
                            <li>Consider HBO for CO&gt;50%, severe neurological
                                compromise, not responding to 100% O2</li>
                            <li>The hyperbaric oxygen chamber can be accessed through
                                Sentara Therapy Center - (855) 852-9066</li>
                        </ul>
                        <p>Cyanide Toxicity:</p>
                        <ul>
                            <li>This results from burning of synthetics (e.g., polyurethane)
                                leads to production of hydrocyanide gas</li>
                            <li>Cyanide binds to the cytochrome system, inhibiting cellular
                                metabolism and ATP production</li>
                            <li>There is a shift to anaerobic metabolism with profound
                                metabolic acidosis and obtundation</li>
                            <li>Cyanide antidote: Sodium Thiosulfate (8 g IV if <12 yo, 12.5 g IV if> 12 yo)</li>
                            <li>The antidote converts cyanide to non-toxic, excretable
                                thiocyanate</li>
                        </ul>
                        <div>
                            <h2><p>Inhalation Injury Summary:</p></h2>
                            <div class="imgDimensions"><img src="./images/burns_7.jpg" alt="summary" width="800"
                                    height="800"></div>
                                    <p>* Consider contacting the Virginia Poison Center 1 (800) 222-1222 for ongoing recommendations regarding monitoring, repeat dosing, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid section" id="topic8_5">
                    <h2>Burn Care Power Plan </h2>
                    <div>
                        <div class="imgDimensions"><img src="./images/burns_8a.jpg" alt="burn care power plan"
                                width="800" height="800"></div>
                    </div>
                    <div>
                        <div class="imgDimensions"><img src="./images/burns_8b.png" alt="burn care power plan"
                                width="800" height="800"></div>
                    </div>
                </div>
                <div class="container-fluid section" id="topic8_6">
                    <h2>Burn Care Guidelines</h2>
                    <ol><b>
                    <li><u>Burns ≤5% TBSA</u></li>
                        <ol type="a">
                            <li>Consult Surgery.</li>
                            <li>May scrub in the ED with appropriate sedation administered before procedure (intranasal or moderate sedation).</li>
                            <li>Intact blisters may be left in place and bacitracin applied 3-4 times per day.</li>
                            <li>If blisters are sloughed, trim excess and apply Mepilex® AG.</li>
                            <li>May discharge home with follow-up in 5-7 days with Surgery Clinic at 668-7703.</li>
                            <li>Avoid Silvadene</li>

                        </ol>
                    <li><u>Burns 5% - < 20% TBSA</u></li>
                    <ol type="a">
                            <li>Admit to Trauma Service.</li>
                            <li>Begin maintenance IVF with D5LR as needed.</li>
                            <li>Monitor urine output: goal 0.5 - 1mL/kg/hr.</li>
                            <li>Consider Foley catheter for larger surface area burns.</li>
                            <li>Pain control: Motrin, Tylenol, Hycet, Oxycodone, or Morphine prn.</li>
                            <li>Face/Head: apply Bacitracin.</li>
                            <li>Ears: apply Sulfamylon.</li>
                            <li>Below head: apply Bacitracin with telfa and kerlex wraps.</li>
                            <li>Consider NGT for large areas, deep partial thickness or if poor PO.</li>
                            <li>Monitor calorie intake.</li>
                            <li>Add multivitamin, Zinc, and Vitamin C as needed.</li>
                            
                        </ol>
                    <li><u>Burns ≥ 20% TBSA</u></li>
                    <ol type="a">
                            <li>Admit to Trauma Service (PICU)</li>
                            <li><u>Begin fluid resuscitation</u></li>
                            <ul>
                                <li>LR 3mL x kg x % TBSA (total resuscitation volume over 24 hours).
                                Infuse 1⁄2 of total resuscitation volume within 1st 8 hours from time of injury. Infuse remaining 1⁄2 of resuscitation volume over next 16 hours.</li>
                                <li><u>High Voltage Electrical burns (all ages):</u>
                                LR 4ml x kg x %TBSA (total resuscitation volume over 24 hours).
                                Infuse 1⁄2 of total resuscitation volume within 1st 8 hours from time of injury. Infuse remaining 1⁄2 of resuscitation volume over next 16 hours.</li>
                                <li><u>Children < 30 kg:</u> Concurrently run D5LR 3 using the “4-2-1 Rule” <br>
                                &ensp; &ensp;  &ensp; &ensp;&ensp; &ensp;  &ensp; &ensp;< 10 kg: 4 ml/kg/hr <br>
                                &ensp; &ensp;  &ensp; &ensp;&ensp; &ensp;  &ensp; &ensp;10-20 kg: 40 ml/hr plus 2 ml/kg for each kg over 10 
                                &ensp; &ensp;  &ensp; &ensp;&ensp; &ensp;  &ensp; &ensp;>20-30 kg: 60ml/hr plus 1 ml/kg for each kg over 20 </li>
                            </ul>
                            <li>Treat hypotension with a Vasopressor.</li>
                            <li>DO NOT FLUID BOLUS PATIENTS FOR HYPOTENSION.</li>
                            <li>Insert Foley catheter to monitor strict l&O.</li>
                            <li>Urine output goal: 0.5 - 1 ml/kg/hr.</li>
                            <li>Titrate IV fluids up by 10% or down by 10% to maintain urine output goal</li>
                            <li>NPO.</li>
                            <li>Consider transfer to Shriner's hospital for burns >25% TBSA.</li>
                            <li>Electrical burns should have an EKG, CK-MB Troponin & admitted for overnightobservation.</li>
                            <li><u>Give DTap:</u> < 7 years and has received < 3 doses OR unknown status.</li>
                        </ol>
                    </b>
                    </ol>
                </div>
               
                <div class="container-fluid section" id="SpecialIssues">
                    <p>
                    <h1 class="h1red">Special Issues</h2>
                    </p>
                </div>

                <div class="container-fluid section" id="topic10_1">
                    <p>
                    <h2>PICU Care & Collaboration</h2>
                    </p>

                    <p>
                        The severely injured trauma patient will be cared for in the PICU
                        collaboratively by the PICU team and the Trauma Service. The patient
                        will be admitted to the Trauma Attending on call. The Trauma Service
                        is responsible to place basic admission orders under the Trauma
                        Admission Powerplan and will add any special requests. The remainder
                        of patient care orders will be written by the PICU team. The Trauma
                        Service will be available to render care to the patient at all times and
                        will make daily patient rounds. The Trauma Service will facilitate minor
                        and major care decisions for the patient, including calling consultations.
                        When the patient is ready to be transitioned out of PICU, the Trauma
                        Service will write complete transfer orders. If discharge from PICU
                        occurs, the Trauma Service is responsible for the discharge.
                    </p>
                    <p>
                        The PICU Surgical Co-Directors is responsible for working with the
                        medical and nursing leadership of the PICU to establish policies and
                        procedures related to the care of children with surgical needs. In
                        addition, the Surgical Co-Directors will actively participate in unitfocused quality improvement
                        and patient safety activities that impact
                        the care of surgical patients, including regular review of quality and
                        safety data and participation in quality initiatives, such as reducing
                        waste and increasing efficiency.
                    </p>
                    <p>
                        The Surgical Co-Directors will help define the role of surgical and
                        surgical sub-specialty residents and mid-level providers (MLP) in the
                        PICU and will be responsible for addressing concerns regarding the
                        performance or professional interactions of these providers while they
                        are working in the PICU. The Surgical Co-Directors will also participate
                        in decision-making regarding the selection of equipment, staffing and
                        budget for the unit. Requirements for the position includes critical care
                        training during residency or fellowship and/or documented expertise
                        in the perioperative care of infants and children who are surgical
                        patients via clinical experience (minimum of 5 years). This critical care
                        expertise may also be demonstrated by having board-certification
                        or a certified of added qualification in surgical critical care from the
                        American Board of Surgery, or other ABMSS board which offers critical
                        care certification (e.g., Pediatrics or Anesthesiology).
                    </p>
                    <p>
                    <h2>PICU PI/QI Activities</h2>
                    </p>

                    <p>
                        The physician and nursing staff of the PICU, along with the respiratory
                        therapy and pharmacy staff dedicated to the PICU, actively participate
                        in all PI/QI projects within the PICU. The physician leadership of the
                        PICU, the Medical Director, the Surgical Co-Directors and leadership
                        from nursing, pharmacy, social work and respiratory therapy meet at
                        least monthly at the scheduled PICU Management Meeting and more
                        frequently on an ad hoc basis to review the data and collaborate on
                        improvements. These include:
                    </p>
                    <ul>
                        <li>
                            Monitoring and advocating hand hygiene
                        </li>
                        Vigilance for Hospital Acquired Conditions, specifically:
                        <ul>
                            <li>
                                CAUTI
                            </li>
                            <li>
                                CLABSI
                             </li>
                            <li>
                                Ventilator Associated Pneumonia
                            </li>
                            <li>
                                 Unplanned Extubation
                            </li>
                             <li>
                                 Surgical Site Infection
                            </li>
                            <li>
                              Skin breakdown
                            </li>
                            <li>
                                PIVIE
                            </li>
                        </ul>
                        <li>
                            Review of death & CPR events
                        </li>
                        <li>
                            Review of hospital-wide initiatives (mislabeled specimen,
                            compliance with timeouts, med errors etc.)
                        </li>
                        <li>
                            Policy review and changes
                        </li>
                        <li>
                            Development of protocols and practice guidelines related
                            to PICU patients
                        </li>
                        <li>
                            Communication from other hospital committees (Pharmacy,
                            Mortality Review, SAC , PIC)
                        </li>

                    </ul>
                </div>

                <div>

                <div class="container-fluid section" id="topic10_2">
                    <p>
                    <h2>Acute Care Phase</h2>
                    </p>
                    <p>
                    It is the policy of the CHKD Trauma Program that trauma patients be admitted to an acute care nursing unit that has pediatric trauma equipment in all appropriate sizes immediately available. 
                    Patients who do not require PICU monitoring will be cared for on the following inpatient units: 7C, Neuroscience, 8B, 8C, TCU.

                    </p>
                    <br>
                    <p>
                    Emergent ED to OR handoff process for trauma patients:
                    </p>
                   
                    
                    <ol type="1" class="tab1">
                        <li >OR Life/Limb team and OR AOC will respond to all Level 1 trauma activations when in-house OR team unavailable.</li>
                        <li>Nursing Supervisor will communicate patient status/needs to the OR charge RN and discuss additional needed resources</li>
                        <li>OR charge will communicate patient information to anesthesia and identify any additional needs determined by anesthesia provider.</li>
                        <li>Nursing supervisor will travel with the patient to radiology and provide patient status updates to the OR charge RN.</li>
                        <li>Trauma team will transport patient directly to OR room 3 (or other designated OR suite).</li>
                        <li>Handoff of patient information will occur in the OR suite with trauma team and receiving OR team.</li>
                        <li>Trauma team will remain with the patient and provide care until a safe handoff occurs and the additional resources needed for the OR team are available to provide that safe handoff.</li>
                    </ol>
                </div>
<!-- New topic -->
                <div  class="container-fluid section" id="topic10_3">
                <p>
                <h2>I-STAT Use in Critical Trauma (IO)</h2>
                </p>
                <p>
                    <b>
                    Policy:
                    </b>
                    <p>
                    It is the policy of the CHKD laboratory and point of care testing sites to identify, document and notify the Clinical Laboratory Management, Point of Care Testing Coordinator, or charge technologist of all IO (intra osseous blood sample) use in the Trauma Unit on the ISTAT (or other POC devices) if traditional sources are not available due to the nature of the trauma.
                    </p>
                </p>
                <p>
                        <b>Procedure:</b>
                    <ol>
                        <li>The trauma team will utilize either the MRN or Trauma number associated with the specific patient.</li>
                        <li>The CG8 cartridge should be utilized. Upon the request of sample source, OTH is to be entered. All parameters should be selected. Since charges will not be posted, there is not a compliance issue.</li>
                        <li>This number will be placed on a Point of Care Correction form with the patient’s identification label (minimum of 2 patient identifiers). This form is to be sent to the POCT coordinator in the lab for follow-up and any credits that need to be given.</li>
                        <li>In the case where the IO sample was performed as another source (other than OTH), a correction form must be completed and sent to the POCT coordinator as soon as possible. Proper EMR documentation/correction will be completed and all charges associated with this test will be credited.</li>
                        <li>Results that post to the EMR should be tagged with the following comment:</li>

                    </ol>
                    <p>
                    <b>Interpret results with caution: Intraosseous (IO) sample is not FDA cleared for ISTAT use. Sample to be used in extreme trauma cases only.</b>
                    </p>
                </p>

                </div>
                <div class="container-fluid section" id="topic10_4">
                    <p>
                    <h2>CT Contrast Infusion via Intraosseous Line</h2>
                    </p>
                    <p>
                        In the<b> emergent situation </b> in a multisystem trauma patient who has only
                        intraosseous access, CT contrast may be infused via hand injection into
                        the I/O. The protocol is as follows:
                    </p>
                    <ol>
                        <li>
                            Flush IO line with 10ml IO saline. If IO line does not flush easily, do
                            not use.
                        </li>
                        <li>
                            If patient is unconscious, no analgesia is required.

                        </li>
                        <li>
                            If patient is conscious and responsive to pain, IO 1% epinephrine
                            preservative free Lidocaine should be administered just prior to
                            contrast as per the protocol below:

                            <ol type = "a">
                                <li>
                                    Lidocaine dose 0.5mg/kg, not to exceed 40mg.
                                </li>
                                <li>
                                    Slowly infuse Lidocaine over 2 minutes.
                                </li>
                                <li>
                                    Allow Lidocaine to dwell in IO space for 1 minute
                                </li>
                                <li>
                                    Flush with 5-10 mL of normal saline
                                </li>
                                <li>
                                    Slowly administer subsequent Lidocaine (half the initial
                                    dose) IO over 1 minute.
                                </li>
                                <li>
                                    Inject contrast through IO line as quickly as possible.
                                </li>
                                <li>
                                    The ED Attending or Trauma Surgeon will inject contrast
                                    by hand under the supervision of the CT technologist.
                                </li>
                            </ol>
                        </li>
                        <li>
                            After contrast has been infused, flush line with 20 ml of normal
                            saline.
                        </li>

                    </ol>
                </div>

                <div class="container-fluid section" id="topic10_5">
                    <p>
                    <h2>Protocol for Inpatient Procedures Under Anesthesia (Not Sedation Service)</h2>
                    </p>

                    <p>
                    <ol>
                        <li>
                            Contact appropriate radiology department for time availability.
                            <br>
                            <ol type = "a">
                                <li>
                                    MRI @ 8-7251
                                </li>
                                <li>
                                    CT @ 8-7920
                                </li>
                                <li>
                                    Fluoroscopy @ 8-9290
                                </li>
                            </ol>
                            
                            
                        </li>
                    </ol>
                    <p>
                        <b>
                                Exception for after hours:
                            </b>
                            <br>
                            &ensp; &ensp;  &ensp; &ensp; Call radiology department @ 8-9290 if scheduling required
                            M-F 11 p.m. - 6 a.m. or weekends 5 p.m.– 8 a.m.
                    </p>
                    <ol start ="2">
                        <li>
                            Contact and consult with the anesthesiologist regarding the
                            planned procedure.
                            <ol type ="a">
                                <li>
                                    <b> Monday - Friday - </b> Call OR Charge Desk @ 8-7344 for the
                                    Anesthesia Board Runner
                                </li>
                                <li>
                                    <b>
                                        Evenings/Weekends -
                                    </b>
                                    Call hospital operator to contact
                                    the Anesthesiologist On Call
                                </li>
                                <li>
                                    State the urgency of the study/procedure - provide
                                    information that will support findings that will alter
                                    management or therapy for the patient. If unable
                                    to provide this information, the attending will need to
                                    speak with the anesthesiologist.
                                    Note: Contact anesthesiology ASAP to ensure same-day
                                    scheduling.
                                </li>
                                <b>Note:</b> Contact anesthesiology <b>ASAP</b> to ensure same-day scheduling.
                            </ol>
                        </li>
                        <li>
                            Provide the following patient information:
                            <ol type = "a">
                                <li>
                                    Name
                                </li>
                                <li>
                                    Age
                                </li>
                                <li>
                                    Medical record number
                                </li>
                                <li>
                                    NPO status
                                </li>
                                <li>
                                    Type of study/procedure requested under anesthesia
                                </li>
                                <li>
                                    Pertinent medical history
                                </li>
                                <li>
                                    Availability of a parent or guardian to provide consent
                                </li>
                            </ol>
                        </li>
                        <li>
                            For non-urgent studies - Call the Surgical Services Clinical
                            Coordinator @ 8-7349 to schedule the study/procedure.
                        </li>
                    </ol>
                    </p>
                </div>

                <div class="container-fluid section" id="topic10_6">
                    <p>
                        <h2>SNGH Registration process for CHKD Patients going to SNGH for Radiology Testing</h2>
                    </p>
                    <p>
                    <b>SNGH Central Registration will handle all CHKD patient registrations Monday through Saturday during the hours of 0600-2130.</b>
                    </p>
                    <ul>
                            <li>CHKD will call 388-6420 to notify SNGH Central Registration that a CHKD patient requires a diagnostic test or procedure at SNGH.
</li>
                            <li>The CHKD’s registration staff will fax a signed Sentara consent form, order and demographics form to 390-2598 or 481-8089.</li>
                            <li>SNGH registration team will follow-up with entering the information in HBOC in a (timely/expedient) manner.</li>
                            <li>SNGH registration team will complete a full registration with the patient Information entered as the guarantor for ED outpatients. SNGH uses their established CHKD account number (080000755) as the guarantor for established patients. CHKD ED patients admit status may not be established until after the diagnostic study or procedure and the accounts will be reconciled by SNGH and CHKD finance department once inpatient or outpatient status is established.</li>
                            <li>The SNGH registration team will print the Sentara face sheet, labels and armbands to have ready once the patient arrives.</li>
                            <li>As a courtesy CHKD will call If time allows to notify SNGH Registration of the patient’s departure to SNGH.</li>
                            <li>SNGH registration will enter the patient in AHI.</li>
                    </ul>
                    <p>

                     <b>*Note:</b> In the event no one answers in the registration areas, please page the TC’s at 554-6171 D’Angela - Central Registration,
                      Sean Johnson - Emergency Department at 475-1764 and Daisy - Cardiac/Surgery at 475-2337.
                    </p>

                    <p>
                        <b>SNGH Registration staff will handle all CHKD patient registration after hours and weekends 2130- 0600.</b>
                    </p>

                    <ul>
                            <li>CHKD Registration will call SNGH ED Registration at 388-1451 or 388-1684</li>
                            <li>The fax for SNGH ED is 388-4500</li>
                            <li>SNGH ED Registration will follow the same steps above In completing the registration process.</li>

                    </ul>

                    <p>
                            <b>Once SNGH registration has been notified and the registration process has been started a CHKD staff member will then call the designated department listed below:</b>
                    </p>
                    <ul>
                                <li>Cat Scan directly 24/7 at 388-4964 or 388-2368.</li>
                                <li>Ultrasound Monday-Friday at 388-4960 during the hours of 7am -11pm.</li>
                                <ul>
                                <li>Saturday and Sunday 7 a.m. to 7 p.m. at 388-4960.</li>
                                <li>After hour calls should be made to 388-3095.</li>
                                </ul>
                                <li>Panorex X-rays call 388-3095.</li>
                                <li>Nuclear Medicine Monday-Friday 388-4961 during the hours of 7 a.m. - 4 p.m.</li>
                    </ul>
                    <p>
                    The SNGH technologist will need basic information for the exam and then the technologist will give you the time to bring the patient over. 
                    Patients will be escorted by the Nurse from CHKD directly to the department. 
                    Once the patient gets to the department, the SNGH technologist will notify their registration team to bring the labels, face sheet, and armband.
                    </p>
                    <p>
                        <b><u>Checklist:</u></b>
                    </p>
                    <ul>
                        <li>All required registration paperwork must be faxed over before patient arrives for exam.</li>
                        <li>Written order must accompany the patient.</li>
                        <li>Must have adequate history with written order.</li>
                        <li>If IV contrast needed, start IV prior to taking the patient over.</li>
                        <li>Send copy of medication reconciliation sheet.</li>
                        <li>DO NOT send patient unless final arrangements have been made.</li>
                        <li>If scan is no longer needed, call directly to the department.</li>
                    </ul>
                    <p>
                                <b>Note:</b>All exams performed at SNGH will be read/dictated by the Radiologist working at SNGH.
                                 A CD of the images will also need to be made immediately and sent with the patient back to CHKD.
                    </p>
                </div>

                <div class="container-fluid section" id="topic10_7">
                    <p>
                    <h2>Guide to Arranging Emergent Angioembolization for CHKD Patients at SNGH</h2>
                    </p>
                    <ol>
                            <li>Call the Interventional Radiology (IR) Attending on call via the doctor’s line at SNGH (388-4000).</li>
                            <ol type = "a">
                                <li>No response from page, ask the operator to call IR Physician on their cell phone.</li>
                                <li>No response from cell phone, ask operator to call 24 hour MCR, Physician line 893-1400.</li>
                            </ol>
                            <li>Call the Pediatric Anesthesiologist.</li>
                            <li><b> Determine the need for blood and arrange to have needed blood products brought with the patient in a blood bank cooler. Anesthesia will bring the blood with the patient and
                                will return it to CHKD if not used.</b>
                            </li>
                            <li>Request that the SNGH IR team prepares the anesthesia equipment for the Pediatric Anesthesiologist (as they are unfamiliar with SNGH and have no tech at night to help them).</li>
                            <li>Request a CD from our radiology department to take with the patient to SNGH of any radiologic studies done at CHKD (likely CT abdomen pelvis – for splenic trauma, etc.; call 668-9290) – this needs to be prepared and go with the patient to SNGH, as the Adult IR Attending on call has no access to the CHKD Radiology system.</li>
                            <li>Arrange patient transfer to the SNGH IR suite via the Nursing Supervisor at the CHKD ED (or the PICU Nursing Supervisor).</li>
                            <li>Notify the PICU Attending if your patient is likely to need admission to the PICU post procedure.</li>
                            <li>The patient is never formally “on paper” transferred to SNGH at any point, so you do not have to write any notes or orders in the Sentara Epic system. Just write your note and admit orders for CHKD.</li>
                    </ol>
                </div>

                <div class="container-fluid section" id="topic10_8">
                <p>
                <h2>Trauma Transfers from SNGH Protocol</h2>
                </p>
               
                    <ol>
                        <li>Call the transfer center at 668-8000 and ask to be connected to the surgery/trauma resident pager.</li>
                        <li>Provide a brief patient history including: mechanism of injury, injuries obtained etc.</li>
                        <li>Fax H&P, most recent progress notes & SNGH case manager contact number to
                            757-668-8860.</li>
                        <li>If unable to be connected through transfer center, contact doctors direct at 668-9999
                            and ask for surgery/trauma NP/PA.</li>
                        <li>Document in chart necessity for pediatric specialized care.</li>
                        
                    </ol>
                    <p><b><u>CHKD process: (includes direct admit to CHKD Inpatient Rehab facility)</u></b></p>
                    <ol>
                    <li>Trauma team will review patient documentation.</li>
                    <li>Trauma team will determine if patient would benefit from transfer to CHKD inpatient
                    trauma team or directly to CHKD Inpatient Rehab Facility.
                    </li>
                    <li>Once accepted, CHKD case manager will contact SNGH trauma case manager.</li>
                    <li>CHKD case manager will request the following additional documents:</li>
                    <ul>
                        <li>Operation reports</li>
                        <li>Specialty consultation reports</li>
                        <li>Last 4 days of lab and radiology studies</li>
                        <li>Current medications</li>
                        <li>Phone number to the SNGH nursing unit the patient is admitted</li>
                        <li>Face sheet /insurance information</li>
                        <li>Parents/caregiver phone number</li>
                    </ul>
                    <li>CHKD case manager will review insurance information and obtain insurance authorization.</li>
                    <li>If the patient has no insurance, CHKD will have to obtain hospital approval to accept patient prior to transfer. CHKD case manager will request approval. 
                    <b>A patient cannot be transferred without insurance approval due to CHKD policy H2101 “Medical Screening Examinations, stabilizations, and transfers as regulated by EMTALA.”</b></li>
                    <li>Once approval is obtained, CHKD trauma team will call the transfer center and nursing supervisor to obtain a hospital bed.</li>
                    <li>CHKD bedside RN will call SNGH bedside RN to receive a patient report before transfer.</li>
                    <li>IF THE PATIENT IS UNDER 18, A PARENT OR LEGAL GUARDIAN MUST BE PRESENT TO
                    SIGN ADMITTING DOCUMENTS. CHKD will not register the patient without legal
                        guardian signature.</li>
                    <li>If possible, patients will be transferred between the hours of 0700-1600 to ensure the
                        132 best care and support for the patients and family.</li>
                    
                    </ol>
                    <p><b><u>General Guidelines (discussed case by case basis)</u></b></p>
                    <ul>
                            <li>Evaluations for CHKD Rehab admissions will be completed by CHKD PT/OT and ST (if appropriate).</li>
                            <li>Patient must not have any surgeries, invasive procedures or radiographic/diagnostic evaluations planned in the near future.</li>
                            <li>CHKD Inpatient Rehab Facility can manage most medical therapies (stable trachs, PICC lines, feeding tubes, dialysis, chemotherapy, transfusions).</li>
                            <li>CHKD Inpatient Rehab Facility will not accept patients on a ventilator or with telemetry requirements.</li>
                    </ul>
              
                </div>

                <div class="container-fluid section" id="topic10_9">
                    <p>
                    <h2>Pregnant Trauma Patient Guidelines</h2>
                    </p>
                    <p>
                        <b>
                            Level 1 Trauma with Viable Pregnancy (>/= 20 weeks EGA)
                        </b>
                    <ol type="a">
                        <li >
                            Call (388-0430) for immediate response
                            (Attending, Resident, L&D Nurse will respond)
                        </li>
                    </ol>
                    <br>
                    <p><b>
                        Level 2 Trauma with Viable Pregnancy (>/= 20 weeks EGA)
                    </b></p>
                    
                    <ol type="a">
                        <li>
                            Call (388-9820) for OB consult
                        </li>
                        <li>
                            CT Chest/Abdomen/Pelvis may be omitted if suspicion of
                            injury is low
                        </li>
                        <li>
                            Patient may be admitted to OB Attending and OB service
                            for fetal monitoring as appropriate.
                        </li>
                        <li>
                            Trauma will be consultant and do serial exams as needed.
                        </li>
                    </ol>
                    <br>
                    <p><b>
                        Any Trauma with Non-Viable Pregnancy (< 20 weeks EGA)
                    </b></p>
                    <ol type = "a">
                        <li>
                            Patient may follow-up with OB Physician if not admitted.
                        </li>
                        <li>
                            Notify patient OB Physician as a courtesy if admitted.
                        </li>
                        <li>
                            If patient has no OB may call (388-9820) if needed.
                        </li>
                    </ol>
                    </p>
                </div>

                <div class="container-fluid section" id="topic10_10">
                    <p>
                    <h2>Helmet Removal Process</h2>
                    </p>
                    <img src="./images/topic_10_10.png" alt="topic10_10" width="800" height="800" />
                    <p><b>* Be aware the helmet and shoulder pads elevate the patients trunk when in the supine position.</b></p>
                    <p>
                    
                </div>

                <div class="container-fluid section" id="topic10_11">
                    <p>
                    <h2>Algorithm for Venous Thromboembolism Prophylaxis in
                        Trauma Patients</h2>
                    </p>

                    <div style="display: inline-block;">
                        <img src="./images/topic_10_11.png" alt="topic10_11" width="80%" height="80%" />
                        <br>
                       
                    </div>
                    
                </div>


                <div class="container-fluid section" id="topic10_12">
                    <p>
                    <h2>Massive Transfusion Protocol Procedure (MTP)</h2>
                    (Refer to MTP Policy #H2266)

                    </p>
                    <p>
                        <b><u>
                        Procedure
                        </u></b>
                        <br>
                    </p>
                   <ol>
                        <li>Activation of MTP requires notification of Transfusion Services. The following situations should prompt the activation of the MTP:</li>
                        <ol type = "a"> 
                        <li>Life-threatening trauma presenting to the Emergency Department.</li>
                        <li>Life-threatening gastrointestinal bleeding presenting to the Emergency Department.</li>
                        <li>Unexpected surgical blood loss</li>
                        <li>Surgeries expected to require massive transfusion.</li>
                        <li>Patients who require transfusion of at least one total blood volume within a 24-hourperiod.</li>
                        </ol>
                        <li>The attending physician or resident designee will determine which patients based on
                            physiology or injury warrant activation of the MTP. A member of the Patient Care Team will call
                            Transfusion Services to activate the MTP.</li>
                        <li>ED Emergency Release: Obtain 2 units of uncrossmatched O negative PRBC’s (packed red
                            blood cells) from the emergency department refrigerator located in the trauma bay (4
                            units available). Transfuse blood immediately @20ml/kg.</li>
                        <li>All other departments: Obtain 2 units of uncrossmatched O negative PRBC’s (packed red blood
                            cells) from Transfusion Services. Transfuse blood immediately @20ml/kg.</li>
                        <li>Transfusion Services will prepare the massive transfusion grouped packs as follows:</li>
                        <ol type="a">
                            <li><u>1st pack:</u> ALL PATIENTS</li>
                                <ul>
                                    <li>4 units PRBC’s (packed red blood cells), 4 units FFP (fresh frozen plasma), 1 unit SDP (single donor apheresis platelets).</li>
                                </ul>
                            <li><u>2nd pack:</u></li>
                                <ul>
                                    <li><b>< 20 kg: </b>2 units PRBC’s (packed red blood cells), 2 units FFP (fresh frozen plasma), 1 SDP (single donor apheresis platelets), and 1 pooled cryoprecipitate.</li>
                                    <li><b>≥ 20 kg: </b>4 units PRBC’s (packed red blood cells), 4 units FFP (fresh frozen plasma), 1 unit SDP (single donor apheresis platelets), and 1 pooled cryoprecipitate.</li>
                                    
                                </ul>
                            <li><u>3rd pack:</u></li>
                                <ul>
                                    <li><b>< 20 kg: </b>2 units PRBC’s (packed red blood cells), 2 units FFP (fresh frozen plasma), 1 SDP (single donor apheresis platelets).</li>
                                    <li><b>≥ 20 kg: </b>4 units PRBC’s (packed red blood cells), 4 units FFP (fresh frozen plasma), 1 unit SDP (single donor apheresis platelets).</li>
                                   
                                </ul>
                        </ol>
                        <li>Transfuse grouped packs in 1:1:1 ratio @10ml/kg.</li>
                        <li>Continue to repeat 2nd and 3rd packs as needed.</li>
                        <li>The MTP will remain in effect until the attending physician or resident designee discontinues the order.</li>
                        <li>Call Transfusion Services to discontinue the MTP.</li>
                        <li>See Appendix 1.</li>
                        
                   </ol>
                   <p><b><u>Patient Identification</u></b></p>
                   <li>Strict compliance with product/patient identification procedures is mandatory, regardless of time pressures.</li>
                   <li>All patients MUST be identified by two independent and unique identifiers. The unique identifiers MUST be physically attached to the patient before specimen collection no matter how extreme the patient’s clinical state.</li>
                   <li>In the event that a trauma patient cannot be positively identified, the trauma identification system will be used.</li>

                   <p><b><u>Ongoing Communication</u></b></p>
                   <li>The Attending Physician will designate one member of the healthcare team to be the “communicator” with personnel from the Transfusion Service.</li>
                   <li>The communicator should be able to provide the following information:</li>
                        <ol type ="a">
                            <li>Responsible physician/surgeon.</li>
                            <li>Patient location.</li>
                            <li>Patient’s medical record number or trauma ID number, patient’s name (this may be a trauma ID number, gender, date of birth if known).</li>
                            <li>Patient’s weight (may be estimated using the Broselow tape).</li>   
                        </ol>
                   <li>In order to best fulfill ongoing/changing patient needs, Transfusion Service must be informed regularly of the status of the patient at a minimum every 30 minutes until ongoing transfusion is no longer necessary.</li>
                   <li>The attending physician or a member of the patient care team must inform Transfusion Services of any change in patient needs, any change in patient location, and in the case of a trauma patient, the end of a trauma code</li>
                   <li>The Director of the Transfusion Service will be notified of any special needs.</li>

                   <p><b><u>Determination of the Patient’s Blood Type</u></b></p>
                   <ol>
                        <li>The Patient Care Team must make every effort to obtain a properly identified and labeled blood specimen for blood type and crossmatch before transfusion. The patient must be identified with a blood bracelet and the tube labeled with a blood bank number.</li>
                        <ol type="a">
                            <li>The Patient Care Team must inform the Transfusion Service if the blood sample for type and crossmatch was obtained after transfusion.</li>
                            <li>Historical ABO groups are not acceptable for unit selection.</li>
                            <li>Type specific uncrossmatched blood can only be issued if the patient has a completed type and screen by the CHKD Transfusion Service at the time of the emergency.</li>
                        </ol>
                        <li>Properly identified recipients whose ABO group has been determined by our facility within 3 days of emergency issue may receive type specific uncrossmatched blood.</li>
                        <li>It is not acceptable to take a verbal blood type from medical staff or from personnel transporting the patient from an outside facility.</li>
                        <li>Patients who receive an unknown designation will not have their identification corrected to their actual identifiers for at least 24 hours in order to avoid confusion with specimen processing.</li>
                        <ol type = "a">
                            <li>Once a patient’s identifiers are changed from Unknown to actual, a new sample MUST be obtained for blood type and antibody screen if the need for future blood products is anticipated.</li>
                        </ol>
                        <li>When transfusion support is necessary before completion of the type and screen and crossmatch, group O negative red cells and group AB plasma and platelets will be issued.</li>
                        <li>When blood products are transfused before a type and crossmatch are completed the Transfusion Service must be notified that the patient was transfused prior to collecting the specimen.</li>
                   </ol>

                   <p><b><u>Blood Products Transported from Outside Institutions</u></b></p>
                   <ol>
                        <li>It is never acceptable to use blood products based on historic blood type.</li>
                        <li>Untransfused blood products transported with a patient from an outside hospital MUST be removed and delivered immediately to the Transfusion Service.</li>
                        <li>The exception to this is untransfused blood products transported with a patient from Sentara Norfolk General Hospital may continue to be infused.</li>
                   </ol>
                   <p><b><u>Laboratory Monitoring during Activation of MTP</u></b></p>
                   <ol>
                        <li>f the patient has a type and screen ordered as part of an initial trauma evaluation it does not need to be re-ordered upon activation of the MTP.</li>
                   </ol>
                   <p><b><u>Recommendations for types of Blood Products</u></b></p>
                   <ol>
                        <li>Transfusion of products can be based on the results of lab tests and/or established ratios of plasma-to-RBC and platelet-to-RBC.</li>
                        <li>Every effort will be made to provide Rh-negative products to Rh-negative recipients.</li>
                   </ol>
                   <p><b><u>Blood Warming</u></b><p>
                   <ol>
                        <li>All patients undergoing massive transfusion must receive IVF, red blood cells and plasma through a rapid fluid warmer.</li>
                        <li>Do NOT use the rapid fluid warmer if transfusing platelets, cryoprecipitate or granulocyte as these products can be rendered less effective.</li>
                   </ol>
                   <p><b><u>Intraoperative Blood Recovery</u></b></p>
                   <ol>
                        <li>Whenever possible, perioperative autologous cell salvage should be considered.</li>
                       
                   </ol>
                   <p><b><u>Transfusion Reactions</u></b></p>
                   <ol>
                        <li>Any suspected transfusion reaction must be reported immediately to Transfusion Service in order to safely fulfill ongoing transfusion needs.</li>
                       
                   </ol>
                   <p><b><u>Consent for Blood Transfusion</u></b></p>
                   <ol>
                        <li>Informed consent for blood transfusion must be documented in the medical record.</li>
                        <li>Transfusion should not be delayed in life-threatening situations.</li>
                        <ol type="a">
                                <li>In the event of a medical emergency of a minor and the parent or legal guardian is unable to be contacted to provide informed consent, the Attending Physician may proceed with treatment to the extent that is necessary to alleviate the emergency.</li>
                                <li>The physician must document the circumstances of the medical emergency in the medical record.</li>
                        </ol>
                   </ol>
                   <p><b><u>Complications of Massive Transfusion</u></b></p>
                   <ol>
                        <li>In addition to usual transfusion risks, there are risks that are unique to massive transfusion which include the following: hypothermia, acid-base disturbances, citrate toxicity, electrolyte disorders, thrombocytopenia, depletion of coagulation factors.</li>
                       
                   </ol>
                   <p><b><u>Responsibilities</u></b></p>
                   <ol type="a">
                        <li>Attending Physician </li>
                            <ol type ="a">
                                <li>Initiation or discontinuation of MTP.</li>
                                <li>Management of the patient during MT</li>
                                <li>Obtaining informed consent when possible.</li>
                            </ol>
                        <li>Transfusion Service Medical Director</li>
                            <ol type ="a">
                            <li>Inform the Attending Physician if the patient has complex serological problems or if the patient has known requirements for product modifications (i.e. Irradiation, washing).</li>
                            </ol>
                        <li>Patient Care Team</li>
                            <ol type ="a">
                                <li>Perform patient identification processes.</li>
                                <li>The Primary RN is responsible for communicating with the Transfusion Services.</li>
                                <li>Obtain a properly identified and labeled blood specimen for blood type and crossmatch before transfusion.</li>
                                <li>Utilize a rapid fluid warmer infuser for patients undergoing massive transfusion and receiving IV fluids, red blood cells and/or plasma.</li>
                                <li>When activating the MTP the physician’s order supersedes standard blood product administration guidelines.</li>
                                <li>Report any suspected transfusion reactions to Transfusion Service.</li>
                            </ol>
                        <li>Transfusion Service Personnel</li>
                            <ol type ="a">
                                <li>Upon notification, prepares massive transfusion packs.</li>
                                <li>Verifies patient identification prior to issuing blood products.</li>
                                <li>Issues blood products compatible with patient’s blood type.</li>
                                <li>Evaluates any reported transfusion reactions.</li>
                            </ol>
        
                       
                   </ol>
                   <p><b><u>Definitions</u></b></p>
                   <p>Total Blood Volume (TBV): Preterm neonate = 100 ml/kg; full-term neonate = 90 ml/kg; infant= 80 ml/ kg; older children and adults = 70 ml/kg.
                   <br>
                    Massive Transfusion (MT): The transfusion of one TBV within a 24 hour period or replacement
                    of 50% of the circulating blood volume in 3 hours or continuing blood loss of 150 ml/minute or continuing blood loss of 1.5-3 ml/kg/min over 20 minutes or rapid blood loss leading to physiologic decompensation and circulatory failure despite volume replacement.
                
                   </p>

                   <p>Appendix 1</p>
                   <img src="./images/topic_10_12_1.png" alt="topic_10_12_1" width="80%" height="80%" />
   
                   <p><b><u>**DO NOT ADMINISTER PLATELETS/CRYOPRECIPITATE/GRANULOCYTES THROUGH RAPID INFUSER OR HOTLINE.**</u></b></p>
                    <p>Laboratory Test for Massive Transfusion<p>
                    <img src="./images/topic_10_12_2.png" alt="topic_10_12_2" width="80%" height="80%" />

                    <h2>Complications of Massive Transfusion</h2>

                    <p><b><u>Hypothermia</u></b></p>
                    <ol>
                        <li>Blood transfusion can exacerbate the hypothermia already present in patients with major trauma. Hypothermia can impair hemostasis, delay metabolism of citrate, lactate and drugs, increase hemoglobin oxygen affinity, and reduce myocardial function.</li>
                        <li>Treatment and prevention of hypothermia should be accomplished by the use of active warming.</li>
                    </ol>
                    <p><b><u>Acid-base disturbances</u></b></p>
                    <ol>
                        <li>Stored blood contains lactate which results in a small but significant reduction in pH.</li>
                        <li>Citric acid is also present in stored blood. Each molecule of citrate is metabolized to three molecules of bicarbonate which can lead to metabolic alkalosis..</li>
                        <li>The patient’s overall condition and tissue hypoperfusion may lead to metabolic acidosis.</li>
                        <li>If acidosis is present in a patient receiving massive transfusion, it is much more likely to be the result of hypovolemia/hypoperfusion than due to the effects of transfusion.</li>
                     
                    </ol>
                    <p><b><u>Citrate toxicity</u></b></p>
                    <ol>
                        <li>Blood components are anticoagulated with sodium citrate.</li>
                        <li>Citrate binds divalent cations including calcium and magnesium.</li>
                        <li>Hypocalcemia may manifest clinically by reduced ventricular function, increased neuromuscular
excitability and arrhythmia.</li>
                        <li>Hypomagnesemia can result in neuromuscular excitability and ventricular arrhythmia.</li>
                        <li>Calcium therapy during massive transfusion is typically necessary in neonates and patients with
hepatic dysfunction. Ionized calcium levels can be used to guide therapy.</li>
                        <li>During massive transfusion, the body’s ability to metabolize and excrete citrate may be exceeded especially in patients with hypotension, hypothermia, hepatic injury or hepatic disease.  </li>
                    </ol>
                    <p><b><u>Electrolyte disorders</u></b></p>
                    <ol>
                        <li>Hyperkalemia resulting from MT of older units of RBCs with an elevated amount of extracellular potassium can cause significant cardiac complications in some patients. Those at greatest risk are neonates and those in renal failure.</li>
                        <li> Hyperkalemia can be recognized by measuring serum potassium and observing ECG changes (peaked T waves, prolonged PR interval, and ventricular arrhythmia).</li>
                        <li>Hyperkalemia can be avoided in neonates by using fresh units, less than 7 days old.</li>
                        <li>Hypokalemia can be seen in MT due to the metabolism of citrate to bicarbonate causing metabolic alkalosis. This is more often seen when large plasma rather than RBC units are transfused.</li>
                    </ol>
                    <p><b><u>Thrombocytopenia</u></b></p>
                    <ol>
                        <li>Dilutional thrombocytopenia is defined as a platelet count < 50,000/uL in the setting of MT.</li>
                        <li>Platelets should be transfused if there is evidence of microvascular bleeding.
</li>
                        <li>Platelet counts should be monitored at regular intervals and platelet transfusions given to maintain counts greater than 80,000/uL.</li>
                    </ol>

                    <p><b><u>Depletion of coagulation factors</u></b></p>
                    <ol>
                        <li>Impaired hemostasis is a frequent finding in trauma patients and may be caused by hypothermia, dilution of platelets and coagulation factors, and DIC.</li>
                        <li>RBC units have little plasma and are NOT a significant source of coagulation factors.</li>
                        <li> With exchange of one blood volume, approximately 37% of clotting factors remain within the circulation. After a controlled exchange of two blood volumes, intravascular clotting factors decrease to levels of approximately 13%.</li>
                        <li>FFP infusion is recommended when PT and APTT exceed 1.5 times mean control values. FFP should not be used as a volume expander.</li>
                        <li>Cryoprecipitate infusion is recommended when fibrinogen levels remain below 100mg/dl despite plasma infusion.  </li>
                    </ol>
                    <p><b><u>Transfusion related acute lung injury (TRALI)</u></b></p>
                    <ol>
                        <li>TRALI manifests as dyspnea, hypotension, bilateral pulmonary edema, and fever and resembles ARDS clinically.</li>
                        <li>Treatment is supportive and includes ventilator and hemodynamic assistance.</li>
                        <li>Additional blood components should be given if clear transfusion needs exist.</li>

                    </ol>
                    <p><b><u>Alloimmunization</u></b></p>
                    <ol>
                        <li>Transfusion recipients can form antibodies to HLA Class I and II antigens on platelets, leukocytes, to granulocytes, to platelet-specific antigens and to RBC specific antigens.</li>
                        <li>Consequences of alloimmunization include acute or delayed hemolytic transfusion reactions, febrile nonhemolytic reactions and a refractory response to platelet transfusion.</li>

                    </ol>
                    <img src="./images/topic_10_12_3.png" alt="topic_10_12_2" width="80%" height="80%" />
                    <img src="./images/topic_10_12_4.png" alt="topic_10_12_2" width="80%" height="80%" />
                </div>
               

                <div class="container-fluid section" id="topic10_13">
                    <p>
                    <h2>Family Presence in the Trauma Bay</h2>
                    </p>
                    <p>
                        <b>
                            Procedure:
                        </b>
                        <br><br>
                        To facilitate appropriate family presence in the trauma bay when desired
                        by the family.
                    <p>
                        <b>
                            Definitions:
                        </b>
                        <br><br>
                    <p>
                        <b>Family:</b> A relative of the patient or any person with whom the
                        patient shares a significant established relationship.
                    </p>
                    <p>
                        <b>Family Facilitator:</b> Staff member assigned specifically to initiate
                        interventions that assist the family and provide emotional and
                        psychosocial support. Facilitator will also function as family
                        liaison. Facilitators would typically be the Chaplain, Social Worker
                        or Administrative Supervisor, but may be other staff members.
                    </p>
                    
                    <p>
                        <b>
                            Preparation and Teaching:
                        </b><br>
                        <p>
                            Recognizing that the family is the patient’s primary support
                            system, CHKD supports the option of family presence during
                            patient resuscitation. Literature recognizes family presence
                            during resuscitative events as meeting the needs of family
                            members and facilitating healing, without causing undue
                            trauma.
                        </p>

                    </p>
                    
                        <b>
                        <i>
                        <br>
                            Implementation:
                            <br>
                            <br>
                            Procedure:
                            </i>
                        </b>
                        <br>
                    
                    <ol type ="A">
                        <li>
                            <i>Prior to Family Presence</i>
                            <ol>
                                <li>
                                    When a trauma is called, the Family Facilitator will respond and
                                    assess the situation.
                                </li>
                                <li>
                                    The Family Facilitator will identify the Primary Physician and /
                                    or Primary Nurse and ask if the family may be present. For
                                    forensics cases, police/coroner will also be consulted.
                                </li>
                                <li>
                                    The Family Facilitator will approach the family to provide
                                    information about the patient’s status and response to
                                    treatment, and evaluate whether family members are suitable
                                    candidates before family presence is offered.
                                    <ol type ="a">
                                        <li>
                                            Family members will be assessed for appropriate levels
                                            of coping and the absence of combative behavior, extreme
                                            emotional instability, behaviors consistent with altered
                                            mental status and cognitive impairment. Children or those
                                            with emotional/cognitive impairment must have an adult
                                            caregiver present if allowed at the bedside.
                                        </li>
                                        <li>
                                            Family members who do not wish to participate shall be
                                            supported in their decision.
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <i>During Family Presence</i>
                            <ol>
                                <li>
                                    Before entering the trauma bay, the Family Facilitator will
                                    explain about the patient’s appearance, treatments, and
                                    equipment used in the care room. The Family Facilitator will
                                    prepare the family for entering the patient care area by:
                                    <ol type ="a">
                                        <li>
                                            Communicating that the patient is the priority.
                                        </li>
                                        <li>
                                            Explaining how many family members may enter the
                                            room, where they may stand and what not to touch
                                            to prevent injury or contamination of the patient/supplies
                                            during a sterile procedure, situations in which they may be
                                            escorted out of the room (such as unexpected patient
                                            events or if the family becomes overwhelmed or
                                            disruptive), possible time restrictions and any other
                                            pertinent factors.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    The family members will enter the patient care area escorted by
                                    the Family Facilitator. The Facilitator will announce the
                                    presence of the family to the team.
                                </li>
                                <li>
                                    During family presence, the Family Facilitator will:
                                    <ol type="a">
                                        <li>
                                            Maintain a safe environment for family members
                                        </li>
                                        <li>
                                            Explain interventions
                                        </li>
                                        <li>
                                            Interpret medical/nursing jargon
                                        </li>
                                        <li>
                                            Provide information about expected outcomes or patient
                                            response to treatment after consulting with care team or
                                            facilitate delivery of information by another healthcare
                                            team member.
                                        </li>
                                        <li>
                                            Supply comfort measures
                                        </li>
                                        <li>
                                            Give an opportunity to ask questions
                                        </li>
                                        <li>
                                            Grant an opportunity to see, touch, and speak to patient
                                        </li>
                                        <li>
                                            Provide spiritual and emotional support; consult resources
                                            as needed
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    If a family member becomes disruptive at the bedside, the
                                    family facilitator will immediately escort him/her from the area
                                    and arrange appropriate supportive care.
                                </li>
                            </ol>
                        </li>
                        <li>
                            After Family Presence
                            <p>
                                    After completing the visit, the family facilitator will escort the
                                    family to a comfortable area, address their concerns, provide
                                    comfort measures, and address other psychosocial needs
                                    identified during the intervention.
                               
                                    </p>
                        </li>
                    </ol>
           
                </div>

                <div class="container-fluid section" id="topic10_14">
                    <p>
                    <h2>Pain Management and Palliative Care</h2>
                    </p>

                    <p>
                        Physician: Ami Mehta, MD<br>
                        Pager: 475-1406; 11-4274<br>
                        Office phone: 688-9713<br>
                        Clinic phone: 688-8616<br>
                        Nurse: Shannon Hall, RN<br>
                        Email: ami.mehta@chkd.org and shannon.hall@chkd.org<br>
                        Hours available: Monday - Friday 7 a.m.-7 p.m.
                    </p>
                    <p><b><u>Pain Consults</u></b></p>
                    <ul>
                        <li>Post-op pain (beyond what is expected).</li>
                        <li>Chronic pain.</li>
                        <li>Opioid management.</li>
                        <li>Medication management in patients with a history of opioid use Intractable or complex types of pain: burn, trauma.</li>
                        <li>PCA management.</li>
                        <li>Complex medication combinations.</li>
                        <li>Will be working in conjunction with anesthesia (at their discretion).</li>
                    </ul>
                    <p><b><u>Palliative Care Consults</u></b></p>
                    <ul>
                        <li>End of life decision-making, support and medication management.</li>
                        <li>Advanced directives or goals-of-care conversations.</li>
                        <li>Chronic complex symptom management (e.g. visceral hyperalgesia, dysautonomia, etc.).</li>
                        <li>Hospice-related questions/issues.</li>
                    </ul>
                </div>

                <div class="container-fluid section" id="topic10_15">
                    <p>
                    <h2>Social Work Referrals</h2>
                    </p>
                    <p>A Social Work consult is automatically ordered when the trauma power plan is activated in the EMR. For all other patients, a referral to Social Work can be entered on KDnet through the following link:</p>
                    <a href="https://kdnet.chkd.net/Forms/SWork/BehaviorReferral">https://kdnet.chkd.net/Forms/SWork/BehaviorReferral</a>
                </div>

                <div class="container-fluid section" id="topic10_16">
                    <p>
                    <h2>Child Abuse and Neglect Referrals to the Child Abuse Program</h2>
                    </p>

                    <p>
                        The CHKD Child Advocacy Center (CAC) provides 24-hour-a-day medical coverage for suspected
                        child abuse and neglect. The medical providers are available for consultation regarding hospitalized inpatients, and forensic nurses provide coverage for acute sexual assault patients (patients presenting less than 120 hours after last known incident). In some cases a phone consultation is all that is needed. 
                        The medical staff at the Child Advocacy Center can be reached at (757) 668-6100 24 hours/day, 7 days/ week. At times when the office is closed, the answering service will answer the phone, and will contact the medical provider on call. The on-call Pediatric Forensic Nurse Examiner (PFNE) can be paged at (757) 475-1064.
                    </p>

                    <p>
                        There are times when the CAC medical provider will need to evaluate the patient at the hospital, but may also evaluate the patient in the clinic located at the CAC.
                        PFNEs will often perform an acute sexual assault examination and evidence collection at the CAC, but certain patient conditions may require that the acute sexual assault evaluation be performed at the CHKD Emergency Department, or in a procedure or operating room.
                    </p>
                    <p>

                        The CAC provides a comprehensive forensic consultation in conjunction with CHKD Social Work. 
                        When children with abuse or neglect concerns present to the main hospital building at 601 Children’s Lane, reports are made to Child Protective Services (CPS) and/or police by Medical Social Work at CHKD, in accordance with Hospital Policy C4101.
                    </p>
                    <p>
                        <b>
                        The NAT PowerPlan should be used for all children who present with the following physical abuse concerns:
                        </b>
                    </p>
                    <p><b><u>Physical Abuse Concerns</u></b></p>
                    <ul>
                        <li>
                            Head injuries ( e.g., multiple skull fractures; brain injury; widespread subdural hemorrhages; increased intracranial pressure) without plausible explanation, especially in children under 2 years of age.
                        </li>
                        <li>
                            Abdominal injuries (e.g., liver contusion/laceration, pancreatic injury, splenic injury, rupture or tear of hollow organs) without adequate explanation, especially
                            in children under 2 years of age.
                        </li>
                        <li>
                            Chest injuries (e.g., hemothorax, chest bruises, rib fractures) without adequate explanation especially in children under 2 years of age.

                        </li>
                        <li>
                            Any fracture in a nonambulatory child without a plausible explanation.
                        </li>
                        <li>
                            Multiple fractures without an explanatory medical condition in the absence of a reported history of major trauma.
                        </li>
                        <li>
                            Any bruise in a nonambulatory child without a plausible explanation.
                        </li>
                        <li>
                            Extensive bruises on multiple body areas without a reported history of major trauma.
                        </li>
                        <li>
                            Patterned bruises including recognizable patterns such as slap marks, bite marks, strap marks, or ligature marks. This also includes any injury having the shape of
                            the object which caused the trauma (e.g. circular, linear, curvilinear).
                        </li>
                        <li>
                            Any burn without an adequate explanation in a nonambulatory child.
                        </li>
                        <li>
                            Patterned burns including recognizable patterned distributions (stocking-glove; immersion), or burns having the shape of the object causing injury (heating grate, iron, lighter).
                        </li>
                        <li>
                            Referral to CHKD Emergency Department by CPS agency or CAC medical staff.
                        </li>
                        <li>
                            Any injury which leads to concern for abusive trauma.

                        </li>
                    </ul>
                    <p>
                        <b>Contact the on-call Pediatric Forensic Nurse Examiner (PFNE) by pager at (757) 475-1064 with questions about acute sexual assault concerns (cases presenting within 120 hours of last
                            known incident). If there are non-acute concerns for sexual abuse, contact CPS and/or police in accordance with Hospital Policy C4101, and inform the investigative agency that they can refer the child to the 
                            CAC for interviewing, medical, and mental health services. Contact the CAC medical staff at (757) 668-6100 with questions about non-acute sexual abuse/assault (cases presenting 120 hours or more after last known incident).</b>
                    </p>
                    <p>
                        <u><b>Sexual Abuse Concerns</b></u>
                    </p>
                    <ul>
                        <li>Acute genital injury requiring surgical repair.
                            <b>Note:</b> Acute sexual assault in children and adolescents are evaluated by the Pediatric Forensic Nurse Examiner team 24 hours a day. Non-acute sexual abuse evaluations are provided by CAC medical providers in the CAC outpatient clinic.</li>
                        <li>Any child making a sexual abuse disclosure (with or without genital injuries).</li>
                        <li>Pre-pubertal children with a sexually transmitted infection (with or without genital injuries).</li>
                        <li>Concerning genital findings (with or without a disclosure of abuse).</li>
                    </ul>
                    <p><b>Contact the CAC medical staff at (757) 668-6100 for questions regarding evaluation of neglect and other concerns.</b></p>
                    <p>
                        <u><b>Neglect and other concerns</b></u>
                    </p>
                    <ul>
                        <li>Cases of exposure or starvation.</li>
                        <li>Acute or chronic failure to thrive without medical cause.</li>
                        <li>Injuries occurring because of a significant lack of supervision.</li>
                        <li>Suspected Medical Child Abuse (Munchausen syndrome by proxy), in which the child has presented repeatedly for medical care with a negative medical workup.</li>
                        <li>Significantly delayed or neglected medical care; in many cases, CHKD Social Work and Child Protective Services can address neglect issues without the need for a CAC consultation.</li>
                    </ul>
                    <p><b>
                    Contact the Child Advocacy Center with questions regarding evaluation. The on-call CAC medical provider can be contacted at (757) 668-6100 24 hours/day, 7 days/week. At times when the office is closed, the answering service will answer the phone line, and will contact the on-call medical provider. The on-call Pediatric Forensic Nurse Examiner (PFNE) can be paged at (757) 475-1064.
                    </b></p>
                    <p><u><b>Pediatric Emergency Medicine Guidelines</b></u></p>
                    <p>Please refer to the flowcharts on the pages which follow for guidelines and information regarding the evaluation of the child with concerns for sexual abuse/sexual assault. The Pediatric Forensic Nurse Examiners (PFNEs) can be reached at (757) 475-1064 for case discussion and additional guidance, as needed.</p>
                    <p>
                        <b>
                            Acute Sexual Assault
                        </b>
                        <br>
                        </p>
                    <p>
                    Event occurred less than 120 hours prior to presentation
                    </p>
                    <ul>
                        <li>No examination in the Emergency Department is indicated unless patient has an urgent medical problem requiring intervention or workup (e.g. severe pain, uncontrolled bleeding, acute intoxication, altering levels of consiousness).</li>
                        <li>Assault cases should be triaged to the Pediatric Forensic Nurse Examiner (PFNEs).</li>
                        <li>Child Protective Services (CPS) contacted as needed by CHKD Social Work.</li>
                        <li>If the case presents to CHKD, the ED triage nurse will call the police and notify the PFNE on call.</li>
                        <li>If the case presents to the police, then police activate the PFNE on call.</li>
                        <li>An assault exam can only be performed with police authorization.</li>
                        <li>If no assault exam is authorized, the patient can be registered into the ED per ED protocol.</li>
                    </ul>
                    <p>
                        <b><u>
                            Non-acute Sexual Abuse
                        </u></b>
                        <br>
                    </p>
                    <p>
                       <i> Event occurred 120+ hours prior to presentation</i>
                    </p>
                    <ul>
                        <li>
                            CHKD Social Work calls Child Protective Services (CPS) and police as needed.
                        </li>
                        <li>
                            Police or CPS can refer child to Child Advocacy Center (CAC) for a complete child abuse evaluation; Emergency Department staff cannot refer child to CAC for
                            forensic evaluation.
                        </li>
                        <li>
                            A limited Emergency Department exam should be performed in compliance with EMTALA if case is to be referred to CAC by investigators.
                        </li>
                    </ul>
                   
                    <p>
                        <b><u>
                            Physical Abuse
                        </u></b>
                        <br>
                        Please refer to the flowcharts on the pages which follow for guidelines and information regarding the evaluation of the child with concerns for physical abuse. The medical providers at the Child Advocacy Center (CAC) can be reached at (757) 668-6100 at all times for case discussion and additional guidance as needed.
                    </p>
                    <ul>
                        <li>
                            Consult with CHKD Social Work staff for new cases of abuse.
                            <ol type="a">
                                <li>
                                    CHKD Social Work can report to CPS/police as necessary.
                                </li>
                            </ol>
                        </li>
                        <li>
                            For cases already being investigated by CPS, CHKD Social Work consult may not be necessary.
                        </li>

                        <li>
                            CAC consult is not necessary for minor physical abuse.
                            <ol type="a">
                                <li>
                                    CPS and police often consult CAC at a later time for a forensic opinion.
                                </li>
                                <li>
                                    If child is to be admitted a consult may be warranted.
                                </li>
                            </ol>
                        </li>
                        
                    </ul>
                   
                    <p>
                        <h2>
                            Suspected Physical Abuse Flow Diagram
                        </h2>
                    </p>
                    <p>
                        Child Abuse Program, (757) 668-6100
                    </p>

                    <p><h2>Emergency Department Non-Accidental Trauma and Management Guidelines</h2></p>
                    
                    <img src="./images/topic_10_16_1.png" alt="topic10_16_1" width="80%" height="80%" />    

                    <p><h2>Sexual Abuse Disclosure</h2></p>
                    
                    <img src="./images/topic_10_16_2.png" alt="topic10_16_2" width="80%" height="80%" />    
                    
                    <p><h2>Concern for Abnormal Genital Findings</h2></p>
                    
                    <img src="./images/topic_10_16_3.png" alt="topic10_16_3" width="50%" height="50%" />    
       
                </div>


                

                <div class="container-fluid section" id="topic10_17">
                    <p>
                    <h2>Commercial Sexual Exploitation of Children</h2>
                    <i>(CSEC, commonly referred to as Domestic Minor Sex Trafficking)</i>
                    </p>
                    <p>
                        <ul>
                            <li>
                            Sex trafficking is the recruitment, harboring, transportation, provision, obtaining, patronizing, or soliciting of a person for the purposes of a commercial sex act, in which the commercial sex act is induced by force, fraud, or coercion, or in which
                            the person induced to perform such an act has not attained 18 years of age
                            (22 USC§ 7102).
                            
                            </li>
                            <li>
                                Includes, but is not limited to, the commercial sexual exploitation of children through prostitution, pornography, and/or stripping
                            </li>
                            <li>Commercial sex act defined as: any sex act on account of which anything of value is given to or received by any person</li>
                        </ul>
                    </p>
                    <p>
                        <b>
                        In the event a youth presents to CHKD with concerns of trafficking, or multiple high risk indicators (4 or more) hospital personnel will page Dawn Scaff at (757) 475-1064 and/or contact Daisy Schuurman at (757) 672-9453 (daisy.schuurman@chkd.org)
                        </b>
                       <p><b><u>Confirmed trafficking</u></b></p>
                    <ol>
                        <li>
                            Child has disclosed sex/labor trafficking as defined above or:
                        </li>
                        <li>
                        Evidence of sexual exploitation/trafficking as provided by parent or legal guardian, law
                        enforcement, medical or health service provider, teacher, Child Protective Services, and/or juvenile probation officer.
                        </li>
               
                    </ol>
                    <p><b><u>High Risk Indicators may include:</u></b></p>
                        <ol>
                            <li>History of emotional trauma, neglect, physical and/or sexual abuse.</li>
                            <li>Limited or severed family connections.</li>
                            <li>Substance use.</li>
                            <li>Foster Care involvement.</li>
                            <li>Dating or history of relationships with older adults.</li>
                            <li>Frequent interaction with adults online (important to note that pimps can be women,so frequent online interaction with unknown adult females is also of concern).</li>
                            <li>History of running away or being turned out of home.</li>
                            <li>Prior involvement with Law Enforcement (not just as victim).</li>
                            <li>Expensive, new, unaccounted for material items.</li>
                            <li>Traveling out of state with unknown persons, and/or without permission.</li>
                            <li>Child is recovered from runaway episode by social services or law enforcement or guardians in hotel or known area of prostitution.</li>
                            <li>Branding tattoos present.</li>
                            <li>Known to associate with confirmed or suspected CSEC youth victims.</li>
                            <li>Child has inappropriate, sexually suggestive activity or communication on social media websites and/or chat apps, Google history.</li>
                            <li>Truancy.</li>
                            <li>Gang association or affiliation.</li>
                            <li>Multiple occurrences of sexually transmitted infections.</li>
                            <li>Identifies as LBGTQ.</li>
                        </ol>
                    </p>

                </div>
          
                <div class="container-fluid section" id="topic10_18">
                    <p>
                    <h2>Pediatric Rehab Referrals</h2>
                    </p>
                    <p>
                        <b>
                            Inpatient Consults:
                        </b>
                        <br>
                    <ul>
                        <li>
                            ALL Traumatic Head Injuries (any LOC or AMS, intracranial
                            bleed, skull fracture).
                        </li>
                        <li>
                            Any TBI requiring overnight observation or admission.
                        </li>
                        <li>
                            Upon discharge recommend cognitive rest and no return to
                            school until evaluated in outpatient PM&R for follow up
                            within one week from discharge.
                        </li>
                        <li>
                            Polytrauma or traumatic amputation potentially needing
                            inpatient rehab stay due to functional deficits.
                        </li>
                    </ul>
                    <b>
                        Outpatient Referrals:
                    </b>
                    <br>
                    <ul>
                        <li>
                            Asphyxiation or concern for hypoxic brain injury.
                        </li>
                        <li>
                            Polytrauma with functional deficits.
                        </li>
                        <li>
                            General trauma including all traumatic amputations.
                        </li>
                        <li>
                            Any head injury from traumatic mechanism. Plan for
                            outpatient PM&R follow up within one week.
                        </li>
                    </ul>
                    <b>
                        Contact information for Katrina Lesher, MD and Charles Dillard, MD
                    </b>
                    <ul>
                        <li>
                            Through Doctors Direct page “Rehab on call doctor” (NOT
                            Rehab hospitalist on call).
                        </li>
                        <li>
                            Main office number: (757) 668-9915.
                        </li>
                        <li>
                            Administrative Contact: Emily Singletary (757) 668-9835.
                        </li>
                        <li>
                            Email: Katrina.Lesher@CHKD.org
                            &ensp;&ensp;Charles.Dillard@CHKD.org
                        </li>
                    </ul>
                    <br>
                    <img src="./images/topic_10_18_1.png" alt="topic_10_18_1" width="40%" height="40%" />
                    </p>
                </div>

                <div class="container-fluid section" id="topic10_19">
                    <p>
                    <h2>Chain of Evidence Procedure</h2>
                    <i>Refer to “Chain of Custody” Policy #C4109</i>
                    </p>
                    <p>
                        It is the policy of CHKD to provide evidence preservation whenever possible and cooperate with federal, state, 
                        and local law enforcement personnel, with the understanding that the staff’s primary responsibility is the medical 
                        treatment of the patient. All communication with law enforcement will be provided by the Trauma Surgeon.
                    </p>
                    <ol type="A">
                        <li>
                        Clothing removed from all patients suffering from injuries resulting 
                        from possible criminal acts (i.e. gun shot, stabbing wounds) should be removed and itemized cautiously, securing items in order to maintain chain of custody.
                            <ul>
                                <li>
                                    PPE should be worn at all times when removing, itemizing and securing clothing, effects, or valuables.
                                </li>
                                <li>
                                    If clothing must be cut to be removed, do not cut through holes caused by bullets or knives. 
                                    If possible cut along clothing seams, avoiding cutting through bloodstains.
                                </li>
                                <li>
                                    Clothing should be placed on a clean sheet in order to catch any items that may fall from clothing.
                                </li>
                                <li>
                                    Each piece of clothing must be placed in a separate paper bag. One pair of shoes
                                    may go in one bag. Identifying papers, wallets, and purses should be booked separately as property, not clothing.
                                </li>
                                <li>
                                    Any other effects that are stained with blood should be itemized and placed in a separate paper bag.
                                </li>
                                <li>
                                    All paper bags should be collected, numbered sequentially with the total number of bags 
                                    (example 1 of 6, 2 of 6, etc.) The total number of bags should be documented in the patient’s medical record.
                                </li>
                                <li>
                                    The individual who takes possession of the evidence must not allow it out of his/her custody until all items are appropriately identified, documented in the patient’s medical record, bag sealed, and labeled across the seal with a brief description, date and initials.

                                </li>
                                <li>
                                    The clothing and effects should immediately be given to the law enforcement officer involved with the patient, if present, or turned over to Security to preserve the chain of evidence until picked up by the law enforcement agency. 
                                    The bag number for each listed item shall be documented on the “Chain of Custody Evidence Tracking form.”
                                </li>
                            </ul>
                        </li>
                        <li>
                            Bullet(s)/Other Collected Evidence
                            <ul>
                                <li>
                                    Bullet(s)/other evidence collected or recovered from a patient (or discovered on a stretcher, or within clothing) should be placed in a plastic specimen container.
                                </li>
                                <li>
                                    A label stamped with the patient’s registration information should be used to seal the container.
                                </li>
                                <li>
                                    The specimen container is then placed in an paper bag(s), sealed, and the following information written on the envelope:
                                    <ol type="a">
                                        <li>
                                            Patient’s name and medical record number .
                                        </li>
                                        <li>
                                            Patient’s location.
                                        </li>
                                        <li>
                                            Date and time extracted/discovered.
                                        </li>
                                        <li>
                                            Location found (or site).
                                        </li>
                                        <li>
                                            Name and signature of staff person who recovered/discovered the evidence and sealed the envelope.
                                        </li>
                                    </ol>
                                </li>
                            
                        </li>
                        
                        <li>
                            The individual who takes possession of the evidence must not allow it out of his/her custody until all items are appropriately identified, documented in the patient’s medical record, paper bag(s), 
                            sealed, and labeled across the seal with a brief description, date, and initials.
                        </li>
                        <li>
                            The paper bag(s) should immediately be given to the law enforcement officer involved with the patient, if present, or turned over to Security to preserve the chain of evidence until picked up by the law enforcement agency. The paper bag(s) contents 
                            shall be documented on the “Chain of Custody Evidence Tracking Form” located in each trauma bay.
                        </li>
                        <li>
                            Staff handling the evidence may be called to testify in court as to the evidentiary chain of custody. Therefore, if at all possible, the number of people handling the
                            evidence should be limited to the person recovering it and the Law
                            Enforcement Officer or Security Officer securing the evidence.
                        </li>
                    </ol>
                </div>

                <div class="container-fluid section" id="topic10_20">
                    <p>
                    <h2>Safety and Security Disaster Policies</h2>
                    </p>
                    <p>
                        Trauma Services follows all guidelines/procedure as outlined in the Children’s Hospital of 
                        The King’s Daughters Emergency Operations Plan (EmergMgt 01) and supporting policies and annexes.
                    </p>
                    <p>
                        <b>
                            Mobilization of staff to care for simultaneously arriving trauma patients prior to activation of the Disaster Plan
                        </b>
                    </p>
                    <p>
                        
                        The Emergency Department and Trauma Team have a low threshold for activating the hospitals disaster plan when needed to care for multiple casualties. 
                        The process prior to activation of the disaster plan is as follows:
                    <ol>
                        <li>
                            ED Attending notifies Trauma Team of number of incoming trauma patients and their assigned trauma activation levels.
                        </li>
                        <li>
                            The Trauma Attending Surgeon and Senior Surgical Resident/Fellow confer regarding available 
                            surgical resources and call in back-up surgical attending as needed.
                        </li>
                        <li>
                            The Trauma Surgeon, ED Attending, ED Charge RN, and Nursing
                            Supervisor assess situation and available resources including:
                            <ol type="a">
                                <li>
                                    Number and acuity of patients expected
                                </li>
                                <li>
                                    Current ED patient volume
                                </li>
                                <li>
                                    Current patient acuity
                                </li>
                                <li>
                                    Current ED staff
                                </li>
                                <li>
                                    Time of day
                                </li>
                                <li>
                                    Hospital wide situation and resources
                                </li>

                            </ol>
                        </li>
                        <li>
                            The Nursing Supervisor may request additional nursing support from other units.
                        </li>
                        <li>
                            The Trauma Team assembles in the ED prior to expected patient(s) arrival.
                        </li>
                        <li>
                            If needed resources at any time appear to exceed the ability of the Trauma Team to care for
                            the multiple patients, activation of the Emergency Operations Plan will occur.
                        </li>
                    </ol>
                    </p>
                </div>

                <div class="container-fluid section" id="topic10_21">
                    <p>
                    <h2>Facility/Emergency Department Lockdown Procedure</h2>
                    </p>
                    <p>
                    The ED is available for stabilization and treatment of trauma and medical patients on a continuous basis, 24 hours per day. 
                    Members of the ED follow all guidelines/procedures as outlined by the Children’s Hospital of The King’s Daughters Facility Lockdown policy (SEC-04).

                    </p>
                    <b>
                        Lockdown conditions include but not limited to:
                    </b>
                    <ul>
                        <li>Trauma event with impending large volume of surge or threat.</li>
                        <li>
                            An armed assailant in the building.
                        </li>
                        <li>
                            A bomb threat or suspicious package.
                        </li>
                        <li>
                            Threatened or ongoing acts of violence with the capacity of
                            affecting building occupants.
                        </li>
                        <li>
                            Abduction of any patient or other person in the facility.
                        </li>
                        <li>
                            Arrival of a victim of violence at the hospital whose presence may precipitate additional violent acts on the facility or campus.
                        </li>
                        <li>
                            Criminal activity in the geographical area of the facility from which a perpetrator may enter the campus.
                        </li>
                    </ul>
                    <b>
                        Lockdown can be initiated by:
                    </b>
                    <br>
                    <ul>
                        <li>
                            Daily Safety Officer
                        </li>
                        <li>
                            Administrator-on-Call (AOC)
                        </li>
                        <li>
                            Nursing Administrative Supervisor
                        </li>
                        <li>
                            Security Leadership (including Shift Supervisor)
                        </li>
                        <li>
                            ED Charge Nurse - notifies security to activate lockdown if pre-hospital report indicates a threat.
                        </li>
                    </ul>
                    <b>
                        Lockdown in the ED:
                    </b>
                    <br>
                    <ul>
                        <li>
                            ED Charge RN will notify Security if lockdown for the ED is
                            required.
                        </li>
                        <li>
                            Security is responsible for notifying the Nursing Supervisor
                            to initiate lockdown.
                        </li>
                        <li>
                            In the event the ED is not able to contact anyone for
                            assistance due to immediate potential harm, a panic button
                            at the ED Charge RN desk shall be activated.
                        </li>
                        <li>
                            Declarations of lockdown may be made in respect to and
                            in conjunction with, local or federal public health officials,
                            and first responders.
                        </li>
                    </ul>
                    <p>
                    <h2>
                        Facility Lockdown and Perimeter Camera Activation by
                        Security
                    </h2>
                    </p>
                    <p>
                        <p><b>
                            The Console Duty Officer (CDO) will perform the following:
                        </b></p>
                        <br>

                    <ul>
                        <li>
                            Activate automatic perimeter lockdown
                        </li>
                        <li>
                            Monitor perimeter cameras
                        </li>
                        <li>
                            Notify EVMS Police and SNGH of the situation and/or need
                            for assistance until the perceived threat has ended.
                        </li>
                        <li>
                            Request EVMS maintain traffic control and direct
                            responding police vehicles to park on Children’s Lane, not
                            to block the Ambulance Entrance.
                        </li>
                        <li>
                            Dispatch an Officer to the Emergency Department
                            entrance/exit and waiting area.
                        </li>
                    </ul>
                    <b>
                        Screening for Emergency Department:
                    </b>
                    <br>
                    <ol type ="a">
                        <li>
                            CHKD identification badges will be required for all employees to
                            enter the facility.
                        </li>
                        <li>
                            Patients seeking medical attention will be given access and will be
                            directed to the Emergency Department check-in desk.
                        </li>
                        <li>
                            Any other family or visitors will first be screened by Security and, if
                            allowed access, will be directed to the check-in desk.
                        </li>
                        <li>
                            Individuals will be screened upon entry and/or exit of the facility,
                            depending upon the situation. Security will check the following:
                            <ul>
                                <li>
                                    Hospital Identification Badges
                                </li>
                                <li>
                                    Driver License / Personal Identifications Cards
                                </li>
                                <li>
                                    Bags
                                </li>
                                <li>
                                    Packages
                                </li>
                                <li>
                                    Equipment
                                </li>
                                <li>
                                    Supplies
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </p>
                    <p>
                        <b>
                            Security will be responsible for deactivating Perimeter Door
                            Lockdown once situation has been cleared.
                        </b>
                    </p>
                </div>

            </div>
        </div>
    </div>
    

</body>

</html>
