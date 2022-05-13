<?php
   include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search FAQ's</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="icon" href="assets/img/icon.png">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Mobile section -->
  <i class="bi bi-list mobile-nav-toggle"></i>

<main id="main">
<!-- ======= Search FAQ's Section ======= -->
  <section id="search" class="search">
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">
    <article class="entry">        
	<header class="section-header">
          <h2>FAQ's</h2>
          <p>Search FAQ's</p><br>
     <div class="container" >
     <div class="row mt-4">
     <div class="col-md-12 mx-auto bg-light rounded p-4 " >
        <h5 class="text-center font-weight-bold">HI,How Can We Help?</h5>
        <hr class="my-1">
        <h5 class="text-center text-secondary">Write any question in the search box</h5>
        <form action="seach.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <button type = "submit" name="submit-search" class="btn btn-info btn-lg rounded-0">search</button>
            </div>
          </div>
        </form>
      </div>
      </div>
      </div>
      </header>
          <div class="row gy-4">
            <div class="col-lg-6">
               <div class="entry-img">
                 <img src="assets/img/FAQ Logo.png" alt="" class="img-fluid">
               </div>   
			</div>
		   <div class="col-lg-6">
<!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist2">
			  <div class="accordion-item">
				  <div class="section-header">
					  <h2>Course Advisement</h2>
				  </div>
               		   <h2 class="accordion-header">
		                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">Who should take an Online Course?</button>
                       </h2>
				  
                		<div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                 			 <div class="accordion-body">
                   			   Students join our online courses for a variety of reasons and come from diverse backgrounds, professions, and age groups. With online courses, you can
								 <ul>
                                    <li>Advance your skill-set or begin a career change.</li>
                                    <li>Take the next step in your formal education.</li>
                                    <li>Ease the transition before entering a full-time academic program.</li>
                                    <li>Enjoy learning a new topic.</li>
								</ul>
                                Whatever the reason, our online courses are a flexible way of learning about the art world without disrupting your daily life.
                 		 	</div>
                		</div>
              	  </div>
				
                    <div class="accordion-item">
              			<h2 class="accordion-header">
                  		   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                 			   How do I select a course?
               			   </button>
             			 </h2>
             			 <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
              				 <div class="accordion-body">
                 				  Visit the course catalog to browse our offerings. In addition to searching by course duration and availability, you can also search by subject to ensure you find a course that reflects your interests. Though it is not required, we encourage those who have not studied art before to consider taking an art history course first to get a solid grounding in the discipline before exploring more specific disciplines. 
                 			   </div>
               			 </div>
              		   </div>

             			<div class="accordion-item">
                			<h2 class="accordion-header">
                  		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                   		        I am a high school student, can I join?
                  	           </button>
               		         </h2>
                	    	<div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                	   	 	  <div class="accordion-body">
                  		   		 Courses are open to all students 18 years or older. If you are under 18 years old, please contact us  to discuss further.
                  		    </div>
					      </div>
             	        </div>

					   <div class="accordion-item">
                			<h2 class="accordion-header">
                  				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-4">
                   			 	Can I take more than one course at a time?
                  				</button>
                   			 </h2>
                	     <div id="faq2-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                		     <div class="accordion-body">
                  		        If you are new to online learning, we recommend that you begin with one course. As our courses are offered frequently throughout the year, you can always come back and continue your studies with one or more topics.
                  		     </div>
					      </div>
             	         </div>
					 
					 	<div class="accordion-item">
                		     <h2 class="accordion-header">
                  			  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-5">
                   			    How long is my course?
                  			  </button>
               			      </h2>
                	      <div id="faq2-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                		    <div class="accordion-body">
                  		        We currently offer 4-week, 6-week, and 8-week courses. Check the course dates listed online prior to registration.
							 <ul>
                                  <li>For a 4-week or 6-week course, you can expect to spend 5-7 hours a week reviewing and completing the course material.</li>
                                  <li>For an 8-week course, you can expect to spend 8-10 hours a week reviewing and completing the course material.</li> 
						     </ul>
                                 You will also have read-only access to your course in Canvas for 90 days after its conclusion to review the course materials at your leisure.
                  		      </div>
					        </div>
             	            </div>
					 
					       <div class="accordion-item">
                		       <h2 class="accordion-header">
                  			    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-6">
                   			      Do I need to buy textbooks?
                  			    </button>
               			       </h2>
                	        <div id="faq2-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                		       <div class="accordion-body">
                                  All the reading materials you are required to access are included with your course. Instructors may provide  recommended and suggested texts for further exploration.
                  		       </div>
					         </div>
             	           </div>
					 
					       <div class="accordion-item">
                		    <h2 class="accordion-header">
                  			    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-7">
                   			         How do I contact technical support during my course?
                  			  </button>
               			     </h2>
                        	<div id="faq2-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                		      <div class="accordion-body">
                  	       	   For technical support, please email <a href="blog.html">online.support@sothebysinstitute.com</a>,   09:00 – 17:00 GMT, Monday – Friday. We are ready to help!
                  		     </div>
					       </div>
             	         </div>
				
          	     	   </div>
					
        	        </div>
				
                 </div><!-- End sidebar -->
			             <div class="row gy-4">
                   <div class="col-lg-6"><br><br>
<!-- F.A.Q List 2-->
           		     <div class="accordion accordion-flush" id="faqlist3">
					 
              		     <div class="accordion-item">
				          <div class="section-header">
						    <h2>Registration Process</h2>
						     </div>
               				      
							 <h2 class="accordion-header">
                  				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-8">
                   				How do I register?
                 				 </button>
               			      	 </h2>
                		      <div id="faq2-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                        	    <div class="accordion-body">
                   				    Registration is available on our website. Just follow these simple steps:
								 <ul>
                                    <li>Click the “Register” button in the top right corner of your screen.</li>
                                    <li>Select “Online Courses.”</li>
                                    <li>Choose your course(s).</li>
                                    <li>Enjoy learning a new topic.</li>
								</ul>
                                    You will be asked for basic contact information
                 		 	     </div>
                		        </div>
              		          </div>

     		       <div class="accordion-item">
                		       <h2 class="accordion-header">
                  			    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-9">
                   			       When should I register?
                  		    	</button>
               			        </h2>
                             	<div id="faq2-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                		        <div class="accordion-body">
                       		Most courses are offered at least 3 times during the year. Certain courses can fill up quickly, so be sure to register early.
                  	     	   </div>
					          </div>
             	           </div>

             		       <div class="accordion-item">
                		       <h2 class="accordion-header">
                  			    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-10">
                   			        Is there an orientation for online students?
                  		    	</button>
               			        </h2>
                             	<div id="faq2-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                		        <div class="accordion-body">
                       		Two weeks before your course starts you will be invited to join the SIA Online Community where our guides will introduce you to the technology and dynamics of online teaching and learning. It also gives you a chance to introduce yourself and network with fellow students.
Should you have any questions or need help troubleshooting a piece of technology, our Online Team is only an email away and is ready to assist.
                  	     	   </div>
					          </div>
             	           </div>

					      <div class="accordion-item">
                		      <h2 class="accordion-header">
                  			   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-11">
                   			    When and how often will my course meet?
                  			   </button>
               		     	 </h2>
                	      <div id="faq2-content-11" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                		     <div class="accordion-body">
                  	        	There is no set class time as your course can be accessed 24 hours a day, 7 days a week. We recommend logging on 3 - 4 times a week for two hours or more to stay engaged with the class discussion boards and the course materials, as well as to communicate with your instructor.
                  	     	</div>
					      </div>
             	            </div>
					 	     <div class="accordion-item">
                		       <h2 class="accordion-header">
                  			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-12">
                   			      What should I do if I’m away for a few days?
                  			      </button>
               			        </h2>
                	         <div id="faq2-content-12" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                		       <div class="accordion-body">
                                   Please inform your instructor. Make every effort to continue working on the course while you’re away. It is important that you contact your instructor as soon as possible to determine what, if any, arrangements can be made for your situation.
                  		           </div>
					             </div>
             	               </div>
					   
					          <div class="accordion-item">
                		<h2 class="accordion-header">
                  			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-13">
                   			Do I need specific equipment to take Online Courses?
                  			</button>
               			 </h2>
                	<div id="faq2-content-13" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                		  <div class="accordion-body">
                          You should have an up-to-date web browser such as: Chrome, Safari, Firefox, or Internet Explorer. For more detailed information, please see the guides for supported browsers and basic computer specifications. 
                  		</div>
					   </div>
             	     </div>
					 
					 <div class="accordion-item">
                		<h2 class="accordion-header">
                  			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-14">
                   			How many students are in a course? Who will be my classmates?
                  			</button>
               			 </h2>
                     	<div id="faq2-content-14" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                		  <div class="accordion-body">
                     		Our classes are kept small, at no more than 30 students, to better facilitate and encourage personalized interaction with the instructor and fellow participants. Your classmates come from all over the globe and contribute their global perspectives and experience. Some are currently working within the arts while others are just beginning. All classmates share in their passion for the art world.
                  		  </div>
					     </div>
             	       </div>
          		       </div>
			        </div>
				
			        	<div class="col-lg-6">
					     <br><br>
<!-- F.A.Q List 3-->
           		       <div class="accordion accordion-flush" id="faqlist4">
					 
              	     	<div class="accordion-item">
				            <div class="section-header">
						       <h2>Course Completion</h2>
					     	</div>
               				    <h2 class="accordion-header">
								 
                  				  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-15">
                   				   I completed my course! Now what?
                 				   </button>
               				     </h2>
                		  <div id="faq2-content-15" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                 			    <div class="accordion-body">
                   			     	  Well done! You will have 90 days of read-only access to revisit and reflect on the course material.  
                                    Get your certificate: When you successfully complete an Online Course, you are eligible to receive a digital certificate of completion. We encourage you to review your instructor’s syllabus to understand the Certificate of Completion requirements for your course. These requirements often include the following:

                                                 <li>Active participation in the majority of discussion boards</li>
                                                 <li>Timely submission of all assignments</li>
									
                                     Most courses have 1-2 short written assignments, but it can vary and it is important for you to follow -up with your instructor early in the course should you have any questions or concerns regarding your eligibility or the requirements.  Certificates of Completion are delivered to the email used at the time of registration, and can be expected no later than 3 weeks after the course ends. These digital verified credentials allow you to present a trustworthy record of your learning to anyone at any time.  

                                     Our certificate platform, Accredible, permits you to share your achievement on various social media platforms, embed it on your website, and add it to your LinkedIn profile.
                 		 	    </div>
                		    </div>
              		    </div>
						   
        		        <div class="accordion-item">
              			        <h2 class="accordion-header">
                  			       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-16">
                 			         Can I audit an Online Course?
               			          </button>
             			        </h2>
             			        <div id="faq2-content-16" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
              				    <div class="accordion-body">
                 				     As a continuing education student, it is your decision how you participate in the course. Those who plan to audit the course and not receive a certificate of completion should send a message to the instructor at the start of the course so they understand your goals.
                 				 </div>
               				    </div>
              		      </div>

             		        <div class="accordion-item">
                		       <h2 class="accordion-header">
                  		      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-17">
                   			        Can I put my Online Course(s) toward a professional certificate or degree program?
                  			     </button>
               			       </h2>
                	         <div id="faq2-content-17" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                		       <div class="accordion-body">
                  		            Online Courses are intended to deepen your knowledge of a particular field, but cannot be formally applied as credits to other institutions or the Sotheby’s Institute MA degree.
                  		       </div>
					       </div>
             	          </div>

					      <div class="accordion-item">
                	      	<h2 class="accordion-header">
                  			   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-18">
                   			     How can Online Courses bolster my career options?
                  			   </button>
               			     </h2>
                	        <div id="faq2-content-18" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                		         <div class="accordion-body">
                  		         Sotheby’s Institute of Art Online Courses demonstrate to future employers that you have current knowledge of art world topics, provided by a trusted institution and art world leader. Including Online Courses on your resume, posting your Certificate of Completion to your online profiles such as LinkedIn, and staying connected with your classmates to network are powerful ways to continue leveraging your experience long after your course has ended.
                  		        </div>
					        </div>
             	            </div>

          		      </div>
        	     </div>
             </div><!-- End sidebar -->
               </article>
          </section><!-- End Blog Section -->

     </main><!-- End #main -->  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>