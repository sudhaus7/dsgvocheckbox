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
     * Replaces [Text] with a link for $link with typolink
     *
     * @param string $link link
     * @return string
     *
     * @throws nothing
     *
     */
    public function render($link)
    {
    
        $renderChildrenClosure =  $this->buildRenderChildrenClosure();
        $output = $renderChildrenClosure();
        
        if (!empty($link)) {
            
            preg_match_all('/\[.+\]/',$output,$matches);
            
            $GLOBALS['TSFE']->cObj->typoLink($output, [
                'parameter'=>$link,
                'target'=>'_blank',
            ]);
        }
        return $output;
    }
}

