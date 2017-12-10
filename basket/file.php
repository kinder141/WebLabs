<?php
include('header.php');
?>
<div class="content clearfix">
    <?php
            //include('aside.php');
            include('func.php');
            $url=$_SERVER['REQUEST_URI'];
            $start_dir = './';
            $row = array ($files,$size,type,$date);
            $rows = array ($row);
            date_default_timezone_set('Europe/Kiev');
            if (!isset($_REQUEST['DIR']))
            {
                $dir = $start_dir;


            }
            else
            {
               $dir = $_REQUEST['DIR'];
            }
            if(!preg_match('/^\.\/([a-zA-Zа-яА-Я0-9][^\/]*\/)+$/',$dir))
            {
                $dir=$start_dir;
            }
            $dir=iconv("UTF-8","cp1251",$dir);
            if(is_dir($dir))
            {
              
               $files = scandir($dir);
                
            }
            for($i=0;$i<count($files);$i++)
            {
            $rows[$i][0]=iconv("cp1251","UTF-8",$files[$i]);
            $rows[$i][1]=filetype($dir.$files[$i]);
            $rows[$i][2]=filesize($dir.$files[$i]);
            $rows[$i][3]=date("d m Y:H i s", filectime($dir.$files[$i]));
            }
            switch($_REQUEST['do'])
            {
                case'sort':sorts($rows,0);break;
                case'sortr': sort_r($rows,0);break;
                case'sorts':sorts($rows,2);break;
                case'sortsr':sort_r($rows,2);break;
                case'sortd':sorts($rows,3);break;
                case'sortdr':sort_r($rows,3);break;
            }
            print_table($rows,$files,$dir);

          


           
           // include('right_aside.php');
            include('footer.php');
        ?>
