<?php echo e(Form::model($role,array('route' => array('roles.update', $role->id), 'method' => 'PUT'))); ?>

<div class="modal-body">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('name',__('Name'),['class'=>'form-label'])); ?>

                <?php echo e(Form::text('name',null,array('class'=>'form-control','placeholder'=>__('Enter Role Name')))); ?>

                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="invalid-name" role="alert">
                    <strong class="text-danger"><?php echo e($message); ?></strong>
                </small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <!--kodingan baru-->
                <li class="nav-item">
                    <a class="nav-link active" id="pills-logistic-tab" data-bs-toggle="pill" href="#logistic" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo e(__('Logistic')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-procurement-tab" data-bs-toggle="pill" href="#procurement" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo e(__('Procurement')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-payable-tab" data-bs-toggle="pill" href="#payable" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo e(__('Payable')); ?></a>
                </li>
                <!--end kodingan baru-->
                <li class="nav-item">
                    <a class="nav-link" id="pills-staff-tab" data-bs-toggle="pill" href="#staff" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo e(__('Staff')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-crm-tab" data-bs-toggle="pill" href="#crm" role="tab" aria-controls="pills-profile" aria-selected="false"><?php echo e(__('CRM')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-project-tab" data-bs-toggle="pill" href="#project" role="tab" aria-controls="pills-contact" aria-selected="false"><?php echo e(__('Project')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-hrmpermission-tab" data-bs-toggle="pill" href="#hrmpermission" role="tab" aria-controls="pills-contact" aria-selected="false"><?php echo e(__('HRM')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-account-tab" data-bs-toggle="pill" href="#account" role="tab" aria-controls="pills-contact" aria-selected="false"><?php echo e(__('Account')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-account-tab" data-bs-toggle="pill" href="#pos" role="tab" aria-controls="pills-contact" aria-selected="false"><?php echo e(__('POS')); ?></a>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!--kodingan baru-->
                <div class="tab-pane fade show active" id="logistic" role="tabpanel" aria-labelledby="pills-logistic-tab">
                    <?php
                        $modules=['barcode', 'stock', 'product & service', 'warehouse'];
                    ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if(!empty($permissions)): ?>
                                <h6 class="my-3"><?php echo e(__('Assign Logistic Permission to Roles')); ?></h6>
                                <table class="table table-striped mb-0" id="">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input align-middle custom_align_middle" name="logistic_checkall" id="logistic_checkall" >
                                        </th>
                                        <th><?php echo e(__('Module')); ?> </th>
                                        <th><?php echo e(__('Permissions')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input align-middle ischeck logistic_checkall"  data-id="<?php echo e(str_replace(' ', '', str_replace('&', '', $module))); ?>" ></td>
                                            <td><label class="ischeck logistic_checkall" data-id="<?php echo e(str_replace(' ', '', str_replace('&', '', $module))); ?>"><?php echo e(ucfirst($module)); ?></label></td>
                                            <td>
                                                <div class="row ">
                                                    <?php if(in_array($module.' report',(array) $permissions)): ?>
                                                        <?php if($key = array_search($module.' report',$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input logistic_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Report',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('manage '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('manage '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input logistic_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Manage',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('create '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input logistic_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('edit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('edit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input logistic_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input logistic_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('show '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('show '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input logistic_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="procurement" role="tabpanel" aria-labelledby="pills-procurement-tab">
                    <?php
                        $modules=['purchase','vender'];
                    ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if(!empty($permissions)): ?>
                                <h6 class="my-3"><?php echo e(__('Assign Procurement Permission to Roles')); ?></h6>
                                <table class="table table-striped mb-0" id="">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input align-middle custom_align_middle" name="procurement_checkall" id="procurement_checkall" >
                                        </th>
                                        <th><?php echo e(__('Module')); ?> </th>
                                        <th><?php echo e(__('Permissions')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input align-middle ischeck procurement_checkall"  data-id="<?php echo e(str_replace(' ', '', str_replace('&', '', $module))); ?>" ></td>
                                            <td><label class="ischeck procurement_checkall" data-id="<?php echo e(str_replace(' ', '', str_replace('&', '', $module))); ?>"><?php echo e(ucfirst($module)); ?></label></td>
                                            <td>
                                                <div class="row ">
                                                    <?php if(in_array($module.' report',(array) $permissions)): ?>
                                                        <?php if($key = array_search($module.' report',$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input procurement_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Report',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('manage '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('manage '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input procurement_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Manage',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('create '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input procurement_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('edit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('edit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input procurement_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input procurement_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('show '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('show '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input procurement_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="payable" role="tabpanel" aria-labelledby="pills-payable-tab">
                    <?php
                        $modules=['purchase','vender'];
                    ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if(!empty($permissions)): ?>
                                <h6 class="my-3"><?php echo e(__('Assign Payable Permission to Roles')); ?></h6>
                                <table class="table table-striped mb-0" id="">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input align-middle custom_align_middle" name="payable_checkall" id="payable_checkall" >
                                        </th>
                                        <th><?php echo e(__('Module')); ?> </th>
                                        <th><?php echo e(__('Permissions')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input align-middle ischeck payable_checkall"  data-id="<?php echo e(str_replace(' ', '', str_replace('&', '', $module))); ?>" ></td>
                                            <td><label class="ischeck payable_checkall" data-id="<?php echo e(str_replace(' ', '', str_replace('&', '', $module))); ?>"><?php echo e(ucfirst($module)); ?></label></td>
                                            <td>
                                                <div class="row ">
                                                    <?php if(in_array($module.' report',(array) $permissions)): ?>
                                                        <?php if($key = array_search($module.' report',$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input payable_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Report',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('manage '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('manage '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input payable_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Manage',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('create '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input payable_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('edit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('edit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input payable_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input payable_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('show '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('show '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input payable_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--end kodingan baru-->
                <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="pills-home-tab">
                    <?php
                        $modules=['user','role','client','constant unit','constant tax','constant category','company settings'];
                       if(\Auth::user()->type == 'company'){
                           $modules[] = 'language';
                           $modules[] = 'permission';
                       }
                    ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if(!empty($permissions)): ?>
                                <h6 class="my-3"><?php echo e(__('Assign General Permission to Roles')); ?></h6>
                                <table class="table table-striped mb-0" id="">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input align-middle custom_align_middle" name="staff_checkall" id="staff_checkall" >
                                        </th>
                                        <th><?php echo e(__('Module')); ?> </th>
                                        <th><?php echo e(__('Permissions')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input align-middle ischeck staff_checkall"  data-id="<?php echo e(str_replace(' ', '', str_replace('&', '', $module))); ?>" ></td>
                                            <td><label class="ischeck staff_checkall" data-id="<?php echo e(str_replace(' ', '', str_replace('&', '', $module))); ?>"><?php echo e(ucfirst($module)); ?></label></td>
                                            <td>
                                                <div class="row ">
                                                    <?php if(in_array('view '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('view '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'View',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('add '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('add '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Add',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('move '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('move '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Move',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('manage '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('manage '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Manage',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('create '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('edit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('edit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('show '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('show '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>


                                                    <?php if(in_array('send '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('send '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Send',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('create payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income vs expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income vs expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income VS Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('loss & profit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('loss & profit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Loss & Profit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('tax '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('tax '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Tax',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('invoice '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('invoice '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Invoice',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('bill '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('bill '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Bill',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('duplicate '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('duplicate '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Duplicate',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('balance sheet '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('balance sheet '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Balance Sheet',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('ledger '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('ledger '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Ledger',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('trial balance '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('trial balance '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input staff_checkall isscheck_'.str_replace(' ', '', str_replace('&', '', $module)),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Trial Balance',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="crm" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <?php
                        $modules=['crm dashboard','lead','pipeline','lead stage','source','label','deal','stage','task','form builder','form response','contract','contract type'];
                    ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if(!empty($permissions)): ?>
                                <h6 class="my-3"><?php echo e(__('Assign CRM related Permission to Roles')); ?></h6>
                                <table class="table table-striped mb-0" id="">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input align-middle custom_align_middle" name="crm_checkall"  id="crm_checkall" >
                                        </th>
                                        <th><?php echo e(__('Module')); ?> </th>
                                        <th><?php echo e(__('Permissions')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input align-middle ischeck crm_checkall"  data-id="<?php echo e(str_replace(' ', '', $module)); ?>" ></td>
                                            <td><label class="ischeck crm_checkall" data-id="<?php echo e(str_replace(' ', '', $module)); ?>"><?php echo e(ucfirst($module)); ?></label></td>
                                            <td>
                                                <div class="row ">
                                                    <?php if(in_array('view '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('view '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'View',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('add '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('add '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Add',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('move '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('move '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Move',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('manage '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('manage '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Manage',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('create '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('edit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('edit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('show '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('show '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>


                                                    <?php if(in_array('send '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('send '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Send',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('create payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income vs expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income vs expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income VS Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('loss & profit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('loss & profit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Loss & Profit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('tax '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('tax '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Tax',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('invoice '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('invoice '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Invoice',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('bill '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('bill '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Bill',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('duplicate '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('duplicate '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Duplicate',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('balance sheet '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('balance sheet '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Balance Sheet',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('ledger '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('ledger '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Ledger',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('trial balance '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('trial balance '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input crm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Trial Balance',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="project" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <?php
                        $modules=['project dashboard','project','milestone','grant chart','project stage','timesheet','expense','project task','activity','CRM activity','project task stage','bug report','bug status'];
                    ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if(!empty($permissions)): ?>
                                <h6 class="my-3"><?php echo e(__('Assign Project related Permission to Roles')); ?></h6>
                                <table class="table table-striped mb-0" id="">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input align-middle custom_align_middle" name="project_checkall"  id="project_checkall" >
                                        </th>
                                        <th><?php echo e(__('Module')); ?> </th>
                                        <th><?php echo e(__('Permissions')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input align-middle ischeck project_checkall"  data-id="<?php echo e(str_replace(' ', '', $module)); ?>" ></td>
                                            <td><label class="ischeck project_checkall" data-id="<?php echo e(str_replace(' ', '', $module)); ?>"><?php echo e(ucfirst($module)); ?></label></td>
                                            <td>
                                                <div class="row ">
                                                    <?php if(in_array('view '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('view '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'View',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('add '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('add '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Add',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('move '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('move '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Move',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('manage '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('manage '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Manage',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('create '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('edit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('edit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('show '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('show '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>


                                                    <?php if(in_array('send '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('send '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Send',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('create payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income vs expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income vs expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income VS Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('loss & profit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('loss & profit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Loss & Profit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('tax '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('tax '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Tax',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('invoice '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('invoice '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Invoice',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('bill '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('bill '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Bill',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('duplicate '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('duplicate '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Duplicate',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('balance sheet '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('balance sheet '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Balance Sheet',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('ledger '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('ledger '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Ledger',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('trial balance '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('trial balance '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Trial Balance',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="hrmpermission" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <?php
                        $modules=['hrm dashboard','employee','employee profile','department','designation','branch','document type','document','payslip type','allowance','commission','allowance option','loan option','deduction option','loan','saturation deduction','other payment','overtime','set salary','pay slip','company policy','appraisal','goal tracking','goal type','indicator','event','meeting','training','trainer','training type','award','award type','resignation','travel','promotion','complaint','warning','termination','termination type','job application','job application note','job onBoard','job category','job','job stage','custom question','interview schedule','estimation','holiday','transfer','announcement','leave','leave type','attendance'];
                    ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if(!empty($permissions)): ?>
                                <h6 class="my-3"><?php echo e(__('Assign HRM related Permission to Roles')); ?></h6>
                                <table class="table table-striped mb-0" id="">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input align-middle custom_align_middle" name="hrm_checkall"  id="hrm_checkall" >
                                        </th>
                                        <th><?php echo e(__('Module')); ?> </th>
                                        <th><?php echo e(__('Permissions')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input align-middle ischeck hrm_checkall"  data-id="<?php echo e(str_replace(' ', '', $module)); ?>" ></td>
                                            <td><label class="ischeck hrm_checkall" data-id="<?php echo e(str_replace(' ', '', $module)); ?>"><?php echo e(ucfirst($module)); ?></label></td>
                                            <td>
                                                <div class="row ">
                                                    <?php if(in_array('view '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('view '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'View',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('add '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('add '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Add',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('move '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('move '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Move',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('manage '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('manage '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Manage',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('create '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('edit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('edit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('show '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('show '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>


                                                    <?php if(in_array('send '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('send '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Send',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('create payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income vs expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income vs expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income VS Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('loss & profit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('loss & profit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Loss & Profit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('tax '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('tax '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Tax',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('invoice '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('invoice '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Invoice',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('bill '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('bill '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Bill',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('duplicate '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('duplicate '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Duplicate',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('balance sheet '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('balance sheet '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Balance Sheet',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('ledger '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('ledger '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Ledger',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('trial balance '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('trial balance '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input hrm_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Trial Balance',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <?php
                        $modules=['account dashboard','proposal','invoice','bill','revenue','payment','proposal product','invoice product','bill product','goal','credit note','debit note','bank account','bank transfer','transaction','customer','vender','constant custom field','assets','chart of account','journal entry','report'];
                    ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if(!empty($permissions)): ?>
                                <h6 class="my-3"><?php echo e(__('Assign Account related Permission to Roles')); ?></h6>
                                <table class="table table-striped mb-0" id="">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input align-middle custom_align_middle" name="account_checkall"  id="account_checkall" >
                                        </th>
                                        <th><?php echo e(__('Module')); ?> </th>
                                        <th><?php echo e(__('Permissions')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input align-middle ischeck account_checkall"  data-id="<?php echo e(str_replace(' ', '', $module)); ?>" ></td>
                                            <td><label class="ischeck account_checkall" data-id="<?php echo e(str_replace(' ', '', $module)); ?>"><?php echo e(ucfirst($module)); ?></label></td>
                                            <td>
                                                <div class="row ">
                                                    <?php if(in_array('view '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('view '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'View',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('add '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('add '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Add',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('move '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('move '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Move',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('manage '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('manage '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Manage',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('create '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('edit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('edit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('show '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('show '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>


                                                    <?php if(in_array('send '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('send '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Send',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('create payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('income vs expense '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('income vs expense '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Income VS Expense',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('loss & profit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('loss & profit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Loss & Profit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('tax '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('tax '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Tax',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('invoice '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('invoice '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Invoice',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('bill '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('bill '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Bill',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('duplicate '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('duplicate '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Duplicate',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('balance sheet '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('balance sheet '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Balance Sheet',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('ledger '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('ledger '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Ledger',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('trial balance '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('trial balance '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input account_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Trial Balance',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pos" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <?php
                        $modules=['purchase','pos'];
                    ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if(!empty($permissions)): ?>
                                <h6 class="my-3"><?php echo e(__('Assign POS related Permission to Roles')); ?></h6>
                                <table class="table table-striped mb-0" id="">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input align-middle custom_align_middle" name="pos_checkall"  id="pos_checkall" >
                                        </th>
                                        <th><?php echo e(__('Module')); ?> </th>
                                        <th><?php echo e(__('Permissions')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td><input type="checkbox" class="form-check-input align-middle ischeck pos_checkall"  data-id="<?php echo e(str_replace(' ', '', $module)); ?>" ></td>
                                            <td><label class="ischeck pos_checkall" data-id="<?php echo e(str_replace(' ', '', $module)); ?>"><?php echo e(ucfirst($module)); ?></label></td>
                                            <td>

                                                <div class="row ">
                                                    <?php if(in_array('view '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('view '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'View',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('add '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('add '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Add',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('manage '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('manage '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Manage',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('create '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('edit '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('edit '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('show '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('show '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>


                                                    <?php if(in_array('send '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('send '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Send',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(in_array('create payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('create payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Create Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(in_array('delete payment '.$module,(array) $permissions)): ?>
                                                        <?php if($key = array_search('delete payment '.$module,$permissions)): ?>
                                                            <div class="col-md-3 custom-control custom-checkbox">
                                                                <?php echo e(Form::checkbox('permissions[]',$key,$role->permission, ['class'=>'form-check-input project_checkall isscheck_'.str_replace(' ', '', $module),'id' =>'permission'.$key])); ?>

                                                                <?php echo e(Form::label('permission'.$key,'Delete Payment',['class'=>'custom-control-label'])); ?><br>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal-footer">
    <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Update')); ?>" class="btn  btn-primary">
</div>

<?php echo e(Form::close()); ?>


<script>
    $(document).ready(function () {
        /**start kodingan baru**/
        $("#logistic_checkall").click(function(){
            $('.logistic_checkall').not(this).prop('checked', this.checked);
        });
        $("#procurement_checkall").click(function(){
            $('.procurement_checkall').not(this).prop('checked', this.checked);
        });
        $("#payable_checkall").click(function(){
            $('.payable_checkall').not(this).prop('checked', this.checked);
        });
        /**end kodingan baru**/
        $("#staff_checkall").click(function(){
            $('.staff_checkall').not(this).prop('checked', this.checked);
        });
        $("#crm_checkall").click(function(){
            $('.crm_checkall').not(this).prop('checked', this.checked);
        });
        $("#project_checkall").click(function(){
            $('.project_checkall').not(this).prop('checked', this.checked);
        });
        $("#hrm_checkall").click(function(){
            $('.hrm_checkall').not(this).prop('checked', this.checked);
        });
        $("#account_checkall").click(function(){
            $('.account_checkall').not(this).prop('checked', this.checked);
        });
        $("#pos_checkall").click(function(){
            $('.pos_checkall').not(this).prop('checked', this.checked);
        });
        $(".ischeck").click(function(){
            var ischeck = $(this).data('id');
            $('.isscheck_'+ ischeck).prop('checked', this.checked);
        });
    });
</script>
<?php /**PATH C:\xampp\htdocs\herp\resources\views/role/edit.blade.php ENDPATH**/ ?>