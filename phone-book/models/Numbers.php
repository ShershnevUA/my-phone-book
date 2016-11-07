<?php

class Numbers
{
    public static function getNumbers()
    {

        $numbers = array();

        $db = Db::getConnection();

        $result = $db->query("SELECT * FROM `numbers` ORDER BY `time` DESC ");
        $i = 0;

        while ($row = $result->fetch()) {
            $numbers[$i]['id'] = $row['id'];
            $numbers[$i]['name'] = $row['name'];
            $numbers[$i]['number'] = $row['number'];
            $numbers[$i]['description'] = $row['description'];
            $i++;
        }
        return $numbers;
    }

    public static function getNumderById($id)
    {
        $id = intval($id);
        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM numbers WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $number = $result->fetch();
            return $number;
        }
    }

    public static function setNumber($data)
    {

        if ($data) {
            $numberData = $data;
            $db = Db::getConnection();

            $result = $db->query('
                INSERT INTO `numbers` SET
                `name` = "' . $numberData['name'] . '",
                `number` = "' . $numberData['number'] . '",
                `description` = "' . $numberData['description'] . '",
                `time` = "' . $numberData['time'] . '";');
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return true;
        } else return false;
    }

    public static function updateNumber($id, $data)
    {
        $id = intval($id);
        $numberData = $data;
        if ($id && $numberData) {

            $db = Db::getConnection();
            $result = $db->prepare('
                UPDATE `numbers` SET
                `name` = "' . $numberData['name'] . '",
                `number` = "' . $numberData['number'] . '",
                `description` = "' . $numberData['description'] . '" WHERE `id`="' . $id.'";');
            $result->execute();
            return true;
        } else return false;
    }

    public static function deleteNumderById($id)
    {
        $id = intval($id);
        if ($id) {

            $db = Db::getConnection();
            $result = $db->prepare('DELETE FROM numbers WHERE id=' . $id);
            $result->execute();
            if ($result->rowCount()){
                return true;
            }else return false;
        }
    }
}
