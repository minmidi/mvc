<?php
    class BaseModel
    {
        /* TẠO HÀM CONNECT DATABASE */
        function __construct()
        {
            $this->conn = new PDO("mysql:host=localhost;dbname=mvc;charset=utf8",
                        "root","");
        }

        /* TẠO HÀM ALL LẤY HẾT KẾT QUẢ */
        static function all()
        {
            $model = new static();
            // câu sql
            $query = "select * from ". $model->table;
            // thực thi câu lệnh sql
            $stmt = $model->conn->prepare($query);
            $stmt->execute();
            // lấy toàn bộ dữ liệu trả về từ câu lệnh
            return $stmt->fetchAll();
        }

        /* TẠO HÀM XÓA THEO ID */
        static function destroy($id)
        {
            $model = new static();
            $query = "delete from ". $model->table. "where id = $id";
            $stmt = $model->conn->prepare($query);
            $stmt->execute();
        }

        /* TẠO HÀM TÌM KIẾM THEO ID */
        static function find($id)
        {
            $model = new static();
            $query = "select * from ". $model->table. "where id = $id";
            $stmt = $model->conn->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            if(count($data) > 0)
            {
                return $data[0];
            }
        }

        /* TẠO HÀM WHERE */
        static function where($col, $con, $val)
        {
            $model = new static();
            $model->querybuilder = "select * from ". $model->table.
                                    "where $col $con $val";
            return $model;
        }
        /* TẠO HÀM AND-WHERE */
        function andwhere($col, $con, $val)
        {
            $this->querybuilder .= "and $col $con $val";
            return $this;
        }

        /* TẠO HÀM GET */
        function get()
        {
            $stmt = $this->conn->prepare($this->querybuilder);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
?>