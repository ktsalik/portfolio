<?php
  $uniqid = uniqid();
?>
<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
  <script>
    let showPage = function() {
      document.getElementById('page').style.display = 'initial';
    };

    WebFont.load({
      google: {
        families: ['Montserrat:300,400,700,800'],
      },
      active: function() {
        showPage();
      },
      inactive: function() {
        showPage();
      },
    });
  </script>
  <link href="assets/css/index.css?v=<?= $uniqid ?>" rel="stylesheet">
  <title>Costas Tsalikides | Web Developer</title>
</head>
<body>
  <div id="page" style="display: none;">
    <div class="menu">
      <div class="menu__chapter-option active" data-chapter="top">
        <span class="text-light">01</span>
        <span class="text-bold">TOP</span>
      </div>
      <div class="menu__chapter-option" data-chapter="about">
        <span class="text-light">02</span>
        <span class="text-bold">ABOUT ME</span>
      </div>
      <div class="menu__chapter-option" data-chapter="skills">
        <span class="text-light">03</span>
        <span class="text-bold">SKILLS</span>
      </div>
      <div class="menu__chapter-option" data-chapter="education">
        <span class="text-light">04</span>
        <span class="text-bold">EDUCATION</span>
      </div>
      <div class="menu__chapter-option" data-chapter="experience">
        <span class="text-light">05</span>
        <span class="text-bold">EXPERIENCE</span>
      </div>
      <div class="menu__chapter-option" data-chapter="projects">
        <span class="text-light">06</span>
        <span class="text-bold">PROJECTS</span>
      </div>
      <div class="menu__chapter-option" data-chapter="contact">
        <span class="text-light">07</span>
        <span class="text-bold">CONTACT</span>
      </div>
      <div class="menu__contact-info">
        <a class="menu__contact-info-mail" href="mailto:kostas.tsalikides@gmail.com">kostas.tsalikides@gmail.com</a>
        <a href="tel:00306987040946">+30 698 7040 946</a>
        <div class="menu__contact-info-mail-popup">Press Ctrl + C to copy</div>
      </div>
    </div>
    <div class="btn-toggle-menu">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="chapters">
      <div class="top chapter">
        <div class="personal-image">
          <img src="assets/img/personal-image.png" height="100" />
        </div>
        <div class="firstname">
          Costas
        </div>
        <div class="lastname">
          Tsalikides
        </div>
        <div class="seperator"></div>
        <div class="title">FREELANCE WEB DEVELOPER</div>
      </div>
      <div class="about chapter">
        <div class="title">ABOUT ME</div>
        <p>
          Hello, I'm Costas Tsalikides, an experienced Web Developer with more than six years of hands-on experience in Web Technologies. I have worked on several projects with HTML, JavaScript, and PHP.
          Currently, I'm trying to follow up with the latest Front-end technologies such as Angular, VueJS, ReactJS and PixiJS.
          With my current experience, love for coding and passion for delivering clean and reusable code, I would be a great asset for your company.
        </p>
      </div>
      <div class="skills chapter">
        <div class="title">SKILLS</div>
        <div class="technologies">
          <div class="technologies__item">
            <div class="label">HTML</div>
            <div class="bar" data-percent="80"></div>
          </div>
          <div class="technologies__item">
            <div class="label">CSS</div>
            <div class="bar" data-percent="70"></div>
          </div>
          <div class="technologies__item">
            <div class="label">JavaScript</div>
            <div class="bar" data-percent="90"></div>
          </div>
          <div class="technologies__item">
            <div class="label">ReactJS</div>
            <div class="bar" data-percent="70"></div>
          </div>
          <div class="technologies__item">
            <div class="label">VueJS</div>
            <div class="bar" data-percent="50"></div>
          </div>
          <div class="technologies__item">
            <div class="label">AngularJS</div>
            <div class="bar" data-percent="60"></div>
          </div>
          <div class="technologies__item">
            <div class="label">PixiJS</div>
            <div class="bar" data-percent="80"></div>
          </div>
        </div>
      </div>
      <div class="education chapter">
        <div class="title">EDUCATION</div>
        <div class="records">
          <div class="records__item">
            <div class="date">2014 - 2015</div>
            <div class="title">Master <span>(M.Sc.)</span></div>
            <div class="name">Innovation in Technology and Entrepreneurship</div>
            <div class="place">Eastern Macedonia and Thrace Institute of Technology, Kavala</div>
          </div>
          <div class="seperator"></div>
          <div class="records__item">
            <div class="date">2008 - 2012</div>
            <div class="title">Bachelor <span>(B.Sc.)</span></div>
            <div class="name">Computer Science and Telecommunications</div>
            <div class="place">Technological Educational Institute of Epirus, Arta</div>
          </div>
          <div class="seperator"></div>
          <div class="start-point"></div>
        </div>
      </div>
      <div class="experience chapter">
        <div class="title">EXPERIENCE</div>
        <div class="records">
          <div class="records__item">
            <div class="date">2017 - now</div>
            <div class="title">Freelancer</div>
            <div class="place">Macbook Air, Thessaloniki, Greece</div>
            <div class="description">Development of commercial websites, web applications and web games.</div>
          </div>
          <div class="seperator"></div>
          <div class="records__item">
            <div class="date">2016 - 2017</div>
            <div class="title">Font-end Developer</div>
            <div class="place">Circles Ltd, Limassol, Cyprus</div>
            <div class="description">I've been   part of a team for the implementation of the User Interface of a WiFi prototype. I have worked with Atlassian Software in an agile environment developing new features.</div>
          </div>
          <div class="seperator"></div>
          <div class="start-point"></div>
        </div>
      </div>
      <div class="projects chapter">
        <div class="title">PROJECTS</div>
        <div class="records">
          <div class="records__item">
            <div class="image">
              <a href="https://sagagroup.gr/eshop/">
                <img src="assets/img/saga-group-eshop.png" width="200" />
              </a>
            </div>
            <div class="name">
              <a href="https://sagagroup.gr/eshop/">
                Saga Group E-shop
              </a>
            </div>
            <div class="technologies">
              <div>HTML Template</div>
              <div class="seperator"></div>
              <div>AngularJS</div>
            </div>
          </div>
          <div class="records__item">
            <div class="image">
              <a href="https://sagagroup.gr/">
                <img src="assets/img/saga-group.png" width="200" />
              </a>
            </div>
            <div class="name">
              <a href="https://sagagroup.gr/">
                sagagroup.gr
              </a>
            </div>
            <div class="technologies">
              <div>VueJS</div>
            </div>
          </div>
          <div class="records__item">
            <div class="image">
              <a href="https://papadatoscars.gr/">
                <img src="assets/img/papadatoscars.png" width="200" />
              </a>
            </div>
            <div class="name">
              <a href="https://papadatoscars.gr/">
                papadatoscars.gr
              </a>
            </div>
            <div class="technologies">
              <div>HTML Template</div>
              <div class="seperator"></div>
              <div>AngularJS</div>
            </div>
          </div>
          <div class="records__item">
            <div class="image">
              <a href="http://scoopa.gr/">
                <img src="assets/img/scoopa.png" width="200" />
              </a>
            </div>
            <div class="name">
              <a href="http://scoopa.gr/">
                scoopa.gr
              </a>
            </div>
            <div class="technologies">
              <div>HTML Template</div>
            </div>
          </div>
          <div class="records__item">
            <div class="image">
              <a href="http://tsalikidis.rf.gd/motorline-service/">
                <img src="assets/img/motorline-service.png" width="200" />
              </a>
            </div>
            <div class="name">
              <a href="http://tsalikidis.rf.gd/motorline-service/">
                motorline-service.gr
              </a>
            </div>
            <div class="technologies">
              <div>HTML Template</div>
            </div>
          </div>
          <div class="records__item">
            <div class="image">
              <a href="https://rentacar.papadatoscars.gr/">
                <img src="assets/img/rentacar-papadatoscars.png" width="200" />
              </a>
            </div>
            <div class="name">
              <a href="https://rentacar.papadatoscars.gr/">
                Papadatos Cars Rent a Car
              </a>
            </div>
            <div class="technologies">
              <div>HTML Template</div>
              <div class="seperator"></div>
              <div>AngularJS</div>
            </div>
          </div>
          <div class="records__item">
            <div class="image">
              <a href="http://i-met.gr/version2/">
                <img src="assets/img/i-met.png" width="200" />
              </a>
            </div>
            <div class="name">
              <a href="http://i-met.gr/version2/">
                i-met.gr
              </a>
            </div>
            <div class="technologies">
              <div>ReactJS</div>
            </div>
          </div>
          <div class="records__item">
            <div class="image">
              <a href="https://play.google.com/store/apps/details?id=io.tsalikidis.papadatoscars&hl=en/">
                <img src="assets/img/papadatoscars-app.png" width="200" />
              </a>
            </div>
            <div class="name">
              <a href="https://play.google.com/store/apps/details?id=io.tsalikidis.papadatoscars&hl=en/">
                Papadatos Cars Android App
              </a>
            </div>
            <div class="technologies">
              <div>Cordova</div>
              <div class="seperator"></div>
              <div>VanillaJS</div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact chapter">
        <div class="title">CONTACT</div>
        
      </div>
    </div>
  </div>

  <script src="assets/js/index.js?v=<?= $uniqid ?>"></script>
</body>
</html>