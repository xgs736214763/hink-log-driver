<?php

namespace think\log\driver;

interface NoticeLog
{
    /**
     * @describe:日志通知
     * @author: xiegaosheng
     * @date: 2021/11/26
     * @param $data
     * @return mixed
     */
    public function run($data);
}