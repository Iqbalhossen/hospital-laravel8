<?php $__env->startSection('content'); ?>
    <!-- /.card-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Patient List</b>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table class="table table-bordered table-striped" id="d-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>RFID</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Blood</th>
                                    <th>Gender</th>
                                    <th>Total Appointment</th>
                                    <?php if(request()->has('dashboard')): ?>

                                        <th>Action</th>
                                    <?php else: ?>
                                        <th>Status</th>
                                        <th>Action</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($patient->user->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($patient->phone); ?>

                                        </td>
                                        <td>
                                            <?php echo e($patient->rfid); ?>

                                        </td>
                                        <td>
                                            <?php echo e($patient->user->email); ?>

                                        </td>
                                        <td>
                                            <?php echo e($patient->address); ?>

                                        </td>
                                        <td>
                                            <?php
                                            if ($patient->blood == 1) {
                                                echo 'A+';
                                            } elseif ($patient->blood == 2) {
                                                echo 'A-';
                                            } elseif ($patient->blood == 3) {
                                                echo 'B+';
                                            } elseif ($patient->blood == 4) {
                                                echo 'B-';
                                            } elseif ($patient->blood == 5) {
                                                echo 'AB+';
                                            } elseif ($patient->blood == 6) {
                                                echo 'AB-';
                                            } elseif ($patient->blood == 7) {
                                                echo 'O+';
                                            } elseif ($patient->blood == 8) {
                                                echo 'O-';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php if($patient->gender == 1): ?>
                                                <b class="text-success">
                                                    Male
                                                </b>
                                            <?php elseif($patient->gender == 2): ?>
                                                <b class="text-primary">
                                                    Female
                                                </b>
                                            <?php else: ?>
                                                <b class="text-danger">
                                                    Undefined
                                                </b>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e($patient->user->appointments->count()); ?>

                                        </td>
                                        <?php if(request()->has('dashboard')): ?>
                                            <td>
                                                <a class="btn btn-warning btn-sm"
                                                    href="<?php echo e(URL::to('/admin/patient/show/' . $patient->patient_id)); ?>">
                                                    View
                                                </a>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <?php if($patient->status == 1): ?>
                                                    <b class="text-success">
                                                        Active
                                                    </b>
                                                <?php elseif($patient->status == 0): ?>
                                                    <b class="text-danger">
                                                        In-active
                                                    </b>
                                                <?php else: ?>
                                                    <b class="text-danger">
                                                        Block
                                                    </b>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="dropdown float-right">
                                                    <a class="btn btn-warning btn-sm"
                                                        href="<?php echo e('/admin/patient/rfid/' . $patient->patient_id); ?>">
                                                        Add RFID
                                                    </a>
                                                    <a class="btn btn-info btn-sm"
                                                        href="<?php echo e('/admin/patient/edit/' . $patient->id . '/' . $patient->patient_id); ?>">
                                                        Edit
                                                    </a> <br />
                                                    <a class="btn btn-success btn-sm my-1"
                                                        href="<?php echo e('/admin/patient/change-status/' . $patient->id); ?>">
                                                        Change status
                                                    </a> <br />
                                                    <a class="btn btn-danger btn-sm"
                                                        href="<?php echo e('/admin/patient/delete/' . $patient->id); ?>">
                                                        Delete
                                                    </a> <br />

                                                </div>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/patient/list_patient.blade.php ENDPATH**/ ?>