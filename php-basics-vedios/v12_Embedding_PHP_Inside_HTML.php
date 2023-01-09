<?php
// define variable.
$text = 'Hello Lakshmi';
$date = date('m/d/Y');
$day = date(‘l’);
?>
 {# following line must write after end of php tag. #}<br>
<input type="text" name="name" value="<?php echo $text;?>" ><br>
<input type='text' name='name' value='<?php echo $text;?>' ><br>
<input type='textarea' name='date' value='<?php echo 'Today data is' . $date;?>' >
<textarea id="todaydate" name="todaydate" rows="4" cols="50"><?php echo 'Today data is ' . $date . ' and day is ' . $day;?></textarea>
