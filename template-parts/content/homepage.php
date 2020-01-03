<!DOCTYPTE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php wp_head()?>
        <link rel="stylesheet" href="./main.css">
        <script src="https://kit.fontawesome.com/1ec81f68fa.js"></script>
        <title>Masha Zyryanova</title>    
    </head>
    <body class = "site">
      <header class="site__header header sticky" >
        <div class="header_desktop header__content content" >
            <div class="logo header__logo">
              <h1 class = "logo__text">MYZ</h1>
            </div>
            <nav class="header__nav nav">
                <!-- <ul class="nav__menu menu">
                    <li class="menu__item">
                        <a href="https://github.com/NRostova" target = "blank" class="menu__link link">
                            github
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="#projects" class="menu__link link ">
                            projects
                        </a> 
                        <hr class = "hover-border">
                    </li>
                    <li class="menu__item">
                        <a href="#skills" class="menu__link link">
                            skills
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="#contact" class="menu__link link">
                            contact
                        </a> 
                    </li>
                    <li class="menu__item">
                        <a href="#about" class="menu__link link">
                            about
                        </a> 
                    </li>   
                </ul> -->
                <?php

                if(has_nav_menu('primary')){
                  wp_nav_menu([
                    'theme_location'  => 'primary',
                    'container'       => 'false',
                    'menu_class'      => 'nav__menu menu',
                    'fallback_cb'     => false,
                    'depth'           => 2
                  ]);
                }
                ?>
            </nav>     
        </div> 
        <div class="header_mobile mobile" >  
          <div class="logo header__logo">
              <h1 class = "logo__text">MYZ</h1>
          </div>
          <div class="mobile__menu">
              <a class="menu-toggle" onclick="openNav()">
                <i  class="fas fa-bars fa-2x"></i>
              </a>
          </div>
          <!-- side nav -->
        </div>
        <!-- End Mobile Header  -->
      </header> 
      <div id="sidenav" class="sidenav">
          <a href="javascript:void(0)"
              class="closebtn"
              onclick="closeNav()">&times;</a>
          </a>
          <a href="https://github.com/NRostova" target = "blank" class="menu__link link">
            GITHUB
          </a>
          <a href="#projects">PROJECTS</a>
          <a href="#skills">SKILLS</a>
          <a href="#contact">CONTACT</a>
          <a href="#about">ABOUT</a>
      </div>
      <div id="overlay__sidenav"></div>
      <section class="intro"> 
          <video  id="vring" autoplay loop muted >
            <source src="./images/BG_FULL_MOVIE.mov" type="video/mp4" />
          </video>
        <div class="overlay">
          <p id="overlay__text">Masha Zyryanova</p>
        </div> 
      </section>
      <!-- End Intro -->
      <section class="vortex_rings" id="projects">
        <h1>DYNAMICS OF VORTEX RINGS</h1>
        <p class="vortex_rings__text">During an Aersopace Mentorship Program at Caltech I have studied dynamics of vortex rings. 
          One of my goals was to determine the velocity of vortex rings
          after they separate from the boundary layer and travel through the air.
          I built 3d plots to visualize color profiles in RGB and HSV color spaces for an individual vortex ring
          then detected vortex ring contours using Python and CV2, 
          collecting coordinates along the way and building the velocity graph.
        </p>
        <div class="graphs_container">
          <img src="./images/Frame105_HSV_3dplot.png" alt="3d plot HSV Color space">
          <img src="./images/Frame105_RGB_3dplot.png" alt="sd plot RGB color space">
        </div>
      </section>
      <!-- End Vortex Rings -->
      <section class="section winner_projects">
          <div class="content">
              <h1 class="heading__1 ">WINNER PROJECTS</h1>
              <div class="project" > 
                  <div class="project__container" >
                      <p class ="project__heading">AImEe. Winner at FireDrone.AI 2019</p>
                        <div class="project__image">
                          <a href="https://devpost.com/software/aimmi" target="blank">
                            <img class="responsive" width="600" height="350px" src="./images/AImEe.gif"  alt="AImEe gif"  />
                        </a>
                      </div>
                  </div>
                  <div class="project__description">
                    <div class="remote">
                      <p class="project__text">built with <p>
                      <p class="project__text">Python<p>
                      <p class="project__text">Flask<p>
                      <p class="project__text">azure ml<p>
                      <p class="project__text">TensorFlow<p>
                      <p class="project__text">model used:<p>
                      <p class="project__text">inception V3<p>
                    </div> 
                    
                    <button class="button__skills button">
                      <a class ="button__link" href="https://devpost.com/software/aimmi" target="blank">
                        more about AImEe
                      </a> 
                    </button> 
                  </div>
                  <div class="project__description-mobile">
                      <div class="remote__mobile text_white">
                          <p>Bulit with Python , Flask, Azure machine learning services,
                            TensorFlow, used inception V3 model.
                          </p>
                        </div>
                        <button class="about__button">
                          <a class ="button__link" href="/" target="blank">
                            more about AImmEe
                          </a>
                        </button> 
                  </div>
              </div>
              <!-- End Project 2 Firedrone--> 
              <div class="project ">
                <div class="project__container">
                  <p class ="project__heading">Summerize Winner at MLH Local Hack Day 2018</p>		
                  <div class="image__container">
                    <a href="https://devpost.com/software/Summerize" target="blank">
                      <img class="responsive" width="600" height="auto" src="./images/Summerize.gif"  alt="gif"  />
                    </a>
                  </div> 
                </div>
                <div class="project__description">
                    <div class="remote">
                      <div class="topBar"></div>
                      <p class="project__text">built with <p>
                      <p class="project__text">JavaScript<p>
                      <p class="project__text">Express.js<p>
                      <p class="project__text">Node.js<p>
                      <p class="project__text">React<p>
                      <p class="project__text">azure cognitive services api<p>
                    </div>  
                    
                    <button class="button__skills button">
                      <a class ="button__link" href="https://devpost.com/software/Summerize" target="blank">
                        more about Summerize
                      </a> 
                    </button> 
                </div>
                <div class="project__description-mobile">
                    <div class="remote__mobile text_white">
                        <p>built with JavaScript, Express.js, Node.js, React, 
                          azure cognitive services api </p>
                      </div>
                      <button class="about__button">
                        <a class ="button__link" href="/" target="blank">
                          more about Summerize
                        </a>
                      </button> 
                </div>
                 
                <!-- End Project 3  Summerize-->
              </div>         
      </section>
      <!-- End Winner Projects -->
      <section class="games bg_white">
        <div class="content">
          <h1>GAMES</h1>
          <p id="games__info">
              Superheroes save lives and have superpowers. In our game, groups of friends enjoy competing
               for the best superhero pose and then get inspired to become a superhero in real life. They gain their superpowers by performing small acts of kindness that go a long way.
               Currently, we support gifting a superhero costume or an educational book to kids that need help.
          </p>
          <div class="project bg_blue" >  
            <div class="project__container" >
                  <p class ="project__heading">SuperPose Caltech Hacktech 2019</p>			
                  <div class="project__image">
                      <a href="https://devpost.com/software/superpose" target="blank">
                        <img class="responsive" width="600" height="auto" src="./images/superpose.gif"  alt="gif"  />
                    </a>
                  </div>
            </div>
            <div class="project__description">
              <div class="remote">
                <div class="topBar"></div>
                <p class="project__text">built with <p>
                <p class="project__text">Beautiful Soup <p>
                <p class="project__text">Bootstrap <p>
                <p class="project__text">eBay API <p>
                <p class="project__text">Flask <p>
                <p class="project__text">OpenPose<p>
                <p class="project__text">TensorFlow<p>
              </div> 
              
              <button class="button__skills button">
                <a class ="button__link" href="https://devpost.com/software/superpose" target="blank">
                  more about SuperPose
                </a>
                
              </button> 
            </div> 
            <div class="project__description-mobile">
                <div class="remote__mobile">
                    <p class="text__mobile">
                    Built with Beautiful Soup, Bootstrap, eBay API, Flask, OpenPose,TensorFlow
                    </p>
                  </div> 
                  <button class="about__button">
                    <a class ="button__link" href="/" target="blank">
                      more about SuperPose
                    </a>
                  </button> 
            </div>
             
          </div>
          <!-- End Project 4 SuperPose-->
        </div>
      </section>
      <!-- End Games Sections -->
      <section class="react">
          <h1 class="heading__1">REACT.js HACKER NEWS</h1>
          <div class="project content" >  
              <div class="project__container" >
                    <!-- <p class ="project__heading">News Update</p>			 -->
                    <div class="project__image">
                        <a href="/">
                          <img src="images/NewsUpdateReact.png"class="responsive" width="600" height="auto" alt="News Update"  />
                      </a>
                    </div>
              </div>
              <div class="project__description">
                <div class="remote">
                  <p class="project__text">React
                  Redux</p>
                  <p class="project__text">Hacker News API <p>
                  <p class="project__text">JavaScript<p>
                </div>  
                <button class="button__skills button">
                  <a class ="button__link" href="/" target="blank">
                    more about News Update
                  </a>
                </button> 
              </div> 
              <div class="project__description-mobile">
                  <div class="remote__mobile text_white">
                      <p>BUILT WITH REACT REDUX HACKER NEWS API JAVASCRIPT</p>
                    </div>
                    <button class="about__button">
                      <a class ="button__link" href="/" target="blank">
                        more about News Update
                      </a>
                    </button> 
              </div>
              
            </div>
          <!-- End Project 5 react-->
      </section>
     <!-- End React section --> 
      <section class="web bg_white">
        <h1> LANDING PAGES</h1>
        <p id="web__info">Responsive web pages for fashion and e-commerce websites. Built using HTML5, css3, svg graphics, wordpress.</p>
          <div class="project content" >  
              <div id="landing_page_container" class="project__container" >
                    <!-- <p class ="project__heading">Vivid Fashion</p>			 -->
                    <div class="project__image">
                        <a href="/">
                          <img class="responsive" width="600px;" height="auto" src="images/vividFashion.png"  alt="Vivid Fashion"  />
                      </a>
                    </div>
              </div>
              <div class="mobile_landing_page">
                  <img class="responsive__mobile responsive" width="180px; height="auto" src="./images/fp.png" alt="flowers">
              </div>  
            </div>
            
          <!-- End Project 6 Web Landing Pages-->
      </section>
     <!-- End Web section --> 
    <section class="about" id="about">
      <div class="ellipse"></div>
      <p class="about__text">Hello! My name is <span class="yellow">Masha</span>. I am a <span class="yellow">full stack developer</span> living
        in Los Angeles. My biggest inspiration is nature. Whether I am looking for a prefect color scheme to design a website,
        or imagining an engineering device, I often discover solutions by looking at the world around me.
        In terms of coding, I strive to write a clean modular reusable code.
         One of my favorite things is to participate and compete in hackathons. I love working 
        in a team environment while building something awesome on a tight deadline.
      </p>
      <a  
        href="/images/Masha_Zyryanova_Web_Developer.pdf" 
        download="Masha_Zyryanova_resume">
        <button class="about__button" >Download resume</button>
      </a>
    </section> 
    <!-- end about -->
    <section class="bg_white" id="skills">
     <!-- <h1 class="heading__1">SKILLS</h1> -->
      <div class="skills content" >
        <div class="skills__container">
          <h2 class = "skills__heading">Languages and Workflow</h2>
          <p>C</p>
          <p>C++</p>
          <p>Python</p>
          <p>JavaScript</p>
          <p>PHP</p>
          <p>R</p>
          <p>GIT VCS</p>
        </div>
        <div class="skills__container">
          <h2 class = "skills__heading">Client Side Technologies</h2>
          <p>HTML5</p>
          <p>CSS3</p>
          <p>React.js</p>
          <p>Redux</p>
          <p>SASS</p>
          <p>jinja templating language</p>
          <p>Figma</p>
          
        </div>
        <div class="skills__container">
          <h2 class = "skills__heading">Server Side Technologies<br>Libraries</h2>
        <p>Flask</p>
          <p>Tensorflow</p>
          <p>CV2</p>
          <p>NODE.js</p>
          <p>CLOUD</p>
          <p>MySQL, SQLlite</p>
          <p>Cloud</p>
          <p>AZURE ML</p>
        </div>
      </div>
    </section>
    <!-- End Skills Section -->
    <footer id="contact" class = "site__footer">
        <a href="mailto:mzyrianova14@gmail.com">
          <h1 class = "footer__heading">mzyrianova14@gmail.com</h1>
        </a>
        <h1 class = "phone">917.576.7664</h1>
        <div class="social">
          <a href="https://www.linkedin.com/in/maria-zyrianova-40465943/" target = "blank">
            <i class="fab fa-linkedin fa-2x"></i>
          </a>
          <a href="https://github.com/NRostova" target = "blank" class="menu__link link">
            <i class="fab fa-github fa-2x" ></i>
          </a>
         <i class="fab fa-instagram fa-2x"></i>
        </div>
    </footer>
      </div>
    </body>
    <script>
      //open close side nav
        function openNav(){
            document.getElementById("sidenav").style.width="450px";
            //add class nav-open to body
            document.body.classList.add('navopen');
        }
        function closeNav(){
            document.getElementById("sidenav").style.width = "0";
            document.body.classList.remove('navopen');
        }
    </script>
</html>