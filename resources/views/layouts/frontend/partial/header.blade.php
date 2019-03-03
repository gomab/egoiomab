<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 3/3/19
 * Time: 3:54 PM
 */
?>

<!-- Start Header Area -->
<header class="default-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                egoiomab
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav scrollable-menu">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#travel">Travel</a></li>
                    <li><a href="#fashion">fashion</a></li>
                    <li><a href="#team">team</a></li>
                    <!-- Dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Pages
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="single.html">Single</a>
                            <a class="dropdown-item" href="category.html">Category</a>
                            <a class="dropdown-item" href="search.html">Search</a>
                            <a class="dropdown-item" href="archive.html">Archive</a>
                            <a class="dropdown-item" href="generic.html">Generic</a>
                            <a class="dropdown-item" href="elements.html">Elements</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Header Area -->
