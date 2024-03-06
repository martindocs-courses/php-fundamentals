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
    <div class="container mx-auto p-4 mt-4">
      <!-- Print to HTML -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= 'Print text to HTML' ?></h2>
<pre>
&lt;?php echo 'Text'; ?&gt;
&lt;?= 'Shorthand to write one liner'; ?&gt;
</pre>
      </div>

      <!-- Parsing HTML tag -->
      <div class="bg-white rounded-lg shadow-md p-6 mt-5">
            <h2 class="text-2xl font-semibold mb-4">Parsing HTML tags in PHP</h2>
<pre>
&lt;?php echo '&lt;p>This is the tag parsed &lt;/p&gt;'; ?&gt;
</pre>
           
      </div>

      <!-- Print indead of ECHO -->
      <div class="bg-white rounded-lg shadow-md p-6 mt-5">
            <h2 class="text-2xl font-semibold mb-4"><?php print 'Print text with PRINT' ?></h2>
<pre>
&lt;?php print 'text'; ?&gt;

&lt;?php echo 'You can echo', 'file in multiple var', 'but not with PRINT'; ?&gt;
</pre>
           
      </div>

      <!-- PHP Comments -->
      <div class="bg-white rounded-lg shadow-md p-6 mt-5">
            <h2 class="text-2xl font-semibold mb-4">
              <?= 
                // This is comment
                'PHP Comments' ?>
            </h2>
<pre>
&lt;?
// comment in PHP

/**
 multiple comments
*/
php echo 'Text'; ?&gt;

</pre>
      </div>
     
      <!-- PHP without HTML -->
      <div class="bg-white rounded-lg shadow-md p-6 mt-5">
            <h2 class="text-2xl font-semibold mb-4">PHP without HTML can omit closing bracket ?></h2>
<pre>
&lt;?php echo 'Text'

</pre>
      </div>

    </div>
</body>

</html>
