<?php

namespace App\Helpers;


class ReadSolution
{
    //Ham chinh
    public static function main() {
        $loigiai= file_get_contents("baigiai.txt");
        $arr = explode("\r", $loigiai);
        $giai="";
        foreach( $arr as $key=>$value){
            $cau = trim($value);
            if (self::check_relation($cau)==true && strstr($cau,"theo")==false){
                $arr1 = explode(", ", $cau);
                if (count($arr1)==1) $giai .= "$$".self::convert_struct($arr1[0])."$$ ";
                else
                    $giai .= self::convert_struct($arr1[1])." ".self::convert_struct($arr1[0])." ".self::convert_struct($arr1[2])."<br>";
            }
            else{
                $rela=$value;
                if (strstr($rela,"Vecto")==false and strstr($rela,"Doan")==false){

                    $giai.= $rela."<br>";
                    continue;
                }
                $temp = preg_replace("/[*|+|\-|=|]/i",":",$value);
                $temp = preg_replace("/[ \^ * 0-9 \/ => ( ) ]/i","",$temp);
                $arr1 = self::remove_null(explode(":",$temp));

                foreach($arr1 as $k=>$v){

                    $rela = str_replace($v,self::convert_struct($v), $rela);
                }

                $giai .= "$$".$rela."$$";
            }
        }
        $giai = self::struc_tunhien(str_replace('"','',$giai));
        if($giai==''){ echo "Vui lòng xem lại đề bài đã nhập!!!"; return;}
        $giai = self::PhanSos($loigiai, $giai);
        $giai = str_replace("*","\\cdot ",$giai);
        echo $giai;
    }

    /*===Kiểm tra xem có phải là quan hệ hay không*/
    public static function check_relation($str){
        if (strlen($str)<=6) return false;
        $rex = "/[*|+|-|=]/";
        if ( preg_match($rex, $str)){
            return false;
        }
        return true;
    }

    /*Chuyển dạng cấu trúc sang dạng tự nhiên*/
    //echo convert_struct("[HinhBinhHanh[A,B,C,D]]");
    public static function convert_struct($str){
        if (strstr($str, "Doan")){

            $rex = "/[\[|\]|\, \- + *]/";
            $kq = preg_replace($rex, "", trim($str));

            $kq = preg_replace("/^Doan/", "", $kq);
            return $kq;
        }
        if (strstr($str, "Vecto")){
            $kq = preg_replace("/[\[|\]|,]/", "" ,$str);

            $kq = preg_replace("/^Vecto/", "\\vec{" ,trim($kq));
            $kq .="}";
            return $kq;
        }
        else{

            $rex = "/[\[|\]]/";
            $kq = preg_replace($rex, " ", $str);
            $kq = preg_replace("/[,]/", "", $kq);
            return $kq;
        }
    }

    //xóa các phần tử rỗng trong mảng.
    public static function remove_null($array){
        $arr = array();
        foreach($array as $key => $value){

            if ( strlen( trim($value) )!==0 ){
                array_push($arr,$value);
            }
        }
        return $arr;
    }

    //dổi tên cấu trú -- tự nhiên
    public static function struc_tunhien($str){
        $quanhe=array(
            'là trọng tâm của'=>'TrongTam',
            'tam giác'=>'TamGiac',
            'hình bình hành'=>'HinhBinhHanh',
            'hình chữ nhật'=>'HinhChuNhat',
            'là trung tuyến của'=>'TrungTuyen',
            'là trung điểm của'=>'TrungDiem',
            'là tâm của'=>'Tam',
            'thuộc'=>'Thuoc',
            'vuông góc với'=>'VuongGoc',
            'song song với'=>'SongSong',
            'Chứng minh đẳng thức'=>'CMDT',
            'Phân tích'=>'PTVVT',
            'Rút gọn biểu thức'=>'RGBT',
            'trực tâm của'=>'TrucTam',
            'vì'=>'vi|Vi',
            'nên'=>'nen|Nen',
            'ta'=>'ta|Ta',
            'có'=>'co|Co',
            'Không giải được'=>'KGD',
        );
        foreach($quanhe as $key=>$value){
            $str = preg_replace("/($value)/", $key, $str);
        }
        return $str;
    }


    public static function PhanSos($loi, $gia){
        $kq = $gia;
        $rex = "/[+\-* aA-zZ : => \"  \}\{\]\[ ]/";
        $temp= preg_replace($rex,'',$loi);
        $arr = explode(",",$temp);
        $arr = self::remove_null($arr);
        foreach($arr as $key=>$value){
            $kq = str_replace($value, self::PhanSo($value),$kq);
        }
        return $kq;
    }

    public static function PhanSo($str){
        if (strstr($str,"/")==true){
            $temp = explode("/",$str);
            $phanso = '\\frac{'.$temp[0].'}{'.$temp[1].'}';
            return $phanso;
        }
        $temp = $str;
        return $temp;
    }
}