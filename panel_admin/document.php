<?php
require_once '../main-pages/conexion.php';

session_start();
error_reporting(0);
$var_session = $_SESSION['usuario'];
$var_rank = $_SESSION['tipo'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="../frontend/style2.css">
    <script src="sweetalert2@11.js"></script>
</head>

<body>
    <?php
    include_once "validacion_admin.php";
    ?>

    <header>
        <nav class="nav-header">
            <img src="../img/logotest.png" alt="">
            <h1>
                Hallucination Studios / Admin Panel
            </h1>
            <a href="main-pages/cambio_pass.php">Cambio contraseña</a>
            <a href="backend/cerrar_sesion.php">Cerrar sesion</a>
        </nav>
    </header>

    <hr class="divisor">
    <main>
        <section>
            <iframe
                src="https://docs.google.com/document/d/171OKLPLnZ5PftWva5NW00o0pMnzwtgqPX6OjWIoCFSw/pub?embedded=true"></iframe>
        </section>
    </main>

    <footer>
        <div class="footer-wrapper">
            <div class="footer-columns">
                <div class="footer-logo-column">
                    <a href="/" aria-label="Go to Supabase homepage" title="Go to Supabase Homepage">
                        <img src="../img/logotest.png" loading="lazy" alt="Supabase logo" class="footer-logo"
                            width="200">
                    </a>
                    <div class="social-wrapper">
                        <div class='social-links'>
                            <ul>
                                <li>
                                    <a href="#" title="Twitter">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-x" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="GitHub">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-github" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Discord">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-discord" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 12a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                            <path d="M14 12a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                            <path
                                                d="M15.5 17c0 1 1.5 3 2 3c1.5 0 2.833 -1.667 3.5 -3c.667 -1.667 .5 -5.833 -1.5 -11.5c-1.457 -1.015 -3 -1.34 -4.5 -1.5l-.972 1.923a11.913 11.913 0 0 0 -4.053 0l-.975 -1.923c-1.5 .16 -3.043 .485 -4.5 1.5c-2 5.667 -2.167 9.833 -1.5 11.5c.667 1.333 2 3 3.5 3c.5 0 2 -2 2 -3" />
                                            <path d="M7 16.5c3.5 1 6.5 1 10 0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Youtube">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-youtube" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                                            <path d="M10 9l5 3l-5 3z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="link-columns">
                    <div>
                        <section>
                            <h3>Product</h3>
                            <ul>
                                <li>
                                    <a href="#" title="Features">Database</a>
                                </li>
                                <li>
                                    <a href="#" title="Auth">Auth</a>
                                </li>
                                <li>
                                    <a href="#" title="Functions">Functions</a>
                                </li>
                                <li>
                                    <a href="#" title="Realtime">Realtime</a>
                                </li>
                                <li>
                                    <a href="#" title="Storage">Storage</a>
                                </li>
                                <li>
                                    <a href="#" title="Vector">Vector</a>
                                </li>
                                <li>
                                    <a href="#" title="Pricing">Pricing</a>
                                </li>
                            </ul>
                        </section>

                        <section>
                            <h3>Resources</h3>
                            <ul>
                                <li>
                                    <a href="#" title="Support">Support</a>
                                </li>
                                <li>
                                    <a href="#" title="Sitemap">System Status</a>
                                </li>
                                <li>
                                    <a href="#" title="Newsletter">Become a Partner</a>
                                </li>
                                <li>
                                    <a href="#" title="Help Centre">Integrations</a>
                                </li>
                                <li>
                                    <a href="#" title="Investor">Experts</a>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div>
                        <section>
                            <h3>Developers</h3>
                            <ul>
                                <li>
                                    <a href="#" title="Documentation">Documentation</a>
                                </li>
                                <li>
                                    <a href="#" title="Changelog">Changelog</a>
                                </li>
                                <li>
                                    <a href="#" title="Contributing">Contributing</a>
                                </li>
                                <li>
                                    <a href="#" title="OpenSource">Open Source</a>
                                </li>
                                <li>
                                    <a href="#" title="SupaSquad">SupaSquad</a>
                                </li>
                                <li>
                                    <a href="#" title="DevTo">DevTo</a>
                                </li>
                                <li>
                                    <a href="#" title="RSS">RSS</a>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3>Company</h3>
                            <ul>
                                <li>
                                    <a href="#" title="Terms and services">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Privacy Policy">
                                        Customer Stories
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Careers">
                                        Careers
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Company">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Terms Of Service">
                                        Terms of Service
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Privacy Policy">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- bottom part section -->
        <div class="footer-bottom">
            <div class="footer-bottom-wrapper">
                <small>© <span id="year"></span> ProyectLuzbel</small>
            </div>
        </div>
    </footer>
</body>

</html>