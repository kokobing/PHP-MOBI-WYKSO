




<div data-role="popup" id="popupLogin<?=$pagerandcode?>" data-theme="a" class="ui-corner-all">
    <form method="post">
        <div style="padding:10px 20px;">
           
            <p>微艺库－登录提示：</p>
            <label for="un" class="ui-hidden-accessible">Username:</label>
            <input type="text" name="user" class="username" value="" placeholder="用户名" data-theme="a">
            <label for="pw" class="ui-hidden-accessible">Password:</label>
            <input type="password" name="pass" class="password" value="" placeholder="密码" data-theme="a">
            <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check" onClick="login();">登陆</button>
            
               <a href="/reg.html" class="ui-shadow ui-btn ui-corner-all  ui-btn-b">会员注册</a>
               
        </div>
    </form>
</div>

<div data-role="popup" id="MessagePopbox<?=$pagerandcode?>" class="ui-content" style="max-width:280px">
    <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
<p>message</p>
</div>

<div class="pagerandcode" style="display:none;"><?=$pagerandcode;?></div>