<?php
   global $qisk_db,$base_url,$image_url;
   if(isset($_SESSION['admin_unique_id'])) 
   {   
   get_qisk_header();
   $date_format = new DateTime();
   $date = $date_format->format("Y-m-d h:i:s"); 
   ?>
<div class="main_cntbx">
   <div class="content-page">
      <!-- Start content -->
      <div class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <?php
                     if(isset($_GET['type']))
                     { 
                     if(trim($_GET['type']=="add-user"))
                     {
                             ?>
                  <div class="card-box">
                     <div class="_bx_cnval_124">
                        <div class="_panel_hdnx">
                           <div class="_pnel_datavx">  
                              <span class="span_titlebx">
                              <a href="<?= $base_url; ?>/user-listing">  <span class="zmdi zmdi-arrow-left _icn_ze"></span></a>
                              <?= ucwords("Add user");?>
                              </span>   
                           </div>
                        </div>
                        <form id="admin_frm123" >
                           <div  class="wizard clearfix">
                              <div class="bx_rox123">
                                 <h5><?= ucwords("Account Information"); ?></h5>
                                 <section>
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Branch Name <span class="text-danger"></span></label>
                                             <div>
                                                <select class="form-control selectBranch" name="branch_name">
                                                   <option value="">Select Branch Name</option>
                                                   <?php 
                                                      $get_result_data=$qisk_db->get_results("select * from branch_listData");
                                                         if($get_result_data!=NULL)
                                                         {
                                                           foreach($get_result_data as $data)
                                                           {
                                                           
                                                               ?>
                                                   <option value="<?= data_encode($data->branch_uniqueid,"encode");?>">
                                                      <?= ucwords($data->branch_name); ?>
                                                   </option>
                                                   <?php
                                                      }
                                                      }
                                                      ?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Stall Name <span class="text-danger"></span></label>
                                             <div>
                                                <select class="form-control stall_select" name="stall_name">
                                                   <option value="">Select Stall Name</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">User Role <span class="text-danger"></span></label>
                                             <div>
                                                <select class="form-control user_role" name="user_role">
                                                   <option value="">Select User Role</option>
                                                   <?php 
                                                      $userRole=array("administrator","cashier");
                                                       if($userRole!=NULL)
                                                       {
                                                           foreach($userRole as $data)
                                                           {
                                                               
                                                                  ?>
                                                   <option value="<?= data_encode($data,"encode");?>">
                                                      <?= ucwords($data); ?>
                                                   </option>
                                                   <?php
                                                      }
                                                      }
                                                      ?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </div>
                           </div>
                           <div  class="wizard clearfix">
                              <div class="bx_rox123">
                                 <section>
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Firts Name<span class="text-danger"></span></label>
                                             <div>
                                                <input class="form-control"  name="first_name" type="text">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Last Name<span class="text-danger"></span></span></label>
                                             <div>
                                                <input class="form-control"  name="last_name" type="text">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="password"> Email address	<span class="text-danger"></span></label>
                                             <div>
                                                <input  name="email_id" type="text" class=" form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="password"> User Name	<span class="text-danger"></span></label>
                                             <div>
                                                <input  name="username" type="text" class=" form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Phone Number<span class="text-danger"></span></label>
                                             <div>
                                                <input  name="phone_number" type="text" class=" form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Password<span class="text-danger"></span></label>
                                             <div>
                                                <input  name="_new_pwd" type="password" class=" form-control">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </div>
                           </div>
                           <div  class="wizard clearfix">
                              <div class="bx_rox123">
                                 <h5>Profile Information</h5>
                                 <section>
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Address1<span class="text-danger"></span></label>
                                             <div>
                                                <textarea  class="form-control _text_area" name="address1"></textarea> 
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Address1<span class="text-danger"></span></label>
                                             <div>
                                                <textarea  class="form-control _text_area" name="address2"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="password"> City	<span class="text-danger"></span></label>
                                             <div>
                                                <input  name="city" type="text" class=" form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="password"> State	<span class="text-danger"></span></label>
                                             <div>
                                                <input  name="state" type="text" class=" form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Pincode<span class="text-danger"></span></label>
                                             <div>
                                                <input  name="pincode" type="text" class=" form-control _num_type">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="userName">Country<span class="text-danger"></span></label>
                                             <div>
                                                <select class="form-control" name="country">
                                                   <?php
                                                      $get_country_data=get_country_data();
                                                      if($get_country_data!=NULL)
                                                      {
                                                      
                                                          foreach($get_country_data as $country_key=>$country_data)
                                                          {
                                                              ?>
                                                   <option value="<?= data_encode($country_key,"encode");?>">
                                                      <?= $country_data->country_name; ?>
                                                   </option>
                                                   <?php 
                                                      }
                                                      }
                                                      ?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </div>
                           </div>
                           <div  class="wizard clearfix">
                              <div class="bx_rox123">
                                 <section>
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-6">
                                          <div class="form-group clearfix">
                                             <label for="password"> user Profile</label>
                                             <div>
                                                <div class="imgbx_btn" id="image_url">Image Upload</div>
                                                <div class="_img_bx_disdata">
                                                   <input type="file" name="image_url" id="img_logo_file" class="btn btn-primary" style="display:none;" accept="image/*">
                                                   <div class="_imng_bx_dataset">
                                                      <div class="img_prod_bx-mn-lst">
                                                         <img src="<?= $image_url->get_url("userImage"); ?>" alt="User Image" class="_com_src_log">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </div>
                           </div>
                        </form>
                        <div class="text-right">
                           <button class="btn btn-success waves-effect waves-light admim_adbtn">
                           <i class="fa fa-check"></i>
                           Submit</button>  
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  }
                  if(trim($_GET['type']=="edit-user"))
                  {
                      $user_unique_id=data_encode($_GET['user_unique_id'],"decode");
                      $user_data=get_user_data($user_unique_id); 
                      $stall_data=get_stall_data($user_data->ref_stall_uniqueid)
                     ?>
               <div class="card-box">
                  <div class="_bx_cnval_124">
                     <div class="_panel_hdnx">
                        <div class="_pnel_datavx">  
                           <span class="span_titlebx">
                           <a href="<?= $base_url; ?>/user-listing">  <span class="zmdi zmdi-arrow-left _icn_ze"></span></a>
                           <?= ucwords("Update / Edit user");?>
                           </span>   
                        </div>
                     </div>
                     <form id="admin_frm123" >
                        <input type="hidden" name="user_unique_id" value="<?= $_GET['user_unique_id']; ?>" />
                        <div  class="wizard clearfix">
                           <div class="bx_rox123">
                              <h5><?= ucwords("Account Information"); ?></h5>
                              <section>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">Branch Name <span class="text-danger"></span></label>
                                          <div>
                                             <select class="form-control selectBranch" name="branch_name">
                                                <option value="">Select Branch Name</option>
                                                <?php 
                                                   $get_result_data=$qisk_db->get_results("select * from branch_listData");
                                                      if($get_result_data!=NULL)
                                                      {
                                                        foreach($get_result_data as $data)
                                                        {
                                                            if($data->branch_uniqueid==$user_data->ref_branch_uniqueid)
                                                            {
                                                             $selected='selected="selected"';
                                                            }
                                                            else
                                                            {
                                                                $selected="";
                                                            }
                                                        
                                                            ?>
                                                <option <?= $selected; ?> value="<?= data_encode($data->branch_uniqueid,"encode");?>">
                                                   <?= ucwords($data->branch_name); ?>
                                                </option>
                                                <?php
                                                   }
                                                   }
                                                   ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">Stall Name <span class="text-danger"></span></label>
                                          <div>
                                             <select class="form-control stall_select" name="stall_name">
                                                <option value="<?= data_encode($user_data->ref_stall_uniqueid,"encode"); ?>"><?= ucwords($stall_data->stall_name);?></option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">User Role <span class="text-danger"></span></label>
                                          <div>
                                             <select class="form-control user_role" name="user_role">
                                                <option value="">Select User Role</option>
                                                <?php 
                                                   $userRole=array("administrator","cashier");
                                                    if($userRole!=NULL)
                                                    {
                                                        foreach($userRole as $data)
                                                        {
                                                            if($data==$user_data->user_role)
                                                               {
                                                                $selected='selected="selected"';
                                                               }
                                                               else
                                                               {
                                                                   $selected="";
                                                               }
                                                           
                                                            
                                                               ?>
                                                <option <?= $selected; ?> value="<?= data_encode($data,"encode");?>">
                                                   <?= ucwords($data); ?>
                                                </option>
                                                <?php
                                                   }
                                                   }
                                                   ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                        <div  class="wizard clearfix">
                           <div class="bx_rox123">
                              <section>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">Firts Name<span class="text-danger"></span></label>
                                          <div>
                                             <input class="form-control"  name="first_name" type="text" value="<?= $user_data->first_name;?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">Last Name<span class="text-danger"></span></label>
                                          <div>
                                             <input class="form-control"  name="last_name" type="text" value="<?= $user_data->last_name;?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="password"> Email address	<span class="text-danger"></span></label>
                                          <div>
                                             <input  name="email_id" type="text" class=" form-control" value="<?= $user_data->email_id;?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="password"> User Name	<span class="text-danger"></span></label>
                                          <div>
                                             <input  name="username" type="text" class=" form-control" value="<?= $user_data->username;?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">Phone Number<span class="text-danger"></span></label>
                                          <div>
                                             <input  name="phone_number" type="text" class=" form-control" value="<?= $user_data->phone;?>">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                        <div  class="wizard clearfix">
                           <div class="bx_rox123">
                              <h5>Profile Information</h5>
                              <section>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">Address1<span class="text-danger"></span></label>
                                          <div>
                                             <textarea  class="form-control _text_area" name="address1"><?= $user_data->address1;?></textarea> 
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">Address1<span class="text-danger"></span></label>
                                          <div>
                                             <textarea  class="form-control _text_area" name="address2"><?= $user_data->address2;?></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="password"> City	<span class="text-danger"></span></label>
                                          <div>
                                             <input  name="city" type="text" class=" form-control" value="<?= $user_data->city;?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="password"> State	<span class="text-danger"></span></label>
                                          <div>
                                             <input  name="state" type="text" class=" form-control" value="<?= $user_data->state;?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">Pincode<span class="text-danger"></span></label>
                                          <div>
                                             <input  name="pincode" type="text" class=" form-control _num_type" value="<?= $user_data->pincode;?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="userName">Country<span class="text-danger"></span></label>
                                          <div>
                                             <select class="form-control" name="country">
                                                <?php
                                                   $get_country_data=get_country_data();
                                                   if($get_country_data!=NULL)
                                                   {
                                                      
                                                       foreach($get_country_data as $country_key=>$country_data)
                                                       {
                                                           
                                                           if(trim($user_data->country_code) == trim($country_key))
                                                           {
                                                              $selected='selected="selected"';
                                                           }
                                                           else
                                                           {
                                                               $selected='';
                                                           }
                                                           ?>
                                                <option <?= $selected;?> value="<?= data_encode($country_key,"encode");?>">
                                                   <?= $country_data->country_name; ?>
                                                </option>
                                                <?php 
                                                   }
                                                   }
                                                   ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                        <div  class="wizard clearfix">
                           <div class="bx_rox123">
                              <section>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                       <div class="form-group clearfix">
                                          <label for="password"> User Profile</label>
                                          <div>
                                             <div class="imgbx_btn" id="image_url">Image Upload</div>
                                             <div class="_img_bx_disdata">
                                                <input type="file" name="image_url" id="img_logo_file" class="btn btn-primary" style="display:none;" accept="image/*">
                                                <div class="_imng_bx_dataset">
                                                   <div class="img_prod_bx-mn-lst">
                                                      <img src="<?= $user_data->image_data; ?>" alt="Profile Image" class="_com_src_log">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                     </form>
                     <div class="text-right">
                        <button class="btn btn-success waves-effect waves-light admim_adbtn">
                        <i class="fa fa-check"></i>
                        Update</button>  
                     </div>
                  </div>
               </div>
            </div>
            <?php
               }
               if(trim($_GET['type']=="view-user"))
               { 
                 $user_unique_id=data_encode($_GET['user_unique_id'],"decode");
                 $user_data=get_user_data($user_unique_id); 
                 $branch_data=get_branch_data($user_data->ref_branch_uniqueid); 
                 $stall_data=get_stall_data($user_data->ref_stall_uniqueid);
                    ?> 
            <div class="card-box">
               <div class="_bx_cnval_124">
                  <div class="_panel_hdnx">
                     <div class="_pnel_datavx">  
                        <span class="span_titlebx">
                        <a href="<?= $base_url; ?>/user-listing">  <span class="zmdi zmdi-arrow-left _icn_ze"></span></a>
                        <?= ucwords("user Details");?>
                        </span>   
                     </div>
                  </div>
                  <div  class="wizard clearfix">
                     <div class="bx_rox123">
                        <div class="_prof_bx78">
                           <?php
                              if($user_data->active_status==1)
                              {
                                  ?>
                           <span class="mdi mdi-check-circle _actv475u"></span>
                           <?php
                              }
                              ?>
                           <div class="_prof_img45">
                              <img src="<?= $user_data->image_data;?>"/>
                           </div>
                           <div class="_nme_tbl4">
                              <?= ucwords($user_data->first_name." " .$user_data->last_name);?>
                           </div>
                        </div>
                        <div>
                           <div class="_dvChr_b458 _fld_tb145">
                              <div class="_sbhd_452">Account Information</div>
                              <div class="_cnt_d_tbl7">
                                 <table>
                                    <tr>
                                       <td class="_cnt_dta">
                                          Branch Name
                                       </td>
                                       <td class="_cnt_vl">
                                          <?= ucwords($branch_data->branch_name);?>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="_cnt_dta">
                                          Stall Name
                                       </td>
                                       <td class="_cnt_vl">
                                          <?= ucwords($stall_data->stall_name);?>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="_cnt_dta">
                                          User Role
                                       </td>
                                       <td class="_cnt_vl">
                                          <?= ucwords($user_data->user_role);?>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="_cnt_dta">
                                          First Name
                                       </td>
                                       <td class="_cnt_vl">
                                          <?= ucwords($user_data->first_name);?>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="_cnt_dta">
                                          Last Name
                                       </td>
                                       <td class="_cnt_vl">
                                          <?= ucwords($user_data->last_name);?>
                                       </td>
                                    </tr>
                                    <?php
                                       if(!empty($user_data->username))
                                       {
                                           ?>
                                    <tr>
                                       <td class="_cnt_dta">
                                          User Name
                                       </td>
                                       <td class="_cnt_vl">
                                          <?= strtolower($user_data->username);?>
                                       </td>
                                    </tr>
                                    <?php
                                       }
                                       ?> 
                                    <tr>
                                       <td class="_cnt_dta">
                                          Email
                                       </td>
                                       <td class="_cnt_vl">
                                          <?= strtolower($user_data->email_id);?>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="_cnt_dta">
                                          Phone
                                       </td>
                                       <td class="_cnt_vl">
                                          <?= $user_data->phone;?>
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="_dvChr_b458 _fld_tb145">
                           <div class="_sbhd_452">Personal Information</div>
                           <div class="_cnt_d_tbl7">
                              <table>
                                 <tr>
                                    <td class="_cnt_dta">
                                       Address
                                    </td>
                                    <td class="_cnt_vl">
                                       <div> <?= ucwords($user_data->address1);?></div>
                                       <div> <?= ucwords($user_data->address2);?></div>
                                    </td>
                                 <tr>
                                    <td class="_cnt_dta">
                                       Country
                                    </td>
                                    <td class="_cnt_vl">
                                       <?= ucwords($user_data->country_name);?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="_cnt_dta">
                                       City
                                    </td>
                                    <td class="_cnt_vl">
                                       <?= ucwords($user_data->city);?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <?php
                                       if(!empty($user_data->state))
                                         {
                                             ?>
                                 <tr>
                                    <td class="_cnt_dta">
                                       State
                                    </td>
                                    <td class="_cnt_vl">
                                       <?= ucwords($user_data->state);?>
                                    </td>
                                 </tr>
                                 <?php
                                    }
                                    ?> 
                                 <tr>
                                 <tr>
                                    <td class="_cnt_dta">
                                       Postal code
                                    </td>
                                    <td class="_cnt_vl">
                                       <?= $user_data->pincode;?>
                                    </td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php
            }
               }
               else
               {
               ?>
         <div class="card-box">
            <div class="_pro_loder_bx" style="display: none;">
               <div class="progress">
                  <div class="indeterminate"></div>
               </div>
            </div>
            <div class="_bx_cnval_124">
            <form id="fltr_FRm_cnt">
               <div class="_panel_hdnx"> 
                     <div class="_panel_hdnx">
                        <div class="_pnel_datavx">
                           <span class="span_titlebx">
                           <?= ucwords("user Listing");?>
                           <a class="href_124bx" href="<?= $base_url;?>/user-listing?type=add-user">Add user</a>
                           </span> 
                           <div class="_rep_filter_bx">
                              <div class="_dt_pckr_dbrd _depart_bx_123">
                                 <input type="text" name="search_term" class="search_bx_filter user_srchbx" placeholder="Any Searching">
                              </div>
                           </div>
                        </div>
                     </div> 
               </div>
               <div class="main_bx1234">
                  <div class="disbx3 selctdropbx">
                     <select class="form-control" name="sortby"> 
                        <?php
                           $soryby=array("DESC","ASC");
                           foreach($soryby as $soryby_data)
                           { 
                            ?>
                        <option value="<?= data_encode($soryby_data,"encode");?>">Sory By <?= ucwords($soryby_data);?></option>
                        <?php
                           }
                           ?> 
                     </select>
                  </div>
                  <div class="disbx3 selctdropbx">
                  <select class="form-control selectBranch" name="branch_data"> 
                     <option value="">Filter by Branch</option>
                        <?php  
                           $get_result_data=$qisk_db->get_results("select * from branch_listData"); 
                           if($get_result_data!=NULL)
                             {  
                                 foreach($get_result_data as $data)
                                 { 
                                     ?>
                        <option value="<?= data_encode($data->branch_uniqueid,"encode");?>"><?= ucwords($data->branch_name. " -".$data->branch_code);?></option>
                        <?php
                           }
                           }
                           ?> 
                     </select>
                  </div>
                  <div class="disbx3 selctdropbx">
                  <select class="form-control stall_select" name="stall_data">  
                        <option value="">Filter by Stall</option>
                     </select>
                  </div>
                  <div class="disbx3 selctdropbx">
                     <button type="button" class="btn btn-success waves-effect waves-light fiterbysearch">Submit</button>
                  </div>
               </div>
               </form>
               <script> 
                  $(document).ready(function () {
                      $(window).scroll(function () {
                          /* paginate_blg */
                          if ($(".user_list-main-bx").hasClass("_actv")) {
                              var $user_lst_bx = parseFloat($(".lst_bx458").innerHeight()) - parseFloat(300);
                              if ($user_lst_bx < $(window).scrollTop()) {
                               _loaduser_list.pagin();
                              }
                          }
                      });
                  });
               </script>
               <div class="user_list-main-bx">
                  <script>
                     $(document).ready(function() {
                         _loaduser_list.init();
                     });
                  </script>
               </div>
            </div>
         </div>
         <?php
            }
            ?>
      </div>
   </div>
</div>
<!-- end col-->
</div>
<!-- end row -->
</div>
<!-- container -->
</div>
<!-- content -->
</div>
</div>
<?php
get_qisk_footer();
}
else
{
header("Location:".$base_url."/login");  
}