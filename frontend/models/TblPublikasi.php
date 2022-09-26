<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "tbl_publikasi".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $src
 * @property string|null $tags
 * @property string|null $filetype
 */
class TblPublikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_publikasi';
    }

    public $src_file;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['created_at','updated_at','uploaded_by'], 'integer'],
            [['src_file'], 'safe'],
            [['src_file'], 'file', 'extensions' => 'png, jpg, jpeg, docx, doc, pdf'],
            [['src_file'], 'file', 'maxSize' => '1000000'],
            [['title', 'tags', 'filetype', 'src_filename','web_filename'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'src_filename' => 'Filename',
            'web_filename' => 'Pathname',
            'tags' => 'Tags',
            'filetype' => 'Filetype',
        ];
    }
}
