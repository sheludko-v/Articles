<?php
    require_once 'config/db.php';
    require_once 'core/function_db.php';
    require_once 'core/function.php';

    $conn = connect();

    if (isset($_GET['route'])) {
        $route = $_GET['route'];
    } else {
        $route = '';
    }

    $route = explodeURL($route);


    switch ($route) {
        case ($route[0] == ''):
            $query = 'SELECT * FROM info';
            $result = select($query);
            $query2 = 'SELECT info.*, category.title FROM info, category WHERE category.id = info.cid';
            $result2 = select($query2);
            require_once 'template/main.php';
            break;
        case ($route[0] == 'article' && isset($route[1])):
            $url = $route[1];
            $result = getArticle($url);
            require_once 'template/article.php';
            break;
        case ($route[0] == 'cat' and isset($route[1])):
            $queryCat = 'SELECT info.*, category.title FROM info, category WHERE category.id = info.cid';
            $resultCat = select($queryCat);
            $url = $route[1];
            $cat = getCategory($url);
            $result = getCategoryArticle($cat['id']);
            require_once 'template/cat.php';
            break;
        case ($route[0] == 'register'):
            require_once 'template/register.php';
            break;
        case ($route[0] == 'login'):
            require_once 'template/login.php';
            break;
        case ($route[0] == 'admin' && isset($route[1]) && $route[1] === 'delete' && isset($route[2])):
            if (getUser()) {
                $query = "DELETE FROM info WHERE id=" . $route[2];
                execQuery($query);
                header("Location: /admin");
                exit;
            }
            header("Location: /");
            break;
        case ($route[0] == 'admin' && isset($route[1]) && $route[1] === 'create'):
            if (getUser()) {
                $query = "SELECT id, title FROM category";
                $category = select($query);
                require_once 'template/create.php';
            }
            break;
        case ($route[0] == 'admin' && isset($route[1]) && $route[1] === 'update' && isset($route[2])):
            if (getUser()) {
                $query = "SELECT id, title FROM category";
                $category = select($query);
                $query = "SELECT * FROM info where id=" . $route[2];
                $result = select($query)[0];
                require_once 'template/update.php';
            }
            break;
        case ($route[0] == 'admin'):
            $query = 'SELECT * FROM info';
            $result = select($query);
            $query2 = 'SELECT info.*, category.title FROM info, category WHERE category.id = info.cid';
            $result2 = select($query2);
            require_once 'template/admin.php';
            break;
        case ($route[0] == 'logout'):
            logout();
        default:
            require_once 'template/404.php';
    }
