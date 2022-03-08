<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308133524 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits ADD kcal DOUBLE PRECISION NOT NULL, ADD kj DOUBLE PRECISION NOT NULL, ADD matieres_grasses DOUBLE PRECISION NOT NULL, ADD acides_gras_satures DOUBLE PRECISION NOT NULL, ADD glucides DOUBLE PRECISION NOT NULL, ADD sucres DOUBLE PRECISION NOT NULL, ADD fibres DOUBLE PRECISION NOT NULL, ADD proteines DOUBLE PRECISION NOT NULL, ADD sel DOUBLE PRECISION NOT NULL, DROP nutriments');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits ADD nutriments LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', DROP kcal, DROP kj, DROP matieres_grasses, DROP acides_gras_satures, DROP glucides, DROP sucres, DROP fibres, DROP proteines, DROP sel, CHANGE titre titre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ingredients ingredients LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:simple_array)\', CHANGE ean ean VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
