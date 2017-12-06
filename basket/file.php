<?php
include('header.php');
?>
<div class="content clearfix">
    <?php
            include('aside.php');
            include('func.php');
            $url=$_SERVER['REQUEST_URI'];
            //echo $url;
//            if(!preg_match('/^./([^.])(\?.*?)?(#.*)?$/',$dir))
//            {
//                $start_dir = './';
//            }
            $start_dir = './';//$_SERVER['DOCUMENT_ROOT'];
            $row = array ($files,$size,type,$date);
            $rows = array ($row);
            if (!isset($_REQUEST['DIR']))
            {
                $dir = $start_dir;


            }
            else
            {
               $dir = $_REQUEST['DIR'];


            }
            //if(preg_match('/\\\.|\/\.|\/\/|\\+/',$dir))
    //echo $dir;
            if(!preg_match('/^\.\/([a-zA-Z]*\/)+$/',$dir))
            {
                $dir=$start_dir;
            }
        echo $dir;
            if(is_dir($dir))
            {
               $files = scandir($dir);

            }
            for($i=0;$i<count($files);$i++)
            {
            $rows[$i][0]=$files[$i];
            $rows[$i][1]=filetype($dir.$files[$i]);;
            $rows[$i][2]=filesize($dir.$files[$i]);
            $rows[$i][3]=date("d m Y", filectime($dir.$files[$i]));
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

          


           
            include('right_aside.php');
            include('footer.php');
        ?>
