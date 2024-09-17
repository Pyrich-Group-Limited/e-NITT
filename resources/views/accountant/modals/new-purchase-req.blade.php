<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="" class="form-label">Date</label>
                <input type="date" class="form-control" required>
                @error('date')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="" class="form-label">From:</label>
                <input type="text" class="form-control" required>
                @error('name')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
                @enderror
            </div>
        </div>

        <div class="form-group col-md-12">
            <label for="" class="form-label">Department</label>
            <select name="" id="" class="form-control">
                <option value="">--Select--</option>
                <option value="">Admin</option>
                <option value="">Procurement</option>
                <option value="">Finance</option>
            </select>
            @error('role')
            <small class="invalid-role" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </small>
            @enderror
        </div>

        <div class="form-group col-md-12">
            <label for="" class="form-label">Unit</label>
            <select name="" id="" class="form-control">
                <option value="">--Select Unit--</option>
                <option value="">Unit A</option>
                <option value="">Unit B</option>
                <option value="">Unit C</option>
            </select>
            @error('role')
            <small class="invalid-role" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </small>
            @enderror
        </div>
        <div class="form-group col-md-12">
            <label for="" class="form-label">Branch/Liason Office</label>
            <select name="" id="" class="form-control">
                <option value="">--Select--</option>
                <option value="">Kaduna</option>
                <option value="">Gombe</option>
                <option value="">Abuja</option>
            </select>
            @error('role')
            <small class="invalid-role" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </small>
            @enderror
        </div>
    </div>

</div>

<div class="modal-footer">
    <input type="button" value="{{__('Cancel')}}" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{__('Save')}}" class="btn  btn-primary">
</div>
