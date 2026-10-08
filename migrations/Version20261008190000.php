<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261008190000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Rename commentaire.commentaire column to contenu';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE commentaire RENAME COLUMN commentaire TO contenu');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE commentaire RENAME COLUMN contenu TO commentaire');
    }
}