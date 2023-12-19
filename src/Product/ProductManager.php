<?php

namespace App\Product;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Psr\Log\LoggerInterface;
require_once 'vendor/autoload.php';
class SupportedExtnsions {
    const XML = 'xml';
    const JSON = 'json';
}

class ProductManager extends Command
{
    private $fileReader;
    private $logger;
    protected static $defaultName = 'product:save';
    const ARGUMENT_NAME ="file";
    public function __construct(FileReaderXml $fileReader,LoggerInterface $logger)
    {
        parent::__construct();

        $this->fileReader = $fileReader;
        $this->logger = $logger;
    }
    protected function configure()
    {
        $this->addArgument(ProductManager::ARGUMENT_NAME, InputArgument::OPTIONAL, 'File to read');
        $this->setDescription('Please make sure that you provide the absolut path for your file');
    }

    function getFileExtension($filePath) : string {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $filePath);
        $fileExtension =  explode('/', $mime)[1];
        finfo_close($finfo);
        return $fileExtension;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filePath = $input->getArgument(ProductManager::ARGUMENT_NAME);
        $fileExtension = $this->getFileExtension($filePath);
        $fileContents = file_get_contents($filePath,true);
        $this->logger->info("extension file is  $fileExtension");
        switch ($fileExtension) {
            case SupportedExtnsions::XML :
                $this->fileReader->file = $fileContents;
                $this->fileReader->readFile();
                break;
            case SupportedExtnsions::JSON :
                $output->writeln('JSON');
                break;
            default:
            $this->logger->critical("Unsupported file format: $fileExtension");
        }


        return Command::SUCCESS;
    }
}

