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
    <li class="nav-link">
      <a href="#type-casting" onclick="scrollToSection('type-casting')" class="hover:underline">9. Type Casting</a>
    </li>
    <li class="nav-link">
      <a href="#arthmethic-operators" onclick="scrollToSection('arthmethic-operators')" class="hover:underline">10. Arthmethic Operators</a>
    </li>
    <li class="nav-link">
      <a href="#string-functions" onclick="scrollToSection('string-functions')" class="hover:underline">11. String Functions</a>
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

  Resource: $file - can be many things, for example open a file 
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

    <!-- Type Casting -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="type-casting" class="text-2xl font-semibold mb-4">
        <?=
        // This is comment
        '9. Type Casting' ?>
      </h2>
      <p><strong>Implicit Typecasting</strong></p>

      <pre>
&lt;?php   
  $num1 = 1;
  $num2 = 2;
  $num3 = '3';
  $animal = 'monkey';
  $bool1 = true;
  bool2 = false;
  $null = null;
  
  $result = $num1 + $num2; // int 
  $result = $num1 + $num3; // int (str to int conversion)
  $result = $num3 + $num3; // int (str to int conversion)
  $result = $num1 . $num3; // str (int to str conversion)
  $result = $animal . $num1; // Error
  $result = $num1 + $bool1; // int (bool to int, where true is 1)
  $result = $num1 + $bool2; // int (bool to int, where false is 0)
  $result = $num1 + $null; // int (null to int, where null is 0)  
?&gt;
</pre>

      <p><strong>Explicit conversion</strong></p>
      <pre>
&lt;?php
  $num1 = (string) 1; // str (int to str conversion) => '1'
  $num1 = (int) 'Martin'; // str (str to int conversion) => 0
  $num1 = (bool) 1; // int (int to bool conversion) => true
?&gt; 
</pre>
    </div>

    <!-- Arthmethic Operators -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="arthmethic-operators" class="text-2xl font-semibold mb-4">
        <?=
        // This is comment
        '10. Arthmethic Operators' ?>
      </h2>
      <pre>
+ additions
- substraction
* multiplication
/ division
% modulus

&lt;?php
$output = null;

$num1 = 10;
$num2 = 20;

// Basic Math
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// Assigment Oparator
$num3 = 10;
$num3 += 20; // $num3 = $num3 + 20;
$num3 -= 20;
$num3 /= 20;

$output = $num3;

// Build in PHP functions

// rand()- generate random number
$output = rand(); // random number between 0 and max value
$output = getrandmax(); // max value = 2147483647 
$output = rand(1, 10); // random number between 0 and 10, inclusive

// round()- round the number to the whole number
$output = round(1.55);

// ceil()- round the number up
$output = ceil(0.45);

// floor()- round the number down
$output = floor(1.45);

// sqrt()- square root the number
$output = sqrt(4);

// pi()
$output = pi();

// abs() - absolute value
$output = abs(-56);

// max() - max value in the range
$output = max(1, 2, 3, 4); // list of numbers
$output = max([56, 45, 7, 46]); // arrays

// min() - min value in the range
$output = min([1, 5, 7]);

// number_format(float, num of decimals, decimal separator, thousands separator) 
// format a number with grouped thousands
$output = number_format(1234567.191234, 2, '.', '.'); 
?&gt;
</pre>
    </div>

      <!-- String Functions -->
      <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="string-functions" class="text-2xl font-semibold mb-4">
        <?=
        // This is comment
        '11. String Functions' ?>
      </h2>
      <pre>
&lt;?php
$output = null;

$string = "Hello There!";

// string length
$output = strlen($string); // 5

// word count 
$output = str_word_count($string); // 1

// string position
$output = strpos($string, "h"); // 7

// get specific char position
$output = $string[7]; // h

// substring - string, start, length
$output = substr($string, 0, 2); // He

// string replace - old_string, new_string, string
$output = str_replace("There", "World", $string);

// string to lower case
$output = strtolower($string);

// string to upper case
$output = strtoupper($string);

// first letter of each word to upper case
$output = ucwords($string); // H and W

// trim white spaces
$output = trim('    Hi    ');
?&gt;
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