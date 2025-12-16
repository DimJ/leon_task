        <footer class="flex-shrink-0 footer mt-2 py-1 pt-3 bg-light text-dark" >
            <div class="container-fluid text-center" style="background-color:#5a5a5a; color:white;" >
                <div class="row">
                    <div class="col-sm-6 col-md-3 mb-3 text-center text-sm-start">

                    </div>
                    <div class="col-sm-6 col-md-3 text-center text-sm-start">
                        <p class="mt-3">
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center text-sm-start">

                    </div>
                    <div class="col-sm-6 col-md-3 keep-in-touch">
                        <h6 class="section-title">{{ __('users.keep_in_touch') }}</h6>
                        <p class="mt-4 social-links" >
                            <a style="background-color:white;" href="https://www.linkedin.com/in/dimitrios-dimopoulos-60483974/" class="fs-4 me-3" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </p>
                        <?php echo date('Y'); ?><br>
                        <label>{{ __('users.my_full_name') }}</label><br>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                    <div class="footer-inline-menu d-flex flex-wrap gap-3" >

                    </div>
                    <small >

                    </small>
                </div>
            </div>
        </footer>
    </body>

    <style>
        /* The side navigation menu */
        .sidenav {
            height: 100%;
            /* 100% Full-height */
            width: 0;
            /* 0 width - change this with JavaScript */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Stay on top */
            top: 0;
            /* Stay at the top */
            left: 0;
            background-color: #ffffff;
            /* Black*/
            overflow-x: hidden;
            /* Disable horizontal scroll */
            padding-top: 5px;
            /* Place content 60px from the top */
            transition: 0.5s;
            /* 0.5 second transition effect to slide in the sidenav */
        }

        /* The navigation menu links */
        .sidenav a {
            padding: 8px 8px 0px 8px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            color: rgb(102, 102, 102);
        }

        /* Position and style the close button (top right corner) */
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 26px;
            margin-left: 50px;
            color: #bfbfbf;
        }

        /* The side navigation menu */
        .sidenavRight {
            height: 100%;
            /* 100% Full-height */
            width: 0;
            /* 0 width - change this with JavaScript */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Stay on top */
            top: 0;
            /* Stay at the top */
            right: 0;
            background-color: #111;
            /* Black*/
            overflow-x: hidden;
            /* Disable horizontal scroll */
            padding-top: 60px;
            /* Place content 60px from the top */
            transition: 0.5s;
            /* 0.5 second transition effect to slide in the sidenav */
            padding-left: 10px;
        }

        /* The navigation menu links */
        .sidenavRight a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenavRight a:hover {
            color: #f1f1f1;
        }

        /* Position and style the close button (top right corner) */
        .sidenavRight .closebtn {
            position: absolute;
            top: 0;
            left: -20px;
            font-size: 26px;
            margin-right: 50px;
        }

        /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
        #main {
            transition: margin-left .5s;
            padding: 20px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidenavRight {
                padding-top: 15px;
            }

            .sidenavRight a {
                font-size: 18px;
            }
        }


        /* LOADER */
        .overlay {
            height: 100%;
            width: 100%;
            display: none;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.4);
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay a {font-size: 20px}
            .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
            }
        }
    </style>

</html>


