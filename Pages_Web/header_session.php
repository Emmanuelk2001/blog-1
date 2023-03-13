<header>
        <nav>
            <h1><a href="index.php"><span>My</span><span>.</span>blog</h1>
            <div class="right">

                <ul id="new_menu">
                    <li><a href="index.php?action=session" class="link">Blogs</a></li>
                    <li><a href="#" class="link">Contacts</a></li>
                    <li><a href="#" class="link">About us</a></li>
                        <!--// -->
                    <?php if(isset($_SESSION['idUser'])):?>
                        <li>
                            <a href="#"> <img src="images/<?=$_SESSION['Icone']?>" class="user-profil" onclick="open_menu()"></a>
                            <div class="menu-user" id="menu-user">
                                <ul>
                                    <li><a href="index.php?action=dashbord"><i class="fa fa-user"></i>Dashbord</a> </li>
                                    <li><a href="index?action=logout"><i class="fa fa-right-from-bracket"></i>Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <h5><?=$_SESSION['Username']?></h5>
                        <!-- <li><a href="inscription.html" class="btn">Sign up</a></li>
                        <li><a href="connexion.html" class="btn">Sign in</a></li> -->
                        <li><i class="fa-solid fa-xmark" onclick="close_newMenu()"></i></li>
                    <?php else: ?>
                        <li><i class="fa-solid fa-xmark" onclick="close_newMenu()"></i></li>
                        <li><a href="index.php?action=inscription" class="link btn">Sign up</a></li>
                    <?php endif; ?>
                </ul>
                <i class="fa-solid fa-bars" onclick="open_newMenu()"></i>
            </div>
        </nav>
    </header>
    