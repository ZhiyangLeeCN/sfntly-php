<?php
/**
 * author: LiZhiYang
 * email: zhiyanglee@foxmail.com
 */

namespace ZhiYang\Data;


use ZhiYang\Exceptions\FileNotFoundException;
use ZhiYang\Exceptions\IndexOutOfBoundsException;
use ZhiYang\Exceptions\IOException;
use ZhiYang\Exceptions\NullPointerException;

class FileInputStream implements InputStream
{
    private $file;

    private $fd;

    private $len;

    private $mode;

    private $pos;

    /**
     * FileInputStream constructor.
     * @param $file
     * @param string $mode
     * @throws FileNotFoundException
     * @throws IOException
     */
    public function __construct($file, $mode = 'rw')
    {
        $this->file = $file;
        $this->mode = $mode;
        $this->pos = 0;
        $this->ensureOpen();
        $this->openFile();
    }

    private function ensureOpen()
    {
        if (!file_exists($this->file)) {
            throw new FileNotFoundException("file[{$this->file}] not found.");
        }
    }

    private function openFile()
    {
        $fd = fopen($this->file, $this->mode);
        if (false === $fd) {
            $lastError = error_get_last();
            throw new IOException("open file[{$this->file}] error[{$lastError['message']}].");
        }

        $this->len = filesize($this->file);
        $this->fd = $fd;
    }

    public function read()
    {
        $b = fread($this->fd, 1);
        if (false === $b) {
            $lastError = error_get_last();
            throw new IOException("read file[{$this->file}] error[{$lastError['message']}].");
        }

        $this->pos += 1;
        return intval($b);
    }

    public function readBytes(&$b, $len)
    {
/*        if (is_null($b)) {
            throw new NullPointerException();
        } else if ($len > $this->len) {
            throw new IndexOutOfBoundsException();
        }*/

        $buf = fread($this->fd, $len);
        if (false === $buf) {
            $lastError = error_get_last();
            throw new IOException("readBytes error[{$lastError}].");
        }

        $b .= $buf;
        $redLen = strlen($b);
        $this->pos += $redLen;
        return $redLen;
    }

    public function skip($n)
    {
        $echoBuf = '';
        $this->readBytes($echoBuf, $n);
    }

    public function seek($off)
    {
        return fseek($this->fd, $off);
    }

    public function available()
    {
        return $this->len - $this->pos;
    }

    public function close()
    {
        fclose($this->fd);
    }

    public function __destruct()
    {
        $this->close();
    }
}