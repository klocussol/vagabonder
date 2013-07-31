<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130729063414 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE Destination (id INT AUTO_INCREMENT NOT NULL, city VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE Trip ADD destination_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE Trip ADD CONSTRAINT FK_D6645A05816C6140 FOREIGN KEY (destination_id) REFERENCES Destination (id)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_D6645A05816C6140 ON Trip (destination_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE Trip DROP FOREIGN KEY FK_D6645A05816C6140");
        $this->addSql("DROP TABLE Destination");
        $this->addSql("DROP INDEX UNIQ_D6645A05816C6140 ON Trip");
        $this->addSql("ALTER TABLE Trip DROP destination_id");
    }
}
