<?php

use yii\db\Migration;

/**
 * Class m230402_203514_localidade
 */
class m230402_203514_localidade extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #LOCALIDADE(ID,NOME)

        $this-> createTable('localidade', [
           'id'=>$this->primaryKey(),
           'nome'=>$this->string() 
           
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('localidade');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230402_203514_localidade cannot be reverted.\n";

        return false;
    }
    */
}
