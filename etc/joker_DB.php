<?php

namespace joker_DB;

/**
 *
 */
class joker_DB
{
    /**
     * @var joker_DB
     * 公开实例，供其他位置调用
     */
    public static joker_DB $_instance;
    /**
     * @var array
     * 数据库配置
     */
    private array $config;
    /**
     * @var
     * 数据库链接
     */
    private $connection;


    /**
     * @param joker_DB $db
     * @return void
     * 设置公开实例
     */
    public static function set(joker_DB $db)
    {
        self::$_instance = $db;
    }

    /**
     * @param $config
     * @return void
     * 建立数据库服务器链接
     */
    public function addServer($config)
    {
        $this->config = $config;
        $this->connect();
    }

    /**
     * @return void
     * 连接到数据库
     */
    private function connect()
    {
        $this->connection = mysqli_connect($this->config['host'],
            $this->config['user'],
            $this->config['passwd'],
            $this->config['database'],
            $this->config['port'],
        //$this->config['socket']
        );
        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    /**
     * @param string $account
     * @param string $password
     * @return int
     * 用户登录，登录成功返回uid
     */
    public function login(string $account, string $password): int
    {
        if ($stmt = $this->connection->prepare('SELECT user_id,user_password FROM user WHERE user_name = ?')) {
            $passwdHash = '';
            $uid = -1;
            $stmt->bind_param("s", $account);
            $stmt->execute();
            $stmt->bind_result($uid, $passwdHash);
            $stmt->fetch();
            $stmt->close();
            if (password_verify($password, $passwdHash) & $uid > -1) {
                return $uid;
            }
            return -1;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    /**
     * @param string $account
     * @param string $password
     * @return bool
     * 用户注册
     */
    public function logon(string $account, string $password): bool
    {
        if ($stmt = $this->connection->prepare('SELECT user_name FROM user WHERE user_name = ?')) {
            $result = null;
            $stmt->bind_param("s", $account);
            $stmt->execute();
            $stmt->bind_result($result);
            $stmt->fetch();
            $stmt->close();
            if (is_null($result)) {
                if ($logon = $this->connection->prepare('INSERT INTO user (user_id, user_name, user_password) VALUES (?,?,?)')) {
                    $uid = $this->getMaxEntityID() + 1;
                    if ($entityStmt = $this->connection->prepare('INSERT INTO entity (entity_id, entity_type) VALUES (?,?)')) {
                        $entityType = 'user';
                        $entityStmt->bind_param("is", $uid, $entityType);
                        $entityStmt->execute();
                        $entityStmt->close();
                    } else return false;
                    $logon->bind_param("iss", $uid, $account, $password);
                    $logon->execute();
                    $logon->close();
                    return true;
                } else return false;
            } elseif ($result === $account) {
                return false;
            }
            return false;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    /**
     * @return int|void
     * 获取已注册的最大entity_id
     */
    private function getMaxEntityID()
    {
        if ($stmt = $this->connection->prepare('SELECT MAX(entity_id) FROM entity')) {
            $max_uid = 0;
            $stmt->execute();
            $stmt->bind_result($max_uid);
            $stmt->fetch();
            $stmt->close();
            return $max_uid;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    /**
     * @param int $uid
     * @return string|void
     * 按uid获取用户头像
     */
    public function getAvatar(int $uid)
    {
        if ($stmt = $this->connection->prepare('SELECT user_avatar FROM user WHERE user_id = ?')) {
            $avatar = '';
            $stmt->bind_param('i', $uid);
            $stmt->execute();
            $stmt->bind_result($avatar);
            $stmt->fetch();
            $stmt->close();
            return $avatar;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    /**
     * @param $uid
     * @return bool|void
     * 判断是否存在uid
     */
    public function existsUID($uid)
    {
        if ($stmt = $this->connection->prepare('SELECT user_id FROM user WHERE user_id = ?')) {
            $id = null;
            $stmt->bind_param('i', $uid);
            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->fetch();
            $stmt->close();
            if ($id !== null) {
                return TRUE;
            }
            return false;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    /**
     * @param $s
     * @return false|mysqli_result
     * 评论模糊查询
     */
    public function search($s)
    {
        if ($stmt = $this->connection->prepare('SELECT * FROM comment WHERE comment_text LIKE ? LIMIT 100')) {
            $s = '%' . $s . '%';
            $stmt->bind_param('s', $s);
            $stmt->execute();
            //$stmt->store_result();
            if ($stmt->affected_rows) {
                return $stmt->get_result();
            }
            $stmt->close();
            return false;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    /**
     * @param $gid
     * @return false|mysqli_result
     * 游戏详情
     */
    public function queryGame($gid)
    {
        if ($stmt = $this->connection->prepare('SELECT * FROM game WHERE game_id = ?')) {
            $stmt->bind_param('i', $gid);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    public function queryTopGame()
    {
        if ($stmt = $this->connection->prepare('SELECT * FROM game LIMIT 8')) {
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    public function queryGamePics($gid){
        if ($stmt = $this->connection->prepare('SELECT * FROM game_pictures WHERE game_id = ?')) {
            $stmt->bind_param('i', $gid);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    /**
     * @return false|mysqli_result
     *
     */
    public function queryUser($uid)
    {
        if ($stmt = $this->connection->prepare('SELECT * FROM user WHERE user_id = ?')) {
            $stmt->bind_param('i', $uid);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_assoc();
            $stmt->close();
            return $result;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    public function queryFollowers($uid){
        if ($stmt = $this->connection->prepare('SELECT * FROM followed_entity WHERE entity_id = ?')) {
            $stmt->bind_param('i', $uid);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    public function queryUserComment($uid)
    {
        if ($stmt = $this->connection->prepare('SELECT * FROM comment WHERE user_id = ?')) {
            $stmt->bind_param('i', $uid);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    public function queryEntityComment($gid)
    {
        if ($stmt = $this->connection->prepare('SELECT * FROM comment WHERE comment_to_entity_id = ?')) {
            $stmt->bind_param('i', $gid);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    public function queryTopComments($gid)
    {
        if ($stmt = $this->connection->prepare('SELECT * FROM comment WHERE comment_to_entity_id = ? LIMIT 10')) {
            $stmt->bind_param('i', $gid);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    public function queryComment($cid)
    {
        if ($stmt = $this->connection->prepare('SELECT * FROM comment WHERE comment_id = ?')) {
            $stmt->bind_param('i', $cid);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    public function queryLatestComment()
    {
        if ($stmt = $this->connection->prepare('SELECT * FROM comment ORDER BY comment_id DESC LIMIT 50')) {
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            return $result;

        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }

    public function addComment($to, $uid, $datetime, $comment_text)
    {
        if ($stmt = $this->connection->prepare('INSERT INTO comment (comment_id, comment_to_entity_id, user_id, comment_time, comment_text) VALUES (?,?,?,?,?)')) {
            $comment_id = $this->getMaxEntityID() + 1;
            if ($entityStmt = $this->connection->prepare('INSERT INTO entity (entity_id, entity_type) VALUES (?,?);')) {
                $entityType = 'comment';
                $entityStmt->bind_param("is", $comment_id, $entityType);
                $entityStmt->execute();
                $entityStmt->close();
            } else return false;
            $stmt->bind_param("iiiss", $comment_id, $to, $uid, $datetime, $comment_text);
            $stmt->execute();
            if($stmt->affected_rows > 0){
                $stmt->close();
                return true;
            }else{
                $stmt->close();
                return false;
            }
        } else {
            print_r($this->connection->error_list);
            die('sql connection error');
        }
    }
}