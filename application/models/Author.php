<?php

namespace application\models;

class Author extends Model
{
    public function getAuthorByName( $name, $patronymic, $surname )
    {
        $author_id = $this->db->column("
            SELECT 
                *
            FROM 
                authors
            WHERE 
                surname = '$surname'
            AND
                name = '$name'
            AND 
                patronymic = '$patronymic'
        ");

        if (empty($author_id)){
            $author_id = $this->db->insert("
                INSERT INTO authors 
                    (surname, name, patronymic) 
                VALUES 
                    ('$surname', '$name', '$patronymic')
            ");
        }

        return $author_id;
    }
}