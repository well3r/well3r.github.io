
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <script>
        function includeHTML() {
          var z, i, elmnt, file, xhttp;
          /*loop through a collection of all HTML elements:*/
          z = document.getElementsByTagName("*");
          for (i = 0; i < z.length; i++) {
            elmnt = z[i];
            /*search for elements with a certain atrribute:*/
            file = elmnt.getAttribute("w3-include-html");
            if (file) {
              /*make an HTTP request using the attribute value as the file name:*/
              xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                  if (this.status == 200) {elmnt.innerHTML = this.responseText;}
                  if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
                  /*remove the attribute, and call this function once more:*/
                  elmnt.removeAttribute("w3-include-html");
                  includeHTML();
                }
              }      
              xhttp.open("GET", file, true);
              xhttp.send();
              /*exit the function:*/
              return;
            }
          }
        };
        </script>
         <div w3-include-html="head.html"></div> 

         <script>
         includeHTML();
         </script>
    

</head>
<body>

<script>
var itens = null;
$.getJSON("http://ec2-18-130-176-221.eu-west-2.compute.amazonaws.com:3000/api/Assistant", function(data) {
  itens = data;
  itens.forEach(function(item) {
    console.log(item);
  });
});
console.log(itens);
</script>

        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            
            <div w3-include-html="menu.html"></div> 

<script>
includeHTML();
</script>

            
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <div w3-include-html="header.html"></div>

               
                  
                   
                        
                        
                        

                        
                       
<script>
    includeHTML();
    </script>






<!-- /header -->
<!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <span id="item"></span>
            <script>
              let request = new XMLHttpRequest();
              request.open('GET', 'http://ec2-18-130-176-221.eu-west-2.compute.amazonaws.com:3000/api/BuildingId', true);
                request.onload = function () {
                // Convert JSON data to an object
                let item = JSON.parse(this.response);
                let output = '';
                for (
                  var i = 0; i < item.length; i++) {
                  output += '<div class="col-sm-6 col-lg-3"><div class="card text-white bg-flat-color-4"><div class="card-body pb-0"><div class="dropdown float-right"><button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown"><i class="fa fa-cog"></i></button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><div class="dropdown-menu-content"><a class="dropdown-item" href="#">Update</a><a class="dropdown-item" href="#">Delete</a><a class="dropdown-item" href="#">Find Out More</a></div></div></div><h4 class="mb-0"><span class="">'+ item[i].BuildingUId +'</span></h4><p class="text-light">'+ item[i].building.client +'</p><div class="chart-wrapper px-3" style="height:70px;" height="70">Test<br>What</div></div></div></div>'; 
              // console.log(item[i].building.BuildingType);
               
                }
                document.getElementById('item').innerHTML = output;
              }
                  request.send();
            </script>
           <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="">Click</span>
                        </h4>
                        <p class="text-light">The Button To Add</p>
             

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <button>sdds</button> <!-- <canvas id="widgetChart1"></canvas>-->
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            
            <!--/.col-->

            
            <!--/.col-->

            <!--<div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <ul>
                        <li>
                            <sctrong><span class="count">40</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <sctrong><span class="count">450</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                -->
                <!--/social-box-->
           <!-- </div>--><!--/.col-->

<!--
            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-twitter"></i>
                    <ul>
                        <li>
                            <sctrong><span class="count">30</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <sctrong><span class="count">450</span></strong>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>-->
                <!--/social-box-->
           <!-- </div>--><!--/.col-->


         <!--   <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-linkedin"></i>
                    <ul>
                        <li>
                            <sctrong><span class="count">40</span> +</strong>
                            <span>contacts</span>
                        </li>
                        <li>
                            <sctrong><span class="count">250</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>-->
                <!--/social-box-->
           <!-- </div>--><!--/.col-->


         <!--   <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-google-plus"></i>
                    <ul>
                        <li>
                            <sctrong><span class="count">94</span> k</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <sctrong><span class="count">92</span></strong>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>-->
                <!--/social-box-->
           <!-- </div>--><!--/.col-->

           

           


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Profit</div>
                                <div class="stat-digit">0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">New Clients</div>
                                <div class="stat-digit">961</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script src="assets/js/plugins.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script src="assets/js/main.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script src="assets/js/dashboard.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script src="assets/js/widgets.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
    <script type="c3a03cf1d85638bfa90acc86-text/javascript">
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="c3a03cf1d85638bfa90acc86-text/javascript"></script>
<script type="c3a03cf1d85638bfa90acc86-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="c3a03cf1d85638bfa90acc86-|49" defer=""></script></body>
</html>
