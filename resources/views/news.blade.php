@extends('welcome')
@vite(['resources/sass/news.scss'])
@vite(['resources/js/news.js'])
@section('news-content')
<body>
    <nav class="news-nav">
        <div class="main-nav container flex">
            <!-- <a href="#" onclick="reload()" class="company-logo"> -->
                <h2><i> </i></h2>
            <!-- </a> -->
            <!-- <div class="nav-links"> 
                <ul class="flex">
                    <li class="hover-link nav-item" id="ipl" onclick="onNavItemClick('blockchain')">Blockchain</li>
                    <li class="hover-link nav-item" id="finance" onclick="onNavItemClick('cloudcomputing')">Cloud Computing</li>
                    <li class="hover-link nav-item" id="politics" onclick="onNavItemClick('robotics')">Robotics</li>
                </ul> 
            </div>  -->
            <div class="search-bar flex">
                <input id="search-text" type="text" class="news-input" placeholder="e.g. Science">
                <button id="search-button" class="search-button">Search</button>
            </div>
        </div>
    </nav>
    

    <main>
        <div class="cards-container container d-flex" id="cards-container">
        </div>
    </main>

    <template id="template-news-card">
        <div class="card">
            <div class="card-header">
                <img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img">
            </div>
            <div class="card-content">
                <h3 id="news-title">This is the Title</h3>
                <h6 class="news-source" id="news-source">End Gadget 26/08/2023</h6>
                <p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe quis voluptatum quisquam vitae doloremque facilis molestias quae ratione cumque!</p>
            </div>
        </div>
    </template>

    </body>
@endsection