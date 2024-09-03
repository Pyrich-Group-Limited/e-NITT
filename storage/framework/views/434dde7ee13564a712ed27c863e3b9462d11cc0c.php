<?php echo e(Form::model($customField, array('route' => array('custom-field.update', $customField->id), 'method' => 'PUT'))); ?>

<div class="modal-body">
    <div class="row">
        <div class="form-group col-md-12">
            <?php echo e(Form::label('name',__('Custom Field Name'),['class'=>'form-label'])); ?>

            <?php echo e(Form::text('name',null,array('class'=>'form-control','required'=>'required'))); ?>

        </div>

    </div>
</div>

    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn  btn-light" data-bs-dismiss="modal">
        <input type="submit" value="<?php echo e(__('Update')); ?>" class="btn  btn-primary">
    </div>
<?php echo e(Form::close()); ?>

<?php /**PATH C:\xampp\htdocs\nitt erp\resources\views/customFields/edit.blade.php ENDPATH**/ ?>