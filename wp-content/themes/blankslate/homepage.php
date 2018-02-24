<?php /* Template Name: Home Page */ ?>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
  get_header();
 ?>

 <!-- BEGIN HEADER-->
 <section id="intro" class="section section-bg-img section-bg-overlay section-bottom-rise">
   <div class="bg" style="background: url('<?php echo the_post_thumbnail_url();?>');"></div>
   <div class="section-inner">

     <div class="container">

       <div class="intro">
         <header class="heading"><i data-wow-delay="0.1s" class="fa fa-4x fa-hand-peace-o wow fadeInDown"></i>
           <h1 class="wow zoomIn"><span class="name">I am <span class="fn">Ariel Guzman</span></span><span class="animated-letters category"><b class="is-visible">Developer</b><b>Creator</b><b></b></span></h1>
           <div class="separator wow zoomIn"></div>
         </header>

         <div data-wow-delay="0.1s" class="wow fadeInUp"><a href="#contacts" class="btn btn-bordered btn-go">Let's get to work</a></div>
       </div>

     </div>

   </div>
   <canvas id="particles"></canvas>
 </section>
 <!-- END HEADER-->

 <!-- BEGIN ABOUT SECTION-->
 <section id="about" class="section section-bg-light section-top-rise section-bottom-rise">
   <div class="section-inner">

     <div class="container">

       <header class="heading">
         <h2>About</h2>
         <div class="separator"></div>
       </header>

       <div class="row">
         <div class="col span_4 center">
           <div class="site-photo"><img src="images/dwc.jpg" width="250" height="250" alt="Photo" class="photo"></div>
         </div>
         <div class="col span_8">
           <h3>I'm frontend web developer with a great eye for visuals</h3>
           <p>I am a front-end web developer with a drive to implement my creativity in the field of technology. I've worked with a number of technologies and continue to grow and learn more in this field. I have a tenacity to learn that I apply to every
             project I create.</p>
           <ul class="social-nav">
             <li><a href="https://github.com/GuzmanAriel"><i class="fa fa-github"></i></a></li>
             <li><a href="https://www.linkedin.com/in/ariel-guzman-6bbb9797/"><i class="fa fa-linkedin"></i></i></a></li>
             <li><a href="https://instagram.com/fiend4heinz/"><i class="fa fa-instagram"></i></a></li>
           </ul>
         </div>
       </div>

     </div>

   </div>
 </section>
 <!-- END ABOUT SECTION-->

 <!-- BEGIN experience SECTION-->
 <section id="experience" class="section">
   <div class="section-inner">

     <div class="container">

       <header class="heading">
         <h2>Experience</h2>
         <div class="separator"></div>
       </header>

       <div class="experience">
         <div class="experience-item">
           <div class="icon-b wow bounceIn"><i class="fa fa-briefcase"></i></div>
           <div class="experience-item-inner wow bounceInRight">
             <div class="date">2016+</div>
             <h3>Front End Web Developer</h3>
             <p>As a Front End Developer at Barkly Pets I have worked with a lot of new things. Gained an extensive knowledge in PHP.
               Working at a startup I have really helped to be a part of a team to bring the business to better place.
               This included, migrating the site to Wordpress, updating the pages for a better and more modern appearance, adding UI elements,
               and incorporating SEO tactics in order to show up at the top of search engines organically. Not only did I learn more about Software Engineering,
               but I also learned a lot about design and even ceated mockups on Adobe Illustrator.
             </p>
           </div>
         </div>
       <div class="experience-item">
         <div class="icon-b wow bounceIn"><i class="fa fa-briefcase"></i></div>
         <div class="experience-item-inner wow bounceInRight">
           <div class="date">2015 - 2017</div>
           <h3>Interactive Developer</h3>
           <p>At TrueChoice Solutions I worked with a lot of UI elements as well as building applications through an in-house process.
             Several other duties included: Build client applications within due dates. Update client applications based on feedback.
             Create brand new dynamic templates within the platform for reuse in client applications.
             Work with HTML5, CSS3, JavaScript, LESS, Gulp, and Angular to create new functionality.
             Set standard organizations for client releases in order to provide a more efficient release process.
             Set a standard HTML email template for clients.</p>
         </div>
       </div>
         <div class="experience-item">
           <div class="icon-b wow bounceIn"><i class="fa fa-briefcase"></i></div>
           <div class="experience-item-inner wow bounceInRight">
             <div class="date">2015+</div>
             <h3>Interactive Developer</h3>
             <p>At TrueChoice Solutions I worked with a lot of UI elements as well as building applications through an in-house process.
               Several other duties included: Build client applications within due dates. Update client applications based on feedback.
               Create brand new dynamic templates within the platform for reuse in client applications.
               Work with HTML5, CSS3, JavaScript, LESS, Gulp, and Angular to create new functionality.
               Set standard organizations for client releases in order to provide a more efficient release process.
               Set a standard HTML email template for clients.</p>
           </div>
         </div>
         <div class="experience-item">
           <div class="icon-b wow bounceIn"><i class="fa fa-briefcase"></i></div>
           <div class="experience-item-inner wow bounceInLeft">
             <div class="date">March 2015 - June 2015</div>
             <h3>Front-end developer Intern</h3>
             <p>Developing web apps and gaining knowledge of different languages. Worked with the following languages:
               HTML,
               CSS,
               JavaScript,
               J Query,
               Angular.js</p>
           </div>
         </div>
         <div class="experience-item">
           <div class="icon-b wow bounceIn"><i class="fa fa-mortar-board"></i></div>
           <div class="experience-item-inner wow bounceInRight">
             <div class="date">January 2015 - May 2015</div>
             <h3>Frontend Development Course</h3>
             <p>In this course I really started to dive deep into web development instead of teaching myself.
               I gained a lot of knowledge on HTML CSS and the basics of JavaScript in order to build the foundations
             needed to create some great UI. I built a portfolio and was at the top of my class.</p>
           </div>
         </div>
         <div class="experience-item">
           <div class="icon-b wow bounceIn"><i class="fa fa-mortar-board"></i></div>
           <div class="experience-item-inner wow bounceInLeft">
             <div class="date">2009 - 2014</div>
             <h3>Daniel Webster College</h3>
             <p>Bachelor's Degree in Psychology, President of the Psychology Club, Captain of the Women's Basketball Team.</p>
           </div>
         </div>
       </div>

     </div>
 </section>
 <!-- END experience SECTION-->


 <!-- BEGIN SKILLS SECTION-->
 <section id="skills" class="section section-bg-dark section-top-fall section-bottom-fall">
   <div class="section-inner">

     <div class="container">

       <div class="row">
         <div class="col span_8">
           <h3>My skills</h3>
           <div class="separator l"></div>
           <p>In my time as a web developer I have worked for two companies where I have gained experience with frontend languages. I have worked with a lot of HTML, CSS, LESS, JavaScript, and some Angular. I've also worked with jQuery and Bootstrap but try to stray away
             from those frameworks as I see them as a detriment to learning vanilla JavaScript and CSS3. I've also gained a lot of knowledge of gulp and Node through my work experiences.</p>
           <p>I've learned most languages by doing as I think anyone else would, but my favorite project that taught me a stack was my personal blog. I see there are a lot of blog generators out there in the world, but I took it upon myself to build of scratch
             using Node, MongoDB, Express.js, and a few npm packages.</p>
         </div>
         <div class="col span_4">
           <div class="skills">
             <div data-progress="100" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>HTML5</h4>
             </div>
             <div data-progress="100" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>CSS3</h4>
             </div>
             <div data-progress="95" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>Bootstrap</h4>
             </div>
             <div data-progress="80" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>JavaScript</h4>
             </div>
             <div data-progress="80" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>jQuery</h4>
             </div>
             <div data-progress="75" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>Angular</h4>
             </div>
             <div data-progress="75" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>Node</h4>
             </div>
             <div data-progress="50" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>Express.js</h4>
             </div>
             <div data-progress="40" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>MongoDB</h4>
             </div>
             <div data-progress="70" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>PHP</h4>
             </div>
             <div data-progress="75" class="skills-item wow">
               <div class="skills-item-progress"></div>
               <h4>WordPress</h4>
             </div>
           </div>
         </div>
       </div>

     </div>

   </div>
 </section>
 <!-- END SKILLS SECTION-->

 <!-- BEGIN PROJECTS SECTION-->
 <section id="projects" class="section">
   <div class="section-inner">

     <div class="container">

       <header class="heading">
         <h2>Projects</h2>
         <div class="separator"></div>
       </header>

       <ul class="filter">
         <li data-group="all" class="active">All</li>
         <li data-group="web">Web</li>
         <li data-group="games">Games</li>
       </ul>

       <ul class="works">
         <?php get_template_part('entry', 'projects'); ?>
       </ul>

     </div>

   </div>
 </section>
 <!-- END PROJECTS SECTION-->

<?php get_footer();?>
