<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
</head>
<body>

<header class="py-5 text-left">
        <div class="container">
            <h1><span class="fw-bold text-primary">Contact Me</h1>
            <p class="col-6">In the form below, go ahead and ask any questions, or jsut shoot me a message! I am always open to feedback</p>
        </div>
    </header>
    <div class="container text-left mt-4">
        <form action="https://formspree.io/f/xzbldbqv" method="POST">
            <div class="form-group">
                <label for="email">Your email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Your message:</label>
                <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
            </div>
            <div class="pt-3">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</body>
</html>