
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lloyd's Portfolio</title>
    <link rel="icon" type="image/x-icon" href="../assets/lamb.webp">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.10/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.10/dist/sweetalert2.min.js"></script>
</head>
<body>
    <div class="loader">
        <div class="loader-background"></div>
        <div class="loader-text">
            <h5><span id="typing"></h5>
        </div>
    </div>
    <section id="up"></section>
    <section id="down"></section>
    <section id="left"></section>
    <section id="right"></section>
    <header class="header">
        <a href="#home" class="logo">lamb.</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar" >
            <a href="#home" class="active">HOME</a>
            <a href="#about" >ABOUT</a>
            <a href="#services" >SERVICES</a>
            <a href="#portfolio">PROJECTS</a>
            <a href="#contact" >CONTACTS</a>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, I'm</h3>
            <h1>Lloyd Bautista</h1>
            <h3>And I'm an aspiring <span class="multiple-entry"></span></h3>
            <p>I am currently seeking for a position in a company where I can leverage my skills and expertise in the field of IT and contribute to a company that provides an opportunity for both personal and career growth.
        </p>
        <div class="social-media">
            <a href="https://github.com/lambtsta"><i class='bx bxl-github' ></i></a>
            <a href="https://www.linkedin.com/in/lloyd-anthony-bautista-294240287/"><i class='bx bxl-linkedin-square' ></i></a>
            <a href="https://web.facebook.com/lloydanthony.bautista"><i class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/128la_mb/"><i class='bx bxl-instagram' ></i></a>
        </div>
        <div class="cv-button">
            <a href="#" id="download-cv" class="cv-dl" data-cv="../assets/CV - Bautista, Lloyd Anthony M..pdf">
                <i class='bx bx-download'></i>CV
            </a>
        </div>
        </div>
        <div class="home-img">
            <img src="../assets/Remote Working (HD).png" alt="">
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="../assets/lloyd1.webp" alt="">
            <div class="overlay-text">#Class of 2023 🎉</div>
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>I'm a graduate of <span> Bachelor of Science in Information Technology</span></h3>
            <h3><span>Major in Business Analytics</span></h3>
            <p>In my specialization, we are taught how to transform data into a valuable insight that could be useful for data visualization and decision making. 
                I have a strong interest when it comes to technology and I enjoy in diving into the world of code and creating solutions.
                 I had the oppurtunity to be an intern at <span>Digital Transformation Center</span> located at STEER Hub inside 
                 Batangas State University Alangilan Campus where I served as a <span>backend developer</span>.
             This experience allowed me to apply and further develop my skills in real-world scenarios </p>
        </div>
    </section>

    <section class="services" id="services">
        <h2 class="heading">My <span>Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-block'></i>
                <h3>Web Development</h3>
                <p>
                    I'm knowledgeable with web development technologies like PHP, HTML, JavaScript, and CSS. 
                    Additionally, I'm familiar with both MySQL and PostgreSQL for database management. 
                </p>
                <div class="app-container">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/1051/1051277.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/732/732190.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968292.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/919/919836.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968342.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                </div>
                <a href="https://www.freepik.com/" class="attr-link">Icons from Freepik</a>
            </div>
            <div class="services-box">
                <i class='bx bx-palette'></i>
                <h3>Graphic Design</h3>
                <p>
                    I provide services to small businesses for creating their infographics and logos. 
                    I also accept commissions from students to create their PowerPoint presentations.
                </p>
                <div class="app-container">
                    <img src="https://cdn-icons-png.flaticon.com/128/9813/9813966.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/732/732224.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                </div>
                <a href="https://www.freepik.com/" class="attr-link">Icons from Freepik</a>
            </div>
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>Other Technologies</h3>
                <p>
                    I also possess basic knowledge of Python (including Django REST API, Numpy, Matplotlib, Pandas), 
                    GIT Version Control System, Power BI, Figma(UI/UX)  and Microsoft Office Suites.
                </p>
                <div class="app-container">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968350.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/10055/10055317.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/732/732220.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/888/888883.png?ga=GA1.1.1091421505.1676426509&track=ais" alt="">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968705.png" alt="">
                </div>
                <a href="https://www.freepik.com/" class="attr-link">Icons from Freepik</a>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <h2 class="heading">Recent <span>Projects</span></h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="../assets/rms.webp" alt="">
                <div class="portfolio-layer">
                    <h4>Research Management Services</h4>
                    <p>
                    Research Management Services, or RMS, is a web-based system that serves as a central 
                    repository for patent documents and published articles contributed by students, instructors, 
                    and professors across all campuses of Batangas State University.</p>
                    <a href=""><i class='bx bx-link-alt' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="../assets/ATLANTIS1.webp" alt="">
                <div class="portfolio-layer">
                    <h4>ATLANTIS</h4>
                    <p>
                        ATLANTIS: An IoT-Based Artificial Intelligence Aquaponic Control and Monitoring System for Aquaponics Greenhouse
                         is a DOST funded project to check the current status of the aquaponics between mobile phone and edge device attached to a greenhouse.
                    </p>
                    <a href=""><i class='bx bx-link-alt' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="../assets/aidukasyon.webp" alt="">
                <div class="portfolio-layer">
                    <h4>AIDukasyon: An Educational Assistance Web Portal </h4>
                    <p>
                        AIDukasyon is a web system intended for the Local Government Unit of Alitagtag 
                        to serve the application process for the educational assistance program of the LGU-Alitagtag.
                    </p>
                    <a href="https://alitagtag.aidukasyon.online/public/home.php"><i class='bx bx-link-alt' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="../assets/blbdc.webp" alt="">
                <div class="portfolio-layer">
                    <h4>Business Logo</h4>
                    <p>I created the business logo and marketing infographics to small business owner of Brielle's Lechon Belly De Cebu.</p>
                    <a href="https://web.facebook.com/profile.php?id=100086812871111"><i class='bx bx-link-alt' ></i></a>
                </div>
            </div>
        </div>
    </section>
    <?php
    require_once('../function/email-function.php');

    if (isset($_POST['submit'])) {
        $recipientEmail = 'lloydanthony.bautista0@gmail.com'; // recipient's email address
        sendEmail($recipientEmail); // call the sendEmail function from email-function.php
    }
    ?>

    <section class="contact" id="contact">
        <h2 class="heading">Reach <span>Out</span></h2>
        <form action="" method="post">
            <div class="input-box">
                <input type="text" name="full_name" placeholder="FULL NAME">
                <input type="text" name="email" placeholder="EMAIL ADDRESS">
            </div>
            <div class="input-box">
                <input type="text" name="contact_number" placeholder="CONTACT NUMBER">
                <input type="text" name="email_subject" placeholder="EMAIL SUBJECT">
            </div>
            <textarea name="message" id="" cols="30" rows="10" placeholder="YOUR MESSAGE"></textarea>
            <input type="submit" name="submit" value="Send Message" class="send-btn">
        </form>
    </section>

    <footer class="footer">
        <div class="footer-text">
            <p>© L.A.M.B. | 2023 | All Rights Reserved</p>
        </div>
        <div class="pixcap-attr" id="#pixcap">
        <p><a href="https://www.pixcap.com">3d icon made with pixcap.com</a></p>
        </div>
        <div class="footer-icon-top">
            <a href="#home"><i class='bx bx-up-arrow' ></i></a>
        </div>
    </footer>

<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="../javascript/script.js"></script>
</body>
</html>