<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250403205943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('DROP SEQUENCE artwork_id_seq CASCADE');
        $this->addSql('ALTER TABLE artwork ALTER id TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE artwork ALTER id DROP DEFAULT');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE artwork_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE artwork ALTER id TYPE INT');
        $this->addSql('CREATE SEQUENCE artwork_id_seq');
        $this->addSql('SELECT setval(\'artwork_id_seq\', (SELECT MAX(id) FROM artwork))');
        $this->addSql('ALTER TABLE artwork ALTER id SET DEFAULT nextval(\'artwork_id_seq\')');
    }
}
