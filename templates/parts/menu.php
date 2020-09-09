<section class="overlay-menu">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <ul>
                            <li>
                                <?php if($_SESSION["loggedIn"] == 0){?>
                                <a href="templates/parts/register.php">Register</a>
                                <?php
                                }?>
                            </li>
                            <li>
                                <a href="templates/parts/aboutme.php">Über mich</a>
                            </li>
                            <li>
                                <a href="templates/parts/map.php">Standorte</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="blog.html">Blog Entries</a>
                            </li>
                            <li>
                                <?php if($_SESSION["loggedIn"] == 1){?>
                                <a href="templates/parts/logout.php">Logout</a>
                                <?php
                                }?>
                            </li>
                        </ul>
                        <p>We create awesome templates for you.</p>
                    </div>
                </div>
            </div>
        </section>