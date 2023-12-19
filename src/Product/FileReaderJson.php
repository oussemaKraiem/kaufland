<?php

namespace App\Product;

class FileReaderJson extends FileReader {

    public function readFile(){

        $jsonData = json_decode($this->file, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Error decoding JSON file: ' . json_last_error_msg());
        }


        foreach ($jsonData as $itemData) {

            $items[] = $this->extractAttributes($itemData);
        }

    }

    function extractAttributes($data)
    {
        return [
            'entity_id' => $data['entity_id'] ?? null,
            'category_name' => $data['CategoryName'] ?? null,
            'sku' => $data['sku'] ?? null,
            'name' => $data['name'] ?? null,
            'description' => $data['description'] ?? null,
            'shortdesc' => $data['shortdesc'] ?? null,
            'price' => $data['price'] ?? null,
            'link' => $data['link'] ?? null,
            'image' => $data['image'] ?? null,
            'brand' => $data['Brand'] ?? null,
            'rating' => $data['Rating'] ?? null,
            'caffeine_type' => $data['CaffeineType'] ?? null,
            'count' => $data['Count'] ?? null,
            'flavored' => $data['Flavored'] ?? null,
            'seasonal' => $data['Seasonal'] ?? null,
            'instock' => $data['Instock'] ?? null,
            'facebook' => $data['Facebook'] ?? null,
            'is_kcup' => $data['IsKCup'] ?? null,
        ];
    }
}