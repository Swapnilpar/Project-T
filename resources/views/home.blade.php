@extends('welcome')
@section('home-content')
<main>
    <div class="page1">
        <div id="center">
            <div id="right">
                <h1>ENGAGE <br>
                    EXPLORE <br>
                    EMPOWER <br>
                </h1>
            </div>
            <div id="left">
                <h4>Venture into the digital frontier: a hub of insight, innovation, and full taste of empowerment,
                    fueling your journey through the world of technology.</h4>
            </div>
        </div>
        <!-- <div id="hero-shape">
            <div id="hero-1"></div>
            <div id="hero-2"></div>
            <div id="hero-3"></div>
        </div> -->

        <div class="video-wrapper">
            <video src="{{ asset('assets/students.mp4') }}" autoplay loop muted></video>
        </div>
    </div>


    <div id="page2">
        <div id="moving-text">
            <div class="con">
                <h1>ENGAGE</h1>
                <div id="gola"></div>
                <h1>EXPLORE</h1>
                <div id="gola"></div>
                <h1>EMPOWER</h1>
                <div id="gola"></div>
            </div>
            <div class="con">
                <h1>ENGAGE</h1>
                <div id="gola"></div>
                <h1>EXPLORE</h1>
                <div id="gola"></div>
                <h1>EMPOWER</h1>
                <div id="gola"></div>
            </div>
            <div class="con">
                <h1>ENGAGE</h1>
                <div id="gola"></div>
                <h1>EXPLORE</h1>
                <div id="gola"></div>
                <h1>EMPOWER</h1>
                <div id="gola"></div>
            </div>
        </div>
        <div id="page2-bottom">
            <h1>"Learning gives creativity, creativity leads to thinking, thinking provides knowledge, and knowledge
                makes you great."</h1>
            <div id="bottom-part2">
                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
                <p>Unlocking potential through <br> cutting-edge technology, fostering creativity and lifelong learning
                    in
                    a diverse global community.</p>
            </div>
        </div>
        <div id="gooey">
        </div>
    </div>


    <div id="page3">
        <div class="elem">
            <a href="/news">
                <div class="overlay"></div>
                <h2>Technology News and articles</h2>
                <p>Stay updated with the latest tech news and insightful articles.</p>
            </a>
        </div>
        <div class="elem">
            <a href="/tools">
                <div class="overlay"></div>
                <h2>Best AI and Productivity Tools</h2>
                <p>Discover top AI tools and productivity resources for efficiency.</p>
            </a>
        </div>
        <div class="elem">
            <a href="/notes">
                <div class="overlay"></div>
                <h2>Tech Books and Notes</h2>
                <p>Explore a collection of tech books and useful notes for learning.</p>
            </a>
        </div>
        <div class="elem">
            <a href="#">
                <div class="overlay cm-1"></div>
                <h2>Technological Events and conferences</h2>
                <p>Find information about upcoming tech events and conferences.</p>
            </a>
        </div>
        <div class="elem">
            <a href="#">
                <div class="overlay cm-2"></div>
                <h2>Companies and Startup Spotlight</h2>
                <p>Spotlighting companies and startups in the tech industry.</p>
            </a>
        </div>

    </div>


    <div id="page4">
    </div>
    <div id="page5">

    </div>

</main>

<div id="footer">


    <div id="footer-div">
    </div>

    <div id="footer-div2">
    </div>

    <h1>PROJECT-T</h1>
    <div id="footer-bottom">
        <h4>Copyrights &copy; Project-T </h4>
        <h4>India, Mumbai</h4>
        <h4>About Us</h4>
        <h4>Our Team</h4>
    </div>
</div>

@endsection

@section('locomotive')
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
<script>
const scroll = new LocomotiveScroll({
    el: document.querySelector('main'),
    smooth: true
});

document.addEventListener("DOMContentLoaded", function() {
            const elems = document.querySelectorAll(".elem");
            const lastTwo = Array.from(elems).slice(-3);
            lastTwo.forEach(function(elem) {
                const anchor = elem.querySelector("a");
                anchor.addEventListener("click", function(event) {
                    event.preventDefault();
                    alert("This feature is about to come soon");
                });
            });
        });
</script>
@endsection