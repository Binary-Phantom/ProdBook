<?php

use yii\db\Migration;

/**
 * Class m230402_222108_marketplace
 */
class m230402_222108_marketplace extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         #MARKETPLACE(ID,NOME,EMAIL,SENHA,LOCALIDADE)

     $this->createTable('marketplace', [
        'id'=>$this->primaryKey(),
        'produtor_id'=>$this->integer(),
        'imagem'=>$this->string(),
        'mensagem'=>$this->string()->notNull(),
        'localidade_id'=> $this->integer(),
        'created_at' => $this->integer()->notNull(),
        'created_by' => $this->integer()->notNull(),
        'updated_at' => $this->integer()->notNull(),
        'updated_by' => $this->integer()->notNull(),
     ]);
     $this->addForeignKey('produtormk_fk', 'marketplace', 'produtor_id', 'produtor','id');
     $this->addForeignKey('localidademk_fk', 'marketplace', 'localidade_id', 'localidade','id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('produtormk_fk', 'marketplace');
        $this->dropForeignKey('localidademk_fk', 'marketplace');
        $this->dropTable('marketplace');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230402_222108_marketplace cannot be reverted.\n";

        return false;
    }
    */
}
