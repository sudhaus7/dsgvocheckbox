<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 13.09.18
 * Time: 15:12
 */

namespace SUDHAUS7\Sudhaus7Formframework\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

class SimplelinkViewHelper extends \TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper
{
    
    /**
     * @var bool
     */
    protected $escapeOutput = false;
    
    public function initializeArguments()
    {
        $this->registerArgument('link', 'string', 'link configuration', true);
        $this->registerArgument('content', 'string', 'the child content', false);
    }
    
    /**
     * Replaces [Text] with a link for $link with typolink
     *
     * @return string
     *
     * @throws nothing
     *
     */
    public function render()
    {
        $link = $this->arguments['link'];
        $output = $this->arguments['content'];
        if (empty($output)) {
            $output = $this->renderChildren();
        }
        
        preg_match('/\[.+\]/', $output, $matches);
        
        foreach ($matches as $match) {
            $plain = trim($match, '[]');
            $linktext = $GLOBALS['TSFE']->cObj->typoLink($plain, [
                'parameter'=>$link,
                'target'=>'_blank',
                'forceAbsoluteUrl'=>1,
            ]);
            $output = str_replace($match, $linktext, $output);
        }
        return $output;
    }
}
