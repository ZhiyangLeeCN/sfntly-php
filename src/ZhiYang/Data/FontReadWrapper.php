<?php
/**
 * author: LiZhiYang
 * email: zhiyanglee@foxmail.com
 */

namespace ZhiYang\Data;


class FontReadWrapper
{
    private $is;

    public function __construct(InputStream $is)
    {
        $this->is = $is;
    }

    public function readInt32()
    {
        return $this->readUInt32();
    }

    public function readUInt32()
    {
        $this->is->readBytes($buf, 4);
        $unpack = unpack('NN', $buf);
        return $unpack['N'];
    }

    public function readInt16()
    {
        return $this->readUInt16();
    }

    public function readUInt16()
    {
        $this->is->readBytes($buf, 4);
        $unpack = unpack('nn', $buf);
        return $unpack['n'];
    }

    public function seek($off)
    {
        return $this->is->seek($off);
    }

    public function close()
    {
        $this->is->close();
    }
}