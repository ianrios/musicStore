<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    
@endsection

@section('content')

    <main>
        <div class="content content--grid content--second">
            <h3 class="content__title">WHY?<br/>Records</h3>
            <p class="content__text">One morning, when Gregor Samsa woke from troubled
                dreams, he found himself transformed in his bed into a horrible vermin. He
                lay on his armour-like back, and if he lifted his head a little he could
                see his brown belly, slightly domed and divided by arches into stiff
                sections. </p>
            <div class="social">
                <a class="social__link" href="https://www.instagram.com/">In</a>
                <a class="social__link" href="https://twitter.com/">Tw</a>
                <a class="social__link" href="https://facebook.com/">Fb</a>
            </div>
            <div class="reel">
                <img class="reel__img" src="img/12.jpg" alt="Some image" /><span
                    class="reel__number">001</span>
                <img class="reel__img" src="img/14.jpg" alt="Some image" /><span
                    class="reel__number">002</span>
                <img class="reel__img" src="img/18.jpg" alt="Some image" /><span
                    class="reel__number">003</span>
                <img class="reel__img" src="img/16.jpg" alt="Some image" /><span
                    class="reel__number">004</span>
            </div>
            <div class="select">
                <h4 class="select__heading">select</h4>
                <a class="select__item select__item--current">all</a>
                <a class="select__item">individuals</a>
                <a class="select__item">groups</a>
            </div>
            <button class="content__back" aria-label="Back to main view"></button>
        </div>
        <div class="content content--first"><!-- only rotated -->
            <div class="content__move"><!-- sized and moved -->
                <div class="content__reverse">
                    <div class="intro">
                        <div class="frame">
                            <div class="frame__title-wrap">
                                <h1 class="frame__title">WHY? Record Company</h1>
                                <div class="frame__links">
                                    <a href="#">Releases</a>
                                    <a href="#">Store</a>
                                    <a href="#">Services</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                            <div class="frame__demos">
                                <!-- <a href="index.html" class="frame__demo frame__demo--current">01</a> -->
                                <a href="#" class="frame__demo">whythough?</a>
                                <a href="#" class="frame__demo">dyl_pykl</a>
                                <a href="#" class="frame__demo">svnteen</a>
                            </div>
                        </div>
                        <div class="intro__img" style="background-image: url(img/11.jpg)"></div>
                        <h2 class="intro__title">WHY? Records</h2>
                        <a href="#" class="intro__enter">about</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/charming.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/demo1.js"></script>
    <script>
    // Preload all the images in the page
    imagesLoaded(document.querySelectorAll('.intro__img, .reel__img'), {background: true}, () => document.body.classList.remove('loading'));
    </script>
		


@endsection