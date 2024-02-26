<?php
class RequiredModel extends BaseModel {
    // 所要時間の取得
    public function get_required_time_data(){
        $required_time_array = [];
        try {
            $sql= "SELECT * FROM required_time  ";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $required_time_array[$row['id']] = $row['required_time'];
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $required_time_array;
    }
}
