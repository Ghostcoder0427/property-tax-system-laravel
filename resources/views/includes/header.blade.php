<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Assuming Vite is used for assets, adjust if using another method -->
    @stack('styles')

    <style>
        .container-main a,
        .container-main a:active,
        .container-main a:visited,
        .anchor a,
        .anchor a:active,
        .anchor a:visited {
            color: #0056b3;
            /* Example color */
        }

        .container-main a:focus,
        .container-main a:hover,
        .anchor a:focus,
        .anchor a:hover {
            color: #003f7f;
            /* Example hover color */
        }

        /* Include any other custom CSS styling here */
    </style>

    <style <?php the_tags(); ?>>
        .container-main a,
        .container-main a:active,
        .container-main a:visited,
        .anchor a,
        .anchor a:active,
        .anchor a:visited {
            <?php govph_displayoptions('govph_anchorcolor');
            ?>
        }

        .container-main a:focus,
        .container-main a:hover,
        .anchor a:focus,
        .anchor a:hover {
            <?php govph_displayoptions('govph_anchorcolor_hover');
            ?>
        }

        div .container-masthead {
            <?php govph_displayoptions('govph_header_setting');
            ?><?php govph_displayoptions('govph_background_header_size_setting');
            ?>
        }

        h1.logo a {
            <?php govph_displayoptions('govph_logo_setting');
            ?>
        }

        /* For Enable and Disable image logo to be center or left position */
        h1.logo {
            <?php govph_displayoptions('govph_logo_setting');
            ?>
        }

        /* End for Enable and Disable image logo to be center or left position */
        div.container-banner {
            <?php govph_displayoptions('govph_slider_setting');
            ?>
        }

        .banner-content,
        .orbit .orbit-bullets {
            <?php govph_displayoptions('govph_slider_fullwidth');
            ?>
        }

        #pst-container {
            <?php govph_displayoptions('govph_custom_pst');
            ?>
        }

        /* Start For Subject of Approval
Start for custom menu color

This is start for custom menu, font, hover colors

Start for border menu color that shows dropdown menu you can add also for auxiliary  #aux-main .has-dropdown>a::after
This should have no background color
#main-nav .has-dropdown>a::after {
    <?php govph_displayoptions('govph_menu_font_setting');
    ?>
}

This is for menu nav colors
#main-nav {
    This is for auxialliary and topbar to have custom colors
    <?php govph_displayoptions('govph_menu_color_setting');
    ?>
}

End for menu nav colors

This is for menu font colors in steady
and add this code if want to reflect in auxiliary


#aux-main li:not(.has-form) a:not(.button),
#aux-main li.active:not(.has-form) a:not(.button)


#main-nav li:not(.has-form) a:not(.button),
#main-nav li.active:not(.has-form) a:not(.button) {
    <?php govph_displayoptions('govph_menu_font_setting');
    ?>
}

This is for color of submenus in main nav
#main-nav li:not(.has-form) a:not(.button) {
    <?php govph_displayoptions('govph_menu_color_setting');
    ?>
}

End for menu font colors in steady
#main-nav li.current-menu-item:not(.has-form),
#aux-main li.current-menu-item:not(.has-form) {
    <?php govph_displayoptions('govph_menu_color_setting');
    ?>
}

Button menu color on steady
#magnifier-button,
#accessibility-button {
    <?php govph_displayoptions('govph_menu_font_accessibility_setting');
    ?>
}

Button menu color on hover
#magnifier-button:hover,
#accessibility-button:hover {
    <?php govph_displayoptions('govph_menu_font_hover_setting');
    ?>
}

This is menu color for hover
#main-nav ul li:hover:not(.has-form)>a,
#main-nav .dropdown li:not(.has-form) a:not(.button):hover,
#main-nav .dropdown li:not(.has-form):hover>a:not(.button),
#aux-main ul li:hover:not(.has-form)>a,
#aux-main .dropdown li:not(.has-form) a:not(.button):hover,
#aux-main .dropdown li:not(.has-form):hover>a:not(.button) {
    <?php govph_displayoptions('govph_menu_color_setting');
    ?><?php govph_displayoptions('govph_menu_font_hover_setting');
    ?>
}

End for menu color for hover
#main-nav li.current-menu-item:not(.has-form) a:not(.button),
#aux-main li.current-menu-item:not(.has-form) a:not(.button),
#offCanvasRight li.current-menu-item:not(.has-form)>a:not(.button) {
    <?php govph_displayoptions('govph_menu_color_setting');
    ?><?php govph_displayoptions('govph_menu_font_hover_setting');
    ?>
}

End for Custom menu color
End for Subject of Approval Approval */

        #panel-top {
            <?php govph_displayoptions('govph_custom_panel_top');
            ?>
        }

        #panel-bottom {
            <?php govph_displayoptions('govph_custom_panel_bottom');
            ?>
        }

        #sidebar-left .widget,
        #sidebar-right .widget,
        .callout.secondary {
            <?php govph_displayoptions('govph_widget_setting');
            ?>
        }

        .container-main .entry-title a {
            <?php govph_displayoptions('govph_headings_setting');
            ?>
        }

        .container-banner .entry-title {
            <?php govph_displayoptions('govph_inner_headings_setting');
            ?>
        }

        #footer {
            <?php govph_displayoptions('govph_custom_footer_background_color');
            ?>
        }
    </style>
</head>

<body class="{{ $bodyClass ?? '' }}">

    <div id="accessibility-shortcuts">
        <ul>
            <li><a href="#" class="skips toggle-statement" title="Toggle Accessibility Statement" accesskey="0"
                    data-toggle="a11y-modal">Toggle Accessibility Statement</a></li>
            <li><a href="{{ url('/') }}" accesskey="h">Home</a></li>
            <li><a href="{{ url('/contact') }}" accesskey="c">Contacts</a></li>
            <li><a href="{{ url('/feedback') }}" accesskey="k">Feedback</a></li>
            <li><a href="{{ url('/faq') }}" accesskey="q">FAQ</a></li>
            <li><a href="{{ url('/search') }}" accesskey="s">Search</a></li>
            <li><a href="#main-content" accesskey="R">Skip to Main Content</a></li>
            <li><a href="{{ url('/sitemap') }}" accesskey="M">Sitemap</a></li>
        </ul>
    </div>

    <!-- Accessibility Modal -->
    <div id="a11y-modal" class="reveal large" title="Accessibility Statement" data-reveal>
        <textarea rows="21" class="statement-textarea" readonly>
This website adopts the Web Content Accessibility Guidelines (WCAG 2.0) as the accessibility standard for all its related web development and services...
        </textarea>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            <!-- Off-canvas right menu -->
            <nav id="mySidenav" class="sidenav hide-for-large">
                <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
                <div style="padding:10px;">
                    {{-- @include('partials.search') <!-- Include your search form as a partial --> --}}
                </div>
                <ul style="list-style: none;">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <!-- Add more menu items as needed -->
                </ul>
            </nav>

            <!-- Off-canvas title bar for 'small' screen -->
            <div id="off-canvas-container" class="title-bar columns hide-for-large">
                <div class="title-bar-right">
                    <span class="title-bar-title">Menu</span>
                    <button style="font-size:30px;cursor:pointer" id="openNav" class="menu-icon"
                        type="button">&#9776;</button>
                </div>
            </div>

            <div id="off-canvas-content" class="off-canvas-content" data-off-canvas-content>
                <header id="masthead" class="site-header" role="banner">
                    <div class="container-masthead">
                        <h1 class="logo">
                            <a href="{{ url('/') }}" rel="home">{{ config('app.name', 'Laravel') }}</a>
                        </h1>
                    </div>

                    <div class="container-banner">
                        <div class="banner-content">
                            @yield('banner-content') <!-- Banner content can be injected from other views -->
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
</body>

</html>
