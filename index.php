<!DOCTYPE html>

<html>
<head>
   <title>MY Blog</title>
   <meta charset="UTF-8"> 
   <meta name="keywords" content="blog,personal blog, web developer, web blog, portfolio">
   <meta name="description" content="personal blog contains information about my portfolio such as experiences, education and skills provided">
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	
  <link rel="stylesheet" type="text/css" href="slick-1.5.0/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick-1.5.0/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="slick-1.5.0/slick/slider.css"/>
<script>
$(document).ready(function(){
 
$('#submit').click(function(){
 
$.post("send.php", $("#mycontactform").serialize(),  function(response) {
$('#message').html(response);
//$('#success').hide('slow');
});
return false;
 
});
 
});
</script>
	
</head>


<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="lightbox.js"></script>
	<script>
	$(document).ready(function(){
	
		$("#home").click(function(){
			$("#main div").fadeOut(1);
			$("#home_tab").fadeIn();
	
		})
		
		$("#bio").click(function(){
			$("#main div").fadeOut(1);
			$("#bio_tab").fadeIn();
		})
		
		$("#experience").click(function(){
		    $("#main div").fadeOut(1);
			$("#experience_tab").fadeIn();
		})
		$("#skills").click(function(){
		    $("#main div").fadeOut(1);
			$("#skills_tab").fadeIn();
		})

		$("#education").click(function(){
			$("#main div").fadeOut(1);
			$("#education_tab").fadeIn();
		})
	    $("#project").click(function(){
		  $("#main div").fadeOut(1);
		  $("#project_tab").fadeIn();
		
		})
		
		$("#testimonials").click(function(){
		  $("#main div").fadeOut(1);
		  $("#testimonials_tab").fadeIn();
		  $(".slider").fadeIn();
		  $("#test").fadeIn();
		  $("#test1").fadeIn();
		  $("#test2").fadeIn();
		})
		
	});
	</script>
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick-1.5.0/slick/slick.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
  $('.slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  arrows:true,
  dots:true,
  autoplaySpeed: 1000,
});
});
</script>
  <main>
   <aside>
    <img src="images/myimage.png">
	
	<p>MAHINDRA REDDY SOMU</p>
	   <p> JUNIOR WEB DEVELOPER</p>	
    <p>________________________</p>
    <p>________________________</p>
  <nav>
   <ul>
   <li><a href="#" id="home">HOME</a></li>
   <li><a href="#" id="bio">MAHINDRA'S BIO</a></li>
   <li><a href="#" id="experience">EXPERIENCE</a></li>
   <li><a href="#" id="skills"> SKILLS</a></li>
   <li><a href="#" id="education">EDUCATION</a></li>
   <li><a href="#" id="project">PROJECTS</a></li>
   <li><a href="#" id="testimonials">TESTIMONIALS</a></li>
   <li><a href="#" id="contact">CONTACT</a></li>
   </ul>
 </nav>
   <p>________________________</p>
   <p>________________________</p>
 
  <ul class="updates">
  <li><a href="#" id="tech"> Technology Updates</a></li>
  <li><a href="#" id="pro"> Relevant Projects</a></li>
  <li><a href="#" id="location"> Preferred Locations</a></li>
  <li><a href="#" id="status"> Visa Status</a></li>
  </ul> 
 
 </aside>
 <section>
 <p style="font-size:18px;line-height:24px; font-family:Roboto, Arial, sans-serif;font-weight:500; <!-- position:fixed -->"><span style="font-size:30px;">I</span>nnovative Web Developer looking for a successful & productive career in software development/consultancy </p>
 <div id="main">  
   <div id="wrapper"> 
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/jobseeker1.png" data-thumb="images/jobseeker1.png" alt="About us" />
                <img src="images/edu3.jpg" data-thumb="images/edu3.jpg" alt="Education" title="Education Qualifications" />
                <img src="images/technical.png" data-thumb="images/technical.png" alt="Technical-skills" title="Soft-Skills" />
                <img src="images/exp.jpg" data-thumb="images/exp.jpg" alt="Experience" title="Work Experience" />
                <img src="images/projects.jpg" data-thumb="images/projects.jpg" alt="projects" title="Academic Projects" />
                <img src="images/testimonials.jpg" data-thumb="images/testimonials.jpg" alt="achievements" title="Testimonials" />
                <img src="images/contact-us.jpg" data-thumb="images/contact-us.jpg" alt="contact-us" title="Contact Details" />
				
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>My</strong>Blog<em>Portfolio</em> <a href="#">Home</a>. 
            </div>
        </div>
    <h2>Professional Synopsis:</h2>
   <ul>
     <li>2 years of experience in Web Application Development and Good Knowledge on Software Testing</li>
	 <li>Experience in Software Development and Relational Database Management Systems (RDBMS)</li>
	 <li>Clear Understanding of object oriented concepts (oops) and practices</li>
	 <li>Understanding and analysing project requirements and translating it into specifications and programming</li>
	 <li>Participate to create, execute and maintain test cases and scenarios for developed web functionality</li>
	 <li>Involved in execution of automated test cases using Selenium Web Driver based Quality requirements</li> 
	 <li>Practical exposure of working in all the phases of the project lifecycle</li>
	 <li>Good understanding of different software methods like Agile and Waterfall</li>
	 <li>Good communication, analytical and possessing different methods to solve problem</li>
	 <li>Effective Client management skills and leadership skills</li>
    </ul>
</div>

 <div id="home_tab" style="display:none">
 <img src="images/jobseeker1.png" style="width:100%; height:25%;" alt="Mahindra's Bio">
 <div id="wrapper">
       <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/about.png" data-thumb="images/toystory.jpg" alt="About us" />
                <img src="images/edu1.jpg" data-thumb="images/up.jpg" alt="Education" title="Education Qualifications" />
                <img src="images/technical.png" data-thumb="images/walle.jpg" alt="Technical-skills" title="Technical-soft-skills"/>
                <img src="images/exp.jpg" data-thumb="images/nemo.jpg" alt="Experience" title="Work Experience" />
                <img src="images/projects.jpg" data-thumb="images/nemo.jpg" alt="projects" title="Academic Projects" />
                <img src="images/achev2.png" data-thumb="images/nemo.jpg" alt="achievements" title="Achievements" />
                <img src="images/contact-us.jpg" data-thumb="images/nemo.jpg" alt="contact-us" title="Contact Details" />	
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>My</strong>Blog<em>Portfolio</em> <a href="#">Home</a>. 
            </div>
        </div>
   </div>
 
   <h2>Professional Synopsis:</h2>
   <ul>
     <li>2 years of experience in Web Application Development and Good Knowledge on Software Testing</li>
	 <li>Experience in Software Development and Relational Database Management Systems (RDBMS)</li>
	 <li>Clear Understanding of object oriented concepts (oops) and practices</li>
	 <li>Understanding and analysing project requirements and translating it into specifications and programming</li>
	 <li>Participate to create, execute and maintain test cases and scenarios for developed web functionality</li>
	 <li>Involved in execution of automated test cases using Selenium Web Driver based Quality requirements</li> 
	 <li>Practical exposure of working in all the phases of the project lifecycle</li>
	 <li>Good understanding of different software methods like Agile and Waterfall</li>
	 <li>Good communication, analytical and possessing different methods to solve problem</li>
	 <li>Effective Client management skills and leadership skills</li>
    </ul>
 </div> 

 <div id="bio_tab" style="display:none">
  <img src="images/jobseeker1.png" style="width:100%; height:25%;" alt="Mahindra's Bio">
  <h1 style="text-align:center;">Mahindra's bio</h1>
  <p>My most recent employment position was as a Junior Web Developer with Digilogue website Solutions and I performed to a remarkable standard in this challenging role for more than a year. 
  This role, in conjunction with previous educational pursuits, has been instrumental in the acquisition and development of a wide variety of professional skills necessary for a successful career within the software architect and consultant professions.<br/> <br/> 
  I possess substantial expertise in relation to project management within a results-orientated working environment, utilising my substantial IT skills and expertise to ensure the delivery of exceptional results.
  For example, in my current role as a Mobile App Developer with Woodrow Sustainable Solutions, I have been fully responsible for the design of excellent apps for use in the environmental science sector, namely the EcoLog Mobile Application and GeoLog Mobile Application.<br/> <br/>
  Through the use of my innovative professional approach I ensured the inclusion of various key features, such as a capability to store multiple customized forms in the app and reuse them as per requirements and facilitating access to remote point and polygon and polyline drawing on Google map through 3G/ Wi-Fi, in-app purchase subscription etc.<br/> <br/> 
  My educational pursuits have been key in the development of a wide variety of crucial professional skills, such as resolving complex problems through the use of my detail-orientated capabilities to devise inventive solutions and oversee their efficient implementation.
  My ability to deliver high quality results was recognized by various institutions, having received academic scholarships and sponsorship to further my professional knowledge and expertise.<br/> <br/> 
  I am always willing to develop my professional contacts and connect with professionals of a similar mindset so please do not hesitate to get in contact with the provided details and I will be in touch as soon as possible.
  </p>
 </div>
 
  <div id="experience_tab" style="display:none">
    <img src="images/exp.jpg" style="width:100%; height:25%;" alt="Experience">
		<h2><em><u>Experience</u></em></h2>
      <h3><em>Junior Web Developer (Nov 2014 to Present), Digilogue, Galway</em></h3>
	  <h2>Project Title:The National Induction Programme for Teachers (NIPT):</h2>
	  <p>The main Objective of project supports the induction of newly qualified teachers (NQTs), both primary and post-primary into the teaching profession in Ireland</p>
      <p><strong><em>Responsibilities:</em></strong></p>
	  <ul>
	    <li>Understanding and analysing project requirements and translating it into specifications and programming</li>
	    <li>Implement user interface and client displays with HTML5, CSS3 and JavaScript</li>
	    <li>Develop PHP based model application to reflect upon the web functionality</li>
	    <li>Use MYSQL to Engage with the database for manipulating the query on XAMPP</li>
	    <li>Support execution of automate test cases using Selenium Web Driver based Quality requirements </li>
      </ul>
	  
      <h3><em>Web Developer Intern (November 2013 to May 2014),Smart Points Ltd (Loylap), Dublin.</em></h3>
      <h2>Project Title:Loylap Web Application</h2>
	  <p> Loylap Web Application: Application supports for improve interaction between users and local business by providing stamp, product free and Cash Back Loyalty.</p>
    <p> <strong><em> Responsibilities:</em></strong></p>
    <ul>
	 <li>Implemented user interface with HTML5, JQuery and CSS3 based on the high fidelity prototype</li>

	 <li>Used JavaScript for the page validations to meet the requirements</li>

	 <li>Developed PHP based model application to reflect upon the web functionality.</li>

	 <li>Used MySQL Workbench to engage the database for manipulating the query with Apache Server.</li> 
    </ul> 

    <h3><em>Software Developer (May 2011 to July 2012), Srashtaa Software Limited, India.</em></h3>

   <p><strong><em>Responsibilities:</em></strong></p>
 
   <ul class="list">

	 <li>Implemented user interface and client displays with HTML, CSS, JavaScript.</li>

	 <li>Developed PHP based model application to reflect upon the web functionality.</li>

   </ul>
		
 </div>
 <div id="skills_tab" style="display:none">
    <img src="images/tech3.jpg" style="width:100%; height:25%;" alt="Skills">
   <ul>
	<h1>Software proficiency:</h1>
	<li>Language: PHP and Java</li>
	<li>Testing: Manual, Automation, Selenium(Web Driver, IDE), Junit and TestNg</li>
	<li>Web Technologies: HTML5, Java Script(JQuery), Ajax, XML and CSS3</li>
	<li>CMS : Word press and Drupal; Advanced Technologies: Cloud Computing, Amazon EC2</li>
	<li>Operating Systems: Windows XP/07/08 and Windows Vista</li>
	<li>Database : MySQL (RDBMS) and SQL</li>
	<li>SDLC Methodologies : Agile(Scrum) and Waterfall</li>
	<li>Tools : MS office, Adobe Photoshop, Visual Paradigm, IDE Eclipse and Dream viewer</li>
	<li>Bug Tool : Mozilla Firebug and JIRA</li>
	<li>Version Control: GIT; UML : Design Patterns</li>
  </ul>
 </div>
 <div id="education_tab" style="display:none">
   <img src="images/edu3.jpg" style="width:100%; height:25%;" alt="Education">
		
   <h1><strong><em><u>Educational Background:</u></em></strong></h1><br/>
   
   <h2><em>Masters in Software Engineering, University of Limerick, Ireland</em></h2><br/>

    <ul>
     <li>September 2012 - August 2014</li>
	 <li>Accumulated GPA: 3.15/4, (2.1) Honours</li>
	 <li>Key Subjects: Cloud Computing Concepts, Concurrency Programming, Software Design, Software Architecture, Software Quality and Software Requirements</li>
	 <li>Masters dissertation Title: Research on Data storage failures in cloud computing</li>
    </ul>


  <h2><em>Bachelor of Engineering in Computer Science, JNTU, India</em></h2><br/>
   <ul>
     <li>September 2007-March 2011</li>
	 <li>Accumulated GPA: 7.1 /10, Grade Awarded: First Honours.</li>
	 <li>Key Subjects: Web Technology, Computer Networks, Database Management System and Fundamentals of Computing  algorithms, data structures, operating systems, object oriented systems &  design</li>
	 <li>Principal Project: Interactive Smart Board Design</li>
   </ul>
 </div>
 
 <div id="project_tab" style="display:none">
  <img src="images/projects2.jpg" style="width:100%; height:25%;" alt="Academic Projects">
  <h2><strong><em><u>Final Projects:</u></em></strong></h2><br/><br/>
   
  <h2><strong>Dissertation Title (Master thesis):</strong> Research on Data storage failures in cloud computing:</h2>
  <p>
   This Research reveals the state-of-the-art of Cloud Computing and main focus on Infrastructure as a service in cloud computing. This thesis reviews both the basic and essential requirement topics on cloud service models and deployment models in cloud computing with the goal of summarizing the advances in this technology. We also review the purpose and data storage mechanisms of popular cloud providers such as Amazon EC2, S3, Google Drive, Drop- Box, Microsoft Azure, Apple, salesforce.com, Facebook, Sky drive and IBM. In particular, we focus on the main reasons for data storage failures (i.e., server breakdowns) and review the best solutions to resolve failures of five different clouds
  </p>

   <h2><strong>Principal Project:</strong>Interactive Smart Board Design</h2><br/>
   <p>The Overview of “Interactive smart board Design” is used User Interface Design (UID) Technology to display Information regarding to the students,staff and Updated Information in Colleges and Universities. This Project main goal is to allow Student's, Staff to interact with the smart board for access exam timetables, lecture timetable and Visitor's can access Information about the college or University. We used technologies in Html, Jquery (Java Script), PHP and MySQL to develop "Interactive Web Pages".
   </p>

 </div>
 <div id="testimonials_tab" style="display:none">
  <img src="images/testimonials3.jpg" style="width:100%; height:25%;" alt="Testimonials">
  <h2 style="text-align:center">Testimonials</h2>
  <p>Hear what some of my clients and colleagues have to say about me after working together on various projects throughout my career.</p>
  <div class="slider" style="display:none">
    <div id="test" style="display:none">
   <span><img src="https://media.licdn.com/mpr/mprx/0_DjKFeZFzTDlJCxpI7g_ZeVk4iEbeCxSIfVkZeV5bp7PMgRswTR8I6sAWDXFn3ZuF2OtJbgBUgu8W" alt="Testimonials"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nikola S. Nikolov</strong></span>
   <h4>Lecturer in Computer Science at the University of Limerick</h4>
   <p>“I supervised Mahindra's M.Sc. in Software Engineering thesis at the University of Limerick. 
     Mahindra stood out as one of the best students in his class and his thesis on data storage failures in cloud computing received an excellent grade.
     Mahindra is a responsible individual with a solid background in computer science and software engineering. I am confident that he will be a great addition to any software development team.”</p>
   </p>
  </div>
  <div id="test1" style="display:none">
     <span><img src="https://lh3.googleusercontent.com/-83kpmqDbJCE/AAAAAAAAAAI/AAAAAAAAHyY/LAmzjhF10VY/s120-c/photo.jpg" alt="Testimonials"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Seaghan Moriarty</strong></span>
     <h4>Director/CEO, Digilogue.Net</h4>
     <p>“We employed Mahindra Reddy Somu for a 6 months to develop a dynamic Web application for NIPT team to provide training for newly qualified teachers over the Ireland by providing mentor programs,workshops and website assistance programs. 
        The work required Mahindra to have a high level of ability in software development, undertake significant research, identify and resolve problems, and ensure a high level of communication with potential users to ensure usability. Mahindra was up to the challenge on all counts and, in particular, showed himself to be very capable at software development, problem solving and working on his own initiative. I would not hesitate to recommend Mahindra for similar roles.<br/> seaghan@digilogue.net”
	 </p>
  </div>
  <div id="test2" style="display:none">
      <span><img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/005/098/2c9/2be49d1.jpg" alt="Testimonials"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Conor</strong></span>
      <h4>CEO, Smart Points Ltd </h4>
	  <p>“Mahindra has worked on an innovative Loylap Web app development project as Web Developer Intern for 6 months. 
	  He has taken responsibility for the Web application construction and has consistently maintained the highest level of professionalism, dedication and enthusiasm throughout the project. 
	  The high level of originality in the Web application precluded simply using or adapting existing solutions but rather required the creative solutions within an existing complex operating environment. 
	  I commend Mahindra for his work and will be happy to provide further detail to anyone who needs it. <br/> conor@loylap.com”</p>
  </div> 
  </div>  
  
</div>
</div>
 </section>
</main>
 <footer>
 <!-- <div id="contact-tab"  style="display:none" > -->
 
 <div id="form">
 <div id="message"></div>
<?php
  if(@$_REQUEST['insert']=="succ")
  {
	  
	  echo "<h2>Thanks for your message and will get back to you as soon as possible</h2>";
  }
 if(@$_REQUEST['insert']=="failed")
  {
 
	 
	 echo " </h2>your message has not been successfully sent. please send message once agian</h2>";
 }
 if(@$_REQUEST['insert']=="empty")
  {

        echo "<h2>All fields are required, please fill the form and try again.</h2>";
  }

?>
 
 <form method="post" id="mycontactform" action="">
 <table border="1" cellpadding="2" cellspacing="2">
 <tr><td><input type="text" name="name" id="name" size="50" placeholder="Enter Your Name" autocomplete="off" required=""></td></tr>
 <tr><td><input type="text" name="email" id="email" size="50" placeholder="Enter Your Email" autocomplete="off" required=""></td></tr>
 <tr><td><textarea name="msg" id="msg" cols="50" rows="10" placeholder="Enter Your Message" required=""></textarea></td></tr>
 <tr><td><input type="button" name="submit" id="submit" value="Send Mail"></td></tr>
 </table>
 </form>
 <a href="https://www.linkedin.com/profile/view?id=211501521&trk=nav_responsive_tab_profile"><img src="http://www.dwppc.com/wp-content/uploads/2015/04/linkedin_000.png" width="50" height="30"></a>
 <a href="https://twitter.com/"><img src="http://www.aspe-roi.com/blog/wp-content/uploads/2014/11/2000px-Twitter_Logo_Mini.svg_.png" width="50" height="30"></a>
 <a href="https://www.youtube.com/"><img src="http://cdn.arstechnica.net/wp-content/uploads/2013/10/new_youtube_logo_large_verge_medium_landscape.jpg" width="50" height="30"></a>
 </div>
 <!-- </div> -->
 <div class="contact">
 <h1>CONTACT ME</h1>
 <p>Get in touch with me if you would like to do business together, share an idea or just say hello.</p>
 <p>MAHINDRA REDDY SOMU</p>
 <p>Email Id:mahindrareddysomums@gmail.com</p>
 <p>Mobile No:+353-899623213</p>
 <p>1, An Larnach</p>
 <p>Bohermore,Galway
 <p>Ireland &nbsp;&nbsp; <a href="https://www.google.com/maps/d/viewer?mid=zUSgVR_a8RRI.k_Tk7fZSLNO8&ie=UTF8&t=h&oe=UTF8&msa=0"><img src="http://cdn.marketplaceimages.windowsphone.com/v8/images/f0d2a2e9-1976-4217-942d-4ae83789ac36?imageType=ws_icon_large" width="50" height="30"></a>
 </p><br/><br/>
 
 
 </div>

 <p style="text-align:center;">&copy:Copy Rights Reserved 2015 and Developed by <a href="#"> Mahindra</a></p>
 
 </footer>
</body>
</html>
