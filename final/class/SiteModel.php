<?php

/*
SiteModel
*/

class SiteModel extends BaseModel {
    // サイトの登録処理
    public function regist_member($userdata){
        try {
            $this->pdo->beginTransaction();
            $sql = "INSERT  INTO campsite(sitename,ken,fees,required_time,cancel,nature,cleanliness_restrooms,bidet,showers,shop,ice_vending,drinking,garbage,parking,space,check_in,check_out,comment,link,s_image)
            VALUES (:sitename, :ken, :fees, :required_time, :cancel, :nature, :cleanliness_restrooms, :bidet, :showers, :shop, :ice_vending, :drinking, :garbage, :parking, :space, :check_in, :check_out, :comment, :link, :s_image)";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':sitename', $userdata['sitename'], PDO::PARAM_STR);
            $stmh->bindValue(':ken', $userdata['ken'], PDO::PARAM_INT);
            $stmh->bindValue(':fees', $userdata['fees'], PDO::PARAM_STR);
            $stmh->bindValue(':required_time', $userdata['required_time'], PDO::PARAM_INT);
            $stmh->bindValue(':cancel', $userdata['cancel'], PDO::PARAM_INT);
            $stmh->bindValue(':nature', $userdata['nature'], PDO::PARAM_INT);
            $stmh->bindValue(':cleanliness_restrooms', $userdata['cleanliness_restrooms'], PDO::PARAM_INT);
            $stmh->bindValue(':bidet', $userdata['bidet'], PDO::PARAM_STR);
            $stmh->bindValue(':showers', $userdata['showers'], PDO::PARAM_INT);
            $stmh->bindValue(':shop', $userdata['shop'], PDO::PARAM_STR);
            $stmh->bindValue(':ice_vending', $userdata['ice_vending'], PDO::PARAM_STR);
            $stmh->bindValue(':drinking', $userdata['drinking'], PDO::PARAM_STR);
            $stmh->bindValue(':garbage', $userdata['garbage'], PDO::PARAM_STR);
            $stmh->bindValue(':parking', $userdata['parking'], PDO::PARAM_STR);
            $stmh->bindValue(':space', $userdata['space'], PDO::PARAM_STR);
            $stmh->bindValue(':check_in', $userdata['check_in'], PDO::PARAM_STR);
            $stmh->bindValue(':check_out', $userdata['check_out'], PDO::PARAM_STR);
            $stmh->bindValue(':comment', $userdata['comment'], PDO::PARAM_STR);
            $stmh->bindValue(':link', $userdata['link'], PDO::PARAM_STR);
            $stmh->bindValue(':s_image', $userdata['s_image'], PDO::PARAM_LOB);
            $stmh->execute();
            $this->pdo->commit();
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "エラー：" . $Exception->getMessage();
        }
    }


    // 登録しようとしているサイトが既に登録されていないか調べる
    public function check_sitename($userdata){
        try {
            $sql= "SELECT * FROM campsite WHERE sitename = :sitename ";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':sitename',  $userdata['sitename'], PDO::PARAM_STR );
            $stmh->execute();
            $count = $stmh->rowCount();
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        if($count >= 1){
            return true;
        }else{
            return false;
        }
    }


    // サイト情報をIDで検索して取得
    public function get_site_data_id($id){
        $data = [];
        try {
            $sql= "SELECT * FROM campsite WHERE id = :id limit 1";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':id', $id, PDO::PARAM_INT );
            $stmh->execute();
            $data = $stmh->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $data;
    }


    // サイト情報の更新処理
    public function modify_site($userdata){
        try {
            $this->pdo->beginTransaction();
            $sql = "UPDATE  campsite
                      SET 
                        sitename = :sitename,
                        ken = :ken,
                        fees = :fees,
                        required_time = :required_time,
                        cancel = :cancel,
                        nature = :nature,
                        cleanliness_restrooms = :cleanliness_restrooms,
                        bidet = :bidet,
                        showers = :showers,
                        shop = :shop,
                        ice_vending = :ice_vending,
                        drinking = :drinking,
                        garbage = :garbage,
                        parking = :parking,
                        space = :space,
                        check_in = :check_in,
                        check_out = :check_out,
                        comment = :comment,
                        link = :link,
                        s_image = :s_image
                      WHERE id = :id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':sitename', $userdata['sitename'], PDO::PARAM_STR);
            $stmh->bindValue(':ken', $userdata['ken'], PDO::PARAM_INT);
            $stmh->bindValue(':fees', $userdata['fees'], PDO::PARAM_STR);
            $stmh->bindValue(':required_time', $userdata['required_time'], PDO::PARAM_INT);
            $stmh->bindValue(':cancel', $userdata['cancel'], PDO::PARAM_INT);
            $stmh->bindValue(':nature', $userdata['nature'], PDO::PARAM_INT);
            $stmh->bindValue(':cleanliness_restrooms', $userdata['cleanliness_restrooms'], PDO::PARAM_INT);
            $stmh->bindValue(':bidet', $userdata['bidet'], PDO::PARAM_STR);
            $stmh->bindValue(':showers', $userdata['showers'], PDO::PARAM_INT);
            $stmh->bindValue(':shop', $userdata['shop'], PDO::PARAM_STR);
            $stmh->bindValue(':ice_vending', $userdata['ice_vending'], PDO::PARAM_STR);
            $stmh->bindValue(':drinking', $userdata['drinking'], PDO::PARAM_STR);
            $stmh->bindValue(':garbage', $userdata['garbage'], PDO::PARAM_STR);
            $stmh->bindValue(':parking', $userdata['parking'], PDO::PARAM_STR);
            $stmh->bindValue(':space', $userdata['space'], PDO::PARAM_STR);
            $stmh->bindValue(':check_in', $userdata['check_in'], PDO::PARAM_STR);
            $stmh->bindValue(':check_out', $userdata['check_out'], PDO::PARAM_STR);
            $stmh->bindValue(':comment', $userdata['comment'], PDO::PARAM_STR);
            $stmh->bindValue(':link', $userdata['link'], PDO::PARAM_STR);
            $stmh->bindValue(':s_image', $userdata['s_image'], PDO::PARAM_LOB);
            $stmh->bindValue(':id',         $userdata['id'],         PDO::PARAM_INT );
            $stmh->execute();
            $this->pdo->commit();
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "エラー：" . $Exception->getMessage();
        }
    }


    // サイト情報の削除処理
    public function delete_site($id){
        try {
            $this->pdo->beginTransaction();
            $sql = "DELETE FROM campsite WHERE id = :id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':id', $id, PDO::PARAM_INT );
            $stmh->execute();
            $this->pdo->commit();
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "エラー：" . $Exception->getMessage();
        }
    }

    // サイト一覧の取得処理
    public function get_site_list($search_key){
        $sql = <<<EOS
SELECT
        c.id as id,
        c.sitename    as sitename,
        k.ken    as ken,
        c.fees   as fees,
        t.required_time  as required_time,
        x.cancel    as cancel,
        n.nature         as nature,
        r.cleanliness_restrooms  as cleanlinesrestrooms,
        c.bidet    as bidet,
        s.showers   as showers,
        c.shop    as shop,
        c.ice_vending   as ice_vending,
        c.drinking  as drinking,
        c.garbage   as garbage,
        c.parking  as parking,
        c.space   as space,
        c.check_in  as check_in,
        c.check_out   as check_out,
        c.comment   as comment,
        c.link   as link,
        c.s_image     as s_image
FROM
        campsite c,
        required_time t,
        ken k,
        cancel x,
        nature n,
        cleanliness_restrooms r,
        showers s
WHERE
        c.ken = k.id
        AND c.required_time = t.id
        AND c.cancel = x.id
        AND c.nature = n.id
        AND c.cleanliness_restrooms = r.id
        AND c.showers = s.id

EOS;
        if($search_key != ""){
            $sql .= " AND ( c.sitename like :sitename OR k.ken like :ken OR n.nature like :nature ) ";
        }

        try {
            $stmh = $this->pdo->prepare($sql);
            if($search_key != ""){
                $search_key = '%' . $search_key . '%'; 
                $stmh->bindValue(':sitename',  $search_key, PDO::PARAM_STR );
                $stmh->bindValue(':ken', $search_key, PDO::PARAM_INT );
                $stmh->bindValue(':nature', $search_key, PDO::PARAM_INT );
            }
            $stmh->execute();
            // 検索で一致したデータ数を取得
            $count = $stmh->rowCount();
            $i=0;
            $data = [];
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                foreach( $row as $key => $value){
                        $data[$i][$key] = $value;
                }
                $i++;
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return [$data, $count];
    }

    
    
}
