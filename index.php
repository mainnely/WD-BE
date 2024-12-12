<?php 
include("A08/connect.php")
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mainnely's portfolio.</title>
    <link rel="icon" href="img/Logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <!-- Section of Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg p-0">
        <div class="container-fluid nav">
          <img src="img/Group 5.png" style="margin: 5px 0px 5px 15px;" />
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="ms-auto">
                <ul class="navbar-nav pb-4">
                    <li class="nav-item">
                        <a class="nav-link navHome" aria-current="page" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navProjects" href="#projects">PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navAbout" href="#about">ABOUT</a>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </nav>
   
    

    <!-- Section Landing Page/Home -->
    <section id="home">
        <div class="container-fluid" style="background-color: #faf5f8;">
            <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">

                <div class="col-12 col-lg-6 col-md-6 d-flex justify-content-center align-items-center order-lg-2 imgContainer">
                    <img src="img/profile.png" class="img-fluid" alt="Profile Image" />
                </div>

                <div class="col-12 col-lg-6 col-md-6 text-lg-start text-center order-lg-1 px-5">
                    <h1 class="display-4 text-center"> Welcome! I'm <br>
                        <span class="display-3 auto-type text-center"></span>
                    </h1>
                    <p class="descIntro py-3 text-center">
                        Third-Year Student of Bachelor of Science in Information Technology <br>
                        Polytechnic University of the Philippines - Sto. Tomas Campus
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projects -->
    <section id="projects">
        <div class="container-fluid pb-5" style="background-color: rgb(25, 12, 57);">
            <div class="row mx-5">
                <h1 class="display-3 py-3 px-0 mt-5 d-flex justify-content-center" style="color: #e0e8eb;">Recent
                    Projects</h1>
            </div>
            <div class="row px-5 d-flex align-items-center justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex align-items-center justify-content-center">
                    <div class="card px-3 py-5 my-4 shadow-lg rounded-5"
                        style="background-color: #EEEFFF; color:#040404">
                        <div class="card-body">
                            <h5 class="card-title">WD A08</h5>
                            <p class="card-text">This project is mainnely's island of personalities.</p>
                            <a href="A08/index.php" class="btn btn-outline-primary" target="_blank">Visit Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About  -->
    <section id="about">
        <div class="container-fluid p-0" style="background-color: #faf5f8; width:100%;">
            <div class="row mx-5 p-0">
                <h1 class="display-3 py-3 px-0 mt-5 d-flex justify-content-center" style="color: #040404;">About Me</h1>
            </div>

            <div class="row timeline m-5">
                <div class="timelineEvent timelineEventType1 shadow ">
                    <div class="timelineEventIcon ">
                    </div>
                    <div class="timelineEventDate">
                        2022 - Present
                    </div>
                    <div class="timelineEventContent">
                        <div class="timelineEventTitle">
                           <b> College</b>
                            <p class="timelineEventDescription">Taking Bachelor of Science in Information Technology at Polytechnic University of the
                                Philippines – Sto. Tomas, Batangas Campus</p>
                        </div>
                    </div>
                </div>

                <div class="timelineEvent timelineEventType2 shadow  ">
                    <div class="timelineEventIcon">
                    </div>
                    <div class="timelineEventDate">
                        2020 - 2022
                    </div>
                    <div class="timelineEventContent">
                        <div class="timelineEventTitle">
                            <b>Senior High School</b>
                            <p class="timelineEventDescription">Completed Senior High School at Sto. Tomas Senior High School - San Miguel, STB</p>
                        </div>
                    </div>
                </div>

                <div class="timelineEvent timelineEventType3 shadow  ">
                    <div class="timelineEventIcon">
                    </div>
                    <div class="timelineEventDate">
                        2016 - 2020
                    </div>
                    <div class="timelineEventContent">
                        <div class="timelineEventTitle">
                            <b>Junior High School</b>
                            <p class="timelineEventDescription">Completed Junior High School at San Pedro National High School - San Pedro, STB</p>
                        </div>
                    </div>
                </div>

                <div class="timelineEvent timelineEventType4 shadow  ">
                    <div class="timelineEventIcon">
                    </div>
                    <div class="timelineEventDate">
                        2010 - 2016
                    </div>
                    <div class="timelineEventContent">
                        <div class="timelineEventTitle">
                           <b> Elementary</b>
                            <p class="timelineEventDescription">Completed elementary at Donña Tiburcia Carpio Malvar Elementary School - San Miguel, STB
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container-fluid pb-5" style="background-color: rgb(25, 12, 57);">
            <div class="row mx-5">
                <h1 class="display-5 py-3 px-0 mt-5 d-flex justify-content-center" style="color: #EEEFFF">
                    Connect with me</h1>
            </div>

            <div class="row text-center mt-4 mx-0 px-0">
                <div class="d-flex align-items-center justify-content-center py-3">
                    <a href="#" onclick="downloadResume()" class="btn btn-outline-light display-3 rounded-2 py-3">
                        Download My CV (PDF)
                    </a>
                </div>
            </div>

            <div class="row mx-0 px-0 d-flex align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-md-6 p-0 m-0 d-flex align-items-center justify-content-end">
                    <div class="card p-5 m-5">
                        <p class=" m-4">
                            Email: micahrianzares@gmail.com
                            <br>
                            Phone: +63 969 270 4014
                        </p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 p-0 m-0 d-flex align-items-center justify-content-center">
                    <a href="https://www.facebook.com/jermainemicah.rianzares" target="_blank" class="m-3">
                        <i class='fab fa-facebook' style='font-size:48px;color:#EEEFFF'></i>
                    </a>
                    
                    <a href="https://www.instagram.com/mainne_ly/" target="_blank" class="m-3">
                        <i class='fab fa-instagram' style='font-size:48px;color:#EEEFFF'></i>
                    </a>
                    
                    <a href="www.linkedin.com/in/jermaine-micah-rianzares-mainnely" target="_blank" class="m-3">
                        <i class='fab fa-linkedin' style='font-size:48px;color:#EEEFFF'></i>
                    </a>
                    
                    <a href="https://github.com/mainnely" target="_blank" class="m-3">
                        <i class='fab fa-github' style='font-size:48px;color:#EEEFFF'></i>
                    </a>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Section Footer -->
    <section>
        <div class="container-fluid m-0 p-0">
            <footer>
                <p class="d-flex align-items-center d-flex justify-content-center m-0 py-4"
                    style="color:#e0e8eb; background: rgb(25, 12, 57);">&copy; mainnely.github.io | All Rights Reserved.
                </p>
            </footer>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


    <script>
        var typed = new Typed(".auto-type", {
            strings: ["Jermaine Micah Rianzares"],
            typeSpeed: 150,

            backSpeed: 150,

            loop: true,

        });

        function downloadResume() {
            const link = document.createElement('a');
            link.href = 'https://raw.githubusercontent.com/mainnely/mainnely.github.io/da29f1073b2fc4a14844073480f04efd46dd5131/img/Rianzares_Jermaine%20Micah_CV.pdf';

            link.download = 'Rianzares_Jermaine Micah_CV.pdf';

            document.body.appendChild(link);

            link.click();

            document.body.removeChild(link);

        }




    </script>
</body>

</html>