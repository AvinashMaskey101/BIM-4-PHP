<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['date1']) && !empty($_POST['date1']) && trim($_POST['date1']) != '') {
        $date1 = $_POST['date1'];
    } else {
        echo 'Enter first date';
    }
    if (isset($_POST['date2']) && !empty($_POST['date2']) && trim($_POST['date2']) != '') {
        $date2 = $_POST['date2'];
    } else {
        echo 'Enter second date';
    }
    if (isset($date1) && isset($date2)) {
        $d1 = strtotime($date1);
        $d2 = strtotime($date2);
        function diff_date($date1, $date2)
        {
            $diff = abs($date1 - $date2);
            $days = intval($diff / (24 * 60 * 60));
            $years = intval($days / 365);
            $days = $days % 365;
            $months = intval($days / 30);
            $days = $days % 30;
            echo 'Difference between two dates is: ' . $years . ' years ' . $months . ' months ' . $days . ' days';
        }
        diff_date($d1, $d2);
    }
}

?>

<body>
    <form action="" method="post">
        <label>Date1:</label>
        <input type="text" name="date1" placeholder="yyyy/mm/dd" /> <br><br>
        <label>Date2:</label>
        <input type="text" name="date2" placeholder="yyyy/mm/dd" /> <br><br>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>