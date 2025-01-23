function foo($a, $b) {
  if ($a === $b) {
    return true; 
  }
  return false; 
}

function bar($a, $b) {
  if ($a == $b) {
    return true; 
  }
  return false; 
}

var_dump(foo(0, '0')); // bool(false)
var_dump(bar(0, '0')); // bool(true)