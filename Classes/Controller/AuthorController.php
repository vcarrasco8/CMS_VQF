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
 * AuthorController
 */
class AuthorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * authorRepository
     *
     * @var \VQF\MediaVqf\Domain\Repository\AuthorRepository
     * @inject
     */
    protected $authorRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $authors = $this->authorRepository->findAll();
        $this->view->assign('authors', $authors);
    }

    /**
     * action show
     *
     * @param \VQF\MediaVqf\Domain\Model\Author $author
     * @return void
     */
    public function showAction(\VQF\MediaVqf\Domain\Model\Author $author)
    {
        $this->view->assign('author', $author);
    }
}
