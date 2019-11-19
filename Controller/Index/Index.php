<?php


namespace Ace\ArgumentPattern\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;
    /**
     * @var Ace\ArgumentPattern\Api\ParserInterface
     */
    private $parser;
    /**
     * @var \Ace\ArgumentPattern\Api\ReaderInterface
     */
    private $reader;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Ace\ArgumentPattern\Api\ParserInterface $parser,
        \Ace\ArgumentPattern\Api\ReaderInterface $reader
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
        $this->parser = $parser;
        $this->reader = $reader;
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        echo "<pre>";
        var_dump($this->reader);

        echo $this->reader->read();
//        var_dump($this->parser);
//        echo $this->parser->getParserName();
        exit;
        return $this->resultPageFactory->create();
    }
}
