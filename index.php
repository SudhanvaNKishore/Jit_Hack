<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Know Your College</title>

  <?php
  include "includes/head_links.php";
  ?>
  <!--css-->
  <link rel="stylesheet" href="css/index.css" />
</head>

<body>
  <div id="buttons-container">
    <header class="header">
      <nav>
        <ul>
          <li>
            <a href="#home" onclick="showSection('home')">
              <img id="logo" src="images3/WhatsApp_Image_2024-06-07_at_15.35.37_07190f0c-removebg-preview.png" alt="JIT"
                class="logo" />
            </a>
          </li>
          <li>
            <button onclick="showSection('home')">HOME</button>
          </li>
          <li>
            <button onclick="showSection('about')">ABOUT</button>
          </li>
          <li>
            <button onclick="showSection('announcements')">ANNOUNCEMENTS</button>
          </li>
          <li>
            <button onclick="showSection('previous-events')">CLUBS</button>
          </li>
          <li class="dropdown">
            <button>FACULTY</button>
            <div class="dropdown-content">
              <button onclick="showSection('AIML')">AIML</button>
              <button onclick="showSection('CIVIL')">CIVIL</button>
              <button onclick="showSection('CSE')">CSE</button>
              <button onclick="showSection('ECE')">ECE</button>
              <button onclick="showSection('ISE')">ISE</button>
              <button onclick="showSection('MECHANICAL')">MECHANICAL</button>
            </div>
          </li>
          <li>
            <button onclick="showSection('rules')">RULES</button>
          </li>
          <li>
            <button onclick="showSection('contact')">CONTACT</button>
          </li>
          <?php
          // Check if user is logged in or not
          if (!isset($_SESSION["user_id"])) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                <i class="fas fa-user"></i>Signup
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                <i class="fas fa-sign-in-alt"></i>Login
              </a>
            </li>
            <?php
          } else {
            ?>
            <li class='nav-name'>
              Hi, <?php echo $_SESSION["full_name"] ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="fas fa-user"></i>Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="fas fa-sign-out-alt"></i>Logout
              </a>
            </li>
            <?php
          }
          ?>
        </ul>
      </nav>
    </header>
  </div>


  <!-- Home section -->
  <section id="home" class="section">
    <h2>JYOTHY INSTITUTE OF TECHNOLOGY</h2>
  </section>

  <!-- About section -->
  <section id="about" class="section" style="
        padding-top: 90px;
        text-align: center;
        padding-left: 20px;
        padding-right: 20px;
      ">
    <h2>ABOUT US</h2>

    <div style="display: flex; text-align: center">
      <div style="
            background-color: #ffffff;
            padding: 30px;
            margin-right: 80px;
            margin-left: 80px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
          ">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse harum
          at nam qui consequatur quaerat repellat vel ratione, ut, cum
          repudiandae deleniti officia nobis alias veritatis similique iure
          quas ducimus? Dolore explicabo deserunt quasi, obcaecati, soluta
          esse voluptatum cumque aperiam sed fugit cupiditate nam, sit eaque
          voluptas consequatur veritatis dolorum dignissimos ullam sapiente
          facilis? Minima, eum! Molestias ea non dolore, ipsam hic, fugiat
          inventore quasi odit porro assumenda dolores. Fuga dignissimos
          incidunt, quam architecto dolorem a modi maiores quae vero itaque
          dicta tempore nesciunt cum ducimus facere dolore! Voluptas quod,
          dolores nulla reprehenderit aliquam laudantium illum error non odio
          vitae.
        </p>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ad
          accusamus molestias fuga, facilis impedit enim autem deleniti nobis
          recusandae, numquam ipsum amet sequi. Veritatis, voluptatibus?
          Veniam obcaecati possimus eius magnam, laudantium consequatur iusto
          iste quibusdam rem officia ipsum perspiciatis assumenda dignissimos
          aspernatur, blanditiis maxime accusantium ullam nisi aliquid
          accusamus nesciunt. Explicabo deserunt ullam id. Vero dolorum magnam
          aliquid, voluptates quod assumenda autem iusto ipsa asperiores
          eaque, facilis adipisci hic.
        </p>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ad
          accusamus molestias fuga, facilis impedit enim autem deleniti nobis
          recusandae, numquam ipsum amet sequi. Veritatis, voluptatibus?
          Veniam obcaecati possimus eius magnam, laudantium consequatur iusto
          iste quibusdam rem officia ipsum perspiciatis assumenda dignissimos
          aspernatur, blanditiis maxime accusantium ullam nisi aliquid
          accusamus nesciunt. Explicabo deserunt ullam id. Vero dolorum magnam
          aliquid, voluptates quod assumenda autem iusto ipsa asperiores
          eaque, facilis adipisci hic.
        </p>

        <div class="cm">
          <a href="#contact" onclick="showSection('contact')">
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="label">CONTACT US</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Announcements section -->
  <section id="announcements" class="section" style="
        padding-top: 90px;
        text-align: center;
        padding-left: 20px;
        padding-right: 20px;
      ">
    <h2>ANNOUNCEMENTS</h2>
  </section>

  <!-- Team section -->
  <section id="previous-events" class="section previous-events-section app" style="
        padding-top: 90px;
        text-align: center;
        padding-left: 20px;
        padding-right: 20px;
      ">
    <div class="banner-container">
      <h2 class="white pb-3">Know Your College!</h2>

      <form id="search-form" onsubmit="return redirectToClub()">
        <div class="input-group city-search">
          <input type="text" class="form-control input-city" id='city' name='city'
            placeholder="Enter the club name..." />
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>

    <div class="page-container">
      <h1 class="city-heading">
        Our College Societies
      </h1>
      <?php
      // Array of image URLs
      $imageUrls = array(
        "https://www.instagram.com/world.language.club_jit/c1",
        "https://www.instagram.com/sports.jit/c2",
        "https://www.instagram.com/techclubjit/c3",
        "https://www.instagram.com/__bitsnbytes__/c4",
        "https://www.instagram.com/crea_jit/c5",
        "https://www.instagram.com/edc_jit/c6",
        "https://www.instagram.com/__ieee_.jit__/c7",
        "https://www.instagram.com/rotaract.jit/c8"
      );

      // Function to generate the HTML for each image URL
      function generateImageHTML($url)
      {
        return '
    <div class="city-card-container col-md">
        <a href="' . $url . '" target="_blank">
            <div class="city-card rounded-circle">
                <img src="images2/' . basename(parse_url($url, PHP_URL_PATH)) . '.png" class="city-img" />
            </div>
        </a>
    </div>';
      }

      // Generate the HTML structure
      echo '<div class="row">';
      foreach ($imageUrls as $url) {
        echo generateImageHTML($url);
      }
      echo '</div>';
      ?>
    </div>
  </section>

  <!-- Faculty sections -->
  <section id="AIML" class="section">
    <div class="header-box">
      <h1>Artificial Intelligence and Machine Learning</h1>
    </div>

    <div class="vision-box">
      <h2>Vision</h2>
      <p>To be a department of excellence for education in Artificial Intelligence and Machine Learning, innovation,
        research and work towards empowering students for professional competence and entrepreneurial skills.</p>
    </div>
    <div class="container3">
      <div class="faculty">
        <img src="images/ai1.jpg" alt="Dr. Madhu B R">
        <div class="faculty-info">
          <h2>Dr. Madhu B R</h2>
          <p><b>HOD of Artificial Intelligence and Machine Learning</b></p>
          <p>Ph.D. in Cloud Computing</p>
          <p>Research interests: Cloud Computing, Artificial Intelligence & Machine Learning, Data Science, Blockchain
          </p>
          <p>Email: <a href="mailto:hod.aiml@jyothyit.ac.in">hod.aiml@jyothyit.ac.in</a></p>

        </div>
      </div>
    </div>
    <div class="container3">
      <div class="faculty">
        <img src="images/ai2.jpg" alt="Dr. Manjunath H R">
        <div class="faculty-info">
          <h2>Dr. Manjunath H R</h2>
          <p><b>Associate Professor of Artificial Intelligence and Machine Learning</b></p>
          <p>doctoral degree from Sri Siddhartha Academy of Higher Education </p>
          <p>Research interests:Wireless sensor networks, Artificial Intelligence and Machine Learning, Data Science and
            IOT</p>
          <p>Email: <a href="mailto:manjunath.hr@jyothyit.ac.in">manjunath.hr@jyothyit.ac.in</a></p>

        </div>
      </div>
    </div>
    <div class="container3">
      <div class="faculty">
        <img src="images/ai3.jpg" alt="Dr. Chandru A S">
        <div class="faculty-info">
          <h2>Dr. Chandru A S</h2>
          <p><b>Associate Professor in the Department of Artificial Intelligence and Machine Learning</b></p>
          <p>doctoral degree from Visvesvaraya Technological University</p>
          <p>M. Tech. in Computer Science and Engineering from PES College of Engineering</p>
          <p>BE in Computer Science and Engineering</p>
        </div>
      </div>
    </div>
    <div class="container3">
      <div class="faculty">
        <img src="images/ai4.jpg" alt="Mrs. Archana V R">
        <div class="faculty-info">
          <h2>Mrs. Archana V R</h2>
          <p><b>Assistant Professor in the Department of Artificial Intelligence and Machine Learning</b></p>
          <p>M.Tech in Computer Science and Engineering</p>
          <p>bachelor’s degree in Computer Science and Engineering from Jyothy Institute</p>
          <p>Research interests: Artificial Intelligence and Machine Learning, Data Science, IOT</p>
          <p>Email: <a href="mailto:archana.vr@jyothyit.ac.in">archana.vr@jyothyit.ac.in</a></p>

        </div>
      </div>
    </div>
    <div class="container3">
      <div class="faculty">
        <img src="images/ai5.jpg" alt="Mrs. Ushasri Gunti">
        <div class="faculty-info">
          <h2>Mrs. Ushasri Gunti</h2>
          <p><b>Assistant Professor in the Department of Artificial Intelligence and Machine Learning</b></p>
          <p>M.Tech in Computer Science and Engineering</p>
          <p>B.Tech in Computer Science and Information Technology</p>
          <p>Research interests: Image processing, Embedded Systems and, Data Science.</p>
          <p>Email: <a href="mailto:ushasri.gunti@jyothyit.ac.in">ushasri.gunti@jyothyit.ac.in</a></p>

        </div>
      </div>
    </div>
    <div class="container3">
      <div class="faculty">
        <img src="images/ai6.jpg" alt="Mr. S Vinodh Kumar">
        <div class="faculty-info">
          <h2>Mr. S Vinodh Kumar</h2>
          <p><b>Assistant Professor in the Department of Artificial Intelligence and Machine Learning</b></p>
          <p>M.Tech in Computer Science and Engineering</p>
          <p>BE in Information Science and Engineering</p>
          <p>Research interests: Artificial Intelligence and Machine Learning, ChatGPT and Prompt Engineering</p>
          <p>Email: <a href="mailto:vinodkumar.s@jyothyit.ac.in">vinodkumar.s@jyothyit.ac.in</a></p>

        </div>
      </div>
    </div>
    <div class="container3">
      <div class="faculty">
        <img src="images/ai7.jpg" alt="Mrs. Ramya B N">
        <div class="faculty-info">
          <h2>Mrs. Ramya B N</h2>
          <p><b>Assistant Professor in the Department of Artificial Intelligence and Machine Learning</b></p>
          <p>M. Tech. in Digital Electronics and Communication</p>
          <p>Research interests: A Novel Approach to Implement Binarized Neural Network to Enhance Accuracy Using
            Machine Learning Techniques, SN COMPUT</p>
          <p>Email: <a href="mailto:ramya.bn@jyothyit.ac.in">ramya.bn@jyothyit.ac.in</a></p>

        </div>
      </div>
    </div>
    <div class="container3">
      <div class="faculty">
        <img src="images/ai8.jpg" alt="Mrs. Soumya K N">
        <div class="faculty-info">
          <h2>Mrs. Soumya K N</h2>
          <p><b>Assistant Professor in the Department of Artificial Intelligence and Machine Learning</b></p>
          <p>Doctral Degree,M.Tech</p>
          <p>BE in Information Science and Engineering</p>
          <p>Research interests: Artificial Intelligence and Machine Learning</p>
          <p>Email: <a href="mailto: Soumya.kn@jyothyit.ac.in"> Soumya.kn@jyothyit.ac.in</a></p>

        </div>
      </div>
    </div>
    <div class="container3">
      <div class="faculty">
        <img src="images/ai9.jpg" alt="Mrs.Deepthi Das V">
        <div class="faculty-info">
          <h2>Mrs.Deepthi Das V</h2>
          <p><b>Assistant Professor in the Department of Artificial Intelligence and Machine Learning</b></p>
          <p>M.Tech in Computer Networks</p>
          <p>BE in Computer Science and Engineering</p>
          <p>Research interests: Artificial Intelligence and Machine Learning</p>
          <p>Email: <a href="mailto: deepthi.das@jyothyit.ac.in"> deepthi.das@jyothyit.ac.in</a></p>

        </div>
      </div>
    </div>
    <!-- Add content for Faculty 1 here -->
  </section>
  <section id="CIVIL" class="section" style="display: none">
    <h2>CIVIL FACULTY DETAILS</h2>
    <!-- Add content for Faculty 2 here -->
  </section>
  <section id="CSE" class="section" style="display: none">
    <h2>CSE FACULTY DETAILS</h2>
    <!-- Add content for Faculty 3 here -->
  </section>
  <section id="ECE" class="section" style="display: none">
    <h2>ECE FACULTY DETAILS</h2>
    <!-- Add content for Faculty 4 here -->
  </section>
  <section id="ISE" class="section" style="display: none">
    <h2>ISE FACULTY DETAILS</h2>
    <!-- Add content for Faculty 5 here -->
  </section>
  <section id="MECHANICAL" class="section" style="display: none">
    <h2>MECHANICAL FACULTY DETAILS</h2>
    <!-- Add content for Faculty 6 here -->
  </section>

  <!-- Rules section -->
  <section id="rules" class="section" style="
        padding-top: 90px;
        text-align: center;
        padding-left: 20px;
        padding-right: 20px;
      ">
    <h2><strong>JIT RULES AND REGULATIONS</strong></h2>

    <div class="container1">
      <div class="card">
        <p><strong>1. Academic Rules</strong></p>
        <ul>
          <li>
            Attendance Policies: Students are required to attend a certain
            percentage of classes to pass.
          </li>
          <li>
            cheating, and other forms of academic dishonesty. Academic
            Integrity: Policies against plagiarism,
          </li>
          <li>
            Grading System: Standardized grading criteria and procedures for
            grade appeals.
          </li>
          <li>
            Degree Requirements: Specific courses and credits needed for
            graduation.
          </li>
        </ul>

        <p><strong>2. Code of Conduct</strong></p>
        <ul>
          <li>
            Behavioral Expectations: Guidelines for student behavior,
            including respect for peers and faculty.
          </li>
          <li>
            Disciplinary Actions: Consequences for violating rules, including
            suspension or expulsion.
          </li>
          <li>
            Drug and Alcohol Policies: Restrictions on the use of substances
            on campus.
          </li>
          <li>
            Dress Code: Any specific requirements or prohibitions related to
            attire, usually more common in professional or technical programs.
          </li>
        </ul>

        <p><strong>3. Campus Safety</strong></p>
        <ul>
          <li>
            Campus Security: Regulations regarding access to campus buildings
            and the presence of security personnel.
          </li>
          <li>
            Health and Safety: Rules for maintaining a healthy campus
            environment, including vaccinations and health checks.
          </li>
        </ul>

        <p><strong>4. Financial Regulations</strong></p>
        <ul>
          <li>
            Tuition and Fees: Payment schedules and policies regarding
            tuition, fees, and other costs.
          </li>
          <li>
            Financial Aid: Eligibility requirements and procedures for
            applying for financial aid and scholarships.
          </li>
        </ul>
      </div>

      <div class="card">
        <p><strong>5. Housing and Residence Life</strong></p>
        <ul>
          <li>
            Housing Assignments: Rules for applying and living in campus
            housing.
          </li>
          <li>
            Quiet Hours: Times when noise should be kept to a minimum in
            residential areas.
          </li>
        </ul>

        <p><strong>6. Technology and Resources</strong></p>
        <ul>
          <li>
            Computer Use Policies: Guidelines for the use of campus computers
            and internet services.
          </li>
          <li>
            Library Use: Rules for borrowing books and using library
            facilities.
          </li>
        </ul>

        <p><strong>7. Extracurricular Activities</strong></p>
        <ul>
          <li>
            Clubs and Organizations: Regulations for starting and
            participating in student organizations.
          </li>
          <li>
            Events and Activities: Guidelines for hosting events on campus.
          </li>
          <li>
            Athletics: Rules for participation in sports and use of athletic
            facilities.
          </li>
        </ul>

        <p><strong>8. Prohibited Behaviors</strong></p>
        <ul>
          <li>
            Harassment: Any unwelcome behavior that creates a hostile,
            intimidating, or offensive environment.
          </li>
          <li>
            Discrimination: Unfair treatment based on race, gender, sexual
            orientation, disability, or other protected characteristics.
          </li>
          <li>
            Cyberbullying: Use of electronic communication to bully a person,
            typically by sending messages of an intimidating or threatening
            nature.
          </li>
          <li>
            Physical Bullying: Hitting, kicking, or any form of physical
            aggression.
          </li>
          <li>
            Verbal Bullying: Name-calling, insults, and other forms of verbal
            abuse.
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Contact section -->
  <section id="contact" class="section" style="
        padding-top: 90px;
        text-align: center;
        padding-left: 20px;
        padding-right: 20px;
      ">
    <h2>CONTACT US</h2>

    <div class="social-buttons">
      <li class="item">
        <a href="https://www.instagram.com/jitesports/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="
          target="_blank" class="social-button" id="Insta">
          <i class="fa-brands fa-instagram icon"></i>
        </a>
      </li>

      <li class="item">
        <a href="https://chat.whatsapp.com/Jude8rxb9trBb3YEMtQvMS" target="_blank" class="social-button" id="WP">
          <i class="fa-brands fa-whatsapp icon"></i>
        </a>
      </li>

      <li class="item">
        <a href="mailto:info@jyothyit.ac.in" target="_blank" class="social-button" id="GM">
          <i class="fa fa-envelope icon"></i>
        </a>
      </li>
    </div>
  </section>

  <!-- Script -->
  <script src="js/index.js"></script>
</body>

</html>