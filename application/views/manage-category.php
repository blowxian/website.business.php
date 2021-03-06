<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>泰和包装管理后台</title>

    <?php echo link_tag( 'css/admin.css' ); ?>
</head>
<body>

    <div id="login-title">泰和网站管理后台</div>

    <div id="sub-title">管理类目</div>

    <div id="nav">
        <ul class="menu">
            <li><a href="<?php echo base_url().'admin/home/'; ?>">管理主页</a></li>
            <li><a href="<?php echo base_url().'admin/addnews/'; ?>">添加新闻</a></li>
            <li><a href="<?php echo base_url().'admin/managenews/'; ?>">管理新闻</a></li>
            <li><a href="<?php echo base_url().'admin/addcategory/'; ?>">添加类目</a></li>
            <li class="select"><a href="javascript:;">管理类目</a></li>
            <li><a href="<?php echo base_url().'admin/addproduct/'; ?>">添加产品</a></li>
            <li><a href="<?php echo base_url().'admin/manageproduct/'; ?>">管理产品</a></li>
        </ul>
    </div>

    <div id="main-port">

        <div class="admin-main"></div>

        <div class="manage-news">

            <table style="text-align: center;">
                <tbody>
                    <tr>
                        <th>类目名称</th>
                        <th>类目描述</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach( $category as $category_item ) { ?>
                    <tr>
                        <td><?php echo $category_item['category_name'] ?></td>
                        <td><?php echo $category_item['category_desc'] ?></td>
                        <td>
                            <input type='button' value="删除" onclick="window.location='<?php echo base_url().'admin/deletecategory/'.$category_item['category_id']; ?>'" />
                            <input type='button' value="修改" onclick="window.location='<?php echo base_url().'admin/updatecategory/'.$category_item['category_id']; ?>'" />
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
        
    </div>

</body>
</html>