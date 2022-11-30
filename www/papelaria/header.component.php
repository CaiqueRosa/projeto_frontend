<?php
function createHeader(){
    return '
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top"  style="background-color: #58af9c;">
        
            <a class="navbar-brand" href="index.php">
                <img src="..\img\logo-papelaria-header.png" height="50" style="margin-left: 0px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>-->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0 submit-button" type="submit" onclick="showAlert()">Search</button>
                </form>
            </div>   
        </nav>   
          
    </header>';
}
?>

