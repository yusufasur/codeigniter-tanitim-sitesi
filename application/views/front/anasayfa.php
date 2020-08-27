<?php $this->load->view('front/include/header') ?>
<?php $config = siteconfig(); ?>
<!-- Site header -->
<header class="site-header size-lg text-center" style="background-image: url(<?= $config->anasayfabg ?>)">
    <div class="container">
        <div class="col-xs-12">
            <br><br>
            <h2>We offer <mark>1,259</mark> job vacancies right now!</h2>
            <h5 class="font-alt">Find your desire one in a minute</h5>
            <br><br><br>
            <form class="header-job-search">
                <div class="input-keyword">
                    <input type="text" class="form-control" placeholder="Job title, skills, or company">
                </div>

                <div class="input-location">
                    <input type="text" class="form-control" placeholder="City, state or zip">
                </div>

                <div class="btn-search">
                    <button class="btn btn-primary" type="submit">Find jobs</button>
                    <a href="job-list.html">Advanced Job Search</a>
                </div>
            </form>
        </div>

    </div>
</header>
<!-- END Site header -->


<!-- Main container -->
<main>



    <!-- Recent jobs -->
    <section>
        <div class="container">
            <header class="section-header">
                <span>Latest</span>
                <h2>Recent jobs</h2>
            </header>

            <div class="row item-blocks-connected">

                <!-- Job item -->
                <div class="col-xs-12">
                    <a class="item-block" href="job-detail.html">
                        <header>
                            <img src="<?= base_url('assets/front/assets/img/logo-google.jpg') ?>" alt="">
                            <div class="hgroup">
                                <h4>Senior front-end developer</h4>
                                <h5>Google</h5>
                            </div>
                            <div class="header-meta">
                                <span class="location">Menlo park, CA</span>
                                <span class="label label-success">Full-time</span>
                            </div>
                        </header>
                    </a>
                </div>
                <!-- END Job item -->


                <!-- Job item -->
                <div class="col-xs-12">
                    <a class="item-block" href="job-detail.html">
                        <header>
                            <img src="<?= base_url('assets/front/assets/img/logo-linkedin.png') ?>" alt="">
                            <div class="hgroup">
                                <h4>Software Engineer (Entry or Senior)</h4>
                                <h5>Linkedin</h5>
                            </div>
                            <div class="header-meta">
                                <span class="location">Livermore, CA</span>
                                <span class="label label-warning">Part-time</span>
                            </div>
                        </header>
                    </a>
                </div>
                <!-- END Job item -->

                <!-- Job item -->
                <div class="col-xs-12">
                    <a class="item-block" href="job-detail.html">
                        <header>
                            <img src="<?= base_url('assets/front/assets/img/logo-envato.png') ?>" alt="">
                            <div class="hgroup">
                                <h4>Full Stack Web Developer</h4>
                                <h5>Envato</h5>
                            </div>
                            <div class="header-meta">
                                <span class="location">San Francisco, CA</span>
                                <span class="label label-info">Freelance</span>
                            </div>
                        </header>
                    </a>
                </div>
                <!-- END Job item -->

                <!-- Job item -->
                <div class="col-xs-12">
                    <a class="item-block" href="job-detail.html">
                        <header>
                            <img src="<?= base_url('assets/front/assets/img/logo-facebook.png') ?>" alt="">
                            <div class="hgroup">
                                <h4>Web Applications Developer</h4>
                                <h5>Facebook</h5>
                            </div>
                            <div class="header-meta">
                                <span class="location">Lexington, MA</span>
                                <span class="label label-danger">Internship</span>
                            </div>
                        </header>
                    </a>
                </div>
                <!-- END Job item -->

                <!-- Job item -->
                <div class="col-xs-12">
                    <a class="item-block" href="job-detail.html">
                        <header>
                            <img src="<?= base_url('assets/front/assets/img/logo-microsoft.jpg') ?>" alt="">
                            <div class="hgroup">
                                <h4>Sr. SQL Server Developer</h4>
                                <h5>Microsoft</h5>
                            </div>
                            <div class="header-meta">
                                <span class="location">Palo Alto, CA</span>
                                <span class="label label-success">Remote</span>
                            </div>
                        </header>
                    </a>
                </div>
                <!-- END Job item -->

            </div>

            <br><br>
            <p class="text-center"><a class="btn btn-info" href="job-list.html">Browse all jobs</a></p>
        </div>
    </section>
    <!-- END Recent jobs -->


    <!-- Facts -->
    <section class="bg-img bg-repeat no-overlay section-sm" style="background-image: url(<?= base_url('assets/front/assets/img/bg-pattern.png') ?>)">
        <div class="container">

            <div class="row">
                <div class="counter col-md-3 col-sm-6">
                    <p><span data-from="0" data-to="6890"></span>+</p>
                    <h6>Jobs</h6>
                </div>

                <div class="counter col-md-3 col-sm-6">
                    <p><span data-from="0" data-to="1200"></span>+</p>
                    <h6>Members</h6>
                </div>

                <div class="counter col-md-3 col-sm-6">
                    <p><span data-from="0" data-to="36800"></span>+</p>
                    <h6>Resume</h6>
                </div>

                <div class="counter col-md-3 col-sm-6">
                    <p><span data-from="0" data-to="15400"></span>+</p>
                    <h6>Company</h6>
                </div>
            </div>

        </div>
    </section>
    <!-- END Facts -->


    <!-- How it works -->
    <section>
        <div class="container">

            <div class="col-sm-12 col-md-6">
                <header class="section-header text-left">
                    <span>Workflow</span>
                    <h2>How it works</h2>
                </header>

                <p class="lead">Pellentesque et pulvinar orci. Suspendisse sed euismod purus. Pellentesque nunc ex, ultrices eu enim non, consectetur interdum nisl. Nam congue interdum mauris, sed ultrices augue lacinia in. Praesent turpis purus, faucibus in tempor vel, dictum ac eros.</p>
                <p>Nulla quis felis et orci luctus semper sit amet id dui. Aenean ultricies lectus nunc, vel rhoncus odio sagittis eu. Sed at felis eu tortor mattis imperdiet et sed tortor. Nullam ac porttitor arcu. Vivamus tristique elit id tempor lacinia. Donec auctor at nibh eget tincidunt. Nulla facilisi. Nunc condimentum dictum mattis.</p>


                <br><br>
                <a class="btn btn-primary" href="page-typography.html">Learn more</a>
            </div>

            <div class="col-sm-12 col-md-6 hidden-xs hidden-sm">
                <br>
                <img class="center-block" src="<?= base_url('assets/front/assets/img/how-it-works.png') ?>" alt="how it works">
            </div>

        </div>
    </section>
    <!-- END How it works -->


    <!-- Categories -->
    <section class="bg-alt">
        <div class="container">
            <header class="section-header">
                <span>Categories</span>
                <h2>Popular categories</h2>
                <p>Here's the most popular categories</p>
            </header>

            <div class="category-grid">
                <a href="job-list-1.html">
                    <i class="fa fa-laptop"></i>
                    <h6>Technology</h6>
                    <p>Designer, Developer, IT Service, Front-end developer, Project management</p>
                </a>

                <a href="job-list-2.html">
                    <i class="fa fa-line-chart"></i>
                    <h6>Accounting</h6>
                    <p>Finance, Tax service, Payroll manager, Book keeper, Human resource</p>
                </a>

                <a href="job-list-3.html">
                    <i class="fa fa-medkit"></i>
                    <h6>Medical</h6>
                    <p>Doctor, Nurse, Hospotal, Dental service, Massagist</p>
                </a>

                <a href="job-list-1.html">
                    <i class="fa fa-cutlery"></i>
                    <h6>Food</h6>
                    <p>Restaurant, Food service, Coffe shop, Cashier, Waitress</p>
                </a>

                <a href="job-list-2.html">
                    <i class="fa fa-newspaper-o"></i>
                    <h6>Media</h6>
                    <p>Journalism, Newspaper, Reporter, Writer, Cameraman</p>
                </a>

                <a href="job-list-3.html">
                    <i class="fa fa-institution"></i>
                    <h6>Government</h6>
                    <p>Federal, Law, Human resource, Manager, Biologist</p>
                </a>
            </div>

        </div>
    </section>
    <!-- END Categories -->


    <!-- Newsletter -->
    <section class="bg-img text-center" style="background-image: url(<?= base_url('assets/front/assets/img/bg-facts.jpg') ?>)">
        <div class="container">
            <h2><strong>Subscribe</strong></h2>
            <h6 class="font-alt">Get weekly top new jobs delivered to your inbox</h6>
            <br><br>
            <form class="form-subscribe" action="#">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" placeholder="Your eamil address">
                    <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Subscribe</button>
              </span>
                </div>
            </form>
        </div>
    </section>
    <!-- END Newsletter -->


</main>
<!-- END Main container -->

<?php $this->load->view('front/include/footer') ?>