
<!DOCTYPE html>
<html lang="en" data-footer="true" data-scrollspy="true">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Admin Template | Tags Control</title>
    <meta name="description" content="Lightweight, efficient Tags input component in Vanilla JS." />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="css/vendor/tagify.css" />
    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="css/main.css" />
    <script src="js/base/loader.js"></script>
</head>

<body>
<div id="root">
    <div id="nav" class="nav-container d-flex">
        <div class="nav-content d-flex">
            <!-- Logo Start -->
            <div class="logo position-relative">
                <a href="Dashboards.Default.html">
                    <!-- Logo can be added directly -->
                    <!-- <img src="img/logo/logo-white.svg" alt="logo" /> -->

                    <!-- Or added via css to provide different ones for different color themes -->
                    <div class="img"></div>
                </a>
            </div>
            <!-- Logo End -->

            <!-- Language Switch Start -->
            <div class="language-switch-container">
                <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">DE</a>
                    <a href="#" class="dropdown-item active">EN</a>
                    <a href="#" class="dropdown-item">ES</a>
                </div>
            </div>
            <!-- Language Switch End -->

            <!-- User Menu Start -->
            <div class="user-container d-flex">
                <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="profile" alt="profile" src="img/profile/profile-9.jpg" />
                    <div class="name">Lisa Jackson</div>
                </a>
                <div class="dropdown-menu dropdown-menu-end user-menu wide">
                    <div class="row mb-3 ms-0 me-0">
                        <div class="col-12 ps-1 mb-2">
                            <div class="text-extra-small text-primary">ACCOUNT</div>
                        </div>
                        <div class="col-6 ps-1 pe-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">User Info</a>
                                </li>
                                <li>
                                    <a href="#">Preferences</a>
                                </li>
                                <li>
                                    <a href="#">Calendar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 pe-1 ps-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Security</a>
                                </li>
                                <li>
                                    <a href="#">Billing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-1 ms-0 me-0">
                        <div class="col-12 p-1 mb-2 pt-2">
                            <div class="text-extra-small text-primary">APPLICATION</div>
                        </div>
                        <div class="col-6 ps-1 pe-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Themes</a>
                                </li>
                                <li>
                                    <a href="#">Language</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 pe-1 ps-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Devices</a>
                                </li>
                                <li>
                                    <a href="#">Storage</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-1 ms-0 me-0">
                        <div class="col-12 p-1 mb-3 pt-3">
                            <div class="separator-light"></div>
                        </div>
                        <div class="col-6 ps-1 pe-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Help</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="file-text" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Docs</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 pe-1 ps-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Menu End -->

            <!-- Icons Menu Start -->
            <ul class="list-unstyled list-inline text-center menu-icons">
                <li class="list-inline-item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                        <i data-cs-icon="search" data-cs-size="18"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" id="pinButton" class="pin-button">
                        <i data-cs-icon="lock-on" class="unpin" data-cs-size="18"></i>
                        <i data-cs-icon="lock-off" class="pin" data-cs-size="18"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" id="colorButton">
                        <i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
                        <i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                        <div class="position-relative d-inline-flex">
                            <i data-cs-icon="bell" data-cs-size="18"></i>
                            <span class="position-absolute notification-dot rounded-xl"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                        <div class="scroll">
                            <ul class="list-unstyled border-last-none">
                                <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                    <img src="img/profile/profile-1.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                    <div class="align-self-center">
                                        <a href="#">Joisse Kaycee just sent a new comment!</a>
                                    </div>
                                </li>
                                <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                    <img src="img/profile/profile-2.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                    <div class="align-self-center">
                                        <a href="#">New order received! It is total $147,20.</a>
                                    </div>
                                </li>
                                <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                    <img src="img/profile/profile-3.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                    <div class="align-self-center">
                                        <a href="#">3 items just added to wish list by a user!</a>
                                    </div>
                                </li>
                                <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                                    <img src="img/profile/profile-6.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                    <div class="align-self-center">
                                        <a href="#">Kirby Peters just sent a new message!</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Icons Menu End -->

            <!-- Menu Start -->
            <div class="menu-container flex-grow-1">
                <ul id="menu" class="menu">
                    <li>
                        <a href="#dashboards" data-href="Dashboards.html">
                            <i data-cs-icon="home" class="icon" data-cs-size="18"></i>
                            <span class="label">Dashboards</span>
                        </a>
                        <ul id="dashboards">
                            <li>
                                <a href="Dashboards.Default.html">
                                    <span class="label">Default</span>
                                </a>
                            </li>
                            <li>
                                <a href="Dashboards.Visual.html">
                                    <span class="label">Visual</span>
                                </a>
                            </li>
                            <li>
                                <a href="Dashboards.Analytic.html">
                                    <span class="label">Analytic</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#apps" data-href="Apps.html">
                            <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                            <span class="label">Apps</span>
                        </a>
                        <ul id="apps">
                            <li>
                                <a href="Apps.Calendar.html">
                                    <span class="label">Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="Apps.Chat.html">
                                    <span class="label">Chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="Apps.Contacts.html">
                                    <span class="label">Contacts</span>
                                </a>
                            </li>
                            <li>
                                <a href="Apps.Mailbox.html">
                                    <span class="label">Mailbox</span>
                                </a>
                            </li>
                            <li>
                                <a href="Apps.Tasks.html">
                                    <span class="label">Tasks</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pages" data-href="Pages.html">
                            <i data-cs-icon="notebook-1" class="icon" data-cs-size="18"></i>
                            <span class="label">Pages</span>
                        </a>
                        <ul id="pages">
                            <li>
                                <a href="#authentication" data-href="Pages.Authentication.html">
                                    <span class="label">Authentication</span>
                                </a>
                                <ul id="authentication">
                                    <li>
                                        <a href="Pages.Authentication.Login.html">
                                            <span class="label">Login</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Authentication.Register.html">
                                            <span class="label">Register</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Authentication.ForgotPassword.html">
                                            <span class="label">Forgot Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Authentication.ResetPassword.html">
                                            <span class="label">Reset Password</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#blog" data-href="Pages.Blog.html">
                                    <span class="label">Blog</span>
                                </a>
                                <ul id="blog">
                                    <li>
                                        <a href="Pages.Blog.Home.html">
                                            <span class="label">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Blog.Grid.html">
                                            <span class="label">Grid</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Blog.List.html">
                                            <span class="label">List</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Blog.Detail.html">
                                            <span class="label">Detail</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#miscellaneous" data-href="Pages.Miscellaneous.html">
                                    <span class="label">Miscellaneous</span>
                                </a>
                                <ul id="miscellaneous">
                                    <li>
                                        <a href="Pages.Miscellaneous.Faq.html">
                                            <span class="label">Faq</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Miscellaneous.KnowledgeBase.html">
                                            <span class="label">Knowledge Base</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Miscellaneous.Error.html">
                                            <span class="label">Error</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Miscellaneous.ComingSoon.html">
                                            <span class="label">Coming Soon</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Miscellaneous.Pricing.html">
                                            <span class="label">Pricing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Miscellaneous.Search.html">
                                            <span class="label">Search</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Miscellaneous.Mailing.html">
                                            <span class="label">Mailing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Miscellaneous.Empty.html">
                                            <span class="label">Empty</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#portfolio" data-href="Pages.Portfolio.html">
                                    <span class="label">Portfolio</span>
                                </a>
                                <ul id="portfolio">
                                    <li>
                                        <a href="Pages.Portfolio.Home.html">
                                            <span class="label">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Portfolio.Detail.html">
                                            <span class="label">Detail</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#profile" data-href="Pages.Profile.html">
                                    <span class="label">Profile</span>
                                </a>
                                <ul id="profile">
                                    <li>
                                        <a href="Pages.Profile.Standard.html">
                                            <span class="label">Standard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pages.Profile.Settings.html">
                                            <span class="label">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#blocks" data-href="Blocks.html">
                            <i data-cs-icon="grid-5" class="icon" data-cs-size="18"></i>
                            <span class="label">Blocks</span>
                        </a>
                        <ul id="blocks">
                            <li>
                                <a href="Blocks.Images.html">
                                    <span class="label">Images</span>
                                </a>
                            </li>
                            <li>
                                <a href="Blocks.List.html">
                                    <span class="label">List</span>
                                </a>
                            </li>
                            <li>
                                <a href="Blocks.TabularData.html">
                                    <span class="label">Tabular Data</span>
                                </a>
                            </li>
                            <li>
                                <a href="Blocks.Thumbnails.html">
                                    <span class="label">Thumbnails</span>
                                </a>
                            </li>
                            <li>
                                <a href="Blocks.Cta.html">
                                    <span class="label">Cta</span>
                                </a>
                            </li>
                            <li>
                                <a href="Blocks.Gallery.html">
                                    <span class="label">Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="Blocks.Stats.html">
                                    <span class="label">Stats</span>
                                </a>
                            </li>
                            <li>
                                <a href="Blocks.Steps.html">
                                    <span class="label">Steps</span>
                                </a>
                            </li>
                            <li>
                                <a href="Blocks.Details.html">
                                    <span class="label">Details</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mega">
                        <a href="#interface" data-href="Interface.html">
                            <i data-cs-icon="pocket-knife" class="icon" data-cs-size="18"></i>
                            <span class="label">Interface</span>
                        </a>
                        <ul id="interface">
                            <li>
                                <a href="#interfaceComponents" data-href="Interface.Components.html">
                                    <span class="label">Components</span>
                                </a>
                                <ul id="interfaceComponents">
                                    <li>
                                        <a href="Interface.Components.Accordion.html">
                                            <span class="label">Accordion</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Alerts.html">
                                            <span class="label">Alerts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Badge.html">
                                            <span class="label">Badge</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Breadcrumb.html">
                                            <span class="label">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Buttons.html">
                                            <span class="label">Buttons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.ButtonGroup.html">
                                            <span class="label">Button Group</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Card.html">
                                            <span class="label">Card</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Close.html">
                                            <span class="label">Close Button</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Collapse.html">
                                            <span class="label">Collapse</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Dropdowns.html">
                                            <span class="label">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.ListGroup.html">
                                            <span class="label">List Group</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Modal.html">
                                            <span class="label">Modal</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Navs.html">
                                            <span class="label">Navs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Offcanvas.html">
                                            <span class="label">Offcanvas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Pagination.html">
                                            <span class="label">Pagination</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Popovers.html">
                                            <span class="label">Popovers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Progress.html">
                                            <span class="label">Progress</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Spinners.html">
                                            <span class="label">Spinners</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Toasts.html">
                                            <span class="label">Toasts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Components.Tooltips.html">
                                            <span class="label">Tooltips</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#interfaceForms" data-href="Interface.Forms.html">
                                    <span class="label">Forms</span>
                                </a>
                                <ul id="interfaceForms">
                                    <li>
                                        <a href="Interface.Forms.Layouts.html">
                                            <span class="label">Layouts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Forms.Validation.html">
                                            <span class="label">Validation</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Forms.Wizard.html">
                                            <span class="label">Wizard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Forms.InputGroup.html">
                                            <span class="label">Input Group</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Forms.InputMask.html">
                                            <span class="label">Input Mask</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Forms.GenericForms.html">
                                            <span class="label">Generic Forms</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#formControls" data-href="Interface.Forms.Controls.html">
                                            <span class="label">Controls</span>
                                        </a>
                                        <ul id="formControls">
                                            <li>
                                                <a href="Interface.Forms.Controls.Autocomplete.html">
                                                    <span class="label">Autocomplete</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.CheckboxRadio.html">
                                                    <span class="label">Checkbox-Radio</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.DatePicker.html">
                                                    <span class="label">Date Picker</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.Dropzone.html">
                                                    <span class="label">Dropzone</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.Editor.html">
                                                    <span class="label">Editor</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.InputSpinner.html">
                                                    <span class="label">Input Spinner</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.Rating.html">
                                                    <span class="label">Rating</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.Select2.html">
                                                    <span class="label">Select2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.Slider.html">
                                                    <span class="label">Slider</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.Tags.html">
                                                    <span class="label">Tags</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Forms.Controls.TimePicker.html">
                                                    <span class="label">Time Picker</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#interfacePlugins" data-href="Interface.Plugins.html">
                                    <span class="label">Plugins</span>
                                </a>
                                <ul id="interfacePlugins">
                                    <li>
                                        <a href="Interface.Plugins.Carousel.html">
                                            <span class="label">Carousel</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Charts.html">
                                            <span class="label">Charts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Clamp.html">
                                            <span class="label">Clamp</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.ContextMenu.html">
                                            <span class="label">Context Menu</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#pluginsDatatables" data-href="Interface.Plugins.Datatables.html">
                                            <span class="label">Datatables</span>
                                        </a>
                                        <ul id="pluginsDatatables">
                                            <li>
                                                <a href="Interface.Plugins.Datatables.EditableRows.html">
                                                    <span class="label">Editable Rows</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Plugins.Datatables.EditableBoxed.html">
                                                    <span class="label">Editable Boxed</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Plugins.Datatables.RowsAjax.html">
                                                    <span class="label">Ajax Data</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Plugins.Datatables.RowsServerSide.html">
                                                    <span class="label">Server Side</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Plugins.Datatables.BoxedVariations.html">
                                                    <span class="label">Boxed Variations</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Lightbox.html">
                                            <span class="label">Lightbox</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.List.html">
                                            <span class="label">List</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Maps.html">
                                            <span class="label">Maps</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Notify.html">
                                            <span class="label">Notify</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Player.html">
                                            <span class="label">Players</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Progress.html">
                                            <span class="label">Progress</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Scrollbar.html">
                                            <span class="label">Scrollbar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Shortcuts.html">
                                            <span class="label">Shortcuts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Plugins.Sortable.html">
                                            <span class="label">Sortable</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#interfaceContent" data-href="Interface.Content.html">
                                    <span class="label">Content</span>
                                </a>
                                <ul id="interfaceContent">
                                    <li>
                                        <a href="#icons" data-href="Interface.Content.Icons.html">
                                            <span class="label">Icons</span>
                                        </a>
                                        <ul id="icons">
                                            <li>
                                                <a href="Interface.Content.Icons.CSLineIcons.html">
                                                    <span class="label">CS Line Icons</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Content.Icons.CSLineInterfaceIcons.html">
                                                    <span class="label">CS Interface Icons</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Content.Icons.BootstrapIcons.html">
                                                    <span class="label">Bootstrap Icons</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Interface.Content.Images.html">
                                            <span class="label">Images</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Content.Tables.html">
                                            <span class="label">Tables</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Interface.Content.Typography.html">
                                            <span class="label">Typography</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#menuVarieties" data-href="Interface.Content.Menu.html">
                                            <span class="label">Menu</span>
                                        </a>
                                        <ul id="menuVarieties">
                                            <li>
                                                <a href="Interface.Content.Menu.HorizontalStandard.html">
                                                    <span class="label">Horizontal</span>
                                                </a>
                                            </li>
                                            <li></li>
                                            <li>
                                                <a href="Interface.Content.Menu.VerticalStandard.html">
                                                    <span class="label">Vertical</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Content.Menu.VerticalSemiHidden.html">
                                                    <span class="label">Vertical Hidden</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Content.Menu.VerticalNoSemiHidden.html">
                                                    <span class="label">Vertical No Hidden</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Content.Menu.MobileOnly.html">
                                                    <span class="label">Mobile Only</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Interface.Content.Menu.Sidebar.html">
                                                    <span class="label">Sidebar</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Menu End -->

            <!-- Mobile Buttons Start -->
            <div class="mobile-buttons-container">
                <!-- Scrollspy Mobile Button Start -->
                <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                    <i data-cs-icon="menu-dropdown"></i>
                </a>
                <!-- Scrollspy Mobile Button End -->

                <!-- Scrollspy Mobile Dropdown Start -->
                <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                <!-- Scrollspy Mobile Dropdown End -->

                <!-- Menu Button Start -->
                <a href="#" id="mobileMenuButton" class="menu-button">
                    <i data-cs-icon="menu"></i>
                </a>
                <!-- Menu Button End -->
            </div>
            <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
    </div>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Title Start -->
                    <section class="scroll-section" id="title">
                        <div class="page-title-container">
                            <h1 class="mb-0 pb-0 display-4">Tags</h1>
                            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                                <ul class="breadcrumb pt-0">
                                    <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="Interface.html">Interface</a></li>
                                    <li class="breadcrumb-item"><a href="Interface.Forms.html">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="Interface.Forms.Controls.html">Controls</a></li>
                                </ul>
                            </nav>
                        </div>
                    </section>
                    <!-- Title End -->

                    <!-- Content Start -->
                    <div>
                        <div class="card mb-5">
                            <div class="card-body">
                                <p class="mb-0">Lightweight, efficient Tags input component in Vanilla JS.</p>
                            </div>
                        </div>

                        <!-- Basic Start -->
                        <section class="scroll-section" id="basic">
                            <h2 class="small-title">Basic</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-xl-4">
                                            <label class="form-label">Add Tags</label>
                                            <input
                                                value="Lefse, Fougasse"
                                                id="tagsBasic"
                                                data-whitelist="Lefse, Fougasse, Dorayaki, Barmbrack, Brioche, Arepa, Cozonac, Saffron Bun, Eggette, Himbasha, Flatbread"
                                                />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Basic End -->

                        <!-- Advanced Start -->
                        <section class="scroll-section" id="advanced">
                            <h2 class="small-title">Advanced</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-xl-4">
                                            <div class="mb-3">
                                                <label class="form-label">Breads</label>
                                                <input id="tagsAdvanced" placeholder="Search for Breads" value="Fougasse, Naan" data-blacklist="Rieska,Roti" />
                                            </div>
                                            <button class="btn btn-primary" id="removeAllTags" type="button">Remove All!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Advanced End -->

                        <!-- Text Area Start -->
                        <section class="scroll-section" id="textArea">
                            <h2 class="small-title">Text Area</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-xl-4">
                                            <label class="form-label">Breads</label>
                                            <textarea id="tagsTextArea" placeholder="Add Bread"> [{"value":"Dorayaki"}, {"value":"Panbrioche"}]</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Text Area Start -->

                        <!-- Custom Look Start -->
                        <section class="scroll-section" id="customLook">
                            <h2 class="small-title">Custom Look</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <label class="d-block form-label">Add Emails</label>
                                    <input id="tagsCustomLook" class="custom-look" placeholder="Search for Breads" value="test@test.com" data-blacklist="null@null.com" />
                                    <button class="btn btn-icon btn-icon-only btn-outline-primary mb-1" type="button">
                                        <i data-cs-icon="plus"></i>
                                    </button>
                                </div>
                            </div>
                        </section>
                        <!-- Custom Look End -->

                        <!-- Outside Start -->
                        <section class="scroll-section" id="outside">
                            <h2 class="small-title">Outside</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <label class="d-block form-label">Breads</label>
                                    <input id="tagsOutside" class="tagify--outside" value="Dorayaki, Roti, Panbrioche" placeholder="Write Tags" />
                                </div>
                            </div>
                        </section>
                        <!-- Outside End -->

                        <!-- User List Start -->
                        <section class="scroll-section" id="userList">
                            <h2 class="small-title">User List</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <label class="d-block form-label">Users</label>
                                    <input id="usersListTags" class="users-list-container" />
                                </div>
                            </div>
                        </section>
                        <!-- User List End -->

                        <!-- Tags with Props Start -->
                        <section class="scroll-section" id="withProps">
                            <h2 class="small-title">Tags with Props</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <label class="d-block form-label">Users</label>
                                    <input id="tagsWithProps" class="countries" placeholder="Add a Country" />
                                </div>
                            </div>
                        </section>
                        <!-- Tags with Props End -->

                        <!-- Readonly Start -->
                        <section class="scroll-section" id="readonly">
                            <h2 class="small-title">Readonly</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <label class="d-block form-label">Tags</label>
                                    <input id="tagsReadonly" readonly value="tag1, tag 2, another tag" />
                                </div>
                            </div>
                        </section>
                        <!-- Readonly End -->

                        <!-- Select Mode Start -->
                        <section class="scroll-section" id="selectMode">
                            <h2 class="small-title">Select Mode</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <label class="d-block form-label">Single Select</label>
                                    <input id="tagsSelectMode" class="selectMode" placeholder="Please select" />
                                </div>
                            </div>
                        </section>
                        <!-- Select Mode End -->

                        <!-- Top Label Start -->
                        <section class="scroll-section" id="topLabel">
                            <h2 class="small-title">Top Label</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-xl-4">
                                            <label class="top-label w-100">
                                                <input id="tagsTopLabel" />
                                                <span>BREADS</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Top Label End -->

                        <!-- Filled Start -->
                        <section class="scroll-section" id="filled">
                            <h2 class="small-title">Filled</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-xl-4">
                                            <div class="filled w-100">
                                                <i data-cs-icon="loaf"></i>
                                                <input id="tagsFilled" placeholder="Tags" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Filled End -->

                        <!-- Floating Label Start -->
                        <section class="scroll-section" id="floatingLabel">
                            <h2 class="small-title">Floating Label</h2>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-xl-4">
                                            <div class="form-floating">
                                                <input id="tagsFloatingLabel" placeholder="" />
                                                <label>Tags</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Floating Label End -->
                    </div>
                    <!-- Content End -->
                </div>

                <!-- Scrollspy Start -->
                <div class="col-md-auto d-none d-lg-block" id="scrollSpyMenu">
                    <ul class="nav flex-column">
                        <li>
                            <a class="nav-link" href="#title">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Title</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#basic">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Basic</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#advanced">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Advanced</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#textArea">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Text Area</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#customLook">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Custom Look</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#outside">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Outside</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#userList">
                                <i data-cs-icon="chevron-right"></i>
                                <span>User List</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#withProps">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Tags with Props</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#readonly">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Readonly</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#selectMode">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Select Mode</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#topLabel">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Top Label</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#filled">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Filled</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#floatingLabel">
                                <i data-cs-icon="chevron-right"></i>
                                <span>Floating Label</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Scrollspy End -->
            </div>
        </div>
    </main>

    <!-- Layout Footer Start -->
    <footer>
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                            <li class="breadcrumb-item mb-0 text-medium">
                                <a href="https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0 text-medium">
                                <a href="https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0 text-medium">
                                <a href="https://acorn-html-docs.coloredstrategies.com/" target="_blank" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Layout Footer End -->
</div>

<!-- Theme Settings Modal Start -->
<div
    class="modal fade modal-right scroll-out-negative"
    id="settings"
    data-bs-backdrop="true"
    tabindex="-1"
    role="dialog"
    aria-labelledby="settings"
    aria-hidden="true"
    >
    <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Theme Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="scroll-track-visible">
                    <div class="mb-5" id="color">
                        <label class="mb-3 d-inline-block form-label">Color</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="blue-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT BLUE</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="blue-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK BLUE</span>
                                </div>
                            </a>
                        </div>

                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="red-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT RED</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="red-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK RED</span>
                                </div>
                            </a>
                        </div>

                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="green-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT GREEN</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="green-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK GREEN</span>
                                </div>
                            </a>
                        </div>

                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="purple-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="purple-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK PURPLE</span>
                                </div>
                            </a>
                        </div>

                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="pink-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT PINK</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="pink-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK PINK</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5" id="navcolor">
                        <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="default" data-parent="navcolor">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DEFAULT</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="light" data-parent="navcolor">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-secondary figure-light top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="dark" data-parent="navcolor">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-muted figure-dark top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5" id="placement">
                        <label class="mb-3 d-inline-block form-label">Menu Placement</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="horizontal" data-parent="placement">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">HORIZONTAL</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="vertical" data-parent="placement">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary left"></div>
                                    <div class="figure figure-secondary right"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">VERTICAL</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5" id="behaviour">
                        <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary left large"></div>
                                    <div class="figure figure-secondary right small"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">PINNED</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary left"></div>
                                    <div class="figure figure-secondary right"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">UNPINNED</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5" id="layout">
                        <label class="mb-3 d-inline-block form-label">Layout</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">FLUID</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom small"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">BOXED</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5" id="radius">
                        <label class="mb-3 d-inline-block form-label">Radius</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
                                <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">ROUNDED</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
                                <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">STANDARD</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
                                <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">FLAT</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Theme Settings Modal End -->

<!-- Niches Modal Start -->
<div
    class="modal fade modal-right scroll-out-negative"
    id="niches"
    data-bs-backdrop="true"
    tabindex="-1"
    role="dialog"
    aria-labelledby="niches"
    aria-hidden="true"
    >
    <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Niches</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="scroll-track-visible">
                    <div class="mb-5">
                        <label class="mb-2 d-inline-block form-label">Classic Dashboard</label>
                        <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                <img
                                    src="https://acorn.coloredstrategies.com/img/page/classic-dashboard.jpg"
                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                    alt="card image"
                                    />
                                <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                    <a
                                        target="_blank"
                                        href="https://acorn-html-classic-dashboard.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Html
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-laravel-classic-dashboard.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Laravel
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-dotnet-classic-dashboard.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        .Net5
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="mb-2 d-inline-block form-label">Ecommerce Platform</label>
                        <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                <img
                                    src="https://acorn.coloredstrategies.com/img/page/ecommerce-platform.jpg"
                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                    alt="card image"
                                    />
                                <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                    <a
                                        target="_blank"
                                        href="https://acorn-html-ecommerce-platform.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Html
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-laravel-ecommerce-platform.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Laravel
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-dotnet-ecommerce-platform.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        .Net5
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="mb-2 d-inline-block form-label">Elearning Portal</label>
                        <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                <img
                                    src="https://acorn.coloredstrategies.com/img/page/elearning-portal.jpg"
                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                    alt="card image"
                                    />
                                <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                    <a
                                        target="_blank"
                                        href="https://acorn-html-elearning-portal.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Html
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-laravel-elearning-portal.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Laravel
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-dotnet-elearning-portal.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        .Net5
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="mb-2 d-inline-block form-label">Service Provider</label>
                        <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                <img
                                    src="https://acorn.coloredstrategies.com/img/page/service-provider.jpg"
                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                    alt="card image"
                                    />
                                <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                    <a
                                        target="_blank"
                                        href="https://acorn-html-service-provider.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Html
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-laravel-service-provider.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Laravel
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-dotnet-service-provider.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        .Net5
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="mb-2 d-inline-block form-label">Starter Project</label>
                        <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                <img
                                    src="https://acorn.coloredstrategies.com/img/page/starter-project.jpg"
                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                    alt="card image"
                                    />
                                <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                    <a
                                        target="_blank"
                                        href="https://acorn-html-starter-project.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Html
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-laravel-starter-project.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        Laravel
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://acorn-dotnet-starter-project.coloredstrategies.com/"
                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                                        >
                                        .Net5
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Niches Modal End -->

<!-- Theme Settings & Niches Buttons Start -->
<div class="settings-buttons-container">
    <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Settings">
          <i data-cs-icon="paint-roller" class="position-relative"></i>
        </span>
    </button>
    <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#niches" id="nichesButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Niches">
          <i data-cs-icon="toy" class="position-relative"></i>
        </span>
    </button>
    <a href="https://1.envato.market/BX5oGy" target="_blank" class="btn settings-button btn-primary p-0" id="purchaseButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Purchase">
          <i data-cs-icon="cart" class="position-relative"></i>
        </span>
    </a>
</div>
<!-- Theme Settings & Niches Buttons End -->

<!-- Search Modal Start -->
<div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ps-5 pe-5 pb-0 border-0">
                <input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off" />
            </div>
            <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-cs-icon="arrow-bottom" data-cs-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Navigate</span>
            </span>
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-cs-icon="arrow-bottom-left" data-cs-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Select</span>
            </span>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- Vendor Scripts Start -->
<script src="js/vendor/jquery-3.5.1.min.js"></script>
<script src="js/vendor/bootstrap.bundle.min.js"></script>
<script src="js/vendor/OverlayScrollbars.min.js"></script>
<script src="js/vendor/autoComplete.min.js"></script>
<script src="js/vendor/clamp.min.js"></script>
<script src="js/cs/scrollspy.js"></script>
<script src="js/vendor/tagify.min.js"></script>
<!-- Vendor Scripts End -->

<!-- Template Base Scripts Start -->
<script src="font/CS-Line/csicons.min.js"></script>
<script src="js/base/helpers.js"></script>
<script src="js/base/globals.js"></script>
<script src="js/base/nav.js"></script>
<script src="js/base/search.js"></script>
<script src="js/base/settings.js"></script>
<script src="js/base/init.js"></script>
<!-- Template Base Scripts End -->
<!-- Page Specific Scripts Start -->
<script src="js/forms/controls.tag.js"></script>
<script src="js/common.js"></script>
<script src="js/scripts.js"></script>
<!-- Page Specific Scripts End -->
</body>
</html>
