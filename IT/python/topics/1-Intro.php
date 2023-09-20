
<section id="intro_section" class="container-xxl">
<style>
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>



    <h1>Introduction</h1>
    <hr/>
    <div class="row g-4">
                
        <div style="overflow-y: scroll; height:800px;" class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">  
            <div class="container-md"><br/>
                <h3 class="text-primary">What is Python</h3>
                <p>Python is a computer programming language often used to build websites and software, automate tasks, and analyze data. Python is a <span class="text-primary">high level language</span> meaning its easy for humans to understand</p>
                <p>It is used for:</p>
                
                <ul>
                    <li> web development (server-side)</li>
                    <li>software development</li>
                    <li>mathematics</li>
                    <li>system scripting</li>
                </ul><br />


                <h3 class="text-primary">Why Python?</h3>
                <ul>
                    <li>Python works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).</li>
                    <li>Python has a simple syntax similar to the English language.</li>
                    <li>Python runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.</li>
                    <li>Python can be treated in a procedural way, an object-oriented way or a functional way.</li>
                </ul><br />


                <h3 class="text-primary">Why not another language</h3>
                <ul>    
                    <li>Python was designed for readability, and has some similarities to the English language with influence from mathematics.</li>
                    <li>Python uses new lines to complete a command, as opposed to other programming languages which often use semicolons or parentheses.</li>
                    <li>Python relies on indentation, using whitespace, to define scope; such as the scope of loops, functions and classes. Other programming languages often use curly-brackets for this purpose.</li>
                </ul><br />


                <h3 class="text-primary">Examples of project in python</h3><br />
          
                <center><img id="myImg" src="topic_img/calc.gif" alt="Snow" style="width:100%;max-width:600px"></center>
                
                <div id="myModalss" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01" src="topic_img/calc.gif">
                    <div id="caption"></div>
                </div>
                <br/><br />

                <h3 class="text-primary">Try this code</h3>
                
                <p>Copy and paste it in the IDE on your left/below you.
                <hr/><br />
                
                <pre>
                  <code class="language-python">
                  import turtle
                  import random

                  x = 1
                  SN = turtle.Screen()
                  a = turtle.Turtle()
                  a.speed(100)

                  i = 0
                  while x &lt; 256:
                  r = random.randint(0,255)
                  g = 100
                  b = 150

                  a.pencolor(i,g,b)
                  if x &lt;252:
                  a.pensize(1)
                  a.forward(50 + x)
                  a.right(91.5)

                  x = x +1
                  i = (i+1)%255

                  turtle.done()

                  </code>
                </pre>
            </div>
        </div>

        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <iframe src="https://trinket.io/embed/python/90a153ef79?runOption=run&start=result" width="100%" height="800" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
        </div>
                   

        <script>
            // Get the modal
            var modal = document.getElementById("myModalss");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("myImg");
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
            modal.style.display = "none";
            }
        </script>
    </div>
</section>









