<?php

use yii\db\Migration;

/**
 * Class m230402_203620_postagem
 */
class m230402_203620_postagem extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #POSTAGEM(ID,NOME,EMAIL,SENHA,LOCALIDADE)

        $this-> createTable('postagem', [
            'id'=>$this->primaryKey(),
            'produtor_id'=>$this->integer(),
            'imagem'=>$this->string(),
            'mensagem'=>$this->string()->notNull(),
            'data'=>$this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
         ]);
         $this->addForeignKey('produtor_fk', 'postagem', 'produtor_id', 'produtor','id', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('produtor_fk', 'postagem');
        $this->dropTable('postagem');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230402_203620_postagem cannot be reverted.\n";

        return false;
    }
    */
}
