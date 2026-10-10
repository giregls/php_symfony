<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261010140000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Align relation index names with Doctrine';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER INDEX idx_restaurant_ville RENAME TO IDX_EB95123FA73F0036');
        $this->addSql('ALTER INDEX idx_restaurant_proprietaire RENAME TO IDX_EB95123F76C50E4A');
        $this->addSql('ALTER INDEX idx_commentaire_restaurant RENAME TO IDX_67F068BCB1E7706E');
        $this->addSql('ALTER INDEX idx_commentaire_auteur RENAME TO IDX_67F068BC60BB6FE6');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER INDEX IDX_EB95123FA73F0036 RENAME TO idx_restaurant_ville');
        $this->addSql('ALTER INDEX IDX_EB95123F76C50E4A RENAME TO idx_restaurant_proprietaire');
        $this->addSql('ALTER INDEX IDX_67F068BCB1E7706E RENAME TO idx_commentaire_restaurant');
        $this->addSql('ALTER INDEX IDX_67F068BC60BB6FE6 RENAME TO idx_commentaire_auteur');
    }
}