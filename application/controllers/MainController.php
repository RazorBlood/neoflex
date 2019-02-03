<?
namespace application\controllers;

use application\models\Article;
use application\models\Rubric;
use Smarty;
use application\config\Config;

class MainController
{
    public function __construct()
    {
        include __DIR__.'\..\..\libs\Smarty.class.php';
    }
    
    public function index()
    {
        $smarty     = new Smarty;
        $config     = new Config;
        $rubric     = new Rubric();
        $articles   = new Article();


        $smarty->assign("articles", $articles->getArticles());
        $smarty->assign("rubrics", $rubric->getRubrics());
        $smarty->assign("view", $config->view);
        $smarty->assign("css", $config->js);
        $smarty->assign("js", $config->css);

        $smarty->display($config->view.'index.tpl');
    }
}