<?php  
//search函数 其中$array为数组，$k为要找的值，$low为查找范围的最小键值，$high为查找范围的最大键值  
function search($array, $k, $low=0, $high=0)      
{   
    if(count($array)!=0 and $high == 0)                 //判断是否为第一次调用  
    {  
        $high = count($array);  
    }  
    if($low <= $high)                                //如果还存在剩余的数组元素  
    {   
        $mid = intval(($low+$high)/2);                  //取$low和$high的中间值  
        if ($array[$mid] == $k)                         //如果找到则返回  
        {   
            return $mid;   
        }  
        elseif ($k < $array[$mid])                       //如果没有找到，则继续查找  
        {   
            return search($array, $k, $low, $mid-1);   
        }  
        else  
        {   
            return search($array, $k, $mid+1, $high);   
        }   
    }   
    return -1;   
}   
$array = array(4,5,7,8,9,10);                           //测试search函数  
echo search($array, 8);                             //调用search函数并输出查找结果  
?>  
