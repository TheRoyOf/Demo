<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "program".
 *
 * @property int $id
 * @property string $title
 * @property int $use_template
 * @property string $description
 * @property string $shifts
 * @property string $content
 * @property string $start_date
 * @property string $end_date
 * @property string $preview_image
 * @property int $viewed
 * @property int $season
 * @property int $location
 * @property int $status
 * @property int $useLocalisation
 */
class Program extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['use_template', 'viewed', 'season', 'location', 'status','useLocalisation'], 'integer'],
            [['description', 'shifts', 'content'], 'string'],
            [['start_date', 'end_date'], 'date'],
            [['title', 'preview_image'], 'string', 'max' => 255],
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
            'use_template' => 'Использовать шаблон',
            'description' => 'Описание',
            'shifts' => 'Информация о сезоне',
            'content' => 'Контент',
            'start_date' => 'Дата начала (Год-месяц-день)',
            'end_date' => 'Дата конца (Год-месяц-день)',
            'preview_image' => 'Preview Image',
            'viewed' => 'Просмотры',
            'season' => 'Сезон',
            'location' => 'Регион',
            'status' => 'Статус',
            'useLocalisation' => 'Use Localisation',
        ];
    }

    public function saveImage($filename)
    {
        $this->preview_image = $filename;
        return $this->save(false);
    }


    public function getImage()
    {
        if($this->preview_image)
        {
            return '/web/uploads/'.$this->preview_image;
        }
        else
            return '/web/uploads/No_Image_Available.png';
    }


    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function isAllowed()
    {
        return $this->status;
    }

    public function viewedCounter()
    {
        $this->viewed += 1;
        return $this->save(false);
    }

    public static function getAll($pageSize = 10)
    {
        // build a DB query to get all articles
        $query = Program::find();
        // get the total number of articles (but do not fetch the article data yet)
        $count = $query->count();
        // create a pagination object with the total count
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>$pageSize]);
        // limit the query using the pagination and retrieve the articles
        $programs = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['programs'] = $programs;
        $data['pagination'] = $pagination;

        return $data;
    }
}
