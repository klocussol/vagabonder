<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130725015003 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE Trip ADD user_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE Trip ADD CONSTRAINT FK_D6645A05A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)");
        $this->addSql("CREATE INDEX IDX_D6645A05A76ED395 ON Trip (user_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE Trip DROP FOREIGN KEY FK_D6645A05A76ED395");
        $this->addSql("DROP INDEX IDX_D6645A05A76ED395 ON Trip");
        $this->addSql("ALTER TABLE Trip DROP user_id");
    }
}
