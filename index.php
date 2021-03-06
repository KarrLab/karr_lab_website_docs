<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      	<meta name="description" content="The Karr Lab is a computational systems biology research lab at the Icahn School of Medicine at Mount Sinai." />
      	<meta name="keywords" content="Jonathan Karr, systems biology, translational medicine, whole-cell, modeling" />
      	<meta name="author" content="Jonathan Karr" />
      	<meta name="revised" content="Jonathan Karr, 03/03/2018" />
      	<meta name="copyright" content="&copy; 2013-2018 Karr Lab" />
      	<meta name="robots" content="ALL" />
      	<meta http-equiv="content-language" content="en-US" />
      	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>Karr Lab</title>
        <link rel="stylesheet" href="https://www.karrlab.org/static/css/foundation.css" />
        <link rel="stylesheet" href="https://www.karrlab.org/static/css/foundation-icons.css" />
        <link rel="stylesheet" href="https://www.karrlab.org/static/css/extras.css" />
        <script src="https://www.karrlab.org/static/js/vendor/modernizr.js"></script>

        <link rel="icon" type="image/x-icon" href="https://www.karrlab.org/static/img/logo-mssm-16x16.ico" />

        <style>
            #docs{
                width:100%;
            }
            #docs th {
                background:#999;
            }
            #docs th,
            #docs td {
                padding-left:20px;
                padding-right:20px;
                padding-top:4px;
                padding-bottom:4px;
                width: auto;
            }
        </style>
    </head>
    <body>
        <div class="off-canvas-wrap" data-offcanvas>
            <div class="inner-wrap">
                <nav class="tab-bar hide-for-medium-up">
                   <section class="left-small">
                        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
                    </section>

                    <section class="right tab-bar-section">
                        <h1 class="title">Karr Systems Biology Lab</h1>
                    </section>
                </nav>

                <aside class="left-off-canvas-menu">
                    <ul class="off-canvas-list">
                        <li><label>Karr Systems Biology Lab</label></li>
                        <li><a href="https://www.karrlab.org/">Home</a></li>
                        <li><a href="https://www.karrlab.org/research">Research</a></li>
                        <li><a href="https://www.karrlab.org/resources">Resources</a></li>
                        <li><a href="https://www.karrlab.org/publications">Publications</a></li>
                        <li><a href="https://www.karrlab.org/press">Press</a></li>
                        <li><a href="https://www.karrlab.org/funding">Funding</a></li>
                        <li><a href="https://www.karrlab.org/people">People</a></li>
                        <li><a href="https://www.karrlab.org/join">Join us</a></li>
                        <li><a href="https://www.karrlab.org/contact">Contact</a></li>
                    </ul>
                </aside>

                <section class="main-section">
                <!-- canvas wrapping -->

                    <!-- top bar -->
                    <div class="top-bar row show-for-medium-up">
                        <div class="small-12 columns">
                            <dl class="sub-nav">
                                <dd><a href="https://www.karrlab.org/">Home</a></dd>
                                <dd><a href="https://www.karrlab.org/research">Research</a></dd>
                                <dd class="active"><a href="https://www.karrlab.org/resources">Resources</a></dd>
                                <dd><a href="https://www.karrlab.org/publications">Publications</a></dd>
                                <dd><a href="https://www.karrlab.org/press">Press</a></dd>
                                <dd><a href="https://www.karrlab.org/funding">Funding</a></dd>
                                <dd><a href="https://www.karrlab.org/people">People</a></dd>
                                <dd><a href="https://www.karrlab.org/join">Join us</a></dd>
                                <dd><a href="https://www.karrlab.org/contact">Contact</a></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="top-bar-bg show-for-medium-up">
                    </div>

                    <!-- content -->
                    <div class="row content">
                        <div class="centered">
                        <!-- end common header -->
                            <h3>Documentation</h3>

                            <table cellpadding=0 cellspacing=0 id="docs">
                                <thead>
                                    <tr>
                                        <th>Package</th>
                                        <th>Documentation</th>
                                        <th>Latest version</th>
                                        <th>Last updated</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php

foreach (scandir('.') as $repo) {
    if (file_exists("$repo/.htaccess") && strpos(file_get_contents("$repo/.htaccess"), 'RewriteEngine') === 0) {
        echo "<tr>";
        echo sprintf("<td><a href='https://github.com/KarrLab/%s'>%s</a></td>", $repo, $repo);
        echo sprintf("<td><a href='%s'>docs</a></td>", $repo);
        
		$versions = scandir("$repo/master/");
		natsort($versions);
        $version = array_pop($versions);
        if (preg_match('/^\d+(\.\d+(\.\d+[a-zA-Z0-9]*)?)?$/', $version) != 1)
            $version = '';
        echo sprintf("<td><a href='%s'>%s</a></td>", $repo, $version);
        
        if ($version) {
            if (file_exists("$repo/master/$version/index.html"))
                $last_updated = date('Y-m-d H:i:s', filemtime("$repo/master/$version/index.html"));
            else
                $last_updated = date('Y-m-d H:i:s', filemtime("$repo/master/$version"));
        } else {
            $last_updated = '';
        }
        echo sprintf("<td><a href='%s'>%s</a></td>", $repo, $last_updated);
        echo "</tr>\n";
    }
}

?>
                                </tbody>
                            </table>

                        <!-- common footer -->
                        </div>
                    </div>

                    <!-- bottom bar -->
                    <div class="row bottom-bar">
                        <div class="logo">
                            <a href="https://www.mssm.edu"><img src="https://www.karrlab.org/static/img/logo-mssm-32x32.png" /></a>
                        </div>

                        <div class="text-left">
                            <a href="https://icahn.mssm.edu/departments-and-institutes/genomics">Icahn Institute for Genomics &amp; Multiscale Biology</a><br/>
                            <a href="https://icahn.mssm.edu/departments-and-institutes/genomics">Department of Genetics &amp; Genomic Sciences</a><br/>
                            <a href="https://www.mssm.edu">Icahn School of Medicine at Mount Sinai</a>
                        </div>

                        <div class="text-right show-for-medium-up">
                            &copy; Karr Lab 2018
                        </div>

                        <div class="clear"></div>
                    </div>

                <!-- canvas wrapping -->
                </section>
                <a class="exit-off-canvas"></a>
            </div>
        </div>

        <script src="https://www.karrlab.org/static/js/vendor/jquery.js"></script>
        <script src="https://www.karrlab.org/static/js/foundation.min.js"></script>
        <script>
        $(document).foundation();
        </script>
    </body>
</html>