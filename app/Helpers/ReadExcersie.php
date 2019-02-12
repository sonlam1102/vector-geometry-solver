<?php

namespace App\Helpers;

class ReadExcersie
{
    public static function bo_dau($str) {
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        return $str;
    }

    public static function get_name_obj($str) {
        $rex = "/[a-z  \] \[ * + \/ 0-9 = ^Vecto$ , \. : ; \s \r \- ( )]/";
        $str1 = preg_replace($rex,'',$str);

        $str1 = str_split($str1);
        $str1 = self::remove_space(array_unique($str1));
        $str1 = implode(",", $str1).": Diem";
        return $str1;
    }

    public static function remove_space($array){
        $arr = array();
        foreach($array as $key => $value){

            if ($value !=""){
                array_push($arr,$value);
            }
        }
        return $arr;
    }

    public static function doi_quan_he($str){
        $quanhe=array(
            'Doan'=>'Doan thang|canh',
            'TrongTam'=>'Trong tam',
            'TamGiac'=>'tam giac',
            'HinhBinhHanh'=>'hinh binh hanh',
            'HinhChuNhat'=>'hinh chu nhat',
            'TrungTuyen'=>'trung tuyen',
            'TrungDiem'=>'trung diem',
            'Tam'=>'tam',
            'Thuoc'=>'Thuoc|thuoc',
            'VuongGoc'=>'vuong goc|Vuong Goc',
            'Diem'=>'diem|Diem',
            'SongSong'=>'song song|Song song',
            'Rut_gon_bieu_thuc'=>'Rut gon bieu thuc|Rut gon',
            'Phan_tich'=>'Phan tich',
            'Chung_minh'=>'Chung minh|chung minh|chung minh rang|CMR'
        );
        foreach($quanhe as $key=>$value){
            $str = preg_replace("/($value)/i", $key, $str);
        }
        return $str;
    }

    public static function remove_words($str){
        $str1= file_get_contents("dacbiet.txt");
        $strArray = explode(",", $str1);
        foreach($strArray as $key=>$value){
            $str = preg_replace("/($value)/i", "",$str);
        }
        return $str;
    }

    public static function convert_Obj($name, $diem){
        $diemArray = str_split($diem);
        $diemArray = implode(",",$diemArray);
        $str = $name.'['.$diemArray.']';
        return $str;
    }

    public static function xu_ly_sk34($str){
        $temp = preg_replace("/[* + \- =]/i",":",trim($str));
        $temp = preg_replace("/[\^ * 0-9 \/]/i","",$temp);
        $kq = $str;
        $arr = explode(":",$temp);
        foreach($arr as $key => $value){
            if( strlen(trim($value)) == 2 ){
                $temp2 = self::convert_Obj("Doan", $value);
                $kq = str_replace($value, $temp2, $kq);
            }
        }
        //echo $kq;
        return $kq;
    }

    public static function find_Obj($quanhe, $array){
        $nums = count($quanhe);
        for ($i = 0; $i < $nums; $i++){
            if ( in_array($quanhe[$i], $array)==true){
                return $i;
            }
        }
        return -1;
    }

    public static function main($debai) {
        //$debai = "Cho tam giác BCI, hình bình hành ABCD. I là trung điểm DC. Phân tích: Veco[B,I] theo Vecto[A,B],Vecto[A,D].2";

        /*========= Biến chứa để ghi File=====================*/
        $DoiTuong = array();
        $hyPos = array();
        $goals = array();

        $objArray = file_get_contents("doituong.txt");
        $objArray = explode(",",$objArray);
        $debai = self::bo_dau($debai);
        array_push($DoiTuong, self::get_name_obj($debai)  );
        $debai = self::doi_quan_he(self::remove_words($debai) );
        //echo $debai;
        $arrayDebai = self::remove_space(explode(".", trim($debai))); // mảng gồm 3 phần tử, phần từ cuối là các goals.
        if (count($arrayDebai) < 2) return "Vui lòng nhập đủ để bài!!!!.";

        /*=======================================================*/

        /*-------------Câu 1 --------------------------------*/


        $arrCau1 = explode(", ",$arrayDebai[0]);
        foreach( $arrCau1 as $key ){
            $array = explode(" ", trim($key));
            if (in_array($array[0],$objArray)){
                $str = self::convert_Obj($array[0],$array[1]).": ".$array[0];
                array_push($DoiTuong, $str);
            }
        }
        /*---------------hết cau 1-----------------------*/
        /*========================câu 3=================================*/
        if (count($arrayDebai) == 2){
            $arrCau3 = explode(":",trim($arrayDebai[1]));
        }else{
            $arrCau3 = explode(":",trim($arrayDebai[2]));
        }

        if (strstr($arrCau3[0],"Phan_tich")){

            $arrCau31 = explode(", ",trim($arrCau3[1]));

            foreach($arrCau31 as $key=>$value){
                $g = explode("theo",$value);
                $strg = $g[0]."= [".$g[1]."]";
                array_push($goals,$strg);
            }
        }
        else{
            $arrCau3 = explode(", ",trim($arrCau3[1]));
            foreach($arrCau3 as $key=>$value){
                array_push($goals, self::xu_ly_sk34(trim($value)));
            }
        }

        /*========================End câu 3=================================*/


        /*---------------Câu 2---------------------------*/

        $arrCau2 = explode(", ",trim($arrayDebai[1]) );
        if (count($arrayDebai) == 2) $arrCau2 = array("[]");
        foreach( $arrCau2 as $key ){
            if (strstr($key,"=") == true){
                array_push($hyPos, self::xu_ly_sk34($key));
            }
            else{

                $arr = self::remove_space(explode(" ",trim($key)));
                $nums = count($arr);
                if ($nums <=2) continue;
                /*Xác định đối tượng cuối trong quan hệ*/
                $pos = self::find_Obj($arr, $objArray);
                if (($pos != -1) &&  ($pos != 0))
                    $t3 = self::convert_Obj($arr[$pos], $arr[$pos+1]);
                else
                    $t3 = self::convert_Obj("Doan", $arr[$nums-1]);
                //Nếu có nhiều đối tượng 1.
                if (stripos(",", $arr[0])!=-1){
                    $arrtemp = explode(",", $arr[0]);
                    foreach($arrtemp as $key=>$value){
                        if (strlen($value) == 2){
                            $qh = '["'.$arr[1].'",'.self::convert_Obj("Doan",$value).','.$t3.']';
                            array_push($hyPos, $qh);
                        }
                        else{
                            $qh = '["'.$arr[1].'",'.$value.','.$t3.']';
                            array_push($hyPos, $qh);
                        }
                    }
                }
                else{
                    if (strlen($arr[0]) == 2){
                        $qh = '["'.$arr[1].'",'.self::convert_Obj("Doan",$arr[0]).','.$t3.']';
                        array_push($hyPos, $qh);
                    }
                    else{
                        $qh = '["'.$arr[1].'",'.$arr[0].','.$t3.']';
                        array_push($hyPos, $qh);
                    }
                }
            }

        }
        //if (count($arrayDebai) == 2) $hyPos = array("[]");
        /*====================End câu 2=================================*/

        /*Xác định dạng toán*/
        $kind_ex = "khong_xac_dinh";
        if (count($arrayDebai)==2) $kind = $arrayDebai[1];
        else $kind = $arrayDebai[2];
        if (strstr($kind, "Chung_minh") == true)
            $kind_ex = "Chung_minh";
        if (strstr($kind, "Phan_tich") == true)
            $kind_ex = "Phan_tich";
        if (strstr($kind, "Rut_gon") == true)
            $kind_ex = "Rut_gon";

        // ghi file
        $strDT="";
        $strHP="";
        $strG="";
        foreach($DoiTuong as $key=>$value){
            $strDT .= $value."\r\t\t\t\t\t";
        }
        foreach($hyPos as $key=>$value){
            $strHP .= $value."\r\t\t\t\t\t";
        }
        foreach($goals as $key=>$value){
            $strG .= $value."\r ";
        }
        $ghifle = 'begin_exercise
		kind_ex = "'.$kind_ex.'"
		begin_hypothesis
					  
			objects:
				'.$strDT.'
				end_objects
						
				facts:
					'.$strHP.'
				end_facts
					 
				end_hypothesis

				begin_goals
					'.$strG.'
				end_goals
        end_exercise';

        $file = fopen("ex.txt",'w');
        fwrite($file, $ghifle);
        fclose($file);

        return 1;
    }
}