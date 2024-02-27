<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240224124345 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE freelancer (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, data JSON DEFAULT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, status SMALLINT NOT NULL, files JSON DEFAULT NULL, description LONGTEXT DEFAULT NULL, skills JSON DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, parent INT DEFAULT NULL, label VARBINARY(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        

        
        // Insert Sections with label as 1
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Domaine d\'expertise', NULL, 1);"); // ID 1
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Technologies maîtrisées', NULL, 1);"); // ID 2
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Localisation', NULL, 1);"); // ID 3

        // Insert Subsections of "Domaine d'expertise" with parent ID and label as 1
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Développement', 1, 1);"); // ID 4
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Gestion de projet', 1, 1);"); // ID 5
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Design', 1, 1);"); // ID 6
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Data Science', 1, 1);"); // ID 7

        // Insert Subsections of "Technologies maîtrisées"
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Langages de programmation', 2, 1);"); // ID 8
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Frameworks & Bibliothèques', 2, 1);"); // ID 9
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Outils de développement', 2, 1);"); // ID 10

        // Insert Subsections of "Localisation"
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Type de travail', 3, 1);"); // ID 11
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Zone géographique', 3, 1);"); // ID 12

        // Insert Options with parent ID of the subsection and label as 0
        // Options for "Développement"
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Front-end', 4, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Back-end', 4, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Full-stack', 4, 0);");

        // Gestion de projet Options
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Product Owner', 5, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('PMO', 5, 0);");

        // Design Options
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('UI/UX', 6, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Graphique', 6, 0);");

        // Data Science Options
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Analyse de données', 7, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Machine Learning', 7, 0);");

        // Langages de programmation Options
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('JavaScript', 8, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Python', 8, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Java', 8, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('C#', 8, 0);");

        // Frameworks & Bibliothèques Options
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('React', 9, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Angular', 9, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Vue.js', 9, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Django', 9, 0);");

        // Outils de développement Options
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Docker', 10, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Git', 10, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Jenkins', 10, 0);");

        // Type de travail Options
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Sur site', 11, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Télétravail', 11, 0);");

        // Zone géographique Options
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Amérique du Nord', 12, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Europe', 12, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Asie', 12, 0);");
        $this->addSql("INSERT INTO skill (name, parent, label) VALUES ('Télétravail global', 12, 0);");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE freelancer');
        $this->addSql('DROP TABLE skill');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
