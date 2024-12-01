<div class="row">
    <div class="col-md-12">
        <div class="card">


            <div class="card-header">
                <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Course List</h4>
                    <form action="<?php echo base_url() . 'addcourse' ?>" method="get">
                        <button class="btn-primary btn-sm" type="submit">Add Course</button>
                    </form>
                </div>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter">
                        <thead class="text-primary">
                            <tr>
                                <th>
                                    Route ID
                                </th>
                                <th>
                                    From
                                </th>
                                <th>
                                    To
                                </th>
                                <th>
                                    Vessel
                                </th>
                                <th>
                                    Departure Time
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>