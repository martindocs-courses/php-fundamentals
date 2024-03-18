<?php

// PRACTICE 1
$numbers = [1, 2, 3, 4, 5];
$amount = count($numbers);
$sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];
echo 'The sum of the ' . $amount . ' numbers is ' . $sum . '<br />';

// PRACTICE 2
$colors = ['yellow', 'green', 'blue', 'red'];

// reverse array
array_reverse($colors);

// add
array_push($colors, 'purple', 'orange');

// add in 2 position
array_splice($colors, 1, 0, 'pink');

// remove last element 
array_pop($colors);

echo 'Reversed colors: ' . '<pre>' . print_r($colors, true) . '</pre>';

// PRACTICE 3
$jobs = [
  [
    'id' => 1,
    'job_title' => 'Web Developer',
    'company' => 'Google',
    'contact_email' => 'google@gmail.com',
    'contact_phone' => '12345',
    'skills' => ['JavaScript', 'HTML', 'CSS']
  ],
  [
    'id' => 2,
    'job_title' => 'Full Stack Engineer',
    'company' => 'Amazon',
    'contact_email' => 'google@gmail.com',
    'contact_phone' => '12345',
    'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
  ],
  [
    'id' => 3,
    'job_title' => 'UX Designer',
    'company' => 'Google',
    'contact_email' => 'google@gmail.com',
    'contact_phone' => '12345',
    'skills' => ['Photoshop', 'Wireframing', 'Prototyping']
  ],
];

$jobs[] = [
  'id' => 4,
  'job_title' => 'Full Stack Engineer',
  'company' => 'Amazon',
  'contact_email' => 'amazon@gmail.com',
  'contact_phone' => '12345',
  'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
];


echo 'Jobs: ' . '<pre>' . print_r($jobs, true) . '</pre>';

// job title of snd job
echo 'Jobs title: ' . $jobs[1]['job_title'];

// first skill of third job
echo '<br /> Skill: ' . $jobs[2]['skills'][0];
