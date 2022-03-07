<div class="subnavtop">
    <div class="logo navbar-brand">
        <a href="index.php" class="brand logo-link">
            WebDev Kings
        </a>
    </div>
    <div class="navbar-collapse collapse" id="navcollapser">
        <ul class="nav-list navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item">
                <a href="#products" link-to="products"  class="nav-link">Products</a>
            </li>
            <li class="nav-item">
                <a href="#orders" link-to="orders" class="nav-link">Orders</a>
            </li>
            <li class="nav-item">
                <a href="#customers" link-to="customers" class="nav-link">Customers</a>
            </li>
            <li class="nav-item">
                <a href="#employees" link-to="employees" class="nav-link">Employees</a>
            </li>
        </ul>
    </div>
    <div class="user_area" id="user_area">
        <ul class="user-nav ms-auto py-4 py-lg-0">
            <li class="nav-item">
                <a href="#<?php echo "users"; ?>" link-to="user" class="nav-link"><i class="fas fa-user-circle" link-to="user"></i></a>
            </li>
            <li class="nav-item">
                <a href="#shoppingcard" link-to="shoppingcard" class="nav-link">
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