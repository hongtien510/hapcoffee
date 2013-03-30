

<?php
include('libs/db_connect.php'); 
	$config['weburl'] = "";
	// $config['weburl'] = "http://localhost/HoangAnhPhatCoffee";
	$today            =    'Hôm nay';
    $yesterday        =    'Hôm qua';
    $x_month        =    'Tháng này';
    $x_week            =    'Tuần này';
    $all            =    'Tất cả'; 
    
    $locktime        =  15; // thoi gian cua session
    $initialvalue    =    1;
    $records        =    100000;
    
    $s_today        =    1;
    $s_yesterday    =    1;
    $s_all            =    1;
    $s_week            =    0;
    $s_month        =    0;
    
    $s_digit        =    0; //hien so nguoi online la chu hay hinh anh
    $disp_type        =     'bluesky';
    
    $widthtable        =    '60';
    $pretext        =     '';
    $posttext        =     '';
    $locktime        =    $locktime * 60;

    $day             =    date('d');
    $month             =    date('n');
    $year             =    date('Y');
    $daystart         =    mktime(0,0,0,$month,$day,$year);
    $monthstart         =  mktime(0,0,0,$month,1,$year);

    $weekday         =    date('w');
    $weekday--;
    if ($weekday < 0)    $weekday = 7;
    $weekday         =    $weekday * 24*60*60;
    $weekstart         =    $daystart - $weekday;

    $yesterdaystart     =    $daystart - (24*60*60);
    $now             =    time();
    $ip                 =    $_SERVER['REMOTE_ADDR'];
	
    $sql             =    "SELECT MAX(id) AS total FROM counter";
	$query=mysql_query($sql);	
    $t = mysql_fetch_assoc($query);
    $all_visitors     =    $t['total'];
	
  
		
    if ($all_visitors !== NULL) {
        $all_visitors += $initialvalue;
    } else {
        $all_visitors = $initialvalue;
    }
    

    $temp = $all_visitors - $records;
    
    if ($temp>0){
        $query         =  "DELETE FROM counter WHERE id<'$temp'";
        $MySQL->query($query);
    }
    
    $sql             =    "SELECT COUNT(*) AS visitip FROM counter WHERE ip='$ip' AND (tm+'$locktime')>'$now'";
	
	$query=mysql_query($sql);	
    $vip = mysql_fetch_assoc($query);

    $items             =    $vip['visitip'];
    
    if (empty($items))
    {
        $sql = "INSERT INTO counter (id, tm, ip) VALUES ('', '$now', '$ip')";

		
		$query=mysql_query($sql);			
	
	
    }
    
    $n                 =     $all_visitors;
    $div = 100000;
    while ($n > $div) {
        $div *= 10;
    }

    $sql             =    "SELECT COUNT(*) AS todayrecord FROM counter WHERE tm>'$daystart'";
	
	$query=mysql_query($sql);	
    $todayrc = mysql_fetch_assoc($query);
	

    $today_visitors     =    $todayrc['todayrecord'];
    
    $sql             =    "SELECT COUNT(*) AS yesterdayrec FROM counter WHERE tm>'$yesterdaystart' and tm<'$daystart'";
	$query=mysql_query($sql);	
    $yesrec = mysql_fetch_assoc($query);
    $yesterday_visitors     =    $yesrec['yesterdayrec'];
        
    $sql             =    "SELECT COUNT(*) AS weekrec FROM counter WHERE tm>='$weekstart'";
	$query=mysql_query($sql);	
    $weekrec = mysql_fetch_assoc($query);
    $week_visitors     =    $weekrec['weekrec'];

    $sql             =    "SELECT COUNT(*) AS monthrec FROM counter WHERE tm>='$monthstart'";
		$query=mysql_query($sql);	
    $monthrec = mysql_fetch_assoc($query);
    $month_visitors     =    $monthrec['monthrec'];
    
    $counter = '<div class="counter">';
    if ($pretext != "") $counter .= '<div>'.$pretext.'</div>';
	
    // Show digit counter
    if($s_digit){        
        $counter .= '<div style="text-align: center;">';
        while ($div >= 1) {
            $digit = $n / $div % 10;
            $counter .= "<img src=\"".$config['weburl']."images/visiter/".$disp_type."/".$digit.".png\" alt=\"Vister\" title=\"Visters\" />";
            $n -= $digit * $div;
            $div /= 10;
        }
        $counter .= '</div>';
    }
	else
	{        
        $counter .= '<div style="text-align: center;">';
        while ($div >= 1) {
            $digit = $n / $div % 10;
            $tongonline= $digit;
            $n -= $digit * $div;
            $div /= 10;
        }
        $counter .= '</div>';
    }
    
    $counter         .=    '<div style="margin:0 auto;margin-left:20px; text-align:center"><table cellpadding="1" cellspacing="1" border="0" style="text-align: center; width: '.$widthtable.'%;"><tbody align="center">';
    // Show today, yestoday, week, month, all statistic
    if($s_today)        $counter        .=    spaceer("vtoday.png", $today, $today_visitors);
    if($s_yesterday)    $counter        .=    spaceer("vyesterday.png", $yesterday, $yesterday_visitors);
    if($s_week)            $counter        .=    spaceer("vweek.png", $x_week, $week_visitors);
    if($s_month)        $counter        .=    spaceer("vmonth.png", $x_month, $month_visitors);
    if($s_all)            $counter        .=    spaceer("vall.png", $all, $all_visitors);
    
    $counter        .= "</tbody></table></div>";
    $counter .= "</div>";
    if ($posttext != "") $counter        .= '<div>'.$posttext.'</div>';

function spaceer($a1,$a2,$a3)
{
    global $config;
    $ret = "<tr style=\"text-align:left;\">
            <td width=\"10\"><img src=\"".$config['weburl']."images/stats/default/".$a1."\" alt=\"Visitor\"/></td>";
    $ret .= "<td width=\"40\">".$a2."</td>";
    $ret .="<td width=\"10\" style=\"text-align:right;\">".$a3."</td></tr>";
    return $ret;
}
/*
$hienthi ="<table>";
$hienthi .="<tr><td>$today</td><td>$today_visitors</td></tr>";
$hienthi .="<tr><td>$yesterday</td><td>$yesterday_visitors</td></tr>";
$hienthi .="<tr><td>$all</td><td>$all_visitors</td></tr>";
// $hienthi .=<p> Email:<a href="mailto: hoanganhphatcoffee@yahoo.com"> hoanganhphatcoffee@yahoo.com</a></p>
$hienthi .="<table>";
*/

$hienthi = "<div class='footer-thongke'>";
$hienthi .="<div><div class='thongke-div'>$today:</div><div class='thongke-div2'>$today_visitors</div></div><br>";
$hienthi .="<div><div class='thongke-div'>$yesterday:</div><div class='thongke-div2'>$yesterday_visitors</div></div><br>";
$hienthi .="<div><div class='thongke-div'>$all:</div><div class='thongke-div2'>$all_visitors</div></div><br>";
$hienthi .="</div>";
?> 


<?php
// echo $counter; 
?> 