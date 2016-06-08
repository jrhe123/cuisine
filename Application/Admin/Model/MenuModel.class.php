<?php
namespace Admin\Model;

use Think\Model;

class MenuModel extends Model
{

    /**
     * 获取后台左边菜单HTML
     * @return string
     */
    public function getLeftMenuHtml()
    {
        $menuArray = $this->getMenuArray();
        $curUrl = CONTROLLER_NAME . '/' . ACTION_NAME;
        $selMenuId = $this->where(array('route' => $curUrl, 'is_leaf' => 1))->getField('id');
        if (!$selMenuId) {
            return '';
        }
        // 生成后台左边菜单HTML
        $_leftMenuHtml = $this->createLeftMenuHtml($menuArray);
        // 根据当前选中菜单id添加选中样式
        $leftMenuHtml = $this->addSelLeftMenuCls($selMenuId, $_leftMenuHtml);
        return $leftMenuHtml;
    }

    /**
     * 获取后台导航栏html
     *
     */
    public function getNavHtml()
    {
        $curUrl = CONTROLLER_NAME . '/' . ACTION_NAME;
        $selectedMenu = $this->where(array('route' => $curUrl, 'is_leaf' => 1))->find();
        if (!$selectedMenu) {
            return '';
        }
        $menuName = $selectedMenu['name'];
        $menuRoute = U($selectedMenu['route']);
        $parentsId = $selectedMenu['parents_id'];

        // 获取父级菜单数组
        $parentsIdArray = explode(',', $parentsId);
        // 删除空元素
        $parentsIdArray = array_filter($parentsIdArray);
        $navHtml = '<ul class="page-breadcrumb">';
        // 循环生成父级菜单导航
        foreach ($parentsIdArray as $k => $pId) {
            $pMenu = $this->find($pId);
            $pMenuName = $pMenu['name'];
            $pMenuRoute = U($pMenu['route']);

            $navHtml .= '<li>
                    <a href="' . $pMenuRoute . '">' . $pMenuName . '</a>
                    <i class="fa fa-angle-right"></i>
                </li>';
        }
        // 当前菜单导航
        $navHtml .= '<li>
                  <a href="">' . $menuName . '</a>
              </li></ul>';
        return $navHtml;
    }

    /**
     * 生成菜单数组
     * @return array
     */
    private function getMenuArray()
    {
        // 管理员角色
        $role = session('zjpd_admin_role');
        if ($role == 'sub') {
            $subPermission = session('zjpd_admin_permission');;
            // 获取所有的菜单记录
            $menus = $this->where(array('id' => array('in', $subPermission)))->order('parents_id, sort')->select();
        } else {
            // 获取所有的菜单记录
            $menus = $this->order('parents_id, sort')->select();
        }
        $menuArray = array();
        foreach ($menus as $menu) {
            $parentsId = $menu['parents_id'];
            // 判断是否有上级菜单
            if (!$parentsId) { // 没有上级
                $menuArray[$menu['id']] = $menu;
            } else {
                // 把上级菜单id切割成数组
                $parentsIdArray = explode(',', $parentsId);
                $subArray = &$menuArray;
                foreach ($parentsIdArray as $pId) {
                    if (!isset($subArray[$pId]['sub'])) {
                        $subArray[$pId]['sub'] = array();
                    }
                    $subArray = &$subArray[$pId]['sub'];
                }
                $subArray[$menu['id']] = $menu;
            }
        }
        return $menuArray;
    }

    /**
     * 生成所有菜单数组
     * @return array
     */
    public function getAllMenuArray()
    {
        // 获取所有的菜单记录
        $menus = $this->order('parents_id asc, sort asc')->select();
        $menuArray = array();
        foreach ($menus as $menu) {
            $parentsId = $menu['parents_id'];
            // 判断是否有上级菜单
            if (empty($parentsId)) { // 没有上级
                if ($menu['is_show'] == 0) {
                    continue;
                }
                $menuArray[$menu['id']] = $menu;
            } else {
                // 把上级菜单id切割成数组
                $parentsIdArray = explode(',', $parentsId);
                $subArray = &$menuArray;
                foreach ($parentsIdArray as $pId) {
                    if (!isset($subArray[$pId]['sub'])) {
                        $subArray[$pId]['sub'] = array();
                    }
                    $subArray = &$subArray[$pId]['sub'];
                }
                $subArray[$menu['id']] = $menu;
            }
        }
        return $menuArray;
    }

    /**
     * 递归生成后台左边HTML菜单HTML
     * @param array $menuArray 菜单数组
     * @return string
     */
    private function createLeftMenuHtml($menuArray)
    {
        $html = '';
        foreach ($menuArray as $menu) {
            $menuId = $menu['id'];
            $menuName = $menu['name'];
            $isLeaf = boolval($menu['is_leaf']);
            $isShow = boolval($menu['is_show']);
            $menuRoute = U($menu['route']);
            $iconClass = $menu['icon_class'];
            $parentsId = $menu['parents_id'];

            if ($isShow) {
                if (!$isLeaf) {  // 父级菜单
                    $html .= '
        <li class="parent' . $menuId . '">
          <a href="javascript:;">
            <i class="' . $iconClass . '"></i>
            <span class="title">' . $menuName . '</span>
            <span class="arrow "></span>
          </a>';
                    $subMenuArray = $menu['sub'];
                    if (!empty($subMenuArray)) {
                        $html .= '<ul class="sub-menu">';
                        $html .= $this->createLeftMenuHtml($subMenuArray);
                        $html .= '</ul>';
                    }
                    $html .= '</li>';
                } else if ($isLeaf && $parentsId == '') { // 顶级叶子菜单
                    $html .= '
          <li class="topLeaf' . $menuId . '">
            <a href="' . $menuRoute . '">
              <i class="' . $iconClass . '"></i>
              <span class="title">' . $menuName . '</span>
            </a>
          </li>';
                } else { // 叶子菜单
                    $html .= '
          <li class="leaf' . $menuId . '">
            <a href="' . $menuRoute . '">
              <i class="' . $iconClass . '"></i>
              <span class="title">' . $menuName . '</span>
            </a>
          </li>';
                }
            }
        }
        return $html;
    }

    /**
     * 添加左边HTML菜单选中样式
     * @param int $selectedMenuId 选中菜单id
     * @param string $menuHtml
     * @return string
     */
    private function addSelLeftMenuCls($selectedMenuId, $menuHtml)
    {
        $selectedMenu = $this->find($selectedMenuId);
        if (!$selectedMenu) {
            return $menuHtml;
        }
        $menuId = $selectedMenu['id'];
        $isLeaf = boolval($selectedMenu['is_leaf']);
        $isShow = boolval($selectedMenu['is_show']);
        $parentsId = $selectedMenu['parents_id'];

        if ($isLeaf && $parentsId == '') { // 顶级叶子菜单
            return str_ireplace('<li class="topLeaf' . $menuId . '">', '<li class="topLeaf' . $menuId . ' start active">', $menuHtml);
        }
        if ($isLeaf) { // 叶子菜单
            if ($isShow) { // 可见的叶子菜单
                $menuHtml = str_ireplace('leaf' . $menuId . '"', 'leaf' . $menuId . ' active"', $menuHtml);
            }
            $parentsIdArray = explode(',', $parentsId);
            foreach ($parentsIdArray as $pId) {
                $pMenu = $this->find($pId);
                $pMenuId = $pMenu['id'];
                $pMenuName = $pMenu['name'];
                $pIsLeaf = boolval($pMenu['is_leaf']);
                if (!$isShow && $pIsLeaf) { // 如果当前选中菜单不可见则把选中样式添加到父类叶子菜单
                    // 添加选中样式
                    $menuHtml = str_ireplace('leaf' . $pMenuId . '"', 'leaf' . $pMenuId . ' active"', $menuHtml);
                }
                if (!$pIsLeaf) {
                    // 添加打开样式
                    $menuHtml = str_ireplace('parent' . $pMenuId . '"', 'parent' . $pMenuId . ' active open"', $menuHtml);
                    $pTitle = '<span class="title">' . $pMenuName . '</span>
            <span class="arrow "></span>';
                    $replaceStr = '<span class="title">' . $pMenuName . '</span><span class="selected"></span><span class="arrow open"></span>';
                    $menuHtml = str_ireplace($pTitle, $replaceStr, $menuHtml);
                }
            }
            return $menuHtml;
        } else {
            return $menuHtml;
        }
    }
}