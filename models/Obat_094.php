<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat_094".
 *
 * @property int $id
 * @property int $code_obat
 * @property string $harga
 * @property int $stok_obat
 */
class Obat_094 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_094';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_obat', 'harga', 'stok_obat'], 'required'],
            [['code_obat', 'stok_obat'], 'integer'],
            [['harga'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code_obat' => 'Code Obat',
            'harga' => 'Harga',
            'stok_obat' => 'Stok Obat',
        ];
    }
}
