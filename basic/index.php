<?php
$title = 'Variables';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP Basic</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold"><?php echo 'PHP Basics'; ?></h1>
    </div>
  </header>

  <ul class="p-4 mx-auto max-w-2xl">
    <li class="nav-link">
      <a href="#print-text-to-html" onclick="scrollToSection('print-text-to-html')" class="hover:underline"> 1. Print text to HTML</a>
    </li>
    <li class="nav-link">
      <a href="#print-text-to-html" onclick="scrollToSection('parsing-html-tags')" class="hover:underline">2. Parsing HTML tags in PHP</a>
    </li>
    <li class="nav-link">
      <a href="#print-text-with-print" onclick="scrollToSection('print-text-with-print')" class="hover:underline">3. Print text with PRINT</a>
    </li>
    <li class="nav-link">
      <a href="#php-comments" onclick="scrollToSection('php-comments')" class="hover:underline">4. PHP Comments</a>
    </li>
    <li class="nav-link">
      <a href="#php-without-html" onclick="scrollToSection('php-without-html')" class="hover:underline">5. PHP without HTML can omit closing bracket</a>
    </li>
    <li class="nav-link">
      <a href="#variables" onclick="scrollToSection('variables')" class="hover:underline">6. Variables</a>
    </li>
    <li class="nav-link">
      <a href="#data-types" onclick="scrollToSection('data-types')" class="hover:underline">7. Data Types</a>
    </li>
    <li class="nav-link">
      <a href="#string-concatenation" onclick="scrollToSection('string-concatenation')" class="hover:underline">8. String Concatenation</a>
    </li>
  </ul>

  <div class="container mx-auto p-4 mt-4">
    <!-- Print to HTML -->
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 id="print-text-to-html" class="text-2xl font-semibold mb-4"><?= '1. Print text to HTML' ?></h2>
      <pre>
&lt;?php echo 'Text'; ?&gt;
&lt;?= 'Shorthand to write one liner'; ?&gt;
</pre>
    </div>

    <!-- Parsing HTML tag -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="parsing-html-tags" class="text-2xl font-semibold mb-4">2. Parsing HTML tags in PHP</h2>
      <pre>
&lt;?php echo '&lt;p>This is the tag parsed &lt;/p&gt;'; ?&gt;
</pre>

    </div>

    <!-- Print indead of ECHO -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="print-text-with-print" class="text-2xl font-semibold mb-4"><?php print '3. Print text with PRINT' ?></h2>
      <pre>
&lt;?php print 'text'; ?&gt;

&lt;?php echo 'You can echo', 'file in multiple var', 'but not with PRINT'; ?&gt;
</pre>

    </div>

    <!-- PHP Comments -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="php-comments" class="text-2xl font-semibold mb-4">
        <?=
        // This is comment
        '4. PHP Comments' ?>
      </h2>
      <pre>
&lt;?php
// comment in PHP

/**
 multiple comments
*/
echo 'Text'; ?&gt;

</pre>
    </div>

    <!-- PHP without HTML -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="php-without-html" class="text-2xl font-semibold mb-4">5. PHP without HTML can omit closing bracket ?></h2>
      <pre>
&lt;?php echo 'Text'

</pre>
    </div>

    <!-- PHP Variables -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="variables" class="text-2xl font-semibold mb-4">6. <?= $title ?></h2>
      <pre>
* prefix with a dollar sign $
* must start with letter or underscore
* can not start with a number
* can contain only letters, numbers and underscores
* are case sensitive
</pre>
    </div>

    <!-- PHP Data Types -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="data-types" class="text-2xl font-semibold mb-4">7. Data Types</h2>
      <pre>
  String: $name = 'Martin';
  var_dump($name); -> string(6) - give info about variable and length
  echo getType($name); -> string - info about type
  
  Integer: $age = 35;
  var_dump($age); -> int(35)
  
  Float: $value = 1.23;
  var_dump($value); -> float(1.23)
  
  Boolean: $isLoading = false;
  var_dump($isLoading); -> bool(false)
  
  Array: $data = [1, 2, 3, 4, 5];
  var_dump($data); -> 
    array(5) { 
      [0]=> int(1) 
      [1]=> int(2) 
      [2]=> int(3) 
      [3]=> int(4) 
      [4]=> int(5) 
    }
  
  Object: $user = new stdClass();
  var_dump($user); -> object(stdClass)#1 (0) { }
  
  Null: $food = null;
  var_dump($food); -> NULL

  Resource: $file - cab be many things, for example open a file 
  var_dump($file); -> resource(3) of type (stream) 

</pre>
    </div>

    <!-- String Concatenation -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="string-concatenation" class="text-2xl font-semibold mb-4">
        <?=
        // This is comment
        '8. String Concatenation' ?>
      </h2>
      <pre>
&lt;?php   
  $name = 'Martin';
  $lname = 'NoName';
?&gt;
&lt;?= 'Hello my name is ' . $name . ' ' . $lname ?&gt; - literal string which is faster
&lt;?= "Hello my name is $name $lname" ?&gt; - variable interpolation
&lt;?= 'Hello my name is \'Martin\'' ?&gt; - escape char
</pre>
    </div>

  </div>

  <script>
    function scrollToSection(sectionId) {
      const targetSection = document.getElementById(sectionId);

      // Scroll to the target section smoothly
      window.scrollTo({
        top: targetSection.offsetTop - document.querySelector('header').offsetHeight,
        behavior: 'smooth'
      });

      // Highlight the h2 tag      
      targetSection.style.backgroundColor = 'yellow';

      // Remove highlighting from other sections
      const allSections = document.querySelectorAll('h2');

      allSections.forEach(function(section) {
        if (section.id !== sectionId) {
          section.style.backgroundColor = ''; // Reset other sections
        }
      });
    }
  </script>
</body>

</html>