<?php
namespace AppBundle\Normalizer;

use AppBundle\Normalizer\AbstractArrayNormalizer;

class FileArrayNormalizer extends AbstractArrayNormalizer
{
    public function __construct()
    {
        return parent::__construct(new FileNormalizer());
    }
}