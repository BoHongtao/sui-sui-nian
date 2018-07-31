<?php
use app\components\AjaxPager;
?>
<div class="row-fluid table">
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="span4 sortable">
                <span class="line"></span> 序号
            </th>
            <th class="span3 sortable">
                <span class="line"></span>头像
            </th>
            <th class="span2 sortable">
                <span class="line"></span>角色
            </th>
            <th class="span2 sortable">
                <span class="line"></span>真实姓名
            </th>
            <th class="span2 sortable">
                <span class="line"></span>联系电话
            </th>
            <th class="span2 sortable">
                <span class="line"></span>操作
            </th>
        </tr>
        </thead>

        <tbody>
        <!-- row -->
        <tr class="first">
            <?php foreach ($OperatorsInfos as $key => $operator): ?>
                <td width="10%"><?= $key + 1 + $pager->offset ?></td>
                <td>
                    <img src="<?= $operator['operatorinfos']['head_pic']=='' ? 'static/img/contact-img.png' : $operator['operatorinfos']['head_pic'] ?>" class="img-circle avatar hidden-phone" />
                    <a href="user-profile.html" class="name"><?= $operator['operator_name'] ?></a>
                    <span class="subtext"><?= $operator['operatorinfos']['company'] ?></span>
                </td>
                <td>
                    <?=  isset($role[$operator['id']])?$role[$operator['id']]:""; ?>
                </td>
                <td>
                    <?= $operator['operatorinfos']['truename'] ?>
                </td>
                <td>
                    <a href="#"><?= $operator['operatorinfos']['contact_phone'] ?></a>
                </td>
                <td>
                    <span>重置密码</span>
                    <span>删除</span>
                    <span>编辑</span>
                </td>
            <?php endforeach; ?>
        </tr>
        <!-- row -->
        </tbody>
    </table>
</div>

<div class="pagination pull-right">
    <?php
        echo AjaxPager::widget([
            'pagination' => $pager
        ]);
    ?>
</div>
