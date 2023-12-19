<?php

namespace App\Product;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

use Symfony\Component\DomCrawler\Crawler;
use App\Entity\Product;

class FileReaderXml extends FileReader
{
    public $file;
    private $logger;
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }
    public function readFile()
    {
        try {
            $crawler = new Crawler($this->file);
            $crawler->filter('item')->each(function (Crawler $node, $i) {
                $productObject = $this->extractAttributes($node);
                $product = $this->entityManager->getRepository(Product::class)->findOneBy(
                    ['entity_id' => $productObject->getEntityId()]
                );
                if ($product) {
                    $this->logger->error('object Exist in database ' . $productObject->getEntityId());
                } else {
                    $this->entityManager->persist($productObject);
                    $this->entityManager->flush();
                }
            });
        } catch (\Throwable $th) {
            $this->logger->critical('Failed to read File and save data ', [
                'cause' => $th,
            ]);
        }
    }

    function extractAttributes($node)
    {
        $entityId = $node->filter('entity_id')->text();
        $categoryName = $node->filter('CategoryName')->text();
        $sku = $node->filter('sku')->text();
        $name = $node->filter('name')->text();
        $description = $node->filter('description')->text();
        $shortdesc = $node->filter('shortdesc')->text();
        $price = $node->filter('price')->text();
        $link = $node->filter('link')->text();
        $image = $node->filter('image')->text();
        $brand = $node->filter('Brand')->text();
        $rating = $node->filter('Rating')->text();
        $caffeineType = $node->filter('CaffeineType')->text();
        $count = $node->filter('Count')->text();
        $flavored = $node->filter('Flavored')->text();
        $seasonal = $node->filter('Seasonal')->text();
        $instock = $node->filter('Instock')->text();
        $facebook = $node->filter('Facebook')->text();
        $isKCup = $node->filter('IsKCup')->text();

        $product = new Product();

        $product->setEntityId($entityId);
        $product->setName($name);
        $product->setDescription($description);
        $product->setShortdesc($shortdesc);
        $product->setPrice((float) $price);
        $product->setLink($link);
        $product->setBrand($brand);
        $product->setRating($rating);
        $product->setCategoryName($categoryName);
        $product->setFlavored($flavored);
        $product->setSeasonal($seasonal);
        $product->setinstock($instock);
        $product->setFacebook($facebook);
        $product->setIsKCup($isKCup);
        $product->setSku($sku);
        $product->setImage($image);
        $product->setCaffeineType($caffeineType);
        $product->setCount((int) $count);

        return $product;
    }
}