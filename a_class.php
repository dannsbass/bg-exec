<?php
class A
{
    static function jack($a, $b)
           {
            sleep(4);
            file_put_contents('debug.txt', time().":A::jack:".$a.' '.$b."\n", FILE_APPEND);
            sleep(15);
            sleep(30);
           }
}
