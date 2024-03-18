<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP Arrays & Loops</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Arrays & Loops</h1>
    </div>
  </header>

  <ul class="p-4 mx-auto max-w-2xl">
    <li class="nav-link">
      <a href="#declare-arrays" onclick="scrollToSection('declare-arrays')" class="hover:underline"> 1. Declare Arrays</a>
    </li>   
    <li class="nav-link">
      <a href="#display-whole-array" onclick="scrollToSection('display-whole-array')" class="hover:underline"> 2. Display whole Array</a>
    </li>   
    <li class="nav-link">
      <a href="#display-single-value" onclick="scrollToSection('display-single-value')" class="hover:underline"> 3. Display Single Array Value</a>
    </li>   
    <li class="nav-link">
      <a href="#add-to-array" onclick="scrollToSection('add-to-array')" class="hover:underline"> 4. Add to Array</a>
    </li>   
    <li class="nav-link">
      <a href="#updating-values" onclick="scrollToSection('updating-values')" class="hover:underline"> 5. Updating values</a>
    </li>   
    <li class="nav-link">
      <a href="#removing-values" onclick="scrollToSection('removing-values')" class="hover:underline"> 6. Removing values</a>
    </li>   
    <li class="nav-link">
      <a href="#arrays-functions" onclick="scrollToSection('arrays-functions')" class="hover:underline"> 7. Arrays Functions</a>
    </li>   
  </ul>

  <div class="container mx-auto p-4 mt-4">
    
  <!-- Declare Arrays -->
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 id="declare-arrays" class="text-2xl font-semibold mb-4">1. Declare Arrays</h2>
      <pre>
&lt;?php 
  // two ways to declare array
  $foods = array('apple', 'orange', 'grapefruit');
  $foods = ['apple', 'orange', 'grapefruit'];
?&gt;
</pre>
    </div>    

  <!-- Display Whole Array -->
  <div class="bg-white rounded-lg shadow-md p-6 mt-5">
      <h2 id="display-whole-array" class="text-2xl font-semibold mb-4">2. Display Whole Array</h2>
      <pre>
&lt;?php 
$output = null;

// Create an Array
$num = [5, 2, 3, 4];

// display info about array, method1 
echo '&lt;pre&gt;' . print_r($num, true) . '&lt;/pre&gt;';

/*
  Array
  (
      [0] => 5
      [1] => 2
      [2] => 3
      [3] => 4
  )

*/

// display info about array, method2
echo '&lt;pre&gt;' . var_export($num, true) . '&lt;/pre&gt;';

/*
  array (
    0 => 5,
    1 => 2,
    2 => 3,
    3 => 4,
  )
 */

// create function
function inspectValue($value){
  echo '&lt;pre&gt;';
  var_dump($value);
  '&lt;/pre&gt;';

  // equivalent to exit code, removes anything below
  die();
}

// invoke function
// inspectValue($num);
?&gt;
</pre>
    </div>   

  <!-- Display Single Array Value -->
  <div class="bg-white rounded-lg shadow-md p-6  mt-5">
      <h2 id="display-single-value" class="text-2xl font-semibold mb-4">3. Display Single Array Value</h2>
      <pre>
&lt;?= $output = $num[0] ?&gt;
</pre>
    </div>  

  <!-- Add values to Array -->
  <div class="bg-white rounded-lg shadow-md p-6  mt-5">
      <h2 id="add-to-array" class="text-2xl font-semibold mb-4">4. Add to Array</h2>
      <pre>
&lt;?php 

// add to the end of the Array
$num[] = 5;

?&gt;
</pre>
    </div> 

  <!-- Updating values -->
  <div class="bg-white rounded-lg shadow-md p-6  mt-5">
      <h2 id="updating-values" class="text-2xl font-semibold mb-4">5. Updating values</h2>
      <pre>
&lt;?= $num[3] = 5 ?&gt;

</pre>
    </div> 
  
  <!-- Removing values -->
  <div class="bg-white rounded-lg shadow-md p-6  mt-5">
      <h2 id="removing-values" class="text-2xl font-semibold mb-4">6. Removing values</h2>
      <pre>
&lt;?php
// removes index and value from array
unset($num[0]);

/*
 array(3) {
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
}
 */

// re-indexing the array
$num = array_values($num);

/*
 array(3) {
  [0]=>
  int(2)
  [1]=>
  int(3)
  [2]=>
  int(4)
  }   
 */
?&gt;

</pre>
    </div> 

  <!-- Arrays Functions -->
  <div class="bg-white rounded-lg shadow-md p-6  mt-5">
      <h2 id="arrays-functions" class="text-2xl font-semibold mb-4">7. Arrays Functions</h2>
      <pre>
&lt;?php
$output = null;

$ids = [34, 12, 42, 4];
$users = ['user1', 'user2', 'user3'];

// count(), return numbers of items in an array
$output = count($ids); 

// sort(), manipilate the array without returning 
sort($ids);

// rsort(), reverse sort without returning 
rsort($ids);

// array_push(), add value on the end of the array without returning
array_push($ids, 66);

// remove last element from the end of the array without returning
array_pop($ids);

// shift/remove from the beginning of the array without returning
array_shift($ids);

// add to the beginning of the array without returning
array_unshift($ids, 100);

// function returns part of the array as new array
$ids2 = array_slice($ids, 0, 2);
var_dump($ids2);

// modify orginal array and replace/removes with new array, no returning
// array_splice($ids, 0, 2); // removes
array_splice($ids, 0, 1, 101); // replace

// return values. Similar to javascript reduce function
$ids3 = '<p>Sum of id\'s: ' . array_sum($ids) . '</p>';
echo $ids3;

// returns searched array for given value
$user2 = '<p>User2 is at index ' . array_search('user2', $users) . '</p>';
echo $user2;

// check if value exist in the array
$user1 = '<p>User1 is array: ' . in_array('user1', $users) . '</p>';
echo $user1;
// var_dump(in_array('user1', $users)); // bool (true)

// turn array into string 
$ids4 = implode(' - ', $ids);
echo $ids4 . '<br />';

// turn string into array
$some_arry = 'item1,item2,item3,item4';
$ids5 = explode(',', $some_arry);
var_dump($ids5);
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