<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="icon" href="images/fevicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>Campus Recruitement</title>
    </head>
    <body class="body">
        <!--Navbar Swction-->
        <header class="header">
            <div class="div-header">
                <a href="https://www.sastra.edu/">
                    <img src="images/mainlogo.png" width="200px" height="70px" alt="SASTRA LOGO" class="image-logo"/>
                </a>
            </div>
            <nav class="navigation-navbar">
                <a class="link-home" href="#Home">
                    <span class="span-home">Home</span>
                </a>
                <a class="link-career" href="#Careers">
                    <span class="span-career">Careers</span>
                </a>
                <a class="link-company" href="#Company">
                    <span class="span-company">Companies</span>
                </a>
                <a href="#Reviews">
                    <span class="span-review">Reviews</span>
                </a>
                <a href="#Contact">
                    <span class="span-navcontact">Contact</span>
                </a>
            </nav>
        </header>
        <!--Home Swction-->
            <section class="section-home" id="Home">
                <div class="div-home">
                    <div class="div-homecol"></div>
                    <h3 class="heading3-home">
                        <span class="span-homehead">FindYourCareer</span>
                        <img src="images/bar.png" width="300px" height="120px" class="image-homeimgul"/>
                        <img class="image-home" width="600px" height="550px" src="images/home image.svg"/>
                        <span class="span-homecontent">
                            <span class="span-contdes">
                                FindYourCareer is an innovative online career portal that connects placement cell of SASTRA UNIVERSITY - students and corporates for effective campus recruitment
                                <br/>
                                <br/>
                            </span>
                        </span>
                        <a href="https://www.sastra.edu/">
                            <button class="button-campus">View Campus Details</button>
                        </a>
                        
                    </h3>
                </div>
            </section>
        <!--Career Swction-->
        <a href="#Careers">
            <section>
                <div>
                    
                    <img width="1100px" class="image-career" src="images/careers.png" id="Careers"/>
                    <h3 class="heading3-career">Careers</h3>
                    <a href="form.php"><button class="button-apply" >Apply Now</button></a>
                    <img src="images/bar.png" width="140px" height="75px" class="image-carrerimgul"/>

                   
                </div>
            </section>
        </a>
        <a>
            <section>
                <div>
                    
                    <h3 class="heading3-company" id="Company">Featured Company's</h3>
                    <img class="image-companyul" width="300px" height="75px" src="images/bar.png"/>
                    <a href="https://www.infosys.com">
                        <img class="image-infosys" width="150px" height="100px" src="images/Infosys-Logo.png"/>
                    </a>
                    <a href="https://tcs.com/">
                        <img src="images/tcs.png" class="image-tcs" width="150px" height="100px"/>
                    </a>
                    <a href="https://www2.deloitte.com/">
                        <img src="images/del.jpg" width="150px" height="100px" class="image-del"/>
                    </a>
                    <a href="https://www.accenture.com">
                        <img src="images/accenture-logo.png" class="image-acc" width="150px" height="100px"/>
                    </a>
                    <a href="https://www.suretiimf.com/">
                        <img src="images/sureit.png" class="image-sure" width="150px" height="100px"/>
                    </a>
                    <a href="https://www.icicibank.com/">
                        <img src="images/icici.gif" width="150px" height="100px" class="image-icici"/>
                    </a>
                    <a href="https://www.cityunionbank.com/">
                        <img src="images/cub.png" class="image-cub" width="150px" height="100px"/>
                    </a>
                </div>
            </section>
        </a>
        <a>
            <!--Review Swction-->
            <section>
                <div>
                    
                    <h3 class="heading3-reviews" id="Reviews">Reviews</h3>
                    <img src="images/bar.png" class="image-revul" height="75px" width="140px"/>
                </div>
                <div class="div-review">
                    <span class="span-reviewmain">
                        <span class="span-reviewcol">
                            <br/>
                            Reviews
                            <br/>
                            by our
                            <br/>
                            Recruiters!
                        </span>
                    </span>
                    <img src="images/reviewbg.jfif" width="750px" height="1024px" class="image-revbg"/>
                    <img src="images/revcontentbg.png" width="460px" height="595px" class="image-person1bg"/>
                    <img src="images/revcontentbg.png" width="430px" height="560px" class="image-person2bg"/>
                    <img src="images/per1.png" width="167px" height="173px" class="image-per1"/>
                    <img src="images/per2.jpg" width="150px" height="161px" class="image-per2"/>
                    <span class="span-per1main">
                        <span class="span-per1name">
                            Shalini
                            <br/>
                            HR, Sure Ti IML
                        </span>
                    </span>
                    <span class="span-per1reviewmmain">
                        <span class="span-reviewper1">"It was a great experience interacting with the students and collecting the data for handwriting collection. The students, volunteers, and placement team members were very co-operative and we are glad that the event was very successful."</span>
                    </span>
                    <span class="span-per2name">
                        <span>
                            Prasanth
                            <br/>
                            HR, Wipro PVL
                        </span>
                    </span>
                    <span class="span-per2reviewmmain">
                        <span class="span-reviewper2">"It was a pleasure to have the students as a part of our foundation family. The team was full of energy, knowledge, and ideas. We look forward to have a synergistic relationship in future and hire many more to join us from your esteemed institution for our other projects."</span>
                    </span>
                </div>
            </section>
        </a>
        <a>
            <!--Contact Section -->
            <section>
            <?php echo $alert; ?>
                <div>
                    <div>
                        <img src="images/contact.svg" class="image-contactbg" width="900px" height="600px"/>
                        <span class="span-contact" id="Contact">Contact Us !!</span>
                        <img src="images/bar.png" width="140px" height="75px" class="image-ul"/>
                        <form class="form-contact"  method="POST">
                            <span class="span-name">Name</span>
                            <input placeholder="Your Name" name="name" type="text" class="input-name"/ required>
                            <span class="span-mail">Email id</span>
                            <input placeholder="Your mail id"name="email" type="email" class="input-mail"/ required>
                            <span class="span-message">Message</span>
                            <textarea defaultValue="Your Issues / Suggestions" name="message" type="text"class="textarea-message" required></textarea>
                            <button class="button-submit" name="submit" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
        </a>
        <script type="text/javascript">
            if(window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);
            }
        </script>
        <script src="js/script.js"></script>
    </body>
</html>
