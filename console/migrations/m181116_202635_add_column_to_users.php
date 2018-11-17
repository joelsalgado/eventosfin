<?php

use yii\db\Migration;

/**
 * Class m181116_202635_add_column_to_users
 */
class m181116_202635_add_column_to_users extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('user', 'region_id', $this->integer()->after('role'));

        $this->addForeignKey(
            'fk-region_user',
            'user',
            'region_id',
            'cat_regiones_sedesem',
            'REGIONID',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m181116_202635_add_column_to_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_202635_add_column_to_users cannot be reverted.\n";

        return false;
    }
    */
}
