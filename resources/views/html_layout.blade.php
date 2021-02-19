
<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta property="og:image" itemprop="image" content="{{ asset('assets/img/caelum_logo.png') }}">
        {{-- App Title --}}
        <title>@lang('landing_title')</title>
        {{-- App Favicon --}}
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon_caelumdev.ico') }}" />
        {{-- Font Awesome Icons --}}
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        {{-- Google Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
        {{-- CSS Style --}}
        <link href="css/styles.css" rel="stylesheet" />    
    </head>

    <body id="page-top">

        {{-- Navigation --}} 
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/caelum_logo.png" id="dynLogo" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">@lang('services')</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">@lang('portfolio')</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">@lang('about')</a></li>
                        {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li> --}}
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">@lang('contact')</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Masthead --}}
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">@lang('slider_subtitle')</div>
                <div class="masthead-heading text-uppercase"> @lang('slider_main_title')</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">@lang('TELL ME MORE')</a>
            </div>
        </header>
        
        {{-- Services --}}
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@lang('services')</h2>
                    <h3 class="section-subheading text-muted">@lang('We develop your ideas in...')</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-desktop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"> @lang('Web Design')</h4>
                        <p class="text-muted">@lang('We design your website following your requirements and offering a clean, innovating, responsive, fast and intuitive design.')</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fab fa-connectdevelop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">@lang('UI/UX')</h4>
                        <p class="text-muted">@lang('We evaluate and structure each development stage in order to give the customer intuitive, visual and efficient products.')</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">@lang('Mobile Apps')</h4>
                        <p class="text-muted">@lang('We develop your mobile app that fits you and following your requeriments. Your iOS or Android, native or multiplatform app is here.')</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"> @lang('E-Commerce')</h4>
                        <p class="text-muted">@lang('We have for your online store for you, from the most generic up to the details which will make your store unique and different.')</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-camera-retro fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">@lang('Social Media')</h4>
                        <p class="text-muted">@lang('We create and manage your idea, business or enterprise image with content and strategies implemented through the social networks.')</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-bezier-curve fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">@lang('Graphic Design')</h4>
                        <p class="text-muted">@lang('Branding, Digital Art, Corporate Identity... We are your best choice on visual, attractive and innovating graphic design.')</p>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- Portfolio Grid --}}
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@lang('portfolio')</h2>
                    <h3 class="section-subheading text-muted">@lang('Our customers ideas became reality')</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/portfolio/preview/tufispyc_preview.jpg') }}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tufis PyC</div>
                                <div class="portfolio-caption-subheading text-muted">@lang('Deserts and Cupcakes reviews website')</div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/preview/sigmaib_preview.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sigma IB</div>
                            <div class="portfolio-caption-subheading text-muted">@lang('Brokers website with administrative panel for agents')</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/preview/lozanoasociados_preview.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Lozano & Asociados</div>
                            <div class="portfolio-caption-subheading text-muted">@lang('Fire protection training website')</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/preview/tufanofullmoda_ig_preview.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Tufano... Full moda!!</div>
                            <div class="portfolio-caption-subheading text-muted">@lang('Shoe’s maker Instagram account and feed management')</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/preview/psiccarol_preview.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Carol M. | Psicóloga</div>
                            <div class="portfolio-caption-subheading text-muted">@lang('Psychologist Carol M.’s Instagram account and feed management')</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/preview/socialoplesk_preview.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Social Oplesk</div>
                            <div class="portfolio-caption-subheading text-muted">@lang('Social Oplesk’s Instagram account and feed management')</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- About --}}
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@lang('about')</h2>
                    <h3 class="section-subheading text-muted">@lang('What better way to know about us if is not knowing how we work...')</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/frame-1.jpg') }}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>@lang('Stage 1')</h4>
                                <h4 class="subheading">@lang('Know your idea... pretty much as you do')</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">@lang('No one knows your idea like you do, so we start a study of your idea and get to the bottom of the whole context, needs and expectations of the idea. We carry out a preliminary study of the project and planning, offering the best way to develop the project for each client.')</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/frame-2.jpg') }}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>@lang('Stage 2')</h4>
                                <h4 class="subheading">@lang('Create protoype and define adjustments')</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">@lang('After we define alongside you what you need, the fun begins... We create an intuitive and basic initial prototype or design and from there, alongside you, define the final adjustments to then start the production through code writing.')</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/frame-3.jpg') }}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>@lang('Stage 3')</h4>
                                <h4 class="subheading">@lang('Let’s get on with it!')</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">@lang('Idea explained, design and prototype approved, presets made, and now Code Mode: ACTIVE ... We focus on writing the lines of code to give final form to your product.')</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/frame-4.jpg') }}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>@lang('Stage 4')</h4>
                                <h4 class="subheading">@lang('Tests, Fixes and... Final Launch!')</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">@lang('"What does not kill you, strengthens you"... That is why we carry out tests to break our code and thus make the pertinent corrections to deliver a quality and correctly functional product. In the final launch phase, we can only implement the product and support you along the way so that you can see how your idea takes you where you want to be.')</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                @lang('Result:')
                                <br />
                                @lang('Client')
                                <br />
                                @lang('Satisfied!')
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        {{-- Clients --}}
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/tufanofullmoda/" target="_blank"><img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/clients/tufanofullmoda.jpg') }}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://tufispyc.tufano.com.ve" target="_blank"><img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/clients/tufispyc.jpg') }}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://sigmaib.com" target="_blank"><img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/clients/sigmaib.jpg') }}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://lozanoasociados.net" target="_blank"><img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/clients/lozanoasociados.jpg') }}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/psic.carol/" target="_blank"><img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/clients/psiccarol.jpg') }}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/social_oplesk/" target="_blank"><img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/clients/socialoplesk.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact --}}
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@lang('contact us')</h2>
                    <h3 class="section-subheading custom-text-muted">@lang('Start or continue your experience with us, let us know here how to boost up your ideas so they can boost you up to success.')</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="@lang('Your Name *')" required="required" data-validation-required-message="@lang('Please enter your name.')" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="@lang('Your Email *')" required="required" data-validation-required-message="@lang('Please enter your email address.')" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" pattern="[0-9]{9,}" placeholder="@lang('Your Phone *')" required="required" data-validation-required-message="@lang('Please enter your phone number.')" data-validation-pattern-message="@lang('The telephone must be only numbers and 9 digits length as minimum')"/>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="@lang('Your Message *')" required="required" data-validation-required-message="@lang('Please enter a message.')"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">@lang('Send Message')</button>
                    </div>
                </form>
            </div>
        </section>

        {{-- Portfolio Modals --}}

        {{-- Modal 1 --}}
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    {{-- Project Details Go Here --}}
                                    <h2 class="text-uppercase">Tufis PyC</h2>
                                    <p class="item-intro text-muted">@lang('Deserts and Cupcakes reviews website')</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/full/tufispyc_full.jpg') }}" alt="" />
                                    <p>@lang('Website dedicated to Tufi’s Postres y Cupcakes, designed for customers to leave their review of their experience with the variety of products offered by the company and rate it from 1 to 5 stars')</p>
                                    <ul class="list-inline">
                                        <li>@lang('Date:') @lang('May 2020')</li>
                                        <li>@lang('Category:') @lang('Reviews Website')</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        @lang('Close Project')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal 2 --}}
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    {{-- Project Details Go Here --}}
                                    <h2 class="text-uppercase">Sigma IB</h2>
                                    <p class="item-intro text-muted">@lang('Brokers website with administrative panel for agents')</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/full/sigmaib_full.jpg') }}" alt="" />
                                    <p>@lang('Website dedicated to Sigma IB, designed to make known the company, their values, location and contact through the website. It also includes an administrative panel for agents to manage quotes and budgets.')</p>
                                    <ul class="list-inline">
                                        <li>@lang('Date:') @lang('June 2020')</li>
                                        <li>@lang('Category:') @lang('Website and Back Office')</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        @lang('Close Project')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal 3 --}}
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    {{-- Project Details Go Here --}}
                                    <h2 class="text-uppercase">Lozano & Asociados</h2>
                                    <p class="item-intro text-muted">@lang('Fire protection training website')</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/full/lozanoasociados_full.jpg') }}" alt="" />
                                    <p>@lang('Website dedicated to Lozano & Asociados, designed to access information about the company, the methodologies they use in the educational field for training on fire protection, their clients, consultancy and courses.')</p>
                                    <ul class="list-inline">
                                        <li>@lang('Date:') @lang('July 2020')</li>
                                        <li>@lang('Category:') @lang('Informative Website')</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        @lang('Close Project')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal 4 --}}
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    {{-- Project Details Go Here --}}
                                    <h2 class="text-uppercase">Tufano... Full moda!!</h2>
                                    <p class="item-intro text-muted">@lang('Shoe’s maker Instagram account and feed management')</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/full/tufanofullmoda_ig_full.jpg') }}" alt="" />
                                    <p>@lang('Instagram account and feed management dedicated to Tufano... Full moda!!, designed for brand’s product showcase, advertising, marketing and customer’s direct contact.')</p>
                                    <ul class="list-inline">
                                        <li>@lang('Date:') @lang('December 2019')</li>
                                        <li>@lang('Category:') @lang('Social Media')</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        @lang('Close Project')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal 5 --}}
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    {{-- Project Details Go Here --}}
                                    <h2 class="text-uppercase">Carol M. | Psicóloga</h2>
                                    <p class="item-intro text-muted">@lang('Psychologist Carol M.’s Instagram account and feed management')</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/full/psiccarol_full.jpg') }}" alt="" />
                                    <p>@lang('Instagram account and feed management dedicated to Psychologist Carol M., designed to offer psychological services, online consultations, therapies and more.')</p>
                                    <ul class="list-inline">
                                        <li>@lang('Date:') @lang('January 2021')</li>
                                        <li>@lang('Category:') @lang('Social Media')</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        @lang('Close Project')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal 6 --}}
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    {{-- Project Details Go Here --}}
                                    <h2 class="text-uppercase">Social Oplesk</h2>
                                    <p class="item-intro text-muted">@lang('Social Oplesk’s Instagram account and feed management')</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/full/socialoplesk_full.jpg') }}" alt="" />
                                    <p>@lang('Instagram account and feed management dedicated to Social Oplesk, designed for job offers and oportunities, personnel recruiting, curses, online learning and more.')</p>
                                    <ul class="list-inline">
                                        <li>@lang('Date:') @lang('February 2021')</li>
                                        <li>@lang('Category:') @lang('Social Media')</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        @lang('Close Project')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">@lang('copyright')</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/caelum_dev" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/caelumdev" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/caelumdev" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        {{-- <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a> --}}
                    </div>
                </div>
            </div>
        </footer>

        {{-- Bootstrap core JS --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        {{-- Third party plugin JS --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        {{-- Contact form JS --}}
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        {{-- Core theme JS --}}
        <script src="js/scripts.js"></script>

    </body>
</html>