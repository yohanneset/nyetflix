<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Netflix</title>
    <link href="../assets/images/Icon/Icon.ico" rel="icon" type="image/x-icon" />
    <link href="./styles/index.css" rel="stylesheet" type="text/css" />
    <link href="./styles/main.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./styles/content-row.css" rel="stylesheet" type="text/css" />
    <link href="./styles/top.css" rel="stylesheet" type="text/css" />
    <link href="./styles/footer.css" rel="stylesheet" type="text/css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top px-4 py-3">
          <div class="container-fluid">
              <a class="navbar-brand d-flex align-items-center" href="#">
                  <img src="../assets/images/Icon/logo.png" alt="Netflix" class="me-3" style="width: 100px;" />
                  <span class="d-lg-none small">Browse</span>
              </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

      <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">TV Shows</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Movies</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Latest</a></li>
              <li class="nav-item"><a class="nav-link" href="#">My List</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Browse by Languages</a></li>
          </ul>

        <ul class="navbar-nav d-flex flex-row gap-3">
            <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="search"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="bell"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="#" alt="profile" style="width: 30px; height: 30px;" class="rounded-circle me-1" />
                    <i data-feather="chevron-down"></i>
                </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
              </li>
                </ul>
            </div>
        </div>
      </nav>

      <main>
          <div class="top">
            <img
              src="../assets/images/Main/Top/The Grey Man.jpg"
              alt="background-image"
              class="bg-image"
          />
          <div class="dark-left"></div>
          <div class="dark-bottom"></div>

          <div class="billboard">
            <img
              src="../assets/images/Main/Top/billboard.jpg"
              alt="bg-img"
            />
            <div class="title">Watch Now</div>
            <div class="description">
              A CIA agent with an matched skills. A rogue enemy with a conscience. From Bangkok to Berlin, Vienna to Prague, it's a deadly game of cat and mouse.
            </div>
            <div class="buttons">
              <button class="play-btn">
                <i class="fa fa-play"></i>
                <div>Play</div>
              </button>

              <button class="info-btn">
                <i data-feather="info"></i>
                <div>More Info</div>
              </button>
            </div>
          </div>
          <div class="content-row column">
            <div class="title">Get In on the Action</div>
            <div class="slider">
              <div class="content">
                <img
                  src="../assets/images/Main/Body/Row1/Prison-Break.jpg"
                />
              </div>
              <div class="content">
                <img
                  src="../assets/images/Main/Body/Row1/TOP-BOY.jpg"
                />
              </div>
              <div class="content">
                <img
                  src="../assets/images/Main/Body/Row1/Money-Heist.jpg"
                />
              </div>
              <div class="content">
                <img
                src="../assets/images/Main/Body/Row1/Night-Agent.jpg"
                />
              </div>
              <div class="content">
                <img
                src="../assets/images/Main/Body/Row1/The Rookie.jpg"
                />
              </div>
              <div class="content">
                <img
                src="../assets/images/Main/Body/Row1/Vikings.jpg"
                />
              </div>
              <div class="content">
                <img
                src="../assets/images/Main/Body/Row1/SUPACELL.jpg"
                />
              </div>
              <div class="content">
                <img
                src="../assets/images/Main/Body/Row1/The-Union.jpg"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="content-row column">
          <div class="title">New on Netflix</div>
          <div class="slider">
            <div class="content">
              <img
                src="../assets/images/Main/Body/Row2/Squid-Game.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row2/Sakamoto-Days.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row2/Outer Banks.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row2/Bad-Guys.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row2/Carry On.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row2/Ticket to Paradise.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row2/Ad Vitam.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row2/Back in Action.jpg"
              />
            </div>
          </div>
        </div>
        <div class="content-row column">
          <div class="title">Golden Globe Award-winning TV Comedies</div>
          <div class="slider">
            <div class="content">
              <img
                src="../assets/images/Main/Body/Row5/Baby Reindeer.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row5/Beef.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row5/The Kominsky Method.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row5/Seinfield.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row5/Friends.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row5/Monk.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row5/Mastor of None.jpg"
              />
            </div>
          </div>
        </div>
        <div class="content-row column">
          <div class="title">Epic Worlds</div>
          <div class="slider">
            <div class="content">
              <img
                src="../assets/images/Main/Body/Row6/Love and Monsters.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row6/MIB international.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row6/One Piece.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row6/Dungeons and Dragons.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row6/The last Air-Bender.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row6/Divergent.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row6/The Witcher.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row6/3 Body Problems.jpg"
              />
            </div>
          </div>
        </div>
        <div class="content-row column">
          <div class="title">Top Searches</div>
          <div class="slider">
            <div class="content">
              <img
                src="../assets/images/Main/Body/Row7/Anyone but you.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row7/White Chicks.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row7/Hotel transylvania.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row7/The six triple Eight.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row7/Knight and Day.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row7/Little.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row7/LiarLiar.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row7/Lift.jpg"
              />
            </div>
          </div>
        </div>

        <div class="content-row column">
          <div class="title">Your Next Watch</div>
          <div class="slider">
            <div class="content">
              <img
                src="../assets/images/Main/Body/Row3/Gifted.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row3/Narcos.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row3/Bodjack Horseman.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row3/Instant Family.webp"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row3/Spiderman.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row3/Stranger-Things.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row3/The Social Network.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row3/Space Force.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row3/Sherlock.jpg"
              />
            </div>
          </div>
        </div>
        <div class="content-row column">
          <div class="title">Sci-Fi & Fantasy Movies</div>
          <div class="slider">
            <div class="content">
              <img
                src="../assets/images/Main/Body/Row4/Bright.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row4/The School for Good and Evil.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row4/Jurassic-World.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row4/BumbleBee.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row4/The day after Tomorrow.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row4/Predator.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row4/Transformers.jpg"
              />
            </div>
            <div class="content">
              <img
              src="../assets/images/Main/Body/Row4/Don't Look UP.jpg"
              />
            </div>

          </div>
        </div>
      </main>

      <footer class="column">
        <div class="social-icons row">
          <i class="fa fa-facebook social-icon"></i>
          <i class="fa fa-instagram social-icon"></i>
          <i class="fa fa-youtube social-icon"></i>
        </div>

        <div class="footer-links">
            <a href="#" class="footer-link">Audio Description</a>
            <a href="#" class="footer-link">Help Center</a>
            <a href="#" class="footer-link">Gift Cards</a>
            <a href="#" class="footer-link">Media Center</a>
            <a href="#" class="footer-link">Investor Relations</a>
            <a href="#" class="footer-link">Jobs</a>
            <a href="#" class="footer-link">Terms of use</a>
            <a href="#" class="footer-link">Privacy</a>
            <a href="#" class="footer-link">Legal Notices</a>
            <a href="#" class="footer-link">Cookie Preferences</a>
            <a href="#" class="footer-link">Coorperate Information</a>
            <a href="#" class="footer-link">Contact us</a>
        </div>

        <div class="footer-service">
            <button class="service-code">Service Code</button>
        </div>

            <div class="footer-copyright">
            &copy; 2025 Netflix, Inc.
            </div>
      </footer>

      <script src="./scripts/script.js"></script>
      <script src="https://unpkg.com/feather-icons"></script>
      <script>
        feather.replace();
      </script>
    </body>
</html>
