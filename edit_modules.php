<?php
require_once("connect_db_remodeled.php");
if(isset($_POST['submit']))
{
   $content = $_POST['editor2'];
//    echo $content;
   $module_id = $_REQUEST['id'];
   $sql = "INSERT INTO edit_modules (module_id, module_content) VALUES ('$module_id', '$content');";
   $result = $conn->query($sql);
   if($result->num_rows>=0){
      echo '<script>
        setTimeout(function () { 
            swal({
              title: "Modules",
              text: "Updated Successfully ",
              type: "success",
              confirmButtonText: "OK"
            },
            function(isConfirm){
              if (isConfirm) {
                window.location.href = "edit_modules.php";
              }
            }); }, 1000);
        </script>';
   }
   // echo $sql;
   // echo $result;
//    $sql_1 = "SELECT * FROM edit_modules WHERE module_id = '$module_id';";
//    $result_1 = $conn->query($sql_1);
   
}
if(isset($_POST['submit1']))
{
   $content = $_POST['editor1'];
//    echo $content;
   $module = $_REQUEST['module'];
   $sql_1 = "SELECT * FROM modules_home ORDER BY module_id DESC LIMIT 1;";
   $result_1 = $conn->query($sql_1);
   {
       if($result_1->num_rows>=0){
           while($row = $result_1->fetch_assoc()){
               $module_id = $row['module_id'];
           }
        $module_id = $module_id + 1;
        $sql_12 = "INSERT INTO modules_home (title, description) VALUES ('$module', '$content');";
        $result_12 = $conn->query($sql_12);
       }
   }
   $sql = "INSERT INTO edit_modules (module_id, module_content) VALUES ('$module', '$content');";
   $result = $conn->query($sql);
   if($result->num_rows>=0){
      echo '<script>
        setTimeout(function () { 
            swal({
              title: "Modules",
              text: "Updated Successfully ",
              type: "success",
              confirmButtonText: "OK"
            },
            function(isConfirm){
              if (isConfirm) {
                window.location.href = "edit_modules.php";
              }
            }); }, 1000);
        </script>';
   }
   // echo $sql;
   // echo $result;
//    $sql_1 = "SELECT * FROM edit_modules WHERE module_id = '$module_id';";
//    $result_1 = $conn->query($sql_1);
   
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.ckeditor.com/4.15.0/standard-all/ckeditor.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- search static content-->
    <script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>

    <link rel="stylesheet" type="text/css" href="design/styleSheet.css">
    <link rel="manifest" href="./manifest.webmanifest">
    
    <!--  
         <link href="/App512.png" sizes="512x512" rel="apple-touch-startup-image" />
    <link href="/App192.png" sizes="192x192" rel="apple-touch-startup-image" /> -->
</head>
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
#search_box input[type="text"]
{
 width:250px;
 height:40px;
 padding-left:10px;
 font-size:18px; 
 margin-bottom:15px;
 color:#424242;
 border:none;
}
#search_box input[type="submit"]
{
 width:120px;
 height:40px;
 background-color:#585858;
 color:white;
 border:none;
}
    #result_div
{
 width:600px; 
 margin-top: 10px;
 margin-left: 15px;
 background-color:white;
 color:white;
 border:none;
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
    color: rgb(22, 113, 197);
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
                        <a href="#topic2_2" class='tab ' id='Topic 2.2'>Trauma Admission Protocol</a>
                    </li>
                    <li id="t2.3" class="link">
                        <a href="#topic2_3" class='tab' id='Topic 2.3'>Patient Access Technician - ED</a>
                    </li>
                    <li id="t2.4" class="link">
                        <a href="#topic2_4" class='tab' id='Topic 2.4'>CHKD Transfer Center - Kid Comm</a>
                    </li>
                    <li id="t2.5" class="link">
                        <a href="#topic2_5" class='tab' id='Topic 2.5'>Activation of the Trauma System from Scene by
                            EMS</a>
                    </li>
                    <li id="t2.6" class="link">
                        <a href="#topic2_6" class='tab' id='Topic 2.6'>Activation of the Trauma System Walk-In
                            Patients</a>
                    </li>
                    <li id="t2.7" class="link">
                        <a href="#topic2_7" class='tab' id='Topic 2.7'>Trauma Team Activation Pathway</a>
                    </li>
                    <li id="t2.8" class="link">
                        <a href="#topic2_8" class='tab' id='Topic 2.8'>Trauma/Medical Resuscitation Pre-Arrival
                            Checklist</a>
                    </li>
                    <li id="t2.9" class="link">
                        <a href="#topic2_9" class='tab' id='Topic 2.9'>Pre-Arrival/Debrief Documentation</a>
                    </li>
                    <li id="t2.10" class="link">
                        <a href="#topic2_10" class='tab' id='Topic 2.10'>Trauma Team Positioning</a>
                    </li>
                    <li id="t2.11" class="link">
                        <a href="#topic2_11" class='tab' id='Topic 2.11'>Trauma Roles</a>
                    </li>
                    <li id="t2.12" class="link">
                        <a href="#topic2_12" class='tab' id='Topic 2.12'>Pediatric Surgery Response</a>
                    </li>
                    <li id="t2.13" class="link">
                        <a href="#topic2_13" class='tab' id='Topic 2.13'>Trauma Alert Response</a>
                    </li>

                </ul>
            </div>
            <div id="#primarySurvey">
                <a href="#primarySurveyAlgo" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i> Primary Survey Algorithms </a>
                <ul class="collapse " id="primarySurveyAlgo">
                    <li id="t3.1" class="link">
                        <a href="#topic3_1" class='tab ' id='Topic3.1'>Rapid Sequence Induction</a>
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
                    <li id="7.5" class="link">
                        <a href="#topic7_5" class='tab' id='Topic7.5'>Injury Severity Scoring</a>
                    </li>
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
                    <li id="8.6" class="link">
                        <a href="#topic8_6" class='tab' id='Topic8.6'>Acute Burn Wound Care</a>
                    </li>
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
                        <a href="#topic10_3" class='tab' id='Topic10.3'>Child Abuse & Neglect</a>
                    </li>
                    <li id="10.4" class="link">
                        <a href="#topic10_4" class='tab' id='Topic10.4'>I-Stat Use Critical Trauma (IO)</a>
                    </li>
                    <li id="10.5" class="link">
                        <a href="#topic10_5" class='tab' id='Topic10.5'>CT Contrast Infusion via Intraosseous Line</a>
                    </li>
                    <li id="10.6" class="link">
                        <a href="#topic10_6" class='tab' id='Topic10.6'>Protocol for Inpatient Procedures Under
                            Anesthesia</a>
                    </li>
                    <li id="10.7" class="link">
                        <a href="#topic10_7" class='tab' id='Topic10.7'>CT Downtime Trauma Algorithm</a>
                    </li>
                    <li id="10.8" class="link">
                        <a href="#topic10_8" class='tab' id='Topic10.8'>Team Roles During CT Downtime</a>
                    </li>
                    <li id="10.9" class="link">
                        <a href="#topic10_9" class='tab' id='Topic10.9'>Helmet Removal Process</a>
                    </li>
                    <li id="10.10" class="link">
                        <a href="#topic10_10" class='tab' id='Topic10.10'>DVT Prophylaxis</a>
                    </li>
                    <li id="10.11" class="link">
                        <a href="#topic10_11" class='tab' id='Topic10.11'>Massive Transfusion Protocol</a>
                    </li>
                    <li id="10.12" class="link">
                        <a href="#topic10_12" class='tab' id='Topic10.12'>Angioembolization at SNGH</a>
                    </li>
                    <li id="10.13" class="link">
                        <a href="#topic10_13" class='tab' id='Topic10.13'>Pregnant Patients</a>
                    </li>
                    <li id="10.14" class="link">
                        <a href="#topic10_14" class='tab' id='Topic10.14'>Family Presence in the Trauma Bay</a>
                    </li>
                    <li id="10.15" class="link">
                        <a href="#topic10_15" class='tab' id='Topic10.15'>Rehabilitation Services Consultation</a>
                    </li>
                    <li id="10.16" class="link">
                        <a href="#topic10_16" class='tab' id='Topic10.16'>Chain of Evidence Procedure</a>
                    </li>
                    <li id="10.17" class="link">
                        <a href="#topic10_17" class='tab' id='Topic10.17'>Disaster Management Plan</a>
                    </li>
                    <li id="10.18" class="link">
                        <a href="#topic10_18" class='tab' id='Topic10.18'>Facility Lock Down Procedure</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="mainContent" class="content">
            <div id="overlay" onclick="closeNav()"></div>
            <!-- nav bar -->
            <div class="fixedNav">
                <button class="openbtn" onclick="openNav()"><i class="fa fa-bars" style="margin: 5px;"></i><img
                        src="./images/chkdIcon.png" alt="Trauma Org Chart" width="50" height="50"></button>
            </div>
            <div class="container-fluid" style="width: auto;
            height: 10vh;">
                <button class="add-button"> Add to Desktop</button>
                <form class="searchFormInputField">
                    <!-- <div class="input-group" style="margin: 7px 15px 15px 12px;width:250px">
                        <input type="text" id="myInputText" class="form-control searchbar" size="20"
                            placeholder="Search Here" required="">
                        <span class="input-group-btn">
                            <button class="btn btn-default searchicon" type="button">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </div> -->
                    <div id="wrapper">

                                <div id="search_box">
                                    <form method="post"action="module_home" onsubmit="return do_search();">
                                    <a id="openLogin" href = "index.php?id=18" class = "open-button"></span>  Home </a>
                                    </form>
                                <div id="result_div"></div>
                            </div>
                </form>
            </div>
        </div>
        <ul class="nav nav-tabs ">
				<li class="active"><a data-toggle="tab" href="#menu">Edit Module</a></li>
                <li><a data-toggle="tab" href="#menu1">Create Module</a></li>
                <!-- <li><a data-toggle="tab" href="#menu2">Add Under Learning Resources</a></li> -->

			</ul>
        <br>
        <br>
        <div class="tab-content">
        <div id="menu" class="resume tab-pane fade in active" style = "margin:30px">
                        <div class="dropdown">
                        
                            <button class="btn btn-primary dropdown-toggle" id="menu" type="button" data-toggle="dropdown">Choose Module 
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <?php
                            $sql_2 = "SELECT * FROM modules_home;";
                            $result_2 = $conn->query($sql_2);
                            if($result_2->num_rows>0){
                                while($row = $result_2->fetch_assoc()){
                                    echo'<li role="presentation"><a role="menuitem" tabindex="-1" href="test_1.php?id='.$row['module_id'].'">'.$row['title'].'</a></li>';
                                }
                            }
                            ?> 
                            </ul>
                        </div>
                    
        <br>
        <br>
       
        <h3> Click in the Box below to edit Module  Content</h3>
                    
                    <form action="" method="post">
        <textarea id="editor2" name="editor2">
								<?php
                                $module_id = $_REQUEST['id'];
								$sql_1 = "SELECT * FROM edit_modules WHERE module_id = '$module_id' ORDER BY id DESC LIMIT 1;";
								$result_1 = $conn->query($sql_1);
								if($result_1->num_rows>=0){
									while($row=$result_1->fetch_assoc()){
										$content = $row['module_content'];
									}
								echo $content;
								}
							    ?>
            </textarea>
            <input type="submit" class="mrgn_Submit btn btnshadowTrans allBtnProps" style = "background-color: #4CAF50; border: none; color: white; padding: 16px 32px; text-decoration: none; margin: 4px 802px; cursor: pointer;"  name = "submit" value="Submit">
					</form>
            </div>
                    <script type="text/javascript">
                    
                     CKEDITOR.replace( 'editor1' );
                     CKEDITOR.add  
                    </script>
            
            <div id="menu1" class="tab-pane fade">

            <h3>Create</h3>
                    <br>
                    <form action="" method="post">
                   
                    <br>
                    <br>
                    <textarea name="module" placeholder = "Enter Module Name"></textarea>
                    <br>
                    <br>
                    <textarea name="editor1" class="ckeditor"></textarea>

                    <input type="submit" class="mrgn_Submit btn btnshadowTrans allBtnProps" style = "background-color: #4CAF50; border: none; color: white; padding: 16px 32px; text-decoration: none; margin: 4px 802px; cursor: pointer;"  name = "submit1" value="Submit">
					</form>
                    <script type="text/javascript">
                    
                     CKEDITOR.replace( 'editor1' );
                     CKEDITOR.add  
                    </script>

            

    </div>


    </div>

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

            $(function() {
                
                    $("input").on("input.highlight", function() {
                        // Determine specified search term
                        var searchTerm = $(this).val();
                        // Highlight search term inside a specific context
                        $("#divToSearch").unmark().mark(searchTerm);
                    }).trigger("input.highlight").focus();
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
        

    </script>

    <script src="./index.js"></script>
    <script>
                        CKEDITOR.stylesSet.add('my_custom_style', [
                        { name: 'My Custom Block', element: 'h3', styles: { background: 'linear-gradient(#009CDE, #003087)', color: 'white' , padding: '2vh', radius: '5px'} },
                        { name: 'My Custom Inline', element: 'span', attributes: {'class': 'mine'} }
                        ]);
                        // This code is for when you start up a CKEditor instance
                        CKEDITOR.replace( 'editor2',{
                        stylesSet: 'my_custom_style'
                        });
                        CKEDITOR.disableAutoInline = true;
                        CKEDITOR.inline( 'editor2' );
                        </script>

</body>

</html>
