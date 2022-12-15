<style>
    /* Nav bar */
    
:root {
    --main-color: #54A232;
    --text-color: #9e9c9c;
}

.nav-logo img {
    height: 90px;
    margin-top: -10px;
    float: left;
}

.nav-content {
    align-items: center;
    padding-left: 150px;
    padding-top: 25px;
}

.nav-content ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.nav-content li a {
    float: left;
    text-align: center;
    margin-right: 15px;
    font-weight: 700;
    color: #b3b0b0;
    text-decoration: none;
}


/*  
    .nav-content li a {
        display: block;
        color: white;
        text-align: center;
        padding: 16px;
        text-decoration: none;
    } */

.nav-content li a:hover {
    color: var(--main-color);
}

.nav-icons {
    text-align: right;
    padding-top: 25px;
}

nav {
    background-color: none;
    align-items: center;
}
</style>
<header>
        <nav>
            <div class="container text-center">
                <div class="row">
                    <div class="col-4 nav-logo">
                        <img src="./Images/BOOMS.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-7 nav-content ">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Flowers</a></li>
                            <li><a href="#">Pre Order</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                    <div class="col nav-icons ">
                        <a href="#"><i class="fa-solid fa-user"" style="color: #54A232; "></i> </a>
                    </div>
                </div>
        </nav>
    </header>