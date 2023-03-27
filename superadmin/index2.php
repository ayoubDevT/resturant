<!DOCTYPE html>
<html lang="en">
<?php include('header.php');
include '../dbcon.php';
$query4 ="SELECT datecreation,email,login,client.id AS 'client',admin.code AS 'admin',superadmin.id AS 'superadmin' FROM compte LEFT OUTER JOIN client ON compte.id = client.compte LEFT OUTER JOIN admin ON compte.id = admin.compte LEFT OUTER JOIN superadmin ON compte.id = superadmin.compte";
                    $stmt = $conn->prepare($query4);
                    $result4 = $conn->query($query4); ?>
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <!-- USER DATA-->
                                <div class="user-data m-b-40 ">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table table-data m-l-20">
                                        <table class="table m-l-170">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>name</td>
                                                    <td>role</td>
                                                    <td>created in</td>
                                                    <td>login</td>
                                                     <td>type</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
 while($row= $result4->fetch_assoc()) 
 {
  ?> 
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <span>
                                                                <a href="#"><?=$row['email'];?></a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role <?php if (!empty($row['client'])){echo "user";}elseif (!empty($row['admin'])) {echo "admin";}elseif (!empty($row['superadmin'])) {echo "superadmin";}else {echo "guest";} ?>"><?php if (!empty($row['client'])){echo "user";}elseif (!empty($row['admin'])) {echo "admin";}elseif (!empty($row['superadmin'])) {echo "superadmin";}else {echo "guest";} ?></span>
                                                    </td>
                                                    <td>
                                                        <span class=""><?=$row['datecreation'];?></span>
                                                    </td>
                                                    <td>
                                                        <span class=""><?=$row['login'];?></span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php } ?> 
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
                          
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 gharib. All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
</body>
<?php include('footer.php'); ?>
</html>
<!-- end document-->