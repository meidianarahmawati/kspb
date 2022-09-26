<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "publikasi".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $thumbnail
 * @property string|null $tags
 * @property string|null $filetype
 */
class Publikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publikasi';
    }

    public $thumbnail_file;
    public $attachment_file;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['created_at','updated_at','uploaded_by'], 'integer'],
            [['thumbnail_file','attachment_file'], 'safe'],
            [['thumbnail_file'], 'file', 'extensions' => 'png, jpg, jpeg, gif'],
            [['attachment_file'], 'file', 'extensions' => 'docx, doc, pdf'],
            [['thumbnail_file'], 'file', 'maxSize' => '1000000'],
            [['attachment_file'], 'file', 'maxSize' => '100000000'],
            [['title', 'tags', 'thumbnail_src_filename','thumbnail_web_filename', 'attachment_src_filename','attachment_web_filename'], 'string', 'max' => 255],
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
            'thumbnail_web_filename' => 'Thumbnail Pathname',
            'thumbnail_src_filename' => 'Thumbnail Filename',
            'attachment_web_filename' => 'Attachment Pathname',
            'attachment_src_filename' => 'Attachment Filename',
            'tags' => 'Tags',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'uploaded_by' => 'Uploaded By',
        ];
    }
}
