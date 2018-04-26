<?php declare(strict_types = 1);

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180426135325 extends AbstractMigration
{
    /**
     * Возвращает описание этой миграции.
     */
    public function getDescription()
    {
        $description = 'This is the initial migration which creates blog tables.';
        return $description;
    }

    public function up(Schema $schema)
    {
        $table = $schema->createTable('post');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]);
        $table->addColumn('title', 'text', ['notnull'=>true]);
        $table->addColumn('content', 'text', ['notnull'=>true]);
        $table->addColumn('status', 'integer', ['notnull'=>true]);
        $table->addColumn('status2', 'integer', ['notnull'=>true]);
        $table->addColumn('date_created', 'datetime', ['notnull'=>true]);
        $table->setPrimaryKey(['id']);
        $table->addOption('engine' , 'InnoDB');

    }

    public function down(Schema $schema)
    {
        $schema->dropTable('post');

    }
}
