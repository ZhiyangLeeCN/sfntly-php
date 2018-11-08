<?php namespace ZhiYang\Exceptions;

use Throwable;

/**
 * author: LiZhiYang
 * email: zhiyanglee@foxmail.com
 */

class FileNotFoundException extends IOException
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}