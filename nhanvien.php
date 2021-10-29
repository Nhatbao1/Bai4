<?php
    class nhanvien
    {
        private $ma;
        private $ten;
        private $songay;
        private $luongngay; 
        public function Gan($ma, $ten,$songay,$luongngay)
        {
            $this -> ma = $ma;
            $this -> ten = $ten;
            $this -> songay = $songay;
            $this -> luongngay = $luongngay;

        }
        public function Get_Ma()
        {
            return $this -> ma;
        }
        public function Get_Ten()
        {
            return $this -> ten;
        }
        public function Get_Luong()
        {
            return $this -> luongngay;
        }
        public function Get_Ngay()
        {
            return  $this -> songay;
        }
        public function InNhanVien()
        {
            echo "<br>";
            echo "Mã Nhân Viên: ".$this -> ma."<br>";
            echo "Tên Nhân Viên: ".$this -> ten."<br>";
            echo "Số ngày làm việc: ".$this -> songay."<br>";
            echo "Lương một ngày: ".$this -> luongngay."<br>";
        }
        public function TinhLuong()
        {
          return ($this -> luongngay * $this -> songay);
        }
    }
    class nhanvienQL extends nhanvien
    {
        private $PHUCAP;
        public function Set_PHUCAP()
        {
            $this -> PHUCAP = 2000;
        }
        public function nhanvienQL()
        {
            $this -> PHUCAP;
            
        }
        public function Gan($ma, $ten,$songay,$luongngay)
        {
            parent::Gan($ma, $ten,$songay,$luongngay);
            $this -> PHUCAP = 2000;

        }
        public function InNhanVien()
        {
            parent :: InNhanVien();
            echo "Phụ cấp: ".$this -> PHUCAP;

        }
        public function TinhLuong()
        {
            return parent :: TinhLuong() + $this -> PHUCAP;
        }
    }
?>