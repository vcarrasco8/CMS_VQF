<?php
namespace VQF\MediaVqf\Controller;

/***
 *
 * This file is part of the "media_vqf" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Vincent CARRASCO <carrascovincent8@gmail.com>
 *           Florian DE ALMEIDA <florian.almeida05@gmail.com>
 *           Quentin DUBRAS <dubrasquentin@gmail.com>
 *
 ***/

/**
 * MediaController
 */
class MediaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * mediaRepository
     *
     * @var \VQF\MediaVqf\Domain\Repository\MediaRepository
     * @inject
     */
    protected $mediaRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $medias = $this->mediaRepository->findAll();
        $this->view->assign('medias', $medias);
    }

    /**
     * action show
     *
     * @param \VQF\MediaVqf\Domain\Model\Media $media
     * @return void
     */
    public function showAction(\VQF\MediaVqf\Domain\Model\Media $media)
    {
        $this->view->assign('media', $media);
    }

    /**
     * action recommend
     *
     * @return void
     */
    public function recommendAction()
    {

    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
