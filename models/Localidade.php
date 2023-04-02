<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "localidade".
 *
 * @property int $id
 * @property string|null $nome
 *
 * @property Marketplace[] $marketplaces
 * @property Produtor[] $produtors
 */
class Localidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'localidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
        ];
    }

    /**
     * Gets query for [[Marketplaces]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketplaces()
    {
        return $this->hasMany(Marketplace::class, ['localidade_id' => 'id']);
    }

    /**
     * Gets query for [[Produtors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutors()
    {
        return $this->hasMany(Produtor::class, ['localidade_id' => 'id']);
    }
}
