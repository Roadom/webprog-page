<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('CSS/lightbox.min.css') ?>" rel="stylesheet">
    <script>0</script>
    <title>About me</title>
</head>
<body>

  <!-- ABOUT ME DIV -->
  <div class = "scroll-container">
  <section id="1">
  <div class = "about-me">
    <div class = "about-me-text">
      <h1>about me.</h1>
      <h6>Hello there! I'm Mon David R. Olarte, a 2nd year Computer Science student in Asia Pacific College.</h6> 
      <h6 id="days"></h6>
      <p>Thank you for visiting my website! I hope it looks pleasant in the eyes and will provide you with enough information to know me better! You can connect with me 
        through several medias found at the top.
      </p>
      
      <div id="soundboard">
        <h3 id="sound-desc">Some of the sounds inside my head</h3>
        <span class="reaction-btn" onclick="sound('anita max win')">🧢</span>
        <span class="reaction-btn" onclick="sound('bruh')">😑</span>
        <span class="reaction-btn" onclick="sound('yowai mo')">🤞</span>
        <span class="reaction-btn" onclick="sound('vine boom')">💥</span>
        <span class="reaction-btn" onclick="sound('huh')">🐢</span>
      </div>
      <p style="text-align:center;"><a href="<?= base_url('comments') ?>" style="color:white;">View comments</a></p>
    </div>
    <div class = "about-me-img">
      <img id="me-pic" src='https://i.pinimg.com/736x/28/02/cc/2802cc44b270ba60bb0e8532a5711ae5.jpg'>
    </div>
    
  </div>
  </section>
 
  <!-- INTERESTS CONTENT -->
  <section id="2">
  <div class = "content">
    <h1>Interests</h1>
    <p>To be honest, I don't really have a lot to say about myself but what I do like to talk about are my interests. I am very passionate about my interests because 
      these really are the only things I do when I have free time. I also spend my time with these hobbies to relieve stress from various sources.<p>
  <div class="center-images">
    <a href="#interest-1" style="text-decoration: none;"">
    <div class="interest-pic">
      <img src="<?= base_url('images/gaming.png') ?>">
      <div class="overlay">
        <p class="interest-pic-text">VIDEO GAMES</p>
      </div>
    </div>
    </a>
    <a href="#interest-2" style="text-decoration: none;">
    <div class="interest-pic" style="margin-left: 20px;">
      <img src="<?= base_url('images/shows.png') ?>">
      <div class="overlay">
        <p class="interest-pic-text">TV SHOWS AND MOVIES</p>
      </div>
    </div>
    </a>
    <a href="#interest-3" style="text-decoration: none;"">
    <div class="interest-pic" style="margin-left: 20px;">
      <img src="<?= base_url('images/computer.png') ?>">
      <div class="overlay">
        <p class="interest-pic-text">COMPUTERS</p>
      </div>
    </div>
    </a>
    </div>
  </div>
  </section>
  
<!-- VIDEO GAMES-->
<section id="interest-1">
<div class="interest">
  <h1>VIDEO GAMES</h1>
  <p>From childhood until now, video games have always been by my side. I love spending my time playing video games because it lets me escape our boring reality.
  From indie and casual games to competitive multiplayer games, I have experience playing them all. Hit me up if you recognize these games or if you are interested in
  games of similar genres and maybe we can talk about stuff or even play together!
  </p>

</div>
</section>
<section id="interest-1">
  <div class="interest">
    <h1 style="margin-top: 100px;">Video Games That I Like</h1>
    <div class="gallery">
      <a href="<?= base_url('images/games/elden-ring-thumb.jpg') ?>" data-lightbox="games" data-title="Elden Ring - The game that made me fall in love with the souls-like genre."><img src="<?= base_url('images/games/elden.png') ?>"></a>
      <a href="<?= base_url('images/games/dmc-thumb.jpg') ?>" data-lightbox="games" data-title="Devil May Cry Series - I originally played it for the memes but I stayed for the style-oriented combat."><img src="<?= base_url('images/games/dmc.jpg') ?>"></a>
      <a href="<?= base_url('images/games/genshin-thumb.jpg') ?>" data-lightbox="games" data-title="Genshin Impact - This game made me realize that I can still be more broke than I was before."><img src="<?= base_url('images/games/genshin.jpg') ?>"></a>
      <a href="<?= base_url('images/games/tekken-thumb.jpg') ?>" data-lightbox="games" data-title="Tekken 7 (and 8) - I grew up playing Tekken 3 on our PS1 but I didn't know the fight mechanics were really deep."><img src="<?= base_url('images/games/tekken.jpg') ?>"></a>
      <a href="<?= base_url('images/games/tf2-thumb.jpg') ?>" data-lightbox="games" data-title="Team Fortress 2 - The reason I downloaded Steam. Definitely one of the most fun and casual-friendly multiplayer games until now."><img src="<?= base_url('images/games/tf2.png') ?>"></a>
      <a href="<?= base_url('images/games/ins-thumb.jpg') ?>" data-lightbox="games" data-title="Inscryption - This game proved to me that roguelikes can also have amazing stories."><img src="<?= base_url('images/games/ins.jpg') ?>"></a>
      <a href="<?= base_url('images/games/sekiro-thumb.jpg') ?>" data-lightbox="games" data-title="Sekiro - The most fun and satisfying combat system out of all the games I've played ever. "><img src="<?= base_url('images/games/sekiro.jpg') ?>"></a>
      <a href="<?= base_url('images/games/skyrim-thumb.jpg') ?>" data-lightbox="games" data-title="Skyrim - Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods Mods "><img src="<?= base_url('images/games/skyrim.jpg') ?>"></a>
      <a href="<?= base_url('images/games/lol-thumb.jpg') ?>" data-lightbox="games" data-title="League of legends - The game I have a love-hate relationship with (mainly hate.)"><img src="<?= base_url('images/games/lol.jpg') ?>"></a>
      <a href="<?= base_url('images/games/portal-thumb.jpg') ?>" data-lightbox="games" data-title="Portal - Grabbed the game together with its sequel for less than 100 pesos. Haven't played the 2nd one yet but the first one was a short and bittersweet experience."><img src="<?= base_url('images/games/portal.jpg') ?>"></a>
    </div>
  </div>
</section>
<section id="interest-2">
<div class="interest">
  <h1>TV SHOWS AND MOVIES</h1>
  <p>When I'm not spending my time playing video games, I'm almost guaranteed to be watching TV shows or movies. I've watched a ton of shows and movies and I'm not really picky when choosing
    what to watch (it doesn't matter if it's bad as long as it's entertaining). Here are some of my favorite shows and movies that I've watched!
  </p>
</div>
</section>
<section id="interest-2">
  <div class="interest">
    <h1 style="margin-top: 80px">Shows & Movies that I Enjoyed Watching</h1>
    <div class="gallery">
    <a href="<?= base_url('images/shows/bbad-thumb.jpg') ?>" data-lightbox="shows" data-title="Breaking Bad (+ Better Call Saul) - Watched it before it was cool but still didn't expect it to be that good."><img src="<?= base_url('images/shows/bbad.png') ?>"></a>
    <a href="<?= base_url('images/shows/ingbad-thumb.jpg') ?>" data-lightbox="shows" data-title="Inglourious Basterds - Classic Tarantino movie. Also has one of the most memorable opening scenes."><img src="<?= base_url('images/shows/ingbad.jpg') ?>"></a>
    <a href="<?= base_url('images/shows/rdogs-thumb.jpg') ?>" data-lightbox="shows" data-title="Reservoir Dogs - Another Tarantino movie with an interesting way of storytelling similar to Pulp Fiction."><img src="<?= base_url('images/shows/rdogs.jpg') ?>"></a>
    <a href="<?= base_url('images/shows/boys-thumb.jpg') ?>" data-lightbox="shows" data-title="The Boys - A show that will give you a nice break to the oversaturation of superhero media. The show may be little too graphic for some though."><img src="<?= base_url('images/shows/boys.jpg') ?>"></a>
    <a href="<?= base_url('images/shows/spiderbai-thumb.jpg') ?>" data-lightbox="shows" data-title="Spiderverse - Undoubtedly one of the best animated movies of all time. The characters and story are just as interesting too so it isn't just for show."><img src="<?= base_url('images/shows/spider.png') ?>"></a>
    <a href="<?= base_url('images/shows/jjk-thumb.png') ?>" data-lightbox="shows" data-title="Jujutsu Kaisen - Are you strong because your nah i'd win or did you leave it all behind and his overwhelming intensity and stand proud you're strong because with this treasure I summon always bet on hakari? I'm you.&lt;/p&gt;"><img src="<?= base_url('images/shows/jjk.png') ?>"></a>
    <a href="<?= base_url('images/shows/hxh-thumb.jpg') ?>" data-lightbox="shows" data-title="Hunter x Hunter - One of the best shonens of all time that is currently on a hiatus."><img src="<?= base_url('images/shows/hxh.jpg') ?>"></a>
    <a href="<?= base_url('images/shows/fmab-thumb.jpg') ?>" data-lightbox="shows" data-title="Fullmetal Alchemist: Brotherhood - One of the first animes that I binged because it was so good. I really enjoyed the world building and the development of both major and minor characters."><img src="<?= base_url('images/shows/fmab.jpg') ?>"></a>
    <a href="<?= base_url('images/shows/invincible-thumb.jpg') ?>" data-lightbox="shows" data-title="Invincible - Similar vibe to The Boys but at the same time, very different."><img src="<?= base_url('images/shows/invincible.jpg') ?>"></a>
    <a href="<?= base_url('images/shows/hood-thumb.jpg') ?>" data-lightbox="shows" data-title="Batman: Under the Red Hood - A movie about my favorite comic book character who isn't really popular outside of Batman fans."><img src="<?= base_url('images/shows/hood.png') ?>"></a>
</div>

  </div>
</section>
<section id="interest-3">
<div class="interest">
  <h1>COMPUTERS</h1>
  <p>Well, of course I'm interested in computers! We had a pretty old family computer which I always used to play games even though it was a suboptimal system for that purpose.
    Since it was ancient, it was always breaking down but because of my <del>addiction</del> passion for video games, I learned a lot of ways to fix various problems that our
    computer had. That's when my interest in computers began! 
  </p>
</section> 
</div>
  <script src="<?= base_url('JS/script.js') ?>"></script>
  <script src="<?= base_url('JS/lightbox-plus-jquery.min.js') ?>"></script>
</body>
<script> 
  // Soundboard stuff
function sound(soundName) {
    const soundPaths = {
        'anita max win': '<?= base_url('sounds/anita.mp3') ?>',
        'bruh': '<?= base_url('sounds/bruh.mp3') ?>',
        'yowai mo': '<?= base_url('sounds/yowai.mp3') ?>',
        'vine boom': '<?= base_url('sounds/boom.mp3') ?>',
        'huh': '<?= base_url('sounds/huh.mp3') ?>',
    };    
    const audio = new Audio(soundPaths[soundName]);
    audio.play();
    const soundDesc = document.getElementById('sound-desc');
    soundDesc.textContent = `${soundName}`;
    }
</script>
<?php
date_default_timezone_set('Asia/Manila'); //Default Timezone
$Hour = date('G');
// Greeting Arrays
$morningGreetings = ['Good morning', 'Hello, had your coffee yet?', 'Top of the mornin\'!'];
$afternoonGreetings = ['Good afternoon', 'Good afternoon to you!', 'Good afternoon, how was your day?'];
$eveningGreetings = ['Good evening', 'zZzZZZZZ...', 'Good evening...'];
//Picks a random greeting
function getRandomGreeting($greetingArray) {
    return $greetingArray[array_rand($greetingArray)];
}
if ($Hour >= 0 && $Hour <= 11) {
    $greeting = getRandomGreeting($morningGreetings);
} else if ($Hour >= 12 && $Hour < 18) {
    $greeting = getRandomGreeting($afternoonGreetings);
} else {
    $greeting = getRandomGreeting($eveningGreetings);
}


echo "<script>";
echo "var greeting = '$greeting';";
echo "alert(greeting);";
echo "</script>";
?>
</html>