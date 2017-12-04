                   
<!-- 弹出锁定窗 #lockwindow -->

            <!-- Modal -->
                  <div class="modal fade" id="lockwindow" tabindex="5" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header vd_bg-<?=$c_openwindowcolor;?> vd_white">
                          
                          <h4 class="modal-title" id="myModalLabel">锁屏</h4>
                        </div>
                        <div class="modal-body"> 
                        	<form class="form-horizontal">
                            <div class="form-group">
                              <label class="col-sm-4 control-label">用户名</label>
                              <div class="col-sm-7 controls">
                                <input class="input-border-btm" type="text" value="<?=$_SESSION[username]?>" readonly>
                              </div>

                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-4 control-label">密码</label>
                              <div class="col-sm-7 controls">
                                <input class="input-border-btm" type="password">
                              </div>

                            </div>
                            
                            
                          </form>
                        
                        </div>
                        <div class="modal-footer background-login">
                          
                          <button type="button" class="btn vd_btn vd_bg-green">解锁</button>
                        </div>
                      </div>
                      <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                  </div>
                  <!-- /.modal --> 
 
 <!-- END 弹出锁定窗 -->
 
 
 
                    
<!-- #setpassword 密码修改弹出窗 -->

            <!-- Modal -->
                  <div class="modal fade" id="setpassword" tabindex="5" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header vd_bg-<?=$c_openwindowcolor;?> vd_white">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">密码设置</h4>
                        </div>
                        <div class="modal-body"> 
                        	<form class="form-horizontal">
                            
                            <div class="form-group">
                              <label class="col-sm-4 control-label">原密码</label>
                              <div class="col-sm-7 controls"><input class="input-border-btm" type="password"></div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-4 control-label">新密码</label>
                              <div class="col-sm-7 controls"><input class="input-border-btm" type="password"></div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-4 control-label">再输入新密码</label>
                              <div class="col-sm-7 controls"><input class="input-border-btm" type="password"></div>

                            </div>                          
                            </form>
                        
                        </div>
                        <div class="modal-footer background-login">
                          <button type="button" class="btn  vd_btn vd_bg-red" data-dismiss="modal">取消</button>
                          <button type="button" class="btn vd_btn vd_bg-green">确定修改</button>
                        </div>
                      </div>
                      <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                  </div>
                  <!-- /.modal --> 
 
 <!-- END 密码修改弹出窗 -->
 
 
 
 
                    
<!-- #upload_touxiang 更换头像 -->

            <!-- Modal -->
                  <div class="modal fade" id="upload_touxiang" tabindex="5" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header vd_bg-<?=$c_openwindowcolor;?> vd_white">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">更换头像</h4>
                        </div>
                        <div class="modal-body" style="padding-bottom:10px;"> 
                        	<form class="form-horizontal">
                            
            
                            
                            <div class="col-md-6">
                            
                            
                              <div class="form-group">
                                  <img src="/admin/inc/pics/avatar.jpg" width="100" />
                              </div>
                              
                               <div class="form-group">
                                  <input type="file" id="exampleInputFile">
                                  <p>请上传JPG图像</p>
                               </div>
                               
                            </div>
                            <div class="clearfix"></div>
                                    
                            </form>
                        
                        </div>
                        <div class="modal-footer background-login">
                          <button type="button" class="btn  vd_btn vd_bg-red" data-dismiss="modal">取消</button>
                          <button type="button" class="btn vd_btn vd_bg-green">上传头像</button>
                        </div>
                      </div>
                      <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                  </div>
                  <!-- /.modal --> 
 
 <!-- END 更换头像 -->
 
 
 <!-- #exit_logout 退出系统弹屏 -->

            <!-- Modal -->
                  <div class="modal fade" id="exit_logout" tabindex="5" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header vd_bg-red vd_white">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">退出系统</h4>
                        </div>
                        <div class="modal-body" style="padding-bottom:10px;"> 
                        	<form class="form-horizontal">
                            
                            <div class="col-md-10">
                            
                            
                              <div class="form-group">
                                <h4> 通知中心：</h4>
                              </div>
                              
                               <div class="form-group">
                                 
                                  <p>所有销售员工予2014-5-25日下午三点钟到大会议室开会！</p>
                               </div>
                               
                            </div>
                            <div class="clearfix"></div>
                                    
                            </form>
                        
                        </div>
                        <div class="modal-footer background-login">
                          <button type="button" class="btn  vd_btn vd_bg-green" data-dismiss="modal">取消</button>
                          <button type="button" class="btn  vd_btn vd_bg-red" onclick="logout('<?=SITE_DIR?>');">立即退出</button>
                         
                        </div>
                      </div>
                      <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                  </div>
                  <!-- /.modal --> 
 
 <!-- END 退出系统弹屏 -->
 
 
 
                    
      