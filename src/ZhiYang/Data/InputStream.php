<?php namespace ZhiYang\Data;

/**
 * author: LiZhiYang
 * email: zhiyanglee@foxmail.com
 */

interface InputStream
{
    public function read();

    public function readBytes(&$b, $len);

    public function skip($n);

    public function seek($off);

    public function available();

    public function close();
}