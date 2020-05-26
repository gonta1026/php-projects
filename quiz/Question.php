<?php

namespace MyApp;

class Question
{
  static public function getQuestion()
  {
     return [
      [
        'q' => 'What is A?',
        'a' => ['A0', 'A1', 'A2', 'A3']
      ],
      [
        'q' => 'What is B?',
        'a' => ['B0', 'B1', 'B2', 'B3']
      ],
      [
        'q' => 'What is C?',
        'a' => ['C0', 'C1', 'C2', 'C3']
      ]
    ];
  }
}

// $question01 = 
// $question02 = 
// $question03 = [
// 'q' => 'What is C?',
// 'a' => ['C0', 'C1', 'C2', 'C3']
// ];

$questions = [
  [
    'q' => 'What is A?',
    'a' => ['A0', 'A1', 'A2', 'A3']
  ],
  [
    'q' => 'What is B?',
    'a' => ['B0', 'B1', 'B2', 'B3']
  ],
  [
    'q' => 'What is C?',
    'a' => ['C0', 'C1', 'C2', 'C3']
  ]
];
// ];
// $box = [];
// foreach ($questions as $value) {
//   array_push($box, $value);
//   var_export($box);
//   echo "<br />";
// }

// $nums = [1,2,3];
?>