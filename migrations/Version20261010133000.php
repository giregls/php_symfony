<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261010133000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Link restaurants and comments to their users';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE restaurant ADD proprietaire_id INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_RESTAURANT_PROPRIETAIRE ON restaurant (proprietaire_id)');
        $this->addSql('ALTER TABLE restaurant ADD CONSTRAINT FK_RESTAURANT_PROPRIETAIRE FOREIGN KEY (proprietaire_id) REFERENCES "user" (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE commentaire ADD auteur_id INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_COMMENTAIRE_AUTEUR ON commentaire (auteur_id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_COMMENTAIRE_AUTEUR FOREIGN KEY (auteur_id) REFERENCES "user" (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE commentaire DROP CONSTRAINT FK_COMMENTAIRE_AUTEUR');
        $this->addSql('DROP INDEX IDX_COMMENTAIRE_AUTEUR');
        $this->addSql('ALTER TABLE commentaire DROP auteur_id');
        $this->addSql('ALTER TABLE restaurant DROP CONSTRAINT FK_RESTAURANT_PROPRIETAIRE');
        $this->addSql('DROP INDEX IDX_RESTAURANT_PROPRIETAIRE');
        $this->addSql('ALTER TABLE restaurant DROP proprietaire_id');
    }
}