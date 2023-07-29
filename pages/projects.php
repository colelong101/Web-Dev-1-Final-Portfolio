<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Projects</title>
</head>
<body>
    <?php include '../components/header.php'; ?>
    
    <header class="py-5 text-center">
        <div class="container">
            <h1 class="fw-bold text-primary">Project Showcase</h1>
            <p class="fw-semi">"A programmer is only as good as his projects" -George Washington (probably)</p>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card rounded">
                    <img src="../images/port.png" class="card-img-top" alt="Portolio Site Image">
                    <div class="card-body">
                        <h5 class="fw-bold card-title">Cole Long Developer Site</h5>
                        <p class="text-secondary fw-bold">HTML, CSS, Vanilla JS</p>
                        <p class="card-text">This is a simple developer portfolio (similar to this site) that was my first project. It is hosted on Netlify, and uses inline Netlify code to handle the contact form</p>
                        <a href="https://colelongdeveloper.com/" target="blank" class="btn btn-sm btn-dark">Visit Site <i class="fas fa-external-link-alt"></i></a>
                        <a href="https://github.com/colelong101/Web-Development-Final" target="blank" class="btn btn-sm btn-dark">View Code <i class="fab fa-github"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded">
                    <img src="../images/port2.png" class="card-img-top" alt="Portfolio Site Image">
                    <div class="card-body">
                        <h5 class="fw-bold card-title">PokeFetch</h5>
                        <p class="text-secondary fw-bold">Vanilla JS</p>
                        <p class="card-text">My OOP JavaScript final that showcases a very basic use case of working with API's, and fetching data. In this implmentation, I create a site similar to a Pokedex, that allows yout to choose a Pokemon, and see a list of stats, along with an image!</p>
                        <a href="https://codepen.io/colelong/pen/GRwwmwO" target="blank" class="btn btn-sm btn-dark">Visit Site <i class="fas fa-external-link-alt"></i></a>
                        <a href="https://github.com/colelong101/Web-Development-Final" target="blank" class="btn btn-sm btn-dark">View Code <i class="fab fa-github"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header class="py-5 text-center">
        <div class="container">
            <h3 class="fw-bold">More Projects (GitHub Links)</h3>
            <p>These are some projects I have created that dont have a UI, but give a good idea of how I write my code!</p>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card rounded">
                    <div class="card-body">
                        <h5 class="fw-bold card-title">JS Accounting Software w/ Jest Tests</h5>
                        <p class="text-secondary fw-bold">Jest, Vanilla JS, Git</p>
                        <p class="card-text">A simple overtime pay/FICA tax calculation software, with integrated unit testing to ensure functioanlity. This was a final for my Test Driven Development class! I also created an issue with an addition and feature branch, so that I can work with Git some more.</p>
                        <a href="https://github.com/colelong101/Module-6-Accountant" target="blank" class="btn btn-sm btn-dark">View Code <i class="fab fa-github"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded">
                    <div class="card-body">
                        <h5 class="fw-bold card-title">Python GUI Testing Software</h5>
                        <p class="text-secondary fw-bold">Python</p>
                        <p class="card-text">This simple GUI quiz program was made using Python, and delievered as a real life example in my OOP Python class. We had a statement of work, pull request and merge to create this program! The program allows you to import a csv of questions, and it formats into a quiz.</p>
                        <a href="https://github.com/colelong101/PythonFinal" target="blank" class="btn btn-sm btn-dark">View Code <i class="fab fa-github"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>