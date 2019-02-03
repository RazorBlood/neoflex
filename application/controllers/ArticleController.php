<?php

namespace application\controllers;


use application\core\Errors;
use application\config\Config;
use application\models\Article;
use application\models\Author;
use Smarty;

class ArticleController extends Controller
{
    public $errors = '';

    public function add()
    {
        if (!empty($_POST)){
            $article = $_POST;
            $author  = new Author();

            foreach ($article as $key => $value){
                if (!$value)
                    $this->errors .= "Поле $key не должно быть пустым";
            }

            $author_id = $author->getAuthorByName( trim($article['name']), trim($article['patronymic']), trim($article['surname']) );

            if (!$this->errors){
                $article_id = $this->db->insert("
                    INSERT INTO articles 
                        (title, text, author_id) 
                    VALUES 
                        ({$article['title']}, {$article['text']}, {$author_id})
                ");

                $this->db->column("
                    INSERT INTO article_rubric 
                        (article_id, rubric_id) 
                    VALUES 
                        ($article_id, {$article['rubric_id']})
                ");

                include __DIR__.'\..\..\libs\Smarty.class.php';

                $article = new Article();
                $smarty  = new Smarty;
                $config  = new Config;

                $smarty->assign("articles", $article->getArticlesById($article_id));

                $smarty->display($config->view.'article.tpl');
            }else{
                return Errors::getError('ОШИБКА: '.$this->errors);
            }

        }else{
            return Errors::getError('ОШИБКА: Форма не должна быть пуста');
        }
    }

    public function getArticlesByRubricId()
    {
        $rubric_id = intval($_POST['rubric_id']);

        if ($rubric_id){
            include __DIR__.'\..\..\libs\Smarty.class.php';

            $article = new Article();
            $smarty  = new Smarty;
            $config  = new Config;

            $smarty->assign("articles", $article->getArticlesByRubricId($rubric_id));

            $smarty->display($config->view.'article.tpl');
        }


    }
}