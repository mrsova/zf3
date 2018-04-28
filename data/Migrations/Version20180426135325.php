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
        /**
         * Категории
         */
        $table = $schema->createTable('category');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]);
        $table->addColumn('category_key', 'string',['notnull'=>false,'length'=>128]);
        $table->addColumn('category_name', 'string',['notnull'=>false,'length'=>128]);
        $table->addColumn('date_created', 'datetime', ['notnull'=>false]);
        $table->setPrimaryKey(['id']);
        $table->addUniqueIndex(['category_key'], 'category_key', [],[]);
        $table->addOption('engine' , 'InnoDB');

        /**
         * ПОсты
         */
        $table = $schema->createTable('article');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]);
        $table->addColumn('category_id', 'integer',['notnull'=>false]);
        $table->addColumn('title', 'string',['notnull'=>false,'length'=>100]);
        $table->addColumn('article', 'string',['notnull'=>false,'length'=>255]);
        $table->addColumn('short_article', 'string',['notnull'=>false,'length'=>255]);
        $table->addColumn('is_public', 'boolean',['notnull'=>false, 'default'=>0]);
        $table->addColumn('date_created', 'datetime', ['notnull'=>false]);
        $table->setPrimaryKey(['id']);
        $table->addIndex(['category_id'], 'category_id_index');
        $table->addForeignKeyConstraint('category', ['category_id'], ['id'], ['onUpdate'=>'CASCADE'], 'post_category_id_fk');
        $table->addOption('engine' , 'InnoDB');

        /**
         * Комментарии
         */
        $table = $schema->createTable('comment');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]);
        $table->addColumn('article_id', 'integer',['notnull'=>false,'length'=>128]);
        $table->addColumn('user_email', 'string',['notnull'=>false,'length'=>128]);
        $table->addColumn('comment', 'string',['notnull'=>false,'length'=>128]);
        $table->addColumn('date_created', 'datetime', ['notnull'=>false]);
        $table->setPrimaryKey(['id']);
        $table->addIndex(['article_id'], 'article_id');
        $table->addForeignKeyConstraint('article', ['article_id'], ['id'], ['onUpdate'=>'CASCADE'], 'comment_article_id_fk');
        $table->addOption('engine' , 'InnoDB');

    }

    public function down(Schema $schema)
    {
        $schema->dropTable('category');
        $schema->dropTable('article');
        $schema->dropTable('comment');

    }
}
