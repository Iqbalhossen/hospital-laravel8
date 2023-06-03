<form action="<?php echo e(url()->current()); ?>">
    <div class="form-row">
        <div class="form-group col-md-5">
            <div class="row">
                <label class="col-sm-2 control-label">From:</label>
                <div class="col-sm-10">
                    <input type="date" name="from" id="from" class="form-control" value="<?php echo e(request()->from ?? ''); ?>" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="form-group col-md-5">
            <div class="row">
                <label class="col-sm-2 control-label">To:</label>
                <div class="col-sm-10">
                    <input type="date" name="to" id="to" class="form-control" value="<?php echo e(request()->to ?? ''); ?>" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="form-group col-md-2">
            <button type="submit" class="btn btn-success">Filter</button>
        </div>
    </div>
</form><?php /**PATH /home/suoxuahd/public_html/resources/views/filter-form.blade.php ENDPATH**/ ?>