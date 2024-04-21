@section('page_name', 'Article')
@extends('admin_partials.layout')
@section('content')


    <div class="container-fluid">
        <div class="container-xl py-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add">Add</button>
        </div>
    </div>
    <div class="modal modal-fade" id="modal_add">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Add Employees
                    </h5>
                </div>
                <form action="" id="form_add">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-md-12 mb-3">
                                <label for="" class="form-label">Position</label>
                                <input type="text" class="form-control form-control-md" name="position">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">First Name</label>
                                <input type="text" class="form-control form-control-md" name="first_name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Last Name</label>
                                <input type="text" class="form-control form-control-md" name="last_name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Middle Name</label>
                                <input type="text" class="form-control form-control-md" name="middle_name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Suffix</label>
                                <input type="text" class="form-control form-control-md" name="suffix">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Date Hired</label>
                                <input type="date" class="form-control form-control-md" name="date_hired">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Birthday</label>
                                <input type="date" class="form-control form-control-md" name="birthday">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Birthplace</label>
                                <input type="text" class="form-control form-control-md" name="birthplace">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Civil Status</label>
                                <select name="civil_status" class="form-select" id="">
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="separated">Separated</option>
                                </select>


                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Gender</label>

                                <select name="gender" id="" class="form-select">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-lable">Mobile Number</label>
                                <input type="text" class="form-control form-control-md" name="mobile_number">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            console.log('ca')
            $("#form_add").submit(function(event) {
                event.preventDefault();
                var form = $(this)
                var formData = new FormData(form[0]);

                $.ajax({
                    type: "POST",
                    url: "/employees/store",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response)
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        console.log(xhr, status, error);
                    }
                });
            })
        });
    </script>

@endsection
