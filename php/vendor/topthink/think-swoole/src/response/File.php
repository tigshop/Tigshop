<?php

namespace think\swoole\response;

use DateTime;
use RuntimeException;
use SplFileInfo;
use think\Response;

class File extends Response
{
    public const DISPOSITION_ATTACHMENT = 'attachment';
    public const DISPOSITION_INLINE     = 'inline';

    protected $header = [
        'Content-Type'  => 'application/octet-stream',
        'Accept-Ranges' => 'bytes',
    ];

    /**
     * @var SplFileInfo
     */
    protected $file;

    public function __construct($file, string $contentDisposition = null, bool $autoEtag = true, bool $autoLastModified = true, bool $autoContentType = true)
    {
        $this->setFile($file, $contentDisposition, $autoEtag, $autoLastModified, $autoContentType);
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file, string $contentDisposition = null, bool $autoEtag = true, bool $autoLastModified = true, bool $autoContentType = true)
    {
        if (!$file instanceof SplFileInfo) {
            $file = new SplFileInfo((string) $file);
        }

        if (!$file->isReadable()) {
            throw new RuntimeException('File must be readable.');
        }

        $this->header['Content-Length'] = $file->getSize();

        $this->file = $file;

        if ($autoEtag) {
            $this->setAutoEtag();
        }

        if ($autoLastModified) {
            $this->setAutoLastModified();
        }

        if ($contentDisposition) {
            $this->setContentDisposition($contentDisposition);
        }

        if ($autoContentType) {
            $this->setAutoContentType();
        }

        return $this;
    }

    public function setAutoContentType()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        $mimeType = finfo_file($finfo, $this->file->getPathname());
        if ($mimeType) {
            $this->header['Content-Type'] = $mimeType;
        }
    }

    public function setContentDisposition(string $disposition, string $filename = '')
    {
        if ('' === $filename) {
            $filename = $this->file->getFilename();
        }

        $this->header['Content-Disposition'] = "{$disposition}; filename=\"{$filename}\"";

        return $this;
    }

    public function setAutoLastModified()
    {
        $date = DateTime::createFromFormat('U', $this->file->getMTime());
        return $this->lastModified($date->format('D, d M Y H:i:s') . ' GMT');
    }

    public function setAutoEtag()
    {
        $eTag = "W/\"" . sha1_file($this->file->getPathname()) . "\"";

        return $this->eTag($eTag);
    }

    protected function sendData(string $data): void
    {
        readfile($this->file->getPathname());
    }
}
