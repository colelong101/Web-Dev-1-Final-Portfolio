<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Add the Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../components/header.php'; ?>

    <!-- Home Page Content -->
    <header class="py-5 text-left header-bg">
        <div class="container">
            <h1><span class="fw-bold">Hello!</span> I'm <span class="fw-bold">Cole,</span><br> a <span class="text-primary">Frontend Developer</span></h1>
            <p class="lead">with a focus on creating minimalistic web interfaces and beautiful user experiences</p>
            <h5>Technologies:</h5>
            <div class="icon-row">
                <i class="fab fa-php"></i>
                <i class="fab fa-js"></i>
                <i class="fab fa-vuejs"></i>
                <i class="fab fa-laravel"></i>
                <i class="fab fa-sass"></i>
                <i class="fab fa-python"></i>
            </div>
        </div>
    </header>

    <section class="py-5 header-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 text-dark p-2">
                    <h2 class="fw-bold">About Me</h2>
                    <p>Hard working and motivated developer, who loves to create. When I am not coding, I love <span class="fw-bold">golfing,</span> going to the <span class="fw-bold">gym</span> and spending time with my <span class="fw-bold">family and dogs!</span></p>
                    <h2 class="pt-3 fw-bold">Job Experiences</h2>
                    <ul class="list-unstyled">
                        <li>
                            <h5>Web Developer Intern</h5>
                            <p>McCurdy Real Estate and Auction</p>
                            <p>Jan 2019 - Present</p>
                            <ul>
                                <li>Developed and maintained auction software, and frontend web architecture using Vue.js, Laravel and MySQL</li>
                                <li>Collaborated with designers to implement user-friendly interfaces.</li>
                                <li>Optimized website performance and cross-browser compatibility.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <img src="../images/cole-long-portrait.jpg" class="rounded img-fluid" alt="Your Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Add the Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
