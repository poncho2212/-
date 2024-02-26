<?php
class RestroomModel extends BaseModel {
    // トイレの清潔さの取得
    public function get_cleanliness_restrooms_data(){
        $cleanliness_restrooms_array = [];
        try {
            $sql= "SELECT * FROM cleanliness_restrooms  ";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $cleanliness_restrooms_array[$row['id']] = $row['cleanliness_restrooms'];
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $cleanliness_restrooms_array;
    }
}
