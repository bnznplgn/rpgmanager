<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

       {{--  https://fontawesome.com/kits/1da50133d0/use --}}
        <script src="https://kit.fontawesome.com/1da50133d0.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header class="container">
            <nav class="navbar navbar-expand-lg navbar-default">
                <div class="container-fluid px-0">
                    <div class="d-flex">
                    <a class="navbar-brand" href="../../index.html"><img src="../../assets/images/brand/logo/logo.svg" alt=""></a>
                    <div class="dropdown">
                        <button class="btn btn-light-primary btn-sm text-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fe fe-list me-2 align-middle "></i>Category
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    Web Development
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Bootstrap</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            React
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            GraphQl</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Gatsby</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Grunt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Svelte</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Meteor</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            HTML5</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Angular</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    Design
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Graphic Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Illustrator
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            UX / UI Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Figma Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Adobe XD</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Sketch</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Icon Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/course-category.html">
                                            Photoshop</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="../../pages/course-category.html" class="dropdown-item">
                                    Mobile App
                                </a>
                            </li>
                            <li>
                                <a href="../../pages/course-category.html" class="dropdown-item">
                                    IT Software
                                </a>
                            </li>
                            <li>
                                <a href="../../pages/course-category.html" class="dropdown-item">
                                    Marketing
                                </a>
                            </li>
                            <li>
                                <a href="../../pages/course-category.html" class="dropdown-item">
                                    Music
                                </a>
                            </li>
                            <li>
                                <a href="../../pages/course-category.html" class="dropdown-item">
                                    Life Style
                                </a>
                            </li>
                            <li>
                                <a href="../../pages/course-category.html" class="dropdown-item">
                                    Business
                                </a>
                            </li>
                            <li>
                                <a href="../../pages/course-category.html" class="dropdown-item">
                                    Photography
                                </a>
                            </li>
                        </ul>
                      </div>
                    </div>
            
                    <!-- Button -->
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="navbar-default">
                        <ul class="navbar-nav ms-auto">
            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Landings
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                                    <li>
                                        <h4 class="dropdown-header">Landings</h4>
                                    </li>
                                    <li>
                                        <a href="../../pages/landings/home-academy.html" class="dropdown-item d-flex justify-content-between">
                                    Home Academy <span class="badge bg-primary ms-1"> New </span>
                                        </a>
                                     </li>
                                    <li>
                                        <a href="../../pages/landings/landing-courses.html" class="dropdown-item">
                                            Courses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../pages/landings/course-lead.html" class="dropdown-item">
                                            Lead Course
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../pages/landings/request-access.html" class="dropdown-item">
                                            Request Access
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../pages/landings/landing-sass.html" class="dropdown-item">
                                      SaaS
                                        </a>
                                     </li>
            
            
                                     <li>
                                        <a href="../../pages/landings/landing-job.html" class="dropdown-item d-flex justify-content-between">
                                     Job Listing
                                        </a>
                                     </li>
                                    
            
            
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        Courses
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="../../pages/course-single.html">
                                                Course Single
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/course-single-v2.html">
                                                Course Single v2
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/course-resume.html">
                                                Course Resume
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/course-category.html">
                                                Course Category
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/course-checkout.html">
                                                Course Checkout
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/course-filter-list.html">
                                                Course List/Grid
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/add-course.html">
                                                Add New Course
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        Paths
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="../../pages/course-path.html" class="dropdown-item">
                                                Browse Path
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../pages/course-path-single.html" class="dropdown-item">
                                                Path Single
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="../../pages/blog.html">
                                                Listing</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/blog-single.html">
                                                Article
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/blog-category.html">
                                                Category</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/blog-sidebar.html">
                                                Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
            
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        Career
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="../../pages/career.html">
                                                 Overview</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/career-list.html">
                                                Listing
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/career-single.html">
                                                Opening</a>
                                        </li>
            
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        Portfolio
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="../../pages/portfolio.html">
                                                 List</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/portfolio-single.html">
                                                Single
                                            </a>
                                        </li>
            
            
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        Job
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="../../pages/landings/landing-job.html">
                                                 Home</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/jobs/job-listing.html">
                                                List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/jobs/job-grid.html">
                                                Grid
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/jobs/job-single.html">
                                                Single
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/jobs/company-list.html">
                                                Company List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/jobs/company-about.html">
                                                Company Single
                                            </a>
                                        </li>
            
            
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        Specialty
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="../../pages/coming-soon.html">
                                                Coming Soon
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/404-error.html">
                                                Error 404
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/maintenance-mode.html">
                                                Maintenance Mode
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/terms-condition-page.html">
                                                Terms &amp; Conditions
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="mx-3">
                                </li>
            
            
                                <li>
                                    <a class="dropdown-item" href="../../pages/about.html">
                                        About
                                    </a>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    Help Center
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="../../pages/help-center.html">
                                                Help Center
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/help-center-faq.html">
                                                FAQ's
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/help-center-guide.html">
                                                Guide
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/help-center-guide-single.html">
                                            Guide Single
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../../pages/help-center-support.html">
                                            Support
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../../pages/pricing.html">
                                        Pricing
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../../pages/compare-plan.html">
                                        Compare Plan
                                    </a>
                                </li>
            
                                <li>
                                    <a class="dropdown-item" href="../../pages/contact.html">
                                        Contact
                                    </a>
                                </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Accounts
                                </a>
                                <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
                                    <li>
                                        <h4 class="dropdown-header">Accounts</h4>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                            Instructor
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="text-wrap">
                                                <h5 class="dropdown-header text-dark">Instructor</h5>
                                                <p class="dropdown-text mb-0">
                                                    Instructor dashboard for manage courses and earning.
                                                </p>
                                            </li>
                                            <li>
                                                <hr class="mx-3">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/dashboard-instructor.html">
                                                    Dashboard</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/instructor-profile.html">
                                                    Profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/instructor-courses.html">
                                                    My Courses
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/instructor-order.html">
                                                    Orders</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/instructor-reviews.html">
                                                    Reviews</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/instructor-students.html">
                                                    Students</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/instructor-payouts.html">
                                                    Payouts</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/instructor-earning.html">
                                                    Earning</a>
                                            </li>
                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                                    Quiz 
             <span class="badge bg-primary ms-1"> New </span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="../../pages/instructor-quiz.html">
                                                            Quiz</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="../../pages/instructor-quiz-details.html">
                                                         Single</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="../../pages/instructor-quiz-result.html">
                                                         Result</a>
                                                    </li>
                                                    </ul>
                                                    </li>
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                            Students
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="text-wrap">
                                                <h5 class="dropdown-header text-dark">Students</h5>
                                                <p class="dropdown-text mb-0">
                                                    Students dashboard to manage your courses and subscriptions.
                                                </p>
                                            </li>
                                            <li>
                                                <hr class="mx-3">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/dashboard-student.html">
                                                    Dashboard</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/student-subscriptions.html">
                                                    Subscriptions
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/payment-method.html">
                                                    Payments</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/billing-info.html">
                                                    Billing Info</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/invoice.html">
                                                    Invoice</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/invoice-details.html">
                                                    Invoice Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/dashboard-student.html">
                                                    Bookmarked</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="../../pages/dashboard-student.html">
                                                    My Path</a>
                                            </li>
                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                                    Quiz 
             <span class="badge bg-primary ms-1"> New </span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="../../pages/student-quiz.html">
                                                            Quiz</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="../../pages/student-quiz-attempt.html">
                                                         Attempt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="../../pages/student-quiz-start.html">
                                                         Start</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="../../pages/student-quiz-result.html">
                                                         Result</a>
                                                    </li>
                                                    </ul>
                                                    </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                            Admin
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="text-wrap">
                                                <h5 class="dropdown-header text-dark">Master Admin</h5>
                                                <p class="dropdown-text mb-0">
                                                    Master admin dashboard to manage courses, user, site setting
                                                    , and work with amazing apps.
                                                </p>
                                            </li>
                                            <li>
                                                <hr class="mx-3">
                                            </li>
                                            <li class="px-3 d-grid">
                                                <a href="../../pages/dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to Dashboard</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <hr class="mx-3">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/sign-in.html">
                                            Sign In
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/sign-up.html">
                                            Sign Up
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/forget-password.html">
                                            Forgot Password
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/profile-edit.html">
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/security.html">
                                            Security
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/social-profile.html">
                                            Social Profiles
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/notifications.html">
                                            Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/profile-privacy.html">
                                            Privacy Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/delete-profile.html">
                                            Delete Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../pages/linked-accounts.html">
                                            Linked Accounts
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-fullwidth">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mega Menu
                                </a>
                                <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                               <div class="px-4 pt-2 pb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="lh-1 mb-5">
                                        <h3 class="mb-1">Earn a Degree</h3>
                                        <p>Breakthrough pricing on 100% online degrees designed to fit into your life.</p>
                                    </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="border-bottom pb-2 mb-3">
                                            <h5 class="mb-0">Degrees</h5>
                                        </div>
                                        <div class="">
                                            <a href="#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/degree-1.png" alt="">
                                                <div class="ms-2">
                                                    <small class="text-body">University of Michigan</small>
                                                    <h6 class="mb-0">Master of Applied Data Science</h6>
                                                </div>
                                               
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/degree-2.png" alt="">
                                                <div class="ms-2">
                                                    <small class="text-body">A&amp;B College 1980</small>
                                                    <h6 class="mb-0">MBA in Business Analytics</h6>
                                                </div>
                                               
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/degree-3.png" alt="">
                                                <div class="ms-2">
                                                    <small class="text-body">Imperial College London</small>
                                                    <h6 class="mb-0">Master of Science in Machine</h6>
                                                </div>
                                               
                                            </div>
                                            </a>
                                            <a href="#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/degree-4.png" alt="">
                                                <div class="ms-2">
                                                    <small class="text-body">University of Colorado</small>
                                                    <h6 class="mb-0">Master of Computer Science</h6>
                                                </div>
                                               
                                            </div>
                                        </a>
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-outline-primary btn-sm">View all degree</a>
                                            </div>
                                        </div>
            
                                    </div>
                                    <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                                        <div class="border-bottom pb-2 mb-3">
                                            <h5 class="mb-0">Certificate Programs</h5>
                                        </div>
                                        <div class="">
                                            <a href="#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/google.png" alt="">
                                                <div class="ms-2">
                                                    <small class="text-body">No Prerequisites</small>
                                                    <h6 class="mb-0">Google Data Analytics</h6>
                                                </div>
                                               
                                            </div>
                                            </a>
                                            <a href="#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/IBM.png" alt="">
                                                <div class="ms-2">
                                                    <small class="text-body">No Prerequisites</small>
                                                    <h6 class="mb-0">IBM Data Science</h6>
                                                </div>
                                               
                                            </div>
                                            </a>
                                            <a href="#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/microsoft.png" alt="">
                                                <div class="ms-2">
                                                    <small class="text-body">Expert Feedback</small>
                                                    <h6 class="mb-0">Machine Leaning for Analytics</h6>
                                                </div>
                                               
                                            </div>
                                            </a>
                                            <a href="#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/tensorflow.png" alt="">
                                                <div class="ms-2">
                                                    <small class="text-body">Certification Prerequisites</small>
                                                    <h6 class="mb-0">TensorFlow Developer Certificate</h6>
                                                </div>
                                               
                                            </div>
                                            </a>
                                            <a href="#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/meta.png" alt="">
                                                <div class="ms-2">
                                                    <small class="text-body">University of Colorado</small>
                                                    <h6 class="mb-0">Meta Marketing Analytics</h6>
                                                </div>
                                               
                                            </div>
                                            </a>
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-outline-primary btn-sm">View all Certificates</a>
                                            </div>
                                        </div>
            
                                    </div>
                                    <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                                        <div class="border-bottom pb-2 mb-3">
                                            <h5 class="mb-0">Popular Skills</h5>
                                        </div>
                                        <div class="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Python</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">SQL</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Microsoft Excel</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Machine Learning</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Data Science</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Data Analytics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Power BI</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Artificial Intelligence</a>
                                                </li>
                                                
                                            </ul>
                                            
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-outline-primary btn-sm">View all Skills</a>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                            </div>
                                </div>
                                </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-horizontal fs-3"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action border-0" href="../../docs/index.html">
                                            <div class="d-flex align-items-center">
                                                <i class="fe fe-file-text fs-3 text-primary"></i>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Documentations</h5>
                                                    <p class="mb-0 fs-6">
                                                        Browse the all documentation
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0" href="../../docs/changelog.html">
                                            <div class="d-flex align-items-center">
                                                <i class="fe fe-layers fs-3 text-primary"></i>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">
                                                        Changelog<span class="text-primary ms-1">v2.6.0</span>
                                                    </h5>
                                                    <p class="mb-0 fs-6">See what's new</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="ms-auto mt-3 mt-lg-0">
                            <a href="#"><i class="fe fe-shopping-cart fs-3 align-middle"></i>
                            </a>
                            <a href="../../pages/sign-in.html" class="btn btn-outline-primary btn-lg">Sign in</a>
                            <a href="../../pages/sign-up.html" class="btn btn-primary btn-lg">Sign up</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="bg-light pt-14 pb-16">
            <div class="content">
                @yield('content')
            </div>
        </main>

        <footer class="pt-lg-10 pt-5 footer bg-white">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                      <!-- about company -->
                  <div class="mb-4">
                    <img src="../../assets/images/brand/logo/logo.svg" alt="">
                    <div class="mt-4">
                      <p>Geek is feature-rich components and beautifully Bootstrap UIKit for developers, built with bootstrap responsive framework.</p>
                         <!-- social media -->
                      <div class="fs-4 mt-4">
                        <a href="#" class="mdi mdi-facebook fs-4 text-muted me-2"></a>
                        <a href="#" class="mdi mdi-twitter text-muted me-2"></a>
                        <a href="#" class="mdi mdi-instagram text-muted "></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
                  <div class="mb-4">
                        <!-- list -->
                    <h3 class="fw-bold mb-3">Company</h3>
                    <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                      <li><a href="#" class="nav-link">About</a></li>
                      <li><a href="#" class="nav-link">Pricing</a></li>
                      <li><a href="#" class="nav-link">Blog</a></li>
                      <li><a href="#" class="nav-link">Careers</a></li>
                      <li><a href="#" class="nav-link">Contact</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                  <div class="mb-4">
                        <!-- list -->
                    <h3 class="fw-bold mb-3">Support</h3>
                    <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                      <li><a href="#" class="nav-link">Help and Support</a></li>
                      <li><a href="#" class="nav-link">Become Instructor</a></li>
                      <li><a href="#" class="nav-link">Get the app</a></li>
                      <li><a href="#" class="nav-link">FAQ’s</a></li>
                      <li><a href="#" class="nav-link">Tutorial</a></li>
                    </ul>
    
                  </div>
                </div>
                <div class="col-lg-3 col-md-12">
                      <!-- contact info -->
                  <div class="mb-4">
                    <h3 class="fw-bold mb-3">Get in touch</h3>
                    <p>339 McDermott Points Hettingerhaven, NV 15283</p>
                    <p class="mb-1">Email: <a href="#">support@geeksui.com</a></p>
                    <p>Phone: <span class="text-dark fw-semi-bold">(000) 123 456 789</span></p>
                    <div class="d-flex">
                        <a href="#"><img src="../../assets/images/svg/appstore.svg" alt="" class="img-fluid"></a>
                        <a href="#" class="ms-2"><img src="../../assets/images/svg/playstore.svg" alt="" class="img-fluid"></a>
                    </div>
    
                  </div>
                </div>
              </div>
              <div class="row align-items-center g-0 border-top py-2 mt-6">
                <!-- Desc -->
                <div class="col-lg-10 col-12">
                    <div class="d-lg-flex align-items-center">
                        <div class="me-4">
                    <span>© 2022 Geeks-UI, Inc. All Rights Reserved</span>
                </div>
                <div>
                    <nav class="nav nav-footer">
                        <a class="nav-link ps-0" href="#">Privacy Policy</a>
                        <a class="nav-link px-2 px-md-3" href="#">Cookie Notice  </a>
                        <a class="nav-link d-none d-lg-block" href="#">Do Not Sell My Personal Information </a>
                        <a class="nav-link" href="#">Terms of Use</a>
                    </nav>
                </div>
                </div>
                    </div>
    
                  <!-- Links -->
                <div class="col-2  col-lg-2 d-md-flex justify-content-end">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-body" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fe fe-globe me-2 align-middle"></i>Language
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item " href="#"><span class="me-2">
                    
                    
                              <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5543_19736)">
                                <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169"></path>
                                <path d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z" fill="white"></path>
                                <path d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z" fill="#C8102E"></path>
                                <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z" fill="white"></path>
                                <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z" fill="#C8102E"></path>
                                </g>
                                <defs>
                                <clipPath id="clip0_5543_19736">
                                <rect width="16" height="12" fill="white" transform="translate(0 0.5)"></rect>
                                </clipPath>
                                </defs>
                                </svg>
                    
                    
                            </span>English</a></li>
                             <li><a class="dropdown-item " href="#"><span class="me-2">
                    
                              <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5543_19744)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.5H16V12.5H0V0.5Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.5H5.3325V12.5H0V0.5Z" fill="#002654"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.668 0.5H16.0005V12.5H10.668V0.5Z" fill="#CE1126"></path>
                                </g>
                                <defs>
                                <clipPath id="clip0_5543_19744">
                                <rect width="16" height="12" fill="white" transform="translate(0 0.5)"></rect>
                                </clipPath>
                                </defs>
                                </svg>
                    
                                      </span>Français</a></li>
                             <li><a class="dropdown-item " href="#"><span class="me-2">
                    
                              <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5543_19751)">
                                <path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00"></path>
                                <path d="M0 0.5H16V4.5H0V0.5Z" fill="black"></path>
                                <path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000"></path>
                                </g>
                                <defs>
                                <clipPath id="clip0_5543_19751">
                                <rect width="16" height="12" fill="white" transform="translate(0 0.5)"></rect>
                                </clipPath>
                                </defs>
                                </svg>
                    
                                      </span>Deutsch</a></li>
                    
                    
                    
                    
                           </ul>
                      </div>
                </div>
            </div>
            </div>
          </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

</html>
