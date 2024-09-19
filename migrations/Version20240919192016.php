<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240919192016 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE veterinary_report CHANGE animal_id animal_id INT NOT NULL');
        $this->addSql('ALTER TABLE veterinary_report ADD CONSTRAINT FK_53C7E56B8E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_53C7E56B8E962C16 ON veterinary_report (animal_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE veterinary_report DROP FOREIGN KEY FK_53C7E56B8E962C16');
        $this->addSql('DROP INDEX UNIQ_53C7E56B8E962C16 ON veterinary_report');
        $this->addSql('ALTER TABLE veterinary_report CHANGE animal_id animal_id INT DEFAULT NULL');
    }
}
