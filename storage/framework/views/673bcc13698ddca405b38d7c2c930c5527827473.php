<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Assign Appointment</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <a href="<?php echo e('/admin/appointment/list'); ?>" class="btn btn-success">Appointment List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?php echo e(session('success')); ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><?php echo e(session('error')); ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php //dd($appointments);
                        ?>

                        <form method="post" action="<?php echo e(URL::to('/admin/appointment/assign')); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <input type="number" name="appointment_id" value=<?php echo e($appointments[0]->id); ?> hidden />
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Patient Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" readonly="true"
                                        value="<?php echo e($appointments[0]->user_name); ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Patient Phone</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" readonly="true"
                                        value="<?php echo e($appointments[0]->phone); ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Details</label>
                                <div class="col-sm-6">
                                    <input id="name" type="text" class="form-control" readonly="true"
                                        value="<?php echo e($appointments[0]->details); ?>" />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="assign_doctor" class="col-sm-2 col-form-label">Assign Doctor*</label>
                                <div class="col-sm-6">
                                    <select onchange="loadSlot()" class="custom-select" name="doctor_id" id="doctor_id">
                                        <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($select = $doc->userId == $appointments[0]->doctor_id ? 'selected' : ''); ?>

                                            <option value=<?php echo e($doc->userId); ?> <?php echo e($select); ?>>
                                                <?php echo e($doc->dname); ?> - (<?php echo e($doc->sname); ?> Specialist)
                                                <!-- - <?php echo e($doc->userId); ?> - <?php echo e($appointments[0]->doctor_id); ?> -->
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('assign_doctor')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('assign_doctor')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <fieldset class="form-group row">
                                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Appoint Date</legend>
                                <div class="col-sm-6">
                                    <input
                                        value="<?php echo e(Carbon\Carbon::parse($appointments[0]->appoint_at)->format('Y-m-d')); ?>"
                                        onchange="loadSlot()" id="datepicker" class="form-control" name="appoint_date" />
                                    <input type="hidden" id="slot_value" name="slot_id" value="<?php echo e($slot_id); ?>">
                                </div>
                            </fieldset>

                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">Document</label>
                              <div class="col-sm-6">
                                <input type="file" id="document" name="document" class="form-control" />
                                <?php if($appointments[0]->document != null): ?>
                                    <a href="<?php echo e(asset('uploads/'.$appointments[0]->document)); ?>" download>Download</a>
                                <?php endif; ?>
                              </div>
                          </div>
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
                                    <?php echo $__env->make('admin.appointment.slot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
            document.getElementById('sl-' + id).classList.remove('btn-danger');

            document.getElementById('sl-' + id).classList.add('btn-warning');

        }
        updateSlot(<?php echo e($slot_id); ?>);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/appointment/appoint_assign_form.blade.php ENDPATH**/ ?>