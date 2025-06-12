<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .esgi-header {
            background-color: #1a1a2e;
            color: white;
            padding: 20px;
            position: relative;
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1001;
        }

        .esgi-logo {
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .menu-toggle {
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            width: 30px;
            height: 30px;
        }

        .hamburger-line {
            width: 25px;
            height: 3px;
            background-color: white;
            transition: all 0.3s ease;
        }

        .menu-toggle.active .hamburger-line:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .menu-toggle.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active .hamburger-line:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }

        .esgi-nav {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #1a1a2e;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            padding: 0 20px;
        }

        .esgi-nav.active {
            max-height: 400px;
            padding: 20px;
        }

        .nav-header {
            display: none;
        }

        .close-menu {
            display: none;
        }

        .esgi-nav ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .esgi-nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: 300;
            transition: color 0.3s ease;
            display: block;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .esgi-nav ul li:last-child a {
            border-bottom: none;
        }

        .esgi-nav ul li a:hover {
            color: #4facfe;
        }

        .esgi-nav ul li a.current {
            text-decoration: underline;
        }

        @media (min-width: 768px) {
            .menu-toggle {
                display: none;
            }

            .esgi-nav {
                position: static;
                max-height: none;
                overflow: visible;
                height: auto;
                background: transparent;
                flex-direction: row;
                padding: 0;
                width: auto;
            }

            .esgi-nav ul {
                flex-direction: row;
                gap: 40px;
            }

            .esgi-nav ul li a {
                font-size: 18px;
                border-bottom: none;
                padding: 10px 0;
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>

<header class="esgi-header">
    <div class="esgi-logo">
        <a href="<?php echo home_url(); ?>" style="color: white; text-decoration: none;">
            ESGI.
        </a>
    </div>

    <button class="menu-toggle" id="menuToggle">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
    </button>

    <nav class="esgi-nav" id="mobileNav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'esgi-menu',
            'container' => false,
            'fallback_cb' => 'esgi_fallback_menu'
        ));
        ?>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const mobileNav = document.getElementById('mobileNav');
    
    menuToggle.addEventListener('click', function() {
        menuToggle.classList.toggle('active');
        mobileNav.classList.toggle('active');
    });

    // Fermer le menu si on clique sur un lien
    const navLinks = mobileNav.querySelectorAll('a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            menuToggle.classList.remove('active');
            mobileNav.classList.remove('active');
        });
    });

    // Fermer le menu si on clique ailleurs
    document.addEventListener('click', function(event) {
        if (!menuToggle.contains(event.target) && !mobileNav.contains(event.target)) {
            menuToggle.classList.remove('active');
            mobileNav.classList.remove('active');
        }
    });
});
</script>

<?php
// Fonction de fallback pour le menu si aucun menu n'est défini
function esgi_fallback_menu() {
    echo '<ul class="esgi-menu">';
    echo '<li><a href="' . home_url() . '">Home</a></li>';
    echo '<li><a href="' . home_url() . '/about-us">About Us</a></li>';
    echo '<li><a href="' . home_url() . '/services">Services</a></li>';
    echo '<li><a href="' . home_url() . '/partners">Partners</a></li>';
    echo '<li><a href="' . home_url() . '/blog">Blog</a></li>';
    echo '<li><a href="' . home_url() . '/contacts">Contacts</a></li>';
    echo '</ul>';
}
?>