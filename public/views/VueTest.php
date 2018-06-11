<?php

class VueTest{
    public function test($res = -1){
        if($res==-1){
            echo "pas d'arguments";
        }else{
        print_r($res);
        }
}
}

?>