<?php
class CancelModel extends BaseModel {
    // キャンセル条件の取得
    public function get_cancel_data(){
        $cancel_array = [];
        try {
            $sql= "SELECT * FROM cancel  ";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $cancel_array[$row['id']] = $row['cancel'];
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $cancel_array;
    }
}
