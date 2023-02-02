<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230130101332 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE compose');
        $this->addSql('DROP TABLE détails_commande');
        $this->addSql('DROP TABLE historiquecommande');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE produit');
        $this->addSql('ALTER TABLE utilisateur CHANGE IdUser IdUser INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compose (IdProduit_ INT NOT NULL, idCommande INT NOT NULL, INDEX idCommande (idCommande), PRIMARY KEY(IdProduit_, idCommande)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE détails_commande (IdProduit_ INT NOT NULL, IdPanier INT NOT NULL, Quantité INT DEFAULT NULL, Remise DOUBLE PRECISION DEFAULT NULL, INDEX IdPanier (IdPanier), PRIMARY KEY(IdProduit_, IdPanier)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE historiquecommande (idCommande INT NOT NULL, PrixTotal NUMERIC(4, 2) DEFAULT NULL, DateCommande DATE DEFAULT NULL, PRIMARY KEY(idCommande)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE panier (IdPanier INT NOT NULL, PrixTotal NUMERIC(4, 2) DEFAULT NULL, IdUser INT NOT NULL, INDEX IdUser (IdUser), PRIMARY KEY(IdPanier)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE produit (IdProduit_ INT NOT NULL, Nom VARCHAR(150) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, Prix NUMERIC(5, 2) DEFAULT NULL, Référence VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, Photo VARCHAR(150) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(IdProduit_)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE utilisateur CHANGE IdUser IdUser INT NOT NULL');
    }
}
