<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2015/8/15
 * Time: 10:47
 *
 * 自定义phpQuery类，使用curl获取网络文档内容
 */
require_once dirname(__FILE__) . '/phpQuery.php';
class CurlPhpQuery extends phpQuery {
    public static function newDocumentFile($file, $contentType = null, $method='post') {
        $documentID = self::createDocumentWrapper(
            curl_request($file, array(), $method), $contentType
        );
        return new phpQueryObject($documentID);
    }

    /**
     * Creates new document from markup.
     * Chainable.
     *
     * @param unknown_type $markup
     * @return phpQueryObject|QueryTemplatesSource|QueryTemplatesParse|QueryTemplatesSourceQuery
     */
    public static function newDocumentFileHTML($file, $charset = null, $method='post') {
        $contentType = $charset
            ? ";charset=$charset"
            : '';
        return self::newDocumentFile($file, "text/html{$contentType}", $method);
    }
}