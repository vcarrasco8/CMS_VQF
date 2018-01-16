<?php
namespace VQF\MediaVqf\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Vincent CARRASCO <carrascovincent8@gmail.com>
 * @author Florian DE ALMEIDA <florian.almeida05@gmail.com>
 * @author Quentin DUBRAS <dubrasquentin@gmail.com>
 */
class ReviewControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \VQF\MediaVqf\Controller\ReviewController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\VQF\MediaVqf\Controller\ReviewController::class)
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
    public function createActionAddsTheGivenReviewToReviewRepository()
    {
        $review = new \VQF\MediaVqf\Domain\Model\Review();

        $reviewRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewRepository->expects(self::once())->method('add')->with($review);
        $this->inject($this->subject, 'reviewRepository', $reviewRepository);

        $this->subject->createAction($review);
    }
}
