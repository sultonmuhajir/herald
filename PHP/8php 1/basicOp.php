<?php
/*
|--------------------------------------------------------------------------
| Basic Mathematical Operations
|--------------------------------------------------------------------------
|
*/

function basicOp($op, $val1, $val2)
{
   switch ($op) {
      case '+':
         return $val1 + $val2;
      case '-':
         return $val1 - $val2;
      case '*':
         return $val1 * $val2;
      case '/':
         return $val1 / $val2;
      default:
         return 0;
   }
}


function basicOp($op, $val1, $val2)
{
  return eval("return {$val1}{$op}{$val2};");
}


function basicOp(string $op, int $val1, int $val2)
{
  if ($op == '*') return $val1 * $val2;
  if ($op == '+') return $val1 + $val2;
  if ($op == '-') return $val1 - $val2;
  if ($op == '/') return $val1 / $val2;
}


function basicOp($op, $val1, $val2) {
   return ['+' => $val1 + $val2, '-' => $val1 - $val2, '*' => $val1 * $val2, '/' => $val1 / $val2][$op];
}


print_r(basicOp('+', 4, 7).' ' . 11 . '
');
print_r(basicOp('-', 15, 18).' ' . -3 . '
');
print_r(basicOp('*', 5, 5).' ' . 25 . '
');
print_r(basicOp('/', 49, 7).'  '. 7 . '
');