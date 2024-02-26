<?php
class ShowersModel extends BaseModel {
    // シャワー等の有無の取得
    public function get_showers_data(){
        $showers_array = [];
        try {
            $sql= "SELECT * FROM showers  ";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $showers_array[$row['id']] = $row['showers'];
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $showers_array;
    }
}
