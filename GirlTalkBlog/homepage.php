<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GirlTalkBlog</title>
    <link href="./homepage.css" rel="stylesheet">
    <style>
        .header1 {
            box-shadow: 0px 4px 4px black;
        }

        .navbar2 {
            box-shadow: 2px 2px 2px rgb(114, 11, 37);
        }

        .navbarsection {
            box-shadow: 0px 2px 4px rgb(114, 11, 37);
        }

        #button1,
        #button2 {
            box-shadow: 0px 2px 2px black;
        }

        #button3 {
            box-shadow: 0px 4px 4px rgb(170, 46, 108);
        }

        body {
            background-color: rgb(222, 248, 228);
        }

        /* #button3:hover {
            background-color: rgb(240, 62, 166);
        } */

        .mainarticlecontainer {
            display: flex;
            gap: 40px;
        }

        .maincontent {
            display: flex;
            gap: 40px;
        }

        /* .welcomemessage {
            color: rgb(163, 102, 138);
            align-self: flex-start;
            display: flex;
            align-items: flex-start;
        } */
    </style>
</head>

<body>
    <header>
        <div class="header1" style="background-color: rgb(212, 226, 238); box-shadow: 0px 4px 4px rgb(114, 11, 37);">
            <div class="logoimage">
                <img src="../images/girltalk.jpg" alt="logo" height="100" width="150" style="box-shadow: 0px 4px 4px rgb(161, 61, 120);">
            </div>
            <div class="signoutbutton" action="signout">
                <a href="./firstpage.php"> <button id="button1" style="box-shadow: 0px 4px 4px rgb(161, 61, 120);"><strong>Sign Out</strong></button></a>
            </div>
        </div>

        <div class="header2">
            <div class="titlecontainer">
                <h1>Girl Talk</h1>
                <h4 id="subtitlecontainer" style="color: purple; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-shadow: 0px 4px 4px pink;"><em>Welcome__Bienvenue__Bienvenidas</em></h4>
            </div>
            <div class="subtitle">
                <h4 id="subheading1">Spirit</h4>
                <h4 id="subheading2">Body</h4>
                <h4 id="subheading3">Mind</h4>
            </div>
        </div>
    </header>

    <nav class="navbarsection" style="background-color: rgb(212, 226, 238); box-shadow: 0px 4px 4px rgb(114, 11, 37);">
        <a href="./about.php"><button id="button2"><strong>About</strong></button></a>
        <a href="./therapy.php" target="_blank"><button id="button2"><strong>Therapy</strong></button></a>
        <a href="./news.php"><button id="button2"><strong>News</strong></button></a>
    </nav>
    <div class="navbar2" style="background-color: rgb(247, 210, 237); box-shadow: 0px 4px 4px rgb(114, 11, 37);">
        <h3 id="nav2title" style="font-family:'Times New Roman', Times, serif;">**Favourites**</h3>
        <div class="navbar2buttons">
            <button id="button3" style="background-color: rgb(112, 179, 241);"> My Articles </button>
            <button id="button3" style=" background-color:rgb(201, 99, 158);"> My Newsletters </button>
            <button id="button3" style=" background-color:rgb(120, 218, 120);"> My Likes </button>
        </div>
    </div>
    <br />
    <div class="mainarticlecontainer">
        <aside class="asidecontent">
            <section>
                <h4 style="color: rgb(133, 19, 156); font-family:cursive"><u>Check out!</u></h4>
                <lable style="color: rgb(113, 84, 243);"> <strong>Search</strong></lable>
                <input type="search" placeholder="keywords">
            </section>

            <ul>
                <li>
                    <a href="">
                        <h5>Hot Topics</h5>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h5>Real Talk</h5>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h5>Articles</h5>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h5>Experiences</h5>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h5>Support</h5>
                    </a>
                </li>
            </ul>
            <section>
                <label style="color: rgb(113, 84, 243);"><strong>Sign up for News letter</strong></label>
                <input type="email" placeholder="@email.com">
                <button id="submitbutton">submit</button>
            </section>
        </aside>

        <div class="maincontent">
            <p>
                <strong><em> What's New & Trending..</em></strong><br /> <br />
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <p>
                Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
            <p>
                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
            </p>
            <section>
                <img src=../images/balance.jpg height="200" width="200" alt="logo"> <br /> <br /> <br />
                <img src=../images/lifeisaboutbalance.jpg height="200" width="200" alt="logo">
            </section>
        </div>
    </div>

    <footer class="footer">
        <div class="connect">
            <h4>Connect</h4>
            <a href="https://www.facebook.com/"><img src="https://tse3.mm.bing.net/th?id=OIP.jN9MoBFyFgTTUqlqfUs3FQHaHa&pid=Api&P=0&w=169&h=169" height="27" /></a>
            <p></p>
            <a href="https://www.instagram.com/"><img src="https://tse1.mm.bing.net/th?id=OIP.2y2SJrFAmm6sfa_ljaeZ3gHaHa&pid=Api&P=0&w=158&h=158" height="30" /></a>
        </div>
        <div class="resources">
            <h4>Resources</h4>
            <a href="">
                <h5>NewsLetter</h5>
            </a>
            <a href="">
                <h5>Articles</h5>
            </a>
        </div>
        <div class="contact">
            <h4>Contact</h4>

            <h5 style="color: rgb(156, 63, 165);">Email: test@outlool.com</h5>

            <h5 style="color: rgb(156, 63, 165);">Address: Dublin xx Road Ireland</h5>

        </div>

    </footer>
</body>

</html>