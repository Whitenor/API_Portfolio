<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230517121202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE projects_languages (projects_id INT NOT NULL, languages_id INT NOT NULL, INDEX IDX_796D94461EDE0F55 (projects_id), INDEX IDX_796D94465D237A9A (languages_id), PRIMARY KEY(projects_id, languages_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE projects_languages ADD CONSTRAINT FK_796D94461EDE0F55 FOREIGN KEY (projects_id) REFERENCES projects (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projects_languages ADD CONSTRAINT FK_796D94465D237A9A FOREIGN KEY (languages_id) REFERENCES languages (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projects_languages DROP FOREIGN KEY FK_796D94461EDE0F55');
        $this->addSql('ALTER TABLE projects_languages DROP FOREIGN KEY FK_796D94465D237A9A');
        $this->addSql('DROP TABLE projects_languages');
    }
}
