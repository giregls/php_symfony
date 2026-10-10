<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261010120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add restaurant city and comment fields and relations';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE restaurant ADD ville_id INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_RESTAURANT_VILLE ON restaurant (ville_id)');
        $this->addSql('ALTER TABLE restaurant ADD CONSTRAINT FK_RESTAURANT_VILLE FOREIGN KEY (ville_id) REFERENCES ville (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE commentaire ADD restaurant_id INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_COMMENTAIRE_RESTAURANT ON commentaire (restaurant_id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_COMMENTAIRE_RESTAURANT FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD rating INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD date_creation TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE commentaire DROP CONSTRAINT FK_COMMENTAIRE_RESTAURANT');
        $this->addSql('DROP INDEX IDX_COMMENTAIRE_RESTAURANT');
        $this->addSql('ALTER TABLE commentaire DROP restaurant_id');
        $this->addSql('ALTER TABLE commentaire DROP rating');
        $this->addSql('ALTER TABLE commentaire DROP date_creation');
        $this->addSql('ALTER TABLE restaurant DROP CONSTRAINT FK_RESTAURANT_VILLE');
        $this->addSql('DROP INDEX IDX_RESTAURANT_VILLE');
        $this->addSql('ALTER TABLE restaurant DROP ville_id');
    }
}