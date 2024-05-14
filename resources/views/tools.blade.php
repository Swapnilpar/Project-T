@extends('welcome')
@vite(['resources/sass/tools.scss'])
@section('tools-content')
<body class="tools-body">
    

<div class="container py-5">
        <h1 class="text-center">Popular Tools</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

          <!-- notion  -->
            <div class="col">
                <div class="card">
                    <img src="https://cdn.dribbble.com/users/259424/screenshots/15009418/notion8_4x.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Notion</h4>
                        <p class="card-text" style="text-align: justify;">Notion is a versatile productivity tool that combines note-taking, project management, and task organization in one collaborative workspace. </p>
                        <a href="https://www.notion.so/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

          <!-- figma -->
            <div class="col">
                <div class="card">
                    <img src="https://cdn.dribbble.com/users/2341833/screenshots/16056462/dribbble_figma_icon_3x.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Figma</h4>
                        <p class="card-text" style="text-align: justify;">Figma is a collaborative designing platform that enables developers and teams to create, prototype, and share design projects in real-time.</p>
                        <a href="https://www.figma.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

          <!-- Runway ML  -->
            <div class="col">
                <div class="card">
                  <img src="https://traceitlab.com/wp-content/uploads/2021/03/runwayml_blog_machine_learning_traceitlab_traceitgreen.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h4 class="card-title">Runway</h4>
                        <p class="card-text" style="text-align: justify;">Tools for human imagination. A new suite of creative tools designed to turn the ideas in your head into reality. Possible with AI models that can understand and generate worlds.</p>
                        <a href="https://runwayml.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                  </div>
                </div>
            </div>

          <!-- Playground AI -->
            <div class="col">
                <div class="card">
                    <img src="https://webshoptiger.com/wp-content/uploads/2023/12/playground.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Playground AI</h4>
                        <p class="card-text" style="text-align: justify;">Playground AI is an AI-powered tool that allows users to generate and edit images based on text prompts, seamlessly blending real elements to create photorealistic artworks.</p>
                        <a href="https://playground.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                    
                </div>
            </div>

            <!-- FigJam -->
            <div class="col">
                <div class="card">
                    <img src="https://coosy.co.jp/wp/wp-content/uploads/2023/10/316kv.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">FigJam</h4>
                        <p class="card-text" style="text-align: justify;">FigJam is an interactive online whiteboard designed for brainstorming, collaboration, enabling users to create diagrams, flowcharts, and visual notes in a shared space.</p>
                        <a href="https://www.figma.com/figjam/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- adobe firefly  -->
            <div class="col">
                <div class="card">
                    <img src="https://logowik.com/content/uploads/images/adobe-firefly-icon91.logowik.com.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Adobe Firefly</h4>
                        <p class="card-text" style="text-align: justify;">
                        Adobe Firefly is a generative AI tool that allows users to create, edit, and transform images using prompts, making awesome artworks.</p>
                        <a href="https://www.adobe.com/products/firefly.html" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Piggy.to app -->
            <div class="col">
                <div class="card">
                    <img src="https://f004.backblazeb2.com/file/ExploreAI/posts/tools/piggy-magic/images/thumbnail.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Piggy AI</h4>
                        <p class="card-text" style="text-align: justify;">Piggy AI is an AI-powered tool designed to create social media content and, enabling users to generate, customize, and share mobile-friendly content.</p>
                        <a href="https://piggy.to/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- ideogram AI -->
            <div class="col">
                <div class="card">
                    <img src="https://ideogram-ai.com/wp-content/uploads/2023/09/Ideogram-ai-1-1024x579.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Ideogram AI</h4>
                        <p class="card-text" style="text-align: justify;">Ideogram AI is an advanced generative AI tool that specializes in creating text-based artwork and excels at rendering intricate designs with words and typography, it also has capability of generating fantasy style artworks.</p>
                        <a href="https://ideogram.ai/login" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                    
                    
                </div>
            </div>

            <!-- UIVerse IO -->
            <div class="col">
                <div class="card">
                    <img src="https://imagedelivery.net/KMb5EadhEKC1gAE0LkjL1g/e2e7fec9-4fa4-4641-bbdb-4ea62eb8c300/public" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">UIVerse</h4>
                        <p class="card-text" style="text-align: justify;">UIVerse is a platform offering collection of pre-built UI components, including buttons, cards, and much more. Allows developers to quickly integrate these components into their projects.</p>
                        <a href="https://uiverse.io/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                    
                    
                </div>
            </div>

             <!-- pitch powerpoint making app -->
             <div class="col">
                <div class="card">
                    <img src="https://res.cloudinary.com/pitch-software/image/upload/blog/SwitchToPitch_Cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">Pitch</h4>
                        <p class="card-text" style="text-align: justify;">Pitch is a collaborative presentation platform designed to help teams create and share awesome presentations quickly. With AI integration, users can leverage prompts to generate content.</p>
                        <a href="https://pitch.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                    
                    
                </div>
            </div>

             <!-- Poe AI tool-->
             <div class="col">
                <div class="card">
                    <img src="https://miro.medium.com/v2/resize:fit:700/1*LY5ZYuBcdJchIXL9rwOKfA.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">Poe AI</h4>
                        <p class="card-text" style="text-align: justify;">Poe AI is a platform for creating custom chatbots with complete control over their personality and behavior. Users can define the bot's abilities, specify its information sources, and use it.</p>
                        <a href="https://poe.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                    
                    
                </div>
            </div>

             <!-- Study GPT-->
             <div class="col">
                <div class="card">
                    <img src="https://statics.topai.tools/img/tools/studygpt.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">StudyGPT</h4>
                        <p class="card-text" style="text-align: justify;">StudyGPT is a browser extension that integrates with popular platforms to offer AI-driven assistance for studying and learning. It can answer questions, generate explanations, and help users understand complex topics, enhancing the learning experience with AI-powered insights.</p>
                        <a href="https://chromewebstore.google.com/detail/fcejkolobdcfbhhakbhajcflakmnhaff" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                    
                    
                </div>
            </div>

             <!-- Copilot MS-->
             <div class="col">
                <div class="card">
                    <img src="https://news.microsoft.com/source/latam/wp-content/uploads/2023/09/OMB-BLOG-MAIN-HERO-16x9-1-1024x683.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Copilot</h4>
                        <p class="card-text" style="text-align: justify;">Microsoft Copilot is an AI assistant designed to work across Microsoft 365 apps like Word and PowerPoint, receiving user prompts and generating relevant content. Offers content , image creation and planning.</p>
                        <a href="https://copilot.microsoft.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                    
                    
                </div>
            </div>

             <!-- Relume IO-->
             <div class="col">
                <div class="card">
                    <img src="https://www.relume.io/__assets/61789b489343c8242282a0ae/644f7e09a4731114281fab78_Inspiration%20Feed.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">Relume</h4>
                        <p class="card-text" style="text-align: justify;">
                        Relume AI is a design tool that empowers designers by using AI to generate sitemaps and wireframes for marketing websites in just minutes. It's a groundbreaking solution that complements, rather than replaces, human creativity in the design process.</p>
                        <a href="https://www.relume.io/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                    
                    
                </div>
            </div>

             <!-- Penseum AI-->
             <div class="col">
                <div class="card">
                    <img src="https://uploads-ssl.webflow.com/64b561c010665731cf6bd01f/64cac8280aa5b74b89cf6ffc_Penseum_walk.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">Penseum AI</h4>
                        <p class="card-text" style="text-align: justify;">Penseum is an AI-powered platform designed to transform the way students learn. Allowing users to upload study materials, Penseum  converts data into interactive flashcards, tailored questions, and much more.</p>
                        <a href="https://www.penseum.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                    
                    
                </div>
            </div>

        </div>
    </div>
</body>
<!-- <div class="container tools-container">

    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    
    
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    
    
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    
    
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    
    
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    
    
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    
    
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div> -->
@endsection