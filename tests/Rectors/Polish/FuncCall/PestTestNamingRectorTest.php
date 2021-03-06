<?php

namespace Pest\Drift\Testing\Rectors\Polish\FuncCall;

use Iterator;
use Pest\Drift\Pest\FuncCall\PestTestNamingRector;
use Pest\Drift\Testing\Rectors\Polish\BasePolishRectorTest;
use Symplify\SmartFileSystem\SmartFileInfo;

class PestTestNamingRectorTest extends BasePolishRectorTest
{
    protected function getRectorClass(): string
    {
        return PestTestNamingRector::class;
    }

    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfoWithoutAutoload($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(
            __DIR__ . '/../../../fixtures/Polish/FuncCall/PestTestNamingRector'
        );
    }
}
