<?php
namespace VQF\MediaVqf\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Vincent CARRASCO <carrascovincent8@gmail.com>
 * @author Florian DE ALMEIDA <florian.almeida05@gmail.com>
 * @author Quentin DUBRAS <dubrasquentin@gmail.com>
 */
class ReviewTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \VQF\MediaVqf\Domain\Model\Review
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \VQF\MediaVqf\Domain\Model\Review();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNoteReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getNote()
        );
    }

    /**
     * @test
     */
    public function setNoteForIntSetsNote()
    {
        $this->subject->setNote(12);

        self::assertAttributeEquals(
            12,
            'note',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForStringSetsAuthor()
    {
        $this->subject->setAuthor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCommentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getComment()
        );
    }

    /**
     * @test
     */
    public function setCommentForStringSetsComment()
    {
        $this->subject->setComment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'comment',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }
}
