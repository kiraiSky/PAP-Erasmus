<?php
include_once('functions/verificarTipoUtilizador.php');

echo  ('
<div id="top-bar" class="transparent-topbar">
  <div class="container clearfix">

    <div class="row justify-content-between">
      <div class="col-12 col-md-auto">
      </div>

      <div class="col-12 col-md-auto">

        <!-- Top Social
        ============================================= -->
        <ul id="top-social">
          <li><a href="https://facebook.com" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
          <li><a href="https://instagram.com" class="si-instagram"><span class="ts-icon"><i class="icon-instagram"></i></span><span class="ts-text">Instagram</span></a></li>
          <li><a href="https://twitter.com" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
          <li><a href="https://youtube.com" class="si-youtube"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
          <!--<li><a href="phone.php" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">Phone</span></a></li>-->
          <li><a href="mail.php" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">Mail</span></a></li>
          <li><a href="https://twinspace.etwinning.net/123487/home" class="si-facebook"><span class="ts-icon"><i class="icon-school"></i></span><span class="ts-text">eTwinning</span></a></li>
        </ul><!-- #top-social end -->

      </div>
    </div>

  </div>
</div><!-- #top-bar end -->

<!-- Header
============================================= -->
<header id="header" class="transparent-header floating-header header-size-md">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row">

  <!-- Logo
  ============================================= -->
  <div id="logo">
    <a href="" class="standard-logo" data-dark-logo="images/erasmus.png"><img src="images/erasmus.png" alt="Logo"></a>
  </div><!-- #logo end -->

  <div class="header-misc"></div>

  <div id="primary-menu-trigger">
    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
  </div>

        <!-- Primary Navigation
        ============================================= -->
        <nav class="primary-menu style-3 menu-spacing-margin">
          
          <ul class="menu-container">
            <li class="menu-item">
              <a class="menu-link" href="index.php"><div>Home</div><span>Latest News</span><span>Next Events</span></a>
              <ul class="sub-menu-container">
                <li class="menu-item">
                  <a class="menu-link" href="latestnews.php"><div>Latest News</div></a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="nextevents.php"><div>Next Events</div></a>
                </li>
              </ul>
        
            <li class="menu-item">
              <a class="menu-link" href="#"><div>Projects</div><span>Description</span><span>Partners</span></a>
              <ul class="sub-menu-container">
                <li class="menu-item">
                  <a class="menu-link" href="#"><div>Description</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="slider-revolution.html"><div>Publications</div></a>
                  </ul>
                <li class="menu-item">
                  <a class="menu-link" href="#"><div>Partners</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link"><div>Publications</div></a>
                        <ul class="sub-menu-container">
                          <li class="menu-item">
                            <a class="menu-link" href="SpainPublications.html"><div>European International School of Barcelona</div></a>
                          </li>
                          <li class="menu-item">
                            <a class="menu-link" href="PortugalPublications.html"><div>Escola Secundária de Loulé</div></a>
                          </li>
                          <li class="menu-item">
                            <a class="menu-link" href="TurkeyPublications.html"><div>Ankara Atatürk Lisesi</div></a>
                          </li>
                          <li class="menu-item">
                            <a class="menu-link" href="FinlandPublications.html"><div>Ahmon Koulu</div></a>
                          </li>
                        </ul>
                    </li>
                  </ul>
                </ul>
                        
                <li class="menu-item">
                  <a class="menu-link" href="#"><div>News</div><span>Project News</span><span>Media Publications</span></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="#"><div>Project News</div></a>
                      <ul class="sub-menu-container">
                        <li class="menu-item">
                          <a class="menu-link" href="slider-revolution.html"><div>Publications</div></a>
                      </ul>
                    <li class="menu-item">
                      <a class="menu-link" href="#"><div>Media Publications</div></a>
                      <ul class="sub-menu-container">
                        <li class="menu-item">
                          <a class="menu-link" href="slider-revolution.html"><div>Publications</div></a>
                            
                        </li>
                      </ul>
                    </ul>
                    <li class="menu-item">
                      <a class="menu-link" href="eventsList.html"><div>Events</div><span>Events List</span></a>
                      <ul class="menu-container"></ul>
            
                    <li class="menu-item">
                      <a class="menu-link" href="tracksChallenges.html"><div>Tracks and challenges</div><span>Pathways For the Project</span></a>
                      <ul class="menu-container"></ul>
                      ');
                      if(isLogged()){
                        echo ('<li class="menu-item">
                        <a class="menu-link" href="LoginForm.php"><div>Log out</div><span>Login or Create an Account</span></a>
                        <ul class="menu-container">');
                      }else{
                        echo ('<li class="menu-item">
                        <a class="menu-link" href="LoginForm.php"><div>Login</div><span>Log Out</span></a>
                        <ul class="menu-container">');
                      }
                      
                      echo('
        </nav>
        <!-- #primary-menu end -->
        
        <form class="top-search-form" action="search.html" method="get">
          <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
          
        </form>

      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>');


?>