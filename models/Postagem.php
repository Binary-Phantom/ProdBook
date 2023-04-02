<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "postagem".
 *
 * @property int $id
 * @property int|null $produtor_id
 * @property string|null $imagem
 * @property string $mensagem
 * @property string $data
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 *
 * @property Produtor $produtor
 */
class Postagem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'postagem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['produtor_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['mensagem', 'data', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['imagem', 'mensagem', 'data'], 'string', 'max' => 255],
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
            'data' => 'Data',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
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
