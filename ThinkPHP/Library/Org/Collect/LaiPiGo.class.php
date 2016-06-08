<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2015/8/15
 * Time: 9:55
 */
require_once dirname(__FILE__) . '/phpQuery/CurlPhpQuery.php';
require_once dirname(__FILE__) . '/phpQuery/phpQuery.php';
class LaiPiGo {
    /**
     * 采集赖皮网的债债务信息
     * @param $user 用户名
     * @return array
     */
    public function debt($user) {
        if (empty($user)) {
            E('用户名称不能为空');
        }
//        $getUrl = 'http://www.laipigo.com/laipigo/debt/debtQuery?page=1&pageSize=2&user='.urlencode($user).'&valCode=0&type=A';
//        $result = file_get_contents($getUrl);
//        echo $result;
//        $data = json_decode($result, true);
//        print_r($data);

        $url = 'www.laipigo.com/laipigo/debt/debtDetail?type=A&user='.$user.'&valCode=0&search_val='.$user;
        // 删除旧的cookie文件
        exec('rm ./cookie/#*');
        $cookie = tempnam('./cookie/', '#');
        set_time_limit(0);
        $ch = curl_init(); //初始化CURL句柄
        curl_setopt($ch, CURLOPT_URL, $url); //设置请求的URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出
        //关闭连接时，将服务器端返回的cookie保存在以下文件中
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        $document = curl_exec($ch);
        curl_close($ch);

        $getUrl = 'http://www.laipigo.com/laipigo/debt/debtQuery?page=1&pageSize=2&user='.urlencode($user).'&valCode=0&type=A';
        $ch = curl_init(); //初始化CURL句柄
        curl_setopt($ch, CURLOPT_URL, $getUrl); //设置请求的URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出
        //将之前保存的cookie信息，一起发送到服务器端
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        $result = curl_exec($ch);
        $this->saveRawData($result, 'debt', md5($getUrl));
        $data = json_decode($result);
        format_print_r($data);
//        $formatData = array();
//        foreach ($data as $k => $_d) {
//            $debtInd = $_d->debtInd;
//            $item['user'] = $user;
//            $item['name'] = $debtInd->COMPANYNAME;
//            $item['reg_number'] = $debtInd->REGISTNO;
//            $item['address'] = $debtInd->ADDRESS;
//            $item['type'] = $debtInd->ECONKIND;
//            $item['reg_capital'] = $debtInd->REGISTCAPI;
//            $item['status'] = $debtInd->COMPANYSTATUS;
//            $item['scope'] = $debtInd->SCOPE;
//            $item['province_code'] = $debtInd->PROVINCE;
//            $item['reg_org'] = $debtInd->BELONGORG;
//            $item['set_up_date'] = $debtInd->STARTDATE;
//            $item['limit_start'] = $debtInd->TERMSTART;
//            $item['limit_end'] = $debtInd->TEAMEND;
//            $item['position1'] = $_d->position1;
//            $item['position2'] = $_d->position2;
//            $item['collect_timestamp'] = time();
//
//            $formatData[] = $item;
//        }
//        return $formatData;
    }

    /**
     * 采集赖皮网的资产信息
     * @param $user 用户名
     * @return array
     */
    public function property($user) {
        if (empty($user)) {
            E('用户名称不能为空');
        }
        $url = 'http://www.laipigo.com/laipigo/debt/assetDetail?type=B&isDebt=1&user='.$user.'&search_val='.$user;
        CurlPhpQuery::newDocumentFileHTML($url);
        $document = pq('html')->html();
        pq('div.main table')->find('td.last, td.payWay')->parents('tr')->remove();
        $trs = pq('div.main table')->find('tr');
        $data = array();
        $title = '';
        foreach ($trs as $tr) {
            if (pq($tr)->find('td.title')->size() > 0) { // 标题
                pq($tr)->find('td.title')->find('a')->remove();
                $title = pq($tr)->find('td.title')->text();
            } else {
                $name = pq($tr)->find('td')->eq(0)->text();
                if (empty($title) || empty($name)) {
                    continue;
                }
                $item['owner'] = $user;
                $item['title'] = $title ? $title : '';
                $item['name'] = $name ? $name : '';
                $detail = pq($tr)->find('td')->eq(1)->text();
                $item['detail'] = $detail ? $detail : '';
                $data[] = $item;
            }
        }
        $this->saveRawData($document, 'property', md5($url));
        return $data;
    }

    /**
     * 采集赖皮网的工商信息，由于有session限制，所以要传递cookie
     * @param $user 用户名
     * @return array
     */
    public function indCom($user) {
        if (empty($user)) {
            E('用户名称不能为空');
        }
        $url = 'http://www.laipigo.com/laipigo/debt/indDetailList?type=C&user='.$user.'&search_val='.$user;
        // 删除旧的cookie文件
        exec('rm ./cookie/~*');
        $cookie = tempnam('./cookie/', '~');
        set_time_limit(0);
        $ch = curl_init(); //初始化CURL句柄
        curl_setopt($ch, CURLOPT_URL, $url); //设置请求的URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出
        //关闭连接时，将服务器端返回的cookie保存在以下文件中
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        $document = curl_exec($ch);
        curl_close($ch);
        preg_match('#&user="\+user\+"&type="\+type\+"&val="\+"(\w+)"#is', $document, $match);
        $val = $match[1];
        $getUrl = 'http://www.laipigo.com/laipigo/debt/indQuery?page=1&pageSize=100&type='.urlencode('C').'&user='.urlencode($user).'&val='.urlencode($val);
        $ch = curl_init(); //初始化CURL句柄
        curl_setopt($ch, CURLOPT_URL, $getUrl); //设置请求的URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出
        //将之前保存的cookie信息，一起发送到服务器端
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        $result= curl_exec($ch);
        $this->saveRawData($result, 'indCom', md5($getUrl));
        $data = json_decode($result);
        $formatData = array();
        foreach ($data as $k => $_d) {
            $debtInd = $_d->debtInd;
            $item['user'] = $user;
            $item['name'] = $debtInd->COMPANYNAME ? $debtInd->COMPANYNAME : '';
            $item['reg_number'] = $debtInd->REGISTNO ? $debtInd->REGISTNO : '';
            $item['address'] = $debtInd->ADDRESS ? $debtInd->ADDRESS : '';
            $item['type'] = $debtInd->ECONKIND ? $debtInd->ECONKIND : '';
            $item['reg_capital'] = $debtInd->REGISTCAPI ? $debtInd->REGISTCAPI : '';
            $item['status'] = $debtInd->COMPANYSTATUS ? $debtInd->COMPANYSTATUS : '';
            $item['scope'] = $debtInd->SCOPE ? $debtInd->SCOPE : '';
            $item['province_code'] = $debtInd->PROVINCE ? $debtInd->PROVINCE : '';
            $item['reg_org'] = $debtInd->BELONGORG ? $debtInd->BELONGORG : '';
            $item['set_up_date'] = $debtInd->STARTDATE ? $debtInd->STARTDATE : '';
            $item['limit_start'] = $debtInd->TERMSTART ? $debtInd->TERMSTART : '';
            $item['limit_end'] = $debtInd->TEAMEND ? $debtInd->TEAMEND : '';
            $item['position1'] = $_d->position1 ? $_d->position1 : '';
            $item['position2'] = $_d->position2 ? $_d->position2 : '';
            $item['collect_timestamp'] = time();

            $formatData[] = $item;
        }
        return $formatData;
    }

    /**
     * 保存元数据
     * @param $raw_data
     */
    public function saveRawData($raw_data, $dirname, $filename) {
        $path = $dirname.'/'.$filename.'.html';
        $dir = '/alidata/www/RawData/laipigo/';
        $real_dir = $dir.$dirname;
        $real_path = $dir.$path;
        if (!is_dir($real_dir)) {
            if (!mb_mkdir($real_dir)) {
                exit('创建目录“'.$real_dir.'”失败');
            }
        }
        file_put_contents($real_path, $raw_data);
    }

    /**
     * @param $doc_data
     * @param $related_persons
     * @return boolean
     */
    public function _saveData($doc_data, $related_persons) {

    }
}