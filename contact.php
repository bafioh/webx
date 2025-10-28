<?php
    include("header.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Web X</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <main>
        <section class="section-spacing">
            <div class="container jumbotron text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="hero-section">Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="images/mecha_5.jpg" alt="KIMJAEWOO FIREBRUSH" class="img-fluid banner-image">
                    </div>  
                    <div class="col-md-6 text-content">
                        <h3 class="solid-text-h3">Tell us more about your project</h3>
                        <br>
                        <h5>Share your business ideas, design inspirations, and any references that represent your vision. The more we know, the better we can bring your ideas to life.</h5>
                        <p>Our team reads every message carefully. Once we understand your goals and style, we’ll reach out with ideas, insights, and a clear path to start building something amazing together.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-spacing contact-section d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <hr><br>
                        <div class="card border-0 rounded-4">
                            <form id="contactForm">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="6" placeholder="Write your message here..." required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-custom w-100">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        const form = document.getElementById('contactForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            alert("Your message has been sent successfully! We will contact you soon.");
            form.reset();
        });
    </script>
</body>
</html>
<?php
    include("footer.html");
?>