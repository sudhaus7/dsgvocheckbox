<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 13.09.18
 * Time: 16:45
 */

namespace SUDHAUS7\Sudhaus7Formframework\Tests\Unit\ViewHelpers;

use Nimut\TestingFramework\TestCase\UnitTestCase;
use SUDHAUS7\Sudhaus7Formframework\ViewHelpers\SimplelinkViewHelper;


class SimplelinkViewHelperTest extends UnitTestCase
{
    
    protected $mockedContentObjectRenderer;
    protected $mockedViewHelper;
    protected $testtext = 'This [Text] is linked';
    
    /**
     * Set up
     */
    public function setUp()
    {
        
        $this->mockedViewHelper = $this->getAccessibleMock(SimplelinkViewHelper::class,['init','renderChildren']);
        $this->mockedContentObjectRenderer = $this->getAccessibleMock(\TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer::class, [ 'typoLink']);
        
    }
    
    /**
     * @test
     */
    public function internalPageIsUsed()
    {
        $url = 123;
        $result = ['parameter'=>$url];
        //$this->mockedContentObjectRenderer->expects($this->once())->method('typoLink_URL')->with($result);
        $this->mockedViewHelper->_set($url);
        $this->mockedViewHelper->_set($url);
        $result = $this->mockedViewHelper()->render();
    }
}
