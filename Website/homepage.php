<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.4.js"></script>
    <script lang="javascript" src="xlsx.full.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Home Page</title>
    <style type="text/css">
    </style>

    <script language="javascript" type="text/javascript">
<!--
function startUpload(){
      document.getElementById('f1_upload_process').style.visibility = 'visible';
      document.getElementById('f1_upload_form').style.visibility = 'hidden';
      return true;
}

function stopUpload(success){
      var result = '';
      if (success == 1){
         result = '<span class="msg">The file was uploaded successfully!<\/span><br/><br/>';
      }
      else {
         result = '<span class="emsg">There was an error during file upload!<\/span><br/><br/>';
      }
      document.getElementById('f1_upload_process').style.visibility = 'hidden';
      document.getElementById('f1_upload_form').innerHTML = result + '<label>File: <input name="myfile" type="file" size="30" /><\/label><label><input type="submit" name="submitBtn" class="sbtn" value="Upload" /><\/label>';
      document.getElementById('f1_upload_form').style.visibility = 'visible';      
      return true;   
}
//-->
</script> 

  </head>
  <style>
    #f1_upload_process{
       z-index:100;
       position:absolute;
       visibility:hidden;
       text-align:center;
       width:400px;
       margin:0px;
       padding:0px;
       background-color:#fff;
       border:1px solid #ccc;
    }
  
  </style>
  <header>
    <div class="container">
      <div  style="padding-top: 25px;">
        <img class="img-fluid " src="Images/header-logo.jpg" alt="Responsive image" class="rounded float-left"> 
      </div>
      <div class="text-right" style="padding-bottom: 25px ;padding-top: 25px;" >
        <div class="btn-group-vertical" >
          <button type="button"  class="button button4"  ><a href="signup.php">Sign Up</a> 
          </button>
          <button type="button" class="button button4"  ><a href="signin.php">Sign In</a>
          </button>
        </div>
      </div>
    </div>
  </header>
  <body>
    
      <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li>
              <a  id="homeButton">Home</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Load Files</a>
                <ul class="dropdown-menu">
                  <li>
                    <a onclick="openCity(event, 'Load_Files_BSCSE')">BSCSE</a>
                  </li>
                  <li>
                    <a onclick="openCity(event, 'Load_Files_BSEEE')">BSEEE</a>
                  </li>
                  <li>
                    <a onclick="openCity(event, 'Load_Files_BBA')">BBA</a>
                  </li>
                  <li>
                    <a onclick="openCity(event, 'Load_Files_MSCSE')">MSCSE</a>
                  </li>
                  <li>
                    <a onclick="openCity(event, 'Load_Files_MSEEE')">MSEEE</a>
                  </li>
                  <li>
                    <a onclick="openCity(event, 'Load_Files_MBA')">MBA</a>
                  </li>
                  <li>
                    <a onclick="openCity(event, 'Load_Files_EMBA')">EMBA</a>
                  </li>
                  <li>
                    <a onclick="openCity(event, 'Load_Files_Economics')">Economics</a>
                  </li>
                  <li>
                    <a onclick="openCity(event, 'Load_Files_INS')">INS</a>
                  </li>
                </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">View Files</a>
              <ul class="dropdown-menu">
                <li>
                  <a onclick="openCity(event, 'View_Files_BSCSE')">BSCSE</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'View_Files_BSEEE')">BSEEE</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'View_Files_BBA')">BBA</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'View_Files_MSCSE')">MSCSE</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'View_Files_MSEEE')">MSEEE</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'View_Files_MBA')">MBA</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'View_Files_EMBA')">EMBA</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'View_Files_Economics')">Economics</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'View_Files_INS')">INS</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Manually edit Files</a>
              <ul class="dropdown-menu">
                <li>
                  <a onclick="openCity(event, 'Edit_Files_BSCSE')">BSCSE</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'Edit_Files_BSEEE')">BSEEE</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'Edit_Files_BBA')">BBA</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'Edit_Files_MSCSE')">MSCSE</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'Edit_Files_MSEEE')">MSEEE</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'Edit_Files_MBA')">MBA</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'Edit_Files_EMBA')">EMBA</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'Edit_Files_Economics')">Economics</a>
                </li>
                <li>
                  <a onclick="openCity(event, 'Edit_Files_INS')">INS</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      
      <div  id="Home">

        <div class="container">
          <h2>Home</h2> 
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
              <li data-target="#myCarousel" data-slide-to="6"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="Images/111.jpg" alt="Los Angeles" style="width:100%;">
              </div>
              <div class="item">
                <img src="Images/222.jpg" alt="Chicago" style="width:100%;">
              </div>
              <div class="item">
                <img src="Images/333.jpg" alt="New york" style="width:100%;">
              </div>
              <div class="item">
                <img src="Images/444.jpg" alt="Los Angeles" style="width:100%;">
              </div>
              <div class="item">
                <img src="Images/555.jpg" alt="Chicago" style="width:100%;">
              </div>
              <div class="item">
                <img src="Images/666.jpg" alt="New york" style="width:100%;">
              </div>
              <div class="item">
                <img src="Images/777.jpg" alt="Los Angeles" style="width:100%;">
              </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>  

      </div>
      <div id="Load_Files_BSCSE" class="tabcontent">
        <div>
          <h3>Load Files BSCSE Department</h3>
          <br><br><br>
          <p id="f1_upload_process">Loading...<br/><img src="loader.gif" /><br/></p>
          <div class="container-fluid">
            
            <form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
              <label>Load BSCSE-Full-Routine: </label>
                <div class="input-group col-md-6">
                  <input class="form-control width50 btn btn-light" name="myfile" type="file" />
                  <span class="input-group-btn">
                    <input class="btn btn-light" type="submit" name="submitBtn" value="Upload" />
                  </span>
                </div>
            </form>
            <br><br>
            <form action="uploadTeachers.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
              <label>Load Teachers-BSCSE: </label>
              <div class="input-group col-md-6">
                <input class="form-control btn btn-light" name="myfile" type="file" />
                <span class="input-group-btn">
                <input class="btn btn-light" type="submit" name="submitBtn" value="Upload" />
              </span>
              </div>
            </form>
            <br><br>
            <form action="uploadRoom.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
              <label>Load Room-info: </label>
              <div class="input-group col-md-6">
                <input class="btn btn-light" name="myfile" type="file" />
                <span class="input-group-btn">
                      <input class="btn btn-light" type="submit" name="submitBtn" value="Upload" />
                </span>
              </div>
            </form>
            <br><br>
            <form action="uploadSections.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
              <label>Load Sections-info-BSCSE: </label>
              <div class="input-group col-md-6">
                <input class="btn btn-light" name="myfile" type="file" />
                <span class="input-group-btn">
                      <input class="btn btn-light" type="submit" name="submitBtn" value="Upload" />
                  </span>
                </div>
            </form>

             <br><br>

            <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>   

          </div>

          <div class="text-center">
            <form action="LoadFile/" method="" target="upload_target">
              <button type="submit" class="btn btn-light" >Generate</button>
            </form>
          </div>
          <br><br>
          <br><br>
          <br><br>
        </div>
      </div>
      <div id="Load_Files_MSCSE" class="tabcontent">
        <div>
          <h3>Load Files MSCSE Department</h3>
          <div class="container-fluid">
            <a href="#" class="button button4">Upload Unoptimized routine</a>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-light">Generate</button>
          </div>
        </div>
      </div>
      <div id="Load_Files_BSEEE" class="tabcontent">
        <div>
          <h3>Load Files BSEEE Department</h3>
          <div class="container-fluid">
            <a href="#" class="button button4">Upload Unoptimized routine</a>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-light">Generate</button>
          </div>
        </div>
      </div>
      <div id="Load_Files_MSEEE" class="tabcontent">
        <div>
          <h3>Load Files MSEEE Department</h3>
          <div class="container-fluid">
            <a href="#" class="button button4">Upload Unoptimized routine</a>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-light">Generate</button>
          </div>
        </div>
      </div>
      <div id="Load_Files_MBA" class="tabcontent">
        <div>
          <h3>Load Files MBA Department</h3>
          <div class="container-fluid">
            <a href="#" class="button button4">Upload Unoptimized routine</a>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-light">Generate</button>
          </div>
        </div>
      </div>
      <div id="Load_Files_EMBA" class="tabcontent">
        <div>
          <h3>Load Files EMBA Department</h3>
          <div class="container-fluid">
            <a href="#" class="button button4">Upload Unoptimized routine</a>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-light">Generate</button>
          </div>
        </div>
      </div>
      <div id="Load_Files_Economics" class="tabcontent">
        <div>
          <h3>Load Files Economics Department</h3>
          <div class="container-fluid">
            <a href="#" class="button button4">Upload Unoptimized routine</a>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-light">Generate</button>
          </div>
        </div>
      </div>
      <div id="Load_Files_INS" class="tabcontent">
        <div>
          <h3>Load Files INS Department</h3>
          <div class="container-fluid">
            <a href="#" class="button button4">Upload Unoptimized routine</a>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-light">Generate</button>
          </div>
        </div>
      </div>
      <div id="Load_Files_BBA" class="tabcontent">
        <div>
          <h3>Load Files BBA Department</h3>
          <div class="container-fluid">
            <a href="#" class="button button4">Upload Unoptimized routine</a>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-light">Generate</button>
          </div>
        </div>
      </div>
      <div id="Edit_Files_BSCSE" class="tabcontent">
        <h3>Edit Files BSCSE Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="Edit file/EditFullRoutineBSCSE.php" class="button button4">Edit Full Routine</a>
              <a href="Edit file/EditTeacherBSCSE.php" class="button button4">Edit Faculty List</a>
              <a href="Edit file/EditRoomInfo.php" class="button button4" >Edit Room numbers</a>
              <a href="Edit file/Edit-Course-BSCSE.php" class="button button4" >Edit Course List</a>
              <a href="Edit file/EditTimeslot.php" class="button button4" >Edit Time Slots</a>
              <a href="Edit file/EditLabInfo.php" class="button button4" >Edit Laboratory</a>
              <a href="Edit file/EditSectionsBSCSE.php" class="button button4" >Edit Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Edited routine Download</button>
        </div>
      </div>
      <div id="Edit_Files_BSEEE" class="tabcontent">
        <h3>Edit Files BSEEE Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="Edit file/" class="button button4">Edit Full Routine</a>
              <a href="Edit file/EditTeacherBSEEE.php" class="button button4">Edit Faculty List</a>
              <a href="Edit file/EditRoomInfo.php" class="button button4" >Edit Room numbers</a>
              <a href="Edit file/Edit-Course-BSEEE.php" class="button button4" >Edit Course List</a>
              <a href="Edit file/EditTimeslot.php" class="button button4" >Edit Time Slots</a>
              <a href="Edit file/EditLabInfo.php" class="button button4" >Edit Laboratory</a>
              <a href="Edit file/EditSectionsBSEEE.php" class="button button4" >Edit Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Edited routine Download</button>
        </div>
      </div>
      <div id="Edit_Files_BBA" class="tabcontent">
        <h3>Edit Files BBA Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="Edit file/EditFullRoutineBBA.php" class="button button4">Edit Full Routine</a>
              <a href="Edit file/EditTeacherBBA.php" class="button button4">Edit Faculty List</a>
              <a href="Edit file/EditRoomInfo.php" class="button button4" >Edit Room numbers</a>
              <a href="Edit file/Edit-Course-BBA.php" class="button button4" >Edit Course List</a>
              <a href="Edit file/EditTimeslot.php" class="button button4" >Edit Time Slots</a>
              <a href="Edit file/EditLabInfo.php" class="button button4" >Edit Laboratory</a>
              <a href="Edit file/EditSectionsBBA.php" class="button button4" >Edit Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Edited routine Download</button>
        </div>
      </div>
      <div id="Edit_Files_MSEEE" class="tabcontent">
        <h3>Edit Files MSEEE Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="Edit file/" class="button button4">Edit Full Routine</a>
              <a href="Edit file/" class="button button4">Edit Faculty List</a>
              <a href="Edit file/EditRoomInfo.php" class="button button4" >Edit Room numbers</a>
              <a href="Edit file/" class="button button4" >Edit Course List</a>
              <a href="Edit file/EditTimeslot.php" class="button button4" >Edit Time Slots</a>
              <a href="Edit file/EditLabInfo.php" class="button button4" >Edit Laboratory</a>
              <a href="Edit file/" class="button button4" >Edit Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Edited routine Download</button>
        </div>
      </div>
      <div id="Edit_Files_MSCSE" class="tabcontent">
        <h3>Edit Files MSCSE Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="Edit file/" class="button button4">Edit Full Routine</a>
              <a href="Edit file/" class="button button4">Edit Faculty List</a>
              <a href="Edit file/EditRoomInfo.php" class="button button4" >Edit Room numbers</a>
              <a href="Edit file/" class="button button4" >Edit Course List</a>
              <a href="Edit file/EditTimeslot.php" class="button button4" >Edit Time Slots</a>
              <a href="Edit file/EditLabInfo.php" class="button button4" >Edit Laboratory</a>
              <a href="Edit file/" class="button button4" >Edit Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Edited routine Download</button>
        </div>
      </div>
      <div id="Edit_Files_Economics" class="tabcontent">
        <h3>Edit Files Economics Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="Edit file/" class="button button4">Edit Full Routine</a>
              <a href="Edit file/" class="button button4">Edit Faculty List</a>
              <a href="Edit file/EditRoomInfo.php" class="button button4" >Edit Room numbers</a>
              <a href="Edit file/" class="button button4" >Edit Course List</a>
              <a href="Edit file/EditTimeslot.php" class="button button4" >Edit Time Slots</a>
              <a href="Edit file/EditLabInfo.php" class="button button4" >Edit Laboratory</a>
              <a href="Edit file/" class="button button4" >Edit Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Edited routine Download</button>
        </div>
      </div>
      <div id="Edit_Files_EMBA" class="tabcontent">
        <h3>Edit Files EMBA Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="Edit file/" class="button button4">Edit Full Routine</a>
              <a href="Edit file/" class="button button4">Edit Faculty List</a>
              <a href="Edit file/EditRoomInfo.php" class="button button4" >Edit Room numbers</a>
              <a href="Edit file/" class="button button4" >Edit Course List</a>
              <a href="Edit file/EditTimeslot.php" class="button button4" >Edit Time Slots</a>
              <a href="Edit file/EditLabInfo.php" class="button button4" >Edit Laboratory</a>
              <a href="Edit file/" class="button button4" >Edit Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Edited routine Download</button>
        </div>
      </div>
      <div id="Edit_Files_MBA" class="tabcontent">
        <h3>Edit Files MBA Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="Edit file/" class="button button4">Edit Full Routine</a>
              <a href="Edit file/" class="button button4">Edit Faculty List</a>
              <a href="Edit file/EditRoomInfo.php" class="button button4" >Edit Room numbers</a>
              <a href="Edit file/" class="button button4" >Edit Course List</a>
              <a href="Edit file/EditTimeslot.php" class="button button4" >Edit Time Slots</a>
              <a href="Edit file/EditLabInfo.php" class="button button4" >Edit Laboratory</a>
              <a href="Edit file/" class="button button4" >Edit Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Edited routine Download</button>
        </div>
      </div>
      <div id="Edit_Files_INS" class="tabcontent">
        <h3>Edit Files INS Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="Edit file/" class="button button4">Edit Full Routine</a>
              <a href="Edit file/" class="button button4">Edit Faculty List</a>
              <a href="Edit file/EditRoomInfo.php" class="button button4" >Edit Room numbers</a>
              <a href="Edit file/" class="button button4" >Edit Course List</a>
              <a href="Edit file/EditTimeslot.php" class="button button4" >Edit Time Slots</a>
              <a href="Edit file/EditLabInfo.php" class="button button4" >Edit Laboratory</a>
              <a href="Edit file/" class="button button4" >Edit Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Edited routine Download</button>
        </div>
      </div>
      <div id="View_Files_BSCSE" class="tabcontent">
        <h3>View Files BSCSE Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="View file/ViewFullRoutineBSCSE.php" class="button button4">View Full Routine</a>
              <a href="View file/ViewTeacherBSCSE.php" class="button button4">View Faculty List</a>
              <a href="View file/ViewRoomInfo.php" class="button button4" >View Room numbers</a>
              <a href="View file/View-Course-BSCSE.php" class="button button4" >View Course List</a>
              <a href="View file/ViewTimeslot.php" class="button button4" >View Time Slots</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Laboratory</a>
              <a href="View file/ViewSectionsBSCSE.php" class="button button4" >View Sections</a>
            </div>
          </div>
            
        <div class="text-center">
            <button type="button" class="btn btn-light">Download</button>
        </div>
      </div>
      <div id="View_Files_BSEEE" class="tabcontent">
        <h3>View Files BSEEE Department</h3>
        <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="View file/ViewFullRoutineBSEEE.php" class="button button4" >View Full Routine</a>
              <a href="View file/ViewTeacherBSEEE.php" class="button button4" >View Faculty List</a>
              <a href="View file/ViewRoomInfo.php" class="button button4" >View Room numbers</a>
              <a href="View file/View-Course-BSEEE.php" class="button button4" >View Course List</a>
              <a href="View file/ViewTimeslot.php" class="button button4" >View Time Slots</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Laboratory</a>
              <a href="View file/ViewSectionsBSEEE.php" class="button button4" >View Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Download</button>
        </div>
      </div>
      <div id="View_Files_BBA" class="tabcontent">
        <h3>View Files BBA Department</h3>
        <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="View file/ViewFullRoutineBBA.php" class="button button4" >View Full Routine</a>
              <a href="View file/ViewTeacherBBA.php" class="button button4" >View Faculty List</a>
              <a href="View file/ViewRoomInfo.php" class="button button4" >View Room numbers</a>
              <a href="View file/View-Course-BBA.php" class="button button4" >View Course List</a>
              <a href="View file/ViewTimeslot.php" class="button button4" >View Time Slots</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Laboratory</a>
              <a href="View file/ViewSectionsBBA.php" class="button button4" >View Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Download</button>
        </div>
      </div>
      <div id="View_Files_MBA" class="tabcontent">
        <h3>View Files MBA Department</h3>
          <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="View file/" class="button button4">View Full Routine</a>
              <a href="View file/" class="button button4" >View Faculty List</a>
              <a href="View file/ViewRoomInfo.php" class="button button4" >View Room numbers</a>
              <a href="View file/ViewCourseList.php" class="button button4" >View Course List</a>
              <a href="View file/ViewTimeslot.php" class="button button4" >View Time Slots</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Laboratory</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Download</button>
        </div>
      </div>
      <div id="View_Files_EMBA" class="tabcontent">
        <h3>View Files EMBA Department</h3>
        <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="#" class="button button4" >View Full Routine</a>
              <a href="#" class="button button4" >View Faculty List</a>
              <a href="View file/ViewRoomInfo.php" class="button button4" >View Room numbers</a>
              <a href="View file/ViewCourseList.php" class="button button4" >View Course List</a>
              <a href="View file/ViewTimeslot.php" class="button button4" >View Time Slots</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Laboratory</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Download</button>
        </div>
      </div>
      <div id="View_Files_Economics" class="tabcontent">
        <h3>View Files Economics Department</h3>
        <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="#" class="button button4" >View Full Routine</a>
              <a href="#" class="button button4" >View Faculty List</a>
              <a href="View file/ViewRoomInfo.php" class="button button4" >View Room numbers</a>
              <a href="View file/ViewCourseList.php" class="button button4" >View Course List</a>
              <a href="View file/ViewTimeslot.php" class="button button4" >View Time Slots</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Laboratory</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Download</button>
        </div>
      </div>
      <div id="View_Files_MSCSE" class="tabcontent">
        <h3>View Files MSCSE Department</h3>
        <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="#" class="button button4" >View Full Routine</a>
              <a href="#" class="button button4" >View Faculty List</a>
              <a href="View file/ViewRoomInfo.php" class="button button4" >View Room numbers</a>
              <a href="View file/ViewCourseList.php" class="button button4" >View Course List</a>
              <a href="View file/ViewTimeslot.php" class="button button4" >View Time Slots</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Laboratory</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Download</button>
        </div>
      </div>
      <div id="View_Files_MSEEE" class="tabcontent">
        <h3>View Files MSEEE Department</h3>
        <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="#" class="button button4" >View Full Routine</a>
              <a href="#" class="button button4" >View Faculty List</a>
              <a href="View file/ViewRoomInfo.php" class="button button4" >View Room numbers</a>
              <a href="View file/ViewCourseList.php" class="button button4" >View Course List</a>
              <a href="View file/ViewTimeslot.php" class="button button4" >View Time Slots</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Laboratory</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Download</button>
        </div>
      </div>
      <div id="View_Files_INS" class="tabcontent">
        <h3>View Files INS Department</h3>
        <div class="container-fluid">
            <div class="btn-group btn-group-justified">
              <a href="#" class="button button4" >View Full Routine</a>
              <a href="#" class="button button4" >View Faculty List</a>
              <a href="View file/ViewRoomInfo.php" class="button button4" >View Room numbers</a>
              <a href="View file/ViewCourseList.php" class="button button4" >View Course List</a>
              <a href="View file/ViewTimeslot.php" class="button button4" >View Time Slots</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Laboratory</a>
              <a href="View file/ViewLabInfo.php" class="button button4" >View Sections</a>
            </div>
          </div>
        <div class="text-center">
            <button type="button" class="btn btn-light">Download</button>
        </div>
      </div>
    
    </body>
    <script>
      function openCity(evt, workName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(workName).style.display = "block";
        $("#Home").css("display", "none");
        evt.currentTarget.className += " active";
      }

      

      </script>
      <script type="text/javascript">
        $("#homeButton").on("click", function(){
            $('#Home').css('display','block');
            $('.tabcontent').css('display','none');
        });

       
      </script>

      

</html> 
