<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2015/8/21
 * Time: 10:51
 */
require_once(dirname(__FILE__).'/PHPExcel/IOFactory.php');
class ExcelUtil {

    /**
     * @param $excelFile excel文件路径
     * @param array $fields 对应的字段名称，如果为空则返回索引数组
     * @throws PHPExcel_Reader_Exception
     * @return array
     */
    public static function getExcelData($excelFile, $fields=array()) {
        if (!file_exists($excelFile)) {
            E("excel文件不存在");
        }

        $reader = PHPExcel_IOFactory::createReader('Excel5'); //设置以Excel5格式(Excel97-2003工作簿)
        $PHPExcel = $reader->load($excelFile); // 载入excel文件
        $sheet = $PHPExcel->getSheet(0); // 读取第一個工作表
        $highestRow = $sheet->getHighestRow(); // 取得总行数
        $highestColumm = $sheet->getHighestColumn(); // 取得总列数

        $dataArr = array();
        /** 循环读取每个单元格的数据 */
        for ($row = 2; $row <= $highestRow; $row++){//行数是以第2行开始
            $arr = array();
            $i = 0;
            for ($column = 'A'; $column <= $highestColumm; $column++) {//列数是以A列开始
                $value = $sheet->getCell($column.$row)->getValue();
                if (empty($fields)) {
                    $arr[] = $value;
                } else {
                    $arr[$fields[$i]] = $value;
                }
                $i++;
            }
            $dataArr[] = $arr;
        }
        return $dataArr;
    }
}