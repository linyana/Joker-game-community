<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Joker游戏社区</title>
    <?php

    include __ROOT_DIR__ . '/etc/LayoutController.php';

    use joker\LayoutController;

    global $content;
    switch ($content) {
        case 'login':
        case 'logon':
            //LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['login']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case 'content0':
            LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['content-wrapper']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['banner']);
            LayoutController::addCSSLink(__STYLE__['content0']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case 'comment':
            LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['comment']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case 'search':
            LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['search']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case 'searchResult':
            LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['searchResult']);
            LayoutController::addCSSLink(__STYLE__['content-wrapper']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case 'profile':
            LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['content-wrapper']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['profile']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case 'profile-follow':
            LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['content-wrapper']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['follower']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case 'game':
            LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['content-wrapper']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['game']);
            LayoutController::addCSSLink(__STYLE__['comment-block']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case 'games':
            LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['content-wrapper']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['content1']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case 'community':
            LayoutController::addCSSLink(__STYLE__['header']);
            LayoutController::addCSSLink(__STYLE__['content-wrapper']);
            LayoutController::addCSSLink(__STYLE__['nav']);
            LayoutController::addCSSLink(__STYLE__['content2']);
            LayoutController::addCSSLink(__STYLE__['comment-block']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
        case '404':
        default:
            LayoutController::addCSSLink(__STYLE__['404']);
            LayoutController::addCSSLink(__STYLE__['footer']);
            break;
    }
    ?>
</head>