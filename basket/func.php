<?php
function print_table($rows,$files,$dir){
$nav=add_get();
echo'<table id="file-table"><tr><th>Имя'.$nav;
    if($_REQUEST["do"]=="sort") 
    $name="sortr";
    else $name="sort";
    echo $name; 
    echo '>sort</a></th>"';
    echo'<th>Тип</th><th>Размер'.$nav; if($_REQUEST["do"]=="sorts")$name="sortsr";else $name="sorts"; echo $name;echo '>size</a></th>';
    echo '<th>Дата'.$nav; if($_REQUEST["do"]=="sortd")$name="sortdr";else $name="sortd"; echo $name;echo '>date</a></th></tr>';
     for($i=1;$i<count($files);$i++)
        {
            if($rows[$i][1]=='dir')
            {
                
                if($rows[$i][0]=='..'){
                    if($dir=='./')
                    $nextdir=$dir;
                    else{
                $pos=strrpos($dir,'/',-2);
                $nextdir=substr_replace($dir,"",$pos+1);}
                        
                }
                else
                $nextdir = $dir.$rows[$i][0].'/';
        echo'<tr><td><a href=?DIR=';
        echo $nextdir.'>'. $rows[$i][0];
        echo '</a></td>';
        echo'<td style="background:RGBA(255,0,0,0.5);">'.$rows[$i][1].'</td>';
        echo'<td>'.$rows[$i][2].'</td>';
        echo'<td>'.$rows[$i][3].'</td>';
        echo '</tr>';
            }
        }
        for($i=0;$i<count($files);$i++)
        {
            if($rows[$i][1]!='dir')
            {
        echo'<tr><td>'.$rows[$i][0].'</td>';
        echo'<td>'.$rows[$i][1].'</td>';
        echo'<td>'.$rows[$i][2].'</td>';
        echo'<td>'.$rows[$i][3].'</td>';
        echo '</tr>';
            }
        }
        echo '</table>';
}

function add_get(){
    $url=$_SERVER['REQUEST_URI'];
    if(isset($_REQUEST['DIR']))
       {
            if(!isset($_REQUEST['do']))
            {
            return'<a href='.$url.'&do=';
            }
            else
            {
            $pos=strrpos($url,'&',-1);
            $url=substr_replace($url,"",$pos);
            return '<a href='.$url.'&do=';
            }
        }
    else
        return '<a href=?do=';
}
function sorts(&$rows,$select){
    for ($i=1; $i < count($rows); $i++)
    {
        for ($j=($i+1); $j < count($rows); $j++)
        {
            if ($rows[$i][$select]>$rows[$j][$select])
            {
                $c = $rows[$i];
                $rows[$i] = $rows[$j];
                $rows[$j] = $c;
            }
        }
    }
    
}
function sort_r(&$rows,$select){
    for ($i=1; $i < count($rows); $i++)
    {
        for ($j=($i+1); $j < count($rows); $j++)
        {
            if ($rows[$i][$select]<$rows[$j][$select])
            {
                $c = $rows[$i];
                $rows[$i] = $rows[$j];
                $rows[$j] = $c;
            }
        }
    }
    
}

?>