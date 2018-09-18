<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 18.09.18
 * Time: 11:05
 */

namespace SUDHAUS7\Sudhaus7Formframework\Domain\Finishers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;
use TYPO3\CMS\Form\Domain\Finishers\Exception\FinisherException;
use TYPO3\CMS\Form\Domain\Finishers\AbstractFinisher;
use TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper;


class BetterConfirmationFinisher extends AbstractFinisher
{
    
    
    /**
     * @var array
     */
    protected $defaultOptions = [
        'message' => 'The form has been submitted.',
    ];
    
    /**
     * @var StandaloneView
     */
    protected $templateView;
    
    /**
     * @var array
     */
    protected $conf = [];
    
    /**
     * Executes this finisher
     *
     * @see AbstractFinisher::execute()
     * @return string
     *
     * @throws FinisherException
     */
    protected function executeInternal()
    {
        
        $this->conf = $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_sudhaus7formframework.']['finishers.']['betterconfirmationfinisher.'];
        $this->templateView = $this->objectManager->get(StandaloneView::class);
        $this->templateView->setLayoutRootPaths($this->conf['view.']['layoutRootPaths.']);
        $this->templateView->setPartialRootPaths($this->conf['view.']['partialRootPaths.']);
        $this->templateView->setTemplateRootPaths($this->conf['view.']['templateRootPaths.']);
        $this->templateView->setTemplatePathAndFilename( GeneralUtility::getFileAbsFileName($this->conf['view.']['templateFile']));
        $this->templateView->setFormat('html');
        $this->templateView->assignMultiple([
            'message'=> $this->parseOption('message'),
            'form'=> $this->finisherContext->getFormRuntime(),
            'finisherVariableProvider'=>$this->finisherContext->getFinisherVariableProvider(),
        ]);
       // $this->templateView->getRenderingContext()
        //    ->getViewHelperVariableContainer()
         //   ->addOrUpdate(RenderRenderableViewHelper::class, 'formRuntime',  $this->finisherContext->getFormRuntime());
        $content = $this->templateView->render();
        return $content;
    }
}
