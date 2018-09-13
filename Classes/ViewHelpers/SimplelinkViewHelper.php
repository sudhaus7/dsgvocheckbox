<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 13.09.18
 * Time: 15:12
 */

namespace SUDHAUS7\Sudhaus7Formframework\ViewHelpers;

class SimplelinkViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    
    /**
     * @var bool
     */
    protected $escapeOutput = false;
    
    public function initializeArguments() {
        $this->registerArgument('link', 'string', 'link configuration',true);
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
    
        $output = $this->renderChildren();
        $link = $this->arguments['link'];
        preg_match('/\[.+\]/',$output,$matches);
        foreach ($matches as $match) {
            $plain = trim($match,'[]');
            $linktext = $GLOBALS['TSFE']->cObj->typoLink($plain, [
                'parameter'=>$link,
                'target'=>'_blank',
            ]);
            $output = str_replace($match,$linktext,$output);
        }
        return $output;
    }
}

