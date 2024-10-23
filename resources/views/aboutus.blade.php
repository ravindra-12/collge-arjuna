<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - College Arjuna</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 0.9rem; /* Smaller base font size */
            color: #333;
            line-height: 1.6;
        }
        h1, h3 {
            font-weight: 700;
            color: #2c3e50;
        }
        h1 {
            font-size: 1.8rem; /* Smaller main heading */
        }
        h3 {
            font-size: 1.4rem; /* Smaller section heading */
        }
        h5 {
            font-weight: 500;
            color: #34495e;
            font-size: 1.1rem; /* Smaller subheading */
        }
        p {
            font-size: 0.9rem; /* Decreased paragraph size */
            margin-bottom: 1rem;
        }
        ul.list-unstyled {
            padding-left: 1rem;
        }
        ul.list-unstyled h5 {
            margin-top: 1.5rem;
        }
        .text-primary {
            color: #007bff !important;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        /* Custom font size for larger screens */
        @media (min-width: 768px) {
            body {
                font-size: 1rem; /* Slightly increased on larger screens */
            }
            p {
                font-size: 1rem; /* Slightly increased on larger screens */
            }
        }
    </style>
</head>
<body>

    @include('components.header')

<div class="container my-5">
    <div class="text-center">
        <h1>About Us</h1>
    </div>
    <p>College Arjuna went live in June 2013 with a goal of helping engineering aspirants. We started by providing detailed information about different Engineering Colleges & entrance exams. Soon, we added a news section for providing the latest updates on each exam & their counseling schedules.</p>
    <p>And there are some questions that need discussion, so we created a Forum where students can easily ask, answer & discuss questions.</p>
    
    <h3>The Five Sections</h3>
    <ul class="list-unstyled">
        <li><h5>1. Latest News</h5></li>
        <p>In this section, you can get the latest news about entrance exams, college placements, etc.</p>
        
        <li><h5>2. Entrance Exams Info</h5></li>
        <p>In this section, you can get detailed information about entrance exams like important dates, eligibility, fees, syllabus, etc.</p>
        
        <li><h5>3. Engineering Colleges Info</h5></li>
        <p>In this section, you can get detailed information about engineering colleges like address, courses offered, cutoff, fee structure, placements, campus facilities, etc.</p>
        
        <li><h5>4. Placements Help</h5></li>
        <p>In this section, you can get detailed information about companies like how much they offer, their sample papers, etc.</p>
        
        <li><h5>5. Forum</h5></li>
        <p>This is the section that we want you to participate in. Ask, answer & discuss your questions related to entrance exams, counseling, placements, etc.</p>
    </ul>

    <div class="mt-4">
        <h6>Stay Connected with us!</h6>
        <p>Follow us on <a href="#" class="text-primary">Facebook</a> or <a href="#" class="text-primary">Twitter</a>.</p>
    </div>
</div>
@include('components.footer')
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
