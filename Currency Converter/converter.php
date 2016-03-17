<!DOCTYPE html>

<html>
    <head>
        <title>Currency Converter in PHP</title>
    </head>
<body bgcolor="orange">
    <form method="post" action="converter.php" align="center"> 
        <b>Enter Amount:</b>
        <input type="text" name="amount" size="10" placeholder="Enter Amount">
        <b>From:</b >
        <select name="from" >
            <option>USD</option>
            <option>GBP</option>
            <option>PKR</option>
            <option>RMB</option>
            <option>MYR</option>
            <option>AED</option>
        </select>
        <b>To:</b >
        <select name="to" >
            <option>USD</option>
            <option>GBP</option>
            <option>PKR</option>
            <option>INR</option>
            <option>MYR</option>
            <option>AED</option>
        </select>
        <input type="submit" name="convert" value="Convert Now!"/>
        
    </form><hr>
    
    <?php
    if(isset($_POST['convert'])){
        $amount=$_POST['amount'];
        $from=$_POST['from'];
        $to=$_POST['to'];
        
        if($from=='USD' AND $to=='PKR'){
            echo "<center><h2>Your Answer is: <b style ='color:maroon;'>";
            echo $amount*101;
            echo " Pakistani Rupees!</b></h2></center>";
        }
        if($from=='USD' AND $to=='INR'){
            echo "<center><h2>Your Answer is: <b style ='color:maroon;'>";
            echo $amount*65;
            echo " Indian Rupees!</b></h2></center>";
        }
        if($from=='USD' AND $to=='AED'){
            echo "<center><h2>Your Answer is: <b style ='color:maroon;'>";
            echo $amount*4;
            echo " UAE Dirham!</b></h2></center>";
        }
        if($from=='USD' AND $to=='GBP'){
            echo "<center><h2>Your Answer is: <b style ='color:maroon;'>";
            echo $amount*0.60;
            echo " British Pound!</b></h2></center>";
        }
        if($from=='USD' AND $to=='MYR'){
            echo "<center><h2>Your Answer is: <b style='color:maroon;'>";
            echo $amount*3.20;
            echo " Malaysian Ringgits!</b></h2></center>";
        }
    }
    ?>
    
</body>
</html>