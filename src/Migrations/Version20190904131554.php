<?php

namespace Pimcore\Bundle\DataHubBundle\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Pimcore\Migrations\Migration\AbstractPimcoreMigration;

class Version20190904131554 extends AbstractPimcoreMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql('        
                    CREATE TABLE IF NOT EXISTS `plugin_datahub_workspaces_document` (
                        `cid` INT(11) UNSIGNED NOT NULL DEFAULT \'0\',
                        `cpath` VARCHAR(765) NULL DEFAULT NULL COLLATE \'utf8_general_ci\',
                        `configuration` VARCHAR(50) NOT NULL DEFAULT \'0\',
                        `create` TINYINT(1) UNSIGNED NULL DEFAULT \'0\',
                        `read` TINYINT(1) UNSIGNED NULL DEFAULT \'0\',
                        `update` TINYINT(1) UNSIGNED NULL DEFAULT \'0\',
                        `delete` TINYINT(1) UNSIGNED NULL DEFAULT \'0\',                    
                        PRIMARY KEY (`cid`, `configuration`)                
                        )
                    COLLATE=\'utf8mb4_general_ci\'
                    ENGINE=InnoDB
                    ;            
        ');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // not needed
    }
}
