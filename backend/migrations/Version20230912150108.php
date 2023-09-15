<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230912150108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP INDEX UNIQ_9474526CA76ED395, ADD INDEX IDX_9474526CA76ED395 (user_id)');
        $this->addSql('ALTER TABLE post DROP INDEX UNIQ_5A8A6C8DF675F31B, ADD INDEX IDX_5A8A6C8DF675F31B (author_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP INDEX IDX_9474526CA76ED395, ADD UNIQUE INDEX UNIQ_9474526CA76ED395 (user_id)');
        $this->addSql('ALTER TABLE post DROP INDEX IDX_5A8A6C8DF675F31B, ADD UNIQUE INDEX UNIQ_5A8A6C8DF675F31B (author_id)');
    }
}