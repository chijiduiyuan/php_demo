<?php
/*
 * 微信后台控制器
 */
namespace Admin\Controller;
use Think\Controller;
class WeixinController extends Controller {

    //菜单
    public function menu() {

        $list = M('WxMenu')->where('pid=0')->select(); //获取所有顶级菜单
        foreach ($list as $key => $v) {
            //查询子菜单
            $list[$key]['sub'] = M('WxMenu')->where('pid=' . $v['id'])->select();
        }
        // echo '<pre>';
        // print_r($list);
        $this->list = $list; //设置模板变量并赋值
        $this->display();
    }

    //添加菜单
    public function addMenu() {
        if (IS_POST) {//post 提交保存数据
            $name = I('post.name', '');
            $pid = I('post.pid', 0, 'intval');
            $type = I('post.type', '');
            $key = I('post.key', '');
            $url = I('post.url', '');
            $data = array(
                'name' => $name,
                'pid' => $pid,
                'type' => $type,
                'key' => $key,
                'url' => $url,
            );
            if (M('WxMenu')->add($data)) {
                $this->success('添加成功', U('menu'));
            } else {
                $this->error('添加失败', U('menu'));
            }
        } else {//显示添加表单
            //获取一级菜单
            $this->list = M('WxMenu')->where('pid=0')->select();
            $this->display();
        }
    }

    //修改菜单
    public function editMenu() {
        if (IS_POST) {
            $name = I('post.name', '');
            $pid = I('post.pid', 0, 'intval');
            $type = I('post.type', '');
            $key = I('post.key', '');
            $url = I('post.url', '');
            $id = I('post.id', 0, 'intval');

            $data = array(
                'name' => $name,
                'pid' => $pid,
                'type' => $type,
                'key' => $key,
                'url' => $url,
            );
            if (M('WxMenu')->where('id=' . $id)->save($data)) {
                $this->success('修改成功', U('menu'));
            } else {
                $this->error('修改失败', U('menu'));
            }
        } else {
            $id = I('get.id', 0, 'intval');
            $this->info = M('WxMenu')->find($id);
            //获取一级菜单
            $this->list = M('WxMenu')->where('pid=0')->select();
            $this->display('addMenu');
        }
    }

    //删除菜单
    public function delMenu() {
        $id = I('get.id', 0, 'intval');
        if (M('WxMenu')->where('id=' . $id . ' OR pid=' . $id)->delete()) {
            $this->success('删除成功', U('menu'));
        } else {
            $this->error('删除失败', U('menu'));
        }
    }

    //生成微信公众号菜单
    public function createMenu() {
        $topList = M('WxMenu')->where('pid=0')->limit(3)->select();
        $data = array();
        foreach ($topList as $key => $v) {
            $subList = M('WxMenu')->where('pid=' . $v['id'])->limit(5)->select(); //查询子菜单
            if ($subList) {//有子菜单
                $data[$key]['name'] = urlencode($v['name']);
                $tmp = array();
                foreach ($subList as $key1 => $v1) {//循环子菜单
                    $tmp[$key1]['name'] = urlencode($v1['name']);
                    $tmp[$key1]['type'] = $v1['type'];
                    if ($v1['type'] == 'view') {
                        $tmp[$key1]['url'] = urlencode($v1['url']);
                    } else {
                        $tmp[$key1]['key'] = urlencode($v1['key']);
                    }
                }
                $data[$key]['sub_button'] = $tmp;
            } else {//没有子菜单
                $data[$key]['name'] = urlencode($v['name']);
                $data[$key]['type'] = $v['type'];
                if ($v['type'] == 'view') {
                    $data[$key]['url'] = urlencode($v['url']);
                } else {
                    $data[$key]['key'] = urlencode($v['key']);
                }
            }
        }
        $arr = array();
        $arr['button'] = $data;

        $str = urldecode(json_encode($arr));

        $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=' . getAccessToken();

        echo CURLSend($url, 'post', $str);
    }

    public function delWxMenu() {
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=' . getAccessToken();
        echo CURLSend($url);
    }
}