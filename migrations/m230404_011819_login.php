<?php

use yii\db\Migration;

/**
 * Class m230404_011819_login
 */
class m230404_011819_login extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('produtor', 'email', 'string unique');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('produtor', 'email', 'string');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230404_011819_login cannot be reverted.\n";

        return false;
    }
    */
}
