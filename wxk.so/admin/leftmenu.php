<div class="navbar-menu  clearfix">
        <div class="vd_panel-menu hidden-xs">
            <span data-original-title="全部展开" data-toggle="tooltip" data-placement="bottom" data-action="expand-all" class="menu" data-intro="" data-step=4 >
                <i class="fa fa-sort-amount-asc"></i>
            </span>    
            
          
                           
        </div>
    	<h3 class="menu-title hide-nav-medium hide-nav-small">易用管理平台</h3>
        <div class="vd_menu">
        
        	 <ul>
    <? 
	 for($i=0;$i<$arrMenu1list_num;$i++){
		 
		 //当前用户菜单的URL在PVAY1表中是否允许访问
		 $strSQL="SELECT ".$arrMenu1list[$i][url]." as permit FROM pavy1 WHERE ".$arrMenu1list[$i][url]."='1' and id_hr='$_SESSION[userid]'";
         $objDB->Execute($strSQL);
		 $dir1isdisplay=$objDB->fields();
		 
		 if($dir1isdisplay[permit]=='1'){//一级目录允许访问 则显示
    ?>    
             
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger"  <? if($ispermit[fatherid]==$arrMenu1list[$i][id]){echo "class='open'";}?>>
        	<span class="menu-icon"><i class="fa fa-<?=$arrMenu1list[$i][icon];?>"></i></span> 
            <span class="menu-text"><?=$arrMenu1list[$i][name];?></span>  
            <span class="menu-badge">              
               <span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span>
            </span>
       	</a>
        
     	<div class="child-menu"  data-action="click-target" <? if($ispermit[fatherid]==$arrMenu1list[$i][id]){echo "style='display:block'";}?>>
            <ul>
            
            <?
              $strSQL="SELECT a.id_backmenu as id,a.name,a.icon,a.url FROM backmenu as a left join pavy2 as b on a.id_backmenu=b.id_backmenu
			           WHERE a.level='2' and a.fatherid='".$arrMenu1list[$i][id]."' and b.display_permit='1' and b.id_hr='$_SESSION[userid]'                       order by a.ordernum ASC";
              $objDB->Execute($strSQL);
              $arrMenu2list=$objDB->GetRows();//取二级目录 
			  
			 for($j=0;$j<sizeof($arrMenu2list);$j++){
				 
				 if($ispermit[id_backmenu]==$arrMenu2list[$j][id]){$leftmenu_icon=$arrMenu2list[$j][icon];}//当前页的二级目录图标
			?>
            
                <li>
                    <a href="/<?=SITE_DIR?><?=$arrMenu2list[$j][url];?>" style="padding: 3px 50px 5px;<? if($ispermit[id_backmenu]==$arrMenu2list[$j][id]){echo "background: rgba(255,255,255,0.2);";}?>" >
                        <span class="menu-icon"><i class="fa fa-<?=$arrMenu2list[$j][icon];?>"></i></span> 
                        <span class="menu-text"><? echo $arrMenu2list[$j][name];?></span>  
                    </a>
                </li>  
                
                <? }?>               
                                                                                  
            </ul>   
      	</div>
    </li>  
   <?  } }?>   
       
                 
</ul>
     </div>             
    </div>