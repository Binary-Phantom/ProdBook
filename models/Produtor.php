<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtor".
 *
 * @property int $id
 * @property int|null $localidade_id
 * @property string $nome
 * @property string $email
 * @property string $senha
 *
 * @property Localidade $localidade
 * @property Marketplace[] $marketplaces
 * @property Postagem[] $postagems
 */
class Produtor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['localidade_id'], 'integer'],
            [['nome', 'email', 'senha'], 'required'],
            [['nome', 'email', 'senha'], 'string', 'max' => 255],
            [['localidade_id'], 'exist', 'skipOnError' => true, 'targetClass' => Localidade::class, 'targetAttribute' => ['localidade_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'localidade_id' => 'Localidade ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'senha' => 'Senha',
        ];
    }

    /**
     * Gets query for [[Localidade]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocalidade()
    {
        return $this->hasOne(Localidade::class, ['id' => 'localidade_id']);
    }

    /**
     * Gets query for [[Marketplaces]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketplaces()
    {
        return $this->hasMany(Marketplace::class, ['produtor_id' => 'id']);
    }

    /**
     * Gets query for [[Postagems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPostagems()
    {
        return $this->hasMany(Postagem::class, ['produtor_id' => 'id']);
    }
}
