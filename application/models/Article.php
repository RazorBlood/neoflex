<?php

namespace application\models;

class Article extends Model
{
    public function getArticles()
    {
        return $this->db->row('
            SELECT 
                a.*,
                at.name as author_name,
                at.patronymic as author_patronymic,
                at.surname as author_surname
            FROM 
                articles a 
            LEFT JOIN 
                authors at ON at.id = a.author_id
            ORDER BY 
                a.id DESC
        ');
    }

    public function getArticlesByRubricId($rubric_id)
    {
        return $this->db->row("
            SELECT 
                a.*,
                at.name as author_name,
                at.patronymic as author_patronymic,
                at.surname as author_surname
            FROM 
                article_rubric ar
            LEFT JOIN 
                articles a ON ar.article_id = a.id
            LEFT JOIN 
                authors at ON at.id = a.author_id
            WHERE 
                ar.rubric_id = $rubric_id
            ORDER BY 
                a.id DESC
        ");
    }

    public function getArticlesById($id)
    {
        return $this->db->row("
            SELECT 
                a.*,
                at.name as author_name,
                at.patronymic as author_patronymic,
                at.surname as author_surname
            FROM 
                articles a 
            LEFT JOIN 
                authors at ON at.id = a.author_id
            WHERE 
                a.id = $id
        ");
    }
}