<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230509081304 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE picture ADD ia_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F89489A6E65 FOREIGN KEY (ia_id) REFERENCES ia (id)');
        $this->addSql('CREATE INDEX IDX_16DB4F89489A6E65 ON picture (ia_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_16DB4F89489A6E65');
        $this->addSql('DROP INDEX IDX_16DB4F89489A6E65 ON picture');
        $this->addSql('ALTER TABLE picture DROP ia_id');
    }
}
