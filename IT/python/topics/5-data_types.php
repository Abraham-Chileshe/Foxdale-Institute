<section id="data_types_section" class="container-xxl">
    <h1>Data Types</h1>
    <hr/>
    <div class="row g-4">
                
        <div style="overflow-y: scroll; height:700px;" class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">  
            <div class="container-md"><br/>
                <h3 class="text-primary">What is Python</h3>
                <p>In programming, data type is an important concept. In the previous lesson, we looked at how to create a variable and also assign a value to this variable such as a number or a word (text)</p>
                <p>In software programming, data type refers to the type of value a variable has and what type of mathematical, relational or logical operations can be applied without causing an error. </p>
                <h4 style="font-family:arial">myVar = <span style="color:rgb(251,146,59)">Value</span></h4><br />
                <p> From the illustration above, you can see that we have declared a variable called myVar. This variable can have different values for example <em>myVar</em> = 15 or <em>myVar</em> = "Dana".
                <p> Both the number <b>15</b> and the name <b>Dana</b> have different data types. for example 15 is number thus its datatype is <i>integer</i> while <b>Dana</b> is of data type String since it is a text.</p>
                <br />
                <center><img src="topic_img/data_types.png" style="width:400px; max-width:95%"/></center>
                <br /><br />
                <h3 class="text-primary">Getting the Data Type</h3>
                <p>You can get the data type of any object by using the <code>type()</code> function:</p>
<pre>           
<code class="language-python">
x = 12
y = "Dana"
z = False
w = 0.9

print(type(x))
print(type(y))
print(type(z))
print(type(w))

</code>
</pre><br />

            <h3 class="text-primary">Output</h3>
<pre>
<code>
&lt;class &#39;int&#39;&gt; # int is short for integer
&lt;class &#39;str&#39;&gt; # str is short for String
&lt;class &#39;bool&#39;&gt;# bool is short for bolean
&lt;class &#39;float&#39;&gt; # Float is a data type for decimal numbers
</code>
</pre>
            </div>
        </div>

        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <iframe src="https://trinket.io/embed/python/f87a1bb54c" width="100%" height="700" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
        </div>
                   
    </div>
</section>