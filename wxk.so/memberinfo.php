<?php
require "./inc/cn_index_core.php";

if($_GET[act]=='up'){
	
if(isset($_POST["needup"]) && $_POST["needup"]=='1'){	//如果存在 并且=1 才更新
	
	 //是否上传员工头像
      if ( is_uploaded_file( $_FILES['staffpic']['tmp_name'] ) ){
	  
         $image_file=upload_file("staffpic","upload/pics/",mktime());//上传图片
		 @unlink('upload/pics/'.$_POST[oldphoto]);
		 
		 $pic_path= "upload/pics/".$image_file;//图片路径
		 
		 $exif = @exif_read_data($pic_path);
         $ort = $exif['Orientation'];
		 
		 ini_set('memory_limit','100M');
		 include_once( './inc/csmallpic.php' );//缩咯图类
	     CreateThumbnail($pic_path,$pic_path,260,0);//建缩略图
		 
		 switch($ort)
            {

                case 3: // 180 rotate left
                    flip($pic_path,$pic_path,180);
                    break;

                case 6: // 90 rotate right
                    flip($pic_path,$pic_path,-90);
                    break;

                case 8:    // 90 rotate left
                    flip($pic_path,$pic_path,90);
                    break;
            }
		 
		
		}else{
		  $image_file=$_POST[oldphoto];
		}
	
	
		$name= $_POST["name"];
		$sex=$_POST["sex"];
		$age=$_POST["age"];
		$address=$_POST["address"];
		$intro=$_POST["intro"];
		$phoneNumber=$_POST["phoneNumber"];

	 
		$strSQL="UPDATE member SET name='$name',sex='$sex',age='$age',city='$address',intro='$intro',photo='$image_file' where id_member='".$_SESSION[memberid]."' ";
		$objDB->Execute($strSQL);
}
	
}






	$strSQL="SELECT * FROM member WHERE  id_member='$_SESSION[memberid]' ";//需要编辑的员工
    $objDB->Execute($strSQL);
    $Memberinfo=$objDB->fields();
	
	
	
if (isset($_POST[crop]))
{
	$targ_w = $targ_h = 150;
	$jpeg_quality = 100;

	$src = 'upload/pics/'.$Memberinfo[photo];

	$img_r = imagecreatefromjpeg($src);
	$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

	imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
	$targ_w,$targ_h,$_POST['w'],$_POST['h']);
    imagejpeg($dst_r,$src,$jpeg_quality);


}






?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="微艺库" />
<meta name="description" content="微艺库" />
<title>微艺库</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="/inc/css/jquery.mobile.theme-1.4.0.css" />
<link rel="stylesheet" href="/inc/css/jquery.mobile.icons-1.4.0.min.css" />
<link rel="stylesheet" href="/inc/css/jquery.mobile.structure-1.4.0.min.css" /> 
<link href="/inc/css/font-awesome.min.css" rel="stylesheet">
<link href="/inc/css/photoswipe.css" type="text/css" rel="stylesheet" />
<link href="/inc/css/resetui.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/inc/js/klass.min.js"></script> <!--photoswipe-->  
<script src="/inc/js/jquery.js" type="text/javascript"></script>
<script src="/inc/js/slider.min.js"></script>
<script>$(document).bind("mobileinit", function(){$.mobile.defaultPageTransition = 'slide';});</script>
<script src="/inc/js/jquery.mobile-1.4.0.min.js" type="text/javascript"></script>
<script src="/inc/js/custom.js" type="text/javascript"></script>
<script src="/inc/js/jquery.easing.js"></script>
<script src="/inc/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/inc/js/code.photoswipe.jquery-3.0.5.1.min.js"></script>   

</head>
<body>

<div data-role="page" id="mobistyle-webapp" class="my-page" >

 <? require "header.php"; ?>   


<div data-role="content" id="contentinnnerbg" >

<? if($_GET[act]!='up'){?>
<div style="width:100%;margin:0 auto; position:relative">
 <img src="upload/pics/<?php echo $Memberinfo[photo];?>" style="width:40px; position:absolute;right:0px;top:5px;">
 <form  id="formforbmsetupload" action="memberinfo.html?act=up"  method="post" enctype="multipart/form-data"  data-ajax='false' >
 <input type="password" style="display:none" id="dispasswordautointable">
 <input type="hidden" style="display:none" id="needup" name="needup" value="1">
          <div style="margin-top:15px;font-size:120%;font-weight:bold;">完善个人资料</div>
          <div style="margin-top:15px;"><input name="name" id="name"   type="text"  placeholder="姓名" value="<?=$Memberinfo[name]?>" style="padding: .6em 20px;padding-left:30px; background:url(/inc/pics/m_reg_icon01.png) no-repeat"></div>
          
            
        <!--  <div style="margin-top:15px;">
          <select id="sex"  name="sex">
          <option value="0">选择会员性别</option>
          <option value="1">男性</option>
          <option value="2">女性</option>
        </select></div>-->
          
          <div style="margin-top:15px;"><input name="age" id="age"   type="text"  placeholder="出生年份 1949" value="<?=$Memberinfo[age]?>" style="padding: .6em 20px;padding-left:30px; background:url(/inc/pics/m_reg_icon01.png) no-repeat"></div>
          
         <div style="margin-top:15px;"><input name="address" id="address"   type="text"  placeholder="城市" value="<?=$Memberinfo[city]?>" style="padding: .6em 20px;padding-left:30px; background:url(/inc/pics/m_reg_icon01.png) no-repeat"></div>
         
         <div style="margin-top:15px;"><textarea name="intro" id="intro"  type="text" placeholder="个人简介" style="padding: .6em 20px;padding-left:30px; background:url(/inc/pics/m_reg_icon04.png) no-repeat"><?=$Memberinfo[intro]?></textarea></div>
         
          
    <!--      <div style="margin-top:15px;"><input name="phoneNumber" id="phoneNumber"  type="text" placeholder="手机号"  value="" style="padding: .6em 20px;padding-left:30px; background:url(/inc/pics/m_reg_icon04.png) no-repeat"></div>-->
          
               
            <div style="margin-top:15px;">
             
            <label for="file">上传头像:</label>
       
            <input type="file" name="staffpic" id="staffpic" value="">
            <input type="hidden" name="oldphoto" style="display:none" value="<?php echo $Memberinfo[photo];?>">
            </div>
          
        
          
          <div style="margin-top:15px;">
             <input type="submit" value="修改资料"  data-theme="b">
          </div>
      </form>   
      
       
       </div>
<? }else{?>
<div style="width:100%;margin:0 auto;">
 
<script src="/inc/js/jquery.Jcrop.js"></script>
<link rel="stylesheet" href="/inc/css/jquery.Jcrop.css" type="text/css" />
<script type="text/javascript">

  $(function(){

    $('#cropbox').Jcrop({
      aspectRatio: 1,
      onSelect: updateCoords
    });

  });

  function updateCoords(c)
  {
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

  function checkCoords()
  {
    if (parseInt($('#w').val())) return true;
    alert('请先选择头像的区域！');
    return false;
  };
  
  


</script>

		<img src="upload/pics/<?=$Memberinfo[photo];?>" id="cropbox" />

		<!-- This is the form that our event handler fills -->
		<form action="memberinfo.html" method="post" onsubmit="return checkCoords();">
            <input type="hidden" id="crop" name="crop" />
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
			<input type="submit" value="选取头像区域" data-theme="b" />
		</form>




</div>
<? }?>






                
</div><!-- /content -->

 <? require "footer.php"; ?>   











</div><!-- /page -->




</body>
</html>