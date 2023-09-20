<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $dots = "../../";
        include "../../inc/vital_functions.php";
        headloc($dots);
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
   
   $(document).ready(function () {
    // Hide all sections except the intro_section initially
    $('#lesson section:not(#intro_section)').hide();

    // Function to show a specific section and hide others
    function showSection(sectionId) {
        $('#lesson section').hide();
        $(sectionId).show();
    }

    // Create a MutationObserver to observe changes in the lesson div
    const lessonObserver = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            if (mutation.addedNodes.length > 0) {
                // New content added, hide all sections except the intro_section
                showSection('#intro_section');
            }
        });
    });

    // Start observing the lesson div for changes
    lessonObserver.observe($('#lesson')[0], { childList: true });

    // Event handlers for each lesson button
    $("#Intro").click(function () {
        showSection('#intro_section');
    });

    $("#Install-btn").click(function () {
        showSection('#install_section');
    });

    $("#variable-btn").click(function () {
        showSection('#variable_section');
    });

    $("#comment-btn").click(function () {
        showSection('#comment_section');
    });

    $("#data-types-btn").click(function () {
        showSection('#data_types_section');
    });

    $("#Numbers-btn").click(function () {
        showSection('#Numbers_section');
    });

    $("#Casting-btn").click(function () {
        showSection('#Casting_section');
    });

    $("#String-btn").click(function () {
        showSection('#String_section');
    });

    $("#Boolean-btn").click(function () {
        showSection('#Boolean_section');
    });

    $("#Operators-btn").click(function () {
        showSection('#Operators_section');
    });

    $("#User-input-btn").click(function () {
        showSection('#User-input_section');
    });

    $("#If-statements-btn").click(function () {
        showSection('#If-statements_section');
    });

    $("#Functions-btn").click(function () {
        showSection('#Functions_section');
    });

    $("#Loops-btn").click(function () {
        showSection('#Loops_section');
    });

    $("#Try_except-btn").click(function () {
        showSection('#Try_except_section');
    });

    $("#Lists-btn").click(function () {
        showSection('#Lists_section');
    });

    $("#Sets-btn").click(function () {
        showSection('#Sets_section');
    });

    $("#Tuple-btn").click(function () {
        showSection('#Tuple_section');
    });

    $("#Dictionary-btn").click(function () {
        showSection('#Dictionary_section');
    });

    $("#Lambda-btn").click(function () {
        showSection('#Lambda_section');
    });

    $("#Arrays-btn").click(function () {
        showSection('#Arrays_section');
    });

    $("#Classes-btn").click(function () {
        showSection('#Classes_section');
    });

    $("#Inheritance-btn").click(function () {
        showSection('#Inheritance_section');
    });

    $("#Iterators-btn").click(function () {
        showSection('#Iterators_section');
    });

    $("#Polymorphism-btn").click(function () {
        showSection('#Polymorphism_section');
    });



    // Add more event handlers for other buttons as needed
});
</script>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

       <?php
            navbar($dots);
        ?>


        <!-- Page Header End -->
        <div class="container-xxl py-1 bg-dark position-relative mb-5">
            <div class="container py-1">       
            <nav class="container-md mt-5" aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" id="Intro">Intro</a></li>
                <li class="breadcrumb-item"><a href="#" id="Install-btn">Install</a></li>
                <li class="breadcrumb-item"><a href="#" id="variable-btn">Variables</a></li>
                <li class="breadcrumb-item"><a href="#" id="comment-btn">Comments</a></li>
                <li class="breadcrumb-item"><a href="#" id="data-types-btn">Data Types</a></li>
                <li class="breadcrumb-item"><a href="#" id="Numbers-btn">Numbers</a></li>
                <li class="breadcrumb-item"><a href="#" id="Casting-btn">Casting</a></li>
                <li class="breadcrumb-item"><a href="#" id="String-btn">Strings</a></li>
                <li class="breadcrumb-item"><a href="#" id="Boolean-btn">Boolean</a></li>
                <li class="breadcrumb-item"><a href="#" id="Operators-btn">Operators</a></li>
                <li class="breadcrumb-item"><a href="#" id="User-input-btn">User Input</a></li>
                <li class="breadcrumb-item"><a href="#" id="If-statements-btn">If Statements</a></li>
                <li class="breadcrumb-item"><a href="#" id="Functions-btn">Functions</a></li>
                <li class="breadcrumb-item"><a href="#" id="Loops-btn">Loops</a></li>
                <li class="breadcrumb-item"><a href="#" id="Try_except-btn">Try..except</a></li>
                <li class="breadcrumb-item"><a href="#" id="Lists-btn">Lists</a></li>
                <li class="breadcrumb-item"><a href="#" id="Sets-btn">Sets</a></li>
                <li class="breadcrumb-item"><a href="#" id="Tuple-btn">Tuple</a></li>
                <li class="breadcrumb-item"><a href="#" id="Dictionary-btn">Dictionaries</a></li>
                <li class="breadcrumb-item"><a href="#" id="Lambda-btn">Lambda</a></li>
                <li class="breadcrumb-item"><a href="#" id="Arrays-btn">Arrays</a></li>
                <li class="breadcrumb-item"><a href="#" id="Classes-btn">Classes</a></li>
                <li class="breadcrumb-item"><a href="#" id="Inheritance-btn">Inheritance</a></li>
                <li class="breadcrumb-item"><a href="#" id="Iterators-btn">Iterators</a></li>
                <li class="breadcrumb-item"><a href="#" id="Polymorphism-btn">Polymorphism</a></li>
            </ol>

            <a class="breadcrumb-item text-white active" href="../index.php">Go Back</a>
        </nav>    
        </div>
        </div>
        <!-- Page Header End -->
        
        <div class="container-md">
        <section id="lesson">
        <?php
            require("topics/1-Intro.php");
            require("topics/2-install.php");
            require("topics/3-variable.php");
            require("topics/4-comments.php");
            require("topics/5-data_types.php");
            require("topics/6-Numbers.php");
            require("topics/7-Casting.php");
            require("topics/8-String.php");
            require("topics/9-Boolean.php");
            require("topics/10-Operators.php");
            require("topics/11-User-input.php");
            require("topics/12-If-statements.php");
            require("topics/13-Functions.php");
            require("topics/14-Loops.php");
            require("topics/15-Try_except.php");
            require("topics/16-Lists.php");
            require("topics/17-Sets.php");
            require("topics/18-Tuple.php");
            require("topics/19-Dictionary.php");
            require("topics/20-Lambda.php");
            require("topics/21-Arrays.php");
            require("topics/22-Classes.php");
            require("topics/23-Inheritance.php");
            require("topics/24-Iterators.php");
            require("topics/25-Polymorphism.php");

        ?>
        </section>
    </div>


        <div style="bg-dark margin-top:5em" class="mb-5">
        </div>
        




        

    <?php 
        
        script_link($dots);
    ?>
    
</body>

</html>