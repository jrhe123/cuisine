<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2015/8/15
 * Time: 9:55
 */
require_once dirname(__FILE__) . '/phpQuery/phpQuery.php';
class ChinaLawIndex {
    // 采集法集网最新法规数据，http://www.chinalawindex.cn/lawdb/newLaw/xinFaData/1
    public function fa_ji_wang_newest()
    {
        $domain_url = 'http://www.chinalawindex.cn';
        $root_url = 'http://www.chinalawindex.cn/lawdb/newLaw/xinFaData/';
        $dir = '/alidata/www/RawData/';
        $current_page = 1;
        phpQuery::newDocumentFileHTML($root_url . $current_page);
        // 一共有几页
        $end_href = pq('.pagination a.prev_page')->attr('href');
        preg_match('/.*?\/(\d+)-/is', $end_href, $match);
        $page_total = $match[1];
        // 获取当前数据库最大的id
        $lawModel = D('Laws');
        $fatiaoModel = D('Fatiao');
        $max_id = $lawModel->order('id desc')->getField('id');
        $datum = array();
        $fatiaos = array();
        $z = 0;
        for ($i = 1; $i <= ($page_total + 1); $i++) {
            $lis = pq('div.normal_list_txt > ul')->find('li');
            foreach ($lis as $li) {
                $content_url = $domain_url . pq($li)->find('a')->attr('href');
                $urlPartArr = explode('/', $content_url);
                $filename = trim(end($urlPartArr));
                $id = $lawModel->getFieldByFilename($filename, 'id');
                if ($id > 0) {
                    continue;
                }
                $content_document = phpQuery::newDocumentFileHTML($content_url);
                $name = trim_space(pq('.normal_con_txt > h2')->text());
                $unit = trim_space(pq('.normal_con_txt_info')->find('tr:eq(0)')->find('div.normal_con_txt_info_txt > a')->text());
                $word = trim_space(pq('.normal_con_txt_info')->find('tr:eq(1)')->find('div.normal_con_txt_info_txt > a')->attr('title'));
                $p_date = trim_space(pq('.normal_con_txt_info')->find('tr:eq(1)')->find('td:eq(3)')->text());
                $e_date = trim_space(pq('.normal_con_txt_info')->find('tr:eq(2)')->find('td:eq(3)')->text());
                $pass_date = trim_space(pq('.normal_con_txt_info')->find('tr:eq(0)')->find('td:eq(3)')->text());
                $status = '';
                $level = trim_space(pq('.normal_con_txt_info')->find('tr:eq(2)')->find('td:eq(1)')->text());
                $type = strval(get_law_type($level));
                $menu = '';
                $is_analysis = 1;
                $content = strval(pq('div.normal_con_txt_con')->html());
                $max_id++;
                $sub_dir = 'fa_ji_wang/'.$type.'/';
                $path = $dir.$sub_dir;
                mb_mkdir($path);
                $data = array(
                    'id' => $max_id,
                    'name' => $name,
                    'unit' => $unit,
                    'word' => $word,
                    'p_date' => $p_date,
                    'e_date' => $e_date,
                    'pass_date' => $pass_date,
                    'status' => $status,
                    'level' => $level,
                    'type' => $type,
                    'menu' => $menu,
                    'filename' => $filename,
                    'is_analysis' => $is_analysis,
                    'content' => $content,
                    'raw_data_dir' => $sub_dir,
                    'data_source' => $domain_url,
                    'collect_timestamp' => time(),
                    'cmd' => 'ADD'
                );
//                print_r($data);exit;
                file_put_contents($path.$filename.'.html', $content_document);
                $datum[] = $data;
                // 分析发条
                $divs = pq('div.normal_con_txt_con')->find('div[style="margin-top:5px"]');
                foreach ($divs as $div) {
                    if (pq($div)->find('span > b > a')->size() <= 0) {
                        continue;
                    }
                    $ft_name = trim_space(pq($div)->find('span > b > a')->text());
                    pq($div)->find('span')->remove();
                    $ft_content = trim_space(strip_tags(pq($div)->text()));
                    $fatiaos[] = array('name' => $ft_name, 'desc' => $ft_content, 'laws_id' => $max_id);
                }
                if ($z % 20 === 0) {
                    $r = $lawModel->addAll($datum);
                    $fatiaoModel->addAll($fatiaos);
                    if ($r !== false) {
                        Think\Log::record('保存数据失败-'.date('Y-m-d H:i:s').'-error：'.$lawModel->getDbError());
                        $result = update_laws_pts_index($datum);
                        if ($result !== true) {
                            Think\Log::record('上传数据到阿里云服务器是发生了错误：'.json_encode($result).'-'.date('Y-m-d H:i:s'));
                            exit;
                        }
                    }
                    $datum = array();
                    $fatiaos = array();
                    $z = 0;
                }
                $z++;
            }
            phpQuery::newDocumentFileHTML($root_url . $i);
        }
        $lawModel->addAll($datum);
        $result = update_laws_pts_index($datum);
        if ($result !== true) {
            Think\Log::record('上传数据到阿里云服务器是发生了错误：'.json_encode($result).'-'.date('Y-m-d H:i:s'));
        }
    }

    public function fa_ji_wang_single($url) {
        $lawModel = D('Laws');
        $fatiaoModel = D('Fatiao');
        $domain_url = 'http://www.chinalawindex.cn';
        $dir = '/alidata/www/RawData/';
        $urlPartArr = explode('/', $url);
        $filename = end($urlPartArr);
        $id = $lawModel->getFieldByFilename($filename, 'id');
        if ($id > 0) {
            return true;
        }
        $content_document = phpQuery::newDocumentFileHTML($url);
        $name = trim_space(pq('.normal_con_txt > h2')->text());
        if (empty($name)) {
            return false;
        }
        $unit = trim_space(pq('.normal_con_txt_info')->find('tr:eq(0)')->find('div.normal_con_txt_info_txt > a')->text());
        $word = trim_space(pq('.normal_con_txt_info')->find('tr:eq(1)')->find('div.normal_con_txt_info_txt > a')->attr('title'));
        $p_date = trim_space(pq('.normal_con_txt_info')->find('tr:eq(1)')->find('td:eq(3)')->text());
        $e_date = trim_space(pq('.normal_con_txt_info')->find('tr:eq(2)')->find('td:eq(3)')->text());
        $pass_date = trim_space(pq('.normal_con_txt_info')->find('tr:eq(0)')->find('td:eq(3)')->text());
        $status = '';
        $level = trim_space(pq('.normal_con_txt_info')->find('tr:eq(2)')->find('td:eq(1)')->text());
        $type = strval(get_law_type($level));
        $menu = '';
        $is_analysis = 1;
        $content = strval(pq('div.normal_con_txt_con')->html());
        $sub_dir = 'fa_ji_wang/'.$type.'/';
        $path = $dir.$sub_dir;
        mb_mkdir($path);
        $data = array(
            'name' => $name,
            'unit' => $unit,
            'word' => $word,
            'p_date' => $p_date,
            'e_date' => $e_date,
            'pass_date' => $pass_date,
            'status' => $status,
            'level' => $level,
            'type' => $type,
            'menu' => $menu,
            'filename' => $filename,
            'is_analysis' => $is_analysis,
            'content' => $content,
            'raw_data_dir' => $sub_dir,
            'data_source' => $domain_url,
            'collect_timestamp' => time()
        );
        file_put_contents($path.$filename.'.html', $content_document);
        $law_id = $lawModel->add($data);
        // 分析发条
        $divs = pq('div.normal_con_txt_con')->find('div[style="margin-top:5px"]');
        $fatiaos = array();
        foreach ($divs as $div) {
            if (pq($div)->find('span > b > a')->size() <= 0) {
                continue;
            }
            $ft_name = trim_space(pq($div)->find('span > b > a')->text());
            pq($div)->find('span')->remove();
            $ft_content = trim_space(strip_tags(pq($div)->text()));
            $fatiaos[] = array('name' => $ft_name, 'desc' => $ft_content, 'laws_id' => $law_id);
        }
        $r = true;
        if (!empty($fatiaos)) {
            $r = $fatiaoModel->addAll($fatiaos);
        }
        if ($law_id === false || $r === false) {
            return false;
        }
        $data['id'] = $law_id;
        $datum = array($data);
        update_laws_pts_index($datum);
        return true;
    }
}