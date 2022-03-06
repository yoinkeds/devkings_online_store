<div class="subnavtop">
    <div class="logo navbar-brand">
        <a href="index.php" class="brand logo-link">
            <?php echo $site_name; ?>
        </a>
    </div>
    <div class="navbar-collapse collapse" id="navcollapser">
        <ul class="nav-list navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item">
                <a href="index.php" link-to="index"  class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="?page=about" link-to="about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="?page=team" link-to="team" class="nav-link">Team</a>
            </li>
            <li class="nav-item">
                <a href="?page=contacts" link-to="contacts" class="nav-link">Contacts</a>
            </li>
        </ul>
    </div>
    <div class="user_area" id="user_area">
        <ul class="user-nav ms-auto py-4 py-lg-0">
            <li class="nav-item">
                <a href="?page=customer" link-to="customer" class="nav-link"><i class="fas fa-user-circle" link-to="user"></i></a>
            </li>
            <li class="nav-item">
                <a href="?page=shoppingcard" link-to="shoppingcard" class="nav-link">
                <i class="fas fa-shopping-cart" link-to="shoppingcard"></i>
                </a>
            </li>
        </ul>
    </div>
    <button id="toggler" class="navbar-toggler navbar-toggler-right" 
    type="button" 
    data-toggle="collapse"  
    data-target="#navcollapser"  
    aria-controls="navcollapser" 
    aria-expanded="false" 
    aria-label="Toggle navigation"
    onclick="toggleNav(); return false; ">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
</div>