<?php
 
    // this is an array of known callers
    $people = array(
        "+13059672836"=>"Jessica",
        "+13059672559"=>"Elisa",
        "+13057611424"=>"Dad",
        "+13057255636"=>"Mom"
    );
     
    // if the caller is in the array, then greet them by name. if not call them "caller"
   
    if(!$name = $people[$_REQUEST['From']])
        $name = "Caller";
         
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Check out my technology <?php echo $name ?>.</Say>
    <Play>http://sugarcoder.com/rickroll.mp3</Play>
</Response>
