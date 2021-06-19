<?php include 'sendmail.php'; ?>
<?php include 'upload.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&family=Montserrat&display=swap" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="icon" href="images/fevicon.png">
        <link rel="stylesheet" href="css/formstyles.css">
        <title>Campus Recruitement</title>
    </head>

    <body>
    <?php echo $alert; ?>
      <div id="main">
        <div class="container">
        
        <header class="header">
            <h1 id="title" class="text-center">Job Application Form</h1>
            <p id="description" class="description text-center">Fill in to apply</p>
            <div class="bg-wrap">
                <img
                class="bg-img"
                src="images/applicationform.png";
                alt=""
                >
             </div>
          </header>
          <form id="survey-form" method="POST" enctype="multipart/form-data">
            
            <!-- name -->
            <div class="form-group">
              <label id="name-label" for="name">Name</label>
              <input type="text" name="Name" id="name" class="form-control" placeholder="Enter your Full name" required/>
            </div>
            
            <!-- Reg Number -->
            <div class="form-group">
              <label id="regbo-label" for="regno">Register Number</label>
              <input type="tel" name="RegisterNumber" id="regno" pattern="[0-9]{9}" class="form-control" placeholder="Enter your Register Number" required/>
            </div> 
            
            <!-- Mail id -->
            <div class="form-group">
              <label id="email-label" for="email">Mail id</label>
              <input type="email" name="Email" id="email" class="form-control" placeholder="Enter your Sastra mail id" required/>
            </div> 
            
            <!-- Mobile Number-->
            <div class="form-group">
              <label id="mobno-label" for="mobno">Mobile Number</label>
              <input type="tel" name="MobileNumber" id="regno" pattern="[0-9]{10}" class="form-control" placeholder="Enter your Mobile Number" required/>
            </div> 
              
            <!-- Gender-->
            <div class="form-group">
              <p>Gender</p>
              <label>
                <input name="Gender"  type="radio" value='m' class="input-radio" checked/>
               Male</label>
               <label>
                <input name="Gender" type="radio" value='f' class="input-radio"/>
               Female</label>
            </div>  
            
            <!--DOB-->
            <div class="form-group">
              <label id="age-label" for="dateOfBirth">Date of birth</label>
                <input type="date" id="dateOfBirth" class="field date-field dob-field" name="DOB" min="1996-01-01" max="2005-09-18"  required/>
                    <span class="message"></span>
            </div> 
        

            
            <!-- Year of Graduation-->
            <div class="form-group">
              <label id="graduation-label" for="graduation">Year Of Graduation</label>
              <select id="dropdown" name="GraduationYear"class="form-control" required>
                    <option disabled selected value>Select your Year of Graduation</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
               </select>
            </div> 

            <!-- Qualification-->
            <div class="form-group">
              <label id="qualification-label" for="qualification">Qualification</label>
              <select id="dropdown" name="Qualification"class="form-control" required>
                    <option disabled selected value>Select your Qualification</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="BCA">BCA</option>
                    <option value="CCS">CCS</option>
                    <option value="MCS">MCS</option>
                    <option value="PCS">PCS</option>
                    <option value="BBA">BBA</option>
                    <option value="com">BCom</option>
               </select>
            </div> 
              
            <!--Role-->
            <div class="form-group">
                <p>Which type of job are you interested in?</p>
                <select id="dropdown" name="Role" class="form-control" required>
                    <option disabled selected value>Select role</option>
                    <option value="Internship">Internship</option>
                    <option value="Part--time">Part-Time</option>
                    <option value="Full--time" value="2021">Full-Time</option>
                    <option value="Freelancing">Freelancing</option>
                 </select>
            </div>
              
            <!--Department-->
            <div class="form-group">
              <p>Which Department are you applying for?</p>
              <label>
                <input name="Department" value="eg" type="radio" class="input-radio" checked/>
               Engineering</label>
               <label>
                <input name="Department" value="it" type="radio" class="input-radio"/>
               IT</label>
               <label>
                <input name="Department" value="bk" type="radio" class="input-radio"/>
               Banking</label>
               <label>
               <input name="Department" value="mk" type="radio" class="input-radio"/>
               Marketting</label>
               <label>
                <input name="Department" value="bd" type="radio" class="input-radio"/>
               Business Development</label>
               <label>
                <input name="Department" value="mg" type="radio" class="input-radio"/>
              Operations and Management</label>
            </div>  
            
           <!-- Confirmation-->
           <div class="form-group">
              <p> Please check the following if correct: <span class="clue">(Check all that apply)</span></p>
              <label>
                  <input name="Confirmations" value="nocr" type="checkbox" class="input-checkbox" />
               I currently don't have any criminal records.</label>
              <label>
                  <input name="Confirmations" value="srel" type="checkbox" class="input-checkbox" />
               I am willing to relocate if accepted.</label>
               <label>
                  <input name="Confirmations" value="upes" type="checkbox" class="input-checkbox" />
              I will uphold the company standards and work ethics.</label>
            </div>
             
           <!--University Name with fixed value - since it is only for sastra university-->
           <div class="form-group">
               <p>Name of University</p>
                <input type="text" name="UniversityName" id="name" class="form-control" value="SASTRA DEEMED UNIVERSITY" disabled/>
            </div>
            
            <!--Place of University-->
           <div class="form-group">
               <p>Place of University</p>
               <label>
                <input name="PlaceofUniverity" value="TNJ" type="radio" class="input-radio"/>
               Main campus - Thanjavur</label>
               <label>
                <input name="PlaceofUniverity" value="KMU" type="radio" class="input-radio"/>
              SRC - Kumbakonam</label>
            </div> 
              
            <!--CV-->    
            <div class="form-group">
             <p>Upload your cv</p>
                <input type="file" name="CVFile" accept=".doc,.docx,.pdf"  required/>
             </div>
              
            <!--Cover letter-->  
            <div class="form-group">
              <p>if you like to add more information please add it here:<span class="clue">(Optional)</span></p>
              <textarea id="comments" class="input-textarea" name="Comments" placeholder="Enter your comment here..."></textarea>
            </div>
            
            <!--Submit & Back Button -->
            
            <div class="form-group">
              <div align="centre" class="btn-grp">
              <button type="button" align="left" style="width:48%" class="back-button" onclick="goBack()">Back </button> 
              <button type="submit" align="right" id="submit" style="width:48%" name="submit" class="submit-button">Submit</button> 
              
              </div>
            
            
            </div>
              
            

            
            
           </form>
        </div>
      </div>
      <script type="text/javascript">
            if(window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);
            }

            function goBack() {
            window.history.back();
            }

        </script>
    </body>
</html>
