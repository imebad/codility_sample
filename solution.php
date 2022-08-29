// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0

  $selected = 0;
  $last_digit = 0;
  $arr_count = count($A);
  for($counter=0; $counter < count($A); $counter++){
    if(!in_array($counter+1, $A) ){
        $selected = $counter+1;
          break;
      }else{
        $last_digit = $counter;
      }
  }
  if($selected == 0){
    $selected = $last_digit+2;
  }

  return $selected;
}
