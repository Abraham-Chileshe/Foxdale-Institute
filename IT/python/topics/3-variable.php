<section id="variable_section" class="container-xxl">
    <h1>Variables</h1>
    <hr/>
    <div class="row g-4">
                
        <div style="overflow-y: scroll; height:700px;" class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">  
            <div class="container-md"><br/>
                <h3 class="text-primary">What are variables?</h3>
                <p>Variables are Containers for Storing Data</p><br />
                <center><img src="topic_img/variable.png" style="width:400px; max-width:95%"/></center>
                <br /><br />
                <h3 class="text-primary">Creating a variable</h3>
                <p>A variable is created the moment you first assign a value to it. A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume). Rules for Python variables:</p>
                
<pre>           
<code class="language-python">
x = 5
y = &quot;John&quot;
print(x)
print(y)
</code>
</pre>            
                <p><i>Copy this code and run it in the interpreter.</i></p>
                <p>Variables do not need to be declared with any particular type, and can even change type after they have been set.</p>
<pre>
<code class="language-python">
x = 4   
x = &quot;Marco Jay&quot; 
print(x)
</code>
</pre>            

                <h3 class="text-primary">Rules for making variables</h3>
                <ul>
                    <li>A variable name must start with a letter or the underscore characte</li> 
                    <li>A variable name cannot start with a number</li>    
                    <li>A variable cannot contain symbols like (+ - & ^ % $ #) etc</li> 
                    <li>A variable name cannot contain space. you use underscore to connect two words</li>      
                </ul>
                <p><i>Accepted ways of making variables</i></p>
<pre>
<code class="language-python">
myvar = &quot;John&quot;
my_var = &quot;John&quot;
_my_var = &quot;John&quot;
myVar = &quot;John&quot;
MYVAR = &quot;John&quot;
myvar2 = &quot;John&quot;
</code>
</pre>
                <p><i>Illegal ways of making variables</i></p>
<pre>
<code class="language-python">  
2myvar = &quot;John&quot;
my-var = &quot;John&quot;
my var = &quot;John&quot   
</code>
</pre><br/>

                <h3 class="text-primary">Many Values to Multiple Variables</h3>
                <p>Python allows you to assign values to multiple variables in one line.  Make sure the number of variables matches the number of values, or else you will get an error.</p>
<pre>
<code class="language-python">  
x, y, z = &quot;Orange&quot;, &quot;Banana&quot;, &quot;Cherry&quot;
print(x)
print(y)
print(z)
</code>
</pre><br/>

                <h3 class="text-primary">One Value to Multiple Variables</h3>
                <p>And you can assign the same value to multiple variables in one line:</p>
<pre>
<code class="language-python">  
x = y = z = &quot;Orange&quot;
print(x)
print(y)
print(z)
</code>
</pre><br/>

                <h3 class="text-primary">Outputing Variables</h3>
                <p>The Python <code>print()</code> function is often used to output variables. Just place the variable name in between the parentheses and it will be printed to the console you can copy and try the example code below.</p>
<pre>
<code class="language-python">  
x = "Python is awesome"
print(x)
print(5+20)
</code>
</pre><br/>

<iframe width="100%" height="315" src="https://www.youtube.com/embed/cQT33yu9pY8?si=nPcS6LwVt9yIAZSs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


            </div>
        </div>

        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <iframe src="https://trinket.io/embed/python/7e3f290f96?showInstructions=true"  width="100%" height="700" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
        </div>
                   
    </div>
</section>









