

<?php



//Joe Clarke (wk), Glenn Maxwell (c), Beau Webster, Marcus Stoinis, Hilton Cartwright, Joe Burns, Nick Larkin, Nathan Coulter-Nile, Sam Rainbird, Adam Zampa, Ahmed Daniyal

//Nathan McSweeney, Chris Lynn (c), Lachlan Pfeffer (wk), Ben Duckett, Sam Heazlett, Jimmy Peirson, Michael Neser, James Bazley, Mark Steketee, Matthew Kuhnemann, Mitchell Swepson


$wk = array();
$bt = array();
$ar = array();
$bw = array();

$wk['9'][] = "Joe Clarke";
$wk['8.5'][] = "Lachlan Pfeffer";
$wk['9'][] = "Ben Duckett";
$wk['8.5'][] = "Jimmy Peirson";
$bt['9.5'][] = "Marcus Stoinis";
$bt['9'][] = "Hilton Cartwright";
$bt['8.5'][] = "Joe Burns";
$bt['8'][] = "Nathan McSweeney";
$bt['9.5'][] = "Chris Lynn";
$bt['9'][] = "Sam Heazlett";
$bt['8.5'][] = "Nick Larkin";
$bw['9'][] = 'Nathan Coulter-Nile';
$bw['8.5'][] = 'Sam Rainbird';
$bw['8.5'][] = 'Adam Zampa';
$bw['8.5'][] = 'Ahmed Daniyal';
// $bw['9'] = 'Michael Neser';
$bw['9'][] = 'Mark Steketee';
$bw['8.5'][] = 'Matthew Kuhnemann';
$bw['8.5'][] = 'Mitchell Swepson';
$ar['8'][] = 'Beau Webster';
$ar['9'][] = 'Michael Neser';
$ar['9'][] = 'James Bazley';
$ar['10'][] = 'Glenn Maxwell';
$lineup['wk'] = $wk;
$lineup['bt'] = $bt;
$lineup['bw'] = $bw;
$lineup['ar'] = $ar;
echo "<pre>";
// print_r($lineup);

$combinations = array();
$combinations['maxWkComb'][1]['wk'] = 3;
$combinations['maxWkComb'][1]['bt'] = 3;
$combinations['maxWkComb'][1]['bw'] = 3;
$combinations['maxWkComb'][1]['ar'] = 2;
$combinations['maxWkComb'][2]['wk'] = 3;
$combinations['maxWkComb'][2]['bt'] = 3;
$combinations['maxWkComb'][2]['bw'] = 4;
$combinations['maxWkComb'][3]['wk'] = 3;
$combinations['maxWkComb'][3]['bt'] = 4;
$combinations['maxWkComb'][3]['bw'] = 3;
$combinations['maxWkComb'][3]['ar'] = 1;
$combinations['maxWkComb'][2]['wk'] = 3;
$combinations['maxWkComb'][2]['bt'] = 3;
$combinations['maxWkComb'][2]['bw'] = 4;
$combinations['maxWkComb'][2]['ar'] = 1;
$combinations['maxBtComb'][1]['wk'] = 1;
$combinations['maxBtComb'][1]['bt'] = 6;
$combinations['maxBtComb'][1]['bw'] = 3;
$combinations['maxBtComb'][1]['ar'] = 1;
$combinations['maxBwComb'][1]['wk'] = 1;
$combinations['maxBwComb'][1]['bt'] = 3;
$combinations['maxBwComb'][1]['bw'] = 6;
$combinations['maxBwComb'][1]['ar'] = 1;
$combinations['maxArComb'][1]['wk'] = 1;
$combinations['maxArComb'][1]['bt'] = 3;
$combinations['maxArComb'][1]['bw'] = 3;
$combinations['maxArComb'][1]['ar'] = 4;
$combinations['minArComb'][1]['wk'] = 2;
$combinations['minArComb'][1]['bt'] = 4;
$combinations['minArComb'][1]['bw'] = 4;
$combinations['minArComb'][1]['ar'] = 1;
$combinations['minArComb'][1]['wk'] = 2;
$combinations['minArComb'][1]['bt'] = 3;
$combinations['minArComb'][1]['bw'] = 5;
$combinations['minArComb'][1]['ar'] = 1;
$combinations['minBtComb'][1]['wk'] = 2;
$combinations['minBtComb'][1]['bt'] = 3;
$combinations['minBtComb'][1]['bw'] = 4;
$combinations['minBtComb'][1]['ar'] = 2;
$combinations['minBtComb'][1]['wk'] = 1;
$combinations['minBtComb'][1]['bt'] = 3;
$combinations['minBtComb'][1]['bw'] = 5;
$combinations['minBtComb'][1]['ar'] = 2;
$combinations['minBtComb'][1]['wk'] = 1;
$combinations['minBtComb'][1]['bt'] = 3;
$combinations['minBtComb'][1]['bw'] = 4;
$combinations['minBtComb'][1]['ar'] = 3;
$combinations['minBwComb'][1]['wk'] = 2;
$combinations['minBwComb'][1]['bt'] = 4;
$combinations['minBwComb'][1]['bw'] = 3;
$combinations['minBwComb'][1]['ar'] = 2;
$combinations['minBwComb'][1]['wk'] = 1;
$combinations['minBwComb'][1]['bt'] = 5;
$combinations['minBwComb'][1]['bw'] = 3;
$combinations['minBwComb'][1]['ar'] = 2;
// print_r($combinations);
// echo "</pre>";
// exit;
$credits = 100;
$teamsArr = array();
foreach ($combinations as $comb => $index) {
    foreach ($index as $role => $count) {
        //    if(){

        //    }
    }
}

$arr = array('a1', 'a2', 'a3');
$countarr = count($arr);
foreach ($arr as $key => $val) {
    // echo $key."<br/>";
    for ($j = 0; $j < $countarr; $j++) {
        if ($key !== $j) {
            echo $val . $arr[$j] . $arr[$j + 1] . "comb <br/>";
        }
    }
}
?>