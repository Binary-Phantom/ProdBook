<?php

use yii\db\Migration;

/**
 * Class m230402_203602_produtor
 */
class m230402_203602_produtor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #PRODUTOR(ID,NOME,EMAIL,SENHA,LOCALIDADE)

        $this-> createTable('produtor', [
            'id'=>$this->primaryKey(),
            'localidade_id'=>$this->integer(),
            'nome'=>$this->string()->notNull(),
            'email'=>$this->string()->notNull(),
            'senha'=>$this->string()->notNull()
            
         ]);

         $this->addForeignKey('localidade_fk', 'produtor', 'localidade_id', 'localidade','id', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropForeignKey('localidade_fk', 'produtor');
       $this->dropTable('produtor');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230402_203602_produtor cannot be reverted.\n";

        return false;
    }
    */
}
