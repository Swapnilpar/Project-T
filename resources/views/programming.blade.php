@extends('welcome')
@section('programming-content')
<body class="tools-body">
    

<div class="container py-5">
        <h1 class="text-center"><i>Programming Mania</i></h1>
        <p class="text-center" style="text-align: justify;">Welcome to Programming Mania, your one-stop resource for coding tools, platforms, and resources to make your programming journey easier and more efficient. Find online compilers, problem-solving challenges, code snippets, to boost your coding skills, whether you're a beginner or an experienced developer.</p>
        <div class="row row-cols-1 row-cols-md-2 g-4 py-5">

          <!-- Leetcode  -->
            <div class="col">
                <div class="card">
                    <img src="https://leetcode.com/static/images/LeetCode_Sharing.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">LeetCode</h4>
                        <p class="card-text" style="text-align: justify;">LeetCode is an online platform offering a vast collection of coding problems and challenges, designed to help programmers improve their algorithmic skills and prepare for technical interviews.</p>
                        <a href="https://leetcode.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

          <!-- CodeWars  -->
            <div class="col">
                <div class="card">
                    <img src="https://assets-global.website-files.com/62e3ee10882dc50bcae8d07a/634816d46fc4a32b2a583416_codewars-og-image.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">CodeWars</h4>
                        <p class="card-text" style="text-align: justify;">Codewars is a coding challenge platform where developers of all skill levels can solve problems, compete in coding kata, and refine their skills in various programming languages.</p>
                        <a href="https://www.codewars.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

          <!-- CodeChef -->
            <div class="col">
                <div class="card">
                    <img src="https://static.startuptalky.com/2021/04/codechef-startuptalky.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">CodeChef</h4>
                        <p class="card-text" style="text-align: justify;">CodeChef is an online competitive programming platform that offers a wide range of coding contests, practice problems, and learning resources for developers of all levels.</p>
                        <a href="https://www.codechef.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

          <!-- HackerRank-->
            <div class="col">
                <div class="card">
                    <img src="https://5.imimg.com/data5/SELLER/Default/2023/10/354785340/GA/BS/CK/63475444/hackerrank-software.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">HackerRank</h4>
                        <p class="card-text" style="text-align: justify;">HackerRank is an online platform that provides a comprehensive collection of coding challenges, competitions, and technical interview preparation resources. It allows programmers to practice algorithms, data structures, and other technical skills.</p>
                        <a href="https://www.hackerrank.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>
         
            <!-- GeeksforGeeks-->
            <div class="col">
                <div class="card">
                    <img src="https://storage.googleapis.com/kaggle-datasets-images/1953020/3220116/a89a095579fd8e74c1c7363f41955072/dataset-cover.png?t=2022-02-23-14-01-13?t=2022-02-23-14-09-26" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">GeeksforGeeks</h4>
                        <p class="card-text" style="text-align: justify;">GeeksforGeeks is an online resource that offers tutorials, coding problems, and articles on a wide range of computer science and programming topics. </p>
                        <a href="https://www.geeksforgeeks.org/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- FreeCodeCamp-->
            <div class="col">
                <div class="card">
                    <img src="https://i0.wp.com/softwareengineeringdaily.com/wp-content/uploads/2019/12/freecodecamp-vector-logo.png?fit=900%2C500" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">FreeCodeCamp</h4>
                        <p class="card-text" style="text-align: justify;">freeCodeCamp is a non-profit platform that provides free coding lessons, interactive projects, and certifications to help people learn programming and software development.</p>
                        <a href="https://www.freecodecamp.org/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pieces-->
            <div class="col">
                <div class="card">
                    <img src="https://assets-global.website-files.com/6143afec68f55570f449ef97/636d597da4dc6a9878198706_open-graph.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Pieces</h4>
                        <p class="card-text" style="text-align: justify;">Pieces is your AI-enabled productivity tool designed to supercharge developer efficiency. Unify your entire toolchain with an on-device copilot that helps you capture, enrich, and reuse useful materials, streamline collaboration.</p>
                        <a href="https://pieces.app/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Replit-->
            <div class="col">
                <div class="card">
                    <img src="https://media.licdn.com/dms/image/D4D12AQFvtx4fdxe-fg/article-cover_image-shrink_720_1280/0/1692821402868?e=2147483647&v=beta&t=TbZsaLZpjafgfBNxytDpYsJ1ya6m82OTTWMeJWU_x0k" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Replit</h4>
                        <p class="card-text" style="text-align: justify;">Replit is an online code editor and integrated development environment (IDE) that supports multiple programming languages and enables real-time collaboration.</p>
                        <a href="https://replit.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Gitlab-->
            <div class="col">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFBxRHnSBhL9emKxKly49wJtZKikFJnihAvR65AV2TzA&s" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Gitlab</h4>
                        <p class="card-text" style="text-align: justify;">GitLab is a comprehensive DevOps platform that offers source code management, continuous integration/continuous delivery (CI/CD), and collaborative project planning.</p>
                        <a href="https://gitlab.com/users/sign_in" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

             <!-- GitHub-->
             <div class="col">
                <div class="card">
                    <img src="https://foundations.projectpythia.org/_images/GitHub-logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">GitHub</h4>
                        <p class="card-text" style="text-align: justify;">GitHub is a cloud-based platform for version control and collaborative software development using Git. It allows developers to manage code repositories, track changes,to enhance productivity and code quality.</p>
                        <a href="https://github.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

             <!-- Docker -->
             <div class="col">
                <div class="card">
                    <img src="https://blog.codewithdan.com/wp-content/uploads/2023/06/Docker-Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Docker</h4>
                        <p class="card-text" style="text-align: justify;">Docker is a platform that uses containerization technology to package applications and their dependencies into lightweight, portable containers. It simplifies software deployment, allowing developers to build, ship, and run applications consistently across different environments.</p>
                        <a href="https://www.docker.com/#build" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

             <!-- BlackBox-->
             <div class="col">
                <div class="card">
                    <img src="https://assets-global.website-files.com/63daf1fa1abcbc5e7969d7c9/63f9109af99b3192004f33bf_blackbox-.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">BlackBox AI</h4>
                        <p class="card-text" style="text-align: justify;">Blackbox AI is an AI-powered coding assistant designed to help developers write, edit, and understand code more efficiently. It provides features like code completion, intelligent suggestions, and context-aware snippets, streamlining the coding process and enhancing productivity.</p>
                        <a href="https://www.blackbox.ai/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

             <!-- JetBrains-->
             <div class="col">
                <div class="card">
                    <img src="https://blog.jetbrains.com/wp-content/uploads/2019/02/jetbrains_social.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">JetBrains</h4>
                        <p class="card-text" style="text-align: justify;">JetBrains is a software development company known for creating a suite of integrated development environments (IDEs) and developer tools designed to boost productivity and efficiency.</p>
                        <a href="https://www.jetbrains.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>
            
             <!-- VS Code-->
             <div class="col">
                <div class="card">
                    <img src="https://cdn.neowin.com/news/images/uploaded/2023/07/1688749943_vscode_story.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">VS Code</h4>
                        <p class="card-text" style="text-align: justify;">Visual Studio Code (VS Code) is a free and open-source code editor developed by Microsoft, designed for a wide range of programming languages and development tasks. It offers features like, debugging, integrated terminal, and a rich ecosystem of extensions, making it a versatile tool for developers across different platforms.</p>
                        <a href="https://code.visualstudio.com/" target=_blank>
                            <button class="btn btn-primary">Check Out</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
@endsection