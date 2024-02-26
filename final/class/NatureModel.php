<?php
class NatureModel extends BaseModel {
    // 立地情報の取得
    public function get_nature_data(){
        $nature_array = [];
        try {
            $sql= "SELECT * FROM nature  ";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $nature_array[$row['id']] = $row['nature'];
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $nature_array;
    }
}
