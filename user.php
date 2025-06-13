<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes 34</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Watch YUK!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Genre
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#Trending">Trending</a></li>
                            <li><a class="dropdown-item" href="#Action">Action</a></li>
                            <li><a class="dropdown-item" href="#Romance">Romance</a></li>
                            <li><a class="dropdown-item" href="#Animation">Animation</a></li>
                            <li><a class="dropdown-item" href="#Horror">Horror</a></li>
                            <li><a class="dropdown-item" href="#Thriller">Thriller</a></li>
                            <li><a class="dropdown-item" href="#Drakor">Drakor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#About">About</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/pw2025_tubes_243040034/review.php#">Add Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help.php">Help</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container" role="main">
        <!-- Header -->
        <header class="header" role="banner">
            <div>Watch YUK!</div>
            <div class="dropdown" tabindex="0" aria-haspopup="true" aria-expanded="false" aria-label="User menu">
                <div class="profile" aria-controls="dropdown-menu" aria-haspopup="true" aria-expanded="false">
                    <div class="bell" aria-label="Notifications">
                        <i class="fas fa-bell" aria-hidden="true"></i>
                    </div>
                    <img
                        src="img/user.jpg"
                        alt="user"
                        class="profile-img"
                        width="32"
                        height="32"
                        loading="lazy" />
                    <div class="profile-text">
                        <div class="name">User</div>
                        <div class="status">premium</div>
                    </div>
                    <i class="fas fa-chevron-down chevron" aria-hidden="true"></i>
                </div>
                <nav class="dropdown-content" id="dropdown-menu" role="menu" aria-label="User menu options">
                    <a href="profileuser.php" role="menuitem" tabindex="-1">Profile</a>
                    <a href="#" role="menuitem" tabindex="-1">Premium</a>
                    <a href="http://localhost/pw2025_tubes_243040034/index.php#" role="menuitem" tabindex="-1">Logout</a>
                </nav>
            </div>
        </header>

        <!-- Featured Section -->
        <section class="featured" aria-label="Featured movies">
            <article class="featured-card" style="background-color:#1f3a5a;">
                <img
                    src="img/Display/Avengers.jpg"
                    alt="Avengers"
                    width="320"
                    height="160"
                    loading="lazy" />
                <h2>Avengers: Endgame</h2>
                <button class="play-button">
                </button>
            </article>
            <article class=" featured-card second" style="background-color:#7a8db9;">
                <img
                    src="img/display/Jujutsu.jpg"
                    alt="Jujutsu Kaisen"
                    width="320"
                    height="280"
                    loading="lazy" />
                <h2>Jujutsu Kaisen Season 2</h2>
                <button class="play-button">
                </button>
            </article>
        </section>

        <!-- Categories -->
        <nav class="categories" aria-label="Movie categories">
            <button class="category-btn" type="button"><a href="#Trending">Trending</a></button>
            <button class="category-btn" type="button"><a href="#Action">Action</a></button>
            <button class="category-btn" type="button"><a href="#Romance">Romance</a></button>
            <button class="category-btn" type="button"><a href="#Animation">Animation</a></button>
            <button class="category-btn" type="button"><a href="#Horror">Horror</a></button>
            <button class="category-btn" type="button"><a href="#Thriller">Thriller</a></button>
            <button class="category-btn" type="button"><a href="#Drakor">Drakor</a></button>
        </nav>

        <section id="Trending" class="trending-header" aria-label="Trending">
            <div>| Trending now</div>
        </section>

        <!-- Trending Now Cards -->
        <section id="Trending" class="trending-grid" aria-label="Trending movies">

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Trending/th.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">The Accountant 2</div>
                <div class="card-info">
                    <span class="year">2025</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Trending/Ballerina.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">From the World of John Wick: Ballerina</div>
                <div class="card-info">
                    <span class="year">2025</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Trending/Sinners.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Sinners</div>
                <div class="card-info">
                    <span class="year">2025</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Trending/Straw.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Straw</div>
                <div class="card-info">
                    <span class="year">2025</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Trending/predator.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Predator: Killer of Killers</div>
                <div class="card-info">
                    <span class="year">2025</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Trending/Mission.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Mission: Impossible - The Final Reckoning</div>
                <div class="card-info">
                    <span class="year">2025</span>
                </div>
            </article>
        </section>

        <section class="trending-header" aria-label="Trending in Action">
            <div>| Action Movie</div>
        </section>

        <!-- Action Cards -->
        <section id="Action" class="trending-grid" aria-label="Action movies">

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Action/Avengers2012.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">The Avengers</div>
                <div class="card-info">
                    <span class="year">2012</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Action/Avengers2016.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Avengers Civil War</div>
                <div class="card-info">
                    <span class="year">2016</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Action/Avengers2019.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Avengers: Endgame</div>
                <div class="card-info">
                    <span class="year">2019</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Action/BHD.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Black Hawk Down</div>
                <div class="card-info">
                    <span class="year">2001</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Action/Deadpool.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Deadpool</div>
                <div class="card-info">
                    <span class="year">2016</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Action/FnF1.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Fast and the Farious</div>
                <div class="card-info">
                    <span class="year">2001</span>
                </div>
            </article>
        </section>

        <section class="trending-header" aria-label="Trending in Romance">
            <div>| Romance Movie</div>
        </section>

        <!-- Romance Cards -->
        <section id="Romance" class="trending-grid" aria-label="Romance movies">

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Romance/Titanic.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Titanic</div>
                <div class="card-info">
                    <span class="year">1997</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Romance/Dilan.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Dilan 1990</div>
                <div class="card-info">
                    <span class="year">2018</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Romance/Ancika.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Ancika</div>
                <div class="card-info">
                    <span class="year">2024</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Romance/Dilan1991.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Dilan 1991</div>
                <div class="card-info">
                    <span class="year">2019</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Romance/Heart.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Heart</div>
                <div class="card-info">
                    <span class="year">2006</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Romance/PurpleHeart.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Purple Heart</div>
                <div class="card-info">
                    <span class="year">2022</span>
                </div>
            </article>
        </section>

        <section class="trending-header" aria-label="Trending in Animation">
            <div>| Animation Movie</div>
        </section>

        <!-- Animation Cards -->
        <section id="Animation" class="trending-grid" aria-label="Animation movies">

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Animation/Kungfu.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Kungfu Panda 3</div>
                <div class="card-info">
                    <span class="year">2016</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Animation/Jujutsu.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Jujutsu Kaisen</div>
                <div class="card-info">
                    <span class="year">2020</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Animation/KnW.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Kimi No Nawa</div>
                <div class="card-info">
                    <span class="year">2016</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Animation/Monster.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Monster, Inc.</div>
                <div class="card-info">
                    <span class="year">2001</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Animation/Up.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Up</div>
                <div class="card-info">
                    <span class="year">2009</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Animation/Pankreas.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">I Want To Eat Your Pancreas</div>
                <div class="card-info">
                    <span class="year">2018</span>
                </div>
            </article>
        </section>

        <section class="trending-header" aria-label="Trending in Horror">
            <div>| Horror Movie</div>
        </section>

        <!-- Horror Cards -->
        <section id="Horror" class="trending-grid" aria-label="Horror movies">

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Horror/HolyN.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Holy Night Demon Hunters</div>
                <div class="card-info">
                    <span class="year">2025</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Horror/Insidious.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Insidious</div>
                <div class="card-info">
                    <span class="year">2010</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Horror/Munafik.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Munafik</div>
                <div class="card-info">
                    <span class="year">2016</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Horror/Munafik2.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Munafik 2</div>
                <div class="card-info">
                    <span class="year">2018</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Horror/Smile.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Smile</div>
                <div class="card-info">
                    <span class="year">2022</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Horror/the conjuring.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">The Conjuring</div>
                <div class="card-info">
                    <span class="year">2013</span>
                </div>
            </article>
        </section>

        <section class="trending-header" aria-label="Trending in Thriller">
            <div>| Thriller Movie</div>
        </section>

        <!-- Thriller Cards -->
        <section id="Thriller" class="trending-grid" aria-label="Thriller movies">

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Thriller/Shutter.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Shutter Island</div>
                <div class="card-info">
                    <span class="year">2010</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Thriller/fd1.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Final Destination</div>
                <div class="card-info">
                    <span class="year">2000</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Thriller/fd2.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Final Destination 2</div>
                <div class="card-info">
                    <span class="year">2003</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Thriller/fd3.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Final Destination 3</div>
                <div class="card-info">
                    <span class="year">2006</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Thriller/fd4.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Final Destination 4</div>
                <div class="card-info">
                    <span class="year">2009</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Thriller/The Silence.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">The Silence of the lambs</div>
                <div class="card-info">
                    <span class="year">1991</span>
                </div>
            </article>
        </section>

        <section class="trending-header" aria-label="Trending in Drakor">
            <div>| Drakor Movie</div>
        </section>

        <!-- Drakor Cards -->
        <section id="Drakor" class="trending-grid" aria-label="Drakor movies">

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Drakor/Whc1.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Weak Hero Class 1</div>
                <div class="card-info">
                    <span class="year">2022</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Drakor/Island.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Island</div>
                <div class="card-info">
                    <span class="year">2022</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Drakor/parasite.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Parasite</div>
                <div class="card-info">
                    <span class="year">2019</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Drakor/Study.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Study Group</div>
                <div class="card-info">
                    <span class="year">2025</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Drakor/One.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">ONE: High School Heroes</div>
                <div class="card-info">
                    <span class="year">2025</span>
                </div>
            </article>

            <article class="card">
                <div class="card-img-wrapper" tabindex="0" role="button">
                    <img
                        src="img/Drakor/Twinkling.jpg"
                        width="160"
                        height="140"
                        loading="lazy" />
                    <div class="overlay">YUK!</div>
                </div>
                <div class="card-title">Twinkling Watermelon</div>
                <div class="card-info">
                    <span class="year">2023</span>
                </div>
            </article>
        </section>

        <!-- About -->
        <section id="About">
            <div class="container px-4 text-center">
                <h1 class="fs-1 text text-uppercase fw-bold">about Us..</h1>
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-6">Selamat datang di Watch YUK!
                            Tempat terbaik buat kamu yang suka nonton dan ingin selalu update dengan tontonan seru!

                            Di Watch YUK!, kami percaya bahwa setiap tontonan punya cerita yang layak dibagikan. Website ini hadir untuk menjadi ruang bagi para pecinta film, serial, dan tayangan lainnya untuk saling berbagi ulasan, rekomendasi, dan pengalaman menonton.
                            <p> Kami ingin membuat pengalaman menonton kamu lebih menyenangkan dan bermakna. Yuk, mulai eksplorasi, review, dan tambah koleksi tontonan kamu bareng komunitas Watch YUK!</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-6">Apa yang bisa kamu lakukan di sini?

                            <p>🎬 Baca dan Tulis Review – Temukan pendapat jujur dari penonton lain atau bagikan opini kamu tentang film dan serial yang baru kamu tonton.</p>
                            <p>📌 Tambah Watchlist – Lihat rekomendasi dari pengguna lain dan simpan tontonan yang ingin kamu nikmati nanti.</p>
                            <p></p>🔍 Jelajahi Pilihan Seru – Dari drama Korea, film Horror, sampai Action, semuanya bisa kamu temukan dan diskusikan di sini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir About -->
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-dark py-4 mt-5">
        <div class="container mb-5">
            <div class="row align-items-center justify-content-between">
                <div class="text-dark col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <h5 class="mb-1">🎬 Watch YUK!</h5>
                    <small>© 2024 – Dibuat oleh <strong>Andhika Ashari</strong></small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="https://github.com/andhikaashari" target="_blank" class="text-dark me-3 text-decoration-none">
                        <i class="bi bi-github"></i> GitHub
                    </a>
                    <a href="help.php" class="text-dark text-decoration-none">
                        <i class="bi bi-envelope-fill"></i> Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</html>