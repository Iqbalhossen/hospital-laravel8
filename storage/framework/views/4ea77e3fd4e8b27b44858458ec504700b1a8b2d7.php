<?php $__env->startSection('content'); ?>
    <style>
        .select2-selection {
            height: 40px !important;
        }

    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Add New App</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <a href="<?php echo e(URL::to('/admin/appointment/list')); ?>" class="btn btn-success">
                                        Appointment List
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo e(URL::to('/admin/appointment/add-store')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-6">
                                    <select class="select2 custom-select form-control" name="service_id">
                                        <option selected>Select One</option>
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($service->name); ?>">
                                                <?php echo e($service->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">
                                    Patient
                                </label>
                                <div class="col-sm-6">
                                    <select required class="custom-select" name="patient_id">
                                        <option selected>Select One</option>
                                        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($patient->patient_id); ?>">
                                                <?php echo e($patient->name); ?> - <?php echo e($patient->rfid); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">
                                    Doctor
                                </label>
                                <div class="col-sm-6">
                                    <select required required onchange="loadSlot()" class="custom-select" name="doctor_id"
                                        id="doctor_id">
                                        <option selected>Select One</option>
                                        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($doctor->userId); ?>">
                                                <?php echo e($doctor->dname); ?> -- (<?php echo e($doctor->sname); ?> - Specialist)
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <fieldset class="form-group row">
                                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Appoint Date</legend>
                                <div class="col-sm-6">
                                    <input onchange="loadSlot()" id="datepicker" class="form-control"
                                        name="appoint_date" />
                                    <input required type="hidden" id="slot_value" name="slot_id">
                                </div>
                            </fieldset>
                            <script>
                                function loadSlot() {
                                    $.ajax({
                                        url: "<?php echo e(URL::to('/admin/appointment/load-slot')); ?>",
                                        type: "GET",
                                        data: {
                                            date: $('#datepicker').val(),
                                            doctor: $('#doctor_id').val()
                                        },
                                        success: function(data) {
                                            $("#slot").html(data);
                                        }
                                    });
                                }
                            </script>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Slot</label>
                                <div id="slot" class="col-sm-10">
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Details</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="details">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Waiver</label>
                                <div class="col-sm-10">
                                    <input style="margin-left: -48%;" type="checkbox" class="form-control"
                                        id="inputPassword3" name="is_waiver">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateSlot(id) {
            let sbuttons = document.getElementsByClassName('slot-button');
            for (let i = 0; i < sbuttons.length; i++) {
                if (sbuttons[i].classList.contains('btn-warning')) {
                    sbuttons[i].classList.remove('btn-warning');
                    sbuttons[i].classList.add('btn-success');
                }
            }
            document.getElementById('slot_value').value = id;
            document.getElementById('sl-' + id).classList.remove('btn-success');
            document.getElementById('sl-' + id).classList.add('btn-warning');

        }
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({
                tags: true
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/appointment/add_new_appointment.blade.php ENDPATH**/ ?>