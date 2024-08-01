<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
<body>

<nav style="background-color: #124574; color: white; padding: 20px; position: fixed; top: 0; left: 0; right: 0; z-index: 999; font-family: Arial, sans-serif;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <img src="images/spotify.png" alt=" " style="height: 40px; width: auto;">
            <a href="" class="logo-text" style="color: white; text-decoration: none; position: absolute; top: 30px; margin-left: 20px; font-weight: bold; font-size: 20px; font-family: Poppins, sans-serif;">Dashboard</a>

        </div>
        <div>
            <ul class="navbar-desktop" style="list-style-type: none; margin: 0; padding: 0; display: flex; font-size: 11px;">
                <li class="nav-item"><a href="" style="color: white; text-decoration: none;"><i class="fas fa-home"></i> Beranda</a></li>
                <li class="nav-item"><a href="" style="color: white; text-decoration: none;"><i class="fas fa-barcode"></i> About</a></li>
                <li class="nav-item"><a href="" style="color: white; text-decoration: none;"><i class="fas fa-clipboard-list"></i> Page3</a></li>
                <li class="nav-item"><a href="" style="color: white; text-decoration: none;"><i class="fas fa-clipboard"></i> Page4</a></li>
                <li class="navbar-mobile">
                    <div class="dropdown">
                        <button class="dropbtn" style="background-color: #124574; color: white; border: none; cursor: pointer;"><i class="fas fa-bars"></i></button>
                        <div class="dropdown-content" >
                            <a href="" style="color: white; text-decoration: none;">Beranda</a>
                            <a href="" style="color: white; text-decoration: none;">About</a>
                            <a href="" style="color: white; text-decoration: none;">Page3</a>
                            <a href="" style="color: white; text-decoration: none;">Page4</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .dropbtn {
        background-color: #124574;
        color: white;
        padding: 10px;
        font-size: 14px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover, .dropbtn:focus {
        background-color: #0d2e52;
    }


    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #124574;
        min-width: 160px;
        z-index: 1;
        left: -10px;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #0d2e52;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #0d2e52;
    }

    .navbar-mobile {
        display: none;
    }

    @media screen and (max-width: 980px) {
        .navbar-desktop {
            display: none;
        }

        @media screen and (min-width: 801px) {
    .navbar-desktop a {
        font-size: 30px; 
    }
}

        .navbar-mobile {
            display: block;
        }
        .navbar-mobile a {
        font-size: 11px;
             }

        .nav-item {
            display: none;
        }

        .navbar-mobile .dropdown {
            position: relative;
            display: inline-block;
        }

        .navbar-mobile .dropdown-content {
            position: absolute;
            background-color: #124574;
            min-width: 160px;
            z-index: 1;
        }

        .navbar-mobile .dropdown-content a {
            color: white;
            padding: 10px 8px;
            text-decoration: none;
            display: block;
        }

        .navbar-mobile .dropdown-content a:hover {
            background-color: #0d2e52;
        }
    }

    .nav-item:not(:last-child) {
        margin-right: 25px;
    }
</style>

</body>
</html>
