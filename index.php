    <?php    
    $name =("Raymundo Hanaban") ;
    $course = ("BS Information Technology");
    $school = ("PLMun");
    $year = ("3rd Year");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> | Student Profile</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <h2>My Portfolio</h2>

            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#contact">Contact</a>
            </div>

            <button id="darkModeBtn">🌙</button>
        </nav>
    </header>

    <main>

        <!-- HOME -->
        <section id="home" class="hero">

            <div class="hero-text">
                <p class="welcome">WELCOME TO MY WEBSITE</p>

                <h1>Hello, I'm <span><?php echo $name; ?></span></h1>

                <p>
                    I am a <?php echo $year; ?> student taking
                    <?php echo $course; ?> at <?php echo $school; ?>.
                </p>

                <a href="#about" class="btn">Learn More</a>
            </div>

            <div class="profile-container">
                <img src="image.1.jpg"Profile Picture">
            </div>

        </section>

        <!-- ABOUT -->
        <section id="about" class="section">

            <h2>About Me</h2>

            <p>
                Hello! My name is <?php echo $name; ?>. I am currently studying
                <?php echo $course; ?>. I am interested in web development,
                programming, and learning new technologies.
            </p>

        </section>

        <!-- SKILLS -->
        <section id="skills" class="section">

            <h2>My Skills</h2>

            <div class="skills-container">

                <div class="skill-card">
                    <h3>HTML</h3>
                    <p>Creating the structure of websites.</p>
                </div>

                <div class="skill-card">
                    <h3>CSS</h3>
                    <p>Designing attractive and responsive pages.</p>
                </div>

                <div class="skill-card">
                    <h3>JavaScript</h3>
                    <p>Adding interaction and functionality.</p>
                </div>

                <div class="skill-card">
                    <h3>PHP</h3>
                    <p>Creating dynamic web applications.</p>
                </div>

            </div>

        </section>

        <!-- CONTACT -->
        <section id="contact" class="section contact">

            <h2>Contact Me</h2>

            <form id="contactForm">

                <input
                    type="text"
                    id="name"
                    placeholder="Your Name"
                    required
                >

                <input
                    type="email"
                    id="email"
                    placeholder="Your Email"
                    required
                >

                <textarea
                    id="message"
                    placeholder="Your Message"
                    required
                ></textarea>

                <button type="submit" class="btn">
                    Send Message
                </button>

            </form>

            <p id="formMessage"></p>

        </section>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>

</body>
</html>