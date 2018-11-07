<?php namespace ZhiYang;

/**
 * author: LiZhiYang
 * email: zhiyanglee@foxmail.com
 */

class FontFactory
{
    const LOOKAHEAD_SIZE = 4;

    // font serialization settings
    private $fingerprint = false;

    // font serialization settings
    private $tableOrdering;

    public static function getInstance()
    {
        return new static;
    }

    public function fingerprintFont($fingerprint = null)
    {
        if (is_null($fingerprint)) {
            return $this->fingerprint;
        } else {
            $this->fingerprint = $fingerprint;
        }
    }
}