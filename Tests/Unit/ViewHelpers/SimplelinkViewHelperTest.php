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


class SimplelinkViewHelperTest extends \Nimut\TestingFramework\TestCase\ViewHelperBaseTestcase
{
    
    protected $mockedContentObjectRenderer;
    protected $mockedViewHelper;
    protected $testtext = 'This [Text] is linked';
    
    /**
     * Set up
     */
    public function setUp()
    {
        
        $this->mockedViewHelper = $this->getAccessibleMock(SimplelinkViewHelper::class,['renderChildren']);
        $this->mockedContentObjectRenderer = $this->getAccessibleMock(\TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer::class, [ 'typoLink']);
        
    }
    
    /**
     * @test
     */
    public function internalPageIsUsed()
    {
        $url = 123;
        $result = ['parameter'=>$url];
        $x = $this->mockedContentObjectRenderer->expects($this->once())->method('typoLink')->with($result,'Text');
        //$this->mockedViewHelper->_set($url);
        $this->mockedViewHelper->_set('link',$url);
        $this->mockedViewHelper->_set('content',$this->testtext);
        $result = $this->mockedViewHelper->render();
        self::assertEquals('x', $result);
    }
}
