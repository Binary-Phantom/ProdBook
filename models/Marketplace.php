<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marketplace".
 *
 * @property int $id
 * @property int|null $produtor_id
 * @property string|null $imagem
 * @property string $mensagem
 * @property int|null $localidade_id
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 *
 * @property Localidade $localidade
 * @property Produtor $produtor
 */
class Marketplace extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marketplace';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['produtor_id', 'localidade_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['mensagem', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['imagem', 'mensagem'], 'string', 'max' => 255],
            [['localidade_id'], 'exist', 'skipOnError' => true, 'targetClass' => Localidade::class, 'targetAttribute' => ['localidade_id' => 'id']],
            [['produtor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produtor::class, 'targetAttribute' => ['produtor_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'produtor_id' => 'Produtor ID',
            'imagem' => 'Imagem',
            'mensagem' => 'Mensagem',
            'localidade_id' => 'Localidade ID',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
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
     * Gets query for [[Produtor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutor()
    {
        return $this->hasOne(Produtor::class, ['id' => 'produtor_id']);
    }
}
