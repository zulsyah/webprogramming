
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TP2543 Web Programming Deliverables</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://raw.githubusercontent.com/thomaspark/bootswatch/v3.3.7/cyborg/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="JZZ.js"></script>
  <script src="JZZ.synth.Tiny.js"></script>
  <script src="JZZ.input.Kbd.js"></script>

  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 35px;}
  .container-fluid {
      padding-top: 50px;
      padding-bottom: 50px;
  }
  .bg {
    background-image: url("spaces.gif");
    background-size: cover;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
  }

  .bg-footer {
    background-image: url("spaces-footer.gif");
    background-size: cover;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
  }
  </style>
<style>
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

  <style>
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook { background: #3B5998; color: white;}
.fa-twitter { background: #55ACEE; color: white;}
.fa-linkedin { background: #007bb5; color: white;}
.fa-youtube { background: #bb0000; color: white;}
.fa-instagram { background: #125688; color: white;}
.fa-snapchat-ghost { background: #fffc00; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; }
.fa-skype { background: #00aff0; color: white;}

</style>

<style>

  canvas {
    border: 1px solid black;
  }
  </style>

<audio autoplay loop><source src="music.mp3"></source></audio>

<marquee behavior="scroll" class="bg" direction="left" style="color:white;">Welcome to the most advance landing page ever in FTSM. Greet yourself with my new song !!!</marquee>
</head>
<body>
  
<!-- header -->
<div class="container-fluid bg text-center" style="color:white;">

  
  <h1 class="margin">TP2543 Web Programming Deliverables</h1>
  <!-- <img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"> -->
  <img src="zul.jpg" width="20%" height="20%" class="img-responsive img-circle margin" style="display:inline">
  <!-- <img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"> -->
  <h2>A166007</h2>
  <h3>Zulfhanizam Amir Syahputra</h3>

  <a href="http://fb.com/zulsyah4" class="fa fa-facebook"></a>
  <a href="http://twitter.com/zulsyah" class="fa fa-twitter"></a>
  <a href="https://www.linkedin.com/in/zulsyah7/" class="fa fa-linkedin"></a>
  <a href="http://youtube.com/zulsyah4" class="fa fa-youtube"></a>
  <a href="http://instagram.com/zulsyah7_" class="fa fa-instagram"></a>
  <a href="https://www.snapchat.com/add/zulsyah7" class="fa fa-snapchat-ghost"></a>
  <h4>.: Bachelor of Computer Science (Honours) :.</h4>
</div>

<!-- nav -->

<button class="open-button" onclick="openForm()">Jom Chat!</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#Laboratory">Laboratory</a></li>
        <li><a data-toggle="tab" href="#Assignment">Assignment</a></li>
        <li><a data-toggle="tab" href="#Project">Project</a></li>
        <li><a data-toggle="tab" href="#Game">Game Ular</a></li>
      
    </ul>
    
    <div class="tab-content">
        <div id="Laboratory" class="tab-pane fade in active">
            <!-- Lab -->
            <div class="container-fluid text-center">            
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Week3Lab: Lab Basic HTML</h3>
                                <p>To create a HTML page about myself.</p>
                                <p>
                                
                                <a href="week3lab" class="btn btn-primary">
                                <span class="glyphicon glyphicon-zoom-in"></span> Open</a>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Week4Lab: Lab HTML Form</h3>
                                <p>To create biodata, login and search form</p>
                                <p>

                                <a href="week4lab/biodata.html" class="btn btn-primary">
                                <span class="glyphicon glyphicon-zoom-in"></span> Biodata Form</a>

                                <a href="week4lab/login.html" class="btn btn-primary">
                                <span class="glyphicon glyphicon-zoom-in"></span> Login Form</a>

                                <a href="week4lab/search.html" class="btn btn-primary">
                                <span class="glyphicon glyphicon-zoom-in"></span> Search Form</a>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Week5Lab: PHP</h3>
                                <p>To create biodata form, edit form and lecturer list</p>
                                <p>

                                <a href="week5lab/bio_form.php" class="btn btn-primary">
                                <span class="glyphicon glyphicon-zoom-in"></span> Biodata Form</a>

                                <a href="week5lab/edit_bio.php" class="btn btn-primary">
                                <span class="glyphicon glyphicon-zoom-in"></span> Edit Form</a>

                                <a href="week5lab/lecturers_list.php" class="btn btn-primary">
                                <span class="glyphicon glyphicon-zoom-in"></span> Lecturer's List Form</a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
        
                <div class="row">
                    <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption">
                          <h3>Week6Lab: PHP MySQL and Session</h3>
                          <p>Make Guestbook system and Biodata form</p>
                          <p>

                            <a href="week6lab/index.php" class="btn btn-primary">
                            <span class="glyphicon glyphicon-zoom-in"></span> Guestbook</a>

                            <a href="week6lab/bio_form.php" class="btn btn-primary">
                            <span class="glyphicon glyphicon-zoom-in"></span> Biodata Form</a>

                          </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption">
                        <h3>Week7Lab: Codeigniter Framework</h3>
                        <p>Make Guestbook system using CodeIgniter</p>
                        <p><a href="week7lab/myguestbook/" class="btn btn-primary">
                        <span class="glyphicon glyphicon-zoom-in"></span> Guestbook</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption">
                        <h3>Week8Lab: CSS</h3>
                        <p>Create Content and Bio Form using Cascading Style Sheets (CSS)</p>
                        <p>

                        <a href="week8lab/content.php" class="btn btn-primary">
                        <span class="glyphicon glyphicon-zoom-in"></span> Content</a>

                        <a href="week8lab/bio_form.php" class="btn btn-primary">
                        <span class="glyphicon glyphicon-zoom-in"></span> Bio Form</a>

                        </p>
                        </div>
                    </div>
                    </div>
                </div><!-- row -->
        
                <div class="row">
            
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <div class="caption">
                        <h3>Week10Lab: JavaScript</h3>
                        <p>Describe the assignment here.</p>
                        <p><a href="#" class="btn btn-default">
                        <span class="glyphicon glyphicon-zoom-in"></span> In Development</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <div class="caption">
                        <h3>Week11Lab: Bootstrap</h3>
                        <p>Describe the assignment here.</p>
                        <p><a href="#" class="btn btn-default">
                        <span class="glyphicon glyphicon-zoom-in"></span> In Development</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <div class="caption">
                        <h3>Week12Lab: JQuery</h3>
                        <p>Describe the assignment here.</p>
                        <p><a href="#" class="btn btn-default">
                        <span class="glyphicon glyphicon-zoom-in"></span> In Development</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <div class="caption">
                        <h3>Week13Lab: Ajax</h3>
                        <p>Describe the assignment here.</p>
                        <p><a href="#" class="btn btn-default">
                        <span class="glyphicon glyphicon-zoom-in"></span> In Development</a></p>
                        </div>
                    </div>
                    </div>
                </div><!-- row -->
            </div>
        </div>
        <div id="Assignment" class="tab-pane fade">
            <!-- Assignment -->
            <div class="container-fluid text-center">                
                <!-- Assignment#1 -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                    <h3>Assignment #1</h3>
                    <p>My task is to create a HTML form for the UKM's Student Web Hosting Registration. This form allows student to register for a web space in the UKM web server</p>
                    <a href="week4lab/a166007.html" class="btn btn-primary">
                        <span class="glyphicon glyphicon-zoom-in"></span> View
                    </a>
                    </div>
                </div>
            
                <!-- Assignment#2 -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                    <h3>Assignment #2</h3>
                    <p>Guestbook System</p>
                    
                          <a href="assignment2/index.php" class="btn btn-primary">
                          <span class="glyphicon glyphicon-zoom-in"></span> Open Guestbook</a>

                    </div>
                </div>
            
                <!-- Assignment#3 -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                    <h3>Assignment #3</h3>
                    <p>Describe the assignment here.</p>
                    <a href="#" class="btn btn-default">
                        <span class="glyphicon glyphicon-zoom-in"></span> In Development
                    </a>
                    </div>
                </div>
            
                <!-- Assignment#2 -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                    <h3>Assignment #4</h3>
                    <p>Describe the assignment here.</p>
                    <a href="#" class="btn btn-default">
                        <span class="glyphicon glyphicon-zoom-in"></span> In Development
                    </a>
                    </div>
                </div>
            
            </div>
        </div>
        <div id="Project" class="tab-pane fade">
            <!-- Project -->
            <div class="container-fluid text-center"> 

                <p class="margin">My project to develop a web-based back office system for a company that sell car's infotainment accessories.</p>
                  <div class="row">

                    <div class="col-sm-3">
                        <div class="thumbnail">
                          <div class="caption">
                            <p><b>Project Task #1</b></p>
                            <p>HTML</p>
                            <p><a href="myPT1" class="btn btn-primary">
                            <span class="glyphicon glyphicon-zoom-in"></span> Open</a></p>
                          </div>
                        </div>
                      </div>

                    <div class="col-sm-3">
                        <div class="thumbnail">
                          <div class="caption">
                            <p><b>Project Task #2</b></p>
                            <p>PHP and Database</p>
                            <p><a href="myPT2" class="btn btn-primary">
                            <span class="glyphicon glyphicon-zoom-in"></span> Open</a></p>
                          </div>
                        </div>
                      </div>

                    <div class="col-sm-3">
                        <div class="thumbnail">
                          <div class="caption">
                            <p><b>Project Task #3</b></p>
                            <p>Javascript and Bootstrap</p>
                            <p><a href="myPT3" class="btn btn-default">
                            <span class="glyphicon glyphicon-zoom-in"></span> In Development</a></p>
                          </div>
                        </div>
                      </div>

                    <div class="col-sm-3">
                        <div class="thumbnail">
                          <div class="caption">
                            <p><b>Project Task</b></p>
                            <p>Final</p>
                            <p><a href="myPT4" class="btn btn-default">
                            <span class="glyphicon glyphicon-zoom-in"></span> In Development</a></p>
                          </div>
                        </div>
                      </div>

                  </div>


            </div>
        </div>

        <div id="Game" class="tab-pane fade">
          <div class="container-fluid text-center"> 
            <h2>Game Ular</h2>
            <h4>Tekan 'Arrow' pada keyboard anda untuk menggerakkan ular sawa dibawah</h4>
            <canvas width="400" height="400" id="game"></canvas>
              <script>
              var canvas = document.getElementById('game');
              var context = canvas.getContext('2d');

              var grid = 16;
              var count = 0;
                
              var snake = {
                x: 160,
                y: 160,
                
                // snake velocity. moves one grid length every frame in either the x or y direction
                dx: grid,
                dy: 0,
                
                // keep track of all grids the snake body occupies
                cells: [],
                
                // length of the snake. grows when eating an apple
                maxCells: 4
              };
              var apple = {
                x: 320,
                y: 320
              };

              // get random whole numbers in a specific range
              // @see https://stackoverflow.com/a/1527820/2124254
              function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min)) + min;
              }

              // game loop
              function loop() {
                requestAnimationFrame(loop);

                // slow game loop to 15 fps instead of 60 (60/15 = 4)
                if (++count < 4) {
                  return;
                }

                count = 0;
                context.clearRect(0,0,canvas.width,canvas.height);

                // move snake by it's velocity
                snake.x += snake.dx;
                snake.y += snake.dy;

                // wrap snake position horizontally on edge of screen
                if (snake.x < 0) {
                  snake.x = canvas.width - grid;
                }
                else if (snake.x >= canvas.width) {
                  snake.x = 0;
                }
                
                // wrap snake position vertically on edge of screen
                if (snake.y < 0) {
                  snake.y = canvas.height - grid;
                }
                else if (snake.y >= canvas.height) {
                  snake.y = 0;
                }

                // keep track of where snake has been. front of the array is always the head
                snake.cells.unshift({x: snake.x, y: snake.y});

                // remove cells as we move away from them
                if (snake.cells.length > snake.maxCells) {
                  snake.cells.pop();
                }

                // draw apple
                context.fillStyle = 'red';
                context.fillRect(apple.x, apple.y, grid-1, grid-1);

                // draw snake one cell at a time
                context.fillStyle = 'green';
                snake.cells.forEach(function(cell, index) {
                  
                  // drawing 1 px smaller than the grid creates a grid effect in the snake body so you can see how long it is
                  context.fillRect(cell.x, cell.y, grid-1, grid-1);  

                  // snake ate apple
                  if (cell.x === apple.x && cell.y === apple.y) {
                    snake.maxCells++;

                    // canvas is 400x400 which is 25x25 grids 
                    apple.x = getRandomInt(0, 25) * grid;
                    apple.y = getRandomInt(0, 25) * grid;
                  }

                  // check collision with all cells after this one (modified bubble sort)
                  for (var i = index + 1; i < snake.cells.length; i++) {
                    
                    // snake occupies same space as a body part. reset game
                    if (cell.x === snake.cells[i].x && cell.y === snake.cells[i].y) {
                      snake.x = 160;
                      snake.y = 160;
                      snake.cells = [];
                      snake.maxCells = 4;
                      snake.dx = grid;
                      snake.dy = 0;

                      apple.x = getRandomInt(0, 25) * grid;
                      apple.y = getRandomInt(0, 25) * grid;
                    }
                  }
                });
              }

              // listen to keyboard events to move the snake
              document.addEventListener('keydown', function(e) {
                // prevent snake from backtracking on itself by checking that it's 
                // not already moving on the same axis (pressing left while moving
                // left won't do anything, and pressing right while moving left
                // shouldn't let you collide with your own body)
                
                // left arrow key
                if (e.which === 37 && snake.dx === 0) {
                  snake.dx = -grid;
                  snake.dy = 0;
                }
                // up arrow key
                else if (e.which === 38 && snake.dy === 0) {
                  snake.dy = -grid;
                  snake.dx = 0;
                }
                // right arrow key
                else if (e.which === 39 && snake.dx === 0) {
                  snake.dx = grid;
                  snake.dy = 0;
                }
                // down arrow key
                else if (e.which === 40 && snake.dy === 0) {
                  snake.dy = grid;
                  snake.dx = 0;
                }
              });

              // start the game
              requestAnimationFrame(loop);
              </script>
      
          <h4>Anda boleh memakan banyak-banyak makanan sehingga ular tersebut boroi</h4>
          </div>
        </div>

        <div id="Piano" class="tab-pane fade">
            <!-- Lab -->
            <div class="container-fluid text-center">
              <h1>Virtual Piano</h1>

              <div id=piano></div>

              <script>
              JZZ.synth.Tiny.register();

              JZZ.input.ASCII({
                A:'F#4', Z:'G4', S:'G#4', X:'A4', D:'Bb4', C:'B4', V:'C5', G:'C#5', B:'D5',
                H:'D#5', N:'E5', M:'F5', K:'F#5', '<':'G5', L:'G#5', '>':'A5', ':':'Bb5'
              }).connect(JZZ.input.Kbd({at:'piano'}).connect(JZZ().openMidiOut()));

              </script>
            </div>
        </div>
    </div>
</div>
 
<!-- Footer -->
<footer class="container-fluid bg-footer text-center" style="color:white;">
  <a href="https://zulsyah7.wixsite.com/mycv" style="color:white;"><p><img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish">  Copyright © AZ Putra 2019 <img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"><img src="zul_pusing.png" alt="Swimming fish"></p></a>
  <h4>Last update : <?php echo date("d-m-Y",time()); ?> on <?php echo date("H:i:s",time()); ?></h4>
  <a href='https://www.free-counters.org/'>powered by Free-Counters</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=e0587b250e3967cf985109a2b405a88efe18fdd4'></script>
  <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/596141/t/6"></script>

</footer>

<style type="text/css">* {cursor: url(http://ani.cursors-4u.net/cursors/cur-13/cur1159.ani), url(http://ani.cursors-4u.net/cursors/cur-13/cur1159.png), auto !important;}</style><a href="http://www.cursors-4u.com/cursor/2018/06/08/hell-yeah-pointer-2.html" target="_blank" title="Hell Yeah Pointer 2"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Hell Yeah Pointer 2" style="position:absolute; top: 0px; right: 0px;" /></a>

</body>
</html>