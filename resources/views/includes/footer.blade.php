<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta http-equiv="Cache-Control" content="private" />
    <meta http-equiv="Expires" content="86400000" />
    <meta http-equiv="Cache-Control" content="max-age=86400000" />
    <base target="_parent" />

    <link type="text/css" rel="stylesheet" href="foundation/normalize.css">
    <link type="text/css" rel="stylesheet" href="foundation/foundation.min.css">
</head>

<body>
    <div id="standard-footer" style="background-color: #efefef;">
        <style type="text/css" scoped style="display:none;">
            @import url(//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900);

            html,
            body {
                height: 100%;
                width: 100%;
                font-family: 'Roboto', sans-serif;
                -webkit-font-smoothing: antialiased;
            }

            #standard-footer .row {
                width: 100%;
                max-width: 1280px;
            }

            #standard-footer body,
            #standard-footer div,
            #standard-footer dl,
            #standard-footer dt,
            #standard-footer dd,
            #standard-footer ul,
            #standard-footer ol,
            #standard-footer li,
            #standard-footer h1,
            #standard-footer h2,
            #standard-footer h3,
            #standard-footer h4,
            #standard-footer h5,
            #standard-footer h6,
            #standard-footer pre,
            #standard-footer form,
            #standard-footer p,
            #standard-footer blockquote,
            #standard-footer th,
            #standard-footer td {
                font-size: 1rem;
                font-size: inherit;
            }

            #standard-footer {
                color: #505050;
                padding: 1.25rem 0;
                font-size: .7rem;
            }

            #standard-footer h1,
            #standard-footer h2,
            #standard-footer h3,
            #standard-footer h4,
            #standard-footer h5,
            #standard-footer h6 {
                color: #505050;
            }

            #standard-footer ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            #standard-footer ul li {}

            #standard-footer ul li a {
                color: #505050;
            }

            #standard-footer ul li a:hover {
                text-decoration: underline;
            }

            #standard-footer h4 {
                font-weight: bold;
                text-transform: uppercase;
                font-size: 0.9em;
            }
        </style>

        <style>
            .no-underline {
                text-decoration: none;
                /* Removes the underline */
                color: inherit;
                /* Keeps the link color consistent with the surrounding text */
            }

            .no-underline:hover {
                text-decoration: underline;
                /* Optional: Add underline on hover for better user experience */
            }
        </style>

        <div class="container mt-5">
            <div class="row d-flex justify-content-between">
                <!-- First Column (Split) -->
                <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-center justify-content-center">
                    <img src="//gwhs.i.gov.ph/gwt-footer/govph-seal-mono-footer.jpg" alt="GovPH Seal" class="img-fluid">
                </div>

                <!-- Second Column (Split) -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h4>Republic of the Philippines</h4>
                    <p>All content is in the public domain unless otherwise stated.</p>
                </div>

                <!-- Third Column -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h4>About GOVPH</h4>
                    <p>Learn more about the Philippine government, its structure, how government works and the people
                        behind it.</p>
                    <ul class="list-unstyled">
                        <li><a href="http://www.gov.ph/" class="no-underline">GOV.PH</a></li>
                        <li><a href="http://www.gov.ph/data" class="no-underline">Open Data Portal</a></li>
                        <li><a href="http://www.officialgazette.gov.ph" class="no-underline">Official Gazette</a></li>
                    </ul>
                </div>

                <!-- Fourth Column -->
                <div class="col-lg-3 col-md-12 mb-4">
                    <h4>Government Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="http://president.gov.ph/" class="no-underline">Office of the President</a></li>
                        <li><a href="http://ovp.gov.ph/" class="no-underline">Office of the Vice President</a></li>
                        <li><a href="http://www.senate.gov.ph/" class="no-underline">Senate of the Philippines</a></li>
                        <li><a href="http://www.congress.gov.ph/" class="no-underline">House of Representatives</a></li>
                        <li><a href="http://sc.judiciary.gov.ph/" class="no-underline">Supreme Court</a></li>
                        <li><a href="http://ca.judiciary.gov.ph/" class="no-underline">Court of Appeals</a></li>
                        <li><a href="http://sb.judiciary.gov.ph/" class="no-underline">Sandiganbayan</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
    <script type="text/javascript" src="js/iframeResizer.contentWindow.min.js"></script>
    <script type="text/javascript">
        (function(d, f) {
            var fc;
            fc = d.getElementById(f);
            var resetSize = function() {
                if ('parentIFrame' in window) window.parentIFrame.size(fc.clientHeight);
            }

            // console.log(fc.clientHeight);
            window.onresize = function(event) {
                resetSize();
            };

            addEvent = function(element, evnt, funct) {
                if (element.attachEvent)
                    return element.attachEvent('on' + evnt, funct);
                else
                    return element.addEventListener(evnt, funct, false);
            }

            // example
            // addEvent(
            // 	document.getElementById('myElement'),
            // 	'click',
            // 	function () { alert('hi!'); }
            // );
            callBackTimeout = function(callback, opt_timeout) {
                var called = false;

                function fn() {
                    if (!called) {
                        called = true;
                        callback();
                    }
                }
                setTimeout(fn, opt_timeout || 1000);
                return fn;
            }

            var init = function() {
                if (document.createEvent) { // W3C
                    var ev = document.createEvent('Event');
                    ev.initEvent('resize', true, true);
                    window.dispatchEvent(ev);
                } else { // IE
                    element = document.documentElement;
                    var event = document.createEventObject();
                    element.fireEvent("onresize", event);
                }
                resetSize();

                if (typeof ga === 'function') {
                    ga('create', 'UA-107134498-Y', 'auto');
                    ga('require', 'eventTracker');
                    ga('send', 'pageview');
                };
            }
            var checkLoad = function() {
                document.readyState !== "complete" ? setTimeout(checkLoad, 11) : init();
            };

            checkLoad();
            init();
        }(document, 'standard-footer'));
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107134498-3"></script>
    <script async src="https://www.google-analytics.com/analytics.js"></script>
    <script async src="vendor/autotrack/autotrack.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-107134498-3');
    </script>
</body>

</html>
