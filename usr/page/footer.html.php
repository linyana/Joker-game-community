<div class="footer">
    <p class="footer_p">你觉得对就队</p>
    <p class="footer_p">国信安网页设计大赛参赛作品</p>
</div>
<?php
include_once __ROOT_DIR__ . '/etc/LayoutController.php';

use joker\LayoutController;

global $content;
LayoutController::addJavaScript(__JS__['nav']);
switch ($content){
    case 'content0':
        LayoutController::addJavaScript(__JS__['banner']);
        break;
    case 'profile-follow':
        LayoutController::addJavaScript(__JS__['profile']);
        break;
    case 'game':
        LayoutController::addJavaScript(__JS__['game_detail'].'.php');
        break;
}
?>
</body>
</html>
