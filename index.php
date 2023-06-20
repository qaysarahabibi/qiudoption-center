<?php
require 'controllwer.php';
$students = query("SELECT * FROM feedback");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./ryo.css">
  <title>Qay's Portfolio</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logni.png" alt="Bootstrap">
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#animal">Creatures</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feedback">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#medsos">Social Media</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="home" id="home">
    <div class="container">
      <div class="wrapper">
        <div class="row">
          <div class="col-md-6">
            <div class="feature-boxs">
              <h1>Adopt & Befriend <span>Magical Creatures</span> with Just ONE Click!</h1>
              <p>Find your true friend across dimensions.</p>
              <a href="feedback.php" class="btn-Two">Feedback</a>
            </div>
          </div>
          <div class="col-md-6">
            <img src="img/kiki.png" class="feature-img">
          </div>
        </div>
      </div>
    </div>
    <img src="img/bawah.png" class="wave-img">
  </section>

  <section id="about-us">
    <div class="container reveal">
      <h1 class="title text-center">HOW DO WE WORK?</h1>
      <div class="row">
        <div class="col-md-6 about-us">
          <div class="featuree-box">
            <p class="about-title">We will provide some information about all the magical creatures that exist. We will also give advice on "What kind of friend is suitable for you?" based on their dominant trait!</p>
            <a href="#animal" class="btn-One">Let's Start</a>
          </div>
        </div>
        <div class="col-md-6">
          <img src="img/totoro.png" class="about-img">
        </div>
      </div>
    </div>
  </section>

  <section id="animal">
    <div class="container text-center reveal">
      <h1 class="title">CHOOSE <span class="woy">YOUR OWN</span> FRIENDS!</h1>
      <div class="friends">
        <div class="row">
          <div class="feature-box">
            <img src="img/calcifer.png" class="animal-img">
            <h4>CALCIFER</h4>
            <P>A slightly tough but loyal friend, suitable for those who prefers to be alone most of the time.</P>
          </div>
          <div class="feature-box">
            <img src="img/duck.png" class="animal-img">
            <h4>AHIRU</h4>
            <P>A cheerful yet childish friend, they are always ready to accompany you wherever you go.</P>
          </div>
          <div class="feature-box">
            <img src="img/cat.png" class="animal-img">
            <h4>NEKOBASU</h4>
            <P>An enthusiastic and energetic friend, he is always ready to accompany your big adventure!</P>
          </div>
        </div>
        <div class="row">
          <div class="feature-box">
            <img src="img/haku.png" class="animal-img">
            <h4>HAKU</h4>
            <P>A cold but warm-hearted friend, he is very reliable and will always be there to help you.</P>
          </div>
          <div class="feature-box">
            <img src="img/turnip.png" class="animal-img">
            <h4>KAKASHI NO KABU</h4>
            <P>A loyal and brave friend, he will always protect you no matter what.</P>
          </div>
          <div class="feature-box">
            <img src="img/totoroo.png" class="animal-img">
            <h4>TOTORO</h4>
            <P>A quiet friend but has a great adventurous spirit, he will take you to places you have never been before.</P>
          </div>
        </div>
      </div>
      <a href="insert.php" class="btn-wan">Adopt Us!</a>
    </div>
  </section>

  <section id="feedback">
    <div class="container text-center reveal">
      <h1 class="feed-text">
        WHAT DOES OUR CLIENTS SAY?
      </h1>
      <div class="cards-wrapper d-flex gx-5">
      <?php $i = 1; ?>
      <?php foreach ($students as $student) : ?>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?= $student["ngaran"] ?></h5>
              <p class="card-text"><?= $student["komen"] ?></</p>
                <br>
                <a class="feed-btn btn btn-primary" href="feedback_edit.php?id=<?= $student["id"] ?>" onclick="return confirm('Are you sure?');">Change</a> |
                <a class="feed-btn btn btn-primary" href="delete.php?id=<?= $student["id"] ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </div>
          </div>
        <br>
        <?php $i++; ?>
      <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="medsos">
    <div class="container text-center">
      <p>FIND US ON SOCIAL MEDIA!</p>
      <div class="social-icons">
        <a href="https://www.instagram.com/givethryo/"><img src="img/ig.png"></a>
        <a href="https://id.pinterest.com/ohpsy_che/"><img src="img/pin.png"></a>
        <a href="https://twitter.com/chrowteryo"><img src="img/twt.png"></a>
      </div>
    </div>
  </section>

  <section class="foot">
    <img src="img/bwh.png" class="footer-img">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-box">
          <img src="img/logie.png">
          <p>For more info, please contact our social media accounts. We are waiting for your participations!</p>
        </div>
        <div class="col-md-4 footer-box">
          <p><b>CONTACT US</b></p>
          <p>Qay Fantasy World, Ryoality</p>
          <p>+62 34567789274</p>
          <p>jeussynia@gmail.com</p>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    window.addEventListener('scroll', reveal);

    function reveal() {
      var reveals = document.querySelectorAll('.reveal');

      for (var i = 0; i < reveals.length; i++) {
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
          reveals[i].classList.add('active');
        } else {
          reveals[i].classList.remove('active')
        }
      }
    }
  </script>
</body>

</html>