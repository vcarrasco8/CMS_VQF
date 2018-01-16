<?php
namespace VQF\MediaVqf\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Vincent CARRASCO <carrascovincent8@gmail.com>
 * @author Florian DE ALMEIDA <florian.almeida05@gmail.com>
 * @author Quentin DUBRAS <dubrasquentin@gmail.com>
 */
class AuthorControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \VQF\MediaVqf\Controller\AuthorController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\VQF\MediaVqf\Controller\AuthorController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllAuthorsFromRepositoryAndAssignsThemToView()
    {

        $allAuthors = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $authorRepository = $this->getMockBuilder(\VQF\MediaVqf\Domain\Repository\AuthorRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $authorRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAuthors));
        $this->inject($this->subject, 'authorRepository', $authorRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('authors', $allAuthors);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAuthorToView()
    {
        $author = new \VQF\MediaVqf\Domain\Model\Author();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('author', $author);

        $this->subject->showAction($author);
    }
}
