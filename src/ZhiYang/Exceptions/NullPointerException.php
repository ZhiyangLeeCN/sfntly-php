<?php
/**
 * author: LiZhiYang
 * email: zhiyanglee@foxmail.com
 */

namespace ZhiYang\Exceptions;


use Throwable;

class NullPointerException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}