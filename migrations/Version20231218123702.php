<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231218123702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (entity_id INT NOT NULL, category_name VARCHAR(255) NOT NULL, sku VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(5000) NOT NULL, short_desc VARCHAR(1000) DEFAULT NULL, price DOUBLE PRECISION NOT NULL, link VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, brand VARCHAR(255) DEFAULT NULL, rating VARCHAR(255) DEFAULT NULL, caffeine_type VARCHAR(255) DEFAULT NULL, count INT DEFAULT NULL, flavored VARCHAR(255) DEFAULT NULL, seasonal VARCHAR(255) DEFAULT NULL, instock VARCHAR(255) NOT NULL, facebook INT NOT NULL, is_kcup TINYINT(1) NOT NULL, PRIMARY KEY(entity_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product');
    }
}
