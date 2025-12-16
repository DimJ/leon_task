<!DOCTYPE html>
<html>
    <head>

        <title>Dataverse Users</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.4/datatables.min.css" rel="stylesheet" integrity="sha384-wCOnFm+5eFTFshsNmxMEjAg0Lzr8SZ076plN6EMeWa2MXSJVHfdFuWUix5uc/rr2" crossorigin="anonymous">
        <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.4/datatables.min.js" integrity="sha384-Ntaqx3XQQQY/+R/Ga/RadT0sniT7Abp5GEzdlCYPZ6x98lObEYVegDox22NdQfdy" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

        <script type="text/javascript" src="../js/vue.js"></script>

    </head>

    <body>

        <div id="myNav"  class="overlay">
            <div class="overlay-content">
                <h2 style="color:chocolate" >{{ __('users.please_wait') }}</h2>
            </div>
        </div>

        <div id="mySidenav" class="sidenav" >
            <a href="javascript:void(0)" class="closebtn" onclick="closeLeftDrawer()">&times;</a>

            <!-- Two-column layout using CSS columns -->
            <div class="subcategory-wrapper">
                <div class="subcategory-block" style="margin:10px;">

                    <label>{{ __('users.my_full_name') }}</label><br>
                    <label>{{ __('users.my_birth_date') }}</label><br>

                </div>
            </div>
        </div>

        <div id="mySidenavRight" class="sidenavRight" >
            <a href="javascript:void(0)" class="closebtn" onclick="closeRightDrawer()">&times;</a>

            <!-- Two-column layout using CSS columns -->
            <div class="subcategory-wrapper">
                <div class="subcategory-block" style="margin:10px;color:white;">

                    <label>{{ __('users.my_headstart') }}</label><br>
                    <label>{{ __('users.my_headstart_since') }}</label><br>
                    <label>{{ __('users.my_headstart_type') }}</label><br>

                    <br>

                    <label>{{ __('users.my_leon') }}</label><br>
                    <label>{{ __('users.my_leon_since') }}</label><br>
                    <label>{{ __('users.my_leon_type') }}</label><br>

                </div>
            </div>
        </div>


        <div class="row" v-else style="height:35px;">

            <div class="col-xs-12 col-sm-5" style="text-align:left; background-color:#5a5a5a; height:35px;">
                <div class="" style="display: inline;">
                    <ul style="margin-top:5px; color:white;" >
                        <li style="display:inline;margin-right:50px;margin-left:-20px;">
                            <a onclick="openLeftDrawer()" style="cursor:pointer;" >
                                PERSONAL INFO
                            </a>

                            <script>
                                function openLeftDrawer () {
                                    document.querySelectorAll('.sidenav').forEach(el => {
                                        el.style.width = '0';
                                    });

                                    const el = document.getElementById("mySidenav");
                                    if (el) {
                                        el.style.width = "300px";
                                    }
                                }

                                function closeLeftDrawer(){
                                    document.getElementById("mySidenav").style.width = "0";
                                }
                            </script>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-2" style="text-align: center;  background-color:#5a5a5a; height:35px;">

            </div>

            <div class="col-xs-12 col-sm-5" style="text-align:right; background-color:#5a5a5a; height:35px;">

                <div class="" style="display: inline;">
                    <ul style="margin-top:5px; color:white;">
                        <li style="display: inline-flex; align-items: center; margin-right:15px;">
                            <a onclick="openRightDrawer()" style="cursor:pointer;" >
                                WORKING EXPERIENCE
                            </a>
                            <script>
                                function openRightDrawer () {
                                    document.querySelectorAll('.sidenavRight').forEach(el => {
                                        el.style.width = '0';
                                    });

                                    const el = document.getElementById("mySidenavRight");
                                    if (el) {
                                        el.style.width = "300px";
                                    }
                                }

                                function closeRightDrawer(){
                                    document.getElementById("mySidenavRight").style.width = "0";
                                }
                            </script>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <script>
            var expand_theme_myStyle_fastScheduleChanges = false;

            function openNav()
            {
                document.getElementById("myNav").style.display = "block";
            }

            function closeNav()
            {
                document.getElementById("myNav").style.display = "none";
            }

            function checkForChanges(event)
            {
                if(expand_theme_myStyle_fastScheduleChanges)
                {
                    alert(" Save your changes first! ");
                    event.preventDefault();
                }
            }
        </script>
