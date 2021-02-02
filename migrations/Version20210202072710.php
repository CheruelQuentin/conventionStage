<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210202072710 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lycee ADD nom_assurance VARCHAR(255) NOT NULL, ADD numero_contrat INT NOT NULL');
        $this->addSql('ALTER TABLE organisme ADD nom_assurance VARCHAR(255) NOT NULL, ADD numero_contrat INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lycee DROP nom_assurance, DROP numero_contrat');
        $this->addSql('ALTER TABLE organisme DROP nom_assurance, DROP numero_contrat');
    }
}
