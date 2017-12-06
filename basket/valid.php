<?php


        function correctName($name)
          {
              if(!preg_match('/^[a-zA-Z]{2,64}$/', $name))
             {                   

                  return false;
             }
            else
                return true;
          }
        
        function checkData(&$dd,&$mm,&$gg)
        {
            
            $dayNow = date("d");
            $monthNow = date("m");
            $yearNow = date("Y"); 
            if(preg_match('/^[1-9][0-9]{0,3}$/', $gg))
            {
                if($gg > $yearNow)
                {
                    $gg=false;
                    
                }
            }
            else
                $gg=false;
            if(preg_match('/^[0-9][0-9]{0,2}?$/', $mm))
            {
                if($mm>12)
                {
                    $mm=false;
                }
            }
            else
                $mm=false;
            if(preg_match('/^[0-9][0-9]{0,2}?$/', $dd))
             {
                 if($dd>31)
                 $dd=false;
             }
             else
                $dd=false;
            return $gg&&$mm&&$dd;
        }
        function checkAge($sex,$day,$month,$year){
            $dayNow = date("d");
            $monthNow = date("m");
            $yearNow = date("Y"); 
            if(($sex=='МЧ' && (($yearNow - $year)>21)) || (($sex=='ЖН' && ($yearNow - $year>18))))
            {
               
               return true;
            }
            elseif(($sex=='МЧ' && (($yearNow - $year)==21)) || (($sex='ЖН' && ($yearNow - $year==18))))
            {
                if($monthNow>$month)
                {
                    return true;
                }
                elseif($monthNow==$month)
                {
                 if($dayNow>=$day)
                    {
                        return true;
                    }
                    else return false;
                 }
                else return false;
            }
            else return false;
        }

//    function Mybase(){
//         $connect = mysqli_connect("basket","root","","myBase");
//                        $connect->query("SET NAMES 'utf8");
//                        $res= $connect->query("SELECT * FROM `users` WHERE `name` LIKE '".$name."' ORDER BY `id` ASC");//поиск по базе
//                        $flag=$res->num_rows;//переменная кол-ва найденых строк
//                        if($flag==0)//определение повторений
//                            echo "net ";
//                        else
//                            echo "ti da";
//                        
//                        $connect->close();
//    } 
?>