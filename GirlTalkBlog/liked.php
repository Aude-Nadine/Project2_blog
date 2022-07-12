<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GirlTalkBlog</title>
    <link href="./about.css" rel="stylesheet">
    <style>
        .navbarsection {
            box-shadow: 0px 4px 4px rgb(114, 11, 37);
        }

        #button2 {
            box-shadow: 0px 2px 2px black;
        }

        .maincontentcontainer {
            gap: 50px;
        }

        .maincontent {
            display: flex;
            gap: 30px;
        }

        body {
            background-color: rgb(222, 248, 228);
        }
    </style>
</head>

<body>
    <section>
        <div class="logoimage">
            <img src="../images/girltalk.jpg" alt="logo" height="50" width="100" style="box-shadow: 0px 2px 4px rgb(161, 61, 120);">
        </div>
    </section>
    <header>
        <div class="titlecontainer">
            <h1 style="text-shadow: 4px 4px 4px rgb(117, 34, 82);"><strong>Check out Our Most Liked Content!</strong></h1>
        </div>
        <div class="headerimage">
            <img src="../images/likeicon.jpg" alt="image" height="100px" width="100px" style="box-shadow: 0px 4px 4px red;">
        </div>
    </header>
    <br />

    <nav class="navbarsection" style="background-color: rgb(212, 226, 238);">
        <a href="./firstpage.php"><button id="button2"><strong>Home</strong></button></a>
        <!-- <a href="./news.php"><button id="button2"><strong>Links</strong></button></a> -->
        <a href="./news.php"><button id="button2"><strong>News</strong></button></a>
    </nav>

    <div class="maincontentcontainer">
        <aside class="aside">
            <section>
                <h3 style="color: rgb(133, 19, 156); font-family:cursive"><u>Check Out!</u></h3>
                <lable style="color: rgb(113, 84, 243);"> <strong>Search </strong></lable>
                <input type="search" placeholder="keywords" style="color: rgb(113, 84, 243);">
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
                <label style="color: rgb(113, 84, 243);"> <strong>Sign up for News letter</strong></label>
                <input type="email" placeholder="@email.com">
                <button id="button3">submit</button>
            </section>
        </aside>

        <h3 style="color:rgb(192, 47, 54); font-family:unset; text-shadow: 0px 4px 4px rgb(133, 48, 121);">Not Sure what are you looking for? Not to worry! </h3>

        <div class="maincontent">
            <div class="articlecontainer">
                <a href="">
                    <h2 id="subheading1">ARTICLES</h2>
                </a>
                <img src=../../images/articleicon.jpg height="" width="" alt="image"> <br />
                <p>
                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                </p>
            </div>

            <div class="storiescontainer">
                <a href="">
                    <h2 id="subheading2">STORIES</h2>
                </a>
                <img src=../../images/storiesicon.jpg height="150px" width="200px" alt="image">
                <p>
                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                </p>
            </div>

            <div class="newscontainer">
                <a href="">
                    <h2 id="subheading3">NEWS</h2>
                </a>
                <img src=../../images/newsicon.jpg height="" width="" alt="image">
                <p>
                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                </p>
            </div>
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